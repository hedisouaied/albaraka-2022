@extends('frontend.layouts.master')

@section('content')

<div class="section-full  p-t120 m-t120 p-b50  latest-blog-2-wraper">
    <div class="container">

        <div class="section-head center wt-small-separator-outer text-center">
            <div class="wt-small-separator site-text-primary">
                <div class="sep-leaf-left"></div>
                <div>Nos actualités</div>
                <div class="sep-leaf-right"></div>
            </div>
        </div>
        <div class="section-content">
            <div class="row justify-content-center">

                @foreach ($blogs as $blog )
                <div class="col-lg-6 col-md-12">
                    <div class="latest-blog-3-pattern">
                        <div class="blog-post latest-blog-3 overlay-wraper post-overlay  large-date bg-cover bg-no-repeat bg-top-center" style="background-image:url('{{$blog->photo}}');">
                            <div class="overlay-main opacity-05 bg-black"></div>
                            <div class="wt-post-info p-a30 text-white">
                                <div class="post-overlay-position">
                                    <div class="post-content-outer">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><strong>{{date('d',strtotime($blog->created_at))}}</strong><span>{{date('M',strtotime($blog->created_at))}} {{date('Y',strtotime($blog->created_at))}}</span></li>
                                                <li class="post-author"><i class="fa fa-user-o"></i>By <a href="javascript:;">Admin</a> </li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="{{route('blog.detail',$blog->slug)}}" class="text-white text-capitalize">{{$blog->title}}</a></h3>
                                        </div>
                                        <div class="wt-post-readmore ">
                                            <a href="{{route('blog.detail',$blog->slug)}}" class="site-button-link white">Lire plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>

 </div>



@endsection
@section('scripts')





@endsection
