<?php
/* @var $this OrdersController */
/* @var $data Orders */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->order_id), array('view', 'id'=>$data->order_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_person')); ?>:</b>
	<?php echo CHtml::encode($data->contact_person); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('size')); ?>:</b>
	<?php echo CHtml::encode($data->size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zipcode')); ?>:</b>
	<?php echo CHtml::encode($data->zipcode); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('season')); ?>:</b>
	<?php echo CHtml::encode($data->season); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_date')); ?>:</b>
	<?php echo CHtml::encode($data->order_date); ?>
	<br />

	*/ ?>

</div>