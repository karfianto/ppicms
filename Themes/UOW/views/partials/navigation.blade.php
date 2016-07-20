<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <img style="padding-right: 5px;" class="pull-left" src="{{ Imagy::getThumbnail('/assets/media/ppiauow.jpg', 'smallThumb') }}" alt="{{ Setting::get('core::site-name') }}" />
            <a class="navbar-brand page-scroll" href="#page-top">PPIA Wollongong</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Services</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resources <span class="caret"></span></a>

                <ul class="dropdown-menu">
                    <li><a class="page-scroll" href="/#resources">All</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/start">Start</a></li>
                    <li><a href="/blog/posts/">Blog</a></li>
                    <li><a href="/agenda">Agenda</a></li>
                    <li><a href="/videos">Videos</a></li>
                    <li><a href="/download">Download</a></li>
                    <li><a href="/useful-links">Useful Links</a></li>
                </ul>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
                <li>
                    <a class="page-scroll" href="/backend"><i class="fa fa-lock fa"></i> Login</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>