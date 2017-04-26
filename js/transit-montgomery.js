// BART Station: Montgomery
// Intials: MONT
$(document).ready(function() {
$.ajaxSetup({
    async: true
  });
    // var transitURI = 'http://api.bart.gov/api/etd.aspx?cmd=etd&orig=RICH&key=MW9S-E7SL-26DU-VV8V';  

// Load the xml file using ajax 

function xmlToJson(xml) {

  // Create the return object
  var obj = {};

  if (xml.nodeType == 1) { // element
    // do attributes
    if (xml.attributes.length > 0) {
      obj["@attributes"] = {};
      for (var j = 0; j < xml.attributes.length; j++) {
        var attribute = xml.attributes.item(j);
        obj["@attributes"][attribute.nodeName] = attribute.nodeValue;
      }
    }
  } else if (xml.nodeType == 3) { // text
    obj = xml.nodeValue;
  }

  // do children
  if (xml.hasChildNodes()) {
    for(var i = 0; i < xml.childNodes.length; i++) {
      var item = xml.childNodes.item(i);
      var nodeName = item.nodeName;
      if (typeof(obj[nodeName]) == "undefined") {
        obj[nodeName] = xmlToJson(item);
      } else {
        if (typeof(obj[nodeName].push) == "undefined") {
          var old = obj[nodeName];
          obj[nodeName] = [];
          obj[nodeName].push(old);
        }
        obj[nodeName].push(xmlToJson(item));
      }
    }
  }
  return obj;
};

//BART API DOCUMENTATION
// http://api.bart.gov/docs/etd/etd.aspx
function loadTransit(){
  $.ajax({
    type: "GET",
    url: ["http://api.bart.gov/api/etd.aspx?cmd=etd&orig=MONT&key=MW9S-E7SL-26DU-VV8V"],
    dataType: "xml",
    success: function (xml) {

        // Parse the xml file and get data
        var xmlDoc = $.parseXML(xml),
        $xml = $(xmlDoc);
        // $xml.find('category[name="My t"] logo').each(function () {
        // });
        
        jsonData = JSON.stringify(xmlToJson(xml));
        jsonData = jsonData.replace(/#/g, '');
        var obj = jQuery.parseJSON(jsonData);
        $("#outboundData tbody, #inboundData tbody").empty();
       // console.log(obj.root.station.etd);       
       // var inRouteName = '<tr class="inbound-row"><td>Pittsburg/Bay Point</td></tr>';         
       // var outRouteName = '<tr class="outbound-row"><td>SF Airport</td></tr>';

       // $(inRouteName).fadeIn().appendTo("#inboundData tbody");         
       // $(outRouteName).fadeIn().appendTo("#outboundData tbody");         
       var tblETA = "<table>";
       var tblRow = "";
       $(obj.root.station.etd).each(function () {      
        var route_displayname = $(this)[0].destination.text;
            // console.log(route_displayname);
            tblRow += "<tr><td class='arrivalTime'>";
            for (var i = 0; i < obj.root.station.etd.length; i++) {
              if (route_displayname == obj.root.station.etd[i].destination.text) {
               var rowDestination = route_displayname;
               tblRow += rowDestination + "</td>"; 
               for (var j = 0; j < obj.root.station.etd[i].estimate.length-0; j++) {
                 rowColor = obj.root.station.etd[i].estimate[j].color.text;
                     //WRAP DESTINTION HEX COLOR IN MARKUP AND STYLE
                     rowColor = obj.root.station.etd[i].estimate[j].color.text;
                     //WRAP DESTINTION HEX COLOR IN MARKUP AND STYLE
                     rowColor = "<svg class="+rowColor+" ><rect width='28' height='28'" + "style='stroke:black; margin-right:5px;stroke-width:2; fill:#"+obj.root.station.etd[i].estimate[j].hexcolor.text+";'" +">" + "" + rowColor + "</rect></svg>";
                     //
                     rowMinutes = obj.root.station.etd[i].estimate[j].minutes.text;
                     if ($.isNumeric(obj.root.station.etd[i].estimate[j].minutes.text)) {
                      rowMinutes += " min ";
                    }
                    rowCars = "("+obj.root.station.etd[i].estimate[j].length.text+" car)";
                    tblRow += "<td>" + rowColor + " " + rowMinutes + "</td>"; 
                  }
                  tblRow += "</tr>";                
                }
              }
            });
       tblETA += tblRow + "</table>"; 
       $("#inboundData").html(tblRow);

       setTimeout(loadTransit, 20000); 
       console.log('reload');       
     }
   });
}


function clockTime() {

        divTime = $('.pendule');       
        divTime.text(moment().format("h:mmA"));
    };
$(document).ready(function() {
  loadTransit();
   clockTime();
    setInterval(clockTime,1000);    
});
    

});
    

