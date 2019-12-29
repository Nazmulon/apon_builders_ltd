@include('layouts.frontend.include.header')


    <!-- nevber end -->
    <div class="back2">
        <h1 class="contact">Contact Us</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class=" text-center">
                    <p style="color: darkgreen; margin-top: 30px;">Get In Touch</p>
                    <h1 style="margin-top: -12px;">Contact Form</h1>
                    <img class="img-fluid" src="{{asset('/')}}assets/frontend/img/about_us/who.jpg" alt="">
                </section>
            </div>
        </div>
        <!-- contact form -->
        <?php  
        if(isset($_POST["submit"]))  
        if($_POST["submit"])  
        {  
            $to = 'nazmulranbagha@gmail.com';
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];
            $headers = "Full Name:"." ". $name."\n"."Email:"." ".$email;
            $body = "Subject:"." ".$subject."\r\n ". "Number:"." ".$phone."\r\n "."Message:"." ".$message;
               
            if(mail($to, $headers,$body))
            {            
            // Paste mail function or whatever else you want to happen here!
             echo '<br><p style="color:green">Completed successfully!</p><br>';
            }

    }  
    else  
    {  
        echo '<div class="alert alert-danger">CAPTHCA is not valid; ignore submission</div>';  
    }  
    ?>
        <form action="{{route('contact')}}" method="POST">
            @csrf
            
            <div class="form-row">
              <div class="col-md-6">
                <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" required>
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-6">
              <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
          </div>
          <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
          </div>
      </div>
      <br>
      <div class="form-row">
        <div class="col-md-12">
          <textarea class="form-control" name="message" id="message" cols="30" rows="5" placeholder="message..." required></textarea>
      </div>
  </div>
  <input type="submit" name="submit" class="btn btn-success mt-4 btn-lg" value="SEND NOW">
</form>


<!-- end form -->

</div>
<!-- end container -->
<br><br><br>
<!-- footer -->
@include('layouts.frontend.include.footer')
