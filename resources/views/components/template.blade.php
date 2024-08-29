<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/vanilla-js-carousel.css') }}">
</head>

<body>
    <header>
        <div class="logo">
            <a href="/"><img src="{{ asset('images/logo.webp') }}" alt="team-one logo"></a>
        </div>
        <div class="nav">
            <ul class="list display-none">
                <a href="/music/">
                    <li>Music
                        <div class="sub-menu">
                            <ul>
                                <a href="/music/">
                                    <li>Label</li>
                                </a>
                                <a href="/music/">
                                    <li>Management</li>
                                </a>
                                <a href="/music/">
                                    <li>Publishing</li>
                                </a>
                                <a href="/music/">
                                    <li>Personalities</li>
                                </a>
                            </ul>
                        </div>
                    </li>
                </a>
                <a href="/sports/">
                    <li>Sports
                        <div class="sub-menu">
                            <ul>
                                <a href="/sports/">
                                    <li>Baseball</li>
                                </a>
                                <a href="/sports/">
                                    <li>Basketball</li>
                                </a>
                                <a href="/sports/">
                                    <li>College</li>
                                </a>
                                <a href="/sports/">
                                    <li>Cricket</li>
                                </a>
                                <a href="/sports/">
                                    <li>Football</li>
                                </a>
                                <a href="/sports/">
                                    <li>International Football</li>
                                </a>
                                <a href="/sports/">
                                    <li>Netball</li>
                                </a>
                                <a href="/sports/">
                                    <li>Personalities</li>
                                </a>
                            </ul>
                        </div>
                    </li>
                </a>
                <a href="/news/">
                    <li>News</li>
                </a>
                <a href="/discover/">
                    <li>Discover</li>
                </a>
                <a href="/about-us/">
                    <li>About</li>
                </a>
                <a href="/partners/">
                    <li>Partners</li>
                </a>
            </ul>
        </div>
        <div class="hamburger-option">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        <div class="upper-footer">
            <h4>Follow Us</h4>
            <h3>Sign Up fo our newsletter to get the latest updates.</h3>
            <h4>ENTER EMAIL ADDRESS</h4>
            <form method="post">
                <input type="text" name="newsletter" id="newsletter"><br>
                <button type="submit" name="newsletterBtn">Send</button>
            </form>
        </div>
        <div class="main-footer display-flex">
            <div class="img">
                <img src="{{ asset('images/logo.webp') }}" alt="">
            </div>
            <div class="content">
                Terms of Use <i class="fa-solid fa-circle fa-xs"></i> Privacy Notice <i
                    class="fa-solid fa-circle fa-xs"></i> Cookie Policy <i class="fa-solid fa-circle fa-xs"></i> Do not
                sell
                or share my Personal Info <br>
                Licensing FAQ <i class="fa-solid fa-circle fa-xs"></i> Accessibility <i
                    class="fa-solid fa-circle fa-xs"></i> Platform Status <br>
                Contact <i class="fa-solid fa-circle fa-xs"></i> Send us a Tip <i class="fa-solid fa-circle fa-xs"></i>
                Masthead <i class="fa-solid fa-circle fa-xs"></i> About Us <i class="fa-solid fa-circle fa-xs"></i>
                Press
                Room <br>
                Editorial Ethics and Guidelines
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/vanilla-slider.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
@php
    if (isset($_POST['newsletterBtn'])) {
        $email = $_POST['newsletter'];

        $sender = $email;
        $recipient = 'newsletter@teamonemanagementgrp.com';

        $subject = 'Email Submission';
        $message = "
                  Customer Information
          Customer Email = $email
          ";
        $headers = 'From:' . $sender;

        if (mail($recipient, $subject, $message, $headers)) {
            echo "
              <script>
                  alert('Email Submitted')
              </script>
              ";
        } else {
            echo "
              <script>
                  alert('Plz Try Again')
              </script>
              ";
        }
    }
@endphp
