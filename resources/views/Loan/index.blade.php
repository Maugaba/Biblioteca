@extends('Base/base')
@section('title', 'Prestamos')

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
                            <a href="#" class="btn btn-primary font-weight-bolder"><i class="fas fa-book-reader"></i>Nuevo Prestamo</a>
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
                                                <select class="form-control select2" id="kt_datatable_search_status" onchange="reload()">
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
                        <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
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
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            language: {
                noResults: function() {
                    return "No hay resultados encontrados";
                }
            },
            tags: true
        });
    });
    var Datatable = $("#kt_datatable").KTDatatable({
        data: {
            type: "remote",
            source: {
                read: {
                    url: "{{ url('/loan/list/json') }}",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    params: {
                        query: {
                            state: $("#kt_datatable_search_status").val(),
                        }
                    },
                    type : 'POST',
                }
            },
            pageSize: 10,
            serverPaging: !0,
            serverFiltering: !0,
            serverSorting: !0
        },
        language: {
            noRecords: "No se encontraron registros",
            processing: "Cargando..."
        },
        layout: {
            scroll: !1,
            footer: !1
        },
        sortable: !0,
        pagination: !0,
        search: {
            input: $("#kt_datatable_search_query")
        },
        columns: [{
            field: "id",
            title: "#",
            type: "number",
            width: 50,
            template: function(t) {
                return '<span class="font-weight-bolder">' + t.id + "</span>";
            }
            }, {
            field: "book",
            title: "Libro",
            template: function(t) {
                return t.book;
            }
        }, {
            field: "client",
            title: "Cliente",
            template: function(t) {
                return t.client;
            }
        }, {
            field: "dateLoan",
            title: "Fecha de prestamo",
            template: function(t) {
                return t.dateLoan;
            }
        }, {
            field: "dateDevolution",
            title: "Fecha de devolucion",
            template: function(t) {
                if (t.dateDevolution == null) {
                    return '<span class="label label-lg font-weight-bold label-light-danger label-inline">No devuelto</span>';
                }else{
                    return t.dateDevolution;
                }
            }
        },
        {
            field: "isReturned",
            title: "Fue devuelto",
            template: function(t) {
                if (t.isReturned == 1) {
                return '<span class="label label-lg font-weight-bold label-light-success label-inline">Si</span>';
                } else {
                return '<span class="label label-lg font-weight-bold label-light-danger label-inline">No</span>';
                }
            }
        }, {
            field: "status",
            title: "Estado",
            template: function(t) {
                if (t.status == 'activo') {
                    return '<span class="label label-lg font-weight-bold label-light-success label-inline">' + t.status + "</span>";
                } else {
                    return '<span class="label label-lg font-weight-bold label-light-danger label-inline">' + t.status + "</span>";
                }
            }
        }, {
            field: "Actions",
            title: "Acciones",
            sortable: !1,
            width: 125,
            overflow: "visible",
            autoHide: !1,
            template: function(t) {
                var response = '<a href="#" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">';
                response += '<i class="fas fa-edit"></i>';
                response += '</a>';
                response += '<a href="#" class="btn btn-sm btn-clean btn-icon" title="Delete">';
                response += '<i class="fas fa-trash"></i>';
                response += '</a>';
                return response;
            }
        }]
    });

    function reload(){
        Datatable.setDataSourceParam('query', {
            state: $("#kt_datatable_search_status").val(),
        });
        Datatable.load();
    }
</script>
@endsection