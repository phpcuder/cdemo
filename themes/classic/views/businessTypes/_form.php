<?php
/* @var $this BusinessTypesController */
/* @var $model BusinessTypes */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'business-types-form',
        'enableAjaxValidation' => false,
        'type' => 'horizontal',
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        )
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldRow($model, 'name', array('placeholder' => 'Business Type Name')); ?>

    <div class="control-group">
        <label class="control-label required" for="BusinessTypes_name">Images <span class="required">*</span></label>
        <div class="controls">
            <?php if (!empty($images)): ?>
                <ul class="list-images">
                    <?php foreach ($images as $src): ?>
                        <li>
                            <img src="<?php echo Yii::app()->baseUrl . '/' . $src; ?>" />
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <input type="file" class="typefile" name="images[]" multiple value="">
        </div>
    </div>

    <div class="form-actions">
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => $model->isNewRecord ? 'Create' : 'Save',
        ));
        ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
    $(function(){
        $('#business-types-form').on('submit', function(){
            // Add events
            $('input[type=file][name=logo]').on('change', prepareUploadLogo);
            $('input[type=file][name^="images"]').on('change', prepareUploadImages);
 
            // Grab the files and set them to our variable
            function prepareUploadLogo(event)
            {
                files = event.target.files;

                $.each(files, function(key, value)
                {
                    formData.append('logo', value);
                });
            }

            function prepareUploadImages(event)
            {
                files = event.target.files;
                $.each(files, function(key, value)
                {
                    formData.append(key, value);
                });
            }
        });
    });
</script>