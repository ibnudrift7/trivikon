<?php 

date_default_timezone_set('Asia/Jakarta');
$target = mktime(0, 0, 0, 4, 10, 2020) ; 
$today = time() ; 
$difference =($target-$today) ; 
$days =(int) ($difference/86400) ; 
print "Remaining $days days"; 
?> 