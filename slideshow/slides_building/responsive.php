<div class="slide black invert section">
	<h1 class="v-center white">Responsive!</h1>
</div>

<div class="slide">
	<h4>Before we start.</h4>
	<p>As you drag the browser and make it smaller, you will see that the layout will start to break.</p>
</div>

<style>
	#broken-medium-bp {
		background: transparent url('images/broken-medium-breakpoint.jpg') center 0 no-repeat;
	}
</style>
<div id="broken-medium-bp" class="slide">
</div>

<style>
	#broken-medium-bp2 {
		background: transparent url('images/broken-medium-breakpoint.jpg') center -802px no-repeat;
	}
</style>
<div id="broken-medium-bp2" class="slide">
</div>



<div class="slide">
	<h4>Definig your first breakpoint</h4>
	<p class="smaller">add the following to the end of your CSS file. All styles inside this block will apply when the browser is between 0 to 999px</p></p>
<pre>
@media all and (min-width: 0) and (max-width: 999px) {

}
</pre>
</div>

<div class="slide">
	<h4>Styles that optimizies the layout</h4>
<pre>
body {
	width: 100%;
}
#content {
	padding: 0 20px;
}
h1 {
	background-size: 90%;
	background-position: center center;
}
</pre>
</div>

<div class="slide">
<pre>
.user-text {
	width: 50%;
	padding: 0;
	-webkit-column-count: 1;
	   -moz-column-count: 1;
	   		column-count: 1;
}
.user-text p {
	padding-top: 15px;
}
.user-text p:first-child {
	padding-top: 0;
}
</pre>
</div>

<style>
	#broken-small-bp {
		background: transparent url('images/broken-small-breakpoint.jpg') center 0 no-repeat;
	}
</style>
<div id="broken-small-bp" class="slide">
</div>

<div class="slide">
	<h4>First let's define another breakpoint</h4>
	<p class="smaller">All styles inside this block will apply when the browser is between 0 to 660px</p>
<pre>
@media all and (min-width: 0) and (max-width: 660px) {

}
</pre>
</div>


<div class="slide">
	<h4>Revisiting our HTML of the navigation</h4>
	<p class="smaller">add the mobile nav button to the menu</p>
<pre>
 <a href="#" id="mobile-hamburger">
    <span class="icon-bg">
        <span class="icon-bar"></span>
    </span>
</a>
</pre>
</div>

<div class="slide">
	<h4>Our new nav markup</h4>
<pre>
<nav class="main-nav">
    <ul>
        <li><a href="#">About Holden's</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Location</a></li>
        <li><a href="#">Lorem Ipsum</a></li>
    </ul>
    <a href="#" id="mobile-hamburger">
        <span class="icon-bg">
            <span class="icon-bar"></span>
        </span>
    </a>
</nav>
</pre>
</div>


<div class="slide">
	<h4>Revisit our CSS of the navigation</h4>
	<p class="smaller">add the CSS for the mobile button</a>
<pre>
#mobile-hamburger {
	display: none;
}
</pre>
</div>


<div class="slide">
	<h4>Our new styles for nav</h4>
	<p class="smaller">put these styles into the breakpoint</p>
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
#mobile-hamburger {
	display: none;
}
</pre>
</div>

<style>
	#broken-small-bp2 {
		background: transparent url('images/broken-small-breakpoint.jpg') center -1472px no-repeat;
	}
</style>
<div id="broken-small-bp2" class="slide">
</div>

<div class="slide">
	<h4>Next step</h4>
	<p>The content is still messed up within this breakpoint. Go ahead and style the rest of the page.</p>
</div>
<!-- 
<div class="slide">
	<h4>Our larger breakpoint.</h4>
	<p>Take the responsive stuff you've already done and stick it in responsive.css.</p>
	<p>We are also going to scale some content (vs static widths) in order to work on smaller tablets.</p>
<pre>
#content,
#menu-food,
#google-maps {
	width: 90%;
	padding: 0px 5% 5%;
}
.wrapper {
	width: 90%;
}
</pre>
</div>

<div class="slide">
<pre>
/* Update nav and header for smaller screens */
nav {
	margin: 20px auto 20px;
}

nav li a {
	font-size: 12px;
}

</pre>
</div>

<div class="slide">
<pre>
#content h2 {
	top: 10px;
	padding-top: 225px;
	margin-bottom: 20px;
}

#content img {
	display: none;
	float: none;
}

.user-text {
	width: 100%;
}
</pre>
</div>

<div class="slide">
	<h4>Resizing many columns.</h4>
	<p>So too many columns don't fit so hot on smaller screens.  Let's resize them so they display better.</p>
<pre>
.menu-bbq {
	width: 60%;
}

.menu .column {
	width: 40%;
	margin: 4%;
}

.menu-sides {
	width: 35%;
	margin-left: 4%;
}
</pre>
</div>

<div class="slide">
	<h4>Google maps area.</h4>
	<p>Embedded maps don't make a lot of sense on devices where you can click any address and then open it in a better, native app.</p>
	<p>Let's hide the maps entirely, and also resize this area for better display.</p>
</div>

<div class="slide">
<pre>
#map_canvas {
	display: none;
	width: 0px;
	height; 0px;
}

.menu-drinks {
	width: 60%;
}

#google-maps {
	margin-top: 0px;
}
</pre>
</div>

<div class="slide">
	<h4>Resizing fonts.</h4>
<pre>
#menu-food h3 {
	margin: 0 auto 20px;
}

.menu h4 {
	font-size: 24px;
}

.menu li {
	font-size: 16px;
	margin: 0px 0px 6px;
}
</pre>
</div>

<div class="slide">
	<h4>Smaller devices or screens.</h4>
	<p>Let's get rid of multiple columns and just have one long, scrolly page.</p>
<pre>
@media screen and (max-width: 480px) {

	/* all css goes here!*/

}
</pre>
</div>

<div class="slide">
	<h4>Reset the floats.</h4>
<pre>
.menu-bbq,
.menu-sides,
.menu-drinks {
	width: 100%;
	float: left;
}
.menu-bbq {
	border-right: 0px;
}
</pre>
</div>

<div class="slide">
<pre>
#google-maps {
	height: auto;
	margin-bottom: 30px;
}
#address {
	top: 0px;
	width: 90%;
	padding: 5px;
	margin-right: 0px;
	height: 230px;
}
</pre>
</div>

<div class="slide">
<pre>
#address h3 {
	background: none;
	height: auto;
	width: auto;
	margin: 10px 0px;
}

#address h3 span {
	display: block;
	font-family: sniglet, sans-serif;
	font-size: 24px;
	color: #bc0505;
	line-height: 34px;
	text-align: center;

}
</pre>
</div>

<div class="slide">
<pre>
#address a {
	width: 130px;
	margin: 7px;

}
.user-text {
	-moz-column-count: 1; /* Firefox */
	-webkit-column-count: 1; /* Safari and Chrome */
	column-count: 1;
}
</pre>
</div> -->

<div class="slide">
	<h4>Questions?</h4>
	<p>We now have a full website (minus some supplemental areas), totally responsive-ified!</p>
</div>








