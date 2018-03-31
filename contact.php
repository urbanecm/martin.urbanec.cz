<?php
if ($_POST) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $from = 'noreply@webappky.cz';
  $reply_to = $_POST['email'];
  $headers = "Reply-To: $reply_to";
  $capacity = $_POST['capacity'];
  $to = 'martin+catchall@urbanec.cz';
  switch ($capacity) {
    case 'personal':
      $to = 'martin@urbanec.cz';
      break;
    case 'wikimedian':
      $to = 'martin.urbanec@wikimedia.cz';
      break;
    case 'student':
      $to = 'urbanec.martin@ssakhk.cz';
      break;
  }
  mail($to, $subject, $message, $headers);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Děkuji/Thank you</title>
  </head>
  <body>
    <h1>Brzy se ozvu/I'll write back you soon</h1>
  </body>
</html>
