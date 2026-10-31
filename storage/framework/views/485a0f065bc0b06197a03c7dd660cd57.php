<?php $__env->startSection('content'); ?>
<div class="page-head"><div><p class="eyebrow">Customer records</p><h1>Customers</h1></div><p class="count"><?php echo e($customers->count()); ?> records // database online</p></div>
<div class="table-wrap"><table><thead><tr><th>#</th><th>Full name</th><th>Email</th><th>Phone</th></tr></thead><tbody>
<?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<tr><td class="id">#<?php echo e($customer->id); ?></td><td><?php echo e($customer->full_name); ?></td><td><?php echo e($customer->email); ?></td><td><?php echo e($customer->phone); ?></td></tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<tr><td colspan="4">No customers found.</td></tr>
<?php endif; ?>
</tbody></table></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\IT0049 TFA6 From Arrays to Eloquent\resources\views/customers/index.blade.php ENDPATH**/ ?>