<!--************************************
          Footer Start
  *************************************-->
<footer id="jf-footer" class="jf-footer jf-haslayout" style="position: fixed;right: 0;bottom: 0;left: 0;">
    {{--<div class="jf-footeraboutus">--}}
    {{--</div>--}}
    <div class="jf-footerbottom">
        <a class="jf-btnscrolltop" href="javascript:void(0);"><i class="fa fa-angle-double-up"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="jf-copyrights">Copyright © 2019 <span>E-Tender.</span> All Rights Reserved.</p>
                    <nav class="jf-addnav">
                        <ul>
                            <li><a href="javascript:void(0);">Privacy Policy</a></li>
                            <li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
                            <li><a href="javascript:void(0);">FAQs</a></li>
                            <li><a href="javascript:void(0);">Sitemap</a></li>
                            <li><a href="javascript:void(0);">Report Issue</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--************************************
        Footer End
*************************************-->
</div>
<!--************************************
        Wrapper End
*************************************-->
<script src="{{url('public/')}}/js/vendor/jquery-3.3.1.js"></script>
<script src="{{url('public/')}}/js/vendor/jquery-library.js"></script>
<script src="{{url('public/')}}/js/vendor/bootstrap.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
<script src="{{url('public/')}}/js/jquery.basictable.min.js"></script>
<script src="{{url('public/')}}/js/jquery.sortable.js"></script>
<script src="{{url('public/')}}/js/owl.carousel.min.js"></script>
<script src="{{url('public/')}}/js/circle-progress.js"></script>
<script src="{{url('public/')}}/js/magnific-popup.js"></script>
<script src="{{url('public/')}}/js/scrollbar.min.js"></script>
<script src="{{url('public/')}}/js/chosen.jquery.js"></script>
<script src="{{url('public/')}}/js/prettyPhoto.js"></script>
<script src="{{url('public/')}}/js/chartist.js"></script>
<script src="{{url('public/')}}/js/appear.js"></script>
<script src="{{url('public/')}}/js/gmap3.js"></script>
<script src="{{url('public/')}}/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


@if(Session::has('success'))
    <script>
        {{--toastr.options.timeOut = 3000;--}}
        {{--toastr.options.closeButton = false;--}}
        {{--toastr.options.progressBar = false;--}}
        {{--toastr.options.positionClass = "toast-bottom-right";--}}
        {{--toastr.success("{{ Session::get('message') }}", {timeOut: 4000})--}}

        Swal.fire({
            {{--position: 'top-end',--}}
            {{--type: 'success',--}}
            {{--title: '{{ Session::get('success') }}',--}}
            {{--showConfirmButton: false,--}}
            {{--timer: 3000--}}

            // 'Good job!',
            // 'You clicked the button!',
            // 'success'

            type: 'success',
            title: 'Successful!',
            text: '{{ Session::get('success') }}',
            // footer: '<a href>Why do I have this issue?</a>'
        })
    </script>
@endif

@yield('js')
</body>

<!-- Mirrored from amentotech.com/htmls/jobforest/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 09:45:31 GMT -->
</html>