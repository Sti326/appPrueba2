

<?php $__env->startSection('titulo'); ?>
Proyecto Integrador | Empleados
<?php $__env->stopSection(); ?>

<?php $__env->startSection('titulo2'); ?>
TABLA DE EMPLEADOS
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>

<div class="row">
<div class="col-md-9">
<a href="<?php echo e(url('empleado/create')); ?>" class="pull-right">
<button class="btn btn-success"><i class="far fa-clipboard"></i> Crear Empleado</button> </a>
</div></div>
<div class="row">
<div class="table-responsive">
<table class="table table-striped table-hover">
<thead>
<th>Id</th>
<th>Documento Identidad</th>
<th>Nombres Completos</th>
<th>Apellidos</th>
<th>Edad</th>
<th>Direccion</th>
<th>Correo Electrónico</th>
<th>Telefono</th>
<th>Actualizar</th>
<th>Eliminar</th>
</thead>
<tbody>
<?php $__currentLoopData = $empleado; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($emp->id); ?></td>
<td><?php echo e($emp->documento_identidad); ?></td>
<td><?php echo e($emp->nombre); ?></td>
<td><?php echo e($emp->apellido); ?></td>
<td><?php echo e($emp->edad); ?></td>
<td><?php echo e($emp->direccion); ?></td>
<td><?php echo e($emp->email); ?></td>
<td><?php echo e($emp->telefono); ?></td>
<td>

<a href="<?php echo e(URL::action('App\Http\Controllers\empleadoController@edit',$emp->id)); ?>">

<button class="btn btn-primary"><i class="fas fa-user-edit"></i></button></a>
</td>
<td>
<form action="<?php echo e(route('empleado.show', $emp->id)); ?>" method="DELETE">
                                    <button class="btn btn-danger"><i class="fas fa-user-times"></i></button>
                    </form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody> </table>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appPrueba2\resources\views/empleado/index.blade.php ENDPATH**/ ?>