<?php
	require_once 'Controller/TourController.php';
    
?>
<!--addproduct starts -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>ABPL</title>
</head>
<body>
    
	<div class="center">
		<h1 align="center" font-family="cursive" font-color="green">আনন্দ ভ্রমন প্রাইভেট লিমিটেড</h1>

	<div class="card" >
        <div class="card-body">
    <h5 class="card-title" align="center">Book your destination here</h5>
        <form action="" method="POST" class="form-horizontal form-material">
       
    <div class="form-group forms">
      <label for="Enter your name" style="font-size:large;
      font-weight: bold">Name</label>
      <input type="text" name="user_name" class="form-control" id="exampleInputname" aria-describedby="nameHelp" placeholder="Enter name">
    </div>

    <div class="form-group forms">
      <label for="Enter your name" style="font-size:large;
      font-weight: bold">Phone no</label>
      <input type="tel" name="user_phn" class="form-control" id="exampleInputphn" aria-describedby="phnHelp" placeholder="Enter Phone no">
    </div>

    <div class="form-group forms">
      <label for="Email" style="font-size:large;
      font-weight: bold">Email</label>
      <input type="email" name="user_mail" class="form-control" id="exampleInputemail" aria-describedby="emailHelp" placeholder="Enter email">
    </div>

    <div class="form-group forms">
      <label for="Address" style="font-size:large;
      font-weight: bold">Address</label>
      <input type="text" name="user_address" class="form-control" id="exampleInputaddress" aria-describedby="addressHelp" placeholder="Enter address">
    </div>

    <div class="form-group forms">
      <label for="Date" style="font-size:large;
      font-weight: bold">Travelling Date</label>
      <input type="date" name="tour_date" class="form-control"  min="2021-11-28"  id="exampleInputdate" aria-describedby="dateHelp" placeholder="Select Travelling Date">
    </div>

    <div class="form-group forms">
      <label for="Date" style="font-size:large;
      font-weight: bold">Travelling Destination</label>
      <input type="text" name="destination" class="form-control" id="exampleInputdesti" aria-describedby="destiHelp" placeholder="Select Destination">
    </div>

    <div>
  <button class="btn btn-primary" name="book_tour" class="btn btn-success">Submit</button>
</div>

		</form>
	</div>
    </div>
    </div>
    </body>
</html>
    
