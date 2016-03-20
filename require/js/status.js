define(function () {
    var num = function (x) {
        return x % 2 == 0;
    };
    return {
        OddOrEven: num
    };
});