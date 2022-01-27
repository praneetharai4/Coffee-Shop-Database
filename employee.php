
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
          <h1>Manage Employees</h1>
          <br /><br />

          <a href="add-emp.php" class="btn-branches">Add Employee</a>
          <br /><br /><br />
          <table class="tbl-prop">
              <tr>
                  <th>Emp ID</th>
                  <th>Br ID</th>
                  <th>Emp name</th>
                  <th>Phone No.</th>
                  <th>Address</th>
                  <th>E-mail</th>
                  <th>Position</th>
                  <th>Actions</th>
                
              </tr>
              <tr>
                  <td>1</td>
                  <td>50</td>
                  <td>Rose</td>
                  <td>9898989898</td>
                  <td>1st main,Vijayanagar</td>
                  <td>rose@gmail.com</td>
                  <td>Manager</td>
                  <td>
                      <a href="" class="btn-up">Update Employee</a>
                      <a href="" class="btn-del">Delete Employee</a>
                    </td>
              </tr>
          </table>
      </div> 
    </section>

    </body>
</html>