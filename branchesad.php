
<html>
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
          <h1>Manage Branches</h1>
          <br /><br />
          <br><br><br>
          <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
          ?>
          <br>
          <a href="add-branch.php" class="btn-branches">Add Branch</a>
          <br /><br /><br />
          <table class="tbl-prop">
              <tr>
                  <th>Branch ID</th>
                  <th>Branch name</th>
                  <th>Location</th>
                  <th>Phone No.</th>
                  <th>Facilities</th>
                  <th>Actions</th>
                
              </tr>

              <tr>
                  <td>100</td>
                  <td>Main Branch</td>
                  <td>Jayanagar</td>
                  <td>8989898989</td>
                  <td>Free wi-fi</td>
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