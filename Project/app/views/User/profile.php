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
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" value="Username" readonly disabled>
                            <label for="username">Username</label>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="form-floating mb-3">
                            <?php echo "<input class=\"form-control\" type=\"text\" value='$_SESSION->name' readonly disabled>";?>
                            <label for="username">Name</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" value="Email" required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" value="Phone" required>
                            <label for="phone">Phone</label>
                        </div>
                    </div>
                </div>

                <div class="text-center text-md-right">
                    <button type="submit" class="btn btn-dark w-50" name="action">Edit</button>
                </div>

            </form>
        </div>

    </body>
</html>