<?php
include('../sdev305/portfolio/guestbook/includes/navheader.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes">

    <meta name="HandheldFriendly" content="true">
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barbara del Valle's Resume</title>


    <link rel="icon" type="image/png" href="../sdev305/resume/images/favicon.ico">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800);
        @media screen and (min-width: 40.5em) {
            .product-img {
                width: 50%;
                float: left;
            }
        }

        body{
            font-family: 'Open Sans', Arial, Tahoma;
            font-weight: 400;
            color: #363636;
            background: #976db5;
            width: auto;


        }

        blockquote {
            font-size: 1em;
        }

        .container{
            margin-top: 80px;
            margin-bottom: 15px;
            background: #fff;
        }

        #photo-header{
            margin-top: -75px;
            background: papayawhip;


        }
        #photo{
            width: 160px;
            height: 160px;
            border-radius: 50%;
            overflow: hidden;
            padding: 5px;
            background: #976db5;
            display: inline-block;
        }
        #photo img{
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
        #text-header h1{
            margin: 0;
            padding: 0;
            font-size: 1.5em;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: -1px;
        }
        #text-header h1::first-line{
            font-size: 1.5em;
            font-weight: 800;
            line-height: 1.5em;
        }
        #text-header h1 span{
            color: #4d3360;
            opacity: 0.7;
        }
        #text-header h1 sup{
            opacity: 0.5;
        }
        #text-header:after{
            width: 100%;
            height: 3px;

            margin-top: 15px;
            content: '';
            display: block;
        }

        .box{
            padding-bottom: 10px;
            margin-bottom: 25px;
        }
        .box h2{
            color: #3a227c;
            font-size: 1.5em;
            font-weight: 700;
            text-transform: uppercase;
        }

        #awards,
        #education{
            margin-top: 20px;
            margin-bottom: 0;
            position: relative;
            padding: 1em 0;
            list-style: none;
        }
        #awards:before,
        #education:before {
            width: 5px;
            height: 100%;
            position: absolute;
            left: 35px;
            top: 0;
            content: ' ';
            display: block;
            background: #3b325c;
            background: -moz-linear-gradient(top,  #ffffff 0%, #32475c 7%, #32475c 89%, #ffffff 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(7%,#32475c), color-stop(89%,#32475c), color-stop(100%,#ffffff));
            background: -webkit-linear-gradient(top,  #ffffff 0%,#32475c 7%,#32475c 89%,#ffffff 100%);
            background: -o-linear-gradient(top,  #ffffff 0%,#32475c 7%,#32475c 89%,#ffffff 100%);
            background: -ms-linear-gradient(top,  #ffffff 0%,#32475c 7%,#32475c 89%,#ffffff 100%);
            background: linear-gradient(to bottom,  #ffffff 0%,#32475c 7%,#32475c 89%,#ffffff 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff',GradientType=0 );
        }
        #awards li,
        #education li{
            width: 100%;
            z-index: 2;
            position: relative;
            float: left;
        }
        #awards .year,
        #education .year{

            background: #fff;
            padding: 10px;
            font-weight: 700;
            display: flex;
        }
        #awards .description,
        #education .description{
            width: 83%;
            display: inline-block;
            background: #ffefd5;
            margin-bottom: 10px;
            position: relative;
            padding: 10px;
            border-bottom: 1px solid #ccc;
            border-right: 1px solid #ccc;
        }
        #awards .description:after,
        #education .description:after {
            content: '';
            position: absolute;
            top: 15px;
            right: 0;
            left: -16px;
            height: 0;
            width: 0;
            border: solid transparent;
            border-right-color: #ffefd5;
            border-width: 8px;
            pointer-events: none;
        }
        #awards .description h3,
        #education .description h3{
            font-size: 1.2em;
            margin: 0;
            padding: 0;
            font-weight: 700;
        }
        #awards .description p,
        #education .description p{
            margin-top: 5px;
            padding: 0;
        }

        .job{
            margin-bottom: 15px;
        }
        .job .details {
            margin-left: 3%;
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            background: #ffefd5;
            border-bottom: 1px solid #ccc;
            border-right: 1px solid #ccc;
        }
        .job .where{
            font-size: 1.2em;
            font-weight: bold;
        }
        .job .year{
            opacity: 0.7;
        }
        .job .profession{
            font-size: 1.2em;
            font-weight: bold;
        }
        .job .description{
            line-height: 1.5em;
        }
        .job .highlights{
            padding: 5px 0;
            font-weight: bold;
        }
        .job .job-details {
            padding-left: 5%;
            width: 100%;
        }
        .publication {
            margin-bottom: 0;
        }
        .publication .name{
            font-size: 1em;
            font-weight: bold;
        }
        .publication .year{
            opacity: 0.7;
        }
        .publication p{
            margin: 0;
            padding-top: 10px;
        }

        .contact-item{
            width: 100%;
            float: left;

        }
        .contact-item .icon{
            padding: 10px;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            color: #38325c;
            background: #ffefd5;


        }
        .contact-item .title{
            width: 80%;
            width: calc(100% - 55px);
            font-weight: 700;
            opacity: 0.9;
        }
        .contact-item .title.only{
            margin-top: 10px;
        }
        .contact-item .description{
            width: 80%;
            width: calc(100% - 55px);
            color: #38325c;
        }

        .item-interests,
        .item-skills{
            height: 30px;
            color: #38325c;
            padding: 5px 10px;
            margin-bottom: 5px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 1.1em;
            font-weight: 600;
        }
        .interest,
        .skill{
            color: #fff;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 5px;
            padding: 5px 10px;
            background: #43325c;
            position: relative;
            font-size: .85em;
        }
        .skill-level {
            background-color: #1c0d51;
            border-radius: 4px;
            color: #fff;
            padding: 1px 8px;
            font-size: .75em;
            position: absolute;
            margin: 1px 10px;
        }

        #language-skills .skill{
            margin: 10px 0;
            padding-bottom: 10px;
            border-bottom: 1px solid #ffefd5;
        }

    </style>
    <style type="text/css" media="print">
        body {
            font-size: .95em;
            -webkit-print-color-adjust: exact;
        }

        a[href]:after {
            content: none !important;
        }

        #photo{
            display: none;
        }

        .box {
            margin-bottom: -10px;
        }

        blockquote,
        #education,
        #awards,
        .contact-item,
        .publication,
        .skills,
        .interests {
            page-break-inside: avoid;
        }

        .col-sm-5{
            width: 40%;
            padding: 0 15px;
        }

        .col-sm-7{
            width: 60%;
            padding: 0 15px;
        }

        .skills .col-sm-offset-1,
        .interests .col-sm-offset-1{
            margin-top: -10px;
            margin-bottom: 5px;
        }

        #education {
            margin: 0;
            margin-bottom: -20px;
        }
        #awards:before,
        #education:before {
            background: none;
        }

        #awards .description,
        #education .description,
        .job .details {
            border: 1px solid #ffefd5;
        }
        .publication,
        .publication .panel-heading,
        .publication .name{
            margin: 0;
            padding: 0 5px;
            border: none;
        }
        .publication .panel-body {
            padding: 0 10px;
            margin: 0;
        }

        .badge {
            margin: 0;
        }

        .list-group-item{
            border: none;
            margin: 0;
            padding: 5px 15px;
        }
        .list-group-item:after{
            content: '';
            position: absolute;
            top: 8px;
            right: 0;
            left: -1px;
            height: 0;
            width: 0;
            border: solid transparent;
            border-right-color: #999;
            border-width: 4px;
            pointer-events: none;
        }

    </style>
</head>
<body>
<div class="container">


    <div id="photo-header" class="text-center">

        <!-- PHOTO  -->
        <div id="photo">
            <img src="IMG_4759.jpg" alt="avatar">
        </div>
        <div id="text-header" >
            <h1>Barbara del Valle<br><span>Logistics & Software Development</span></h1>
            <div class="row">
                <div class="col-xs-12">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-7"><br>
            <!-- ABOUT ME -->
            <div class="box">
                <h2><i class="fas fa-user ico"></i> About</h2>
                <p>Trilingual professional with over 5+ years expertise in building, managing and training customer relations and logistics teams turned software development student. Currently seeking a summer internship in software engineering. Passionate about learning new skills and tools.  </p> </div>
            <!-- WORK EXPERIENCE -->

            <div class="box">
                <h2><i class= "fas fa-suitcase ico"></i> Work Experience</h2>
                <div class="job clearfix">
                    <div class="row">
                        <div class="details">
                            <div class="where">

                            </div>
                            <div class="year">October 2020 – Present</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="job-details col-xs-11">
                            <div class="profession">IKEA - Operations Team Leader</div>
                            <div class="description">
                                <div class="highlights">Key Responsibilities:</div>
                                <ul class="list-group">
                                    <li class="list-group-item">•	Oversaw & directed operation made up of over 100 employees who would pick, pack and load orders, ensuring quality and timely delivery. </li>
                                    <li class="list-group-item">•	Increased monthly average user productivity by 27% in a lapse of two months through the conceptualization and implementation of a PowerBI tool utilized to track co-worker productivity numbers and gaps in productive time. </li>
                                    <li class="list-group-item">•   Increased efficiency of DC operations through the reduction of costs and damages, and through
                                        ensuring productivity goals are met on a daily basis via co-worker follow up and the implementation of
                                        a training bootcamp designed to equip newly hired co-workers with the tools to be both efficient and successful in their new roles.</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="details">
                            <div class="where">

                            </div>
                            <div class="year">September 2017 – October 2020</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="job-details col-xs-11">
                            <div class="profession">IKEA - Customer Experience Leader</div>
                            <div class="description">
                                <div class="highlights">Key Responsibilities:</div>
                                <ul class="list-group">
                                    <li class="list-group-item">•	Improved customer service experience, creating engaged customers and facilitating organic growth while overseeing a team of 115 employees.</li>
                                    <li class="list-group-item">•	Led a department visited by over 15,000 customers on a weekly basis, taking ownership for customer issues and following problems through to resolution. </li>
                                    <li class="list-group-item">•	Implemented a customer feedback data driven training program for new co-workers that bridged knowledge gaps, increasing customer satisfaction by 22% in a quarter. </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!--COURSEWORK, etc-->
                    <h2><i class= "fas fa-laptop ico"></i> Coursework Experience</h2>
                    <div class="row">
                        <div class="details">
                            <div class="where">

                            </div>
                            <div class="year">September 2021 – Present</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="job-details col-xs-11">
                            <div class="profession">Green River College - Software Development Program</div>
                            <div class="description">
                                <ul class="list-group">
                                    <li class="list-group-item">•	SDEV305 - Worked alongside a group in order to revamp Green River College's Software Development BAS program's FAQ Page, utilizing tools such as pair programming and agile methodologies in order to maximize our output and reach.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- VOLUNTEER -->
            <div class="box">
                <h2><i class= "fas fa-users ico"></i> Volunteering</h2>
                <div class="job clearfix">
                    <div class="row">
                        <div class="details">
                            <div class="where">Alternative Breaks/ Catalina Island Conservancy</div>
                            <div class="year">December 2012 – April 2013</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="job-details col-xs-11">
                            <div class="profession">Site Leader</div>
                            <div class="description">
                                During my one week visit to Catalina island, I worked alongside a volunteer group to remove invasive non-native plant species, collect trash from the local beaches, and performed maintenance work on the 32 mile Trans-Catalina Trails.
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="details">
                            <div class="where">Habitat for Humanity</div>
                            <div class="year">January 2015 – October 2017</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="job-details col-xs-11">
                            <div class="profession">Fundraising Coordinator</div>
                            <div class="description">
                                Assisted in the coordination and delivery of the fundraising program and advanced fundraising results for the Habitat for Humanity Economic Empowerment cause through direct donor solicitation, prospect pipeline development and the implementation of donor stewardship strategies in order to maximize individual, corporate and foundation support of the organization’s mission.  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-5"><br>
            <!-- CONTACT -->
            <div class="box clearfix">
                <h2><i class="fas fa-address-book"></i> Contact Info</h2>
                <div class="contact-item">
                    <div class="icon pull-left text-center"><span class="fas fa-map-marker fa-fw"></span></div>
                    <div class="title pull-right"></div>
                    <div class="title  pull-right">Greater Seattle Area, WA</div>
                </div>
                <div class="contact-item">
                    <div class="icon pull-left text-center"><span class="fas fa-phone fa-fw"></span></div>
                    <div class="title only pull-right">(971) 279-6474</div>
                </div>
                <div class="contact-item">
                    <div class="icon pull-left text-center"><span class="fas fa-envelope fa-fw"></span></div>
                    <div class="title only pull-right"><a href="mailto:bdelvalle8@gmail.com" target="_blank">bdelvalle8@gmail.com</a></div>
                </div>
                <div class="contact-item">
                    <div class="icon pull-left text-center"><span class="fab fa-linkedin-in"></span></div>
                    <div class="title only pull-right"><a href="https://www.linkedin.com/in/barbarad">www.linkedin.com/in/BarbaraD</a><br>

                        <br>
                    </div>
                    <!-- EDUCATION -->

                    <div class="box">

                        <h2><i class="fas fa-university ico"></i> Ongoing Education</h2>
                        <ul id="education" class="clearfix">
                            <li>
                                <div class="year pull-left">2020-Present</div>
                                <div class="description pull-right">
                                    <h3>Green River College</h3>
                                    <div class="where"></div>
                                    <p><i class= "fas fa-graduation-cap ico"></i> Bachelor of Applied Science</p>
                                    <p>Major: Software Development</p>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="box">

                        <h2><i class="fas fa-university ico"></i> Prior Education</h2>
                        <ul id="education" class="clearfix">
                            <li>
                                <div class="year pull-left">2010-2013</div>
                                <div class="description pull-right">
                                    <h3>Florida International University</h3>
                                    <div class="where"></div>
                                    <p><i class= "fas fa-graduation-cap ico"></i> Bachelor of Arts</p>
                                    <p>Major: Anthropology & Sociology</p>

                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- SKILLS -->
                    <div class="box">
                        <h2><i class="fas fa-tasks ico"></i> Skills</h2>
                        <div class="skills clearfix">
                            <div class="item-skills">
                                Web Development

                            </div>
                            <div class="col-sm-offset-1 col-sm-12 clearfix">
                                <span class= "skill badge">HTML</span>
                                <span class= "skill badge">CSS</span>
                                <span class= "skill badge">Javascript</span>
                                <span class= "skill badge">SQL</span>
                                <span class= "skill badge">Java</span>
                                <span class= "skill badge">Python</span>
                            </div>
                        </div>

                    </div>
                    <!--LANGUAGES-->

                    <div class="box">
                        <h2><i class="fas fa-comments"></i> Languages</h2>
                        <div class="skills clearfix">

                            <div class="col-sm-offset-1 col-sm-12 clearfix">
                                <span class= "skill badge">Spanish</span>
                                <span class= "skill badge">Portuguese</span>
                                <span class= "skill badge">English</span>

                            </div>

                        </div>


                    </div>
                    <!--INTERESTS-->
                    <div class="box">
                        <h2><i class="fas fa-heart ico"></i> Interests</h2>
                        <div class="interests clearfix">


                        </div>
                        <div class="col-sm-offset-1 col-sm-12 clearfix">
                            <span class= "interest badge">Hiking</span>
                            <span class= "interest badge">Weight Lifting</span>
                            <span class= "interest badge">Finance</span>
                            <span class= "interest badge">Travel</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


</body>
</html>
