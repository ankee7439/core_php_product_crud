<?php 
include 'header.php';
include 'config.php';

$id = $_GET['id'];

$show = "SELECT * FROM `products` WHERE id=$id";

$run = mysqli_query($conn, $show);

// Making  the data into associative array
$data = mysqli_fetch_assoc($run);



?>

<!-- CREATE READ UPDATE DELETE -->
<div class="container">
    <div class="row">
        <div class="data">
           
            <div class="form text-center mt-3 ">
          
                <h3 class="mb-3">Edit Product</h3>
                <form action="" method="post">
                <div class="input mb-2">
                    <input type="text" class="form-control" value="<?=$data['name']?>" name="name" placeholder="Enter the Product" required>
                    
                </div>
                 <div class="input mb-2">
                    <input type="text" class="form-control" value="<?=$data['details']?>" name="details" placeholder="Enter the Product details" required>
                    
                </div>
                <div class="input mb-2">
                    <input type="text" class="form-control" value="<?=$data['price']?>" name="price" placeholder="Enter the Product price" required>
                    
                </div>
                <button type="submit" name="update" class="btn btn-dark mt-3">Update Now</button>
                <a href="http://localhost/product/" class="btn btn-warning mt-3">Back</a>
                </form>


            </div>
        </div>
    </div>
</div>

<?php 
include 'footer.php';

    if(isset($_POST['update'])){
    $name = $_POST['name'];
    $details = $_POST['details'];
    $price = $_POST['price'];
    
    $update = "UPDATE `products` SET `name`='{$name}',`details`='{$details}',`price`='{$price}' WHERE id=$id";
    
    $fire_query = mysqli_query($conn, $update);
    
    if($fire_query)
    {
        header('Location http://localhost/product');
    }
    }
    

// make table with the name  'product'

// id (P_KEY $$ AI)
// name (varchar (255))
// details (varchar (255))
// price (varchar (255))


?> 