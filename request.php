<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $name = '';
    $phone = '';
    $email = '';

    if(isset($_POST['formName']))
    {
      $name = htmlspecialchars($_POST['formName']);
    }

    if(isset($_POST['formEmail']))
    {
      $email = htmlspecialchars($_POST['formEmail']);
    }

    if(isset($_POST['formPhone']))
    {
      $phone = htmlspecialchars($_POST['formPhone']);
    }

    $data = array('name' => $name,
                  'email' => $email,
                  'phone' => $phone);

    writeCSV($data);

    $headers = emailHeaders($email);
    $content = emailContent($data);

    echo $headers;
    echo $content;

    mail("pavlin.kov@mail.ru", "Тема письма", $message, $headers);
    //header("Location: thanks.php");
  }


  function writeCSV($data)
  {
    $file = "requests.csv";
    $request = $data['name'] . ";" . $data['email'] . ";";
    $request .= $data['phone'] . ";\n";

    file_put_contents($file, $request, FILE_APPEND);
  }


  function emailHeaders($email)
  {
    //$headers = "MIME-Version: 1.0\r\n";
    //$headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers = "From: pavlin.kov@mail.ru\r\n";
    $headers .= "Reply-To: pavlin.kov@mail.ru\r\n";

    return $headers;
  }


  function emailContent($data)
  {
    $message = "<p>Новая заявка</p>";
    $content = "<p>Имя: " . $data['name'] . "</p>";
    $content .= "<p>Тел: " . $data['phone'] . "</p>";
    $content .= "<p>E-mail: " . $data['email'] . "</p>";
    $content .= "<p>Сообщение: $message</p>";

    return $content;
  }
?>
