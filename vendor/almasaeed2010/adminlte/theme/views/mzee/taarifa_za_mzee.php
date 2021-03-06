<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
?>

<div class="row">

    <div class="col-md-9 border border-blue">


        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
               // 'id',
                'fomu_namba',
               // 'picha',
                'majina_mwanzo',
                'jina_babu',
                'jina_maarufu',
               [
                       'attribute' => 'jinsia',
                        'value' => function($model){
                            if($model->jinsia == 'M'){
                                return 'MWANAMUME';
                            }elseif ($model->jinsia == 'F'){
                                return 'MWANAMKE';
                            }
                        }
               ],

                'umri_kusajiliwa',

                [
                    'attribute' => 'kazi_id',
                    'value' => function ($model) {
                        if ($model->kazi_id != null) {
                            return $model->kazi->jina;
                        }else{
                            return '';
                        }
                    }
                ],

                [
                    'attribute' => 'mzawa_zanzibar',
                    'value' => function($model){
                        if($model->mzawa_zanzibar == 'N'){
                            return 'HAPANA';
                        }elseif ($model->mzawa_zanzibar == 'Y'){
                            return 'NDIYO';
                        }
                    }
                ],


                'tarehe_kuingia_zanzibar',
                'simu',
                'namba_nyumba',
                'anuani_kamili_mtaa',
                'anuani_ya_posta',


                [
                    'attribute' => 'njia_upokeaji',
                    'value' => $model->upokeaji->jina
                ],
                'jina_bank',
                'jina_account',
                'nambari_account',
                'simu_kupokelea',
                'wanaomtegemea',
                [
                    'attribute' => 'pension_nyingine',
                    'value' => function($model){
                        if($model->pension_nyingine == 'N'){
                            return 'HAPANA';
                        }elseif ($model->pension_nyingine == 'Y'){
                            return 'NDIYO';
                        }
                    }
                ],
                [
                    'attribute' => 'aina_ya_pension',
                    'value' =>  function($model) {
                        if ($model->aina_ya_pension != null) {
                            $model->pension->jina;
                        }else{
                            return '';
                        }
                    }
                ],
                [
                    'attribute' => 'mchukua_taarifa_id',
                    'value' =>  function($model) {
                        if ($model->mchukua_taarifa_id != null) {
                            $model->sheha->jina_kamili;
                        }else{
                            return '';
                        }
                    }
                ],




            ],
        ]) ?>

    </div>

        <div class="col-md-3  text-left">

            <?php
            if($model->picha !=null) {
                echo Html::img('uploads/wazee/' . $model->picha,
                    ['width' => '150px', 'height' => '150px', 'class' => 'img-square']);
            }else{
                echo Html::img('uploads/wazee/avatar.jpg',
                    ['width' => '150px', 'height' => '150px', 'class' => 'img-square']);
            }
            ?>
<br/><br/>
            <p><b>Kuzaliwa:</b> <?= $model->tarehe_kuzaliwa?></p>
            <p><b>Umri:</b> <?= $model->umri_sasa?></p>
            <p><b>Aina ya kitambulisho:</b>
                <?php
                if($model->aina_ya_kitambulisho != null) {
                    echo $model->kitambulisho->jina;
                }
                ?></p>
            <p><b>Namba : </b><?= $model->nambar?></p>
            <p><b>Mtaa : </b><?= $model->mtaa?></p>
            <p><b>Kituo : </b><?= $model->kituo->kituo?></p>
            <p><b>Shehia : </b><?= $model->shehia->jina?></p>
            <p><b>Wilaya : </b><?= $model->shehia->wilaya->jina?></p>
            <p><b>Mkoa : </b><?= $model->shehia->wilaya->mkoa->jina?></p>
            <p><b>Zone : </b><?= $model->shehia->wilaya->mkoa->zone->jina?></p>
            <p><b>Zups pencheni : </b><?= $model->zupspencheni->maelezo?></p>
            <p><b>Kiasi : </b><?= $model->zupspencheni->kiasi?></p>
        </div>


</div>
