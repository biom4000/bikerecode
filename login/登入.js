$(function () {
    $(".bt_submit").on("click",function () {

        var id = document.getElementById("input_id").value;
        var password = document.getElementById("input_password").value;
        var str ="";

        if (id == ""){
            str += "id未輸入<br>";
        }
        if (password == ""){
            str += "password未輸入<br>";
        }

        if(str != ""){
            $.alert({
                icon: 'fas fa-exclamation-triangle',
                title: '警告!',
                content: str
            });
        }else{
            $.post("登入.php",{
                id: id,
                password: password
            });
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", "登入.php?id="+id+",password="+password, true);
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    var stt = xhttp.responseText;
                }
            };
            xhttp.send();
        }

    });
});

