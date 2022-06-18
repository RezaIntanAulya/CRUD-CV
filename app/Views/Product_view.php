<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Product List</title>
    <!-- load bootstrap css file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1><center>Product List</center></h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th width="200">Action</th>
                </tr>
            </thead>
            <?php
            $count = 0;
            foreach ($product as $data) :
                $count++;
            ?>
            <tr>
                <th scope="data"><?php echo $count;?></th>
                <td><?php echo $data['product_name'];?></td>
                <td><?php echo number_format($data['product_price']);?></td>
                <td>
                    <a href="<?php echo site_url('product/get_edit/'.$data['product_id']);?>" class="btn btn-sm btn-info">Update</a>
                    <a href="<?php echo site_url('product/delete/'.$data['product_id']);?>" class="btn btn-sm btn-danger">Delete</a>
                    <td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>