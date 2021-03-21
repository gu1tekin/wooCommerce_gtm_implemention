<?php
/**
 * @snippet       WooCommerce Google Ads Purchase Tracking with gtag.js
 * @author        Gultkein Cirik
 * @Compatible    WooCommerce 2.6.14  or Newer AND WordPress 4.1.1 or Newer
 */
  
// Implementing the GTM container <script> to <head>
add_action('wp_head', 'add_gtm_script');
    function add_gtm_script(){ ?>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-XXXX');</script>
        <!-- End Google Tag Manager -->
  <?php } 

// Implementing the GTM container <noscript> to <body>
add_action('wp_body_open', 'add_gtm_noscript');
    function add_gtm_noscript(){ ?>
	    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXX"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
<?php } ?>