<!DOCTYPE html>
<html>    
<head>
    <meta charset="UTF-8">
    <title>Логин</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body>
    <form id="login" action="reg.php" method="post" style="text-align:center;margin-top:100px">
        <input id="firstname" name="firstname" type="text" placeholder="Имя">
        <br>
        <input id="lastname" name="lastname" type="text" placeholder="Фамилия">
        <br>
        <input id="email" name="email" type="email" placeholder="Почта">
        <br>
        <input id="password" name="password" type="password" placeholder="Пароль">
        <br>
        <input id="reppass" name="reppass" type="password" placeholder="Повторите пароль">
        <br>
        <input type="submit" class="btn" value="Зарегистрироваться">    
    </form>
    <div style="text-align:center;margin-top:100px" id="mes"></div>

<script>

    $(document).on('click','.btn', function(e){
    e.preventDefault();
    

    var firstname = $('#firstname').val();
    var lastname = $('#lastname').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var reppass = $('#reppass').val();
        $.ajax({
            url: 'reg.php',
            data: {'firstname': firstname, 'lastname': lastname, 'email': email, 'password': password, 'reppass': reppass},
            dataType: "html",
            method: "post",
            success:function(data){
                $('#mes').html(data);

                const mes = document.getElementById("mes").innerHTML;
                if(mes=="Вы зарегистрировались"){
                const hidden = document.getElementById("login");
                hidden.style.display = "none";
                }
            },
});

});

</script>

</body>
</html>