<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Interactive video</title>
    <meta name="description" content="Interactive video template">
    
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
   
    <!-- BOOTSTRAP LINKS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- CSS STYLESHEET -->
    <link rel="stylesheet" text="text/css" href="style.css">

</head>

<body>

    <div id="content-wrapper" class="large-pad">

        <h1 class="text-center py-5">Interactive video template</h1>

        <div id="video-wrapper" class="d-flex justify-content-center">
            <div class="video-player position-relative" id="player">
                <video width="100%" controls class="position-relative" id="myvideo">
                    <source src="assets/video_intro" type="video/mp4">
                </video>
                <img src="assets/close_icon.png" alt="close-icon" class="img-fluid close-icon" onclick="stopVideo(); muteVid()">
                
                <div id="video-choice" class="d-none justify-content-between">
                    <a href="#" id="nature" class="btn-choice" onclick="playVideo('assets/nature_video.mp4')">Nature</a>
                    <a href="#" id="urban" class="btn-choice" onclick="playVideo('assets/urban_video.mp4')">Urban</a>
                </div>
                
            </div>
        </div>

    </div>




<!-- BOOTSTRAP SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!-- VIDEOPLAYER SCRIPTS -->
<script>
    var videoPlayer = document.getElementById("player");
    var video = document.getElementById("myvideo");

    function stopVideo (){
        videoPlayer.style.display = "none";
        video.pause();
    }

    function playVideo (file){
        video.src = file;
        videoPlayer.style.display = "block";
        video.muted = false;
        video.play();
    }

    function muteVid() {
        video.muted = true;
    }

    // JavaScript
    video.addEventListener("timeupdate", (e) => {
        var choice = document.getElementById("video-choice");
        console.log(video.currentTime);
        if (video.currentTime >= 3) {
            console.log("hello");
            choice.classList.remove("d-none");
        };
    });

    // jquery
    // video.addEventListener('timeupdate', (e) => {
    //     console.log(e.target.currentTime);
    //     if (e.target.currentTime > 13 && !$("#video-choice").hasClass("d-none")) {
    //         $("#video-choice").addClass("d-none");
    //         console.log("add")
    //     } 
    //     else if (e.target.currentTime >= 3 && $("#video-choice").hasClass("d-none")) {
    //         $("#video-choice").removeClass("d-none");
    //         console.log("remove")
    //     }
    // });
</script>
</body>