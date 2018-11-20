<?php include("function.php");
?>
</head>
<body>
<?php
$stefn = new person(" steefan johnson");
echo"steefan's full name is" .$stefn->get_name();
$james = new employee("james b");
echo"--->" .$james->get_name();
?>
</body>
</html>


