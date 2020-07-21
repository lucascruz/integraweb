<head>

<title>Enviar Formulario</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>
<p></p>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Formulario de Contacto</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <form action="{{route('storeContact')}}" method="POST">
                   @csrf

                   <div class="form-group">           
                      <label for="title">Asunto</label>
                      <input type="text" class="form-control" name="title" id="title"  value="{{old('title')}}" required>
                      </div>

                    <div class="form-group">           
                      <label for="intro_text">Su Pregunta</label>
                      <textarea type="text" class="form-control" rows="6" name="intro_text" id="intro_text"  value="{{old('intro_text')}}" required></textarea>
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
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->