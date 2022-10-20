<?php
 include('navbar.php'); 
if (isset($_POST["submit"])) {
    require_once ('config.php');
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $hiredate = $_POST["hiredate"];
    $dt = date("Y-m-d",strtotime($hiredate));
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $title = $_POST["title"];
    $companyid = $_POST["companyid"];

    // Check if name has been entered
    if (!$_POST["firstname"] || !$_POST["lastname"]) {
        echo "<font color='red'>Name field is empty.</font><br/>";
    }
    $qry = "INSERT INTO employee ( firstname, lastname,  hiredate, email, phone, title ,companyid) VALUES ('$firstname','$lastname',  '$dt', '$email', '$phone', '$title', $companyid)";
    
    $result = mysqli_query($mysqli, $qry);
    if($result){
        echo "<font color='green'>Employee added successfully.</font><br/>";
    }else{
        echo "<font color='red'>Error in insertion.</font><br/>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Employee</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#hiredate" ).datepicker();
  } );
  </script>

</head>
<body>

<div class="m-4">
    <form action="employee.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="First Name">First Name *</label>
            <input type="text" class="form-control" name="firstname" size=20 placeholder="First Name" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="Last Name">Last Name *</label>
            <input type="text" class="form-control" name="lastname" size=20 placeholder="Last Name" required>
        </div>
                             
           <div class="mb-3">
            <label class="form-label" for="hiredate">HireDate</label>
            <input type="text" class="form-control" name="hiredate" id="hiredate" placeholder="MM/DD/YYYY" >
        </div>
           <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="email" >
        </div>
        
          <div class="mb-3">
            <label class="form-label" for="phone">Phone(xxx-xx-xxx)</label>
            <input class="form-control" type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" >
        </div>

        <div class="mb-3">
            <label class="form-label" for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="title" >
        </div>

        <div class="mb-3">
            <label class="form-label" for="companyid">Companyid *</label>
            <input type="text" class="form-control" name="companyid" placeholder="companyid" required >
        </div>
              
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </form>

</form>
</div>
</body>
</html>