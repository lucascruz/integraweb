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
            <img src="{{ url(''). '/'.  $param['medecina_logo_header_footer_path'] }}" class="img-fluid">
            <!-- <img src="{{ url('/images/page_logos/logo telemedicina. white and blue 1.png') }}" class="img-fluid" alt="logo images" /> -->
          </div>
        </div>
      </div>
      <hr />
      <div class="row">
        <div class="col-12 text-center">
          <div class="menu">
            <ul class="nav justify-content-center mt-2">
              <li class="nav-item">
                <a href="{{ route('welcome') }}">
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
                <a href="#">
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

<!-- Begin Page Content -->

<p></p>
<div class="container">
  <div class="jumbotron">
    <h2>Formulario de Contacto</h2>
    <p></p>
    <div class="container-fluid">
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <form action="{{route('storeContact')}}" method="POST">
                  @csrf

                  <div class="form-group">
                  <select class="form-control" name="title" id="title"  value="{{old('title')}}" required>
                      <option>Quiero más información</option>
                      <option>Soy Profesional</option>
                      <option>Soy Paciente</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <input placeholder="Correo Electrónico" type="email" class="form-control" name="email" id="email" value="{{old('email')}}" required>
                  </div>

                  <div class="form-group">
                    <textarea placeholder="Escribe aquí" type="text" class="form-control" rows="6" name="reason" id="reason" value="{{old('reason')}}" required></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                @if (session('agregarContact'))
                <div class="alert alert-success mt-3">
                  {{session('agregarContact')}}
                </div>
                @endif
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- ============== FOOTER SECTION START ============== -->
<section>
  <div class="footer-sec pt-5 pb-2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 col-12">
          <div class="foot-logo">
            <img src="{{ url(''). '/'.  $param['medecina_logo_header_footer_path'] }}" class="img-fluid">
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="contact-info">
            <h6>
              (+57 7) 6884207 - 3006310362<br />
              telemedicinacolombia@softwaremedico.com.co<br />
              Carrera 28 #120-09 Floridablanca - Colombia<br />
              <a href="">Politica de Privacidad</a> - <a href="">Terminos y Condiciones</a> - <a href="{{ route('contact') }}">Contacto</a><br />
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
        <p>© Copyright 2019. All Rights Reserved. Telemedicina Colombia es un<br />
          producto de la empresa Integra Web Ingenieria <S class="A S"></S></p>
      </div>
    </div>
  </div>
</section>

<!-- End of Main Content -->
@endsection


@section('custom_js')
<script>
  $(document).ready(function() {

    //   $.ajaxSetup({
    // 		headers: {
    // 			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    // 	}

    //   });

    $("#sponsor").owlCarousel({
      loop: true,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: false,
      nav: false,
      margin: 30,
      responsive: {

        320: {
          items: 2,
        },

        768: {
          items: 2,
        },
        991: {
          items: 4,
        },
        1100: {
          items: 6,
        }
      }
    });
  });
</script>
@endsection