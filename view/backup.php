<?php 
    include('../function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include ('../link/style.php');
        include ('../link/icon.php');
    ?>
    
    <title>Product Management</title>
</head>
<body>
     <div class="container border border-5 p-4 d-flex justify-content-between mt-4">
        <h2>Recycle Bin</h2>
        <button id="open_add" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-trash-can"></i>  Empty Recycle Bin</button>
     </div>
     <br><br>
     <div class="container">
        <table class="table align-middle" style="table-layout: fixed;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php 
                backup_data();
            ?>
        </table>
     </div>
</body>
</html>