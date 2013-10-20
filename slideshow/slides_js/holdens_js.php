<div class="slide invert black section">
    <h1 class="white">Examples.</h1>
</div>
<div class="slide">
    <h4>Menu.</h4>
    <p>Holden's has a menu that looks great on a normal computer screen, but takes up a lot of real estate on smaller devices.</p>
    <p>To add some interactivity, we are going to target a user's <strong>click</strong> event to show and hide the menu.</p>
    <p>First, let's find our mobile hamburger element:</p>
    <pre>
var mobiMenuBtn = document.getElementById('mobile-hamburger');
    </pre>

</div>

<div class="slide">
    <h4>Click Action.</h4>
    <p>Now that we have the element, we can use the <strong>onclick</strong> event to:</p>
    <ul>
        <li>Determine if the nav is expanded by checking a class</li>
        <li>If it's expanded, we remove the expanded class to close it</li>
        <li>If it's not expanded, we add the expanded class to open it</li>
    </ul>
</div>

<div class="slide">
    <pre>
mobiMenuBtn.onclick = function( e ){
    e.preventDefault();
    var allClasses = this.parentNode.className, //caching all classes attached to the element.
        testClass;
    if( testClass = allClasses.match(/\sexpanded\s?/i) ){ //test to see if the nav has already been expanded.

        //if the nav is already expanded, we take out the class .expanded.
        this.parentNode.className = allClasses.substring( 0, allClasses.indexOf(testClass[0]) );
        return;

    }
    //if the nav is not expanded, we add class .expanded.
    this.parentNode.className += ' expanded';
}        
    </pre>
</div>

<div class="slide">
    <h4>Refactoring.</h4>
    
    <p>To refactor this code, let's convert to the literal notation previously discussed.</p>
    <p>Assuming a namespace of <strong>HOLDENS</strong>, let's call this <strong>Global</strong> with two methods, <strong>init</strong> and <strong>setUpMobileMenu</strong></p>
    <p>Open up global.js in the website directory on your usb drive to see how this can be done if you are stuck.</p>
   
</div>

<div class="slide">
    <h4>Google Maps.</h4>
    <p>Many more complicated functionality on modern websites take use of external libraries or APIs (application programming interface), such as the google maps API.<p>
    <p>Using an API is similar to calling functions you yourself have created; based on the documentation, you can call the functions specified in order to get the desired functionality.</p>


</div>
<div class="slide">
    <p>To begin, copy paste the javascript at this link into the bottom of your page:</p>
    <p><a href="http://pastebin.com/vTAg4c10">http://pastebin.com/vTAg4c10</a></p>
    
</div>

<div class="slide">
    <p>First, set up a map with some default options required by the API.</p>
    <pre>
drawMap: function() {
    var mapOptions = {
        zoom: 15,
        disableDefaultUI: true,
        scrollwheel: false,
        mapMaker: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    //Create new google maps
    var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
  
}
    </pre>
</div>

<div class="slide">
    <p><strong>new google.maps.Map()</strong> is calling a function from the API itself in order to create a map based on the <strong>div id</strong> and the <strong>options array</strong>.</p>
    <p>These are the same as any other parameters you would pass into a function.</p>
    <p>Hint: You could give a different div (as long as it is present in your markup!) or rename the options array, and it would work exactly the same.</p>
</div>

<div class="slide">
    <h4>Drawing a marker.</h4>
    <p>Google maps API also allows for drawing a marker, or little dot, based on an address.  In order to do this, we will:</p>
    <ul>
        <li>Geocode an address</li>
        <li>Center the map based on the results of this geocode operation</li>
        <li>Set a marker based on the result</li>
    </ul>
    
    <p>All 3 of these actions come directly from google's API.</p>
</div>

<div class="slide">
    <pre>    
var geocoder = new google.maps.Geocoder();

//Make a call to geocoder service to create a pin
var latlng = geocoder.geocode({
    address: '50 E Cesar Chavez St, Austin, TX'
}, function (results, status) {

    var myLatLng = results[0].geometry.location;

    map.setCenter(myLatLng);

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title:"Hello World!"
    });

});    

    </pre>
</div>