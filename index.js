$(function () {
    var data = [
        {label: "影像合成", data: 10},
        {label: "商品拍攝", data: 20},
        {label: "打光技巧", data: 30},
        {label: "實拍案例", data: 40}
    ];

    $.plot('#flotcontainer', data, {
        series: {
            pie: {
                innerRadius: 0.5,
                show: true
            }
        }
    });

    $("#class").change(function () {
        switch (this.value) {
            case "1":
                var bike_list = ["機油","齒輪油","前輪胎","後輪胎","前煞車皮","後煞車皮","空氣濾網","傳動濾網","機油濾芯","煞車油","皮帶","其他"];
                var i = 0;
                $("#subclass").empty();
                for (i=0; i<bike_list.length; i++){
                    $("#subclass").append($("<option></option>>").attr("value",i).text(bike_list[i]));
                }
                break;
            case "2":
                var bike_list = ["中油","全國","福懋","其他"];
                var i = 0;
                $("#subclass").empty();
                for (i=0; i<bike_list.length; i++){
                    $("#subclass").append($("<option></option>>").attr("value",i).text(bike_list[i]));
                }
                break;
            case "3":
                var bike_list = ["傳動","引擎","排氣管","車殼","車架","燈泡","儀錶板","避震器","輪框","其他"];
                var i = 0;
                $("#subclass").empty();
                for (i=0; i<bike_list.length; i++){
                    $("#subclass").append($("<option></option>>").attr("value",i).text(bike_list[i]));
                }
                break;
            case "4":
                $("#subclass").empty();
                break;
            default:
                break;
        }

        alert(this.value);
    });
});