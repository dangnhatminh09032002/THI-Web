<section class="title-contact-us font-weight-900">
    <div class="container">
        <h1 class="text-center">CONTACT US</h1>
    </div>
</section>
<section class="form-topic py-5">
    <div class="container-contact-us py-4">
        <h1 class="py-3">Start The Conversation</h1>
        <p class="form-topic-information mb-5">For more information or any other questions, please contact us using the
            form below
        </p>
        <form action="" method="post">
            <div class="mb-4">
                <label>Select Topic<span>*</span></label>
                <select class="form-select form-control">
                    <option selected>General</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <div class="invalid-feedback">
                    Please select topic.
                </div>
            </div>
            <!-- firstname lastname -->
            <div class="row">
                <div class="col-md-6 mb-4 mr-3 col-left-p36"><label>First name<span>*</span></label>
                    <input type="text" class="form-control" id="first-name" value="" required="">
                </div>
                <div class="col-md-6 mb-4 ml-3 col-right-p36">
                    <label for="lastName">Last name<span>*</span></label>
                    <input type="text" class="form-control" id="last-name" value="" required="">
                </div>
            </div>
            <!-- Email_Subject -->
            <div class="row">
                <div class="col-md-6 mb-4 col-left-p36"><label>Email<span>*</span></label>
                    <input type="email" class="form-control" id="email" value="" required="">
                    <div class="invalid-feedback">
                        Valid email is required.
                    </div>
                </div>
                <div class="col-md-6 mb-4 col-right-p36">
                    <label>Subject</label>
                    <input type="text" class="form-control" id="subject" value="">
                </div>
            </div>
            <!-- CompanyName_JobTitle -->
            <div class="row">
                <div class="col-md-6 mb-4 col-left-p36"><label for="email">Company Name<span>*</span></label>
                    <input type="text" class="form-control" id="commpany-name" value="" required="">
                    <div class="invalid-feedback">
                        Valid email is required.
                    </div>
                </div>
                <div class="col-md-6 mb-4 col-right-p36 ">
                    <label>Job Title<span>*</span></label>
                    <input type="text" class="form-control" id="job-title" value="" required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>
            <!-- Industry_Country -->
            <div class="row">
                <div class="col-md-6 mb-4 col-left-p36">
                    <label>Industry<span>*</span></label>
                    <input type="text" class="form-control" id="industry" value="" required="">
                    <div class="invalid-feedback">
                        Valid email is required.
                    </div>
                </div>
                <div class="col-md-6 mb-4 col-right-p36">
                    <label for="lastName">Country<span>*</span></label>
                    <input type="text" class="form-control" id="country" value="" required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>

                </div>
            </div>
            <!-- Message -->
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" id="message" rows="4"></textarea>
            </div>
            <button class="btn btn-primary btn-lg btn-submit px-5 mt-5" type="submit"><b>SUBMIT</b></button>
        </form>
    </div>
</section>
<section class="card-country mb-5">
    <div class="container-contact-us pb-4">
        <div class="row">
            <div class="col-md-4  mb-3">
                <div class="card h-100">
                    <a href="">
                        <div class="card-top overflow-hidden"><div class="card-img-top"></div></div>
                        <div class="card-body">
                            <h5 class="card-title">Singapore</h5>
                            <p class="country">Asia HQ</p>
                            <p class="card-text">6 Shenton Way<br>#25-10 Que Downtown<br>Singapore 068809</p>
                            <p>Tel:<span class="tel">+65-</span></p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <a href="#">
                    <div class="card h-100">
                        <div class="card-top overflow-hidden"><div class="card-img-top"></div></div>
                        <div class="card-body">
                            <h5 class="card-title">Hong Kong</h5>
                            <p class="country empty-country">Empty</p>
                            <p class="card-text">Unit 3A 12/F Kaiser Centre<br>No.18 Centre Street, San Ying Pun,<br>Hong
                                Kong</p>
                            <p>Tel:<span class="tel">+852-</span></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="#">
                    <div class="card h-100">
                        <div class="card-top overflow-hidden"><div class="card-img-top"></div></div>
                        <div class="card-body">
                            <h5 class="card-title">Shang Hai</h5>
                            <p class="country">China HQ</p>
                            <p class="card-text">Room 1601,Dawning Centre East Tower<br>No.500, Hongbaoshi Road,
                                Changning<br>District, Shanghai 201103, China.</p>
                            <p>Tel:<span class="card-telephone">+86-21-6090-0159</span></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

