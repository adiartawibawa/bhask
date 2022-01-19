<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/style.css') }}">
    <link rel="stylesheet" href="{{ mix('css/components.css') }}">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700');

        img {
            image-rendering: -webkit-optimize-contrast;
        }

        .preview-outer {
            overflow: hidden;
            height: 360px;
        }

        .preview-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, .05);
        }

        body {
            background-color: #fff;
            font-family: 'Nunito', sans-serif;
            color: #000;
        }

        .body-grey {
            background-color: #f2f7fb;
        }

        .logo img {
            box-shadow: 0 4px 12px rgba(63, 82, 227, .6);
            border-radius: 30px;
        }

        .navbar {
            left: 0;
            right: 0;
            background-color: transparent;
            padding-top: 20px;
            padding-bottom: 20px;
            height: auto;
        }

        .navbar-light .navbar-toggler {
            color: #000;
            background-color: #eee;
        }

        .navbar-light:not(.active) .navbar-nav .nav-link {
            color: #999;
        }

        .navbar .navbar-nav .dropdown-item {
            color: #777;
        }

        .navbar .navbar-nav .nav-link {
            padding: 3px 20px !important;
        }

        .navbar .navbar-nav .dropdown-title {
            padding-bottom: 5px;
            font-size: 10px !important;
            font-weight: 700 !important;
        }

        .navbar .navbar-nav .dropdown-title:not(:first-child) {
            margin-top: 10px;
        }

        .navbar .navbar-nav .nav-link,
        .navbar .navbar-nav .dropdown-item,
        .navbar .navbar-nav .dropdown-title,
        .navbar .navbar-nav .btn {
            font-weight: 600;
            font-size: 14px;
        }

        .navbar .navbar-nav .btn {
            background-color: #fff;
            border-color: #fff;
            color: #000;
            line-height: 25px;
            padding: 7px 25px;
        }

        .navbar .navbar-nav .btn:hover {
            background-color: rgba(255, 255, 255, .8);
        }

        .navbar-light:not(.active) .navbar-nav .nav-link:hover,
        .navbar-light:not(.active) .navbar-nav .nav-link:focus {
            color: #000;
        }

        .navbar.active {
            padding-top: 20px;
            padding-bottom: 20px;
            height: auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(63, 82, 227, .05);
        }

        .navbar.active.navbar-light .navbar-toggler {
            color: #fff;
            color: #fff;
        }

        .navbar .navbar-brand {
            font-weight: 700;
        }

        .navbar:not(.active):not(.navbar-reverse) .navbar-brand,
        .navbar:not(.active):not(.navbar-reverse) .navbar-brand:hover,
        .navbar:not(.active):not(.navbar-reverse) .navbar-brand:focus {
            color: #000;
        }

        .hero-wrapper {
            display: inline-block;
            width: 100%;
            height: 580px;
        }

        .hero .headline {
            display: inline-block;
            background-color: rgba(255, 255, 255, .1);
            color: #FFF;
            border-radius: 30px;
            padding: 5px 25px 5px 5px;
            font-size: 12px;
            margin-bottom: 40px;
            font-weight: 600;
            letter-spacing: .2px;
        }

        .hero .headline i {
            font-size: 9px !important;
        }

        .hero .headline .badge {
            padding: 4px 7px;
            margin-right: 5px;
            font-size: 10px;
        }

        .hero .headline:hover {
            text-decoration: none;
            background-color: rgba(255, 255, 255, .2);
        }

        .hero {
            width: 100%;
            position: relative;
            color: #fff;
        }

        .hero-mini .btn,
        .hero .btn {
            font-size: 16px;
            border-radius: 30px;
            padding: 12px 30px;
            box-shadow: 0 0 30px rgba(252, 189, 37, .4);
        }

        .hero-mini .btn-info,
        .hero .btn-info {
            box-shadow: 0 0 30px rgba(58, 186, 244, .4);
        }

        .hero .text-job {
            color: rgba(255, 255, 255, .6);
        }

        .hero-mini {
            background-image: linear-gradient(to right, #697ded, #5e30c1);
            padding-top: 40px;
            height: 500px;
            display: flex;
            align-items: center;
            color: #fff;
        }

        .hero-mini.hero-mini-sm {
            height: 250px;
        }

        .hero-mini.pb {
            padding-bottom: 70px;
        }

        .your-breadcrumb {
            display: flex;
            margin-top: 20px;
        }

        .your-breadcrumb .breadcrumb-item {
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            font-size: 10px;
            letter-spacing: 1.5px;
            color: rgba(255, 255, 255, .8);
        }

        .your-breadcrumb .breadcrumb-item a {
            color: rgba(255, 255, 255, .8);
            border-bottom: 1px solid rgba(255, 255, 255, .8);
            padding-bottom: 2px;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: rgba(255, 255, 255, .4);
        }

        .hero-mini-up {
            padding: 0;
            margin-top: -170px;
            margin-bottom: 80px;
        }

        .hero-mini.bg {
            background-image: url('bg.svg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .hero-mini h1 {
            font-size: 30px;
        }

        .hero-mini .lead {
            color: rgba(255, 255, 255, .8);
        }

        .img-flip {
            transform: scaleX(-1);
        }

        .support-us .container:after,
        .section-design-right:after,
        .section-design:after,
        .hero:after {
            content: ' ';
            background-image: linear-gradient(to bottom, #697ded, #5e30c1);
            position: absolute;
            border-radius: 50% 0 0 50%;
            top: -180px;
            right: 0;
            bottom: -50px;
            width: 53%;
            transform: skewY(-20deg);
            z-index: -1;
        }

        .hero:after {
            width: 100%;
            border-radius: 0;
            transform: skewY(-5deg);
        }

        .support-us .container,
        .section-design-right,
        .section-design {
            position: relative;
        }

        .section-design-right:after,
        .section-design:after {
            right: 20px;
            top: 0;
            bottom: 0;
            left: 40px;
            border-radius: 20% 50% 50% 30%;
            transform: skewY(20deg) skewX(-22deg);
            width: 36%;
        }

        .section-design-right:after {
            right: 0;
            left: initial;
            top: 100px;
            bottom: 50px;
            border-radius: 50% 20% 30% 50%;
        }

        .section-design-right {
            padding: 200px 0;
            overflow: hidden;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .support-us .container:after {
            left: 50px;
            right: initial;
            top: 50px;
            bottom: 50px;
            border-radius: 50% 50% 30% 30%;
            width: 50%;
        }

        .support-us {
            margin-bottom: 80px;
            padding-bottom: 40px;
        }

        .hero .container {
            display: flex;
            align-items: center;
            min-height: 650px;
        }

        .hero .image,
        .hero .text {
            color: #fff;
            flex-grow: 0;
            width: calc(100% / 2);
        }

        .hero .image {
            padding-left: 40px;
        }

        .hero .image img {
            width: 100%;
        }

        .hero .hero-image {
            display: inline-block;
            width: 100%;
            box-shadow: 0 4px 8px rgba(63, 82, 227, .05);
        }

        .hero .hero-image img {
            image-rendering: optimizeQuality;
            width: 100%;
            border-radius: 3px;
        }

        .hero .hero-image iframe {
            -ms-zoom: 1;
            -moz-transform: scale(1);
            -moz-transform-origin: 0 0;
            -o-transform: scale(1);
            -o-transform-origin: 0 0;
            -webkit-transform: scale(1);
            -webkit-transform-origin: 0 0;
        }

        .hero .text {
            padding: 160px 80px 100px 0;
        }

        .hero .text h1 {
            font-weight: 700;
            line-height: 54px;
        }

        .hero .text h1 span {
            font-weight: 500;
        }

        .hero .text p.lead {
            color: rgba(255, 255, 255, .8);
            font-weight: 500;
            line-height: 32px;
            margin-top: 15px;
            font-size: 18px;
        }

        .hero-mini .cta,
        .hero .cta {
            margin-top: 40px;
        }

        .hero .cta .btn {}

        #support {
            background-color: #574b90;
        }

        section {
            padding: 120px 0;
        }

        section.info {
            border-top: 1px solid #f9f9f9;
        }

        section.wave {
            position: relative;
            background-color: #f2f7fb;
            background-image: url('wave.png');
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: top;
            padding-top: 130px;
            padding-bottom: 20px;
        }

        section.skew {
            position: relative;
            padding-bottom: 160px;
            padding-top: 0;
        }

        section.skew:after,
        section.wave:after {
            content: ' ';
            position: absolute;
            bottom: -100px;
            left: 0;
            width: 100%;
            height: 200px;
            background-color: #fafbfe;
            z-index: -1;
            transform: skew(0, -3deg);
        }

        section.grey.wave:after {
            background-color: #f2f7fb;
        }

        section.wave h2 {
            margin-top: 80px;
        }

        section.grey {
            background-color: #f2f7fb;
        }

        section.light {
            background-color: #fafdfb;
        }

        .section-skew {
            margin-top: 60px;
            position: relative;
        }

        .section-skew:after {
            content: ' ';
            position: absolute;
            top: -30px;
            bottom: -30px;
            left: 0;
            width: 100%;
            z-index: -1;
            transform: skewY(-4deg);
            background-color: #fafbfe;
        }

        section h2 {
            font-weight: 400;
            font-size: 28px;
            line-height: 34px;
            font-weight: 700;
        }

        section .lead {
            color: rgba(0, 0, 0, .5);
            font-size: 18px;
            line-height: 30px;
        }

        section p {
            font-size: 16px;
            font-weight: 400;
            margin-top: 20px;
            line-height: 34px;
        }

        section p,
        section ul,
        section ol {
            color: #4e5051;
        }

        p.lead {
            font-weight: 500;
        }

        section .icon {
            text-align: center;
            display: inline-block;
            width: 70px;
            height: 70px;
            background-color: #3F52E3;
            border-radius: 50%;
            color: #fff;
            font-size: 26px;
            line-height: 72px;
        }

        .section-dark {
            background-color: #0b032d;
            color: #fff;
        }

        .section-dark .lead {
            color: rgba(255, 255, 255, .7);
        }

        .section-dark .btn {
            background-color: #fff;
            color: #0b032d;
            padding: 10px 20px;
            margin-top: 20px;
            font-weight: 700;
            transition: all .5s;
        }

        .section-dark .btn:hover {
            opacity: .8;
        }

        .absolute {
            position: relative;
        }

        .absolute .card {
            position: absolute;
            max-width: 300px;
            width: 300px;
            right: 0;
        }

        .card.has-row {
            padding: 0 15px;
        }

        .card {
            overflow: hidden;
        }

        .mt-lg {
            margin-top: 150px !important;
        }

        .lh-lg {
            line-height: 36px;
        }

        .video-wrapper {
            display: inline-block;
            position: relative;
        }

        .card-pricing .card-header {
            padding: 50px 20px;
            padding-bottom: 0;
            border-bottom: none;
        }

        .card-pricing .card-body {
            padding-bottom: 40px;
        }

        .card-pricing .card-body p {
            margin-top: 0;
            line-height: 26px;
        }

        .card-pricing .card-header h4 {
            font-size: 18px;
        }

        .card-pricing .card-price {
            font-size: 60px;
            margin: 40px 0;
            font-weight: 600;
            color: #3F52E3;
        }

        .card-pricing .card-footer {
            padding: 10px 0 50px 0;
        }

        .card-pricing .price-cut {
            text-decoration: line-through;
            font-size: 14px;
            display: inline-block;
            color: #000;
        }


        .link-icon {
            font-weight: 600;
            font-size: 16px;
        }

        .link-icon i {
            font-size: 10px;
        }

        .lh-sm {
            line-height: 28px;
        }

        .pre-block {
            box-shadow: 0 0 40px rgba(0, 0, 0, .2);
        }

        pre {
            background-color: #212138 !important;
            border-radius: 3px;
            padding-top: 60px !important;
            position: relative;
        }

        pre code {
            background-color: #212138 !important;
        }

        pre:before {
            content: attr(data-name);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #252543;
            color: #696987;
            padding: 15px;
        }

        .before-footer {
            padding: 0;
            position: relative;
            z-index: 99;
            margin-bottom: -50px;
            margin-top: -250px;
        }

        footer {
            padding: 80px 0;
            text-transform: uppercase;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            letter-spacing: 2px;
            font-size: 10px;
            position: relative;
            background-image: linear-gradient(to right, #697ded, #5e30c1);
            color: #fff;
        }

        footer .container {
            position: relative;
            z-index: 2;
        }

        footer:after {
            content: ' ';
            background-image: linear-gradient(to right, #697ded, #5e30c1);
            transform: skewY(-4deg);
            z-index: 1;
            position: absolute;
            bottom: 120px;
            left: 0;
            width: 100%;
            height: 100%;
        }

        footer h4 {
            font-size: 12px;
        }

        footer p {
            color: rgba(255, 255, 255, .6);
            text-transform: none;
            letter-spacing: .5px;
            font-size: 12px;
            font-weight: 300;
        }

        footer ul {
            margin: 0;
            padding: 0;
            padding-top: 10px;
            list-style: none;
        }

        footer a {
            color: #fff;
            border-bottom: 1px solid #fff;
            padding-bottom: 2px;
        }

        footer a:hover {
            color: rgba(255, 255, 255, .6);
            text-decoration: none;
        }

        footer ul li a {
            border-bottom: none;
            font-weight: 500;
            color: rgba(255, 255, 255, .6);
            letter-spacing: 1px;
            text-transform: none;
            font-size: 12px;
        }

        footer ul li a:hover {
            text-decoration: none;
            color: #fff;
        }

        .line {
            display: inline-block;
            width: 100%;
            height: 2px;
            background-color: #fbfbfb;
            margin: 150px 0 80px 0;
        }

        .card-icon {
            width: 50px;
            height: 50px;
            border-radius: 3px;
            text-align: center;
            margin-right: 20px;
            flex-grow: 0;
            flex-shrink: 0;
        }

        .card-icon i {
            line-height: 50px;
            font-size: 20px;
        }

        .card-icon+div .card-header {
            padding: 0;
            border: none;
        }

        .card-icon+div .card-header h4 {
            font-size: 12px;
            margin-bottom: 10px;
            line-height: 20px;
        }

        .card-icon+div p {
            margin-top: 10px;
            color: #4e5051;
        }

        .p-45 {
            padding: 35px !important;
        }

        .force-rounded {
            border-radius: 5px !important;
            overflow: hidden;
        }

        .shadow {
            box-shadow: 0 4px 8px rgba(63, 82, 227, .05);
        }

        .video-js .vjs-big-play-button {
            top: 50%;
            left: 50%;
            border-radius: 5px;
            transform: translate(-50%, -50%);
            line-height: 42px;
        }

        .accordion-header h4 {
            line-height: 26px;
        }

        .btn-primary.btn-shadow {
            box-shadow: 0 4px 8px rgba(63, 82, 227, .3);
        }

        .carousel-item {
            text-align: center;
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
        }

        .carousel-inner {
            height: 650px;
        }

        .carousel-item-left,
        .carousel-item {
            height: 650px !important;
            align-items: center;
            justify-content: center;
        }

        .carousel-item.carousel-item-prev,
        .carousel-item.carousel-item-next,
        .carousel-item.active {
            display: flex;
        }

        .list-icons {
            padding: 0;
            margin: 0;
            margin-top: 30px;
        }

        .list-icons li {
            display: flex;
            margin-bottom: 25px;
        }

        .list-icons li .card-icon {
            height: 50px;
            width: 50px;
            line-height: 52px;
        }

        .list-icons li span:last-child {
            line-height: 24px;
        }

        .bg-grey {
            background-color: #f2f7fb !important;
        }

        .bg-ghostwhite {
            background-color: #fafbfe !important;
        }

        .secure-text {
            float: right;
            margin-top: 27px;
            opacity: .8;
        }

        .card-testi {
            background-color: #1e33d1;
            margin-bottom: 0;
            box-shadow: none;
            color: #fff;
        }

        .card-testi .card-body p {
            font-size: 14px;
            line-height: 28px;
            margin: 0;
        }

        .text-14 {
            font-size: 14px !important;
            letter-spacing: 2px;
        }

        .lh {
            line-height: 28px !important;
        }

        .ls-2 {
            letter-spacing: 2px;
        }

        .ls-0 {
            letter-spacing: 0 !important;
        }

        .font-weight-500 {
            font-weight: 500 !important;
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -25px;
        }

        .features-2 {
            text-align: center;
        }

        .features.features-2 .feature .feature-icon {
            background-color: #6772e7;
            color: #fff;
        }

        .features .feature {
            width: calc(100% / 3);
            padding: 25px;
        }

        .features .feature .feature-icon {
            background-color: rgba(103, 119, 239, .1);
            color: #6777ef;
            display: inline-block;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 60px;
            margin-bottom: 20px;
        }

        .features .feature .feature-icon i {
            font-size: 22px;
            margin-bottom: 25px;
        }

        .features .feature h5 {
            margin-bottom: 5px;
        }

        .features .feature p {
            margin-top: 10px;
            line-height: 32px;
        }

        .callout {
            background-color: #fff;
            box-shadow: 0 0 25px rgba(103, 119, 239, .1);
            margin-top: 50px;
            border-radius: 3px;
            padding: 60px 50px;
        }

        .callout .text-job {
            font-weight: 500;
        }

        .callout .h1:after {
            content: " ";
            border-radius: 5px;
            height: 8px;
            width: 50px;
            background-color: #6777ef;
            display: inline-block;
            float: left;
            margin-top: 20px;
            margin-right: 15px;
        }

        .bg-gr {
            background-image: linear-gradient(to right, #697ded, #5e30c1);
        }

        .btn-white {
            background-color: #fff;
            color: #000 !important;
        }

        .lg-icon {
            font-size: 30px;
        }

        .bar-info {
            background-color: #fc544b;
            display: inline-block;
            width: 100%;
            font-size: 14px;
            color: #fff;
        }

        .bar-info span {
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: 700;
        }

        .bar-info-badge {
            background-color: #fff;
            border-radius: 30px;
            padding: 10px 30px;
            font-weight: 700;
            text-decoration: none !important;
        }

        .social-links a {
            border-bottom: none;
        }

        .social-links a i {
            font-size: 16px;
        }

        .long-shadow {
            box-shadow: 0 0 60px rgba(103, 119, 239, .15);
        }

        .dark-shadow {
            box-shadow: 0 0 40px rgba(103, 119, 239, .2);
        }

        /* The browser window */
        .browser-container {
            box-shadow: 0 0 40px rgba(0, 0, 0, .2);
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }

        /* Container for columns and the top "toolbar" */
        .browser-row {
            padding: 10px;
            background: #f1f1f1;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }

        /* Create three unequal columns that floats next to each other */
        .browser-column {
            float: left;
        }

        .browser-left {
            width: 15%;
        }

        .browser-right {
            width: 10%;
        }

        .browser-middle {
            width: 75%;
        }

        /* Clear floats after the columns */
        .browser-row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Three dots */
        .browser-dot {
            margin-top: 4px;
            height: 10px;
            width: 10px;
            margin-right: 4px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }

        /* Style the input field */
        .browser-container input[type=text] {
            width: 100%;
            border-radius: 3px;
            border: none;
            background-color: white;
            margin-top: -8px;
            height: 25px;
            color: #666;
            padding: 5px;
        }

        /* Three bars (hamburger menu) */
        .browser-bar {
            width: 17px;
            height: 3px;
            background-color: #aaa;
            margin: 3px 0;
            display: block;
        }

        /* Page content */
        .browser-content {
            padding: 20px;
            background-color: #fff;
            height: 340px;
            border-radius: 0 0 3px 3px;
        }

        .abs-images {
            position: relative;
        }

        .abs-images img {
            position: absolute;
        }

        .abs-images img:first-child {
            top: 140px;
            right: 40px;
            z-index: 2;
        }

        .abs-images img:nth-child(3) {
            z-index: 1;
            top: 40px;
            right: -80px;
        }

        .abs-images img:nth-child(2) {
            z-index: 1;
            top: -120px;
        }

        .abs-images-2 {
            position: relative;
        }

        .abs-images-2 img:first-child {
            position: absolute;
            top: 25%;
            left: -60px;
            transform: translateY(-25%);
        }

        .abs-images-2 img:nth-child(2) {
            position: absolute;
            left: 10px;
            transform: translateY(-50%);
            top: 50%;
            z-index: 1;
        }

        .abs-images-2 img:nth-child(3) {
            position: absolute;
            left: -30px;
            transform: translateY(-75%);
            top: 75%;
            z-index: 2;
        }

        .download-section {
            background-color: #fff;
            border-top: 1px solid rgba(0, 0, 0, .04);
            margin-bottom: 100px;
            padding: 60px 0;
            height: 350px;
        }

        .download-section p {
            margin-top: 0;
        }

        .download-section h2 {
            margin-bottom: 0;
        }

        .download-section .form-control {
            border-radius: 3px 0 0 3px;
            font-size: 16px;
            box-shadow: 0 2px 6px rgba(103, 119, 239, .1);
        }

        .download-section .btn {
            border-radius: 3px;
            padding-left: 30px;
            padding-right: 30px;
            height: 60px;
            line-height: 44px;
            font-size: 16px;
        }

        .article {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, .05);
            border-radius: 3px;
        }

        .article:not(:last-child) {
            margin-bottom: 40px;
        }

        .article-noshadow {
            box-shadow: none;
        }

        .article figure {
            margin-bottom: 0;
        }

        .article h2 {
            margin-top: 0;
            text-transform: none;
            font-size: 22px;
            letter-spacing: .3px;
            font-weight: 700;
        }

        .article .article-metas {
            display: flex;
            margin: 0 -10px;
        }

        .article .article-meta {
            margin: 0 10px;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 10px;
            letter-spacing: 1.5px;
            color: rgba(0, 0, 0, .4);
        }

        .article-detail .article-meta {
            color: rgb(0, 0, 120);
        }

        .article-detail .article-description,
        .article-detail .article-description p {
            font-family: 'Poppins', sans-serif;
            letter-spacing: .3px;
            font-size: 16px;
            line-height: 36px;
            font-weight: 400;
        }

        .article .article-cta {
            display: inline-block;
            margin-top: 40px;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            text-decoration: none;
        }

        .faqs h5:not(:last-child) {
            border-bottom: 1px solid #f2f2f2;
            padding-bottom: 25px;
            margin-bottom: 25px;
        }

        .faqs h5 a {
            font-size: 18px;
            text-decoration: none;
            font-weight: 600;
            color: rgb(0, 0, 100);
        }

        .card .card-body p:first-of-type {
            margin-top: 0 !important;
        }

        .card p {
            margin-top: 0;
        }

        .text-name {
            font-size: 18px;
            font-weight: 600;
        }

        .section-dark blockquote {
            color: #fff;
            font-size: 30px;
            background-color: transparent;
        }

        .section-dark .text-job {
            color: rgba(255, 255, 255, .6);
        }

        .section-dark a {
            text-decoration: none;
            border-bottom: 1px solid #6777ef;
            padding-bottom: 1px;
        }

        .modal-order {
            max-width: 580px !important;
        }

        .wizard-steps {
            display: flex;
            margin: 0 -10px;
            margin-bottom: 60px;
            counter-reset: wizard-counter;
        }

        .wizard-steps .wizard-step {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.03);
            background-color: #fff;
            border-radius: 3px;
            border: none;
            position: relative;
            margin-bottom: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            padding: 15px;
            text-align: center;
            flex-grow: 1;
            flex-basis: 0;
            margin: 0 10px;
        }

        .wizard-steps .wizard-step:before {
            counter-increment: wizard-counter;
            content: counter(wizard-counter);
            position: absolute;
            bottom: -40px;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 20px;
            line-height: 21px;
            font-size: 10px;
            font-weight: 700;
            border-radius: 50%;
            background-color: #e3eaef;
        }

        .wizard-steps .wizard-step.wizard-step-active {
            box-shadow: 0 2px 6px #acb5f6;
            background-color: #6777ef;
            color: #fff;
        }

        .wizard-steps .wizard-step.wizard-step-active:before {
            background-color: #6777ef;
            color: #fff;
        }

        .wizard-steps .wizard-step.wizard-step-success {
            background-color: #63ed7a;
            color: #fff;
        }

        .wizard-steps .wizard-step.wizard-step-success:before {
            background-color: #63ed7a;
            color: #fff;
        }

        .wizard-steps .wizard-step.wizard-step-danger {
            background-color: #fc544b;
            color: #fff;
        }

        .wizard-steps .wizard-step.wizard-step-danger:before {
            background-color: #fc544b;
            color: #fff;
        }

        .wizard-steps .wizard-step.wizard-step-warning {
            background-color: #ffa426;
            color: #fff;
        }

        .wizard-steps .wizard-step.wizard-step-warning:before {
            background-color: #ffa426;
            color: #fff;
        }

        .wizard-steps .wizard-step.wizard-step-info {
            background-color: #3abaf4;
            color: #fff;
        }

        .wizard-steps .wizard-step.wizard-step-info:before {
            background-color: #3abaf4;
            color: #fff;
        }

        .wizard-steps .wizard-step .wizard-step-icon .fas,
        .wizard-steps .wizard-step .wizard-step-icon .far,
        .wizard-steps .wizard-step .wizard-step-icon .fab,
        .wizard-steps .wizard-step .wizard-step-icon .fal,
        .wizard-steps .wizard-step .wizard-step-icon .ion {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .wizard-steps .wizard-step .wizard-step-label {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
        }

        .price {
            font-size: 40px;
            font-weight: 600;
            background-color: rgba(103, 119, 239, .1);
            border-radius: 3px;
            display: inline-block;
            padding: 5px 15px;
        }

        .icon-lg {
            font-size: 40px;
        }

        [id^="payment-step"]:not(.this-active) {
            display: none;
        }

        @media (max-width: 575.98px) {
            .wizard-steps {
                display: block;
            }

            .wizard-steps .wizard-step {
                margin-bottom: 50px;
            }
        }

        @media screen and (max-width: 768px) {
            .hero .text {
                width: 100%;
                padding-right: 0;
                padding: 0;
            }

            .hero:after {
                transform: skew(0deg);
            }

            .hero .container {
                padding-top: 120px;
                padding-bottom: 40px;
                height: auto;
                min-height: auto;
            }

            .hero-wrapper {
                height: auto;
            }

            .section-design {
                padding-top: 10px;
            }

            .support-us .container:after,
            .section-design:after {
                display: none;
            }

            .navbar .navbar-nav {
                flex-direction: column;
            }

            .navbar .nav-link {
                padding: 15px 0 !important;
                color: #000;
            }

            .navbar .nav-link:focus {
                color: #000;
            }

            .licenses .license {
                display: block;
            }

            .licenses .license .license-price {
                width: 100%;
            }

            .secure-text {
                float: none;
                margin-top: 15px;
            }

            .callout .h1:after {
                display: none;
            }

            .navbar .navbar-nav {
                background-color: #fff;
                width: 100%;
            }

            .navbar-toggler {
                color: #fff;
            }
        }

        @media (max-width: 575.98px) {
            .features {
                margin: 0;
            }

            .features .feature {
                width: 100%;
            }

            .bar-info {
                height: auto;
                padding: 30px 0;
                line-height: 26px;
            }

            .bar-info .container {
                text-align: center;
                display: inline-block !important;
            }

            .bar-info-badge {
                margin-top: 20px !important;
            }

            .download-section {
                height: 800px;
                margin-bottom: -500px;
            }

            footer .row>[class^="col-"] {
                margin-bottom: 40px;
            }
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-reverse navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand smooth" href="https://getstisla.com">Stisla</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-lg-3 align-items-lg-center">
                    {{-- <li class="nav-item dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle">Developers</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-title">Getting Started</li>
                            <li><a href="https://getstisla.com/getting-started" class="dropdown-item">Getting
                                    Started</a></li>
                            <li><a href="https://getstisla.com/docs" class="dropdown-item">Documentation</a></li>
                            <li class="dropdown-title">Core</li>
                            <li><a href="http://demo.getstisla.com/index.html" class="dropdown-item">Dashboard</a></li>
                            <li><a href="http://demo.getstisla.com/layout-transparent.html"
                                    class="dropdown-item">Layouts</a></li>
                            <li><a href="http://demo.getstisla.com/bootstrap-alert.html"
                                    class="dropdown-item">Bootstrap</a></li>
                            <li><a href="http://demo.getstisla.com/components-article.html"
                                    class="dropdown-item">Components</a></li>
                            <li><a href="http://demo.getstisla.com/modules-calendar.html"
                                    class="dropdown-item">Third-party Libraries</a></li>
                            <li><a href="http://demo.getstisla.com/features-activities.html"
                                    class="dropdown-item">Pre-built Pages</a></li>
                            <li><a href="javascript:;" class="dropdown-item">Skeleton (Progress)</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="#"
                            class="nav-link">Support</a></li>
                    <li class="nav-item"><a href="#"
                            class="nav-link">Contact</a></li>
                </ul>
                @if (Route::has('login'))
                    <ul class="navbar-nav ml-auto ml-lg-3 align-items-lg-center">
                        @auth
                            <li class="nav-item"><a href="{{ url('/home') }}"
                                    class="nav-link">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item"><a href="{{ route('login') }}"
                                    class="nav-link">Sign In</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item"><a href="{{ route('register') }}"
                                        class="nav-link">Sign Up</a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                @endif
            </div>
        </div>
    </nav>

    <div class="hero-wrapper" id="top">
        <div class="hero">
            <div class="container">
                <div class="text text-center text-lg-left">
                    <a href="https://getstisla.com/blog/open-source" class="headline">
                        <div class="badge badge-danger">New</div>
                        Stisla is now 100% open source &nbsp; <i class="fas fa-chevron-right"></i>
                    </a>
                    <h1>Free Bootstrap Admin Template</h1>
                    <p class="lead">
                        Stisla will help you to speed up your project, design your own dashboard UI and the users will
                        love it.
                    </p>
                    <div class="cta">
                        <a class="btn btn-lg btn-warning btn-icon icon-right"
                            href="https://getstisla.com/getting-started">Get Started <i
                                class="fas fa-chevron-right"></i></a> &nbsp;
                        <div class="mt-3 text-job">
                            MIT License &nbsp;&nbsp;&bull;&nbsp;&nbsp; Version: 2.2.0
                        </div>
                    </div>
                </div>
                <div class="image d-none d-lg-block">
                    <img src="landing/ill.svg" alt="img">
                </div>
            </div>
        </div>
    </div>
    <div class="callout container">
        <div class="row">
            <div class="col-md-6 col-12 mb-4 mb-lg-0">
                <div class="text-job text-muted text-14">not a reason to use Stisla</div>
                <div class="h1 mb-0 font-weight-bold"><span class="font-weight-500">just a </span>statistic</div>
            </div>
            <div class="col-4 col-md-2 text-center">
                <div class="h2 font-weight-bold">7000+</div>
                <div class="text-uppercase font-weight-bold ls-2 text-primary">Downloads</div>
            </div>
            <div class="col-4 col-md-2 text-center">
                <div class="h2 font-weight-bold">125+</div>
                <div class="text-uppercase font-weight-bold ls-2 text-primary">Countries</div>
            </div>
            <div class="col-4 col-md-2 text-center">
                <div class="h2 font-weight-bold">6500+</div>
                <div class="text-uppercase font-weight-bold ls-2 text-primary">Sessions</div>
            </div>
        </div>
    </div>
    <section id="features">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-10 offset-lg-1">
                    <h2>Stisla is <span class="text-primary">designed for you</span> and your clients</h2>
                    <p class="lead">Integrated with 30+ third-party libraries and has many components, you
                        will easily to create a dashboard layout.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="features">
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h5>Responsive Design</h5>
                            <p>Don't worry about the gadget you have. Stisla is very suitable for every platform.</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fab fa-html5"></i>
                            </div>
                            <h5>HTML5 &amp; CSS3</h5>
                            <p>Written with HTML5 and CSS3 and supported by most modern browsers.</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <h5>JavaScript APIs</h5>
                            <p>We provide some javascript APIs to interact with some components more easily.</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <h5>Verified By W3C?</h5>
                            <p>All HTML pages are free of errors, because they have been verified by W3C.</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            <h5>Bootstrap 4</h5>
                            <p>Based on Bootstrap 4, one of the popular flexbox frameworks.</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <h5>And Others</h5>
                            <p>We don't want to talk much about this template, try it yourself and don't say anything.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="design" class="section-design">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block">
                    <img src="https://getstisla.com/landing/undraw_processing_qj6a.svg" alt="user flow"
                        class="img-fluid">
                </div>
                <div class="col-lg-7 pl-lg-5 col-md-12">
                    <div class="badge badge-primary mb-3">30+ third-party libraries</div>
                    <h2>Save your time for other <span class="text-primary">important things</span>, not <span
                            class="text-primary">dashboard</span> design</h2>
                    <p class="lead">Your idea has other things that need to be prioritized, don't waste your
                        time only on the dashboard design. Stisla will speed up your project to design a clean dashboard
                        interface.</p>
                    <div class="mt-4">
                        <a href="" class="link-icon">
                            Getting Started with Stisla <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="dashboard" class="section-skew">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-10 offset-lg-1">
                    <h2>JavaScript <span class="text-primary">APIs</span></h2>
                    <p class="lead">Some components have JavaScript APIs to interact with. The example below
                        is to create a Bootstrap Modal quickly without HTML Markup.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="pre-block">
                        <pre class="language-js" data-name="modal.js"><code>$("#my-button").fireModal({
  body: '&lt;p>Your content goes here.&lt;/p>',
  created: function(modal) {
      console.log('Modal has been created');
  },
  buttons: [
    {
      text: 'Action',
      class: 'btn btn-primary btn-shadow',
      handler: function(modal) {
        // do something
        alert('Clicked');
      }
    }
  ]
});</code></pre>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="browser-container">
                        <div class="browser-row">
                            <div class="browser-column browser-left">
                                <span class="browser-dot" style="background:#fc544b;"></span>
                                <span class="browser-dot" style="background:#ffa426;"></span>
                                <span class="browser-dot" style="background:#63ed7a;"></span>
                            </div>
                            <div class="browser-column browser-middle">
                                <input type="text" readonly="" value="about:blank">
                            </div>
                            <div class="browser-column browser-right">
                                <div class="float-right">
                                    <span class="browser-bar"></span>
                                    <span class="browser-bar"></span>
                                    <span class="browser-bar"></span>
                                </div>
                            </div>
                        </div>

                        <div class="browser-content d-flex align-items-center justify-content-center flex-column">
                            <p class="mb-2">Click the button below to run the JavaScript code on the left
                                side.</p>
                            <a href="#" class="btn btn-primary" id="my-button">Click Me</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-12 col-lg-8 offset-lg-2 text-center">
                    <p><span class="text-success font-weight-bold">Good news</span>. Besides Bootstrap Modal, we have
                        other interfaces to interact with components, such as Card, Chat Box, and so on.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="components" class="section-design section-design-right">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pr-lg-5 pr-0">
                    <div class="badge badge-primary mb-3">Clean Components</div>
                    <h2>Focus on your <span class="text-primary">goal</span>, let <span
                            class="text-primary">Stisla</span> help you to <span
                            class="text-primary">design</span> the dashboard</h2>
                    <p class="lead">Designing a dashboard can be a nightmare if it's not based on a concept,
                        your time will run out just to think about what components will be created. Stisla has many
                        components, so you just need to adjust it. Save your time, go to bed early.</p>
                    <div class="mt-4">
                        <a href="" class="link-icon">
                            Explore Components <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="abs-images">
                        <img src="https://getstisla.com/landing/components/countries.png" alt="user flow"
                            class="img-fluid rounded dark-shadow">
                        <img src="https://getstisla.com/landing/components/ticket.png" alt="user flow"
                            class="img-fluid rounded dark-shadow">
                        <img src="https://getstisla.com/landing/components/user.png" alt="user flow"
                            class="img-fluid rounded dark-shadow">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="try" class="section-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2>Want to try it first?</h2>
                    <p class="lead">We are happy if you want to see a demo of this template first, find what
                        you are looking for, we really want to save your development time.</p>
                    <div class="mt-4">
                        <a href="https://demo.getstisla.com" class="btn">Go to the Demo Page</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="support-us" class="support-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-none d-lg-block pr-lg-5 pr-sm-0">
                    <div class="d-flex align-items-center h-100 justify-content-center abs-images-2">
                        <img src="https://getstisla.com/landing/stisla-preview-mid.png" alt="image"
                            class="img-fluid rounded dark-shadow">
                        <img src="https://getstisla.com/landing/pricing.png" alt="image"
                            class="img-fluid rounded dark-shadow">
                        <img src="https://getstisla.com/landing/stats.png" alt="image"
                            class="img-fluid rounded dark-shadow">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <h2>Stisla is free for anyone <span class="text-primary">Yes, including you!</span></h2>
                    <p class="lead">Stisla is no longer a simple version and a pro version. Now, everything
                        is the same.</p>
                    <ul class="list-icons">
                        <li>
                            <span class="card-icon bg-primary text-white">
                                <i class="fas fa-box-open"></i>
                            </span>
                            <span>The many components and full features, speed up your project.</span>
                        </li>
                        <li>
                            <span class="card-icon bg-primary text-white">
                                <i class="fas fa-fire"></i>
                            </span>
                            <span>Get all the Stisla components and 30+ integrated modules.</span>
                        </li>
                        <li>
                            <span class="card-icon bg-primary text-white">
                                <i class="fas fa-stopwatch"></i>
                            </span>
                            <span>Spend time on something valuable for your idea, not design.</span>
                        </li>
                        <li>
                            <span class="card-icon bg-primary text-white">
                                <i class="fas fa-heart"></i>
                            </span>
                            <span>You support and save us to continue to keep this project alive.</span>
                        </li>
                        <li>
                            <span class="card-icon bg-primary text-white">
                                <i class="fas fa-rocket"></i>
                            </span>
                            <span>Allowed to create a multi-tenant SaaS application.</span>
                        </li>
                        <li>
                            <span class="card-icon bg-primary text-white">
                                <i class="fas fa-clock"></i>
                            </span>
                            <span>Get lifetime updates and support as long as you use Stisla.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="download-section" class="bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h2>Start Your Awesome Project</h2>
                    <p class="lead">Start your amazing project with Stisla, don't start designing from
                        scratch.</p>
                </div>
                <div class="col-md-5 text-right">
                    <a href="https://getstisla.com/download" class="btn btn-primary btn-lg">Download Stisla Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="before-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card long-shadow">
                        <div class="card-body d-flex p-45">
                            <div class="card-icon bg-primary text-white">
                                <i class="far fa-file"></i>
                            </div>
                            <div>
                                <h5>Explore The Docs</h5>
                                <p class="lh-sm">Find out how to use Stisla, find out how to make Cards,
                                    Navbar, Tables, Maps and so on. Find out everything in the documentation.</p>
                                <div class="mt-4 text-right">
                                    <a href="https://getstisla.com/docs" class="link-icon">Documentation <i
                                            class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card long-shadow">
                        <div class="card-body p-45 d-flex">
                            <div class="card-icon bg-primary text-white">
                                <i class="far fa-life-ring"></i>
                            </div>
                            <div>
                                <h5>Support</h5>
                                <p class="lh-sm">Lifetime support as long as you use Stisla. Get support for
                                    Stisla bugs or request features through the Stisla community on the GitHub issue.
                                </p>
                                <div class="mt-4 text-right">
                                    <a href="https://getstisla.com/support" class="link-icon">Support <i
                                            class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3 class="text-capitalize">Stisla</h3>
                    <div class="pr-lg-5">
                        <p>Stisla was created by <a href="https://twitter.com/mhdnauvalazhar">Muhamad Nauval Azhar</a>
                            to help developers create their own UI designs for the dashboard. Stisla is free for anyone,
                            support us by becoming a sponsor and keeping this project alive.</p>
                        <p>&copy; Stisla. With <i class="fas fa-heart text-danger"></i> from Indonesia</p>
                        <div class="mt-4 social-links">
                            <a href="https://github.com/stisla"><i class="fab fa-github"></i></a>
                            <a href="https://twitter.com/getstisla"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Core</h4>
                            <ul>
                                <li><a href="http://demo.getstisla.com/index.html">Dashboard</a></li>
                                <li><a href="http://demo.getstisla.com/layout-transparent.html">Layouts</a></li>
                                <li><a href="http://demo.getstisla.com/bootstrap-alert.html">Bootstrap</a></li>
                                <li><a href="http://demo.getstisla.com/components-article.html">Components</a></li>
                                <li><a href="http://demo.getstisla.com/modules-calendar.html">Third-party Libraries</a>
                                </li>
                                <li><a href="http://demo.getstisla.com/features-activities.html">Pre-built Pages</a>
                                </li>
                                <li><a href="javascript:;">Skeleton (Progress)</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Developers</h4>
                            <ul>
                                <li><a href="https://getstisla.com/getting-started">Get Started</a></li>
                                <li><a href="https://getstisla.com/download" target="_blank">Download</a></li>
                                <li><a href="https://getstisla.com/docs">Documentation</a></li>
                                <li><a href="https://getstisla.com/support">Support</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="https://getstisla.com/blog">Blog</a></li>
                                <li><a href="https://getstisla.com/page/about">About</a></li>
                                <li><a href="https://getstisla.com/page/contact">Contact Us</a></li>
                                <li><a href="https://github.com/stisla/stisla/graphs/contributors">Team</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>
