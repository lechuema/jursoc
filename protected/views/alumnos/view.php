<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */

$this->breadcrumbs=array(
	'Alumnoses'=>array('index'),
	$model->id_alumno,
);

$this->menu=array(
	array('label'=>'List Alumnos', 'url'=>array('index')),
	array('label'=>'Create Alumnos', 'url'=>array('create')),
	array('label'=>'Update Alumnos', 'url'=>array('update', 'id'=>$model->id_alumno)),
	array('label'=>'Delete Alumnos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_alumno),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alumnos', 'url'=>array('admin')),
);
?>

<h1>View Alumnos #<?php echo $model->id_alumno; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_alumno',
		'nro_alumno',
		'digito_verificador',
		'id_tipo_documento',
		'nro_documento',
		'nomyap',
		'anio_ingreso',
		'direccion',
		'telefono',
		'mail',
		'contrasenia',
		'ultima_actualizacion',
		'id_estado_alumno',
		'id_usuario',
		'modificado_por_departamento',
		'graduado',
	),
)); ?>
