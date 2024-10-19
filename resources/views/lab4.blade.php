@extends('Components.Layout')

@section('title', 'lab4')

@section('content')
<div class="center-container">
    <div class="container">
        <h1 class="portfolio-title">Create Middleware with Parameters</h1>

        <div class="portfolio-content">
            
        <div class="portfolio-content">
            <!-- Image Gallery Section (Grid Layout) -->
            <div class="image-grid">
                <div class="image-item">
                    <img src="{{ asset('images/lab4/lab4.png') }}" alt="Design Project 1">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/lab4/lab4.1.png') }}" alt="Design Project 2">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/lab4/lab4.2.png') }}" alt="Design Project 3">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/lab4/lab4.3.png') }}" alt="Design Project 4">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/lab4/lab4.4.png') }}" alt="Design Project 5">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/lab4/lab4.5.png') }}" alt="Design Project 6">
                </div>
            </div>

            <div class="narrative">            
            <h2> Narrative Report</h2>
                <p> In this lab, I worked with Laravel middleware, learning to create, register, 
                    and assign it to routes. We focused on using middleware to restrict access based on age.
                    For instance, the "CheckAge" middleware was applied to routes like the home page, 
                    where users under 18 were redirected to an "Access Denied" page, while those 18 and older could place orders. 
                    We also made the middleware more flexible by adding parameters. This allowed us to set different age restrictions
                    for different routes, like requiring users to be at least 21 years old for some pages.</p> 
                <p> The project helped me understand how middleware controls access based on conditions, but handling parameters and 
                    debugging issues with request logging were tricky. However, testing with various ages helped me grasp how middleware processes requests and manages access. </p>
