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
            //if the nav is not expanded, we add calss .expanded.
            this.parentNode.className += ' expanded';
        } 
    }
    
};

window.onload = function() {
    HOLDENS.Global.init();
}