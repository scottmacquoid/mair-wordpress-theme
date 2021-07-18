
        <!-- CONTACT -->
        <section class="section" id="contact">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h2>Have any questions?</h2>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row contact-footer">
                    <div class="col-sm-4">
                        <div class="contact-footer-box text-center">
                            <i class="ti-mobile"></i>
                            <h5>123-456-789-0</h5>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="contact-footer-box text-center">
                            <i class="ti-map-alt"></i>
                            <h5>New York City, USA</h5>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="contact-footer-box text-center">
                            <i class="ti-email"></i>
                            <h5>emailaddress@domain.com</h5>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <!--contact form start-->
                    <div class="col-sm-12">
                        <h4>Send us a message!</h4>
                        <div id="message"></div>
                        <form method="post" action="php/contact.php" name="cform" id="cform" class="contact-form margin-t-20" data-parsley-validate novalidate>
                            <div class="row">
                                <div class="col-sm-4">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Your name*..." required>
                                </div>
                                <div class="col-sm-4">
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your email*..." required>
                                </div>
                                <div class="col-sm-4">
                                    <input name="subject" type="text" class="form-control" placeholder="Your subject..." required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message*..." required></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn  btn-custom" value="Send Message">
                                </div>
                            </div>
                          
                            <div id="simple-msg"></div>

                        </form>
                    </div>
                    <!--contact form end--> 
                </div>
                <!-- end row -->
                </div> <!-- end container -->
        </section>
        <!-- end CONTACT -->