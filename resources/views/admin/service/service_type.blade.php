@extends('layouts.app_admin')

@section('pageTitle', 'Service Types')

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
                <li class="breadcrumb-item active" aria-current="page">Types</li>
            </ol>
        </nav>
        <div class="dropdown">
            <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                <i class="ti-settings mr-1"></i> Actions
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" id="btn_add_servicetype">Add Service Type</a>
                <!-- <a href="#" class="dropdown-item">Change Status</a> -->
                <a href="#" class="dropdown-item">Delete</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Service Types</h6>
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
                                <th>Service Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($param['service_type_list'] as $row)
                                <tr>
                                    <td></td>
                                    <td>
                                        <a href="#">{{ $row->id }}</a>
                                    </td>
                                    <td>{{ $row->name }}</td>
                                    <td>
                                        @if($row->active == 1)
                                            <span class="badge bg-danger-bright text-danger">Active (Using)</span>
                                        @elseif($row->active == 0)
                                            <span class="badge bg-success-bright text-success">Passive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" class="text-secondary ml-2" onclick="editServiceTypeInfo({{ $row->id}})" data-toggle="tooltip" title="Edit">
                                            <i class="ti-pencil"></i>
                                        </a>
                                        <a href="#" class="text-danger ml-2" onclick="removeServiceTypeInfo({{ $row->id }})" data-toggle="tooltip" title="Delete">
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
            <div class="modal fade" id="servicetype_config_modal"  tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="background-color: rgb(0,110,183);">
							<h3 style="color:white">Service Type Configuration</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btn_logo_dismiss">
					          	<span aria-hidden="true">&times;</span>
					        </button>
                        </div>
                        <form method="POST" action="{{ url('/service/addNewServiceType') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                            
                            <input id="servicetype_action" name="servicetype_action" value="add" hidden/>
                            <input id="servicetype_id" name="servicetype_id" value="0" hidden/>

                                
                            
                            <div class="container" style="padding-top: 20px;">
                                <span>Input Service Type Name</span>
                                <input type="text" id="servicetype_name" name = "servicetype_name" class="form-control" placeholder="Input Service Type Name Here..."/>
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
                            <button type="submit" class="btn btn-primary" id="save_logo_info">Save City</button>
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

       

            $("#btn_add_servicetype").click(function(){
                $("#servicetype_action").val("add");
                //alert($("#servicetype_action").html());
                $("#servicetype_config_modal").modal();
            });

             $("#save_logo_info").click(function(){

                if($("#servicetype_name").val() == "")
                {
                    alert("Input Service Type Name please.");
                    return false;
                }
                return true;
             });
        });

        function editServiceTypeInfo(servicetype_id)
        {
            $("#servicetype_action").val("edit");
            $("#servicetype_id").val(servicetype_id);
            
            $.ajax({
          
                type:'GET',
                url: APP_URL + '/service/getServiceType',
                data:{
                    servicetype_id: servicetype_id,                 
                },
                async:false,
                success:function(data){
                    $("#servicetype_name").val(data[0]['name']);
                    console.log(data);

                }   
            });
            $("#servicetype_config_modal").modal();
        }

        function removeServiceTypeInfo(servicetype_id)
        {
            if (confirm("\nDo you want to remove this service type?")) {
                $.ajax({
          
                    type:'POST',
                    url: APP_URL + '/service/removeServiceType',
                    data:{
                        servicetype_id: servicetype_id,                 
                    },
                    async:false,
                    success:function(data){
                        window.location.href = "{{ route('service.type') }}";
                    }   
                });
            }
        }
    </script>
@endsection
