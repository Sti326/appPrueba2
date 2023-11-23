
<?php $__env->startSection('titulo'); ?>
Proyecto Integrador | Clientes
<?php $__env->stopSection(); ?>

<?php $__env->startSection('titulo2'); ?>
TABLA DE CLIENTES
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>

<div class="row">
<div class="col-md-9">
<a href="<?php echo e(url('cliente/create')); ?>" class="pull-right">
<button class="btn btn-success"><i class="fas fa-user-plus"></i> Crear Cliente</button> </a>
</div></div>
<div class="row">
<div class="table-responsive">
<table class="table table-striped table-hover">
<thead>
<th>Id</th>
<th>Documento Identidad</th>
<th>Nombres Completos</th>
<th>Apellidos</th>
<th>Correo Electrónico</th>
<th>Telefono</th>
<th>Actualizar  </th>
<th>Eliminar</th>
</thead>
<tbody>
<?php $__currentLoopData = $cliente; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cli): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($cli->id); ?></td>
<td><?php echo e($cli->documento_identidad); ?></td>
<td><?php echo e($cli->nombre); ?></td>
<td><?php echo e($cli->apellido); ?></td>
<td><?php echo e($cli->email); ?></td>
<td><?php echo e($cli->telefono); ?></td>
<td>


<a href="<?php echo e(URL::action('App\Http\Controllers\clienteController@edit',$cli->id)); ?>">

<button class="btn btn-primary"><i class="fas fa-user-edit"></i></button></a>
</td>
<td>

<a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-<?php echo e($cli->id); ?>"><button type="button" class="btn btn-danger"><i class="fas fa-user-times"></i></button>
</a>
</td>
<?php echo $__env->make('cliente.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</tr><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody> </table>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appPrueba2\resources\views/cliente/index.blade.php ENDPATH**/ ?>