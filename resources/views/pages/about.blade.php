@extends('layouts.app')

@section('content')
<section class="about-wrapper">

    <div class="about-hero">
        <h1>About Us</h1>
        <p>
            A simple, organized, and reader-focused platform for managing and reading books online.
        </p>
    </div>

    <div class="about-content">

        <div class="about-block">
            <h2>What is BookStack?</h2>
            <p>
                BookStack is a web-based book management and reading platform built using Laravel and MySQL.
                It allows administrators to manage books efficiently while providing users with a clean
                and distraction-free reading experience.
            </p>
        </div>

        <div class="about-block">
            <h2>Why BookStack?</h2>
            <ul>
                <li>📚 Structured book management with chapters and pages</li>
                <li>👤 Secure user authentication & role-based access</li>
                <li>🎨 Minimal, reader-friendly UI</li>
                <li>⚡ Built for performance and scalability</li>
            </ul>
        </div>

        <div class="about-block">
            <h2>Technology Stack</h2>
            <ul class="tech-list">
                <li><strong>Backend:</strong> Laravel (PHP)</li>
                <li><strong>Database:</strong> MySQL</li>
                <li><strong>Frontend:</strong> HTML, CSS, Vanilla JavaScript</li>
                <li><strong>Architecture:</strong> MVC (Model-View-Controller)</li>
            </ul>
        </div>

        <div class="about-block">
            <h2>Project Purpose</h2>
            <p>
                This project was developed with a focus on learning real-world
                Laravel concepts such as authentication, CRUD operations,
                middleware, routing, and clean UI design — making it suitable
                for academic submission as well as technical interviews.
            </p>
        </div>

        <div class="about-cta">
            <p>
                Built with ❤️ and attention to detail.
            </p>
        </div>

    </div>
</section>
@endsection
