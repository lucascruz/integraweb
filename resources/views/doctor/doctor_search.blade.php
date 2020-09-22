<div class="row align-items-end justify-content-center justify-content-md-left">
    <div class="col-5 p-0 p-md-2">
        <p class="mb-2 text-light">
            Busco un:
        </p>
        <input id="specialization" type="text" placeholder="EJE. DERMATOLOGO" name=""> 
        
    
    </div>
    <div class="col-5 p-0 p-md-2">
        <p class="mb-2 text-light">
            En:
        </p>
        <input id="city" type="text" placeholder="EJE. BUCARAMANGA" name="">
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
            var APP_URL = {!! json_encode(url('/')) !!};
            const params = new URLSearchParams(window.location.search);
            console.log(params.get('city'))
            if(params.has('specialization')) document.getElementById("specialization").value = params.get('specialization')
            if(params.has('city')) document.getElementById("city").value = params.get('city')
            function goToDoctorList() {
                const city = $('#city').val();
                const specialization = $('#specialization').val();
                window.location.href = APP_URL + '/doctor_list?city='+city+'&specialization='+specialization;
            }
            $('#doctor-list-search').click(goToDoctorList);
            
        })
    
    </script>
</div>
