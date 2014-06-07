<?php
/* @var $this OrdersController */
/* @var $model Orders */

$this->breadcrumbs = array(
    'Orders' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Orders', 'url' => array('index')),
    array('label' => 'Create Orders', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#orders-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Orders</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'type' => 'striped bordered condensed',
    'id' => 'orders-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'customer_id',
        'contact_person',
        array(
            'name' => 'size',
            'filter' => Yii::app()->params['admin_size_label'],
            'value' => 'Yii::app()->params[\'admin_size_label\'][$data->size]'
        ),
        'qty',
        array(
            'name' => 'total',
            'value' => '\'$\' . number_format($data->total, 2)',
        ),
        'zipcode',
        'season',
        array(
            'name' => 'status',
            'filter' => Yii::app()->params['payment_status'],
            'value' => 'Yii::app()->params[\'payment_status\'][$data->status]',
            'class' => 'bootstrap.widgets.TbEditableColumn',
            'editable' => array(
                'type' => 'select',
                'source' => Yii::app()->params['payment_status'],
                'url' => '/orders/ajaxUpdate',
            ),
        ),
        array(
            'name' => 'order_date',
            'value' => 'date(\'d/m/Y\', $data->order_date)',
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>
