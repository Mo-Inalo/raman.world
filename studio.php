<?php
include "templates/headervid.php";
?>

<video autoplay muted loop id="myVideo">
    <source src="/videos/elendvid1.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>

<div class="content">
     <a class="text-light h5" href="index.php" > back to home</a>
    <p> I'm Elende Usiv, a Cologne-based composer and music editor for media who has worked on films and commercials.
        You can hear some of my music on YouTube, Soundcloud and Spotify.
        At the same time as my film music career, I composed and arranged many pop songs for various Kurdish singers.
        who have supported my journey and career as a film music composer!
    </p>
    <button id="myBtn" onclick="myFunction()">Pause</button>
</div>

<script>
    var video = document.getElementById("myVideo");
    var btn = document.getElementById("myBtn");

    function myFunction() {
        if (video.paused) {
            video.play();
            btn.innerHTML = "Pause";
        } else {
            video.pause();
            btn.innerHTML = "Play";
        }
    }
</script>

</body>
</html>







