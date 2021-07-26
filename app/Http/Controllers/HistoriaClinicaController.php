<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\HistoriaClinicaGeneral;
use App\Models\HistoriaClinicaOdontologica;
use App\Models\Odontograma;
use App\Models\RelacionPacienteOdontograma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HistoriaClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idUsuario)
    {
        return view('historiaClinica.create', compact('idUsuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {

        $historial = $r->validate([

            //GENERAL
            'enfermedadPadre' => 'max:240',
            'enfermedadMadre' => 'max:240',
            'enfermedadHermanos' => 'max:240',
            'tipoDeporte' => 'max:240',
            'malestarDeporte' => 'max:240',
            'medicinaAlergia' => 'max:240',
            'medicacionFiebre' => 'max:240',
            'medicacionDiabetes' => 'max:240',
            'tipoProblemaCardiaco' => 'max:240',
            'frecuenciaAnticoagulantes' => 'max:240',
            'tipoHepatitis' => 'max:5',
            'tipoProblemaHepatico' => 'max:240',
            'medicamentoEpilepsia' => 'max:240',
            'enfermedadInfectoContagiosa' => 'max:240',
            'tipoOperacion' => 'max:240',
            'fechaOperacion' => 'nullable|date',
            'tipoProblemaRespiratorio' => 'max:240',
            'mesesEmbarazo' => 'nullable|digits:1',
            'tipoRecomendacionMedica' => 'nullable',
            'tipoTratamientoAlternativo' => 'max:240',
            'medicoClinico' => 'max:240',
            'clinicaHospitalDerivacion' => 'max:240',
            //ODONTOLOGICA
            'razonConsulta' => 'nullable',
            'detallesConsultaPrevia' => 'nullable',
            'nombreMedicamentoPrevio' => 'nullable',
            'inicioMedicamentoPrevio' => 'nullable|date',
            'lugarDolorLocalizado' => 'max:240',
            'lugarDolorIrradiado' => 'max:240',
            'solucionCalmarDolor' => 'max:240',
            'fechaGolpeDientes' => 'nullable|date',
            'situacionGolpeDientes' => 'nullable',
            'dientesFracturados' => 'max:240',
            'tratamientoFractura' => 'nullable',
            'otrasLesionesPresentadas' => 'nullable',
            'situacionSangradoEncias' => 'max:240',
            'ubicacionPus' => 'max:240',
            'inchazonOtros' => 'max:240',
            'momentosAzucar' => 'max:240',
            'indicePlaca' => 'max:240',
            'higieneBucal' => 'max:240',
            'diagnosticoPresuntivo' => 'nullable',
            'planDeTratamiento' => 'nullable',

        ]);

        DB::beginTransaction();

        $general = new HistoriaClinicaGeneral;
        $general->padreConVida = $r->filled('padreConVida');
        $general->enfermedadPadre = $r->enfermedadPadre;
        $general->madreConVida = $r->filled('madreConVida');
        $general->enfermedadMadre = $r->enfermedadMadre;
        $general->tieneHermanos = $r->filled('tieneHermanos');
        $general->hermanosSanos = $r->filled('hermanosSanos');
        $general->enfermedadHermanos = $r->enfermedadHermanos;
        $general->tratamientoMedico = $r->filled('tratamientoMedico');
        $general->tipoTratamientoMedico = $r->tipoTratamientoMedico;
        $general->medicamentosHabituales = $r->medicamentosHabituales;
        $general->medicamentosEnCincoAnios = $r->medicamentosEnCincoAnios;
        $general->realizaDeporte = $r->filled('realizaDeporte');
        $general->tipoDeporte = $r->tipoDeporte;
        $general->malestarDeporte = $r->malestarDeporte;
        $general->alergiaMedicamento = $r->filled('alergiaMedicamento');
        $general->medicinaAlergia = $r->medicinaAlergia;
        $general->cicatrizadoCorrecto = $r->filled('cicatrizadoCorrecto');
        $general->sangradoIntenso = $r->filled('sangradoIntenso');
        $general->hiperlaxitud = $r->filled('hiperlaxitud');
        $general->fiebreReumatica = $r->filled('fiebreReumatica');
        $general->medicacionFiebre = $r->medicacionFiebre;
        $general->diabetico = $r->filled('diabetico');
        $general->controlDiabetes = $r->filled('controlDiabetes');
        $general->medicacionDiabetes = $r->medicacionDiabetes;
        $general->problemaCardiaco = $r->filled('problemaCardiaco');
        $general->tipoProblemaCardiaco = $r->tipoProblemaCardiaco;
        $general->tomaAnticoagulantes = $r->filled('tomaAnticoagulantes');
        $general->tipoAnticoagulantes = $r->tipoAnticoagulantes;
        $general->frecuenciaAnticoagulantes = $r->frecuenciaAnticoagulantes;
        $general->presionAlta = $r->filled('presionAlta');
        $general->chagas = $r->filled('chagas');
        $general->tratamientoChagas = $r->filled('tratamientoChagas');
        $general->problemaRenal = $r->filled('problemaRenal');
        $general->ulceraGastrica = $r->filled('ulceraGastrica');
        $general->hepatitis = $r->filled('hepatitis');
        $general->tipoHepatitis = $r->tipoHepatitis;
        $general->problemaHepatico = $r->filled('problemaHepatico');
        $general->tipoProblemaHepatico = $r->tipoProblemaHepatico;
        $general->convulsiones = $r->filled('convulsiones');
        $general->epileptico = $r->filled('epileptico');
        $general->medicamentoEpilepsia = $r->medicamentoEpilepsia;
        $general->sifilisGonorrea = $r->filled('sifilisGonorrea');
        $general->enfermedadInfectoContagiosa = $r->enfermedadInfectoContagiosa;
        $general->transfusiones = $r->filled('transfusiones');
        $general->fueOperado = $r->filled('fueOperado');
        $general->tipoOperacion = $r->tipoOperacion;
        $general->fechaOperacion = $r->fechaOperacion;
        $general->problemaRespiratorio = $r->filled('problemaRespiratorio');
        $general->tipoProblemaRespiratorio = $r->tipoProblemaRespiratorio;
        $general->fuma = $r->filled('fuma');
        $general->embarazo = $r->filled('embarazo');
        $general->mesesEmbarazo = $r->mesesEmbarazo;
        $general->enfermedadRecomendacionMedica = $r->filled('enfermedadRecomendacionMedica');
        $general->tipoRecomendacionMedica = $r->tipoRecomendacionMedica;
        $general->tratamientoAlternativo = $r->filled('tratamientoAlternativo');
        $general->tipoTratamientoAlternativo = $r->tipoTratamientoAlternativo;
        $general->medicoClinico = $r->medicoClinico;
        $general->clinicaHospitalDerivacion = $r->clinicaHospitalDerivacion;
        $responseGeneral = $general->save();

        //Obtiene el usuario al que se le va a agregar la historia clinica
        $user = User::findOrFail($r->idUsuario);

        if($responseGeneral){
            //Obtiene el ID del historial agregado para guardarlo en el usuario
            $genId = HistoriaClinicaGeneral::select('id')->orderByDesc('id')->limit(1)->get();
            $user->idHistoriaGeneral = $genId[0]->id;
            $user->save();
        }
        else{
            DB::rollback();
            return back()->with('fail', 'Hubo un error en el historial general');
        }

        $odontologico = new HistoriaClinicaOdontologica;
        $odontologico->razonConsulta = $r->razonConsulta;
        $odontologico->consultaPrevia = $r->filled('consultaPrevia');
        $odontologico->detallesConsultaPrevia = $r->detallesConsultaPrevia;
        $odontologico->medicamentoPrevio = $r->filled('medicamentoPrevio');
        $odontologico->nombreMedicamentoPrevio = $r->nombreMedicamentoPrevio;
        $odontologico->inicioMedicamentoPrevio = $r->inicioMedicamentoPrevio;
        $odontologico->refiereDolor = $r->filled('refiereDolor');
        $odontologico->dolorSuave = $r->filled('dolorSuave');
        $odontologico->dolorModerado = $r->filled('dolorModerado');
        $odontologico->dolorIntenso = $r->filled('dolorIntenso');
        $odontologico->dolorTemporario = $r->filled('dolorTemporario');
        $odontologico->dolorIntermitente = $r->filled('dolorIntermitente');
        $odontologico->dolorContinuo = $r->filled('dolorContinuo');
        $odontologico->dolorEspontaneo = $r->filled('dolorEspontaneo');
        $odontologico->dolorProvocado = $r->filled('dolorProvocado');
        $odontologico->dolorAlFrio = $r->filled('medicamentoPrevio');
        $odontologico->dolorAlCalor = $r->filled('dolorAlCalor');
        $odontologico->dolorLocalizado = $r->filled('dolorLocalizado');
        $odontologico->lugarDolorLocalizado = $r->lugarDolorLocalizado;
        $odontologico->dolorIrradiado = $r->filled('dolorIrradiado');
        $odontologico->lugarDolorIrradiado = $r->lugarDolorIrradiado;
        $odontologico->calmarDolor = $r->filled('calmarDolor');
        $odontologico->solucionCalmarDolor = $r->solucionCalmarDolor;
        $odontologico->golpeEnDientes = $r->filled('golpeEnDientes');
        $odontologico->fechaGolpeDientes = $r->fechaGolpeDientes;
        $odontologico->situacionGolpeDientes = $r->situacionGolpeDientes;
        $odontologico->fracturaEnDientes = $r->filled('fracturaEnDientes');
        $odontologico->dientesFracturados = $r->dientesFracturados;
        $odontologico->tratamientoFractura = $r->tratamientoFractura;
        $odontologico->dificultadParaHablar = $r->filled('dificultadParaHablar');
        $odontologico->dificultadParaMasticar = $r->filled('dificultadParaMasticar');
        $odontologico->dificultadParaAbrir = $r->filled('dificultadParaAbrir');
        $odontologico->dificultadParaTragar = $r->filled('dificultadParaTragar');
        $odontologico->anormalLabios = $r->filled('anormalLabios');
        $odontologico->anormalLengua = $r->filled('anormalLengua');
        $odontologico->anormalPaladar = $r->filled('anormalPaladar');
        $odontologico->anormalPisoBoca = $r->filled('anormalPisoBoca');
        $odontologico->anormalCarrillos = $r->filled('anormalCarrillos');
        $odontologico->anormalRebordes = $r->filled('anormalRebordes');
        $odontologico->anormalTrigono = $r->filled('anormalTrigono');
        $odontologico->anormalRetromolar = $r->filled('anormalRetromolar');
        $odontologico->manchas = $r->filled('manchas');
        $odontologico->abultamientosTejido = $r->filled('abultamientosTejido');
        $odontologico->ulceraciones = $r->filled('ulceraciones');
        $odontologico->ampollas = $r->filled('ampollas');
        $odontologico->otrasLesionesPresentadas = $r->otrasLesionesPresentadas;
        $odontologico->sangradoEncias = $r->filled('sangradoEncias');
        $odontologico->situacionSangradoEncias = $r->situacionSangradoEncias;
        $odontologico->pusEnBoca = $r->filled('pusEnBoca');
        $odontologico->ubicacionPus = $r->ubicacionPus;
        $odontologico->movilidadEnDientes = $r->filled('movilidadEnDientes');
        $odontologico->dientesAltos = $r->filled('dientesAltos');
        $odontologico->caraInchada = $r->filled('caraInchada');
        $odontologico->inchazonHielo = $r->filled('inchazonHielo');
        $odontologico->inchazonCalor = $r->filled('inchazonCalor');
        $odontologico->inchazonOtros = $r->inchazonOtros;
        $odontologico->momentosAzucar = $r->momentosAzucar;
        $odontologico->indicePlaca = $r->indicePlaca;
        $odontologico->higieneBucal = $r->higieneBucal;
        $odontologico->presentaSarro = $r->filled('presentaSarro');
        $odontologico->enfermedadPeriodental = $r->filled('enfermedadPeriodental');
        $odontologico->diagnosticoPresuntivo = $r->diagnosticoPresuntivo;
        $odontologico->planDeTratamiento = $r->planDeTratamiento;
        $odontologico->observaciones = $r->observaciones;
        $responseOdon = $odontologico->save();

        if($responseOdon){
            //Obtiene el ID del historial agregado para guardarlo en el usuario
            $odonId = HistoriaClinicaOdontologica::select('id')->orderByDesc('id')->limit(1)->get();
            $user->idHistoriaOdontologica = $odonId[0]->id;
            $user->save();
        }
        else{
            DB::rollback();
            return back()->with('fail', 'Hubo un error en el historial odontologico');
        }



        //Checa si existe algun diente agregado
        if(isset($r->odontograma)){
            
            //Checa cuando dientes se van a agregar al odontograma es decir cuantas filas a agregar
            $numDientes = count($r->odontograma['idDiente']);
            
            //Obtiene el numero mayor que se encuentre en los odontogramas para luego sumarle 1 que será el nuevo a agregar
            $relaPacOdo = RelacionPacienteOdontograma::select('idOdontograma')->orderByDesc('idOdontograma')->limit(1)->get()[0]->idOdontograma;
            $relaPacOdo++;

            $nuevaRelaPaOdo = new RelacionPacienteOdontograma;
            $nuevaRelaPaOdo->idOdontograma = $relaPacOdo;
            $nuevaRelaPaOdo->idUsuario = $r->idUsuario;
            $responseNuevaRel = $nuevaRelaPaOdo->save();

            if(!$responseNuevaRel){
                DB::rollback();
                return back()->with('fail', 'Hubo un error en la relacion Paciente-Odontograma');
            }

            $validadorDientes = false;

            for($i = 1; $i<=$numDientes; $i++){

                $odonto = new Odontograma;
                $odonto->idDiente = $r->odontograma['idDiente'][$i];
                $odonto->idDiagrama = $relaPacOdo;
                $odonto->carie = isset($r->odontograma['carie'][$i]) == 1 ? true : false;
                $odonto->restauracion = isset($r->odontograma['restauracion'][$i]) == 1 ? true : false;
                $odonto->ausente = isset($r->odontograma['ausente'][$i]) == 1 ? true : false;
                $odonto->protesisFija = isset($r->odontograma['protesisFija'][$i]) == 1 ? true : false;
                $odonto->protesisRemovible = isset($r->odontograma['carie'][$i]) == 1 ? true : false;
                $odonto->corona = isset($r->odontograma['corona'][$i]) == 1 ? true : false;
                $odonto->notaDiente = $r->odontograma['notaDiente'][$i];
                $odStatus = $odonto->save();

                if(!$odStatus){
                    $validadorDientes = true;
                }

            }

            if($validadorDientes){
                DB::rollback();
                return back()->with('fail', 'Hubo un error en el odontograma');
            }

        }

        DB::commit();

        return redirect('pacientes')->with('success', 'Nuevo historial agregado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

        $hisID = User::findOrFail($id);
        $hisGeneral = $hisID->historiaClinicaGeneral;
        $hisOdon = $hisID->historiaClinicaOdontologica;
        $odontograma = $hisID->odontogramas;

        $historia = ['general' => $hisGeneral, 'odontologica' => $hisOdon, 'odontogramas' => $odontograma];

        return view('historiaClinica.show')->with('historia', $historia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
