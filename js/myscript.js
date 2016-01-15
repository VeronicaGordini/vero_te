// JavaScript Document


$(document).ready(function(){
	
	//cattura dell'evento di ridimensionamento del broswer
	window.onresize = function(event) {
		var browser_height_st = document.compatMode=='CSS1Compat' && !window.opera?document.documentElement.clientHeight:document.body.clientHeight;
		var browser_width_st = document.compatMode=='CSS1Compat' && !window.opera?document.documentElement.clientWidth:document.body.clientWidth;
		
		//controllo la slide attiva tramite la classe active emi riposiziono li correggendo l'errore di spostamento delle slide
		var target = $("a.active").attr("href"); //catturo l'attributo href del 'a' selezionato
		var targetoffset = $(target).offset(); //calcolo il suo offset(cioè la sua posizione)
		var container = $("#container").offset(); //calcolo la posizione del contenitore
		var targetop = container.top-targetoffset.top;//faccio sia la differenza orizzontale che verticale ( a te serve solo quella orizzontale...)
		$("#container").animate({top:targetop}, 0); //mi muovo in quella direzione!!!
	};
		
	
	// iOS Hover Event Class Fix
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
	$("#nav li a").click(function(){  // Update class to point at the head of the list
	});
	}
	
	//attivazione slider
	$("#nav a").click(function(e) {
		$.scrollTo($(this).attr('href'), '800', 'slow');
		e.preventDefault();
		
		$("#nav a").removeClass("icona");
		$(this).addClass("icona");
	});
	
	//assegno la classe al primo elemento
	//$("#nav a").removeClass.first.("icona");
	
	
	
});