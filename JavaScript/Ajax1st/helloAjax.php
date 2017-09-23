<?php
  sleep(0.1);
  print('hello '. $_REQUEST['name'].' san<BR>');
  //print('hello '. $_POST['name'].' san<BR>');

  // for Tanaka's test

  ini_set('display_errors', 'On');
  error_reporting(E_ALL | E_STRICT);
  $sSiteName = 'Treehouse Blog';
  echo $sSiteName;
  echo '<br>';
  echo '<br>';


  if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo 'POST ==> ';
    var_dump($_POST);
  }
  else{
    echo 'GET ==> ';
    var_dump($_REQUEST);

  }
  echo '<br>';
  echo '<br>';
  
  echo '====DUMPING HEADER====<br>';
  //var_dump();

  $headers = apache_request_headers();

  foreach ($headers as $header => $value) {
      echo "$header: $value <br />\n";
  }

?>
