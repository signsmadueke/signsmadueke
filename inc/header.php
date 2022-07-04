<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?> — <?php echo $tagline; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="author" content="Signs Madueke">
    <meta name="description" content="<?= $page_description; ?>">
    <meta name="keywords" content="Signs Madueke, Signs Madueke, Christian Author, Christian, Author, Amazon, Religion, Spirituality, christianbook, devotion, faith, olukoya, prayer, Signs Madueke, prayer rain, blessing prayer, prayer book, spiritual exercises.">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <link rel="icon" href="favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="favicon.png" />
    <meta name="theme-color" content="#000000">
</head>

<body class="container <?php echo $extraBodyClasses; ?>">
    <section id="navigation" class="container">
        <div id="logo">
            <a href="/">
                <div class="logo-text">
                    <h3 class="logo-name">Signs Madueke</h3>
                    <p class="logo-tagline">Graphic Designer</p>
                </div>
            </a>
        </div>

        <div class="nav-space"></div>

        <nav>
            <ul>
                <li class="<?php if ($page_name == "My Work") {
                                echo "active";
                            } ?>">
                    <a href="/">Work</a>
                </li>
                <li class="<?php if ($page_name == "About Me") {
                                echo "active";
                            } ?>">
                    <a href="about">Bio</a>
                </li>
                <li>
                    <a href="mailto:hi@signsmadueke.com" class="btn btn-chevron btn-link">
                        <span>Email me at hi@signsmadueke.com</span>
                        <img class="svg" src="assets/images/icons/arrow-top-right.svg">
                    </a>
                </li>
            </ul>
        </nav>

        <button class="harmburger" name="Menu" alt="Menu" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </section>

    <div id="space"></div>

    <section id="sidebar">
        <section id="navigation">
            <div id="logo">
                <a href="/">
                    <div class="logo-text">
                        <h3 class="logo-name">Signs Madueke</h3>
                        <p class="logo-tagline">Graphic Designer</p>
                    </div>
                </a>
            </div>

            <div class="nav-space"></div>

            <button class="harmburger" name="Menu" alt="Menu" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </section>

        <nav>
            <ul>
                <li class="<?php if ($page_name == "My Work") {
                                echo "active";
                            } ?>">
                    <a href="/">
                        <span>Work</span>
                        <img src="assets/images/work/work.jpg" alt="">
                    </a>
                </li>
                <li class="<?php if ($page_name == "About Me") {
                                echo "active";
                            } ?>">
                    <a href="about">
                        <span>Bio</span>
                        <img src="assets/images/work/about.jpg" alt="">
                    </a>
                </li>
            </ul>
        </nav>

        <a href="mailto:hi@signsmadueke.com" class="btn btn-chevron btn-link">
            <span>Email me at hi@signsmadueke.com</span>
            <img class="svg" src="assets/images/icons/arrow-top-right.svg">
        </a>

        <div id="social">
            <ul>
                <li>
                    <a href="https://facebook.com/prayermadueke">
                        <img class="svg" src="assets/images/icons/social/facebook.svg" height="15px" alt="Facebook">
                    </a>
                </li>
                <li>
                    <a href="https://instagram.com/prayermadueke">
                        <img class="svg" src="assets/images/icons/social/instagram.svg" height="15px" alt="Instagram">
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/prayermadueke">
                        <img class="svg" src="assets/images/icons/social/twitter.svg" height="15px" alt="Twitter">
                    </a>
                </li>
            </ul>
        </div>

        <div id="sidebar-space"></div>

        <p class="copyright">&copy; <span id="copyrightdate">2022</span> Signs Madueke. All rights reserved.</p>

    </section>