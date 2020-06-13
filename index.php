
<html>
<head><title>Web-Server Hosted on EC2 instance</title>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Hi All!</h1>
<h5>Below Image is from cloudfront<sub>      -provided by amazon </sub></h5>
<?php
   $firstline=`head -n1 path.txt`;          
   $path_img="https://".$firstline."/aws.jpeg";
   echo "<br>";
   echo "<img src='{$path_img}'/>";
?>
</body>
</html>
