<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Login</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/"/>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
            crossorigin="anonymous"
        /> 
        <link href="../styles/bootstrap.min.css" rel="stylesheet" />
    </head>

    <body>
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <h2 class="card-title text-center">Login as User</a></h2>
                            
                            <div class="navbar">
                                <a class="active" href="\Main\Login">Customer</a>
                                <a href="\Main\index">Admin</a>
                            </div>

                            <hr >
                                <div class="card-body py-md-4">
                                    <form _lpchecked="1" action='' method='post'>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password_input" placeholder="Password">
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <a href="\Main\userRegister">Register</a>
                                            <button name="login" type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>