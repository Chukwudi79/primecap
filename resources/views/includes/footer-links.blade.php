<script src="{{asset('theme-assets/vendors/vendors.min.js')}}"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('theme-assets/vendors/flipclock/flipclock.min.js')}}"></script>
<script src="{{asset('theme-assets/vendors/swiper/js/swiper.min.js')}}"></script>
<script src="{{asset('theme-assets/vendors/particles.min.js')}}"></script>
<script src="{{asset('theme-assets/vendors/waypoints/jquery.waypoints.min.js')}}"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME JS-->
<script src="{{asset('theme-assets/js/theme.js')}}"></script>
<script src="{{asset('theme-assets/js/sales-notification.js')}}"></script>
<!-- END CRYPTO JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('theme-assets/js/scripts/particles-type1.js')}}"></script>

<script>
    $(document).ready(function(){
        let myCurr = localStorage.getItem("myCurrency");
        if(myCurr.length){
        $('.currency_symbol').text(myCurr);
        }
        else{
        $('.currency_symbol').text('$');
        }
    });


    $('.currencyChange').on('click', function(e){
        e.preventDefault();
        localStorage.setItem("myCurrency", $(this).data('value'));
        
        let myCurr = localStorage.getItem("myCurrency");
        $('.myCurrency').text(myCurr);
    });
</script>