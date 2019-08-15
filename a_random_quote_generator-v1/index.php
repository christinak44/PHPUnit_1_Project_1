<!DOCTYPE html>
<?php include 'quote2.php';?>
<?php $test = 'Font color and background apply?'; ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="10">
  <title>Random Quotes<?php echo $test;?></title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href="css/normalize.css" rel="stylesheet"  />
  <link href="css/styles.css" rel="stylesheet" />
</head>
<body style= "background: <?php echo $randomColor; ?>">
  <div class="container">
    <div id="quote-box">
      <?php printQuote($quotes); ?>
    </div>

  </div>
</body>
</html>
