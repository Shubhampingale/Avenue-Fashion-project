<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>
  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">shop</span> AT AVE
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>

  <div id="content" class="container"><!-- container Starts -->

<div class="row"><!-- row Starts -->

<?php

getPro();

?>

</div><!-- row Ends -->

</div><!-- container Ends -->
<!-- FOOTER -->
<footer class="page-footer">

  <div class="footer-nav">
    <div class="container clearfix">

      <div class="footer-nav__col footer-nav__col--info">
        <div class="footer-nav__heading">Information</div>
        <ul class="footer-nav__list">
          <!-- <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">The brand</a>
          </li> -->
          <li class="footer-nav__item">
            <a href="localstore.php" class="footer-nav__link">Local stores</a>
          </li>
          <li class="footer-nav__item">
            <a href="about.php" class="footer-nav__link">About Us</a>
          </li>
          <!-- <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Privacy &amp; cookies</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Site map</a>
          </li> -->
        </ul>
      </div>

      <div class="footer-nav__col footer-nav__col--whybuy">
        <div class="footer-nav__heading">BRANDS WE HAVE </div>
        <ul class="footer-nav__list">
          <li class="footer-nav__item">
            <a href="https://www.gildan.com/us/en" class="footer-nav__link">Gildan</a>
          </li>
          <li class="footer-nav__item">
            <a href="https://www.nike.com/in/" class="footer-nav__link">Nike</a>
          </li>
          <li class="footer-nav__item">
            <a href="https://www.adidas.co.in/originals" class="footer-nav__link">Addidas</a>
          </li>
          <li class="footer-nav__item">
            <a href="https://uspoloassn.in/" class="footer-nav__link">US Polo</a>
          </li>
          <li class="footer-nav__item">
            <a href="https://www.plein.com/us/home/" class="footer-nav__link">Phillip Plein</a>
          </li>
          <li class="footer-nav__item">
            <a href="https://www.lacoste.in/" class="footer-nav__link">Lacoste</a>
          </li>
        </ul>
      </div>

      <div class="footer-nav__col footer-nav__col--account">
        <div class="footer-nav__heading">Your account</div>
        <ul class="footer-nav__list">
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Sign in</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Register</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">View cart</a>
          </li>
          <!-- <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">View your lookbook</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Track an order</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Update information</a>
          </li> -->
        </ul>
      </div>


      <div class="footer-nav__col footer-nav__col--contacts">
        <div class="footer-nav__heading">Contact details</div>
        <address class="address">
        Head Office: Avenue Fashion.<br>
        Karvenagar, Pune.
      </address>
        <div class="phone">
          Telephone:
          <a class="phone__number" href="tel:0123456789">0123-456-789</a>
        </div>
        <div class="email">
          Email:
          <a href="mailto:support@yourwebsite.com" class="email__addr">support@yourwebsite.com</a>
        </div>
      </div>

    </div>
  </div>

  <!-- <div class="banners">
    <div class="container clearfix">

      <div class="banner-award">
        <span>Award winner</span><br> Fashion awards 2016
      </div>

      <div class="banner-social">
        <a href="#" class="banner-social__link">
        <i class="icon-facebook"></i>
      </a>
        <a href="#" class="banner-social__link">
        <i class="icon-twitter"></i>
      </a>
        <a href="#" class="banner-social__link">
        <i class="icon-instagram"></i>
      </a>
        <a href="#" class="banner-social__link">
        <i class="icon-pinterest-circled"></i>
      </a>
      </div>

    </div>
  </div> -->

  <div class="page-footer__subline">
    <div class="container clearfix">

      <div class="copyright">
        &copy; <?php echo date("Y");?> Avenue Fashion&trade;
      </div>

      <div class="developer">
        Developed by Shubham 
      </div>

      <div class="designby">
        Design by Shubham 
      </div>

    </div>
  </div>
</footer>


</script>

</body>

</html>
