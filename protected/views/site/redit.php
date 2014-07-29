<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>


<div class="top_blok">Registration</div>


<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'user-user_form-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // See class documentation of CActiveForm for details on this,
        // you need to use the performAjaxValidation()-method described there.
        'enableAjaxValidation'=>false,
    )); ?>




    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

<?php if($stat) : ?>
    <p class="er">Takoi polzovatel yge syshestvyet</p>
<?php endif ?>


    <div class="input-group">
        <span class="input-group-addon" id="sp_log"><?php echo $form->labelEx($model,'login'); ?></span>

        <div class="row">

            <?php echo $form->textField($model,'login',array('class'=>'form-control_1','placeholder'=>'Login','id'=>'log_p')); ?>
            <?php echo $form->error($model,'login'); ?>
        </div>


    </div>

    <br>

    <div class="input-group">
        <span class="input-group-addon" id="sp_pas1"><?php echo $form->labelEx($model,'password'); ?></span>

        <div class="row">
            <?php echo $form->PasswordField($model,'password',array('class'=>'form-control_1','placeholder'=>'Password','id'=>'id_p1')); ?>
            <?php echo $form->error($model,'password'); ?>
        </div>
    </div>

    <br>

    <div class="input-group">
        <span class="input-group-addon" id="sp_pas2"><?php echo $form->labelEx($model,'password'); ?> again</span>

        <div class="row">
            <?php echo $form->PasswordField($model,'password',array('class'=>'form-control_1','placeholder'=>'Password','id'=>'id_p2')); ?>
            <?php echo $form->error($model,'password'); ?>
        </div>
    </div>


    <br>

    <div class="input-group">
        <span class="input-group-addon" id="sp_em"><?php echo $form->labelEx($model,'email'); ?></span>

        <div class="row">
            <?php echo $form->textField($model,'email',array('class'=>'form-control_1','placeholder'=>'email','id'=>'em_p')); ?>
            <?php echo $form->error($model,'email'); ?>
        </div>
    </div>

    <br>

    <div class="input-group">
        <span class="input-group-addon"><?php echo $form->labelEx($model,'name'); ?></span>

        <div class="row">
            <?php echo $form->textField($model,'name',array('class'=>'form-control_1','placeholder'=>'name')); ?>
            <?php echo $form->error($model,'name'); ?>
        </div>
    </div>

    <br>

    <div class="input-group">
        <span class="input-group-addon"><?php echo $form->labelEx($model,'famile'); ?></span>

        <div class="row">
            <?php echo $form->textField($model,'famile',array('class'=>'form-control_1','placeholder'=>'famile')); ?>
            <?php echo $form->error($model,'famile'); ?>
        </div>
    </div>

    <br>



    <div class="row_buttons">
        <?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary menu_1','id'=>'id_p3')); ?>
    </div>
<br>
    <?php $this->endWidget(); ?>

</div><!-- form -->


<script type="text/javascript">

   $(document).ready(function () {



            $("#id_p3").click(function () {

                   var first_pas=document.getElementById('id_p1').value
                   var first_pas2=document.getElementById('id_p2').value
                   var first_pas3=document.getElementById('log_p').value


                    if(document.getElementById('log_p').value.length<3)
                    {
                        alert("поле login долже быть больше 3 символов");
                        document.getElementById('sp_log').style.color=0xff0000;
                        return false;

                    }

                    if(document.getElementById('em_p').value.length==0)
                    {
                        alert("поле email долже быть заполнено");
                        document.getElementById('sp_em').style.color=0xff0000;
                        return false;
                    }

                    if(!(/^\w+[-_\.]*\w+@\w+-?\w+\.[a-z]{2,4}$/.test(document.getElementById('em_p').value)) )
                    {
                        alert("некорректный email");
                        document.getElementById('sp_em').style.color=0xff0000;
                        return false;

                    }


                    if((first_pas==0)||(first_pas2==0))
                    {
                        alert("pas_no correct");
                        return false;

                    }

                    if(first_pas!=first_pas2)
                    {
                        alert("Password not correct");

                        document.getElementById('sp_pas1').style.color=0xff0000;
                        document.getElementById('sp_pas2').style.color=0xff0000;
                        $("#id_p1").val('');
                        $("#id_p2").val('');
                        return false;
                    }

                    return true;

                }
            )

        }

    )
</script>

