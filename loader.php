<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loading...</title>
    <style>
        /* Loader container styling with background color and text color */
        body {
  margin: 0%;
  background-color: #000;
  color: white;
}
        .loading-page {
            margin: 0;
            padding: 0;
            height: 100vh; /* Full viewport height */
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            background-color: #000; /* Black background */
            color: white; /* White text color */
        }

        /* Loader container styling */
        .loader {
            display: flex;
            justify-content: flex;
            align-items: start;
            height: 100%;
            width: 100%;
        }

        /* Wrapper for video to crop it */
        .loader-video {
            width: 100%;
            height: 60%; /* Adjust this value to crop more/less */
            overflow: hidden; /* Hides the bottom portion */
            position: relative;
        }

        /* Video styling */
        .loader-video video {
            display: block;
            width: 100%;
            height: auto;
            object-fit: cover; /* Ensures proportions are maintained */
            position: absolute;
            top: -10%; /* Moves the video upward; adjust the percentage */
            left: 0;
        }
    </style>
</head>
<body>
    <div class="loading-page">
        <div class="loader">
            <div class="loader-video">
                <!-- Added "autoplay", "muted", "loop" attributes -->
                <video src="videos/extended_loader.mp4" autoplay muted loop></video>
            </div>
        </div>
    </div>
</body>
</html>
