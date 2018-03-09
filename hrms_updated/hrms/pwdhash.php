
<?php

$a= password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

echo password_verify (  "rasmuslerdorf", $a);
?>

