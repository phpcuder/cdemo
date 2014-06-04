<?php
/* @var $this BusinessTypesController */
/* @var $model BusinessTypes */

$this->breadcrumbs=array(
	'Business Types'=>array('index'),
	$model->name=>array('view','id'=>$model->business_type_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BusinessTypes', 'url'=>array('index')),
	array('label'=>'Create BusinessTypes', 'url'=>array('create')),
	array('label'=>'View BusinessTypes', 'url'=>array('view', 'id'=>$model->business_type_id)),
	array('label'=>'Manage BusinessTypes', 'url'=>array('admin')),
);
?>

<h1>Update BusinessTypes <?php echo $model->business_type_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'images' => isset($images) ? $images : array())); ?>