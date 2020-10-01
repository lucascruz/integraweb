<div class="row align-items-end justify-content-center justify-content-md-left">
    <div class="col-5 p-0 p-md-2">
        <p class="mb-2 text-light">
            Busco un:
        </p>
        <div class="input-wrapper">
            <input id="specialization" type="text" placeholder="EJE. DERMATOLOGO" name="" autocomplete="off"> 
            <div id="suggesstion-specialization"></div>
        </div>
    
    </div>
    <div class="col-5 p-0 p-md-2">
        <p class="mb-2 text-light">
            En:
        </p>
        <div class="input-wrapper">
            <input id="city" type="text" placeholder="EJE. BUCARAMANGA" name="" autocomplete="off">
            <div id="suggesstion-city"></div>
        </div>
    </div>
    <div class="col-md-2 col-12 p-0 p-md-2">
        <button id="doctor-list-search" class="btn-search">
            <a style="font-size: 18px;">
                VAMOS
            </a>
        </button>
    </div>
    <script>
        window.addEventListener('load', function() {
            $.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
		    });
            var APP_URL = {!! json_encode(url('/')) !!};
            const params = new URLSearchParams(window.location.search);
            if(params.has('specialization')) document.getElementById("specialization").value = params.get('specialization')
            if(params.has('city')) document.getElementById("city").value = params.get('city')
            function goToDoctorList() {
                const city = $('#city').val();
                const specialization = $('#specialization').val();
                window.location.href = APP_URL + '/doctor_list?city='+city+'&specialization='+specialization;
            }
            function hideSuggestionBox(){
                $('#suggesstion-city').html('');
                $('#suggesstion-specialization').html('');
            }
            function showSuggestionBox(){}
            function generatedAutocompleteResultsHTML(results){
                let html = `
                    <ul>
                        ${results.map(({name}) => `<li name="${name}">${name}</li>`).join('')}    
                    </ul>
                `
                return html;
            }
            function sendCityAutoComplete(){
                $.ajax({
                type: "GET",
                url: APP_URL + '/autocomplete/city',
                data: {
                    keyword: $(this).val()
                },
                beforeSend: function(){
                    $("#specialization").css("background","#FFF no-repeat 165px");
                },
                success: function(data){
                    $("#suggesstion-city").html(generatedAutocompleteResultsHTML(data));
                    $('#suggesstion-city ul').click(function(e) {
                        const listElement = e.target;
                        const cityName = $(listElement).attr('name');
                        $('#city').val(cityName);
                        $('#suggesstion-city').html('');
                    })
                }
                });
            }
            function sendSpecializationAutoComplete(){
                $.ajax({
                type: "GET",
                url: APP_URL + '/autocomplete/especialization',
                data: {
                    keyword: $(this).val()
                },
                beforeSend: function(){
                    $("#specialization").css("background","#FFF no-repeat 165px");
                },
                success: function(data){
                    $("#suggesstion-specialization").html(generatedAutocompleteResultsHTML(data));
                    $('#suggesstion-specialization ul').click(function(e) {
                        const listElement = e.target;
                        const cityName = $(listElement).attr('name');
                        $('#specialization').val(cityName);
                        $('#suggesstion-specialization').html('');
                    })
                }
                });
            }
            $("#city").keyup(sendCityAutoComplete);
            $("#specialization").keyup(sendSpecializationAutoComplete);
            function selectSpecialization(val) {
                $("#specialization").val(val);
                $("#suggesstion-specialization").hide();
            }
            $('#doctor-list-search').click(goToDoctorList);
            $('body').click(hideSuggestionBox)
            
        })
    
    </script>
    <style>
        
        .input-wrapper {
            position: relative;
        }
        #suggesstion-city,
        #suggesstion-specialization {
            position: absolute;
            left: 0;
            top: 45px;
            background-color: white;
            width: 100%;
            border-bottom-left-radius: 10px;
            border-top-right-radius: 10px;
            z-index: 9;
        }
        #suggesstion-city ul,
        #suggesstion-specialization ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        #suggesstion-city li,
        #suggesstion-specialization li {
            padding: 5px;
            cursor: pointer;
            color: black;
            margin: 0;
            font-family: 'Fjalla One', sans-serif;
            font-size: 16px;
            font-weight: 400;
        }
        #suggesstion-city li:hover,
        #suggesstion-specialization li:hover {
            background-color: rgb(212, 211, 211);
            border: 1px solid gray;
            border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
        }
        #suggesstion-city li:last-child,
        #suggesstion-specialization li:last-child {
            border-bottom: 0;
        }
    </style>
</div>
