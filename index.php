<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;700&display=swap" rel="stylesheet">
    <title>METFLIX</title>
</head>

<body>
    <h1 id="main_title">🍿TODAY'S MOVIES🍿</h1>
    <section>
        <p class="scroll">🍿 Select a Video to Watch 🥤</p>
    </section>
    <div id="movieDiv">

        <?php
        $data = json_decode(file_get_contents("./movies.json"));
        //file gets contents gives us a string of info
        //json decode unraps stringified json(so like parse json in javascript)
        $movies_array = $data->movies;
        foreach ($movies_array as $movie) {
            $movie_title = $movie->title;
            $movie_genre = $movie->genre;
            $movie_duration = $movie->duration;
            $movie_filename = $movie->filename;
            $movie_poster = ($movie->poster);
            include "card.php";
        }
        ?>
    </div>
</body>

</html>