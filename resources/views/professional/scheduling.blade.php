@section('content')

@extends('layouts.app_professional')

@section('pageTitle', 'Calendario')

@section('head')
<!-- Datatable -->
<link rel="stylesheet" href="{{ url('public/vendors/dataTable/datatables.min.css') }}" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<link href="{{ url('public/lib/main.css') }}" rel='stylesheet' type="text/css">
<script src="{{ url('public/lib/main.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today Miboton',
                center: 'title',
                right: 'dayGridMonth,dayGridWeek,dayGridDay'
            },
            customButtons: {
                Miboton: {
                    text: "Botón",
                    click: function() {
                        alert("¡Hola Mundo!");
                        $('#exampleModal').modal('toggle');
                    }
                }
            },

            dateClick:function(info){
                $('#exampleModal').modal('toggle');
                console.log(info);
                calendar.addEvent({ title:"Evento x", date:info.dateStr });
                
            
            },

            eventClick:function(info){
                console.log(info);
                console.log(info.event.title);
                console.log(info.event.start);

                console.log(info.event.end);
                console.log(info.event.textColor);
                console.log(info.event.backgroundColor);

                console.log(info.event.extendedProps.descripcion);
            },

            events:[
                {
                    title:"Mi evento 1",
                    start:"2020-08-08 12:30:00",
                    descripcion:"Descripcion evento 1"
                },{
                    title:"Mi evento 2",
                    start:"2020-08-09 12:30:00",
                    end:"2020-08-12 12:30:00",
                    color:"#FFCCAA",
                    textColor:"#000000",
                    descripcion:"Descripcion evento 2"
                }

            ],


            initialView: 'dayGridMonth'

        });

        calendar.setOption('locale', 'Es');
        calendar.render();
    });
</script>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
    }

    #calendar {
        max-width: 1100px;
        margin: 0px auto;
    }
</style>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Calendario</h6>
        </div>
        <div class="card-body">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id='calendar'></div>

        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection