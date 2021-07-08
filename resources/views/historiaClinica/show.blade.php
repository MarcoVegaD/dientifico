@extends('layout.main')

@section('Titulo', "Historia Clínica")

@section('content')

    @php
        $general = $historia['general'];
        $odontologica = $historia['odontologica'];
        $odontograma = $historia['odontogramas'];
    @endphp

    <div class="row my-3">
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
        </div>
    </div>

    {{$odontograma}}

@endsection