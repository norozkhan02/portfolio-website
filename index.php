<?php
require_once __DIR__ . '/includes/config.php';

$projects = [];
try {
    $projects = $pdo->query('SELECT * FROM projects ORDER BY created_at DESC')->fetchAll();
} catch (PDOException $exception) {
    $projects = [
        ['title' => 'Lumina Dashboard', 'category' => 'Product design', 'description' => 'A calm analytics workspace for teams who need clarity at a glance.', 'image_url' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1000&q=85', 'project_url' => '#'],
        ['title' => 'Northstar Studio', 'category' => 'Brand identity', 'description' => 'A flexible visual language for a small studio with a large point of view.', 'image_url' => 'https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&w=1000&q=85', 'project_url' => '#'],
        ['title' => 'Field Notes', 'category' => 'Web experience', 'description' => 'An editorial travel journal built around texture, pace, and honest details.', 'image_url' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&fit=crop&w=1000&q=85', 'project_url' => '#']
    ];
}

$message_sent = isset($_GET['sent']);
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Noroz Khan - designer and developer creating thoughtful digital experiences.">
    <title>Noroz Khan | Designer & Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
    <a class="logo" href="#top" aria-label="Noroz Khan home">NK<span>.</span></a>
    <nav class="nav" aria-label="Main navigation">
        <a href="#about">About</a><a href="#work">Work</a><a href="#journey">Journey</a><a href="#contact">Contact</a>
    </nav>
    <a class="header-link" href="#contact">Let's talk <span>↗</span></a>
</header>
<main id="top">
    <section class="hero section-wrap">
        <div class="hero-copy reveal"><p class="eyebrow">Designer / Developer / Problem solver</p><h1>Making digital<br><em>feel human.</em></h1><p class="hero-text">I am Noroz Khan, a multidisciplinary creative building clear, useful, and quietly memorable experiences for the web.</p><a class="button button-dark" href="#work">Explore my work <span>↓</span></a></div>
        <div class="hero-art reveal"><div class="art-ring"></div><div class="art-note">Based in<br><strong>Pakistan</strong><br><small>Available worldwide</small></div><div class="art-stamp">NK<br><span>2024</span></div></div>
    </section>
    <section class="marquee" aria-hidden="true"><div>CURIOUS BY DEFAULT <span>✳</span> DETAIL OBSESSED <span>✳</span> ALWAYS LEARNING <span>✳</span> CURIOUS BY DEFAULT <span>✳</span></div></section>
    <section id="about" class="about section-wrap split-section"><div class="section-label"><span>01</span><span>About me</span></div><div class="about-content"><h2>I bring ideas to life through <span>design and code.</span></h2><p>My work sits at the intersection of visual thinking and technical craft. I care about the small decisions that make a product feel intuitive, distinctive, and worth returning to.</p><div class="stats"><div><strong>03+</strong><span>Years creating</span></div><div><strong>24</strong><span>Projects shipped</span></div><div><strong>12</strong><span>Happy clients</span></div></div></div></section>
    <section id="skills" class="skills section-wrap"><div class="section-label"><span>02</span><span>What I do</span></div><div class="skill-grid"><article><span class="skill-number">01</span><h3>Interface design</h3><p>Turning complex problems into clear, compelling interfaces people enjoy using.</p></article><article><span class="skill-number">02</span><h3>Frontend development</h3><p>Building responsive, accessible experiences with care for every interaction.</p></article><article><span class="skill-number">03</span><h3>Creative direction</h3><p>Finding the visual story that gives a brand a sharper, more confident voice.</p></article></div></section>
    <section id="work" class="work section-wrap"><div class="section-intro"><div class="section-label"><span>03</span><span>Selected work</span></div><h2>A few things<br><em>I've made.</em></h2></div><div class="project-grid"><?php foreach ($projects as $index => $project): ?><article class="project-card reveal"><a href="<?= e($project['project_url'] ?: '#') ?>" target="_blank" rel="noopener"><div class="project-image"><img src="<?= e($project['image_url']) ?>" alt="<?= e($project['title']) ?> preview"><span class="project-arrow">↗</span></div><div class="project-meta"><div><span class="project-category"><?= e($project['category']) ?></span><h3><?= e($project['title']) ?></h3></div><p><?= e($project['description']) ?></p></div></a></article><?php endforeach; ?></div></section>
    <section id="journey" class="journey section-wrap split-section"><div class="section-label"><span>04</span><span>Academic journey</span></div><div class="timeline"><div class="timeline-item"><span>2021 — 2025</span><div><h3>Bachelor of Computer Science</h3><p>University of Lahore</p></div></div><div class="timeline-item"><span>2023</span><div><h3>Frontend development certification</h3><p>Meta / Coursera</p></div></div><div class="timeline-item"><span>Always</span><div><h3>Independent learning</h3><p>Design systems, typography, and the beautiful edges of the web.</p></div></div></div></section>
    <section id="contact" class="contact"><div class="section-wrap contact-inner"><div><p class="eyebrow">Have a good idea?</p><h2>Let's make<br><em>something real.</em></h2></div><div class="contact-side"><p>Have a project in mind, or just want to say hello? My inbox is open.</p><a class="email-link" href="mailto:hello@norozkhan.dev">hello@norozkhan.dev <span>↗</span></a><form action="includes/contact.php" method="post" class="contact-form"><input type="text" name="name" placeholder="Your name" required><input type="email" name="email" placeholder="Your email" required><textarea name="message" placeholder="Tell me a little about it" rows="3" required></textarea><button class="button button-light" type="submit">Send message <span>↗</span></button></form><?php if ($message_sent): ?><p class="form-success">Thanks, your message is on its way.</p><?php endif; ?></div></div></section>
</main>
<footer class="site-footer section-wrap"><span>© <?= date('Y') ?> Noroz Khan</span><span>Designed & built with intention</span><div><a href="#top">Back to top ↑</a></div></footer>
<script src="assets/js/main.js"></script>
</body>
</html>
