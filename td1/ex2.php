<?php
/*$message=$_GET["message"]??"test de message";
$size=$_GET["size"]??"10";
$color=$_GET["color"]??"black";*/
$size=5;$color='red';$message="no msg";
extract($_GET);
?>


    <a href="?size=30">en 30<a>
<a href="?color=red">en rouge<a>
<a href="?message=salut&color=green">Message en vert<a>
<a href="?size=60&color=blue">Message en bleu et 60<a>

    
<form method="GET" action="">
    <textarea name="message"><?=$message?></textarea>
    <input type="color" name="color" value="<?=$color?>">
    <input type="number" name="size" value="<?=size?>">
    <button>Valider</button>
                             
</form>

<div style="font-size: <?=$size?>px;color:<?=$color?>"> <?=$message?> </div>
<?php
echo $size;