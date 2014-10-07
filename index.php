<?php
// test only #6
// b1948c34668d1e816e2d8b51936951342ac36468

$p1 = file_get_contents('payload1.txt');
$p2 = file_get_contents('payload2.txt');

print hash_hmac('sha1', $p1, 'karlitoswaydevel');
print '<br>';
print hash_hmac('sha1', $p2, 'karlitoswaydevel');
