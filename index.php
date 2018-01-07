<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Flat desain : : Beauty Product</title>
        <link rel="stylesheet" type="text/css" href="assets/css/onepage-scroll.css" />
        <link href='assets/fonts/Righteous.css' rel='stylesheet' type='text/css'>
        <link href='assets/fonts/Voltaire.css' rel='stylesheet' type="text/css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head> 
    <body>
        <header>
            <img src="assets/img/Logo.jpg" alt="logo mini">
			<p></p>
            <h1><a href="#">Beauty Product</a></h1>
		
        </header>
        <div class="main">
            <section class="page one">
                <div class="page-container">
                    
                    <img src="assets/img/cantik1.jpg" alt="image"> 
					<h3>ONE BRAND MAKEUP WARDAH BEAUTY</h3>
                    <p align="justify"> Sebuah Beauty Hampers yang dikirim oleh Clozette Indonesia dan Wardah Beauty awal Februari lalu bikin hariku bahagia. 
					Setelah melakukan perjalanan yang lumayan padat ke negeri tetangga, surprised mendapati beauty hampers diatas kasur. 
					Hampers yang berisikan produk wardah mulai dari serum hingga lipstick matte bikin aku 'gatel' buat ngereview sekaligus 
					nyobain produk wardah tersebut . </p>
                    
                </div>
            </section>
            <section class="page two">
                <div class="page-container">
                    <h2>PRODUCT BEAUTY</h2>
                    <h3><p></p>
					<img src="assets/img/cantik2.jpg" alt="image">
					<img src="assets/img/cantik3.jpg" alt="image"><p>
					<img src="assets/img/cantik5.jpg" alt="image">
					<img src="assets/img/cantik4.jpg" alt="image"></p>
                </div>
            </section>
            <section class="page three">
                <div class="page-container">
                    <h2>Review PRODUCT</h2>
                    <p>Review Wardah BB cream Lightening & everyday by:HAILA HENNA</p>
					<video width="500" controls>
                    <source src="assets/vid/Review Wardah.MP4" type="video/mp4"/> 
                </div>
            </section>
        </div>
        <script type="text/javascript" src="assets/js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="assets/js/jquery.onepage-scroll.js"></script>
        <script type="text/javascript">
        $(".main").onepage_scroll({
                sectionContainer: "section",
                easting: "cubic-bezier(0.180, 0.900, 0.410, 1.210)"
        });
        </script>
    </body>
</html>
