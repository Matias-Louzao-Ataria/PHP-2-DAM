<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md- 8">
            <div class="card">
                <table class='table'>

                    <?php if($libros->count()): ?>
                    <thead>
                        <tr>
                            <th>Autor</th>
                            <th>Título</th>
                            <th>Resumen</th>
                        </tr>
                    </thead>
                    <?php endif; ?>
                    <tbody>
                        <?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($libro->author); ?></td>
                            <td><?php echo e($libro->title); ?></td>
                            <td><?php echo e($libro->summary); ?></td>
                            <td>
                            <form method="POST" action="<?php echo e(route('destroy',['id'=>$libro->id])); ?>">
                            <?php echo method_field("DELETE"); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger">Eliminar libro</button>
                            </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/matias/Documentos/php/Prueba/laraveltest/test/resources/views/show.blade.php ENDPATH**/ ?>