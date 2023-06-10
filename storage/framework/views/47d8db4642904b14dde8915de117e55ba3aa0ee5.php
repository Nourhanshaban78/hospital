
<!DOCTYPE html>
<html lang="en">
  <head>
<?php echo $__env->make('admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
  </head>
  <body>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
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
  
  
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th><?php echo e($data->name); ?></th>
      <td><?php echo e($data->email); ?></td>
      <td><?php echo e($data->phone); ?></td>
      <td><?php echo e($data->message); ?></td>
      <td><?php echo e($data->date); ?></td>
      <td><?php echo e($data->doctor); ?></td>
      <td><?php echo e($data->status); ?></td>
      <td><a class="btn btn-info" href="<?php echo e(url('approved',$data->id)); ?>" >Approved</a></td>
      <td><a class="btn btn-danger" href="<?php echo e(url('canceled',$data->id)); ?>" >Cancel</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </table>




     </div>
      </div>
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </body>
</html><?php /**PATH E:\totorial\hospital\resources\views/admin/appointment.blade.php ENDPATH**/ ?>