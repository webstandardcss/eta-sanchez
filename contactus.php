<?php
	$title = "Contact Us"; 
	include_once('header.php'); 
	include_once('header_bottom.php'); 
?>


<section class="contents col-sm-8 pull-right">
<!-- Contents Starts -->
<br />
	<div class="return"></div>
    <h1>An Immigration, Personal Injury and Criminal Defense Attorney</h1>
    <p>Are you dealing with injuries from a motor vehicle accident or facing deportation, a contract dispute or criminal charges? Jose Sanchez Law Firm, P.C., offers experienced representation for immigration, personal injury, civil litigation, and criminal
      defense cases in Longview, Texas, and the surrounding areas.</p>
    <p>I am attorney Jose Sanchez. I have spent most of my life in Longview, and I am committed to helping East Texas residents and small businesses resolve their legal issues. My priorities as a lawyer are to work hard for my clients and do everything I can
      to help them find a positive resolution to their legal problems.</p>
    <p>Contact me today for a consultation about your legal issue.</p>
    <p>
      <strong>Bold</strong> labels and * indicate required information.
    </p>
    <p>Personal Information</p>
    <script type="text/javascript">
    	$(document).ready(function(e) {			
			$("#contact_form").submit(function(){
				$('#loader').show();
				var data = {
					"action": "test"
				};
				data = $(this).serialize() + "&" + $.param(data);
				$.ajax({
					type: "POST",
					dataType: "json",
					url: "send.php", 
					data: data,
					success: function(data) {						$('#loader').hide();
						$(".return").html(
							data["json"]
						);
					},
					error: function(){
						$('#loader').hide();
						$('.return').html('<div class="alert alert-warning"><strong>Something went wrong!</strong></div>');
					}
				});
				return false;
			});
        });
    </script>
    <form action="#" class="col-sm-9" id="contact_form">    
        <ul>
            <li>
                <label>Name: <span>*</span></label>
                <input type="text" class="form-control" name="Name" required />
            </li>
            <li>
                <label>Email: <span>*</span></label>
                <input type="email" class="form-control" name="Email" required /></li>
            <li>
                <label>State/ProvinceName: </label>
                <input type="text" class="form-control" name="Province" />
            </li>
            <li>
                <label>Zip Code: </label>
                <input type="text" class="form-control" name="Zip" /> </li>
            <li>
                <label>Phone Number: </label>
                <input type="text" class="form-control" name="Phone" />
            </li>
        </ul>
        <p>Contact Preferences</p>
        <p>How would you like to be contacted?</p>
        <p>Check all that apply.</p>
        <fieldset>
          <label>Email:
            <input type="checkbox" name="replyEmail" value="Want to be Contacted by Email" />
          </label>
          <label>Phone:
            <input type="checkbox" name="replyPhone" value="Want to be Contacted by Phone" />
          </label>
        </fieldset>
        <p>How Can We Help You?</p>
        <p>Brief description of your legal issues</p>
        <p>
          <textarea class="form-control" rows="7" name="Message"></textarea>
        </p>
        <input type="submit" class="btn btn-danger" value="Send Message" />
    </form>
    <div class="clearfix"></div><br />
    <p>The use of the Internet or this form for communication with the firm or any individual member of the firm does not establish an attorney-client relationship. Confidential or time-sensitive information should not be sent through this form.</p>

<div class="row">
  <h3>Jose Sanchez Law Firm, P.C</h3>
  
  <ul class="col-sm-4">
    <li><strong>East Texas Office</strong></li>
    <li>507 N Green Street</li>
    <li>Longview, TX 75601</li>
    <li>Phone: 903-758-8700</li>
    <li>Toll Free: 888-709-9023</li>
    <li>Fax: 903-758-8712</li>
    <li>
      <a href="https://www.google.com/maps?f=q&hl=en&geocode&q=507+N+Green+Street+Longview,+TX+75601+US" target="_blank">
        <strong>Map and Directions</strong>
      </a>
    </li>
  </ul>
  
  <ul class="col-sm-4">
    <li><strong>Dallas Office</strong></li>
    <li>2911 Turtle Creek Blvd</li>
    <li>Suite 1400</li>
    <li>Dallas, Texas 75219</li>
    <li>Toll Free: 888-709-9023</li>
    <li>Fax: 903-758-8712</li>
    <li>
      <a href="https://www.google.com/maps?f=q&hl=en&geocode&q=2911+Turtle+Creek+Blvd+Dallas,+TX+75219+US" target="_blank">
        <strong>Map and Directions</strong>
      </a>
    </li>

  </ul>
</div>




    
<!-- Contents Ends -->
</section>

<aside class="col-sm-4 pull-left">
<!-- Aside Starts -->
	<br />
	<img src="images/i-default.jpg" alt="Contact Us" class="img-responsive left-img" />
	<br />
	
    <?php include_once('sidebar.php'); ?> 

<!-- Aside Ends -->
</aside>

<?php include_once('footer.php'); ?>
