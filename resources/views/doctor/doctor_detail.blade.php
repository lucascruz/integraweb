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

	<!-- ============== MIDDLE SECTION START ============== -->
	<section class="mt-5">
		<div class="dr-section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="team-box-one">
							<div class="team-cantent">
								<div class="row">
									<div class="col-md-4 col-12 borders">
										<div class="row">
											<div class="col-12">
												<div class="dr-name">
													<h2>{{ $param['doctor_detail_info']->name }}</h2>
													<h3>DERMATOLOGO</h3>
													<p>Universidad Autonoma de Bucaramanga</p>
												</div>	
											</div>
										</div>
										<div class="row">
											<div class="col-5">
												<div class="team-img">
													<img src="{{ url('public/images/dr.jpg') }}" class="img-fluid" alt="images" />
												</div> 
											</div>
											<div class="col-7">
												<h6 style="font-weight: 600;">
													<a href="" data-toggle="modal" data-target="#opiniones">
														Ver opiniones
													</a>
												</h6>
												<h4>COP $100.000</h4>
												<button class="btn btn-solid">
													<a href="">
														En Linea
													</a>
												</button>
												<button class="btn my-2 btn-solid">
													<a href="">
														Presencial
													</a>
												</button>
												<button class="btn btn-round">
													<a href="">
														Enviar Mensaje
													</a>
												</button>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-6">
												<h5 style="font-weight: 600;">
														ESPECIALIDADES:
												</h5>
												<ul>
													<li>Vitiligo</li>
													<li>Psoriasis</li>
													<li>Rosacea</li>
												</ul>
											</div>
											<div class="col-6">
												<h5 style="font-weight: 600;">
													FORMACION:
												</h5>
												<ul>
													<li>Dermatologia clinica</li>
													<li>Dermatologia quirurgica</li>
												</ul>
											</div>
										</div>
									</div>
									<hr/>
									<div class="col-md-5 col-12">
										<div class="calender-sec">
											<button class="btn btn-round">
												<h4 class="m-0">
													AGENDA TU CITA
												</h4>
											</button>
 											<div class="calender">
 												<div class="row mt-3 day-sec align-items-center text-center">
 													<div class="col-1">
 														<i class="fas fa-caret-left"></i>
 													</div>
 													<div class="col-2">
 														<h4>
 															Lun
 														</h4>
 														<p>
 															9 Jun
 														</p>
 													</div>
 													<div class="col-2">
 														<h4>
 															Mar
 														</h4>
 														<p>
 															11 Jun
 														</p>
 													</div>
 													<div class="col-2">
 														<h4>
 															Mie
 														</h4>
 														<p>
 															12 Jun
 														</p>
 													</div>
 													<div class="col-2">
 														<h4>
 															Jue
 														</h4>
 														<p>
 															13 Jun
 														</p>
 													</div>
 													<div class="col-2">
 														<h4>
 															Vie
 														</h4>
 														<p>
 															14 Jun
 														</p>
 													</div>
 													<div class="col-1">
 														<i class="fas fa-caret-right"></i>
 													</div>
 												</div>
 												<div class="row my-3 time-sec">
 													<div class="col-1"></div>
 													<div class="col-2">
 														<ul>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">8:00</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">9:00</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">10:00</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">11:00</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">12:00</a>
 															</li>
 															<li>-</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">14:00</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">15:00</a>
 															</li>
 															<li>-</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">17:00</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">18:00</a>
 															</li>
 														</ul>
 													</div>
 													<div class="col-2">
 														<ul>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	8:00
 																</a>
 															</li>
 															<li>-</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	0:00
 																</a>
 															</li>
 															<li>-</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	2:00
 																</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	3:00
 																</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	4:00
 																</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	5:00
 																</a>
 															</li>
 															<li>-</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	7:00
 																</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	8:00
 																</a>
 															</li>
 														</ul>
 													</div>
 													<div class="col-2">
 														<ul>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	8:00
 																</a>
															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	9:00
 																</a>
															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	10:00
 																</a>
															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	11:00
 																</a>
															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	12:00
 																</a>
															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	13:00
 																</a>
															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	14:00
 																</a>
															</li>
 															<li>-</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	16:00
 																</a>
															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	17:00
 																</a>
															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	18:00
 																</a>
															</li>
 														</ul>
 													</div>
 													<div class="col-2">
 														<ul>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	8:00
 																</a>
															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	9:00
 																</a>
															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	10:00
 																</a>
															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	11:00
 																</a>
															</li>
 															<li>-</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	13:00
 																</a>
															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	14:00
 																</a>
															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	15:00
 																</a>
															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	16:00
 																</a>
															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	17:00
 																</a>
															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	18:00
 																</a>
															</li>
 														</ul>
 													</div>
 													<div class="col-2">
 														<ul>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	8:00
 																</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	9:00
 																</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	10:00
 																</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	11:00
 																</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	12:00
 																</a>
 															</li>
 															<li>-</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	14:00
 																</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	15:00
 																</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	16:00
 																</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	17:00
 																</a>
 															</li>
 															<li>
 																<a href="" data-toggle="modal" data-target="#appointment_modal">
 																	18:00
 																</a>
 															</li>
 														</ul>
 													</div>
 													<div class="col-1"></div>
 												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-12">
										<div class="contact-sec text-center">
											<button class="btn btn-round">
												<h4 class="m-0">
													CANTACO
												</h4>
											</button>
											<div class="google-map my-3">
												<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16289431.966082644!2d-83.39205727089762!3d4.609753787596501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e15a43aae1594a3%3A0x9a0d9a04eff2a340!2sColombia!5e0!3m2!1sen!2sin!4v1592910672586!5m2!1sen!2sin" width="100%"  frameborder="0" style="border:0; border-radius: 15px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
											</div>
											<div class="contact-info">
												<h5 style="color: rgb(112,114,115); font-size: 26px;">CRA 33 # 48 - 13</h5>
												<h6 style="color: rgb(112,114,115); font-size: 24px; letter-spacing: 1px;">Bucaramanga</h6>
												<p style="font-size: 22px; color: #186DAB;" class="my-3">
													Telefonos:<br/>
													(7) 6433333<br/>
													3189999999
												</p>
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

	<!-- ============ MODAL VIEW ============ -->
	<section>
		<div class="container">

            <!-- ========== appointment modal start ========== -->
			<div class="modal fade" id="appointment_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="background-color: rgb(0,110,183);">
							<img  src="{{ url('public'). '/'.  $param['medecina_logo_header_footer_path'] }}" class="img-fluid">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="appoint_dismiss">
					          	<span aria-hidden="true">&times;</span>
					        </button>
						</div>
						<div class="modal-body">
							<div class="container">
								<div class="row">
									<div class="col-md-8 col-12">
										<div class="form-sec">
											<h5>
												Agenda y paga tu cita
											</h5>
											<form>
												<div class="row">
													<div class="col-md-8 col-12">
														<h6>Tu EPS o Seguro:</h6>
														<input type="text" name="">
													</div>
													<div class="col-md-4 d-md-none col-12">
														
													</div>
												</div>
												<div class="row my-2">
													<div class="col-md-6 col-12">
														<h6>Nombres:</h6>
														<input type="text" name="">
													</div>
													<div class="col-md-6 col-12">
														<h6>Apellidos:</h6>
														<input type="text" name="">
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 col-12">
														<h6>E-mail:</h6>
														<input type="text" name="">
													</div>
													<div class="col-md-6 col-12">
														<h6>Diraccion domicilio:</h6>
														<input type="text" name="">
													</div>
												</div>
												<div class="row my-2">
													<div class="col-md-6 col-12">
														<h6>Numero movil:</h6>
														<input type="text" name="">
													</div>
													<div class="col-md-6 d-md-none"></div>
												</div>
												<div class="row">
													<div class="col-12">
														<h6>Cuentanos el motivo de tu consulta:</h6>
														<input type="text" name="">
													</div>
												</div>
												<div class="row my-2">
													<div class="col-1 pr-0">
														<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
													</div>
													<div class="col-11 pl-0">
														<h6 for="vehicle1">Acepto la politica da privacidad, los terminos y condicions y el tratamiento de datos</h6>
													</div>
												</div>
												<div class="row">
													<div class="col-6 text-center">
														<button class="btn btn-solid w-100" id="btn_appoint_pay">
															<a href="">
																Agendar cita y pagar
															</a>
														</button>
													</div>
													<div class="col-6 text-center" id="btn_appoint">
														<button class="btn btn-solid w-100">
															<a href="">
																Agendar cita solamente
															</a>
														</button>
													</div>
												</div>
											</form>
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
            <!-- ========== appointment modal end ========== -->
            
			<!-- ========== opiniones modal start ========== -->
			<div class="modal fade" id="opiniones" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="background-color: rgb(0,110,183);">
							<img  src="{{ url('public'). '/'.  $param['medecina_logo_header_footer_path'] }}" class="img-fluid">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          	<span aria-hidden="true">&times;</span>
					        </button>
						</div>
						<div class="modal-body">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<h5 style="font-size: 28px; font-weight: 600;">
											OPINIONES: <span style="font-size: 20px;">(64)</span>
										</h5>
									</div>
								</div>
								<div class="row my-3 align-items-end">
									<div class="col-md-10 col-12">
										<form class="form-sec">
											<h5>Deja tu opinion:</h5>
											<input type="text" name="">
										</form>
									</div>
									<div class="col-md-2 col-12">
										<div class="team-box-one p-0" style="background: 0;">
											<button class="btn btn-solid w-100">
												<a href="" style="color: #000;">
													Enviar
												</a>
											</button>
										</div>
									</div>
								</div>
								<div class="opinione-sec">
									<div class="row">
										<div class="col-md-10 col-12">
											<div class="row my-2 align-items-center">
												<div class="col-md-2 col-12 p-0">
													<div class="img-sec text-center">
														<img src="https://i.kinja-img.com/gawker-media/image/upload/gd8ljenaeahpn0wslmlz.jpg" class="image--cover m-0">
													</div>
												</div>
												<div class="col-md-10 col-12">
													<div class="details">
														<h2>
															Maria Rodriguez:
														</h2>
														<h3 class="my-2">
															3 de junio de 2020
														</h3>
														<p>
															Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
															tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
															quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
															consequat.
														</p>
													</div>
												</div>
											</div>
											<div class="row my-2 align-items-center">
												<div class="col-md-2 col-12 p-0">
													<div class="img-sec text-center">
														<img src="https://i.kinja-img.com/gawker-media/image/upload/gd8ljenaeahpn0wslmlz.jpg" class="image--cover m-0">
													</div>
												</div>
												<div class="col-md-10 col-12">
													<div class="details">
														<h2>
															Maria Rodriguez:
														</h2>
														<h3 class="my-2">
															3 de junio de 2020
														</h3>
														<p>
															Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
															tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
															quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
															consequat.
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-2 d-md-none"></div>
									</div>
								</div>
							</div>				
						</div>
					</div>
				</div>
			</div>
            <!-- ========== opiniones modal end ========== -->
            
            <!-- ========== apointment cancel modal start ========== -->
            <div class="modal fade" id="apointment_cancel_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="background-color: rgb(0,110,183);">
							<img  src="{{ url('public'). '/'.  $param['medecina_logo_header_footer_path'] }}" class="img-fluid">
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
            <!-- ========== apointment cancel modal end ========== -->

            <!-- ========== appointment confirm MODAL start ========== -->
            
            <!-- <button type="button" id="appoint_confirm_dlg_show" class="btn btn-primary" data-toggle="modal" data-target="#appointment_confirm_modal" hidden>
                 Launch demo modal
            </button> -->

			<div class="modal fade" id="appointment_confirm_modal"  tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="background-color: rgb(0,110,183);">
							<img  src="{{ url('public'). '/'.  $param['medecina_logo_header_footer_path'] }}" class="img-fluid">
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
											Tu sita ha sido agendada y pagada<br/>
											satisfactoriamente <br/>
											<span>Gracias por preferirnos!</span>
										</h4>
									</div>	
									<div class="row">
										<div class="col-6 text-center">
											<button class="btn btn-solid">
												<a href="{{ url('/patient_account') }}">
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
													Sabedo, 13 de junio de 2020<br/>
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
            <!-- ========== appointment confirm MODAL end ========== -->
		</div>
    </section>
@endsection

@section('custom_js')
	<script>
	    $(document).ready(function(){
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
              

            // =================  Button Event  ================== //
            $("#btn_appoint_pay").click(function() {
                //alert("AppointMent");
                
                $("#appoint_dismiss").click();
                
                $("#appointment_confirm_modal").modal();
                return false;
            });

            $("#btn_appoint").click(function() {
                $("#appoint_dismiss").click();
                
                $("#appointment_confirm_modal").modal();
                return false;
            });
	    });
    </script>

@endsection