<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <style>
           
            .row{
                margin-left:15%;
                margin-right:15%;
            }
        </style>
    </head>

    <body>
    <?php include 'app\views\includes\adminHeader.php'; ?>
        <div class="container mt-5">
        <h2 class="h1-responsive font-weight-bold text-center">Add a Product to the Catalog</h2>
            <form action='' method='post' enctype='multipart/form-data'>
                <div class="row mb-3">
                    <label for=""product_name" class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-10">
                        <input type="text"  class="form-control" id="product_name" name="product_name" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="product_price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" min="0.01" step="0.01" id="price" name="price" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="product_cate" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <select id="category_id" class="form-control" name="category_id" required>
                            <!-- Find which category to add -->
                            <option value="0">test1</option>
                            <option value="1">test2</option>
                            <option value="2">test3</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="product_desc" class="col-sm-2 col-form-label">Description:</label>
                    <div class="col-sm-10">
                        <textarea type="text" id="description" name="description" rows="2" class="form-control md-textarea" required></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2 col-form-label">
                    
                    <label class="col-sm-2 col-form-label" for="gridCheck">
                        is Featured:
                    </label>
                    <div class="col-sm-10">
                        <input class="form-check-input" name="is_featured" type="checkbox" id="is_featured">
                    </div>
                        

                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Product Image:</label>
                    <div class="col-sm-10">
                        <input type="file" name="product_image" id="product_image"/>
                        <img id='product_img_preview' src='' style="max-width:200px;max-height:200px" />
                    </div>
                </div>
            
                <div class="text-center text-md-right">
                    <button name="action" type="submit" class="btn btn-primary">Add Product</button>   
                    <button name="cancel" type="submit" class="btn btn-primary">Cancel</button>
                </div>
            </form>

            <script>
                product_image.onchange = evt => {
                const [file] = product_image.files
                if (file) {
                    product_img_preview.src = URL.createObjectURL(file)
                    }
                }   
            </script>
        </div>
    </body>
</html>