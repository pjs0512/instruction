<?php
include '../model/DB.php';
$regi = array();
$regi['user_id'] = $_POST['user_id'];
$regi['userpassword']  = $_POST['userpassword'];
$regi['username']  =$_POST['username'];
$regi['classification']  = $_POST['classification'];
$regi['gender']  = $_POST['gender'];
$regi['phone']  = $_POST['phone'];
$regi['email']  = $_POST['email'];

$errorMessage = "공백 칸 : ";
$errorCode = false;

foreach ($regi as $key =>$value){
    if($value == null){
        $errorMessage .= $key." ";
        $errorCode = true;
    }
}
if($errorCode){
?>
<script>
    alert('<?php echo $errorMessage ?>');
    location.replace('../view/register.php');
</script>
<?php }else{
    $db = new DB();
    if($db->insert($regi['user_id'],$regi['classification'],$regi['username'],$regi['gender'],$regi['userpassword'],$regi['phone'],$regi['email'])){
        ?>
        <script>location.replace('../view/main.php')</script>
    <?php
    }
}

?>

