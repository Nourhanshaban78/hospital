
<!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.head')   
  </head>
  <body>
    @include('admin.sidebar')
    @include('admin.navbar')  
    <div class="container-fluid page-body-wrapper"  >

      <div style="padding-top:100px;" align="center">

      <table class="table table-success table-striped">
  
    <tr >
      <th >Patient Name</th>
      <th >Email</th>
      <th >Phone</th>
      <th >Message</th>
      <th >Date</th>
      <th >Doctor</th>
      <th >Status</th>
      <th >Approved</th>
      <th >Cancel</th>
    </tr>
  
  
    @foreach($data as $data)
    <tr>
      <th>{{$data->name}}</th>
      <td>{{$data->email}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->message}}</td>
      <td>{{$data->date}}</td>
      <td>{{$data->doctor}}</td>
      <td>{{$data->status}}</td>
      <td><a class="btn btn-info" href="{{url('approved',$data->id)}}" >Approved</a></td>
      <td><a class="btn btn-danger" href="{{url('canceled',$data->id)}}" >Cancel</a></td>
    </tr>
    @endforeach
     </table>




     </div>
      </div>
    @include('admin.script')
    
  </body>
</html>