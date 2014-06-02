<?php
/* @var $this BusinessTypesController */
/* @var $data BusinessTypes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('business_type_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->business_type_id), array('view', 'id'=>$data->business_type_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />


</div>