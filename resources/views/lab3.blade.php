@extends('Components.Layout')

@section('title', 'lab3')

@section('content')
<div class="center-container">
    <div class="container">
        <h1 class="portfolio-title"> Creating components, Layout file and Blade Files </h1>

        <div class="portfolio-content">
            
        <div class="portfolio-content">
            <!-- Image Gallery Section (Grid Layout) -->
            <div class="image-grid">
                <div class="image-item">
                    <img src="{{ asset('images/lab3/lab3.png') }}" alt="Design Project 1">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/lab3/lab3.1.png') }}" alt="Design Project 2">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/lab3/lab3.2.png') }}" alt="Design Project 3">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/lab3/lab3.3.png') }}" alt="Design Project 4">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/lab3/lab3.4.png') }}" alt="Design Project 5">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/lab3/lab3.5.png') }}" alt="Design Project 6">
                </div>
            </div>

            <div class="narrative">
            <h2> Narrative Report</h2>
           <p> The project highlighted how to use Blade templates to build reusable layouts and link pages through routing. A key challenge was ensuring that Blade syntax, especially with @/section and @/yield, was correct, as errors could cause views to display incorrectly. 
            Additionally, configuring routes required careful attention to ensure that navigation worked smoothly. </p>
            <p> The theme for the project was a hotel website with three different layouts. A room availability system was introduced, using colors and labels to show whether rooms were free, adding both functionality and visual clarity. 
                Another feature was an AI-like assistant that allowed users to ask questions and send messages to the hotel’s customer service, enhancing the site's interactivity. A simple footer was also added to display brief hotel information, giving the site a professional and complete look.</p>
            <p> The project was an enjoyable learning experience, combining creativity with technical skills to build a functional and visually appealing webpage. While the task initially seemed complex, it became fun once the concepts were understood, and the finished design was rewarding.
                 This exercise demonstrated how technical knowledge can be applied to create interactive, well-structured web pages.</p>
            </div>
        </div>
    </div>
</div>
