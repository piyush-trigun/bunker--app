<?php
function validate($val){
$val = htmlentities($val);
$val = trim($val);
return $val;
}
?>