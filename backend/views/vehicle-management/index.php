<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VehicleManagementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehicle Managements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-management-index">


    <hr/>
    <div class="row">
        <div class="col-md-6">
            <strong class="lead"  style="color: #01214d;font-family: Tahoma"> <i class="fa fa-check-square text-green"></i> ZUPS - TAARIFA ZA KUKODI GARI</strong>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-4">


            <?= Html::a(Yii::t('app', '<i class="fa fa-file"></i> Taarifa Mpya'), ['create'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
            <?= Html::a(Yii::t('app', '<i class="fa fa-th-list"></i> Orodha ya Magari'), ['index'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>

        </div>
    </div>
    <hr/>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

           // 'id',
            'tarehe_ya_kukodi',
            'mmiliki_wa_gari',
            'namba_ya_simu_mmiliki',
            'aina_ya_gari',
             'plate_number',
             'jina_la_dereva',
            [
                'attribute' => 'namba_ya_simu_dereva',
                'width' => '150px'
            ],
             [
                     'attribute' => 'wilaya_id',
                     'value' => 'wilaya.jina',
                     'pageSummary' => 'Jumla',
             ],



            ['class' => 'kartik\grid\ActionColumn'],
        ],
        'showPageSummary' => true,
        'striped'=>true,
        'hover'=>true,
        'toolbar' =>  [
            ['content' =>
            // Html::button('<i class="glyphicon glyphicon-plus"></i>', ['type' => 'button', 'title' => Yii::t('kvgrid', 'Add Book'), 'class' => 'btn btn-success', 'onclick' => 'alert("This will launch the book creation form.\n\nDisabled for this demo!");']) . ' '.
                Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['index'], ['data-pjax' => 0, 'class' => 'btn btn-default', 'title' => Yii::t('kvgrid', 'Reset Grid')])
            ],
            '{export}',
            '{toggleData}',
        ],
        // set export properties
        'export' => [
            'fontAwesome' => true
        ],
        'pjaxSettings'=>[
            'neverTimeout'=>true,


        ],
        'panel' => [
            'type' => GridView::TYPE_INFO,
            'heading' => 'Taarifa za kukodi magari na mpangilio vituoni',
            'before'=>'<span class="text text-primary">Mpangilio wa magari vituoni</span>',
        ],
        'persistResize' => false,
        'toggleDataOptions' => ['minCount' => 10],
        'exportConfig' => [
            GridView::PDF => [
                'label' => Yii::t('kvgrid', 'PDF'),
                //'icon' => $isFa ? 'file-pdf-o' : 'floppy-disk',
                'iconOptions' => ['class' => 'text-danger'],
                'showHeader' => true,
                'showPageSummary' => true,
                'showFooter' => true,
                'showCaption' => true,
                'filename' => Yii::t('kvgrid', 'Zups - Repoti ya malipo kiwilaya'),
                'alertMsg' => Yii::t('kvgrid', 'The PDF export file will be generated for download.'),
                'options' => ['title' => Yii::t('kvgrid', 'Portable Document Format')],
                'mime' => 'application/pdf',
                'config' => [
                    'mode' => 'c',
                    'format' => 'A4-L',
                    'destination' => 'D',
                    'marginTop' => 20,
                    'marginBottom' => 20,
                    'cssInline' => '.kv-wrap{padding:20px;}' .
                        '.kv-align-center{text-align:center;}' .
                        '.kv-align-left{text-align:left;}' .
                        '.kv-align-right{text-align:right;}' .
                        '.kv-align-top{vertical-align:top!important;}' .
                        '.kv-align-bottom{vertical-align:bottom!important;}' .
                        '.kv-align-middle{vertical-align:middle!important;}' .
                        '.kv-page-summary{border-top:4px double #ddd;font-weight: bold;}' .
                        '.kv-table-footer{border-top:4px double #ddd;font-weight: bold;}' .
                        '.kv-table-caption{font-size:1.5em;padding:8px;border:1px solid #ddd;border-bottom:none;}',

                    'methods' => [
                        'SetHeader' => [
                            //['odd' => $pdfHeaderJana, 'even' => $pdfHeaderJana]
                        ],
                        'SetFooter' => [
                           // ['odd' => $pdfFooterJana, 'even' => $pdfFooterJana]
                        ],
                    ],

                    'options' => [
                        'title' => 'PDF export generated',
                        'subject' => Yii::t('kvgrid', 'PDF export generated by kartik-v/yii2-grid extension'),
                        'keywords' => Yii::t('kvgrid', 'krajee, grid, export, yii2-grid, pdf')
                    ],
                    'contentBefore'=>'',
                    'contentAfter'=>''
                ]
            ],
            GridView::CSV => [
                'label' => 'CSV',
                'filename' => 'ZUPS - RIPOTI YA MWEZI',
                'options' => ['title' => 'Repoti ya mwezi'],
            ],
        ],

    ]);
    ?>

</div>
