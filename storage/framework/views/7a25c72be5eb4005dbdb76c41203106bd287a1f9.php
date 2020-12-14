
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->startSection('content'); ?>
<h1 class="text-center my-5">Edit Users</h1>

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-header">Edit a user</div>
      <div class="card-body">
     
      <?php if(!$users ==null): ?>
      <form action=" <?php echo e(route('user.save',['id'=> $users->user_id ])); ?>" method="POST">
          <?php echo csrf_field(); ?>    <?php echo e(csrf_field()); ?>    
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Name" name="first_name" value="<?php echo e($users->first_name); ?>"> 

          <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="<?php echo e($users->last_name); ?>">

          </div>
          <div class="form-group">
          <a href="<?php echo e(route('user.deletedetail',['id'=>$users->id])); ?>" class="btn btn-danger btn-sm float-right mr-2">Delete</a>
          </div>

          <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Update details</button>
          </div>
        </form>
        <?php else: ?>
         No user details
        <?php endif; ?>  

       
</div>
 
       
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bitpanda\bitpanda_1\resources\views/edit.blade.php ENDPATH**/ ?>