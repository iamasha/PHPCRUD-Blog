<?php
    include 'logic.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>My blog with PHP an MySQL</title>
</head>
<body>
    <div class="container mt-5">
        <form action="" method="POST">
            <input type="text" name="title" placeholder="blog-title" class="form-control bg-dark text-white my-3 text-center">
            <textarea  name="content" class="form-contrl bg-dark text-white my-3"></textarea>
            <button name="new_post "class="btn btn-dark">Add Post</button>
        
        </form>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.ls"></script>
    <script src="https://cdn.jsdeliver.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
</html>