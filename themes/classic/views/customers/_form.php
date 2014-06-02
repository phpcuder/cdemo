<?php
/* @var $this CustomersController */
/* @var $model Customers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customers-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'business_name'); ?>
		<?php echo $form->textField($model,'business_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'business_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'business_type'); ?>
		<?php echo $form->textField($model,'business_type'); ?>
		<?php echo $form->error($model,'business_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_person'); ?>
		<?php echo $form->textField($model,'contact_person',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'contact_person'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_agent'); ?>
		<?php echo $form->textField($model,'sale_agent',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'sale_agent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'headlines'); ?>
		<?php echo $form->textField($model,'headlines',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'headlines'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coupon_deal'); ?>
		<?php echo $form->textField($model,'coupon_deal',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'coupon_deal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disclaimers'); ?>
		<?php echo $form->textField($model,'disclaimers',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'disclaimers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addition_info_1'); ?>
		<?php echo $form->textField($model,'addition_info_1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'addition_info_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addition_info_2'); ?>
		<?php echo $form->textField($model,'addition_info_2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'addition_info_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'signup_date'); ?>
		<?php echo $form->textField($model,'signup_date'); ?>
		<?php echo $form->error($model,'signup_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uploaded_logo'); ?>
		<?php echo $form->textField($model,'uploaded_logo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'uploaded_logo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uploaded_images'); ?>
		<?php echo $form->textField($model,'uploaded_images'); ?>
		<?php echo $form->error($model,'uploaded_images'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->