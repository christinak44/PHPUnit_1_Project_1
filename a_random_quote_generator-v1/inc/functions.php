


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
//randomly select array key and associated quote w/ elements
function getRandomQuote($quotes){
  global $quotes;
return $quotes[array_rand($quotes)];
}
//display appointed 'quote on deck'. If statements will ensure blank elements are suppressed.;
function printQuote($quoteOnDeck){
global $quotes;
$quoteOnDeck = getRandomQuote($quotes);
$DisplayQuote = '';
  if($quoteOnDeck['citation'] == Null){
$DisplayQuote = '<p class="quote">' . $quoteOnDeck['quote'] . '</p>';
$DisplayQuote .= '<p class="source">' . $quoteOnDeck['source'] .
   '<span class="year">' . $quoteOnDeck['year'] . '</span>
</p>';
  }elseif($quoteOnDeck['year'] == Null){
$DisplayQuote = '<p class="quote">' . $quoteOnDeck['quote'] . '</p>';
$DisplayQuote .= '<p class="source">' . $quoteOnDeck['source'] .
   '<span class="citation">' . $quoteOnDeck['citation'] . '</span>
</p>';
  }elseif($quoteOnDeck['year'] && ['citation'] == Null){
$DisplayQuote = '<p class="quote">' . $quoteOnDeck['quote'] . '</p>';
$DisplayQuote .= '<p class="source">' . $quoteOnDeck['source'] . '</p>';
  }else {
$DisplayQuote = '<p class="quote">' . $quoteOnDeck['quote'] .'</p>';
$DisplayQuote .= '<p class="source">' . $quoteOnDeck['source'] .
  '<span class="citation">' . $quoteOnDeck['citation'] . '</span>' .
  '<span class="year">' . $quoteOnDeck['year'] . '</span>
</p>';
  }
echo $DisplayQuote;
}
printQuote($quotes);
