@extends('frontend.layouts.master')

@section('content')

 <div class="section-full  p-t120 m-t120 p-b50 bg-white">
    <div class="container">

        <div class="section-content">
            <div class="row d-flex justify-content-center">

                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 m-b30">
                   <!-- BLOG START -->
                    <div class="blog-post date-style-2 blog-lg">
                        <div class="wt-post-media wt-img-effect zoom-slow">
                            <a href="javascript:;"><img src="{{$blog->photo}}" alt=""></a>
                        </div>
                        <div class="wt-post-info  bg-white p-t30">
                            <div class="wt-post-meta ">
                                <ul>
                                    <li class="post-date">
                                        @php
                                            $date = date('Y-m-d',strtotime($blog->updated_at));
                                            setlocale (LC_TIME, 'fr_FR.utf8','fra');
                                            echo (strftime("%A %d %B %Y",strtotime($date)));
                                        @endphp
                                    </li>
                                </ul>
                            </div>
                            <div class="wt-post-title ">
                                <h2 class="post-title">{{$blog->title}}</h2>
                            </div>

                            <div class="wt-post-text">
                                    <p>{!!$blog->description!!}</p>
                            </div>
                            <p>Partager Sur :</p>
                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_twitter"></a>
                                <a class="a2a_button_linkedin"></a>
                                </div>
                                <script async src="https://static.addtoany.com/menu/page.js"></script>
                        </div>
                    </div>

                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 rightSidebar  m-b30">

                    <aside  class="side-bar">

                           <div class="widget recent-posts-entry p-a20">
                                <div class="text-left m-b30">
                                    <h3 class="widget-title">Dernières actualités</h3>
                                </div>
                                <div class="section-content">
                                    <div class="widget-post-bx">
                                        @foreach ($related_blogs as $r_blog )
                                        <div class="widget-post clearfix">
                                            <div class="wt-post-media">
                                                <img src="{{$r_blog->photo}}" alt="">
                                            </div>
                                            <div class="wt-post-info">
                                                <div class="wt-post-header">
                                                    <h6 class="post-title"> <a href="{{route('blog.detail',$r_blog->slug)}}">{{$r_blog->title}}</a></h6>
                                                </div>
                                                <div class="wt-post-meta">
                                                    <ul>
                                                        <li class="post-author">
                                                            @php
                                                                $date = date('Y-m-d',strtotime($r_blog->updated_at));
                                                                setlocale (LC_TIME, 'fr_FR.utf8','fra');
                                                                echo (strftime("%A %d %B %Y",strtotime($date)));
                                                            @endphp
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                           <div class="widget widget_archives p-a20">
                                <div class="text-left m-b30">
                                    <h3 class="widget-title">Secteurs d'activités</h3>
                                </div>
                                <ul>
                                    @foreach ($domaines as $domaine )
                                        <li><a href="{{route('domaine.detail',$domaine->slug)}}">{{$domaine->title}}</a></li>
                                    @endforeach



                                </ul>
                            </div>



                           <div class="widget p-a20">
                                <div class="widget_social_inks">
                                    <ul class="social-icons social-square social-darkest social-md">
                                        <li><a href="{{get_setting('facebook')}}" target="_blank" class="fa fa-facebook"></a></li>
                                        <li><a href="{{get_setting('instagram')}}" target="_blank" class="fa fa-instagram"></a></li>
                                        <li><a href="{{get_setting('twitter')}}" target="_blank" class="fa fa-twitter"></a></li>
                                        <li><a href="{{get_setting('linkedin')}}" target="_blank" class="fa fa-linkedin"></a></li>
                                        <li><a href="{{get_setting('youtube')}}" target="_blank" class="fa fa-youtube"></a></li>
                                    </ul>
                                </div>
                            </div>

                       </aside>

                </div>

            </div>

        </div>

    </div>

 </div>

@endsection
