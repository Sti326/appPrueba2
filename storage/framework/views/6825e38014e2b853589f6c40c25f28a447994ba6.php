
<?php $__env->startSection('contenido'); ?>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h4>REGISTRAR NUEVO PRODUCTO</h4>
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
<?php echo Form::open(array('url'=>'producto','method'=>'POST','autocomplete'=>'off')); ?>

<?php echo e(Form::token()); ?>

<div class="row">
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="codigo">Codigo</label>
<input type="text" name="codigo"
id="codigo" class="form-control"
placeholder="Digite el codigo">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="nombre_producto">Nombre del producto</label>
<input type="text" name="nombre_producto" id="nombre_producto" class="form-control"
placeholder="Nombre del producto">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="cantidad">Cantidad</label>
<input type="text" name="cantidad" id="cantidad" class="form-control"
placeholder="cantidad en Stock">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="precio">Precio $</label>
<input type="text" name="precio" id="precio" class="form-control"
placeholder="Precio por unidad">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="descripcion">Descripcion</label>
<input type="text" name="descripcion" id="descripcion" class="form-control"
placeholder="Descripcion adicional">
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
<div class="form-group"> <br>
<button class="btn btn-primary" type="submit"><span
class="glyphicon glyphicon-ok"></span> Guardar</button>
<button class="btn btn-danger" type="reset"><span
class="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
<a class="btn btn-info" type="reset" href="<?php echo e(url('producto')); ?>">
<span class="glyphicon glyphicon-home"></span> Regresar </a>
</div>
</div>
</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appPrueba2\resources\views/producto/create.blade.php ENDPATH**/ ?>