<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Edit Insurance</title>
  </head>
  <body>
      <p>
<!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Insurance</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <form action="{{route('updateInsurance' , $insuranceActualizar->id)}}" method="POST">
                   @method('PUT')
                   @csrf

                   <div class="form-group">           
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" id="name"  value="{{$insuranceActualizar->name}}" required>
                      </div>

                    <button type="submit" class="btn btn-warning">Save</button>
                    <a>
                    <a>
                    <a href="{{URL::route('insurance-list')}}" class="btn btn-danger">Back</a>
                  </form>
                    @if (session('updateInsurance'))
                    <div class="alert alert-success mt-3">
                        {{session('updateInsurance')}}
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
  </body>
</html>