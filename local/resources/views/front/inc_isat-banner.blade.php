<div class="container">
    <div class="row">
        <div class="col px-0">
            <div class="isat-banner">
                <div class="flexslider">
                    <ul class="slides">
                        <li><img src="{{asset('assets/images/isat/isat-banner01.jpg')}}"></li>
                        <li><img src="{{asset('assets/images/isat/isat-banner02.jpg')}}"></li>
                        <li><img src="{{asset('assets/images/isat/isat-banner03.jpg')}}"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // Can also be used with $(document).ready()
    $(window).load(function() {
        // BANNER-SLIDE //
        $('.flexslider').flexslider({
            animation: "fade"
        });
    });
</script>