// v3.1.0
//Docs at http://simpleweatherjs.com
var jQuery2 = jQuery.noConflict(true);

jQuery2(document).ready(function() {
  getWeather();
  setInterval(getWeather, 60000 * 20); //SET WEATHER UPDATE INTERVAL
});
function getWeather(){

  jQuery2.simpleWeather({
    location: 'San Francisco, CA 94108',
    woeid: '',
    unit: 'f',
    windy: function wind(){
      console.log(weather.city)

    },
    success: function(weather) {

      console.log(weather);


      var temperature =  weather.temp + '°'+ weather.units.temp;

      // var location = weather.city + ', ' + weather.region + ' Forecast';
      var location = "San Francisco, CA Forecast";
      var condition =  weather.currently;

      var high_Temperature = 'Hi  ' + '<span style = "font-size:50px">' + weather.high + '°' + weather.units.temp + '</span>';
      var low_Temperature = 'Lo ' + '<span style = "font-size:34px">' + weather.low + '°' + weather.units.temp + '</span>';

      var wind_information = 'Wind: '+weather.wind.direction+ ' @ '+weather.wind.speed + 'MPH';

      var condition_img = '<img src ="features/weather/ico/' +weather.code +'.PNG" width="75" style="margin-top:-30px;">'

      html = '<h2><ul><li class="location">'+weather.city+'</li><br/><li class="temp">'+weather.temp+'&deg;'+weather.units.temp+' </li></ul><ul><li class="symbol"><i class="weather icon-'+weather.code+'"></i></li></ul></h2>';
      // html += '<ul class="forecast"><li class="location">'+weather.city+', '+weather.region+'</li>';
      // html += '<li class="currently">'+weather.currently+'</li>';
      // html += '<li>'+ 'Wind: '+weather.wind.direction+ ' @ '+weather.wind.speed+' ' + weather.units.speed + '</li></ul>';
  
      jQuery2("#weather-data").html(html);
      jQuery2("#temperature-data").html(temperature);
      jQuery2("#location-data").html(location);
      jQuery2("#condition-data").html(condition);
      jQuery2("#high-temp-data").html(high_Temperature);
      jQuery2("#low-temp-data").html(low_Temperature);
      jQuery2("#wind-information-data").html(wind_information);
      jQuery2("#forecast").html(condition_img);
     

     

      var forecastHtml = '<ul class="forecast">';
      for(var i=0;i<3;i++) {
        forecastHtml += '<li>'+'<p class="forecast-day">'+moment(weather.forecast[i].date).format('ddd')+'</p>'+'<p class="forecast-symbol">'+'<i class="weather icon-'+weather.forecast[i].code+'"></i>'+'</p></li>';
      }
      forecastHtml += '</ul>';
      //jQuery2("#weather-data").append(forecastHtml); //COMMENT THIS OUT TO DISABLE MULTI-DAY FORECAST
      // jQuery2("#forecast").html(forecastHtml);
    },
    error: function(error) {
      getWeather();
    }
  });
}