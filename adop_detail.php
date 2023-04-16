<?php 
include 'config.php';
include 'header.php';
session_start();
if(!$_SESSION['user']){
      echo '<script language="javascript">';
        echo 'alert("Please Login first"); location.href="login.php"';
        echo '</script>';
// header("Location: login.php");
}
else { ?>
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About Pets</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About Pets</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->
 <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pets</h2>
          <p>About <span>Pets</span></p>
        </div>

        <div class="row gy-8">
<?php
 $id = $_GET['id'];
$records = mysqli_query($conn,"SELECT * FROM `pets` WHERE id='$id' "); // fetch data from database

while($data = mysqli_fetch_array($records))
{

?>
          <div class="col-lg-10 col-md-50 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="<?php echo $data['img']; ?>" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4><?php echo $data['name']; ?></h4>
                <span><?php echo $data['type']; ?> <?php echo $data['size']; ?></span>
                <p>Vaccinated: <?php echo $data['vaccinated']; ?></p>
                <p><?php echo $data['about']; ?></p>
              </div>
            </div>
          </div><?php } ?>
        </div>

      </div>
    </section><!--End Chefs Section -->
   
  </main><!-- End #main -->
<?php } ?>
<?php include 'footer.php';?>