<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
        body{
            color: beige;
            background-color: #004911;
            /* background-image: url("../src/assets/bgbody.jpg"); */
            background-repeat: no-repeat, repeat;
            background-size: cover;
        }
        .box{
            
            padding: 20px;
            margin-top: 200px;
            width: 60%;
            margin-left: auto;
            margin-right: auto;
            border-radius: 5px;
        }
        .box form button{
            background-color: #004911;
        }
        .box form div p a{
            color: #28a745;
        }
        .alert-danger{
            background-color: #ba2330;
            color: #ffffff;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <div>
        <div class="container">
            <div class="box">
                <h4 class="text-center">LOGIN</h4>
                <div class="alert" >

                </div>
                <form method="post">
                    <!-- <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username"  placeholder="input your username" required>
                    </div> -->
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="example@email.com" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="input your password" required>
                        <input type="checkbox" onclick="showPass()">Show Password
                    </div>
                    <div>
                        <p>Belum punya akun?<a href="register.php">  register</a></p>
                    </div>
                    <button type="submit" id="login" class="btn">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        //fungsi show password
        function showPass() {
            let show = document.getElementById("password");
            if (show.type === "password") {
                show.type = "text";
            } else {
                show.type = "password";
            }
        }

        //get data login
        $('#login').click(function(e){
            e.preventDefault()
            let email = $('#email').val();
            let password = $('#password').val();

            $.ajax({
                method : 'post',
                url : '../action/proses.php',
                data : {
                    email : email,
                    password : password
                },
                success : function(data, status){
                    // alert(data);
                    if(data == 'success'){
                        window.location.replace("index.php");
                    } else {
                        let alert = `<div class="alert alert-danger" role="alert" > Gagal login
                    
                    </div>  `;
                        $('.alert').html(alert)
                    }
                }
            })
        })
    </script>

</body>
</html>