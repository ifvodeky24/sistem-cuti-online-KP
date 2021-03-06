<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSeacrh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Master User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="box">
    <div class="box-header">
    <b><center> <h3 class="box-title">Data Master User</h3></center></b>
    </div>

    <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
        <th><center>No</center></th>
        <th><center>Username</center></th>
        <th><center>NIP</center></th>
        <th><center>Nama Karyawan</center></th>
        <th><center>Jabatan</center></th>
        <th><center>Foto Profil</center></th>
        <th><center>Level</center></th>
        <th><center>Total Cuti</center></th>
        <th><center>Aksi</center></th>
        </tr>

    </thead>
    <tbody>
        <?php
        $no=1;foreach($model as $db):
        ?>

        <tr>
        <td><center> <?= $no;?> </center> </td>
        <td><center> <?= $db['username'];?> </center> </td>
        <td><center> <?= $db['NIP'];?> </center> </td>
        <td><center> <?= $db['nama_karyawan'];?> </center> </td>
        <td><center> <?= $db['jabatan'];?> </center> </td>
        <td><center> <a href="<?= Yii::getAlias('@web') .'/files/images/user_images/'. $db['foto_profil']; ?>" target="_blank"><img class="img-circle" height="100" width="100" src="<?= Yii::getAlias('@web') .'/files/images/user_images/'. $db['foto_profil']; ?>"> </center> </td>
        <td><center> <?= $db['level'];?> </a> </center> </td>
        <td><center> <?= $db['cuti'];?> </center> </td>

        <td><center> 
        <?= Html::a('<i class="fa fa-search"></i>', ['/user/view', 'id' =>$db['id_user']], ['class' => 'btn btn-warning btn-xs']) ?>
        <?= Html::a('<i class="fa fa-pencil"></i>', ['/user/update', 'id' =>$db['id_user']], ['class' => 'btn btn-info btn-xs']) ?>
        <?= Html::a('<i class="fa fa-trash"></i>', ['/user/delete', 'id' =>$db['id_user']], [
                    'class' => 'btn btn-danger btn-xs',
                    'data' => [
                    'confirm' => 'anda yakin ingin menghapus "'.$db['nama_karyawan']. '"?',
                    'method' => 'post', 
                    ]
                    ]);
            ?>

            </center> </td>
            </tr>

            <?php $no++;endforeach; ?>

            </tbody>
        </table>
    </div>
</div>
</div>