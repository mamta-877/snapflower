<?php
include "header.php";
?>
<div class="row p-4 text-light " id=" hours" >
    <div class="col-md-6 pt-2 pb-2">
        <img src="img46.jpg" height="930px" width="900px" length="940px" />
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6 p-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1735.6602234430102!2d75.00849389839479!3d29.53616090000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39114c558670057b%3A0xb22f16f321510
                54f!2sGovt%20Polytechnic%20For%20Women!5e0!3m2!1sen!2sin!4v1685185306111!5m2!1sen!2sin" width="980px" height="930px" style="border:0;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade" length="950px"></iframe>
            </div>
        </div>    
    </div>
</div>
<div class="row" id="send">
    <div class="col-md-12  text-center">
        <h2> Send Us Your Queries!</h2>
        <p>We'll get back to you within two days.</p>
        <br/>
        <br/>
	</div>
        <?php
            if(isset($_POST['submit']))
            {
	            $name=mysqli_real_escape_string($con,$_POST['name']);
	            $email=mysqli_real_escape_string($con,$_POST['email']);
			    $website=mysqli_real_escape_string($con,$_POST['website']);
			    $message=mysqli_real_escape_string($con,$_POST['message']);
	
			    $q="insert into
			    tbcontact(name,email,website,message) values('$name','$email','$website','$message')";
			    if (mysqli_query($con,$q))
			    {
				    echo "<script>alert('message send')</script>";
			    }
			    else
			    {
				    echo mysqli_error($con);
			    }
		    }
        ?>
        <form action="#" method="POST" id="form">
        <div class="row" id="form">
            <div class="col-md-6 ">
		        <label>Name*</label>
		        <input type="text" class="form-control" name="name" required />
	        </div>
		    <div class="col-md-6">
                <label> Email*</label>
			    <input type="text" class="form-control" name="email" required />
            </div>
        <div class="row">
            <div class="col-md-12">
                <label>Website*</label>
                <textarea class="form-control" rows="3" cols="5" type="website" name="website" required></textarea>
                <label>Message*</label>
                <textarea class="form-control" rows="10" cols="8" name="message" required ></textarea>
            </div>
        </div>
        <div class="row">
	        <div class="col-md-12 mt-4 text-center" id="submit">
                <button class="btn btn-border btnbtn" name="submit">Submit</button>
            </div>
	    </div>
        </form>
    </div>
</div>
<hr/>

<?php
include "footer.php";
?>