<?php

/*
$str = 'Aren't you tired?';

echo addslashes($str);
//Output: Arent\'t you tired?

$str .= chr(27);
//Adds a '\' at the end of the string


$chunk = chunk_split('123456789', 3, ':');
echo $chunk;
//Output: 123:456:789:


$charcount = 'Hello';


foreach(count_chars($charcount, 1) as $i => $chars) {
	echo $chars . 'instances of ' . chr($i) . \n;
}
*/

/*Output: 
1 instances of H
1 instances of e
2 instances of l
1 instances of o
*/

/*
$words = 'Some words.';
echo $words;
//output: Some words.
*/

/*
$shoppinglist = 'milk, eggs, bread,';
$explodedlist = explode(',', $shoppinglist);

echo $explodedlist[0];
echo $explodedlist[1];
echo $explodedlist[2];
*/
/*
Output:
milk
eggs
bread
*/

/*
$array = array('milk', 'eggs', 'bread');
$shopping = implode(',', $array);

echo $shopping;
*/

/*
$hashstring = 'something';
$hashedstring = md5($hashstring);
echo $hashedstring

//output: 437b930db84b8079c2dd804a71936b5f
*/

/*
$stripstring = 'Some words with whitespace at the end     		';
$strippedstring = rtrim($stripstring);
echo $strippedstring;
//Output: "Some words with whitespace at the end"
*/

/*
$csv = array_map('str_getcsv', file('sample.csv'));
//Will parse CSV file into array
*/

/*
$paragraph = '<p>Some text</p>';
echo strip_tags($paragraph);
//Output: Some text
echo strip_tags($paragraph, '<p>');
//Output: <p>Some text</p>
*/

/*
$stringtosearch = 'He Fi Fo Fum';
$stringtosearchfor = 'Fi';

echo strpos($stringtosearch, $stringtosearchfor);
//Output: 3
*/

/*
$getthislength = 'Wow this is a long string, I wonder how many characters it is...';

echo strlen($getthislength);
//Output: 64
*/

?>