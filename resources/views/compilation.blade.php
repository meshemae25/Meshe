@extends('Components.Layout')

@section('title','Compilation')

@section('content')
<section class="compilation" id="compilation">
    <h2>Laboratory Report Compilation</h2>
    <div class="compilation-container">
        <div class="compilation-box">
            <img src="{{ asset('images/portfolio1/Test Run Laravel.png') }}">
            <div class="compilation-layer">
                <a href="{{ route('lab1') }}"><i class='bx bx-link-external'></i></a>
            </div>
        </div>

        <div class="compilation-box">
            <img src="{{ asset('images/portfolio1/welcome.jpg') }}">
            <div class="compilation-layer">
                <a href="{{ route('lab2') }}"><i class='bx bx-link-external'></i></a>
            </div>
        </div>

        <div class="compilation-box">
            <img src="{{ asset('images/rr.png') }}">
            <div class="compilation-layer">
                <a href="{{ route('lab3') }}"><i class='bx bx-link-external'></i></a>
            </div>
        </div>

        <div class="compilation-box">
            <img src="{{ asset('images/hihiz3.png') }}">
            <div class="compilation-layer">
                <a href="{{ route('lab4') }}"><i class='bx bx-link-external'></i></a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const boxes = document.querySelectorAll('.compilation-box');
    
    // Animate the boxes on page load
    boxes.forEach((box, index) => {
        setTimeout(() => {
            box.style.opacity = '1';
            box.style.transform = 'translateY(0) scale(1)';
        }, index * 200); 
    });

    // Add click event to each box
    boxes.forEach(box => {
        box.addEventListener('click', function() {

            box.classList.add('clicked');
            
            // Find the link inside the clicked box and route to it
            const link = box.querySelector('a');
            if (link) {
                window.location.href = link.href; // Redirect to the link's URL
            }
        });
    });
});
</script>