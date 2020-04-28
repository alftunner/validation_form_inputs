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
<h1>Используем регулярку для проверки строкового поля</h1>
<?php
$errors = array();
    if(isset($_REQUEST["already_seen"]))
    {
        validate();
        if(count($errors)>0)
        {
            show_error();
            show_form();
        }
        else{
            show_result();
        }
    }else{
        show_form();
    }

    function validate()
    {
        global $errors;
        if(!preg_match("/php/i", $_REQUEST["Text"]))
            $errors[] = "<font color='red'>Слова PHP в строке нет</font>";
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
        echo "Ok there is PHP in this string";
    }
    function show_form()
    {
        echo "<form method='post'>";
        echo "Введите строку: ";
        echo "<input type='text' name='Text'>";
        echo "<br>";
        echo "<br>";
        echo "<input type='submit' value='OK'>";
        echo "<input type='hidden' name='already_seen'>";
        echo "</form>";
    }
?>

</body>
</html>
