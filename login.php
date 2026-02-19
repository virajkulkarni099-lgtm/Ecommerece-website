<?php 

SESSION_START();

if(isset($_SESSION['auth']))
{
    if($_SESSION['auth']==1)
    {
        header("location:index.php");
    }
}


    if (isset($_POST['submit'])) 
    {
        $id = $_POST['username'];
        $pass = ($_POST['password']);

        if($id=='viraj' && $pass=='viraj123')
        {
            $_SESSION['auth']=1;
            header("location:index.php");
        }

        else
        {
            echo "<script>alert('Invalid Username or Password!!! Please try again later.');</script>";
        }

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>IMS Login - Inventory Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
</head>

<body id="loginBody">
    <di class="container">
        <div class="loginHeader">
            <h1>IMS</h1>
            <p>Inventory Management System</p>
        </div>
        <div class="loginBody">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="loginInputsContainer">
                    <input type="text" class="form-control" placeholder="username" name="username">
                </div>
                <div class="loginInputsContainer">
                    <input type="password" class="form-control" placeholder="password" name="password">
                </div>
                <div class="loginButtonContainer">
                    <input type="submit" value="Login" class="btn btn-primary" name="submit">
                </div>
                
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
 
</body>
</html>