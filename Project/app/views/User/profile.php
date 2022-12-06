<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Your Profile</title>
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
            <h2 class="h1-responsive font-weight-bold text-center my-4">Your Profile</h2>

            <form id="userProfile-form" action="" method="post">
                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating">
                            <?php echo "<input class='form-control' type='text' name='username' value='$_SESSION[username]' readonly disabled>";?>
                            <label for="username">Username</label>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="form-floating">
                            <?php echo "<input class='form-control' name='name' type='text' value='$_SESSION[name]' readonly disabled>";?>
                            <label for="name">Name</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating">
                            <?php echo "<input class='form-control' name='email' type='email' value='$_SESSION[email]' required >";?>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="form-floating">
                        <?php echo "<input class='form-control' type='tel' name='phone' value='$_SESSION[phone]' minlength='10' maxlength='10' required >";?>
                            <label for="phone">Phone</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="text-center text-md-right">
                        <button type="submit" class="btn btn-dark w-50" name="action">Edit</button>
                    </div>
                </div>
            </form>

        
            
        </div>

        <div class="container mb-4">
            <h3 class="h2-responsive font-weight-bold text-center my-4">Options</h3>
            
            <div class="row mb-3">
                <div class="col d-grid">
                    <a class="btn btn-dark" href="/User/orders" role="button">Orders</a>
                </div>

                <div class="col d-grid">
                    <a class="btn btn-dark" href="/User/wishlist" role="button">Wishlist</a>
                </div>

                <div class="col d-grid">
                    <a class="btn btn-dark" href="/User/checkMessage" role="button">Messages</a>
                </div>
            </div>

        </div>

    </body>
</html>