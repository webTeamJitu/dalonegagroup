<?php /* Template Name: AboutUsTemplate */ ?>

<?php
get_header();
?>
    <style>
        .blue{
            background-color: #22377D;
            box-shadow: 0.3125em 0.3125em #009fe3;
        }
        .white{
            color: white;
            line-height: 2em;
        }
        .portfolio-item img{
            margin:none;
        }
        .portfolio-item:hover{
            cursor: pointer;
        }
        .team-img2-over{
            position: relative;
            /*border:0.5em solid #22377D;*/
            transition: .5s ease;

        }
        .team-img2-over:hover{
            /* border:0.5em solid #008CBA; */
            transition: .5s ease;
            /* width: 100%; */
            transform: translateY(-10px);
        }
        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color: #000000c4;
            transition: 1s;
        }
        .team-img-sm{
            margin: 0px;
        }
        .portfolio-item:hover .overlay {
        opacity: 1;
        }

        .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
        }



        .service-wrapperr {
	position: relative;
	border: 1px solid #f9f9f9;
	border-radius: 5px;
	padding: 0 15px 10px 15px;
	z-index: 1;
	/*margin: 40px 10px 0 10px;*/
}

.service-wrapperr:before,
.service-wrapperr:after {
	content: '';
	position: absolute;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -1;
}

.service-wrapperr:before{
	width: 100%;
	height: 100%;
	border-left: 2px solid #007adf;
	border-right: 2px solid #007adf;
	border-radius: 5px;
	transform: scale(1, 0);
	-webkit-transform: scale(1, 0);
	transition: transform 0.3s linear;
	transition-delay: 0.2s;
}

.service-wrapperr:after{
	width: 0;
	border-bottom: 2px solid #007adf;
	border-top: 2px solid #007adf;
	border-radius: 5px;
	transition: .25s ease-in-out;
	transition-delay: 0.1s;
}

.service-wrapperr:hover:before,
.service-wrapperr:focus:before {
	transform: scale(1);
	cursor: pointer;
}

.service-wrapperr:hover:after,
.service-wrapperr:focus:after{
	width: 100%;
	cursor: pointer;
}



    </style>


<!--begin breadcrumb-wrapper-->
<div class="breadcrumb-wrapper">

<div class="breadcrumb-wrapper-overlay"></div>

<!--begin container -->
<div class="container">
    
    <!--begin row -->
    <div class="row">
          
        <!--begin col-xs-6 -->
        <div class="col-xs-6">
        
            <h2 class="page-title white">Our Team</h2>
            
        </div>
        <!--end col-xs-6 -->

        <!--begin col-xs-6 -->
        <div class="col-xs-6 text-right">
        
            <ol class="breadcrumb white">
              <li><a href="" class="white">Home</a></li>
              <li>Our Team</li>
            </ol>

        </div>
        <!--end col-xs-6 -->

    </div>
    <!--end row -->
    
</div>
<!--end container -->

</div>
<!--end breadcrumb-wrapper-->     


<!--begin team -->
<section class="section-white">
        
        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-12-->
                <div class="col-md-12 text-center margin-bottom-20">
              
                    <p class="section-subtitle">The Dahlonega Group is an experienced team of operational experts and experienced investors focused on driving value for shareholders. The team brings a deep knowledge and strong track record of successful transactions.</p>
                    <p class="section-subtitle">The Dahlonega Group: </p>
                    <ul>
                    <li>Has over 20+ years of C-Level operations & M&A</li>
                    <li>Owns a consistent track record of substantial returns to shareholders</li>
                    <li>Holds a history of complex international transactions</li>
                    <li>Delivers rapid transition capabilities with divestitures</li>
                    </ul>

                </div>
                <!--end col-md-12-->
            </div>

            <!--end row-->
             
            <!--begin row-->
            <div class="row">
                <!--begin portfolio-items-->
                <ul class="portfolio-items list-unstyled" id="grid">
          
                    <!--begin team-item -->
                    <li class="col-md-4 col-sm-4 col-xs-12 team-item-white" data-toggle="modal" data-target=".bd-justin-modal-lg" id="openModalBtn" value="Open Modal">

                        <figure class="portfolio-item">
                            <div class="service-wrapperr">
                                <div class="team-img2-over">
                                
                                    <img src="<?php bloginfo('template_directory');?>/images/justin.png" class="team-img-sm" alt="pic">
                                    <div class="overlay">
                                        <div class="text">Read More</div>
                                    </div>
    
                                </div>
                            </div>

                            <h3>JUSTIN RIRIE</h3>
                            
                            <div class="team-info-white"><p>Managing Partner</p></div>

                            <p>Mr. Ririe has been operating and investing in a wide range of companies at all levels including logistics, information management, software and technologies, precision industrial fabrication ...</p>
                        
                            

                        </figure>    
                        
                    </li>
                    <!--end team-item -->

                    <!--begin team-item -->
                    <li class="col-md-4 col-sm-4 col-xs-12 team-item-white" data-toggle="modal" data-target=".bd-ben-modal-lg" >

                        <figure class="portfolio-item">
                            <div class="service-wrapperr">
                                <div class="team-img2-over">
                                
                                    <img src="<?php bloginfo('template_directory');?>/images/ben.png" class="team-img-sm" alt="pic">
                                    <div class="overlay">
                                        <div class="text">Read More</div>
                                    </div>
    
                                </div>
                            </div>

                            <h3>BEN NICHOLSON</h3>

                            <div class="team-info-white"><p>Managing Partner</p></div>

                            <p>Mr. Nicholson has been leading accounting/finance and investing in a wide range of companies at all levels including logistics, information management, software and technologies, precision ...                        
                            

                        </figure>    
                        
                    </li>
                    <!--end team-item -->
                    
                    <!--begin team-item -->
                    <li class="col-md-4 col-sm-4 col-xs-12 team-item-white" data-toggle="modal" data-target=".bd-charles-modal-lg" id="openModalBtn" value="Open Modal">

                        <figure class="portfolio-item">
                            <div class="service-wrapperr">
                                <div class="team-img2-over">
                                
                                    <img src="<?php bloginfo('template_directory');?>/images/charles.png" class="team-img-sm" alt="pic">
                                    <div class="overlay">
                                        <div class="text">Read More</div>
                                    </div>
    
                                </div>
                            </div>

                            <h3>CHARLES WELLS</h3>

                            <div class="team-info-white"><p>Operating Partner</p></div>

                            <p>Mr. Wells joined The Dahlonega Group during its founding in 2021. Prior to joining The Dahlonega Group, Mr. Wells held several leadership roles in technology and information management ...                        
                            

                        </figure>    
                        
                    </li>
                    <!--end team-item -->

                    <!--begin team-item -->
                    <li class="col-md-4 col-sm-4 col-xs-12 team-item-white" data-toggle="modal" data-target=".bd-lance-modal-lg">

                        <figure class="portfolio-item">
                            <div class="service-wrapperr">
                                <div class="team-img2-over">
                                
                                    <img src="<?php bloginfo('template_directory');?>/images/lance.png" class="team-img-sm" alt="pic">
                                    <div class="overlay">
                                        <div class="text">Read More</div>
                                    </div>
    
                                </div>
                            </div>

                            <h3>LANCE MARSHALL</h3>

                            <div class="team-info-white"><p>Vice President, Commercial Operations</p></div>

                            <p>Mr. Marshall joined The Dahlonega Group in March 2022 as VP of Commercial Operations. Mr. Marshall brings over a decade of leadership experience across multiple industries ...                        
                            

                        </figure>    
                        
                    </li>
                    <!--end team-item -->

                    <!--begin team-item -->
                    <li class="col-md-4 col-sm-4 col-xs-12 team-item-white" data-toggle="modal" data-target=".bd-dan-modal-lg">

                        <figure class="portfolio-item">
                            <div class="service-wrapperr">
                                <div class="team-img2-over">
                                
                                    <img src="<?php bloginfo('template_directory');?>/images/mansil.jpg" class="team-img-sm" alt="pic">
                                    <div class="overlay">
                                        <div class="text">Read More</div>
                                    </div>
    
                                </div>
                            </div>

                            <h3>DAN HOOVER</h3>

                            <div class="team-info-white"><p>Operating Partner</p></div>

                            <p></p>
                        </figure>    
                        
                    </li>
                    <!--end team-item -->


                    <!--begin team-item -->
                    <li class="col-md-4 col-sm-4 col-xs-12 team-item-white" data-toggle="modal" data-target=".bd-jenna-modal-lg">

                        <figure class="portfolio-item">
                            <div class="service-wrapperr">
                                <div class="team-img2-over">
                                
                                    <img src="<?php bloginfo('template_directory');?>/images/womansil.jpg" class="team-img-sm" alt="pic">
                                    <div class="overlay">
                                        <div class="text">Read More</div>
                                    </div>
    
                                </div>
                            </div>

                            <h3>JENNA FLUMERFELT</h3>

                            <div class="team-info-white"><p>Vice President, Investor Relations</p></div>

                            <p>Mrs. Flumerfelt joined the group as the VP of an industrial manufacturing portfolio company and as an investor in 2022.  She has taken the role of VP Investor Relationsfor TDG – in this capacity, ...</p>
                        </figure>    
                        
                    </li>
                    <!--end team-item -->


                    <!--begin team-item -->
                    <li class="col-md-4 col-sm-4 col-xs-12 team-item-white" data-toggle="modal" data-target=".bd-dusty-modal-lg">

                        <figure class="portfolio-item">
                            <div class="service-wrapperr">
                                <div class="team-img2-over">
                                
                                    <img src="<?php bloginfo('template_directory');?>/images/mansil.jpg" class="team-img-sm" alt="pic">
                                    <div class="overlay">
                                        <div class="text">Read More</div>
                                    </div>
    
                                </div>
                            </div>

                            <h3>DUSTY ALVES</h3>

                            <div class="team-info-white"><p>Vice President, Investor Relations</p></div>

                            <p>Mr. Alves joined the Dahlonega Group in June of 2022 as the Director of Client Relations & Sales Operations. In this role, Mr. Alves directs acquisition opportunities, organic and inorganic growth ...</p>
                        </figure>    
                        
                    </li>
                    <!--end team-item -->

                </ul>
                <!--begin sorting-items-->    
            
            </div>
            <!--end row-->

            <!--Modal start-->
            <div class="modal fade bd-justin-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content col-md-12" >
                    <div class="col-md-4 blue"> 
        
                        <img src="<?php bloginfo('template_directory');?>/images/justin.png" class="width-100 padding-bottom-20 padding-top-20" alt="pic"> 

                        <h4 class="white">JUSTIN RIRIE</h4>

                        <ul>
                            <li class="bold white">Education</li>
                            <li class="white">Mr. Ririe received an MBA from the J Mack Robinson School at Georgia State University and a BA from Utah State University.</li>
                        </ul>
                    </div> 

                    <div class="col-md-8 padding-bottom-20">


                        <p class="bold padding-top-10" >Experience</p>

                        <p>
                            Mr. Ririe has been operating and investing in a wide range of companies at all levels including logistics, information management, software and technologies, precision industrial fabrication and residential/commercial plumbing installation services. He has been responsible for sourcing, executing, and growing investments and serving on boards of operational and portfolio companies.
                        </p>

                        <p>
                            Prior to founding The Dahlonega Group, Mr. Ririe was President and CEO of EcoDigital, a global software platform focused on the media and entertainment industry, where he led the divestiture from Oracle and successfully guided the company to financial and operational success as a stand-alone entity. Mr. Ririe oversaw the gainful exit to Genstar Capital. 
                        </p>

                        <p>
                            Before his time with EcoDigital, Mr. Ririe was President and CEO of Arkive and led the complex international divestiture from Iron Mountain. He led Arkive across all functional areas to financial and operational success as an independent company. Arkive completed multiple add-on acquisitions and developed proprietary products that doubled the value of the company. Mr. Ririe sourced and oversaw the successful exit to Berkshire Partner’s Access Information Management.   
                        </p>

                        <p>
                            Mr. Ririe has served in the United States Army’s active and reserve components for 21 years.  His service included Escort Duties to the President of the United States, operational tours to Iraq and Afghanistan, and rescue/recovery operations at the 9/11 sites. 
                        </p>

                    </div>
                  </div>
                </div>
            </div>
            <!--Modal One-->

            <!--Modal start-->
            <div class="modal fade bd-charles-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content col-md-12" >
                    <div class="col-md-4 blue"> 

                        <img src="<?php bloginfo('template_directory');?>/images/charles.png" class="width-100 padding-bottom-20 padding-top-20" alt="pic"> 

                        <h4 class="white">CHARLES WELLS</h4>

                        <ul>
                            <li class="bold white">Education</li>
                            <li class="white">Mr. Wells received an MBA from the J Mack Robinson School at Georgia State University and a two BAs from Kennesaw State University.</li>
                        </ul>
                    </div> 

                    <div class="col-md-8 padding-bottom-20">


                        <p class="bold padding-top-10" >Experience</p>

                        <p>
                        Mr. Wells joined The Dahlonega Group during its founding in 2021. Prior to joining The Dahlonega Group, Mr. Wells held several leadership roles in technology and information management industries, most recently as Chief Revenue Officer of THH. During his tenure in sales and marketing operations, Mr. Wells provided leadership for sales domestically and internationally, multi-market business strategy, and brand development. At THH, an IT services and software development company, he successfully provided business development and strategic partnership growth, brand development, and transition oversight and executive management over a recently acquired business through a partnership between THH and The Dahlonega Group.
                        </p>

                        <p>
                        Before his time at THH, he was Vice President of Sales at EcoDigital, a global software platform focused on the media & entertainment industry, where he was an integral role on creating a standalone entity during the divestiture from Oracle and driving revenue and growth across North and South America. He launched multiple sales management processes and CRM tools for the company, oversaw and grew the Americas sales division, expanded strategic partnership relationships, and drove revenue results surpassing goals.
                        </p>

                    </div>
                  </div>
                </div>
            </div>
            <!--Modal two-->

            <!--Modal start-->
            <div class="modal fade bd-ben-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg"  id="openModal3" data-modalorder=3>
                  <div class="modal-content col-md-12" >
                    <div class="col-md-4 blue"> 

                        <img src="<?php bloginfo('template_directory');?>/images/ben.png" class="width-100 padding-bottom-20 padding-top-20" alt="pic"> 

                        <h4 class="white">BEN NICHOLSON</h4>

                        <ul>
                            <li class="bold white">Education</li>
                            <li class="white">Mr. Nicholson received his Masters of Accounting and BA from the Terry College at University of Georgia.  Mr. Nicholson is a licensed CPA</li>
                        </ul>
                    </div> 

                    <div class="col-md-8 padding-bottom-20">


                        <p class="bold padding-top-10" >Experience</p>

                        <p>
                         Mr. Nicholson has been leading accounting/finance and investing in a wide range of companies at all levels including logistics, information management, software and technologies, precision industrial fabrication and residential/commercial plumbing installation services. He has been responsible for sourcing, executing, and growing investments and serving on boards of operational and portfolio companies.
                        </p>

                        <p>
                        Prior to founding The Dahlonega Group Mr. Nicholson was CFO of EcoDigital, an international software platform focused on the Entertainment and Media industry, where he led the divestiture from Oracle and led the transition to a stand-alone entity. Mr. Nicholson led all back-office services including accounting, finance, HR and legal and led the financial success of the company.  Mr. Nicholson oversaw the gainful exit to Genstar Capital.    
                        </p>

                        <p>
                        Prior to his role at EcoDigital, Mr. Nicholson was CFO of Arkive and led the complex international divestiture from Iron Mountain. He led Arkive across all functional areas starting with the transition and development of all back-office functions moving to an independent company. Arkive completed multiple add on acquisitions and developed proprietary products that doubled the value of the company. Mr. Nicholson oversaw the successful exit to Berkshire Partner’s Access Information Management.   
                        </p>
                    </div>
                  </div>
                </div>
            </div>
            <!--Modal Three-->

            <!--Modal start-->
            <div class="modal fade bd-lance-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg"  id="openModal4" data-modalorder=4>
                  <div class="modal-content col-md-12" >
                    <div class="col-md-4 blue"> 

                        <img src="<?php bloginfo('template_directory');?>/images/lance.png" class="width-100 padding-bottom-20 padding-top-20" alt="pic"> 

                        <h4 class="white">LANCE MARSHALL</h4>

                        <ul>
                            <li class="bold white">Education</li>
                            <li class="white">Mr. Marshall graduated with honors from the University of Georgia in 2008 and earned a Master of Business Administration degree from Emory University’s Goizueta Business School in 2015.</li>
                        </ul>
                    </div> 

                    <div class="col-md-8 padding-bottom-20">


                        <p class="bold padding-top-10" >Experience</p>

                        <p>
                            Mr. Marshall joined The Dahlonega Group in March 2022 as VP of Commercial Operations. Mr. Marshall brings over a decade of leadership experience across multiple industries, including healthcare administration, management consulting, and combat operations as a Marine Corps Officer.
                        </p>

                        <p>
                            Prior to founding The Dahlonega Group, Mr. Ririe was President and CEO of EcoDigital, a global software platform focused on the media and entertainment industry, where he led the divestiture from Oracle and successfully guided the company to financial and operational success as a stand-alone entity. Mr. Ririe oversaw the gainful exit to Genstar Capital. 
                        </p>

                        <p>
                            Before his time with Emory Healthcare, Mr. Marshall was a Senior Management Consultant for Booz Allen Hamilton. In this role, he provided expertise in supply management supporting the network of delivering products and services across the entire supply chain, from raw materials to end customers. Mr. Marshall effectively designed, planned, and executed supply chain activities to leverage worldwide logistics and synchronize supply with demand. 
                        </p>

                        <p>
                        Mr. Marshall served in the United States Marine Corps’ active and reserve components for 14 years.  His service included operational tours to Afghanistan and humanitarian assistance / disaster relief in the Pacific. 
                        </p>

                    </div>
                  </div>
                </div>
            </div>
            <!--Modal Four-->


            <!--Modal start-->
            <div class="modal fade bd-jenna-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg"  id="openModal6" data-modalorder=6>
                  <div class="modal-content col-md-12" >
                    <div class="col-md-4 blue"> 

                        <img src="<?php bloginfo('template_directory');?>/images/womansil.jpg" class="width-100 padding-bottom-20 padding-top-20" alt="pic"> 

                        <h4 class="white">JENNA FLUMERFELT</h4>

                        <ul>
                            <li class="bold white">Education</li>
                            <li class="white">Mrs. Flumerfelt attended Yakima Valley Community College. </li>
                        </ul>
                    </div> 

                    <div class="col-md-8 padding-bottom-20">


                        <p class="bold padding-top-10" >Experience</p>

                        <p>
                            Mrs. Flumerfelt joined the group as the VP of an industrial manufacturing portfolio company and as an investor in 2022.  She has taken the role of VP Investor Relations for TDG – in this capacity, she manages communication and sourcing for existing and future limited partners.  She brings over 16 years of executive sales management and operational experience in commercial construction and industrial manufacturing. 
                        </p>

                        <p>
                            Prior to joining The Dahlonega Group, she was the Co-Founder and VP of Precision Industrial Equipment where she managed all back-office functions and oversaw extensive daily operations in manufacturing.  She led the company from inception to a global project management firm and manufacturer of food processing equipment to the largest mass food producing and distribution companies in the world. She oversaw the financial success of the company which tripled in enterprise value. 
                        </p>

                        <p>
                            Mrs. Flumerfelt formerly worked for United Rentals where she managed multiple profit centers and an equipment fleet in excess of $20 million. She held progressively larger roles including regional and national books of business in excess of $25 million. She has extensive experience with global clients in multiple verticals and has supported and sourced dozens of $100 million construction projects.
                        </p>
                    </div>
                  </div>
                </div>
            </div>
            <!--Modal Six-->

            <!--Modal start-->
            <div class="modal fade bd-dusty-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg"  id="openModal7" data-modalorder=7>
                  <div class="modal-content col-md-12" >
                    <div class="col-md-4 blue"> 

                        <img src="<?php bloginfo('template_directory');?>/images/mansil.jpg" class="width-100 padding-bottom-20 padding-top-20" alt="pic"> 

                        <h4 class="white">DUSTY ALVES</h4>

                        <ul>
                            <li class="bold white">Education</li>
                            <li class="white">Mr. Alves received a BA in Telecommunications and General Studies from the University of Nebraska - Kearney.</li>
                        </ul>
                    </div> 

                    <div class="col-md-8 padding-bottom-20">


                        <p class="bold padding-top-10" >Experience</p>

                        <p>
                            Mr. Alves joined the Dahlonega Group in June of 2022 as the Director of Client Relations & Sales Operations.  In this role, Mr. Alves directs acquisition opportunities, organic and inorganic growth of our portfolio companies, client relations, and business development.
                        </p>

                        <p>
                            Prior to joining the Dahlonega Group, Mr. Alves was the Director of Client Relations of EcoDigital, an industry leader in digital signage services and solutions. Before his time with EcoDigital, Mr. Alves was the Manager of Inside Sales at Oracle and Front Porch Digital. During his tenure at Front Porch Digital, Oracle, and EcoDigital, he generated millions of dollars in revenue from the support renewal stream.
                        </p>

                        <p>
                            Prior to his time at Front Porch Digital, Oracle, and EcoDigital, Mr. Alves was a Video Director for multiple teams within the NFL and NCAA. Additionally, Mr. Alves served as the NFL Video Director for Super Bowl XXXII in San Diego and has served on different NFL and NCAA Video Directors boards and programs. He is currently a high school football official in the state of Colorado, a role he has enjoyed for 20 years.
                        </p>
                    </div>
                  </div>
                </div>
            </div>
            <!--Modal Seven-->

            <!--Modal End-->
        </div>
        <!--end container-->
        
    </section>
    <!--end team-->


<?php
get_footer();
?>