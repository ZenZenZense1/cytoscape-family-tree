<?php
session_start();
include("db.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>E-Market</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
	</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
	<<div class="panel-body">
						<h1>Birth Certificate Application Form </h1>
						<hr>
						<div class="row">
							<div class="form-group">
								<label for="registry_number" class="col-sm-2 control-label">Registry Number</label>
								<div class="col-md-8">
								<input type="text" class="form-control" name="registry_num" required />
							</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="form-group">
								<label for="b_province" class="col-sm-2 control-label">Province</label>
								<div class="col-md-8">
								<input type="text" class="form-control" name="province" required />
							</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="form-group">
								<label for="b_city" class="col-sm-2 control-label">City/Municipality</label>
								<div class="col-md-8">
								<input type="text" class="form-control" name="city" required />
							</div>
							</div>
						</div>
						<br>
						<h4>Name of the Child </h4>
						<hr>
						<div class="row">
							<div class="form-group">
								<label for="b_f_name" class="col-sm-2 control-label">First Name</label>
								<div class="col-md-8">
								<input type="text" class="form-control" name="c_fname" required />
							</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="form-group">
								<label for="b_m_name" class="col-sm-2 control-label">Middle Name</label>
								<div class="col-md-8">
								<input type="text" class="form-control" name="c_mname" required />
							</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="form-group">
								<label for="b_l_name" class="col-sm-2 control-label">Last Name</label>
								<div class="col-md-8">
								<input type="text" class="form-control" name="c_lname" required />
							</div>
							</div>
						</div>
						<br>
						<h4>Birth Details</h4>
						<hr>
						<div class="row">
							<div class="form-group">
								<label for="b_gender" class="col-sm-2 control-label">Gender</label>
								<div class="col-md-8">
								<select name="gender" class="required form-control">
									<option value="">- Select -</option>
              						<option value="male">Male</option>
              						<option value="female">Female</option>
            					</select>
							</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="form-group">
								<label for="b_bday" class="col-sm-2 control-label">BirthDay</label>
								<div class="col-sm-3 col-md-3">
      <select name="birthday[month]" class="required event_date_element form-control" required="" wtx-context="5E327C12-C255-4F6E-B58A-09CD9D1043F5">
        <option value="">- Month -</option>
                <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May" dt="">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
      </select>
    </div>

    <div class="col-sm-3 col-md-3">
      <select name="birthday[day]" class="required form-control event_date_element" required="" wtx-context="5E72F560-7961-4BDE-8C39-F6DC6C986367">
        <option value="">- Day -</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
    </div>

    <div class="col-sm-3 col-md-3">
      <select name="birthday[year]" class="required form-control event_date_element" required="" wtx-context="11A4F83A-6499-4883-B978-C330746708C5">
        <option value="">- Year -</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
              </select>
    </div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="form-group">
								<label for="c_province" class="col-sm-2 control-label">Birth Place Province</label>
								<div class="col-md-8">
								<input type="text" class="form-control" name="birth_place_province" required />
							</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="form-group">
								<label for="c_city" class="col-sm-2 control-label">Birth Place City</label>
								<div class="col-md-8">
								<input type="text" class="form-control" name="birth_place_city" required />
							</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="form-group">
								<label for="c_type" class="col-sm-2 control-label">Type of Birth</label>
								<div class="col-md-8">
								<input type="text" class="form-control" name="typeofBirth" required />
							</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="form-group">
								<label for="c_order" class="col-sm-2 control-label">Birth Order(first,second, etc.)</label>
								<div class="col-md-8">
								<input type="text" class="form-control" name="birthOrder" required />
							</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
							&nbsp;<input type="submit" name="index" value="Submit" class="btn btn-success btn-lg"/>&nbsp;<br />
							</div>
						</div>
</form>    
</body>
</html>
<?php


if(isset($_POST['index'])){

    //getting text data
   $registry_number = $_POST['registry_num'];
   $province = $_POST['province'];
   $city = $_POST['city'];
   $c_fname = $_POST['c_fname'];
   $c_mname = $_POST['c_mname'];
   $c_lname = $_POST['c_lname'];
   $gender = $_POST['gender'];
   $bday;
   $birth_place_province = $_POST['birth_place_province'];
   $birth_place_city = $_POST['birth_place_city'];
   $typeofBirth = $_POST['typeofBirth'];
   $birthOrder = $_POST['birthOrder'];

   
   $insert_child = "insert into child (registrynum,province,municipality,fname,mname,lname,gender,bday,birthplaceProvince,birthplaceCity,typeofBirth,birthOrder) 
   					values ('$registry_number','$province','$city','$c_fname','$c_mname','$c_lname','$gender','','$birth_place_province','$birth_place_city'
   					,'$typeofBirth','$birthOrder')";
   
   $sql = mysqli_query($con,$insert_child);


   if($sql){
   echo"<script>alert('Successfully Registered')</script>";
   }


}


?>















































