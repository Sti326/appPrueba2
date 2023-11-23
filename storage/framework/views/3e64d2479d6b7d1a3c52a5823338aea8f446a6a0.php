
<?php $__env->startSection('contenido'); ?>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h4>REGISTRAR EMPLEADO</h4>
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
<?php echo Form::open(array('url'=>'empleado','method'=>'POST','autocomplete'=>'off')); ?>

<?php echo e(Form::token()); ?>

<div class="row">
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="documento">Numero Documento</label>
<input type="number" name="documento_identidad"
id="documento_identidad" class="form-control"
placeholder="Digite el número Documento">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="nombre">Nombres</label>
<input type="text" name="nombre" id="nombre" class="form-control"
placeholder="Nombre Completo">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="apellido">Apellidos</label>
<input type="text" name="apellido" id="apeliido" class="form-control"
placeholder="Apellidos Completos">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="edad">Edad</label>
<input type="text" name="edad" id="edad" class="form-control"
placeholder="Edad actual">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="direccion">Direccion</label>
<input type="text" name="direccion" id="direccion" class="form-control"
placeholder="Direccion Residencia">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="email">Email</label>
<input type="text" name="email" id="email" class="form-control"
placeholder="Correo Electrónico">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="email">Telefono</label>
<input type="text" name="telefono" id="telefono" class="form-control"
placeholder="Telefono">
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
<div class="form-group"> <br>
<button class="btn btn-primary" type="submit"><span
class="glyphicon glyphicon-ok"></span> <i class="fas fa-save"></i> </button>
<button class="btn btn-danger" type="reset"><span
class="glyphicon glyphicon-remove"></span> <i class="fas fa-trash-alt"></i></button>
<a class="btn btn-info" type="reset" href="<?php echo e(url('empleado')); ?>">
<span class="glyphicon glyphicon-home"></span> <i class="fas fa-undo-alt"></i> </a>
</div>
</div>
</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appPrueba2\resources\views/empleado/create.blade.php ENDPATH**/ ?>