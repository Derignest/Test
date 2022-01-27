<!doctype html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

   <!-- Optional theme -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

   <!-- Latest compiled and minified JavaScript -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </head>
  
  <body>

 <br>
<div class="container">
  <ul class="nav nav-pills" role="tablist">
    <li><a href="#task4" role="tab" data-toggle="pill">Задание №4</a></li>
    <li><a href="#task3" role="tab" data-toggle="pill">Задание №3</a></li>
    <li ><a href="#task2" role="tab" data-toggle="pill">Задание №2</a></li>
    <li><a href="#task1" role="tab" data-toggle="pill">Задание №1</a></li>
  </ul>
  
    <div role="tabpanel" class="tab-pane active fade in" id="task4">
    <h3> SQL запрос:</h3>
    <h4>Для составления запроса по данным таблицам необходимо изменить название первичного ключа в таблице  'city' и вторичного для таблицы 'user', для удобства на 'id_city'. 
        Иначе при выполненнии запроса будет выдааться ошибка, о неопределенности поля 'city'.     
    </h4>
    
    <b>    SELECT concat (u.firstName,' ',u.LastName)as User, c.city  FROM city c, user u WHERE (u.id_city=c.id_city);</b>
    
    </div>

    <div role="tabpanel" class="tab-pane fade" id="task3">
    <h3> Натуральные числа:</h3>
    <?
      $c = 1000;

      for(;$c>$a+=3; $summ=$summ+$a );
      for(;$c>$b+=5; $summ=$summ+$b );
      print"$summ\n";
    ?>
    </div>

    <div role="tabpanel" class="tab-pane fade" id="task2">
    <h3> Вкладка профайл:</h3>
    <?
      $data = File("test.csv");
      echo "<b><i><h2><center>Прайс-лист</b></i></h2></center>";
      echo "<center><table border=1><tr>";
      $dat_arr = explode(";", $data[0]);


      for ($p=0;$p<count($dat_arr);$p++) {
      echo "<td><center><b><i>$dat_arr[$p]";
      }
      echo "</tr>";
      for ($i=1;$i<count($data);$i++) {
      $data_array = explode(";", $data[$i]);
      echo "<tr>";
          for ($f=0;$f<count($data_array);$f++) { 
      echo "<td><center><b><i>$data_array[$f]";
      }
      echo "</tr>";}echo "</table></center>";
      ?>
    </div>

    <div role="tabpanel" class="tab-pane fade" id="task1">
    
  <div class="form__wrapper">
      <h3> Форма обратной связи</h3>

<form action="#" method="post" name="form" class="row g-3 needs-validation" novalidate>

<div class="col-md-4">
 
    <label for="validationCustom01" class="form-label">Имя пользователя:</label>
    <input type="text"  name="name" class="form-control" id="validationCustom01"  required >
    <div class="valid-feedback">
      Все хорошо!

</div>
<br>

<div class="form-group">
  
    <label for="validationCustomUsername" class="form-label">Ваша почта:</label>
    <span class="input-group-text" id="inputGroupPrepend">@</span>
    <input type="text" class="form-control" id="validationCustomUsername" name="email" required>
  <div class="invalid-feedback">
    Пожалуйста, укажите аш E-mail.
  </div>

</div>

  <br>

<div class="form-group">
  <label class="form-label">Сообщение:</label>
  <br>
  <textarea  id="comment" cols="47" name="message" rows="5" required  placeholder='Сообщение' ></textarea>

</div>

<br>

<div class="form-group">
  <h5><input name='upload_file' type='file'  accept='.jpg, .jpeg, .png'></h5>
  <br>
</div>
  <!-- Кнопка с надписью «Отправить», которая запускает обработчик формы -->
  <input type="submit" name='dobv' value="Отправить" />

  <?

$LINK2='jpg/'.$_POST['LINK2'];
if (isset($_POST['dobv'])){

  
 
   // ограничение размера файла
   $limit_size = 10*1024*1024; // 10 Mb
   // корректные форматы файлов
   $valid_format = array("jpeg", "jpg", "gif", "png");
   // хранилище ошибок
   $error_array = array();
   // путь до нового файла
   $path_file = "jpg/";
   // имя нового файла
   $rand_name = md5(time() . mt_rand(0, 9999));
 
   // если есть отправленные файлы
   if($_FILES){
     // валидация размера файла
     if($_FILES["upload_file"]["size"] > $limit_size){
       $error_array[] = "Размер файла превышает допустимый!";
     }
     // валидация формата файла
     $forma=explode(".", $_FILES["upload_file"]["name"]);
     $format = end($forma);
     if(!in_array($format, $valid_format)){
       $error_array[] = "Формат файла не допустимый!";
     }
     // если не было ошибок
     if(empty($error_array)){
       // проверяем загружен ли файл
       if(is_uploaded_file($_FILES["upload_file"]["tmp_name"])){
         // сохраняем файл
         move_uploaded_file($_FILES["upload_file"]["tmp_name"], $path_file . $rand_name . ".$format");
      
       
       }
     }		
      }}
   $LINK= $path_file . $rand_name . ".$format";
?>
  


<!-- Начался блок PHP -->
<?php
// Получаем значения переменных из пришедших данных
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
$mes = "Имя: $name \nE-mail: $email  \nТекст: $message";

 $filed = "save.txt";
$rez = "Записано в файлик";
file_put_contents($filed, $mes);

// Пытаемся отправить письмо по заданному адресу
// Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты

// Если отправка прошла успешно — так и пишем
if ($mes == 'true') {echo "Сообщение отправлено";}
// Если письмо не ушло — выводим сообщение об ошибке

?>


</form>


</div>
    </div>
  </div>


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script>
// Пример стартового JavaScript для отключения отправки форм при наличии недопустимых полей
(function () {
  'use strict'

  // Получите все формы, к которым мы хотим применить пользовательские стили проверки Bootstrap
  var forms = document.querySelectorAll('.needs-validation')

  // Зацикливайтесь на них и предотвращайте отправку
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

  </body>
</html>