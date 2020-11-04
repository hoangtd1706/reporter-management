$(document).ready(function () {

    /*Chọn ảnh 3x4*/
    $("#avatar").click(function (event) {
        $("#modelAvatar").modal();
    });

    $("#modelAvatar").on('hidden.bs.modal', function () {
        imgSrc = $("#reporterdetail-rep_avt").val();
        if (checkImg(imgSrc, "#avatar")) {
        }
        else{
            alert("Vui lòng chọn ảnh phóng viên");
        }
    });

    /*Chọn mặt trước CMND*/
    $("#cmnd_front").click(function (event) {
        $("#modelCIDFront").modal();
    });

    $("#modelCIDFront").on('hidden.bs.modal', function () {
        FrontCIDSrc = $("#reporterdetail-rep_cmnd_front").val();

        if (checkImg(FrontCIDSrc, "#cmndfront")) {
        }
        else{
            alert("Vui lòng chọn ảnh mặt trước CMND/CCCD");
        }
    });

    /*Chọn mặt sau CMND*/
    $("#cmnd_back").click(function (event) {
        $("#modelCIDBack").modal();
    });

    $("#modelCIDBack").on('hidden.bs.modal', function () {
        BackCIDSrc = $("#reporterdetail-rep_cmnd_back").val();

        if (checkImg(BackCIDSrc, "#cmndback")) {
        }
        else{
            alert("Vui lòng chọn ảnh mặt sau CMND/CCCD");
        }
    });

    /*Chọn bằng đại học, cao đẳng*/
    $("#certificate").click(function (event) {
        $("#modelCetificate").modal();
    });

    $("#modelCetificate").on('hidden.bs.modal', function () {
        CertifySrc = $("#reporterdetail-rep_scan_bang").val();

        if (checkImg(CertifySrc, "#certifi")) {
        }
        else{
            alert("Vui lòng bản Scan bằng đại học/cao đẳng");
        }
    });

    /*Chọn hợp đồng lao động*/
    $("#hdld").click(function (event) {
        $("#modelHDLD").modal();
    });

    $("#modelHDLD").on('hidden.bs.modal', function () {
        HDLDSrc = $("#reporterdetail-rep_scan_hdld").val();

        if (checkImg(HDLDSrc, "#Hdld")) {
        }
        else{
            alert("Vui lòng chọn bản Scan hợp đồng lao động");
        }
    });

    /*Chọn hồ sơ khác*/
    $("#other").click(function (event) {
        $("#modelOther").modal();
    });

    $("#modelOther").on('hidden.bs.modal', function () {
        OtherSrc = $("#reporterdetail-rep_scan_hs_khac").val();

        if (checkImg(OtherSrc, "#Other")) {
        }
        else{
            alert("Vui lòng chọn bản Scan hồ sơ nếu có");
        }
    });

    function checkImg(imgSrc, attr){
        if (imgSrc === ""){
            return false;
        }
        else {
            $(attr).attr({'src': imgSrc});
            return true;
        }
    }


    $(".dynamicform_wrapper").on("beforeInsert", function(e, item) {
        console.log("beforeInsert");
    });

    $(".dynamicform_wrapper").on("afterInsert", function(e, item) {
        console.log("afterInsert");
    });

    $(".dynamicform_wrapper").on("beforeDelete", function(e, item) {
        if (! confirm("Are you sure you want to delete this item?")) {
            return false;
        }
        return true;
    });

    $(".dynamicform_wrapper").on("afterDelete", function(e) {
        console.log("Deleted item!");
    });

    $(".dynamicform_wrapper").on("limitReached", function(e, item) {
        alert("Limit reached");
    });

});