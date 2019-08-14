


<?php

/*Create the Multidimensional array of quote elements and name it quotes
Each inner array element should be an associative array
My thoughts are to have all quote data in one area to keep "main" php file cleaner, dropping in this 'quote list' where needed (inside function(?) maybe)*/
//Homer Simpson quotes from screenrant.com
$quotes[] = array(
    'quote' => 'It takes two to lie; One to lie, and one to listen.',
    'source' => 'Homer Simpson',
    'citation' => 'The Simpsons, Season 3, Ep 20',
    'year' => 1992

);
$quotes[] = array(
  'quote' => "Facts are meaningless. You could use facts to prove anything that's even remotely true.",
  'source' => 'Homer Simpson',
  'citation' => 'The Simpsons, Season 9, EP 8',
  'year' => 1997

);
$quotes[] = array(
  'quote' => "I am so smart! I am so smart! S-M-R-T! I mean S-M-A-R-T!",
  'source' => 'Homer Simpson',
  'citation' => 'The Simpsons, Season 5, Ep 3',
  'year' => 1993

);
$quotes[] = array(
  'quote' => "D'oh!",
  'source' => 'Homer Simpson',
  'citation' => 'The Simpsons',
  'year' => ''

);
//simpsons.fandom.com/wiki
$quotes[] = array(
  'quote' => "All my life I've had one dream. To achieve my many goals. Mr. Burns has never given me a thumbs up or a 'way to be' or a 'you go girl!'",
  'source' => 'Homer Simpson',
  'citation' => 'The Simpsons, Season 14, EP 15',
  'year' => 2003
);
//$defaultQuote = $quotes[0];
//$randQuote = $quotes;
$randKey = rand(1,4);

//echo $randKey;

function getRandomQuote($quotes){
  global $randKey;
  global $quotes;
  //global $defaultQuote;
    // echo $randKey;
     switch($randKey){

       case "0":
   print_r ($quotes[0]);

     break;
       case "1":
   print_r ($quotes[1]);

     break;
       case "2":
   print_r ($quotes[2]);

     break;
       case "3":
   print_r ($quotes[3]);

     break;
       case "4":
   print_r ($quotes[4]);

     break;
     }

}
$func = 'getRandomQuote';
$quoteOnDeck = $func($quotes);

function printQuote($quoteOnDeck){
global $quoteOnDeck;

 $DisplayQuote = '';
  if($quoteOnDeck['citation'] == Null){
$DisplayQuote =
"<p class="quote"> $quoteOnDeck['quote'] </p>"
"<p class="source"> $quoteOnDeck['source']
   <span class="year"> $quoteOnDeck['year'] </span>
</p>";
  }elseif($quoteOnDeck['year'] == Null){
$DisplayQuote =
"<p class="quote"> $quoteOnDeck['quote'] </p>"
"<p class="source"> $quoteOnDeck['source']
   <span class="citation"> $quoteOnDeck['citation'] </span>
</p>";
  }elseif($quoteOnDeck['year'] && ['citation'] == Null){
$DisplayQuote =
"<p class="quote"> [quote here] </p>"
"<p class="source"> [source here]</p>";
  }else {
$DisplayQuote =
"<p class="quote"> $quoteOnDeck['quote'] </p>"
"<p class="source"> $quoteOnDeck['source']
  <span class="citation"> $quoteOnDeck['citation'] </span>
  <span class="year"> $quoteOnDeck['year'] </span>
</p>";
  }
}
?>



// Create the getRandomQuuote function and name it getRandomQuote



// Create the printQuote funtion and name it printQuote
