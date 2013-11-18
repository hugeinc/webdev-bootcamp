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
<h4>The HTML: Page Container</h4>
<p class="smaller">Everything on the page will be included inside .page</p>
<pre>
<div class="page">

    <!-- menu here -->

</div>
</pre>
</div>

<div class="slide">
<h4>The HTML: Navigation</h4>
<p class="smaller">we are now adding the menu inside .page</p>
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
<p class="smaller">add this after .main-nav.This is the title of the page.</p>
<pre>
<header>
    <h1><span>Holden's Hog Tie</span></h1>
</header>
</pre>
</div>

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


<style type="text/css">
    #screen-menu-y-header {
        padding: 0; background-image:url('images/insti-0.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
    }
</style>


<div id="screen-menu-y-header" class="slide"></div>

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
</pre>
</div>

<style type="text/css">
        #insti-1 {
            padding: 0; background-image:url('images/insti-1.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
        }
</style>

<div id="insti-1" class="slide">
</div>

<div class="slide">
    <p class="smaller">Now we are adding some baseline styles that will not immediately affect the look of the page</p>
    <p class="smaller">after the <strong>.page</strong> block, add:</p>

<pre>
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
</pre>
</div>

<div class="slide">
    <pre>
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

</pre>
</div>

<div class="slide">
<pre>
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

<style type="text/css">
        #insti-2 {
            padding: 0; background-image:url('images/insti-2.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
        }
    </style>

<div id="insti-2" class="slide">
</div>

<div class="slide">
<h4>The CSS: Page Title (H1)</h4>
<pre>
header {
    height: 815px;
}

h1 {
    background: url('sprites/header.png') no-repeat top center;
    width: 100%;
    height: 178px;
}

h1 span {
    display: none;
}
</pre>
</div>

<style type="text/css">
    #insti-3 {
        padding: 0; background-image:url('images/insti-3.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
    }
</style>

<div id="insti-3" class="slide">
</div>

<div class="slide">
<h4>The CSS: Top content area (#content)</h4>
<p class="smaller">some baseline styles for the #content container.</p>
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

<style type="text/css">
    #insti-3-5 {
        padding: 0; background-image:url('images/insti-3-5.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
    }
</style>

<div id="insti-3-5" class="slide">
</div>

<div class="slide">
<h4>Calculating em and percentages</h4>
<p class="smaller">target = 26 from PSD</p>
<p class="smaller">root = 16 from Body</p>
<p class="smaller">em = t/r</p>
<pre>
body {
   ...
    font-size: 16px;
}
...
...
font-size: 1.625em; /* 26/16 */
</pre>
</div>



<style>
    #percentage {
       padding: 0; background-image:url('images/percentage.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
    }
</style>
<div id="percentage" class="slide">
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
    margin-bottom: 2.5em; /* 40/16 */
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

<style type="text/css">
        #insti-4 {
            padding: 0; background-image:url('images/insti-4.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
        }
    </style>

<div id="insti-4" class="slide">
</div>


<div class="slide">
<h4>The HTML: Menus</h4>
<p class="smaller">Here are the containers for the different menus.</p>
<p class="smaller">Notice the hierarchy. <strong>.menu-category</strong> is the parent of the differnet menu types (ex. menu-bbq)</p>
<p class="smaller">After this, there should be no change on your page because we have yet to add any content.</p>
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
    <h4>Menu BBQ. – Menu title</h4>
    <p class="smaller">This is the menu title and it goes in <strong>.menu-bbq</strong> container.</p>
<pre>
<h3><span>BBQ</span></h3>

</pre>
</div>

<style type="text/css">
        #insti-4-1 {
            padding: 0; background-image:url('images/insti-4-1.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
        }
    </style>

<div id="insti-4-1" class="slide">
</div>

<div class="slide">
    <h4>The Menus.</h4>
    <p class="smaller">Next we are going to add some beef dishes to the menu. Notice <strong>.menu-section</strong> is the parent container of all the beef dishes.</p>
    <p class="smaller">This goes under the H3.</p>
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
<p class="smaller">Your entire markup for the BBQ menu with Beef dishes shoulw look like this.</p>
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

<style type="text/css">
    #insti-4-2 {
        padding: 0; background-image:url('images/insti-4-2.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
    }
</style>

<div id="insti-4-2" class="slide">
</div>

<div class="slide">
<p class="smaller">Now we can continue to add the Chicken, Sausage and Port sections.</p>
<p class="smaller">For example, this is the code you need for the chicken section. Notice it has the same hierachy as the beef section</p>
<p class="smaller">Add this after the <strong>beef .menu-section</strong></p>
<pre>
<div class="menu-section">
    <h4>Chicken</h4>
    <ul>
        <li>Market Chicken<span>Available in 1/2 and Full Roaster</span></li>
        <li>Beer Can Bird</li>
        <li>Wings</li>
        <li>Drumsticks</li>
    </ul>
</div>
</pre>
</div>

<style type="text/css">
    #insti-4-3 {
        padding: 0; background-image:url('images/insti-4-3.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
    }
</style>

<div id="insti-4-3" class="slide">
</div>


<div class="slide">
<p class="smaller">We can create the Sides menu by following the same hierachy we have established for the BBQ section. First, let's create the menu title.</p>
<p class="smaller">Type the following inside the <strong>.menu-sides</strong> container.</p>
<pre>
<h3><span>Sides</span></h3>
</pre>

<p class="smaller">Directly after the above code, add the menu section:</p>
<pre>
<div class="menu-section">
    <h4>Potatoes</h4>
    <ul>
        <li>Baked</li>
        <li>Mashed</li>
        <li>French Fried</li>
    </ul>
</div>
</pre>
</div>

<div class="slide">
<p class="smaller">Also add the Veggie section underneath the Potato section:</p>
<pre>
<div class="menu-section">
    <h4>Veggies</h4>  
    <ul>
        <li>Cole Slaw</li>
        <li>Drunk Beans</li>
        <li>Collard Greens</li>
    </ul>
</div>
</pre>
</div>

<style type="text/css">
    #insti-4-4 {
        padding: 0; background-image:url('images/insti-4-4.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
    }
</style>

<div id="insti-4-4" class="slide">
</div>

<div class="slide">
<p class="smaller">Lastly, we add out drink menu following the same hierachy. First we add the title of the menu in the <strong>.menu-drinks</strong> container</p>
<pre>
<h3><span>Drinks</span></h3>
</pre>
<p class="smaller">and then the Soft Drinks section.</p>
<pre>
<div class="menu-section">
    <h4>Soft Drinks</h4>
    <ul>
        <li>Lemonade</li>
        <li>Pop</li>
        <li>Iced Tea</li>
        <li>Sweet Tea</li>
    </ul>
</div>
</pre>
</div>

<div class="slide">
<p class="smaller">after the Soft Drink .menu-section, we add the Beer section &mdash; out last drink .menu-section</p>
<pre>
<div class="menu-section">
    <h4>Beer</h4>
    <ul>
        <li>Budweiser</li>
        <li>Bud Light</li>
        <li>Live Oak Brew</li>
        <li>Brooklyn Lager</li>
    </ul>
</div>
</pre>
</div>

<style type="text/css">
    #insti-4-5 {
        padding: 0; background-image:url('images/insti-4-5.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
    }
</style>

<div id="insti-4-5" class="slide">
</div>

<!-- <div class="slide">
<h4>Styling the menus with CSS</h4>
<p class="smaller">Let's start by styling some common containers in the menus</p>
<pre>
#menu-food {
    margin: 50px auto 30px;
    color: #000;
    border-bottom: 2px #eaeaea solid;
    padding: 20px 0 0;
}
</pre>
</div> -->

<div class="slide">
<h4>Styling the menus with CSS</h4>
<p class="smaller">Let's start by styling some common containers in the menus, for example, the <strong>.menu-category</strong> container</p>
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

<style type="text/css">
    #insti-4-6 {
        padding: 0; background-image:url('images/insti-4-6.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
    }
</style>

<div id="insti-4-6" class="slide">
</div>

<!-- <pre>
#menu-food {
    margin: 50px auto 30px;
    color: #000;
    border-bottom: 2px #eaeaea solid;
    padding: 20px 0 0;
}
</pre> -->


<div class="slide">
<h4>Let's work on the food menus</h4>
<pre>
#menu-food {
    margin: 50px auto 30px;
    color: #000;
    border-bottom: 2px #eaeaea solid;
    padding: 20px 0 0;
}
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

<style type="text/css">
    #insti-4-7 {
        padding: 0; background-image:url('images/insti-4-7.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
    }
</style>

<div id="insti-4-7" class="slide">
</div>

<div class="slide">
    <h4>Styles for the BBQ menu</h4>
    <p class="smaller">Now that the general layout is defined, we can go in and style the details for each menu.</p>
<pre>
.menu-bbq {
    width: 67%; /* 672px/1000 */
    border-right: 2px #eaeaea solid;
    float: left;
}
.menu-bbq .menu-section {
    margin: 0 9%;
}
.menu-bbq ul:nth-child(2) {
    height: 250px;
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

<style type="text/css">
    #insti-5 {
        padding: 0; background-image:url('images/insti-5.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
    }
</style>

<div id="insti-5" class="slide">
</div>

<div class="slide">
    <h4>Styles for the Sides menu</h4>
<pre>
.menu-sides {
    float: left;
    width: 32.6%; /* 326px/1000 */
}
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


<div class="slide">
    <h4>Styles for the Drinks menu</h4>
<pre>
.menu-drinks {
    margin: 0 auto;
    width: 670px;
}
.menu-drinks h3 {
    background: url('sprites/header-drinks.gif') no-repeat top left;
    height: 51px;
    width: 181px;
}
.menu-drinks h3 span {
    display: none;
}
.menu-drinks .menu-section {
    width: 335px;
    margin: 0;
}
</pre>
</div>

<style type="text/css">
    #insti-6 {
        padding: 0; background-image:url('images/insti-6.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
    }
</style>

<div id="insti-6" class="slide"></div>



<div class="slide">
<h4>The HTML: Footer</h4>
<pre>
<footer class="clearfix">
    <nav>
        <p>Holden's Hog Tie, 50 E Cesar Chavez St, Austin, TX &dot; (500) 867-5309</p>
        <ul>
            <li><a href="#">About Holden's</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Location</a></li>
            <li><a href="#">Lorem Ipsum</a></li>
        </ul>
    </nav>
</footer>
</pre>
</div>

<div class="slide">
<h4>The CSS: Footer</h4>
<pre>
footer {
    color: #d56161;
    background: #bc0505;
    padding: 15px;
    font-size: 0.875em; /* 14/16 */
}
footer p {
    float: left;
}
footer nav {
    font-family: arial, sans-serif;
}
</pre>
</div>

<div class="slide">
<h4>The CSS: Footer</h4>
<pre>
footer li {
    float: left;
    margin-left: 15px;
    width: auto;
}
footer li:first-child {
    margin: 0;
}
footer a ,
footer a:visited {
    font-size: 0.875em; /* 14/16 */
    color: #d56161;
}
</pre>
</div>

<style type="text/css">
        #insti-8 {
            padding: 0; background-image:url('images/insti-8.jpg'); background-size:100%; background-position: 50% 25%; background-repeat: no-repeat;
        }
    </style>

<div id="insti-8" class="slide">
</div>