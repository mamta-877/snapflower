<div class="row" id="news">
    <div class="col-md-4">
        <h5>Quick Links</h5><br/>
        <nav>
            <h6><a class="nav-link" href="dhome.php">Home</a></h6>
            <h6><a class="nav-link" href="about.php">About Us</a></h6>
            <h6><a class="nav-link" href="port.php">Services</a></h6>
            <h6><a class="nav-link" href="work.php">Works</a></h6>
            <h6><a class="nav-link" href="blog.php">Blog</a></h6>
            <h6><a class="nav-link" href="contact.php">Contacts</a></h6>
        </nav>
    </div>
    <div class="col-md-4">
        <h5>General Office</h5>
        <br/>
        <h6>Multani Colony, B Block, Shamshabad Patti, Haryana 125055<br/> India
        <br/>
        <h6>Mon - Fri: 9AM-7PM<br/><br/>
            Sat - Sun: Closed</h6>
    </div>
    <div class="col-md-4">
        <h5>Get In Touch</h5>
        <br/>
        <h6>info@company.com<br/>
            Ph: 800-123-4567</h6>
        <br/>
        <h5>Our News Letter</h5>
        <br/>
    <div class="row" id="firm">
        <div class="col-md-9">
        <?php
            if(isset($_POST['btnsubmit']))
            {
	            $email=mysqli_real_escape_string($con,$_POST['email']);
	            $q="insert into
	            tbhome(email) values('$email')";
	            if (mysqli_query($con,$q))
	            {
		            echo "<script>alert('Subscribed')</script>";
	            }
	            else
	            {
		            echo mysqli_error($con);
	            }
            }
        ?>
            <form action="#" method="POST">
                <h6><input type="email" class="form-control" name="email" placeholder="Email Address.."/></h6>
            </form>
        </div>
        <div class="col-md-3">
            <button class="btn btn-border" name="btnsubmit"><h6>OK</h6></button>
        </div> 
    </div>   
</div>
</body>
</html>