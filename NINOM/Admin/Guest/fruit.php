<!DOCTYPE html>
<html>

<head>
<?php
    include("indexhead.php");
  ?>
</head>

<body class="sub_page">
  <?php
    include("head.php");
  ?>
    <!-- end header section -->
  </div>

  <!-- nav section -->

  <?php
    include("nav.php");
  ?>

  <!-- end nav section -->

  <!-- fruit section -->

  <section class="fruit_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
          Fresh Fruit
        </h2>
      </div>
    </div>
    <div class="container-fluid">
      <div class="fruit_container">        
        <?php
          include('../model/control_product.php');
          $get_data=new product();
          $select=$get_data->select_product();
          foreach($select as $se_pro){
          
        ?>
        <div class="box">
          <img src="../upload/<?php echo $se_pro['Picture']?>" style="width:400px; height:400px" alt="">
          <div class="link_box">
            <h5>
              <?php echo $se_pro['NamePro']?>
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- end fruit section -->


  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_logo">
        <h2>
          NiNom
        </h2>
      </div>
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="images/location.png" alt="">
              <span>
                Passages of Lorem Ipsum available
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/call.png" alt="">
              <span>
                Call : +012334567890
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/mail.png" alt="">
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Enter your email">
              <button>
                subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <?php
    include("footer.php");
  ?>
  <!-- footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <?php
    include("script.php");
  ?>

</body>

</html>