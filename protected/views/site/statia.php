<?php
/**
$model->Statia
 $dir pyt k directorii
 *
 */
?>

<div>
    <?php

    $fp = fopen($f_name.$model->path_statia, "r"); // Открываем файл в режиме чтения
    if ($fp)
        echo fpassthru($fp);
    else
        echo "Ошибка при открытии файла";

    ?>
</div>

<div>
    <?php
    foreach($model_c as $var)
    {


    ?>
        <div class="panel_v2_2">

            <?php echo CHtml::encode($var->coment); ?>

        </div>


    <?php
    }

    ?>


</div>