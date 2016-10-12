<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title =  $data['header_title'];
$this->params['breadcrumbs'][] = $this->title;
?>
<link href="/../views/post/style/style.css" rel="stylesheet" type="text/css" >
<div class="site-about">
    <h1><?= Html::encode($data['title_page']) ?></h1>
    <table>
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
            <?php $i=1; foreach($data['students'] as $student){?>
                <tr>
                    <td><? echo $i;?></td>
                    <td><? echo $student['f_name'];?></td>
                    <td><? echo $student['s_name'];?></td>
                    <td><? echo $student['t_name'];?></td>
                    <td><? echo $student['group'];?></td>
                </tr>
            <?$i++; }  ?>
        </tbody>
    </table>


</div>