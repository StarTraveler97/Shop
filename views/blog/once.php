<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title =  $data['header_title'];
$this->params['breadcrumbs'][] = $this->title;
?>
<link href="/../views/blog/style/style.css" rel="stylesheet" type="text/css" >
<div class="site-about">
    <h1><?= Html::encode($data['title_page']) ?></h1>
        <table>
            <thead>
            <tr>
                <td class="title-post" colspan="2"><?php echo $post['title'];?></td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="description-post"><?php echo $post['description'];?></td>
                <td class="content-post"><?php echo $post['content']; echo time();?></td>
            </tr>
            <tr>
                <td class="date-post" colspan="2"><?php echo date('d-M-Y, H:m',$post['date']);?> <a href="<?=\yii\helpers\Url::to(['blog/index'])?>">Повернутись до всіх постів:)</a></td>
            </tr>
            </tbody>
        </table>
</div>