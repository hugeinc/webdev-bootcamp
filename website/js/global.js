var HOLDENS = HOLDENS || {};
HOLDENS.Global = {
    init: function() {
        HOLDENS.Global.setUpMobileMenu();    
    },
    setUpMobileMenu: function() {
        
        var mobiMenuBtn = document.getElementById('mobile-hamburger');

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
    }
    
};

HOLDENS.Map = {
    init: function() {
        HOLDENS.Map.drawMap();    
    },
    //default options required by the Google Maps APi
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
    }
    
    
};

window.onload = function() {
    HOLDENS.Global.init();
    HOLDENS.Map.init();
}