<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PHP Update file</title>
</head>
<body>

<?php
  
  $allFiles = glob('json/*'); // get all file names
  foreach($allFiles as $allFiles){ // iterate files
    if(is_file($allFiles))
      unlink($allFiles); // delete file
  }

  // VARIABLES IMPORTED FROM DATA.HTML
  $ajax_var1 = $_POST['variable1'];
  $ajax_var2 = $_POST['variable2'];
  $ajax_var3 = $_POST['variable3'];
  
  // UPDATES JSON WITH VARIABLES FROM DATA.HTML
  $data['rotateLR'] = $ajax_var1;
  $data['rotateFB'] = $ajax_var2;
  $data['compassDirection'] = $ajax_var3;

  // RE-ENCODES JSON FILE, PUTS UPDATED VALUES INSIDE
  $newJsonString = json_encode($data);
  file_put_contents( "json/data.json", $newJsonString);



?>

</body>
</html>
