@extends('frontend.layouts.master')


@section('content')




        <!-- SLIDER START -->
        <div class="slider-outer">

            <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
                <div id="welcomer" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
                    <ul>

                        @php
                            $i = 1;
                        @endphp

                            @foreach ($banners  as $banner )


                            <!-- SLIDE 1 -->
                            <li data-index="rs-90{{$i}}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{$banner->photo}}" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Slide Title" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{$banner->photo}}" alt="" data-lazyload="{{$banner->photo}}" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-90{{$i}}-layer-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]' data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 1;border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                </div>

                                <!-- LAYER NR. 3 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-90{{$i}}-layer-3" data-x="['left','left','left','left']" data-hoffset="[100','100','30','30']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['220','220','200','200']" data-fontsize="[80','70','60','38']" data-lineheight="['80','70','60','38']" data-width="['600','600','96%','96%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-basealign="slide" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' data-textalign="['left','left','left','left']"  style="z-index: 13;white-space: normal;font-weight: 500;color:#fff;border-width:0px; font-family: 'Teko', sans-serif;background: rgba(0,0,0,0.8);padding: 15px;border-radius: 4px;">{{$banner->title}}</div>



                                <!-- LAYER NR. 5 [ for see all service botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-90<?php echo $i; ?>-layer-5" data-x="['left','left','left','left']" data-hoffset="['100','100','30','30']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-basealign="slide" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase;">
                                    <a href="contact.php" class="site-button site-btn-effect">Contactez-nous</a>
                                </div>


                            </li>
                            @php
                                $i++;
                            @endphp

                       @endforeach


                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>

        </div>





        <div class="section-full p-t80 p-b50 bg-no-repeat bg-center bg-black">
            <div class="about-section-two">
                <div class="container">
                    <div class="section-content">
                        <div class="row justify-content-center d-flex">



                            <div class="col-lg-6 col-md-12 m-b30">
                                <div class="about-max-two">
                                    <div class="about-max-two-media"><img class="lazyload" src="{{get_setting('image')}}" data-src="{{get_setting('image')}}" alt=""></div>

                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 m-b30">
                                <div class="about-section-two-right">
                                    <!-- TITLE START-->
                                    <div class="left wt-small-separator-outer">
                                        <div class="wt-small-separator site-text-primary">
                                            <div class="sep-leaf-left"></div>
                                            <div>Qui sommes nous</div>
                                            <div class="sep-leaf-right"></div>
                                        </div>
                                        <h2 class="text-white">AL BARAKA CIE</h2>
                                        <div class="ab-two-info text-white" >
                                            <p>{!!get_setting('content')!!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
            </div>
        </div>





        <div class="section-full p-t80 p-b50 ">
            <div class="container">
                <div class="section-head center wt-small-separator-outer text-center">
                    <div class="wt-small-separator site-text-primary">
                        <div class="sep-leaf-left"></div>
                        <div>Nos secteurs d'activités</div>
                        <div class="sep-leaf-right"></div>
                    </div>
                </div>
                <div class="section-content">

                        <div class="section-content">
                            @php
                                $i = 1 ;
                            @endphp
                            @foreach ($domaines as $domaine )
                            @if (($i%2)==1)
                            <div class="row justify-content-center pt-4 mb-4" style="box-shadow: 2px 2px 24px #7c7c7c;">
                                <div class="col-lg-6 col-md-6 m-b30 ">
                                    <div class="wt-team-1">

                                        <div class="wt-media">
                                            <img src="{{$domaine->photo}}" alt="">

                                        </div>



                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 m-b30">
                                    <div class="wt-team-1-single">
                                        <h3 class="m-t0"><a href="{{route('domaine.detail',$domaine->slug)}}" class="site-text-secondry">{{$domaine->title}}</a></h3>
                                        <ul class="wt-team-1-single-info bg-white">
                                            <div>{!!$domaine->description!!}</div>
                                            @php
                                            $missions = explode(',',$domaine->missions);
                                            @endphp
                                            <ul class="list-check-circle primary">
                                                @foreach ($missions as $mission )
                                                <li>{{$mission}}</li>
                                                @endforeach
                                            </ul>
                                        </ul>
                                        <a href="{{route('domaine.detail',$domaine->slug)}}" class="site-button site-btn-effect">En savoir plus</a>
                                    </div>
                                </div>

                            </div>
                            @else
                            <div class="row justify-content-center pt-4 mb-4" style="box-shadow: 2px 2px 24px #7c7c7c;">

                                <div class="col-lg-6 col-md-6 m-b30">
                                    <div class="wt-team-1-single">
                                        <h3 class="m-t0"><a href="{{route('domaine.detail',$domaine->slug)}}" class="site-text-secondry">{{$domaine->title}}</a></h3>
                                        <ul class="wt-team-1-single-info bg-white">
                                            <div>{!!$domaine->description!!}</div>
                                            @php
                                            $missions = explode(',',$domaine->missions);
                                            @endphp
                                            <ul class="list-check-circle primary">
                                                @foreach ($missions as $mission )
                                                <li>{{$mission}}</li>
                                                @endforeach
                                            </ul>
                                        </ul>
                                        <a href="{{route('domaine.detail',$domaine->slug)}}" class="site-button site-btn-effect">En savoir plus</a>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 m-b30 ">
                                    <div class="wt-team-1">

                                        <div class="wt-media">
                                            <img src="{{$domaine->photo}}" alt="">

                                        </div>



                                    </div>
                                </div>
                            </div>
                            @endif

                            @php
                                $i++;
                            @endphp
                            @endforeach

                        </div>

                </div>
            </div>
        </div>




        <div class="section-full p-t80 p-b50">
            <div class="container">
                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer text-center">
                    <div class="wt-small-separator site-text-primary">
                        <div  class="sep-leaf-left"></div>
                        <div>Séléction de projets</div>
                        <div  class="sep-leaf-right"></div>
                    </div>
                </div>

            <div class="section-content">
                <div class="owl-carousel h3-project-slider  mfp-gallery" style="box-shadow: 5px 3px 24px #7c7c7c;padding: 25px 13px;">

                    @foreach ($references as $reference )

                        <div class="item" >
                            <div class="line-filter-outer">
                                <div class="line-filter-media">
                                    <img src="{{$reference->photo}}" style="height:300px;object-fit:cover;" alt="">
                                    <div class="hover-effect-1">
                                        <div class="hover-effect-content text-white" style="padding: 20px 20px 150px 50px;">
                                            <h3 class="m-tb0 h-category">{{\App\Models\Domaineactivite::where('id', $reference->domaine_id)->value('title')}}</h3>
                                            <h4> <i class="fa fa-map-marker"></i> Pays : {{$reference->pays}}</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="line-filter  bg-white p-a30" style="padding: 20px 0px;">
                                    <div class="filter-content">
                                        <h3 class="m-t0 m-b20 text-uppercase">{{$reference->title}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach


                </div>

            </div>

        </div>
        </div>







        <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
            <div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
                <ul>


                    <li data-index="rs-901" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{get_setting('image')}}" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Slide Title" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                        <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="{{get_setting('video')}}"
                        data-videopreload="auto" data-videoloop="loop" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false">
                        </div>

                    </li>

                </ul>
            </div>
        </div>



        <div class="section-full p-t80 p-b70 ">

            <div class="container">
                <div class="section-content">
                    <div class="row">

                        <div class="col-lg-6 col-md-12 p-b40">
                            <div class="whatWedo-media-section" style="height: 100%;box-shadow: 5px 18px 24px #7c7c7c;" >
                                <div class="wt-media" style="height: 100%;" >
                                    <img src="{{$event->photo}}" alt="" style="height: 100%;object-fit: cover;" >
                                </div>
                                <div class="whatWedo-media-content text-white">
                                    <div class="whatWedo-media-inner">
                                        <h3>{{$event->title}}</h3>
                                        <p><i class="fa fa-map-marker" ></i> Pays : {{$event->pays}}</p>
                                        <p><i class="fa fa-calendar" ></i> Date début : {{date('d M , Y',strtotime($event->date_debut))}}</p>
                                        <p><i class="fa fa-calendar" ></i> Date fin : {{date('d M , Y',strtotime($event->date_fin))}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="whatWedo-info-section">

                                <div class="left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                        <div class="sep-leaf-left"></div>
                                        <div>Dernier événement</div>
                                        <div class="sep-leaf-right"></div>
                                    </div>
                                    <h2>Participation dans les foires et les salons nationaux et internationaux</h2>
                                    <p>Dernière participation : <b>{{$event->title}}</b> à <b>{{$event->pays}} .</b> </p>
                                    <a href="{{route('evenements')}}" class="site-button site-btn-effect">Autres événements</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="section-full ">
            <div class="container">
                <div class="section-head center wt-small-separator-outer text-center">
                    <div class="wt-small-separator site-text-primary">
                        <div class="sep-leaf-left"></div>
                        <div>Nos Partenaires</div>
                        <div class="sep-leaf-right"></div>
                    </div>
                </div>
                <div class="section-content">

                    <div class="section-content">
                        <div class="section-content p-tb30 owl-btn-vertical-center">
                            <div class="owl-carousel home-client-carousel-2">

                                @foreach ( $partenaires as $partenaire )
                                <div class="item" style="box-shadow: 6px 5px 16px black;border-bottom: 10px solid #0000004a;">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a><img src="{{$partenaire->photo}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


@section('scripts')



@endsection

