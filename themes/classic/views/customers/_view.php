<?php
/* @var $this CustomersController */
/* @var $data Customers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->customer_id), array('view', 'id'=>$data->customer_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('business_name')); ?>:</b>
	<?php echo CHtml::encode($data->business_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('business_type')); ?>:</b>
	<?php echo CHtml::encode($data->business_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_person')); ?>:</b>
	<?php echo CHtml::encode($data->contact_person); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
	<?php echo CHtml::encode($data->website); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_agent')); ?>:</b>
	<?php echo CHtml::encode($data->sale_agent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('headlines')); ?>:</b>
	<?php echo CHtml::encode($data->headlines); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coupon_deal')); ?>:</b>
	<?php echo CHtml::encode($data->coupon_deal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disclaimers')); ?>:</b>
	<?php echo CHtml::encode($data->disclaimers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addition_info_1')); ?>:</b>
	<?php echo CHtml::encode($data->addition_info_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addition_info_2')); ?>:</b>
	<?php echo CHtml::encode($data->addition_info_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('signup_date')); ?>:</b>
	<?php echo CHtml::encode($data->signup_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uploaded_logo')); ?>:</b>
	<?php echo CHtml::encode($data->uploaded_logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uploaded_images')); ?>:</b>
	<?php echo CHtml::encode($data->uploaded_images); ?>
	<br />

	*/ ?>

</div>