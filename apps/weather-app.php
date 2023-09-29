<?php
//ENTER API KEY BEFORE USE!!!!
$apiKey = '';
echo "Welcome to Weathermaster 3000\n";
$city = trim(readline('Please enter City : '));
$url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=metric";
$responseData = json_decode(@file_get_contents($url));


function getWeatherReport($responseData): string
{
    if (!is_object($responseData)) {
        die("City not found or an error occurred.\n");

    } else {

        $cityName = $responseData->name;
        $countryCode = $responseData->sys->country;
        $weatherReport = $responseData->weather[0]->main;
        $weatherTemp = round($responseData->main->temp, 1) . "°C";
        $weatherPressure = $responseData->main->pressure . "hPA";
        $weatherHumidity = $responseData->main->humidity . "%";
        $windSpeed = $responseData->wind->speed . "m/s";
        echo PHP_EOL;
        $report = "Location : $cityName $countryCode\n";
        $report .= "Weather : $weatherReport\n";
        $report .= "Temperature : $weatherTemp\n";
        $report .= "Humidity : $weatherHumidity\n";
        $report .= "Pressure : $weatherPressure\n";
        $report .= "Wind speed : $windSpeed\n";

        return $report;
    }
}

echo getWeatherReport($responseData);
