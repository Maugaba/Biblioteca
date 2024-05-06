@extends('Base/base')
@section('title', 'Libros')

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
					<h2 class="text-white font-weight-bold my-2 mr-5">Libros</h2>
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
						<a href="{{ url('/book') }}"class="text-white text-hover-white opacity-75 hover-opacity-100">Libros</a>
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
		<!--begin::Containeraqui-->
		<div class="container">
			<!--begin::Education-->
			<div class="d-flex flex-column flex-md-row">
				<!--begin::Aside-->
				<div class="flex-md-row-auto w-md-275px w-xl-325px">
					<!--begin::List Widget 17-->
					<div class="card card-custom gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0 pt-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label font-weight-bolder text-dark">Últimos Libros Prestados</span>
								<span class="text-muted mt-3 font-weight-bold font-size-sm">Últimos 5</span>
							</h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-4">
							@foreach($ultimosLibrosPrestados as $libro)
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-8">
								<!--begin::Symbol-->
								<div class="symbol mr-5 pt-1">
								<div class="symbol-label min-w-65px min-h-100px" style="background-image: url('assets/media/logos/Libro.png')"></div>
								</div>
								<!--end::Symbol-->
								<!--begin::Info-->
								<div class="d-flex flex-column">
									<!--begin::Title-->
									<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{ $libro->nombreDelLibro }}</a>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="text-muted font-weight-bold font-size-sm pb-4">{{ $libro->autoresOEditorial }}</span>
									<!--end::Text-->
								</div>
								<!--end::Info-->
							</div>
							<!--end::Item-->
							@endforeach
						</div>
						<!--end::Body-->
					</div>
					<!--end::List Widget 17-->
				</div>
				<!--end::Aside-->
				<!--begin::Content-->
				<div class="flex-md-row-fluid ml-md-6 ml-lg-8">
					<!--begin::Card-->
					<div class="card card-custom">
						<!--begin::Header-->
						<div class="card-header flex-wrap border-0 pt-6 pb-0">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label font-weight-bolder text-dark">Libros</span>
							</h3>
							<div class="card-toolbar">
									<!--begin::Dropdown-->
									<div class="mr-2">
										<button id="btnImportExcel" type="button" class="btn btn-light-primary font-weight-bolder" aria-haspopup="true" aria-expanded="false"><i class="fas fa-file-excel"></i>Importar Excel</button>
									</div>									
									<!--end::Dropdown-->
									<a href="{{ url('/book/create') }}" class="btn btn-success font-weight-bolder">Nuevo Libro</a>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
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
                                                    <option value="disponible">Disponible</option>
                                                    <option value="ocupado">Ocupado</option>
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
                                    <th>Codigo</th>
                                    <th>Nombre del Libro</th>
                                    <th>Autor/Editorial</th>
                                    <th>Cantidad</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                        </table>
                        <!--end: Datatable-->
                    </div>
						<!--end::Body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Education-->
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
            tags: true
        });
    });
    var datatable = $("#kt_datatable").DataTable({
        language: {
            "url": "{{ asset('assets/plugins/custom/datatables/Spanish.json') }}"
        },
        responsive: false,
        ajax: {
            url: '{{url('/book/list/json')}}',
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}", "state" : function() { return $('#kt_datatable_search_status').val() },
            }
        },
        columns: [
            { data: 'id' },
            { data: 'bookName' },
            { data: 'authorOrEditor' },
            { data: 'quantity' },
            {
                data: 'status',
                render: function(data, type, full, meta) {
                    return data === 'disponible' ? '<span class="badge badge-success">'+data+'</span>' : '<span class="badge badge-danger">'+data+'</span>';
                }
            },
            {
                data: 'Actions',
                render: function(data, type, full, meta) {
                    return '\
                    <a href="{{url('/book/edit/')}}/'+full.id+'" class="btn btn-sm btn-clean btn-icon mr-2" title="Editar libro">\
                        <i class="fas fa-edit"></i>\
                    </a>\
					<a href="#" class="btn btn-sm btn-clean btn-icon" title="Cambiar estado" onclick = "changeStatus('+full.id+')">\
                        <i class="fas fa-trash"></i>\
                    </a>\
                    ';
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

	function changeStatus(id) 
	{
		Swal.fire({
			title: '¿Estás seguro?',
			text: '¿Quieres cambiar el estado de este libro?',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Sí, cambiar estado'
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					url: '{{url('/book/change')}}',
                    type: 'POST',
					headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
					data: {
                        "id": id
					},
					success: function(response) {
						if (response.success) {
							Swal.fire(
								'¡Cambiado!',
								'El estado del libro ha sido cambiado correctamente.',
								'success'
							).then(function() {
								datatable.ajax.reload();
							});
						} else {
							Swal.fire(
								'Error',
								'Hubo un error al cambiar el estado del libro.',
								'error'
							);
						}
					},
					error: function(xhr, status, error) {
						Swal.fire(
							'Error',
							'Hubo un error al cambiar el estado del libro.',
							'error'
						);
					}
				});
			}
		});
	}
	document.getElementById('btnImportExcel').addEventListener('click', function() {
		// Crear un input de tipo file en memoria
		var input = document.createElement('input');
		input.type = 'file';
		input.accept = '.csv, .xlsx'; // Aceptar solo archivos CSV y Excel
		input.style.display = 'none'; // Ocultar el input

		// Cuando se selecciona un archivo, desencadenar el clic del input de archivo
		input.onchange = function(event) {
			var file = event.target.files[0];
			if (file) {

				var formData = new FormData();
				formData.append('excel_file', file);

				Swal.fire({
					title: 'Cargando...',
					text: 'Por favor, espera mientras se importan los libros.',
					allowOutsideClick: false,
					onBeforeOpen: () => {
						Swal.showLoading();
					}
				});
				$.ajax({
					url: '{{url('/excel/import')}}',
					type: 'POST',
					headers: {
						'X-CSRF-TOKEN': '{{ csrf_token() }}'
					},
					data: formData,
					cache: false,
					contentType: false,
					processData: false,
					success: function(response) {
						if (response.success) {
							Swal.fire(
								'¡Importado!',
								'Los libros han sido importados correctamente.',
								'success'
							).then(function() {
								datatable.ajax.reload();
							});
						} else {
							Swal.fire(
								'Error',
								'Hubo un error al importar los libros.',
								'error'
							);
						}
					},
					error: function(xhr, status, error) {
						Swal.fire(
							'Error',
							'Hubo un error al importar los libros.',
							'error'
						);
					}
				});
			}
		};

		// Hacer clic en el input de archivo
		input.click();
	});

</script>
@endsection