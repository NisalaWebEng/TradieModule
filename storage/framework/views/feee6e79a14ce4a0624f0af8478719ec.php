<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tradie Services - White Pages Australia</title>
    <link rel="icon" type="image/x-icon" href="https://static.thenounproject.com/png/1151515-200.png">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
            overflow-x: hidden;
        }
        header {
            background-color: #0073e6;
            color: white;
            padding: 20px 10px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        header h1 {
            margin: 0;
            font-size: 2em;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #005bb5;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }
        nav a:hover {
            background-color: #004494;
            border-radius: 5px;
        }
        .hero {
            text-align: center;
            padding: 100px 20px;
            background: linear-gradient(to right, rgba(0, 115, 230, 0.8), rgba(0, 91, 181, 0.8)), url('hero-bg.jpg') no-repeat center center/cover;
            color: white;
            animation: fadeIn 1.5s ease-in-out;
        }
        .hero h1 {
            font-size: 3em;
            margin: 0;
            animation: slideDown 1.5s ease-in-out;
        }
        .hero p {
            font-size: 1.5em;
            margin: 20px 0;
            animation: slideUp 1.5s ease-in-out;
        }
        .hero .cta {
            display: inline-block;
            margin: 20px 0;
            padding: 15px 30px;
            background-color: #ff6f61;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
            animation: bounceIn 2s ease-in-out;
        }
        .hero .cta:hover {
            background-color: #e65b50;
        }
        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
            opacity: 0;
            animation: fadeIn 2s ease-in-out forwards;
            animation-delay: 1s;
        }
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            flex: 1;
            min-width: 300px;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card h2 {
            margin-top: 0;
            font-size: 1.75em;
            color: #0073e6;
        }
        .card p {
            font-size: 1.1em;
            color: #555;
        }
        .cta-card {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #0073e6;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .cta-card:hover {
            background-color: #005bb5;
        }
        footer {
            background-color: #0073e6;
            color: white;
            text-align: center;
            padding: 20px 10px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideDown {
            from { transform: translateY(-50px); }
            to { transform: translateY(0); }
        }
        @keyframes slideUp {
            from { transform: translateY(50px); }
            to { transform: translateY(0); }
        }
        @keyframes bounceIn {
            0%, 20%, 40%, 60%, 80%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Tradie Services - White Pages Australia</h1>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="search">Find a Tradie</a>
        <a href="register">Register Your Service</a>
        <a href="quotes">Service Quotes</a>
        <a href="#">Contact Us</a>
    </nav>
    <section class="hero">
        <h1>Connecting Local Residents with Trusted Tradies</h1>
        <p>Find reliable tradies or register your own service today.</p>
        <a href="#" class="cta">Get Started</a>
    </section>
    <section class="container">
        <div class="card">
            <h2>Search for Tradie Services</h2>
            <p>Browse through our list of registered tradies to find the right person for the job. Compare quotes and choose the best service for your needs.</p>
            <a href="search" class="cta-card">Learn More</a>
        </div>
        <div class="card">
            <h2>Register as a Tradie</h2>
            <p>Are you a skilled tradie looking to expand your client base? Register your services on our platform and reach local residents looking for your expertise.</p>
            <a href="register" class="cta-card">Register Now</a>
        </div>
        <div class="card">
            <h2>Service Quotes</h2>
            <p>Transparency is key. Compare quotes from different tradies and negotiate directly to ensure you're getting the best value for your money.</p>
            <a href="quotes" class="cta-card">Get Quotes</a>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Tradie Services - White Pages Australia. All rights reserved.</p>
    </footer>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/tradies.blade.php ENDPATH**/ ?>