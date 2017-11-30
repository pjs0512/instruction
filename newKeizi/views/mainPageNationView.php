<html>

<head>

</head>
<body>
<?php
session_start();
$_SESSION['page'] = isset($_SESSION['page'])? $_POST['page'] : 1 ;
$_SESSION['lastPage'] = (int)(count($select) + 4 / 5 );
?>
<form method="post" action="../controller/mainController.php">
<?php for($i = $_SESSION['page']-2 ; $i < $_SESSION['page']+3;$i++ ) { ?>
<input type="submit" value ="<?php echo $i; ?>" name ="page">
<?php }?>
</form>
</body>
</html>