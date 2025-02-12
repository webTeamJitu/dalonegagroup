<?php /* Template Name: ContactUsTemplate */ ?>


<?php
get_header();
?>

    <!--begin breadcrumb-wrapper-->
<div class="breadcrumb-wrapper">

<div class="breadcrumb-wrapper-overlay"></div>

<!--begin container -->
<div class="container">
    
    <!--begin row -->
    <div class="row">
          
        <!--begin col-xs-6 -->
        <div class="col-xs-6">
        
            <h2 class="page-title white">Contact Us</h2>
            
        </div>
        <!--end col-xs-6 -->

        <!--begin col-xs-6 -->
        <div class="col-xs-6 text-right">
        
            <ol class="breadcrumb white">
              <li><a href="	
<?php echo get_home_url(); ?>" class="white">Home</a></li>
              <li>Contact</li>
            </ol>

        </div>
        <!--end col-xs-6 -->

    </div>
    <!--end row -->
    
</div>
<!--end container -->

</div>
<!--end breadcrumb-wrapper-->



 <!--begin blog -->
 <section class="section-white small-padding">
        
        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">

                <!--begin col-sm-6 -->
                <div class="col-sm-6 margin-bottom-50">
                
                    <h3>GET IN TOUCH</h3>
                    
                    <!--begin contact form -->
                    <?php echo do_shortcode ('[contact-form-7 id="132" title="Contact form 1"]')?>
                    <!--end contact form -->
                             
                </div>
                <!--end col-sm-6-->
                
                <!--begin col-sm-6 -->
                <div class="col-sm-6">

                    <h3>The Dahlonega Group</h3>
                    
                    <p>The Dahlonega Group was founded in 2021 and is headquartered in Atlanta, GA, with a satellite office in Seattle, WA. It is an investment firm made up of investors and operators that invest in lower middle market businesses with inherent value and untapped potential. </p>
                    <p><b>Email: info@dahlonegagroup.com </b></p>
                </div>
                <!--end col-sm-6-->
             
            </div>
            <!--end row-->
    
        </div>
        <!--end container-->
    
    </section>
    <!--end blog -->



<?php
get_footer();
?>