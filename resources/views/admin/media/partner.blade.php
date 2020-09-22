@extends('layouts.app_admin')

@section('pageTitle', 'Logos')

@section('head')
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ url('public/vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb" class="d-flex align-items-start">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a>Media</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Partners</li>
            </ol>
        </nav>
        <div class="dropdown">
            <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                <i class="ti-settings mr-1"></i> Actions
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" id="btn_add_logo">Add Partner</a>
                <!-- <a href="#" class="dropdown-item">Change Status</a> -->
                <a href="#" class="dropdown-item">Delete</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Orders</h6>
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
                                <th>Logo Preview</th>
                                <th>Path</th>
                                <th>Status</th>
                                
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($param['partner_list'] as $row)
                                <tr>
                                    <td></td>
                                    <td>
                                        <a href="#">{{ $row->id }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('public'). '/'. 'images/partner_logos'. '/'. $row->title }}" class="d-flex align-items-center">
                                            <img width="120" src="{{ url('public'). '/'. 'images/partner_logos'. '/'. $row->title }}"
                                                class=" mr-3" alt="grape">
                                            <span>{{ 'Partner Logo'. $row->id }}</span>
                                        </a>
                                    </td>
                                    <td>{{ 'images/partner_logos'. '/'. $row->title }}</td>
                                    <td>
                                        @if($row->active == 1)
                                            <span class="badge bg-danger-bright text-danger">Active (Using)</span>
                                        @elseif($row->active == 0)
                                            <span class="badge bg-success-bright text-success">Passive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <!-- <a href="#" class="text-info" data-toggle="tooltip" title="View">
                                            <i class="ti-eye"></i>
                                        </a> -->
                                        <a href="#" class="text-secondary ml-2" onclick="editLogoInfo({{ $row->id}})" data-toggle="tooltip" title="Edit">
                                            <i class="ti-pencil"></i>
                                        </a>
                                        <a href="#" class="text-danger ml-2" onclick="removeLogoInfo({{ $row->id }})" data-toggle="tooltip" title="Delete">
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
            <!-- ================  Logo Edit Modal ============== -->
            <div class="modal fade" id="logo_config_modal"  tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="background-color: rgb(0,110,183);">
							<h3 style="color:white">Logo Configuration</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btn_logo_dismiss">
					          	<span aria-hidden="true">&times;</span>
					        </button>
                        </div>
                        <form method="POST" action="{{ url('/logo/addNewPartner') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                            
                            <input id="logo_action" name="logo_action" value="add" hidden/>
                            <input id="logo_id" name="logo_id" value="0" hidden/>

                            <div class="container">
                                <label>Partner Company Image</label>
                            </div>  
                            
                            
                            <div class="container" style="padding-top: 20px;">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <img id="imagePreview" width="100%" alt="  Select Logo">
                                    </div>
                                </div>
                            </div>		

                            <div class="container" style="padding-top: 20px;"> 
                            <div class="form-group">
                                    <div class="custom-control custom-switch custom-checkbox-danger">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch4_" name="active">
                                        <label class="custom-control-label" for="customSwitch4_">Show</label>
                                    </div>
                                </div>
                            </div>		
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="save_logo_info">Save Partner Image</button>
                        </div>
                        </form>
                    </div>
				</div>
            </div>
            <!-- ================  Logo Edit Modal END ============== -->
        </div>        
    </section>
    <!-- ===============  MODAL VIEW END =============== -->
@endsection

@section('script')
    <!-- Datatable -->
    <script src="{{ url('public/vendors/dataTable/datatables.min.js') }}"></script>
    <script src="{{ url('public/assets/js/examples/pages/orders.js') }}"></script>
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

            $("#btn_add_logo").click(function(){
                $("#logo_action").val("add");
                //alert($("#logo_action").html());
                $("#logo_config_modal").modal();
            });

             $("#save_logo_info").click(function(){

                if($("#logo_action").val() == "add" && $("#imageUpload").val() == "")
                {
                    alert("Select Logo Image.");
                    return false;
                }
                if($("#catalog").val() == 0)
                {
                    alert("Select catalog please.");
                    return false;
                }
                return true;
             });
        });

        function editLogoInfo(partner_id)
        {
            $("#logo_action").val("edit");
            $("#logo_id").val(partner_id);
            
            $.ajax({
          
                type:'GET',
                url: APP_URL + '/logo/getPartner',
                data:{
                    partner_id: partner_id,                 
                },
                async:false,
                success:function(data){
                    var path;
                    $("#catalog").val(data[0]['catalog']);
                    $("#catalog").prop('hidden', true);

                    path = APP_URL + '/public/'+ 'images/partner_logos' + '/' + data[0]['title'];
                    $("#imagePreview").attr('src', path);
                    
                    console.log(data);

                }   
            });
            $("#logo_config_modal").modal();
        }

        function removeLogoInfo(partner_id)
        {
            if (confirm("\nDo you want to remove this logo?")) {
                $.ajax({
          
                    type:'POST',
                    url: APP_URL + '/logo/removePartner',
                    data:{
                        partner_id: partner_id,                 
                    },
                    async:false,
                    success:function(data){
                        window.location.href = "{{ url('/admin/media/partner') }}";
                    }   
                });
            }
        }
    </script>
@endsection
