@extends('Base/base')
@section('title', 'Prestamos')

@section('content')
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
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
                        <h2 class="text-white font-weight-bold my-2 mr-5">Prestamos de libros</h2>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <div class="d-flex align-items-center font-weight-bold my-2">
                            <!--begin::Item-->
                            <a href="{{ url('/dashboard') }}" class="opacity-75 hover-opacity-100">
                                <i class="flaticon2-shelter text-white icon-1x"></i>
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="{{ url('/loan') }}" class="text-white text-hover-white opacity-75 hover-opacity-100">Prestamos</a>
                            <!--end::Item-->
                        </div>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h3 class="card-label">Listado de prestamos</h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Dropdown-->
                            <div class="mr-2">
                                
                                <button type="button" class="btn btn-light-primary font-weight-bolder" aria-haspopup="true" aria-expanded="false"><i class="fas fa-file-excel"></i>Importar Excel</button>
                            </div>
                            <!--end::Dropdown-->
                            <!--begin::Button-->
                            <a href="{{url('/loan/create')}}" class="btn btn-primary font-weight-bolder"><i class="fas fa-book-reader"></i>Nuevo Prestamo</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Search Form-->
                        <!--begin::Search Form-->
                        <div class="mb-7">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-xl-8">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="input-icon">
                                                <input type="text" class="form-control" placeholder="Buscar..." id="kt_datatable_search_query" />
                                                <span>
                                                    <i class="flaticon2-search-1 text-muted"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="d-flex align-items-center">
                                                <label class="mr-3 mb-0 d-none d-md-block">Estado:</label>
                                                <select class="form-control select2" id="kt_datatable_search_status">
                                                    <option value="activo">Activo</option>
                                                    <option value="inactivo">Inactivo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Search Form-->
                        <!--end: Search Form-->
                        <!--begin: Datatable-->
                        <table class="table datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Libros</th>
                                    <th>Cliente</th>
                                    <th>Fecha del Prestamo</th>
                                    <th>Fecha de devolucion</th>
                                    <th>Devuelto</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                        </table>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection

@section('scripts')
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            language: {
                noResults: function() {
                    return "No hay resultados encontrados";
                }
            },
        });
    });
    var datatable = $("#kt_datatable").DataTable({
        language: {
            "url": "{{ asset('assets/plugins/custom/datatables/Spanish.json') }}"
        },
        responsive: false,
        ajax: {
            url: '{{url('/loan/list/json')}}',
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}", "state" : function() { return $('#kt_datatable_search_status').val() },
            }
        },
        columns: [
            { data: 'id' },
            { 
                data: 'book', 
                render: function(data, type, full, meta) {
                    var books = '<ul>';
                    for (let i = 0; i < data.length; i++) {
                        books += '<li>'+data[i].name+'</li>';
                    }
                    books += '</ul>';
                    return books;
                    
                }
            },
            { data: 'client' },
            { data: 'dateLoan' },
            { 
                data: 'dateDevolution', 
                render : function(data, type, full, meta) {
                    return data == null ? 'No devuelto' : data;
                }
            },
            {
                data: 'isReturned',
                render: function(data, type, full, meta) {
                    return data == 1 ? 'Si' : 'No';
                    console.log(full);
                }
            },
            {
                data: 'status',
                render: function(data, type, full, meta) {
                    return data === 'activo' ? '<span class="badge badge-success">'+data+'</span>' : '<span class="badge badge-danger">'+data+'</span>';
                }
            },
            {
                data: 'Actions',
                render: function(data, type, full, meta) {
                    if (full.status == 'inactivo') {
                        return "Sin acciones";
                    }
                    else
                    {
                        return '\
                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Cambiar estado del prestamo" onclick = "ChangeState('+full.id+')">\
                            <i class="fas fa-trash"></i>\
                        </a>\
                        ';
                    }
                }
            }
        ],
    });

    $('#kt_datatable_search_query').on( 'keyup', function () {
        datatable.search( this.value ).draw();
    } );

    $("#kt_datatable_search_status").on( "change", function() {
        LoadSearch();
    } );

    function LoadSearch() {
        Swal.fire({
            title: '¡Por favor espere!',
            html: 'Buscando según filtros...',
            allowOutsideClick: false,
            onBeforeOpen: () => {
                Swal.showLoading();
            },
        });

        var reloadTablePromise = new Promise(function(resolve, reject) {
            datatable.ajax.reload(null, false);
            resolve(); 
        });

        reloadTablePromise.then(function () {
            setTimeout(function () {
                Swal.close(); 
            }, 300);
        });
    }

    function ChangeState(id){
        console.log('ChangeState');
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Si, cambiar estado!',
            cancelButtonText: 'Cancelar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '{{url('/loan/change')}}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {
                        "id": id
                    },
                    success: function(response) {
                        if (response.status) {
                            Swal.fire(
                                '¡Cambiado!',
                                'El estado del prestamo ha sido cambiado.',
                                'success'
                            );
                            datatable.ajax.reload();
                        } else {
                            Swal.fire(
                                '¡Error!',
                                'Ha ocurrido un error al cambiar el estado del prestamo.',
                                'error'
                            );
                        }
                    },
                    error: function() {
                        Swal.fire(
                            '¡Error!',
                            'Ha ocurrido un error al cambiar el estado del prestamo.',
                            'error'
                        );
                    }
                });
            }
        });
    }
</script>
@endsection