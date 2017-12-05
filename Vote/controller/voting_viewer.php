<?php
include "../model/DB.php";
$db = new DB();

$result = $db->select();
$allCount = 0;
foreach ($result as $value){
    $allCount+=$value['voteCount'];
}

foreach ($result as $value){
    ?>
    <ul>
        <li>
            <?php echo $value['name'] ?>
            <?php if($value['voteCount'] !=0){?>
            <img src="graph.php?count=<?php echo round($value['voteCount']/$allCount,2)*100 ?>">
            <?php }?>
            <?php echo $value['voteCount']?>표
            <?php if($value['voteCount']!=0){ echo "(".(round($value['voteCount']/$allCount,2)*100)."%)"; } else echo "(0%)"?>
        </li>
    </ul>
<?
}
?>
<input type="button" onclick="location.replace('../view/voting_form.php')" value="메인으로">



