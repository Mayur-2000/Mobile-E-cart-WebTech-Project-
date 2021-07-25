<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    </head>



    
<style>
 .footer2 h1{
    text-align:center;
    font-size:40px;
    padding-top:10px;
    color:	#FF7B19;
} 
.footer2 h1::after{
    content:'';
    background:#FF7B19;
    display:block;
    height:3px;
    width:450px;
    margin:20px auto 50px;
}
.Contact-Form{
    padding:15px;
}
.form-control{
    border-radius: 0  !important;
    border:1px solid black  !important;
    box-shadow: none  !important;
}
::placeholder{
    font-size:14px;

}
.Contact-Form button{
    border:none !important;
    background:	#FF7B19 !important;
    box-shadow:none  !important;
    border-radius:0 ;
}

.contact-info .follow{
    background-color:#fff;
    padding:8px;
    margin:15px;
}
.contact-info .fa{
    margin:10px;
    font-size:20px;
    color:	#FF7B19;
    font-weight:bold;
    padding-right:20px;
}
.contact-info span{
    font-size:14px;

}
.footer2 p{
    text-align:center;
    font-size:18px;
    font-weight:bold;
    color:	#FF7B19;
}

</style>
<body>
<?php
  $title = "Contact";
  require_once "./template/header.php";
?>
    <section class="footer2" id="sec8" data-text="CONTACT">
            <div class="content-box">
                <div class="container">
                    <h1>Get In Touch</h1>
                    <form  action="gettouch.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="Contact-Form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name" name="FName">
                                 </div>
                                 <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Phone Number" name="PhoneNo">
                                 </div>
                                 <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email_Id" name="email">
                                 </div>
                                 <div class="form-group">
                                    <textarea class="form-control" rows="4" placeholder="Comments" name="comments"></textarea>
                                 </div>
								 <button style="background-color:#FF7B19;" type="reset" class="btn btn-default">Cancel</button>
                                 <button style="background-color:#FF7B19;" type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                        <div class="col-md-6 contact-info">
                            <div class="follow">
                                <i class="fa fa-map-marker"></i><b><span>ABC Road,Banglore,India</span></b>
                            </div>
                            <div class="follow">
                                <i class="fa fa-phone"></i><b><span>+91 9560969667</span></b>
                            </div>
                            <div class="follow">
                                <i class="fa fa-envelope-o"></i><b><span>hi@example.com</span></b>
                            </div>
                            <div class="follow">
                                <i class="fa fa-facebook">ABC</i>
                                <i class="fa fa-instagram">ABC</i>
                                <i class="fa fa-twitter">ABC</i>
                                <i class="fa fa-whatsapp">+91 9573836783</i>
                            </div>
                        </div>
                        </div>
                    </form>
                        <hr>
                        <p>&copyECART Design</p>
                </div>

            </div>
        </section>
        </body>
        </html>
			        	
				        	
<?php
  require_once "./template/footer.php";
?>