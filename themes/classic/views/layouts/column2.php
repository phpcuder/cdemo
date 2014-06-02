<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/admin'); ?>
<?php
$this->widget(
    'bootstrap.widgets.TbButtonGroup', array(
        'htmlOptions' => array('class' => 'dropdown'),
        'buttons' => array(
            array('label' => 'Chọn hành động', 'url' => '#'),
            array(
                'items' => $this->menu
            ),
        ),
    )
);
?>

<?php echo $content; ?>
<?php $this->endContent(); ?>