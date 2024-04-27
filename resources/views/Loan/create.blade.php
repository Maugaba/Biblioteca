@extends('Base/base')
@section('title', 'Crear Prestamo')

@section('content')
    <link href="{{ asset('assets/css/pages/wizard/wizard-1.css') }}" rel="stylesheet" type="text/css" />
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
                        <h2 class="text-white font-weight-bold my-2 mr-5">Nuevo préstamo</h2>
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
                            <a href="{{url('/loan')}}" class="text-white text-hover-white opacity-75 hover-opacity-100">Prestamos</a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Nuevo préstamo</a>
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
                <div class="card card-custom">
                    <div class="card-body p-0">
                        <!--begin::Wizard-->
                        <div class="wizard wizard-1" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="false">
                            <!--begin::Wizard Nav-->
                            <div class="wizard-nav border-bottom">
                                <div class="wizard-steps p-8 p-lg-10">
                                    <!--begin::Wizard Step 1 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-label">
                                            <i class="wizard-icon flaticon-bus-stop"></i>
                                            <h3 class="wizard-title">1. Selecciona el libro</h3>
                                        </div>
                                        <span class="svg-icon svg-icon-xl wizard-arrow">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Wizard Step 1 Nav-->
                                    <!--begin::Wizard Step 2 Nav-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">
                                            <i class="wizard-icon flaticon-list"></i>
                                            <h3 class="wizard-title">2. Selecciona el cliente</h3>
                                        </div>
                                        <span class="svg-icon svg-icon-xl wizard-arrow">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Wizard Step 2 Nav-->
                                    <!--begin::Wizard Step 5 Nav-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">
                                            <i class="wizard-icon flaticon-globe"></i>
                                            <h3 class="wizard-title">3. Guardar</h3>
                                        </div>
                                        <span class="svg-icon svg-icon-xl wizard-arrow last">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Wizard Step 5 Nav-->
                                </div>
                            </div>
                            <!--end::Wizard Nav-->
                            <!--begin::Wizard Body-->
                            <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                                <div class="col-xl-12 col-xxl-7">
                                    <!--begin::Wizard Form-->
                                    <form class="form" id="kt_form">
                                        <!--begin::Wizard Step 1-->
                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                            <h3 class="mb-10 font-weight-bold text-dark">Elige el libro que se va prestar</h3>
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>Libros disponibles</label>
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <select name="books" id="books" class="form-control form-control-solid form-control-lg select2" multiple>
                                                            <option value=""></option>
                                                            @foreach ($BooksArray as $Book)
                                                                <option value="{{$Book['id']}}">{{$Book['name']}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <!--end::Select-->
                                                <span class="form-text text-muted">Seleccione uno o mas libros.</span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Wizard Step 1-->
                                        <!--begin::Wizard Step 2-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Selecciona el cliente, al cual se prestaran los libros</h4>
                                            <!--begin::Input-->
                                            <label>Clientes disponibles</label>
                                            <div class="form-group">
                                                <select name="client" id="client" class="form-control form-control-solid form-control-lg clientselect2" style="width: 700px; font-size: 16px;">
                                                    <option value="">Seleccione un cliente</option>
                                                    @foreach ($ClientsArray as $Client)
                                                        <option value="{{$Client['id']}}">{{$Client['name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Wizard Step 2-->
                                        <!--begin::Wizard Step 5-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <!--begin::Section-->
                                            <h4 class="mb-10 font-weight-bold text-dark">Completado</h4>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <div class="pb-10 pb-lg-12">
                                                <h6 class="font-weight-bolder mb-3">Detalles del préstamo:</h6>
                                                <div class="text-dark-50 line-height-lg">
                                                    <div>Libros: <span id="book"></span></div>
                                                    <div>Cliente: <span id="clienttext"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Wizard Step 5-->
                                        <!--begin::Wizard Actions-->
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Anterior</button>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-light-danger font-weight-bolder text-uppercase px-9 py-4" onclick="CancelForm()">Cancelar</button>
                                                <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" onclick="StoreData()">Guardar</button>
                                                <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" onclick="ShowData()" data-wizard-type="action-next">Siguiente</button>
                                            </div>
                                        </div>
                                        <!--end::Wizard Actions-->
                                    </form>
                                    <!--end::Wizard Form-->
                                </div>
                            </div>
                            <!--end::Wizard Body-->
                        </div>
                        <!--end::Wizard-->
                    </div>
                    <!--end::Wizard-->
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection

@section('scripts')
<script src="{{asset('assets/js/pages/custom/wizard/wizard-1.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            language: {
                noResults: function() {
                    return "No hay resultados encontrados";
                }
            },
        });
        $('.clientselect2').select2({
            language: {
                noResults: function() {
                    return "No hay resultados encontrados";
                }
            },
        });
    });

    function StoreData(){
        var books = $('#books').val();
        var client = $('#client').val();
        if(books == null || books == ''){
            swal.fire({
                title: 'Error',
                text: 'Debe seleccionar al menos un libro',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
            return;
        }
        if(client == null || client == ''){
            swal.fire({
                title: 'Error',
                text: 'Debe seleccionar un cliente',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
            return;
        }
        swal.fire({
            title: '¿Estás seguro de realizar el prestamo?',
            text: "Una vez realizado, no podrá ser revertido!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Si, realizar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{url('/loan/store')}}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {
                        books: books,
                        client: client
                    },
                    success: function(response){
                        if(response.status == 'success'){
                            swal.fire({
                                title: 'Éxito',
                                text: "Prestamo realizado con éxito!",
                                icon: 'success',
                                confirmButtonText: 'Aceptar'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "{{url('/loan')}}";
                                }
                            });
                        }else{
                            swal.fire({
                                title: 'Error',
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: 'Aceptar'
                            });
                        }
                    }
                });
            }
        });
    }

    function ShowData()
    {
        var books = $('#books').val();
        var client = $('#client').val();
        
        var booktext = document.getElementById('book');
        var clienttext = document.getElementById('clienttext');
        booktext.innerHTML = "";
        clienttext.innerHTML = "";
        clienttext.innerHTML = $('#client option:selected').text();
        for (var i = 0; i < books.length; i++) {
            if(i == books.length - 1)
                booktext.innerHTML += $('#books option[value="'+books[i]+'"]').text();
            else{
                booktext.innerHTML += $('#books option[value="'+books[i]+'"]').text() + ', ';
            }
        }
    }

        // Función para cancelar el formulario
    function CancelForm() {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "Si cancelas, perderás los datos ingresados hasta ahora.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí, cancelar',
            cancelButtonText: 'No, continuar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirigir a la página principal de préstamos
                window.location.href = "{{ url('/loan') }}";
            }
        });
    }
</script>
@endsection