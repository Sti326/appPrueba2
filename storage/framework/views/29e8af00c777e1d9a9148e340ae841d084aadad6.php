
<?php $__env->startSection('contenido'); ?>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h4>ACTUALIZAR PRODUCTO</h4>
<?php if(count($errors)>0): ?>
<div class="alert alert-danger">
<ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($error); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
<?php endif; ?>
</div>
</div>
<?php echo e(Form::open(array('action'=>array('App\Http\Controllers\productoController@update', $producto->id),'method'=>'patch'))); ?>

<div class="row g-3">
<div class="col-md-4">
<label for="codigo" class="form-label">Codigo</label>
<input type="number" name="codigo" id="codigo"
class="form-control"
value="<?php echo e($producto->codigo); ?>">
</div>
<div class="col-md-4">
<label for="nombre_producto" class="form-label">Nombre del producto</label>
<input type="text" name="nombre_producto" id="nombre_producto" class="form-control"
value="<?php echo e($producto->nombre_producto); ?>">
</div>
<div class="col-4">
<label for="cantidad" class="form-label">Cantidad</label>
<input type="text" name="cantidad" id="cantidad" class="form-control"
value="<?php echo e($producto->cantidad); ?>">
</div>
<div class="col-6">
<label for="precio" class="form-label">Precio $</label>
<input type="text" name="precio" id="precio" class="form-control"
value="<?php echo e($producto->precio); ?>">
</div>
<div class="col-6">
<label for="descripcion" class="form-label">Descripcion</label>
<input type="text" name="descripcion" id="descripcion" class="form-control"
value="<?php echo e($producto->descripcion); ?>">
</div>
<div class="col-12">
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphiconrefresh"></span> Actualizar
</button>
<a class="btn btn-info" type="reset" href="<?php echo e(url('producto')); ?>">
<span class="glyphicon glyphicon-home"></span> Regresar </a>
</div>
</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appPrueba2\resources\views/producto/edit.blade.php ENDPATH**/ ?>