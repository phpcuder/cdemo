<?php
/* @var $this BusinessTypesController */
/* @var $model BusinessTypes */

$this->breadcrumbs=array(
	'Business Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BusinessTypes', 'url'=>array('index')),
	array('label'=>'Create BusinessTypes', 'url'=>array('create')),
	array('label'=>'Update BusinessTypes', 'url'=>array('update', 'id'=>$model->business_type_id)),
	array('label'=>'Delete BusinessTypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->business_type_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BusinessTypes', 'url'=>array('admin')),
);
?>

<h1>View BusinessTypes #<?php echo $model->business_type_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'business_type_id',
		'name',
	),
)); ?>
