<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://gmpg.org/xfn/11">

<title>Barilla Uutuuksia</title>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Barilla" />
<meta name="description" content="Barilla uutuuksia" />
<meta name="robots" content="index, follow" />

<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/effects.js"></script>
<script type="text/javascript" src="js/accordion.js"></script>
	
<script type="text/javascript">
			
//
//  In my case I want to load them onload, this is how you do it!
// 
Event.observe(window, 'load', loadAccordions, false);

//
//	Set up all accordions
//
function loadAccordions() {
	var topAccordion = new accordion('accordion', {
		classNames : {
			toggle : 'accordion_toggle',
			toggleActive : 'accordion_toggle_active',
			content : 'accordion_content'
		},
		defaultSize : {
			width : 425
		},
		direction : 'horizontal'
	});
	
}


//
// Lets open a recipe window
//
function popUpRecipe(res_url) {
	window.open(res_url, "resepti", "status=1, height=400, width=800, scrollbar=auto");
}
</script>

</head>

<body>



<div id="container">

<div id="header">
<h1>Nyt ne ovat täällä! Barillan täysjyvä Spaghetti ja Pipe Rigate</h1>
<h2><a href="http://www.barilla.fi">Barilla</a></h2>
</div> <!-- /header -->

<div id="accordion" >

<h3 class="accordion_toggle pipe_rigatte">Täysjyvä Pipe Rigate</h3>
<div class="accordion_content pipe_rigatte">
<div class="frame">
<h4>Täysjyvä Pipe Rigate -<br />Uusi muoto Suomessa.</h4>
<p>Roomalaisesta keittiöstä tuleva Pipe Rigate sulkee kastikkeen sisäänsä ja siksi muoto sopii erinomaisesti ohuille kastikkeille.</p>
<ul>
<li>100 % Durum-vehnää</li>
<li>Pakkauskoko 500 g</li>
</ul>
<a href="#" onclick='popUpRecipe("resepti_rigate.php")'>Katso ja tulosta herkullinen Barilla Pipe Rigatte -resepti!</a>
</div> <!-- /frame -->
</div> <!-- /accordion_content -->

<h3 class="accordion_toggle spaghetti">Täysjyvä Spaghetti</h3>
<div class="accordion_content spaghetti">
<div class="frame">
<h4>Täysjyvä Spaghetti -<br />Perinteinen suosittu pasta.</h4>
<p>Perinteinen Barilla Täysjyvä Spaghetti sopii parhaiten mausteisiin kastikkeisiin sekä jauhelihakastikkeisiin.</p>  
<ul>
<li>100 % Durum-vehnää</li>
<li>Pakkauskoko 500 g</li>
</ul>
<a href="#" onclick='popUpRecipe("resepti_spaghetti.php")'>Katso ja tulosta herkullinen Barilla Täysjyvä Spaghetti -resepti!</a>
</div> <!-- /frame -->
</div> <!-- /accordion_content -->

<div class="clear"></div>			
</div> <!-- /accordion -->



<div id="prod_info">
<div id="info_1">
<h3>100 % täysjyvää, 6 % kuitua.</h3>
<p>Hitaat hiilihydraatit ovat tärkeä osa terveellistä ruokavaliota. Pastan hitaat hiilihydraatit antavat pitkän kylläisyyden tunteen ja pitävät verensokerin tasapainossa. Jopa painonvartijat ovat todenneet, että pasta ja Välimeren ravinto on terveellistä. Barillan uudet täysjyväpastat ovat oiva lisä Barillan laajaan pastavalikoimaan.</p>
</div> <!-- /info_1 -->

<div id="info_2">
<h3>Maun ehdoilla</h3>
<p>Barillan uusissa täysjyväpastoissa on sama al dente –tunne kuin muissakin Barilla pastoissa. Ne valmistetaan 100 % durumvehnästä. Ja ne maistuvat yhtä hyviltä kuin muutkin Barilla pastat, kiitos ainutlaatuisen jauhomistekniikan. Täysjyväpastaa onkin helppo suositella perinteisen pastan sijaan terveellisempänä vaihtoehtona.</p>
</div> <!-- /info_2 -->
</div> <!-- /prod_info -->
    
<div id="footer">
<a href="http://www.barilla.fi" id="sloganlink">Barilla - Olennainen osa Italiaa</a>
</div> <!-- /footer -->
</div> <!-- </container -->

<?php
/*
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-2711157-1";
urchinTracker();
</script>

<!-- BEGIN Snoobi v1.4 -->
<script type="text/javascript" src="http://eu1.snoobi.com/snoop.php?tili=kalak_org"></script>

<!-- END Snoobi v1.4 -->
*/
?>
   		
</body>
</html>
