<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1><center>Edit Product</center></h1>
        <div class="col-md-6 offset-md-3">
            <form action="<?php echo site_url('product/update');?>" method="post">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="product_name" value="<?php echo $product_name;?>" placeholder="Product Name"></br>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="product_price" value="<?php echo $product_price;?>" placeholder="Price"></br>
                </div>
                <input type="hidden" name="product_id" value="<?php echo $product_id?>">
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>