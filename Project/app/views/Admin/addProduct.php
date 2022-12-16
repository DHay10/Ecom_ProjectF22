<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'app\views\includes\adminHeader.php'; ?>
        <div class="container mt-5">
            <h2 class="h1-responsive font-weight-bold text-center">Add a Product to the Catalog</h2>

            <form action='' method='post' enctype='multipart/form-data'>
                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text"  class="form-control" id="product_name" name="product_name" placeholder="Product Name" required>
                            <label for=""product_name">Product Name</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" min="0.01" step="0.01" id="price" name="price" placeholder="Price"required>
                            <label for="product_price">Price</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <select id="category_id" class="form-control" name="category_id" required>
                                <option selected value disabled>Select A Category</option>
                                <?php foreach ($data as $category) {   ?>
                                <option value="<?= $category->category_id?>"><?=$category->category_name?></option>
                                <?php } ?>
                            </select>
                            <label for="product_cate">Category</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <textarea type="text" id="description" name="description" style="height: 20em" class="form-control md-textarea" placeholder="Description" required></textarea>
                            <label for="product_desc">Description</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" name="is_featured" type="checkbox" id="is_featured">
                            <label>
                                Is Featured?
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="product_image" class="form-label">Product Image</label>
                        <input class="form-control" type="file" name="product_image" id="product_image"/>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <img id='product_img_preview' src='' style="max-width:200px;max-height:200px" />
                    </div>
                </div>

                <div class="row text-center mb-3">
                    <div class="col">
                        <a class="btn btn-danger w-100" href='/Admin/productList'>Back</a>
                    </div>
                    <div class="col">
                        <button name="action" type="submit" class="btn btn-dark w-100">Add Product</button>   
                    </div>
                </div>
            </form>
            
        </div>
    </body>

    <script>
        product_image.onchange = evt => {
        const [file] = product_image.files
        if (file) {
            product_img_preview.src = URL.createObjectURL(file)
            }
        }   
    </script>
</html>