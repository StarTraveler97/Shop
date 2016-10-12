<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class PostController extends Controller{
    public function actionIndex(){
        $data = array();
        $data['header_title'] = 'First controler';
        $data['title_page'] = 'Students';
        $student1 = array();
        $student1['f_name'] = 'Новацький';
        $student1['s_name'] = 'Олег';
        $student1['t_name'] = 'Валерійович';
        $student1['group'] = 'ПР-131';
        $data['students'][] = $student1;

        $student2 = array();
        $student2['f_name'] = 'Когут';
        $student2['s_name'] = 'Василь';
        $student2['t_name'] = 'Андрійович';
        $student2['group'] = 'ПР-132';
        $data['students'][] = $student2;

        $student3 = array();
        $student3['f_name'] = 'Самуляк';
        $student3['s_name'] = 'Роман';
        $student3['t_name'] = 'Русланович';
        $student3['group'] = 'ПР-131';
        $data['students'][] = $student3;

        $student4 = array();
        $student4['f_name'] = 'Бабійчук';
        $student4['s_name'] = 'Олександр';
        $student4['t_name'] = 'Вікторович';
        $student4['group'] = 'КС-133';
        $data['students'][] = $student4;

        return $this->render('index', compact('data'));
    }

    public function actionHello(){
        return "Hello World!!!";
    }

}