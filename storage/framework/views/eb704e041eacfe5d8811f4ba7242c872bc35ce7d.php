
<!DOCTYPE html>
<html lang="en">
  <head>
<?php echo $__env->make('admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </head>
  <body>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
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

   <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <tr>
      <td><?php echo e($data->name); ?></td>
      <td><?php echo e($data->speciality); ?></td>
      <td><?php echo e($data->phone); ?></td>
      <td><?php echo e($data->room); ?></td>
      <td><img src="doctorimage/<?php echo e($data->image); ?>" alt=""></td>
      <td><a class="btn btn-info" href="<?php echo e(url('update',$data->id)); ?>">Update</a></td>
      <td><a class="btn btn-danger" href="<?php echo e(url('deleted',$data->id)); ?>"
      onclick="return confirm('Are you sure to delete the message')">Delete</a></td>
     </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>










</di>


</div>
    
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </body>
</html><?php /**PATH E:\totorial\hospital\resources\views/admin/alldoctor.blade.php ENDPATH**/ ?>