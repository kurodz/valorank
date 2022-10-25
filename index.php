<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
<div id=main>
<?php
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




<style>


div#main {
    display: flex;
}
div #rb {
	width:200px;
	height:200px;
	}
div #rb img{
		width:150px;
		height:150px;
	}
div #ri {
	height:200px;
	width:auto;
	}
div #ri p {
    color: white;
    margin: 35px;
    margin-left: -41px;
    font-family: 'Josefin Sans', sans-serif;
    font-size: 102px;
}
div #rRR {
	text-align: center;
	margin-left: 20px;
	}
div #rRR p{
	font-size:107px;
	margin:14px;
	margin-left: -11px;
	color:white;
	font-family: 'Josefin Sans', sans-serif;
	}
</style>
