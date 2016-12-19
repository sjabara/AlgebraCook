<?php $__env->startSection('title', 'Recepti'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Recepti <br><a href="/recipes/add">
                    <i class="fa fa-btn fa-plus"></i>Dodaj novi recept</a>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                  <li class="list-group-item"><a href="recipes/view/<?php echo e($recipe->id); ?>"><?php echo e($recipe->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </ul>
                </div>

                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>