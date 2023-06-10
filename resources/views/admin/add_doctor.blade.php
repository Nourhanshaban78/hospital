
<!DOCTYPE html>
<html lang="en">
  <head>


  <style type="text/css">
    label{
        dispaly:inline-block;
        width:200px;
    }

  </style>
@include('admin.head')

    
  </head>
  <body>
    @include('admin.sidebar')
    
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper">

   
    <div  class="container"  style="padding-top:100px;">
    @if(session()->has('message'))
        <div class="alert alert-sucsess">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{session()->get('message')}}

        </div>
        @endif
        <form action="{{url('/upload_doctor')}}" method="post" enctype="multipart/form-data">
        
            @csrf
            <div  > <label> Doctor Name </label>
                <input type="text" name="name"style="color:black;" require placeholder="Doctor name"></div>

                <div > <label> Phone Number </label>
                <input type="number" name="phone"style="color:black;" require placeholder="Phone number"></div>

                <div > <label> Speciality </label>
                <select name="speciality" style="color:black; width:200px;"> 
                    <option>--Select--</option>
                    <option value="Skin">Skins </option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="Orthopaedics">Orthopaedics</option>
                    <option value="Dental">Dental</option>
                    <option value="Interior">Interior</option>
                    <option value="Neurology">Neurology</option>
                    <option value="Surgry">Surgry</option>

                </select></div>

                <div > <label>Room Number </label>
                <input type="text" name="room" style="color:black;" require placeholder="room number"></div>
                <div > <label>Doctor Image </label>
                <input type="file" name="image" style="width:200px;" ></div>

                <div style="padding:15px;"> 
                <input type="submit" value="ADD DOCTOR" class="btn btn-info" ></div>
                

        </form>

        
    </div>
          
</div>
    @include('admin.script')
    
  </body>
</html>