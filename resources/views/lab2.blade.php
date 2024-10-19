@extends('Components.Layout')

@section('title', 'lab2')

@section('content')
<div class="center-container">
    <div class="container">
       
    <h1 class="portfolio-title">Using Route Paramaters </h1>

        <div class="portfolio-content">
            <!-- Image Gallery Section (Grid Layout) -->
            <div class="image-grid">
                <div class="image-item">
                    <img src="{{ asset('images/lab2/lab2.png') }}" alt="Design Project 1">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/lab2/lab2.1.png') }}" alt="Design Project 2">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/lab2/lab2.2.png') }}" alt="Design Project 3">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/lab2/lab2.3.png') }}" alt="Design Project 4">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/lab3/lab3.png') }}" alt="Design Project 5">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/lab3/lab3.png') }}" alt="Design Project 6">
                </div>
            </div>

            <!-- Narrative Section -->
            <div class="narrative">
                <h1> Narrative Report </h1>
               <p> In this lab activity, we encountered several challenges while working on a web design project. Initially, the plan was simple: create a layout where a username would trigger a welcome page with a button to return to the homepage. 
                However, we decided to take it further by displaying the username directly on the homepage, which led to complications. Things got more complex when a groupmate switched the theme to a hotel-style webpage, requiring us to start over. </p>
                <p> We explored dynamic routing by allowing the application to accept user input via the URL. First, we set up a route that takes a username as an argument. To ensure safe input, we added a constraint that limits usernames to alphabetic
                     characters, preventing numbers or special symbols and protecting the application from misuse.</p>
        </div>
    </div>
</div>
@endsection
