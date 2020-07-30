<head>

<title>Opinions List</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<p>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Opinions List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr>
                      <th>Médico</th>
                      <th>Fecha</th>
                      <th>Opinion</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($opinions as $item) 
                    <tr>
                        <td>{{$item->doctors_id}}</td>
                        <td>{{$item->opinion_date}}</td>
                        <td>{{$item->opinion_content}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <a href="{{URL::route('doctor_list')}}" class="btn btn-danger">Back</a> 
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->