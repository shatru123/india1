
@extends('layouts.main')
@section('content')


    <section>
        <div class="spacing bottom-spac90 black-layer2 opc7">
            <div class="fixed-bg2" style="background-image: url(assets/images/page-top-bg.jpg);"></div>
            <div class="container">
                <div class="page-top-wrap text-center">
                    <div class="page-top-inner">
                        <h1 itemprop="headline">Organizing for Action is a Movement</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}" title="" itemprop="url">Home</a></li>
                            <li class="breadcrumb-item active">Mission & Vission</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-lg-9">
                        <div class="post-detail-wrap">
                            <div class="post-detail-thumb">
                                <img class="brd-rd5" src="{{asset('public/frontend/assets/images/resources/farmer4.jpg')}}" alt="blog-detail.jpg" itemprop="image">
                            </div>
                            <div class="post-detail-inner">
                                <h4 itemprop="headline">Et iusto odio dignissim qui blandit praesent</h4>
                                <p itemprop="description">Et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor, sit amet consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. For sleeping man, ’twas hard to choose between such winsome days and such seducing nights. But all the witcheries of that unwaning weather did not merely lend new spells and potencies to the outward world. Inward they turned upon the soul, especially when the still mild hours of eve came on; then, memory shot her crystals as the clear ice most forms of noiseless twilights. And all these subtle agencies. For sleeping man, ’twas hard to choose between such winsome days and such seducing nights. But all the witcheries of that unwaning weather did not merely lend new spells and potencies to the outward world. Inward they turned upon the soul, especially when the still mild hours of eve came.</p>
                                <blockquote class="brd-rd5">
                                    <p itemprop="description">
                                        <i class="fa fa-quote-left"></i>&nbsp&nbspउत्तम शेती, मध्यम व्यापार नि कनिष्ठ नोकरी .
                                    </p>
                                </blockquote>
                                <p itemprop="description">Incommode he depending do frankness remainder to. Edward day almost active him friend thirty piqued. People as period twenty my extent as. Set was better abroad ham plenty secure had horses. Admiration has sir decisively excellence say everything inhabiting acceptance. Sooner settle add put you sudden him.</p>
                                <p itemprop="description">Delightful remarkably mr on announcing themselves entreaties favourable. About to in so terms voice at. Equal an would is found seems of. The particular friendship one sufficient terminated frequently themselves. It more shed went up is roof if loud case. Delay music in lived noise an. Beyond genius really enough passed is up.</p>

                          <div class="row">

                              <div class="col-md-6">

                                <h4 itemprop="headline">Need Of Farmers</h4>
                                <ul>
                                    <li>Water shortage</li>
                                    <li>Need of fertilizers</li>
                                    <li>Identifying the need of Farmers .</li>
                                    <li>Improper system of distribution</li>
                                    <li>Cattle caretaking.</li>
                                    <li>Expert advice for agriculture related Queries.</li>
                                </ul>
                              </div>
                            <div class="col-md-6">
                              <h4 itemprop="headline">Need Based Action</h4>
                              <ul>
                                  <li>Collection & Distribution of food grains</li>
                                  <li>NArea wise Quantity of Production</li>
                                  <li>Type of production…. .</li>

                              </ul>
                          </div>
                          </div>


                                <div class="gallery gallery-columns-3">
                                    <div class="gallery-item">
                                        <a class="brd-rd5" data-fancybox="gallery" href="{{asset('public/frontend/assets/images/resources/farmer1.jpg')}}" title="" itemprop="url"><img src="{{asset('public/frontend/assets/images/resources/farmer1.jpg')}}" alt="single-gallery-img1.jpg" itemprop="image"></a>
                                    </div>
                                    <div class="gallery-item">
                                        <a class="brd-rd5" data-fancybox="gallery" href="{{asset('public/frontend/assets/images/resources/farmer2.jpg')}}" title="" itemprop="url"><img src="{{asset('public/frontend/assets/images/resources/farmer2.jpg')}}" alt="single-gallery-img2.jpg" itemprop="image"></a>
                                    </div>
                                    <div class="gallery-item">
                                        <a class="brd-rd5" data-fancybox="gallery" href="{{asset('public/frontend/assets/images/resources/farmer3.jpg')}}" title="" itemprop="url"><img src="{{asset('public/frontend/assets/images/resources/single-gallery-img3.jpg')}}" alt="single-gallery-img3.jpg" itemprop="image"></a>
                                    </div>
                                </div>
                                <p itemprop="description">
                               {{--some text--}}
                                </p>
                            </div>
                        </div><!-- Blog Detail Wrap -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="sidebar_wrapper remove-ext11">
                            <div class="widget-box widget_search">
                                <h5 itemprop="headline">Search</h5>
                                <form>
                                    <input class="brd-rd33" type="text" placeholder="Enter Keywords">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="widget-box">
                                <h5 itemprop="headline">Text Widget</h5>
                                <div class="textwidget">
                                    <p itemprop="description">
                                        Improving Agriculture means Improving Lives .
                                    </p>
                                </div>
                            </div>
                            {{--<div class="widget-box">--}}
                                {{--<h5 itemprop="headline">Recent post</h5>--}}
                                {{--<div class="posts-wrap">--}}
                                    {{--<div class="mini-post-box">--}}
                                        {{--<a class="brd-rd5" href="blog-detail.html" title="" itemprop="url"><img src="assets/images/resources/mini-post-img1.jpg" alt="mini-post-img1.jpg" itemprop="image"></a>--}}
                                        {{--<div class="mini-post-info">--}}
                                            {{--<h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Kielbasa turducken jer tongue alcatra</a></h6>--}}
                                            {{--<span class="mini-post-meta">--}}
                                                    {{--<a href="#" title="" itemprop="url"><i class="fa fa-calendar theme-clr"></i> 22 Dec, 2016</a>--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="mini-post-box">--}}
                                        {{--<a class="brd-rd5" href="blog-detail.html" title="" itemprop="url"><img src="assets/images/resources/mini-post-img2.jpg" alt="mini-post-img2.jpg" itemprop="image"></a>--}}
                                        {{--<div class="mini-post-info">--}}
                                            {{--<h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Intrinsicly visualize ent action items</a></h6>--}}
                                            {{--<span class="mini-post-meta">--}}
                                                    {{--<a href="#" title="" itemprop="url"><i class="fa fa-calendar theme-clr"></i> 22 Dec, 2016</a>--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="mini-post-box">--}}
                                        {{--<a class="brd-rd5" href="blog-detail.html" title="" itemprop="url"><img src="assets/images/resources/mini-post-img3.jpg" alt="mini-post-img3.jpg" itemprop="image"></a>--}}
                                        {{--<div class="mini-post-info">--}}
                                            {{--<h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">11 Rose Gold Homewa Mother's Day</a></h6>--}}
                                            {{--<span class="mini-post-meta">--}}
                                                    {{--<a href="#" title="" itemprop="url"><i class="fa fa-calendar theme-clr"></i> 22 Dec, 2016</a>--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="widget-box style2">--}}
                                {{--<h5 itemprop="headline">Categories</h5>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#" title="" itemprop="url">Beauty</a> (2)</li>--}}
                                    {{--<li><a href="#" title="" itemprop="url">Inspiration</a> (7)</li>--}}
                                    {{--<li><a href="#" title="" itemprop="url">Travel</a> (6)</li>--}}
                                    {{--<li><a href="#" title="" itemprop="url">Creative</a> (8)</li>--}}
                                    {{--<li><a href="#" title="" itemprop="url">Morning</a> (2)</li>--}}
                                    {{--<li><a href="#" title="" itemprop="url">Politics</a> (3)</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            <div class="widget-box">
                                <h5 itemprop="headline">Make Donation</h5>
                                <form>
                                    <input class="brd-rd33" type="text" placeholder="Full Name">
                                    <input class="brd-rd33" type="email" placeholder="Email">
                                    <input class="brd-rd33" type="text" placeholder="Contact">
                                    <div class="select-wrap2 brd-rd33">
                                        <select>
                                            <option>Select Project, Causes</option>
                                            <option>Cause 1</option>
                                            <option>Cause 2</option>
                                            <option>Cause 3</option>
                                        </select>
                                    </div>
                                    <div class="select-wrap2 brd-rd33">
                                        <select>
                                            <option>Donation Amount</option>
                                            <option>500</option>
                                            <option>1000</option>
                                            <option>1500</option>
                                        </select>
                                    </div>
                                    <button class="brd-rd33 theme-btn2 big" type="submit">DONATE NOW</button>
                                </form>
                            </div>
                        </div><!-- Sidebar Wrapper -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection