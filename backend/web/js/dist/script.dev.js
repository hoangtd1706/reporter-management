"use strict";

$(document).ready(function () {
  // $(".add-row").click(function () {
  //     var markup = "<td colspan='1' class='p-0'>< div class='form-group row' >" +
  //         " <label class='col-4'>Từ</label>" +
  //         "<input class='form-control col-6' type='text' name=''></div ></td >" +
  //         "<td colspan='1' class='p-0'><div class='form - group row'>" +
  //         "<label class='col - 4'>Đến</label>" +
  //         "<input class='form - control col-6' type='text' name=''></div></td>" +
  //         "<td class='p-0'><div class='form-group'><input class='form-control' type='text'></div></td>" +
  //         "<td class='p-0'><div class='form-group'><input class='form-control' type='text></div></td>" +
  //         "<td class='p-0'><div class='form-group'><input class='form-control' type='text'></div></td>" +
  //         "<td class='p-0'><div class='form-group'><input class='form-control' type='text'></div></td>" +
  //         "<td class='p-0'><div class='form-group'><input class='form-control' type='text'></div></td>" +
  //         "<td class='p-0'><div class='form-group'><button class='btn remove-row'>Xóa hàng</button></div></td>" +
  //         "<td><div class='form-group'><button class='add-row btn bg__btn-gray'><i class='fas fa-plus'></i></button></div></td>";
  //     $("table tbody").append(markup);
  // });
  $(".add-row").click(function () {
    var markup = "<tr>" + "<td colspan='1' class='p-0'>" + "<div class='form-group row'>" + "<label class='col-4'>Từ</label><input class='form-control col-6' type='text' name=''/></div ></td >" + "<td colspan='1' class='p-0'>" + "<div class='form-group row'>" + "<label class='col-4'>Đến</label>" + "<input class='form-control col-6' type='text' name='start'></div></td>" + "<td class='p-0'><div class='form-group'><input class='form-control' type='text' name='end'></div></td>" + "<td class='p-0'><div class='form-group'><input class='form-control' type='text'></div></td>" + "<td class='p-0'><div class='form-group'><input class='form-control' type='text'></div></td>" + "<td class='p-0'><div class='form-group'><input class='form-control' type='text'></div></td>" + "<td class='p-0'><div class='form-group'><input class='form-control' type='text'></div></td>" + "<td class='p-0'><div class='form-group'><a class='btn remove-row'>Xóa hàng</a></div></td>" + "<td><div class='form-group'><a class='add-row btn bg__btn-gray'><i class='fas fa-plus'></i></a></div></td>" + "</tr>";
    $("table tbody").append(markup);
  });
  $(".remove-row").click(function () {
    // $("table tbody").find('input[name="start"]').each(function(){
    //     if($(this).is(":checked")){
    //         $(this).parents("tr").remove();
    //     }
    // });
    alert("sjdfl");
  });
});