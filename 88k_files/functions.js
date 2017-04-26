//LOAD SCRIPTS INTO DOCUMENT WHEN DOCUMENT IS LOADED...
$(document).ready(function() {

  
// REFRESH TIMER, DATAGE, TIME, MOUSEDOWNER SCRIPTS BELOW...

//REFRESH TIMER
window.setTimeout(
	function(){
		window.location.reload(false);
	}
	, 15 * 60 * 1000);



//ONMOUSEDOWN SCRIPT, ALL LINKS ACTIVATE ON MOUSEDOWN EVENT

	$('area, a').mousedown(function() {
		window.location.href = this.href;
	});

});


function input(letter) {
  param = search.search_for.value;
  param += letter;
  search.search_for.value = param;
}

function backspace() {
  param = search.search_for.value;
  back = param.substring(0, (param.length - 1));
  search.search_for.value = back;
}
