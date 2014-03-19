<?php
/* @var $this AlumnosController */
/* @var $data Alumnos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_alumno')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_alumno), array('view', 'id'=>$data->id_alumno)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_alumno')); ?>:</b>
	<?php echo CHtml::encode($data->nro_alumno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('digito_verificador')); ?>:</b>
	<?php echo CHtml::encode($data->digito_verificador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_documento')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_documento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_documento')); ?>:</b>
	<?php echo CHtml::encode($data->nro_documento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomyap')); ?>:</b>
	<?php echo CHtml::encode($data->nomyap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->anio_ingreso); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail')); ?>:</b>
	<?php echo CHtml::encode($data->mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contrasenia')); ?>:</b>
	<?php echo CHtml::encode($data->contrasenia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ultima_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->ultima_actualizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estado_alumno')); ?>:</b>
	<?php echo CHtml::encode($data->id_estado_alumno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modificado_por_departamento')); ?>:</b>
	<?php echo CHtml::encode($data->modificado_por_departamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('graduado')); ?>:</b>
	<?php echo CHtml::encode($data->graduado); ?>
	<br />

	*/ ?>

</div>