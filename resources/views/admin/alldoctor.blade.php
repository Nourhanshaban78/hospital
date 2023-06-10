
<!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.head')
    
  </head>
  <body>
    @include('admin.sidebar')
    @include('admin.navbar')
    
    <div class="container-fluid page-body-wrapper">

    <div style="padding-top:100px;" align="center">

    <table class="table table-success table-striped">

    <tr >
     <th >Doctor Name</th>
     <th >Speciality</th>
     <th >Phone</th>
     <th >Room Number</th>
     <th >Image</th>
     <th> Update</th>
     <th> Delete </th>
   </tr>

   @foreach($data as $data)
   <tr>
      <td>{{$data->name}}</td>
      <td>{{$data->speciality}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->room}}</td>
      <td><img src="doctorimage/{{$data->image}}" alt=""></td>
      <td><a class="btn btn-info" href="{{url('update',$data->id)}}">Update</a></td>
      <td><a class="btn btn-danger" href="{{url('deleted',$data->id)}}"
      onclick="return confirm('Are you sure to delete the message')">Delete</a></td>
     </tr>

@endforeach










</di>


</div>
    
    @include('admin.script')
    
  </body>
</html>