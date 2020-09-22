@extends('layouts.app_header_set')

@section('content')

	<!-- ============== HEADER SECTION START ============== -->
	<section>
	<nav class="navbar navbar-light float-lg-right">
	<form class="form-inline">
	</form>
</nav>
		<div class="header-sec py-3">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-9 col-12 banner-sec">
						<div class="row align-items-center">
							<div class="col-md-3 col-12 py-2">
								<img  src="{{ url(''). '/'.  $param['medecina_logo_path'] }}" class="img-fluid">
							</div>
							<div class="col-md-9 col-12 py-2">
								<div class="box">
									@component('doctor.doctor_search')
									@endcomponent
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-12">
						<div class="logo-sec">
							<img  src="{{ url(''). '/'.  $param['medecina_logo_header_footer_path'] }}" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============== HEADER SECTION END ============== -->

	<!-- ============== BANNER SECTION START ============== -->
	<section>
		<div class="lightblue-box">

		<nav class="navbar navbar-expand-lg navbar-light lightblue-box"">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('patient_account') }}">
                                       <font color="blue">Mi Cuenta</font>
									</a>
									
								<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <font color="blue">Cerrar Sesión</font>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

		</div>
	</section>

	<!-- ============== BANNER SECTION END ============== -->

	<!-- ============== FILTER SECTION START ============== -->
	<section>
		<div class="filter-sec py-3">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-9 col-12 py-2">
						<div class="filter">
							<div class="row align-items-center">
								<div class="col-md-2 col-12 py-">
									<h3 class="m-0">Filtrar por:</h3>
								</div>
								<div class="col-md-10 col-12 py-">
									<div class="row">
										<div class="col-md-3 col-12 my-2">
											<button class="btn btn-solid">
												<a href="">
													Servicios
												</a>
											</button>
										</div>
										<div class="col-md-3 col-12 my-2">
											<button class="btn btn-solid">
												<a href="">
													Seguro
												</a>
											</button>
										</div>
										<div class="col-md-3 col-12 my-2">
											<button class="btn btn-solid">
												<a href="">
													Síntomas
												</a>
											</button>
										</div>
										<div class="col-md-3 col-12 my-2">
											<button class="btn btn-solid">
												<a href="">
													Todos
												</a>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-12 py-2">
						<div class="google-map-img">
							<img src="{{ url('/images/By map button.png') }}" class="img-fluid">
						</div>
					</div>
				</div>
				<hr/>
			</div>
		</div>
	</section>
	<!-- ============== FILTER SECTION END ============== -->

	<!-- ============== TEAM SECTION START ============== -->
	<section class="team-section">
		<section class="mb-5">
			<div class="team-sec">
				<div class="" style="width:90%; margin:auto">
					<div class="team">
						<div class="owl-carousel" id="doctor">
							@foreach($param['doctor_list'] as $row)
							<div class="team-box text-center margin-section-one">
								<div class="team-img">
								<a href="{{ route('doctor.details', $row->id) }}"><img src="{{ url('/images/doctor_images'). '/'. $row->image }}" class="img-fluid" alt="images" /></a>
								</div>
								<div class="margin-section">
									<h2>
										<a href="{{ route('doctor.details', $row->id) }}">
											{{ $row->name }}
										</a>
									</h2>
									<h3 style="color:rgb(137,141,143);">
										{{ $row->specialization }}
									</h3>
									<h3 style="color: rgb(13,201,223);">
										<b>{{ $row->university }}</b>
									</h3>
									<div class="d-flex justify-content-center">
										<img src="{{ url('/images/price_image.png') }}" class="img-fluid" alt="images" style="width:60px;"/>
										<h3 style="padding-top: 20px;">COP $100.000</h3>
									</div>									
									<h3 style="color:rgb(137,141,143);">
										{{ $row->address }}
									</h3>
									<h3 style="color:rgb(137,141,143);">
										{{ $row->city_name }}
									</h3>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	<!-- ============== TEAM SECTION END ============== -->	

	<!-- ============== FOOTER SECTION START ============== -->
	<section>
		<div class="container">
			<hr style="border-top: 2px solid #00F3FF;" />
		</div>
		<div class="footer pt-5 pb-2">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-3 col-12">
						<div class="foot-logo">
							<img  src="{{ url(''). '/'.  $param['medecina_logo_middle_path'] }}" class="img-fluid">
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="contact-info">
							<h6>
								(0261) 12345678 - 9876543210<br/>
								telemedicinacolombia@softwaremedico.com.co<br/>
								Carrera 28 #123-09 Floridablanca - Colombia<br/>
							</h6>
						</div>
					</div>
					<div class="col-md-3 col-12">
						<div class="social-media">
							<h4>SIGUENOS</h4>
							<ul class="nav justify-content-center">
								<li class="nav-item">
									<a href="" class="nav-link"> 
										<i class="fa fa-facebook facebook"></i>
									</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">
										<i class="fab fa-youtube youtube"></i>
									</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">
										<i class="fa fa-whatsapp whatsapp"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============== FOOTER SECTION END ============== -->

	<!-- ============== BANNER SECTION START ============== -->
	<section>
		<div class="blue-box"></div>
		<div class="white-box"></div>
		<div class="lightblue-box" style="background: rgb(62,163,220);">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="justify-content-center d-flex">
							<p style="color:#fff; margin: 0;">
								<a href="">Politica de Privacidad</a> - <a href="">Terminos y Condiciones</a> - <a href="">Contacto</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============== BANNER SECTION END ============== -->

	<!-- ============== BOTTM FOOTER SECTION START ============== -->
	<section>
		<div class="container">
			<div class="bottom-footer py-4">
				<p class="m-0">
					© Copyright 2019. All Rights Reserved. Telemedicina Colombia es un <br/>
					producto de la empresa Integra Web Ingenieria S.A.S
				</p>
			</div>
		</div>
	</section>
	<!-- ============== BOTTOM FOOTER SECTION END ============== -->
@endsection

@section('custom_js')
    <script>
	var APP_URL = {!! json_encode(url('/')) !!};

    $(document).ready(function(){
        $("#doctor").owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        nav:false,
        margin:30,
        responsive : {
                
                320 : {
                    items:1,
                },

                768 : {
                    items:2,
                },
                991 :{
                    items:3,
                },
				1100 :{
                    items:4,
                },
            }
        });

		$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
		});
    });

	function showDoctorDetail(doctor_id)
	{
		//alert(doctor_id);
		$.ajax({
		
			type:'GET',
			url: APP_URL + '/doctor_detail',
			data:{
				doctor_id: doctor_id,            
			},
			async:false,
			success:function(data){
				console.log(data);
			}   
		});
	}
	</script>

@endsection