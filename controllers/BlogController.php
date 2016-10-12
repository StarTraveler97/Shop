<?php

namespace app\controllers;

use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Blog;
use yii\web\HttpException;

class BlogController extends Controller{
    public function actionIndex(){

        $query = Blog::find()->select('id_post, title, content, description, date, count_visit')-> orderBy('id_post DESC');
        $pages = new \yii\data\Pagination(['totalCount' => $query->count(), 'pageSize' => 3 ]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        $data = array();
        $data['header_title'] = 'Блог ПР-131';
        $data['title_page'] = 'Пости';

        /*$student1 = array();
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
        $data['students'][] = $student4;*/

        return $this->render('index', compact('data', 'posts', 'pages'));
    }
    public function actionOnce()
    {
        $id_post = Yii::$app->request->get('id_post');
        $data = array();
        $post = Blog::findOne($id_post);
        if (empty($post)) throw new \yii\web\HttpException(404, 'Такого посту немає...');
        $data['header_title'] = 'Пост №'. $id_post;
        $data['title_page'] = 'Пост №'.$id_post;
        return $this->render('once.php', compact('data', 'post'));
    }
}