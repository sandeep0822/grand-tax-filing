@extends('main.includes.header')
@section('keywords')
<title></title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="robots" content="index,follow">
<link rel="canonical" href=" ">
@endsection
@section('content')
<!-- inner banner -->
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">Services</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Services</li>
            </ul>
        </div>
    </section>
</div>
<!-- //inner banner -->
  



 <!-- services section -->

 <section class="w3l-about-3  py-5">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 pr-lg-5">
                <h1 class="font-weight-bold services_h1 text-center text-md-left">Audit Supports for IRS</h1>
               
                <ul class="list-about-2 mt-sm-4 mt-3 text-md-left">
                    <li class="py-1 text-justify"><i class="fa fa-check-square-o mr-2" aria-hidden="true"></i> We offer your audit support for IRS. It is very essential to remain compliant and ensure that your taxes are audited and certified by the IRS.  We offer comprehensive audit support for IRS filing. In certain instances the IRS may pick up returns where they have doubt on the filing and get it verified and ensure they are compliant with all the records as mentioned.  </li>
                    <li class="py-2 text-justify"><i class="fa fa-check-square-o mr-2" aria-hidden="true"></i> Our team of dedicated expert’s works with you to get you tax audits aligned and streamlined so that any deficiency in the filing will be corrected by us and you comply with state and federal laws. Though the chance of having a tax audit is quite remote compared to the number of returns filed. </li>
                    <li class="py-1 text-justify" ><i class="fa fa-check-square-o mr-2" aria-hidden="true"></i> This gives the business tax filer and added advantage, but we ensure that all the aspects are covered when they file the taxes and require audit support from us.</li>
                </ul>
            </div>
            <div class="col-lg-6 about-2-secs-right mt-lg-0 mt-4">
                <img src="images/services/audit-support-for-IRS.jpg" alt="" class="img-fluid img-responsive" />
            </div>
        </div>
    </div>
</section>

<!-- //end services section -->
<!-- refer friend -->
<section class="w3l-about-2 pb-5" data-aos="fade-up">
    <div class="container" style="background-color: #09347a;">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 p-0">
                <img src="images/refer-friend.jpg" alt="" class="w-100" />
            </div>
            <div class="col-lg-6 py-5 py-lg-0">
                <h3 class="title-style mb-2 text-center text-light">
                   Refer Your Friend</h3>
                <p class="text-justify text-light px-md-5">You don’t just get great benefits from Grand tax filers alone, just refer your friends today to grandtaxfilers.com and win a host of prizes, including Apple iPad, Iphone MacBook and $1000 in hard cash. Just click on the refer button below to send an email now.</p>
                <div class="mt-4 text-center">
                    <a class="btn btn-style btn-style-s mt-3" href="refered-friend.html">Refer Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
  <!-- end refer friend -->
   <!-- start prizes -->
   <section class="pb-5" >
    <div class="container">
      <div class="title-heading-w3 text-center mx-auto mb-4 pb-sm-4">
          <h2 class="title-main" data-aos="zoom-in">Our Referral<span> Prizes</span></h2>
          <p class="mt-4 pt-md-2 font-weight-bold text-dark" data-aos="fade-up">Refer a friend and get a chance to win  IPAD, IPHONE, MAC BOOK and cash $1000
          </p>
              
      </div>
           <div class="row">
                 <div class="col-md-6 col-xl-3" data-aos="fade-up">
                  <div class="card">
                      <img class="card-img-top" src="images/gifts/cash.jpg" alt="Card image cap">
                      <div class="card-body" style="background-color:#e9e8e4">
                        <h5 class="card-title text-center font-weight-bold">Chance to win $1000</h5>
                        <p class="card-text font-weight-bold text-center">for 2 Referrals</p>
                        
                      </div>
                    </div>
                 </div>
                 <div class="col-md-6 col-xl-3 mt-3 mt-md-0" data-aos="fade-up" >
                    <div class="card">
                      <img class="card-img-top" src="images/gifts/IPAD.jpg" alt="Card image cap">
                      <div class="card-body" style="background-color:#e9e8e4">
                          <h5 class="card-title text-center font-weight-bold">Chance to win IPad</h5>
                          <p class="card-text font-weight-bold text-center">for 2-5 Referrals</p>
                        
                      </div>
                    </div>
                 </div>

                 <div class="col-md-6 col-xl-3 mt-3 mt-md-4 mt-xl-0" data-aos="fade-up">
                  <div class="card" >
                    <img class="card-img-top" src="images/gifts/Iphone.jpg" alt="Card image cap">
                    <div class="card-body" style="background-color:#e9e8e4">
                      <h5 class="card-title text-center font-weight-bold">Chance to win IPhone</h5>
                      <p class="card-text font-weight-bold text-center">for 5-10 Referrals</p>
                      
                    </div>
                  </div>
               </div>

               <div class="col-md-6 col-xl-3 mt-3 mt-md-4 mt-xl-0" data-aos="fade-up">
                  <div class="card" >
                    <img class="card-img-top" src="images/gifts/Macbook.jpg" alt="Card image cap">
                    <div class="card-body" style="background-color:#e9e8e4">
                      <h5 class="card-title text-center font-weight-bold">Chance to win Mac Book</h5>
                      <p class="card-text font-weight-bold text-center">for 10+ Referrals</p>
                      
                    </div>
                  </div>
               </div>
              </div>
             
          
    </div>
</section>
<!-- end prizes -->
@endsection