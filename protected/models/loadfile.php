<?php
/**
 * Created by JetBrains PhpStorm.
 * User: дима
 * Date: 22.07.14
 * Time: 14:59
 * To change this template use File | Settings | File Templates.
 */

class loadfile extends CFormModel
{
public $file;

public function rules()
{

    return array(
        array('file','file','types'=>'jpg,gif,jpeg'),
    );
}

}
?>