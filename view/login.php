<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <title>Login</title>
</head>
<body>
    <div class="alert" >

    </div>
    <form action="" method="post">

        <input type="text" id="username" name="username" placeholder="masukan email">
        <input type="password" id="password" name="password" placeholder="masukan password">

        <button id="login" >Login</button>
    </form>

    <a href="register.php">Register</a>

    <script>
        $('#login').click(function(e){
            e.preventDefault()
            let username = $('#username').val();
            let password = $('#password').val();

            $.ajax({
                method : 'post',
                url : '../action/proses.php',
                data : {
                    username : username,
                    password : password
                },
                success : function(data, status){
                    alert(data);
                    if(data == 'success'){
                        window.location.replace("../view/index.php");
                    } else {
                        $('.alert').html('login gagal')
                    }
                }
            })
        })
    </script>

</body>
</html>