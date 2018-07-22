<?php require_once('./config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Donar</title>
</head>
<body><center><div class="1"><form action="charge.php" method="post"><script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_live_YKOKeayCSvS8oqdRgMW5cvlR"
    data-amount="500"
    data-name="Donar $5"
    data-locale="auto"></script>
          <script type="text/javascript">
          	document.getElementsByClassName('stripe-button-el')[0].style.display = 'none';
          </script>
          <button type="submit" class="btn btn-outline-dark te">DONAR $5</button>
</form></div>
<div>
	<form action="charge.php" method="post"><script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_live_YKOKeayCSvS8oqdRgMW5cvlR"
    data-amount="1000"
    data-name="Donar $10"
    data-locale="auto"></script>
          <script type="text/javascript">
          	document.getElementsByClassName('stripe-button-el')[1].style.display = 'none';
          </script>
          <button type="submit" class="btn btn-outline-dark te">DONAR $10</button>
</div>
<div>
	<form action="charge.php" method="post"><script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_live_YKOKeayCSvS8oqdRgMW5cvlR"
    data-amount="1500"
    data-name="Donar $15"
    data-locale="auto"></script>
          <script type="text/javascript">
          	document.getElementsByClassName('stripe-button-el')[2].style.display = 'none';
          </script>
          <button type="submit" class="btn btn-outline-dark te">DONAR $15</button>
</div>
<div>
	<form action="charge.php" method="post"><script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_live_YKOKeayCSvS8oqdRgMW5cvlR"
    data-amount="2000"
    data-name="Donar $20"
    data-locale="auto"></script>
          <script type="text/javascript">
          	document.getElementsByClassName('stripe-button-el')[3].style.display = 'none';
          </script>
          <button type="submit" class="btn btn-outline-dark te">DONAR $20</button>
</div>
<div>
	<form action="charge.php" method="post"><script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_live_YKOKeayCSvS8oqdRgMW5cvlR"
    data-amount="2500"
    data-name="Donar $25"
    data-locale="auto"></script>
          <script type="text/javascript">
          	document.getElementsByClassName('stripe-button-el')[4].style.display = 'none';
          </script>
          <button type="submit" class="btn btn-outline-dark te">DONAR $25</button>
</div>
</body>
</html>