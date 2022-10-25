<div id=main>
<?php
<meta http-equiv="refresh" content="180">
$json = file_get_contents('https://api.henrikdev.xyz/valorant/v1/mmr/ap/kazaf/carry');
$data = json_decode($json);
$rankbandge = $data->data->images->large;
$rankName = $data->data->currenttierpatched;
$rankNameC = strtoupper($rankName);
$rankRR = $data->data->ranking_in_tier;
echo '<div id=rb>'.'<img src='.$rankbandge.'/>' . '</div>';
echo '<div id=ri>'. '<p>' . $rankNameC .'&ensp;-' .'</p>' .'</div>';
echo '<div id=rRR>'. '<p>' .$rankRR .'ᴿᴿ'.'</p>' .'</div>';
?>
</div>
