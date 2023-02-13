<?php
$fileName = "/Users/habiburrahman/PHP_Projects/Basic_PHP/PHP-basic/fileReadWrite/mytxtFile.txt";

/***
 * get current working directory or pwd in terminal
 * echo getcwd();
 * read only one line: $line = fgets($filePointer); then echo $line;
 */

$filePointer = fopen($fileName, 'r');

/***What does 'r', 'w', 'r+'....etc means?
 * 'r' means read the file
 * 'r+' means file will be open in read and write mode
 * 'w' means write on the file, and the new data will erase all the old data in the file
 * 'a' means write on the file and also keep the old data
 */

#read file
while ($line = fgets($filePointer)) {
    echo $line;
}

#write file

//$fp = fopen($fileName, "w");
// fwrite($fp, "New Planet\n");

$fp = fopen($fileName, "a");
fwrite($fp, "New Planet");




fclose($filePointer);
