@extends('Base/base')
@section('title', 'Creacion de Contraseñas')

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
                    <h2 class="text-white font-weight-bold my-2 mr-5">Cambiar contraseña</h2>
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
                        <a href="{{url('/user')}}" class="text-white text-hover-white opacity-75 hover-opacity-100">Contraseña</a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="{{url('/user/crear')}}" class="text-white text-hover-white opacity-75 hover-opacity-100">Crear Contraseña</a>
                        <!--end::Item-->
                    </div>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="#" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Reports</a>
                <!--end::Button-->
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="top">
                    <a href="#" class="btn btn-white font-weight-bold py-3 px-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</a>
                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                        <!--begin::Navigation-->
                        <ul class="navi navi-hover py-5">
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-drop"></i>
                                    </span>
                                    <span class="navi-text">New Group</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-list-3"></i>
                                    </span>
                                    <span class="navi-text">Contacts</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-rocket-1"></i>
                                    </span>
                                    <span class="navi-text">Groups</span>
                                    <span class="navi-link-badge">
                                        <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-bell-2"></i>
                                    </span>
                                    <span class="navi-text">Calls</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-gear"></i>
                                    </span>
                                    <span class="navi-text">Settings</span>
                                </a>
                            </li>
                            <li class="navi-separator my-3"></li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-magnifier-tool"></i>
                                    <span class="navi-text">Help</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-bell-2"></i>
                                    </span>
                                    <span class="navi-text">Privacy</span>
                                    <span class="navi-link-badge">
                                        <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
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

                                <!--end::Wizard Step 1 Nav-->
                                <!--begin::Wizard Step 2 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <i class="wizard-icon flaticon-globe"></i>
                                        <h3 class="wizard-title">Cambiar contraseña</h3>
                                    </div>
                                    <span class="svg-icon svg-icon-xl wizard-arrow last">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0
                                                24 24" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Wizard Step 2 Nav-->
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
                                        <h3 class="mb-10 font-weight-bold text-dark">Crea un Contraseña</h3>
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Nueva Contraseña</label>
                                            <input type="password" class="form-control form-control-solid form-control-lg" name="passwords" id="passwords" placeholder="Ingresar nombre del Contraseña" />
                                            <span class="form-text text-muted">Ingrese el Contraseña.</span>
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Confirmar Contraseña</label>
                                            <input type="password" class="form-control form-control-solid form-control-lg" name="confirmpassword" id="confirmpassword" placeholder="*****" />
                                            <span class="form-text text-muted">Ingrese su contraseña.</span>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 1-->
                                    <!--begin::Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <!--begin::Section-->
                                        <h6 class="font-weight-bolder mb-3">Contraseña:</h6>
                                        <span id="contraseña"></span>
                                        <div class="separator separator-dashed my-5"></div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Wizard Step 2-->
                                    <!--begin::Wizard Actions-->
                                    <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                        <div class="mr-2">
                                            <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Anterior</button>
                                        </div>
                                        <div>
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
var userId; // Variable para almacenar el ID del usuario

$(document).ready(function() {
    // Asigna el ID del usuario cuando el documento esté listo
    userId = {{ $user['id'] }};
});

function StoreData() {
    var passwords = $('#passwords').val();
    var confirmpassword = $('#confirmpassword').val();

    if (passwords == '' || confirmpassword == '') {
        swal.fire({
            title: 'Error',
            text: 'Por favor llene todos los campos',
            icon: 'error',
            confirmButtonText: 'Aceptar'
        });
        return;
    }

    if (passwords !== confirmpassword) {
        swal.fire({
            title: 'Error',
            text: 'Las contraseñas no coinciden',
            icon: 'error',
            confirmButtonText: 'Aceptar'
        });
        return;
    }

    $.ajax({
        url: "{{ url('/user/update') }}" + "/" + userId,
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data: {
             password: passwords
        },
        success: function(response) {
            swal.fire({
                title: 'Éxito',
                text: "Contraseña cambiada correctamente",
                icon: 'success',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ url('/user') }}";
                }
            });
        },
        error: function(error) {
            swal.fire({
                title: 'Error',
                text: 'Error al cambiar la contraseña',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
        }
    });
}
</script>
@endsection

