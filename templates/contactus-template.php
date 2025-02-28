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



<div class="">
    
    <div class="container">

        <p style="padding: 20px 20px;">
            The Dahlonega Group was founded in 2021 and is headquartered in Atlanta, GA, with a satellite office in Seattle, WA. It is an investment firm made up of investors and operators that invest in lower middle market businesses with inherent value and untapped potential </p>

        <div class="glax_tm_main_contact_wrap">
            <div class="office_list">
                <ul class = "list_style_none">
                    <li>
                        <div class="inner">
                            <div class="image_wrap" style="border: solid #23387f;height: 220px;">
                                <div class="image" style="height: 220px; padding: 1rem;  background-size: contain;"></div>
                            </div>
                            <div class="definitions_wrap">
                                <div class="office">
                                    <h3>Atlanta, GA</h3>
                                    <div class="icon">
                                        <img class="svg"
                                            src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/svg/location.svg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="short_info_wrap">
                                    <div class="row lockflex">
                                        <p>Business Hours</p>
                                        <p>Monday - Friday</p> 
                                        <p> 8.00 Am - 4.00 Pm EST</p>
                                    </div>
                                    <!-- <div class="row">
                                        <label>Phone:</label>
                                        <span>(509) 484-6400</span>
                                    </div> -->
                                    <div class="row">
                                        <label>Email:</label>
                                        <span><a href="mailto:info@alumproducts.com">info@dahlonegagroup.com</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="mymap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212271.62991472028!2d-84.58501690610323!3d33.76727497622404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5045d6993098d%3A0x66fede2f990b630b!2sAtlanta%2C%20GA%2C%20USA!5e0!3m2!1sen!2ske!4v1740651151578!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"" width="1200" height="518" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </li>
                </ul>
            </div>


            <div class="glax_tm_contact_wrap">
                <div class="get_in_touch">
                    <h3>Get in Touch With Us</h3>
                </div>
                <div class="inner_wrap">
                    <?php echo the_content();?>


                </div>
            </div>
        </div>
    </div>
</div>



<?php
get_footer();
?>