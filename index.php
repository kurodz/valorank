<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
<div id=outer>
<div id=main>
<?php
$json = file_get_contents('https://api.henrikdev.xyz/valorant/v1/mmr/ap/kazaf/carry');
$data = json_decode($json);
$rankbandge = $data->data->images->large;
$rankName = $data->data->currenttierpatched;
$rankNameC = strtoupper($rankName);
$rankRR = $data->data->ranking_in_tier;

if($json === false){header("Refresh:0");}

echo '<div id=rRR>'. '<p>' .$rankRR .'ᴿᴿ'.'</p>' .'</div>';
echo '<div id=ri>'. '<p>' . '-&ensp;'. $rankNameC .'</p>' .'</div>';
echo '<div id=rb>'.'<img src='.$rankbandge.'/>' . '</div>';


?>
</div>
</div>




<style>
body{
	direction: rtl;
}
div #outer{
	width:100%;
	justify-content: center;
}
div #main {
	width:100%;
	display: flex;
	margin-right: 2%;
	justify-content: center;
}
div #rb {
	display: flex;
	margin-right: 3%;
	width:200px;
	height:200px;
	}
div #rb img{
		width:150px;
		height:150px;
	}
div #ri {
	display: flex;
	height:200px;
	width:auto;
	white-space: nowrap;
	}
div #ri p {
    color: white;
    margin: 35px;
    margin-left: -41px;
    font-family: 'Josefin Sans', sans-serif;
    font-size: 102px;
}
div #rRR {
	display: flex;
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
<script>
setTimeout(function(){
window.location.reload(1);
}, 180000);
</script>
