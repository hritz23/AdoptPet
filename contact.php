<?php
include 'header1.php'; 
include 'config.php';

session_start();
if(isset($_POST['submit']))
{   

$status="Pending";
$insert = 
mysqli_query($conn,"insert into contacts (name, email, phone, regarding, subject, message, status)values ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[regarding]','$_POST[subject]','$_POST[message]','$status')");

    if($insert)
    {
       echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="index.php"';
        echo '</script>'; 
    }
    else
    {
        
        echo mysqli_error();
    }
}
?>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact Us</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact Us</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

 <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <!-- <h2>Contact</h2> -->
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <img style="border:0; width: 100%; height: 350px;" src="https://wallpaperaccess.com/full/1327675.jpg" frameborder="0" allowfullscreen>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

      <form  action="" method="POST" class="php-email-form p-3 p-md-4">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                </div>

              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-2">
                  <input type="text" name="phone" class="form-control" placeholder="Your Contact Number" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-2">
                  <input type="text" class="form-control" name="regarding" placeholder="Your Location" required>
                </div>
                
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              
              <div class="text-center"><input type="submit" name="submit" value="Submit"></div>
            </form>

      </div>
    </section><!-- End Contact Section -->
   
  </main><!-- End #main -->
<?php include 'footer.php';?>