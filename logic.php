
<?php
    $conn = mysqli_connect("localhost", "root", "Mysqldb!2","phpcrud");

    if($conn){
        echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>
        Not able to establish Database connection</h3>";
    }

?>