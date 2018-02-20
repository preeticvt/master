<!DOCTYPE html>
<html>
<head>
<tittle></tittle>
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>

</head>
<body>


    <table class="table" id="table" name="/show">
    <thead>
        <tr>
            <th class="text-center">id</th>
            <th class="text-center">name</th>
            <th class="text-center">email</th>
            <th class="text-center">age</th>
            <th class="text-center">date</th>
            <th class="text-center">mobile</th>
            <th class="text-center">file</th>
            <th class="text-center">gender</th>
        </tr>
    </thead>
    
<tbody>
@foreach($data as $item)
<tr class="item{{$item->id}}">
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->age}}</td>
    <td>{{$item->date}}</td>
    <td>{{$item->mobile}}</td>
    <td>{{$item->file}}</td>
    <td>{{$item->gender}}</td>
    
</tr>
@endforeach
</tbody>
</table>
</body>
</html>