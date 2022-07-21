<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plift</title>
    <!-- Normalize and font links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <img class="header--logo" src="images/plift-logo.svg" alt="plift - logo">
        </div>
    </header>
    <div class="hero-section">
        <div class="hero-section--content">
            <div class="hero-section--content-wrapper">
                <h1 class="hero-section--content-wrapper-title">
                    Treat Yourself. Better.
                </h1>
                <p class="hero-section--content-wrapper-description">
                    Plift is the elevated way to unwind — high on taste, low on calories, 
                    and perfectly dosed. Sign up to know when this pick-me-up beverage
                    is available.
                </p>
                <a class="button light" href="#">SIGN ME UP</a>
            </div>
        </div>
        <div class="hero-section--featured-image">
            <img class="hero-section--featured-image-image" src="images/2-cans-floating.png" alt="plift - two cans floating">
        </div>
    </div>
    <div class="form-section">
        <div class="container">
            <div class="form-section--featured-image">
                <img class="form-section--featured-image-image" src="images/Hand-2-sky-palmtree.png" alt="plift - two cans floating">
                <img class="form-section--featured-image-image-stamp" src="images/plift-stamp.svg" alt="plift - stamp">
            </div>
            <div class="form-section--content">
                <h2 class="form-section--content-title">
                    Sign up for Plift updates
                </h2>
                <p class="form-section--content-description">
                    Fill out this form to subscribe to email news about Plift.
                </p>
                <form class="form">
                    <!-- Add the class 'required' to mark a field as required and adding an asterisc to the labels -->
                    <div class="form--control-group required">
                        <label class="form--control-label" for="firstname">First Name</label>
                        <input class="form--control-input" type="text" id="firstName" name="firstname" placeholder="Type here...">
                    </div>
                    <div class="form--control-group required">
                        <label class="form--control-label" for="firstname">Last Name</label>
                        <input class="form--control-input" type="text" id="lastName" name="lastname" placeholder="Type here...">
                    </div>
                    <div class="form--control-group required">
                        <label class="form--control-label" for="email">Email</label>
                        <input class="form--control-input" type="email" id="email" name="email" placeholder="Type here...">
                    </div>
                    <input class="button dark" type="submit" value="SUBMIT">
                </form>
            </div>
        </div>
    </div>
    <div class="call-to-action-section">
        <div class="container">
            <div class="call-to-action-section--content">
                <h2 class="call-to-action-section--content-title">
                    Wholesale inquiries, please contact:
                </h2>
                <p class="call-to-action-section--content-description">
                    <a href="mailto:wholesale@plift.com">wholesale@plift.com</a>
                </p>
                <a class="button dark" href="mailto:wholesale@plift.com">CONTACT US</a>
            </div>
            <div class="call-to-action-section--featured-image">
                <img class="call-to-action-section--featured-image-image" src="images/environmental.png" alt="plift - environmental">
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer--brand-wrapper">
                <img class="footer--logo" src="images/plift-logo.svg" alt="plift - logo" >
                <ul class="footer--social-media-list">
                    <li class="footer--social-media-list-item">
                        <a href="#">
                            <img class="footer--social-media-list-item--icon" src="images/twitter-icon.svg" alt="Twitter" >
                        </a>
                    </li>
                    <li class="footer--social-media-list-item">
                        <a href="#">
                            <img class="footer--social-media-list-item--icon" src="images/facebook-icon.svg" alt="Facebok" >
                        </a>
                    </li>
                    <li class="footer--social-media-list-item">
                        <a href="#">
                            <img class="footer--social-media-list-item--icon" src="images/linkedin-icon.svg" alt="LinkedIn" >
                        </a>
                    </li>
                    <li class="footer--social-media-list-item">
                        <a href="#">
                            <img class="footer--social-media-list-item--icon" src="images/youtube-icon.svg" alt="YouTube" >
                        </a>
                    </li>
                    <li class="footer--social-media-list-item">
                        <a href="#">
                            <img class="footer--social-media-list-item--icon" src="images/tiktok-icon.svg" alt="TikTok" >
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer--copy-right-wrapper">
                <span class="copy-right">
                    © 2022 PLIFT, Inc All Rights Reserved
                </span>
            </div>
        </div>
    </footer>
</body>
</html>