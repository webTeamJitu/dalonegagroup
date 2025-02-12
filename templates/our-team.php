<?php
/* Template Name: OurTeamTemplate */ 
get_header();
?>
    <style>
        .team-ed {
            list-style: none;
        }

        .linksin {
            vertical-align: middle;
            height: 50px;
            width: 50px;
            background: #22377D;
            color: white;
            font-size: x-large;
            padding-top: 10px;
            `
        }

        .team-info-whites p {
            color: white;
            font-style: italic;
        }

        .titls {
            margin-bottom: -2px;
        }

        .close-btns {
            display: flex;
        }

        .close {
            margin-left: 450px;
        }

        .blue {
            background-color: #22377D;
            left: -15px;
            padding-bottom: 4em;
        }

        .white {
            color: white;
        }

        .portfolio-item img {
            margin: none;
        }

        .portfolio-item:hover {
            cursor: pointer;
        }

        .team-img2-over {
            position: relative;
            /*border:0.5em solid #22377D;*/
            transition: .5s ease;

        }

        .team-img2-over:hover {
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

        .team-img-sm {
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

        .service-wrapperr:before {
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

        .service-wrapperr:after {
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
        .service-wrapperr:focus:after {
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
                        <li><a href="	
                    <?php echo get_home_url(); ?>" class="white">Home</a></li>
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
                <div class="col-md-12 text-left margin-bottom-20">

                    <p class="section-subtitle">The Dahlonega Group is an experienced team of operational experts and experienced investors focused on driving value for shareholders. The team brings a deep knowledge and strong track record of successful transactions.</p>
                    <p class="section-subtitle">The Dahlonega Group: </p>
                    <ul style="    padding-left: 20px;">
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
                    <li class="col-md-4 col-sm-4 col-xs-12 team-item-white">

                        <figure class="portfolio-item">
                            <div class="service-wrapperr" data-toggle="modal" data-target=".bd-justin-modal-lg" id="openModalBtn" value="Open Modal">
                                <div class="team-img2-over">

                                    <img src="<?php bloginfo('template_directory'); ?>/images/JustinRirie.jpg" class="team-img-sm" alt="pic">
                                    <div class="overlay">
                                        <div class="text">Read More</div>
                                    </div>

                                </div>
                            </div>

                            <h3>JUSTIN RIRIE</h3>

                            <div class="team-info-white">
                                <p>Managing Director</p>
                            </div>
                            <a href="https://www.linkedin.com/in/justin-ririe-4286b523/" target=”_blank”>
                                <i class="icon icon-linkedin linksin"></i>
                            </a>

                        </figure>

                    </li>
                    <!--end team-item -->

                    <!--begin team-item -->
                    <li class="col-md-4 col-sm-4 col-xs-12 team-item-white">

                        <figure class="portfolio-item">
                            <div class="service-wrapperr" data-toggle="modal" data-target=".bd-ben-modal-lg">
                                <div class="team-img2-over">

                                    <img src="<?php bloginfo('template_directory'); ?>/images/BenNicholson.jpg" class="team-img-sm" alt="pic">
                                    <div class="overlay">
                                        <div class="text">Read More</div>
                                    </div>

                                </div>
                            </div>

                            <h3>BEN NICHOLSON</h3>

                            <div class="team-info-white">
                                <p>Managing Partner</p>
                            </div>
                            <a href="https://www.linkedin.com/in/bennicholsoncpa/" target=”_blank”>
                                <i class="icon icon-linkedin linksin"></i>
                            </a>
                        </figure>

                    </li>
                    <!--end team-item -->

                    <!--begin team-item -->
                    <li class="col-md-4 col-sm-4 col-xs-12 team-item-white">

                        <figure class="portfolio-item">
                            <div class="service-wrapperr" data-toggle="modal" data-target=".bd-charles-modal-lg" id="openModalBtn" value="Open Modal">
                                <div class="team-img2-over">

                                    <img src="<?php bloginfo('template_directory'); ?>/images/CharlesWells.jpg" class="team-img-sm" alt="pic">
                                    <div class="overlay">
                                        <div class="text">Read More</div>
                                    </div>

                                </div>
                            </div>

                            <h3>CHARLES WELLS</h3>

                            <div class="team-info-white">
                                <p>Operating Partner</p>
                            </div>
                            <a href="https://www.linkedin.com/in/charles-wells19/" target=”_blank”>
                                <i class="icon icon-linkedin linksin"></i>
                            </a>
                        </figure>

                    </li>
                    <!--end team-item -->

                    <!--begin team-item -->
                    <li class="col-md-4 col-sm-4 col-xs-12 team-item-white">

                        <figure class="portfolio-item">
                            <div class="service-wrapperr" data-toggle="modal" data-target=".bd-lance-modal-lg">
                                <div class="team-img2-over">

                                    <img src="<?php bloginfo('template_directory'); ?>/images/LanceMarshall.jpg" class="team-img-sm" alt="pic">
                                    <div class="overlay">
                                        <div class="text">Read More</div>
                                    </div>

                                </div>
                            </div>

                            <h3>LANCE MARSHALL</h3>

                            <div class="team-info-white">
                                <p>Vice President, Commercial Operations</p>
                            </div>
                            <a href="https://www.linkedin.com/in/lbmarshall/" target=”_blank”>
                                <i class="icon icon-linkedin linksin"></i>
                            </a>
                        </figure>

                    </li>
                    <!--end team-item -->




                    <!--begin team-item -->
                    <li class="col-md-4 col-sm-4 col-xs-12 team-item-white">

                        <figure class="portfolio-item">
                            <div class="service-wrapperr" data-toggle="modal" data-target=".bd-dusty-modal-lg">
                                <div class="team-img2-over">

                                    <img src="<?php bloginfo('template_directory'); ?>/images/DustyAlves.jpg" class="team-img-sm" alt="pic">
                                    <div class="overlay">
                                        <div class="text">Read More</div>
                                    </div>

                                </div>
                            </div>

                            <h3>DUSTY ALVES</h3>

                            <div class="team-info-white">
                                <p>Director, Client Relations & Sales Operations</p>
                            </div>

                            <a href="https://www.linkedin.com/in/dusty-alves-3a05882/" target=”_blank”>
                                <i class="icon icon-linkedin linksin"></i>
                            </a>
                        </figure>

                    </li>
                    <!--end team-item -->

                    <!--begin team-item -->
                    <li class="col-md-4 col-sm-4 col-xs-12 team-item-white">

                        <figure class="portfolio-item">
                            <div class="service-wrapperr" data-toggle="modal" data-target=".bd-robert-modal-lg" id="openModalBtn" value="Open Modal">
                                <div class="team-img2-over">

                                    <img src="<?php bloginfo('template_directory'); ?>/images/Robert.png" class="team-img-sm" alt="pic">
                                    <div class="overlay">
                                        <div class="text">Read More</div>
                                    </div>

                                </div>
                            </div>

                            <h3>ROBERT JOHNSON</h3>

                            <div class="team-info-white">
                                <p>Director of Construction & Industrial Business Development </p>
                            </div>
                            <a href="https://www.linkedin.com/in/robert-johnson-070995309/" target=”_blank”>
                                <i class="icon icon-linkedin linksin"></i>
                            </a>

                        </figure>

                    </li>
                    <!--end team-item -->

                    <!--begin team-item -->
                    <li class="col-md-4 col-sm-4 col-xs-12 team-item-white">

                        <figure class="portfolio-item">
                            <div class="service-wrapperr" data-toggle="modal" data-target=".bd-anissa-modal-lg" id="openModalBtn" value="Open Modal">
                                <div class="team-img2-over">

                                    <img src="<?php bloginfo('template_directory'); ?>/images/Anisa.png" class="team-img-sm" alt="pic">
                                    <div class="overlay">
                                        <div class="text">Read More</div>
                                    </div>

                                </div>
                            </div>

                            <h3>ANISSA CAPPS</h3>

                            <div class="team-info-white">
                                <p>Marketing & Sales Manager</p>
                            </div>
                            <a href="https://www.linkedin.com/in/anissa-capps/" target=”_blank”>
                                <i class="icon icon-linkedin linksin"></i>
                            </a>

                        </figure>

                    </li>
                    <!--end team-item -->

                </ul>
                <!--begin sorting-items-->

            </div>
            <!--end row-->

            <!--Modal start-->
            <div class="modal fade bd-justin-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content col-md-12">
                        <div class="col-md-4 blue">

                            <img src="<?php bloginfo('template_directory'); ?>/images/JustinRirie.jpg" class="width-100 padding-bottom-20 padding-top-20" alt="pic">

                            <h4 class="white titls">JUSTIN RIRIE</h4>
                            <div class="team-info-whites">
                                <p>Managing Director</p>
                            </div>

                            <ul class="team-ed">
                                <li class="bold white">Education</li>

                                <li class="white">Mr. Ririe received an MBA from the J Mack Robinson School at Georgia State University and a BA from Utah State University.</li>
                            </ul>
                        </div>

                        <div class="col-md-8 padding-bottom-20">

                            <div class="close-btns">
                                <p class="bold padding-top-10">Experience</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

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
                                Mr. Ririe has served in the United States Army’s active and reserve components for 21 years. His service included Escort Duties to the President of the United States, operational tours to Iraq and Afghanistan, and rescue/recovery operations at the 9/11 sites.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <!--Modal One-->

            <!--Modal start-->
            <div class="modal fade bd-charles-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content col-md-12">
                        <div class="col-md-4 blue">

                            <img src="<?php bloginfo('template_directory'); ?>/images/CharlesWells.jpg" class="width-100 padding-bottom-20 padding-top-20" alt="pic">

                            <h4 class="white titls">CHARLES WELLS</h4>
                            <div class="team-info-whites">
                                <p>Operating Partner</p>
                            </div>

                            <ul class="team-ed">
                                <li class="bold white">Education</li>
                                <li class="white">Mr. Wells received an MBA from the J Mack Robinson School at Georgia State University and a two BAs from Kennesaw State University.</li>
                            </ul>
                        </div>

                        <div class="col-md-8 padding-bottom-20">

                            <div class="close-btns">
                                <p class="bold padding-top-10">Experience</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

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
                <div class="modal-dialog modal-lg modal-dialog-centered" id="openModal3" data-modalorder=3>
                    <div class="modal-content col-md-12">
                        <div class="col-md-4 blue">

                            <img src="<?php bloginfo('template_directory'); ?>/images/BenNicholson.jpg" class="width-100 padding-bottom-20 padding-top-20" alt="pic">

                            <h4 class="white titls">BEN NICHOLSON</h4>
                            <div class="team-info-whites">
                                <p>Managing Director</p>
                            </div>

                            <ul class="team-ed">
                                <li class="bold white">Education</li>
                                <li class="white">Mr. Nicholson received his Masters of Accounting and BA from the Terry College at University of Georgia. Mr. Nicholson is a licensed CPA</li>
                            </ul>
                        </div>

                        <div class="col-md-8 padding-bottom-20">

                            <div class="close-btns">
                                <p class="bold padding-top-10">Experience</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <p>
                                Mr. Nicholson has been leading accounting/finance and investing in a wide range of companies at all levels including logistics, information management, software and technologies, precision industrial fabrication and residential/commercial plumbing installation services. He has been responsible for sourcing, executing, and growing investments and serving on boards of operational and portfolio companies.
                            </p>

                            <p>
                                Prior to founding The Dahlonega Group Mr. Nicholson was CFO of EcoDigital, an international software platform focused on the Entertainment and Media industry, where he led the divestiture from Oracle and led the transition to a stand-alone entity. Mr. Nicholson led all back-office services including accounting, finance, HR and legal and led the financial success of the company. Mr. Nicholson oversaw the gainful exit to Genstar Capital.
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
                <div class="modal-dialog modal-lg modal-dialog-centered" id="openModal4" data-modalorder=4>
                    <div class="modal-content col-md-12">
                        <div class="col-md-4 blue">

                            <img src="<?php bloginfo('template_directory'); ?>/images/LanceMarshall.jpg" class="width-100 padding-bottom-20 padding-top-20" alt="pic">

                            <h4 class="white titls">Lance Marshall</h4>
                            <div class="team-info-whites">
                                <p>Vice President, Commercial Operations</p>
                            </div>

                            <ul class="team-ed">
                                <li class="bold white">Education</li>
                                <li class="white">Mr. Marshall graduated with honors from the University of Georgia in 2008 and earned a Master of Business Administration degree from Emory University’s Goizueta Business School in 2015.</li>
                            </ul>
                        </div>

                        <div class="col-md-8 padding-bottom-20">

                            <div class="close-btns">
                                <p class="bold padding-top-10">Experience</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <p>
                                Mr. Marshall joined The Dahlonega Group in March 2022 as VP of Commercial Operations. Mr. Marshall brings over a decade of leadership experience across multiple industries, including healthcare administration, management consulting, and International Intelligence Operations as a Marine Corps Officer. </p>
                            <p>
                                Prior to joining The Dahlonega Group, Mr. Marshall was an executive for Emory Healthcare Surgical Centers, where he led all personnel, operations, and finances for The Emory Clinic’s most prolific business units. He successfully led multiple complex acquisitions of ambulatory surgery centers throughout the Southeast United States. </p>
                            <p>
                                Before his time with Emory Healthcare, Mr. Marshall was a Senior Management Consultant for Booz Allen Hamilton. In this role, he provided expertise in supply chain management supporting the network of mass product delivery and services across the entire global supply chain, from raw materials to endpoint customers. </p>
                            <p>
                                Mr. Marshall served in the United States Marine Corps’ active and reserve components for 14 years. His service included operational tours to Afghanistan and humanitarian assistance / disaster relief in the Pacific.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <!--Modal Four-->




            <!--Modal start-->
            <div class="modal fade bd-dusty-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" id="openModal7" data-modalorder=7>
                    <div class="modal-content col-md-12">
                        <div class="col-md-4 blue">

                            <img src="<?php bloginfo('template_directory'); ?>/images/DustyAlves.jpg" class="width-100 padding-bottom-20 padding-top-20" alt="pic">

                            <h4 class="white titls">DUSTY ALVES</h4>
                            <div class="team-info-whites">
                                <p>Director of Client Relations & Sales Operations</p>
                            </div>

                            <ul class="team-ed">
                                <li class="bold white">Education</li>
                                <li class="white">Mr. Alves received a BA in Telecommunications and General Studies from the University of Nebraska - Kearney.</li>
                            </ul>
                        </div>

                        <div class="col-md-8 padding-bottom-20">

                            <div class="close-btns">
                                <p class="bold padding-top-10">Experience</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <p>
                                Mr. Alves joined the Dahlonega Group in June of 2022 as the Director of Client Relations & Sales Operations. In this role, Mr. Alves directs acquisition opportunities, organic and inorganic growth of our portfolio companies, client relations, and business development.
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

            <!--Modal start-->
            <div class="modal fade bd-robert-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" id="openModal7" data-modalorder=7>
                    <div class="modal-content col-md-12">
                        <div class="col-md-4 blue">

                            <img src="<?php bloginfo('template_directory'); ?>/images/Robert.png" class="width-100 padding-bottom-20 padding-top-20" alt="pic">

                            <h4 class="white titls">ROBERT JOHNSON</h4>
                            <div class="team-info-whites">
                                <p>Director of Construction & Industrial Business Development </p>
                            </div>

                            <ul class="team-ed">
                                <li class="bold white">Education</li>
                                <li class="white">Mr. Johnson holds a degree in Building Technology from New Castle School of Trade.</li>
                            </ul>
                        </div>

                        <div class="col-md-8 padding-bottom-20">

                            <div class="close-btns">
                                <p class="bold padding-top-10">Experience</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <p>
                                Mr. Johnson joined The Dahlonega Group in February of 2024 as the Director of Construction Business Development. His responsibilities include securing and developing new construction business for our portfolio companies and overseeing all construction business development operations. He will also facilitate the bidding process for all our construction business.

                            <p>
                                Prior to joining The Dahlonega Group, Mr. Johnson was the Project Superintendent for Venture Construction Company and Parkway Construction Company. He has managed projects that include restaurants, multiplex cinemas, storage facilities, and recreation centers. Mr. Johnson has also spent time as a construction company owner where he successfully grew his business handling all phases of business ownership.
                            </p>

                            <p>
                                Mr. Johnson holds a degree in Building Technology from New Castle School of Trade. He brings over a decade of knowledge in the construction industry to The Dahlonega Group. Known for his unwavering commitment to project timelines and quality, Mr. Johnson continues to contribute to the industry's advancement, leveraging his extensive experience and dynamic leadership skills. He focuses his off time with family and youth counseling.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Modal Eight-->

            <!--Modal End-->

            <!--Modal start-->
            <div class="modal fade bd-anissa-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" id="openModal7" data-modalorder=7>
                    <div class="modal-content col-md-12">
                        <div class="col-md-4 blue">

                            <img src="<?php bloginfo('template_directory'); ?>/images/Anisa.png" class="width-100 padding-bottom-20 padding-top-20" alt="pic">

                            <h4 class="white titls">ANISSA CAPPS</h4>
                            <div class="team-info-whites">
                                <p>Marketing & Sales Manager</p>
                            </div>

                            <ul class="team-ed">
                                <li class="bold white">Education</li>
                                <li class="white">Ms. Capps attended Central Washington University.</li>
                            </ul>
                        </div>

                        <div class="col-md-8 padding-bottom-20">

                            <div class="close-btns">
                                <p class="bold padding-top-10">Experience</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <p>
                                Ms. Capps joined The Dahlonega Group in June 2023 as the Marketing & Sales Manager. In this role, Ms. Capps manages social media, organizes key industry events, and creates digital and physical marketing campaigns and content.

                            <p>
                                Prior to joining The Dahlonega Group, Ms. Capps attended Central Washington University to obtain a Master’s Degree in Business Administration, specializing in Marketing and Management as well as a Minor in Digital Marketing. To put herself through college, Ms. Capps was the general manager and marketing manager at River Canyon Espresso & Eatery.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <!--Modal NINE-->

            <!--Modal End-->
        </div>
        <!--end container-->

    </section>
    <!--end team-->


    <?php
    get_footer();
    ?>