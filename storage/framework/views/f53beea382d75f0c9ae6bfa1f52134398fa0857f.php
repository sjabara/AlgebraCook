<?php $__env->startSection('title', 'Dodaj novi recept'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add new Recipe</div>

                <div class="panel-body">
                    <?php echo Form::open(array('url' => 'recipes/add', 'method' => 'post')); ?>

                    	<div class="form-group">
	                        <?php echo e(Form::label('name', 'Ime: ')); ?>

                        	<?php echo e(Form::text('name', '', ['placeholder' => 'Unesite ime...', 'class' => 'form-control'])); ?>

                        </div>
                        <div class="form-group">
                        	<?php echo e(Form::label('name', 'Opis: ')); ?>

                        	<?php echo e(Form::textarea('description', '', ['placeholder' => 'Unesite opis...', 'class' => 'form-control'])); ?>

                        </div>
                        <h3>Popis sastojaka:</h3>
                        <div id="ing-coll-fields">
	                        <div class="form-group">
	                            <label for="ingredient">Sastojak: <input name="ingredient[]" type="text"/></label>
	                        </div>
                        </div>
                        <a href="#" id="addLnk"><i class="fa fa-btn fa-plus"></i>Dodaj novi sastojak</a><br>
                        <?php echo Form::submit('Stvori novi recept', ['class' => 'btn btn-default']); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    $(function() {
        var scntDiv = $('#ing-coll-fields');
        var i = $('#ing-coll-fields div').size() + 1;
        
        $('#addLnk').click(function() {
                $('<div class="form-group">'+
                	'<label for="ingredient">Sastojak: <input name="ingredient[]" type="text"/></label>'+
                    '<a href="#" class="remScnt">'+
                        '<i class="fa fa-btn fa-close"></i>Makni sastojak'+
                    '</a></div>').appendTo(scntDiv);
                i++;
                return false;
        });
        
        scntDiv.on('click', '.remScnt', function() { 
                if( i > 2 ) {
                        $(this).parents('div .form-group').remove();
                        i--;
                }
                return false;
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>