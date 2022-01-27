
<?php
    session_start();

?>
    
<head>
        <title>Coffee Shop Website</title>
        <link rel="stylesheet" href="stylead.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet"> 
    </head>

    <body>
    <section class="header">
      <nav>
          <p>Around the Corner Admin Panel</p>
          <div class="nav-links">
                <ul>
                    <li><a href="branchesad.php">BRANCHES</a></li>
                    <li><a href="employee.php">EMPLOYEE</a></li>
                    <li><a href="itemad.php">ITEMS</a></li>
                    <li><a href="supplier.php">SUPPLIER</a></li>
              </ul>
          </div>
      </nav>
      <div class="cont">
          <h1>Add Item</h1>
          <br />
          <form action="" method="POST">
              <table class="tbl-br">
                  <tr>
                      <td>Item no.:</td>
                      <td><input type="number" name="item_no" placeholder="Enter Item no." style="height:40px;width:280px;font-size:18pt"></td>
                  </tr>
                  <tr>
                      <td>Item Name:</td>
                      <td><input type="text" name="item_name" placeholder="Enter Item Name" style="height:40px;width:280px;font-size:18pt"></td>
                  </tr>
                  <tr>
                      <td>Quantity</td>
                      <td><input type="number" name="qty" placeholder="Enter Quantity" style="height:40px;width:280px;font-size:18pt"></td>
                  </tr>
                  <tr>
                      <td>Price</td>
                      <td><input type="number" name="price" placeholder="Enter Price" style="height:40px;width:280px;font-size:18pt"></td>
                  </tr>
                  <tr>
                      <td colspan="2">
                          <input type="submit" name="submit" value="Add Item" class="btn-up" style="height:40px;width:280px;font-size:18pt">
                      </td>
                  </tr>
              </table>
          </form>
      </div>
    </section>
    <?php
       
        if(isset($_POST['submit']))
        {
            $item_no = $_POST['item_no'];
            $item_name = $_POST['item_name'];
            $qty = $_POST['qty'];
            $price = $_POST['price'];


            $sql1="INSERT INTO items SET
                    Item_no='$item_no',
                    Item_name='$item_name',
                    Qty='$qty',
                    Price='$price',
                    ";

            
            $conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));
            $db_select=mysqli_select_db($conn,'coffee') or die(mysqli_error($conn));
            $res1=mysqli_query($conn,$sql1) or die(mysqli_error($conn));

            
        }
    ?>