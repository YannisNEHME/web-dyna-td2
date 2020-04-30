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
  return "<h$niveau>$titre</h$niveau>
          <div>$contenu</div>";
}


function parseElements($elements){
  $resp='';
  foreach ($elements as $elm) {
    $resp.=element($elm['titre'],$elm['contenu'],$elm['niveau']??1);
  }
  return $resp;
}





 ?>
