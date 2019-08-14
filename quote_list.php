// My thoughts are to have all quote data in one area to keep "main" php file cleaner, dropping in thiis 'quote list' where needed (inside function(?) maybe)

<?php
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
$quotes = array($quote1, $quote2, $quote3, $quote4, $quote5);
?>
