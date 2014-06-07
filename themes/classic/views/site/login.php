<style>
    form#login-form {
        width:400px;
        height: 300px;
        margin: 0 auto;
        margin-top: 100px;
    }
    form#login-form label {
        width: 80px;
        display: inline-block;
        font-size: 14px;
    }
    form#login-form div.row {
        margin-bottom: 5px;
    }
    form#login-form input[type="text"],
    form#login-form input[type="password"]{
        font-size: 14px;
        padding: 3px 4px;
        background: #fff;
        width: 190px;
    }
    form#login-form input[type="submit"] {
        font-size: 14px;
        padding: 3px 15px;
    }
    form#login-form p.hint {
        font-size: 12px;
    }
    form#login-form .rememberMe {
        padding-left: 85px;
    }
    form#login-form .rememberMe label {
        width: 160px;
    }
    form#login-form div.buttons {
        padding-left: 85px;
    }
</style>
<div class="inner-wrapper">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <div class="row">
        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username'); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password'); ?>
        <?php echo $form->error($model, 'password'); ?>
        <p class="hint">
            Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
        </p>
    </div>

    <div class="row rememberMe">
        <?php echo $form->checkBox($model, 'rememberMe'); ?>
        <?php echo $form->label($model, 'rememberMe'); ?>
        <?php echo $form->error($model, 'rememberMe'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Login'); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>
