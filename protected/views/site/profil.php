<?php
/**
 * Created by JetBrains PhpStorm.
 * User: дима
 * Date: 24.07.14
 * Time: 14:02
 * To change this template use File | Settings | File Templates.
 */
?>

<?php    Yii::app()->getClientScript()->registerCoreScript('/web/js/bootstrap.js'); ?>


<div class="panel_v2">

    <h2 class="text_size_personal">Personal page user   <?php echo CHtml::encode($model->login); ?></h2>



</div>

<div class="panel_v2_1">
  <div>

      <div>
          <img src= "<?php echo Yii::app()->request->baseUrl . $model->picture ?>" class="img-thumbnail lp otstup" >

          <br>

          <ul class="nav nav-tabs">
              <li class="dropdown" data-toggle="tab">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">change_profil<b class="caret"></b></a>
                  <ul class="dropdown-menu" role="menu">


                      <li><?php echo CHtml::ajaxLink('Izmenit_login',  CController::createUrl('/Site/profil'), array(
                              'type' => 'POST',// method
                              'data'=>array('stat'=>1,$zn=>"login"),// DATA
                              'update' => '#mposter',// что обновить :)
                              'onclick'=>'$("#myModal").modal("show");', /* dialog */
                          ), array('tabindex'=>"-1"));
                          ?></li>

                      <li><a tabindex="-1" href="#" id="p">Izmenit_parol <?php $stat=1; ?></a></li>
                      <li><a tabindex="-1" href="#" id="a">izmenit_avy <?php $stat=2; ?></a></li>
                      <li><a tabindex="-1" href="#" id="i">izmenit_ima <?php $stat=3; ?> </a></li>
                      <li><a tabindex="-1" href="#" id="f">izmenit_familiy <?php $stat=4; ?> </a></li>
                      <li><a tabindex="-1" href="#" id="k">dobavit_komenti <?php $stat=5; ?> </a></li>

                  </ul>
              </li>

          </ul>

          <div class="siz">


               <?php echo CHtml::encode($model->getAttributeLabel('name')); ?>:</b>

               <?php if($model->name!=null): ?>
                   <?php echo CHtml::encode($model->name); ?>
               <?php endif ?>

               <?php if($model->name==null): ?>
                    <?php echo CHtml::encode("_NONAME_"); ?>
               <?php endif ?>

               <br>
               <br>

               <?php echo CHtml::encode($model->getAttributeLabel('famile')); ?>:</b>

               <?php if($model->famile!=null): ?>
                   <?php echo CHtml::encode($model->famile); ?>
               <?php endif ?>

               <?php if($model->famile==null): ?>
                    <?php echo CHtml::encode("NOFAMILE"); ?>
               <?php endif ?>

               <br>
               <br>

               <?php echo CHtml::encode($model->getAttributeLabel('kom_o_sebe')); ?>:</b>

               <?php if($model->kom_o_sebe!=null): ?>
                  <div>
                      <br>
                      <?php echo CHtml::encode($model->kom_o_sebe, array('class'=>'siz')); ?>
                  </div>
               <?php endif ?>

               <?php if($model->kom_o_sebe==null): ?>
                    <?php echo CHtml::encode("NOKOMENTS"); ?>
               <?php endif ?>

               <br>
               <br>

           </div>

      </div>

  </div>


</div>

<div class="panel_v2_1">
    <h2 class="text_size_personal">Personal pages user </h2>

  <?php
  foreach($model_1 as $value)
  {
  ?>

      <?php echo CHtml::link(CHtml::encode($value->header), array('statia', 'id'=>$value->id)); ?>

     </br>

<?php  }
  ?>

</div>

<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="modal_id">

            <?php echo CHtml::encode($stat); ?>

        </div>
    </div>
</div>


<script>
    $('#myModal').modal('show')
</script>





<script type="text/javascript">$('ul.nav-tabs li').click(function(){
        $('ul.nav-tabs li').each(function(){

            $(this).removeClass('active')
        });
        $(this).addClass('active')});</script>




