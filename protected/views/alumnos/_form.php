<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumnos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_alumno'); ?>
		<?php echo $form->textField($model,'nro_alumno'); ?>
		<?php echo $form->error($model,'nro_alumno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'digito_verificador'); ?>
		<?php echo $form->textField($model,'digito_verificador'); ?>
		<?php echo $form->error($model,'digito_verificador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_documento'); ?>
		<?php echo $form->textField($model,'id_tipo_documento'); ?>
		<?php echo $form->error($model,'id_tipo_documento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_documento'); ?>
		<?php echo $form->textField($model,'nro_documento'); ?>
		<?php echo $form->error($model,'nro_documento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomyap'); ?>
		<?php echo $form->textField($model,'nomyap',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'nomyap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anio_ingreso'); ?>
		<?php echo $form->textField($model,'anio_ingreso'); ?>
		<?php echo $form->error($model,'anio_ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrasenia'); ?>
		<?php echo $form->textField($model,'contrasenia',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'contrasenia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ultima_actualizacion'); ?>
		<?php echo $form->textField($model,'ultima_actualizacion'); ?>
		<?php echo $form->error($model,'ultima_actualizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_estado_alumno'); ?>
		<?php echo $form->textField($model,'id_estado_alumno'); ?>
		<?php echo $form->error($model,'id_estado_alumno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modificado_por_departamento'); ?>
		<?php echo $form->textField($model,'modificado_por_departamento'); ?>
		<?php echo $form->error($model,'modificado_por_departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'graduado'); ?>
		<?php echo $form->textField($model,'graduado'); ?>
		<?php echo $form->error($model,'graduado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->