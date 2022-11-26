<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Servicio;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorreoCrear;
use App\Mail\CorreoConfirmacion;
use Illuminate\Support\Carbon;
use Session;


class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::all();
        $empleados = Empleado::all();
        $servicios = Servicio::all();

        return view('citas.citaIndex', compact('citas', 'empleados', 'servicios'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUsuario()
    {
        $empleados = Empleado::all();
        $servicios = Servicio::all();

        return view('agendar-cita', compact('empleados', 'servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Se asignan en 'empleados' todas las instancias del modelo Empleado y se mandan a la vista Create
        $empleados = Empleado::all();

        //Se asignan en 'servicios' todas las instancias del modelo Servicio y se mandan a la vista Create
        $servicios = Servicio::all();
        
        return view('citas.citaCreate', compact('empleados', 'servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $rules = [
            'nombreUsuarioCita' => 'required | max:255',
            'emailUsuarioCita' => 'required | max:255 | email',
            'fechaUsuarioCita' => 'required | date',
            'celularUsuarioCita' => 'required | digits:10 | numeric',
            /** Se valida si la hora de la cita ya está ocupada en la fecha preporcionada*/
            'horaUsuarioCita' => ['required', Rule::unique('citas')->where(function ($query) use ($request){
                return $query->where('fechaUsuarioCita', $request->fechaUsuarioCita)
                            ->where('horaUsuarioCita', $request->horaUsuarioCita)
                            ->where('empleado_id', $request->empleado_id);
            })],
            'empleado_id' => 'required|exists:empleados,id',
            'g-recaptcha-response' => function($attribute, $value, $fail){
                $secretKey = config('services.recaptcha.secret');
                $response = $value;
                $userIP = $_SERVER['REMOTE_ADDR'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
                $response = \file_get_contents($url);
                $response = json_decode($response);
                if (!$response->success) {
                    Session::flash('g-recaptcha-response', 'Por favor, marca el recaptcha');
                    Session::flash('alert-class', 'alert-danger');
                    $fail($attribute. 'Recaptcha de Google fallido');
                }
            },
        ];
            
        $messages = [
            'nombreUsuarioCita.required' => 'El nombre del usuario es obligatorio',
            'nombreUsuarioCita.max' => 'El nombre del usuario supera los 255 carácteres',
            'emailUsuarioCita.required' => 'El email del usuario es obligatorio',
            'emailUsuarioCita.max' => 'El email del usuario supera los 255 carácteres',
            'emailUsuarioCita.email' => 'El email del usuario no tiene un formato válido',
            'fechaUsuarioCita.required' => 'La fecha del usuario es obligatoria',
            'fechaUsuarioCita.date' => 'La fecha del usuario no tiene un formato válido de fecha',
            'celularUsuarioCita.required' => 'El celular del usuario es obligatorio',
            'celularUsuarioCita.digits' => 'El celular del usuario debe ser de 10 digitos',
            'celularUsuarioCita.numeric' => 'El celular del usuario solo acepta carácteres numéricos',
            'horaUsuarioCita.required' => 'La hora del usuario es obligatoria',
            'horaUsuarioCita.unique' => 'Este horario y Barbero no están disponibles, elija otra fecha, hora o barbero disponibles',
            'empleado_id.required' => 'El nombre del barbero es obligatorio',
            'empleado_id.exists' => 'Selecciona un barbero existente',
        ];

        $this->validate($request, $rules, $messages);
        
        /* $request->validate([
            'nombreUsuarioCita' => 'required | max:255',
            'emailUsuarioCita' => 'required | max:255 | email',
            'confirmacionUsuarioCita' => 'required | max:255',
            'fechaUsuarioCita' => 'required | date',
            'calificacionUsuarioCita' => 'required | max:10 | min:0',
            'celularUsuarioCita' => 'required | digits:10 | numeric',
            'horaUsuarioCita' => 'required',
            'empleado_id' => 'required|exists:empleados,id',
        ]); */

        $cita = Cita::create($request->all());

        /*Entramos a la instancia "cita" en su método "servicios"
        para tener acceso a vincular a la cita con los servicios */
        $cita->servicios()->attach($request->servicios_id);

        // Funcion enviar correo
        $this->confirmarCita($request);

        $notification = 'La cita se agendó correctamente.';

        return redirect('/cita')->with(compact('notification'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        return view('citas.citaShow', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        //Se asignan en 'empleados' todas las instancias del modelo Empleado y se mandan a la vista Edit
        $empleados = Empleado::all();

        //Se asignan en 'servicios' todas las instancias del modelo Servicio y se mandan a la vista Edit
        $servicios = Servicio::all();

        return view('citas.citaEdit', compact('cita', 'empleados', 'servicios'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {

        $rules = [
            'nombreUsuarioCita' => 'required | max:255',
            'emailUsuarioCita' => 'required | max:255 | email',
            'fechaUsuarioCita' => 'required | date',
            'celularUsuarioCita' => 'required | digits:10 | numeric',
            /** Se valida si la hora de la cita ya está ocupada en la fecha proporcionada y que no sea igual al ID de la cita, 
              * ya que sino es así se tomaría la hora y fecha de la cita a modificar, lo que nos daría que nunca estaría disponible */
            'horaUsuarioCita' => ['required', Rule::unique('citas')->where(function ($query) use ($request, $cita){
                return $query->where('fechaUsuarioCita', $request->fechaUsuarioCita)
                            ->where('horaUsuarioCita', $request->horaUsuarioCita)
                            ->where('empleado_id', $request->empleado_id)
                            ->whereNotIn('id', [$cita->id]);
            })],
            'empleado_id' => 'required|exists:empleados,id',
        ];
        
        $messages = [
            'nombreUsuarioCita.required' => 'El nombre del usuario es obligatorio',
            'nombreUsuarioCita.max' => 'El nombre del usuario supera los 255 carácteres',
            'emailUsuarioCita.required' => 'El email del usuario es obligatorio',
            'emailUsuarioCita.max' => 'El email del usuario supera los 255 carácteres',
            'emailUsuarioCita.email' => 'El email del usuario no tiene un formato válido',
            'fechaUsuarioCita.required' => 'La fecha del usuario es obligatoria',
            'fechaUsuarioCita.date' => 'La fecha del usuario no tiene un formato válido de fecha',
            'celularUsuarioCita.required' => 'El celular del usuario es obligatorio',
            'celularUsuarioCita.digits' => 'El celular del usuario debe ser de 10 digitos',
            'celularUsuarioCita.numeric' => 'El celular del usuario solo acepta carácteres numéricos',
            'horaUsuarioCita.required' => 'La hora del usuario es obligatoria',
            'empleado_id.required' => 'El nombre del barbero es obligatorio',
            'empleado_id.exists' => 'Selecciona un barbero existente',
        ];

        $this->validate($request, $rules, $messages);

        /* $request->validate([
            'nombreUsuarioCita' => 'required | max:255',
            'emailUsuarioCita' => 'required | max:255 | email',
            'confirmacionUsuarioCita' => 'required | max:255',
            'fechaUsuarioCita' => 'required | date',
            'calificacionUsuarioCita' => 'required | max:10 | min:0',
            'celularUsuarioCita' => 'required | digits:10 | numeric',
            'horaUsuarioCita' => 'required',
            'empleado_id' => 'required|exists:empleados,id',
        ]); */

        /* Actualiza la información de la tabla de la cita, exceptuando las columnas 'token', 'method' y 'servicios_id'
            Trabaja sobre la tabla Empleado */
        Cita::where('id', $cita->id)->update($request->except('_token', '_method', 'servicios_id'));

        /* Sincroniza la información que el usuario selecciona con respecto a lo que existe dentro de la base de datos
            Trabaja sobre la tabla Pivote */
        $cita->servicios()->sync($request->servicios_id);

        //Redirecciona a la vista show
        return redirect()->route('cita.show', $cita->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        $deleteName = $cita->nombreUsuarioCita;
        $cita->delete();

        return redirect('/cita');
    }

    public function confirmarCita(Request $request)
    {          
        setlocale(LC_TIME,"es_ES");
        $cita = $request->all(); 
        $fecha = $cita['fechaUsuarioCita'];
        // FECHA EN ESPAÑOL
        $fecha = strftime("%A, %d de %B del %Y", strtotime($fecha));
        $hora = $cita['horaUsuarioCita'];
        $hora = date('h:i A', strtotime($hora));
        $cita['fechaUsuarioCita'] = $fecha;
        $cita['horaUsuarioCita'] = $hora;
        $empleado = Empleado::find($cita['empleado_id'])->nombreEmpleado;
        $servicios = $cita['servicios_id'];
        $servicios = Servicio::find($servicios)->pluck('nombreServicio');
        // dd($cita, $empleado, $servicios);
        Mail::to($cita['emailUsuarioCita'])->send(new CorreoCrear($cita, $empleado, $servicios));
    }

    public function citasProximas($fechas)
    {
        // dd($fechas);
        if($fechas == 'hoy'){
            $citas = Cita::where('fechaUsuarioCita', Carbon::today())->get();
        }else if($fechas == 'semana'){
            $citas = Cita::whereBetween('fechaUsuarioCita', [Carbon::today(), Carbon::today()->addDays(7)])->get();
        }else if($fechas == 'mañana'){
            $citas = Cita::where('fechaUsuarioCita', Carbon::tomorrow())->get();
        }
        $empleados = Empleado::all();
        $servicios = Servicio::all();

        return view('citas.citaProxima', compact('citas', 'empleados', 'servicios'));
    }

    public function recordarCita($id, Request $request)
    {         
        $cita = Cita::find($id);
        setlocale(LC_TIME,"es_ES");
        $fecha_format = $cita['fechaUsuarioCita'];
        // FECHA EN ESPAÑOL
        $fecha = strftime("%A, %d de %B del %Y", strtotime($fecha_format));
        $hora_format = $cita['horaUsuarioCita'];
        $hora = date('h:i A', strtotime($hora_format));
        $cita['fechaUsuarioCita'] = $fecha;
        $cita['horaUsuarioCita'] = $hora;
        // dd($cita);
        Mail::to($cita['emailUsuarioCita'])->send(new CorreoConfirmacion($cita));
        $cita['fechaUsuarioCita'] = $fecha_format;
        $cita['horaUsuarioCita'] = $hora_format;
        //Actualiza el estado de la cita

        Cita::where('id', $cita->id)->update(['confirmacionUsuarioCita' => 1]);


        //Redireccionar atras
        return redirect()->back();
    }

    public function confirmarCorreo($id, $status){
        $cita = Cita::find($id);
        $cita->statusUsuarioCita = $status;
        $cita->save();
        return view('citas.respuestaConfirmacion', compact('status'));
    }

    public function storeUsuario(Request $request)
    {
        
        $rules = [
            'nombreUsuarioCita' => 'required | max:255',
            'emailUsuarioCita' => 'required | max:255 | email',
            'fechaUsuarioCita' => 'required | date',
            'celularUsuarioCita' => 'required | digits:10 | numeric',
            /** Se valida si la hora de la cita ya está ocupada en la fecha preporcionada*/
            'horaUsuarioCita' => ['required', Rule::unique('citas')->where(function ($query) use ($request){
                return $query->where('fechaUsuarioCita', $request->fechaUsuarioCita)
                            ->where('horaUsuarioCita', $request->horaUsuarioCita)
                            ->where('empleado_id', $request->empleado_id);
            })],
            'empleado_id' => 'required|exists:empleados,id',
            'g-recaptcha-response' => function($attribute, $value, $fail){
                $secretKey = config('services.recaptcha.secret');
                $response = $value;
                $userIP = $_SERVER['REMOTE_ADDR'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
                $response = \file_get_contents($url);
                $response = json_decode($response);
                if (!$response->success) {
                    Session::flash('g-recaptcha-response', 'Por favor, marca el recaptcha');
                    Session::flash('alert-class', 'alert-danger');
                    $fail($attribute. 'Recaptcha de Google fallido');
                }
            },
        ];
            
        $messages = [
            'nombreUsuarioCita.required' => 'El nombre del usuario es obligatorio',
            'nombreUsuarioCita.max' => 'El nombre del usuario supera los 255 carácteres',
            'emailUsuarioCita.required' => 'El email del usuario es obligatorio',
            'emailUsuarioCita.max' => 'El email del usuario supera los 255 carácteres',
            'emailUsuarioCita.email' => 'El email del usuario no tiene un formato válido',
            'fechaUsuarioCita.required' => 'La fecha del usuario es obligatoria',
            'fechaUsuarioCita.date' => 'La fecha del usuario no tiene un formato válido de fecha',
            'celularUsuarioCita.required' => 'El celular del usuario es obligatorio',
            'celularUsuarioCita.digits' => 'El celular del usuario debe ser de 10 digitos',
            'celularUsuarioCita.numeric' => 'El celular del usuario solo acepta carácteres numéricos',
            'horaUsuarioCita.required' => 'La hora del usuario es obligatoria',
            'empleado_id.required' => 'El nombre del barbero es obligatorio',
            'empleado_id.exists' => 'Selecciona un barbero existente',
        ];

        $this->validate($request, $rules, $messages);
        
        $cita = Cita::create($request->all());

        /*Entramos a la instancia "cita" en su método "servicios"
        para tener acceso a vincular a la cita con los servicios */
        $cita->servicios()->attach($request->servicios_id);

        // Funcion enviar correo
        $this->confirmarCita($request);

        $notification = 'La cita se agendó correctamente.';

        return redirect('/agendar-cita')->with(compact('notification'));
    }

}
