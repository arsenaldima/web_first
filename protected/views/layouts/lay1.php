<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <!-- add jqueri -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

 <?php   Yii::app()->clientScript
     ->registerScriptFile('/js/bootstrap.js')
    ->registerCssFile('/css/bootstrap.css');
?>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
    <!-- blueprint CSS framework -->


<?php echo Yii::app()->request->baseUrl; ?>

</head>



<body>

                <div >
                    <div class="col-md-9 col-md-offset-2 panel panel-primary panel-primary" id="header_1">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Messages</a></li>
                        </ul>
                    </div>

                    <div >

                        <div class="col-md-7 col-md-offset-2 panel panel-primary">

                            <?php echo $content; ?>

                        </div>

                        <div class="col-md-2 bg-info panel panel-primary">

                            <form class="form-horizontal" role="form">

                                <div class="form-group">

                                    <div class="col-sm-10">
                                        <label  class="col-sm-2 control-label">Login</label>
                                        <input type="text" class="form-control"  placeholder="Login">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-sm-10">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </div>


                            </form>

                            <a class="label label-default" href ="http://localhost/web/index.php?r=site/Redit">Registration</a>
                            <br/>
                            <br/>
                             </div>

                    </div>

                    <div class="col-md-9 col-md-offset-2 panel panel-primary_1" id="footer_1">
                        footer
                    </div>

                </div>

</body>

</html>
