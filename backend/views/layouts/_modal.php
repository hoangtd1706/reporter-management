
<?php

$baseUrl = str_replace('/backend/web','',Yii::$app->urlManager->getBaseUrl());
?>

<!--Modal ảnh 3x4-->
<div class="modal fade" id="modelAvatar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Chọn ảnh 3x4</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe  width="100%" height="550" frameborder="0"
                         src="<?php echo $baseUrl; ?>/file/dialog.php?type=0&field_id=reporterdetail-rep_avt">
                </iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--Modal ảnh mặt trước CMND-->
<div class="modal fade" id="modelCIDFront" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Upload CMND mặt trước</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe  width="100%" height="550" frameborder="0"
                         src="<?php echo $baseUrl; ?>/file/dialog.php?type=0&field_id=reporterdetail-rep_cmnd_front">
                </iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--Modal ảnh mặt sau CMND-->
<div class="modal fade" id="modelCIDBack" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Upload CMND mặt sau</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe  width="100%" height="550" frameborder="0"
                         src="<?php echo $baseUrl; ?>/file/dialog.php?type=0&field_id=reporterdetail-rep_cmnd_back">
                </iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!--Modal scan bằng đại học, cao đẳng-->
<div class="modal fade" id="modelCetificate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Upload bằng đại học/cao đẳng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe  width="100%" height="550" frameborder="0"
                         src="<?php echo $baseUrl; ?>/file/dialog.php?type=0&field_id=reporterdetail-rep_scan_bang">
                </iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--Modal scan hợp đồng lao động-->
<div class="modal fade" id="modelHDLD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Upload hợp đồng lao động</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe  width="100%" height="550" frameborder="0"
                         src="<?php echo $baseUrl; ?>/file/dialog.php?type=0&field_id=reporterdetail-rep_scan_hdld">
                </iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--Modal scan hồ sơ khác-->
<div class="modal fade" id="modelOther" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Upload thành phần hồ sơ khác chứng minh thuộc đối tượng cấp thẻ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe  width="100%" height="550" frameborder="0"
                         src="<?php echo $baseUrl; ?>/file/dialog.php?type=0&field_id=reporterdetail-rep_scan_hs_khac">
                </iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>