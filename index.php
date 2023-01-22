<?php 
include 'header.php';
include 'config.php';

?>

<!-- CREATE READ UPDATE DELETE -->
<div class="container">
    <div class="row">
        <div class="data">
           
            <div class="form text-center mt-3 ">
            <a href="http://localhost/product/create.php" class="btn btn-primary mt-3 mb-3">Add New</a>
                <h3 class="mb-3">Show Your Product</h3>
                <div class="data">
                <table class="table table-dark">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Product Name</th>
                        <th>Product Details</th>
                        <th>Product Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql2 = "SELECT * FROM products";
                    $query2 = mysqli_query($conn, $sql2);
                    
                    while ($row = mysqli_fetch_assoc($query2)) {
                       
                   ?> 
                <tr>
                    <td><?php echo  $row['id']; ?> </td>
                    <!-- sort form of echo -->
                    <td><?=$row['name'] ?></td>
                    <td><?=$row['details'] ?></td>
                    <td><?=$row['price'] ?></td>
                    
               <td><a href="http://localhost/product/edit.php/?id=<?=$row['id']?>" class="btn btn-info">Edit</a></td>
              <td><a href="http://localhost/product/delete.php/?id=<?=$row['id']?>" class="btn btn-danger">Delete</a></td>
                  
                    
                </tr>
                <?php
                }
                    
                ?>
                </tbody>

                </table>


                </div>
               

            </div>
        </div>
    </div>
</div>






<?php 
include 'footer.php';

  
    
    





?> 