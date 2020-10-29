<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Reporterdetail */
/* @var $form yii\widgets\ActiveForm */
$org = \backend\models\Organization::find()->where(['status' => 1])->all();
?>

<div class="reporterdetail-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'rep_code')->textInput(['maxlength' => true]) ?>
    <div class="row pl-2">
        <div class="pl-3">
            <button class="btn-button btn-button__1">MẪU SỐ 01</button>
            <button class="btn-button btn-button__2">MẪU SỐ 02</button>
        </div>
    </div>
    <div class="container-fluid pr-2 pl-2">
        <div class="form-reporter">
            <!-- Phần đầu: Ảnh 3x4, Quốc hiệu tiêu ngữ, Tiêu đề bản khai,... -->
            <section id="form-header">
                <div class="row d-flex justify-content-between">
                    <div class="col-3">
                        <?= $form->field($model, 'rep_avt')->textInput(['maxlength' => true])->label(false) ?>
                        <img class="" style="width: 200px; height: 250px;"
                             src="/reporter-management/backend/web/img/trongdong3.jpg" alt="">
                    </div>
                    <div class="col-6 row justify-content-center">
                        <div class="col-12 text-align-center">
                            <p class="fs_s-18 fw_w-5 fc__c-gray m-0">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</p>
                            <i class="fs_s-16 fst__i fc__c-gray">Độc lập - Tự do - Hạnh phúc</i>
                        </div>
                        <div class="col-12 text-align-center">
                            <p class="fs_s-24 fc__c-blue fw_w-7">BẢN KHAI ĐĂNG KÝ CẤP THẺ NHÀ BÁO</p>
                            <p class="fs_s-16 fst__i fc__c-gray">Kỳ hạn 2021 - 2025 (1)</p>
                        </div>
                        <div class="col-12 text-align-center d-flex row">
                            <div class="col-6 justify-content-end">
                                <p class="fs_s-16 fw_w-6">Tên cơ quan đề nghị cấp thẻ nhà báo:</p>
                            </div>
                            <div class="col-6">
                                <span><?= $form->field($model, 'rep_co_quan')->dropDownList(ArrayHelper::map($org, 'id', 'org_name'))->label(false) ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <img style="width: 200px; height: 250px;" src="trongdong3.jpg" alt="">
                    </div>
                </div>
            </section>

            <!-- Phần nội dung: Form điền các thông tin -->
            <section class="form-info mt-4">
                <p class="fs_s-18 fw_w-5 fc__c-blue lh-h36 bd-left">THÔNG TIN CÁ NHÂN</p>
                <!-- Thông tin cá nhân -->
                <div id="info" class="bg__form mb-4 p-4">
                    <div class="form-group d-flex row">
                        <label class="col-sm-2 col-form-label">Họ và tên khai sinh(2):</label>
                        <div class="col-sm-7">
                            <?= $form->field($model, 'rep_name')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                        <label class="col-sm-1 col-form-label">Nam/Nữ</label>
                        <div class="col-sm-2">
                            <?= $form->field($model, 'rep_gender')->dropDownList([
                                1 => 'Nam',
                                2 => 'Nữ',
                            ])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Ngày, tháng, năm sinh:</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_dob')->textInput()->label(false); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Dân tộc:</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_dan_toc')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Quê quán:</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_que_quan')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nơi ở hiện nay:</label>
                        <div class="col-sm-7">
                            <?= $form->field($model, 'rep_noi_o')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control fst__i">
                                <option selected>-Tỉnh/Thành phố-</option>
                                <option>Nam</option>
                                <option>Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Chức vụ(3):</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_chuc_vu')->dropDownList([
                                'Truong phong',
                                'Pho phong',
                            ], [
                                'prompt' => '-Nhóm chức vụ-',
                            ])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Bút danh thường dùng:</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_but_danh')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                    </div>
                </div>

                <!-- Trình độ -->
                <p class="fs_s-18 fw_w-5 fc__c-blue lh-h36 bd-left">TRÌNH ĐỘ</p>
                <div id="info" class="mb-4 p-4 bg__form">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Giáo dục phổ thông(4):</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_giao_duc')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Chuyên môn(5):</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_chuyen_mon')->dropDownList(['prompt' => '-Chọn chuyên môn-'])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Trường học:</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_truong_hoc')->dropDownList(['prompt' => '-Chọn trường học-'])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Ngành học:</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_chuyen_nganh')->dropDownList(['prompt' => '-Chọn ngành học-'])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Hình thức đào tạo(6):</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_hinh_thuc')->dropDownList(['prompt' => '-Chọn hình thức đào tạo-'])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Năm tốt nghiệp:</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_tot_nghiep')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Lý luận chính trị(7):</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_chinh_tri')->dropDownList(['prompt' => '-Chọn loại-'])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Ngoại ngữ(8):</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_ngoai_ngu')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Chứng chỉ đào tạo, bồi dưỡng nghiệp vụ báo
                            chí(nếu
                            có):</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_chung_chi')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Đảng viên:</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_dang_vien')->dropDownList(['prompt' => '-Chọn-'])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Chức danh báo chí hiện nay(9):</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_chuc_dah')->dropDownList(['prompt' => '-Chọn chức danh-'])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Số thẻ nhà báo và kỳ hạn cũ:</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'rep_so_the_cu')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                    </div>
                </div>

                <!-- Quá trình hoạt động báo chí 5 năm gần nhất -->
                <p class="fs_s-18 fw_w-5 fc__c-blue lh-h36 bd-left">QUÁ TRÌNH HOẠT ĐỘNG BÁO CHÍ 5 NĂM GẦN NHẤT
                </p>
                <div id="info" class="bg__form mb-4 p-4">
                    <table id="table-info" class="table table-bordered text-align-center">
                        <thead style="align-content: center;" class="thead-dark">
                        <tr>

                            <th rowspan="2" colspan="2">Thời gian (từ tháng, năm nào đến tháng, năm nào)
                            </th>
                            <th rowspan="2">Chức danh báo chí</th>
                            <th rowspan="2">Công tác tại cơ quan báo chí nào</th>
                            <th rowspan="1" colspan="2">Lương</th>
                            <th rowspan="2">Khen thưởng kỷ luật (thời gian cụ thể)</th>
                        </tr>
                        <tr>
                            <th>Ngạch lương</th>
                            <th>Bậc lương</th>
                        </tr>
                        </thead>
                        <tbody id="table-info_body">
                        <tr id="rec-1">
                            <td colspan="1" class="p-0 sn">
                                <div class="form-group row">
                                    <label class="col-4">Từ</label>
                                    <input class="form-control col-6" type="text" name="start">
                                </div>
                            </td>
                            <td colspan="1" class="p-0">
                                <div class="form-group row">
                                    <label class="col-4">Đến</label>
                                    <input class="form-control col-6" type="text" name="end">
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="form-group">
                                    <input class="form-control" type="text">
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="form-group">
                                    <input class="form-control" type="text">
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="form-group">
                                    <input class="form-control" type="text">
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="form-group">
                                    <input class="form-control" type="text">
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="form-group">
                                    <input class="form-control" type="text">
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="form-group">
                                    <a class="btn remove-row">Xóa hàng</a>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <a class="add-row btn bg__btn-gray"><i class="fas fa-plus"></i></a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Thông tin khai cho mẫu số 3 -->
                <p class="fs_s-18 fw_w-5 fc__c-blue lh-h36 bd-left">THÔNG TIN KHAI CHO MẪU SỐ 3</p>
                <div id="info" class="bg__form mb-4 p-4">
                    <div class="form-group d-flex row">
                        <label class="col-sm-2 col-form-label">Số CMND/CCCD/Hộ chiếu</label>
                        <div class="col-sm-3">
                            <?= $form->field($model, 'rep_cmnd')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                        <label class="col-sm-1 col-form-label">Ngày cấp</label>
                        <div class="col-sm-2">
                            <?= $form->field($model, 'rep_ngay_cap_cmnd')->textInput()->label(false) ?>
                        </div>
                        <label class="col-sm-1 col-form-label">Ảnh CMND/CCCD</label>
                        <div class="col-sm-2 row">
                            <?= $form->field($model, 'rep_cmnd_front')->textInput(['maxlength' => true])->label(false) ?>
                            <button class="btn btn-xl bg__btn-gray btn-btn-gray1 mr-1"><i
                                        class="fas fa-camera"></i>
                                <p class="fs_s-12">Ảnh mặt trước</p>
                            </button>
                            <?= $form->field($model, 'rep_cmnd_back')->textInput(['maxlength' => true])->label(false) ?>
                            <button class="btn btn-xl bg__btn-gray btn-btn-gray1"><i class="fas fa-camera"></i>
                                <p class="fs_s-12">Ảnh mặt sau</p>
                            </button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">
                            Ngày, tháng, năm ký HĐLĐ có đóng BHXH</label>
                        <div class="col-sm-9 form-group">
                            <?= $form->field($model, 'rep_hdld')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                    </div>
                </div>

                <!-- Thành phần hồ sơ khác -->
                <p class="fs_s-18 fw_w-5 fc__c-blue lh-h36 bd-left">THÀNH PHẦN HỒ SƠ KHÁC</p>
                <div id="info" class="bg__form mb-4 p-4">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">
                            Scan bản chính hoặc bản sao bằng đại học, cao đẳng</label>
                        <div class="col-sm-9 align-self-center">
                            <button class="btn btn-xl bg__btn-gray btn-btn-gray"><i
                                        class="fas fa-plus fa-lg"></i></button>
                            <?= $form->field($model, 'rep_scan_bang')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">
                            San bản chính hoặc bản sao quyết định tuyển dụng, HĐLĐ có xác nhận của cơ quan báo
                            chí
                            hoặc tài liệu chứng minh thời gian công tác</label>
                        <div class="col-sm-9 align-self-center">
                            <button class="btn btn-xl bg__btn-gray btn-btn-gray"><i
                                        class="fas fa-plus fa-lg"></i></button>
                            <?= $form->field($model, 'rep_scan_hdld')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">
                            Thành phần hồ sơ khác chứng minh thuộc đối tượng cấp thẻ (nếu có)</label>
                        <div class="col-sm-9 align-self-center">
                            <button class="btn btn-xl bg__btn-gray btn-btn-gray"><i
                                        class="fas fa-plus fa-lg"></i></button>
                            <?= $form->field($model, 'rep_scan_hs_khac')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                    </div>
                </div>
                <!-- Lưu ý -->
                <p class="fs_s-18 fw_w-5 fc__c-blue lh-h36 bd-left">LƯU Ý</p>
                <div id="info" class="bg__form mb-4 p-4">
                    <p>Ghi chú:</p>
                    <p class="fs_s-14">(1) Ghi theo kỳ hạn thẻ nhà báo đề nghị cấp (ví dụ: 2016 - 2020).</p>
                    <p class="fs_s-14">(2) Viết chữ in hoa đủ dấu.</p>
                    <p class="fs_s-14">(3) Ghi rõ chức vụ bổ nhiệm (ví dụ: Tổng biên tập, Phó tổng biên tập,
                        trưởng
                        ban,...).</p>
                    <p class="fs_s-14">(4) Ghi rõ đã tốt nghiệp lớp mấy, thuộc hệ nào.</p>
                    <p class="fs_s-14">(5) Ghi rõ trình độ chuyên môn cao nhất (ví dụ: Tiến sĩ, thạc sĩ, đại
                        học,
                        cao đẳng,...).</p>
                    <p class="fs_s-14">(6) Chính quy, tại chức, đào tạo từ xa,...</p>
                    <p class="fs_s-14">(7) Cao cấp, trung cấp, sơ cấp và tương đương.</p>
                    <p class="fs_s-14">(8) Tên ngoại ngữ và trình độ (ví dụ: A, B, C, D,...).</p>
                    <p class="fs_s-14">(9) Ghi rõ chức danh nghề nghiệp (ví dụ: Phóng viên, biên tập viên,...).
                    </p>
                </div>
            </section>
        </div>

        <section class="form-info mt-4 p-4 bg-white">
            <div id="info" class="row flex justify-content-between mb-4  pl-4 pr-4">
                <div class="row pl-2">
                    <div>
                        <button class="btn btn-outline-secondary">Trở về</button>
                        <button class="btn btn-outline-secondary"><i class="far fa-trash-alt pr-1"></i>Xóa
                            thẻ
                        </button>
                    </div>
                </div>
                <div class="row pr-2">
                    <div>
                        <?= Html::submitButton('Lưu', ['class' => 'btn btn-success']) ?>
                        <button class="btn btn-success">Hoàn thành</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php ActiveForm::end(); ?>
</div>
