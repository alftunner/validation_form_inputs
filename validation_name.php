<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$errors = array();
if($_REQUEST["already_seen"])
{
    validate_data();
    if(count($errors)>0)
    {
        display_errors();
        display_form();
    }
    else{
        process_data();
    }
}else{
    display_form();
}

function validate_data()
{
    global $errors;
    if($_REQUEST["Name"]=="")
    {
        $errors[] = "<font color='red'>Поле обязательное для заполения</font>";
    }
}
function display_errors()
{
    global $errors;
    foreach ($errors as $err)
    {
        echo $err . "<br>";
    }
}
function process_data()
{
    echo "Ваше имя {$_REQUEST["Name"]}";
}
function display_form()
{
    echo "<form method='post'>";
    echo "Введите ваше имя: ";
    echo "<BR>";
    echo "<input type='text' name='Name'>";
    echo "<br>";
    echo "<br>";
    echo "<input type='submit' value='Send'>";
    echo "<input type='hidden' name='already_seen' value='data'>";
    echo "</form>";
}
?>
</body>
</html>
