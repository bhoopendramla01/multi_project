<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Product Page</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">
    <script src="<?php echo base_url() ?>/assets/js/bootstrap.js"></script>
</head>

<body>
    <form action="<?php echo base_url() ?>index.php/ProductController/storeProduct" method="post">
        <!-- <input type="hidden" name="refId" id="refId" value="<?php if(isset($_GET['refId']) != "") echo $_GET['refId']; else echo ''; ?>"> -->
        <div class="container mt-4">
            <div class="col-md-6 form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="<?php echo set_value('name'); ?>">
                <?php
                echo form_error("name");
                ?>
            </div>
            <div class="col-md-6 form-group">
                <label for="category">Category</label>
                <!-- <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="<?php //echo set_value('name'); ?>"> -->
                <select name="category" id="category" class="form-control">
                    <option value="">Select Category</option>
                    <?php foreach($categories as $category) { ?>
                    <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                    <?php } ?>
                </select>
                <?php
                echo form_error("category");
                ?>
            </div>
            <div class="col-md-6 form-group">
                <label for="qty">Qty</label>
                <input class="form-control" type="number" name="qty" id="qty" placeholder="Qty" value="<?php echo set_value('qty'); ?>">
                <!-- <select name="qty" id="qty" class="form-control">
                    <option value="KG">Kilo gram</option>
                    <option value="LT">Litre</option>
                    <option value="PEACE">Peace</option>
                </select> -->
                <?php
                echo form_error("qty");
                ?>
            </div>
            <div class="col-md-6 form-group">
                <label for="price">Price</label>
                <input class="form-control" type="number" name="price" id="price" placeholder="Price" value="<?php echo set_value('price'); ?>">
                <?php
                echo form_error("price");
                ?>
            </div>
            <div class="col-md-6 form-group">
                <label for="price_ctgr">Price Category</label>
                <!-- <input class="form-control" type="text" name="address" id="address" placeholder="Address" value="<?php //echo set_value('address'); ?>"> -->
                <select name="price_ctgr" id="price_ctgr" class="form-control">
                    <option value="KG">Kilo gram</option>
                    <option value="LT">Litre</option>
                    <option value="PEACE">Peace</option>
                </select>
                <?php
                echo form_error("price_ctgr");
                ?>
            </div>
            <div class="col-md-6 form-group">
                <label for="image">Image</label>
                <input class="form-control" type="file" name="image" id="image" placeholder="Image" accept="image/*" value="<?php echo set_value('image'); ?>">
                <?php
                echo form_error("image");
                ?>
            </div>
            <div class="col-md-6 form-group">
                <button class="btn btn-primary btn-sm" type="submit">Add Product</button>
            </div>
        </div>
    </form>
</body>

</html>