
<?php $__env->startSection('titulo'); ?>
Proyecto Integrador | Productos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('titulo2'); ?>
TABLA DE PRODUCTOS MENÚ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>

<div class="row">
<div class="col-md-9">
<a href="<?php echo e(url('producto/create')); ?>" class="pull-right">
<button class="btn btn-success"><i class="fas fa-hamburger"></i> REGISTRAR</button> </a>
</div></div>
<div class="row">
<div class="table-responsive">
<table class="table table-striped table-hover">
<thead>
<th>Id</th>
<th>Codigo</th>
<th>Nombres del producto</th>
<th>Cantidad</th>
<th>Precio</th>
<th>Descripcion</th>
<th>Actualizar</th>
<th>Eliminar</th>
</thead>
<tbody>
<?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($pro->id); ?></td>
<td><?php echo e($pro->codigo); ?></td>
<td><?php echo e($pro->nombre_producto); ?></td>
<td><?php echo e($pro->cantidad); ?></td>
<td><?php echo e($pro->precio); ?></td>
<td><?php echo e($pro->descripcion); ?></td>
<td>

<a href="<?php echo e(URL::action('App\Http\Controllers\productoController@edit',$pro->id)); ?>">

<button class="btn btn-primary"><i class="fas fa-hamburger"></i></button></a>
</td>
<td>
<form action="<?php echo e(route('producto.show', $pro->id)); ?>" method="DELETE">
                                    <button class="btn btn-danger"> </i></button>
                    </form>
</td>
</td>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appPrueba2\resources\views/producto/index.blade.php ENDPATH**/ ?>