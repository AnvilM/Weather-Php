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
        <form action="script.php" method="POST" class="search search-not-active" id="search">
                <input type="text" class="field" name="city" id="input-city" placeholder="City">
                <button class="button" type="submit">
                    <img src="public/icons/search.png" alt="">
                </button>
            
        </form>
    </div>
    <script src="public/js/script.js"></script>
</body>
</html>
