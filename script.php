<?php
$city = $_POST['city'];
$req = file_get_contents('https://api.weatherapi.com/v1/current.json?key=b298341e3e764873a50210039230303&q='.$city);
if($req == ''){
    header('Location: /');
    exit();
}
$data = json_decode($req, true)['current'];

header('Location: weather.php?city='.$city.'&icon='.$data['condition']['icon'].'&temp_c='.$data['temp_c'].'&temp_f='.$data['temp_f'].'&title='.$data['condition']['text'].'&wind='.$data['wind_kph'].'&chance='.$data['precip_in'].'&hum='.$data['humidity']);
