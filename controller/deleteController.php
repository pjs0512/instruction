<?php
include "../model/DB.php";
$id = isset($_POST['id'])? $_POST['id']: null;
$pw = isset($_POST['pw'])? $_POST['pw'] : null;
$db = new DB();


if($id != null) {
    if ($db->select("userinfo", "userid", $id) != null){
        if($db->select("userinfo","password",$pw) != null){
            if($db->delete($id)){
                ?>
                <script>
                    alert("삭제되었습니다.");
                    location.replace('../view/main.php');
                </script>
                <?
            }else{
                ?>
                <script>
                    alert("실패");
                    location.replace('../view/delete.php');
                </script>
                <?
            }
        }else{
            ?>

            <script>
                alert("암호가 일치하지 않습니다.");
                location.replace('../view/delete.php');
            </script>

            <?

        }
    }else{
        ?>
        <script>
            alert("ID를 찾을 수 없습니다.");
            location.replace('../view/delete.php');
        </script>

        <?
    }
    echo 123;

}
