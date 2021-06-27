<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
 

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

    <title>@yield('title')</title>
  </head>
  <body>
  
  <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v5.0&appId=845655742520517&autoLogAppEvents=1"></script>

    <header class="header_area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-12">
                    <div class="logo_area text-center">
                        <a href="/index" class="firewall-logo">Portal Wisata Sleman</a>
                    </div>
                </div>
            </div>



    </header>
    <!-- ****** Header Area End ****** -->

<style>
/* ***** Fonts ***** */

@import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700|Quicksand:300,400,500,700|Shadows+Into+Light+Two');

/* ***** Import CSS ***** */

@import 'css/bootstrap/bootstrap.min.css';
@import 'css/others/animate.css';
@import 'css/others/magnific-popup.css';
@import 'css/others/meanmenu.min.css';
@import 'css/others/owl.carousel.min.css';
@import 'css/others/font-awesome.min.css';
@import 'css/others/pe-icon-7-stroke.css';

/* --------------------
:: 1.0 Base CSS
-------------------- */

* {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Poppins', sans-serif;
    position: relative;
    z-index: auto;
}
* {
  box-sizing: border-box;
}
.map{
    margin: 30px;
    margin-left: 10px;
}
.kuliner {
  text-align: center;
  padding: 32px;
}

.rowkuliner {
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.columnkuliner {
  -ms-flex: 50%; /* IE 10 */
  flex: 50%;
  padding: 0 4px;
}

.columnkuliner img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: 'Quicksand', sans-serif;
    font-weight: 700;
    color: #232d37;
    line-height: 1.25;
}

p {
    color: #51545f;
    font-size: 16px;
}

.section_padding_100 {
    padding-top: 100px;
    padding-bottom: 100px;
}

.section_padding_100_70 {
    padding-top: 100px;
    padding-bottom: 70px;
}

.section_padding_50 {
    padding-top: 50px;
    padding-bottom: 50px;
}

.section_padding_50_20 {
    padding-top: 50px;
    padding-bottom: 20px;
}

.section_padding_150 {
    padding-top: 150px;
    padding-bottom: 150px;
}

.section_padding_200 {
    padding-top: 200px;
    padding-bottom: 200px;
}

.section_padding_80 {
    margin-top: 80px;
    margin-bottom: 80px;
}

.section_padding_80_50 {
    padding-top: 80px;
    padding-bottom: 50px;
}

.section_padding_30_80 {
    padding-top: 30px;
    padding-bottom: 80px;
}

.section_padding_80_0 {
    padding-top: 80px;
    padding-bottom: 0;
}

.section_padding_0_80 {
    padding-top: 0;
    padding-bottom: 80px;
}

img {
    max-width: 100%;
}

.mt-15 {
    margin-top: 15px;
}

.mt-30 {
    margin-top: 30px;
}

.mt-40 {
    margin-top: 40px;
}

.mt-50 {
    margin-top: 50px;
}

.mt-100 {
    margin-top: 100px;
}

.mt-150 {
    margin-top: 150px;
}

.mr-15 {
    margin-right: 15px;
}

.mr-30 {
    margin-right: 30px;
}

.mr-50 {
    margin-right: 50px;
}

.mr-100 {
    margin-right: 100px;
}

.mb-15 {
    margin-bottom: 15px;
}

.mb-30 {
    margin-bottom: 30px;
}

.mb-50 {
    margin-bottom: 50px;
}

.mb-100 {
    margin-bottom: 100px;
}

.ml-15 {
    margin-left: 15px;
}

.ml-30 {
    margin-left: 30px;
}

.ml-50 {
    margin-left: 50px;
}

.ml-100 {
    margin-left: 100px;
}

ul,
ol {
    margin: 0;
    padding: 0;
}

#scrollUp {
    bottom: 55px;
    font-size: 14px;
    right: 50%;
    width: 30px;
    background-color: #fc6c3f;
    color: #fff;
    text-align: center;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    margin-right: -15px;
}

a,
a:hover,
a:focus,
a:active {
    text-decoration: none;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    font-weight: 500;
    outline: none;
}

li {
    list-style: none;
}

.heading_text > p {
    font-size: 16px;
}

.heading_text > h2 {
    font-weight: 500;
    color: #333;
}

.heading_text > h3 {
    color: #b4b4b4;
    font-size: 90px;
    font-weight: 100;
    margin: 0;
}

.font-shadow-into-light {
    font-family: 'Shadows Into Light Two', cursive !important;
}

.firewall-table {
    display: table;
    height: 100%;
    left: 0;
    position: relative;
    top: 0;
    width: 100%;
    z-index: 2;
}

.firewall-table-cell {
    display: table-cell;
    vertical-align: middle;
}

#preloader {
    overflow: hidden;
    background-color: #fff;
    height: 100%;
    left: 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 999999;
}

.firewall-load {
    -webkit-animation: 2000ms linear 0s normal none infinite running firewall-load;
    animation: 2000ms linear 0s normal none infinite running firewall-load;
    background: transparent none repeat scroll 0 0;
    border-color: #dddddd #dddddd #fc6c3f;
    border-radius: 50%;
    border-style: solid;
    border-width: 3px;
    height: 40px;
    left: calc(50% - 20px);
    position: relative;
    top: calc(50% - 20px);
    width: 40px;
    z-index: 9;
}

@-webkit-keyframes firewall-load {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@keyframes firewall-load {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

/* --------------------
:: 2.0 Top Header Area CSS
-------------------- */

.top_header_area {
    width: 100%;
    height: 40px;
    border-bottom: 1px solid #ebebeb;
}

.top_header_area .top_social_bar {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 40px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}


.top_header_area .top_social_bar > a {
    font-size: 12px;
    color: #232d37;
    margin-right: 30px;
}

.top_header_area .top_social_bar > a:hover {
    color: #fc6c3f;
}

.top_header_area .top_social_bar > a:last-of-type {
    margin-right: 0;
}

.top_header_area .signup-search-area {
    height: 40px;
    position: relative;
    z-index: 3;
}

.top_header_area .signup-search-area a {
    font-size: 13px;
    color: #222;
}

.top_header_area .signup-search-area .login a {
    margin-right: 13px;
    border-right: 2px solid #c2c2c2;
    padding-right: 13px;
}

.top_header_area .signup-search-area .search_button {
    margin-left: 54px;
}

#searchBtn {
    position: relative;
    z-index: 8;
}

.search-hidden-form {
    position: absolute;
    width: 100%;
    z-index: 4;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    font-size: 12px;
}

.search-hidden-form.search-form-open {
    z-index: 18;
    opacity: 1;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

.search-hidden-form #search-anything {
    width: 100%;
    height: 30px;
    border: 1px solid #ddd;
    top: 5px;
    position: relative;
    padding: 5px 10px;
}

.search-hidden-form span {
    line-height: 30px;
    width: 30px;
    height: 30px;
    position: absolute;
    display: block;
    text-align: center;
    top: 5px;
    right: 0;
    border: 1px solid #ddd;
    color: #888;
    cursor: pointer;
    z-index: 5;
    font-size: 13px;
    border-left: none;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
}

.search-hidden-form span:hover {
    color: #000;
}

/* --------------------
:: 3.0 Menu Area CSS
-------------------- */

.logo_area .firewall-logo {
    font-family: 'Shadows Into Light Two', cursive;
    font-size: 60px;
    margin-bottom: 0;
    padding: 35px 0 20px 0;
    display: inline-block;
    color: #232d37;
}

.navbar.navbar-expand-lg {
    padding: 0;
}

.navbar.navbar-expand-lg .navbar-nav .nav-link {
    padding: 25px 30px;
    color: #232d37;
    text-transform: uppercase;
    font-size: 14px;
}

.navbar.navbar-expand-lg .navbar-nav .nav-link:hover,
.navbar.navbar-expand-lg .navbar-nav .active .nav-link {
    color: #fc6c3f;
}

.dropdown-item {
    font-weight: 500;
    color: #232d37;
    font-size: 14px;
    text-transform: uppercase;
}

.dropdown-item:focus,
.dropdown-item:hover {
    color: #fc6c3f;
    text-decoration: none;
    background-color: #f8f9fa;
}

/* --------------------
:: 4.0 Wellcome Area CSS 
-------------------- */

.welcome-single-slide {
    position: relative;
    z-index: 1;
    overflow: hidden
}

.welcome-single-slide .project_title a > h5 {
    color: #ffffff;
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 0;
}

.welcome-single-slide .project_title {
    position: absolute;
    content: "";
    bottom: -300px;
    left: 0;
    z-index: 3;
    background: rgba(252, 108, 63, 0.7);
    padding: 30px;
    width: 100%;
    height: auto;
    -webkit-transition-duration: 750ms;
    transition-duration: 750ms;
}

.welcome-single-slide:hover .project_title {
    bottom: 0;
}

.welcome-single-slide .post-date-commnents a {
    font-size: 14px;
    font-weight: 400;
    color: #fff;
    position: relative;
    z-index: 1;
    margin-bottom: 10px;
}

.welcome-single-slide .post-date-commnents a:hover {
    color: rgba(255, 255, 255, 0.9);
}


.welcome-single-slide .post-date-commnents a:first-child {
    margin-right: 30px;
}

.welcome-single-slide .post-date-commnents a:first-child:after {
    width: 2px;
    height: 80%;
    content: '';
    position: absolute;
    top: 10%;
    right: -14px;
    z-index: 2;
    background-color: #fff;
}


.welcome-post-sliders {
    position: relative;
    z-index: 1;
}

.welcome-post-sliders .owl-prev {
    position: absolute;
    width: 10%;
    background-color: transparent;
    height: 100%;
    top: 0;
    left: 0;
    cursor: url(img/core-img/back.png), auto !important;
    z-index: 9;
}

.welcome-post-sliders .owl-next {
    position: absolute;
    width: 10%;
    background-color: transparent;
    height: 100%;
    top: 0;
    right: 0;
    cursor: url(img/core-img/next.png), auto !important;
}

/* --------------------
:: 5.0 Top Feature Area CSS 
-------------------- */

.categories_area {
    padding: 80px 0 50px 0;
}

.single_catagory {
    position: relative;
    z-index: 1;
    margin-bottom: 30px;
}

.single_catagory img {
    border-radius: 20px;
}

.catagory-title {
    width: 200px;
    height: 50px;
    background-color: #fff;
    position: absolute;
    top: 50%;
    text-align: center;
    border-radius: 30px;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
}

.single_catagory:hover .catagory-title {
    background-color: #fc6c3f;
}

.catagory-title a > h5 {
    margin-bottom: 0;
    line-height: 50px;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
}

.single_catagory:hover .catagory-title a > h5 {
    color: #fff;
}

/* --------------------
:: 6.0 Blog Area CSS 
-------------------- */

.post-thumb img {
    border-radius: 30px;
    margin-bottom: 30px;
}

.post-meta {
    -webkit-box-align: center;
    -ms-flex-align: center;
    -ms-grid-row-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.post-author a,
.post-date a,
.post-favourite a,
.post-comments a,
.post-share a {
    color: #b5aec4;
    font-size: 14px;
}

.post-author a:hover,
.post-date a:hover,
.post-favourite a:hover,
.post-comments a:hover,
.post-share a:hover {
    color: #000;
}

.post-favourite a,
.post-comments a {
    margin-right: 15px;
}

.post-author a {
    margin-right: 30px;
    position: relative;
    z-index: 1;
}

.post-author a:after {
    width: 2px;
    height: 60%;
    content: '';
    position: absolute;
    top: 20%;
    right: -14px;
    z-index: 2;
    background-color: #b5aec4;
}

.single-post {
    margin-bottom: 30px;
}

.single-post h2,
.single-post h4 {
    margin: 10px 0;
    color: #232d37;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    text-transform: capitalize;
}

.single-post h2:hover,
.single-post h4:hover {
    color: #fc6c3f;
}

.single-post p {
    color: #51545f;
}

.single-post .read-more {
    font-size: 12px;
    color: #b5aeba;
    display: inline-block;
    border: 1px solid #ebebeb;
    border-radius: 30px;
    height: 40px;
    min-width: 170px;
    line-height: 40px;
    text-align: center;
}


.single-post .read-more:hover {
    color: #000;
    border: 1px solid #000;
}

/* List Blog Area CSS */

.list-blog.single-post .post-thumb,
.list-blog.single-post .post-content {
    -ms-flex-preferred-size: 50%;
    flex-basis: 50%;
    margin-right: 15px;
}

.list-blog.single-post .post-content {
    margin-right: 0;
    margin-left: 15px;
    margin-bottom: 30px;
}

.list-blog.single-post {
    margin-bottom: 30px;
    border-bottom: 1px solid #ebebeb;
}

.blog_area .col-12:last-of-type .list-blog.single-post {
    margin-bottom: 0;
    border-bottom: none;
}

.blog_area .col-12:last-of-type .list-blog.single-post .post-thumb img {
    margin-bottom: 0;
}

/* --------------------
:: 7.0 Instagram Area CSS 
-------------------- */

.instagram_gallery_item {
    position: relative;
    z-index: 1;
}

.instagram_gallery_item img {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    width: 100%;
}

.instagram_gallery_item .hover_overlay {
    background: rgba(252, 108, 63, 0.7);
    height: 100%;
    left: 0;
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    position: absolute;
    top: 0;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    width: 100%;
    z-index: 5;
}

.instagram_gallery_item:hover .hover_overlay {
    opacity: 1;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

.instagram_gallery_item .follow-me a {
    font-size: 16px;
    color: #fff;
    font-weight: 400;
}

.instargram_area {
    position: relative;
    z-index: 1;
}

.instargram_area .owl-prev {
    position: absolute;
    width: 10%;
    background-color: transparent;
    height: 100%;
    top: 0;
    left: 0;
    cursor: url(img/core-img/back.png), auto !important;
    z-index: 9;
}

.instargram_area .owl-next {
    position: absolute;
    width: 10%;
    background-color: transparent;
    height: 100%;
    top: 0;
    right: 0;
    cursor: url(img/core-img/next.png), auto !important;
}


/* --------------------
:: 8.0 Footer Social Area CSS 
-------------------- */

.footer-social-area {
    border-bottom: 1px solid #eeeeee;
    padding: 50px 0;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.single-icon > a {
    color: #51545f;
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
}

.single-icon > a:hover {
    color: #fc6c3f;
}

.single-icon > a > i {
    font-size: 16px;
    padding-right: 12px;
}

.footer-content {
    padding: 50px 0 65px 0;
    border-bottom: 1px solid #eeeeee;
}

.footer-logo-area .firewall-logo {
    font-family: 'Shadows Into Light Two', cursive;
    font-size: 60px;
    margin-bottom: 0;
    padding: 0 0 20px 0;
    display: inline-block;
    color: #232d37;
}

.copy_right_text {
    width: 100%;
    height: 70px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center
}

.copy_right_text > p {
    font-size: 14px;
    color: #b5aec4;
    margin-bottom: 0;
}

.footer_area .navbar.navbar-expand-lg .navbar-nav .nav-link {
    padding-bottom: 0;
}

/* --------------------
:: 9.0 Goole Map Area CSS
-------------------- */

#googleMap {
    height: 620px;
    width: 100%;
}


/* --------------------
:: 10.0 Sidebar Area CSS
-------------------- */

/* About me */

.single-widget-area {
    margin-bottom: 50px;
}

.widget-title > h6 {
    background: #fee2d9;
    height: 40px;
    width: 100%;
    line-height: 40px;
    border-radius: 2px;
    margin-bottom: 30px;
}

.about-me-widget-thumb img {
    height: 200px;
    width: 200px;
    margin: auto;
    border-radius: 50%;
}

.about-me-widget h4 {
    margin: 15px 0;
    font-weight: 400;
}

.about-me-widget p {
    color: #51545f;
    margin-bottom: 0;
}

/* subscribe_follow_area */

.subscribe-link > a {
    font-size: 14px;
    color: #51545f;
    padding: 0 15px;
}

.subscribe-link > a:hover {
    color: #fc6c3f;
}

.subscribe-link {
    padding-top: 20px;
}

/* popular post */

.popular-post-widget .single-populer-post img {
    margin-right: 10px;
    border-radius: 20px;
    margin-bottom: 30px;
    -ms-flex-item-align: center;
    align-self: center;
}

.popular-post-widget .single-populer-post:last-of-type img {
    margin-bottom: 0;
}

.popular-post-widget .single-populer-post img {
    width: calc(50% - 10px);
}

.popular-post-widget .single-populer-post img,
.popular-post-widget .single-populer-post .post-content {
    -ms-flex-preferred-size: 50%;
    flex-basis: 50%;
}

.popular-post-widget .single-populer-post .post-content {
    margin-left: 10px;
}

.popular-post-widget .single-populer-post .post-content > p {
    font-size: 14px;
    color: #b5aec4;
    font-weight: 400;
    margin-bottom: 0;
}

/* Add Widget */

.add-widget .add-widget-area {
    position: relative;
    z-index: 1;
}

.add-widget .add-widget-area img {
    border-radius: 30px;
}

.add-widget .add-widget-area:before {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    content: '';
    background-color: rgba(30, 29, 29, 0.8);
    z-index: 1;
    border-radius: 30px
}

.add-widget .add-text {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 5;
}

.add-widget .add-text h2,
.add-widget .add-text p {
    color: #fff;
}

.add-widget .add-text p {
    font-size: 14px;
}

.add-widget .add-text a {
    min-width: 130px;
    height: 40px;
    border: 1px solid #fc6c3f;
    color: #fc6c3f;
    font-size: 12px;
    display: inline-block;
    text-transform: uppercase;
    border-radius: 30px;
    line-height: 40px;
}

.add-widget .add-text a:hover {
    border: 1px solid #fc6c3f;
    color: #fff;
    background-color: #fc6c3f;
}

/* Newsletter Widget CSS */

.newsletter-widget p {
    font-size: 14px;
}

.newsletter-form {
    position: relative;
    z-index: 1;
}

.newsletter-form input {
    width: 100%;
    height: 40px;
    background-color: #f5f5f8;
    border: 1px solid #e1e1e1;
    border-radius: 30px;
    padding: 0 20px;
    font-size: 14px;
    color: #b5aec4;
}

.newsletter-form button {
    width: 40px;
    height: 40px;
    background-color: #fc6c3f;
    border: none;
    color: #fff;
    border-radius: 30px;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 9;
    cursor: pointer;
}

/* --------------------
:: 11.0 Breadcumb Area CSS
-------------------- */

.breadcumb-area {
    width: 100%;
    height: 200px;
    background-position: center center;
    background-size: cover;
    position: relative;
    z-index: 1;
}

.breadcumb-area:after {
    width: 100%;
    height: 100%;
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    background-color: rgba(35, 45, 55, 0.7);
    z-index: -1;
}

.breadcumb-area .bradcumb-title h2 {
    font-size: 48px;
    color: #fff;
}

.breadcumb-nav .breadcrumb {
    padding: 0;
    margin-bottom: 0;
    list-style: none;
    background-color: transparent;
    border-radius: .25rem;
    margin-top: 30px;
}

.breadcumb-nav .breadcrumb .breadcrumb-item a {
    color: #232d37;
    font-size: 16px;
}

.breadcrumb-item + .breadcrumb-item:before {
    content: "\f105";
    font-family: 'FontAwesome'
}

/* --------------------
:: 12.0 Paginatio Area CSS
-------------------- */

.pagination-area {
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -ms-grid-row-align: center;
    align-items: center;
}

.pagination-area .pagination .page-link {
    color: #51545f;
    margin: 0 2.5px;
}

.pagination-area .pagination .page-item.active .page-link,
.pagination-area .pagination .page-link:focus,
.pagination-area .pagination .page-link:hover {
    color: #fff;
    background-color: #fc6c3f;
    border-color: transparent;
}

.pagination-area .page-status p,
.contact-info-area .single-contact-info p {
    margin-bottom: 0;
}

/* --------------------
:: 13.0 Contact Area CSS
-------------------- */

.contact-form .form-control,
.comment-form .form-control {
    border: 1px solid #ebebeb;
    height: 50px;
}

.contact-form .form-control:focus,
.comment-form .form-control:focus {
    border: 1px solid #000;
}

.contact-form textarea.form-control,
.comment-form textarea.form-control {
    height: 130px;
}

.contact-btn {
    margin-top: 50px;
    width: 160px;
    height: 40px;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 500;
    color: #fff;
    background-color: #fc6c3f;
    border-radius: 30px;
}

.contact-btn:hover {
    color: #fff;
    background-color: #d43f10;
}

.contact-form-sidebar {
    background-size: cover;
    background-position: center center;
}

/* -------------------- 
:: 14.0 Single Blog CSS
-------------------- */

.single-post-share-info a {
    width: 30px;
    display: block;
    height: 30px;
    background-color: #ddd;
    border-radius: 50%;
    text-align: center;
    color: #fff;
    font-size: 14px;
    margin-bottom: 20px;
}

.single-post-share-info a i {
    line-height: 30px;
}

.single-post-share-info a.facebook {
    background-color: #4c65a8;
}


.single-post-share-info a.facebook:hover {
    background-color: #3555ac;
}

.single-post-share-info a.twitter {
    background-color: #41a1f6;
}

.single-post-share-info a.twitter:hover {
    background-color: #087ee6;
}

.single-post-share-info a.googleplus {
    background-color: #f43535;
}

.single-post-share-info a.googleplus:hover {
    background-color: #e20707;
}

.single-post-share-info a.instagram {
    background-color: #8f6247;
}

.single-post-share-info a.instagram:hover {
    background-color: #6d4025;
}

.single-post-share-info a.pinterest {
    background-color: #f0c605;
}

.single-post-share-info a.pinterest:hover {
    background-color: #a88c0a;
}

.firewall-blockquote {
    padding-left: 30px;
    border-left: 2px solid #fc6c3f;
}

.firewall-blockquote h5 {
    font-size: 18px;
}

.firewall-blockquote h6 {
    font-size: 14px;
    text-transform: uppercase;
}

.br-30 {
    border-radius: 30px !important;
}

.single_blog_area ul li {
    position: relative;
    z-index: 1;
    color: #51545f;
    margin-bottom: 15px;
    padding-left: 30px;
}

.single_blog_area ul li:before {
    position: absolute;
    content: '\f111';
    left: 0;
    top: 5px;
    font-family: 'FontAwesome';
    font-size: 8px;
    color: #fc6c3f;
}

.tags-area {
    border-bottom: 1px solid #ebebeb;
    padding-bottom: 30px;
}

.tags-area a {
    color: #292f3b;
    padding: 5px 20px;
    text-transform: uppercase;
    font-size: 12px;
    background-color: #ebebeb;
    display: inline-block;
    margin-bottom: 3px;
}

.tags-area a:hover {
    color: #fff;
    background-color: #fc6c3f;
}

.related-post-area {
    border-bottom: 1px solid #ebebeb;
}

.related-post-area .single-post {
    margin-bottom: 0;
}

.related-post-slider .post-content h6 {
    line-height: 1.5;
    margin-bottom: 0;
}

.related-post-slider .post-thumb img {
    margin-bottom: 10px;
}

.related-post-slider .owl-prev,
.related-post-slider .owl-next {
    position: absolute;
    top: -60px;
    border: 1px solid #ebebeb;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    right: 30px;
    background-color: #fff;
}

.related-post-slider .owl-next {
    right: 0;
}

.comment_area {
    border-bottom: 1px solid #ebebeb;
}

.single_comment_area {
    position: relative;
    z-index: 1;
}

.single_comment_area:after {
    position: absolute;
    width: 1px;
    height: 90%;
    background-color: #ebebeb;
    left: 100px;
    top: 0;
    z-index: 2;
    content: ''
}

.single_comment_area ol li.single_comment_area {
    margin-left: 130px;
}


.single_comment_area ol li.single_comment_area:after {
    display: none;
}


.comment-wrapper {
    margin-bottom: 30px;
}

.comment-wrapper .comment-author {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    margin-right: 60px;
}

.single_comment_area ol li.single_comment_area .comment-wrapper .comment-author {
    margin-right: 30px;
}

.comment-wrapper .comment-author img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

.comment-wrapper .comment-content {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}

.comment-wrapper .comment-date {
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.comment-wrapper .comment-content h5 {
    font-size: 18px;
    margin: 5px 0;
}

.comment-wrapper .comment-content a {
    min-width: 80px;
    height: 30px;
    border: 1px solid #ebebeb;
    line-height: 30px;
    font-size: 12px;
    text-align: center;
    color: #232d37;
    display: inline-block;
}

.comment-wrapper .comment-content a.active {
    color: #fff;
    background-color: #fc6c3f;
}

/* Bg Pattern */
.bg-pattern {
    background-attachment: fixed;
    background-position: center center;
    background-image: url(img/bg-img/bg-pattern.jpg);
    position: relative;
    background-size: cover;
    z-index: 1;
}
.bg-pattern:after {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    content: '';
    background-color: rgba(255, 255, 255, 0.95);
    z-index: -1;
}

#pattern-switcher {
	width: 120px;
	background-color: #fc6c3f;
	position: fixed;
	top: 15%;
	z-index: 9999;
	cursor: pointer;
	height: 50px;
    right: 0;
    color: #fff;
	font-size: 12px;
	line-height: 50px;
	text-align: center;
	text-transform: uppercase;
    letter-spacing: 1px;
    -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
}

#pattern-switcher.pattern-remove {
    right: -200px;
}

#pattern-switcher:hover {
	background-color: #e3410e;
}

#patter-close > i {
	position: fixed;
	width: 20px;
	height: 20px;
	background-color: #111;
	font-size: 11px;
	line-height: 20px;
	border-radius: 50%;
	right: 110px;
	top: calc(15% - 10px);
	text-align: center;
	z-index: 99999;
	color: #fff;
	cursor: pointer;
}


.container img {
  width: 100%;
  height: auto;
}

.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn:hover {
  background-color: black;
}


</style>




    
    @yield('container')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>

     <!-- Jquery-2.2.4 js -->
     <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
  </body>
</html>