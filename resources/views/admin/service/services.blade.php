@extends('layouts.app_admin')

@section('pageTitle', 'Services')

@section('head')
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ url('/vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb" class="d-flex align-items-start">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a>Service</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
        </nav>
        <div class="dropdown">
            <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                <i class="ti-settings mr-1"></i> Actions
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" id="btn_add_service">Add Service</a>
                <!-- <a href="#" class="dropdown-item">Change Status</a> -->
                <a href="#" class="dropdown-item">Delete</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Services</h6>
                    <div class="table-responsive">
                        <table id="orders" class="table table-lg">
                            <thead>
                            <tr>
                                <th>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="orders-select-all">
                                        <label class="custom-control-label" for="orders-select-all"></label>
                                    </div>
                                </th>   
                                <th>ID</th>
                                <th>Service Title</th>
                                <th>Type</th>
                                <th>Status</th>
                                
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($param['service_list'] as $row)
                                <tr>
                                    <td></td>
                                    <td>
                                        <a href="#">{{ $row->id }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ url(''). '/'. 'images/services'. '/'. $row->title }}" class="d-flex align-items-center">
                                            <!-- <img width="120" src="{{ url(''). '/'. 'images/services'. '/'. $row->title }}"
                                                class=" mr-3" alt="grape"> -->
                                            <span>{{ $row->title }}</span>
                                        </a>
                                    </td>
                                    <td>{{ $row->type_name }}</td>
                                    <td>
                                        @if($row->active == 1)
                                            <span class="badge bg-danger-bright text-danger">Active (Using)</span>
                                        @elseif($row->active == 0)
                                            <span class="badge bg-success-bright text-success">Passive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" class="text-info" onclick="showServiceInfo({{ $row->id}})" data-toggle="tooltip" title="View">
                                            <i class="ti-eye"></i>
                                        </a>
                                        <a href="#" class="text-secondary ml-2" onclick="editServiceInfo({{ $row->id}})" data-toggle="tooltip" title="Edit">
                                            <i class="ti-pencil"></i>
                                        </a>
                                        <a href="#" class="text-danger ml-2" onclick="removeServiceInfo({{ $row->id }})" data-toggle="tooltip" title="Delete">
                                            <i class="ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===============  MODAL VIEW START =============== -->
    <section>
        <div class="container">
            <!-- ================  Service Edit Modal ============== -->
            <div class="modal fade" id="service_config_modal"  tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="background-color: rgb(0,110,183);">
							<h3 style="color:white">Service Configuration</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btn_service_dismiss">
					          	<span aria-hidden="true">&times;</span>
					        </button>
                        </div>
                        <form method="POST" action="{{ url('/service/addNewService') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                            
                            <input id="service_action" name="service_action" value="add" hidden/>
                            <input id="service_id" name="service_id" value="0" hidden/>
                            
                            <div class="container" style="padding-top: 20px;">
                                <label>Service Title:</label>
                                <input type="text" id="service_title" name = "service_title" class="form-control" placeholder="Input Service Title Here..."/>
                            </div>
                            <div class="container" style="padding-top: 20px;">
                                <label>Choose Service Type:</label>
                                <select class="custom-select custom-select-lg" name="services_type_id" id="services_type_id">
                                    <option value="0" selected>Select Type</option>
                                    @foreach($param['service_type_list'] as $row)
                                        <option value="{{ $row->id }}" >{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="container" style="padding-top: 20px;">
                                <label>Service Video Url:</label>
                                <input type="text" id="video_url" name = "video_url" class="form-control" placeholder="https://"/>
                            </div>
                            
                            <div class="container" style="padding-top: 20px;">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <img id="imagePreview" width="100%" alt="  Select Service Image">
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
                            <button type="submit" class="btn btn-primary" id="save_service_info">Save Service</button>
                        </div>
                        </form>
                    </div>
				</div>
            </div>
            <!-- ================  Service Edit Modal END ============== -->

            <!-- ================  Service View Modal ============== -->
            <div class="modal fade" id="service_view_modal"  tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="background-color: rgb(0,110,183);">
							<h3 style="color:white">Service</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btn_service_dismiss">
					          	<span aria-hidden="true">&times;</span>
					        </button>
                        </div>
                        <div class="modal-body">
                            <div class="container" style="padding-top: 20px;">
                                <h4>Service Title:</h4>
                                <label id="service_title_view"></label>
                            </div>
                            <!-- <div class="container" style="padding-top: 20px;">
                                <label>Choose Service Type:</label>
                                <select class="custom-select custom-select-lg" name="services_type_id" id="services_type_id">
                                    <option value="0" selected>Select Type</option>
                                    @foreach($param['service_type_list'] as $row)
                                        <option value="{{ $row->id }}" >{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div> -->
                            <div class="container" style="padding-top: 20px;">
                                <h4>Service Video Url:</h4>
                                <a id="vidoe_link_tag" href="http://freelancer.com"><label id="video_url_view"></label></a>
                            </div>
                            
                            <div class="container" style="padding-top: 20px;">
                                <img id="imagePreview_view" width="100%" alt="  Select Service Image" style="  border: 6px solid #51a7da; box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);">
                            </div>
                        </div>
                    </div>
				</div>
            </div>
            <!-- ================  Service View Modal END ============== -->
        </div>        
    </section>
    <!-- ===============  MODAL VIEW END =============== -->
@endsection

@section('script')
    <!-- Datatable -->
    <script src="{{ url('/vendors/dataTable/datatables.min.js') }}"></script>
    <script src="{{ url('/assets/js/examples/pages/orders.js') }}"></script>
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

            $("#btn_add_service").click(function(){
                $("#service_action").val("add");
                //alert($("#service_action").html());
                $("#service_config_modal").modal();
            });

             $("#save_service_info").click(function(){

                if($("#service_action").val() == "add" && $("#imageUpload").val() == "")
                {
                    alert("Select Severice Image.");
                    return false;
                }
                if($("#services_type_id").val() == 0)
                {
                    alert("Select Service Type Please.");
                    return false;
                }
                if($("#service_title").val() == "")
                {
                    alert("Select Severice Title.");
                    return false;
                }
                if($("#video_url").val() == "")
                {
                    alert("Select Severice Video.");
                    return false;
                }
                
                return true;
             });
        });

        function showServiceInfo(service_id)
        {
            $.ajax({
          
                type:'GET',
                url: APP_URL + '/service/getService',
                data:{
                    service_id: service_id,                 
                },
                async:false,
                success:function(data){
                    //console.log(data);
                    data = JSON.parse(data);
                    var path;

                    $("#service_title_view").html(data['title']);
                    $("#video_url_view").html(data['video']);
                    //$("#services_type_id").val(data['services_type_id']);
                    //$("#catalog").prop('hidden', true);

                    path = APP_URL + '/public/'+ 'images/services' + '/' + data['image'];
                    $("#imagePreview_view").attr('src', path);

                    $("#vidoe_link_tag").attr('href', data['video']);
                }   
            });
            $("#service_view_modal").modal();
        }

        function editServiceInfo(service_id)
        {
            $("#service_action").val("edit");
            $("#service_id").val(service_id);
            
            $.ajax({
          
                type:'GET',
                url: APP_URL + '/service/getService',
                data:{
                    service_id: service_id,                 
                },
                async:false,
                success:function(data){
                    //console.log(data);
                    data = JSON.parse(data);
                    var path;
                    $("#service_title").val(data['title']);
                    $("#video_url").val(data['video']);
                    $("#services_type_id").val(data['services_type_id']);
                    //$("#catalog").prop('hidden', true);

                    path = APP_URL + '/public/'+ 'images/services' + '/' + data['image'];
                    $("#imagePreview").attr('src', path);
                }   
            });
            $("#service_config_modal").modal();
        }

        function removeServiceInfo(service_id)
        {
            if (confirm("\nDo you want to remove this service?")) {
                $.ajax({
          
                    type:'POST',
                    url: APP_URL + '/service/removeService',
                    data:{
                        service_id: service_id,                 
                    },
                    async:false,
                    success:function(data){
                        window.location.href = "{{ url('/admin/service/services') }}";
                    }   
                });
            }
        }
    </script>
@endsection
