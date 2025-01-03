<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Hub</title>
    <link rel="stylesheet" href="/css/main.css">
    <style>
        body {
            animation: fadeIn 1.5s ease-in;
        }

        .hero {
            animation: slideIn 2s ease-out;
            position: relative;
        }

        .games .block {
            animation: zoomIn 1s ease-in-out;
        }

        .projects {
            animation: fadeUp 1.5s ease-out;
        }

        .email {
            animation: bounceIn 1.5s ease-in-out;
        }

        footer {
            animation: fadeInFooter 2s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideOut {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.5);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes fadeUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes bounceIn {
            0% {
                transform: scale(0.5);
                opacity: 0;
            }
            60% {
                transform: scale(1.1);
                opacity: 1;
            }
            100% {
                transform: scale(1);
            }
        }

        @keyframes fadeInFooter {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .hero img {
            animation: slideIn 2s ease-out;
        }

        .hero.scrolled img {
            animation: slideOut 2s ease-out;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php"?>

        <div class="hero container" id="hero">
            <div class="hero--info">
                <h2>Gaming Hub</h2>
                <h1>Your Ultimate Gaming Destination</h1>
                <p>Discover trending games, read reviews, and join the gamer community today!</p>
                <button class="btn">Explore Now</button>
            </div>
            <img src="img/joystick.svg" alt="Joystick">
        </div>

        <div class="container trending">
            <a href="#" class="see-all">SEE ALL</a>
            <h3>Currently Trending Games</h3>

            <div class="games">
                <?php
                // DB
                require_once "lib/db.php";

                //SQL
                $sql = 'SELECT * FROM trending ORDER BY id DESC LIMIT 4';
                $query = $pdo->prepare($sql);
                $games = $query->fetchAll(PDO::FETCH_OBJ);

                foreach($games as $el)
                    echo '
                <div class="block">
                    <img src="/img/' . $el->image . '" alt="Game image">
                    <span><img src="/img/fire.svg" alt="Fire icon"> ' . $el->followers . ' Followers</span>
                </div>';
                ?>
            </div>
        </div>

        <div class="container big-text">
            <p>"Gaming is not just a hobby; it’s a way of life."</p>
        </div>

        <div class="container banner">
            <h3>Level Up Your Gaming Experience</h3>
            <p>Explore new horizons with cutting-edge games and technology tailored for enthusiasts like you.</p>
            <img src="/img/banner.png" alt="Gaming Banner">
        </div>
    </div>

    <div class="features">
        <div class="container">
            <h3>Our Core Features</h3>
            <p>We bring you the best gaming content, from mobile to VR. Explore our services below:</p>
            <div class="info">
                <div class="block">
                    <img src="/img/feature1.png" alt="Mobile Gaming">
                    <p>Mobile Game Development</p>
                    <img src="/img/arrow.png" alt="Arrow">
                </div>
                <div class="block">
                    <img src="/img/feature2.png" alt="PC Gaming">
                    <p>PC Game Development</p>
                    <img src="/img/arrow.png" alt="Arrow">
                </div>
                <div class="block">
                    <img src="/img/feature3.png" alt="Console Gaming">
                    <p>PS4 Game Development</p>
                    <img src="/img/arrow.png" alt="Arrow">
                </div>
                <div class="block">
                    <img src="/img/feature4.png" alt="VR">
                    <p>AR/VR Solutions</p>
                    <img src="/img/arrow.png" alt="Arrow">
                </div>
                <div class="block">
                    <img src="/img/feature5.png" alt="Design">
                    <p>AR/VR Design</p>
                    <img src="/img/arrow.png" alt="Arrow">
                </div>
                <div class="block">
                    <img src="/img/feature6.png" alt="3D Models">
                    <p>3D Modelings</p>
                    <img src="/img/arrow.png" alt="Arrow">
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="container projects">
            <h3>Our Recent Projects</h3>
            <p>Take a glimpse at some of the exciting projects we've worked on:</p>
            <div class="images">
                <img src="/img/Project1.png" alt="Project 1">
                <img src="/img/Project2.png" alt="Project 2">
                <img src="/img/Project3.png" alt="Project 3">
            </div>
            <div class="images">
                <img src="/img/Project4.png" alt="Project 4">
                <img src="/img/Project5.png" alt="Project 5">
                <img src="/img/Project6.png" alt="Project 6">
            </div>
            <a href="#" class="see-all">SEE ALL</a>
        </div>

        <div class="container email">
            <h3>Stay Updated</h3>
            <p>Subscribe to receive the latest news and updates about Gaming Hub.</p>
            <div class="block">
                <div>
                    <h4>Stay in the loop</h4>
                    <p>Join thousands of gamers in our community today!</p>
                </div>
                <div>
                    <input type="email" id="emailField" placeholder="Enter email address">
                    <button onclick="checkEmail()">Subscribe</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="blocks container">
            <div>
                <span class="logo">Gaming Hub</span>
                <p>Your one-stop destination for all things gaming.</p>
            </div>
            <div>
                <h4>About us</h4>
                <ul>
                    <li>About Gaming Hub</li>
                    <li>Our Portfolio</li>
                    <li>Careers</li>
                    <li>Contact us</li>
                </ul>
            </div>
            <div>
                <h4>Contact us</h4>
                <p>We'd love to hear from you!</p>
                <p>+908 89097 890</p>
            </div>
        </div>
        <hr>
        <p>Copyright ® 2021 Gaming Hub. All rights reserved.</p>

        <?php require_once "blocks/header.php"?>

        <script>
            function checkEmail() {
                let email = document.querySelector('#emailField').value;
                if (!email.includes('@')) alert('Please include an @ in the email address.');
                else if (!email.includes('.')) alert('Please include a dot in the email address.');
                else alert('Thank you for subscribing!');
            }

            // Scroll listener to toggle animation class
            window.addEventListener('scroll', function () {
                const hero = document.getElementById('hero');
                if (window.scrollY > 50) {
                    hero.classList.add('scrolled');
                } else {
                    hero.classList.remove('scrolled');
                }
            });
        </script>
    </footer>
</body>

</html>
