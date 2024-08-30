<?php
include_once("PHP/connect.php");
$con = getConnection();

function showpics(){
  global $con;
  $sql="SELECT * FROM art_piece ORDER BY id DESC LIMIT 4";
  $result=mysqli_query($con,$sql);
  while ($row = mysqli_fetch_array($result)){
    ?>
    <div class="product_box margin_r35">
        <h3><?php echo $row["image_name"]; ?></h3>
        <div class="image_wrapper">
            <img height="190" width="190" src="Uploads/<?php echo $row['image']; ?>">
        </div>
        <p class="price">Price: <?php echo $row["price"]; ?></p>
    </div>
    <?php
  }
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ShowCase</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
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
    'domready': function () { /* thumbnails example , div containers */
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
      <li><a href="index.php" class="current"><span>01</span>Home</a></li>
      <li><a href="gallery.php"><span>02</span>Gallery</a></li>
      <li><a href="about_us.php"><span>03</span>About Us</a></li>
      <li><a href="contact_us.php"><span>04</span>Contact Us</a></li>
      <li><a href="Feedback.php"><span>05</span>Feedback</a></li>
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
      <h2>Artist</h2>
      <form action="PHP/PHP_login.php" method="post">
        <label>Username</label>
        <input type="text" value="" name="username" size="10" class="input_field" />
        <label>Password</label>
        <input type="password" value="" name="password" class="input_field" />
        <a href="register.php">Register</a>
        <input type="submit" name="login" value="Login" alt="Login" id="submit_btn" />
      </form>
      <div class="cleaner"></div>
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
            <div class="SlideItMoo_element"> <a href="#"> <img src="slider/AcrylicPainting.jpg" alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="slider/cityscape.jpg" alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="slider/gond.jpg" alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="slider/lanscape.jpg" alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="slider/madhubani.jpg" alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="slider/mandala.jpg" alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="slider/oilpainting.jpg" alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="slider/watercolor.jpg" alt="" /></a> </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of latest_content_gallery -->
    <div class="content_section">
      <h2>Welcome to ShowCase</h2>
      <p>An online art market place for artists to sell their creations. Whether you're an established artist or just starting out, this platform offers you the tools and resources you need to reach a global audience, showcase your art here, and grow your career</p>
    </div>  
    <div class="content_section">
     <?php showpics();?>  
    </div>
    <br><br><br><br><br>
  </div>
  <!-- end of content -->
</div>
<!-- end of wrapper -->
<div id="footer_wrapper">
  <div id="footer">
    <ul class="footer_menu">
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="about_us.php">About Us</a></li>
      <li><a href="contact_us.php">Contact Us</a></li>
      <li><a href="Feedback.php">Suggestions</a></li>
    </ul>
    Copyright &copy; 2024 <a href="#">ShowCase</a> | Designed by C Krishna Ghrini</div>
  <!-- end of footer -->
</div>
<!-- end of footer_wrapper -->
</body>
</html>
