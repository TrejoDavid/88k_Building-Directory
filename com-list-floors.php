<!DOCTYPE html>
<html>
	<head>
				<meta charset="UTF-8">
		<title>Building Directory</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/webfonts.css">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/editable_page.css">
		<link rel="stylesheet" type="text/css" href="css/datage.css">
		<link rel="stylesheet" type="text/css" href="css/listdata.css">
		<link rel="stylesheet" type="text/css" href="css/news_feed.css">
		<link rel="stylesheet" type="text/css" href="features/datage/css/datage.css">
		<link rel="stylesheet" type="text/css" href="css/announcements.css">
		<link rel="stylesheet" type="text/css" href="css/slideshow.css">
		<link rel="stylesheet" type="text/css" href="features/weather/css/simpleWeather.css">
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/transit-montgomery.js"></script>
		<script type="text/javascript" src="js/transit-embarcadero.js"></script>
		<script type="text/javascript" src="js/transit-powel.js"></script>

	</head>


<style type="text/css">
.container-fluid {
  position: relative;
  /*Gray*/
  /*background: #757575; */
  background: #e0e0e0;
  height: 1080px;
  width: 1920px;
}

.television {
/*    background: red; */
  padding-left: 0px;
  padding-right: 0px;
  padding-top: 0px;
      margin-top: 10px;
}

.listing {
  padding: 0px;
}

/* Footer Section */
footer.announcements-section {
    position: absolute;
    bottom: 0;
    /*background: #3f3f41;*/
    background: #000;
    height:40px;
    width: 100%;
    color: white;
    padding-left: 10px;
    z-index: 99;
}

footer > span.title,footer > span.content {
  text-transform: uppercase;
  font-weight: bold;
  line-height: 2;
  font-size: 18px;
}

.tenants {
  height: 797px;
  background: #272528;
  width: 100%;
}

.weather {
    color: white;
    font-weight: bold;
    font-size: 18px;
    position: relative;
    height: 258px;
     top: -292px;
    z-index: 9;
}

.amenities-background-color {
    color: #000;
    /*background: #e0e0e0;*/
    /*background: #fbfbfb;*/
    background: #ececec;
    margin: 0px;
    font-family: "Myriad Pro";
   box-shadow: -1px 1px 3px 4px #cccccc;
   	margin-top: 10px;
}

#amenities{
	font-size: 14.5px;
	margin-left: 0px;
	height: 640px;
}

#amenities .amenities-header {
	text-align: center;
	font-weight: bold;


	/*margin-top: 12px;*/
	font-size: 27px;
	/*margin-bottom: 10px;*/
}


.amenities-header {
	   box-shadow: 1px 2px 3px #cccccc;

}

#amenities ul {
	list-style-type: none;
}

#amenities .header {
	/*text-indent: 60px;*/
	font-weight: bold;
	/*text-decoration: underline; */
	text-align: center;
}
#amenities .description {
	padding: 0 15px;
	line-height: 1;
}

#amenities .header-sublist {
	font-weight: bold;
	text-indent: 15px;
}
</style>

<style type="text/css">
	.compColumnWidth{
		height: 3.5em;
		/*max-height: 2.5em;  SET MAXIMUM HEIGHT FOR COMPANY ENTRIES*/
	}
	.indColumnWidth{
		height: % ;			
		/*max-height: 5%;  SET MAXIMUM HEIGHT FOR INDIVIDUAL ENTRIES*/
	}
</style>

<style type="text/css">
  #transit-data {
  font-size: 1.2em;
  font-weight: 500;
  z-index: 5;
  color: #fff;
  font-family: "Myriad Pro", sans-serif, Times, Helvetica, "Myriad Pro", sans-serif;
  text-align: center;
}
.ba-logo{
  position: absolute;
  left:15px;
  top:15px;
}
.transit-map{
  position: absolute;

  right: 55px;
  height: 500px;
}
.footer{
  font-size:.7em;
  width: inherit;
  position:absolute;left: 0px; bottom: 0px;text-align:left; font-weight: 500
} 
.footer>h1{
  font-size:2em;
  font-weight: 600;
}
.footer>table{
  margin:0;
  width:auto;
  font-size:1.25em;
  margin-bottom:10px;
}
.footer>p{
  font-size:1.25em;
  line-height: 1.2;
}
.footer>table>tbody>tr>td{
  padding:5px 10px 10px 0px;
}
#heading {
  text-align: center;
  font-family: "Myriad Pro", sans-serif;
  font-size: 18px;
  font-weight: bold;
  background-color: #333;
  color: #fff;

}
h3{
  font-weight: bold;
}
table thead tr{

  vertical-align: top;
}
table thead tr th{
  font-weight: bold;
  font-family: 'Myriad Pro';
  font-style: normal;
  /*height: 5px;*/
  white-space: nowrap;
  background-color: #CCC;
  padding:0px 5px;
  color:#fff;
  vertical-align: middle;
  /*border-bottom: solid 2px #000;*/
}
.heading{
  background-color: #262626;
  text-align: center;
  font-size: 22px;
}
#inboundData, #inboundData2, #inboundData3{
  	width:100%;
  	padding-left: 44px;
  	text-align: left;
	/*height: 150px;
	font-size: 28px;*/
	margin-bottom: 0px;
	font-family: 'Myriad Pro';
     background: white;
}

#inboundData tbody tr td, #outboundData tbody tr td, #inboundData2 tbody tr td, #outboundData2 tbody tr td, 
#inboundData3 tbody tr td, #outboundData3 tbody tr td{
  color:#000;
  font-weight: 500;
  vertical-align: middle;
  font-family: "Myriad Pro";
  padding-top: 10.6px;
      /*padding-top: 5px;*/
}
#outboundData tbody tr td{

}
#outboundData, #outboundData2, #outboundData3{
  width:100%;

  text-align: left;
/*height: 150px;
font-size: 28px;*/
font-family: 'Myriad Pro';
margin:0;
}
#busData{
  text-align: left;
  font-size: 14px;
  width: 100%;

}
#busData th{
  height: 20px;
  /*padding-bottom:10px;*/
  /*border-bottom: solid 2px #000;*/

}
#busData td{
  background-color:#C60C30;
  color:#fff;
  font-weight: 600;
  padding:5px;

}
.routeName{
  border-right:solid green 0px;
  vertical-align: middle;
  line-height: 1em;
  padding-left:5px;
}
.arrivalTime{
}
.routeid{
  padding-left:15px;
}
.idlogo{
  height:70px;
}
.wrapper{
  /*border:solid 2px #000;*/
  /*background-color: #000;*/
}
.box-wrapper{
  display:block;
  float:left;
  /*vertical-align: text-top;*/
}
.minutes-wrapper{
  /*padding-top:15px;*/
  display: block;
  float:left;
  padding:0 10px;
  font-weight: bold;
}
svg{
  width: 20px;
  height:20px;
  margin-right: 5px;
}
svg.box{
  position: relative;
  top:-2px;

  border:solid black 1px;
}
.SV{
  color:yellow;
  fill:yellow;
}
.transit-header {
    font-size: 27px;
    font-weight: 500;
    color: #000;
    text-align: left;
    margin-top: 12px;
    /*text-decoration: underline;*/
    /*border-bottom: 1px solid black;*/
    font-family: "Myriad Pro";
      box-shadow: 1px 2px 3px #cccccc;
}

.transit-text{
  position: absolute;
  left: 55px;   
 top: 55px; 
  width: 450px;
}

.sf-transit-map {
	height: 450px;
}

#something {
	margin-top: 12px;
}

/*.mgmt-lsg{
	display: flex;
	justify-content: flex-start;
	align-items: center;
}*/

.building-info {
	font-weight: bold;
	font-size: 14px;
}

#sf-station-name-header {

	color: #000;
	font-weight: bold;
	margin-top: 10px;
	margin-bottom: 10px;
}


tr:nth-child(even) {background: #CCC}
tr:nth-child(odd) {background: #FFF}



table tr:nth-child(odd) td{
	background-color: #FFF
}

table tr:nth-child(even) td{
	background-color: #CCC
}


.bart-background-color {
	/*background: #e0e0e0;*/
	/*background: #dadada;*/
	background: #ececec;
	box-shadow: 1px 1px 3px 4px #cccccc;
	margin-top: 10px;
	height: 1030px;
}
 
p { margin: 0 0 6px 0; }
  	</style>

	<body onmousedown="event.preventDefault();" contenteditable="no">
		<div class = "container-fluid">
		<div class = "row">  
		<!-- Television Section    -->

		<div class = "col-md-4 bart-background-color"> 
		   <div class = "col-md-12">
	        <div class = "transit-header">
				<!-- <div style = "font-weight: bold;">BART Departures<span class = "pull-right">Montgomery St. as of <span id="transit-time"></span>  
</span></div> -->
				<div style = "font-weight: bold;">BART Departures<span class = "pull-right">

					
				</span></div>
			</div>

		     <div id="transit-data" >

		     	<div id = "sf-station-name-header"> Montgomery</div>

	      	  <div class="wrapper" style="width:100%;">
				    <div class="profile">
				         <!-- <h3>Pittsburg/Bay Point Station</h3> -->
				       <table id= "inboundData">
				            <thead >
				              <tr>
				                  <th colspan="3" class="heading">
				                    <!-- BART Transit - Pleasant Hill/Contra Costa Centre Station -->
				                  </th>
				              </tr>
				                <tr>
				                    <th width="25%"></th>
				                    <th width="25%"></th>                
				                    <th width="25%"></th> 
				                    <th width="25%"></th>                
				                </tr>
				            </thead>
				          <tbody>
				           </tbody>
				       </table>     
				       <!-- <h3>San Francisco International Airport</h3> -->
				      <table id= "outboundData">
				            <thead>
				                <tr>
				                    <th width="25%"></th>
				                    <th width="25%"></th>                
				                    <th width="25%"></th>                
				                    <th width="25%"></th>                
				                </tr>
				            </thead>
				          <tbody>
				          </tbody>
				       </table>
				      </div>
				    <div class="profile">
				       <table id="busData" style="display:none;">
				            <thead >
				                <tr>
				                    <th colspan="2" class="heading">
				                      CCCTA Connections: Route 15 - BART Pleasant Hill Station
				                    </th>
				                </tr>            
				                <tr>
				                    <th width="80%" align="left">Destination</th>
				                    <th width="20%" align="left">Arrival (min)</th>                
				                </tr>
				            </thead>
				          <tbody>
				           </tbody>
				       </table>
				      </div>
				    </div>    
				   </div>

		     <div id="transit-data" >
		     	<div id = "sf-station-name-header">Powell</div>

	      	  <div class="wrapper" style="width:100%;">
				    <div class="profile">
				         <!-- <h3>Pittsburg/Bay Point Station</h3> -->
				       <table id= "inboundData3">
				            <thead >
				              <tr>
				                  <th colspan="3" class="heading">
				                    <!-- BART Transit - Pleasant Hill/Contra Costa Centre Station -->
				                  </th>
				              </tr>
				                <tr>
				                    <th width="25%"></th>
				                    <th width="25%"></th>                
				                    <th width="25%"></th> 
				                    <th width="25%"></th>                
				                </tr>
				            </thead>
				          <tbody>
				           </tbody>
				       </table>     
				       <!-- <h3>San Francisco International Airport</h3> -->
				      <table id= "outboundData3">
				            <thead>
				                <tr>
				                    <th width="25%"></th>
				                    <th width="25%"></th>                
				                    <th width="25%"></th>                
				                    <th width="25%"></th>                
				                </tr>
				            </thead>
				          <tbody>
				          </tbody>
				       </table>
				      </div>
				    <div class="profile">
				       <table id="busData" style="display:none;">
				            <thead >
				                <tr>
				                    <th colspan="2" class="heading">
				                      CCCTA Connections: Route 15 - BART Pleasant Hill Station
				                    </th>
				                </tr>            
				                <tr>
				                    <th width="80%" align="left">Destination</th>
				                    <th width="20%" align="left">Arrival (min)</th>                
				                </tr>
				            </thead>
				          <tbody>
				           </tbody>
				       </table>
				      </div>
				    </div>    
				   </div>


		     <div id="transit-data" >
		     	<div id = "sf-station-name-header">Embarcadero</div>

	      	  <div class="wrapper" style="width:100%;">
				    <div class="profile">
				         <!-- <h3>Pittsburg/Bay Point Station</h3> -->
				       <table id= "inboundData2">
				            <thead >
				              <tr>
				                  <th colspan="3" class="heading">
				                    <!-- BART Transit - Pleasant Hill/Contra Costa Centre Station -->
				                  </th>
				              </tr>
				                <tr>
				                    <th width="25%"></th>
				                    <th width="25%"></th>                
				                    <th width="25%"></th> 
				                    <th width="25%"></th>                
				                </tr>
				            </thead>
				          <tbody>
				           </tbody>
				       </table>     
				       <!-- <h3>San Francisco International Airport</h3> -->
				      <table id= "outboundData2">
				            <thead>
				                <tr>
				                    <th width="25%"></th>
				                    <th width="25%"></th>                
				                    <th width="25%"></th>                
				                    <th width="25%"></th>                
				                </tr>
				            </thead>
				          <tbody>
				          </tbody>
				       </table>
				      </div>
				    <div class="profile">
				       <table id="busData" style="display:none;">
				            <thead >
				                <tr>
				                    <th colspan="2" class="heading">
				                      CCCTA Connections: Route 15 - BART Pleasant Hill Station
				                    </th>
				                </tr>            
				                <tr>
				                    <th width="80%" align="left">Destination</th>
				                    <th width="20%" align="left">Arrival (min)</th>                
				                </tr>
				            </thead>
				          <tbody>
				           </tbody>
				       </table>
				      </div>
				    </div>    
				   </div>



		      		<!-- col-md-12 Closing Tag -->

<!-- 		      	<div >
  					<img class = "center-block img-responsive sf-transit-map" src="http://electronicbuildingdirectory.com/1340t/directory/images/transitmap.png">
				</div> -->


		      	</div>




		    </div> <!-- Closing tag col-md-4 -->

		    <div class = "col-md-4 television">

		        <div id="slideshow" >
														
	<div class="cycle-slideshow"  data-cycle-loader="wait" data-cycle-center-vert=true data-cycle-center-horz=true data-cycle-auto-height="640:1080" >
						<img src="../userfiles/images/1.png" data-cycle-timeout="10000" />
				</div>
				</div> 

		    </div>


		    <div class = "col-md-4 listing">
		            <!-- Building Image       -->
		      <div class = "row col-md-12 amenities-background-color">

		    	<div class = "">

			      	<div class = "small-section-header">
			      		<span id = "location-data"></span> 
			      	</div>	

			      	<div class = "small-section-content">
			      		<span id = "condition-data"></span> <br/>
			      		<span id = "high-temp-data" style="display:inline-block;"></span> 
			      		<span id = "forecast"></span> 
			      		<span id = "low-temp-data"></span> <br/>
			      		<span id = "wind-information-data"></span> 


			      					      		<!-- 
10/24: Removed h2 tag
		#moment-day is set to 24px in datata.css 
		#moment-month, moment-date, and pendule and set to 20px.
 -->
<div class = "pull-right">
	<span id="moment-day"></span>
	<span id="moment-month"></span>
	<span id="moment-date"></span> 
</div>




			      					      		<span id="transit-time"></span>  
			      	</div>

			   </div> <!-- Closing tag col-md-12-->

		      <div class = "">

		      	<div id="something" class = "small-section-header">
					News Headlines
				</div> 

				<div>
					        <div class="headlinesFeed">
          <div class="headlineLabel" style="padding-right:.5em;padding-top:5px;color:inherit;"><span></span></div>
          <div id="newsData" class="row newsCss"></div>
      	</div>
      	<ul id="newsList"></ul> 
				</div>

		      </div> <!-- col-md-12 Closing tag -->



		          <div id = "amenities">
		           		<div class = "amenities-header">Amenities</div>
		          <ul>
		          	<li>
			          	<div class = "header">24-HOUR ON-SITE SECURITY</div>
			          	<p class = "description">The Security console is located at the first-floor lobby and may be reached 24/7 at (415) 439-6758.</p>
		          	</li>
		          	<li>
			          	<div class = "header">POSTAL SERVICES</div>
			          	<p class = "description">The nearest postal office is located at <span style="text-decoration:underline">150 Sutter Street</span>. A FedEx drop-box and supplies are also available in the first-floor freight elevator lobby. Daily pick-ups at 5:00pm.</p>
		          	</li>
		          	<li>
			          	<div class = "header">ON-SITE PARKING</div>
			          	<p class = "description">Parking is located in the basement garage and valeted. For parking inquiries, please contact the Building Management Office (415) 675-7990. </p>
		          	</li>
		          	<li>
			          	<div class = "header">ON-BICYCLE PARKING</div>
			          	<p class = "description">88 Kearny Street provides bike racks for commuters and are located in the Garage. Bike access plan available upon request. Please see Security for details. </p>
		          	</li>
		          	<li><!-- Local Banking and Retail START TAG -->
		          		<div class="header">LOCAL BANKING & RETAIL</div>
		          		<ul class = "sublist">
		          			<li>
		          				<div class = "header-sublist">Citibank</div>
		          				<p class = "description">A full- service Citibank branch is located at the corner of Post and Kearny Streets.</p>
		          			</li>
		          		</ul>
		          	</li> <!-- Local Banking and Retail CLOSING TAG -->
		          	<li><!-- NEARBY LANDMARKS START TAG -->
		          		<div class="header">NEARBY LANDMARKS</div>
		          		<ul class = "sublist">
		          			<li>
		          				<div class = "header-sublist">Union Square</div>
		          				<p class = "description">Located 5 minutes West of 88 Kearny Street. The Square provides restaurants, icon SF landmarks and shopping.</p>
		          			</li>
		          			<li>
		          				<div class="header-sublist">Crocker Galleria</div>
		          				<p class="description">Provides shops and local boutiques, offering a variety of retail and restaurants. Farmer's Market operates from late Spring through late Fall on Thursdays until 3:00pm. Located at the Post Street between Montgomery and Kearny Street.</p>
		          			</li>
		          			<li>
		          				<div class="header-sublist">Moscone Center</div>
		          				<p class="description">Located 8 minutes Southeast of 88 Kearny Street. Shoppping and restaurants can be found in abundance.</p>
		          			</li>
		          		</ul>
		          	</li> <!-- NEARBY LANDMARKS CLOSING TAG -->

		          	<li>
		          		<div class="header">TRANSPORTATION</div>
		          		<ul class="sublist">
		          			<li>
		          				<div class="header-sublist">BART Station & MUNI</div>
		          				<p class = "description">Montgomery Bart Station is located one block, east down Post Street. The Bay Shore Muni Bus Stop is located at 66 Kearny.  </p>
		          			</li>
		          		</ul>
		          	</li>


		         	<li>

		         		<div class = "header">MANAGEMENT & LEASING</div>
		         			<div class = "description">

				      			<div class = "col-md-12" style = "text-align: center">
					      			<span class = "building-info pull-left">CBRE</span>
					      			<span class = "building-info"> 88 Kearny Street - Suite 1350 </span>
					      			<span class = "building-info pull-right">Phone: (415) 675-7990 </span>
					      		</div>
					      	</div>


		         	</li>

		          </ul>
		          </div>

		      </div>    
		    </div> <!-- Listing Closing Tag -->




		  </div> <!-- Row closing tag -->

		<!-- News, Weather, and Mgmt Info  -->

		  
		<!-- Footer Section   -->
		    <footer class = "row col-md-12 announcements-section">
				<!--ANNOUNCEMENTS-->
				<div id="announcements">
				  <script>
	var terms = new Array();
	// start
terms[0] = 'Have a great day!';
	//end

function rotateTerm() {
	if(terms.length == 0) {
		// $("#announcements").hide();
	}
  var ct = $("#announcement_text").data("term") || 0;
  $("#announcement_text").data("term", ct == terms.length -1 ? 0 : ct + 1).html(terms[ct])
              .fadeIn().delay(9000).fadeOut(500, rotateTerm);
}
$(rotateTerm); //start it on document.ready
</script>
<span id="announcements_header">Announcements:&nbsp;</span><span id="announcement"><span id="announcement_text"></span></span>				</div>		    
		      <!-- <span class = "title">Announcements:</span><span class = "title">HAVE A NICE DAY</span> -->
		    </footer>




		</div> <!-- Container Closing div tag -->
  
<!-- 		<div id="weather">
					</div> -->


		<!--SLIDESHOW-->  

<!-- <div id="Layer4" style="    position: absolute; z-index: 100 !important; width: 1900px; height: 45px; left: 0px; padding: 10px 10px 0 10px; top: 1025px; font-family: 'Gotham'; color: #000; font-size: 1.7em; font-variant:small-caps;">

				<div class="headlinesFeed">
					<div class="headlineLabel" style="padding-right:.5em;color:inherit;width:200px;vertical-align:middle;float:left;font-weight:bold;letter-spacing:2px;"><span>Headlines:</span></div>
					<div id="newsData" class="row newsCss" style="width: 80%; float: left; color: inherit; display: block;"><span class="headline"></span></div>
			</div>
			<ul id="newsList" style="display: none;"><li><span class="headline"></span><li></ul>

		</div> -->




<!-- 		<div style="position:absolute;top:350px;left:1520px;width:400px;z-index:1;text-align:center;color:#000;font-family:'Myriad Pro';">
			<div class="clearfix" style="float:right;width:400px;text-align:center;">
                <p style="color:#000; font-weight:normal;margin-top: 15px;font-size: 1.3em;">1521 S Staples St<br>
    Corpus Christi, TX 78404</p>
			</div>	 -->
            		
		</div>
		<div class="addressBottom">
			<h2>66 West Flagler Street<br/>Miami, FL 33130</h2>
            <p>Managed by:</p>
            <p><strong>Easton & Associates<br/>Management Company</strong></p>
            <p>(305) 591-9727</p>
            <br/>
            <p><strong>Easton & Associates, Inc</strong></p>
            <p>(305) 593-2222 Ext. 808</p>
            <p><img src="images/logo7.png" /></p>
        </div>
		<script type="text/javascript" src="features/datage/js/moment.min.js"></script>
		<script type="text/javascript" src="js/functions.js">		// including sourced functions </script>
		<script type="text/javascript" src="features/datage/js/getDate.js"></script>
		<script type="text/javascript" src="js/jquery.cycle2.js"></script>
		<script type="text/javascript" src="js/jquery.cycle2.center.js"></script>
		<script src="http://malsup.github.io/jquery.cycle2.center.js"></script>
		<script type="text/javascript" src="js/jquery.cycle2.tile.js"></script>
		<script type="text/javascript" src="features/weather/js/jquery.simpleWeather.js"></script>
		<script type="text/javascript" src="features/weather/js/getWeather.js"></script>
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="http://feedproxy.electronicbuildingdirectory.com/api/news/ticker/v1/js/jquery.jfeed.pack.js"></script>
		<script type="text/javascript" src="http://feedproxy.electronicbuildingdirectory.com/api/news/ticker/v1/js/newsTicker.js"></script>
		<!-- <script type="text/javascript" src="js/getNews.js"></script> -->
<script type="text/javascript">
$(document).ready(window.setTimeout(function() {
var rowHeight = parseInt($('#listdata .innerTbl tbody .indColumnWidth').css('height')); 
var fontSize = parseInt($('#listdata .innerTbl tbody tr td .individualName').css('font-size')); 
// console.log(fontSize);
var divHeight1 = parseInt($('#listdata').css('height')); 
var tableHeight1 = parseInt($('#listdata .innerTbl')[0].scrollHeight); 
// console.log(rowHeight + ':' + fontSize);
// console.log(divHeight1 + ':' + tableHeight1);
console.log('individual: '+tableHeight1 + ':' + divHeight1);
	console.log('individualOF: '+fontSize);
if (parseInt(tableHeight1) > parseInt(divHeight1)) {
	var rowFontSize = (parseInt(divHeight1) / (parseInt(tableHeight1) * 1));
	var rowHeightNew = ( parseInt(divHeight1) / parseInt(tableHeight1) )*1;
	var newHeight = Math.floor(rowHeightNew*rowHeight);
	console.log('individual-coeff: '+newHeight);
	var newFontSize = Math.floor(rowHeightNew*fontSize);
	console.log('individualNF: '+newFontSize);
	// console.log((parseInt(rowHeight) * parseInt(rowHeightNew) + 'px'))
	// $('#listdata .innerTbl tbody .indColumnWidth p').css('font-size', newFontSize + 'px');
	$('#listdata .innerTbl tbody .indColumnWidth').css('height', (newHeight) + 'px');
	console.log(tableHeight1 + ':' + divHeight1);
}

var rowHeight = parseInt($('#listdata .innerTbl tbody .compColumnWidth').css('height')); 
var fontSize = parseInt($('#listdata .innerTbl tbody tr td .companyName').css('font-size')); 
// console.log(fontSize);
var divHeight2 = parseInt($('#listdata').css('height')); 
var tableHeight2 = parseInt($('#listdata .innerTbl')[0].scrollHeight); 
// console.log(rowHeight + ':' + fontSize);
console.log('company: '+tableHeight2 + ':' + divHeight2);
console.log(tableHeight2 + ':' + divHeight2);
if (parseInt(tableHeight2) > parseInt(divHeight2)) {
	var rowFontSize = (parseInt(divHeight2) / parseInt(tableHeight2));
	var rowHeightNew = (parseInt(divHeight2) / parseInt(tableHeight2));
	var newHeight = Math.floor(rowHeightNew*rowHeight);
	console.log('company-coeff: '+newHeight);
	var newFontSize = Math.floor(rowHeightNew*fontSize);
	console.log('companyNF: '+newFontSize);
	// $('#listdata .innerTbl tbody .compColumnWidth p').css('font-size', newFontSize + 'px');
	$('#listdata .innerTbl tbody .compColumnWidth').css('height', (newHeight) + 'px');

}
console.log(tableHeight2 + ':' + divHeight2);
var rowHeight = parseInt($('#listdata .innerTbl tbody .indColumnWidth').css('height')); 
var fontSize = parseInt($('#listdata .innerTbl tbody tr td .individualName').css('font-size')); 
// console.log(fontSize);
var divHeight1 = parseInt($('#listdata').css('height')); 
var tableHeight1 = parseInt($('#listdata .innerTbl')[0].scrollHeight); 
// console.log(rowHeight + ':' + fontSize);
// console.log(divHeight1 + ':' + tableHeight1);
console.log('individual: '+tableHeight1 + ':' + divHeight1);
	console.log('individualOF: '+fontSize);
if (parseInt(tableHeight1) > parseInt(divHeight1)) {
	var rowFontSize = (parseInt(divHeight1) / (parseInt(tableHeight1) * 1));
	var rowHeightNew = ( parseInt(divHeight1) / parseInt(tableHeight1) )*1;
	var newHeight = Math.floor(rowHeightNew*rowHeight);
	console.log('individual-coeff: '+newHeight);
	var newFontSize = Math.floor(rowHeightNew*fontSize);
	console.log('individualNF: '+newFontSize);
	// console.log((parseInt(rowHeight) * parseInt(rowHeightNew) + 'px'))
	$('#listdata .innerTbl tbody .indColumnWidth p').css('font-size', newFontSize + 'px');
	// $('#listdata .innerTbl tbody .indColumnWidth').css('height', (newHeight) + 'px');
	console.log(tableHeight1 + ':' + divHeight1);
}

var rowHeight = parseInt($('#listdata .innerTbl tbody .compColumnWidth').css('height')); 
var fontSize = parseInt($('#listdata .innerTbl tbody tr td .companyName').css('font-size')); 
// console.log(fontSize);
var divHeight2 = parseInt($('#listdata').css('height')); 
var tableHeight2 = parseInt($('#listdata .innerTbl')[0].scrollHeight); 
// console.log(rowHeight + ':' + fontSize);
console.log('company: '+tableHeight2 + ':' + divHeight2);
console.log(tableHeight2 + ':' + divHeight2);
if (parseInt(tableHeight2) > parseInt(divHeight2)) {
	var rowFontSize = (parseInt(divHeight2) / parseInt(tableHeight2));
	var rowHeightNew = (parseInt(divHeight2) / parseInt(tableHeight2));
	var newHeight = Math.floor(rowHeightNew*rowHeight);
	console.log('company-coeff: '+newHeight);
	var newFontSize = Math.floor(rowHeightNew*fontSize);
	console.log('companyNF: '+newFontSize);
	$('#listdata .innerTbl tbody .compColumnWidth p').css('font-size', newFontSize + 'px');
	// $('#listdata .innerTbl tbody .compColumnWidth').css('height', (newHeight) + 'px');

}
console.log(tableHeight2 + ':' + divHeight2);
}, 1));
// alert($('.companyName').css('font-size'));



var timeSince = function(date) {

	var seconds = Math.floor((new Date() - date) / 1000);
    var intervalType;
    var posted = "Posted ";

    interval = Math.floor(seconds / 3600);

    if (interval >= 1) {
        intervalType = "Hours";
        console.log(interval + " " +  intervalType);
        return posted + interval + " " +  intervalType + " ago";
    } else {
        interval = Math.floor(seconds / 60);
        if (interval >= 1) {
            intervalType = "Minutes";
            console.log(interval + " " +  intervalType);
            return posted + interval + " " +  intervalType + " ago";
        } else {
            interval = seconds;
              intervalType = "Seconds";
              console.log(interval + " " +  intervalType);
              return posted + interval + " " +  intervalType + " ago";
        }
    }
};


jQuery(function() {

		function updateNews () {

		jQuery.getFeed({
				url: 'http://feedproxy.electronicbuildingdirectory.com/api/news/news_proxy.php?url=http://feeds.reuters.com/Reuters/domesticNews',
				success: function(feed) {
						$('#newsList').empty();
						
						console.log(feed);

						var html = '';
						
						for(var i = 0; i < feed.items.length && i < 10; i++) {
						
								var item = feed.items[i];

								var time_now = new Date(item.updated)

								html += '<li>'
								+ '<span class="headline">'
								+ '<span id = "news-title">' + item.title + '</span>'+ ' <br/> ' + '<span id = "item-time">' + timeSince(time_now) + '</span>' + '<br/>' + '<span id = "item-description">' + item.description + '</span>'
								+ '</span>'
								+ '</li>';
						}
						
						jQuery('#newsList').append(html);
								 $('#newsList').newsTicker();

				}    
		});
	}
	updateNews();
	setInterval(updateNews, 24000);



});


 </script>	




	</body>
</html>
