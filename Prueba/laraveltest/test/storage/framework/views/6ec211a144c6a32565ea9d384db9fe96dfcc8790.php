<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear un nuevo libro</div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="author">Autor</label>
                            <input type="text" class="form-control" name="author"/>
                            <label for="title">Título</label>
                            <input type="text" class="form-control" name="title"/>
                            <label for="summary">Resumen</label>
                            <textarea class="form-control" name="summary"></textarea>
                        </div>
                        <input type="submit" class="btn btn-block btndark" value="Añadir un nuevo libro">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/matias/Documentos/php/Prueba/laraveltest/test/resources/views/libros.blade.php ENDPATH**/ ?>