

<?php $__env->startSection('title', 'Add Product'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add New Product</h1>
    <a href="<?php echo e(route('admin.products.index')); ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
        <i class="fas fa-arrow-left fa-sm"></i> Back to Products
    </a>
</div>

<!-- Form Card -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Product Information</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="#">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="">Select Category</option>
                    <option value="electronics">Electronics</option>
                    <option value="accessories">Accessories</option>
                    <option value="clothing">Clothing</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01" placeholder="0.00" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="stock">Stock Quantity</label>
                    <input type="number" class="form-control" id="stock" name="stock" placeholder="0" required>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter product description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Product</button>
            <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-item\resources\views/admin/products/create.blade.php ENDPATH**/ ?>