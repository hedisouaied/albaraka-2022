


<script src="{{asset('frontend/js/jquery-2.2.0.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{asset('frontend/js/lazysizes.min.js')}}" async></script><!-- LAZY SIZE  -->
<script src="{{asset('frontend/js/popper.min.js')}}"></script><!-- POPPER.MIN JS -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('frontend/js/bootstrap-select.min.js')}}"></script><!-- Form js -->
<script src="{{asset('frontend/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('frontend/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('frontend/js/waypoints-sticky.min.js')}}"></script><!-- STICKY HEADER -->
<script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->
<script src="{{asset('frontend/js/stellar.min.js')}}"></script><!-- PARALLAX BG IMAGE   -->
<script src="{{asset('frontend/js/theia-sticky-sidebar.js')}}"></script><!-- STICKY SIDEBAR  -->
<script src="{{asset('frontend/js/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script src="{{asset('frontend/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{asset('frontend/js/lc_lightbox.lite.js')}}"></script><!-- IMAGE POPUP -->
<script src="{{asset('frontend/js/switcher.js')}}"></script><!-- SHORTCODE FUCTIONS  -->


<!-- REVOLUTION JS FILES -->

<script src="{{asset('frontend/js/js-jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('frontend/js/js-jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('frontend/js/extensions-revolution-plugin.js')}}"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script src="{{asset('frontend/js/1720-js-rev-script-7.js')}}"></script>

<script>
    $(document).ready(function () {
            $('.add-to-news-btn').click(function (e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var news_id = $(this).closest('.news_data').find('.news_id').val();
                //alert(news_id);
                $.ajax({
                    url:"{{route('addtonews.status')}}",
                    method: "POST",
                    data: {
                        _token:'{{csrf_token()}}',
                        'email': news_id,
                    },
                    success: function (response) {
                        if(response.condition == 'no'){
                            alertify.set('notifier','position','bottom-right');
                            alertify.error(response.status);
                            $('.news_id').val('');
                        }else{
                            alertify.set('notifier','position','bottom-right');
                            alertify.success(response.status);
                            $('.news_id').val('');
                        }
                       // alert(response.status);

                    }
                });
            });
        });
</script>


    @yield('scripts')
