<a href="watch.php?path=<?php echo urlencode($movie_filename); ?>&title=<?php echo urlencode($movie_title); ?>">
    <div class="card">
        <video muted poster="./posters/<?php echo $movie_poster; ?>" src="./video_files/<?php echo $movie_filename; ?>" onmouseover="this.play();" onmouseout="this.load();" onended="this.load()">
        </video>

        <div class="info">
            <h2><?php echo $movie_title; ?></h2>
            <div class="bottom-card">
                <p><?php echo $movie_genre; ?></p>
                <p><?php echo $movie_duration; ?></p>
            </div>
        </div>
    </div>
</a>