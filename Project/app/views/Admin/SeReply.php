<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <title>Service Request</title>
    </head>

    <body>

        <?php include 'app\views\includes\adminHeader.php'; ?>
        <div class="container mt-5">
            <h2 class="h1-responsive font-weight-bold text-center">Reply</h2>
            
            <form action='' method='post'>
                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text"  class="form-control" id="username" name="username" value="<?= $data['user']->username;?>" readonly>
                            <label for="username">Username</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" min="0.01" step="0.01" id="subject" name="subject" value="<?= $data['request']->subject;?>" readonly>
                            <label for="subject">Subject</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control" style="height: 20em" readonly><?= $data['request']->content;?></textarea>
                            <label for="message">Content</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <textarea type="text" id="content" name="content" rows="6" class="form-control md-textarea" style="height: 20em" placeholder="Text"></textarea>
                            <label for="product_desc" class="col-sm-2 col-form-label">Reply</label>
                        </div>
                    </div>
                </div>

                <div class="row text-center mb-3">
                    <div class="col">
                        <a class="btn btn-danger w-100" href='/Admin/serviceRequests/'>Back</a>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-dark w-100" name="action">Reply</button>
                    </div>
                </div>

            </form>
        </div>
    </body>

</html>