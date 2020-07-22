@extends('layouts.app_header_set')
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
@section('content')
	<!-- ============== HEADER SECTION START ============== -->
	<section>
		<div class="header-sec">
			<div class="container">
				<div class="row text-center">
					<div class="col-12">
						<div class="logo-sec">
							<img  src="{{ url('public'). '/'.  $param['medecina_logo_header_footer_path'] }}" class="img-fluid">
							<!-- <img src="{{ url('public/images/page_logos/logo telemedicina. white and blue 1.png') }}" class="img-fluid" alt="logo images" /> -->
						</div>
					</div>
				</div>
				<hr/>
				<div class="row">
					<div class="col-12 text-center">
						<div class="menu">
							<ul class="nav justify-content-center mt-2">
								<li class="nav-item">
									<a href="#">
										Inicio
									</a>
								</li>
								<li class="nav-item">-</li>
								<li class="nav-item">
									<a href="https://www.softwaremedico.com.co/inicio-2/software-de-historia-clinica-2-peru/">
										Soy Profesional en salud
									</a>
								</li>
								<li class="nav-item">-</li>
								<li class="nav-item">
									<a href="#security_part">
										Seguridad
									</a>
								</li>
								<li class="nav-item">-</li>
								<li class="nav-item">
									<a href="{{ route('register') }}">
										Regístro
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============== HEADER SECTION END ============== -->

	<!-- ============== BANNER SECTION START ============== -->
	<section>
		<div class="banner-section w-100">
			<div class="white-box"></div>
			<div class="blue-box"></div>
			<div class="lightblue-box">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="menu">
								<ul class="nav mb-1">
									<li class="nav-item">
										<a href="{{ route('login') }}">
											Iniciar Sesión
										</a>
									</li>
									<li class="nav-item"> | </li>
									<li class="nav-item">
										<a href="{{ route('register') }}">
											¿Eres Nuevo?   Regístrate
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row p-0 m-0">
				<div class="col-4 p-0">
					<div class="title"></div>
				</div>
				<div class="col-8 p-0">
					<div class="img-sec">
						<!-- <img  src="{{ url('public'). '/'.  $param['medecina_logo_path'] }}" class="img-fluid"> -->
						<img src="{{ url('public'). '/'.  $param['home_big_back_ground'] }}" class="img-fluid" style="width: 100%;">
					</div>
				</div>
			</div>
			<div class="banner-cantent" style="font-family: 'Roboto', sans-serif;">
				<h2 class="mb-0 mb-md-3" style="padding-left: 50px;">
					LOS MEJORES ESPECIALISTAS AL ALCANCE 
				</h2>
				<h2 class="mb-0 mb-md-3" style="padding-left: 50px;">
					DE TU MANO
				</h2>
				<h2 class="mb-0 mb-md-3" style="color:#0BAAFF; padding-left: 50px;">
					¡AGENDA TU CITA YA!
				</h2>
				<div class="container" style="font-family: 'Fjalla One', sans-serif;">
					<div class="row mt-0 mt-md-5">
						<div class="col-6 text-center">
							<button class="btn btn-solid">
							<a href="#patient_part">	
								<h2>SOY PACIENTE</h2>
							</a>
							</button>
						</div>
						<div class="col-6 text-center">
							<button class="btn btn-solid">
								<a href="https://www.softwaremedico.com.co/inicio-2/software-de-historia-clinica-2-peru/">
									<h2 style="padding-left: 5px;">SOY PROFESIONAL</h2>
								</a>
							</button>
						</div>
					</div>
					<div class="row mt-1 mt-md-5 d-none d-md-flex d-md-block align-items-center" id="patient_part">
						<div class="col-md-3 col-12">
							<a href="{{ url('/doctor_list') }}">
								<img  src="{{ url('public'). '/'.  $param['medecina_logo_path'] }}" class="img-fluid">
							</a>
						
						</div>
						<div class="col-md-9 col-12">
							<div class="box">
								<div class="row align-items-end justify-content-center justify-content-md-left">
									<div class="col-5 p-0 p-md-2">
										<p class="mb-2 text-light">
											Busco un:
										</p>
										<input type="text" placeholder="EJE. DERMATOLOGO" name=""> 
									
									</div>
									<div class="col-5 p-0 p-md-2">
										<p class="mb-2 text-light">
											En:
										</p>
										<input type="text" placeholder="BUCARAMANGA" name="">
									</div>
									<div class="col-md-2 col-12 p-0 p-md-2">
										<button class="btn-search">
											<a href="{{ url('/doctor_list') }}" style="font-size: 18px;">
												VAMOS
											</a>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============== BANNER SECTION END ============== -->

	<!-- <section>
		<div class="banner-section">
			<div class="banner-cantet">
				<div class="container">
					<div class="row mt-1 mt-md-5 my-3 d-md-none align-items-center">
						<div class="col-md-3 col-12 my-1">
							<img src="{{ url('public/images/101.png') }}" class="img-fluid">
						</div>
						<div class="col-md-9 col-12 my-1">
							<div class="box">
								<div class="row align-items-end justify-content-center justify-content-md-left">
									<div class="col-md-5 col-12 my-1">
										<p class="mb-2 text-light">
											Busco un:
										</p>
										<input type="text" placeholder="EJE. DERMATOLGO" name="">
									</div>
									<div class="col-md-5 col-12 my-1">
										<p class="mb-2 text-light">
											En:
										</p>
										<input type="text" placeholder="BUCARAMANGA" name="">
									</div>
									<div class="col-md-2 col-12 my-1">
										<button class="btn-search">
											<a href="">
												VAMOS
											</a>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section> -->

	<section class="bg-light py-3" id="security_part">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-3 col-12">
					<img  src="{{ url('public'). '/'.  $param['medecina_logo_middle_path'] }}" class="img-fluid">
				</div>
				<div class="col-md-9 col-12">
					<div class="cantent-section text-center">
						<h6>
							Telemedicina Colombia es una aplicación web especializada en agendamiento de citas médicas que te ayuda a agilizar tu visitas a consultorio, centro médico o IPS.
						</h6>
						<div class="row">
							<div class="col-md-4 col-12">
								<div class="cantent">
									<i class="fas fa-cog"></i>
									<h6>
										SOPORTE Y GARANTíA
									</h6>
									<p>
										Un equipo que te ayuda cuando lo necesites
									</p>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="cantent">
									<i class="fas fa-lock"></i>
									<h6>
										SEGURIDAD
									</h6>
									<p>
										Informacion almacenada segura y confidencial
									</p>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="cantent">
									<i class="fas fa-balance-scale"></i>
									<h6>
										NORMATIVIDAD
									</h6>
									<p>
										Desarrollado de acuerdo a la ley 1438 de 2011
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    
	<section id="register_befenift">
		<div class="banner-sec w-100">
			<div class="blue-box"></div>
			<div class="white-box"></div>
			<div class="lightblue-box" style="height: 25px;"></div>
		</div>
	</section>

	<!-- ============== BENEFITS SECTION START ============== -->
	<section class="py-5 bg-light">
		<div class="benefit-section">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-7 col-12 text-center my-3 my-md-0">
						<h2>
							NUESTROS BENEFICIOS
						</h2>
						<ul class="navbar-nav">
							<li>
								<p>
									<i class="far fa-check-circle mr-2"></i> Software 100% en la Nube, rapido y facil de usar
								</p>
							</li>
							<li>
								<p>
									<i class="far fa-check-circle mr-2"></i> Es ajustable de acuerdo tus necesidades y especialidad
								</p>
							</li>
							<li>
								<p>
									<i class="far fa-check-circle mr-2"></i> Protege tu informacion y la mantiene segura
								</p>
							</li>
							<li>
								<p>
									<i class="far fa-check-circle mr-2"></i> Optimiza y ahorra tiempo
								</p>
							</li>
							<li>
								<p>
									<i class="far fa-check-circle mr-2"></i> Lleva el Control total de tu Consultorio medico
								</p>
							</li>
						</ul>
						<div class="mt-5">
							<p style="margin-bottom: 0px; font-weight:600">
								Lleva el control de la Agenda de citas, Historias Clinicas,
								
							</p>
							<p style="font-weight:600">
								RIPS, Facturacion y Reportes, facil y rapido con Software
							</p>
						</div>
						<div class="mt-5">
							<iframe width="300" src="{{ $param['home_back_video'] }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-md-5 col-12 my-3 my-md-0 register-section">
						<h2>
							Regístrate
						</h2>
						<form >
							<label>Nombre:</label>
							<input id="name" type="text" class="form-control" name="">
							<label>Correo:</label>
							<input id="email" type="email" class="form-control" name="">
							<label>Contraseña:</label>
							<input id="password" type="password" class="form-control" name="">
   
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============== BENEFITS SECTION END ============== -->

	<!-- ============== SPONSOR SECTION START ============== -->
	<section class="py-3 bg-light">
		<div class="sponsor-sec">
			<div class="container">
				<h1>NUESTROS ALIADOS Y PATROCINADORES:</h1>
				<div class="owl-carousel align-items-center" id="sponsor">
					@foreach($param['partner_logos'] as $row)	
						<div class="sponsors">
							<img src="{{ url('public/images/partner_logos'). '/'. $row->title }}"  width="150" height="80">
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- ============== SPONSOR SECTION END ============== -->

	<!-- ============== FOOTER SECTION START ============== -->
	<section>
		<div class="footer-sec pt-5 pb-2">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-3 col-12">
						<div class="foot-logo">
						<img  src="{{ url('public'). '/'.  $param['medecina_logo_header_footer_path'] }}" class="img-fluid">
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="contact-info">
							<h6>
								(+57 7) 6884207 - 3006310362<br/>
								telemedicinacolombia@softwaremedico.com.co<br/>
								Carrera 28 #120-09 Floridablanca - Colombia<br/>
								<a href="">Politica de Privacidad</a> - <a href="">Terminos y Condiciones</a> - <a href="{{ route('contact') }}">Contacto</a><br/>
							</h6>
						</div>
					</div>
					<div class="col-md-3 col-12">
						<div class="social-media">
							<ul class="nav">
								<li class="nav-item">
									<a href="https://www.facebook.com/softwaredemedicos" class="nav-link"> 
										<i class="fa fa-facebook facebook"></i>
									</a>
								</li>
								<li class="nav-item">
									<a href="https://www.youtube.com/channel/UCxvAr4-Q0Ihb8jqxYtbhNDA?view_as=subscriber" class="nav-link">
										<i class="fa fa-youtube youtube"></i>
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
				<hr style="border-color:#fff;" />
				<div class="bottom-footer-sec">
					<p>© Copyright 2019. All Rights Reserved. Telemedicina Colombia es un<br/>
					producto de la empresa Integra Web Ingenieria <S class="A S"></S></p>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('custom_js')
	<script>
	    $(document).ready(function(){

		//   $.ajaxSetup({
		// 		headers: {
		// 			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		// 	}

		//   });

	      $("#sponsor").owlCarousel({
	        loop:true,
	        autoplay:true,
	        autoplayTimeout:2000,
	        autoplayHoverPause:false,
	        nav:false,
	        margin:30,
	        responsive : {
	           		
	           		320 : {
	           			items:2,
	           		},

	            	768 : {
	            		items:2,
	            	},
	            	991 :{
	            		items:4,
	            	},
	            	1100:{
	            		items:6,
	            	}
	            }
	      	});
	    });
	</script>
@endsection