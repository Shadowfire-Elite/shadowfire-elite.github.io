<?php include 'inc/header.php' ?>

<main>
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="text-center mb-5">
                        <h4 class="text-uppercase mb-0">Get In Touch</h4>
                        <div class="my-3">
                            <img src="images/title-border.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-address">
                        <h4 class="title mb-4">Contact Info</h4>
                        <p class="text-muted f-15">NOOR 24Hrs</p>
                        <!-- <p class="text-muted f-15 mb-4">PHONE NUMBER</p> -->
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-6">
                            <div class="contact-address">
                                <h5 class="title f-18">Address - A</h5>
                                <p class="text-muted f-15">3165 Roosevelt Wilson Riverside, CA 92507</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-address">
                                <h5 class="title f-18">Address - B</h5>
                                <p class="text-muted f-15">1121 Bombardier Way Southfield, MI 48075</p>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="col-lg-7 offset-lg-1">
                    <div class="custom-form mt-4 mt-lg-0">
                        <div id="message"></div>
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                        <label for="name">Name</label>
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name.." required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group app-label">
                                        <label for="email">Email address</label>
                                        <input name="email" type="email" class="form-control" placeholder="Enter your email.." required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject.." required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label for="comments">Message</label>
                                        <textarea name="message" id="comments" rows="3" class="form-control" placeholder="Enter message.." required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" id="submit" name="submitcontactform" class="btn btn-primary">Send Message <i class="mdi mdi-telegram ml-2"></i></button>
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                            <div class="div">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'inc/footer.php'; ?>