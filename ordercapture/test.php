<?php require_once("includes/session.php");?>
<?php require_once("includes/db_connection.php");?>
<?php require_once("includes/functions.php");?>


<?php
   
    //echo $order_id;
    if (isset($_POST['submit'])) {
     
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];

        $query_addProduct = "INSERT INTO add_products (product, cost, pharma) VALUES ('{$name}', '{$email}', '{$phone}')";
        $result_addProduct = mysqli_query($conn, $query_addProduct);
        confirm_query($result_addProduct);
    }

    $query_showProduct = "SELECT * FROM add_products ORDER BY id DESC";
    $result_showProduct = mysqli_query($conn, $query_showProduct);
    confirm_query($result_showProduct);
?>


<html>
<head>
  <body>
    

            <form role="form" method="post" action="test.php" >
                      <div class="box-body">
                        <div class="form-group col-lg-4">
                          <label for="cost">Name</label>
                          <input type="text" class="form-control"  name="name" required >
                        </div>
                        <div class="form-group col-lg-4">
                          <label for="product">Email</label>
                            <input type="text" class="form-control"  name="email" required >
                        </div>
                        <div class="form-group col-lg-4">
                          <label for="cost">Phone</label>
                          <input type="text" class="form-control"  name="phone" required >
                        </div>

                      <div class="form-group col-lg-4">
                        
                        <button type="submit" id="submit" name="submit" class="btn btn-block btn-success">submit</button>
                      </div>
                    </form>

<div class="box-body">
              <table border="1">
                <thead>
                <tr>
                  <th class="text-center">Name</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Phone</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        while ($productList = mysqli_fetch_assoc($result_showProduct)) { ?>
                            <tr>
                              <td><?php echo $productList['product']; ?></td>
                              <td><?php echo $productList['cost']; ?></td>
                              <td><?php echo $productList['pharma']; ?></td>
                             
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
              </table>
            </div>




  </body>
</head>
</html>









<?php
if (isset ($conn)){
  mysqli_close($conn);
}
?>