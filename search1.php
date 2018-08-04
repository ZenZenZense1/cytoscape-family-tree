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
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "familytree");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
 $result = mysqli_query($con,"SELECT * FROM child");

?>

<!DOCTYPE html>
<html>
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <form action="" method="post">
            <input type="text" id="myInput" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Search" class="btn btn-success btn-lg"><br><br>
          </form>  
            <table id="myTable">
                <tr class="header">
                  <th style="width:20%;">Registry Number</th>
    <th style="width:60%;">Name</th>
    <th style="width:40%;">Gender</th>
  <th style="width:40%;"></th>
  </tr>

      <!-- populate table from mysql database -->
                <?php while($details = mysqli_fetch_object($result)){
                  ?>
                <tr>
                    <td><?php echo $details->registrynum;?></td>
                    <td><?php echo $details->fname;?></td>
                    <td><?php echo $details->gender;?></td>
                    <td><button class = "btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" id="<?php echo $details->registrynum; ?>" onlick="showDetails();">View Details</button>
                </tr>
                <?php } ?>
            </table>
       <!-- Modal -->
<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                  &times;
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               Details
            </h4>
         </div>
         
         <div class = "modal-body">
             <p>First Name: <span id="fname"></span></p>
      <p>Middle Name: <span id="mname"></span></p>
      <p>Last Name: <span id="lname"></span></p>
      <p>Gender: <span id="gender"></span></p>
      <p>Mother's Name: <span id="mfname"></span></p>
      <p>Father's Name: <span id="ffname"></span></p>
         </div>
         
       
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  
</div><!-- /.modal -->
<script>
  function showDetails() {
    var  registrynum = button.id;
    $.ajax({
      url:"details.php",
      method:"GET",
      data:{"registrynum": registrynum},
      success: function(response){
         var details = JSON.parse(response);
         $("#fname").text(details.fname);
      }
    })
  }
</script>
</body>
</html>
