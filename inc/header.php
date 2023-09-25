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
    <link type="text/css" rel="stylesheet" href="assets/css/lightbox.min.css" />

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
                    <h1 class="logo-name">Signs Madueke</h1>
                    <h2 class="logo-tagline">Graphic Designer</h2>
                </div>
            </a>
        </div>

        <div class="nav-space"></div>

        <nav>
            <ul>
                <li class="<?php if ($page_name == "Work") {
                                echo "active";
                            } ?>">
                    <a href="/">Work</a>
                </li>
                <li class="<?php if ($page_name == "Bio") {
                                echo "active";
                            } ?>">
                    <a href="bio">Bio</a>
                </li>
                <li>
                    <a href="mailto:hi@signsmadueke.com?subject=Hello%20Signs&amp;body=My%20name%20is%3A%0D%0A%0D%0AI%20would%20like%20us%20to%20talk%20about%3A" class="btn btn-chevron btn-link">
                        <span>Email me at hi@signsmadueke.com</span>
                        <img class="svg" src="assets/images/icons/arrow-top-right.svg" alt="Arrow Top Right" height="11px" width="auto">
                    </a>
                </li>
            </ul>
        </nav>

        <button class="harmburger" name="Menu" aria-label="Menu" alt="Menu" type="button">
            <span class="icon">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </span>
            <img class="svg" src="assets/images/icons/harmburger/menu.svg" alt="Menu" width="35px" height="auto">
        </button>
    </section>

    <div id="space"></div>

    <section id="sidebar">
        <section id="navigation">
            <div id="logo">
                <a href="/">
                    <div class="logo-text">
                        <h2 class="logo-name">Signs Madueke</h2>
                        <p class="logo-tagline">Graphic Designer</p>
                    </div>
                </a>
            </div>

            <div class="nav-space"></div>

            <button class="harmburger" name="Menu" aria-label="Menu" alt="Menu" type="button">
                <span class="icon">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </span>
                <img class="svg" src="assets/images/icons/harmburger/close.svg" alt="Menu" width="35px" height="auto">
            </button>
        </section>

        <nav>
            <ul>
                <li>
                    <a href="/">
                        <span>Work</span>
                        <img src="assets/images/work.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="bio">
                        <span>Bio</span>
                        <img src="assets/images/about.jpg" alt="">
                    </a>
                </li>
            </ul>
        </nav>

        <a href="mailto:hi@signsmadueke.com?subject=Hello%20Signs&amp;body=My%20name%20is%3A%0D%0A%0D%0AI%20would%20like%20us%20to%20talk%20about%3A" class="btn btn-chevron btn-link">
            <span>Email me at hi@signsmadueke.com</span>
            <img class="svg" src="assets/images/icons/arrow-top-right.svg" alt="Arrow Top Right" height="11px" width="auto">
        </a>

        <div id="social">
            <ul>
                <li>
                    <a target="_blank" href="https://www.behance.net/signsmadueke" title="Signs Madueke on Behance">
                        <img class="svg" src="assets/images/icons/social/behance.svg" height="20px" width="auto" alt="Signs Madueke on Behance" title="Signs Madueke on Behance">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://linkedin.com/in/signsmadueke" title="Signs Madueke on LinkedIn">
                        <img class="svg" src="assets/images/icons/social/linkedin.svg" height="20px" width="auto" alt="Signs Madueke on LinkedIn" title="Signs Madueke on LinkedIn">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://instagram.com/signsmadueke" title="Signs Madueke on Instagram">
                        <img class="svg" src="assets/images/icons/social/instagram.svg" height="20px" width="auto" alt="Signs Madueke on Instagram" title="Signs Madueke on Instagram">
                    </a>
                </li>
            </ul>
        </div>

        <div id="sidebar-space"></div>

        <p class="copyright">&copy; <span id="copyrightdate">2022</span> Signs Madueke. All rights reserved.</p>

    </section>