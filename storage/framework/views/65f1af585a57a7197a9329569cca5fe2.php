

<?php $__env->startSection('title', 'Analytics'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Analytics</h1>
    <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Download Analytics
    </button>
</div>

<!-- Analytics Stats -->
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Visitors</div>
                <div class="h3 mb-0 font-weight-bold text-gray-800">8,450</div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Conversion Rate</div>
                <div class="h3 mb-0 font-weight-bold text-gray-800">3.85%</div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Page Views</div>
                <div class="h3 mb-0 font-weight-bold text-gray-800">24,580</div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Bounce Rate</div>
                <div class="h3 mb-0 font-weight-bold text-gray-800">38.2%</div>
            </div>
        </div>
    </div>
</div>

<!-- Analytics Chart -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Analytics Chart</h6>
    </div>
    <div class="card-body">
        <p>Analytics data and charts will be displayed here.</p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-item\resources\views/admin/reports/analytics.blade.php ENDPATH**/ ?>