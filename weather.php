<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="public/css/style.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    
    <title>Weather</title>
</head>
<body>
    <div class="weather">

        <form action="script.php" method="POST" class="search" id="search">
                <input type="text" class="field" name="city" id="input-city" placeholder="City" value="<?=$_GET['city']?>">
                <button class="button" type="submit">
                    <img src="public/icons/search.png" alt="">
                </button>
            
        </form>

        <div class="search-result search-result-show" id="search-result">
            <div class="content">
                <div class="main">
                    <div class="icon">
                        <img src="<?=$_GET['icon']?>" alt="" id="icon">
                    </div>
                    <div class="data">
                        <div class="temperature">
                            <div class="celsius" id="temp_c"><?=round($_GET['temp_c']).'°C'?></div>
                            <div class="farengeit" id="temp_f"><?=round($_GET['temp_f']).'°F'?></div>
                        </div>
                        <div class="weather-type" id="title"><?=$_GET['title']?></div>
                    </div>
                </div>
            </div>
            <div class="additionals">
                <div class="wind-speed" title="Wind speed">
                    <img src="public/icons/weather/wind.png" alt="">
                    <div class="text" id="wind"><?=round($_GET['wind']).'km/h'?></div>
                </div>
                <div class="chance" title="Chance of precipitation">
                    <img src="public/icons/weather/chance.png" alt="">
                    <div class="text" id="chance"><?=round($_GET['chance']).'%'?></div>
                </div>
                <div class="wet" title="Humidity">
                    <img src="public/icons/weather/water.png" alt="">
                    <div class="text" id="wed"><?=round($_GET['hum']).'%'?></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
