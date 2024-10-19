@extends('Components.Layout') 

@section('title', 'Home') 

@section('content')
<section class="home" id="home">
    <div class="home-img">
        <img src="{{ asset('images/school-girl.gif') }}" style="max-width: 120%;">
    </div>

    <div class="home-content">
        <h1 class="fade-in" id="welcome">Hi, Welcome to my Portfolio!</h1>
        <h3 class="fade-in" id="name"></h3>
        <p class="fade-in" id="author">And this will highlight my work throughout my midterm.</p> 
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const nameElement = document.getElementById('name');
        nameElement.textContent = "I am Shiee";

        setTimeout(() => {
            const showcaseText = document.getElementById('showcase');
            showcaseText.style.display = 'block';
            showcaseText.classList.add('fade-in');
        }, 3000);
    });
</script>
@endsection