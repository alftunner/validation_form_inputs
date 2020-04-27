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
if(isset($_REQUEST["already_show"]))
{
    validate();
    if(count($errors)>0)
    {
        show_errors();
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
    if(strcmp($_REQUEST["Number"], strval(intval($_REQUEST["Number"]))))
    {
        $errors[] = "<font color='red'>Введите натуральное число</font>";
    }
}
function show_errors()
{
    global $errors;
    foreach ($errors as $error)
    {
        echo $error . "<br>";
    }
}
function show_result()
{
    echo "Вы ввели натуральное число {$_REQUEST["Number"]}";
}
function show_form()
{
    echo "<form method='post'>";
    echo "Введите натуральное число: ";
    echo "<br>";
    echo "<input type='text' name='Number'>";
    echo "<br>";
    echo "<input type='submit' value='OK'>";
    echo "<input type='hidden' name='already_show'>";
    echo "</form>";
}
?>

</body>
</html>
