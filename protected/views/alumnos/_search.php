<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_alumno'); ?>
		<?php echo $form->textField($model,'id_alumno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nro_alumno'); ?>
		<?php echo $form->textField($model,'nro_alumno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'digito_verificador'); ?>
		<?php echo $form->textField($model,'digito_verificador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_documento'); ?>
		<?php echo $form->textField($model,'id_tipo_documento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nro_documento'); ?>
		<?php echo $form->textField($model,'nro_documento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomyap'); ?>
		<?php echo $form->textField($model,'nomyap',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anio_ingreso'); ?>
		<?php echo $form->textField($model,'anio_ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contrasenia'); ?>
		<?php echo $form->textField($model,'contrasenia',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ultima_actualizacion'); ?>
		<?php echo $form->textField($model,'ultima_actualizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_estado_alumno'); ?>
		<?php echo $form->textField($model,'id_estado_alumno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modificado_por_departamento'); ?>
		<?php echo $form->textField($model,'modificado_por_departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'graduado'); ?>
		<?php echo $form->textField($model,'graduado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->