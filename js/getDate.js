 jQuery(document).ready(function() {

  function getDate(){
  	$('#something').append('<div id="dateUTC"></div>');
    var divUtc = $('#dateUTC');
    var divLocalDate = $('#moment-date');
    var divLocalMonth = $('#moment-month');
    var divLocalDay = $('#moment-day');
    var divLocalYear = $('#moment-year');
    //put UTC time into divUTC  
    divUtc.text(moment.utc().format('MM/DD/YYYY'));      
    
    //get text from divUTC and convert to local timezone  
    var localTime  = moment.utc(divUtc.text()).toDate();
    localDate = moment(localTime).format('DD');
    localMonth = moment(localTime).format('MMM');
    localDay = moment(localTime).format('dddd,');
    localYear = moment(localTime).format('YYYY');
    divLocalDate.text(localDate);  
    divLocalMonth.text(localMonth);  
    divLocalDay.text(localDay);  
    divLocalYear.text(localYear);  
  }

    function clockTime() {
        tsit = $('#transit-time');
        tsit.text(moment().format("h:mmA"));
        divTime = $('#pendule');       
        divTime.text(moment().format("h:mmA"));
    };

$(document).ready(function() {
    getDate();
    clockTime();
    setInterval(clockTime,1000);    
});

 });