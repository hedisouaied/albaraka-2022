<footer class="site-footer footer-large footer-dark text-white footer-style1">


    <!-- FOOTER BLOCKES START -->
    <div class="footer-top bg-no-repeat bg-bottom-right" style="background-image:url({{asset('frontend/images/background/footer-bg.png')}})">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="footer-h-left">
                        <div class="widget widget_about">
                            <div class="logo-footer clearfix">
                                <a href="index.php"><img src="{{asset('frontend/images/new logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="widget recent-posts-entry">
                            <ul class="widget_address">
                                <li><i class="fa fa-map-marker"></i>{{get_setting('address')}}</li>
                                <li><i class="fa fa-envelope"></i>{{get_setting('email')}}</li>
                                <li> <i class="fa fa-phone"></i>{{get_setting('phone')}}</li>
                            </ul>
                        </div>
                        <ul class="social-icons  wt-social-links footer-social-icon">
                            <li><a target="_blank" href="{{get_setting('facebook')}}" class="fa fa-facebook"></a></li>
                            <li><a target="_blank" href="{{get_setting('instagram')}}" class="fa fa-instagram"></a></li>
                            <li><a target="_blank" href="{{get_setting('twitter')}}" class="fa fa-twitter"></a></li>
                            <li><a target="_blank" href="{{get_setting('linkedin')}}" class="fa fa-linkedin"></a></li>
                            <li><a target="_blank" href="{{get_setting('youtube')}}" class="fa fa-youtube"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="row footer-h-right">

                        <div class="col-lg-6 col-md-6">
                            <div class="widget widget_services">
                                <h3 class="widget-title">Raccourcis</h3>
                                <ul>
                                    <li><a href="{{route('home')}}">Accueil</a></li>
                                    <li><a href="{{route('references')}}">Projets</a></li>
                                    <li><a href="{{route('moyens')}}">Moyens industriels</a></li>
                                    <li><a href="{{route('evenements')}}">Événements</a></li>
                                    <li><a href="{{route('news.list')}}">Actualités</a></li>
                                    <li><a href="{{route('contact.us')}}">Contactez-nous</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="widget widget_services">
                                <h3 class="widget-title">Secteurs d'activités</h3>
                                <ul>
                                    @foreach (\App\Models\Domaineactivite::where(['status' => 'active'])->orderBy('id', 'ASC')->get() as $domaine_menu )
                                        <li><a href="{{route('domaine.detail',$domaine_menu->slug)}}">{{$domaine_menu->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="widget widget_newsletter">
                        <h3 class="widget-title">Newsletter</h3>
                        <p>Abonnez-vous à notre newsletter pour recevoir les dernières nouvelles sur nos services.</p>
                        <div class="newsletter-input">
                            <form action="" method="POST" class="newsletters-form subscribe_form">
                                <p id="result_subscribe"></p>
                                <div class="input-group news_data">
                                    <input required name="email" type="email" class="form-control news_id" placeholder="Ajoutez votre Email">
                                    @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text nl-search-btn text-black site-bg-primary title-style-2 add-to-news-btn">S'abonner</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="wt-footer-bot-left d-flex justify-content-between">
                <span class="copyrights-text">Copyright © {{date('Y')}} <a class="site-text-primary" target="_blank" href="https://tounesconnect.com/">Tounes connect</a></span>

            </div>
        </div>
    </div>


</footer>
