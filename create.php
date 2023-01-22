<?php 
include 'header.php';
include 'config.php';

if(isset($_POST['save'])){
   $name = $_POST['name'];
   $details = $_POST['details'];
   $price = $_POST['price'];

//    echo $name;
//    echo "<br>";
//    echo $details;
//    echo "<br>";
//    echo $price;
$sql = "INSERT INTO `products`( `name`, `details`, `price`) VALUES ('{$name}','$details','$price')";

$qurey = mysqli_query($conn, $sql);

if($qurey){
    header('Location: http://localhost/product');
}






}


?>

<!-- CREATE READ UPDATE DELETE -->
<div class="container">
    <div class="row">
        <div class="data">
           
            <div class="form text-center mt-3 ">
          
                <h3 class="mb-3">Add New Product</h3>
                <form action="" method="post">
                <div class="input mb-2">
                    <input type="text" class="form-control" name="name" placeholder="Enter the Product" required>
                    
                </div>
                 <div class="input mb-2">
                    <input type="text" class="form-control" name="details" placeholder="Enter the Product details" required>
                    
                </div>
                <div class="input mb-2">
                    <input type="text" class="form-control" name="price" placeholder="Enter the Product price" required>
                    
                </div>
                <button type="submit" name="save" class="btn btn-dark mt-3">Add Now</button>
                <a href="http://localhost/product/" class="btn btn-warning mt-3">Back</a>
                </form>


            </div>
        </div>
    </div>
</div>






<?php 
include 'footer.php';




?> 