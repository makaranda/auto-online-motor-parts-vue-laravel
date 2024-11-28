

<script src="{{ url('public/assets/js/jquery-3.6.0.min.js') }}"></script>

<script src="{{ url('public/assets/js/modernizr.min.js') }}"></script>
<script src="{{ url('public/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('public/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ url('public/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('public/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('public/assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ url('public/assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ url('public/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('public/assets/js/counter-up.js') }}"></script>
<script src="{{ url('public/assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ url('public/assets/js/jquery.timepicker.min.js') }}"></script>
{{-- <script src="{{ url('public/assets/js/jquery.nice-select.min.js') }}"></script> --}}
<script src="{{ url('public/assets/js/wow.min.js') }}"></script>
<script src="{{ url('public/assets/js/polyline.js') }}"></script>
<script src="{{ url('public/assets/js/main.js') }}?v={{ date('is') }}"></script>
{{-- <script src="https://unpkg.com/@mapbox/polyline@1.1.1/lib/polyline.js"></script> --}}

    <script>
     $(document).ready(function() {
        // Toggle sidebar open
        $('.navbar-toggler').on('click', function() {
            $('#main_nav').addClass('show_mobile_menu');
            $('.navbar-toggler').addClass('show_mobile_menu_toggler');
            //$('#main_nav').toggleClass('show').hide();
        });
        $('.show_mobile_menu_toggler').on('click', function() {
            $('.show_mobile_menu').style({'display':'none'});
            $('#main_nav').removeClass('show_mobile_menu');
            $('#main_nav').removeClass('show');
        });
    });

    </script>


</body>
</html>
