@extends('main.includes.header')
@section('content')
 <!-- Start login modal popup -->
 <div class="modal fade" id="forgetpassword" tabindex="-1" role="dialog" aria-labelledby="forgetpasswordLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title text-light font-weight-bold" id="forgetpasswordLabel">
                 <img src="{{ asset('images/logo-2.png') }}" width="200px"
                     alt="grand tax filers logo" />
             </h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>
         <div class="modal-body">
             @if (session('forget_password_error'))
                 <div class="alert alert-danger">
                     {{ session('forget_password_error') }}
                 </div>
             @endif
             <form action="{{ route('reset.password.post') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group row">
                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                    <div class="col-md-6">
                        <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                    <div class="col-md-6">
                        <input type="password" id="password" class="form-control" name="password" required autofocus>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                    <div class="col-md-6">
                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                        @if ($errors->has('password_confirmation'))
                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
                </div>

                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Reset Password
                    </button>
                </div>
            </form>
         </div>
     </div>
 </div>
</div>
    <!-- banner -->
    <section class="hero_sec py-4">
        <div class="row m-0 align-items-center">
            <div class="col-xl-5 mt-4 mt-xl-0 order-2 order-lg-1 order-xl-0" data-aos="fade-up">
                <h1 class="text-center font-weight-bold mb-3">
                    Get more than <span>$4000</span> as tax refunds/reduced balance due
                    <span>tax estimate in 2 hours</span>
                </h1>
                <p class="text-justify px-xl-3 ml-auto mr-auto font-weight-bold">
                    Get over <span>$4000</span> as a genuine tax refunds or we will
                    reduce your IRS balance due tax amount on your tax returns, through
                    our legitimate tax strategies.
                </p>
                <p class="text-justify px-xl-3 ml-auto mt-2 mr-auto font-weight-bold">
                    Additional Tax Refunds over <span>$2000</span> to
                    <span>$3000</span> on your tax years 2020, 2021, 2022 filed tax
                    returns, so get your tax amended tax estimate in just hours!
                </p>
                <p class="text-justify px-xl-3 ml-auto mt-2 mr-auto font-weight-bold">
                    Avoid Audits/Notices/Enquires, by reporting our unreported income
                    and also correcting your tax returns.
                </p>
                <p class="text-justify px-xl-3 ml-auto mt-2 mr-auto font-weight-bold">
                    We <span>$5000</span> get you additional tax refunds/reducing
                    balance due on your 2023 tax returns legitimately, if you are on
                    H4-EAD/Green Card/Citizen by Incorpo-rating a business entity LLC/C
                    Corp/S Corp.
                </p>
            </div>
            <div class="col-xl-4 col-lg-7 p-0 text-center order-1 order-lg-0 order-xl-0" data-aos="fade-up">
                <img src="images/grandtax-banner.png" class="w-100" alt="" />
            </div>
            <div class="col-xl-3 col-lg-5 mt-3 mt-xl-0 text-center text-xl-right order-3 order-lg-0 order-xl-0"
                data-aos="fade-up">
                <img src="images/referal-banner.jpg" class="img-fluid rounded" alt="" />
            </div>
        </div>
    </section>
    <!-- banner end -->
    <!-- services section -->
    <div class="py-5 services_sec" style="background-color: #e9e8e4">
        <div class="title-heading-w3 text-center mx-auto mb-4 pb-sm-4">
            <h2 class="title-main">
                Free tax estimate with $3000 worth tax <span>Services for FREE</span>
            </h2>
            <p class="mt-4 px-3 px-lg-0 pt-md-2 text-dark text-justify text-md-center">
                You are a step away to enjoy $3,000 worth tax services for free, so go
                ahead and enjoy our below tax services as a compliment.
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="card h-100">
                        <img class="card-img-top"
                            src="images/services/Perect Tax Planning Stratagies for High Tax Refunds.jpg"
                            alt="Card image cap" />
                        <div class="card-body">
                            <p class="card-text text-center text-dark font-weight-bold">
                                Perfect tax planning stratagies for high tax refunds
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="text-center font-weight-bold">
                                <a class="mt-sm-5 mt-4" style="font-size: 14px"
                                    href="{{ url('/Perfect_tax_planning_stratagies_for_high_tax_refunds') }}">
                                    View Details
                                    <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0 col-lg-3" data-aos="fade-up">
                    <div class="card h-100">
                        <img class="card-img-top"
                            src="images/services/Free Filing Of Federal Tax Returns below $26,000 Income.jpg"
                            alt="Card image cap" />
                        <div class="card-body">
                            <!-- <h5 class="card-title">Card title</h5> -->
                            <p class="card-text text-center text-dark font-weight-bold">
                                Free filing Of federal tax returns below $26,000 income
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="text-center font-weight-bold">
                                <a class="mt-sm-5 mt-4" style="font-size: 14px" href="{{ url('/free_filing_of_tax_returns') }}">
                                    View Details
                                    <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0 col-lg-3 mt-md-4 mt-lg-0" data-aos="fade-up">
                    <div class="card h-100">
                        <img class="card-img-top"
                            src="images/services/Genuine High Refunds Tax Estimate on a Tax Return.jpg"
                            alt="Card image cap" />
                        <div class="card-body">
                            <!-- <h5 class="card-title">Card title</h5> -->
                            <p class="card-text text-center text-dark font-weight-bold">
                                Genuine high refunds tax estimate on a tax return
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="text-center font-weight-bold">
                                <a class="mt-sm-5 mt-4" style="font-size: 14px"
                                    href="{{ url('/genuine_high_refunds_tax_estimate') }}">
                                    View Details
                                    <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0 col-lg-3 mt-md-4 mt-lg-0" data-aos="fade-up">
                    <div class="card h-100">
                        <img class="card-img-top" src="images/services/Numorous tax cosultations any time  in the year.jpg"
                            alt="Card image cap" />
                        <div class="card-body">
                            <!-- <h5 class="card-title">Card title</h5> -->
                            <p class="card-text text-center text-dark font-weight-bold">
                                Numerous tax cosultations any time in the year
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="text-center font-weight-bold">
                                <a class="mt-sm-5 mt-4" style="font-size: 14px" href="{{ url('/numerous_tax_consultations') }}">
                                    View Details
                                    <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0 col-lg-3 mt-md-4" data-aos="fade-up">
                    <div class="card h-100">
                        <img class="card-img-top" src="images/services/Guarentted Accurate Tax Returns.jpg"
                            alt="Card image cap" />
                        <div class="card-body" style="flex: 1">
                            <!-- <h5 class="card-title">Card title</h5> -->
                            <p class="card-text text-center text-dark font-weight-bold">
                                Guarateed accurate tax returns
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="text-center font-weight-bold">
                                <a class="mt-sm-5 mt-4" style="font-size: 14px"
                                    href="{{ url('/guaranteed_accurate_tax_returns') }}">
                                    View Details
                                    <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0 col-lg-3 mt-md-4" data-aos="fade-up">
                    <div class="card h-100">
                        <img class="card-img-top" src="images/services/Tax Planning for current year and next year.jpg"
                            alt="Card image cap" />
                        <div class="card-body">
                            <!-- <h5 class="card-title">Card title</h5> -->
                            <p class="card-text text-center text-dark font-weight-bold">
                                Tax Planning for current year and next year
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="text-center font-weight-bold">
                                <a class="mt-sm-5 mt-4" style="font-size: 14px"
                                    href="{{ url('/tax_planing_for_current_year_and_next_year') }}">
                                    View Details
                                    <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0 col-lg-3 mt-md-4" data-aos="fade-up">
                    <div class="card h-100">
                        <img class="card-img-top" src="images/services/Evaluation-of previous-year-tax.jpg"
                            alt="Card image cap" />
                        <div class="card-body">
                            <!-- <h5 class="card-title">Card title</h5> -->
                            <p class="card-text text-center text-dark font-weight-bold">
                                Evaluation of previous year’ s tax returns
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="text-center font-weight-bold">
                                <a class="mt-sm-5 mt-4" style="font-size: 14px" href="{{ url('/evalution_of_tax_returns') }}">
                                    View Details
                                    <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0 col-lg-3 mt-md-4" data-aos="fade-up">
                    <div class="card h-100">
                        <img class="card-img-top" src="images/services/ITIN  Application Guidance and Assistance.jpg"
                            alt="Card image cap" />
                        <div class="card-body">
                            <!-- <h5 class="card-title">Card title</h5> -->
                            <p class="card-text text-center text-dark font-weight-bold">
                                ITIN application guidance and assistance
                            </p>
                            <!-- <div class="text-center font-weight-bold mt-2" style="font-size:14px;"><a href="#" class="card-link text-danger ">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div> -->
                        </div>
                        <div class="card-footer">
                            <div class="text-center font-weight-bold">
                                <a class="mt-sm-5 mt-4" style="font-size: 14px" href="{{ url('/ITIN_application') }}">
                                    View Details
                                    <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4" data-aos="zoom-in">
                <a href="{{ url('/view_all_services') }}" target="_blank"
                    class="px-4 py-2 d-inline-block rounded text-light font-weight-bold"
                    style="background-color: #0aa3d8">View All Services</a>
            </div>
        </div>
    </div>
    <!-- //end services section -->
    <!-- comparision table -->
    <section class="py-5">
        <div class="container pt-0">
            <div class="title-heading-w3 text-center mx-auto mb-2 pb-2">
                <h4 class="title-main font-weight-bold" data-aos="fade-up">
                    Compare our dedicated $3000 worth tax services with any tax company
                    of this world table, its unmatchable
                </h4>
                <p class="mt-2 pt-md-2" data-aos="zoom-in">
                    Grand Tax Filers is the first and the only online tax consulting
                    firm of the entire tax industry, to provide thousands of dollars’
                    worth tax services Free of Cost. After receiving our tax estimates
                    and unlimited consultations you will only chose to file through us.
                </p>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Below mentioned description of $3000 worth tax services for
                                    free
                                </th>
                                <th>Grand Tax Filers</th>
                                <th>Local CPA's</th>
                                <th>Tax Preparers</th>
                                <th>Online Tax Filing Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Perfect tax planning stratagies for high tax refunds</td>
                                <td>FOR FREE</td>
                                <td>At High Cost</td>
                                <td>Incompetent for absolute tax planning</td>
                                <td>Incapable</td>
                            </tr>
                            <tr>
                                <td>
                                    Free filing Of federal tax returns below $26,000 income
                                </td>
                                <td>FOR FREE</td>
                                <td>At Cost</td>
                                <td>At Cost</td>
                                <td>Free with minuted tax benefits</td>
                            </tr>
                            <tr>
                                <td>Genuine high refunds tax estimate on a tax return</td>
                                <td>FOR FREE</td>
                                <td>Final figure without a tax return</td>
                                <td>Error filled tax return</td>
                                <td>final figure without a tax return</td>
                            </tr>
                            <tr>
                                <td>Numerous tax consultations any time in the year</td>
                                <td>FOR FREE</td>
                                <td>At Cost</td>
                                <td>At Cost</td>
                                <td>At Cost</td>
                            </tr>
                            <tr>
                                <td>Guarateed accurate tax returns</td>
                                <td>FOR FREE</td>
                                <td>No guarantee</td>
                                <td>No guarantee</td>
                                <td>No guarantee</td>
                            </tr>
                            <tr>
                                <td>Tax planning for current year and next year</td>
                                <td>FOR FREE</td>
                                <td>At cost of filing</td>
                                <td>Incompetent for planning</td>
                                <td>Not available</td>
                            </tr>
                            <tr>
                                <td>Evaluation of previous years tax returns</td>
                                <td>FOR FREE</td>
                                <td>At cost of filing</td>
                                <td>At cost of filing</td>
                                <td>Not available</td>
                            </tr>
                            <tr>
                                <td>ITIN application guidance and assistance</td>
                                <td>FOR FREE</td>
                                <td>At Cost</td>
                                <td>At Cost</td>
                                <td>Not Available</td>
                            </tr>
                            <tr>
                                <td>FBAR & FATCA guidance and E-filing</td>
                                <td>FOR FREE</td>
                                <td>At Cost</td>
                                <td>At cost of filing</td>
                                <td>Not available</td>
                            </tr>
                            <tr>
                                <td>Seeking extension of time to file tax returns</td>
                                <td>FOR FREE</td>
                                <td>At Cost</td>
                                <td>At cost of filing</td>
                                <td>At cost of filing</td>
                            </tr>
                            <tr>
                                <td>Full support for audits,notices,enquiries</td>
                                <td>FOR FREE</td>
                                <td>At high cost</td>
                                <td>At Cost</td>
                                <td>At Cost</td>
                            </tr>
                            <tr>
                                <td>
                                    Refund support for withheld of FICA taxes(for students) W4
                                    submission with your employer for perfect tax
                                </td>
                                <td>FOR FREE</td>
                                <td>At Cost</td>
                                <td>At Cost</td>
                                <td>Not Available</td>
                            </tr>
                            <tr>
                                <td>Tax with holding</td>
                                <td>FOR FREE</td>
                                <td>At Cost</td>
                                <td>At Cost</td>
                                <td>Not Available</td>
                            </tr>
                            <tr>
                                <td>Customer support 24/7 365 days</td>
                                <td>FOR FREE</td>
                                <td>Services with limited hours</td>
                                <td>Limited availability</td>
                                <td>Limited availability</td>
                            </tr>
                            <tr>
                                <td>Guaranteed genuine high tax refunds</td>
                                <td>Guaranteed</td>
                                <td>Limited Guarantee</td>
                                <td>No Guarantee</td>
                                <td>No Guarantee</td>
                            </tr>
                            <tr>
                                <td>Confidentiality & Data Security</td>
                                <td>Guaranteed</td>
                                <td>No Guarantee</td>
                                <td>No Guarantee</td>
                                <td>No Guarantee</td>
                            </tr>
                            <tr>
                                <td>Tax return storage facility</td>
                                <td>FOR FREE</td>
                                <td>May be free with conditions</td>
                                <td>May be free with conditions</td>
                                <td>May be free with conditions</td>
                            </tr>
                            <tr>
                                <td>Data protection on tax return</td>
                                <td>Guaranteed</td>
                                <td>No Guarantee</td>
                                <td>No Guarantee</td>
                                <td>No Guarantee</td>
                            </tr>
                            <tr>
                                <td>Full satisfaction Guarantee</td>
                                <td>Guaranteed</td>
                                <td>No Guarantee</td>
                                <td>No Guarantee</td>
                                <td>No Guarantee</td>
                            </tr>
                            <tr>
                                <td>Accuracy Guarantee</td>
                                <td>Guaranteed</td>
                                <td>No Guarantee</td>
                                <td>No Guarantee</td>
                                <td>No Guarantee</td>
                            </tr>
                            <tr>
                                <td>
                                    Audit support for new clients on previously filed tax
                                    returns
                                </td>
                                <td>Guaranteed</td>
                                <td>Not Available</td>
                                <td>Not Available</td>
                                <td>Not Available</td>
                            </tr>
                            <tr>
                                <td>Privacy Guarantee</td>
                                <td>Guaranteed</td>
                                <td>No Guarantee</td>
                                <td>No Guarantee</td>
                                <td>No Guarantee</td>
                            </tr>
                            <tr>
                                <td>Business incorportation consultation</td>
                                <td>FOR FREE</td>
                                <td>At Cost</td>
                                <td>At Cost</td>
                                <td>At Cost</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- end comparision table -->
    <!-- our clients -->
    <section class="our_clients py-5">
        <div class="container py-5">
            <div class="title-heading-w3 text-center mx-auto mb-2 pb-2">
                <h2 class="title-main text-light" data-aos="fade-up">
                    Our <span>Partners</span>
                </h2>
                <p class="mt-4 pt-md-2 text-justify text-md-center text-light" data-aos="zoom-in">
                    Our partners are confident that we are the best online tax filing
                    services in USA. The fact our partners vouch that we are the best
                    online tax filing In USA is evident best tax filers. They all agree
                    that we are the best professional tax preparer in USA. They count on
                    us to be the best free federal and state tax filing in USA. Grand
                    Tax Filers in USA is the best choice of our partners
                </p>
            </div>
            <div class="slider">
                <ul>
                    <li>
                        <img src="images/clients/ADP.jpg" width="150px" alt="" />
                    </li>
                    <li>
                        <img src="images/clients/AT-&-T.jpg" width="150px" alt="" />
                    </li>
                    <li>
                        <img src="images/clients/Caterpillar.jpg" width="150px" alt="" />
                    </li>
                    <li>
                        <img src="images/clients/Charter-Spectrum.jpg" width="150px" alt="" />
                    </li>
                    <li>
                        <img src="images/clients/Cisco.jpg" width="150px" alt="" />
                    </li>
                    <li>
                        <img src="images/clients/Denver.jpg" width="150px" alt="" />
                    </li>
                    <li>
                        <img src="images/clients/Disney.jpg" width="150px" alt="" />
                    </li>
                    <li>
                        <img src="images/clients/HP.jpg" width="150px" alt="" />
                    </li>
                    <li>
                        <img src="images/clients/IBM.jpg" width="150px" alt="" />
                    </li>
                    <li>
                        <img src="images/clients/Intel.jpg" width="150px" alt="" />
                    </li>
                    <li>
                        <img src="images/clients/John-Deere.jpg" width="150px" alt="" />
                    </li>
                    <li>
                        <img src="images/clients/Microsoft.jpg" width="150px" alt="" />
                    </li>
                    <li>
                        <img src="images/clients/Nike.jpg" width="150px" alt="" />
                    </li>
                    <li>
                        <img src="images/clients/Novartis.jpg" width="150px" alt="" />
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--  end clients -->
    <!-- start testimonials -->
    <div class="w3l-grids-block-5 w3l-grids-block-6 py-5">
        <div class="container">
            <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                <h2 class="title-main font-weight-bold" data-aos="fade-up">
                    Our Satisfied <span>Clients</span>
                </h2>
                <p class="mt-4 pt-md-2 text-justify text-md-center" data-aos="zoom-in">
                    Our list of satisfied client is long and ever growing. They know
                    without doubt that we are the best tax software USA and also the
                    best professional tax preparer in USA. Grand tax filing is USA is
                    undoubtedly the best and most impressive service for e file of tax
                    in USA region.
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/testimonials/img-1.jpg" />
                            </div>
                            <div class="testimonial-profile">
                                <h3 class="title">Amanda Smith</h3>
                                <span class="post">Software Professional</span>
                            </div>
                            <p class="description">
                                It was a breeze interacting with Grand tax filers,
                                extraordinary service, quick filing,and assured high refund
                                returns. We are incredibly happy with Grand tax filers and the
                                comprehensive services they provide at the lowest cost.I would
                                recommend GT filers to anyone who needs to file a tax return.
                            </p>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/testimonials/img-2.jpg" />
                            </div>
                            <div class="testimonial-profile">
                                <h3 class="title">Kristina Thomas</h3>
                                <span class="post">Cisco</span>
                            </div>
                            <p class="description">
                                I was struggling to file my IRS tax returns when I came across
                                Grand tax filers, their interface is simple and easy to use. I
                                was able to file my return very quickly and effectively on
                                their site. I experienced amazing customer support from their
                                support team who solved all my problems very quickly. I would
                                highly recommend Grand tax filers any time.
                            </p>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/testimonials/img-3.jpg" />
                            </div>
                            <div class="testimonial-profile">
                                <h3 class="title">Girish Rao</h3>
                                <span class="post">Construction Engineer</span>
                            </div>
                            <p class="description">
                                I deals with a huge amount of money daily for my business, I
                                am so glad I found Grand tax filers, be it my W2 or tax refund
                                filing. I was amazed by how quickly they processed my refunds
                                and gave me the highest refund over other competing sites
                                which I tried in the past. Grand Tax Filers is the way to go.
                            </p>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/testimonials/img-4.jpg" />
                            </div>
                            <div class="testimonial-profile">
                                <h3 class="title">Sridhar Reddy</h3>
                                <span class="post">web Developer</span>
                            </div>
                            <p class="description">
                                As a web developer, I need to devote a lot of time to my
                                clients, and tax filing should be the least of my worries in
                                my busy schedule. I have entrusted my entire tax filing
                                responsibilities to Grand Tax Filers, they are extremely
                                professional and responsive and give me the maximum refunds
                                for my taxes deducted.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //end testimonials -->
    <!-- footer -->
		<footer class="w3l-footer-22 position-relative mt-5 pt-5">
			<div class="footer-sub">
				<div class="container">
					<div class="text-txt">
						<div class="right-side" data-aos="fade-up">
							<!-- form section -->
							<div class="row align-items-center w3l-forms-9">
								<div class="main-midd col-lg-6">
									<h4 class="title-head mb-lg-2">Subscribe us to join our community </h4>
									<p>Newsletter</p>
								</div>
								<div class="main-midd-2 col-lg-6 mt-md-0 mt-4">
									<form action="#url" method="GET" class="rightside-form">
										<input type="email" class="form-control" name="email" placeholder="Enter your email">
										<button class="btn" type="submit">Subscribe</button>
									</form>
								</div>
							</div>
							<!-- //form section -->
						</div>
						<div class="row sub-columns">
							<div class="col-xl-2 col-sm-6 sub-two-right" data-aos="fade-up">
								<h6>Quick links</h6>
								<ul>
									<li>
										<a href="index.html">
											<span class="fa fa-angle-double-right mr-2"></span>Home </a>
									</li>
									<li>
										<a href="refund-status.html">
											<span class="fa fa-angle-double-right mr-2"></span>Refund Status </a>
									</li>
									<li>
										<a href="indian-taxfiling.html">
											<span class="fa fa-angle-double-right mr-2"></span>Indian Tax Filing </a>
									</li>
									<li>
										<a href="view-all-services.html">
											<span class="fa fa-angle-double-right mr-2"></span>Services </a>
									</li>
								</ul>
							</div>
							<div class="col-xl-3 col-sm-6 sub-two-right pl-lg-5 mt-sm-0 mt-4" data-aos="fade-up">
								<h6>Help & Support</h6>
								<ul>
									<li>
										<a href="contact.html">
											<span class="fa fa-angle-double-right mr-2"></span>Contact </a>
									</li>
									<li>
										<a href="about-us.html">
											<span class="fa fa-angle-double-right mr-2"></span>About </a>
									</li>
									<li>
										<a href="data-security.html">
											<span class="fa fa-angle-double-right mr-2"></span>Data Security </a>
									</li>
									<li>
										<a href="refered-friend.html">
											<span class="fa fa-angle-double-right mr-2"></span>Refer Your Friend </a>
									</li>
								</ul>
							</div>
							<div class="col-xl-3 col-sm-6 sub-one-left mt-lg-0 mt-sm-5 mt-4" data-aos="fade-up">
								<h6>Contact </h6>
								<div class="column2">
									<div class="href1">
										<span class="fa fa-envelope" aria-hidden="true"></span>
										<a href="mailto:contact@grandtaxfilers.com">contact@grandtaxfilers.com</a>
									</div>
									<div class="href2">
										<span class="fa fa-phone" aria-hidden="true"></span>
										<a href="tel:3159616434">+1-3159616434</a>
									</div>
									<div>
										<p class="contact-para">
											<span class="fa fa-map-marker" aria-hidden="true"></span>Edmond, OK 73003 USA
										</p>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-6 sub-one-left ab-right-cont pl-lg-5 mt-lg-0 mt-sm-5 mt-4" data-aos="fade-up">
								<h6>About </h6>
								<p class="text-justify">Grand tax filers existence is the one and only reason for the tax payers to get back their unnecessary taxes which are being paid to the IRS and State Income Tax Departments, due to inefficient online tax tools, inexperienced or substandard tax consultants.</p>
								<div class="columns-2">
									<ul class="social">
										<li>
											<a href="https://www.facebook.com/GrandTaxFilers" target="_blank">
												<span class="fa fa-facebook" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="https://www.linkedin.com/company/grand-tax-filers/" target="_blank">
												<span class="fa fa-linkedin" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="https://www.instagram.com/grandtaxfilers/" target="_blank">
												<span class="fa fa-instagram" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="https://twitter.com/GrandTaxFilers" target="_blank">
												<span class="fa fa-twitter" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- copyright -->
			<div class="copyright-footer text-center">
				<div class="container">
					<div class="columns text-light font-weight-bold">
						<p>@2022 Grandtax Filers. All Rights Reserved. </p>
					</div>
				</div>
			</div>
			<!-- //copyright -->
		</footer>
		<!-- //footer -->
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/bootstrap.bundle.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/aos.js"></script>
		<script src="js/scripts.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#testimonial-slider").owlCarousel({
					items: 2,
					itemsDesktop: [1000, 2],
					itemsDesktopSmall: [979, 2],
					itemsTablet: [768, 1],
					pagination: false,
					navigation: true,
					navigationText: ["", ""],
					autoPlay: true
				});
			});
		</script>
		<script>
			function aos_init() {
				AOS.init({
					duration: 1000,
					once: true
				});
			}
			$(window).on('load', function() {
				aos_init();
			});
		</script>
		<!-- table -->
		<script>
			$(document).ready(function() {
				$('tbody').scroll(function(e) {
					$('thead').css("left", -$("tbody").scrollLeft()); //fix the thead relative to the body scrolling
					$('thead th:nth-child(1)').css("left", $("tbody").scrollLeft()); //fix the first cell of the header
					$('tbody td:nth-child(1)').css("left", $("tbody").scrollLeft()); //fix the first column of tdbody
				});
			});
		</script>
		<script>
			$(window).on('load', function() {
				setTimeout(function() {
					$('#myModal').modal('show')
				}, 5000)
			});
		</script>
        <script>
            $('#forgetpassword').modal('show')
        </script>
@endsection
