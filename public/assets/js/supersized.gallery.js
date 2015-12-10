jQuery(function($){
	$.supersized({
		// Functionality
		autoplay					:	0,			// Do not autoplay
		slide_interval		:	4000,		// Length between transitions
		transition				:	1,			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
		transition_speed	:	1500,		// Speed of transition

		// Size & Position
		fit_always				:	1,

		// Components
		slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
		slides						:	[					// Slideshow Images
			{image : 'http://farm3.staticflickr.com/2859/10997001603_db7df7431f_o.jpg', title : 'Yosemite National Park, USA', thumb : 'http://farm3.staticflickr.com/2859/10997001603_db7df7431f_o.jpg', url : ''},
			{image : 'http://farm4.staticflickr.com/3822/11023866536_c24f20ac17_o.jpg', title : 'Mirror Lake, Yosemite National Park, USA', thumb : 'http://farm4.staticflickr.com/3822/11023866536_c24f20ac17_o.jpg', url : ''},
			{image : 'supersized/usa-monumentvalley-road.jpg', title : 'Monument Valley, AR, USA', thumb : 'supersized/thumb/usa-monumentvalley-road.jpg', url : ''},
			{image : 'supersized/usa-monumentvalley-mittens.jpg', title : 'Monument Valley, AR, USA', thumb : 'supersized/thumb/usa-monumentvalley-mittens.jpg', url : ''},
			{image : 'supersized/ireland-obriens-tower.jpg', title : 'O\'Brien\'s Tower, Ireland', thumb : 'supersized/thumb/ireland-obriens-tower.jpg', url : ''},
			{image : 'supersized/ireland-cliffs-of-moher.jpg', title : 'Cliffs of Moher, Ireland', thumb : 'supersized/thumb/ireland-cliffs-of-moher.jpg', url : ''},
			{image : 'supersized/nationalpark_cahuita.jpg', title : 'Cahuita National Park, Costa Rica', thumb : 'supersized/thumb/nationalpark_cahuita.jpg', url : ''},
			{image : 'supersized/playacarrillo.jpg', title : 'Beach pattern, Playa Carrillo', thumb : 'supersized/thumb/playacarrillo.jpg', url : ''},
			{image : 'supersized/coming_home.jpg', title : 'Coming home', thumb : 'supersized/thumb/coming_home.jpg', url : ''},
			{image : 'supersized/nuuksio-skyrock.jpg', title : 'Skyrock', thumb : 'supersized/thumb/nuuksio-skyrock.jpg', url : ''},
			{image : 'supersized/aut.jpg', title : 'Aut', thumb : 'supersized/thumb/aut.jpg', url : ''},
			{image : 'supersized/birches.jpg', title : 'Karvasalmi birches', thumb : 'supersized/thumb/birches.jpg', url : ''},
			{image : 'supersized/hki_ballsofsteel.jpg', title : 'Balls of steel', thumb : 'supersized/thumb/hki_ballsofsteel.jpg', url : ''},
			{image : 'supersized/hki_kiosk.jpg', title : 'Kiosk', thumb : 'supersized/thumb/hki_kiosk.jpg', url : ''},
			{image : 'supersized/hki_pasila_grill.jpg', title : 'Burger joint', thumb : 'supersized/thumb/hki_pasila_grill.jpg', url : ''},
			{image : 'supersized/hki_sahkosiro.jpg', title : 'Sähkösiro, Punavuori', thumb : 'supersized/thumb/hki_sahkosiro.jpg', url : ''},
			{image : 'supersized/hki_seal.jpg', title : 'Seal of steel', thumb : 'supersized/thumb/hki_seal.jpg', url : ''},
			{image : 'supersized/hki_toolobay.jpg', title : 'Töölö Bay, Helsinki', thumb : 'supersized/thumb/hki_toolobay.jpg', url : ''},
			{image : 'supersized/hki_uunisaari_iceberg.jpg', title : 'Iceberg in Uunisaari', thumb : 'supersized/thumb/hki_uunisaari_iceberg.jpg', url : ''},
			{image : 'supersized/hki_vanhakaupunginkoski_seasons.jpg', title : 'Two seasons', thumb : 'supersized/thumb/hki_vanhakaupunginkoski_seasons.jpg', url : ''},
			{image : 'supersized/iceland_codheads.jpg', title : 'Iceland: Codheads', thumb : 'supersized/thumb/iceland_codheads.jpg', url : ''},
			{image : 'supersized/iceland_cods.jpg', title : 'Iceland: Dried cods', thumb : 'supersized/thumb/iceland_cods.jpg', url : ''},
			{image : 'supersized/iceland_godafoss.jpg', title : 'Iceland: Godafoss', thumb : 'supersized/thumb/iceland_godafoss.jpg', url : ''},
			{image : 'supersized/iceland_skogafoss_goblin.jpg', title : 'Iceland: Skogafoss Goblin', thumb : 'supersized/thumb/iceland_skogafoss_goblin.jpg', url : ''},
			{image : 'supersized/isolated.jpg', title : 'Isolated', thumb : 'supersized/thumb/isolated.jpg', url : ''},
			{image : 'supersized/lofoten.jpg', title : 'Lofoten', thumb : 'supersized/thumb/lofoten.jpg', url : ''},
			{image : 'supersized/lofoten_roadtrip.jpg', title : 'Lofoten roadtrip', thumb : 'supersized/thumb/lofoten_roadtrip.jpg', url : ''},
			{image : 'supersized/lofoten_senja.jpg', title : 'Senja island, Norway', thumb : 'supersized/thumb/lofoten_senja.jpg', url : ''},
			{image : 'supersized/london_barrels.jpg', title : 'London barrels', thumb : 'supersized/thumb/london_barrels.jpg', url : ''},
			{image : 'supersized/london_geffreys.jpg', title : 'Geffreys inner yard in London', thumb : 'supersized/thumb/london_geffreys.jpg', url : ''},
			{image : 'supersized/samisammakko.jpg', title : '', thumb : 'supersized/thumb/samisammakko.jpg', url : ''}
		]
	});
});
