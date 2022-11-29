<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Product Detail</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'app\views\includes\userHeader.php'; ?>
        <?php include 'app\views\includes\error.php'; ?>

        <div class='container mb-4'>
            <h2 class="h1-responsive font-weight-bold text-center my-4"><?= $data['product']->product_name;?></h2>

            <div class="row mb-3">
                <div class="col">
                    <form class="form-floating">
                        <input type="text" class="form-control" name="product_id" placeholder="Product ID" value="<?= $data['product']->product_id;?>" readonly>
                        <label for="product_id">Product ID</label>
                    </form>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <form class="form-floating">
                        <input type="number" class="form-control" name="price" placeholder="Price" value="<?= $data['product']->price; ?>" readonly>
                        <label for="price">Price (CAD)</label>
                    </form>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <form class="form-floating">
                        <textarea class="form-control" name="description" placeholder="Description" style="height: 20em" readonly><?= $data['product']->description; ?></textarea>
                        <label for="description">Description</label>
                    </form>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <form class="form-floating">
                        <input type="text" class="form-control" name="category" placeholder="Category" value="<?= $data['category']->category_name; ?>" readonly>
                        <label for="category">Category</label>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col d-grid">
                    <a class="btn btn-dark w-2" href="/Product/index/" role="button">Back</a>
                </div>
                <div class="col d-grid">
                    <a href="/Product/addToCart/<?=$data['product']->product_id?>" class="btn btn-dark" role="button" >Add to Cart</a>
                </div>
                <div class="col d-grid">
                    <a href="/Product/addReview/<?=$data['product']->product_id?>" class="btn btn-dark" role="button" >Review</a>
                </div>
            </div>

            <hr/>
                
            <h3 class="h2-responsive font-weight-bold text-center my-4">Reviews</h3>

            <div class="row">
                <?php if($data['reviews'] != null) { 
                    foreach($data['reviews'] as $review) {
                        $user = new \app\models\User();
                        $user = $user->getByID($review->user_id);
                        echo "<figure class='text-center'>
                                <blockquote class='blockquote'>
                                <p>$review->comment</p>
                                </blockquote>
                                <figcaption class='blockquote-footer'>
                                $user->name, $review->rating/5
                                </figcaption>
                                </figure>";
                    }
                 } else { ?>
                    <p class="lead text-center">
                        There Are No Reviews Right Now
                    </p>
                <?php } ?>    
            </div>
            
        </div>
        
    </body>
</html>