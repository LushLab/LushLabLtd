<?php
$page_title = 'Lush-Lab-Contact';
include 'header.php';
?>
  <div class="contact-wrap container">
    <div class="row">
      <div class="col-lg-3 col-md-2"></div>
      <div class="col-lg-6 col-md-8 col-sm-12">
        <div class="hide">
        <?php
        if (isset($_GET['status'])) {
          if ($_GET['status'] == 'success') {
            echo "<p>Thank you for your inquiry!</p>";
          } else if ($_GET['status'] == 'failure') {
            echo "<p>There was a problem sending your message. Please try again later.</p>";
          }
        }
        ?>
        </div>
        <div class="spacer-xxl"></div>
        <h1 id="hide-on-success-1" class="text-center">Let's start your consultation</h1>
        <div id="hide-on-success-2" class="spacer-md"></div>
        <p id="hide-on-success-3" class="text-center">Please fill out our contact form including the procedure and treatment area, to ensure that we can help with your enquiry.</p>
        <div class="spacer-lg"></div>
        <div class="text-center" id="success-message" style="display: none;">
            <h2>Thank you for your interest!</h2> 
            <p>We will get back to you shortly regarding your enquiry.</p>
        </div>
        
        <div id="failure-message" style="display: none;">
          <p>
            There was a problem sending your message! </br>
            Please refresh the page and try again.
          </p>
        </div>
        <form id="contact-form" action="send_mail.php" method="post">
          <div class="full-name">
            <div class="input-field">
              <label for="first-name">First Name:</label>
              <input type="text" id="first-name" name="First Name" required>
            </div>
            <div class="spacer-lg"></div>
            <div class="input-field">
              <label for="last-name">Last Name:</label>
              <input type="text" id="last-name" name="Last Name" required>
            </div>
          </div>
          <div class="spacer-md"></div>
          <div class="contact-details">
            <div class="input-field">
              <label for="email">Email:</label>
              <input type="email" id="email" name="Email" required>
            </div>
            <div class="spacer-md"></div>
            <div class="input-field">
              <label for="phone">Phone:</label>
              <input type="tel" id="phone" name="Phone" required>
            </div>
          </div>
          <div class="spacer-md"></div>
          <label for="procedureSelect">Procedure Type:</label>
          <select id="procedureSelect" name="Procedure" alt="select procedure type">
            <!-- Procedure options here -->
            <option value="option1" alt="laser hair removal">Laser Hair Removal</option>
            <option value="option2" alt="skin rejuvenation">Skin Rejuvenation</option>
            <option value="option3" alt="semi-permenant eyebrows">Semi-Permenant Eyebrows</option>
            <option value="option4" alt="lash and brows">Lash and Brows</option>
          </select>
          <div class="spacer-md"></div>
          <div class="treatment-sessions">
            <span class="select-group">
            <label for="treatmentSelect">Treatment Area:</label>
            <select id="treatmentSelect" name="treatment">
              <!-- Treatment options here -->
              <option>Full Body</option>
              <option>Half Body</option>
              <option>Full Face</option>
              <option>Upper Lip and Chin</option>
              <option>Full Arm</option>
              <option>Full Face</option>
              <option>Upper Lip and Chin</option>
              <option>Full Arm</option>
              <option>Half Arm</option>
              <option>Upper Arms</option>
              <option>Shoulders</option>
              <option>Chest</option>
              <option>Abdomen</option>
              <option>Upper Back</option>
              <option>Lower Back</option>
              <option>Full Leg</option>
              <option>Half Leg</option>
              <option>Neck</option>
              <option>Hollywood</option>
              <option>Bikini Line</option>
            </select>
            </span>
            <span class="select-group">
            <label for="sessionsSelect">Number of Sessions:</label>
            <select id="sessionsSelect" name="sessions">
              <!-- Number of sessions options here -->
              <option>1 Session</option>
              <option>6 Sessions</option>
              <option>8 Sessions</option>
            </select>
          </span>
          </div>
          <div class="spacer-md"></div>
          <label for="message">Message (optional):</label>
          <textarea id="message" name="message" rows="4" style="width: 100%;"></textarea>
          <div class="spacer-md"></div>
          <button class="button-primary" type="submit">Submit Enquiry</button>
        </form>
      </div>

      <div class="col-lg-3 col-md-2"></div>
    </div>
  </div>
  
<!-- footer -->
<?php include 'footer.php'; ?>