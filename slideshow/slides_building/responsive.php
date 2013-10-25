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
	<h4>Create a new stylesheet</h4>
	<p>Name it <strong>responsive.css</strong> and put it inside the <strong>css folder</strong></p>
</div>

<div class="slide">
	<h4>Reference the new stylesheet in the code</h4>
	<p>In the <strong>head tag</strong> in <storng>index.html</srong>, add the following.</p>
<pre>
<link rel="stylesheet" href="css/responsive.css" />
</pre>
</div>

<div class="slide">
	<h4>Definig your first breakpoint</h4>
	<p class="smaller">In the new <strong>responsive.css</strong>. All styles inside this block will apply when the browser is between 0 to 999px</p></p>
<pre>
@media all and (max-width: 999px) {

}
</pre>
</div>

<div class="slide">
	<h4>Styles that optimizies the layout</h4>
	<p class="smaller">put this inside the breakpoint you just defined.</p>
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
	#com-1 {
		background: transparent url('images/rwd-com-1.jpg') center 0 no-repeat;
	}
</style>
<div id="com-1" class="slide">
</div>

<style>
	#com-2 {
		background: transparent url('images/rwd-com-2.jpg') center 0 no-repeat;
	}
</style>
<div id="com-2" class="slide">
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
	<p class="smaller">Add this inside <strong>responsive.css</strong>, after the 999px breakpoint</p>
<pre>
@media all and (max-width: 660px) {

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
	<p class="smaller">find your CSS for the navigaion in <strong>global.css</strong>, add the CSS for the mobile button in <strong style="color: green;">global.css</strong>, not <strong style="color: red;">responsive.css</strong></a>
	<p class="smaller">add this after the <strong>nav a</strong> block and before the <strong>header</strong> block</p>
<pre>
#mobile-hamburger {
	display: none;
}
</pre>
</div>


<div class="slide">
	<h4>Our new basic styles in the 660px breakpoint</h4>
	<p class="smaller">put these styles into the 660px breakpoint</p>
<pre>
body {
	border: 0;
	background-size: 550px;
	background-position: center top;
}
</pre>
</div>

<div class="slide">
	<h4>Our new styles for the navigation in the 660px breakpoint</h4>
	<p class="smaller"></p>
<pre>
.main-nav {
	background-color: #f3f3f3;
	border-bottom: 5px #bc0505 solid;
	margin: 0;
	padding: 0 20px;
	position: absolute;
	width: 100%;
}
.main-nav ul {
	padding: 15px 0;
}
.main-nav li {
	float: none;
	margin-top: 20px;
	text-align: left;
	width: auto;
}
</pre>
</div>

<div class="slide">
<pre>
.main-nav li:first-child {
	margin-top: 0;
}
</pre>
</div>


<div class="slide">
	<h4>Styles for the hamburger button</h4>
<pre>
#mobile-hamburger {
	background-color: #bc0505;
	display: block;
	height: 20px;
	padding: 10px;
	position: absolute;
	right: 20px;
	width: 20px;
}
#mobile-hamburger span {
	display: block;
	position: relative;
	width: auto;
	top: 5px;
}
</pre>
</div>

<div class="slide">
<pre>
#mobile-hamburger .icon-bg {
	background-color: #fff;
	height: 15px;
}
#mobile-hamburger .icon-bg .icon-bar {
	background-color: transparent;
	border-top: 5px solid #bc0505;
	height: 5px;
	position: relative;
	top: 5px;
}
</pre>
</div>


<div class="slide">
	<h4>Adding new behavior for the navigation </h4>
<pre>
nav ul {
	display: none;
}
nav.expanded ul {
	display: block;
}
nav li a {
	float: none;
	font-size: 0.9375em; /* 15/16 */
}
</pre>
</div>

<div class="slide">
<pre>
header {
	height: 306px;
}
h1 {
	background-size: 80%;
	background-position: center 20px;
	height: 295px;
	margin: 0;
	width: 100%;
}
</pre>
</div>

<div class="slide">
<pre>
#content {
	padding: 0 20px;
}
#content h2 {
	background: none;
	font-size: 1.4375em; /* 23/16 */
	padding: 10px 0 25px 0;
	text-align: left;
	top: 0;
}
<pre>
</div>


<div class="slide">
<pre>
#content h2 img {
	display: none;
}
#content h2 strong {
	margin-top: 0;
	width: 100%;
}
.user-text {
	float: none;
	padding: 0;
	width: auto;
	-webkit-column-count: 1;
	   -moz-column-count: 1;
	   		column-count: 1;
}
.user-text + img {
	display: none;
}
</pre>
</div>

<style>
	#com-3 {
		background: transparent url('images/rwd-com-3.jpg') center 0 no-repeat;
	}
</style>
<div id="com-3" class="slide">
</div>



<!-- <div class="slide">
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
</div> -->


<div class="slide">
	<h4>Styles for menu</h4>
<pre>
.menu-category .menu-section {
	float: none;
	text-align: left;
	margin: 0;
}
.menu-category > div {
	float: none;
	width: auto;
	padding: 0 20px;
}
.menu-category {
	width: 100%;
	text-align: left;
	-webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	   		box-sizing: border-box;
}
.menu-category h3 {
	margin:0 0 20px
}
</pre>
</div>

<div class="slide">
<pre>
.menu-category .menu-section ul {
	height: auto;
}
.menu-category li {
	text-align: left;
}
</pre>
</div>

<div class="slide">
	<h4>Footer</h4>
<pre>
footer {
	line-height: 20px;
}
footer p {
	padding-bottom: 20px;
}
footer p, 
footer ul {
	float: none;
}
</pre>
</div>

<div class="slide">
	<h4>Footer</h4>
<pre>
footer li {
	text-align: left;
}
footer li:first-child {
	margin-left: 0;
}
footer li a {
	font-size: 11px;
}
</pre>
</div>

<div class="slide">
	<h4>Next step</h4>
	<p>The content is still messed up within this breakpoint. Go ahead and style the rest of the page.</p>
</div>


<div class="slide">
	<h4>Questions?</h4>
	<p>We now have a full website (minus some supplemental areas), totally responsive-ified!</p>
</div>








