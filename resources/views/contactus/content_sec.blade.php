<section class="contact_content_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <h2>Contact Us</h2>
                <p>We would love to hear from you. Send us a message and a member of our team will get back to you
                    shortly.</p>
                <form id="contact_us_form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="input-group mt-3">
                                <span>First Name</span>
                                <input type="text" placeholder="First Name" class="first_name" id="first_name"
                                    name="first_name" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="input-group mt-3">
                                <span>Last Name</span>
                                <input type="text" placeholder="Last Name" class="second_name" id="second_name"
                                    name="second_name" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="input-group mt-3">
                                <span>Mobile Number</span>
                                <input type="number" placeholder="Mobile Number" class="mobile_number" id="mobile_number"
                                    name="mobile_number" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="input-group mt-3">
                                <span>Email Address</span>
                                <input type="email" placeholder="Email Address" class="email" id="email" name="email"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-group mt-3">
                                <span>Message</span>
                                <textarea placeholder="Write Something.." name="message" class="message" id="message"
                                    rows="3"></textarea>
                            </div>

                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-0 text-center">
                            <div class="form-group">
                                <div class="form-line">
                                    <div class="contact_error_msg col-red w-100 mt-3" style="display:none"></div>
                                    <div class="contact_success_msg col-green w-100 mt-3" style="display:none"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <button class="all_btns">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center justify-content-center">
                <div>
                <img src="{{URL::asset('assets/images/contact_content_logo.png')}}" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>
</section>