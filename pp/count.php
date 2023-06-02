<?php
 echo "<h1> REFRESH PAGE </h1>" ;
 $file = 'count.txt' ;
 $count = file_get_contents($file) ;
 file_put_contents($file, $count+1);
 echo "The number of users visited : ".$count ;
?>