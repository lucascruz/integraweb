<html>
    <head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body>
    <button type="button" id="truncate" class="btn btn-outline-primary">Truncate for Test!</button>
    
    </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    var APP_URL = {!! json_encode(url('/')) !!};

    $(document).ready(function(){

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $("#truncate").click(function(e){

            e.preventDefault();

            $.ajax({

                type:'POST',
                url: APP_URL + '/secret/truncate',
                data:{
                                     
                },
                async:false,
                success:function(data){
                    console.log(data);
                }   
            });

        });
        
    });
</script>