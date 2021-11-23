<?php require './header.php'; ?>
 <div class="container-fluid" >
     <div class="row">
         <div class="col-md-3 col-lg-3">
           <?php require './sidebar.php'; ?>
         </div>
         <div class="col-md-9 col-lg-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                     <li class="breadcrumb-item active">Products</li>
                    <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                </ol>
            </nav>
            <div class="container-header">
                <h3>Products</h3><hr />
                <a href="add-product.php" class="btn btn-primary btn-sm">Add a new products</a>
                <br />
                <br />
            </div>
            <table class="table table-striped table-bordered table-responsive" style="width:100%" id="MyTable">
        <thead>
           <tr>
            <th>Sl</th>
            <th>Title</th>
            <th>Image</th>
            <th>Price</th>
            <th>Availability</th>
            <th>Types</th>
            <th>Interface</th>
            <th>Color</th>
            <th>Special Feature</th>
            <th>Status</th>
            <th>Created At</th>
           </tr>
        </thead>
        <tbody>
            <?php 

                $data = getProducts();
                $sl = 0;
                foreach($data as $item){ $sl++;
                    ?>
                     <tr>
                        <td><?php echo $sl; ?></td>
                        <td><?php echo $item['title'] ?></td>
                        <td><img src="<?php echo $item['image'] ?>" alt="" width="100px" height="100px"></td>
                        <td><?php echo $item['price'] ?></td>
                        <td><?php echo $item['availability'] ?></td>
                        <td><?php echo $item['types'] ?></td>
                        <td><?php echo $item['interface'] ?></td>
                        <td><?php echo $item['color'] ?></td>
                        <td><?php echo $item['special_features'] ?></td>
                        <td>    
                            <?php 
                                if($item['status'] == 1){
                                    echo "Active";
                                } else{
                                    echo "Inacitve";
                                }
                            ?></td>
                        <td><?php echo date('d-M-Y', strtotime( $item['created_at'])) ?></td>
                    </tr>
                    <?php
                }
            ?>
          
        </tbody>
        <tfoot>
            <tr>
                <th>Sl</th>
                <th>Title</th>
                <th>Image</th>
                <th>Price</th>
                <th>Availability</th>
                <th>Types</th>
                <th>Interface</th>
                <th>Color</th>
                <th>Special Feature</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
        </tfoot>
    </table>
         </div>
     </div>
   
</div>

<?php require './footer.php'; ?>
