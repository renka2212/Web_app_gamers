<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Gaming Hub</title>
    <link rel="stylesheet" href="/css/main.css">
    <style>
        body {
            animation: fadeIn 1.5s ease-in;
        }

        .hero-about {
            animation: slideIn 2s ease-out;
        }

        .work .block {
            animation: zoomIn 1.2s ease-in-out;
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
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .hero-about .info h1 {
            color: #fff;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero-about {
            background: url('/img/about-background.jpg') no-repeat center center / cover;
            padding: 3rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #fff;
        }

        .work .block {
            border: 1px solid #444;
            padding: 1rem;
            margin: 1rem 0;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .work .block:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn {
            background-color: #ff4500;
            color: #fff;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #ff6347;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php"; ?>

        <div class="hero-about container">
            <div class="info">
                <h1>About Gaming Hub</h1>
                <p>We are passionate gamers creating a community for enthusiasts worldwide. Join us to experience the best of gaming, from cutting-edge content to thrilling events and connections.</p>
                <button class="btn">Contact Us</button>
            </div>
            <img src="/img/about-banner.png" alt="About Gaming Hub Banner">
        </div>

        <div class="container work">
            <h2>Why Choose Gaming Hub</h2>
            <div class="blocks">
                <div class="block">
                    <span class="badge purple">Community First</span>
                    <h3>Join Our Gamer Network</h3>
                    <p>Connect with thousands of gamers worldwide and stay updated on the latest trends and games.</p>
                </div>
                <div class="block">
                    <span class="badge brown">Exclusive Content</span>
                    <h3>Top-Notch Resources</h3>
                    <p>Access reviews, tips, and insider information that help you dominate the gaming world.</p>
                </div>
                <div class="block">
                    <span class="badge green">Innovation</span>
                    <h3>Leading Gaming Tech</h3>
                    <p>Experience the future of gaming with our AR/VR solutions and cutting-edge development.</p>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "blocks/header.php"; ?>
</body>

</html>
