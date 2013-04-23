var elems = ['header','article','nav','details','summary','footer'];
for(idx in elems) document.createElement(elems[idx]);

WebFontConfig = {
	google: {
		families: ['Inconsolata::latin']
	}
};
(function(){
	var wf = document.createElement('script');
	wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
	  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	wf.type = 'text/javascript';
	wf.async = 'true';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(wf, s);
})();
