<?php $__env->startSection('title', $recipe->name); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Detalji za recept <?php echo e($recipe->name); ?>

                <?php if(auth()->user()->id == $recipe->creator_id): ?>
                <br><a href="/recipes/edit/<?php echo e($recipe->id); ?>">
                <i class="fa fa-btn fa-pencil"></i>Uredi recept
                </a>
                <?php endif; ?>
                </div>
                <div class="panel-body">
                    <article>
                        <h2><?php echo e($recipe->name); ?></h2>
                        <h4>Sastojci: </h4>
                        <ul class="list-group">
                        <?php $__currentLoopData = $recipe->ingredients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingrediant): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <li class="list-group-item"><?php echo e($ingrediant->name); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </ul>
                        <h4>Opis: </h4>
                        <p><?php echo e($recipe->description); ?></p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>