<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $bookingId = $_REQUEST['bookingId'];
  $organisationId = $_REQUEST['organisationId'];

  //var_dump($_REQUEST);
  //require 'BookingManager-one.php';
  //require 'BookingManager-two.php';
  require 'BookingManager-three.php'; 
}
?>
<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Hotel Booking</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
 <div class="container">
  <div class="row">
   <div class="col-3"></div>
   <div class="col-6 mt-5">
    <h1>Hotel Booking</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
     <div class="mb-3">
      <label for="bookingId" class="form-label">Booking Id</label>
      <input type="test" class="form-control" id="bookingId" name="bookingId">
     </div>
     <div class="mb-3">
      <label for="organisationId" class="form-label">Organisation Id</label>
      <input type="text" class="form-control" id="'organisationId" name="organisationId">
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php if(isset($booking)): ?>
    <div class="alert alert-primary" role="alert">
     Status: <?= $booking ?>
    </div>
    <?php endif; ?>
    <div class="col-3"></div>
   </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>