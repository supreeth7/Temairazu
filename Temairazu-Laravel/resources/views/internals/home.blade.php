@extends('layout')

@section('content')

<!-- Main-start -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <h1 class="hero-heading">The industry's leading<br>channel manager</h1>
                <div class="main-btns d-flex justify-content-center">
                    <a class="btn btn-primary btn mt-4 mr-3"
                        href="https://www.temairazu.com/contact/request">Document</a>
                    <a class="btn btn-outline-primary btn mt-4 ml-3"
                        href="https://www.temairazu.com/contact/apply">Application</a>
                </div>
            </div>

            <div class="col-lg-6 landing-art">
                <img src="Assets/undraw-logo.svg" alt="" class="main-img">
            </div>

        </div>
    </div>
</section>
<!-- Main-end -->

<!-- Partners-logos-start -->
<section class="partners-sec mb-3">
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
                        <a href="https://www.temairazu.com/service/site" class="arrow-link">Linked Sites <img
                                src="./Assets/right-arrow-svg.svg" alt="arrow"></a>
                        <a href="https://www.temairazu.com/service/pms" class="arrow-link">Linked PMS <img
                                src="./Assets/right-arrow-svg.svg" alt="arrow"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partners-logos-end -->


<!-- Features-start -->
<section class="services-sec text-center">
    <!-- Section heading -->
    <h2 class="font-weight-bold item">Why Temairazu?</h2>
    <!-- Section description -->
    <p class="lead mx-auto mb-5 text-center item" style="font-size: 15px">"Being a world-class reservation
        site
        controller we strive
        to deliver premium features"</p>

    <!-- Grid row -->
    <div class="container">
        <div class="row">

            <div class="col-12 col-sm-6 col-lg-3 d-flex item" style="animation-delay: 0.2s;">
                <div class="card">
                    <div class="card-body">
                        <div class="card-image text-center">
                            <ion-icon name="ios-radio"></ion-icon>
                        </div>
                        <div class="text-center">
                            <h5 class="card-title font-weight-bold my-4">Diversify Acquisition Channels</h5>
                        </div>
                        <div class="card-text">
                            <p class="mb-md-0 mb-5">The room information can be posted on many domestic and overseas
                                accommodation reservation sites conveniently.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 d-flex item" style="animation-delay: 0.3s;">
                <div class="card">
                    <div class="card-body">
                        <div class="card-image text-center">
                            <ion-icon name="search"></ion-icon>
                        </div>
                        <div class="text-center">
                            <h5 class="card-title font-weight-bold my-4">Potential Opportunity Loss Prevention</h5>
                        </div>
                        <div class="card-text">
                            <p class="mb-md-0 mb-5">You can centrally manage the inventory of multiple accommodation
                                reservation sites, reaching multiple potential customers.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 d-flex item" style="animation-delay: 0.4s;">
                <div class="card">
                    <div class="card-body">
                        <div class="card-image text-center">
                            <ion-icon name="ios-wallet"></ion-icon>
                        </div>
                        <div class="text-center">
                            <h5 class="card-title font-weight-bold my-4">Management Cost Reduction</h5>
                        </div>
                        <div class="card-text">
                            <p class="mb-md-0 mb-5">Updates to each site can be managed automatically 24x7,
                                improving work efficiency and reducing management costs.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 d-flex item" style="animation-delay: 0.5s;">
                <div class="card">
                    <div class="card-body">
                        <div class="card-image text-center">
                            <ion-icon name="flash"></ion-icon>
                        </div>
                        <div class="text-center">
                            <h5 class="card-title font-weight-bold my-4">Fast and Secure Updates</h5>
                        </div>
                        <div class="card-text">
                            <p class="mb-md-0 mb-5">Reservation information acquisition interval is short and
                                overbooking is suppressed
                                thus enhancing ease of use and workflow.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Features-end -->


<!-- News-start -->
<section class="news-sec" id="news">
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="underline">News</h3>
        </div>
        <!-- Nav tabs -->

        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#pr">PR News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#ir">IR News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#up">Updates</a>
            </li>
        </ul>

        <!-- Tab content -->
        <div class="tab-content shadow bg-white rounded">

            <!-- PR News-start -->
            <div class="container tab-pane fade show active" id="pr">
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
                            <p class="text-muted"><img src="/Assets/adobe.svg" alt="adobe">
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    <a class="btn btn-outline-primary btn-sm" href="https://www.temairazu.com/press">PR News
                        List</a>
                </div>
            </div>
            <!-- PR News-end -->

            <!-- IR News-start -->
            <div class="tab-pane container fade" id="ir">

                <!-- accessing data returned from NewsController -->
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
                            <p class="text-muted"><img src="/Assets/adobe.svg" alt="adobe"></p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    <a class="btn btn-outline-primary btn-sm" href="https://www.temairazu.com/ir/news">IR
                        News
                        List</a>
                </div>
            </div>
            <!-- IR News-end -->

            <!-- Updates-start -->
            <div class="tab-pane container fade" id="up">
                <div class="updates">
                    <p class="d-flex justify-content-center"><img src="./Assets/New.svg" alt="new" class="new">
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
            <!-- Updates-end -->
        </div>
    </div>
</section>
<!-- News-end -->

<!-- counter start -->
<section class="counter-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single_member_counter">
                    <span class="counter-member-a">0</span>
                    <h4>HOTELS MANAGED</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_member_counter">
                    <span class="counter-member-b">0</span>
                    <h4>CITIES</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_member_counter">
                    <span class="counter-member-c">0</span><span>M</span>
                    <h4>BOOKINGS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_member_counter">
                    <span>JP¥ </span><span class="counter-member-d">0</span><span>M</span>
                    <h4>REVENUE</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- member_counter counter end -->

<!-- Dantai-section-start -->
<section class="dantai-travel-sec">
    <div class="container mb-2">
        <h3 class="text-center underline">Temairazu Dantai Travel</h3>
        <div class="row align-items-center">
            <div class="col-lg-6 content-col">
                <p class="heading">Centralized management of group accommodation reservations</p>
                <hr>
                <p class="content">Group accommodation reservations can be managed with Temairazu.
                    Both personal and group accommodation reservations are managed
                    together, and travel reservations done by phone, online and e-mail
                    are freed from the complexity of managing paper ledgers and spreadsheets.</p>
                <div class="dantai-button">
                    <a class="btn btn-outline-primary" href="https://www.temairazu.com/service/dantai_tr">Temairazu
                        Dantai Travel</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="./Assets/dantai-travel.svg" alt="dantai-travel" class="dantai-travel-img">
            </div>
        </div>
    </div>
</section>
<!-- Dantai-section-end -->


<!-- Multi-section-start -->
<section class="multi-sec">
    <div class="container mb-5">
        <h3 class="text-center underline">Multi-Platform Support</h3>
        <div class="row align-items-center wp-multi pt-5">
            <div class="col-lg-6">
                <img src="./Assets/Multi-platform.svg" alt="multi" class="multi-img">
            </div>
            <div class="col-lg-6 content-col">
                <p class="heading">Can be managed anywhere if connected to the Internet</p>
                <hr>
                <p class="content">Being an ASP-type service, it can be not only operable on PC
                    but also on smartphones, tablets and other devices with internet connectivity. In addition, it can
                    be managed
                    from multiple terminals connected to the Internet, and can be accessed and managed from anywhere,
                    such as the front
                    desk of the accommodation facility or the office of the group headquarters.</p>
                <div class="multi-button">
                    <a class="btn btn-outline-primary" href="https://www.temairazu.com/service/about">More details</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Multi-section-end -->


<!-- Careers-start -->
<section class="careers-section img" style="background-image: url(Assets/bg_1.jpg); background-position: center;"
    id="careers">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="browse-job p-5 shadow bg-white rounded">
                    <ion-icon name="ios-search" class="icon"></ion-icon>
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <p>Being a leading site controller, Temairazu broadens the options
                                for travelers and creates a virtuous circle in the travel industry. What we are
                                doing is
                                “supporting the travel industry”. Why don't you use your experience to grow one of
                                the
                                biggest
                                industries in Japan?
                            </p>
                        </div>
                        <div class="col-md-12 mx-auto text-center">
                            <a href="https://www.temairazu.com/recruit/staff" class="arrow-link">Working
                                with Temairazu <img src="Assets/right-arrow-svg.svg" style="width: 4%"></a>
                        </div>

                        <div class="row d-flex justify-content-center mt-3">
                            <div class="careers-link">
                                <a href="https://www.temairazu.com/recruit/top" class="col-md-3 arrow-link">Employment
                                    Information
                                    <img src="./Assets/right-arrow-svg.svg" alt="arrow"></a>
                            </div>
                            <div class="careers-link">
                                <a href="https://www.temairazu.com/recruit/c_message"
                                    class="col-md-3 arrow-link">Representative
                                    Message
                                    <img src="./Assets/right-arrow-svg.svg" alt="arrow"></a>
                            </div>
                            <div class="careers-link">
                                <a href="https://www.temairazu.com/recruit/g_guidelines" class="col-md-3 arrow-link">New
                                    graduate recruitment
                                    <img src="./Assets/right-arrow-svg.svg" alt="arrow"></a>
                            </div>
                            <div class="careers-link">
                                <a href="https://www.temairazu.com/recruit/guidelines"
                                    class="col-md-3 arrow-link">Mid-career
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
        <h2 class="text-center underline mb-5">Company Profile</h2>
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
                    <td>Operation of the comparison site "Comparison.com" for the development and provision of the
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
                                <span class="designation">Outside Directors</span> - Kazuo Suzuki, Tomohiro Susaki
                            </li>

                            <li>
                                <span class="designation">Outside Audit & Supervisory Board Member</span> - Yoshiro
                                Nagamata, Yuki Yamamoto, Kazuo Ikeda
                            </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</section>
<!-- Company section end -->


<!-- Go to top button -->
<span id="button">
    <ion-icon name="ios-arrow-dropup"></ion-icon>
</span>

@endsection
