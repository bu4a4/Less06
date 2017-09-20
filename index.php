<!doctype html>
<html>
<head>

    <title>Обработка форм</title>
</head>
<body>
  <form name="test" action="check.php" method="post">
      <lable>Имя:</lable><br>
      <input type="text" name="name" placeholder="Имя"><br>

      <lable>Email</lable><br>
      <input type="text" name="email" placeholder="Email"><br>

      <lable>Сообщение</lable><br>
      <textarea type="message" name="mess" cols="40" rows="10"></textarea><br>

      <input type="submit" name="done" value="Отправлено">


      <br>
      <br>
      <br>
      <br>
      <a href="/test.php">Записи в файле</a>


  </form>
</body>
</html>