@extends('layout.main')

@section('Titulo', "Historia Clínica")

@section('content')

    @php
        $general = $historia['general'];
        $odontologica = $historia['odontologica'];
        $odontograma = $historia['odontogramas'];
    @endphp

    <div class="row my-3 historiaClinica">
        <h1 class="col-8 offset-2 text-center my-3">Historia Clínica</h1>
        <div class="col-5 offset-1">
            <h3 class="my-2 fw-bold">Historia General</h3>
            <p>¿Padre con vida?: <span>{{$general->padreConVida ? 'Si' : 'No'}}</span></p>
            <p>Enfermedad que padece o padeció: <span>{{$general->enfermedadPadre}}</span></p>
            <p>¿Madre con vida?: <span>{{$general->madreConVida ? 'Si' : 'No'}}</span></p>
            <p>Enfermedad que padece o padeció: <span>{{$general->enfermedadMadre}}</span></p>
            <p>¿Tiene hermanos?: <span>{{$general->tieneHermanos ? 'Si' : 'No'}}</span></p>
            @if ($general->tieneHermanos)
                <p>¿Hermanos sanos?: <span>{{$general->hermanosSanos ? 'Si' : 'No'}}</span></p>
                <p>Enfermedad de los Hermanos: <span>{{$general->enfermedadHermanos}}</span></p>
            @endif           
            <p>¿Hace algún tratamiento médico?: <span>{{$general->tratamientoMedico ? 'Si' : 'No'}}</span></p>
            @if ($general->tratamientoMedico)
                <p>Tratamiento médico: <span>{{$general->tipoTratamientoMedico}}</span></p>
            @endif
            <p>¿Qué medicamento(s) consume habitualmente?: <span>{{$general->medicamentosHabituales}}</span></p>
            <p>¿Qué medicamento(s) ha consumido en los últimos 5 años?: <span>{{$general->medicamentosEnCincoAnios}}</span></p>
            <p>¿Realiza algún deporte?: <span>{{$general->realizaDeporte ? 'Si' : 'No'}}</span></p>
            @if ($general->realizaDeporte)
                <p>¿Qué deporte realiza?: <span>{{$general->tipoDeporte}}</span></p>
                <p>¿Nota algún malestar al realizarlo?: <span>{{$general->malestarDeporte}}</span></p>
            @endif
            <p>¿Es alergico a alguna droga?: <span>{{$general->alergiaMedicamento ? 'Si' : 'No'}}</span></p>
            @if ($general->alergiaMedicamento)
                <p>Alergias: <span>{{$general->medicinaAlergia}}</span></p>
            @endif
            <p>Cuando se le saca una muela o se lastima, ¿Cicatriza bien?: <span>{{$general->cicatrizadoCorrecto ? 'Si' : 'No'}}</span></p>
            <p>¿Sangrado Intenso?: <span>{{$general->sangradoIntenso ? 'Si' : 'No'}}</span></p>
            <p>¿Tiene problemas de colágeno (hiperlaxitud)?: <span>{{$general->hiperlaxitud ? 'Si' : 'No'}}</span></p>
            <p>¿Antecedentes de fiebre reumática?: <span>{{$general->fiebreReumatica ? 'Si' : 'No'}}</span></p>
            @if ($general->fiebreReumatica)
                <p>¿Se protege con algún medicamento?: <span>{{$general->medicacionFiebre}}</span></p>
            @endif
            <p>¿Es diabético?: <span>{{$general->diabetico ? 'Si' : 'No'}}</span></p>
            @if ($general->diabetico)
                <p>¿Está controlado?: <span>{{$general->controlDiabetes ? 'Si' : 'No'}}</span></p>
                @if ($general->controlDiabetes)
                    <p>¿Qué medicamento(s) se controla?: <span>{{$general->medicacionDiabetes}}</span></p>
                @endif
            @endif
            <p>¿Tiene algún problema cardiaco?: <span>{{$general->problemaCardiaco ? 'Si' : 'No'}}</span></p>
            @if ($general->problemaCardiaco)
                <p>¿Qué problema?: <span>{{$general->tipoProblemaCardiaco}}</span></p>
            @endif
            <p>¿Toma seguido aspirina y/o anticoagulante?: <span>{{$general->tomaAnticoagulantes ? 'Si' : 'No'}}</span></p>
            @if ($general->tomaAnticoagulantes)
                <p>¿Qué toma?: <span>{{$general->tipoAnticoagulantes}}</span></p>
                <p>¿Con qué frecuencia?: <span>{{$general->frecuenciaAnticoagulantes}}</span></p>
            @endif
            <p>¿Tiene presión alta?: <span>{{$general->presionAlta ? 'Si' : 'No'}}</span></p>
            <p>¿Chagas?: <span>{{$general->chagas ? 'Si' : 'No'}}</span></p>
            @if ($general->chagas)
                <p>¿Está en tratamiento?: <span>{{$general->tratamientoChagas ? 'Si' : 'No'}}</span></p>
            @endif
            <p>¿Tiene problemas renales?: <span>{{$general->problemaRenal ? 'Si' : 'No'}}</span></p>
            <p>¿Tiene ulceras gástricas?: <span>{{$general->ulceraGastrica ? 'Si' : 'No'}}</span></p>
            <p>¿Tuvo hepatitis?: <span>{{$general->hepatitis ? 'Si' : 'No'}}</span></p>
            @if ($general->hepatitis)
                <p>¿De qué tipo?: <span>{{$general->tipoHepatitis}}</span></p>
            @endif
            <p>¿Tiene algún problema hepático?: <span>{{$general->problemaHepatico ? 'Si' : 'No'}}</span></p>
            @if ($general->problemaHepatico)
                <p>¿De qué tipo?: <span>{{$general->tipoProblemaHepatico}}</span></p>
            @endif
            <p>¿Tuvo convulsiones?: <span>{{$general->convulsiones ? 'Si' : 'No'}}</span></p>
            <p>¿Es epiléptico?: <span>{{$general->epileptico ? 'Si' : 'No'}}</span></p>
            @if ($general->epileptico)
                <p>Medicación que toma: <span>{{$general->medicamentoEpilepsia}}</span></p>
            @endif
            <p>¿Ha tenido sífilis o gonorrea?: <span>{{$general->sifilisGonorrea ? 'Si' : 'No'}}</span></p>
            <p>¿Otra enfermedad infecto-contagiosa?: <span>{{$general->enfermedadInfectoContagiosa}}</span></p>
            <p>¿Tuvo transfusiones?: <span>{{$general->transfusiones ? 'Si' : 'No'}}</span></p>
            <p>¿Fue operado alguna vez?: <span>{{$general->fueOperado ? 'Si' : 'No'}}</span></p>
            @if ($general->fueOperado)
                <p>¿De qué fue operado?: <span>{{$general->tipoOperacion}}</span></p>
                <p>¿Cuándo fue operado?: <span>{{$general->fechaOperacion}}</span></p>
            @endif
            <p>¿Tiene algun problema respiratorio?: <span>{{$general->problemaRespiratorio ? 'Si' : 'No'}}</span></p>
            @if ($general->problemaRespiratorio)
                <p>¿Cuál?: <span>{{$general->tipoProblemaRespiratorio}}</span></p>
            @endif
            <p>¿Fuma?: <span>{{$general->fuma ? 'Si' : 'No'}}</span></p>
            <p>¿Está embarazada?: <span>{{$general->embarazo ? 'Si' : 'No'}}</span></p>
            @if ($general->embarazo)
                <p>¿De cúantos meses?: <span>{{$general->mesesEmbarazo}}</span></p>
            @endif
            <p>¿Hay alguna otra enfermedad o recomendación de su médico que quiera dejar constancia?: <span>{{$general->enfermedadRecomendacionMedica ? 'Si' : 'No'}}</span></p>
            @if ($general->enfermedadRecomendacionMedica)
                <p>¿Cuál?: <span>{{$general->tipoRecomendacionMedica}}</span></p>
            @endif
            <p>¿Realiza algun tipo de tratamiento homeopático, acupuntura, otros?: <span>{{$general->tratamientoAlternativo ? 'Si' : 'No'}}</span></p>
            @if ($general->tratamientoAlternativo)
                <p>¿Cuál?: <span>{{$general->tipoTratamientoAlternativo}}</span></p>
            @endif
            <p>Médico clínico: <span>{{$general->medicoClinico}}</span></p>
            <p>Clínica/Hospital en caso de hacer falta derivación: <span>{{$general->clinicaHospitalDerivacion}}</span></p>
        </div>
        <div class="col-5">
            <h3 class="my-2 fw-bold">Historia Odontológica</h3>
            <p>¿Por qué asistió a la consulta?: <span>{{$odontologica->razonConsulta}}</span></p>
            <p>¿Consultó antes con algún otro profesional?: <span>{{$general->consultaPrevia ? 'Si' : 'No'}}</span></p>
            @if ($odontologica->consultaPrevia)
                <p>Detalles de consulta previa: <span>{{$odontologica->detallesConsultaPrevia}}</span></p>
            @endif
            <p>¿Tomó algún medicamento?: <span>{{$odontologica->medicamentoPrevio ? 'Si' : 'No'}}</span></p>
            @if ($odontologica->medicamentoPrevio)
                <p>Nombre de los medicamentos: <span>{{$odontologica->nombreMedicamentoPrevio}}</span></p>
                <p>¿Desde cuando?: <span>{{$odontologica->inicioMedicamentoPrevio}}</span></p>
            @endif
            <p>¿Ha tenido dolor?: <span>{{$odontologica->refiereDolor ? 'Si' : 'No'}}</span></p>
            @if ($odontologica->refiereDolor)
                <h4 class="text-center">Tipos de Dolor</h4>
                <ul class="list-group">
                    @if ($odontologica->dolorSuave) <li class="list-group-item">Suave</li> @endif
                    @if ($odontologica->dolorModerado) <li class="list-group-item">Moderado</li> @endif
                    @if ($odontologica->dolorIntenso) <li class="list-group-item">Intenso</li> @endif
                    @if ($odontologica->dolorTemporario) <li class="list-group-item">Temporario</li> @endif
                    @if ($odontologica->dolorIntermitente) <li class="list-group-item">Intermitente</li> @endif
                    @if ($odontologica->dolorContinuo) <li class="list-group-item">Continuo</li> @endif
                    @if ($odontologica->dolorEspontaneo) <li class="list-group-item">Espontaneo</li> @endif
                    @if ($odontologica->dolorProvocado) <li class="list-group-item">Provocado</li> @endif
                    @if ($odontologica->dolorAlFrio) <li class="list-group-item">Al frio</li> @endif
                    @if ($odontologica->dolorALCalor) <li class="list-group-item">Al calor</li> @endif
                    @if ($odontologica->dolorLocalizado)
                    <li class="list-group-item">Localizado - {{$odontologica->lugarDolorLocalizado}}</li>
                    @endif
                    @if ($odontologica->dolorIrradiado) 
                    <li class="list-group-item">Irradiado - {{$odontologica->lugarDolorIrradiado}}</li> 
                    @endif
                </ul>
                <p>¿Puede calmarlo con algo?<span>{{$odontologica->calmarDolor ? 'Si' : 'No'}}</span></p>
                @if ($odontologica->calmarDolor)
                    <p>Solucion para el dolor:<span>{{$odontologica->solucionCalmarDolor}}</span></p>
                @endif
            @endif
            <hr>
            <p>¿Sufrió algún golpe en los dientes?: <span>{{$odontologica->golpeEnDientes ? 'Si' : 'No'}}</span></p>
            @if ($odontologica->golpeEnDientes)
                <p>¿Cuándo?:<span>{{$odontologica->fechaGolpeDientes}}</span></p>
                <p>¿Cómo se produjo?: <span>{{$odontologica->situacionGolpeDientes}}</span></p>
            @endif
            <p>¿Se le fracturó algún diente?: <span>{{$odontologica->fracturaEnDientes ? 'Si' : 'No'}}</span></p>
            @if ($odontologica->fracturaEnDientes)
                <p>¿Cuál?:<span>{{$odontologica->dientesFracturados}}</span></p>
                <p>¿Recibió algún tratamiento?:<span>{{$odontologica->tratamientoFractura}}</span></p>
            @endif

            <p>¿Tiene dificultad para hablar?: <span>{{$odontologica->dificultadParaHablar ? 'Si' : 'No'}}</span></p>
            <p>¿Tiene dificultad para masticar?: <span>{{$odontologica->dificultadParaMasticar ? 'Si' : 'No'}}</span></p>
            <p>¿Tiene dificultad para abrir la boca?: <span>{{$odontologica->dificultadParaAbrir ? 'Si' : 'No'}}</span></p>
            <p>¿Tiene dificultad para tragar los alimentos?: <span>{{$odontologica->dificultadParaTragar ? 'Si' : 'No'}}</span></p>
            <h4 class="text-center">Anormalidades</h4>
            <ul class="list-group">
                @if ($odontologica->anormalLengua) <li class="list-group-item">En labios</li> @endif
                @if ($odontologica->anormalLengua) <li class="list-group-item">En lengua</li> @endif
                @if ($odontologica->anormalPaladar) <li class="list-group-item">En paladar</li> @endif
                @if ($odontologica->anormalPisoBoca) <li class="list-group-item">En piso de boca</li> @endif
                @if ($odontologica->anormalCarrillos) <li class="list-group-item">Carrillos</li> @endif
                @if ($odontologica->anormalRebordes) <li class="list-group-item">Rebordes</li> @endif
                @if ($odontologica->anormalTrigono) <li class="list-group-item">Trigono</li> @endif
                @if ($odontologica->manchas) <li class="list-group-item">Manchas</li> @endif
                @if ($odontologica->abultamientosTejido) <li class="list-group-item">Abultamiento en los Tejidos</li> @endif
                @if ($odontologica->ulceraciones) <li class="list-group-item">Ulceraciones</li> @endif
                @if ($odontologica->ampollas) <li class="list-group-item">Ampollas</li> @endif
                @if ($odontologica->otrasLesionesPresentadas) <li class="list-group-item">{{$odontologica->otrasLesionesPresentadas}}</li> @endif
            </ul>
            <p>¿Le sangran las encias?: <span>{{$odontologica->sangradoEncias ? 'Si' : 'No'}}</span></p>
            @if ($odontologica->sangradoEncias)
                <p>¿Cuándo?:<span>{{$odontologica->situacionSangradoEncias}}</span></p>
            @endif
            <p>¿Sale pus de algún lugar de su boca?: <span>{{$odontologica->pusEnBoca ? 'Si' : 'No'}}</span></p>
            @if ($odontologica->pusEnBoca)
                <p>¿Dónde?:<span>{{$odontologica->ubicacionPus}}</span></p>
            @endif
            <hr>
            <p>¿Tiene movilidad en sus dientes?: <span>{{$odontologica->movilidadEnDientes ? 'Si' : 'No'}}</span></p>
            <p>¿Al morder siente altos los dientes?: <span>{{$odontologica->dientesAltos ? 'Si' : 'No'}}</span></p>
            <p>¿Ha tenido la cara inchada?: <span>{{$odontologica->caraInchada ? 'Si' : 'No'}}</span></p>
            @if ($odontologica->caraInchada)
                <ul class="list-group">
                    @if ($odontologica->inchazonHielo) <li class="list-group-item">Se puso Hielo</li> @endif
                    @if ($odontologica->inchazonCalor) <li class="list-group-item">Se puso Calor</li> @endif
                    @if ($odontologica->inchazonOtros) <li class="list-group-item">Otro: {{$odontologica->inchazonOtros}}</li> @endif
                </ul>
            @endif
            <p>Momentos de azucar diario:<span>{{$odontologica->momentosAzucar}}</span></p>
            <p>Indice de Placa:<span>{{$odontologica->indicePlaca}}</span></p>
            <p>Higiene Bucal:<span>{{$odontologica->higieneBucal}}</span></p>
            
            <hr>
            <p>¿Presencia de Sarro?: <span>{{$odontologica->presentaSarro ? 'Si' : 'No'}}</span></p>
            <p>¿Enfermedad Periodental?: <span>{{$odontologica->enfermedadPeriodental ? 'Si' : 'No'}}</span></p>
            <p>Diagnostico Presuntivo:<span>{{$odontologica->diagnosticoPresuntivo}}</span></p>
            <p>Plan de Tratamiento:<span>{{$odontologica->planDeTratamiento}}</span></p>
            <p>Observaciones:<span>{{$odontologica->observaciones}}</span></p>

        </div>
    </div>

    <div class="row odontograma">
        <div class="col-10 offset-1">
            <hr>
            <table class="table table-light table-striped table-hover table-bordered text-center">
                <thead>
                    <th>Diente</th>
                    <th>Carie</th>
                    <th>Restauracion</th>
                    <th>Ausente</th>
                    <th>Protesis Fija</th>
                    <th>Protesis Removible</th>
                    <th>Corona</th>
                    <th>Nota</th>
                </thead>
                <tbody>
                    @foreach ($odontograma as $odi)
                        <tr>
                            <td>{{$odi->idDiente}}</td>
                            <td>{{$odi->carie ? 'Si' : 'No'}}</td>
                            <td>{{$odi->restauracion ? 'Si' : 'No'}}</td>
                            <td>{{$odi->ausente ? 'Si' : 'No'}}</td>
                            <td>{{$odi->protesisFija ? 'Si' : 'No'}}</td>
                            <td>{{$odi->protesisRemovible ? 'Si' : 'No'}}</td>
                            <td>{{$odi->corona ? 'Si' : 'No'}}</td>
                            <td class="text-justify">{{$odi->notaDiente}}</td>
                        </tr>
                    @endforeach
                </tbody> 
            </table>
        </div>
    </div>

@endsection