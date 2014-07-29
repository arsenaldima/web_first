<?php
/**
 * Created by JetBrains PhpStorm.
 * User: дима
 * Date: 23.07.14
 * Time: 18:11
 * To change this template use File | Settings | File Templates.
 */




?>


<?php foreach($model_1 as $val)
{
    $as=User::model()->findByPk($val->$user_id);
    $as2=Coments::model()->findAllByAttributes(array('statia_id'=>$val->$id));
    ?>


<div class="panel_1">


    <h4><a><u class="text_size"><?php echo CHtml::link(CHtml::encode($val->header), array('statia', 'id'=>$val->id)); ?></u></a></h4>

    <div class="pol_pol">
        <u class="text_size_1"><a class="text_size_1"><?php echo CHtml::encode($as->login); ?></a></u>
        <span class="label label-default_1"></span>
        <span class="label label-default_2"><?php echo CHtml::encode($value->data); ?></span>
    </div>

</div>

<?php
}
?>
