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
                                        <p class="hero-text" style="color: #ffff">At Majibana Nhuku Incorporated Attorneys, we stand by your side to ensure you get the compensation you deserve — with compassion, clarity, and commitment.</p>

                                    </div>

                                    <div class="btn-group justify-content-center">
                                        <a href="#contact" class="th-btn">Request Case Evaluation <i
                                                class="fa-regular fa-arrow-right-long"></i></a>
                                        <a href="#services"
                                           class="th-btn style3">Explore Practice Areas <i
                                                class="fa-regular fa-arrow-right-long"></i></a></div><br><br>
                                    <div class="client-group-wrap">
{{--                                        <span class="thumb"><img src="assets/img/icon/hero-1-title-1.png"--}}
{{--                                                                                            alt="img"></span>--}}
                                        <div class="client-group-wrap__content"><span
                                                class="client-group-wrap__box-title">We have to <span><span
                                                        class="counter-number">500</span>+</span> Happy Client</span>
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
                                                src="assets/img/hero/happy_client.jpg" alt="Image"></div>
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
             <div class="col-lg-6">
                 <div class="faq-img-box2">
                     <div class="img"><img src="assets/img/mnia/DSC05971.jpg" alt=""></div>
                 </div>
             </div>
             <div class="col-xl-6">
                 <div class="title-area mb-25"><span class="sub-title before-none">About Us</span>
                     <h4 class="sec-title">Your Trusted RAF Claims Attorneys</h4>
                     <p class="sec-text">We understand that navigating the legal landscape can be daunting, especially when it comes to road accident fund claims. That’s why our dedicated team of legal experts is here to guide you through every step of the process, ensuring that you receive the compensation you deserve.</p></div>
                 <div class="checklist style2 mb-40">
                     <ul>
                         <li><i class="fa-sharp fa-solid fa-circle-check"></i> Committed to excellence in legal practice.
                         </li>
                         <li><i class="fa-sharp fa-solid fa-circle-check"></i> Act with honesty and uphold ethical
                             principles.
                         </li>
{{--                         <li><i class="fa-sharp fa-solid fa-circle-check"></i> Road Test Preparation with 98% success--}}
{{--                         </li>--}}
                         <li><i class="fa-sharp fa-solid fa-circle-check"></i> Meeting clients' needs is our priority.
                         </li>
                     </ul>
                 </div>
                 <div><a href="" class="th-btn style4">Request Case Evaluation<i
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
                     <div class="col-xxl-2 col-xl-2 col-lg-2 order-3 order-lg-2 text-center text-lg-end"><a href="#contact"
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
                     <div class="col-xxl-2 col-xl-2 col-lg-2 order-3 order-lg-2 text-center text-lg-end"><a href="#contact"
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
                     <div class="col-xxl-5 col-xl-6 col-lg-6 order-2 order-lg-2"><p class="award-dsc">The administration of deceased estates is a complex legal process that involves the collecting, managing and distribution of a deceased person's assets according to their will, or if no will exists, according to the Intestate Succession Act.</p></div>
                     <div class="col-xxl-2 col-xl-2 col-lg-2 order-3 order-lg-2 text-center text-lg-end"><a href="#contact"
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
                     <div class="col-xxl-2 col-xl-2 col-lg-2 order-3 order-lg-2 text-center text-lg-end"><a href="#contact"
                                                                                                            class="award-btn"><i
                                 class="fa-light fa-arrow-right-long"></i></a></div>
                 </div>
             </div>
         </div>
     </div>
 </div>
{{-- <div class="overflow-hidden space bg-white gallery-sec-3" id="case-study">--}}
{{--     <div class="container">--}}
{{--         <div class="row justify-content-center">--}}
{{--             <div class="col-xl-9 col-lg-10">--}}
{{--                 <div class="title-area text-center"><span class="sub-title justify-content-center">Case Study</span>--}}
{{--                     <h4 class="sec-title">Strategic. Skilled. Committed to Justice</h4></div>--}}
{{--             </div>--}}
{{--         </div>--}}
{{--         <div class="row gy-4 masonary-active">--}}
{{--             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 filter-item">--}}
{{--                 <div class="gallery-card">--}}
{{--                     <div class="gallery-img"><img src="assets/img/mnia/DSC05930.jpg" alt="gallery image">--}}
{{--                         <div class="gallery-content"><a href="assets/img/mnia/DSC05930.jpg"--}}
{{--                                                         class="popup-icon popup-image"><i--}}
{{--                                     class="fa-solid fa-eye"></i></a>--}}
{{--                             <h4 class="box-title"><a href="case-studies-details.html">Initial Consultation</a></h4>--}}
{{--                             <p class="box-text">Family Law</p></div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4 filter-item">--}}
{{--                 <div class="gallery-card">--}}
{{--                     <div class="gallery-img"><img src="assets/img/mnia/DSC05883.jpg" alt="gallery image">--}}
{{--                         <div class="gallery-content"><a href="assets/mnia/DSC05883.jpg"--}}
{{--                                                         class="popup-icon popup-image"><i--}}
{{--                                     class="fa-solid fa-eye"></i></a>--}}
{{--                             <h4 class="box-title"><a href="case-studies-details.html">Legal Advice</a></h4>--}}
{{--                             <p class="box-text">Divorce Cases</p></div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 filter-item">--}}
{{--                 <div class="gallery-card">--}}
{{--                     <div class="gallery-img"><img src="assets/img/mnia/DSC05937.jpg" alt="gallery image">--}}
{{--                         <div class="gallery-content"><a href="assets/mnia/DSC05937.jpg"--}}
{{--                                                         class="popup-icon popup-image"><i--}}
{{--                                     class="fa-solid fa-eye"></i></a>--}}
{{--                             <h4 class="box-title"><a href="case-studies-details.html">Preliminary Meeting</a></h4>--}}
{{--                             <p class="box-text">Custody Disputes</p></div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-2 filter-item">--}}
{{--                 <div class="gallery-card">--}}
{{--                     <div class="gallery-img"><img src="assets/img/mnia/DSC05959.jpg" alt="gallery image">--}}
{{--                         <div class="gallery-content"><a href="assets/img//mnia/DSC05959.jpg"--}}
{{--                                                         class="popup-icon popup-image"><i--}}
{{--                                     class="fa-solid fa-eye"></i></a>--}}
{{--                             <h4 class="box-title"><a href="case-studies-details.html">Client Consultation</a></h4>--}}
{{--                             <p class="box-text">Parental Rights</p></div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-2 filter-item">--}}
{{--                 <div class="gallery-card">--}}
{{--                     <div class="gallery-img"><img src="assets/img/gallery/gallery-1-5.jpg" alt="gallery image">--}}
{{--                         <div class="gallery-content"><a href="assets/img/gallery/gallery-1-5.jpg"--}}
{{--                                                         class="popup-icon popup-image"><i--}}
{{--                                     class="fa-solid fa-eye"></i></a>--}}
{{--                             <h4 class="box-title"><a href="case-studies-details.html">Advice Session</a></h4>--}}
{{--                             <p class="box-text">Child Support</p></div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 filter-item">--}}
{{--                 <div class="gallery-card">--}}
{{--                     <div class="gallery-img"><img src="assets/img/gallery/gallery-1-6.jpg" alt="gallery image">--}}
{{--                         <div class="gallery-content"><a href="assets/img/gallery/gallery-1-6.jpg"--}}
{{--                                                         class="popup-icon popup-image"><i--}}
{{--                                     class="fa-solid fa-eye"></i></a>--}}
{{--                             <h4 class="box-title"><a href="case-studies-details.html">First Meeting</a></h4>--}}
{{--                             <p class="box-text">Paternity Cases</p></div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4 filter-item">--}}
{{--                 <div class="gallery-card">--}}
{{--                     <div class="gallery-img"><img src="assets/img/gallery/gallery-1-7.jpg" alt="gallery image">--}}
{{--                         <div class="gallery-content"><a href="assets/img/gallery/gallery-1-7.jpg"--}}
{{--                                                         class="popup-icon popup-image"><i--}}
{{--                                     class="fa-solid fa-eye"></i></a>--}}
{{--                             <h4 class="box-title"><a href="case-studies-details.html">Introductory Discussion</a></h4>--}}
{{--                             <p class="box-text">Civil Unions</p></div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 filter-item">--}}
{{--                 <div class="gallery-card">--}}
{{--                     <div class="gallery-img"><img src="assets/img/gallery/gallery-1-8.jpg" alt="gallery image">--}}
{{--                         <div class="gallery-content"><a href="assets/img/gallery/gallery-1-8.jpg"--}}
{{--                                                         class="popup-icon popup-image"><i--}}
{{--                                     class="fa-solid fa-eye"></i></a>--}}
{{--                             <h4 class="box-title"><a href="case-studies-details.html">Case Consultation</a></h4>--}}
{{--                             <p class="box-text">Marriage Contracts</p></div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--         </div>--}}
{{--     </div>--}}
{{-- </div>--}}
 <div class="brand-area-1" data-bg-src="assets/img/bg/brand-bg-11.png">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="swiper th-slider" id="brand-slider-1"
                      data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"6"}}}'>
                     <div class="swiper-wrapper">
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="#contact"><img src="assets/img/brand/brand_1_1.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="#contact"><img src="assets/img/brand/brand_1_2.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="#contact"><img src="assets/img/brand/brand_1_3.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="#contact"><img src="assets/img/brand/brand_1_4.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="#contact"><img src="assets/img/brand/brand_1_5.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="#contact"><img src="assets/img/brand/brand_1_1.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="#contact"><img src="assets/img/brand/brand_1_2.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="#contact"><img src="assets/img/brand/brand_1_3.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="#contact"><img src="assets/img/brand/brand_1_4.svg"
                                                                              alt="Brand Logo"></a></div>
                         </div>
                         <div class="swiper-slide">
                             <div class="brand-box"><a href="#contact"><img src="assets/img/brand/brand_1_5.svg"
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
                         <div class="box-img mb-25"><img src="assets/img/mnia/DSC05930.jpg" alt=""></div>
                         <div class="choose-content">
                             <div class="choose-shape"><img src="assets/img/shape/choose-2-1.svg" alt=""></div>
                             <h3 class="box-title mb-25">Proven Track Record</h3>
                             <p class="box-text">Our team has a strong history of successfully securing compensation for clients across a wide range of personal injury and civil litigation matters.</p></div>
                     </div>
                 </div>
                 <div class="col-xl-4 col-lg-6 col-md-6 order-md-2 order-lg-1">
                     <div class="choose-item choose-center-item">
                         <div class="box-img">
                             <div class="media-body"><h4 class="box-number mb-0"><span class="counter-number text-white">500</span>
                                     <span class="plus-simple text-white">+</span></h4>
                                 <p class="box-text text-white">Trusted Clients</p></div>
                             <img src="assets/img/why/why-4-3.jpg" alt="">
                             <div class="choose-content">
                                 <div class="choose-shape"><img src="assets/img/shape/choose-2-1.svg" alt=""></div>
                                 <h3 class="box-title text-white mb-10"> Client-Centered Approach</h3>
                                 <p class="box-text text-white">We listen first. Every case is personal, and we treat it with the respect, care, and urgency it deserves. You're never just a file number — you're a priority.</p></div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-4 col-lg-6 col-md-6 order-md-1 order-lg-2">
                     <div class="choose-item">
                         <div class="choose-content choose-content-3 mb-25">
                             <div class="choose-shape"><img src="assets/img/shape/choose-2-1.svg" alt=""></div>
                             <h3 class="box-title text-white mb-25">Strategic Expertise</h3>
                             <p class="box-text text-white">Combining legal knowledge with real-world experience, we approach each case with strategic precision to ensure the best possible outcome.</p></div>
                         <div class="box-img"><img src="assets/img/mnia/DSC05883.jpg" alt=""></div>
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
                 <div class="cta-content z-index-2"><h3 class="cta-title text-white">Your Trusted RAF Claims & Settlements Partner.</h3>
                     <p class="cta-text text-white mb-30">we understand that navigating the legal landscape can be daunting, especially when it comes to road accident claims and settlements.</p>
                     <div class="cta-action"><a href="#contact" class="th-btn style4">Request Case Evaluation<i
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
                     <div class="title-area"><span class="sub-title" style="color: white">Our Attorneys</span>
                         <h4 class="sec-title text-white">Dedicated Lawyers, Proven Results</h4>
                         <div class="button-wrapper"><a href="#contact" class="th-btn star-btn">Request Case Evaluation<i
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
{{--                                     <div class="team-img"><img src="assets/img/mnia/DSC05959.jpg" alt="Team"></div>--}}
{{--                                     <div class="team-content"><h3 class="box-title"><a href="team-details.html">Michel--}}
{{--                                                 phelops</a></h3><span class="team-desig">Chief Justice</span></div>--}}
                                     <div class="team-img">
                                         <div class="team-content-hover">
                                             <div class="team-img"><img src="assets/img//mnia/DSC05959.jpg" alt="Team">
                                             </div>
                                             <div class="hover-inner">
{{--                                                 <h3 class="box-title"><a href="team-details.html">Michel--}}
{{--                                                         phelops</a></h3><span class="team-desig">Chief Justice</span>--}}
{{--                                                 <div class="team-social">--}}
{{--                                                     <div class="th-social"><a target="_blank"--}}
{{--                                                                               href="https://facebook.com/"><i--}}
{{--                                                                 class="fab fa-facebook-f"></i></a> <a target="_blank"--}}
{{--                                                                                                       href="https://twitter.com/"><i--}}
{{--                                                                 class="fab fa-twitter"></i></a> <a target="_blank"--}}
{{--                                                                                                    href="https://instagram.com/"><i--}}
{{--                                                                 class="fab fa-instagram"></i></a> <a target="_blank"--}}
{{--                                                                                                      href="https://linkedin.com/"><i--}}
{{--                                                                 class="fab fa-linkedin-in"></i></a></div>--}}
{{--                                                 </div>--}}
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="team-card">
{{--                                     <div class="team-img"><img src="assets/img/mnia/DSC05937.jpg" alt="Team"></div>--}}
{{--                                     <div class="team-content"><h3 class="box-title"><a href="team-details.html">Sarah--}}
{{--                                                 Rahman</a></h3><span class="team-desig">Attorney</span></div>--}}
                                     <div class="team-img">
                                         <div class="team-content-hover">
                                             <div class="team-img"><img src="assets/img/mnia/DSC05937.jpg" alt="Team">
                                             </div>
                                             <div class="hover-inner">
{{--                                                 <h3 class="box-title"><a href="team-details.html">Sarah--}}
{{--                                                         Rahman</a></h3><span class="team-desig">Attorney</span>--}}
{{--                                                 <div class="team-social">--}}
{{--                                                     <div class="th-social"><a target="_blank"--}}
{{--                                                                               href="https://facebook.com/"><i--}}
{{--                                                                 class="fab fa-facebook-f"></i></a> <a target="_blank"--}}
{{--                                                                                                       href="https://twitter.com/"><i--}}
{{--                                                                 class="fab fa-twitter"></i></a> <a target="_blank"--}}
{{--                                                                                                    href="https://instagram.com/"><i--}}
{{--                                                                 class="fab fa-instagram"></i></a> <a target="_blank"--}}
{{--                                                                                                      href="https://linkedin.com/"><i--}}
{{--                                                                 class="fab fa-linkedin-in"></i></a></div>--}}
{{--                                                 </div>--}}
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="team-card">
{{--                                     <div class="team-img"><img src="assets/img/mnia/DSC05930.jpg" alt="Team"></div>--}}
{{--                                     <div class="team-content"><h3 class="box-title"><a href="team-details.html">Poppy--}}
{{--                                                 Linda</a></h3><span class="team-desig">Attorney</span></div>--}}
                                     <div class="team-img">
                                         <div class="team-content-hover">
                                             <div class="team-img"><img src="assets/img/mnia/DSC05930.jpg" alt="Team">
                                             </div>
                                             <div class="hover-inner">
{{--                                                 <h3 class="box-title"><a href="team-details.html">Poppy--}}
{{--                                                         Linda</a></h3><span class="team-desig">Attorney</span>--}}
{{--                                                 <div class="team-social">--}}
{{--                                                     <div class="th-social"><a target="_blank"--}}
{{--                                                                               href="https://facebook.com/"><i--}}
{{--                                                                 class="fab fa-facebook-f"></i></a> <a target="_blank"--}}
{{--                                                                                                       href="https://twitter.com/"><i--}}
{{--                                                                 class="fab fa-twitter"></i></a> <a target="_blank"--}}
{{--                                                                                                    href="https://instagram.com/"><i--}}
{{--                                                                 class="fab fa-instagram"></i></a> <a target="_blank"--}}
{{--                                                                                                      href="https://linkedin.com/"><i--}}
{{--                                                                 class="fab fa-linkedin-in"></i></a></div>--}}
{{--                                                 </div>--}}
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="team-card">
{{--                                     <div class="team-img"><img src="assets/img/mnia/DSC05953.jpg" alt="Team"></div>--}}
{{--                                     <div class="team-content"><h3 class="box-title"><a href="team-details.html">Smith--}}
{{--                                                 Miller</a></h3><span class="team-desig">Attorney</span></div>--}}
                                     <div class="team-img">
                                         <div class="team-content-hover">
                                             <div class="team-img"><img src="assets/img/mnia/DSC05953.jpg" alt="Team">
                                             </div>
                                             <div class="hover-inner">
{{--                                                 <h3 class="box-title"><a href="team-details.html">Smith--}}
{{--                                                         Miller</a></h3><span class="team-desig">Attorney</span>--}}
{{--                                                 <div class="team-social">--}}
{{--                                                     <div class="th-social"><a target="_blank"--}}
{{--                                                                               href="https://facebook.com/"><i--}}
{{--                                                                 class="fab fa-facebook-f"></i></a> <a target="_blank"--}}
{{--                                                                                                       href="https://twitter.com/"><i--}}
{{--                                                                 class="fab fa-twitter"></i></a> <a target="_blank"--}}
{{--                                                                                                    href="https://instagram.com/"><i--}}
{{--                                                                 class="fab fa-instagram"></i></a> <a target="_blank"--}}
{{--                                                                                                      href="https://linkedin.com/"><i--}}
{{--                                                                 class="fab fa-linkedin-in"></i></a></div>--}}
{{--                                                 </div>--}}
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="team-card">
{{--                                     <div class="team-img"><img src="assets/img/mnia/DSC05921.jpg" alt="Team"></div>--}}
{{--                                     <div class="team-content"><h3 class="box-title"><a href="team-details.html">Samira--}}
{{--                                                 Dsuza</a></h3><span class="team-desig">Attorney</span></div>--}}
                                     <div class="team-img">
                                         <div class="team-content-hover">
                                             <div class="team-img"><img src="assets/img/mnia/DSC05921.jpg" alt="Team">
                                             </div>
                                             <div class="hover-inner"><h3 class="box-title">
{{--                                                     <a href="team-details.html">Samira--}}
{{--                                                         Dsuza</a></h3><span class="team-desig">Attorney</span>--}}
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


{{-- <div class="award-1-wrapper space" id="about-sec">--}}
{{--     <div class="container">--}}
{{--         <div class="row justify-content-center">--}}
{{--             <div class="col-xl-6">--}}
{{--                 <div class="title-area mb-55 text-center"><span class="sub-title before-none">Awards WIn</span>--}}
{{--                     <h4 class="sec-title">Awards & Excellence</h4></div>--}}
{{--             </div>--}}
{{--         </div>--}}
{{--         <div class="award-item-wrapper">--}}
{{--             <div class="award-item gr-bg5">--}}
{{--                 <div class="row align-items-center">--}}
{{--                     <div class="col-xl-4 col-lg-3 order-1 order-lg-0"><h4 class="award-title">Recognized for Legal--}}
{{--                             Excellence</h4></div>--}}
{{--                     <div class="col-xl-5 col-lg-6 order-2 order-lg-2"><p class="award-dsc">There are numerous variations--}}
{{--                             of the Lorem Ipsum text, though most some form of alteration.</p></div>--}}
{{--                     <div class="col-xl-3 col-lg-3 order-0 order-lg-2">--}}
{{--                         <div class="award-brand-box d-flex align-items-center justify-content-lg-end">--}}
{{--                             <div class="award-brand-thumb"><img src="assets/img/award/award-1-1.svg" alt=""></div>--}}
{{--                             <h3 class="award-year">2025</h3></div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="award-item gr-bg5">--}}
{{--                 <div class="row align-items-center">--}}
{{--                     <div class="col-xl-4 col-lg-3 order-1 order-lg-0"><h4 class="award-title">Honored For Legal--}}
{{--                             Achievement</h4></div>--}}
{{--                     <div class="col-xl-5 col-lg-6 order-2 order-lg-2"><p class="award-dsc">There are numerous variations--}}
{{--                             of the Lorem Ipsum text, though most some form of alteration.</p></div>--}}
{{--                     <div class="col-xl-3 col-lg-3 order-0 order-lg-2">--}}
{{--                         <div class="award-brand-box d-flex align-items-center justify-content-lg-end">--}}
{{--                             <div class="award-brand-thumb"><img src="assets/img/award/award-1-2.svg" alt=""></div>--}}
{{--                             <h3 class="award-year">2024</h3></div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="award-item gr-bg5">--}}
{{--                 <div class="row align-items-center">--}}
{{--                     <div class="col-xl-4 col-lg-3 order-1 order-lg-0"><h4 class="award-title">Emerging Legal<br>Star--}}
{{--                         </h4></div>--}}
{{--                     <div class="col-xl-5 col-lg-6 order-2 order-lg-2"><p class="award-dsc">There are numerous variations--}}
{{--                             of the Lorem Ipsum text, though most some form of alteration.</p></div>--}}
{{--                     <div class="col-xl-3 col-lg-3 order-0 order-lg-2">--}}
{{--                         <div class="award-brand-box d-flex align-items-center justify-content-lg-end">--}}
{{--                             <div class="award-brand-thumb"><img src="assets/img/award/award-1-3.svg" alt=""></div>--}}
{{--                             <h3 class="award-year">2023</h3></div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="award-item gr-bg5">--}}
{{--                 <div class="row align-items-center">--}}
{{--                     <div class="col-xl-4 col-lg-3 order-1 order-lg-0"><h4 class="award-title">Award-Winning Legal--}}
{{--                             Excellence</h4></div>--}}
{{--                     <div class="col-xl-5 col-lg-6 order-2 order-lg-2"><p class="award-dsc">There are numerous variations--}}
{{--                             of the Lorem Ipsum text, though most some form of alteration.</p></div>--}}
{{--                     <div class="col-xl-3 col-lg-3 order-0 order-lg-2">--}}
{{--                         <div class="award-brand-box d-flex align-items-center justify-content-lg-end">--}}
{{--                             <div class="award-brand-thumb"><img src="assets/img/award/award-1-4.svg" alt=""></div>--}}
{{--                             <h3 class="award-year">2022</h3></div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--         </div>--}}
{{--     </div>--}}
{{-- </div>--}}
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

                                 <div class="content"><h3 class="box-title">Thandeka M</h3>

                                     <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i></div>
                                 </div>
                             </div>
                             <p class="box-text">"From the very first consultation, I felt heard and supported. The team handled my case with professionalism and genuine care. I received the compensation I deserved — and peace of mind."</p></div>
                     </div>
                     <div class="swiper-slide">
                         <div class="testi-block" dir="ltr">
                             <div class="testi-icon-1-top"><img src="assets/img/icon/testi-icon-1-top.svg" alt="image">
                             </div>
                             <div class="testi-block-top">

                                 <div class="content"><h3 class="box-title">Sizwe M.</h3>

                                     <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i></div>
                                 </div>
                             </div>
                             <p class="box-text">They explained every step clearly and kept me updated throughout the process. I highly recommend them to anyone looking for reliable legal support."</p></div>
                     </div>
                     <div class="swiper-slide">
                         <div class="testi-block" dir="ltr">
                             <div class="testi-icon-1-top"><img src="assets/img/icon/testi-icon-1-top.svg" alt="image">
                             </div>
                             <div class="testi-block-top">

                                 <div class="content"><h3 class="box-title">Lebogang R</h3>

                                     <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i></div>
                                 </div>
                             </div>
                             <p class="box-text">"I was nervous about the legal process, but Majibana Nhuku Attorneys made it smooth and stress-free. Their compassion and expertise truly stood out."</p></div>
                     </div>
                     <div class="swiper-slide">
                         <div class="testi-block" dir="ltr">
                             <div class="testi-icon-1-top"><img src="assets/img/icon/testi-icon-1-top.svg" alt="image">
                             </div>
                             <div class="testi-block-top">

                                 <div class="content"><h3 class="box-title">Nomusa K.</h3>

                                     <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i><i
                                             class="fa-sharp fa-solid fa-star"></i></div>
                                 </div>
                             </div>
                             <p class="box-text">"Thanks to their dedication, I received a fair settlement after my accident. I’m grateful for their tireless work and professional guidance."</p></div>
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
                     <p class="sec-text text-white mb-30">We understand the emotional and financial stress that legal battles bring. Our team provides compassionate guidance and steadfast support from start to finish.</p>
                     <div class="cta-form-wrapper">
                         <a href="" class="th-btn">Request Case Evaluation <i
                                 class="fa-regular fa-arrow-right-long"></i></a>
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
                                     data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">What types of cases do you handle?
                             </button>
                         </div>
                         <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1"
                              data-bs-parent="#faqAccordion">
                             <div class="accordion-body"><p class="faq-text">We specialize in a range of legal matters including personal injury claims, medical negligence, motor vehicle accidents, workplace injuries, and general civil litigation. If you’re unsure whether we can help, contact us for a free consultation.</p></div>
                         </div>
                     </div>
                     <div class="accordion-card">
                         <div class="accordion-header" id="collapse-item-2">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">How do I know if I have a valid compensation claim?
                             </button>
                         </div>
                         <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2"
                              data-bs-parent="#faqAccordion">
                             <div class="accordion-body"><p class="faq-text">If you've suffered harm due to someone else’s negligence — whether it's an individual, employer, or institution — you may be entitled to compensation. Our team will assess your situation during your initial consultation and guide you on the best way forward.</p></div>
                         </div>
                     </div>
                     <div class="accordion-card">
                         <div class="accordion-header" id="collapse-item-3">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">How long will my case take?
                             </button>
                         </div>
                         <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="collapse-item-3"
                              data-bs-parent="#faqAccordion">
                             <div class="accordion-body"><p class="faq-text">Each case is unique, and timelines can vary based on complexity, evidence, and cooperation from the other party. We strive to resolve matters efficiently while ensuring we don’t compromise on the outcome.</p></div>
                         </div>
                     </div>
                     <div class="accordion-card">
                         <div class="accordion-header" id="collapse-item-4">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">What should I bring to my first consultation?
                             </button>
                         </div>
                         <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="collapse-item-4"
                              data-bs-parent="#faqAccordion">
                             <div class="accordion-body"><p class="faq-text">Bring any relevant documents related to your case — such as medical records, police reports, employment details, photographs, or witness contacts. These help us better understand your situation and advise you accurately.</p></div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="faq-img-box2">
                     <div class="img"><img src="assets/img/mnia/DSC05980.jpg" alt=""></div>
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
                         <form action="" method="POST"
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
                                 <p class="info-box_text">28 Wale Street, Cape Town, South Africa</p></div>
                         </div>
                         <div class="info-box">
                             <div class="info-box_icon"><i class="fa-regular fa-phone"></i></div>
                             <div class="info-contnt"><h4 class="footer-info-title">Phone</h4>
                                 <p class="info-box_text"><a href="tel:0214221296" class="info-box_link">
                                         021 422 1296</a><a href="tel:+27780180102" class="info-box_link">
                                         +27 780180 102</a></p></div>
                         </div>
                         <div class="info-box">
                             <div class="info-box_icon"><i class="fa-regular fa-envelope"></i></div>
                             <div class="info-contnt"><h4 class="footer-info-title">Email</h4>
                                 <p class="info-box_text"><a href="mailto:info@mnattorneys.capetown" class="info-box_link">info@mnattorneys.capetown
                                     </a>
                                   </p></div>
                         </div>
                     </div>
                     <div class="contact-img"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.6781715997045!2d18.41610337644222!3d-33.923681621904755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc6765ad3605df%3A0xfae9f097bf7f92d4!2s28%20Wale%20St%2C%20Cape%20Town%20City%20Centre%2C%20Cape%20Town%2C%208000!5e0!3m2!1sen!2sza!4v1747567761665!5m2!1sen!2sza" width="600" height="300" style="radius:10px; border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
{{--                     <div class="shape-mockup contact_1-man">--}}
{{--                         <img src="assets/img/mnia/DSC05896.jpg"--}}
{{--                                                                  alt="vector">--}}
{{--                     </div>--}}
                 </div>
             </div>
         </div>
     </div>
 </section>


@endsection
