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
                <h1 class="font-weight-bold services_h1 text-center text-md-left">State Audit</h1>
               
                <ul class="list-about-2 mt-sm-4 mt-3 text-md-left">
                    <li class="py-1 text-justify"><i class="fa fa-check-square-o mr-2" aria-hidden="true"></i> We also perform state audit for federal and state governments. The state auditor ensures that the taxpayer funds are correctly spent by the respective departments. They follow the set standards as defined by the federal government and for any particular type of audits which need to occur to check the expenditure and income of a particular state or head of department. </li>
                    <li class="py-2 text-justify"><i class="fa fa-check-square-o mr-2" aria-hidden="true"></i> We will be able assist the departments which need audit support which is effective and streamlined as per federal requirements. 
                        We have a strong team of auditors who works with our clients and give them a right solution for their problem of state audit related filing which is extremely complicated and requires sufficient expertise.</li>
                    <li class="py-1 text-justify" ><i class="fa fa-check-square-o mr-2" aria-hidden="true"></i> We are ever vigilant to carefully look into the various aspects of the expenditure which are incurred under various department heads.</li>
                </ul>
            </div>
            <div class="col-lg-6 about-2-secs-right mt-lg-0 mt-4">
                <img src="images/services/state-audit.jpg" alt="" class="img-fluid img-responsive" />
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