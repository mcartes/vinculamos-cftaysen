@extends('admin.panel')
@section('contenido')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <div class="card card-success">
                        <div class="card-header" style="display: flex; justify-content: center; align-items: center;">
                            <h4>Análisis General de Vinculación con el Medio </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="card l-bg-green">
                                        <div class="card-statistic-3">
                                            <div class="card-icon card-icon-large"><i class="fa fa-award"></i></div>
                                            <div class="card-content">
                                                <h3 class="font-light mb-0"
                                                    style="display: flex; justify-content: center; align-items: center;">
                                                    @if (count($nIniciativas) > 0)
                                                        <i class="ti-arrow-up text-success"></i> <label
                                                            style="font-size: 80%">{{ count($nIniciativas) }}</label>
                                                    @else
                                                        <i class="ti-arrow-up text-success"></i> <label
                                                            style="font-size: 80%">No
                                                            hay registro</label>
                                                    @endif
                                                </h3>
                                                <h4 class="card-title"
                                                    style="display: flex; justify-content: center; align-items: center;">
                                                    Iniciativas
                                                </h4>

                                                <p class="mb-0 text-sm">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-4 col-lg-6">
                                    <div class="card card-statistic-2">
                                        <div class="card-icon l-bg-green">
                                            <i class="fas fa-map-marked-alt"></i>
                                        </div>
                                        <div class="card-wrap">
                                            <div class="padding-20">
                                                <div class="text-right">
                                                    <h3 class="font-light mb-0">
                                                        @if (count($comunas) > 0)
                                                            <i class="ti-arrow-up text-success"></i> <label
                                                                style="font-size: 80%">{{ count($comunas) }}</label>
                                                        @else
                                                            <i class="ti-arrow-up text-success"></i> <label
                                                                style="font-size: 80%">No hay registro</label>
                                                        @endif
                                                    </h3>
                                                    <h5 class="card-title">Comunas</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6">
                                    <div class="card card-statistic-2">
                                        <div class="card-icon l-bg-cyan">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="card-wrap">
                                            <div class="padding-20">
                                                <div class="text-right">
                                                    <h3 class="font-light mb-0">
                                                        @if (count($nEstudiantes) > 0)
                                                            <i class="ti-arrow-up text-success"></i> <label
                                                                style="font-size: 80%">{{ $nEstudiantes[0]->estudiantes }}</label>
                                                        @else
                                                            <i class="ti-arrow-up text-success"></i> <label
                                                                style="font-size: 80%">No hay registro</label>
                                                        @endif
                                                    </h3>
                                                    <h5 class="card-title">Estudiantes</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6">
                                    <div class="card card-statistic-2">
                                        <div class="card-icon l-bg-orange">
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                        <div class="card-wrap">
                                            <div class="padding-20">
                                                <div class="text-right">
                                                    <h3 class="font-light mb-0">
                                                        @if (count($nDocentes) > 0)
                                                            <i class="ti-arrow-up text-success"></i> <label
                                                                style="font-size: 80%">{{ $nDocentes[0]->docentes }}</label>
                                                        @else
                                                            <i class="ti-arrow-up text-success"></i> <label
                                                                style="font-size: 80%">No hay registro</label>
                                                        @endif
                                                    </h3>
                                                    <h5 class="card-title">Docentes</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xl-4 col-lg-6">
                                    <div class="card card-statistic-2">
                                        <div class="card-icon l-bg-green">
                                            <i class="fas fa-users-cog"></i>
                                        </div>
                                        <div class="card-wrap">
                                            <div class="padding-20">
                                                <div class="text-right">
                                                    <h3 class="font-light mb-0">
                                                        @if (count($nSocios) > 0)
                                                            <i class="ti-arrow-up text-success"></i> <label
                                                                style="font-size: 80%">{{ count($nSocios) }}</label>
                                                        @else
                                                            <i class="ti-arrow-up text-success"></i> <label
                                                                style="font-size: 80%">No hay registro</label>
                                                        @endif
                                                    </h3>
                                                    <h5 class="card-title">Socios/as Comunitarios</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6">
                                    <div class="card card-statistic-2">
                                        <div class="card-icon l-bg-purple">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <div class="card-wrap">
                                            <div class="padding-20">
                                                <div class="text-right">
                                                    <h3 class="font-light mb-0">
                                                        @if (count($nBeneficiarios) > 0)
                                                            <i class="ti-arrow-up text-success"></i> <label
                                                                style="font-size: 80%">{{ $nBeneficiarios[0]->beneficiarios }}</label>
                                                        @else
                                                            <i class="ti-arrow-up text-success"></i> <label
                                                                style="font-size: 80%">No hay registro</label>
                                                        @endif

                                                    </h3>
                                                    <h5 class="card-title">Beneficiarios y beneficiarias</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6">
                                    <div class="card card-statistic-2">
                                        <div class="card-icon l-bg-cyan-dark">
                                            <i class="fas fa-user-graduate"></i>
                                        </div>
                                        <div class="card-wrap">
                                            <div class="padding-20">
                                                <div class="text-right">
                                                    <h3 class="font-light mb-0">
                                                        @if ($nTitulados[0]->titulados == null)
                                                            <i class="ti-arrow-up text-success"></i> <label
                                                                style="font-size: 60%">No hay datos</label>
                                                        @else
                                                            <i class="ti-arrow-up text-success"></i> <label
                                                                style="font-size: 80%">{{ $nTitulados[0]->titulados }}</label>
                                                        @endif
                                                    </h3>
                                                    <h5 class="card-title">Titulados/as</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- //TODO: Cobertura x Sede --}}
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h5 style="margin-right: 10%">Cobertura por sede</h5>
                            <div class="card-header-action">
                                <select class="form-control select2" id="select_sede" name="select_sede"
                                    onchange="cargarSedes()" style="width: 100%">
                                    <option value="" disabled style="font-size: 40%">Seleccione
                                        sede ...</option>
                                    <option value="all">Todas las sedes</option>
                                    @forelse ($sedes as $sede)
                                        <option value="{{ $sede->sede_codigo }}">
                                            {{ $sede->sede_nombre }}</option>
                                    @empty
                                        <option value="-1">No existen registros</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row">

                                <div class="col-xl-4 col-lg-6">
                                    <div class="card l-bg-cyan">
                                        <div class="card-statistic-3">
                                            <div class="card-icon card-icon-large">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div class="card-content">
                                                <h4 class="card-title">Estudiantes</h4>
                                                <h6 id="sede_estudiantes" class="card-title"></h6>
                                                {{-- TODO: BARRA DE PROGRESO,es necesario modificar el style: width para que la barra de progreso avance --}}
                                                <div class="progress mt-1 mb-1" data-height="8" style="height: 8px;">
                                                    <div class="progress-bar l-bg-orange" role="progressbar"
                                                        aria-valuemin="0" aria-valuemax="100" style="width: 0%"
                                                        id="sede_estudiantes_porcentaje_bar"></div>
                                                </div>
                                                <p class="mb0 text-sm">
                                                <h6 class="card-title" id="sede_estudiantes_porcentaje">

                                                </h6>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6">
                                    <div class="card l-bg-orange">
                                        <div class="card-statistic-3">
                                            <div class="card-icon card-icon-large">
                                                <i class="fa fa-user-tie"></i>
                                            </div>
                                            <div class="card-content">
                                                <h4 class="card-title">Docentes</h4>
                                                <h6 id="sede_docentes" class="card-title"></h6>
                                                {{-- TODO: BARRA DE PROGRESO,es necesario modificar el style: width para que la barra de progreso avance --}}
                                                <div class="progress mt-1 mb-1" data-height="8" style="height: 8px;">
                                                    <div class="progress-bar l-bg-cyan" role="progressbar"
                                                        aria-valuemin="0" aria-valuemax="100" style="width: 0%"
                                                        id="sede_docentes_porcentaje_bar"></div>
                                                </div>
                                                <p class="mb0 text-sm">
                                                <h6 class="card-title" id="sede_docentes_porcentaje">

                                                </h6>
                                                {{-- <span class="text-nowrap">Completado</span> --}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6">
                                    <div class="card l-bg-green">
                                        <div class="card-statistic-3">
                                            <div class="card-icon card-icon-large">
                                                <i class="fa fa-award"></i>
                                            </div>
                                            <div class="card-content">
                                                <h4 class="card-title">Iniciativas</h4>
                                                <h6 id="iniciativas_sedes" class="card-title"></h6>
                                                {{-- TODO: BARRA DE PROGRESO,es necesario modificar el style: width para que la barra de progreso avance --}}
                                                <div class="progress mt-1 mb-1" data-height="8" style="height: 8px;">
                                                    <div class="progress-bar l-bg-cyan" role="progressbar"
                                                        aria-valuemin="0" aria-valuemax="100" style="width: 0%"
                                                        id="iniciativas_sedes_porcentaje_bar"></div>
                                                </div>
                                                <p class="mb0 text-sm">
                                                <h6 class="card-title" id="iniciativas_sedes_porcentaje">

                                                </h6>
                                                {{-- <span class="text-nowrap">Completado</span> --}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                {{-- <div class="col-xl-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Iniciativas por subgrupos</h4>
                                        </div>
                                        <div class="card-body">
                                            <div id="iniciativaXsubgrupo"></div>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-xl-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Iniciativas por grupos</h4>
                                        </div>
                                        <div class="card-body">
                                            <h5 id="iniciativaXgrupoError"></h5>
                                            <div id="iniciativaXgrupo"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Iniciativas por comuna</h4>
                                        </div>
                                        <div class="card-body">
                                            <h5 id="iniciativaXcomunaError"></h5>
                                            <div id="iniciativaXcomuna"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Iniciativas por estado</h4>
                                        </div>
                                        <div class="card-body">
                                            <h5 id="iniciativaXestadoError"></h5>
                                            <div id="iniciativaXestado"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Iniciativas por año</h4>
                                        </div>
                                        <div class="card-body">
                                            <h5 id="iniciativaXanhoError"></h5>
                                            <div id="iniciativaXanho"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Iniciativas por comuna</h4>
                                        </div>
                                        <div class="card-body">
                                            <div id="iniciativaXcomuna"></div>
                                        </div>
                                    </div>
                                </div>


                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                {{-- //TODO: Cobertura x Escuela --}}
                <div class="col-12 col-md-12 col-lg-12" style="display: none">
                    <div class="card card-success">
                        <div class="card-header">
                            <h5 style="margin-right:10%;">Cobertura por área</h5>
                            <div class="card-header-action">
                                <select class="form-control select2" id="select_escuela" name="select_escuela"
                                    onchange="cargarEscuelas()" style="width: 100%">

                                </select>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-xl-4 col-lg-6">
                                    <div class="card l-bg-cyan">
                                        <div class="card-statistic-3">
                                            <div class="card-icon card-icon-large">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div class="card-content">
                                                <h4 class="card-title">Estudiantes</h4>
                                                <h6 id="escuelas_estudiantes" class="card-title"></h6>
                                                <div class="progress mt-1 mb-1" data-height="8" style="height: 8px;">
                                                    <div class="progress-bar l-bg-orange" role="progressbar"
                                                        aria-valuemin="0" aria-valuemax="100" style="width: 0%"
                                                        id="escuelas_estudiantes_porcentaje_bar"></div>
                                                </div>
                                                <p class="mb0 text-sm">
                                                <h6 class="mr-2" id="escuelas_estudiantes_porcentaje">

                                                </h6>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6">
                                    <div class="card l-bg-orange">
                                        <div class="card-statistic-3">
                                            <div class="card-icon card-icon-large">
                                                <i class="fa fa-user-tie"></i>
                                            </div>
                                            <div class="card-content">
                                                <h4 class="card-title">Docentes</h4>
                                                <h6 id="escuelas_docentes" class="card-title"></h6>
                                                <div class="progress mt-1 mb-1" data-height="8" style="height: 8px;">
                                                    <div class="progress-bar l-bg-cyan" role="progressbar"
                                                        aria-valuemin="0" aria-valuemax="100" style="width: 0%"
                                                        id="escuelas_docentes_porcentaje_bar"></div>
                                                </div>
                                                <p class="mb0 text-sm">
                                                <h6 class="card-title" id="escuelas_docentes_porcentaje">

                                                </h6>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6">
                                    <div class="card l-bg-green">
                                        <div class="card-statistic-3">
                                            <div class="card-icon card-icon-large">
                                                <i class="fa fa-award"></i>
                                            </div>
                                            <div class="card-content">
                                                <h4 class="card-title">Iniciativas</h4>
                                                <h6 id="escuelas_iniciativas" class="card-title"></h6>
                                                {{-- TODO: BARRA DE PROGRESO,es necesario modificar el style: width para que la barra de progreso avance --}}
                                                <div class="progress mt-1 mb-1" data-height="8" style="height: 8px;">
                                                    <div class="progress-bar l-bg-cyan" role="progressbar"
                                                        aria-valuemin="0" aria-valuemax="100" style="width: 0%"
                                                        id="escuelas_iniciativas_porcentaje_bar"></div>
                                                </div>
                                                <p class="mb0 text-sm">
                                                <h6 class="card-title" id="escuelas_iniciativas_porcentaje">

                                                </h6>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                {{-- <div class="col-xl-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Iniciativas por subgrupos</h4>
                                        </div>
                                        <div class="card-body">
                                            <div id="iniciativaXsubgrupoEscuela"></div>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-xl-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Iniciativas por grupos</h4>
                                        </div>
                                        <div class="card-body">
                                            <h5 id="iniciativaXgrupoEscuelaError"></h5>
                                            <div id="iniciativaXgrupoEscuela"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Iniciativas por comuna</h4>
                                        </div>
                                        <div class="card-body">
                                            <h5 id="iniciativaXcomunaEscuelaError"></h5>
                                            <div id="iniciativaXcomunaEscuelas"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Iniciativas por estado</h4>
                                        </div>
                                        <div class="card-body">
                                            <h5 id="iniciativaXestadoEscuelaError"></h5>
                                            <div id="iniciativaXestadoEscuelas"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Iniciativas por estado</h4>
                                        </div>
                                        <div class="card-body">
                                            <h5 id="iniciativaXanhoEscuelaError"></h5>
                                            <div id="iniciativaXanhoEscuelas"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Iniciativas por comuna</h4>
                                        </div>
                                        <div class="card-body">
                                            <div id="iniciativaXcomunaEscuelas"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- //TODO: Cobertura x APOYO A PYMES --}}
                <div class="col-xl-6 col-md-6 col-lg-6" style="display: none">
                    <div class="card card-success">
                        <div class="card-header">
                            <h6 class="card-title">Cobertura por programa: <br>APOYO A PYMES</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Grupo</th>
                                                            <th>Participantes</th>
                                                            <th>Avance</th>
                                                            <th>Meta Global</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Estudiantes</td>
                                                            <td id="prog_1_estu" name="prog_1_estu">
                                                                {{ $programa1_avance[0]->total_estudiantes ?? 0 }}</td>
                                                            <td class="align-middle">
                                                                <div class="progress-text" id="prog_1_estu_bar_label"
                                                                    name="prog_1_estu_bar_label">
                                                                    @php
                                                                        $total =
                                                                            $programa1_m[0]->prog_meta_estudiantes ?? 0;
                                                                        $avance =
                                                                            $programa1_avance[0]->total_estudiantes ??
                                                                            0;
                                                                        $porcentaje =
                                                                            $total > 0
                                                                                ? min(($avance / $total) * 100, 100)
                                                                                : 100;
                                                                        $porcentaje = number_format($porcentaje, 1);
                                                                    @endphp
                                                                    {{ $porcentaje }}%
                                                                </div>
                                                                <div class="progress" data-height="6">
                                                                    <div class="progress-bar" id="prog_1_estu_avance"
                                                                        name="prog_1_estu_avance"
                                                                        style="width: {{ $porcentaje }}%">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td id="prog_1_estu_meta" name="prog_1_estu_meta">
                                                                {{ $programa1_m[0]->prog_meta_estudiantes ?? 0 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Docentes</td>
                                                            <td id="prog_1_doce" name="prog_1_doce">
                                                                {{ $programa1_avance[0]->total_docentes ?? 0 }}</td>
                                                            <td class="align-middle">
                                                                <div class="progress-text" id="prog_1_doce_bar_label"
                                                                    name="prog_1_doce_bar_label">
                                                                    @php
                                                                        $total =
                                                                            $programa1_m[0]->prog_meta_docentes ?? 0;
                                                                        $avance =
                                                                            $programa1_avance[0]->total_docentes ?? 0;
                                                                        $porcentaje =
                                                                            $total > 0
                                                                                ? min(($avance / $total) * 100, 100)
                                                                                : 100;
                                                                        $porcentaje = number_format($porcentaje, 1);
                                                                    @endphp
                                                                    {{ $porcentaje }}%
                                                                </div>
                                                                <div class="progress" data-height="6">
                                                                    <div class="progress-bar bg-orange"
                                                                        id="prog_1_doce_avance" name="prog_1_doce_avance"
                                                                        style="width: {{ $porcentaje }}%">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td id="prog_1_doce_meta" name="prog_1_doce_meta">
                                                                {{ $programa1_m[0]->prog_meta_docentes ?? 0 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Socios/as comunitarios</td>
                                                            <td id="prog_1_soci" name="prog_1_soci">
                                                                {{ $programa1_avance[0]->total_socios ?? 0 }}</td>
                                                            <td class="align-middle">
                                                                <div class="progress-text" id="prog_1_soci_bar_label"
                                                                    name="prog_1_soci_bar_label">
                                                                    @php
                                                                        $total = $programa1_m[0]->prog_meta_socios ?? 0;
                                                                        $avance =
                                                                            $programa1_avance[0]->total_socios ?? 0;
                                                                        $porcentaje =
                                                                            $total > 0
                                                                                ? min(($avance / $total) * 100, 100)
                                                                                : 100;
                                                                        $porcentaje = number_format($porcentaje, 1);
                                                                    @endphp
                                                                    {{ $porcentaje }}%</div>
                                                                <div class="progress" data-height="6">
                                                                    <div class="progress-bar bg-cyan"
                                                                        id="prog_1_soci_avance" name="prog_1_soci_avance"
                                                                        style="width: {{ $porcentaje }}%">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td id="prog_1_soci_meta" name="prog_1_soci_meta">
                                                                {{ $programa1_m[0]->prog_meta_socios ?? 0 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Beneficiarios y beneficiarias</td>
                                                            <td id="prog_1_bene" name="prog_1_bene">
                                                                {{ $programa1_avance[0]->total_beneficiarios ?? 0 }}</td>
                                                            <td class="align-middle">
                                                                <div class="progress-text" id="prog_1_bene_bar_label"
                                                                    name="prog_1_bene_bar_label">
                                                                    @php
                                                                        $total =
                                                                            $programa1_m[0]->prog_meta_beneficiarios ??
                                                                            0;
                                                                        $avance =
                                                                            $programa1_avance[0]->total_beneficiarios ??
                                                                            0;
                                                                        $porcentaje =
                                                                            $total > 0
                                                                                ? min(($avance / $total) * 100, 100)
                                                                                : 100;
                                                                        $porcentaje = number_format($porcentaje, 1);
                                                                    @endphp
                                                                    {{ $porcentaje }}%
                                                                    <div class="progress" data-height="6">
                                                                        <div class="progress-bar bg-purple"
                                                                            id="prog_1_bene_avance"
                                                                            name="prog_1_bene_avance"
                                                                            style="width: {{ $porcentaje }}%"></div>
                                                                    </div>
                                                            </td>
                                                            <td id="prog_1_bene_meta" name="prog_1_bene_meta">
                                                                {{ $programa1_m[0]->prog_meta_beneficiarios ?? 0 }}</td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- //TODO: Cobertura x FOMENTA DE LA EMPLEABILIDAD --}}
                <div class="col-xl-6 col-md-6 col-lg-6" style="display: none">
                    <div class="card card-success">
                        <div class="card-header">
                            <h6 class="card-title">Cobertura por programa: <br>FOMENTO DE LA EMPLEABILIDAD</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Grupo</th>
                                                            <th>Participantes</th>
                                                            <th>Avance</th>
                                                            <th>Meta Global</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Estudiantes</td>
                                                            <td id="prog_2_estu" name="prog_2_estu">
                                                                {{ $programa2_avance[0]->total_estudiantes ?? 0 }}</td>
                                                            <td class="align-middle">
                                                                <div class="progress-text" id="prog_2_estu_bar_label"
                                                                    name="prog_2_estu_bar_label">
                                                                    @php
                                                                        $total =
                                                                            $programa2_m[0]->prog_meta_estudiantes ?? 0;
                                                                        $avance =
                                                                            $programa2_avance[0]->total_estudiantes ??
                                                                            0;
                                                                        $porcentaje =
                                                                            $total > 0
                                                                                ? min(($avance / $total) * 100, 100)
                                                                                : 100;
                                                                        $porcentaje = number_format($porcentaje, 1);
                                                                    @endphp
                                                                    {{ $porcentaje }}%
                                                                </div>
                                                                <div class="progress" data-height="6">
                                                                    <div class="progress-bar" id="prog_2_estu_avance"
                                                                        name="prog_2_estu_avance"
                                                                        style="width: {{ $porcentaje }}%">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td id="prog_2_estu_meta" name="prog_2_estu_meta">
                                                                {{ $programa2_m[0]->prog_meta_estudiantes ?? 0 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Docentes</td>
                                                            <td id="prog_2_doce" name="prog_2_doce">
                                                                {{ $programa2_avance[0]->total_docentes ?? 0 }}</td>
                                                            <td class="align-middle">
                                                                <div class="progress-text" id="prog_2_doce_bar_label"
                                                                    name="prog_2_doce_bar_label">
                                                                    @php
                                                                        $total =
                                                                            $programa2_m[0]->prog_meta_docentes ?? 0;
                                                                        $avance =
                                                                            $programa2_avance[0]->total_docentes ?? 0;
                                                                        $porcentaje =
                                                                            $total > 0
                                                                                ? min(($avance / $total) * 100, 100)
                                                                                : 100;
                                                                        $porcentaje = number_format($porcentaje, 1);
                                                                    @endphp
                                                                    {{ $porcentaje }}%
                                                                </div>
                                                                <div class="progress" data-height="6">
                                                                    <div class="progress-bar bg-orange"
                                                                        id="prog_2_doce_avance" name="prog_2_doce_avance"
                                                                        style="width: {{ $porcentaje }}%">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td id="prog_2_doce_meta" name="prog_2_doce_meta">
                                                                {{ $programa2_m[0]->prog_meta_docentes ?? 0 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Socios/as comunitarios</td>
                                                            <td id="prog_2_soci" name="prog_2_soci">
                                                                {{ $programa2_avance[0]->total_socios ?? 0 }}</td>
                                                            <td class="align-middle">
                                                                <div class="progress-text" id="prog_2_soci_bar_label"
                                                                    name="prog_2_soci_bar_label">
                                                                    @php
                                                                        $total = $programa2_m[0]->prog_meta_socios ?? 0;
                                                                        $avance =
                                                                            $programa2_avance[0]->total_socios ?? 0;
                                                                        $porcentaje =
                                                                            $total > 0
                                                                                ? min(($avance / $total) * 100, 100)
                                                                                : 100;
                                                                        $porcentaje = number_format($porcentaje, 1);
                                                                    @endphp
                                                                    {{ $porcentaje }}%</div>
                                                                <div class="progress" data-height="6">
                                                                    <div class="progress-bar bg-cyan"
                                                                        id="prog_2_soci_avance" name="prog_2_soci_avance"
                                                                        style="width: {{ $porcentaje }}%">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td id="prog_2_soci_meta" name="prog_2_soci_meta">
                                                                {{ $programa2_m[0]->prog_meta_socios ?? 0 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Beneficiarios y beneficiarias</td>
                                                            <td id="prog_2_bene" name="prog_2_bene">
                                                                {{ $programa2_avance[0]->total_beneficiarios ?? 0 }}</td>
                                                            <td class="align-middle">
                                                                <div class="progress-text" id="prog_2_bene_bar_label"
                                                                    name="prog_2_bene_bar_label">
                                                                    @php
                                                                        $total =
                                                                            $programa2_m[0]->prog_meta_beneficiarios ??
                                                                            0;
                                                                        $avance =
                                                                            $programa2_avance[0]->total_beneficiarios ??
                                                                            0;
                                                                        $porcentaje =
                                                                            $total > 0
                                                                                ? min(($avance / $total) * 100, 100)
                                                                                : 100;
                                                                        $porcentaje = number_format($porcentaje, 1);
                                                                    @endphp
                                                                    {{ $porcentaje }}%
                                                                    <div class="progress" data-height="6">
                                                                        <div class="progress-bar bg-purple"
                                                                            id="prog_2_bene_avance"
                                                                            name="prog_2_bene_avance"
                                                                            style="width: {{ $porcentaje }}%"></div>
                                                                    </div>
                                                            </td>
                                                            <td id="prog_2_bene_meta" name="prog_2_bene_meta">
                                                                {{ $programa2_m[0]->prog_meta_beneficiarios ?? 0 }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- //TODO: Cobertura x APRENDIZAJE MÁS SERVICIO --}}
                <div class="col-xl-6 col-md-6 col-lg-6" style="display: none">
                    <div class="card card-success">
                        <div class="card-header">
                            <h6 class="card-title">Cobertura por programa: <br>APRENDIZAJE Y SERVICIO</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Grupo</th>
                                                            <th>Participantes</th>
                                                            <th>Avance</th>
                                                            <th>Meta Global</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Estudiantes</td>
                                                            <td id="prog_3_estu" name="prog_3_estu">
                                                                {{ $programa3_avance[0]->total_estudiantes ?? 0 }}</td>
                                                            <td class="align-middle">
                                                                <div class="progress-text" id="prog_3_estu_bar_label"
                                                                    name="prog_3_estu_bar_label">
                                                                    @php
                                                                        $total =
                                                                            $programa3_m[0]->prog_meta_estudiantes ?? 0;
                                                                        $avance =
                                                                            $programa3_avance[0]->total_estudiantes ??
                                                                            0;
                                                                        $porcentaje =
                                                                            $total > 0
                                                                                ? min(($avance / $total) * 100, 100)
                                                                                : 100;
                                                                        $porcentaje = number_format($porcentaje, 1);
                                                                    @endphp
                                                                    {{ $porcentaje }}%
                                                                </div>
                                                                <div class="progress" data-height="6">
                                                                    <div class="progress-bar" id="prog_3_estu_avance"
                                                                        name="prog_3_estu_avance"
                                                                        style="width: {{ $porcentaje }}%">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td id="prog_3_estu_meta" name="prog_3_estu_meta">
                                                                {{ $programa3_m[0]->prog_meta_estudiantes ?? 0 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Docentes</td>
                                                            <td id="prog_3_doce" name="prog_3_doce">
                                                                {{ $programa3_avance[0]->total_docentes ?? 0 }}</td>
                                                            <td class="align-middle">
                                                                <div class="progress-text" id="prog_3_doce_bar_label"
                                                                    name="prog_3_doce_bar_label">
                                                                    @php
                                                                        $total =
                                                                            $programa3_m[0]->prog_meta_docentes ?? 0;
                                                                        $avance =
                                                                            $programa3_avance[0]->total_docentes ?? 0;
                                                                        $porcentaje =
                                                                            $total > 0
                                                                                ? min(($avance / $total) * 100, 100)
                                                                                : 100;
                                                                        $porcentaje = number_format($porcentaje, 1);
                                                                    @endphp
                                                                    {{ $porcentaje }}%
                                                                </div>
                                                                <div class="progress" data-height="6">
                                                                    <div class="progress-bar bg-orange"
                                                                        id="prog_3_doce_avance" name="prog_3_doce_avance"
                                                                        style="width: {{ $porcentaje }}%">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td id="prog_3_doce_meta" name="prog_3_doce_meta">
                                                                {{ $programa3_m[0]->prog_meta_docentes ?? 0 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Socios/as comunitarios</td>
                                                            <td id="prog_3_soci" name="prog_3_soci">
                                                                {{ $programa3_avance[0]->total_socios ?? 0 }}</td>
                                                            <td class="align-middle">
                                                                <div class="progress-text" id="prog_3_soci_bar_label"
                                                                    name="prog_3_soci_bar_label">
                                                                    @php
                                                                        $total = $programa3_m[0]->prog_meta_socios ?? 0;
                                                                        $avance =
                                                                            $programa3_avance[0]->total_socios ?? 0;
                                                                        $porcentaje =
                                                                            $total > 0
                                                                                ? min(($avance / $total) * 100, 100)
                                                                                : 100;
                                                                        $porcentaje = number_format($porcentaje, 1);
                                                                    @endphp
                                                                    {{ $porcentaje }}%</div>
                                                                <div class="progress" data-height="6">
                                                                    <div class="progress-bar bg-cyan"
                                                                        id="prog_3_soci_avance" name="prog_3_soci_avance"
                                                                        style="width: {{ $porcentaje }}%">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td id="prog_3_soci_meta" name="prog_3_soci_meta">
                                                                {{ $programa3_m[0]->prog_meta_socios ?? 0 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Beneficiarios y beneficiarias</td>
                                                            <td id="prog_3_bene" name="prog_3_bene">
                                                                {{ $programa3_avance[0]->total_beneficiarios ?? 0 }}</td>
                                                            <td class="align-middle">
                                                                <div class="progress-text" id="prog_3_bene_bar_label"
                                                                    name="prog_3_bene_bar_label">
                                                                    @php
                                                                        $total =
                                                                            $programa3_m[0]->prog_meta_beneficiarios ??
                                                                            0;
                                                                        $avance =
                                                                            $programa3_avance[0]->total_beneficiarios ??
                                                                            0;
                                                                        $porcentaje =
                                                                            $total > 0
                                                                                ? min(($avance / $total) * 100, 100)
                                                                                : 100;
                                                                        $porcentaje = number_format($porcentaje, 1);
                                                                    @endphp
                                                                    {{ $porcentaje }}%
                                                                    <div class="progress" data-height="6">
                                                                        <div class="progress-bar bg-purple"
                                                                            id="prog_3_bene_avance"
                                                                            name="prog_3_bene_avance"
                                                                            style="width: {{ $porcentaje }}%"></div>
                                                                    </div>
                                                            </td>
                                                            <td id="prog_3_bene_meta" name="prog_3_bene_meta">
                                                                {{ $programa3_m[0]->prog_meta_beneficiarios ?? 0 }}</td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- //TODO: Cobertura x INNOVACIÓN Y EMPRENDIMIENTO --}}
                <div class="col-xl-6 col-md-6 col-lg-6" style="display: none">
                    <div class="card card-success">
                        <div class="card-header">
                            <h6 class="card-title">Cobertura por programa: <br>INNOVACIÓN Y EMPRENDIMIENTO</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Grupo</th>
                                                            <th>Participantes</th>
                                                            <th>Avance</th>
                                                            <th>Meta Global</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Estudiantes</td>
                                                            <td id="prog_4_estu" name="prog_4_estu">
                                                                {{ $programa4_avance[0]->total_estudiantes ?? 0 }}</td>
                                                            <td class="align-middle">
                                                                <div class="progress-text" id="prog_4_estu_bar_label"
                                                                    name="prog_4_estu_bar_label">
                                                                    @php
                                                                        $total =
                                                                            $programa4_m[0]->prog_meta_estudiantes ?? 0;
                                                                        $avance =
                                                                            $programa4_avance[0]->total_estudiantes ??
                                                                            0;
                                                                        $porcentaje =
                                                                            $total > 0
                                                                                ? min(($avance / $total) * 100, 100)
                                                                                : 100;
                                                                        $porcentaje = number_format($porcentaje, 1);
                                                                    @endphp
                                                                    {{ $porcentaje }}%
                                                                </div>
                                                                <div class="progress" data-height="6">
                                                                    <div class="progress-bar" id="prog_4_estu_avance"
                                                                        name="prog_4_estu_avance"
                                                                        style="width: {{ $porcentaje }}%">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td id="prog_4_estu_meta" name="prog_4_estu_meta">
                                                                {{ $programa4_m[0]->prog_meta_estudiantes ?? 0 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Docentes</td>
                                                            <td id="prog_4_doce" name="prog_4_doce">
                                                                {{ $programa4_avance[0]->total_docentes ?? 0 }}</td>
                                                            <td class="align-middle">
                                                                <div class="progress-text" id="prog_4_doce_bar_label"
                                                                    name="prog_4_doce_bar_label">
                                                                    @php
                                                                        $total =
                                                                            $programa4_m[0]->prog_meta_docentes ?? 0;
                                                                        $avance =
                                                                            $programa4_avance[0]->total_docentes ?? 0;
                                                                        $porcentaje =
                                                                            $total > 0
                                                                                ? min(($avance / $total) * 100, 100)
                                                                                : 100;
                                                                        $porcentaje = number_format($porcentaje, 1);
                                                                    @endphp
                                                                    {{ $porcentaje }}%
                                                                </div>
                                                                <div class="progress" data-height="6">
                                                                    <div class="progress-bar bg-orange"
                                                                        id="prog_4_doce_avance" name="prog_4_doce_avance"
                                                                        style="width: {{ $porcentaje }}%">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td id="prog_4_doce_meta" name="prog_4_doce_meta">
                                                                {{ $programa4_m[0]->prog_meta_docentes ?? 0 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Socios/as comunitarios</td>
                                                            <td id="prog_4_soci" name="prog_4_soci">
                                                                {{ $programa4_avance[0]->total_socios ?? 0 }}</td>
                                                            <td class="align-middle">
                                                                <div class="progress-text" id="prog_4_soci_bar_label"
                                                                    name="prog_4_soci_bar_label">
                                                                    @php
                                                                        $total = $programa4_m[0]->prog_meta_socios ?? 0;
                                                                        $avance =
                                                                            $programa4_avance[0]->total_socios ?? 0;
                                                                        $porcentaje =
                                                                            $total > 0
                                                                                ? min(($avance / $total) * 100, 100)
                                                                                : 100;
                                                                        $porcentaje = number_format($porcentaje, 1);
                                                                    @endphp
                                                                    {{ $porcentaje }}%</div>
                                                                <div class="progress" data-height="6">
                                                                    <div class="progress-bar bg-cyan"
                                                                        id="prog_4_soci_avance" name="prog_4_soci_avance"
                                                                        style="width: {{ $porcentaje }}%">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td id="prog_4_soci_meta" name="prog_4_soci_meta">
                                                                {{ $programa4_m[0]->prog_meta_socios ?? 0 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Beneficiarios y beneficiarias</td>
                                                            <td id="prog_4_bene" name="prog_4_bene">
                                                                {{ $programa4_avance[0]->total_beneficiarios ?? 0 }}</td>
                                                            <td class="align-middle">
                                                                <div class="progress-text" id="prog_4_bene_bar_label"
                                                                    name="prog_4_bene_bar_label">
                                                                    @php
                                                                        $total =
                                                                            $programa4_m[0]->prog_meta_beneficiarios ??
                                                                            0;
                                                                        $avance =
                                                                            $programa4_avance[0]->total_beneficiarios ??
                                                                            0;
                                                                        $porcentaje =
                                                                            $total > 0
                                                                                ? min(($avance / $total) * 100, 100)
                                                                                : 100;
                                                                        $porcentaje = number_format($porcentaje, 1);
                                                                    @endphp
                                                                    {{ $porcentaje }}%
                                                                    <div class="progress" data-height="6">
                                                                        <div class="progress-bar bg-purple"
                                                                            id="prog_4_bene_avance"
                                                                            name="prog_4_bene_avance"
                                                                            style="width: {{ $porcentaje }}%"></div>
                                                                    </div>
                                                            </td>
                                                            <td id="prog_4_bene_meta" name="prog_4_bene_meta">
                                                                {{ $programa4_m[0]->prog_meta_beneficiarios ?? 0 }}</td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 style="margin-right: 10%">Componente</h5>
                            <div class="card-header-action">
                                <select class="form-control select2" id="select_componente" name="select_componente"
                                    onchange="cargarComponente()" style="width: 100%">
                                    <option value="" disabled style="font-size: 40%">Seleccione
                                        componente ...</option>
                                    {{-- <option value="all">Todas las sedes</option> --}}
                                    @forelse ($tcomponentes as $comp)
                                        <option value="{{ $comp->comp_codigo }}">
                                            {{ $comp->comp_nombre }}</option>
                                    @empty
                                        <option value="-1">No existen registros</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Tipo de actividad</th>
                                            <th>Meta</th>
                                            <th>Avance</th>
                                            <th>Progreso</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-data">

                                    </tbody>
                                </table>
                            </div>

                            {{-- <div id="componentes_quest"></div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Indicar datos para reporte</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dashboard.reporte') }}" target="_blank" method="GET">
                                <div class="row">
                                    {{-- TODO: listado de sedes --}}
                                    <div class="col-xl-3 col-md-3 col-lg-6">
                                        <div class="form-group"><label for="sede_codigo">Sede</label>
                                            <select name="sede_codigo" id="sede_codigo" class="select2 form-control"
                                                style="width: 100%">
                                                <option value="">Seleccione...</option>
                                                @forelse ($sedes as $sede)
                                                    <option value="{{ $sede->sede_codigo }}">
                                                        {{ $sede->sede_nombre }}</option>
                                                @empty
                                                    <option value="">Sin registros disponibles</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>

                                    {{-- TODO: listado de componentes --}}
                                    <div class="col-xl-3 col-md-3 col-lg-6">
                                        <div class="form-group"><label for="comp_cod">Componente</label>
                                            <select name="comp_cod" id="comp_cod" class="select2 form-control"
                                                style="width: 100%">
                                                <option value="">Seleccione...</option>
                                                @forelse ($tcomponentes as $componente)
                                                    <option value="{{ $componente->comp_codigo }}">
                                                        {{ $componente->comp_nombre }}</option>
                                                @empty
                                                    <option value="">Sin registros disponibles</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>

                                    {{-- TODO: listado de tipo de actividades --}}
                                    <div class="col-xl-2 col-md-2 col-lg-6">
                                        <div class="form-group"><label for="tiac_codigo">Tipo de actividad</label>
                                            <select name="tiac_codigo" id="tiac_codigo" class="select2 form-control"
                                                style="width: 100%">
                                                <option value="">Seleccione...</option>
                                                @forelse ($tipoActividad as $tipoActividad)
                                                    <option value="{{ $tipoActividad->tiac_codigo }}">
                                                        {{ $tipoActividad->tiac_nombre }}</option>
                                                @empty
                                                    <option value="">Sin registros disponibles</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-2 col-md-2 col-lg-2">
                                        <div class="form-group">
                                            <label for="fecha_inicio">Desde</label>
                                            <input required class="form-control" type="date" name="fecha_inicio"
                                                id="fecha_inicio">
                                        </div>
                                    </div>

                                    <div class="col-xl-2 col-md-2 col-lg-2">
                                        <div class="form-group">
                                            <label for="fecha_final">Hasta</label>
                                            <input required class="form-control" type="date" name="fecha_final"
                                                id="fecha_final">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-12 col-lg-12 text-right">
                                    <a href="{{ route('dashboard.ver') }}" type="button"
                                        class="btn btn-primary mr-1 waves-effect"><i class="fas fa-broom"></i>
                                        Limpiar</a>
                                    <button type="submit" class="btn btn-success mr-1 waves-effect"><i
                                            class="fas fa-clipboard"></i> Generar reporte</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Incluye la biblioteca AmCharts a través de la CDN -->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            cargarSedes();
            cargarComponente();
            // barChart("iniciativaXestado");
            // donutChart();

        });

        function cargarComponente() {
            console.log('BUSCANDO DATOS......');
            var idComp = $('#select_componente').val();
            $('#componentes_quest').empty();
            $.ajax({
                url: `${window.location.origin}/dashboard/componentes-datos`,
                data: {
                    _token: '{{ csrf_token() }}',
                    comp_codigo: idComp
                },
                type: 'POST',
                dataType: 'json',

                success: function(data) {
                    console.log(data)
                    $('#table-data').empty();
                    var actividad = data[0];
                    var aMetas = data[1];
                    var aAvance = data[2];
                    if (Array.isArray(actividad) && actividad.length > 0) {
                        var nombres = actividad.map(function(item) {
                            return item.tiac_nombre;
                        });

                        metas = []
                        for (var clave in aMetas) {
                            if (aMetas.hasOwnProperty(clave)) {
                                metas.push(aMetas[clave]);
                            }
                        }

                        avances = []

                        for (var clave in aAvance) {
                            if (aAvance.hasOwnProperty(clave)) {
                                avances.push(aAvance[clave].length);
                            }
                        }

                        // console.log(avances)

                        var tabla = document.getElementById("table-data");

                        for (var i = 0; i < nombres.length; i++) {

                            var fila = tabla.insertRow();
                            var celda = fila.insertCell(0);
                            var meta = fila.insertCell(1);
                            var avance = fila.insertCell(2);
                            var progreso = fila.insertCell(3);
                            var progreso_bar = (parseFloat(avances[i]) * 100) / parseFloat(metas[i])
                            progreso_bar = progreso_bar > 100 ? 100 : progreso_bar.toFixed(2);
                            // Agrega el nombre a la celda
                            celda.innerHTML = nombres[i];
                            meta.innerHTML = metas[i];
                            avance.innerHTML = avances[i];
                            progreso.innerHTML = `<div class="progress-text" id="prog_4_estu_bar_label" name="prog_4_estu_bar_label">${progreso_bar}%</div>
                                                                <div class="progress" data-height="6" style="height: 6px;">
                                                        <div class="progress-bar" name="prog_4_estu_avance" style="width: ${progreso_bar}%">
                                                        </div>
                                                    </div>`;
                        }

                    } else {
                        console.log('No existen actividades asociadas al componente.');
                    }
                },
                error: function(xhr, status, error) {
                    console.log('No existen actividades asociadas al componente.');
                    $('#componentes_quest').text('No existen actividades asociadas al componente.');
                    // Puedes agregar código adicional para manejar el error aquí
                }
            })
        }

        function cargarSedes() {
            var sede = $('#select_sede').val();
            escuelasBySedes(sede);
            $.ajax({
                url: `${window.location.origin}/dashboard/sedes-datos`,
                data: {
                    _token: '{{ csrf_token() }}',
                    sede_codigo: sede
                },
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    $('#sede_estudiantes').empty();
                    $('#sede_estudiantes_porcentaje').empty();
                    $('#sede_docentes').empty();
                    $('#sede_docentes_porcentaje').empty();
                    $('#iniciativas_sedes').empty();
                    $('#iniciativas_sedes_porcentaje').empty();
                    var total;
                    var estimado;
                    var estados = ["En ejecución", "Aceptada", "Falta info", "Cerrada", "Falta Evidencia",
                        "Finalizada"
                    ]

                    var aux_a = [];
                    var aux_contador_a = {};
                    var aux_result_a = [];

                    var aux_b = [];
                    var aux_contador_b = {};
                    var aux_result_b = [];

                    var aux_c = [];
                    var aux_contador_c = {};
                    var aux_result_c = [];

                    var aux_d = [];
                    var aux_contador_d = {};
                    var aux_result_d = [];

                    var aux_e = [];
                    var aux_contador_e = {};
                    var aux_result_e = [];


                    data[0].forEach(element => {
                        total = element != null ? element : 0;
                    });
                    var claves_total = Object.keys(total);
                    for (let i = 0; i < claves_total.length; i++) {
                        let value = claves_total[i];
                        total[value] = total[value] != null ? total[value] : 0;

                    }
                    data[1].forEach(element => {
                        estimado = element != null ? element : 0;;
                    });
                    var claves_estimado = Object.keys(estimado);
                    for (let i = 0; i < claves_estimado.length; i++) {
                        let value = claves_estimado[i];
                        estimado[value] = estimado[value] != null ? estimado[value] : 0;

                    }
                    var porcentaje_sede_estudiantes = (total.total_estudiantes * 100) / estimado
                        .meta_estudiantes < 100 ? (total.total_estudiantes * 100) / estimado.meta_estudiantes :
                        100;
                    var porcentaje_sede_docentes = (total.total_docentes * 100) / estimado.meta_docentes < 100 ?
                        (total.total_docentes * 100) / estimado.meta_docentes : 100;
                    var porcentaje_iniciativas_sedes = (total.total_iniciativas * 100) / estimado
                        .meta_iniciativas < 100 ? (total.total_iniciativas * 100) / estimado.meta_iniciativas :
                        100;
                    //TODO: Manejar erro de division por cero, debido al no registro de meta de iniciativas por sedes.

                    //TODO:manejar datos en caso de que vengan nulos

                    $('#sede_estudiantes').html(`${total.total_estudiantes} de ${estimado.meta_estudiantes}`);
                    $('#sede_estudiantes_porcentaje').html(
                        `${porcentaje_sede_estudiantes.toFixed(2)}% Completado`);
                    $('#sede_estudiantes_porcentaje_bar').css('width',
                        `${porcentaje_sede_estudiantes.toFixed(2)}%`);

                    $('#sede_docentes').html(`${total.total_docentes} de ${estimado.meta_docentes}`);
                    $('#sede_docentes_porcentaje').html(`${porcentaje_sede_docentes.toFixed(2)}% Completado`);
                    $('#sede_docentes_porcentaje_bar').css('width', `${porcentaje_sede_docentes.toFixed(2)}%`);

                    $('#iniciativas_sedes').html(`${total.total_iniciativas} de ${estimado.meta_iniciativas}`);
                    $('#iniciativas_sedes_porcentaje').html(
                        `${porcentaje_iniciativas_sedes.toFixed(2)}% Completado`);
                    $('#iniciativas_sedes_porcentaje_bar').css('width',
                        `${porcentaje_iniciativas_sedes.toFixed(2)}%`);

                    // data[2].forEach(element => {
                    //     if (aux_a.includes(element.sugr_nombre)) {
                    //         aux_contador_a[element.sugr_nombre]++;
                    //     } else {
                    //         aux_a.push(element.sugr_nombre);
                    //         aux_contador_a[element.sugr_nombre] = 1;
                    //     }
                    // });

                    // aux_a.forEach(element => {
                    //     aux_result_a.push({
                    //         nombre: element,
                    //         cantidad: aux_contador_a[element]
                    //     })
                    // })

                    // pieChart("iniciativaXsubgrupo", aux_result_a);

                    if (data[3].length != 0) {

                        data[3].forEach(element => {
                            if (aux_b.includes(element.grin_nombre)) {
                                aux_contador_b[element.grin_nombre]++;
                            } else {
                                aux_b.push(element.grin_nombre);
                                aux_contador_b[element.grin_nombre] = 1;
                            }
                        });

                        aux_b.forEach(element => {
                            aux_result_b.push({
                                nombre: element,
                                cantidad: aux_contador_b[element]
                            })
                        })

                        pieChart("iniciativaXgrupo", aux_result_b);
                    } else {

                        $("#iniciativaXgrupo").css("height", "0cm")
                        $("#iniciativaXgrupoError").html("No hay datos registrados")
                    }


                    if (data[4].length != 0) {
                        data[4].forEach(element => {
                            var estado = estados[element.inic_estado - 1];

                            if (aux_c.includes(estado)) {
                                aux_contador_c[estado]++;
                            } else {
                                aux_c.push(estado);
                                aux_contador_c[estado] = 1;
                            }

                        })

                        aux_c.forEach(element => {
                            aux_result_c.push({
                                nombre: element,
                                cantidad: aux_contador_c[element]
                            })
                        })

                        barChart("iniciativaXestado", aux_result_c)
                    } else {
                        $("#iniciativaXestado").css("height", "0cm")
                        $("#iniciativaXestadoError").html("No hay datos registrados")
                    }

                    if (data[4].length != 0) {
                        data[5].forEach(element => {
                            if (aux_d.includes(element.inic_anho)) {
                                aux_contador_d[element.inic_anho]++;
                            } else {
                                aux_d.push(element.inic_anho);
                                aux_contador_d[element.inic_anho] = 1;
                            }
                        })

                        aux_d.forEach(element => {
                            aux_result_d.push({
                                nombre: element,
                                cantidad: aux_contador_d[element]
                            })
                        })

                        barChart("iniciativaXanho", aux_result_d);

                    } else {
                        $("#iniciativaXanho").css("height", "0cm")
                        $("#iniciativaXanhoError").html("No hay datos registrados")
                    }

                    if (data[6].length != 0) {
                        data[6].forEach(element => {
                            if (aux_e.includes(element.comu_nombre)) {
                                aux_contador_e[element.comu_nombre]++;
                            } else {
                                aux_e.push(element.comu_nombre);
                                aux_contador_e[element.comu_nombre] = 1;
                            }
                        });

                        aux_e.forEach(element => {
                            aux_result_e.push({
                                nombre: element,
                                cantidad: aux_contador_e[element]
                            })
                        })

                        barChart("iniciativaXcomuna", aux_result_e);
                    } else {
                        $("#iniciativaXcomuna").css("height", "0cm")
                        $("#iniciativaXcomunaError").html("No hay datos registrados")
                    }
                }
            })
        }

        function cargarEscuelas() {
            var escuela = $('#select_escuela').val();
            var sede = $('#select_sede').val();

            $.ajax({
                url: `${window.location.origin}/dashboard/escuela-datos`,
                data: {
                    _token: '{{ csrf_token() }}',
                    sede_codigo: sede,
                    escu_codigo: escuela,
                },
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    $('#escuelas_estudiantes').empty();
                    $('#escuelas_estudiantes_porcentaje').empty();
                    $('#escuelas_docentes').empty();
                    $('#escuelas_docentes_porcentaje').empty();
                    $('#escuelas_iniciativas').empty();
                    $('#escuelas_iniciativas_porcentaje').empty();
                    var total;
                    var estimado;
                    var estados = ["En ejecución", "Aceptada", "Falta info", "Cerrada", "Falta Evidencia",
                        "Finalizada"
                    ]

                    var aux_a = [];
                    var aux_contador_a = {};
                    var aux_result_a = [];

                    var aux_b = [];
                    var aux_contador_b = {};
                    var aux_result_b = [];

                    var aux_c = [];
                    var aux_contador_c = {};
                    var aux_result_c = [];

                    var aux_d = [];
                    var aux_contador_d = {};
                    var aux_result_d = [];

                    var aux_e = [];
                    var aux_contador_e = {};
                    var aux_result_e = [];


                    data[0].forEach(element => {
                        total = element != null ? element : 0;
                    });
                    var claves_total = Object.keys(total);
                    for (let i = 0; i < claves_total.length; i++) {
                        let value = claves_total[i];
                        total[value] = total[value] != null ? total[value] : 0;

                    }
                    data[1].forEach(element => {
                        estimado = element != null ? element : 0;
                    });

                    var claves_estimado = Object.keys(estimado);
                    for (let i = 0; i < claves_estimado.length; i++) {
                        let value = claves_estimado[i];
                        estimado[value] = estimado[value] != null ? estimado[value] : 0;

                    }
                    var porcentaje_escuelas_estudiantes = (total.total_estudiantes * 100) / estimado
                        .meta_estudiantes < 100 ? (total.total_estudiantes * 100) / estimado.meta_estudiantes :
                        100;
                    var porcentaje_escuelas_docentes = (total.total_docentes * 100) / estimado.meta_docentes <
                        100 ?
                        (total.total_docentes * 100) / estimado.meta_docentes : 100;
                    var porcentaje_escuelas_iniciativas = (total.total_iniciativas * 100) / estimado
                        .meta_iniciativas < 100 ? (total.total_iniciativas * 100) / estimado.meta_iniciativas :
                        100;
                    //TODO: Manejar erro de division por cero, debido al no registro de meta de iniciativas por sedes.

                    //TODO:manejar datos en caso de que vengan nulos

                    $('#escuelas_estudiantes').html(
                        `${total.total_estudiantes} de ${estimado.meta_estudiantes}`);
                    $('#escuelas_estudiantes_porcentaje').html(
                        `${porcentaje_escuelas_estudiantes.toFixed(2)}% Completado`);
                    $('#escuelas_estudiantes_porcentaje_bar').css('width',
                        `${porcentaje_escuelas_estudiantes.toFixed(2)}%`);

                    $('#escuelas_docentes').html(`${total.total_docentes} de ${estimado.meta_docentes}`);
                    $('#escuelas_docentes_porcentaje').html(
                        `${porcentaje_escuelas_docentes.toFixed(2)}% Completado`);
                    $('#escuelas_docentes_porcentaje_bar').css('width',
                        `${porcentaje_escuelas_docentes.toFixed(2)}%`);

                    $('#escuelas_iniciativas').html(
                        `${total.total_iniciativas} de ${estimado.meta_iniciativas}`);
                    $('#escuelas_iniciativas_porcentaje').html(
                        `${porcentaje_escuelas_iniciativas.toFixed(2)}% Completado`);
                    $('#escuelas_iniciativas_porcentaje_bar').css('width',
                        `${porcentaje_escuelas_iniciativas.toFixed(2)}%`);

                    // data[2].forEach(element => {
                    //     if (aux_a.includes(element.sugr_nombre)) {
                    //         aux_contador_a[element.sugr_nombre]++;
                    //     } else {
                    //         aux_a.push(element.sugr_nombre);
                    //         aux_contador_a[element.sugr_nombre] = 1;
                    //     }
                    // });

                    // aux_a.forEach(element => {
                    //     aux_result_a.push({
                    //         nombre: element,
                    //         cantidad: aux_contador_a[element]
                    //     })
                    // })

                    // pieChart("iniciativaXsubgrupoEscuela", aux_result_a);

                    data[3].forEach(element => {
                        if (aux_b.includes(element.grin_nombre)) {
                            aux_contador_b[element.grin_nombre]++;
                        } else {
                            aux_b.push(element.grin_nombre);
                            aux_contador_b[element.grin_nombre] = 1;
                        }
                    });

                    aux_b.forEach(element => {
                        aux_result_b.push({
                            nombre: element,
                            cantidad: aux_contador_b[element]
                        })
                    })

                    pieChart("iniciativaXgrupoEscuela", aux_result_b);
                    data[4].forEach(element => {
                        var estado = estados[element.inic_estado - 1];

                        if (aux_c.includes(estado)) {
                            aux_contador_c[estado]++;
                        } else {
                            aux_c.push(estado);
                            aux_contador_c[estado] = 1;
                        }

                    })

                    aux_c.forEach(element => {
                        aux_result_c.push({
                            nombre: element,
                            cantidad: aux_contador_c[element]
                        })
                    })

                    barChart("iniciativaXestadoEscuelas", aux_result_c)

                    data[5].forEach(element => {
                        if (aux_d.includes(element.inic_anho)) {
                            aux_contador_d[element.inic_anho]++;
                        } else {
                            aux_d.push(element.inic_anho);
                            aux_contador_d[element.inic_anho] = 1;
                        }
                    })

                    aux_d.forEach(element => {
                        aux_result_d.push({
                            nombre: element,
                            cantidad: aux_contador_d[element]
                        })
                    })

                    barChart("iniciativaXanhoEscuelas", aux_result_d);

                    data[6].forEach(element => {
                        if (aux_e.includes(element.comu_nombre)) {
                            aux_contador_e[element.comu_nombre]++;
                        } else {
                            aux_e.push(element.comu_nombre);
                            aux_contador_e[element.comu_nombre] = 1;
                        }
                    });

                    aux_e.forEach(element => {
                        aux_result_e.push({
                            nombre: element,
                            cantidad: aux_contador_e[element]
                        })
                    })

                    barChart("iniciativaXcomunaEscuelas", aux_result_e);
                }
            });

        }

        function escuelasBySedes(sede) {
            var sedeId = sede
            if (sedeId) {
                $.ajax({
                    url: `${window.location.origin}/dashboard/sedes-escuelas`,
                    type: 'POST',
                    dataType: 'json',

                    data: {
                        _token: '{{ csrf_token() }}',
                        sede: sedeId
                    },
                    success: function(data) {
                        $('#select_escuela').empty();
                        $('#select_escuela').append(
                            `<option value = '' selected disable>Seleccione escuela...</option>`)
                        $('#select_escuela').append(`<option value = 'all'>Todas las escuelas</option>`)
                        $.each(data, function(key, value) {
                            $('#select_escuela').append(
                                `<option value="${value.escu_codigo}">${value.escu_nombre}</option>`
                            );
                        });
                    }
                });
            }
        }

        function barChart(div_name, data) {
            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end



            // Create chart instance
            var chart = am4core.create(div_name, am4charts.XYChart);
            $(`#${div_name}`).css("height", "10cm")
            chart.scrollbarX = new am4core.Scrollbar();
            var ejes = Object.keys(data[0]);
            var labels = ejes[0];
            var valores = ejes[1]
            // Add data
            chart.data = data;

            // Create axes
            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = labels;
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.renderer.minGridDistance = 30;
            categoryAxis.renderer.labels.template.horizontalCenter = "right";
            categoryAxis.renderer.labels.template.verticalCenter = "middle";
            categoryAxis.renderer.labels.template.rotation = 270;
            categoryAxis.tooltip.disabled = true;
            categoryAxis.renderer.minHeight = 110;
            categoryAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

            var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.renderer.minWidth = 50;
            valueAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");


            // Create series
            var series = chart.series.push(new am4charts.ColumnSeries());
            series.sequencedInterpolation = true;
            series.dataFields.valueY = valores;
            series.dataFields.categoryX = labels;
            series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
            series.columns.template.strokeWidth = 0;


            series.tooltip.pointerOrientation = "vertical";

            series.columns.template.column.cornerRadiusTopLeft = 10;
            series.columns.template.column.cornerRadiusTopRight = 10;
            series.columns.template.column.fillOpacity = 0.8;

            // on hover, make corner radiuses bigger
            let hoverState = series.columns.template.column.states.create("hover");
            hoverState.properties.cornerRadiusTopLeft = 0;
            hoverState.properties.cornerRadiusTopRight = 0;
            hoverState.properties.fillOpacity = 1;

            series.columns.template.adapter.add("fill", (fill, target) => {
                return chart.colors.getIndex(target.dataItem.index);
            })

            // Cursor
            chart.cursor = new am4charts.XYCursor();
        }

        function pieChart(div_name, data) {
            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end

            // Create chart instance
            var chart = am4core.create(div_name, am4charts.PieChart);
            $(`#${div_name}`).css("height", "10cm")
            var ejes = Object.keys(data[0]);
            var labels = ejes[0];
            var valores = ejes[1]
            // Add data
            chart.data = data;


            // Add and configure Series
            var pieSeries = chart.series.push(new am4charts.PieSeries());
            pieSeries.dataFields.value = valores;
            pieSeries.dataFields.category = labels;
            pieSeries.slices.template.stroke = am4core.color("#fff");
            pieSeries.slices.template.strokeWidth = 2;
            pieSeries.slices.template.strokeOpacity = 1;
            pieSeries.labels.template.fill = am4core.color("#9aa0ac");

            // Configura la leyenda (barra lateral)
            chart.legend = new am4charts.Legend();
            chart.legend.position = "top";
            // Configura las etiquetas
            pieSeries.ticks.template.disabled = true; // Desactiva las marcas de división
            pieSeries.labels.template.disabled = false; // Habilita las etiquetas
            pieSeries.labels.template.text =
                "{category}: {value.percent.formatNumber('#.0')}%"; // Personaliza el texto de las etiquetas

            // This creates initial animation
            pieSeries.hiddenState.properties.opacity = 1;
            pieSeries.hiddenState.properties.endAngle = -90;
            pieSeries.hiddenState.properties.startAngle = -90;
        }
    </script>
@endsection
