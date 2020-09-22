@extends('layouts.app_admin')

@section('pageTitle', 'Cities')

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
                <li class="breadcrumb-item active" aria-current="page">Benefits</li>
            </ol>
        </nav>
        <div class="dropdown">
            <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                <i class="ti-settings mr-1"></i> Actions
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" id="btn_add_city">Add Benefit</a>
                <!-- <a href="#" class="dropdown-item">Change Status</a> -->
                <a href="#" class="dropdown-item">Delete</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Benefits</h6>
                    Benefit page is developing...
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
							<h3 style="color:white">City Configuration</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btn_logo_dismiss">
					          	<span aria-hidden="true">&times;</span>
					        </button>
                        </div>
                        <form method="POST" action="{{ url('/doctor/addNewCity') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                            
                            <input id="city_action" name="city_action" value="add" hidden/>
                            <input id="city_id" name="city_id" value="0" hidden/>

                                
                            
                            <div class="container" style="padding-top: 20px;">
                                <span>Input City Name</span>
                                <input type="text" id="city_name" name = "city_name" class="form-control" placeholder="Input City Name Here..."/>
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

       

            $("#btn_add_city").click(function(){
                $("#city_action").val("add");
                //alert($("#city_action").html());
                $("#logo_config_modal").modal();
            });

             $("#save_logo_info").click(function(){

                if($("#city_name").val() == "")
                {
                    alert("Input City Name please.");
                    return false;
                }
                return true;
             });
        });

        function editCityInfo(city_id)
        {
            $("#city_action").val("edit");
            $("#city_id").val(city_id);
            
            $.ajax({
          
                type:'GET',
                url: APP_URL + '/doctor/getCity',
                data:{
                    city_id: city_id,                 
                },
                async:false,
                success:function(data){
                    $("#city_name").val(data[0]['name']);
                    console.log(data);

                }   
            });
            $("#logo_config_modal").modal();
        }

        function removeCityInfo(city_id)
        {
            if (confirm("\nDo you want to remove this City?")) {
                $.ajax({
          
                    type:'POST',
                    url: APP_URL + '/doctor/removeCity',
                    data:{
                        city_id: city_id,                 
                    },
                    async:false,
                    success:function(data){
                        window.location.href = "{{ url('/admin/user/city') }}";
                    }   
                });
            }
        }
    </script>
@endsection
