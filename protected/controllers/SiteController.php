<?php

class SiteController extends Controller
{

    public $user_id=40;
    public $ct;

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
{
    $model=new User();
    $model_1=new Statia();



    // renders the view file 'protected/views/site/index.php'
    // using the default layout 'protected/views/layouts/main.php'
    $this->render('first_page',array('model'=>$model,'model_1'=>$model_1,));
}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */

    public function actionprofil()
{
    $input = $_POST['stat'];
    $input_1 = $_POST['zn'];


    if(Yii::app()->request->isAjaxRequest){
        $record=User::model()->findByPk($this->user_id);
        echo CHtml::encode($record->$input,$input_1);
    }
    else

{$model=new User();
$model_1=new Statia();
$stat=null;
$zn=null;

$record=User::model()->findByPk($this->user_id);
$record_1=Statia::model()->findAllByAttributes(array('user_id'=>$this->user_id));
echo($record_1);
$this->render('profil',array('model'=>$record,'model_1'=>$record_1, 'stat'=>$stat, 'zn'=>$zn));
}

}

    public function actionRedit()
    {
        $model=new User();
        $stat=false;


        if(isset($_POST['User']))
        {
            $model->attributes=$_POST['User'];
            $record=User::model()->findByAttributes(array('login'=>$model->login));

            if(!$record)
            {
                if($model->save())
                {
                    $dir=Yii::getPathOfAlias('application.user');
                    $dir.=$model->id;
                    $flag=mkdir($dir);
                    $this->render('index');
                }
            }
            else
            {

                $model=new User();
                $stat=true;
                $this->render('redit',array('model'=>$model,'stat'=>$stat));
            }

        }

        else

            {$this->render('redit',array('model'=>$model,'stat'=>$stat));}


    }

    public function actionfile()
    {
        $dir=Yii::getPathOfAlias('application.pictures');
        $uploaded=false;
        $model=new loadfile();

         if(isset($_POST['loadfile']))
{
$model->attributes=$_POST['loadfile'];
   $file=CUploadedFile::getInstance($model,'file');

    if($model->validate())
    {
        $uploaded=$file->saveAs($dir .'/'.$file->getName());

    }

}

        $this->render('loadfile',array('model'=>$model, 'uploaded'=>$uploaded,'dir'=>$dir));
    }

	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
           			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{

			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */

 	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}


    public function actionstatia($id)
    {

        $dir=Yii::getPathOfAlias('application.user');//путь к корневому каталогу
        $dir.='\\'.$this->user_id.'\\'; //путь к каталогу со статьёй пример юзер/айдишник  пользователя/

        $this->render('statia',array(
            'model'=>$this->loadModel($id),'f_name'=>$dir,'model_c'=>$this->load_com($id),
        ));


    }


    public function load_com($id)
    {
        $record=Coments::model()->findAllByAttributes(array('statia_id'=>$id));
        if($record===null)
        {return "NO coments";}

        return $record;
    }

    public function loadModel($id)
    {
        $model=Statia::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }




}