
<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
<?php echo $__env->make('admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid page-body-wrapper">
     
    <div  class="container"  style="padding-top:100px;">

        <form action="<?php echo e(url('/edit_doctor',$data->id)); ?>" method="post" enctype="multipart/form-data">
        
            <?php echo csrf_field(); ?>
            
            <div  > <label> Doctor Name </label>
                <input type="text" name="name"style="color:black;" value="<?php echo e($data->name); ?>" require ></div>

                <div > <label> Phone Number </label>
                <input type="number" name="phone"style="color:black;"  value="<?php echo e($data->phone); ?>" require></div>

                <div > <label> Speciality </label>
                <select name="speciality" style="color:black; width:200px;" value="<?php echo e($data->speciality); ?>"> 
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
                <input type="text" name="room" style="color:black;" require  value="<?php echo e($data->room); ?>" ></div>
                
                <div > <label>Old Image </label>
                <img hight=150px; width=150px; src="doctorimage/<?php echo e($data->image); ?>" > </div>

                <div > <label>New Image </label>
                <input type="file" name="image" style="width:200px;" ></div>

                <div style="padding:15px;"> 
                <input type="submit" value="ADD DOCTOR" class="btn btn-info" ></div>
                

        </form>

        
    </div>









          
    </div>
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </body>
</html><?php /**PATH E:\totorial\hospital\resources\views/admin/update.blade.php ENDPATH**/ ?>