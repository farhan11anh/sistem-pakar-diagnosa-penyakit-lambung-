<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" id="username" placeholder="masukan username">
        <input type="email" name="email" id="email" placeholder="masukan email">
        <input type="password" name="password" id="password" placeholder="masukan password">

        <button id="submit" >Register</button>
    </form>
    <a href="login.php">Login</a>

    <script>
        $('#submit').click(function(e){
            e.preventDefault();
            let username = $('#username').val();
            let email = $('#email').val();
            let password = $('#password').val();

            $.ajax({
                url : '../action/register.php',
                method : 'post',
                data : {
                    username : username,
                    email : email,
                    password : password
                },
                success : function(data){
                    if(data == 'success'){
                        $.ajax({
                            url : 'login.php',
                            method : 'post',
                            data : {status : success},
                            success : function(){
                                window.location.replace("login.php");
                            }
                        })
                    }
                }
            })
        })
    </script>
</body>
</html>