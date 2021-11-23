<?php require './header.php'; ?>

<?php

if(isset($_POST['saveProduct'])){
    $saveData = insertProductData($_POST);
}

?>

 <div class="container-fluid" >
     <div class="row">
         <div class="col-md-3 col-lg-3">
           <?php require './sidebar.php'; ?>
         </div>
         <div class="col-md-9 col-lg-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                     <li class="breadcrumb-item"><a href="products.php">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Products</li>
                </ol>
            </nav>
            <div class="container-header">
                <h3>Add A New Products</h3><hr />
            </div>

            <form method="POST">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Enter Product Title" required>
                </div>
                <div class="form-group">
                    <input type="url" autocomplete="off" name="image_url" class="form-control" placeholder="Enter Product Image Url" required>
                </div>
                <div class="form-group">
                    <input type="number" name="price" class="form-control" placeholder="Enter Product Price" required>
                </div>
                <div class="form-group">
                    <select class="form-control"  name="availability" required>
                        <option value="null">Select Availability</option>
                        <?php 
                            $availabilities = getAvailability();
                            foreach($availabilities as $availability){
                                ?>
                                <option value="<?php echo $availability['availability_status'] ?>"><?php echo $availability['availability_status'] ?></option>
                                <?php
                            }
                        
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control"  name="types" required>
                        <option value="null">Select Types</option>
                        <?php 
                            $types = getTypes();
                            foreach($types as $type){
                                ?>
                                <option value="<?php echo $type['typesName'] ?>"><?php echo $type['typesName'] ?></option>
                                <?php
                            }
                        
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control"  name="color" required>
                        <option value="null">Select Color</option>
                        <?php 
                            $colors = getColor();
                            foreach($colors as $color){
                                ?>
                                <option value="<?php echo $color['colorName'] ?>"><?php echo $color['colorName'] ?></option>
                                <?php
                            }
                        
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control"  name="features" required>
                        <option value="null">Select Features</option>
                        <?php 
                            $features = getSpecialFeatures();
                            foreach($features as $feature){
                                ?>
                                <option value="<?php echo $feature['feature'] ?>"><?php echo $feature['feature'] ?></option>
                                <?php
                            }
                        
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control"  name="interface" required>
                        <option value="null">Select Interface</option>
                        <?php 
                            $interfaces = getInterfaces();
                            foreach($interfaces as $interface){
                                ?>
                                <option value="<?php echo $interface['interfaceName'] ?>"><?php echo $interface['interfaceName'] ?></option>
                                <?php
                            }
                        
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="saveProduct">Save</button>
                </div>
            </form>
         </div>
     </div>
   
</div>

<?php require './footer.php'; ?>
