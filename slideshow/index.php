<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Get Schooled</title>
    
    <meta charset="utf-8">
    
    <!-- <script src="libs/js/prettify.js"></script> -->
    <link rel="stylesheet" type="text/css" href="libs/css/slideshow.css" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=' + 'Open+Sans:regular,semibold,italic,italicsemibold|Droid+Sans+Mono" />
    <script src="libs/js/slides.js"></script>
    
    <!-- references to custom stuff goes here. -->
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> -->
    <script src="libs/js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    
</head>

<body class="hidden">
    <div class="menu-container"><ul class="menu no-bullet"></ul></div>
    
    <div class="slides layout-regular template-huge">
        
        <div class="slide">
            <h1 class="thin-pink-bottom-border">
            Huge School
            </h1>
            <p class="smaller">Intro to Web Development</p>
        </div>
                
        <div class="slide magenta invert white-border">
            <h1 class="v-center bigger white">Get started.</h1>
        </div>
        
        <div class="slide">
            <h4>What we will cover in this course</h4>
            <ul class="build">
                <li>HTML</li>
                <li>CSS</li>
                <li>Photoshop <small><strong>slicing!</strong></small></li>
                <li>JavaScript</li>
            </ul>
        </div>
        
        
        

        

<?php 
/* HTML
----------------------------------------------------------------------------------------------- */
?>

        <div class="slide magenta invert white-border">
            <h1 class="v-center bigger white">HTML.</h1>
        </div>
    
        
        <?php include('slides_html/whatishtml.php') ?>
        
        <?php include('slides_html/structure.php') ?>
        
        <?php include('slides_html/semantics.php') ?>
        
        <?php include('slides_html/semantics_why.php') ?>
        

        
        
<?php 
/* CSS
----------------------------------------------------------------------------------------------- */
?>

        <div class="slide magenta invert white-border">
            <h1 class="v-center bigger white">CSS.</h1>
        </div>

        <?php include('slides_css/what_is_css.php') ?>
        
        <?php include('slides_css/selectors.php') ?>

        <?php include('slides_css/specificity.php') ?>

        <?php include('slides_css/properties.php') ?>
        
        <?php include('slides_css/floats.php') ?>
        
        <?php include('slides_css/fonts.php') ?>

        <?php include('slides_css/inheritance.php') ?>

        <?php include('slides_css/cascading.php') ?>

        <?php include('slides_css/box_model.php') ?>

        <?php include('slides_css/media_queries.php') ?>    
        
<?php 
/* Slicing
----------------------------------------------------------------------------------------------- */
?>

        <div class="slide magenta invert white-border">
            <h1 class="v-center bigger white">Slicing.</h1>
        </div>
        
        <?php include('slides_slicing/whatisslicing.php') ?>
        
        <?php include('slides_slicing/whatis_asset.php') ?>
        
        <?php include('slides_slicing/whatis_asset2.php') ?>
        
        <?php include('slides_slicing/whatis_asset3.php') ?>
        
        <?php include('slides_slicing/whatis_asset4.php') ?>
        
        <?php include('slides_slicing/whatis_asset5.php') ?>
        
        <?php include('slides_slicing/slicing-howto.php') ?>        
        
        <?php include('slides_slicing/step1.php') ?>
        
        <?php include('slides_slicing/step2.php') ?>
        
        <?php include('slides_slicing/step3.php') ?>
        
        <?php include('slides_slicing/step4.php') ?>
        
        <?php include('slides_slicing/step5.php') ?>
        
        <?php include('slides_slicing/image_types.php') ?>
        
        <?php include('slides_slicing/image_types_asset.php') ?>
        
        <?php include('slides_slicing/image_types_asset2.php') ?>
        
        <?php include('slides_slicing/image_types_asset3.php') ?>
        
        <?php include('slides_slicing/image_types_asset4.php') ?>
        
        <?php include('slides_slicing/image_types_asset5.php') ?>
        
        <?php include('slides_slicing/file_size.php') ?>
        
        <?php include('slides_slicing/save_for_web_features.php') ?>
        
        <?php include('slides_slicing/save_for_web.php') ?>
        
        <?php include('slides_slicing/file_naming.php') ?>


        <?php include('slides_building/section.php') ?>

        <?php include('slides_building/responsive.php') ?>

        <?php include('slides_building/maps.php') ?>


<?php 
/* Javascript
----------------------------------------------------------------------------------------------- */
?>
        <?php include('slides_js/holdens_js.php') ?>

        <?php include('slides_js/intro.php') ?>

        <?php include('slides_js/types.php') ?>

        <?php include('slides_js/operators.php') ?>

        <?php include('slides_js/statements.php') ?>

        <?php include('slides_js/literal_syntax.php') ?>

        <?php include('slides_js/events.php') ?>
        
        <?php include('slides_js/events_common.php') ?>
        


<?php 
/* Other
----------------------------------------------------------------------------------------------- */
?>

        <?php include('slides_other/responsive.php') ?>
        
        <div class="slide black invert white-border">
        <h1 class="v-center bigger white">Questions?</h1>
        </div>
        
        <div class="slide">
        <h1 class="v-center bigger magenta">Done.</h1>
        </div>
        
    </div> <!-- /slides -->
</body>
</html>
