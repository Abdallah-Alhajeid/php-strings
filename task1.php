<?php 

// ----------------------------------------------Task 1 A-------------------------------------------------
// transform a string all uppercase letters.


// $str = "Ahmad Had A Big Toy";
// $str = strtoupper($str);
// echo $str;


// ----------------------------------------------Task 1 B------------------------------------------------
// transform a string all lowercase letters.


// $str = "Ahmad Had A Big Toy";
// $str = strtolower($str);
// echo $str;


// ----------------------------------------------Task 1 C-------------------------------------------------
// make a string's first character uppercase. 


// $str = "ahmad had A big toy";
// $str = ucfirst($str);
// echo $str;


// ----------------------------------------------Task 1 D-------------------------------------------------
// make a string's first character of all the words uppercase.



// $str = "ahmad had A big toy";
// $str = ucwords($str);
// echo $str;



// ----------------------------------------------Task 2-------------------------------------------------
// split the following string. Sample string : '082307' Expected Output : 08:23:07



// $str1= '082307'; 
// echo substr(chunk_split($str1, 2, ':'), 0, -1);



// ----------------------------------------------Task 3-------------------------------------------------
// check whether a string contains a specific string? Sample string : 'The quick brown fox jumps over the lazy dog.' Check whether the said string contains the string 'jumps'.



// $text = 'The quick brown fox jumps over the lazy dog.';
// if (strpos ($text, 'jumps') !== false){
//     echo 'true';
// } else {
//     echo 'fasle';
// }




// ----------------------------------------------Task 4-------------------------------------------------
//  extract the file name from the following string. Sample String : 'www.example.com/public_html/index.php' Expected Output : 'index.php'



// $path = 'www.example.com/public_html/index.php';
// $file_name = substr(strrchr($path, "/"), 1);
// echo $file_name; 



// ----------------------------------------------Task 5-------------------------------------------------
// extract the user name from the following email ID. Sample String : 'Orange@example.com' Expected Output : 'Orange'



// $mailid  = 'orange@example.com';
// $user = strstr($mailid, '@', true);
// echo $user;



// ----------------------------------------------Task 6-------------------------------------------------
//  get the last three characters of a string. Sample String : 'Orange@example.com' Expected Output : 'com'

// $str1 = 'Orange@example.com';
// echo substr($str1, -3);




// ----------------------------------------------Task 7-------------------------------------------------
// generate simple random passwords [do not use rand() function] from a given string. Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz' Note : Password length may be 6, 7, 8 etc. Expected OutPut: 254ABCc


// function pass_gen($chars) 
// {
//  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz#$%&*+,-./@[=<>^_`{|}~';
//  return substr(str_shuffle($data), 0, $chars);
// }
// echo pass_gen(12);



// ----------------------------------------------Task 8-------------------------------------------------
// replace the first 'the' of the following string with 'That'. Sample date : 'the quick brown fox jumps over the lazy dog.' Expected Result : That quick brown fox jumps over the lazy dog.

// $str = 'the quick brown fox jumps over the lazy dog.';
// echo preg_replace('/the/', 'That', $str, 1); 



// ----------------------------------------------Task 9-------------------------------------------------
// find the first character that is different between two strings. String1 : 'football' String2 : 'footboll' Expected Result : First difference between two strings at position 5: "a" vs "o"

// $str1 = 'football';
// $str2 = 'footboll';
// $str_pos = strspn($str1 ^ $str2, "\0");
// printf('First difference between two strings at position %d: "%s" vs "%s"',
// $str_pos, $str1[$str_pos], $str2[$str_pos]);



// ----------------------------------------------Task 10-------------------------------------------------
// put a string in an array. Sample strings : "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky."; Expected Result (using var_dump()) : array(4) { [0]=> string(30) "Twinkle, twinkle, little star," [1]=> string(26) "How I wonder what you are." [2]=> string(27) "Up above the world so high," [3]=> string(26) "Like a diamond in the sky." }

// $str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
// $arra1 = explode("<br>", $str);
// var_dump($arra1);



// ----------------------------------------------Task 11-------------------------------------------------
// print the next character of a specific character. Sample character : 'a' Expected Output : 'b' Sample character : 'z' Expected Output : 'a'

// $cha = 'a';
// $next_cha = ++$cha; 
// if (strlen($next_cha) > 1) 
// {
//  $next_cha = $next_cha[0];
//  }
// echo $next_cha;


// ----------------------------------------------Task 12-------------------------------------------------
// remove a part of a string from the beginning. Sample string : 'orange@example.com' Expected Output : 'example.com'

// $sub_string = 'orange@';
// $str = 'orange@example.com';
// if (substr($str, 0, strlen($sub_string)) == $sub_string) 
// {
//  $str = substr($str, strlen($sub_string));
// }
// echo $str;





// ----------------------------------------------Task 13-------------------------------------------------
// insert a string at the specified position in a given string. Original String : 'The brown fox' Insert 'quick' between 'The' and 'brown'. Expected Output : 'The quick brown fox'


// $original_string = 'The brown fox';
// $string_to_insert ='quick';
// $insert_pos = 4;
// $new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
// echo $new_string;


// ----------------------------------------------Task 14-------------------------------------------------
// get the first word of a sentence. Original String : 'The quick brown fox' Expected Output : 'The'


// $fw = 'The quick brown fox';
// $arr1 = explode(' ',trim($fw));
// echo $arr1[0];

// ----------------------------------------------Task 15-------------------------------------------------
//  remove all leading zeroes from a string. Original String : '000547023.24' Expected Output : '547023.24'


// $x = '000547023.24';
// $str1 = ltrim($x, '0');
// echo $str1;



// ----------------------------------------------Task 16-------------------------------------------------
//  remove part of a string. Original String : 'The quick brown fox jumps over the lazy dog' Remove 'fox' from the above string. Expected Output : 'The quick brown jumps over the lazy dog'

// $my_str = 'The quick brown fox jumps over the lazy dog';
// echo str_replace("fox", " ", $my_str);




// ----------------------------------------------Task 17-------------------------------------------------
//  remove trailing slash from a string. Original String : 'The quick brown fox jumps over the lazy dog///' Expected Output : 'The quick brown fox jumps over the lazy dog'

// $my_str = 'The quick brown fox jumps over the lazy dog///';
// echo rtrim($my_str, '/');



// ----------------------------------------------Task 18-------------------------------------------------
//  get the characters after the last '/' in an url. Sample URL : 'http://www.example.com/5478631' Expected Output : '5478631'

// $my_url = 'http://www.example.com/5478631';
// echo substr($my_url, strrpos($my_url, '/' )+1);



// ----------------------------------------------Task 19-------------------------------------------------
//  replace Special characters from the following string. Sample String : '"\1+2/32:2-3/43' Expected Output : '1 2 3 2 2 3 4 3'

// $my_str = '\"\1+2/3*2:2-3/4*3';
// echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str);

// ----------------------------------------------Task 20-------------------------------------------------
// select first 5 words from the following string. Sample String : 'The quick brown fox jumps over the lazy dog' Expected Output : 'The quick brown fox jumps'

// $my_string = 'The quick brown fox jumps over the lazy dog';
// echo implode(' ', array_slice(explode(' ', $my_string), 0, 5));



// ----------------------------------------------Task 21-------------------------------------------------
// remove comma(s) from the following numeric string. Sample String : '2,543.12' Expected Output : 2543.12

// $str1 = "2,543.12";
// $x = str_replace( ',', '', $str1);
// if( is_numeric($x))
//   {
//   echo $x;
//   }



// ----------------------------------------------Task 22-------------------------------------------------
// print letters from 'a' to 'z'.


// for ($x = ord('a'); $x <= ord('z'); $x++)
// echo chr($x);


