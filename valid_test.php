<?php
header("Content-type:text/html;charset=utf-8");
include './common/core.php';
include './lib/validate.class.php';

$valid = new Validate();


$valid->setValidate("344d",true,"","不可以为空");
$valid->setValidate("fdsfsfd",true,"Email","请填写正确的EMAIL");
$valid->validate();
