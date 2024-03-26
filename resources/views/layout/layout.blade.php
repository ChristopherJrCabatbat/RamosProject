<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #333;
            padding: 20px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #ffffff;
            position: fixed;
            top: 0;
            width: 100vw;
        }

        header .logo img {
            width: 150px;
            height: auto;
        }

        header ul {
            display: flex;
            gap: 20px;
        }

        header ul li {
            list-style: none;
        }

        header ul li a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        header ul li a:hover {
            color: #ebb238; 
        }

        main {
            padding: 20px;
            margin-top: 50px;
        }

        footer {
            background-color: #333;
            color: #ffffff;
            text-align: center;
            padding: 8px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="Sherlock.png" alt="Logo">
        </div>
        <ul>
            <li><a href="/">Dashboard</a></li>
            <li><a href="aboutus">About Us</a></li>
            <li><a href="/contactus">Contact Us</a></li>
            <li><a href="/employee">Employee</a></li> 
            <li><a href="/grade">Grade</a></li> 
            <li><a href="/students">Student</a></li> 
        </ul>
    </header>
    
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Sherlock Studio. All rights reserved.</p>
        
    </footer>
</body>
</html>
