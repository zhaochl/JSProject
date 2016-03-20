require(["string", "jquery-1.11.1.min"], function (str) {
    $("#Button1").bind("click", function () {
        var $a = $("#Text1").val();
        var $s = str.OrE($a);
        $("#tip").show().html("您输入的是：" + $s);
    });
});