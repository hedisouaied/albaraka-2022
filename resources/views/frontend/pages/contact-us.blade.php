@extends('frontend.layouts.master')

@section('content')



<div class="page-content">



    <!-- SECTION CONTENTG START -->

    <!-- CONTACT FORM -->
    <div class="section-full  p-t120 m-t120 p-b50 bg-cover" style="background-image:url({{asset('frontend/images/background/bg-7.jpg')}})">
        <div class="section-content">
            <div class="container">
                <div class="contact-one">

                    <div class="row  d-flex justify-content-center flex-wrap">

                        <div class="col-lg-6 col-md-6 m-b30">
                            <form method="post" action="{{route('contact.submit')}}" >
                                @csrf
                                <x-honey/>

                                <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                        <div class="sep-leaf-left"></div>
                                        <div>Formulaire De Contact</div>
                                        <div class="sep-leaf-right"></div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="name" placeholder="Nom" value="{{old('name')}}" required>
                                            @error('name')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="lastname" placeholder="Prénom" value="{{old('lastname')}}" required>
                                            @error('lastname')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="email" name="email" placeholder="Email" value="{{old('email')}}" required>
                                            @error('email')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="phone" placeholder="Numéro de télephone" value="{{old('phone')}}" required>
                                            @error('phone')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <input type="hidden" name="subject" value="Message sur Albaraka CIE" required>
                                    @error('subject')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="content" required rows="8" placeholder="Message">{{old('content')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="site-button site-btn-effect">Envoyez</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6 col-md-6 m-b30">
                            <div class="contact-info">
                                <div class="contact-info-inner">


                                    <div class="section-head left wt-small-separator-outer">
                                        <div class="wt-small-separator site-text-primary">
                                            <div class="sep-leaf-left"></div>
                                            <div>Contact info</div>
                                            <div class="sep-leaf-right"></div>
                                        </div>
                                    </div>

                                    <div class="contact-info-section" style="background-image:url({{asset('frontend/images/background/bg-map2.png')}});">

                                        <div class="wt-icon-box-wraper left m-b30">

                                            <div class="icon-content">
                                                <h3 class="m-t0 site-text-primary">Numèro de téléphone</h3>
                                                <p>{{get_setting('phone')}}</p>
                                            </div>
                                        </div>

                                        <div class="wt-icon-box-wraper left m-b30">

                                            <div class="icon-content">
                                                <h3 class="m-t0 site-text-primary">Adresse Email</h3>
                                                <p>{{get_setting('email')}}</p>
                                            </div>
                                        </div>

                                        <div class="wt-icon-box-wraper left m-b30">

                                            <div class="icon-content">
                                                <h3 class="m-t0 site-text-primary">Adresse</h3>
                                                <p>{{get_setting('address')}}</p>
                                            </div>
                                        </div>



                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


</div>


@endsection

@section('scripts')
    @if(session()->has('success'))

    <script>
    $(document).ready(function () {
    alertify.set('notifier','position','bottom-left');
    alertify.success('{{session()->get('success')}}');
    });
    </script>
    @endif
@endsection
