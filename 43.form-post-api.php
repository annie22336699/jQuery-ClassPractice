<?php

$obj['使用者名稱']=$_POST['username'];
$obj['使用者email']=$_POST['useremail'];

echo json_encode($obj);
