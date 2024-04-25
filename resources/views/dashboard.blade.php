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
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Dashboard-->
                <!--begin::Row-->

                <!--end::Row-->
                <!--begin::Row-->
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row">
                <div class="col-lg-6 col-xxl-4">
                    <!--begin::Mixed Widget 4-->
                    <div class="card card-custom  gutter-b card-stretch">
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
                    <!--end::Mixed Widget 4-->
                </div>

                    <div class="col-lg-6 col-xxl-8">
                        <div class="card card-custom card-stretch gutter-b">

                            <div class="card-body py-0">
                                <!--begin::Table-->
   
                                <!--end::Table-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
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


