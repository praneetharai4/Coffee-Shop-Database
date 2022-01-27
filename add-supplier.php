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
          <h1>Add Supplier</h1>
          <br />
          <form action="" method="POST">
              <table class="tbl-br">
                  <tr>
                      <td>Supplier ID</td>
                      <td><input type="number" name="sup_id" placeholder="Enter Supplier Id" style="height:40px;width:280px;font-size:18pt"></td>
                  </tr>
                  <tr>
                      <td>Supplier Name</td>
                      <td><input type="text" name="sup_name" placeholder="Enter Supplier Name" style="height:40px;width:280px;font-size:18pt"></td>
                  </tr>
                  <tr>
                      <td>Phone No</td>
                      <td><input type="tel" name="pno" placeholder="Enter PhoneNo" style="height:40px;width:280px;font-size:18pt"></td>
                  </tr>
                  <tr>
                      <td colspan="2">
                          <input type="submit" name="submit" value="Add Supplier" class="btn-up" style="height:40px;width:280px;font-size:18pt">
                      </td>
                  </tr>
              </table>
          </form>
      </div>
    </section>
    <?php
       
        if(isset($_POST['submit']))
        {
            $supplier_id = $_POST['sup_id'];
            $sup_name = $_POST['sup_name'];
            $pno = $_POST['pno'];


            $sql1="INSERT INTO supplier SET
                    Sup_id='$sup_id',
                    Sup_name='$sup_name',
                    Phone_no='$pno',
                    ";

            
            $conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));
            $db_select=mysqli_select_db($conn,'coffee') or die(mysqli_error($conn));
            $res1=mysqli_query($conn,$sql1) or die(mysqli_error($conn));

            
        }
    ?>