<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log In</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'app\views\includes\userHeader.php'; ?>
        <?php include 'app\views\includes\error.php'; ?>

        <div class='container mb-4'>
            <h2 class="h1-responsive font-weight-bold text-center my-4">Log In</h2>
            
            <form id="userLogin-form" name="userLogin-form" action="login" method="post">
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="username" placeholder="" required>
                            <label for="username">Username</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password" placeholder="" required>
                            <label for="password">Password</label>
                        </div>
                    </div>
                </div>
                    
                <div class="text-center text-md-right">
                    <button name="action" type="submit" class="btn btn-dark w-50">Sign In</button>
                </div>

                <div class="text-center text-md-right">
                    <small class="text-center mb-4">Don't Have an Account Yet? <a href="/User/register">Register</a></small>
                </div>
            </form>
    
            <div class="text-center text-md-right p-5">
                <a class="btn btn-dark" href="/Admin/login" role="button">Admin Login</a>
            </div>
        </div>
    </body>
</html>