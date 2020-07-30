<h1>SERVICE LIST</h1>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr>
            <th>Doctor Id</th>
            <th>Service Id</th>
            <th>Price Face to Face</th>
            <th>Price Telemedicina</th>
            <th>Price Other</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($services as $item)
        <tr>
            <td>{{$item->doctor_id}}</td>
            <td>{{$item->services_id}}</td>
            <td>{{$item->price1}}</td>
            <td>{{$item->price2}}</td>
            <td>{{$item->price3}}</td>
            <td>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>