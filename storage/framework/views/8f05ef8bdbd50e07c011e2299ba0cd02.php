<?php $__env->startSection('content'); ?>
<section class="hero">
<p class="eyebrow">IT0049 Technical Formative Assessment 6</p>
<h1>Laravel POS<br><span style="color:var(--cyan)">Data Layer</span></h1>
<p>Database-backed customer and user records protected by migrations, seed data, and Eloquent models. Static arrays have been replaced with a real Laravel data layer.</p>
<span class="status"><i></i> SYSTEM ONLINE &middot; ELOQUENT CONNECTED</span>
</section>
<div class="cards">
    <div class="card"><h2>01 // Customers</h2><p>Customer records retrieved from the <code>customers</code> table through Eloquent.</p><a class="button" href="<?php echo e(route('customers.index')); ?>">Access records →</a></div>
    <div class="card"><h2>02 // Users</h2><p>POS user records retrieved from the <code>users</code> table through Eloquent.</p><a class="button" href="<?php echo e(route('users.index')); ?>">Access records →</a></div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\IT0049 TFA6 From Arrays to Eloquent\resources\views/home.blade.php ENDPATH**/ ?>