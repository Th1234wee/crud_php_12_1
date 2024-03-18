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
        <h2>Product's Informati​​​on​</h2>
        <button id="open_add" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-plus"></i>  Add Product</button>
     </div>
     <div class="container mt-4">
         <button class="btn btn-outline-secondary"><a href="backup.php">Recycle Bin</a></button>
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
                show_product();
            ?>
        </table>
     </div>
    <?php 
        include('modal.php');
    ?>
</body>
</html>
<script>
    $(document).ready(function(){
        $("#open_add").click(function(){
            $("#accept_update").hide();
            $("#accept_add").show();
        })
        $("body").on("click","#open_edit",function(){
            $("#accept_add").hide();
            $("#accept_update").show();

            var id       = $(this).parents('tr').find('td').eq(0).text();
            var name     = $(this).parents('tr').find('td').eq(1).text();
            var category = $(this).parents('tr').find('td').eq(2).text();
            var price    = $(this).parents('tr').find('td').eq(3).text();

            $("#id").val(id);
            $("#name").val(name);
            $("#category").val(category);
            $("#price").val(price);
        })
    })
</script>