

<?php $__env->startSection('titulo', 'Eliminar Empleado'); ?>

<?php $__env->startSection('contenido'); ?>
<div class="card">
    <h5 class="card-header"><i class="far fa-clipboard"></i> Eliminar Empleado</h5>
        <div class="card-body">
        <div class="alert alert-info" role="alert">
            Esta seguro de eliminar el registro!!

            <table class="table table-sm table-hover">
                <thead>
                <th>Id</th>
                <th>Documento Identidad</th>
                <th>Nombres Completos</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Direccion</th>
                <th>Correo Electrónico</th>
                <th>Telefono</th>
                      
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo e($empleado->id); ?></td>
                        <td><?php echo e($empleado->documento_identidad); ?></td>
                        <td><?php echo e($empleado->nombre); ?></td>
                        <td><?php echo e($empleado->apellido); ?></td>
                        <td><?php echo e($empleado->edad); ?></td>
                        <td><?php echo e($empleado->direccion); ?></td>
                        <td><?php echo e($empleado->email); ?></td>
                        <td><?php echo e($empleado->telefono); ?></td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="<?php echo e(route('empleado.destroy', $empleado->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <a class="btn btn-info" type="reset" href="<?php echo e(url('empleado')); ?>">
                <span class="glyphicon glyphicon-home"></span> Regresar </a>
                <button class="btn btn-danger">Eliminar</button>

            </form>
        </div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appPrueba2\resources\views/empleado/modal.blade.php ENDPATH**/ ?>