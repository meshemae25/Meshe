@extends('Components.Layout')

@section('title', 'lab1')

@section('content')
<div class="center-container">
    <div class="container">
       
    <h1 class="portfolio-title">Setting Up Laravel </h1>

        <div class="portfolio-content">
            <!-- Image Gallery Section (Grid Layout) -->
            <div class="image-grid">
                <div class="image-item">
                    <img src="{{ asset('images/portfolio1/env.png') }}" alt="Design Project 1">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/portfolio1/Test Run Laravel.png') }}" alt="Design Project 2">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/portfolio1/port1.jpg') }}" alt="Design Project 3">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/portfolio1/test run.png') }}" alt="Design Project 4">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/portfolio1/webdev.png') }}" alt="Design Project 5">
                </div>
                <div class="image-item">
                    <img src="{{ asset('images/portfolio1/hihiz.jpg') }}" alt="Design Project 6">
                </div>
            </div>

            <!-- Narrative Section -->
            <div class="narrative">
                <h1> Narrative Report </h1>
                <p>In Lab 1, I started my Laravel learning experience by installing the framework using Composer. This ensured that all important constraints were in place for the development process to run smoothly. After installation, I set version control by initializing the Git repository. Using Git, I was able to track project changes. The repetitions helped to keep a clear record of my progress. 
                    Next, I went to configure the environment settings.</p>
                <p>I created three main web pages: a home page, about page and a content page. These pages formed the basic structure of the presentation layer of my Laravel application. I stored the views in the resources/views directory that Laravel needs. 
                    To access these pages I have defined some special paths in the application. This allows users to navigate to the correct pages via the correct URLs. </p>
                <p> Despite the instructions below, the installation process is not easy. I encountered several errors during the initial installation. Every mistake is frustrating and slows down my progress. However, 
                    I persisted. I researched each problem and tried different solutions. Over time I fixed all the errors and configured it well.
                    The challenges I faced during the installation made me very familiar with Laravel. Although difficult, this experience improved my problem solving skills.
                    I think that by using this lab, I could establish a solid foundation for my future Laravel development.</p>
            </div>
        </div>
    </div>
</div>
@endsection
