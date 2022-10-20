<html>
<head>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>
</head>
<body>
<div class="container">
<?php include('navbar.php'); ?>
<h2>Company</h2>
<table id="companytable" class="display" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Country</th>
        </tr>
    </thead>
</table>
</div>

<h2>Employee</h2>
<table id="employeetable" class="display" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Company Name</th>
            <th>HireDate</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Title</th>
        </tr>
    </thead>
</table>
</div>

</body>
<script type="text/javascript">
  $(document).ready(function() {
      $('#companytable').dataTable({
        "processing": true,
        "ajax": "fetchrecord.php",
        "columns": [
              //{ data: 'companyid'},
              { data: 'name' },
              { data: 'address' },
              { data: 'city' },
              { data: 'state' },
              { data: 'zip' },
              { data: 'country' }
            ]
      });  

      $('#employeetable').dataTable({
        "processing": true,
        "ajax": "fetchemployee.php",
        "columns": [
              { data: 'firstname' },
              { data: 'lastname' },
              { data: 'companyname' },
              { data: 'hiredate' },
              { data: 'email' },
              { data: 'phone' },
              { data: 'title' }
              
            ]
      });  
  });
</script>
</html>