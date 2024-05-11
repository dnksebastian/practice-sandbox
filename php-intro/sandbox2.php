<?php

// file system

// $quotes = readfile('sample.txt');
// echo $quotes;


$file = 'sample.txt';

if (file_exists($file)) {
    // read file...
    echo readfile($file) . '<br />';

    // copy file
    copy($file, 'quotes.txt');

    // absolute path
    echo realpath($file) . '<br />';

    // file size
    echo filesize($file) . '<br />';

    // rename file
    rename($file, 'test.txt');


} else {
    echo 'file does not exist';
}

// make directory
// mkdir('quotes');


// ALTERNATIVE WAY:

// opening a file for reading

// $handle = fopen($file, 'r'); // 'r' parameter means open for read
// $handle = fopen($file, 'r+'); // 'r' parameter means open for read and write
// $handle = fopen($file, 'a+'); // 'r' parameter means append at the end of file

// read the file

// echo fread($handle, filesize($file));
// echo fread($handle, 100);

// read a single line

// echo fgets($handle);
// echo fgets($handle); // reads another line because of a pointer

// read a single char

// echo fgetc($handle);
// echo fgetc($handle);

// write to a file
fwrite($handle, '\nEverything popular is wrong');

fclose($handle);

// delete a file
// unlink($file);

?>