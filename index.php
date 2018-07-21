<?php require_once('./config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><center>
	<div class="1">
<form action="charge.php" method="post">
	<script type="text/javascript" src="script.js"></script>
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Donación"
          data-amount="500"
          data-locale="auto"></script>
          <script type="text/javascript">
          	document.getElementsByClassName('stripe-button-el')[0].style.display = 'none';
          </script>
          <button type="submit" class="btn btn-outline-dark te">DONAR $5</button>
</form></div>

<div>	
<form action="charge.php" method="post">
	<script type="text/javascript" src="script.js"></script>
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Donación"
          data-amount="1000"
          data-locale="auto"></script>
          <script type="text/javascript">
          	document.getElementsByClassName('stripe-button-el')[1].style.display = 'none';
          </script>
          <button type="submit" class="btn btn-outline-dark te">DONAR $10</button>
</div>

<div>
	<form action="charge.php" method="post">
	<script type="text/javascript" src="script.js"></script>
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Donación"
          data-amount="1500"
          data-locale="auto"></script><script type="text/javascript">
          	document.getElementsByClassName('stripe-button-el')[2].style.display = 'none';
          </script>
          <button type="submit" class="btn btn-outline-dark tee">DONAR $15</button>
</div>
<div>
	<form action="charge.php" method="post">
	<script type="text/javascript" src="script.js"></script>
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Donación"
          data-amount="1500"
          data-locale="auto"></script><script type="text/javascript">
          	document.getElementsByClassName('stripe-button-el')[3].style.display = 'none';
          </script>
          <button type="submit" class="btn btn-outline-dark tee" >DONAR $20</button>
</div>
<div>
	<form action="charge.php" method="post">
	<script type="text/javascript" src="script.js"></script>
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Donación"
          data-amount="1500"
          data-locale="auto"></script><script type="text/javascript">
          	document.getElementsByClassName('stripe-button-el')[4].style.display = 'none';
          </script>
          <button type="submit" class="btn btn-outline-dark tee">DONAR $25</button>
</div>
</body>
</html>