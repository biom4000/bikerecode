$(function () {
    $(".bt_submit").on("click",function () {

        var email = document.getElementById("email").value;
        var password1 = document.getElementById("password1").value;
        var password2 = document.getElementById("password2").value;
        var today=new Date();
        var date = today.getFullYear()+"-"+(today.getMonth()+1)+"-"+today.getDate()+" "+today.getHours()+":"+today.getMinutes()+":"+today.getSeconds();
        var str ="";

        if (email == ""){
            str += "id未輸入<br>";
        }
        if ((password1 == "")||(password2 == "")){
            str += "password未輸入<br>";
        }else if(password1 != password2){
            str += "password錯誤<br>"
        }
         if(str != ""){
             $.alert({
                 icon: 'fas fa-exclamation-triangle',
                 title: '警告!',
                 content: str
             });
         }else{
             $.alert({
                 icon: 'fas fa-check-circle',
                 title: '完成!',
                 content: '恭喜註冊成功'
             });
             $.post("註冊.php",{
                 email: email,
                 password: password1,
                 date: date
             });
         }

    });
});

