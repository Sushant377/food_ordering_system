<?php include('partials-front/menu.php'); ?>

    <!-- Contact Form section -->
    <html>
    <head>
        <title>Contact </title>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
       
    <body>

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <h1>Contact  </h1>



                    <form id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control  " placeholder="Please enter your phone" style="width: 600px;height: 40px;">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="ok" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                           
                        </div>

                    </form>
            <?php 
            if(isset($_POST['ok'])){
                include_once 'function.php';
                $obj=new Contact();
                $res=$obj->tbl_contact($_POST);
                if($res==true){
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                }
            }
            ?>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->
        <script src="validator.js"></script>
        <script src="contact.js"></script>
    </body>
</html>

    <!-- Contact Form Section Ends -->
   
    <?php include('partials-front/footer.php'); ?>
