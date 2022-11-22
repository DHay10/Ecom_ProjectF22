<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            if(isset($_GET['error'])){
        ?>
            <div class="alert alert-danger" role="alert">
                <?=$_GET['error']?>
            </div>
        <?php
            }
        ?>
        <?php
            if(isset($_GET['message'])){
        ?>
            <div class="alert alert-success" role="alert">
                <?=$_GET['message']?>
            </div>
        <?php
            }
        ?>

        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <h2 class="card-title text-center">Login as User</h2>
                            
                            <div class="navbar">
                                <a class="active" href="\User\index">Customer</a>
                                <a href="\Admin\login">Admin</a>
                            </div>

                            <hr >
                                <div class="card-body py-md-4">
                                    <form _lpchecked="1" action='' method='post'>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password_input" placeholder="Password" required>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <a href="\Main\index">Back</a>
                                            <a href="\User\register">Register</a>
                                            <button name="action" type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <style>
        @import url('https://fonts.googleapis.com/css?family=PT+Sans');

        body{
            background: #fff;
            font-family: 'PT Sans', sans-serif;
        }
        h2{
            padding-top: 1.5rem;
        }
        .card{
            border: 0.40rem solid #f8f9fa;
            top: 10%;
        }
        .form-control{
            background-color: #f8f9fa;
            padding: 20px;
            padding: 25px 15px;
            margin-bottom: 1.3rem;
        }

        .form-control:focus {
            color: #000000;
            background-color: #ffffff;
            border: 3px solid #da5767;
            outline: 0;
            box-shadow: none;
        }
        .btn{
            padding: 0.6rem 1.2rem;
            background: #50c2d1;
            border: 2px solid #50c2d1;
        }
        .btn-primary:hover {
            background-color: #00D100;
            border-color: #00D100;
            transition: .3s;
        }

        /* Style the navigation menu */
        .navbar {
            width: 100%;
            background-color: rgb(255, 255, 255);
            overflow: auto;
        }

        /* Navigation links */
        .navbar a {
            float: left;
            padding: 10px;
            color: black;
            text-decoration: none;
            font-size: 17px;
            width: 50%; /* Four equal-width links. If you have two links, use 50%, and 33.33% for three links, etc.. */
            text-align: center; /* If you want the text to be centered */
        }

        /* Add a background color on mouse-over */
        .navbar a:hover {
            background-color: rgb(240, 240, 240);
        }

        /* Style the current/active link */
        .navbar a.active {
            background-color: rgb(230, 230, 230);
        }

        /* Add responsiveness - on screens less than 500px, make the navigation links appear on top of each other, instead of next to each other */
        @media screen and (max-width: 500px) {
        .navbar a {
            float: none;
            display: block;
            width: 100%;
            text-align: left; /* If you want the text to be left-aligned on small screens */
        }
        }

    </style>
</html>