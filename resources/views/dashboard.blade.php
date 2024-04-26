@extends('Base/base')
@section('title', 'Inicio')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Heading-->
                    <div class="d-flex flex-column">
                        <!--begin::Title-->
                        <h2 class="text-white font-weight-bold my-2 mr-5">Tablero de inicio</h2>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <div class="d-flex align-items-center font-weight-bold my-2">
                            <!--begin::Item-->
                            <a href="#" class="opacity-75 hover-opacity-100">
                                <i class="flaticon2-shelter text-white icon-1x"></i>
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Tablero de inicio</a>
                            <!--end::Item-->
                        </div>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Heading-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
    
                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::Subheader-->
      
            <div class="d-flex flex-column-fluid">
            <div class="container">
                    <!--begin::Dashboard-->
                    <!--begin::Row-->
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-xxl-12">
                            <div class="card card-custom gutter-b card-stretch">
                                <!--begin::Header-->
                                <div class="card-header border-0 py-5">
                                    <h3 class="card-title font-weight-bolder text-black">Libros Prestados</h3>
                                    <div class="card-toolbar"></div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body d-flex flex-column p-0">
                                    <!--begin::Chart-->
                                    <div id="loanChart" style="height: 200px"></div>
                                    <!--end::Chart-->
                                    <!--begin::Stats-->
                                    <div class="card-spacer bg-white card-rounded flex-grow-1">
                                        <!--begin::Row-->
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Body-->
                            </div>
                        </div>
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-lg-6 col-xxl-4">
                            <!--begin::Mixed Widget 4-->
                            <div class="card card-custom gutter-b card-stretch">
                                <div class="card-body">
                                    <img src="assets/media/bg/biblioteca.jpg" alt="Imagen de ejemplo" class="img-fluid">
                                </div>
                            </div>
                            <!--end::Mixed Widget 4-->
                        </div>
                        <div class="col-lg-6 col-xxl-8">
                            <div class="card card-custom gutter-b card-stretch">
                                <div class="card-body">
                                    <strong>Historia</strong>
                                    <p>La Biblioteca Concepción Chiquirichapa tiene una historia que refleja la evolución de su comunidad tanto estudiantil como general. Sus raíces se remontan a agosto de 1998, cuando el entonces alcalde Pedro Leocadio Escalante Gómez, durante su mandato de 1996 a 2000, visionó la creación de este espacio para que la población estudiantil y la comunidad en general pudieran acceder de manera gratuita a la lectura y al conocimiento.</p>
                                    <strong>Visión</strong>
                                    <p>Ser una unidad de apoyo a la docencia y la investigación, satisfaciendo las necesidades educativas de la población estudiantil y elevando el nivel educativo de la comunidad en general.</p>
                                    <strong>Misión</strong>
                                    <p>Fomentar los buenos hábitos de lectura para alcanzar los objetivos de enseñanza, aprendizaje e investigación, garantizando el acceso equitativo a la información y el conocimiento en textos para fortalecer el interés por el aprendizaje en la población estudiantil.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
            </div>
    </div>

    <!--end::Content-->
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    $(document).ready(function() {
        // Obtener los datos de préstamos de los últimos 12 meses desde el controlador
        $.ajax({
            url: "{{ route('loans.getChartData') }}",
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var options = {
                    series: [{
                        name: 'Libros Prestados',
                        data: data.loanData
                    }],
                    chart: {
                        height: 350,
                        type: 'bar',
                    },
                    xaxis: {
                        categories: data.months
                    }
                };

                var chart = new ApexCharts(document.querySelector("#loanChart"), options);
                chart.render();
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>

@endsection


