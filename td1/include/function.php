<?php
function div($message){
    return '<span>'.$message.'</span>';
}
function createHtmlTable($nblignes,$nbcolonnes){
  ?>
<table border='1'>
    <tbody>
        <?php for($i=0;$i<$nblignes;$i++){
        $gras=($i%2==0)?"bold":"normal";
      ?>
        <tr>
            <?php for($j=0;$j<$nbcolonnes;$j++){
            $rouge=($j%2==0)?"red":"black";
            ?>
            <td style="font-weight: <?=$gras ?>;color:<?=$rouge ?>"><?="$i - $j"?></td>
            <?php }?>
        </tr>
        <?php }?>
    </tbody>
</table>
<?php
}

function element($titre, $contenu, $niveau=1){
    $html = "<h" . $niveau . ">" . $titre . "</h" . $niveau . "> <div>" . $contenu . "</div>";
    return $html;
}


function parseElement($elements){
    $code = '';
    for($a=0; $a<count($elements); $a++){
        $niveau = $elements[$a]['niveau'] ?? "1";
        $code .= element($elements[$a]["titre"], $elements[$a]["contenu"], $niveau);
    }
    return $code;
}






 ?>
