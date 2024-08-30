<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>ShowCase Contact Us</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="contact_us.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="stylesheet/styles.css" />
    <script language="javascript" type="text/javascript">
        function clearText(field) {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
    </script>
    <script language="javascript" type="text/javascript" src="scripts/mootools-1.2.1-core.js"></script>
    <script language="javascript" type="text/javascript" src="scripts/mootools-1.2-more.js"></script>
    <script language="javascript" type="text/javascript" src="scripts/slideitmoo-1.1.js"></script>
    <script language="javascript" type="text/javascript">
        window.addEvents({
            'domready': function() { /* thumbnails example , div containers */
                new SlideItMoo({
                    overallContainer: 'SlideItMoo_outer',
                    elementScrolled: 'SlideItMoo_inner',
                    thumbsContainer: 'SlideItMoo_items',
                    itemsVisible: 5,
                    elemsSlide: 3,
                    duration: 200,
                    itemsSelector: '.SlideItMoo_element',
                    itemWidth: 140,
                    showControls: 1
                });
            },

        });
    </script>
</head>

<body>
    <div id="wrapper">
        <div id="menu">
            <ul>
            <li><a href="art_details.php"><span>01</span>Home</a></li>
      <li><a href="artist_about_us.php"><span>02</span>About Us</a></li>
      <li><a href="artist_contact_us.php"><span>03</span>Contact Us</a></li>      
      <li><a href="PHP/PHP_logout.php"><span>04</span>Logout</a></li>
            </ul>
        </div>
        <!-- end of menu -->
        <div id="header_bar">
            <div id="header">
                <div class="right"></div>
                <h3>ShowCase</h3>
                <p>Display your Art</p>
            </div>
        </div>
        <!-- end of header_bar -->
        <div class="cleaner"></div>
        <div id="sidebar">
            <div class="sidebar_top"></div>
            <div class="sidebar_bottom"></div>
            <div class="sidebar_section">
            </div>
            <div class="sidebar_section">
                <h2>Categories</h2>
                <ul class="categories_list">
                <li><a href="gallery.php?Category='Mandala'">Mandala</a></li>
                    <li><a href="gallery.php?Category='Warli'">Warli</a></li>
                    <li><a href="gallery.php?Category='Madhubani'">Madhubani</a></li>
                    <li><a href="gallery.php?Category='Gond'">Gond</a></li>
                    <li><a href="gallery.php?Category='Acrylic'">Acrylic</a></li>
                    <li><a href="gallery.php?Category='Water Colour'">WaterColour</a></li>
                    <li><a href="gallery.php?Category='Oil Pastel'">Oil Pastel</a></li>
                    <li><a href="gallery.php?Category='Landscape'">Landscape</a></li>
                    <li><a href="gallery.php?Category='Oil Painting'">Oil Painting</a></li>
                    <li><a href="gallery.php?Category='Cityscape'">Cityscape</a></li>
                </ul>
            </div>
            <div class="sidebar_section">
                <h2>Discounts</h2>
                <div class="image_wrapper"><a href="#">
        <?php
      $images = array(
    "ShowCase_Images\AcrylicPainting_01.jpg",
    "ShowCase_Images\Cityscape_01.jpg",
    "ShowCase_Images\GondArt_01.jpg",
    "ShowCase_Images\Landscape__01.jpg",
    "ShowCase_Images\Madhubani_01.jpg",
    "ShowCase_Images\Mandala_01.jpg",
    "ShowCase_Images\OilPainting_01.jpg",
    "ShowCase_Images\OilPastel_01.jpg",
    "ShowCase_Images\Warli_01.jpg",
    "ShowCase_Images\WaterColour_01.jpg",

 
);
 $randomImage = $images[array_rand($images)];
//  echo $randomImage;
?>
 <img  height="200px" width="200px" src="<?php echo $randomImage; ?>" alt="Random Image">
      </div>
               
                <div class="discount"><span>25% off</span></div>
            </div>
        </div>
        <!-- end of sidebar -->
        <div id="content">
            <div id="latest_product_gallery">
                <h2>Featured Arts</h2>
                <div id="SlideItMoo_outer">
                    <div id="SlideItMoo_inner">
                        <div id="SlideItMoo_items">
                            <div class="SlideItMoo_element"> <a href="#"> <img src="slider/AcrylicPainting.jpg"
                                        alt="" /></a> </div>
                            <div class="SlideItMoo_element"> <a href="#"> <img src="slider/cityscape.jpg" alt="" /></a>
                            </div>
                            <div class="SlideItMoo_element"> <a href="#"> <img src="slider/gond.jpg" alt="" /></a>
                            </div>
                            <div class="SlideItMoo_element"> <a href="#"> <img src="slider/lanscape.jpg" alt="" /></a>
                            </div>
                            <div class="SlideItMoo_element"> <a href="#"> <img src="slider/madhubani.jpg" alt="" /></a>
                            </div>
                            <div class="SlideItMoo_element"> <a href="#"> <img src="slider/mandala.jpg" alt="" /></a>
                            </div>
                            <div class="SlideItMoo_element"> <a href="#"> <img src="slider/oilpainting.jpg"
                                        alt="" /></a> </div>
                            <div class="SlideItMoo_element"> <a href="#"> <img src="slider/watercolor.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of latest_content_gallery -->
            <div class="content_section">
                <h2>Contact Us</h2>
            </div>
            <div class="content_section">
                <div class="container">
                    <form action="PHP/PHP_contact_us.php" method="post" class="form">
                        <div class="input-box">
                            <label for="">Name</label><br>
                            <input type="text" name="name"><br>
                        </div>
                        <div class="input-box">
                            <label for="">Phone no</label><br>
                            <input type="text" name="phone"><br><br>
                        </div>
                        <div class="input-box">
                            <textarea name="message" cols="80" rows="10"                           placeholder="Write your message here.."></textarea><br><br>
                        </div>
                        <div class="input-box">
                            <button name="submit" id="submit">Submit</button>
                        </div>
                       
                        <br>
                    </form>
                </div>
                <br>
                    <br>

            </div>
            <!-- end of content -->
        </div>

        <!-- end of wrapper -->
        <div id="footer_wrapper">
            <div id="footer">
                <ul class="footer_menu">
     <li><a href="art_details.php">Home</a></li>
      <li><a href="artist_about_us.php">About Us</a></li>
      <li><a href="artist_contact_us.php">Contact Us</a></li>
                </ul>
                Copyright &copy; 2024 <a href="#">ShowCase</a> | Designed by C Krishna Ghrini
            </div>
            <!-- end of footer -->
        </div>
        <!-- end of footer_wrapper -->
</body>

</html>


<div class="content_section">

</div>