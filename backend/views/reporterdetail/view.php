<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Reporterdetail */
/* @var $modelProcess backend\controllers\ReporterdetailController */

$this->title = $model->id;
\yii\web\YiiAsset::register($this);
?>
<div class="container bg__form">
    <!-- Quốc hiệu tiêu ngữ -->
    <section id="form-header">
        <div class="row d-flex justify-content-between">
            <div class="col-3">
                <img src="<?php echo $model->rep_avt ?>" class="img" height="312" width="250px" alt="Ảnh 3x4 (nền xanh)"
                     srcset="">
            </div>
            <div class="col-6 row justify-content-center">
                <div class="col-12 text-align-center">
                    <p class="fs_s-18 fw_w-5 fc__c-gray m-0">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</p>
                    <p class="fs_s-16 fst__i fc__c-gray">Độc lập - Tự do - Hạnh phúc</p>
                </div>
                <div class="col-12 text-align-center">
                    <p class="fs_s-24 fc__c-blue fw_w-7">BẢN KHAI ĐĂNG KÝ CẤP THẺ NHÀ BÁO</p>
                    <p class="fs_s-16 fst__i fc__c-gray">Kỳ hạn 2021 - 2025 (1)</p>
                </div>
                <div class="col-12 text-align-center">
                    <p class="fs_s-16 fw_w-6">Tên cơ quan đề nghị cấp thẻ nhà báo: <span>Tạp chí tri thức
                                xanh</span></p>
                </div>
            </div>
            <div class="col-3" style="width: 225px; height: 300px;">
            </div>
        </div>
    </section>

    <!-- Thông tin cá nhân -->
    <section class="form-info mt-4">
        <p class="fs_s-18 fw_w-5 fc__c-blue lh-h36 bd-left">THÔNG TIN CÁ NHÂN</p>
        <div id="info" class="bg__form mb-4 pl-4">
            <div class="form-group d-flex row">
                <label class="col-sm-3 col-form-label">Họ và tên khai sinh(2):</label>
                <div class="col-sm-5">
                    <p class="col-form-label fs_s-18 fw_w-6"><?php echo $model->rep_name ?></p>
                </div>
                <label class="col-sm-1 col-form-label">Nam/Nữ</label>
                <div class="col-sm-2">
                    <p class="col-form-label fs_s-18 fw_w-6"><?php echo $model->rep_gender ?></p>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Ngày, tháng, năm sinh:</label>
                <div class="col-sm-9">
                    <p class="col-form-label fs_s-18 fw_w-6"><?php echo $model->rep_dob ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Dân tộc:</label>
                <div class="col-sm-9">
                    <p class="col-form-label fs_s-18 fw_w-6"><?php echo $model->rep_dan_toc ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Quê quán:</label>
                <div class="col-sm-9">
                    <p class="col-form-label fs_s-18 fw_w-6"><?php echo $model->rep_que_quan ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nơi ở hiện nay:</label>
                <div class="col-sm-5">
                    <p class="col-form-label fs_s-18 fw_w-6"><?php echo $model->rep_noi_o ?></p>
                </div>
                <div class="col-sm-4">
                    <span>Tỉnh/Thành phố: <span class="col-form-label fs_s-18 fw_w-6">...</span></span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Chức vụ(3):</label>
                <div class="col-sm-9">
                    <p class="col-form-label fs_s-18 fw_w-6"><?php echo $model->rep_chuc_vu ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Bút danh thường dùng:</label>
                <div class="col-sm-9">
                    <p class="col-form-label fs_s-18 fw_w-6"><?php echo $model->rep_but_danh ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Trình độ -->
    <section class="form-info mt-4">
        <p class="fs_s-18 fw_w-5 fc__c-blue lh-h36 bd-left">TRÌNH ĐỘ</p>
        <div id="info" class="bg__form mb-4 pl-4">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Giáo dục phổ thông(4):</label>
                <div class="col-sm-9">
                    <p class="col-form-label fs_s-18 fw_w-6"><?php echo $model->rep_giao_duc ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Chuyên môn(5):</label>
                <div class="col-sm-9">
                    <p class="col-form-label fs_s-18 fw_w-6"><?php echo $model->rep_chuyen_mon ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Trường học:</label>
                <div class="col-sm-9">
                    <p class="col-form-label fs_s-18 fw_w-6"><?php echo $model->rep_truong_hoc ?></p>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Ngành học:</label>
                <div class="col-sm-9">
                    <p class="col-form-label fs_s-18 fw_w-6"><?php echo $model->rep_chuyen_nganh ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Hình thức đào tạo(6):</label>
                <div class="col-sm-9">
                    <p class="col-form-label fs_s-18 fw_w-6"><?php echo $model->rep_ ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Năm tốt nghiệp:</label>
                <div class="col-sm-9">
                    <p class="col-form-label fs_s-18 fw_w-6">2020</p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Lý luận chính trị(7):</label>
                <div class="col-sm-9">
                    <p class="col-form-label fs_s-18 fw_w-6">...................</p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Ngoại ngữ(8):</label>
                <div class="col-sm-9">
                    <p class="col-form-label fs_s-18 fw_w-6">Tiếng Anh B</p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Chứng chỉ đào tạo, bồi dưỡng nghiệp vụ báo
                    chí(nếu
                    có):</label>
                <div class="col-sm-9">
                    <p class="col-form-label fs_s-18 fw_w-6">Không có....</p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Chức danh báo chí hiện nay(9):</label>
                <div class="col-sm-9">
                    <p class="col-form-label fs_s-18 fw_w-6">Tổng bin tập</p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Số thẻ nhà báo và kỳ hạn cũ:</label>
                <div class="col-sm-9">
                    <p class="col-form-label fs_s-18 fw_w-6">1102020 - 10/2020</p>
                </div>
            </div>
        </div>
    </section>


    <?php foreach ($modelProcess as $process): ?>

        <?= DetailView::widget([
            'model' => $process,
            'attributes' => [
                'start_date',
                'end_date',
                'chuc_vu',
                'co_quan',
                'ngach_luong',
                'bac_luong',
                'note',
            ],
        ]);
        ?>

    <?php endforeach; ?>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>

</div>
