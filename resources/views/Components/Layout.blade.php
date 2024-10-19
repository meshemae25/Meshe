-<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield ('title') Project Portfolio</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
    
        .fade-in {
            animation: fadeIn 1s ease-in forwards; 
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            border: none;
            outline: none;
            scroll-behavior: smooth;
            font-family: 'Arial', sans-serif;
        }

        :root {
            --bg-color: #f8f9fa; 
            --second-bg-color: #e9ecef; 
            --text-color: #343a40;
            --content-color: #F5F7F8;
            --main-color: #0D7C66; 
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
            overflow-y: hidden; 
        }

        body {
            background: linear-gradient(90deg, rgba(166,160,237,1) 0%, rgba(111,235,210,1) 50%, rgba(240,218,187,1) 100%);
            color: var(--text-color);
            overflow: hidden; 
            
        }
        section{
            min-height: 100vh;
            padding: 10rem 9% 2rem;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1rem 9%;
            background: linear-gradient(90deg, rgba(166,160,237,1) 0%, rgba(111,235,210,1) 50%, rgba(240,218,187,1) 100%);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }

        .portfolio {
            font-size: 3.0rem;
            color: white;
            font-weight: 600;
            cursor: default;
        }

        .navbar a {
            font-size: 2.0rem;
            color: white;
            margin-left: 4rem;
            transition: 0.3s;
        }

        .navbar a:hover,
        .navbar a.active {
            color: black;
        }

        .home{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .home-content h3{
            font-size: 3.2rem;
            font-weight: 800;
        }

        .home-content h3:nth-of-type(2){
            margin-bottom: 2rem;
        }

        .home-content h1{
            font-size: 5.6rem;
            font-weight: 700;
            line-height: 1.3;
        }

        .home-img img {
            width: 40vw;
        }

        .home-content p {
            font-size: 1.6rem;
        }

        .compilation {
            background: linear-gradient(90deg, rgba(166,160,237,1) 0%, rgba(111,235,210,1) 50%, rgba(240,218,187,1) 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; 
        }

        .compilation h2 {
            margin-bottom: 4rem;
            font-size: 3.2rem;
            text-align: center;
        }

        .compilation-container {
            display: inline-grid;
            grid-template-columns: repeat(4, minmax(300px, 2fr)); /* 4 columns */
            gap: 1.5rem; 
            justify-content: center; 
            align-items: center;
            max-width: 1500px; /* Set to desired max width */
            margin: 0 auto; /* Center the container */
}

        .compilation-container .compilation-box {
            position: relative; /* Change from inline-grid to relative */
            border-radius: 1rem;
            box-shadow: 0 0 1rem var(--bg-color);
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center; /* Center items vertically */
            width: 150%; 
            height: 200px; /* Set a fixed height or adjust as needed */
            transition: transform 0.3s ease; 
}
       
        .compilation-box:hover img{
            transform: scale(1.1);
        }

        .compilation-box img {
            width: 150%; 
            height: 150%; 
            transition: .10s ease; 
            
        }

        .compilation-box .compilation-layer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0, .1), var(--main-color));
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 0 2rem;
            opacity: 0;
            transform: translateY(100%);
            transition: .5s ease; 
        }

        .compilation-box {
            opacity: 0;
            transform: translateY(20px) scale(0.9);
            transition: opacity 0.3s ease, transform 0.3s ease;
            position: relative;
}
        .compilation-box:hover .compilation-layer {
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .compilation-layer h4 {
            font-size: 3rem;
            color: var(--content-color);
        }

        .compilation-layer p {
            margin-bottom: 1rem; 
            color: var(--content-color);
        }
        .compilation-layer a i {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-size:  2rem;
            border-radius: 50%;
            background: var(--content-color);
        }
        .compilation-layer i {
            color: var(--text-color);
            width: 5rem;
            height: 5rem;
            margin-top: 20%;
        }

/* General container styles */
.center-container {
    display: flex;
    justify-content: center;
    align-items: flex-start; /* Aligns content to the top */
    min-height: 100vh; /* Take at least full viewport height */
    padding: 2%; /* Responsive padding */
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Flexbox layout for portfolio content (narrative and images side by side) */
.portfolio-content {
    display: flex;
    flex-direction: row; /* Side by side */
    justify-content: space-between; /* Space between narrative and image grid */
    align-items: flex-start; /* Align content to the top */
    gap: 50px; /* Space between the two columns */
    width: 100%; /* Full width of container */
    flex-wrap: wrap; /* Wrap on smaller screens */
}

/* Narrative section styling */
.narrative {
    flex: 1;
    max-width: 45%; /* Narrative takes up 45% of the available width */
    text-align: justify;
    padding-right: 10px;
}

.narrative p {
    font-size: 1.5em;
    line-height: 1.6;
    margin-bottom: 30px;
}

.narrative h1 {
    font-size: 2em;
    margin-bottom: 20px;
}
/* Grid layout for images */
.image-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* 2 equal columns */
    grid-auto-rows: auto; /* Auto-adjust row height */
    gap: 2em; /* Space between grid items */
    max-width: 50%; /* Increased width to allow larger images */
    margin-bottom: 2em;
}

/* Styling for each image */
.image-item img {
    width: 100%; /* Full width of the grid item */
    height: auto; /* Maintain aspect ratio */
    object-fit: cover; /* Cover ensures the image fills the container while maintaining aspect ratio */
    border-radius: 0.5em;
    box-shadow: 0 0.5em 0.5em rgba(0, 0, 0, 0.1);
}

/* Ensure the image grid is aligned with narrative */
.portfolio-content {
    display: flex;
    flex-direction: row;
    justify-content: space-between; /* Space between narrative and image grid */
    align-items: flex-start;
    gap: 50px;
    width: 100%; /* Full width of the content */
    flex-wrap: wrap; /* Wrap on smaller screens */
}

/* Portfolio Title */
.portfolio-title {
    text-align: center;
    font-size: 2.5vw; /* Scales with viewport width */
    margin-bottom: 30px;
    font-weight: bold;
    color: #333; /* Visible color */
}

/* Ensure entire page is scrollable */
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    overflow-y: auto; /* Allow vertical scrolling */
    overflow-x: hidden; /* Prevent horizontal scrolling */
}

/* Responsive adjustments for smaller screens */
@media (max-width: 768px) {
    .portfolio-content {
        flex-direction: column; /* Stack items vertically on small screens */
        gap: 20px;
    }

    .narrative, .image-grid {
        max-width: 100%; /* Full width for both narrative and image grid on small screens */
    }

    .narrative h1 {
        font-size: 1.8em;
    }
}
    </style>

</head>

<body>
    <header class="header">
        <a href="" class="portfolio">Portfolio</a>
        <a href="{{ route('home') }}"></a>
        <div class="navbar">
            <a class="active" href="{{ route('home') }}" >Home</a>
            <a href="{{ route('compilation') }}">Compilation</a>
        </div>
    </header>

    <main>
        <!-- Main content of the page will be injected here -->
        @yield('content')
    </main>


</body>
</html>
