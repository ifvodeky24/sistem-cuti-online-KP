<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\User;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSeacrh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$nama_karyawan=Yii::$app->user->identity->nama_karyawan;
$level=Yii::$app->user->identity->level;
$jenis_kelamin=Yii::$app->user->identity->jenis_kelamin;
$jabatan=Yii::$app->user->identity->jabatan;
$NIP=Yii::$app->user->identity->NIP;
$divisi=Yii::$app->user->identity->divisi;
$id_user=Yii::$app->user->identity->id_user;
$foto_profil=Yii::$app->user->identity->foto_profil;
User::find()
->where(['id_user' => $id_user])
->one();

$this->title = 'Profil';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil">

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <?= empty($user->foto_profil) ?
                  Html::img('@web/files/images/user_images/'.$foto_profil, ['class' => 'profile-user-img img-responsive img-circle', 'alt' => 'User profile picture']) :

                  Html::img(\Yii::$app->params['frontendUrl'] . $user->foto_profil, ['profile-user-img img-responsive img-circle', 'alt' => 'User profile picture' ]) ?>

              <h3 class="profile-username text-center"><?= $nama_karyawan ?></h3>

              <p class="text-muted text-center"><?= $level ?></p>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab">Informasi Pribadi</a></li>
            </ul>
            <div class="tab-content">
              
              <div class="active tab-pane" id="settings">
                <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model, 'nama_karyawan')->textInput(['value'=> $nama_karyawan, 'readonly'=> true]) ?>

                <?= $form->field($model, 'NIP')->textInput(['value'=> $NIP, 'readonly'=> true]) ?>

                <?= $form->field($model, 'jenis_kelamin')->textInput(['value'=> $jenis_kelamin, 'readonly'=> true]) ?>

                <?= $form->field($model, 'jabatan')->textInput(['value'=> $jabatan, 'readonly'=> true]) ?>
              
                <?= $form->field($model, 'divisi')->textInput(['value'=> $divisi, 'readonly'=> true]) ?>
                <?php ActiveForm::end(); ?>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
