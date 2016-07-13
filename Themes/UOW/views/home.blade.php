@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('content')
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Welcome!</h2>
                    <hr class="light">
                    <p class="text-faded">
                        Indonesian Students Association UoW (ISA) which is also known as
                        'Perhimpunan Pelajar Indonesia-Australia UoW' (PPIA Wollongong)
                        is a forum for Indonesian Students studying at UOW as well as Wollongong
                        Society in general who are interested to know more about Indonesia.
                        ISA aims to provide relevant information for its members during their
                        pre or first arrival in Wollongong as well invite them to join its
                        constructive activities. Moreover, ISA also attempts to widespread
                        relevant information about Indonesia to the people living in Wollongong.
                        In order to do that ISA organises different useful, joyful, fun as well
                        as informative activities through out the year. Among of those activities
                        are Discussions, Informal Gatherings, Soccer and Badminton Matches,
                        participating in UoW Clubs events and many more.
                        In Australia, ISA Wollongong is one of the satellites of Indonesian
                        Students Association of Australia (PPIA Pusat) and affiliated with PPIA NSW Branch.
                    </p>
                    <p><a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Our services</a></p>
                    <p><a href="/blog/posts/starter-pack" class="page-scroll btn btn-success btn-xl sr-button">Get Started!</a></p>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Our Services</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-users text-primary sr-icons"></i>
                        <h3>Network</h3>
                        <p class="text-muted">We maintain the members and alumni network.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-bed text-primary sr-icons"></i>
                        <h3>Accommodation</h3>
                        <p class="text-muted">We can assist you to find your accommodation!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-television text-primary sr-icons"></i>
                        <h3>Free Stuff</h3>
                        <p class="text-muted">Don't rush to buy anything. Some friends offer stuff for free.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-envelope text-primary sr-icons"></i>
                        <h3>Invitation</h3>
                        <p class="text-muted">We will send you an invitation to join our community.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="resources">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="/blog/posts/starter-pack" class="portfolio-box">
                        <img src="{{ Theme::url('img/portfolio/thumbnails/3.jpg') }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">

                                </div>
                                <div class="project-name">
                                    Starter Pack
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="/blog/posts" class="portfolio-box">
                        <img src="{{ Theme::url('img/portfolio/thumbnails/1.jpg') }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">

                                </div>
                                <div class="project-name">
                                    Blog
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="/agenda" class="portfolio-box">
                        <img src="{{ Theme::url('img/portfolio/thumbnails/2.jpg') }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">

                                </div>
                                <div class="project-name">
                                    Agenda
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="/videos" class="portfolio-box">
                        <img src="{{ Theme::url('img/portfolio/thumbnails/4.jpg') }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">

                                </div>
                                <div class="project-name">
                                    Videos
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="/download" class="portfolio-box">
                        <img src="{{ Theme::url('img/portfolio/thumbnails/5.jpg') }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">

                                </div>
                                <div class="project-name">
                                    Download
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="useful-links" class="portfolio-box">
                        <img src="{{ Theme::url('img/portfolio/thumbnails/6.jpg') }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">

                                </div>
                                <div class="project-name">
                                    Useful Links
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to join us? Want to be our partners or give donation? That's great! <br/>Give us a call, text or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-mobile fa-3x sr-contact"></i>
                    <p>+61-457-123-974</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:gong.ppia@gmail.com">gong.ppia@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>

@endsection

