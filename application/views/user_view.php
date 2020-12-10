<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users View</title>
</head>
<body>
<h1>
   <?php
   
   
   foreach($results as $object){
       echo $object->username."<br>";
   }
   
   
   ?>
   </h1> 
</body>
</html>