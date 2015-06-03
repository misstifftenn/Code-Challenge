<?php 
//read file into a array
$text = file('inputdata.txt'); 
 
//counters
$wordCount = 0;
$rCount = 0;

//step through array
foreach ($text as $t)  {
	//count the number of words per line and add to counter
	$wordCount += str_word_count($t); 

	//get number of occurences of "R" or "r"
	foreach (count_chars($t, 1) as $key => $value) {		
		if (chr($key) === 'R' || chr($key) === 'r') {
			//if "R" or "r" is found add to counter
			$rCount += $value;
		}
	}
}

//display results
echo 'Total lines in file: ' . count($text) . '<br />';
echo "Total words in file: " . $wordCount . "<br />" ; 
echo "Total letter 'R's (including lowercase 'r'): " . $rCount; 
?>