(function(){
	// if(document.getElementById('map')){
	// 	var h = document.getElementsByTagName('head')[0];
    //
	// 	var mbss = document.createElement('link');
	// 	mbss.rel = 'stylesheet';
	// 	mbss.href = 'http://api.tiles.mapbox.com/mapbox.js/v0.6.7/mapbox.css';
	// 	h.appendChild(mbss);
    //
	// 	var mbjs = document.createElement('script');
	// 	mbjs.src = 'http://api.tiles.mapbox.com/mapbox.js/v0.6.7/mapbox.js';
	// 	mbjs.async = 'true';
	// 	mbjs.onload = function(){
	// 		mapbox.auto('map', 'schepp.map-8ymj20sc');
	// 	};
	// 	h.appendChild(mbjs);
	// }
	var mbjs = document.createElement('script');
	mbjs.src = './assets/scripts/slider/js-image-slider.js';
	mbjs.async = 'true';
	h.appendChild(mbjs);
})();