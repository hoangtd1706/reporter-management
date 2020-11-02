$(document).ready(function () {

    /*Chọn ảnh 3x4*/
    $("#avatar").click(function (event) {
        $("#modelAvatar").modal();
    });

    $("#modelAvatar").on('hidden.bs.modal', function () {
        imgSrc = $("#reporterdetail-rep_avt").val();
        $("#avatar").attr({'src': imgSrc});
    });

    /*Chọn mặt trước CMND*/
    $("#cmnd_front").click(function (event) {
        $("#modelCIDFront").modal();
    });

    $("#modelCIDFront").on('hidden.bs.modal', function () {
        FCMNDSrc = $("#reporterdetail-rep_cmnd_front").val();
        $("#avatar").attr({'src': FCMNDSrc});
    });

    /*Chọn mặt sau CMND*/
    $("#cmnd_back").click(function (event) {
        $("#modelCIDBack").modal();
    });

    $("#modelCIDBack").on('hidden.bs.modal', function () {
        FCMNDSrc = $("#reporterdetail-rep_cmnd_back").val();
        $("#avatar").attr({'src': FCMNDSrc});
    });

});