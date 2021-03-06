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
							<img src="{{ url('public'). '/'.  $param['medecina_logo_path'] }}" class="img-fluid">
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
						<img src="{{ url('public'). '/'.  $param['medecina_logo_header_footer_path'] }}" class="img-fluid">
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
										<a class="btn btn-danger btn-user btn-block" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
											{{ __('CERRAR SESIÓN') }}
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
			</li>
			</ul>
		</div>
	</div>
	</div>
	</div>
	</div>
</section>

<!-- ============== BANNER SECTION END ============== -->

<!-- ============== MIDDLE SECTION START ============== -->
<section class="mt-5">
	<div class="dr-section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="team-box-one">
						<div class="row align-items-center">
							<div class="col-md-8 col-12 border">
								<div class="left-side">
									<div class="row">
										<div class="col-2"></div>
										<div class="col-8">
											<div class="btn btn-round">
												<h4 class="m-0">
													Mi Cuenta
												</h4>
											</div>
										</div>
										<div class="col-2"></div>
									</div>
									<div class="row my-5 align-items-center">
										<div class="col-md-3 col-12">
											<div class="img-sec">
												<img src="https://www.netclipart.com/pp/m/195-1956809_clinical-education-patient-and-doctor-icon.png" class="rounded-circle" width="150" height="150">
											</div>
										</div>
										<div class="col-md-9 col-12">
											<div class="details">
												<h6>Estas registrado como paciente y con esta cuenta puedes agendar citas con profesionales en salud.</h6>
												<p>
													<div class="col-5">
														<div class="team-img">
															<!--	<img src="{{ url('public/images/dr.jpg') }}" class="img-fluid" alt="images" /> -->
														</div>
													</div>
													<h2>
														Nombre: {{ Auth::user()->name }}
													</h2>
													<p>
														<h2>
															Ciudad: {{ Auth::user()->city }}
														</h2>
														<p>
															<h2>
																Telefono: {{ Auth::user()->cel }}
															</h2>
															<p>
																<h2>
																	Email: {{ Auth::user()->email }}
																</h2>
																<p>
																	<div class="row align-items-center">
																		<div class="col-md-4 col-6">
																			<button class="btn btn-solid">
																				<a href="{{URL::route('appointment_history')}}">Historial</a>
																			</button>
																		</div>
																		<div class="col-md-4 col-6">
																			<button class="btn my-2 btn-solid">
																				<a href="{{route('account_configuration' , Auth::user()->id)}}">Configuracion</a>
																			</button>
																		</div>
																		<div class="col-md-4"></div>
																	</div>
											</div>
											<p></p>
											<h7>Si eres profesional de salud y quieres hacer parte de esta red haz clic <a href="https://www.softwaremedico.com.co/inicio-2/software-telemedicina/" target="_blank">AQUÍ</a>.</h7>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="right-side">
									<div class="row">
										<div class="col-3"></div>
										<div class="col-6">
											<div class="btn btn-round">
												<h4 class="m-0">
													Tus citas
												</h4>
											</div>
										</div>
										<div class="col-3"></div>
									</div>
									<div class="row">
										<div class="col-12">
											<div class="team right-team">
												<div class="carousel-wrap">
													<div class="owl-carousel" id="doctor">
														<div class="team-box text-center margin-section-one">
															<div class="team-img">
																<img src="{{ url('public/images/dr.jpg') }}" class="img-fluid" alt="images" />
															</div>
															<div class="margin-section">
																<h4>Dr.Pepito Perez</h4>
																<h5 style="color:rgb(137,141,143);">
																	DERMATOLOGO
																</h5>
																<h3 style="color: rgb(13,201,223);">
																	<b>UNAB</b>
																</h3>
																<div class="button-sec">
																	<button class="btn btn-solid btn-lightblue mb-1">
																		Cambiar fecha
																	</button>
																	<button class="btn btn-solid btn-blue mt-1" data-toggle="modal" data-target="#appoint_cancel">
																		Cancelar cita
																	</button>
																</div>
																<h5>
																	COP $100.000
																</h5>
																<h5 style="color:rgb(137,141,143);">
																	CRA 33 # 48 - 13
																</h5>
																<h5 style="color:rgb(137,141,143);">
																	Bucaramanga
																</h5>
															</div>
														</div>
														<div class="team-box text-center margin-section-one">
															<div class="team-img">
																<img src="{{ url('public/images/dr.jpg') }}" class="img-fluid" alt="images" />
															</div>
															<div class="margin-section">
																<h4>Dr.Pepito Perez</h4>
																<h5 style="color:rgb(137,141,143);">
																	DERMATOLOGO
																</h5>
																<h3 style="color: rgb(13,201,223);">
																	<b>UNAB</b>
																</h3>
																<div class="button-sec">
																	<button class="btn btn-solid btn-lightblue mb-1">
																		Cambiar fecha
																	</button>
																	<button class="btn btn-solid btn-blue mt-1 " data-toggle="modal" data-target="#appoint_cancel">
																		Cancelar cita
																	</button>
																</div>
																<h5>
																	COP $100.000
																</h5>
																<h5 style="color:rgb(137,141,143);">
																	CRA 33 # 48 - 13
																</h5>
																<h5 style="color:rgb(137,141,143);">
																	Bucaramanga
																</h5>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ============== MIDDLE SECTION END ============== -->

<!-- ============== FOOTER SECTION START ============== -->
<section>
	<div class="footer pt-5 pb-2">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-3 col-12">
					<div class="foot-logo">
						<img src="{{ url('public'). '/'.  $param['medecina_logo_middle_path'] }}" class="img-fluid">
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="contact-info">
						<h6>
							(0261) 12345678 - 9876543210<br />
							telemedicinacolombia@softwaremedico.com.co<br />
							Carrera 28 #123-09 Floridablanca - Colombia<br />
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
				© Copyright 2019. All Rights Reserved. Telemedicina Colombia es un <br />
				producto de la empresa Integra Web Ingenieria S.A.S
			</p>
		</div>
	</div>
</section>
<!-- ============== BOTTOM FOOTER SECTION END ============== -->

<!-- ============ MODAL VIEW ============ -->
<section>
	<div class="container">
		<div class="modal fade" id="appoint_cancel" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" style="background-color: rgb(0,110,183);">
						<img src="{{ url('public'). '/'.  $param['medecina_logo_header_footer_path'] }}" class="img-fluid">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="img-section">
							<img src="{{ url('public/images/Check page logo.png') }}" class="img-fluid" alt="images" />
							<h4>
								Tu sita ha sido cancelada
							</h4>
						</div>
						<div class="row">
							<div class="col-6 text-center">
								<button class="btn btn-solid">
									<a href="">
										Ir a mis citas
									</a>
								</button>
							</div>
							<div class="col-6 text-center">
								<button class="btn btn-solid">
									<a href="">
										Agender nueva cita
									</a>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ========== SECOND MODAL ========== -->
		<div class="modal fade" id="configuracion" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" style="background-color: rgb(0,110,183);">
						<img src="{{ url('public'). '/'.  $param['medecina_logo_header_footer_path'] }}" class="img-fluid">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-8 col-12">
								<div class="img-section">
									<img src="{{ url('public/images/Check page logo.png') }}" class="img-fluid" alt="images" />
									<h4>
										Tu sita ha sido agendada y pagada<br />
										satisfactoriamente <br />
										<span>Gracias por preferirnos!</span>
									</h4>
								</div>
								<div class="row">
									<div class="col-6 text-center">
										<button class="btn btn-solid">
											<a href="third.html">
												Ir a mis citas
											</a>
										</button>
									</div>
									<div class="col-6 text-center">
										<button class="btn btn-solid">
											<a href="first.html">
												Agender nueva cita
											</a>
										</button>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="team right-team">
									<div class="team-box text-center margin-section-two">
										<div class="team-img">
											<img src="{{ url('public/images/dr.jpg') }}" class="img-fluid" alt="images" />
										</div>
										<div class="margin-section">
											<h5>Dr.Pepito Perez</h5>
											<h5 style="color:rgb(137,141,143);">
												DERMATOLOGO
											</h5>
											<h3 style="color: rgb(13,201,223);">
												<b>UNAB</b>
											</h3>
											<h6 style="background: #fff; padding: 10px 20px; border-radius: 10px; color: rgb(13,201,223); font-weight: 600;">
												Sabedo, 13 de junio de 2020<br />
												8:00
											</h6>
											<h5>
												COP $100.000
											</h5>
											<h5 style="color:rgb(137,141,143);">
												CRA 33 # 48 - 13
											</h5>
											<h5 style="color:rgb(137,141,143);">
												Bucaramanga
											</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ========== SECOND MODAL ========== -->
	</div>
</section>
<!-- ============ MODAL VIEW ============ -->
@endsection

@section('custom_js')

<script>
	$(document).ready(function() {
		$("#doctor").owlCarousel({
			loop: true,
			autoplay: false,
			autoplayTimeout: 1000,
			autoplayHoverPause: false,
			nav: true,
			navText: [
				"<i class='fa fa-caret-left'></i>",
				"<i class='fa fa-caret-right'></i>"
			],
			// margin:30,
			responsive: {

				320: {
					items: 1,
				},

				768: {
					items: 1,
				},
				991: {
					items: 1,
				},
				1100: {
					items: 1,
				}
			}
		});
	});
</script>
@endsection