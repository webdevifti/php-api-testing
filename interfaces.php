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
                     <li class="breadcrumb-item active">Interfaces</li>
                    <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                </ol>
            </nav>
            <div class="container-header">
                <h3>Interfaces</h3><hr />
            </div>
            <table class="table table-striped table-bordered" style="width:100%" id="MyTable">
        <thead>
           <tr>
           <th>Sl</th>
            <th>Interface</th>
            <th>Status</th>
            <th>Created At</th>
           </tr>
        </thead>
        <tbody>
            <?php 

                $data = getInterfaces();
                $sl = 0;
                foreach($data as $item){ $sl++;
                    ?>
                     <tr>
                         <td><?php echo $sl; ?></td>
                        <td><?php echo $item['interfaceName'] ?></td>
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
            <th>Types</th>
            <th>Status</th>
            <th>Created At</th>
            </tr>
        </tfoot>
    </table>
         </div>
     </div>
   
</div>

<?php require './footer.php'; ?>
