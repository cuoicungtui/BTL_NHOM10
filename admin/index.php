<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/admin.css">
    <title>Document</title>
</head>

<body style="background-color: gray;">


    <div class="container my-container ">
        <img src="../Views/img/logo.png" class="rounded mx-auto d-block img_admin_login " alt="...">
        <h1 class="text-center">Login</h1>
        <Form action="../index.php?controller=admin&acction=login" method="POST" class="my-form">
            <div class="container">
                <div class="mb-4 ">                   
                    <input type="text" id="input_usename " class="form_input " name="usename" required placeholder="Username">
                </div>
                <div class="mb-4 ">
                    
                    <input type="password" id="input_password" class="form_input" name="password" required placeholder="Password">
                </div>
                <div class="mb-4">
                    
                    <?php 
                       if(isset($_GET['err'])){
                           $err = $_GET['err'];
                           if($err == "1"){
                                echo '<p style="color: #2adb16;" >Incorrect password</p>';
                           }else{
                                echo '<p style="color: #2adb16;" >Account does not exist</p>';
                           }
                       }
                    ?>
                </div>
                <div class="mb-4 btn_login ">
                    <input class="btn btn-primary" type="submit" value="Login" name="btn-admin-login">                   
                </div>
            </div>
        </Form>
        <style>
            input{
                width: 100%;
                height: 35px;
            }
        </style>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>


<!-- password_hash -->