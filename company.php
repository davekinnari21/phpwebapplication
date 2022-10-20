<?php
 include('navbar.php'); 

if (isset($_POST["submit"])) {
    require_once ('config.php');
    $name = $_POST["name"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $country = $_POST["country"];

    // Check if name has been entered
    if (!$_POST["name"]) {
        echo "<font color='red'>Name field is empty.</font><br/>";
    }
    $qry = "INSERT INTO company ( name, address, city, state, zip, country) VALUES ('$name','$address', '$city', '$state', '$zip', '$country')";
    $result = mysqli_query($mysqli, $qry);
    if($result){
        echo "<font color='green'>Company added successfully.</font><br/>";
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
<title>Add Company</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="m-4">
    <form action="company.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="Company Name">Company Name *</label>
            <input type="text" class="form-control" name="name" size=20 placeholder="Company Name" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="address">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Company Address" >
        </div>
        
          <div class="mb-3">
            <label class="form-label" for="city">City</label>
            <input type="text" class="form-control" name="city" placeholder="City" >
        </div>
        
           <div class="mb-3">
            <label class="form-label" for="state">State</label>
            <input type="text" class="form-control" name="state" placeholder="State" >
        </div>
           <div class="mb-3">
            <label class="form-label" for="zip">Zip</label>
            <input type="text" class="form-control" name="zip" placeholder="Zip" >
        </div>
        
          <div class="mb-3">
            <label class="form-label" for="country">Country</label>
            <input type="text" class="form-control" name="country" placeholder="Country" >
        </div>
       
       
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </form>

</form>
</div>
</body>
</html>