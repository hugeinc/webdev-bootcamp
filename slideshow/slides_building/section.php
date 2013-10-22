<div class="slide black invert section">
    <h1 class="v-center white">Building the site out.</h1>
</div>

<div class="slide">
<h4>The HTML: Basic Structure of the site</h4>
<ol class="build">
    <li>Check to make sure you have an HTML tag</li>
    <li>Check to make sure you have an head tag</li>
    <li>Check to make sure you have an body tag</li>
</ol>
</div>
<div class="slide">
<h4>The HTML: Adding the meta tags.</h4>
<p class="smaller">inside the head tag, add the following <strong>before</strong> the title tag</p>
<pre>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
</pre>
</div>

<div class="slide">
<h4>The HTML: Adding stylesheets to the page</h4>
<p class="smaller">inside the head tag, add the following <strong>after</strong> the title tag</p>
<pre>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/global.css" />
<link href='http://fonts.googleapis.com/css?family=Sniglet:800|Bevan' rel='stylesheet' type='text/css'>
</pre>
</div>

<div class="slide">
<h4>The HTML: Navigation</h4>
<pre>
<nav class="main-nav">
    <ul>
        <li><a href="#">About Holden's</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Location</a></li>
        <li><a href="#">Lorem Ipsum</a></li>
    </ul>
</nav>
</pre>
</div>

<div class="slide">
<h4>The HTML: Adding the page title</h4>
<p class="smaller">add this after .main-nav</p>
<pre>
<header>
    <h1><span>Holden's Hog Tie</span></h1>
</header>
</pre>
</div>




<!-- <div class="slide">
<pre>

ul {
    padding: 0;
    margin: 0;
}
li {
    list-style: none;
}
</pre>
</div> -->
<div class="slide">
<h4>The HTML: The top content area.</h4>
<p class="smaller">add this after the page title (Header tag)</p>
<pre>
<section id="content" class="clearfix">
    <h2>
        <img src="css/sprites/logo.png" alt="Holden Hog Tie" />
        <strong>"No pork butts about it; The Best BBQ in Austin."<span>-Your Mom</span></strong>
    </h2>
    <div class="user-text">
        <p>Lorem ipsum ...</p>
        
        <p>ipsum dolor ...</p>
    </div>
    <img class="cowboy-icon" src="images/cowboy.jpg" alt="Cowboy" width="202" height="201" />
</section>
</pre>
</div>

<div class="slide">
<h4>The CSS: Global styles.</h4>
<pre>
body {
    background: url('../images/header-bg.jpg') no-repeat center 175px;
    border-top: 5px #bc0505 solid;
    color: #666666;
    font-size: 16px;
}
.page {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
}
nav,
header,
h1,
section,
.wrapper {
    margin: 0 auto;
    width: 100%;
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
                box-sizing: border-box;
}
.wrapper {
    height:  100%;
}
h1 {
    margin: 20px auto 0 auto;
}
ul {
    padding: 0;
    margin: 0;
}
li {
    list-style: none;
}
a,
a:visited {
    color: #1a1a1a;
}
</pre>
</div>

<div class="slide">
<h4>The CSS: Navigation</h4>
<pre>
.main-nav {
    font-family: bevan, sans-serif;
    margin: 50px auto 0;
}
nav ul {
    overflow: hidden;
    width: 100%;
    text-align: center;
}
nav li {
    font-size: 0.75em;
    display: inline;
    margin: 0 1%;
}
nav a {
    color: #000;
    font-size: 1.5em; /* 18/16 */
    text-transform: uppercase;
}
</pre>
</div>

<div class="slide">
<h4>The CSS: Page Title (H1)</h4>
<pre>
header {
    height: 815px;
}

h1 {
    background: url('sprites/header.png') no-repeat top left;
    width: 100%;
    height: 178px;
}

h1 span {
    display: none;
}
</pre>
</div>

<div class="slide">
<h4>The CSS: Top content area (#content)</h4>
<pre>
#content {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
               box-sizing: border-box;
}
</pre>
</div>

<div class="slide">
<h4>The logo and the tagline</h4>
<pre>
#content h2 {
    position: relative;
    top: -46px;
    overflow: hidden;
    font-family: bevan, sans-serif;
    font-size: 1.625em; /* 26/16 */
    color: #333;
}
</pre>
</div>

<div class="slide">
<pre>
#content h2 img {
    float: left;
    width: 21.1%; /* 211/1000px */
}
#content h2 strong {
    margin-top: 10%;
    float: right;
    width: 75%;
}
#content h2 span {
    display: block;
    text-align: right;
    font-size: 0.69em; /* 18/26 */
    color: #d2d2d2;
}
</pre>
</div>

<div class="slide">
<h4>The Cowboy</h4>
<pre>
#content .cowboy-icon {
    margin-left: 30px;
    float: right;
}
</pre>
</div>

<div class="slide">
<pre>
.user-text {
    float: left;
    width: 67%;
    padding-left: 50px;
    line-height: 1.25em; /* 20/16 */
    font-size: 0.8125em; /* 13/16 */
    
    -moz-column-count: 2; /* Firefox */
    -webkit-column-count: 2; /* Safari and Chrome */
    column-count: 2;
    
    -moz-column-gap: 30px; /* Firefox */
    -webkit-column-gap: 30px; /* Safari and Chrome */
    column-gap: 30px;
}
</pre>
</div>

<div class="slide">
<h4>The HTML: Menus</h4>
<pre>
<section id="menu-food" class="menu-category clearfix">
    <div class="menu-bbq"></div>
    <div class="menu-sides"></div>
</section>
<section id="menu-drinks" class="menu-category clearfix">
    <div class="menu-drinks"></div>
</section>
</pre>
</div>

<div class="slide">
<h4>The CSS: Menus</h4>
<pre>
#menu-food {
    margin: 50px auto 30px;
    color: #000;
    border-bottom: 2px #eaeaea solid;
    padding: 20px 0 0;
}
.menu-drinks {
    margin: 0 auto;
    width: 670px;
}
</pre>
</div>

<div class="slide">
<h4>.menu-category</h4>
<pre>
.menu-category {
    text-align: center;
}
.menu-category h3 {
    margin: 0 auto 40px;
}
.menu-category h4 {
    font-family: sniglet, sans-serif;
    font-size: 1.875em; /* 30/16 */
    color: #bc0505;
    margin: 0 0 20px;
    text-transform: uppercase;
}

</pre>
</div>

<div class="slide">
<h4>.menu-category (continued)</h4>
<pre>
.menu-category .menu-section {
    width: 32%; /*216px/672; */
    margin: 0 10%;
    float: left;
}
.menu-category ul {
    margin: 0 0 50px;
}

.menu-category li {
    font-family: bevan, sans-serif;
    font-size: 1.125em; /* 18/16 */
    text-align: center;
    margin: 0 0 15px;
    color: #000;
}
.menu-category li span {
    display: block;
    font-size: 0.875em; /* 14/16 */
    font-family: Arial, sans-serif;
}
</pre>
</div>

<div class="slide">
<h4>Back to floats &mdash; menu content</h4>
<pre>
.menu-bbq {
    width: 67%; /* 672px; */
    border-right: 2px #eaeaea solid;
    float: left;
}
.menu-sides {
    float: left;
    width: 32.6%; /* 326px */
}
</pre>
</div>

<div class="slide">
    <h4>Menu BBQ. – Menu title</h4>
    <p class="smaller">This goes in menu-bbq div</p>
<pre>
<h3><span>BBQ</span></h3>

</pre>
</div>

<div class="slide">
    <h4>The Menus.</h4>
    <p class="smaller">This goes under the H3</p>
<pre>
<div class="menu-section">
    <h4>Beef</h4>
    <ul>
        <li>Moist Brisket</li>
        <li>Beef Shoulder</li>
        <li>Beef Ribs<span>Available in 1/2 and Full Rack</span></li>
        <li>Boneless Prime Rib</li>
        <li>1/2 lb Burger</li>
    </ul>
</div>
</pre>
</div>

<div class="slide">
<h4>The entire BBQ Section with Beef dishes</h4>
<pre>
<div class="menu-bbq">
    <h3><span>BBQ</span></h3>
    <div class="menu-section">
            <h4>Beef</h4>
            <ul>
                <li>Moist Brisket</li>
                <li>Beef Shoulder</li>
                <li>Beef Ribs<span>Available in 1/2 and Full Rack</span></li>
                <li>Boneless Prime Rib</li>
                <li>1/2 lb Burger</li>
            </ul>
    </div>
</div>
</pre>
</div>

<div class="slide">
    <h4>Reusing styles.</h4>
    <p>You should notice that the menu items are all very similar.  This lets us use the same markup (with different content!) for all the menu items we are doing.</p>
</div>

<div class="slide">
    <h4>Some reusable css.</h4>
    <p class="smaller">all grouped under .menu-category</p>
<pre>
.menu-category {
    text-align: center;
}
.menu-category h3 {
    margin: 0 auto 40px;
}
.menu-category h4 {
    font-family: sniglet, sans-serif;
    font-size: 1.875em; /* 30/16 */
    color: #bc0505;
    margin: 0 0 20px;
    text-transform: uppercase;
}
</pre>
</div>

<div class="slide">
<pre>
.menu-category .menu-section {
    width: 32%; /*216px/672; */
    margin: 0 10%;
    float: left;
}
.menu-category ul {
    margin: 0 0 50px;
}
</pre>
</div>

<div class="slide">
<pre>
.menu-category li {
    font-family: bevan, sans-serif;
    font-size: 1.125em; /* 18/16 */
    text-align: center;
    margin: 0 0 15px;
    color: #000;
}
.menu-category li span {
    display: block;
    font-size: 0.875em; /* 14/16 */
    font-family: Arial, sans-serif;
}
</pre>
</div>

<div class="slide">
    <h4>Fill out the other menu content, using the markup we already have.</h4>
    <p>You should notice that it's looking pretty good already!</p>
</div>

<div class="slide">
    <h4>Non-reusable</h4>
    <p class="smaller">styles that are specific to the BBQ menu</p>
<pre>
.menu-bbq .menu-section {
    margin: 0 9%;
}
.menu-bbq {
    width: 67%; /* 672px/1000 */
    border-right: 2px #eaeaea solid;
    float: left;
}
</pre>
</div>

<div class="slide">
<pre>
.menu-bbq h3 {
    background: url('sprites/header-bbq.gif') no-repeat top left;
    height: 84px;
    width: 190px;
}
.menu-bbq h3 span {
    display: none;
}
.menu-bbq ul:nth-child(2) {
    height: 250px;
}
</pre>
</div>

<div class="slide">
<p class="smaller">styles that are specific to the Sides menu</p>
<pre>
.menu-sides .menu-section {
    width: 100%;
    margin: 0;
}
.menu-sides {
    float: left;
    width: 32.6%; /* 326px/1000 */
}
</pre>
</div>

<div class="slide">
<pre>
.menu-sides h3 {
    background: url('sprites/header-sides.gif') no-repeat top left;
    height: 84px;
    width: 203px;
}
.menu-sides h3 span {
    display: none;
}
</pre>
</div>