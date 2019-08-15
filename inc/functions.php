<?php
/* Auto refresh used in place of html code for load button; stackoverflow.com forum for the assist
 <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>*/
/*Create the Multidimensional array of quote elements and name it quotes
Each inner array element should be an associative array
*/
//'type' element added describes category or style of quote
//Homer Simpson quotes from screenrant.com
$quotes[] = array(
    'quote' => 'It takes two to lie; One to lie, and one to listen.',
    'source' => 'Homer Simpson',
    'type' => 'Real Talk ala Mr. Simpson',
    'citation' => 'The Simpsons, Season 3, Ep 20',
    'year' => 1992

);
$quotes[] = array(
  'quote' => "Facts are meaningless. You could use facts to prove anything that's even remotely true.",
  'source' => 'Homer Simpson',
  'type' => 'Real Talk ala Mr. Simpson',
  'citation' => 'The Simpsons, Season 9, EP 8',
  'year' => 1997

);
$quotes[] = array(
  'quote' => "I am so smart! I am so smart! S-M-R-T! I mean S-M-A-R-T!",
  'source' => 'Homer Simpson',
  'type' => 'Motivation ala Mr. Simpson',
  'citation' => 'The Simpsons, Season 5, Ep 3',
  'year' => 1993

);
$quotes[] = array(
  'quote' => "D'oh!",
  'source' => 'Homer Simpson',
  'type' => 'Classic Mr. Simpson',
  'citation' => 'The Simpsons',
  'year' => ''

);
//simpsons.fandom.com/wiki
$quotes[] = array(
  'quote' => "All my life I've had one dream. To achieve my many goals. Mr. Burns has never given me a thumbs up or a 'way to be' or a 'you go girl!'",
  'source' => 'Homer Simpson',
  'type' => 'Relatable Mr. Simpson',
  'citation' => 'The Simpsons, Season 14, EP 15',
  'year' => 2003
);

//select random quote and it's components from array
function getRandomQuote($quotes){
  global $quotes;
return $quotes[array_rand($quotes)];
}
//print random quote to page
function printQuote($quoteOnDeck){
global $quotes;
$quoteOnDeck = getRandomQuote($quotes);
$DisplayQuote = '';
//if and elseif statements used to detect year and citation
  if($quoteOnDeck['citation'] == Null){
$DisplayQuote = '<p class="quote">' . $quoteOnDeck['quote'] . '</p>';
$DisplayQuote .= '<p class="source">' . $quoteOnDeck['source'] .
  '<span class="type">' . $quoteOnDeck['type'] . '</span>' .
  '<span class="year">' . $quoteOnDeck['year'] . '</span>
</p>';
  }elseif($quoteOnDeck['year'] == Null){
$DisplayQuote = '<p class="quote">' . $quoteOnDeck['quote'] . '</p>';
$DisplayQuote .= '<p class="source">' . $quoteOnDeck['source'] .
   '<span class="type">' . $quoteOnDeck['type'] . '</span>' .
   '<span class="citation">' . $quoteOnDeck['citation'] . '</span>
</p>';
  }elseif($quoteOnDeck['year'] && ['citation'] == Null){
$DisplayQuote = '<p class="quote">' . $quoteOnDeck['quote'] . '</p>';
$DisplayQuote .= '<p class="source">' . $quoteOnDeck['source'] .
  '<span class="type">' . $quoteOnDeck['type'] . '</span>' .  '</p>';
  }else {
$DisplayQuote = '<p class="quote">' . $quoteOnDeck['quote'] .'</p>';
$DisplayQuote .= '<p class="source">' . $quoteOnDeck['source'] .
  '<span class="type">' . $quoteOnDeck['type'] . '</span>' .
  '<span class="citation">' . $quoteOnDeck['citation'] . '</span>' .
  '<span class="year">' . $quoteOnDeck['year'] . '</span>
</p>';
  }
echo $DisplayQuote;
}

//apply random color on refresh
$colorsArray = array('#3371FF','#062361', '#FF5233', '#64FF33', '#FF33A5');

$randomColor = $colorsArray[array_rand($colorsArray)];
 return $randomColor;

?>
