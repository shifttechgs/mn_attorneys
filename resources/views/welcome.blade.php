@extends("layouts.master")
@section("content")


 <div class="th-hero-wrapper hero-1" id="home">
        <div class="shape-mockup hero-img-shape-1">
            <div class="logo-icon-wrap">
                <div class="logo-icon"><img src="assets/img/icon/logo-icon.png" alt="img"></div>
                <div class="logo-icon-wrap__text"><span class="logo-animation">Best Lawyer For You</span></div>
            </div>
        </div>
     <div class="th-hero-bg"
          style="border-radius: 10px; margin: 10px 10px 0 10px; overflow: hidden;"
          data-bg-src="assets/img/bg/mnia_bg.png">
{{--         <img src="assets/img/bg/hero1-overlay.png" alt="Hero overlay" >--}}
     </div>
        <div class="hero-1-scroll-icon-bg-shape scroll-down">
            <div class="hero-1-scroll-icon-wrap"><a href="#about-sec">
                    <div class="shape-thumb">
                        <div class="icon-btn"><i class="fa-sharp fa-solid fa-arrow-down"></i></div>
                        <img src="assets/img/shape/hero-1-scroll-icon.png" alt="Image"></div>
                </a></div>
        </div><br><br>
        <div class="swiper th-slider" id="heroSlidee1" data-slider-options='{"effect":"fade", "autoHeight": "true"}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner hero-style1">
                        <div class="container">
                            <div class="row gy-4 align-items-center">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="hero-text" data-ani="slideinup"
                                          data-ani-delay="0.2s">Your Guardian in Law</span>
                                    <div data-ani="slideinup" data-ani-delay="0.4s">
                                        <h4 class="hero-title">Justice for Your Road Accident Claim. </h4>
{{--                                        <p class="hero-text">Majibana Nhuku Incorporated Attorneys is your dedicated legal partner — delivering expert representation, clear guidance, and peace of mind when it matters most.</p>--}}
                                        <p class="hero-text">At Majibana Nhuku Incorporated Attorneys, we stand by your side to ensure you get the compensation you deserve — with compassion, clarity, and commitment.</p>

                                    </div>

                                    <div class="btn-group justify-content-center"><a href="" class="th-btn">Request Case Evaluation <i
                                                class="fa-regular fa-arrow-right-long"></i></a>
                                        <a href="about.html"
                                           class="th-btn style3">Explore Practice Areas <i
                                                class="fa-regular fa-arrow-right-long"></i></a></div><br><br>
                                    <div class="client-group-wrap"><span class="thumb"><img src="assets/img/icon/hero-1-title-1.png"
                                                                                            alt="img"></span>
                                        <div class="client-group-wrap__content"><span
                                                class="client-group-wrap__box-title">We have to <span><span
                                                        class="counter-number">2</span>k+</span> Happy Client</span>
                                            <div class="client-group-wrap__box-review"><i class="fa-sharp fa-solid fa-star"></i> <i
                                                    class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i
                                                    class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i>
                                                <p>4.5/5(<span class="counter-number">35</span>k<span class="plus">+</span> Reviews)</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>




                                <div class="col-xl-5 col-lg-5">
                                    <div class="hero-img">
                                        <div class="img-main" data-ani="slideinrighthero" data-ani-delay="0.8s"><img
                                                src="assets/img/hero/hero-2-right-main.jpg" alt="Image"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="swiper-slide">--}}
{{--                    <div class="hero-inner hero-style1">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row gy-4 align-items-center">--}}
{{--                                <div class="col-xl-7 col-lg-7">--}}
{{--                                    <span class="sub-title" data-ani="slideinup"--}}
{{--                                                                     data-ani-delay="0.2s">Your Guardian in Law</span>--}}
{{--                                    <div data-ani="slideinup" data-ani-delay="0.4s"><h1 class="hero-title">Experienced--}}
{{--                                            Attorneys, Trusted</h1>--}}

{{--                                    </div>--}}
{{--                                    <div class="btn-group justify-content-center" data-ani="slideinup"--}}
{{--                                         data-ani-delay="0.6s"><a href="contact.html" class="th-btn">Contact us <i--}}
{{--                                                class="fa-regular fa-arrow-right-long"></i></a></div>--}}
{{--                                    <div class="hero-title">Results <span class="client-group-wrap"><span class="thumb"><img--}}
{{--                                                    src="assets/img/icon/hero-1-title-1.png" alt="img"> </span><span--}}
{{--                                                class="client-group-wrap__content"><span--}}
{{--                                                    class="client-group-wrap__box-title">We have to <span><span--}}
{{--                                                            class="counter-number">2</span>k+</span> Happy Client </span><span--}}
{{--                                                    class="client-group-wrap__box-review"><i--}}
{{--                                                        class="fa-sharp fa-solid fa-star"></i> <i--}}
{{--                                                        class="fa-sharp fa-solid fa-star"></i> <i--}}
{{--                                                        class="fa-sharp fa-solid fa-star"></i> <i--}}
{{--                                                        class="fa-sharp fa-solid fa-star"></i> <i--}}
{{--                                                        class="fa-sharp fa-solid fa-star"></i> <span>4.5/5(<span--}}
{{--                                                            class="counter-number">35</span>k<span class="plus">+</span> Reviews)</span></span></span></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-5 col-lg-5">--}}
{{--                                    <div class="hero-img">--}}
{{--                                        <div class="img-main" data-ani="slideinrighthero" data-ani-delay="0.8s"><img--}}
{{--                                                src="assets/img/hero/hero_1_2.png" alt="Image"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="swiper-slide">--}}
{{--                    <div class="hero-inner hero-style1">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row gy-4 align-items-center">--}}
{{--                                <div class="col-xl-7 col-lg-7"><span class="sub-title" data-ani="slideinup"--}}
{{--                                                                     data-ani-delay="0.2s">Secure With Experience</span>--}}
{{--                                    <div data-ani="slideinup" data-ani-delay="0.4s"><h1 class="hero-title">Committed--}}
{{--                                            Lawyers, Proven</h1>--}}
{{--                                        <div class="hero-title">Results <span class="client-group-wrap"><span class="thumb"><img--}}
{{--                                                        src="assets/img/icon/hero-1-title-1.png" alt="img"> </span><span--}}
{{--                                                    class="client-group-wrap__content"><span--}}
{{--                                                        class="client-group-wrap__box-title">We have to <span><span--}}
{{--                                                                class="counter-number">2</span>k+</span> Happy Client </span><span--}}
{{--                                                        class="client-group-wrap__box-review"><i--}}
{{--                                                            class="fa-sharp fa-solid fa-star"></i> <i--}}
{{--                                                            class="fa-sharp fa-solid fa-star"></i> <i--}}
{{--                                                            class="fa-sharp fa-solid fa-star"></i> <i--}}
{{--                                                            class="fa-sharp fa-solid fa-star"></i> <i--}}
{{--                                                            class="fa-sharp fa-solid fa-star"></i> <span>4.5/5(<span--}}
{{--                                                                class="counter-number">35</span>k<span class="plus">+</span> Reviews)</span></span></span></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="btn-group justify-content-center" data-ani="slideinup"--}}
{{--                                         data-ani-delay="0.6s"><a href="contact.html" class="th-btn">Contact us <i--}}
{{--                                                class="fa-regular fa-arrow-right-long"></i></a></div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-5 col-lg-5">--}}
{{--                                    <div class="hero-img">--}}
{{--                                        <div class="img-main" data-ani="slideinrighthero" data-ani-delay="0.8s"><img--}}
{{--                                                src="assets/img/hero/hero_1_3.png" alt="Image"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="slider-pagination"></div>
        </div>
    </div>




 <div class="about-1-wrapper space bg-white" id="about">
{{--     <div class="shape-mockup jump" data-left="0%" data-bottom="0%"><img src="assets/img/shape/about1-left-shape.png"--}}
{{--                                                                         alt="image"></div>--}}
{{--     <div class="shape-mockup jump" data-top="11%" data-right="4%"><img src="assets/img/shape/about1-right-top.png"--}}
{{--                                                                        alt="image"></div>--}}
{{--     <div class="shape-mockup jump-reverse d-none d-md-block" data-right="0" data-bottom="4%"><img--}}
{{--             src="assets/img/shape/about1-right-bottom.png" alt="image"></div>--}}
     <div class="container">
         <div class="row gy-40 gx-60 align-items-center">
             <div class="col-xl-7 mb-xl-0">
                 <div class="img-box1 about-1">
                     <div class="shape-mockup logo-shape">
                         <div class="logo-icon-wrap"><h4 class="logo-icon"><img src="assets/img/icon/logo-icon-white.png"
                                                                                alt="img"></h4>
                             <div class="logo-icon-wrap__text bg-theme2"><span
                                     class="logo-animation">Best Lawyer For You</span></div>
                         </div>
                     </div>
                     <div class="img1"><img class="tilt-active" src="assets/img/about/about-1-left.jpg" alt="Image">
                     </div>
                     <div class="img2">
                         <div class="img2-top"><img class="tilt-active" src="assets/img/about/about-1-right.jpg"
                                                    alt="Image"></div>
                         <div class="img2-bottom"><img class="tilt-active" src="assets/img/about/about-1-right-2.jpg"
                                                       alt="Image"></div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-5">
                 <div class="title-area mb-25"><span class="sub-title before-none">About Us</span>
                     <h4 class="sec-title">Your Trusted RAF Claims & Settlements Partner</h4>
                     <p class="sec-text">We understand that navigating the legal landscape can be daunting, especially when it comes to road accident claims and settlements. That’s why our dedicated team of legal experts is here to guide you through every step of the process, ensuring that you receive the compensation you deserve.</p></div>
                 <div class="checklist style2 mb-40">
                     <ul>
                         <li><i class="fa-sharp fa-solid fa-circle-check"></i> Committed to excellence in legal practice.
                         </li>
                         <li><i class="fa-sharp fa-solid fa-circle-check"></i> Act with honesty and uphold ethical
                             principles.
                         </li>
                         <li><i class="fa-sharp fa-solid fa-circle-check"></i> Road Test Preparation with 98% success
                         </li>
                         <li><i class="fa-sharp fa-solid fa-circle-check"></i> Meeting clients' needs is our priority.
                         </li>
                     </ul>
                 </div>
                 <div><a href="" class="th-btn style4">More About <i
                             class="fa-regular fa-arrow-right-long"></i></a></div>
             </div>
         </div>
     </div>
 </div>


 <div class="award-2-wrapper space bg-smoke2" id="services">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-7">
                 <div class="title-area mb-55 text-center"><span class="sub-title before-none">What We Do</span>
                     <h4 class="sec-title">Law Services We Offer</h4></div>
             </div>
         </div>
         <div class="award-2-wrapper">
             <div class="award-item">
                 <div class="award-bg"><img src="assets/img/award/award-2-1-bg.jpg" alt=""></div>
                 <div class="row gx-0 align-items-center z-index-2">
                     <div class="col-xxl-5 col-xl-4 col-lg-4 order-1 order-lg-0">
                         <div class="award-title-box d-lg-flex align-items-center">
                             <div class="award-icon"><img src="assets/img/icon/award-2-icon-1.svg" alt=""></div>
                             <h3 class="award-title">Road Accident Fund claims</h3></div>
                     </div>
                     <div class="col-xxl-5 col-xl-6 col-lg-6 order-2 order-lg-2"><p class="award-dsc">Road Accident Fund (RAF) claims are an important provision in the Road Accident Fund Act that aims to provide financial assistance to individuals who have been injured or have lost family members due to accidents involving motor vehicles.</p></div>
                     <div class="col-xxl-2 col-xl-2 col-lg-2 order-3 order-lg-2 text-center text-lg-end"><a href="#"
                                                                                                            class="award-btn"><i
                                 class="fa-light fa-arrow-right-long"></i></a></div>
                 </div>
             </div>
             <div class="award-item">
                 <div class="award-bg"><img src="assets/img/award/award-2-1-bg.jpg" alt=""></div>
                 <div class="row gx-0 align-items-center z-index-2">
                     <div class="col-xxl-5 col-xl-4 col-lg-4 order-1 order-lg-0">
                         <div class="award-title-box d-lg-flex align-items-center">
                             <div class="award-icon"><img src="assets/img/icon/award-2-icon-2.svg" alt=""></div>
                             <h3 class="award-title">Property Transfers</h3></div>
                     </div>
                     <div class="col-xxl-5 col-xl-6 col-lg-6 order-2 order-lg-2"><p class="award-dsc">Property transfers, a cornerstone of real estate transactions, encompass the legal process of conveying ownership rights from one party to another. This can occur through various means, including sales, donations, inheritances, and even court orders.</p></div>
                     <div class="col-xxl-2 col-xl-2 col-lg-2 order-3 order-lg-2 text-center text-lg-end"><a href="#"
                                                                                                            class="award-btn"><i
                                 class="fa-light fa-arrow-right-long"></i></a></div>
                 </div>
             </div>
             <div class="award-item">
                 <div class="award-bg"><img src="assets/img/award/award-2-1-bg.jpg" alt=""></div>
                 <div class="row gx-0 align-items-center z-index-2">
                     <div class="col-xxl-5 col-xl-4 col-lg-4 order-1 order-lg-0">
                         <div class="award-title-box d-lg-flex align-items-center">
                             <div class="award-icon"><img src="assets/img/icon/award-2-icon-3.svg" alt=""></div>
                             <h3 class="award-title">Administration of deceased estates</h3></div>
                     </div>
                     <div class="col-xxl-5 col-xl-6 col-lg-6 order-2 order-lg-2"><p class="award-dsc">OThe administration of deceased estates is a complex legal process that involves the collecting, managing and distribution of a deceased person's assets according to their will, or if no will exists, according to the Intestate Succession Act.</p></div>
                     <div class="col-xxl-2 col-xl-2 col-lg-2 order-3 order-lg-2 text-center text-lg-end"><a href="#"
                                                                                                            class="award-btn"><i
                                 class="fa-light fa-arrow-right-long"></i></a></div>
                 </div>
             </div>
             <div class="award-item">
                 <div class="award-bg"><img src="assets/img/award/award-2-1-bg.jpg" alt=""></div>
                 <div class="row gx-0 align-items-center z-index-2">
                     <div class="col-xxl-5 col-xl-4 col-lg-4 order-1 order-lg-0">
                         <div class="award-title-box d-lg-flex align-items-center">
                             <div class="award-icon"><img src="assets/img/icon/award-2-icon-4.svg" alt=""></div>
                             <h3 class="award-title">Medical negligence</h3></div>
                     </div>
                     <div class="col-xxl-5 col-xl-6 col-lg-6 order-2 order-lg-2"><p class="award-dsc">Medical negligence, a serious breach of trust between healthcare providers and patients, occurs when a medical professional fails to provide the standard of care reasonably expected in their field, resulting in harm to the patient.</p></div>
                     <div class="col-xxl-2 col-xl-2 col-lg-2 order-3 order-lg-2 text-center text-lg-end"><a href="#"
                                                                                                            class="award-btn"><i
                                 class="fa-light fa-arrow-right-long"></i></a></div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="overflow-hidden space bg-white gallery-sec-3" id="case-study">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-9 col-lg-10">
                 <div class="title-area text-center"><span class="sub-title justify-content-center">Case Study</span>
                     <h4 class="sec-title">Attoenwy Legal Excellence in Action</h4></div>
             </div>
         </div>
         <div class="row gy-4 masonary-active">
             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 filter-item">
                 <div class="gallery-card">
                     <div class="gallery-img"><img src="assets/img/gallery/gallery-1-1.jpg" alt="gallery image">
                         <div class="gallery-content"><a href="assets/img/gallery/gallery-1-1.jpg"
                                                         class="popup-icon popup-image"><i
                                     class="fa-solid fa-eye"></i></a>
                             <h4 class="box-title"><a href="case-studies-details.html">Initial Consultation</a></h4>
                             <p class="box-text">Family Law</p></div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4 filter-item">
                 <div class="gallery-card">
                     <div class="gallery-img"><img src="assets/img/gallery/gallery-1-2.jpg" alt="gallery image">
                         <div class="gallery-content"><a href="assets/img/gallery/gallery-1-2.jpg"
                                                         class="popup-icon popup-image"><i
                                     class="fa-solid fa-eye"></i></a>
                             <h4 class="box-title"><a href="case-studies-details.html">Legal Advice</a></h4>
                             <p class="box-text">Divorce Cases</p></div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 filter-item">
                 <div class="gallery-card">
                     <div class="gallery-img"><img src="assets/img/gallery/gallery-1-3.jpg" alt="gallery image">
                         <div class="gallery-content"><a href="assets/img/gallery/gallery-1-3.jpg"
                                                         class="popup-icon popup-image"><i
                                     class="fa-solid fa-eye"></i></a>
                             <h4 class="box-title"><a href="case-studies-details.html">Preliminary Meeting</a></h4>
                             <p class="box-text">Custody Disputes</p></div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-2 filter-item">
                 <div class="gallery-card">
                     <div class="gallery-img"><img src="assets/img/gallery/gallery-1-4.jpg" alt="gallery image">
                         <div class="gallery-content"><a href="assets/img/gallery/gallery-1-4.jpg"
                                                         class="popup-icon popup-image"><i
                                     class="fa-solid fa-eye"></i></a>
                             <h4 class="box-title"><a href="case-studies-details.html">Client Consultation</a></h4>
                             <p class="box-text">Parental Rights</p></div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-2 filter-item">
                 <div class="gallery-card">
                     <div class="gallery-img"><img src="assets/img/gallery/gallery-1-5.jpg" alt="gallery image">
                         <div class="gallery-content"><a href="assets/img/gallery/gallery-1-5.jpg"
                                                         class="popup-icon popup-image"><i
                                     class="fa-solid fa-eye"></i></a>
                             <h4 class="box-title"><a href="case-studies-details.html">Advice Session</a></h4>
                             <p class="box-text">Child Support</p></div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 filter-item">
                 <div class="gallery-card">
                     <div class="gallery-img"><img src="assets/img/gallery/gallery-1-6.jpg" alt="gallery image">
                         <div class="gallery-content"><a href="assets/img/gallery/gallery-1-6.jpg"
                                                         class="popup-icon popup-image"><i
                                     class="fa-solid fa-eye"></i></a>
                             <h4 class="box-title"><a href="case-studies-details.html">First Meeting</a></h4>
                             <p class="box-text">Paternity Cases</p></div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4 filter-item">
                 <div class="gallery-card">
                     <div class="gallery-img"><img src="assets/img/gallery/gallery-1-7.jpg" alt="gallery image">
                         <div class="gallery-content"><a href="assets/img/gallery/gallery-1-7.jpg"
                                                         class="popup-icon popup-image"><i
                                     class="fa-solid fa-eye"></i></a>
                             <h4 class="box-title"><a href="case-studies-details.html">Introductory Discussion</a></h4>
                             <p class="box-text">Civil Unions</p></div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 filter-item">
                 <div class="gallery-card">
                     <div class="gallery-img"><img src="assets/img/gallery/gallery-1-8.jpg" alt="gallery image">
                         <div class="gallery-content"><a href="assets/img/gallery/gallery-1-8.jpg"
                                                         class="popup-icon popup-image"><i
                                     class="fa-solid fa-eye"></i></a>
                             <h4 class="box-title"><a href="case-studies-details.html">Case Consultation</a></h4>
                             <p class="box-text">Marriage Contracts</p></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="brand-area-1" data-bg-src="assets/img/bg/brand-bg-11.png">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="swiper th-slider" id="brand-slider-1"
                      data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"6"}}}'>
                     <div class="swiper-wrapper">
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="about.html"><img src="assets/img/brand/brand_1_1.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="about.html"><img src="assets/img/brand/brand_1_2.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="about.html"><img src="assets/img/brand/brand_1_3.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="about.html"><img src="assets/img/brand/brand_1_4.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="about.html"><img src="assets/img/brand/brand_1_5.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="about.html"><img src="assets/img/brand/brand_1_1.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="about.html"><img src="assets/img/brand/brand_1_2.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="about.html"><img src="assets/img/brand/brand_1_3.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="about.html"><img src="assets/img/brand/brand_1_4.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="about.html"><img src="assets/img/brand/brand_1_5.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="choose-area-2 bg-white overflow-hidden space" id="why-sec">
     <div class="container">
         <div class="row gy-50 justify-content-center text-center">
             <div class="col-xl-7 col-lg-6">
                 <div class="why-2-right">
                     <div class="title-area"><span class="sub-title after-none">Why Choose Us</span>
                         <h4 class="sec-title">Your Trusted Advocates in the Legal Landscape</h4></div>
                 </div>
             </div>
         </div>
         <div class="choose-2-wrapper">
             <div class="row justify-content-center">
                 <div class="col-xl-4 col-lg-6 col-md-6">
                     <div class="choose-item">
                         <div class="box-img mb-25"><img src="assets/img/why/why-4-1.jpg" alt=""></div>
                         <div class="choose-content">
                             <div class="choose-shape"><img src="assets/img/shape/choose-2-1.svg" alt=""></div>
                             <h3 class="box-title mb-25">Successful Case</h3>
                             <p class="box-text">Our team of experienced attorneys has a diverse range of expertise,
                                 covering a wide spectrum of legal areas. We specialize</p></div>
                     </div>
                 </div>
                 <div class="col-xl-4 col-lg-6 col-md-6 order-md-2 order-lg-1">
                     <div class="choose-item choose-center-item">
                         <div class="box-img">
                             <div class="media-body"><h4 class="box-number mb-0"><span class="counter-number text-white">5000</span>
                                     <span class="plus-simple text-white">+</span></h4>
                                 <p class="box-text text-white">Trusted Clients</p></div>
                             <img src="assets/img/why/why-4-3.jpg" alt="">
                             <div class="choose-content">
                                 <div class="choose-shape"><img src="assets/img/shape/choose-2-1.svg" alt=""></div>
                                 <h3 class="box-title text-white mb-10">Successful Case</h3>
                                 <p class="box-text text-white">Our team of experienced attorneys has a diverse range of
                                     expertise, covering</p></div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-4 col-lg-6 col-md-6 order-md-1 order-lg-2">
                     <div class="choose-item">
                         <div class="choose-content choose-content-3 mb-25">
                             <div class="choose-shape"><img src="assets/img/shape/choose-2-1.svg" alt=""></div>
                             <h3 class="box-title text-white mb-25">Best Attorneys</h3>
                             <p class="box-text text-white">Our team of experienced attorneys has a diverse range of
                                 expertise, covering a wide spectrum of legal areas. We specialize</p></div>
                         <div class="box-img"><img src="assets/img/why/why-4-2.jpg" alt=""></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="cta-style-4 space cta-overlay" data-bg-src="assets/img/cta/cta-bg-2.jpg">
     <div class="container">
         <div class="row gx-0">
             <div class="col-xxl-6 col-xl-7 col-lg-9">
                 <div class="cta-content z-index-2"><h3 class="cta-title text-white">Our goal is to combat all forms of
                         violence.</h3>
                     <p class="cta-text text-white mb-30">We are committed to excellence and have a deep understanding of
                         the law. Our aim is to provide you with real world solutions.</p>
                     <div class="cta-action"><a href="contact.html" class="th-btn style4">Book A Appointment <i
                                 class="fa-regular fa-arrow-right-long"></i></a></div>
                 </div>
             </div>
         </div>
     </div>
 </div><br>
 <section class="space bg-white" id="process-sec">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-8 about-bottom-box-wrapcol-lg-10 text-center">
                 <div class="title-area process-3-title-box"><span
                         class="sub-title justify-content-center justify-content-xl-start">Schedule Consultation</span>
                     <h4 class="sec-title mb-2">Schedule A Free Consultation</h4>
                     <p class="box-text">Our team of seasoned attorneys is dedicated to carefully listening to your
                         concerns, ensuring a deep understanding of your unique situation.</p></div>
             </div>
         </div>
         <div class="row gy-40 justify-content-center">
             <div class="col-xl-4 col-lg-4 col-md-6">
                 <div class="process-box style-2">
                     <div class="box-icon"><span class="number">01</span> <img src="assets/img/icon/process-2-icon-1.svg"
                                                                               alt="image"></div>
                     <h3 class="box-title">Schedule A Time</h3>
                     <p class="box-text">Choose a convenient date and time that works best for you. Our experienced
                         lawyers are available to discuss.</p></div>
             </div>
             <div class="col-xl-4 col-lg-4 col-md-6">
                 <div class="process-box style-2">
                     <div class="box-icon"><span class="number">02</span> <img src="assets/img/icon/process-2-icon-2.svg"
                                                                               alt="image"></div>
                     <h3 class="box-title">Meet with a Consultation</h3>
                     <p class="box-text">During your consultation, you'll have the opportunity to discuss your case with
                         a qualified attorney.</p></div>
             </div>
             <div class="col-xl-4 col-lg-4 col-md-6">
                 <div class="process-box style-2">
                     <div class="box-icon"><span class="number">03</span> <img src="assets/img/icon/process-2-icon-3.svg"
                                                                               alt="image"></div>
                     <h3 class="box-title">Plan for Success</h3>
                     <p class="box-text">Based on the information gathered during your consultation, we'll develop a
                         tailored legal strategy to help you.</p></div>
             </div>
         </div>
     </div>
 </section>

 <section class="team-area-1 space overflow-hidden" data-overlay="title" data-opacity="8"
          data-bg-src="assets/img/bg/team-1-bg.jpg" id="team-sec">
     <div class="container">
         <div class="row gx-60">
             <div class="col-xl-4">
                 <div class="team-1-sec-title">
                     <div class="title-area"><span class="sub-title">Our Attorneys</span>
                         <h4 class="sec-title text-white">Dedicated Lawyers, Proven Results</h4>
                         <div class="button-wrapper"><a href="team.html" class="th-btn star-btn">More Attorney<i
                                     class="fa-regular fa-arrow-right-long"></i></a></div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-8">
                 <div class="team-1-card-wrap">
                     <div class="swiper has-shadow th-slider" id="teamSlider111"
                          data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"4"}}}'>
                         <div class="swiper-wrapper">
                             <div class="swiper-slide">
                                 <div class="team-card">
                                     <div class="team-img"><img src="assets/img/team/team_1_1.jpg" alt="Team"></div>
                                     <div class="team-content"><h3 class="box-title"><a href="team-details.html">Michel
                                                 phelops</a></h3><span class="team-desig">Chief Justice</span></div>
                                     <div class="team-content-hover-wrap">
                                         <div class="team-content-hover">
                                             <div class="team-img"><img src="assets/img/team/team_1_1.jpg" alt="Team">
                                             </div>
                                             <div class="hover-inner"><h3 class="box-title"><a href="team-details.html">Michel
                                                         phelops</a></h3><span class="team-desig">Chief Justice</span>
                                                 <div class="team-social">
                                                     <div class="th-social"><a target="_blank"
                                                                               href="https://facebook.com/"><i
                                                                 class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                                                                       href="https://twitter.com/"><i
                                                                 class="fab fa-twitter"></i></a> <a target="_blank"
                                                                                                    href="https://instagram.com/"><i
                                                                 class="fab fa-instagram"></i></a> <a target="_blank"
                                                                                                      href="https://linkedin.com/"><i
                                                                 class="fab fa-linkedin-in"></i></a></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="team-card">
                                     <div class="team-img"><img src="assets/img/team/team_1_2.jpg" alt="Team"></div>
                                     <div class="team-content"><h3 class="box-title"><a href="team-details.html">Sarah
                                                 Rahman</a></h3><span class="team-desig">Attorney</span></div>
                                     <div class="team-content-hover-wrap">
                                         <div class="team-content-hover">
                                             <div class="team-img"><img src="assets/img/team/team_1_2.jpg" alt="Team">
                                             </div>
                                             <div class="hover-inner"><h3 class="box-title"><a href="team-details.html">Sarah
                                                         Rahman</a></h3><span class="team-desig">Attorney</span>
                                                 <div class="team-social">
                                                     <div class="th-social"><a target="_blank"
                                                                               href="https://facebook.com/"><i
                                                                 class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                                                                       href="https://twitter.com/"><i
                                                                 class="fab fa-twitter"></i></a> <a target="_blank"
                                                                                                    href="https://instagram.com/"><i
                                                                 class="fab fa-instagram"></i></a> <a target="_blank"
                                                                                                      href="https://linkedin.com/"><i
                                                                 class="fab fa-linkedin-in"></i></a></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="team-card">
                                     <div class="team-img"><img src="assets/img/team/team_1_3.jpg" alt="Team"></div>
                                     <div class="team-content"><h3 class="box-title"><a href="team-details.html">Smith
                                                 Miller</a></h3><span class="team-desig">Attorney</span></div>
                                     <div class="team-content-hover-wrap">
                                         <div class="team-content-hover">
                                             <div class="team-img"><img src="assets/img/team/team_1_3.jpg" alt="Team">
                                             </div>
                                             <div class="hover-inner"><h3 class="box-title"><a href="team-details.html">Smith
                                                         Miller</a></h3><span class="team-desig">Attorney</span>
                                                 <div class="team-social">
                                                     <div class="th-social"><a target="_blank"
                                                                               href="https://facebook.com/"><i
                                                                 class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                                                                       href="https://twitter.com/"><i
                                                                 class="fab fa-twitter"></i></a> <a target="_blank"
                                                                                                    href="https://instagram.com/"><i
                                                                 class="fab fa-instagram"></i></a> <a target="_blank"
                                                                                                      href="https://linkedin.com/"><i
                                                                 class="fab fa-linkedin-in"></i></a></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="team-card">
                                     <div class="team-img"><img src="assets/img/team/team_1_4.jpg" alt="Team"></div>
                                     <div class="team-content"><h3 class="box-title"><a href="team-details.html">Samira
                                                 Dsuza</a></h3><span class="team-desig">Attorney</span></div>
                                     <div class="team-content-hover-wrap">
                                         <div class="team-content-hover">
                                             <div class="team-img"><img src="assets/img/team/team_1_4.jpg" alt="Team">
                                             </div>
                                             <div class="hover-inner"><h3 class="box-title"><a href="team-details.html">Samira
                                                         Dsuza</a></h3><span class="team-desig">Attorney</span>
                                                 <div class="team-social">
                                                     <div class="th-social"><a target="_blank"
                                                                               href="https://facebook.com/"><i
                                                                 class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                                                                       href="https://twitter.com/"><i
                                                                 class="fab fa-twitter"></i></a> <a target="_blank"
                                                                                                    href="https://instagram.com/"><i
                                                                 class="fab fa-instagram"></i></a> <a target="_blank"
                                                                                                      href="https://linkedin.com/"><i
                                                                 class="fab fa-linkedin-in"></i></a></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="team-card">
                                     <div class="team-img"><img src="assets/img/team/team_1_5.jpg" alt="Team"></div>
                                     <div class="team-content"><h3 class="box-title"><a href="team-details.html">Poppy
                                                 Linda</a></h3><span class="team-desig">Attorney</span></div>
                                     <div class="team-content-hover-wrap">
                                         <div class="team-content-hover">
                                             <div class="team-img"><img src="assets/img/team/team_1_5.jpg" alt="Team">
                                             </div>
                                             <div class="hover-inner"><h3 class="box-title"><a href="team-details.html">Poppy
                                                         Linda</a></h3><span class="team-desig">Attorney</span>
                                                 <div class="team-social">
                                                     <div class="th-social"><a target="_blank"
                                                                               href="https://facebook.com/"><i
                                                                 class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                                                                       href="https://twitter.com/"><i
                                                                 class="fab fa-twitter"></i></a> <a target="_blank"
                                                                                                    href="https://instagram.com/"><i
                                                                 class="fab fa-instagram"></i></a> <a target="_blank"
                                                                                                      href="https://linkedin.com/"><i
                                                                 class="fab fa-linkedin-in"></i></a></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="team-card">
                                     <div class="team-img"><img src="assets/img/team/team_1_6.jpg" alt="Team"></div>
                                     <div class="team-content"><h3 class="box-title"><a href="team-details.html">Sarah
                                                 Rahman</a></h3><span class="team-desig">Attorney</span></div>
                                     <div class="team-content-hover-wrap">
                                         <div class="team-content-hover">
                                             <div class="team-img"><img src="assets/img/team/team_1_6.jpg" alt="Team">
                                             </div>
                                             <div class="hover-inner"><h3 class="box-title"><a href="team-details.html">Sarah
                                                         Rahman</a></h3><span class="team-desig">Attorney</span>
                                                 <div class="team-social">
                                                     <div class="th-social"><a target="_blank"
                                                                               href="https://facebook.com/"><i
                                                                 class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                                                                       href="https://twitter.com/"><i
                                                                 class="fab fa-twitter"></i></a> <a target="_blank"
                                                                                                    href="https://instagram.com/"><i
                                                                 class="fab fa-instagram"></i></a> <a target="_blank"
                                                                                                      href="https://linkedin.com/"><i
                                                                 class="fab fa-linkedin-in"></i></a></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="team-card">
                                     <div class="team-img"><img src="assets/img/team/team_1_7.jpg" alt="Team"></div>
                                     <div class="team-content"><h3 class="box-title"><a href="team-details.html">Smith
                                                 Miller</a></h3><span class="team-desig">Attorney</span></div>
                                     <div class="team-content-hover-wrap">
                                         <div class="team-content-hover">
                                             <div class="team-img"><img src="assets/img/team/team_1_7.jpg" alt="Team">
                                             </div>
                                             <div class="hover-inner"><h3 class="box-title"><a href="team-details.html">Smith
                                                         Miller</a></h3><span class="team-desig">Attorney</span>
                                                 <div class="team-social">
                                                     <div class="th-social"><a target="_blank"
                                                                               href="https://facebook.com/"><i
                                                                 class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                                                                       href="https://twitter.com/"><i
                                                                 class="fab fa-twitter"></i></a> <a target="_blank"
                                                                                                    href="https://instagram.com/"><i
                                                                 class="fab fa-instagram"></i></a> <a target="_blank"
                                                                                                      href="https://linkedin.com/"><i
                                                                 class="fab fa-linkedin-in"></i></a></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="team-card">
                                     <div class="team-img"><img src="assets/img/team/team_1_8.jpg" alt="Team"></div>
                                     <div class="team-content"><h3 class="box-title"><a href="team-details.html">Samira
                                                 Dsuza</a></h3><span class="team-desig">Attorney</span></div>
                                     <div class="team-content-hover-wrap">
                                         <div class="team-content-hover">
                                             <div class="team-img"><img src="assets/img/team/team_1_8.jpg" alt="Team">
                                             </div>
                                             <div class="hover-inner"><h3 class="box-title"><a href="team-details.html">Samira
                                                         Dsuza</a></h3><span class="team-desig">Attorney</span>
                                                 <div class="team-social">
                                                     <div class="th-social"><a target="_blank"
                                                                               href="https://facebook.com/"><i
                                                                 class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                                                                       href="https://twitter.com/"><i
                                                                 class="fab fa-twitter"></i></a> <a target="_blank"
                                                                                                    href="https://instagram.com/"><i
                                                                 class="fab fa-instagram"></i></a> <a target="_blank"
                                                                                                      href="https://linkedin.com/"><i
                                                                 class="fab fa-linkedin-in"></i></a></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <button data-slider-prev="#teamSlider111" class="slider-arrow slider-prev"><i
                             class="far fa-arrow-left"></i></button>
                     <button data-slider-next="#teamSlider111" class="slider-arrow slider-next"><i
                             class="far fa-arrow-right"></i></button>
                 </div>
             </div>
         </div>
     </div>
 </section>


 <div class="award-1-wrapper space" id="about-sec">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-6">
                 <div class="title-area mb-55 text-center"><span class="sub-title before-none">Awards WIn</span>
                     <h4 class="sec-title">Awards & Excellence</h4></div>
             </div>
         </div>
         <div class="award-item-wrapper">
             <div class="award-item gr-bg5">
                 <div class="row align-items-center">
                     <div class="col-xl-4 col-lg-3 order-1 order-lg-0"><h4 class="award-title">Recognized for Legal
                             Excellence</h4></div>
                     <div class="col-xl-5 col-lg-6 order-2 order-lg-2"><p class="award-dsc">There are numerous variations
                             of the Lorem Ipsum text, though most some form of alteration.</p></div>
                     <div class="col-xl-3 col-lg-3 order-0 order-lg-2">
                         <div class="award-brand-box d-flex align-items-center justify-content-lg-end">
                             <div class="award-brand-thumb"><img src="assets/img/award/award-1-1.svg" alt=""></div>
                             <h3 class="award-year">2025</h3></div>
                     </div>
                 </div>
             </div>
             <div class="award-item gr-bg5">
                 <div class="row align-items-center">
                     <div class="col-xl-4 col-lg-3 order-1 order-lg-0"><h4 class="award-title">Honored For Legal
                             Achievement</h4></div>
                     <div class="col-xl-5 col-lg-6 order-2 order-lg-2"><p class="award-dsc">There are numerous variations
                             of the Lorem Ipsum text, though most some form of alteration.</p></div>
                     <div class="col-xl-3 col-lg-3 order-0 order-lg-2">
                         <div class="award-brand-box d-flex align-items-center justify-content-lg-end">
                             <div class="award-brand-thumb"><img src="assets/img/award/award-1-2.svg" alt=""></div>
                             <h3 class="award-year">2024</h3></div>
                     </div>
                 </div>
             </div>
             <div class="award-item gr-bg5">
                 <div class="row align-items-center">
                     <div class="col-xl-4 col-lg-3 order-1 order-lg-0"><h4 class="award-title">Emerging Legal<br>Star
                         </h4></div>
                     <div class="col-xl-5 col-lg-6 order-2 order-lg-2"><p class="award-dsc">There are numerous variations
                             of the Lorem Ipsum text, though most some form of alteration.</p></div>
                     <div class="col-xl-3 col-lg-3 order-0 order-lg-2">
                         <div class="award-brand-box d-flex align-items-center justify-content-lg-end">
                             <div class="award-brand-thumb"><img src="assets/img/award/award-1-3.svg" alt=""></div>
                             <h3 class="award-year">2023</h3></div>
                     </div>
                 </div>
             </div>
             <div class="award-item gr-bg5">
                 <div class="row align-items-center">
                     <div class="col-xl-4 col-lg-3 order-1 order-lg-0"><h4 class="award-title">Award-Winning Legal
                             Excellence</h4></div>
                     <div class="col-xl-5 col-lg-6 order-2 order-lg-2"><p class="award-dsc">There are numerous variations
                             of the Lorem Ipsum text, though most some form of alteration.</p></div>
                     <div class="col-xl-3 col-lg-3 order-0 order-lg-2">
                         <div class="award-brand-box d-flex align-items-center justify-content-lg-end">
                             <div class="award-brand-thumb"><img src="assets/img/award/award-1-4.svg" alt=""></div>
                             <h3 class="award-year">2022</h3></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <section class="testi-card-area-1 overflow-hidden space" id="testi-sec" data-bg-src="assets/img/bg/testi-bg-1.png">
     <div class="container">
         <div class="row justify-content-lg-between justify-content-center align-items-end">
             <div class="col-lg">
                 <div class="title-area text-center text-lg-start"><span class="sub-title before-none">Client Testimonials</span>
                     <h4 class="sec-title">What Our Clients Say</h4></div>
             </div>
             <div class="col-lg-auto">
                 <div class="sec-btn">
                     <div class="icon-box">
                         <button data-slider-prev="#testiSlide11" class="slider-arrow default"><i
                                 class="far fa-arrow-left"></i></button>
                         <button data-slider-next="#testiSlide11" class="slider-arrow default"><i
                                 class="far fa-arrow-right"></i></button>
                     </div>
                 </div>
             </div>
         </div>
         <div class="testi-card-slide">
             <div class="swiper has-shadow th-slider" id="testiSlide11"
                  data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                 <div class="swiper-wrapper">
                     <div class="swiper-slide">
                         <div class="testi-block" dir="ltr">
                             <div class="testi-icon-1-top"><img src="assets/img/icon/testi-icon-1-top.svg" alt="image">
                             </div>
                             <div class="testi-block-top">
                                 <div class="box-img"><img src="assets/img/testimonial/testi_1_1.jpg" alt="Avater"></div>
                                 <div class="content"><h3 class="box-title">Monica D’suza</h3>
                                     <p class="box-desig">Ui/Ux Designer</p>
                                     <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i></div>
                                 </div>
                             </div>
                             <p class="box-text">"I was struggling with family law for months before I found abc. They
                                 not only provided me with the solution I needed, but they also educated me on how to
                                 prevent the issue from happening again. Their team is incredibly knowledgeable and
                                 patient, and they always go the extra mile to ensure customer satisfaction. I am so
                                 grateful for their help and would recommend them to anyone."</p></div>
                     </div>
                     <div class="swiper-slide">
                         <div class="testi-block" dir="ltr">
                             <div class="testi-icon-1-top"><img src="assets/img/icon/testi-icon-1-top.svg" alt="image">
                             </div>
                             <div class="testi-block-top">
                                 <div class="box-img"><img src="assets/img/testimonial/testi_1_2.jpg" alt="Avater"></div>
                                 <div class="content"><h3 class="box-title">Teresa Hamilton</h3>
                                     <p class="box-desig">Ui/Ux Designer</p>
                                     <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i></div>
                                 </div>
                             </div>
                             <p class="box-text">"I had been facing challenges with family law for months until I
                                 discovered abc. They not only resolved my issues effectively but also guided me on how
                                 to avoid similar problems in the future. Their team is highly skilled, patient, and
                                 always prioritizes customer satisfaction. I truly appreciate their support okay this is
                                 right for it and would highly recommend them to others."</p></div>
                     </div>
                     <div class="swiper-slide">
                         <div class="testi-block" dir="ltr">
                             <div class="testi-icon-1-top"><img src="assets/img/icon/testi-icon-1-top.svg" alt="image">
                             </div>
                             <div class="testi-block-top">
                                 <div class="box-img"><img src="assets/img/testimonial/testi_1_3.jpg" alt="Avater"></div>
                                 <div class="content"><h3 class="box-title">Monks Millar</h3>
                                     <p class="box-desig">Ui/Ux Designer</p>
                                     <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i></div>
                                 </div>
                             </div>
                             <p class="box-text">"I was struggling with family law for months before I found abc. They
                                 not only provided me with the solution I needed, but they also educated me on how to
                                 prevent the issue from happening again. Their team is incredibly knowledgeable and
                                 patient, and they always go the extra mile to ensure customer satisfaction. I am so
                                 grateful for their help and would recommend them to anyone."</p></div>
                     </div>
                     <div class="swiper-slide">
                         <div class="testi-block" dir="ltr">
                             <div class="testi-icon-1-top"><img src="assets/img/icon/testi-icon-1-top.svg" alt="image">
                             </div>
                             <div class="testi-block-top">
                                 <div class="box-img"><img src="assets/img/testimonial/testi_1_4.jpg" alt="Avater"></div>
                                 <div class="content"><h3 class="box-title">William Hazelip</h3>
                                     <p class="box-desig">Ui/Ux Designer</p>
                                     <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i></div>
                                 </div>
                             </div>
                             <p class="box-text">"Navigating family law issues was overwhelming for months until I came
                                 across abc. They didn’t just solve how to prevent the issue from happening again my
                                 problem—they empowered me with knowledge to manage such situations better. Their
                                 expertise and dedication to client satisfaction left okay no problem a lasting
                                 impression. I’m forever grateful and highly endorse their services."</p></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <div class="cta-sec-1 space cta-overlay" data-bg-src="assets/img/cta/cta-bg-1.jpg" id="contact-sec">
     <div class="container">
         <div class="row gx-0">
             <div class="col-xxl-7 col-xl-8 col-lg-9">
                 <div class="cta-content"><h3 class="cta-title text-white">Request A Free Consultation</h3>
                     <p class="sec-text text-white mb-30">We are committed to excellence and have a deep understanding of
                         the law. Our aim is to provide you with real world solutions.</p>
                     <div class="cta-form-wrapper">
                         <form action="#" class="newsletter-form">
                             <div class="form-group"><input class="form-control" type="email"
                                                            placeholder="Enter Your Email address" required=""></div>
                             <button type="submit" class="icon-btn"><i class="fa-light fa-arrow-right-long"></i></button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="space overflow-hidden" id="faq-sec">
     <div class="container">
         <div class="row gy-60 gx-60 justify-content-center">
             <div class="col-lg-6">
                 <div class="title-area"><span class="sub-title before-none">Frequently Asked Questions</span>
                     <h4 class="sec-title">Have Any Questions?</h4></div>
                 <div class="accordion" id="faqAccordion">
                     <div class="accordion-card">
                         <div class="accordion-header" id="collapse-item-1">
                             <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">What is
                                 the initial consultation process like?
                             </button>
                         </div>
                         <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1"
                              data-bs-parent="#faqAccordion">
                             <div class="accordion-body"><p class="faq-text">Our initial consultation is typically a
                                     free, 30-minute meeting where we can discuss your legal needs and determine if we are
                                     the right fit for your case. You can schedule a consultation.</p></div>
                         </div>
                     </div>
                     <div class="accordion-card">
                         <div class="accordion-header" id="collapse-item-2">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Do you
                                 handle cases in other cities or states?
                             </button>
                         </div>
                         <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2"
                              data-bs-parent="#faqAccordion">
                             <div class="accordion-body"><p class="faq-text">Our initial consultation is typically a
                                     free, 30-minute meeting where we can discuss your legal needs and determine if we are
                                     the right fit for your case. You can schedule a consultation.</p></div>
                         </div>
                     </div>
                     <div class="accordion-card">
                         <div class="accordion-header" id="collapse-item-3">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">How do
                                 you calculate your fees?
                             </button>
                         </div>
                         <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="collapse-item-3"
                              data-bs-parent="#faqAccordion">
                             <div class="accordion-body"><p class="faq-text">Our initial consultation is typically a
                                     free, 30-minute meeting where we can discuss your legal needs and determine if we are
                                     the right fit for your case. You can schedule a consultation.</p></div>
                         </div>
                     </div>
                     <div class="accordion-card">
                         <div class="accordion-header" id="collapse-item-4">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">Can I
                                 speak to a lawyer immediately?
                             </button>
                         </div>
                         <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="collapse-item-4"
                              data-bs-parent="#faqAccordion">
                             <div class="accordion-body"><p class="faq-text">Our initial consultation is typically a
                                     free, 30-minute meeting where we can discuss your legal needs and determine if we are
                                     the right fit for your case. You can schedule a consultation.</p></div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="faq-img-box2">
                     <div class="img"><img src="assets/img/faq/faq-2.jpg" alt=""></div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <section class=" overflow-hidden" id="contact">
     <div class="shape-mockup jump d-none d-xl-block" data-top="15%" data-right="3%"><img
             src="assets/img/shape/contact-1-top.png" alt="shape img"></div>
     <div class="shape-mockup jump-reverse d-none d-xl-block" data-bottom="17%" data-left="3%"><img
             src="assets/img/shape/about1-right-top.png" alt="shape img"></div>
     <div class="container">
         <div class="contact-from-1-wrap">
             <div class="row gx-60 gy-40">
                 <div class="col-xl-6">
                     <div class="contact-form">
                         <div class="title-area mb-35"><span class="sub-title justify-content-center text-white">Have Any Questions?</span>
                             <h4 class="sec-title text-white">Get in Touch with Us</h4></div>
                         <form action="https://html.themeholy.com/ensaf/demo/mail.php" method="POST"
                               class="quote-form ajax-contact">
                             <div class="row">
                                 <div class="form-group col-md-12"><input type="text" class="form-control" name="name"
                                                                          id="name" placeholder="Name"> <i
                                         class="fas fa-user"></i></div>
                                 <div class="form-group col-md-6"><input type="email" class="form-control" name="email"
                                                                         id="email" placeholder="Email"> <i
                                         class="fas fa-envelope"></i></div>
                                 <div class="form-group col-md-6"><input type="tel" class="form-control" name="number"
                                                                         id="number" placeholder="Number"> <i
                                         class="fas fa-phone"></i></div>
                                 <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                                                                          class="form-control"
                                                                          placeholder="Your Message"></textarea> <i
                                         class="fas fa-pencil"></i></div>
                                 <div class="form-btn col-12 mt-2">
                                     <button class="th-btn bg-theme w-100">Send Now <i
                                             class="fa-regular fa-arrow-right-long"></i></button>
                                 </div>
                             </div>
                             <p class="form-messages mb-0 mt-3"></p></form>
                     </div>
                 </div>
                 <div class="col-xl-6">
                     <div class="contact-icon-box-wrap">
                         <div class="info-box">
                             <div class="info-box_icon"><i class="fa-regular fa-location-dot"></i></div>
                             <div class="info-contnt"><h4 class="footer-info-title">Location</h4>
                                 <p class="info-box_text">371 7th Ave, New York, NY 10001</p></div>
                         </div>
                         <div class="info-box">
                             <div class="info-box_icon"><i class="fa-regular fa-phone"></i></div>
                             <div class="info-contnt"><h4 class="footer-info-title">Phone</h4>
                                 <p class="info-box_text"><a href="tel:+15264855467" class="info-box_link">+
                                         152-6485-5467</a> <a href="tel:+15264855467" class="info-box_link">+
                                         152-6485-5467</a></p></div>
                         </div>
                         <div class="info-box">
                             <div class="info-box_icon"><i class="fa-regular fa-envelope"></i></div>
                             <div class="info-contnt"><h4 class="footer-info-title">Email</h4>
                                 <p class="info-box_text"><a href="mailto:info@kleanix.com" class="info-box_link">info@ensaf.com</a>
                                     <a href="mailto:info@kleanix.com" class="info-box_link">info@ensaf.com</a></p></div>
                         </div>
                     </div>
                     <div class="contact-img"><img src="assets/img/contact/contact_1.jpg" alt="vector"></div>
                     <div class="shape-mockup contact_1-man"><img src="assets/img/contact/contact_1-man.png"
                                                                  alt="vector"></div>
                 </div>
             </div>
         </div>
     </div>
 </section>


@endsection
