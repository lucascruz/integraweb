@extends('layouts.app_header_set')

@section('content')

	<!-- ============== HEADER SECTION START ============== -->
	<section>
		<div class="header-sec py-3">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-9 col-12 banner-sec">
						<div class="row align-items-center">
							<div class="col-md-3 col-12 py-2">
								<img  src="{{ url('public'). '/'.  $param['medecina_logo_path'] }}" class="img-fluid">
							</div>
							<div class="col-md-9 col-12 py-2">
								<div class="box">
									<div class="row align-items-end justify-content-center justify-content-md-left">
										<div class="col-md-5 col-12 py-2">
											<p class="mb-2 text-light">
												Busco un:
											</p>
											<input type="text" placeholder="EJE. DERMATOLOGO" name="">
										</div>
										<div class="col-md-5 col-12 py-2">
											<p class="mb-2 text-light">
												En:
											</p>
											<input type="text" placeholder="BUCARAMANGA" name="">
										</div>
										<div class="col-md-2 col-12 py-2">
											<button class="btn-search">
												<a href="">
													VAMOS
												</a>
											</button>
										</div>
										<!-- <div class="col-2"></div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-12">
						<div class="logo-sec">
							<img  src="{{ url('public'). '/'.  $param['medecina_logo_header_footer_path'] }}" class="img-fluid">
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
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="menu">
							<ul class="nav justify-content-end mb-1">
								<li class="nav-item">
									<a href="">
										Inicia Sesion
									</a>
								</li>
								<li class="nav-item">|</li>
								<li class="nav-item">
									<a href="">
										Eres Nuevo?
									</a>
								</li>
								<li class="nav-item">
									<a href="">
										Registry
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
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
							<img src="{{ url('public/images/By map button.png') }}" class="img-fluid">
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
				<div class="container">
					<div class="team">
						<div class="owl-carousel" id="doctor">
							<div class="team-box text-center margin-section-one">
								<div class="team-img">
								<a href="{{ url('/doctor_detail') }}"><img src="{{ url('public/images/dr.jpg') }}" class="img-fluid" alt="images" /></a>
								</div>
								<div class="margin-section">
									<h2>
										<a href="{{ url('/doctor_detail') }}">
											Dr.Pepito Perez		
										</a>
									</h2>
									<h3 style="color:rgb(137,141,143);">
										DERMATOLOGO
									</h3>
									<h3 style="color: rgb(13,201,223);">
										<b>UNAB</b>
									</h3>
									<h3>
										COP $100.000
									</h3>
									<h3 style="color:rgb(137,141,143);">
										CRA 33 # 48 - 13
									</h3>
									<h3 style="color:rgb(137,141,143);">
										Bucaramanga
									</h3>
								</div>
							</div>
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
							<img  src="{{ url('public'). '/'.  $param['medecina_logo_middle_path'] }}" class="img-fluid">
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
    $('document').ready(function(){
        $("#doctor").owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:1000,
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
                1100:{
                    items:4,
                }
            }
        });
    });
    </script>
    @endsection


