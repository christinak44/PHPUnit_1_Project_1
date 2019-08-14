<!DOCTYPE html>
<?php $test = 'Font color and background apply?'; ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes<?php echo $test;?></title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href="css/normalize.css" rel="stylesheet"  />
  <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
  <div class="container">
    <div id="quote-box">
<?php include 'inc/functions.php';?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>
