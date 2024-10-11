<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <h2>Insert</h2>

    <div class="container mt">
        <h2>Insert Your Data</h2>
        <form action="<?php echo e(route('file.insert')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mt-3 mb-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name....">
            </div>
            <div class="mt-3 mb-3">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email....">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

        <?php if(session()->has('message')): ?>
            <div class="alert"><?php echo e(session()->get('message')); ?> </div>
        <?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\wamp64\www\prac_crud1\resources\views/file/insert.blade.php ENDPATH**/ ?>