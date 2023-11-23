

<?php $__env->startSection('titulo', 'Eliminar Cliente'); ?>

<?php $__env->startSection('contenido'); ?>
<div class="card">
    <h5 class="card-header"><i class="fas fa-user-plus"></i> Eliminar Cliente</h5>
        <div class="card-body">
        <div class="alert alert-info" role="alert">
            Esta seguro de eliminar Cliente!!

            <table class="table table-sm table-hover">
                <thead>
                <th>Id</th>
                <th>Documento Identidad</th>
                <th>Nombres Completos</th>
                <th>Apellidos</th>
                <th>Correo Electrónico</th>
                <th>Telefono</th>
                      
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo e($cli->id); ?></td>
                        <td><?php echo e($cli->documento_identidad); ?></td>
                        <td><?php echo e($cli->nombre); ?></td>
                        <td><?php echo e($cli->apellido); ?></td>
                        <td><?php echo e($cli->email); ?></td>
                        <td><?php echo e($cli->telefono); ?></td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="<?php echo e(route('cliente.destroy', $cli->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <a class="btn btn-info" type="reset" href="<?php echo e(url('cliente')); ?>">
                <span class="glyphicon glyphicon-home"></span> Regresar </a>
                <button class="btn btn-danger">Eliminar</button>

            </form>
        </div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appPrueba2\resources\views/cliente/modal.blade.php ENDPATH**/ ?>