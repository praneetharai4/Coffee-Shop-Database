
<html>
    <?php include('../config/constants.php');?>
    
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
          <h1>Manage Suppliers</h1>
          <br /><br />

          <a href="add-supplier.php" class="btn-branches">Add Supplier</a>
          <br /><br /><br />
          <table class="tbl-prop">
              <tr>
                  <th>Sup Id</th>
                  <th>Sup Name</th>
                  <th>Sup Item</th>
                  <th>Phone No.</th>
                  <th>Actions</th>
                
              </tr>
              <tr>
                  <td>200</td>
                  <td>Jack</td>
                  <td>Brownie</td>
                  <td>8989898989</td>
                  <td>
                      <a href="" class="btn-up">Update Branch</a>
                      <a href="" class="btn-del">Delete Branch</a>
                    </td>
              </tr>
          </table>
      </div> 
    </section>

    </body>
</html>