<?php
/*fsdfdsfd*/
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title =  $data['header_title'];
$this->params['breadcrumbs'][] = $this->title;
?>
<link href="/../views/blog/style/style.css" rel="stylesheet" type="text/css" >
<div class="site-about">
    <h1><?= Html::encode($data['title_page']) ?></h1>
   <!-- <table>
        <thead>
        <tr>
            <th>№</th>
            <th>Ім'я</th>
            <th>Прізвище</th>
            <th>По-батькові</th>
            <th>Група</th>
        </tr>
        </thead>
        <tbody>
        <?php //$i=1; foreach($data['students'] as $student){?>
            <tr>
                <td><?// echo $i;?></td>
                <td><? //echo $student['f_name'];?></td>
                <td><? //echo $student['s_name'];?></td>
                <td><? //echo $student['t_name'];?></td>
                <td><? //echo $student['group'];?></td>
            </tr>
            <?//$i++; }  ?>
        </tbody>
    </table>-->
    <?php foreach($posts as $post){?>
    <table>
        <thead>
        <tr>
            <td class="title-post" colspan="2"><?php echo $post['title'];?></td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="description-post"><?php echo $post['description'];?></td>
            <td class="content-post"><?php echo strlen($post['content'])>500 ? substr($post['content'],0,500) : $post['content'],'...';?></td>
        </tr>
        <tr>
            <td class="date-post" colspan="2"><?php echo date('d-M-Y, H:m',$post['date']);?> <a href="<?= \yii\helpers\Url::to(['blog/once','id_post' => $post->id_post])?>">Докладніше тут:)</a></td>
        </tr>
        </tbody>
    </table>
    <?php }?>
    <div align="center"><?= \yii\widgets\LinkPager::widget(['pagination' => $pages]) ?></div>
</div>