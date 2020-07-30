@extends('layouts.app_admin')

@section('pageTitle', 'Doctors')

@section('head')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('public/vendors/select2/css/select2.min.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a>Users</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Doctors</li>
            </ol>
        </nav>
        <div class="dropdown">
            <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                <i class="ti-settings mr-1"></i> Actions
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item"  id="btn_add_doctor">Add Doctor</a>
                <!-- <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a> -->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                @for ($i = 0; $i < count($param['doctor_list']); $i++)
                    <?php $row = $param['doctor_list'][$i]; ?>
                    @if($i % 3 == 0)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-around">
                                    <div>
                                        <figure class="avatar mr-3">
                                            <img src="{{ url('public/images/doctor_images'). '/'. $row->image }}"
                                             class="rounded"
                                             alt="avatar">
                                        </figure>
                                    </div>
                                    <div>
                                        <a>{{ $row->name }}</a>
                                        <p class="text-muted">{{ $row->specialization }}</p>
                                    </div>
                                    <div>
                                        @if($row->active == 1)
                                            <span class="badge bg-danger-bright text-danger">Active</span>
                                        @elseif($row->active == 0)
                                            <span class="badge bg-success-bright text-success">Passive</span>
                                        @endif
                                    </div>
                                </div>
                                <div style="text-align:center"><span style="color:#b1a1a1; font-size:20px;" >Specialist</span></div>
                                @if($row->str_specialist)
                                    <div style="text-align:center"><p class="text-center">{{ $row->str_specialist }}</p></div>
                                @else
                                    <div style="text-align:center"><p class="text-center" style="color:red">No Specialist Selected</p></div>
                                @endif

                                <div style="text-align:center"><span style="color:#b1a1a1; font-size:20px;" >Formation</span></div>
                                @if($row->str_formation)
                                    <div style="text-align:center"><p class="text-center">{{ $row->str_formation }}</p></div>
                                @else
                                    <div style="text-align:center"><p style="color:red">No Formation Selected</p></div>
                                @endif

                                <div class="card border shadow-none">
                                    <div class="card-body pt-2 pb-2 text-muted">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                                <span>Email:</span>
                                                <span>{{ $row->email }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                                <span>Address:</span>
                                                <span>{{ $row->address }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                                <span>City:</span>
                                                <span>{{ $row->city_name }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                                <span>Contact:</span>
                                                <span>{{ $row->phone_number }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="list-inline text-center">
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-info" onclick="advanceDoctorInfo({{ $row->id}})" title="Advanced Setting" data-toggle="tooltip">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-primary" onclick="editDoctorInfo({{ $row->id}})" title="Profile Edit" data-toggle="tooltip">
                                            <i class="fa fa-user-o"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-danger" onclick="removeDoctorInfo({{ $row->id }})" title="Delete Doctor" data-toggle="tooltip">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @elseif($i % 3 == 1)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-around">
                                    <div>
                                        <figure class="avatar mr-3">
                                            <img src="{{ url('public/images/doctor_images'). '/'. $row->image }}"
                                             class="rounded"
                                             alt="avatar">
                                        </figure>
                                    </div>
                                    <div>
                                        <a>{{ $row->name }}</a>
                                        <p class="text-muted">{{ $row->specialization }}</p>
                                    </div>
                                    <div>
                                        @if($row->active == 1)
                                            <span class="badge bg-danger-bright text-danger">Active</span>
                                        @elseif($row->active == 0)
                                            <span class="badge bg-success-bright text-success">Passive</span>
                                        @endif
                                    </div>
                                </div>
                                <div style="text-align:center"><span style="color:#b1a1a1; font-size:20px;" >Specialist</span></div>
                                @if($row->str_specialist)
                                    <div style="text-align:center"><p class="text-center">{{ $row->str_specialist }}</p></div>
                                @else
                                    <div style="text-align:center"><p class="text-center" style="color:red">No Specialist Selected</p></div>
                                @endif
                                <div style="text-align:center"><span style="color:#b1a1a1; font-size:20px;" >Formation</span></div>
                                @if($row->str_formation)
                                    <div style="text-align:center"><p class="text-center">{{ $row->str_formation }}</p></div>
                                @else
                                    <div style="text-align:center"><p class="text-center" style="color:red">No Formation Selected</p></div>
                                @endif

                                <div class="card border shadow-none">
                                    <div class="card-body pt-2 pb-2 text-muted">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                                <span>Email:</span>
                                                <span>{{ $row->email }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                                <span>Address:</span>
                                                <span>{{ $row->address }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                                <span>City:</span>
                                                <span>{{ $row->city_name }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                                <span>Contact:</span>
                                                <span>{{ $row->phone_number }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="list-inline text-center">
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-info" onclick="advanceDoctorInfo({{ $row->id}})" title="Advanced Setting" data-toggle="tooltip">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-primary" onclick="editDoctorInfo({{ $row->id}})" title="Profile Edit" data-toggle="tooltip">
                                            <i class="fa fa-user-o"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-danger" onclick="removeDoctorInfo({{ $row->id }})" title="Delete Doctor" data-toggle="tooltip">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @elseif($i % 3 == 2)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-around">
                                    <div>
                                        <figure class="avatar mr-3">
                                            <img src="{{ url('public/images/doctor_images'). '/'. $row->image }}"
                                             class="rounded"
                                             alt="avatar">
                                        </figure>
                                    </div>
                                    <div>
                                        <a>{{ $row->name }}</a>
                                        <p class="text-muted">{{ $row->specialization }}</p>
                                    </div>
                                    <div>
                                        @if($row->active == 1)
                                            <span class="badge bg-danger-bright text-danger">Active</span>
                                        @elseif($row->active == 0)
                                            <span class="badge bg-success-bright text-success">Passive</span>
                                        @endif
                                    </div>
                                </div>
                                <div style="text-align:center"><span style="color:#b1a1a1; font-size:20px;" >Specialist</span></div>
                                @if($row->str_specialist)
                                    <div style="text-align:center"><p class="text-center">{{ $row->str_specialist }}</p></div>
                                @else
                                    <div style="text-align:center"><p class="text-center" style="color:red">No Specialist Selected</p></div>
                                @endif
                                <div style="text-align:center"><span style="color:#b1a1a1; font-size:20px;" >Formation</span></div>
                                @if($row->str_formation)
                                    <div style="text-align:center"><p class="text-center">{{ $row->str_formation }}</p></div>
                                @else
                                    <div style="text-align:center"><p class="text-center" style="color:red">No Formation Selected</p></div>
                                @endif

                                <div class="card border shadow-none">
                                    <div class="card-body pt-2 pb-2 text-muted">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                                <span>Email:</span>
                                                <span>{{ $row->email }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                                <span>Address:</span>
                                                <span>{{ $row->address }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                                <span>City:</span>
                                                <span>{{ $row->city_name }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between pl-0 pr-0">
                                                <span>Contact:</span>
                                                <span>{{ $row->phone_number }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="list-inline text-center">
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-info" onclick="advanceDoctorInfo({{ $row->id}})" title="Advanced Setting" data-toggle="tooltip">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-primary" onclick="editDoctorInfo({{ $row->id}})" title="Profile Edit" data-toggle="tooltip">
                                            <i class="fa fa-user-o"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-danger" onclick="removeDoctorInfo({{ $row->id }})" title="Delete Doctor" data-toggle="tooltip">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                @endfor
            </div>

            <!-- <nav aria-label="..." class="mb-4">
                <ul class="pagination pagination-rounded justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <i class="ti-angle-left"></i>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="ti-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav> -->

        </div>
    </div>

    <!-- ===============  MODAL VIEW START =============== -->
    <section>
        <div class="container">
            <!-- ================  Doctor Edit Modal ============== -->
            <div class="modal fade" id="doctor_config_modal"  tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header" style="background-color: rgb(0,110,183);">
							<h3 style="color:white">Doctor Manage</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btn_logo_dismiss">
					          	<span aria-hidden="true">&times;</span>
					        </button>
                        </div>
                        <form method="POST" action="{{ url('/doctor/addNewDoctor') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                            
                            <input id="doctor_action" name="doctor_action" value="add" hidden/>
                            <input id="doctor_id" name="doctor_id" value="0" hidden/>

                            
                            <div class="container" style="padding-top: 20px;">
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <img id="imagePreview" src="{{ url('public/images/doctor_images'). '/'. $row->image }}" width="100%" alt="  Select Image" style="padding-left: 1 0px;">
                                        </div>
                                    </div>

                                    <div class="container" style="margin-top: 20px;">
                                        <label>Choose City for Doctor:</label>
                                        <select class="custom-select custom-select-lg" name="city" id="city">
                                            <option value="0" selected>Select City</option>
                                            
                                            @foreach($param['city_list'] as $city)
                                                <option value="{{ $city->id }}" >{{ $city->name }}</option>
                                            @endforeach
                                        
                                        </select>
                                    </div>

                                    <div class="container" style="padding-top: 10px;">
                                        <span>Address </span><input type="text" id="doctor_address" name = "doctor_address" class="form-control" placeholder="Input Address of Doctor..."/>    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <span>Name </span><input type="text" id="doctor_name" name = "doctor_name" class="form-control" placeholder="Input Name of Doctor..."/>    
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <span>Email </span><input type="text" id="doctor_email" name = "doctor_email" class="form-control" placeholder="Input Email of Doctor..."/>    
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <span>Specialization </span><input type="text" id="doctor_sepcialization" name = "doctor_sepcialization" class="form-control" placeholder="Input Specialization of Doctor..."/>    
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <span>University </span><input type="text" id="doctor_university" name = "doctor_university" class="form-control" placeholder="Input University of Doctor..."/>    
                                    </div>
                                 
                                    <!-- City Id Input -->

                                    <div style="padding-top: 10px;">
                                        <span>Phone Number </span><input type="text" id="doctor_number" name = "doctor_number" class="form-control" placeholder="Input Phone Number of Doctor..."/>    
                                    </div>

                                    <!-- Specialist and Formation Left -->
                                </div>
                                </div>
                                
                            </div>		

                            <div class="container" style="padding-top: 20px;"> 
                               <div class="form-group">
                                    <div class="custom-control custom-switch custom-checkbox-danger">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch4_" name="active">
                                        <label class="custom-control-label" for="customSwitch4_">Active</label>
                                    </div>
                                </div>
                            </div>		
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="save_doctor_info">Save Doctor</button>
                        </div>
                        </form>
                    </div>
				</div>
            </div>
            <!-- ================  Doctor Edit Modal END ============== -->

            <!-- ================  Doctor Advance Modal ============== -->
             <div class="modal fade" id="advance_doctor_config_modal"  tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="background-color: rgb(0,110,183);">
							<h3 style="color:white">Specialization Manage</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btn_logo_dismiss">
					          	<span aria-hidden="true">&times;</span>
					        </button>
                        </div>
                        <!-- <form method="POST" enctype="multipart/form-data"> -->
                            <!-- @csrf -->
                        <div class="modal-body">
                            
                            <input id="advance_doctor_id" name="advance_doctor_id" value="0" hidden/>

                            
                            <div class="container" style="padding-top: 20px; padding-bottom: 20px; border-bottom: 2px solid #bba2a2;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="avatar-upload">
                                            <div class="avatar-preview">
                                                <img id="imagePreview_advance" src="{{ url('/public'). '/images/dr.jpg' }}" width="100%" alt="  Select Image" style="padding-left: 1 0px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center" style="height: 100%;">
                                            <div class="d-flex flex-column bd-highlight mb-3">
                                                <h4 id="advance_doctor_name">Jucb Christian</h4>
                                                <h4 id="advance_doctor_specialization" style="color:#bba2a2; padding-top:10px;">DERMAIDNO</h4>
                                            </div>
                                        </div>
                                        <!-- Specialist and Formation Left -->
                                    </div>
                                </div>
                            </div>	
                            
                            <div class="container" style="padding-top: 20px;">
                                <span>Choose Specialization: </span>
                                <div class="form-group">
                                    <select id="specialization_list" name="specialization_list" class="js-example-basic-single" multiple>
                                        @foreach($param['speciality_list'] as $row)
                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="container" style="padding-top: 20px;">
                                <span>Choose Formation: </span>
                                <div class="form-group">
                                    <select id="formation_list" name="formation_list" class="js-example-basic-single" multiple>
                                        @foreach($param['formation_list'] as $row)
                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" id="save_advance_doctor_info">Save Specialization</button>
                        </div>
                        <!-- </form> -->
                    </div>
				</div>
            </div>
            <!-- ================  Doctor Advance Modal END ============== -->
        </div>        
    </section>
    <!-- ===============  MODAL VIEW END =============== -->
@endsection

@section('script')

    <!-- Apex chart -->
    <script src="{{ url('public/vendors/charts/apex/apexcharts.min.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ url('public/vendors/charts/chartjs/chart.min.js') }}"></script>

    <!-- Circle progress -->
    <script src="{{ url('public/vendors/circle-progress/circle-progress.min.js') }}"></script>

    <!-- Datepicker -->
    <script src="{{ url('public/vendors/datepicker/daterangepicker.js') }}"></script>

    <!-- Peity -->
    <script src="{{ url('public/vendors/charts/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ url('public/assets/js/examples/charts/peity.js') }}"></script>

    <!-- Dashboard scripts -->
    <script src="{{ url('public/assets/js/examples/dashboard.js') }}"></script>  

    <!-- Multi Select Scripts -->

    <script src="{{ url('public/vendors/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('public/assets/js/examples/select2.js') }}"></script>



    <div class="colors"> <!-- To use theme colors with Javascript -->
        <div class="bg-primary"></div>
        <div class="bg-primary-bright"></div>
        <div class="bg-secondary"></div>
        <div class="bg-secondary-bright"></div>
        <div class="bg-info"></div>
        <div class="bg-info-bright"></div>
        <div class="bg-success"></div>
        <div class="bg-success-bright"></div>
        <div class="bg-danger"></div>
        <div class="bg-danger-bright"></div>
        <div class="bg-warning"></div>
        <div class="bg-warning-bright"></div>
    </div>

    <script>

        var APP_URL = {!! json_encode(url('/')) !!};

        $(document).ready(function(){

		    $.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        //$('#imagePreview').css('background-image', 'url('+e.target.result +')');
                        $('#imagePreview').hide();
                        $('#imagePreview').fadeIn(650);

                        
                        $("#imagePreview").attr('src', e.target.result);
                        //$("#imagePreview").src(e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#imageUpload").change(function() {
                readURL(this);
            });

            $("#btn_add_doctor").click(function(){
                $("#doctor_action").val("add");
                $("#doctor_config_modal").modal();
            });

            $("#save_advance_doctor_info").click(function(){
               
                console.log($("#specialization_list").val());
                $.ajax({
                    type:'POST',
                    url: APP_URL + '/doctor/editAdvanceDoctor',
                    data:{
                        advance_doctor_id: $("#advance_doctor_id").val(),
                        specialization_list: ($("#specialization_list").val()).toString(),
                        formation_list: ($("#formation_list").val()).toString(),
                    },
                    async:false,
                    success:function(data){
                        window.location.href = "{{ url('/admin/user/doctor') }}";
                    }   
                });
            });
            
             $("#save_doctor_info").click(function(){

                if($("#doctor_action").val() == "add" && $("#imageUpload").val() == "")
                {
                    alert("Select Doctor Image.");
                    return false;
                }
                if($("#city").val() == 0)
                {
                    alert("Select city please.");
                    return false;
                }
                if($("#doctor_name").val() == "")
                {
                    alert("Input Name please.");
                    return false;
                }
                if($("#doctor_email").val() == "")
                {
                    alert("Input Email please.");
                    return false;
                }
                if($("#doctor_sepcialization").val() == "")
                {
                    alert("Input Sepcialization please.");
                    return false;
                }
                if($("#doctor_university").val() == "")
                {
                    alert("Input University please.");
                    return false;
                }
                if($("#doctor_number").val() == "")
                {
                    alert("Input Phonenumber please.");
                    return false;
                }
                if($("#doctor_address").val() == "")
                {
                    alert("Input Address please.");
                    return false;
                }
                return true;
             });
        });

        function advanceDoctorInfo(doctor_id)
        {
            $("#advance_doctor_id").val(doctor_id);

            $.ajax({
          
                type:'GET',
                url: APP_URL + '/doctor/getDoctor',
                data:{
                    doctor_id: doctor_id,                 
                },
                async:false,
                success:function(data){
                    var path;
                    $("#advance_doctor_name").html(data[0]['name']);
                    $("#advance_doctor_specialization").html(data[0]['specialization']);
                    path = APP_URL + '/public/'+ 'images/doctor_images' + '/' + data[0]['image'];
                    $("#imagePreview_advance").attr('src', path);
                }   
            });
            //$("#imagePreview").attr('src', e.target.result);

            // var array = ["1", "2"];
            // $("#specialization_list").val(array);

            $("#advance_doctor_config_modal").modal();
        }


        function editDoctorInfo(doctor_id)
        {
            $("#doctor_action").val("edit");
            $("#doctor_id").val(doctor_id);
            
            $.ajax({
          
                type:'GET',
                url: APP_URL + '/doctor/getDoctor',
                data:{
                    doctor_id: doctor_id,                 
                },
                async:false,
                success:function(data){
                    var path;
                    $("#doctor_name").val(data[0]['name']);
                    $("#doctor_email").val(data[0]['email']);
                    $("#doctor_sepcialization").val(data[0]['specialization']);
                    $("#doctor_university").val(data[0]['university']);
                    $("#doctor_number").val(data[0]['phone_number']);
                    $("#city").val(data[0]['city_id']);
                    $("#doctor_address").val(data[0]['address']);
                    //$("active").val("on");
                    

                    path = APP_URL + '/public/'+ 'images/doctor_images' + '/' + data[0]['image'];
                    $("#imagePreview").attr('src', path);
                    
                    console.log(data);

                }   
            });
            $("#doctor_config_modal").modal();
        }

        function removeDoctorInfo(doctor_id)
        {
            if (confirm("\nDo you want to remove this doctor?")) {
                $.ajax({
          
                    type:'POST',
                    url: APP_URL + '/doctor/removeDoctor',
                    data:{
                        doctor_id: doctor_id,
                    },
                    async:false,
                    success:function(data){
                        window.location.href = "{{ url('/admin/user/doctor') }}";
                    }   
                });
            }
        }
    </script>
@endsection
