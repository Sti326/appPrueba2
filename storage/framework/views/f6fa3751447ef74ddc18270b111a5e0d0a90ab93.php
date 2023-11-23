

<?php $__env->startSection('titulo', 'Eliminar Producto'); ?>

<?php $__env->startSection('contenido'); ?>
<div class="card">
    <h5 class="card-header"><i class="fas fa-hamburger"></i> Eliminar Producto</h5>
        <div class="card-body">
        <div class="alert alert-info" role="alert">
            Esta seguro de eliminar el registro!!

            <table class="table table-sm table-hover">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Descripcion</th>
                      
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo e($producto->codigo); ?></td>
                        <td><?php echo e($producto->nombre_producto); ?></td>
                        <td><?php echo e($producto->cantidad); ?></td>
                        <td><?php echo e($producto->precio); ?></td>
                        <td><?php echo e($producto->descripcion); ?></td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="<?php echo e(route('producto.destroy', $producto->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <a class="btn btn-info" type="reset" href="<?php echo e(url('producto')); ?>">
                <span class="glyphicon glyphicon-home"></span> Regresar </a>
                <button class="btn btn-danger">Eliminar</button>

            </form>
        </div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appPrueba2\resources\views/producto/modal.blade.php ENDPATH**/ ?>