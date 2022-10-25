
<?php
$json = file_get_contents('https://api.henrikdev.xyz/valorant/v1/mmr/ap/kazaf/carry');
$data = json_decode($json);
$rankbandge = $data->data->images->large;
$rankName = $data->data->currenttierpatched;
$rankNameC = strtoupper($rankName);
$rankRR = $data->data->ranking_in_tier;
echo '<img src='.$rankbandge.'/>';
echo $rankNameC .'&ensp;-';
echo $rankRR .'ᴿᴿ';
?>
