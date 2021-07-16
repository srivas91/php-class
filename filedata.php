<?php
// file_put_contents('D:\\tech.txt',"hello world");
// $fp=fopen('D:\\newtech.txt','w');
// fwrite($fp,"have a great day");
// fclose($fp);

// $content=file_get_contents('D:\\newtech.txt');
// $fp=fopen('D:\\tech.txt','r');
// $content=fread($fp,filesize('D:\\tech.txt'));
// fclose($fp);
// echo $content;

// rename('D:\\newtech.txt','D:\\tech.txt');
// mkdir('D:\\covid');  // create a directory
// rmdir('D:\\covid');  // remove a directory
// unlink('D:\\tech.txt');  // delete a file

copy('D:\\tech.txt','D:\\mytech.txt');
?>