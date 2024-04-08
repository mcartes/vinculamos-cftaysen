@if (Session::has('admin'))
    @php
        $role = 'admin';
    @endphp
@elseif (Session::has('digitador'))
    @php
        $role = 'digitador';
    @endphp
@elseif (Session::has('observador'))
    @php
        $role = 'observador';
    @endphp
@elseif (Session::has('supervisor'))
    @php
        $role = 'supervisor';
    @endphp
@endif
@extends('admin.panel')
@section('contenido')

<style>
#fotosods img {
    margin: 5px; /* Añade un pequeño margen entre las imágenes */
}

#metasods p,
#fundamentosods p {
    margin-bottom: 10px; /* Espaciado inferior entre las metas y los fundamentos */
    text-align: justify;
}

#metasods {
    display: flex;
    flex-direction: row; /* Por defecto es row, pero lo agregamos para mayor claridad */
    align-items: center; /* Alinea los elementos verticalmente en el centro */
}

#metasods p {
    margin-right: 30px; /* Espacio entre los elementos (ajusta según tus preferencias) */
}

#fotosods,{
    width: 100%;
    box-sizing: border-box; /* Para incluir el padding y el borde dentro del ancho */
    padding: 10px; /* Ajusta el relleno según sea necesario */
    margin-bottom: 20px; /* Ajusta el margen inferior según sea necesario */
}

#metaDescContainer {
    position: fixed;
    top: 0;
    left: 0;
    background-color: rgba(255, 255, 255, 0.9);
    padding: 10px;
    display: none;
}

</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <section class="section" style="font-size: 115%;">
        <div class="section-body">

            <div class="row">
                <div class="col-xl-3"></div>
                <div class="col-xl-6">
                    @if (Session::has('errorPaso1'))
                        <div class="alert alert-danger alert-dismissible show fade mb-4 text-center">
                            <div class="alert-body">
                                <strong>{{ Session::get('errorPaso1') }}</strong>
                                <button class="close" data-dismiss="alert"><span>&times;</span></button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Sección 1 - Antecedentes generales</h4>
                            @if (isset($iniciativa) && $editar)
                                <div class="card-header-action">
                                    <div class="dropdown d-inline">
                                        <a href="{{ route('admin.iniciativas.detalles', $iniciativa->inic_codigo) }}"
                                            class="btn btn-icon btn-warning icon-left" data-toggle="tooltip"
                                            data-placement="top" title="Ver detalles de la iniciativa"><i
                                                class="fas fa-eye"></i>Ver detalle</a>

                                        {{-- <a href="{{ route('admin.editar.paso1', $iniciativa->inic_codigo) }}"
                                            class="btn btn-icon btn-primary icon-left" data-toggle="tooltip"
                                            data-placement="top" title="Editar iniciativa"><i
                                                class="fas fa-edit"></i>Editar Iniciativa</a> --}}

                                        <a href="javascript:void(0)" class="btn btn-icon btn-info icon-left"
                                            data-toggle="tooltip" data-placement="top" title="Calcular INVI"
                                            onclick="calcularIndice({{ $iniciativa->inic_codigo }})"><i
                                                class="fas fa-tachometer-alt"></i>INVI</a>

                                        <a href="{{ route('admin.evidencias.listar', $iniciativa->inic_codigo) }}"
                                            class="btn btn-icon btn-success icon-left" data-toggle="tooltip"
                                            data-placement="top" title="Adjuntar evidencia"><i
                                                class="fas fa-paperclip"></i>Evidencias</a>

                                        <a href="{{ route('admin.cobertura.index', $iniciativa->inic_codigo) }}"
                                            class="btn btn-icon btn-success icon-left" data-toggle="tooltip" data-placement="top"
                                            title="Ingresar cobertura"><i class="fas fa-users"></i>Cobertura</a>

                                        <a href="{{ route('admin.resultados.listado', $iniciativa->inic_codigo) }}"
                                            class="btn btn-icon btn-success icon-left" data-toggle="tooltip"
                                            data-placement="top" title="Ingresar resultado"><i
                                                class="fas fa-flag"></i>Resultado/s</a>

                                        <a href="{{ route($role . '.evaluar.iniciativa', $iniciativa->inic_codigo) }}"
                                            class="btn btn-icon btn-success icon-left" data-toggle="tooltip"
                                            data-placement="top" title="Evaluar iniciativa"><i
                                                class="fas fa-file-signature"></i>Evaluar</a>

                                        <a href="{{ route('admin.iniciativa.listar') }}"
                                            class="btn btn-primary mr-1 waves-effect icon-left" type="button">
                                            <i class="fas fa-angle-left"></i> Volver a listado
                                        </a>
                                    </div>
                                </div>
                                @endif
                        </div>
                        <div class="card-body">
                            @if (isset($iniciativa) && $editar)
                                <form id="iniciativas-paso1"     action="{{ route('admin.actualizar.paso1', $iniciativa->inic_codigo) }}"
                                    method="POST">
                                    @method('PUT')
                                    @csrf
                                @else
                                    <form id="iniciativas-paso1" action="{{ route('admin.paso1.verificar') }}" method="POST">
                                        @csrf
                            @endif
                            <div class="row">
                                <div class="col-xl-3 col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label style="font-size: 110%">Nombre de iniciativa</label> <label for=""
                                            style="color: red;">*</label>
                                        @if (isset($iniciativa) && $editar)
                                            <input type="text" class="form-control" id="nombre" name="nombre"
                                                value="{{ old('nombre') ?? @$iniciativa->inic_nombre }}">
                                        @else
                                            <input type="text" class="form-control" id="nombre" name="nombre"
                                                value="{{ old('nombre') }}">
                                        @endif
                                        @if ($errors->has('nombre'))
                                            <div class="alert alert-warning alert-dismissible show fade mt-2">
                                                <div class="alert-body">
                                                    <button class="close"
                                                        data-dismiss="alert"><span>&times;</span></button>
                                                    <strong>{{ $errors->first('nombre') }}</strong>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label style="font-size: 110%">Año</label> <label for=""
                                            style="color: red;">*</label>
                                        <select class="form-control select2" id="anho" name="anho" style="width: 100%">
                                            <option disabled selected>Seleccione...</option>
                                            @php
                                                $selectedYear = isset($iniciativa) && $editar ? $iniciativa->inic_anho : old('anho');
                                                $currentYear = date('Y');
                                            @endphp
                                            @for ($year = 2018; $year <= $currentYear; $year++)
                                                <option value="{{ $year }}"
                                                    {{ $selectedYear == $year ? 'selected' : '' }}>{{ $year }}
                                                </option>
                                            @endfor
                                        </select>

                                        @if ($errors->has('anho'))
                                            <div class="alert alert-warning alert-dismissible show fade mt-2">
                                                <div class="alert-body">
                                                    <button class="close"
                                                        data-dismiss="alert"><span>&times;</span></button>
                                                    <strong>{{ $errors->first('anho') }}</strong>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-3 col-lg-3">

                                    <div class="form-group">
                                        <label style="font-size: 110%">Formato de implementación</label> <label
                                            for="" style="color: red;">*</label>

                                        <select class="form-control select2" id="inic_formato" name="inic_formato" style="width: 100%">
                                            <option disabled selected>Seleccione...</option>
                                            @if (isset($iniciativa) && $editar)
                                                <option value="Presencial"
                                                    {{ $iniciativa->inic_formato == 'Presencial' ? 'selected' : '' }}>
                                                    Presencial
                                                </option>
                                                <option value="Online"
                                                    {{ $iniciativa->inic_formato == 'Online' ? 'selected' : '' }}>Online
                                                </option>
                                                <option value="Mixto"
                                                    {{ $iniciativa->inic_formato == 'Mixto' ? 'selected' : '' }}>Mixto
                                                </option>
                                            @else
                                                <option value="Presencial" {{ old('formato') == '1' ? 'selected' : '' }}>
                                                    Presencial
                                                </option>
                                                <option value="Online" {{ old('formato') == '2' ? 'selected' : '' }}>Online
                                                </option>
                                                <option value="Mixto" {{ old('formato') == '3' ? 'selected' : '' }}>Mixto
                                                </option>
                                            @endif
                                        </select>
                                        @if ($errors->has('inic_formato'))
                                            <div class="alert alert-warning alert-dismissible show fade mt-2">
                                                <div class="alert-body">
                                                    <button class="close"
                                                        data-dismiss="alert"><span>&times;</span></button>
                                                    <strong>{{ $errors->first('inic_formato') }}</strong>
                                                </div>
                                            </div>
                                        @endif
                                    </div>


                                </div>

                            </div>
                            <div class="">
                                <div class="form-group">
                                    <label style="font-size: 110%">Descripción</label> <label for="" style="color: red;">*</label>
                                    <div class="input-group">
                                        @if (isset($iniciativa) && $editar)
                                            <textarea class="formbold-form-input" id="description" name="description" required rows="5" style="width: 100%;">{{ old('description') ?? @$iniciativa->inic_descripcion }}</textarea>
                                        @else
                                            <textarea class="formbold-form-input" id="description" name="description" required rows="5" style="width: 100%;">{{ old('description') }}</textarea>
                                        @endif
                                    </div>
                                    @if ($errors->has('description'))
                                        <div class="alert alert-warning alert-dismissible show fade mt-2">
                                            <div class="alert-body">
                                                <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </div>
                                        </div>
                                    @endif
                                    <button id="boton-revisar" class="btn btn-primary mr-1 text-white mt-2">
                                        <span id="plantearObjetivoSpinner" class="" role="status" aria-hidden="true"></span>
                                        <span id="plantearObjetivoTexto">Plantear objetivos</span>

                                    </button>



                                </div>
                                <div id="objetivosPlanteados">

                                </div>
                                <input type="text" id="ObjetivoElegido" hidden>
                                <button id="send-button" class="btn btn-primary mr-1 text-white mt-2 d-none">
                                    <span id="asociarODSpinner" class="" role="status" aria-hidden="true"></span>
                                    <span id="asociarODSObjetivoTexto">Asociar ODS</span>
                                </button>
                                <script>

                                    function elegirObjetivo(elegido){
                                        for (let index = 1; index < 4; index++) {
                                            if(index == elegido){
                                                document.getElementById("opcion"+elegido+"ODS").style.backgroundColor = "#6c7781";
                                                document.getElementById("opcion"+elegido+"ODS").style.color = "#fff";

                                            }else{
                                                document.getElementById("opcion"+index+"ODS").style.backgroundColor = "#fff";
                                                document.getElementById("opcion"+index+"ODS").style.color = "#6c7781";

                                            }
                                        }
                                        document.getElementById("ObjetivoElegido").value = arrayRespuestas[elegido-1];
                                        $('#send-button').removeClass('d-none');


                                    }
                                </script>


                                <div id="ods-values">
                                    <div id="fotosods" class="d-none"></div>
                                    <div id="metasods" class="margin-10 d-none"></div>
                                    <div id="metaDescContainer" class="d-none" style="position: fixed; top: 0; left: 0; background-color: rgba(255, 255, 255, 0.9); padding: 10px; display: none;"></div>
                                    <div id="fundamentosods" class="d-none"></div>
                                    <div id="tablaOds"></div>

                                </div>
                            </div>
                            <input type="hidden" name="ods_values[]" id="ods-hidden-field" value="">
                            <input type="hidden" name="ods_metas_values[]" id="ods-meta-hidden-field">
                            <input type="hidden" name="ods_metas_desc_values[]" id="ods-meta-desc-hidden-field">
                            <input type="hidden" name="ods_fundamentos_values[]" id="ods-fundamentos-hidden-field">

                            <script defer>


                            function extraerMetas(respuesta) {

                                const regexMetasNumericas = /Meta\s*(\d+(\.\d+)?)(?![a-zA-Z])/g;

                                const regexMetasAlfanumericas = /Meta\s*(\d+\.[a-zA-Z])/g;

                                const metasNumericas = [];
                                const metasAlfanumericas = [];

                                let matchNumerico;
                                while ((matchNumerico = regexMetasNumericas.exec(respuesta)) !== null) {
                                  const valorNumerico = matchNumerico[2] ? matchNumerico[1] : null;
                                  if (valorNumerico !== null) {
                                    metasNumericas.push(valorNumerico);
                                  }
                                }

                                regexMetasAlfanumericas.lastIndex = 0;

                                let matchAlfanumerico;
                                while ((matchAlfanumerico = regexMetasAlfanumericas.exec(respuesta)) !== null) {
                                    var numeroLetra = matchAlfanumerico[1].match(/\d+(\.\w)?/);

                                    if (numeroLetra) {
                                        // Agregar el resultado a tu array
                                        metasAlfanumericas.push(numeroLetra[0]);
                                    }
                                }

                                const todasLasMetas = [...metasNumericas, ...metasAlfanumericas];

                                return todasLasMetas;
                            }

                            function extraerDescripcionesMetas(texto) {
                                console.log('funcion extraerDescripcionesMetas: '+texto);
                                const regexMetas = /Meta\s\d+\.\d+[a-zA-Z]*:\s([^]+?)\./g;
                                const regexMetasAlpha = /Meta\s\d+\.[a-zA-Z]+:\s([^]+?)\./g;
                                const regexMetasCombined = /Meta\s\d+\.\d+[a-zA-Z]*:\s([^]+?)\.|Meta\s\d+\.[a-zA-Z]+:\s([^]+?)\./g;

                                const matches = texto.match(regexMetasCombined);
                                console.log('--------------------------------------------------------------------------');
                                console.log(matches);

                                if (matches.length > 0) {
                                    console.log('entro al if: ' + matches.length);
                                    console.log(matches);
                                    const descripcionesMetas = [];
                                    matches.forEach(meta => {
                                        //obtener el texto entre los dos puntos y Fundamento:
                                        const descripcion = meta.split('Meta ')[1].trim();
                                        // eliminar desde Fundamento: en adelante
                                        const index = descripcion.indexOf('Fundamento:');
                                        if (index !== -1) {
                                            // Corta el string desde el principio hasta la posición de "Fundamento:"
                                            const nuevaDescripcion = descripcion.substring(0, index-1);
                                            nuevaDescripcion = nuevaDescripcion.replace(/\[|\]|Fundamento/g, '');
                                            descripcionesMetas.push(nuevaDescripcion);
                                        } else {
                                            console.log('entro al else' + descripcion);
                                            descripcionesMetas.push(descripcion);
                                        }
                                    });


                                    return descripcionesMetas;
                                } else {
                                    return [];
                                }
                            }


                            function extraerFundamentos(respuesta) {

                                // Expresión regular para extraer el fundamento
                                const regexFundamento = /Fundamento:\s*([^]*?)(?=\s*(Meta|$))/g;

                                // Array para almacenar todos los fundamentos encontrados
                                const fundamentos = [];

                                // Buscar todas las coincidencias con la expresión regular
                                let matchFundamento;
                                while ((matchFundamento = regexFundamento.exec(respuesta)) !== null) {
                                  const fundamento = matchFundamento[1].trim();
                                  var index = fundamento.indexOf("ODS");
                                  if (index !== -1) {
                                        // Corta el string desde el principio hasta la posición de "ODS"
                                        var nuevoFundamento = fundamento.substring(0, index);

                                        fundamentos.push(nuevoFundamento);
                                    }else{
                                        fundamentos.push(fundamento);
                                    }
                                }

                                return fundamentos;
                            }

                                                        // Funciones para mostrar y ocultar la descripción de la meta
                            function mostrarDescripcionMeta(desc, event) {
                                var metaDescContainer = document.getElementById('metaDescContainer');
                                metaDescContainer.textContent = desc;

                                // Obtener las coordenadas del mouse
                                var mouseX = event.clientX;
                                var mouseY = event.clientY;

                                // Establecer la posición del contenedor cerca del cursor
                                metaDescContainer.style.left = mouseX + 'px';
                                metaDescContainer.style.top = mouseY + 'px';

                                metaDescContainer.style.display = 'block';
                            }

                            function ocultarDescripcionMeta() {
                                var metaDescContainer = document.getElementById('metaDescContainer');
                                metaDescContainer.style.display = 'none';
                            }

                            var arrayRespuestas = [];
                            $('#boton-revisar').click(function(e) {
                                e.preventDefault(); // Previene el comportamiento predeterminado del formulario
                                $('#plantearObjetivoSpinner').addClass('spinner-border spinner-border-sm');
                                $('#plantearObjetivoTexto').text('Revisando...');
                                $('#boton-revisar').prop('disabled', true);
                                //eliminar todo lo dentro del div objetivosPlanteados
                                $('#objetivosPlanteados').empty();
                                revisarObjetivo();
                            });

                            function revisarObjetivo() {
                                var userInput = $('#description').val();
                                console.log(userInput);
                                console.log('paso1');

                                // Enviar el mensaje al servidor
                                $.ajax({
                                    url: '{{ route("admin.chat.revisarObjetivo") }}',
                                    type: 'POST',
                                    data: {
                                        '_token': '{{ csrf_token() }}',
                                        'message': userInput
                                    },
                                    success: function(response) {
                                        console.log('paso ajax');
                                        try {
                                            contadorerror = 1;
                                            arrayRespuestas = [];
                                            var respuestaBot = response.message;
                                            console.log('respuestaBot');
                                            console.log(respuestaBot);
                                            var inicioPrimero = respuestaBot.indexOf("1.");
                                            var inicioSegundo = respuestaBot.indexOf("2.");
                                            var inicioTercero = respuestaBot.indexOf("3.");
                                            var finPrimero = respuestaBot.indexOf("2.");
                                            var finSegundo = respuestaBot.indexOf("3.");
                                            var finTercero = respuestaBot.length;
                                            var respuestaPrimero = respuestaBot.substring(inicioPrimero, finPrimero);
                                            var respuestaSegundo = respuestaBot.substring(inicioSegundo, finSegundo);
                                            var respuestaTercero = respuestaBot.substring(inicioTercero, finTercero);
                                            arrayRespuestas.push(respuestaPrimero);
                                            arrayRespuestas.push(respuestaSegundo);
                                            arrayRespuestas.push(respuestaTercero);
                                            console.log(arrayRespuestas);


                                            // llenar con la informacion
                                            $('#objetivosPlanteados').append(`

                                            <div class="mt-2">
                                                <div id="opcion1ODS" onclick="elegirObjetivo(1)" style="width: 100%; border: 1px solid #5a5a5a; border-radius: 5px;" onmouseover="this.style.borderColor='#0000FF'; this.style.cursor='pointer';" onmouseout="this.style.borderColor='#5a5a5a';this.style.cursor='default';">
                                                    <div class="card-body">${arrayRespuestas[0]}</div>
                                                </div>
                                                <div id="opcion2ODS" onclick="elegirObjetivo(2)" class="mt-1" style="width: 100%; border: 1px solid #5a5a5a; border-radius: 5px;" onmouseover="this.style.borderColor='#0000FF'; this.style.cursor='pointer';" onmouseout="this.style.borderColor='#5a5a5a';this.style.cursor='default';">
                                                    <div class="card-body">${arrayRespuestas[1]}</div>
                                                </div>
                                                <div id="opcion3ODS" onclick="elegirObjetivo(3)" class="mt-1" style="width: 100%; border: 1px solid #5a5a5a; border-radius: 5px;" onmouseover="this.style.borderColor='#0000FF'; this.style.cursor='pointer';" onmouseout="this.style.borderColor='#5a5a5a';this.style.cursor='default';">
                                                    <div class="card-body">${arrayRespuestas[2]}</div>
                                                </div>
                                            </div>
                                            `);

                                            $('#plantearObjetivoSpinner').removeClass('spinner-border spinner-border-sm');
                                            $('#plantearObjetivoTexto').text('Plantear objetivos');
                                            $('#tablaOds').empty();
                                            $('#boton-revisar').prop('disabled', false);


                                        } catch (error) {
                                            var respuestaBot = 'Lo siento, ha surgido un error.';
                                        }
                                    }
                                });
                            }

                            function limpiarElementosAntiguos(){
                                $('#fotosods').empty();
                                $('#metasods').empty();
                                $('#fundamentosods').empty();
                                $('#ods-hidden-field').empty();
                                $('#ods-meta-hidden-field').empty();
                                $('#ods-meta-desc-hidden-field').empty();
                                $('#ods-fundamentos-hidden-field').empty();
                            }

                            </script>
                            <script defer>

                            var repeat = false;
                            var contadorerror = 1;

                            function compararMetas(a, b) {
                            // Obtener los números antes de ":"
                            var numeroA = parseFloat(a.split(':')[0]);
                            var numeroB = parseFloat(b.split(':')[0]);

                            // Comparar los números
                            return numeroA - numeroB;
                            }

                            $(document).ready(function() {
                                $('#send-button').click(function(e) {
                                    e.preventDefault(); // Previene el comportamiento predeterminado del formulario
                                    $('#asociarODSpinner').addClass('spinner-border spinner-border-sm');
                                    $('#asociarODSObjetivoTexto').text('Asociando ODS...');
                                    $('#send-button').prop('disabled', true);
                                    $('#boton-revisar').prop('disabled', true);
                                    enviarMensaje();
                                });


                                function enviarMensaje() {
                                    var userInput = $('#description').val();
                                    var objetivoSeleccionado = $('#ObjetivoElegido').val();
                                    console.log(objetivoSeleccionado);
                                    // Enviar el mensaje al servidor
                                    $.ajax({
                                        url: '{{ route("admin.chat.sendMessage") }}',
                                        type: 'POST',
                                        data: {
                                            '_token': '{{ csrf_token() }}',
                                            'message': objetivoSeleccionado
                                        },
                                        success: function(response) {
                                            try {
                                                //Segun el contador, si su valor es 1 o mayor, elimina los valores que se agregaron
                                                //anteriormente con el comando document.getElementById("iniciativas-paso1").appendChild(odsHiddenInput);
                                                //document.getElementById("iniciativas-paso1").appendChild(metasHiddenInput);
                                                //document.getElementById("iniciativas-paso1").appendChild(fundamentosHiddenInput);


                                                limpiarElementosAntiguos();
                                                console.log('paso1');
                                                if (repeat==true) {
                                                    //Crea un for que recorra #iniciativas-paso1 [name^="ods_values"] y elimine los elementos
                                                    //que se encuentren dentro de el
                                                    var odsValues = document.querySelectorAll('#iniciativas-paso1 [name^="ods_values"]');
                                                    odsValues.forEach(function(odsValue) {
                                                        odsValue.remove();
                                                    });
                                                    var metasValues = document.querySelectorAll('#iniciativas-paso1 [name^="ods_metas_values"]');
                                                    metasValues.forEach(function(metasValue) {
                                                        metasValue.remove();
                                                    });
                                                    var metasDescValues = document.querySelectorAll('#iniciativas-paso1 [name^="ods_metas_desc_values"]');
                                                    metasDescValues.forEach(function(metasDescValue) {
                                                        metasDescValue.remove();
                                                    });
                                                    var fundamentosValues = document.querySelectorAll('#iniciativas-paso1 [name^="ods_fundamentos_values"]');
                                                    fundamentosValues.forEach(function(fundamentosValue) {
                                                        fundamentosValue.remove();
                                                    });
                                                }
                                                console.log('paso2');
                                                // Obtener los divs correspondientes

                                                var fundamentos = [];
                                                var metas = []
                                                var metasDesc = [];
                                                var respuestaBot = response.message;
                                                console.log(respuestaBot);
                                                console.log('paso3');

                                                metas = extraerMetas(respuestaBot);
                                                metas = metas.sort((a,b) => {
                                                    const parteEnteraA = parseInt(a, 10);
                                                    const parteEnteraB = parseInt(b, 10);

                                                    if(!isNaN(parteEnteraA) && !isNaN(parteEnteraB)) {
                                                        return parteEnteraA - parteEnteraB;
                                                    }

                                                    return 0;
                                                })
                                                console.log('prueba de metas largo');
                                                console.log(metas);
                                                metas = [...new Set(metas)];

                                                metasDesc = extraerDescripcionesMetas(respuestaBot);
                                                fundamentos = extraerFundamentos(respuestaBot);
                                                console.log(metas);
                                                metasDesc.sort(compararMetas);
                                                console.log(metasDesc);
                                                console.log(fundamentos);
                                                console.log('paso4');


                                                var ods = response.ods;
                                                // ods a array
                                                var odsArray = ods.split(',');
                                                odsArray = odsArray.sort(function(a,b){return a-b;})
                                                // Obtener el div donde se agregarán las fotos
                                                var fotosDiv = document.getElementById("fotosods");

                                                // Limpiar el contenido actual del div
                                                fotosDiv.innerHTML = '';

                                                // Obtener el div donde se mostrarán los valores de odsArray
                                                var odsValuesDiv = document.getElementById("ods-values");
                                                var metasDiv = document.getElementById("metasods");
                                                var fundamentosDiv = document.getElementById("fundamentosods");

                                                // var odsHiddenField = document.getElementById("ods-hidden-field");
                                                // odsHiddenField.innerHTML = ''; // Limpiar el contenido actual
                                                // // Iterar sobre el arreglo

                                                const arraySinEspacios = odsArray.map(elemento => elemento.trim());
                                                console.log(arraySinEspacios);
                                                console.log('paso1');
                                                console.log('ods:'+ ods);
                                                console.log('odsArray'+ odsArray);
                                                console.log('arraySinEspacios'+ arraySinEspacios);
                                                var odsHiddenInput;

                                                arraySinEspacios.forEach(function(ods){
                                                    // Agregar un campo de entrada oculto para cada elemento del arreglo
                                                    odsHiddenInput = document.createElement("input");
                                                    odsHiddenInput.type = "hidden";
                                                    odsHiddenInput.name = "ods_values[]";
                                                    odsHiddenInput.value = ods;
                                                    console.log(odsHiddenInput);
                                                    document.getElementById("iniciativas-paso1").appendChild(odsHiddenInput);
                                                })
                                                console.log('paso2');

                                                metas.forEach(function (meta, index) {
                                                    // Crear un nuevo elemento <p>
                                                    var nuevoParrafo = document.createElement("p");

                                                    // Establecer el texto del párrafo
                                                    nuevoParrafo.textContent = 'Meta ' + meta;

                                                    // Agregar el párrafo al contenedor
                                                    metasDiv.appendChild(nuevoParrafo);

                                                    // Configurar el evento hover con el evento del mouse
                                                    nuevoParrafo.addEventListener("mouseover", function (event) {
                                                        mostrarDescripcionMeta(metasDesc[index], event);
                                                    });

                                                    nuevoParrafo.addEventListener("mouseout", function () {
                                                        ocultarDescripcionMeta();
                                                    });


                                                    // Crear el campo de entrada oculto para metas
                                                    var metasHiddenInput = document.createElement("input");
                                                    var metasDescHiddenInput = document.createElement("input");
                                                    metasHiddenInput.type = "hidden";
                                                    metasDescHiddenInput.type = "hidden";
                                                    metasHiddenInput.name = "ods_metas_values[]";
                                                    metasDescHiddenInput.name = "ods_metas_desc_values[]";
                                                    metasHiddenInput.value = meta;
                                                    metasDescHiddenInput.value = metasDesc[index];
                                                    document.getElementById("iniciativas-paso1").appendChild(metasHiddenInput);
                                                    document.getElementById("iniciativas-paso1").appendChild(metasDescHiddenInput);
                                                });
                                                console.log('paso3');
                                                var cc = 0;

                                                fundamentos.forEach(function (fundamento) {
                                                    fundamentosDiv.innerHTML += '<p>Fundamento '+metas[cc]+': ' + fundamento + '</p>';
                                                    // Crear el campo de entrada oculto para fundamentos
                                                    //Agrega un input hidden para los fundamentos
                                                    var fundamentosHiddenInput = document.createElement("input");
                                                    fundamentosHiddenInput.type = "hidden";
                                                    fundamentosHiddenInput.name = "ods_fundamentos_values[]";
                                                    fundamentosHiddenInput.value = fundamentos;
                                                    document.getElementById("iniciativas-paso1").appendChild(fundamentosHiddenInput);
                                                    cc++;
                                                });


                                                repeat = true;

                                                $('#fotosods').empty();

                                                arraySinEspacios.forEach(function(numero) {

                                                    $('#fotosods').append('<div><img src="https://cftpucv.vinculamosvm02.cl/vinculamos_v5_cftpucv/app/img/ods-'+numero+'.png" height="150px" width="150px" alt="ods'+numero+'"></div>');
                                                    $('#fotosods').css({
                                                        'display': 'flex',
                                                        'flexDirection': 'row', // Alinear los elementos en fila
                                                        'justifyContent': 'center', // Justificar al inicio (izquierda)
                                                        'alignItems': 'center' // Alinear verticalmente al centro
                                                    });


                                                });

                                                $('#metasods').css({
                                                    'display': 'flex',
                                                    'flexDirection': 'row', // Alinear los elementos en fila
                                                    'justifyContent': 'center', // Centrar horizontalmente
                                                    'alignItems': 'center' // Centrar verticalmente
                                                });

                                                $('#asociarODSpinner').removeClass('spinner-border spinner-border-sm');
                                                $('#asociarODSObjetivoTexto').text('Asociar ODS');
                                                $('#send-button').prop('disabled', false);
                                                $('#boton-revisar').prop('disabled', false);
                                                $('#send-button').addClass('d-none');



                                                // Crear el contenido de la tabla
                                                var tablaHTML = `
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">ODS</th>
                                                                <th scope="col">Meta</th>
                                                                <th scope="col">Fundamento  </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                `;



                                                // Ordenar el array usando la función de comparación personalizada
                                                metasDesc.sort(compararMetas);
                                                console.log('#############################################');
                                                var tablaOds = document.getElementById("tablaOds");
                                                tablaOds.innerHTML = '';
                                                console.log(metasDesc);

                                                // Llenar el cuerpo de la tabla con los datos de los arreglos
                                                for (var i = 0; i < arraySinEspacios.length; i++) {
                                                    tablaHTML += `
                                                        <tr>
                                                            <td><div data-toggle="tooltip" data-placement="top" title="ods ${arraySinEspacios[i]}"><img src="https://cftpucv.vinculamosvm02.cl/vinculamos_v5_cftpucv/app/img/ods-${arraySinEspacios[i]}.png" height="150px" width="150px" alt="ods'+numero+'"></div></td>
                                                            <td>${metasDesc[i]}</td>
                                                            <td>${fundamentos[i]}</td>
                                                        </tr>
                                                    `;
                                                }

                                                // Cerrar la etiqueta del cuerpo y de la tabla
                                                tablaHTML += `
                                                        </tbody>
                                                    </table>
                                                `;

                                                // Actualizar el contenido de fundamentosDiv
                                                tablaOds.innerHTML += tablaHTML;

                                                // $('#ods-input').value(odsArray.join(','))

                                                // // Crear el contenido HTML de la tabla
                                                // var tableHTML = '<table border="1">';
                                                // tableHTML += '<tr><th>ODS</th><th>Metas</th><th>Fundamentos</th></tr>';

                                                // for (var j = 0; j < arraySinEspacios.length; j++) {
                                                //     tableHTML += '<tr>';
                                                //     tableHTML += '<td><div><img src="https://cftpucv.vinculamosvm02.cl/vinculamos_v5_cftpucv/app/img/ods-'+arraySinEspacios[j]+'.png" height="150px" width="150px" alt="ods'+arraySinEspacios[j]+'"></div></td>';
                                                //     tableHTML += '<td>' + metas[j] + '</td>';
                                                //     tableHTML += '<td>' + fundamentos[j] + '</td>';
                                                //     tableHTML += '</tr>';
                                                // }

                                                // tableHTML += '</table>';

                                                // // Insertar el contenido HTML en el elemento con id "tablaconlainfoods"
                                                // document.getElementById('tablaconlainfoods').innerHTML = tableHTML;
                                            } catch (error) {
                                                if (contadorerror >= 10){
                                                    alert('Lo siento, ha surgido un error asociando ODS, por favor reinicie la página e intente nuevamente.');
                                                }else{
                                                    contadorerror++;

                                                document.getElementById("asociarODSObjetivoTexto").innerText = 'Asociando ODS, intento: '+contadorerror+' ...';
                                                // Bloque de código ejecutado si hay un error en la solicitud

                                                console.error('Error en la solicitud:', error);
                                                setTimeout(function() {
                                                enviarMensaje();
                                                }, 1000); // 5000 milisegundos = 5 segundos
                                                console.log('error numero: '+contadorerror);

                                                }

                                            }

                                        },
                                        error: function(xhr, status, error) {
                                            if (contadorerror >= 10){
                                                    alert('Lo siento, ha surgido un error asociando ODS, por favor reinicie la página e intente nuevamente.');
                                                }else{
                                                    contadorerror++;

                                                document.getElementById("asociarODSObjetivoTexto").innerText = 'Asociando ODS, intento: '+contadorerror+' ...';
                                                // Bloque de código ejecutado si hay un error en la solicitud

                                                console.error('Error en la solicitud:', error);
                                                setTimeout(function() {
                                                enviarMensaje();
                                                }, 1000); // 5000 milisegundos = 5 segundos
                                                console.log('error numero: '+contadorerror);

                                                }


                                        }

                                    });
                                }
                            });



                            </script>

                            <div class="row">
                                <div class="col-xl-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label style="font-size: 110%">Sedes</label> <label for=""
                                            style="color: red;">*</label>
                                        {{-- <input type="checkbox" id="selectAllEscuelas" style="margin-left: 60%"> <label
                                            for="selectAllEscuelas">Todas</label> --}}
                                        <select class="form-control select2" name="sedes[]" multiple=""
                                            style="width: 100%" id="sedes">
                                            @if (isset($iniciativa) && $editar)
                                                @forelse ($sedes as $sede)
                                                    <option value="{{ $sede->sede_codigo }}"
                                                        {{ in_array($sede->sede_codigo, old('sedes', [])) || in_array($sede->sede_codigo, $sedeSec) ? 'selected' : '' }}>
                                                        {{ $sede->sede_nombre }}</option>
                                                @empty
                                                    <option value="-1">No existen registros</option>
                                                @endforelse
                                            @else
                                                @forelse ($sedes as $sede)
                                                    <option value="{{ $sede->sede_codigo }}"
                                                        {{ collect(old('sedes'))->contains($sede->sede_codigo) ? 'selected' : '' }}>
                                                        {{ $sede->sede_nombre }}</option>
                                                @empty
                                                    <option value="-1">No existen registros</option>
                                                @endforelse
                                            @endif
                                        </select>
                                        @if ($errors->has('escuelas'))
                                            <div class="alert alert-warning alert-dismissible show fade mt-2">
                                                <div class="alert-body">
                                                    <button class="close"
                                                        data-dismiss="alert"><span>&times;</span></button>
                                                    <strong>{{ $errors->first('escuelas') }}</strong>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label style="font-size: 110%">Áreas</label> <label for=""
                                            style="color: red;">*</label>
                                        <input type="checkbox" id="selectAllEscuelas" style="margin-left: 60%"> <label
                                            for="selectAllEscuelas">Todas</label>
                                        <select class="form-control select2" name="escuelas[]" multiple=""
                                            style="width: 100%" id="escuelas">
                                            @if (isset($iniciativa) && $editar)
                                                @forelse ($escuelas as $escuela)
                                                    <option value="{{ $escuela->escu_codigo }}"
                                                        {{ in_array($escuela->escu_codigo, old('escuelas', [])) || in_array($escuela->escu_codigo, $escuSec) ? 'selected' : '' }}>
                                                        {{ $escuela->escu_nombre }}</option>
                                                @empty
                                                    <option value="-1">No existen registros</option>
                                                @endforelse
                                            @else
                                                @forelse ($escuelas as $escuela)
                                                    <option value="{{ $escuela->escu_codigo }}"
                                                        {{ collect(old('escuela'))->contains($escuela->escu_codigo) ? 'selected' : '' }}>
                                                        {{ $escuela->escu_nombre }}</option>
                                                @empty
                                                    <option value="-1">No existen registros</option>
                                                @endforelse
                                            @endif
                                        </select>
                                        @if ($errors->has('escuelas'))
                                            <div class="alert alert-warning alert-dismissible show fade mt-2">
                                                <div class="alert-body">
                                                    <button class="close"
                                                        data-dismiss="alert"><span>&times;</span></button>
                                                    <strong>{{ $errors->first('escuelas') }}</strong>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label style="font-size: 110%">Carreras</label> <label for=""
                                            style="color: red;">*</label><input type="checkbox" id="selectAllCarreras"
                                            style="margin-left: 60%"> <label for="selectAllCarreras">Todas</label>

                                        <select class="form-control select2" multiple="" id="carreras"
                                            name="carreras[]" style="width: 100%">
                                            @if (isset($iniciativa) && $editar)
                                                estoy aca
                                                {{-- <select class="form-control select2" name="sedes[]" multiple id="sedes"> --}}
                                                @forelse ($carreras as $carrera)
                                                    <option value="{{ $carrera->care_codigo }}"
                                                        {{ in_array($carrera->care_codigo, old('carreras', [])) || in_array($carrera->care_codigo, $careSec) ? 'selected' : '' }}>
                                                        {{ $carrera->care_nombre }}</option>
                                                @empty
                                                    <option value="-1">No existen registros</option>
                                                @endforelse
                                            @else
                                                {{-- <select class="form-control select2" name="sedes[]" multiple id="sedes"> --}}
                                                @forelse ($carreras as $carrera)
                                                    <option value="{{ $carrera->care_codigo }}"
                                                        {{ collect(old('carreras'))->contains($carrera->care_codigo) ? 'selected' : '' }}>
                                                        {{ $carrera->care_nombre }}</option>
                                                @empty
                                                    <option value="-1">No existen registros</option>
                                                @endforelse
                                            @endif
                                        </select>

                                        @if ($errors->has('carreras'))
                                            <div class="alert alert-warning alert-dismissible show fade mt-2">
                                                <div class="alert-body">
                                                    <button class="close"
                                                        data-dismiss="alert"><span>&times;</span></button>
                                                    <strong>{{ $errors->first('carreras') }}</strong>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                </div>



                            </div>

                            <div class="row">
                                <div class="col-xl-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label style="font-size: 110%">Mecanismo</label> <label for=""
                                            style="color: red;">*</label>
                                        <select class="form-control select2" id="mecanismos" name="mecanismos"
                                            style="width: 100%">
                                            <option value="" selected disabled>Seleccione...</option>
                                            @foreach ($mecanismo as $meca)
                                                @if ($editar && @isset($iniciativa))
                                                    <option value="{{ $meca->meca_codigo }}"
                                                        {{ old('mecanismo', $iniciativa->meca_codigo) == $meca->meca_codigo ? 'selected' : '' }}>
                                                        {{ $meca->meca_nombre }}</option>
                                                @else
                                                    <option value="{{ $meca->meca_codigo }}"
                                                        {{ old('mecanismo') == $meca->meca_codigo ? 'selected' : '' }}>
                                                        {{ $meca->meca_nombre }}</option>
                                                @endif
                                            @endforeach
                                        </select>


                                        @if ($errors->has('mecanismo'))
                                            <div class="alert alert-warning alert-dismissible show fade mt-2">
                                                <div class="alert-body">
                                                    <strong>{{ $errors->first('mecanismo') }}</strong>
                                                </div>
                                            </div>
                                            <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-xl-4 col-md-4 col-lg-4">
                                    <div class="form-group">

                                        <label style="font-size: 110%">Tipo de Actividades</label> <label for=""
                                            style="color: red;">*</label>
                                        <select class="form-control select2" id="tactividad" name="tactividad"
                                            style="width: 100%">
                                            <option value="" selected disabled>Seleccione...</option>
                                            @if (isset($iniciativaData) && $editar)
                                                @forelse ($tipoActividad as $actividad)
                                                    <option value="{{ $actividad->tiac_codigo }}"
                                                        {{ $iniciativaData->tiac_codigo == $actividad->tiac_codigo ? 'selected' : '' }}>
                                                        {{ $actividad->tiac_nombre }}</option>
                                                @empty
                                                    <option value="-1">No existen registros</option>
                                                @endforelse
                                            @else
                                                @forelse ($tipoActividad as $actividad)
                                                    <option value="{{ $actividad->tiac_codigo }}"
                                                        {{ old('tactividad') == $actividad->tiac_codigo ? 'selected' : '' }}>
                                                        {{ $actividad->tiac_nombre }}</option>
                                                @empty
                                                    <option value="-1">No existen registros</option>
                                                @endforelse
                                            @endif
                                        </select>

                                        @if ($errors->has('programas'))
                                            <div class="alert alert-warning alert-dismissible show fade mt-2">
                                                <div class="alert-body">
                                                    <strong>{{ $errors->first('tactividad') }}</strong>
                                                </div>
                                            </div>
                                            <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-xl-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label style="font-size: 110%">Convenio</label> <label for=""
                                            style="color: red;">*</label>
                                        <select class="form-control select2" id="convenio" name="convenio"
                                            style="width: 100%">
                                            @if (isset($iniciativa) && $editar)
                                                <option value="" selected>No Aplica</option>
                                                @foreach ($convenios as $convenio)
                                                    <option value="{{ $convenio->conv_codigo }}"
                                                        {{ $iniciativa->conv_codigo == $convenio->conv_codigo ? 'selected' : '' }}>
                                                        {{ $convenio->conv_nombre }}</option>
                                                @endforeach
                                            @else
                                                @if (count($convenios) > 0)
                                                    <option value="" disabled selected>Seleccione...</option>
                                                    @foreach ($convenios as $convenio)
                                                        <option value="{{ $convenio->conv_codigo }}">
                                                            {{ $convenio->conv_nombre }}</option>
                                                    @endforeach
                                                @else
                                                    <option value="-1" disabled selected>No existen registros</option>
                                                @endif

                                            @endif
                                        </select>


                                        @if ($errors->has('convenio'))
                                            <div class="alert alert-warning alert-dismissible show fade mt-2">
                                                <div class="alert-body">
                                                    <button class="close"
                                                        data-dismiss="alert"><span>&times;</span></button>
                                                    <strong>{{ $errors->first('convenio') }}</strong>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">


                                <div class="col-xl-4 col-md-4 col-lg-4">
                                    <div class="form-group" id="regiones_div">
                                        <label style="font-size: 110%">Región</label>
                                        <input type="hidden" id="territorio" name="territorio" value="nacional">
                                        <input type="hidden" id="pais" name="pais" value="1">
                                        <select class="form-control select2" id="region" multiple=""
                                            name="region[]" style="width: 100%">
                                            @if (isset($iniciativa) && $editar)
                                                @forelse ($regiones as $region)
                                                    <option value="{{ $region->regi_codigo }}"
                                                        {{ in_array($region->regi_codigo, $iniciativaRegion) ? 'selected' : '' }}>
                                                        {{ $region->regi_nombre }}</option>
                                                @empty
                                                    <option value="-1">No existen registros</option>
                                                @endforelse
                                            @else
                                                @forelse ($regiones as $region)
                                                    <option value="{{ $region->regi_codigo }}"
                                                        {{ collect(old('region'))->contains($region->regi_codigo) ? 'selected' : '' }}>
                                                        {{ $region->regi_nombre }}</option>
                                                @empty
                                                    <option value="-1">No existen registros</option>
                                                @endforelse
                                            @endif
                                        </select>

                                        @if ($errors->has('region'))
                                            <div class="alert alert-warning alert-dismissible show fade mt-2">
                                                <div class="alert-body">
                                                    <button class="close"
                                                        data-dismiss="alert"><span>&times;</span></button>
                                                    <strong>{{ $errors->first('region') }}</strong>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <input type="hidden" name="ods_values[]" id="ods-hidden-field" value="">
                            <input type="hidden" name="ods_metas_values[]" id="ods-meta-hidden-field">
                            <input type="hidden" name="ods_metas_desc_values[]" id="ods-meta-desc-hidden-field">
                            <input type="hidden" name="ods_fundamentos_values[]" id="ods-fundamentos-hidden-field">

                                <div class="col-xl-4 col-md-4 col-lg-4">
                                    <div class="form-group" id="comunas_div">
                                        <label style="font-size: 110%">Comuna</label>
                                        <select class="form-control select2" id="comuna" name="comuna[]"
                                            multiple="" style="width: 100%">
                                            <option value="" disabled>Seleccione...</option>
                                            @if (isset($iniciativa) && $editar)
                                                @forelse ($comunas as $comuna)
                                                    <option value="{{ $comuna->comu_codigo }}"
                                                        {{ in_array($comuna->comu_codigo, $iniciativaComuna) ? 'selected' : '' }}>
                                                        {{ $comuna->comu_nombre }}</option>
                                                @empty
                                                    <option value="-1">No existen registros</option>
                                                @endforelse
                                            @else
                                                @forelse ($comunas as $comuna)
                                                    <option value="{{ $comuna->comu_codigo }}"
                                                        {{ collect(old('comuna'))->contains($comuna->comu_codigo) ? 'selected' : '' }}>
                                                        {{ $comuna->comu_nombre }}
                                                    </option>
                                                @empty
                                                @endforelse
                                            @endif
                                        </select>

                                        @if ($errors->has('comuna'))
                                            <div class="alert alert-warning alert-dismissible show fade mt-2">
                                                <div class="alert-body">
                                                    <button class="close"
                                                        data-dismiss="alert"><span>&times;</span></button>
                                                    <strong>{{ $errors->first('comuna') }}</strong>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-lg-12">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary mr-1 waves-effect">Siguiente <i
                                                class="fas fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="modal fade" id="modalINVI" tabindex="-1" role="dialog" aria-labelledby="formModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Índice de vinculación INVI</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md" id="table-1"
                            style="border-top: 1px ghostwhite solid;">
                            <tbody>
                                <tr>
                                    <td><strong>Mecanismo</strong></td>
                                    <td id="mecanismo-nombre"></td>
                                    <td id="mecanismo-puntaje"></td>
                                </tr>
                                <tr>
                                    <td><strong>Frecuencia</strong></td>
                                    <td id="frecuencia-nombre"></td>
                                    <td id="frecuencia-puntaje"></td>
                                </tr>
                                <tr>
                                    <td><strong>Resultados</strong></td>
                                    <td id="resultados-nombre"></td>
                                    <td id="resultados-puntaje"></td>
                                </tr>
                                <tr>
                                    <td><strong>Cobertura</strong></td>
                                    <td id="cobertura-nombre"></td>
                                    <td id="cobertura-puntaje"></td>
                                </tr>
                                <tr>
                                    <td><strong>Evaluación</strong></td>
                                    <td id="evaluacion-nombre"></td>
                                    <td id="evaluacion-puntaje"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h6>Índice de vinculación INVI</h6>
                                    </td>
                                    <td id="valor-indice"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('/js/admin/iniciativas/INVI.js') }}"></script>
    <script>

        $(document).ready(function() {
            actividadesByMecanismos();
            comunasByRegiones();
            selectAllRegiones();
            selectAllComunas();
            selectAllEscuelas();
            selectAllCarreras();
            carrerasByEscuelas();
            // $('#programas').on('change', function() {
            //     selectTiposActividades();
            // });

            // // Llamada inicial
            // selectTiposActividades();
        });

        function selectAllRegiones() {
            $('#selectAllRegiones').change(function() {
                const selectAll = $(this).prop('checked');
                $('#region option').prop('selected', selectAll);
                $('#region').trigger('change');
            });
        }

        function selectAllComunas() {
            $('#selectAllComunas').change(function() {
                const selectAll = $(this).prop('checked');
                $('#comuna option').prop('selected', selectAll);
                $('#comuna').trigger('change');
            });
        }


        function selectAllCarreras() {
            $('#selectAllCarreras').change(function() {
                const selectAll = $(this).prop('checked');
                $('#carreras option').prop('selected', selectAll);
                $('#carreras').trigger('change');
            });
        }

        function selectAllEscuelas() {
            $('#selectAllEscuelas').change(function() {
                const selectAll = $(this).prop('checked');
                $('#escuelas option').prop('selected', selectAll);
                $('#escuelas').trigger('change');
            });
        }

        function actividadesByMecanismos() {
            $('#mecanismos').on('change', function() {
                console.log("first")
                $.ajax({
                    url: window.location.origin + '/admin/iniciativas/obtener-actividades',
                    type: 'POST',
                    dataType: 'json',

                    data: {
                        _token: '{{ csrf_token() }}',
                        mecanismo: $('#mecanismos').val()
                    },
                    success: function(data) {
                        $('#tactividad').empty();
                        $.each(data, function(key, value) {
                            $('#tactividad').append(
                                `<option value="${value.tiac_codigo}">${value.tiac_nombre}</option>`
                            );
                        });
                    }
                });

            })
        }

        function seleccionarTerritorio() {
            var territorio = $('#territorio').val();

            if (territorio == 'nacional') {
                $('#regiones_div').show();
                $('#comunas_div').show();
                $.ajax({
                    url: window.location.origin + '/admin/iniciativas/obtener-pais',
                    type: 'POST',
                    dataType: 'json',

                    data: {
                        _token: '{{ csrf_token() }}',
                        pais: territorio
                    },
                    success: function(data) {
                        $('#pais').empty();
                        // $('#pais').append('<option>Seleccione...</option>')
                        $.each(data, function(key, value) {
                            $('#pais').append(
                                `<option value="${value.pais_codigo}">${value.pais_nombre}</option>`
                            );
                        });
                    }
                });

            } else {
                $('#regiones_div').hide();
                $('#comunas_div').hide();
                $.ajax({
                    url: window.location.origin + '/admin/iniciativas/obtener-pais',
                    type: 'POST',
                    dataType: 'json',

                    data: {
                        _token: '{{ csrf_token() }}',
                        pais: territorio
                    },
                    success: function(data) {
                        $('#pais').empty();
                        // $('#pais').append('<option>Seleccione...</option>')
                        $.each(data, function(key, value) {
                            $('#pais').append(
                                `<option value="${value.pais_codigo}">${value.pais_nombre}</option>`
                            );
                        });
                    }
                });
            }
        }

        function comunasByRegiones() {
            $('#region').on('change', function() {
                var regionesId = $(this).val();
                if (regionesId) {
                    $.ajax({
                        url: window.location.origin + '/admin/iniciativas/obtener-comunas',
                        type: 'POST',
                        dataType: 'json',

                        data: {
                            _token: '{{ csrf_token() }}',
                            regiones: regionesId
                        },
                        success: function(data) {
                            $('#comuna').empty();
                            $.each(data, function(key, value) {
                                $('#comuna').append(
                                    `<option value="${value.comu_codigo}">${value.comu_nombre}</option>`
                                );
                            });
                        }
                    });
                }
            })
        }

        function carrerasByEscuelas() {
            const escuelasSelect = $("#escuelas");
            const carrerasSelect = $("#carreras");
            const carrerasOptions = {!! json_encode($carreras) !!};

            escuelasSelect.on("change", function() {
                const selectedEscuelas = escuelasSelect.val();

                const filteredCarreras = carrerasOptions.filter(carrera => selectedEscuelas.includes(carrera
                    .escu_codigo.toString()));

                carrerasSelect.empty();
                if (filteredCarreras.length > 0) {
                    $.each(filteredCarreras, function(index, carrera) {
                        carrerasSelect.append($("<option></option>").attr("value", carrera.care_codigo)
                            .text(carrera.care_nombre));
                    });
                } else {
                    carrerasSelect.append($("<option></option>").attr("value", "-1").text("No existen registros"));
                }
            });
        }
    </script>
    <script src="{{ asset('/js/admin/iniciativas/INVI.js') }}"></script>
@endsection
