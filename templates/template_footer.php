<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="<?php echo base_url(); ?>assets/js/easing.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/hoverIntent.js"></script>
<script src="<?php echo base_url(); ?>assets/js/superfish.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
<script> src="<?php echo base_url(); ?>assets/js/main.js"</script>
<script src="<?php echo base_url(); ?>assets/js/mail-script.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
    (function(d,s,id)
    {
        var js, fjs = d.getElementsByTagName(s)[0];
        if(d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "http://connect.facebook.net/es_ES/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    window.fbAsyncInit = function()
    {
        FB.init({
            appId    : '1821980271233259',
            cookie   : true,
            xfbml    : true,
            version  : 'v2.0'
        });
    }
</script>