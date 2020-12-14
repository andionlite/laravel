

<?php $__env->startSection('title'); ?>
 
<?php $__env->stopSection(); ?>

 
  
<?php $__env->startSection('content'); ?>
  <h1 class="text-center my-5">Users </h1>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">
         All  Users
        </div>
 
        <div class="card-body">
          <ul class="list-group">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="list-group-item">
             
                <?php echo e($user->email); ?>               
              
               
               
                <a href="<?php echo e(route('user.delete',['id'=>$user->id])); ?>" class="btn btn-danger btn-sm float-right mr-2">Delete</a>
                <a href="<?php echo e(route('user.modify',['id'=>$user->id])); ?>" class="btn btn-primary btn-sm float-right mr-2">View</a>
               

                
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
          </ul>
 
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bitpanda\bitpanda_1\resources\views/allUsers.blade.php ENDPATH**/ ?>