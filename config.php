<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_live_RTZiI5wu4CJBZd39e8QiRcit",
  "publishable_key" => "pk_live_YKOKeayCSvS8oqdRgMW5cvlR"
);

\Stripe\Stripe::setApiKey($stripe['sk_live_RTZiI5wu4CJBZd39e8QiRcit']);
?>