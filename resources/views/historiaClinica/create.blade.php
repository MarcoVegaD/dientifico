@extends('layout.main')

@section('Titulo', "Nueva Historia Clínica")

@section('content')

    <h1 class="text-center my-5">Agregar Historia Clínica</h1>

    @if (session('fail'))
        <div class="alert alert-danger col-8 offset-2">{{session('fail')}}</div>
    @endif

   <form method="POST" action="{{route('historiaClinicaStore', $idUsuario)}}" class="row formPacientes mb-5">
        @csrf
        <div class="col-5 offset-1">
            <h3 class="my-2 fw-bold">Historia General</h3>
            {{-- onchange="document.querySelector('input[name=enfermedadPadre]').disabled = !this.checked;" --}}
            <input type="hidden" name="idUsuario" value="{{$idUsuario}}">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="padreConVida" {{ old('padreConVida') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="padreConVida">
                    ¿Padre con Vida?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="enfermedadPadre" class="form-control" value="{{old('enfermedadPadre')}}">
                <label for="enfermedadPadre">Enfermedad que padece o padeció</label>
                <span class="text-danger">@error('enfermedadPadre'){{$message}}@enderror</span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="madreConVida" {{ old('madreConVida') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="madreConVida">
                    ¿Madre con Vida?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="enfermedadMadre" class="form-control" value="{{old('enfermedadMadre')}}">
                <label for="enfermedadMadre">Enfermedad que padece o padeció</label>
                <span class="text-danger">@error('enfermedadMadre'){{$message}}@enderror</span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="tieneHermanos" {{ old('tieneHermanos') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="tieneHermanos">
                    ¿Tiene hermanos?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hermanosSanos" {{ old('hermanosSanos') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="hermanosSanos">
                    ¿Hermanos sanos?
                </label>
            </div>

            <hr>

            <div class="form-floating mb-3">
                <input type="text" name="enfermedadHermanos" class="form-control" value="{{old('enfermedadHermanos')}}">
                <label for="enfermedadHermanos">¿Padece de alguna enfermadad?</label>
                <span class="text-danger">@error('enfermedadHermanos'){{$message}}@enderror</span>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="tratamientoMedico" {{ old('tratamientoMedico') == 'on' ? 'checked' : '' }} onchange="document.querySelector('input[name=tipoTratamientoMedico]').disabled = !this.checked;">
                <label class="form-check-label" for="tratamientoMedico">
                    ¿Hace algún tratamiento médico?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="tipoTratamientoMedico" class="form-control" value="{{old('tipoTratamientoMedico')}}" disabled>
                <label for="tipoTratamientoMedico">¿Cuál?</label>
                <span class="text-danger">@error('tipoTratamientoMedico'){{$message}}@enderror</span>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" name="medicamentosHabituales">{{old('medicamentosHabituales')}}</textarea>
                <label for="medicamentosHabituales">¿Qué medicamento(s) consume habitualmente?</label>
                <span class="text-danger">@error('medicamentosHabituales'){{$message}}@enderror</span>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="medicamentosEnCincoAnios">{{old('medicamentosEnCincoAnios')}}</textarea>
                <label for="medicamentosEnCincoAnios">¿Qué medicamento(s) ha consumido en los últimos 5 años?</label>
                <span class="text-danger">@error('medicamentosEnCincoAnios'){{$message}}@enderror</span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="realizaDeporte" {{ old('realizaDeporte') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="realizaDeporte">
                    ¿Realiza algún deporte?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="tipoDeporte" class="form-control" value="{{old('tipoDeporte')}}">
                <label for="tipoDeporte">¿Cuál?</label>
                <span class="text-danger">@error('tipoDeporte'){{$message}}@enderror</span>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="malestarDeporte" class="form-control" value="{{old('malestarDeporte')}}">
                <label for="malestarDeporte">¿Nota algún malestar al realizarlo?</label>
                <span class="text-danger">@error('malestarDeporte'){{$message}}@enderror</span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="alergiaMedicamento" {{ old('alergiaMedicamento') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="alergiaMedicamento">
                    ¿Es alergico a alguna droga?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="medicinaAlergia" class="form-control" value="{{old('medicinaAlergia')}}">
                <label for="medicinaAlergia">¿Cuál(es)?</label>
                <span class="text-danger">@error('medicinaAlergia'){{$message}}@enderror</span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cicatrizadoCorrecto" {{ old('cicatrizadoCorrecto') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="cicatrizadoCorrecto">
                    Cuando le sacan una muela o se lastima, ¿cicatriza bien?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sangradoIntenso" {{ old('sangradoIntenso') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="sangradoIntenso">
                    ¿Sangra mucho?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hiperlaxitud" {{ old('hiperlaxitud') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="hiperlaxitud">
                    ¿Tiene problemas de colágeno (hiperlaxitud)?
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="fiebreReumatica" {{ old('fiebreReumatica') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="fiebreReumatica">
                    ¿Antecedentes de fiebre reumática?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="medicacionFiebre" class="form-control" value="{{old('medicacionFiebre')}}">
                <label for="medicacionFiebre">¿Se protege con alguna medicación?</label>
                <span class="text-danger">@error('medicacionFiebre'){{$message}}@enderror</span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="diabetico" {{ old('diabetico') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="diabetico">
                    ¿Es diabético?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="controlDiabetes" {{ old('controlDiabetes') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="controlDiabetes">
                    ¿Está controlado?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="medicacionDiabetes" class="form-control" value="{{old('medicacionDiabetes')}}">
                <label for="medicacionDiabetes">¿Con qué?</label>
                <span class="text-danger">@error('medicacionDiabetes'){{$message}}@enderror</span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="problemaCardiaco" {{ old('problemaCardiaco') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="problemaCardiaco">
                    ¿Tiene algún problema cardiaco?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="tipoProblemaCardiaco" class="form-control" value="{{old('tipoProblemaCardiaco')}}">
                <label for="tipoProblemaCardiaco">¿Cuál?</label>
                <span class="text-danger">@error('tipoProblemaCardiaco'){{$message}}@enderror</span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="tomaAnticoagulantes" {{ old('tomaAnticoagulantes') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="tomaAnticoagulantes">
                    ¿Toma seguido aspirina y/o anticoagulantes?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="tipoAnticoagulantes" class="form-control" value="{{old('tipoAnticoagulantes')}}">
                <label for="tipoAnticoagulantes">¿De qué tipo?</label>
                <span class="text-danger">@error('tipoAnticoagulantes'){{$message}}@enderror</span>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="frecuenciaAnticoagulantes" class="form-control" value="{{old('frecuenciaAnticoagulantes')}}">
                <label for="frecuenciaAnticoagulantes">¿Con qué frecuencia?</label>
                <span class="text-danger">@error('frecuenciaAnticoagulantes'){{$message}}@enderror</span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="presionAlta" {{ old('presionAlta') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="presionAlta">
                    ¿Sufre de presión alta?
                </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="chagas" {{ old('chagas') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="chagas">
                    ¿Sufre de Chagas?
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tratamientoChagas" {{ old('tratamientoChagas') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="tratamientoChagas">
                    ¿Está en tratamiento para ello?
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="problemaRenal" {{ old('problemaRenal') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="problemaRenal">
                    ¿Tiene problemas renales?
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="ulceraGastrica" {{ old('ulceraGastrica') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="ulceraGastrica">
                    ¿Tiene ulceras gastricas?
                </label>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="hepatitis" {{ old('hepatitis') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="hepatitis">
                    ¿Tuvo hepatitis?
                </label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="tipoHepatitis">
                  <option value="">Tipo de Hepatitis</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                </select>
                <label for="tipoHepatitis">¿De qué tipo?</label>
                <span class="text-danger">@error('tipoHepatitis'){{$message}}@enderror</span>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="problemaHepatico" {{ old('problemaHepatico') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="problemaHepatico">
                    ¿Tiene algún problema hepatico?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="tipoProblemaHepatico" class="form-control" value="{{old('tipoProblemaHepatico')}}">
                <label for="tipoProblemaHepatico">¿Cuál(es)?</label>
                <span class="text-danger">@error('tipoProblemaHepatico'){{$message}}@enderror</span>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="convulsiones" {{ old('convulsiones') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="convulsiones">
                    ¿Tuvo convulsiones?
                </label>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="epileptico" {{ old('epileptico') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="epileptico">
                    ¿Es epileptico?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="medicamentoEpilepsia" class="form-control" value="{{old('medicamentoEpilepsia')}}">
                <label for="medicamentoEpilepsia">¿Qué toma para ello?</label>
                <span class="text-danger">@error('medicamentoEpilepsia'){{$message}}@enderror</span>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="sifilisGonorrea" {{ old('sifilisGonorrea') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="sifilisGonorrea">
                    ¿Ha tenido sífilis o gonorrea?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="enfermedadInfectoContagiosa" class="form-control" value="{{old('enfermedadInfectoContagiosa')}}">
                <label for="enfermedadInfectoContagiosa">¿Otra enfermedad Infecto-Contagiosa?</label>
                <span class="text-danger">@error('enfermedadInfectoContagiosa'){{$message}}@enderror</span>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="transfusiones" {{ old('transfusiones') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="transfusiones">
                    ¿Ha tenido transfusiones?
                </label>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="fueOperado" {{ old('fueOperado') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="fueOperado">
                    ¿Ha sido operado?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="tipoOperacion" class="form-control" value="{{old('tipoOperacion')}}">
                <label for="tipoOperacion">¿De qué?</label>
                <span class="text-danger">@error('tipoOperacion'){{$message}}@enderror</span>
            </div>
            <div class="form-floating mb-3">
                <input type="date" name="fechaOperacion" class="form-control" value="{{old('fechaOperacion')}}">
                <label for="fechaOperacion">¿Cuando?</label>
                <span class="text-danger">@error('fechaOperacion'){{$message}}@enderror</span>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="problemaRespiratorio" {{ old('problemaRespiratorio') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="problemaRespiratorio">
                    ¿Tiene problemas respiratorios?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="tipoProblemaRespiratorio" class="form-control" value="{{old('tipoProblemaRespiratorio')}}">
                <label for="tipoProblemaRespiratorio">¿Cual o de qué tipo?</label>
                <span class="text-danger">@error('tipoProblemaRespiratorio'){{$message}}@enderror</span>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="fuma" {{ old('fuma') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="fuma">
                    ¿Fuma?
                </label>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="embarazo" {{ old('embarazo') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="embarazo">
                    ¿Está embarazada?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="mesesEmbarazo" class="form-control" min="0" max="9" value="{{old('mesesEmbarazo')}}">
                <label for="mesesEmbarazo">¿De cuantos meses?</label>
                <span class="text-danger">@error('mesesEmbarazo'){{$message}}@enderror</span>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="enfermedadRecomendacionMedica" {{ old('enfermedadRecomendacionMedica') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="enfermedadRecomendacionMedica">
                    ¿Hay alguna otra enfermedad o recomendacion de su médico que quiera dejar constancia?
                </label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="tipoRecomendacionMedica">{{old('tipoRecomendacionMedica')}}</textarea>
                <label for="tipoRecomendacionMedica">¿Cuál?</label>
                <span class="text-danger">@error('tipoRecomendacionMedica'){{$message}}@enderror</span>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="tratamientoAlternativo" {{ old('tratamientoAlternativo') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="tratamientoAlternativo">
                    ¿Realiza algun tipo de tratamiento homeopatico, acupuntura, otro?
                </label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" name="tipoTratamientoAlternativo" class="form-control" value="{{old('tipoTratamientoAlternativo')}}">
                <label for="tipoTratamientoAlternativo">¿Cuál o de que tipo?</label>
                <span class="text-danger">@error('tipoTratamientoAlternativo'){{$message}}@enderror</span>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="medicoClinico" class="form-control" value="{{old('medicoClinico')}}">
                <label for="medicoClinico">Medico clínico:</label>
                <span class="text-danger">@error('medicoClinico'){{$message}}@enderror</span>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="clinicaHospitalDerivacion" class="form-control" value="{{old('clinicaHospitalDerivacion')}}">
                <label for="clinicaHospitalDerivacion">Clínica/Hospital en caso de hacer falta derivación:</label>
                <span class="text-danger">@error('clinicaHospitalDerivacion'){{$message}}@enderror</span>
            </div>


        </div>
        {{-- HISTORIA ODONTOLOGICA --}}
        <div class="col-4">

            <h3 class="my-2 fw-bold">Historia Odontológica</h3>
            <div class="form-floating mb-3 mt-4">
                <textarea class="form-control" name="razonConsulta">{{old('razonConsulta')}}</textarea>
                <label for="razonConsulta">¿Por qué asistió a la consulta?</label>
                <span class="text-danger">@error('razonConsulta'){{$message}}@enderror</span>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="consultaPrevia" {{ old('consultaPrevia') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="consultaPrevia">
                    ¿Consultó antes con algún otro profesional?
                </label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="detallesConsultaPrevia">{{old('detallesConsultaPrevia')}}</textarea>
                <label for="detallesConsultaPrevia">¿Qué sucedió?</label>
                <span class="text-danger">@error('detallesConsultaPrevia'){{$message}}@enderror</span>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="medicamentoPrevio" {{ old('medicamentoPrevio') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="medicamentoPrevio">
                    ¿Tomó algún medicamento?
                </label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="nombreMedicamentoPrevio">{{old('nombreMedicamentoPrevio')}}</textarea>
                <label for="nombreMedicamentoPrevio">Nombre de los medicamentos:</label>
                <span class="text-danger">@error('nombreMedicamentoPrevio'){{$message}}@enderror</span>
            </div>
            <div class="form-floating mb-3">
                <input type="date" name="inicioMedicamentoPrevio" class="form-control" value="{{old('inicioMedicamentoPrevio')}}">
                <label for="inicioMedicamentoPrevio">¿Desde cuando?</label>
                <span class="text-danger">@error('inicioMedicamentoPrevio'){{$message}}@enderror</span>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="refiereDolor" {{ old('refiereDolor') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="refiereDolor">
                    ¿Ha tenido dolor?
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="dolorSuave" {{ old('dolorSuave') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dolorSuave">
                    Suave
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="dolorModerado" {{ old('dolorModerado') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dolorModerado">
                    Moderado
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="dolorIntenso" {{ old('dolorIntenso') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dolorIntenso">
                    Intenso
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="dolorTemporario" {{ old('dolorTemporario') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dolorTemporario">
                    Temporario
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="dolorIntermitente" {{ old('dolorIntermitente') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dolorIntermitente">
                    Intermitente
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="dolorContinuo" {{ old('dolorContinuo') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dolorContinuo">
                    Continuo
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="dolorEspontaneo" {{ old('dolorEspontaneo') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dolorEspontaneo">
                    Espontaneo
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="dolorProvocado" {{ old('dolorProvocado') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dolorProvocado">
                    Provocado
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="dolorAlFrio" {{ old('dolorAlFrio') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dolorAlFrio">
                    Al frio
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="dolorAlCalor" {{ old('dolorAlCalor') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dolorAlCalor">
                    Al calor
                </label>
            </div>
            <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" name="dolorLocalizado" {{ old('dolorLocalizado') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dolorLocalizado">
                    Localizado
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="lugarDolorLocalizado" class="form-control" value="{{old('lugarDolorLocalizado')}}">
                <label for="lugarDolorLocalizado">¿Dónde?</label>
                <span class="text-danger">@error('lugarDolorLocalizado'){{$message}}@enderror</span>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="dolorIrradiado" {{ old('dolorIrradiado') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dolorIrradiado">
                    Irradiado
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="lugarDolorIrradiado" class="form-control" value="{{old('lugarDolorIrradiado')}}">
                <label for="lugarDolorIrradiado">¿Dónde?</label>
                <span class="text-danger">@error('lugarDolorIrradiado'){{$message}}@enderror</span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="calmarDolor" {{ old('calmarDolor') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="calmarDolor">
                    ¿Puede calmarlo con algo?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="solucionCalmarDolor" class="form-control" value="{{old('solucionCalmarDolor')}}">
                <label for="solucionCalmarDolor">¿Con qué?</label>
                <span class="text-danger">@error('solucionCalmarDolor'){{$message}}@enderror</span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="golpeEnDientes" {{ old('golpeEnDientes') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="golpeEnDientes">
                    ¿Sufrió algún golpe en los dientes?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" name="fechaGolpeDientes" class="form-control" value="{{old('fechaGolpeDientes')}}">
                <label for="fechaGolpeDientes">¿Cuando?</label>
                <span class="text-danger">@error('fechaGolpeDientes'){{$message}}@enderror</span>
            </div>
            <div class="form-floating mb-3 mt-4">
                <textarea class="form-control" name="situacionGolpeDientes">{{old('situacionGolpeDientes')}}</textarea>
                <label for="situacionGolpeDientes">¿Cómo se produjo?</label>
                <span class="text-danger">@error('situacionGolpeDientes'){{$message}}@enderror</span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="golpeEnDientes" {{ old('golpeEnDientes') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="golpeEnDientes">
                    ¿Se le fracturó algún diente?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="dientesFracturados" class="form-control" value="{{old('dientesFracturados')}}">
                <label for="dientesFracturados">¿Cuál(es)?</label>
                <span class="text-danger">@error('dientesFracturados'){{$message}}@enderror</span>
            </div>
            <div class="form-floating mb-3 mt-4">
                <textarea class="form-control" name="tratamientoFractura">{{old('tratamientoFractura')}}</textarea>
                <label for="tratamientoFractura">¿Qué tratamiento recibió?</label>
                <span class="text-danger">@error('tratamientoFractura'){{$message}}@enderror</span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="dificultadParaHablar" {{ old('dificultadParaHablar') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dificultadParaHablar">
                    ¿Tiene dificultad para hablar?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="dificultadParaMasticar" {{ old('dificultadParaMasticar') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dificultadParaMasticar">
                    ¿Tiene dificultad para masticar?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="dificultadParaAbrir" {{ old('dificultadParaAbrir') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dificultadParaAbrir">
                    ¿Tiene dificultad para abrir la boca?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="dificultadParaTragar" {{ old('dificultadParaTragar') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dificultadParaTragar">
                    ¿Tiene dificultad para tragar los alimentos?
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="anormalLabios" {{ old('anormalLabios') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="anormalLabios">
                    ¿Ha observado algo anormal en los labios?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="anormalLengua" {{ old('anormalLengua') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="anormalLengua">
                    ¿Ha observado algo anormal en la lengua?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="anormalPaladar" {{ old('anormalPaladar') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="anormalPaladar">
                    ¿Ha observado algo anormal en el paladar?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="anormalPisoBoca" {{ old('anormalPisoBoca') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="anormalPisoBoca">
                    ¿Ha observado algo anormal en piso de boca?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="anormalCarrillos" {{ old('anormalCarrillos') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="anormalCarrillos">
                    ¿Ha observado algo anormal en los carrillos?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="anormalRebordes" {{ old('anormalRebordes') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="anormalRebordes">
                    ¿Ha observado algo anormal en los rebordes?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="anormalTrigono" {{ old('anormalTrigono') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="anormalTrigono">
                    ¿Ha observado algo anormal en trigono?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="anormalRetromolar" {{ old('anormalRetromolar') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="anormalRetromolar">
                    ¿Ha observado algo anormal en retromolar?
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="manchas" {{ old('manchas') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="manchas">
                    ¿Presenta manchas?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="abultamientosTejido" {{ old('abultamientosTejido') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="abultamientosTejido">
                    ¿Presenta abultamiento de los tejidos?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="ulceraciones" {{ old('ulceraciones') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="ulceraciones">
                    ¿Presenta ulceraciones?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="ampollas" {{ old('ampollas') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="ampollas">
                    ¿Presenta ampollas?
                </label>
            </div>
            <div class="form-floating mb-3 mt-4">
                <textarea class="form-control" name="otrasLesionesPresentadas">{{old('otrasLesionesPresentadas')}}</textarea>
                <label for="otrasLesionesPresentadas">¿Presenta otras lesiones?</label>
                <span class="text-danger">@error('otrasLesionesPresentadas'){{$message}}@enderror</span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sangradoEncias" {{ old('sangradoEncias') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="sangradoEncias">
                    ¿Le sangran las encias?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="situacionSangradoEncias" class="form-control" value="{{old('situacionSangradoEncias')}}">
                <label for="situacionSangradoEncias">¿Cuándo o en que situacion(es)?</label>
                <span class="text-danger">@error('situacionSangradoEncias'){{$message}}@enderror</span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="pusEnBoca" {{ old('pusEnBoca') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="pusEnBoca">
                    ¿Sale pus de algún lugar de su boca?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="ubicacionPus" class="form-control" value="{{old('ubicacionPus')}}">
                <label for="ubicacionPus">¿De dónde?</label>
                <span class="text-danger">@error('ubicacionPus'){{$message}}@enderror</span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="movilidadEnDientes" {{ old('movilidadEnDientes') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="movilidadEnDientes">
                    ¿Tiene movilidad en sus dientes?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="dientesAltos" {{ old('dientesAltos') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="dientesAltos">
                    ¿Al morder siente altos los dientes?
                </label>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="caraInchada" {{ old('caraInchada') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="caraInchada">
                    ¿Ha tenido la cara inchada?
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="inchazonHielo" {{ old('inchazonHielo') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="inchazonHielo">
                    ¿Se puso hielo?
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="inchazonCalor" {{ old('inchazonCalor') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="inchazonCalor">
                    ¿Se puso calor?
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="inchazonOtros" class="form-control" value="{{old('inchazonOtros')}}">
                <label for="inchazonOtros">Otros:</label>
                <span class="text-danger">@error('inchazonOtros'){{$message}}@enderror</span>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="momentosAzucar" class="form-control" value="{{old('momentosAzucar')}}">
                <label for="momentosAzucar">Momentos de azucar diario:</label>
                <span class="text-danger">@error('momentosAzucar'){{$message}}@enderror</span>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="indicePlaca" class="form-control" value="{{old('indicePlaca')}}">
                <label for="indicePlaca">Indice de Placa:</label>
                <span class="text-danger">@error('indicePlaca'){{$message}}@enderror</span>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="higieneBucal">
                  <option value="">Estado...</option>
                  <option {{ old('higieneBucal') == 'Muy bueno' ? 'selected' : '' }} value="Muy bueno">Muy bueno</option>
                  <option {{ old('higieneBucal') == 'Bueno' ? 'selected' : '' }} value="Bueno">Bueno</option>
                  <option {{ old('higieneBucal') == 'Deficiente' ? 'selected' : '' }} value="Deficiente">Deficiente</option>
                  <option {{ old('higieneBucal') == 'Malo' ? 'selected' : '' }} value="Malo">Malo</option>
                </select>
                <label for="higieneBucal">Estado de la higiene bucal:</label>
                <span class="text-danger">@error('higieneBucal'){{$message}}@enderror</span>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="presentaSarro" {{ old('presentaSarro') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="presentaSarro">
                    ¿Presenta sarro?
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="enfermedadPeriodental" {{ old('enfermedadPeriodental') == 'on' ? 'checked' : '' }}>
                <label class="form-check-label" for="enfermedadPeriodental">
                    ¿Enfermedad periodental?
                </label>
            </div>
        </div>

        <div class="col-10 offset-1">
            <div class="form-floating mb-3 mt-4">
                <textarea class="form-control" name="diagnosticoPresuntivo">{{old('diagnosticoPresuntivo')}}</textarea>
                <label for="diagnosticoPresuntivo">Diagnostico Presuntivo:</label>
                <span class="text-danger">@error('diagnosticoPresuntivo'){{$message}}@enderror</span>
            </div>
            <div class="form-floating mb-3 mt-4">
                <textarea class="form-control" name="planDeTratamiento">{{old('planDeTratamiento')}}</textarea>
                <label for="planDeTratamiento">Plan de Tratamiento:</label>
                <span class="text-danger">@error('planDeTratamiento'){{$message}}@enderror</span>
            </div>
            <hr>
            <h3>Odontograma</h3>
            <div id="wrapperDientes">
                
            </div>
            <button id="addDiente" class="btn btn-info">Agregar Diente</button>
            
            <hr>
            <input class="btn btn-success" type="submit" value="Agregar Historia Clínica">
        </div>
        
   </form>

   <script>
                
    var boton = document.getElementById('addDiente');
    boton.addEventListener("click",function(e){

        e.preventDefault();

        var wrapper = document.getElementById('wrapperDientes');
        var insideDiv = document.createElement('div');
        insideDiv.className = "my-2";

        var diente = document.createElement('input');
        diente.setAttribute('placeholder', 'Numero de Diente')
        diente.setAttribute('required', '');
        diente.setAttribute('type', "number");
        diente.setAttribute('min', "11");
        diente.setAttribute('max', "85");
        diente.setAttribute('name', "odontograma[idDiente][]");
        diente.className = "me-5"
        
        var carie = document.createElement('input');
        carie.setAttribute('type', "checkbox");
        carie.setAttribute('name', "odontograma[carie][]");
        var carieLabel = document.createElement('label');
        carieLabel.className = "me-3 ms-1";
        carieLabel.innerText = "Carie";

        var restauracion = document.createElement('input');
        restauracion.setAttribute('type', "checkbox");
        restauracion.setAttribute('name', "odontograma[restauracion][]");
        var restauracionLabel = document.createElement('label');
        restauracionLabel.className = "me-3 ms-1";
        restauracionLabel.innerText = "Restauración";

        var ausente = document.createElement('input');
        ausente.setAttribute('type', "checkbox");
        ausente.setAttribute('name', "odontograma[ausente][]");
        var ausenteLabel = document.createElement('label');
        ausenteLabel.className = "me-3 ms-1";
        ausenteLabel.innerText = "Ausente";

        var protesisFija = document.createElement('input');
        protesisFija.setAttribute('type', "checkbox");
        protesisFija.setAttribute('name', "odontograma[protesisFija][]");
        var protesisFijaLabel = document.createElement('label');
        protesisFijaLabel.className = "me-3 ms-1";
        protesisFijaLabel.innerText = "Protesis Fija";

        var protesisRemovible = document.createElement('input');
        protesisRemovible.setAttribute('type', "checkbox");
        protesisRemovible.setAttribute('name', "odontograma[protesisRemovible][]");
        var protesisRemovibleLabel = document.createElement('label');
        protesisRemovibleLabel.className = "me-3 ms-1";
        protesisRemovibleLabel.innerText = "Protesis Removible";

        var corona = document.createElement('input');
        corona.setAttribute('type', "checkbox");
        corona.setAttribute('name', "odontograma[corona][]");
        var coronaLabel = document.createElement('label');
        coronaLabel.className = "me-3 ms-1";
        coronaLabel.innerText = "Corona";

        wrapper.appendChild(insideDiv);

        insideDiv.appendChild(diente);
        insideDiv.appendChild(carie);
        insideDiv.appendChild(carieLabel);
        insideDiv.appendChild(restauracion);
        insideDiv.appendChild(restauracionLabel);
        insideDiv.appendChild(ausente);
        insideDiv.appendChild(ausenteLabel);
        insideDiv.appendChild(protesisFija);
        insideDiv.appendChild(protesisFijaLabel);
        insideDiv.appendChild(protesisRemovible);
        insideDiv.appendChild(protesisRemovibleLabel);
        insideDiv.appendChild(corona);
        insideDiv.appendChild(coronaLabel);
    });

</script>

@endsection