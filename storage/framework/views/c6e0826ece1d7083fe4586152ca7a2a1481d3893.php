
<?php $__env->startSection('contenido'); ?>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h4>ACTUALIZAR EMPLEADO</h4>
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
<?php echo e(Form::open(array('action'=>array('App\Http\Controllers\empleadoController@update', $empleado->id),'method'=>'patch'))); ?>

<div class="row g-3">
<div class="col-md-4">
<label for="documento_identidad" class="form-label">Documento
Identidad</label>
<input type="number" name="documento_identidad" id="documento_identidad"
class="form-control"
value="<?php echo e($empleado->documento_identidad); ?>">
</div>
<div class="col-md-4">
<label for="nombre" class="form-label">Nombre</label>
<input type="text" name="nombre" id="nombre" class="form-control"
value="<?php echo e($empleado->nombre); ?>">
</div>
<div class="col-4">
<label for="Apellido" class="form-label">Apellido</label>
<input type="text" name="apellido" id="apellido" class="form-control"
value="<?php echo e($empleado->apellido); ?>">
</div>
<div class="col-4">
<label for="Edad" class="form-label">Edad</label>
<input type="text" name="edad" id="edad" class="form-control"
value="<?php echo e($empleado->edad); ?>">
</div>
<div class="col-4">
<label for="Direccion" class="form-label">Direccion</label>
<input type="text" name="direccion" id="direccion" class="form-control"
value="<?php echo e($empleado->direccion); ?>">
</div>
<div class="col-6">
<label for="email" class="form-label">Email</label>
<input type="text" name="email" id="email" class="form-control"
value="<?php echo e($empleado->email); ?>">
</div>
<div class="col-md-6">
<label for="telefono" class="form-label">Telefono</label>
<input type="text" name="telefono" id="telefono" class="form-control"
value="<?php echo e($empleado->telefono); ?>">
</div>
<div class="col-12">
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphiconrefresh"></span> Actualizar
</button>
<a class="btn btn-info" type="reset" href="<?php echo e(url('empleado')); ?>">
<span class="glyphicon glyphicon-home"></span> Regresar </a>
</div>
</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appPrueba2\resources\views/empleado/edit.blade.php ENDPATH**/ ?>