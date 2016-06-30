<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $name = '';
    $email = '';

    if(isset($_POST['formName']))
    {
      $name = htmlspecialchars($_POST['formName']);
    }

    if(isset($_POST['formEmail']))
    {
      $email = htmlspecialchars($_POST['formEmail']);
    }

    $data = array('name' => $name,
                  'email' => $email);

    writeCSV($data);

    $headers = emailHeaders($email);
    $content = emailContent($data);

    mail("pavlin.kov@mail.ru", "Тема письма", $message, $headers);
    header("Location: thanks_subscribe.php");
  }


  function writeCSV($data)
  {
    $file = "subscribers.csv";
    $request = $data['name'] . ";" . $data['email'] . ";";

    file_put_contents($file, $request, FILE_APPEND);
  }


  function emailHeaders($email)
  {
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html;charset=utf-8 \r\n";
    $headers .= "From: Клиент <" . $email . ">\r\n";
    $headers .= "Reply-To:admin@admin.info\r\n";

    return $headers;
  }


  function emailContent($data)
  {
    $message = "<p>Заявка на подписку</p>";
    $content = "<p>Имя: " . $data['name'] . "</p>";
    $content .= "<p>E-mail: " . $data['email'] . "</p>";
    $content .= "<p>Сообщение: $message</p>";

    return $content;
  }
?>
