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
if (isset($_REQUEST["already_seen"]))
{
    validate();
    if(count($errors)>0)
    {
        show_error();
        show_form();
    }else{
        show_result();
    }
}
else{
    show_form();
}

function validate()
{
    global $errors;
    if($_REQUEST["name"] == "")
    {
        $errors[] = "<font color='red'>Введите имя</font>";
    }
}
function show_error()
{
    global $errors;
    foreach ($errors as $error)
    {
        echo $error . "<br>";
    }
}
function show_result()
{
    echo "Ваше имя: ";
    $text = strip_tags($_REQUEST["name"]);
    echo $text;
}
function show_form()
{
    echo "<form method='post' >";
    echo "Имя: ";
    echo "<input type='text' name='name'>";
    echo "<br>";
    echo "<input type='submit' value='ok'>";
    echo "<input type='hidden' name='already_seen'>";
    echo "</form>";
}
?>
</body>
</html>
