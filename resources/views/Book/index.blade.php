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
								<span class="card-label font-weight-bolder text-dark">Books to Pickup</span>
								<span class="text-muted mt-3 font-weight-bold font-size-sm">24 Books to Return</span>
							</h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-4">
							<!--begin::Container-->
							<div>
								<!--begin::Item-->
								<div class="d-flex align-items-center mb-8">
									<!--begin::Symbol-->
									<div class="symbol mr-5 pt-1">
										<div class="symbol-label min-w-65px min-h-100px" style="background-image: url('assets/media/books/4.png')"></div>
									</div>
									<!--end::Symbol-->
									<!--begin::Info-->
									<div class="d-flex flex-column">
										<!--begin::Title-->
										<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Darius The Great</a>
										<!--end::Title-->
										<!--begin::Text-->
										<span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story About
										<br />Darius greatness</span>
										<!--end::Text-->
										<!--begin::Action-->
										<div>
											<button type="button" class="btn btn-light font-weight-bolder font-size-sm py-2">Book Now</button>
										</div>
										<!--end::Action-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center mb-8">
									<!--begin::Symbol-->
									<div class="symbol mr-5 pt-1">
										<div class="symbol-label min-w-65px min-h-100px" style="background-image: url('assets/media/books/12.png')"></div>
									</div>
									<!--end::Symbol-->
									<!--begin::Info-->
									<div class="d-flex flex-column">
										<!--begin::Title-->
										<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Wild Blues</a>
										<!--end::Title-->
										<!--begin::Text-->
										<span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story About
										<br />Darius greatness</span>
										<!--end::Text-->
										<!--begin::Action-->
										<div>
											<button type="button" class="btn btn-light font-weight-bolder font-size-sm py-2">Book Now</button>
										</div>
										<!--end::Action-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center">
									<!--begin::Symbol-->
									<div class="symbol mr-5 pt-1">
										<div class="symbol-label min-w-65px min-h-100px" style="background-image: url('assets/media/books/13.png')"></div>
									</div>
									<!--end::Symbol-->
									<!--begin::Info-->
									<div class="d-flex flex-column">
										<!--begin::Title-->
										<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Simple Thinking</a>
										<!--end::Title-->
										<!--begin::Text-->
										<span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story About
										<br />Darius greatness</span>
										<!--end::Text-->
										<!--begin::Action-->
										<div>
											<button type="button" class="btn btn-light font-weight-bolder font-size-sm py-2">Book Now</button>
										</div>
										<!--end::Action-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::List Widget 17-->
					<!--begin::List Widget 9-->
					<div class="card card-custom gutter-b">
						<!--begin::Header-->
						<div class="card-header align-items-center border-0 mt-4">
							<h3 class="card-title align-items-start flex-column">
								<span class="font-weight-bolder text-dark">My Activity</span>
								<span class="text-muted mt-3 font-weight-bold font-size-sm">890,344 Sales</span>
							</h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-4">
							<!--begin::Timeline-->
							<div class="timeline timeline-6 mt-3">
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">08:42</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-warning icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Text-->
									<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Outlines keep you honest. And keep structure</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">10:00</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-success icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Content-->
									<div class="timeline-content d-flex">
										<span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">AEOL meeting</span>
									</div>
									<!--end::Content-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">14:37</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-danger icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Desc-->
									<div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">Make deposit
									<a href="#" class="text-primary">USD 700</a>. to ESL</div>
									<!--end::Desc-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-primary icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Text-->
									<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-danger icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Desc-->
									<div class="timeline-content font-weight-bolder text-dark-75 pl-3 font-size-lg">New order placed
									<a href="#" class="text-primary">#XF-2356</a>.</div>
									<!--end::Desc-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">23:07</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-info icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Text-->
									<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Outlines keep and you honest. Indulging in poorly driving</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Timeline-->
						</div>
						<!--end: Card Body-->
					</div>
					<!--end: List Widget 9-->
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
                                    <th>Id</th>
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
                    <a href="#" class="btn btn-sm btn-clean btn-icon" title="Desactivar libro">\
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
</script>
@endsection