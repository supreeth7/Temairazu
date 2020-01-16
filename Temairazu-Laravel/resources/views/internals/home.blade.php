@extends('layout')

@section('content')

<section class="hero">
    <div class="page-header overlay black" data-parallax="true" style="background-image: url('Assets/b.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mt-5">
                    <h1 class="title">Easy Reservation Management With Temairazu</h1>
                    <h4>The site controller with the largest number of industry collaborations</h4>
                    <br>
                    <a href="https://www.temairazu.com/contact/request" target="_blank"
                        class="btn btn-round btn-danger btn-raised btn-lg mr-3">
                        <i class="material-icons">assignment</i> Document
                    </a>
                    <a href="https://www.temairazu.com/contact/apply" target="_blank"
                        class="btn btn-round btn-danger btn-raised btn-lg">
                        <i class="material-icons">assignment_turned_in</i> Application
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main-end -->

<!-- Partners-logos-start -->
<div class="main">
    <section class="partners-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="partners-heading text-center">
                            <p class="text-muted">Trusted by companies worldwide</p>
                        </div>
                        <div class="partners-list">
                            <ul class="list-unstyled d-flex">
                                <li><img src="./Assets/jtb.svg" alt="jtb" class="partners-img"></li>
                                <li><img src=" ./Assets/Airbnb.svg" alt="bnb" class="partners-img"></li>
                                <li><img src="./Assets/Booking.svg" alt="bkng" class="partners-img"></li>
                                <li><img src="./Assets/Hotelbeds.svg" alt="hb" class="partners-img"></li>
                                <li><img src="./Assets/rakuten.svg" alt="rkt" class="partners-img"></li>
                                <li><img src="./Assets/expedia-vector-logo.svg" alt="exp" class="partners-img">
                                </li>
                                <li><img src="./Assets/agoda-vector-logo.svg" alt="tpad" class="partners-img"></li>
                                <li><img src="./Assets/tripadvisor.svg" alt="exp" class="partners-img">
                            </ul>
                        </div>
                        <div class="text-center linked">
                            <a href="https://www.temairazu.com/service/site" class="arrow-link img-fluid">Linked
                                Sites
                                <img src="./Assets/right-arrow-svg.svg" alt="arrow"></a>
                            <a href="https://www.temairazu.com/service/pms" class="arrow-link img-fluid">Linked PMS
                                <img src="./Assets/right-arrow-svg.svg" alt="arrow"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Partners-logos-end -->


    <!-- Features-start -->
    <section class="services-sec">
        <!-- Section heading -->
        <h2 class="title underline text-center">Why Temairazu?</h2>
        <!-- Section description -->
        <p class="mb-3 p-2 text-center text-muted" style="font-size: 15px">"Being a world-class
            reservation site controller we strive to deliver premium features"</p>

        <!-- Grid row -->
        <div class="container">
            <div class="row">
                <div class="feature col-12 col-sm-6 col-lg-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="box text-center">
                        <div class="icon"><i class="material-icons text-primary">settings_input_antenna</i>
                        </div>
                        <h3>Diversify Acquisition Channels</h3>
                        <p>The room information can be posted on many domestic and overseas accommodation
                            reservation sites conveniently.</p>
                        </p>
                    </div>
                </div>
                <div class="feature col-12 col-sm-6 col-lg-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="box text-center">
                        <div class="icon"><i class="material-icons text-primary">people_alt</i>
                        </div>
                        <h3>Potential Opportunity Loss Prevention</h3>
                        <p>You can centrally manage the inventory of multiple accommodation reservation sites,
                            reaching multiple potential
                            customers.</p>
                    </div>
                </div>
                <div class="feature col-12 col-sm-6 col-lg-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="box text-center">
                        <div class="icon"><i class="material-icons text-primary">trending_down</i>
                        </div>
                        <h3>Management Cost Reduction</h3>
                        <p>Updates to each site can be managed automatically 24x7, improving work efficiency and
                            reducing management costs.</p>
                    </div>
                </div>
                <div class="feature col-12 col-sm-6 col-lg-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="box text-center">
                        <div class="icon"><i class="material-icons text-primary">flash_on</i>
                        </div>
                        <h3>Fast and Secure Updates</h3>
                        <p>Reservation information acquisition interval is short and overbooking is suppressed
                            thus
                            enhancing ease of use and
                            workflow.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features-end -->


    <!-- News-start -->

    <section class="news-sec" id="news">
        <div class="container">
            <h2 class="title text-center underline pb-4">News</h2>
            <div class="card card-nav-tabs">
                <div class="card-header card-header-primary">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#pr">PR News
                                        @if ($new_pr)
                                        <span class="badge badge-pill"
                                            style="position: relative;left:-10px;bottom:8px"><i class="material-icons"
                                                style="font-size: 190%">announcement</i></span>
                                        @endif
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#ir">IR News
                                        @if ($new_ir)
                                        <span class="badge badge-pill"
                                            style="position: relative;left:-10px;bottom:8px"><i class="material-icons"
                                                style="font-size: 190%">announcement</i></span>
                                        @endif
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#up">Updates</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="tab-content text-center">

                        <!--PR NEWS-->
                        <div class="tab-pane active" id="pr">
                            <!-- accessing data returned from NewsController -->
                            @foreach ($pr as $news)
                            <div class="news-body">
                                <div class="row">
                                    <a href="https://temairazu-pdf.s3-ap-northeast-1.amazonaws.com/{{ $news->pdf_name . ".pdf" }}"
                                        class="news-headline" target="_blank">{{ $news->headline }}</a>
                                </div>
                                <div class="row news-cols">
                                    <!-- Converting the data format from the original -->
                                    @php
                                    $date = date("d F Y", strtotime($news->created_at));
                                    $time = date("h:i A",strtotime($news->created_at));
                                    @endphp

                                    <div class="col-mb-4">
                                        <p class="text-muted">{{ $date }}</p>
                                    </div>

                                    <p class="text-muted">|</p>

                                    <div class="col-mb-4">
                                        <p class="text-muted">{{ $time }}</p>
                                    </div>

                                    <p class="text-muted">|</p>

                                    <div class="col-mb-4">
                                        <img src="/Assets/adobe.svg" alt="adobe">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-primary" href="https://www.temairazu.com/press">PR
                                    News List</a>
                            </div>
                        </div>

                        <!--IR NEWS-->
                        <div class="tab-pane" id="ir">
                            @foreach ($ir as $news)
                            <div class="news-body">
                                <div class="row">
                                    <a href="https://temairazu-pdf.s3-ap-northeast-1.amazonaws.com/{{ $news->pdf_name . ".pdf" }}"
                                        class="news-headline" target="_blank">{{ $news->headline }}</a>
                                </div>
                                <div class="row news-cols">
                                    <!-- Converting the data format from the original -->
                                    @php
                                    $date = date("d F Y", strtotime($news->created_at));
                                    $time = date("h:i A",strtotime($news->created_at));
                                    @endphp
                                    <div class="col-mb-4">
                                        <p class="text-muted">{{ $date }}</p>
                                    </div>
                                    <p class="text-muted">|</p>

                                    <div class="col-mb-4">
                                        <p class="text-muted">{{ $time }}</p>
                                    </div>

                                    <p class="text-muted">|</p>

                                    <div class="col-mb-4">
                                        <img src="/Assets/adobe.svg" alt="adobe">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-primary" href="https://www.temairazu.com/ir/news">IR
                                    News
                                    List</a>
                            </div>
                        </div>

                        <!--Updates-->
                        <div class="tab-pane" id="up">
                            <div class="updates">
                                <p class="d-flex justify-content-center"><img src="./Assets/New.svg" alt="new"
                                        class="new">
                                </p>
                                <p class="update-heading text-center">Reservation acquisition function update</p>
                                <p class="update-subject text-center">Accelerate reservation acquisition for all
                                    versions of the TEMAIRAZU series</p>
                                <div class="update-button d-flex justify-content-center mt-4">
                                    <a class="btn btn-primary" href="https://www.temairazu.com/service/speedup">Update
                                        Overview</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News-end -->

    <!-- Dantai-section-start -->
    <section class="dantai-travel-sec">
        <div class="container mb-2">
            <h2 class="text-center title underline">Temairazu Dantai Travel</h2>
            <div class="row align-items-center">
                <div class="col-lg-5 content-col">
                    <p class="heading">Centralized management of group accommodation reservations</p>
                    <hr class="hrs">
                    <p class="content">Group accommodation reservations can be managed with Temairazu.
                        Both personal and group accommodation reservations are managed
                        together, and travel reservations done by phone, online and e-mail
                        are freed from the complexity of managing paper ledgers and spreadsheets.</p>
                    <div class="dantai-button">
                        <a class="btn btn-primary" href="https://www.temairazu.com/service/dantai_tr">Temairazu
                            Dantai Travel</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <img src="./Assets/dantai-undraw.svg" alt="dantai-travel" class="dantai-travel-img">
                </div>
            </div>
        </div>
    </section>
    <!-- Dantai-section-end -->


    <!-- Multi-section-start -->
    <section class="multi-sec">
        <div class="container mb-5">
            <h2 class="text-center title underline">Multi-Platform Support</h2>
            <div class="row align-items-center wp-multi pt-5">
                <div class="col-lg-6">
                    <img src="./Assets/multi-undraw.svg" alt="multi" class="multi-img">
                </div>
                <div class="col-lg-6 content-col">
                    <p class="heading">Can be managed anywhere if connected to the Internet</p>
                    <hr class="hrs">
                    <p class="content">Being an ASP-type service, it can be not only operable on PC
                        but also on smartphones, tablets and other devices with internet connectivity. In addition,
                        it
                        can
                        be managed
                        from multiple terminals connected to the Internet, and can be accessed and managed from
                        anywhere,
                        such as the front
                        desk of the accommodation facility or the office of the group headquarters.</p>
                    <div class="multi-button">
                        <a class="btn btn-primary" href="https://www.temairazu.com/service/about">More
                            details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Multi-section-end -->


    <!-- Careers-start -->
    <section class="careers-section img img-fluid" id="careers">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="browse-job p-4 bg-white rounded shadow-lg">
                        <h2 class="underline title text-center mx-auto">We're hiring</h2>
                        <i class="material-icons">search</i>
                        <div class="row">
                            <div class="col-md-12 mx-auto">
                                <p class="content">Being a leading site controller, Temairazu broadens the options
                                    for travelers and creates a virtuous circle in the travel industry. What we
                                    are
                                    doing is “supporting the travel industry”. Why don't you use your experience
                                    to
                                    grow one of the biggest industries in Japan?
                                </p>
                            </div>
                            <div class="col-md-12 mx-auto text-center">
                                <a href="https://www.temairazu.com/recruit/staff" class="arrow-link">Working
                                    with Temairazu <img src="Assets/right-arrow-svg.svg" style="width: 20px"></a>
                            </div>

                            <div class="row careers-row mt-3">
                                <div class="careers-link">
                                    <a href="https://www.temairazu.com/recruit/top"
                                        class="col-md-6 arrow-link">Employment
                                        Information
                                        <img src="./Assets/right-arrow-svg.svg" alt="arrow"></a>
                                </div>
                                <div class="careers-link">
                                    <a href="https://www.temairazu.com/recruit/c_message"
                                        class="col-md-6 arrow-link">Representative
                                        Message
                                        <img src="./Assets/right-arrow-svg.svg" alt="arrow"></a>
                                </div>
                                <div class="careers-link">
                                    <a href="https://www.temairazu.com/recruit/g_guidelines"
                                        class="col-md-6 arrow-link">New
                                        graduate recruitment
                                        <img src="./Assets/right-arrow-svg.svg" alt="arrow"></a>
                                </div>
                                <div class="careers-link">
                                    <a href="https://www.temairazu.com/recruit/guidelines"
                                        class="col-md-6 arrow-link">Mid-career
                                        recruitment
                                        <img src="./Assets/right-arrow-svg.svg" alt="arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Careers-end -->

    <!-- Company section start -->
    <section class="company-section" id="company-profile">
        <div class="container">
            <h2 class="text-center underline mb-5 title">Company Profile</h2>
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <td class="head" style="width: 15%;">Company Name</td>
                        <td>Temairazu Inc.</td>
                    </tr>
                    <tr>
                        <td class="head" style="width: 15%;">Security Code</td>
                        <td>2477</td>
                    </tr>
                    <tr>
                        <td class="head" style="width: 15%;">Head Office Location</td>
                        <td>Ebisu NR Building 7F, 1-21-3 Ebisu, Shibuya-ku, Tokyo 150-0013</td>
                    </tr>
                    <tr>
                        <td class="head" style="width: 15%;">Osaka Sales Office</td>
                        <td>Yubinbango 564-0052, Suita Osaka Hiroshiba-cho, 8-12 third Maidabiru</td>
                    </tr>
                    <tr>
                        <td class="head" style="width: 15%;">Fukuoka Sales Office</td>
                        <td>Onuki Hakata Station Building 6F, 3-6-12 Hakata Station, Hakata-ku, Fukuoka 812-0011,
                            Fukuoka Prefecture</td>
                    </tr>
                    <tr>
                        <td class="head" style="width: 15%;">Phone Number</td>
                        <td>03-5447-6690 (Main Representative)</td>
                    </tr>
                    <tr>
                        <td class="head" style="width: 15%;">Establishment</td>
                        <td>August 4, 2003</td>
                    </tr>
                    <tr>
                        <td class="head" style="width: 15%;">Capital</td>
                        <td>711,290,365 yen</td>
                    </tr>
                    <tr>
                        <td class="head" style="width: 15%;">Business Description</td>
                        <td>Operation of the comparison site "Comparison.com" for the development and provision of
                            the
                            reservation site controller "TEMAIRAZU" series</td>
                    </tr>
                    <tr>
                        <td class="head" style="width: 15%;">Officer Information</td>
                        <td>
                            <ul>
                                <li>
                                    <span class="designation">CEO</span> - Tetsuo Watanabe
                                </li>

                                <li>
                                    <span class="designation">Director</span> - Kenji Kiuchi
                                </li>

                                <li>
                                    <span class="designation">Outside Directors</span> - Kazuo Suzuki, Tomohiro
                                    Susaki
                                </li>

                                <li>
                                    <span class="designation">Outside Audit & Supervisory Board Member</span> -
                                    Yoshiro
                                    Nagamata, Yuki Yamamoto, Kazuo Ikeda
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Company section end -->


    <!-- Go to top button -->
    <span id="button">
        <i class="material-icons" style="color: #3D3A3A">keyboard_arrow_up</i>
    </span>
    <!-- Main-Content-end -->
