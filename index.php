<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Проверка ввода даты</title>
    <script language="JavaScript">
        function checker() {
            var regExp1 = /^(\d{1,2})-(\d{1,2})-(\d{2})$/
            var regExp2 = /^(\d{1,2})-(\d{1,2})-(\d{4})$/
            var result1 = document.forma.date.value.match (regExp1)
            var result2 = document.forma.date.value.match (regExp2)
            if (result1 == null && result2 == null){
                alert("Дата введена неверно. Корректный формат ДД-ММ-ГГ или ДД-ММ-ГГГГ")
                document.forma.date.value = ""
                return false
            }else{
                document.forma.submit()
            }
        }
    </script>
</head>
<body>
<h1>Проверка ввода даты</h1>
<form action="" name="forma" method="post" onsubmit="return checker()">
    Введите дату:
    <input type="text" name="date">
    <input type="submit" name="ok">
</form>

</body>
</html>
