<?php
namespace frontend\controllers;

use app\models\AboutUs;
use app\models\CallMe;
use app\models\Counter;
use app\models\Gallery;
use app\models\Introduce;
use app\models\Languages;
use app\models\Services;
use app\models\Sliders;
use common\components\Helper;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $lang = 'az';
    public $lang_default;
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        $this->lang_default = $lang_default = Yii::$app->session->get('lang') ?: "az";
        Yii::$app->language = $lang_default;
        $lang_id = (Yii::$app->db->createCommand("Select id from languages where code='${lang_default}'")->queryOne())['id'];

        $this->view->params["settings"] = Helper::getDataByTableAndLang("settings",$lang_id,'queryOne');
        $this->view->params["services"] = Helper::getDataByTableAndLang("services",$lang_id,'queryAll');
        $this->view->params["translations"] = Helper::getDataByTableAndLang("translations", $lang_id, 'queryAll', 'word', true);

        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionGallery()
    {
        $lang_default = $this->lang_default;
        $lang_id = (Yii::$app->db->createCommand("Select id from languages where code='${lang_default}'")->queryOne())["id"];
        $gallery = Gallery::findAll(["lang_id"=>$lang_id]);
        return $this->render('gallery',[
            "galleries"=>$gallery
        ]);
    }

    public function actionCallMe()
    {
        $call_me = new CallMe();
        $post_data = Yii::$app->request->post();
        print_r($post_data);
        if($call_me->load(Yii::$app->request->post()))
        {
            print_r("Buradir");
        }else{
         echo "else hissesidir";
        }
    }

    public function actionAboutUs()
    {
        return $this->render("haqqimizda");
    }

    public function actionService()
    {
        $lang_default = $this->lang_default;
        $lang_id = (Yii::$app->db->createCommand("Select id from languages where code='${lang_default}'")->queryOne())["id"];

        $services = Services::findAll(["lang_id"=>$lang_id]);
        return $this->render("services",[
            "services"=>$services
        ]);
    }

    public function actionServiceView($id)
    {
        $lang_default = $this->lang_default;
        $lang_id = (Yii::$app->db->createCommand("Select id from languages where code='${lang_default}'")->queryOne())["id"];

        $current_service = Services::findOne(["id"=>$id,"lang_id"=>$lang_id]);
        $current_service_id = $current_service ? $current_service->id : 0;
        $services = Services::find()->where(['and',"lang_id=$lang_id","id!=$current_service_id"])->all();
        return $this->render("service_view",[
            "services"=>$services,
            "service"=>$current_service
        ]);
    }

    public function actionElaqe()
    {
        echo "Elaqe action";
    }

    /**
     * Change Language
     */
    public function actionChangeLang($lang)
    {
        $available_locales = Yii::$app->db->createCommand( 'SELECT code FROM languages' )->queryAll();
        $lang_exist = [];
        foreach ($available_locales as $al)
        {
            array_push($lang_exist,$al['code']);
        }

        if (!in_array($lang, $lang_exist))
        {
            throw new \yii\web\BadRequestHttpException();
        }
        Yii::$app->session->set("lang",$lang);
        return $this->goBack();
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $lang_id = Languages::findOne(["code"=>$this->lang_default])->id;

        $sliders = Helper::checkModelFind(Sliders::class,"findAll",["lang_id"=>$lang_id],["lang_id"=>1]);
        $introduce = Helper::checkModelFind(Introduce::class,"findAll",["lang_id"=>$lang_id],["lang_id"=>1]);
        $about_us = Helper::checkModelFind(AboutUs::class,"findOne",["lang_id"=>$lang_id],["lang_id"=>1]);
        $counter = Helper::checkModelFind(Counter::class,"findAll",["lang_id"=>$lang_id],["lang_id"=>1]);
        $services = Helper::checkModelFind(Services::class,"findAll",["lang_id"=>$lang_id],["lang_id"=>1]);

        return $this->render('index',[
            "sliders"=>$sliders,
            "introduces"=>$introduce,
            "about_us"=>$about_us,
            "counter"=>$counter,
            "services"=>$services
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $this->layout = "basic";
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
