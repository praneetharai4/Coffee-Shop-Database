
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
          <h1>Manage Items</h1>
          <br /><br />

          <a href="add-item.php" class="btn-branches">Add Item</a>
          <br /><br /><br />
          <table class="tbl-prop">
              <tr>
                  <th>Item No.</th>
                  <th>Item name</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Actions</th>
              </tr>
              <tr>
                  <td>1</td>
                  <td>Brownie</td>
                  <td>10</td>
                  <td>50 Rs</td>
                  <td>
                      <a href="" class="btn-up">Update Item</a>
                      <a href="" class="btn-del">Delete Item</a>
                    </td>
              </tr>
          </table>
      </div> 
    </section>

    </body>
</html>