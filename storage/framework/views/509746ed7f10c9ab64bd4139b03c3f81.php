<?php $__env->startSection('content'); ?>
<div class="page-head"><div><p class="eyebrow">POS user records</p><h1>Users</h1></div><p class="count"><?php echo e($users->count()); ?> records // database online</p></div>
<div class="table-wrap"><table><thead><tr><th>#</th><th>Username</th><th>Full name</th></tr></thead><tbody>
<?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<tr><td class="id">#<?php echo e($user->id); ?></td><td><?php echo e($user->username); ?></td><td><?php echo e($user->full_name); ?></td></tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<tr><td colspan="3">No users found.</td></tr>
<?php endif; ?>
</tbody></table></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\IT0049 TFA6 From Arrays to Eloquent\resources\views/users/index.blade.php ENDPATH**/ ?>