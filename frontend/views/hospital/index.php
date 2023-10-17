<?php

use app\models\Hospital;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\SearchHospital $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Hospitals');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hospital-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Hospital'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <table class="table d-md-table-condensed table-bordered table-hover">
        <?
        $arr = array();
        ?>
        <? foreach($medico as $item): ?>

        <tr class="active">
            <td><h4>
                    <? //echo $item["hospital"]['name'];                    // Исключение повторений в названии больницы
                    if(!in_array($item["hospital"]['name'], $arr)){
                    array_push($arr, $item["hospital"]['name']);
                    echo $item["hospital"]['name'];
                    }
                    ?>
                </h4>

            </td>
            <td>
                <h4>
                    <?echo $item["medico"]['name'] ?>
                </h4>
            </td>
        </tr>
        <? endforeach; ?>
    </table>

</div>
