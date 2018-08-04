<?php
include("database_connection.php");
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `child` WHERE CONCAT(`fname`, `lname`, `gender`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `child`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "password", "familytree");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
            $(document).ready(function() {
                $('#myTable').DataTable({

                });
            });

        </script>
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
    </head>
    <body onload="myFunction()">
        <h2>Search Registered Data</h2>
        <form action="search.php" method="post">
            <input type="text" id="myInput" name="valueToSearch" placeholder="Search Register Data"><br><br>
            <input type="submit" name="search" value="Search" class="btn btn-success btn-lg"><br><br>
            
            <table id="myTable">
                <tr class="header">
                  <th style="width:20%;">Registry Number</th>
    <th style="width:60%;">Name</th>
    <th style="width:40%;">Gender</th>
  <th style="width:40%;"></th>
  </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['registrynum'];?></td>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['gender'];?></td>
                   <button type='button' class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button>
                    <td><a href="#view<?php echo $registrynum;?>" data-toggle="modal" class="btn btn-info btn-lg" ><button type='button' class='btn btn-info btn-sm'>View Details</button></a></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        <div id="view<?php echo $registrynum; ?>" class="modal fade" role="dialog">
            <form method="post" class="form-horizontal" role="form">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Item</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="edit_item_id" value="<?php echo $registrynum; ?>">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="item_name">First Name:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="item_name" name="item_name" value="<?php echo $fname; ?>" placeholder="Item Name" required autofocus>
                                </div>
                                <label class="control-label col-sm-2" for="item_code">Middle Name:</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly class="form-control" id="item_code" name="item_code" value="<?php echo $mname; ?>" placeholder="Item Code" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="item_description">Last Name:</label>
                                <div class="col-sm-4">
                                    <textarea cclass="form-control" id="item_description" name="item_description" placeholder="Description" required style="width: 100%;"><?php echo $lname; ?></textarea>
                                </div>
                                <label class="control-label col-sm-2" for="item_category">Gender:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="item_category" name="item_category" value="<?php echo $gender; ?>" placeholder="Category" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="update_item"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>