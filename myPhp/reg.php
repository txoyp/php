<!DOCTYPE html>
<html>
<head>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    用户名：<input type="text" id="username">
    <span class="error name-err"></span>
    <br>
    密码：<input type="password" id="pwd1">
    <span class="error p1-err"></span>
    <br>
    确认密码：<input type="password" id="pwd2">
    <span class="error p2-err"></span>
    <span class="error p3-err"></span>
    <button id="btn">注册 </button>
    <script src="js/jquery-1.12.4.js"></script>
    <script>
        $(function () {
            $('#btn').on('click',function () {
                var username = $('#username').val();
                var pwd1 = $('#pwd1').val(); //val() 获取值
                var pwd2 = $('#pwd2').val();
                $.get('server.php',{    //url地址(绝对/相对)，对象(向url地址中传数据)，回调，返回数据类型
                    name:username,
                    p1:pwd1,
                    p2:pwd2,
                },function (data) {
                    if(data == 'nameErr')
                    {
                        $('.name-err').html('用户名不能为空');
                    }
                    else if(data == 'p1Err'){
                        $('.name-err').html('密码不能为空');
                    }
                    else if(data == 'p2Err'){
                        $('.name-err').html('确认密码不能为空');
                    }
                    else if(data == 'error'){
                        $('.name-err').html('密码不一致');
                    }
                    else{
                        $('.name-err').html('');
                    }
                },'text');
            })
            $('#username').focus(function () {
                $('.name-err').html('');
            })
        })
    </script>
<?php

?>
</body>
</html>