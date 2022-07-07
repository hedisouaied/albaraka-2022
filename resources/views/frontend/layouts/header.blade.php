<!-- Main Header-->


<header class="site-header header-style-4 mobile-sider-drawer-menu">

    <div class="top-bar" style="background-color: rgba(0,0,0,0.8);">
        <div class="container">

            <div class="d-flex justify-content-between">
                <div class="wt-topbar-left d-flex flex-wrap align-content-start">
                    <ul class="wt-topbar-info e-p-bx text-white">
                        <!-- <li><span> Monday - Saturday</span><span>8AM -7PM</span></li>-->
                    </ul>
                </div>

                <div class="wt-topbar-right d-flex flex-wrap align-content-center">
                    <ul class="wt-topbar-info-2 e-p-bx text-white">
                        <li><i class="fa fa-phone"></i>{{get_setting('phone')}}</li>
                        <li><i class="fa fa-envelope"></i>{{get_setting('email')}}</li>

                    </ul>

                    <ul class="social-icons">

                        <li><a href="{{get_setting('facebook')}}" target="_blank" class="fa fa-facebook"></a></li>
                        <li><a href="{{get_setting('instagram')}}" target="_blank" class="fa fa-instagram"></a></li>
                        <li><a href="{{get_setting('twitter')}}" target="_blank" class="fa fa-twitter"></a></li>
                        <li><a href="{{get_setting('linkedin')}}" target="_blank" class="fa fa-linkedin"></a></li>
                        <li><a href="{{get_setting('youtube')}}" target="_blank" class="fa fa-youtube"></a></li>
                    </ul>

                </div>
            </div>

        </div>
    </div>

    <div class="sticky-header main-bar-wraper  navbar-expand-lg">
        <div class="main-bar" style="background-color: rgba(0,0,0,0.8);">
            <div class="container clearfix">

                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="{{route('home')}}">
                            <img  src="{{asset('frontend/images/new logo.png')}}" alt="" style="/*background: #caa7a7;*/padding: 10px;border-radius: 31px;" >
                        </a>
                    </div>
                </div>

                <!-- NAV Toggle Button -->
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                    <span class="sr-only">menu </span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button>




                <!-- MAIN Vav -->
                <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">

                    <ul class=" nav navbar-nav">
                        <li><a href="{{route('home')}}">Accueil</a>

                        </li>

                        </li>
                        <li><a>Secteurs d'activités</a>
                            <ul class="sub-menu">
                                @foreach (\App\Models\Domaineactivite::where(['status' => 'active'])->orderBy('id', 'ASC')->get() as $domaine_menu )
                                    <li><a href="{{route('domaine.detail',$domaine_menu->slug)}}">{{$domaine_menu->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{route('references')}}">Projets</a></li>
                        <li><a href="{{route('moyens')}}">Moyens industriels</a></li>
                        <li><a href="{{route('evenements')}}">Événements</a></li>
                        <li><a href="{{route('news.list')}}">Actualités</a></li>
                        <li><a href="{{route('contact.us')}}">Contact-nous</a>


                        </li>


                    </ul>

                </div>



            </div>
        </div>

    </div>

</header>
