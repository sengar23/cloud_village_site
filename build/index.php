<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cloud Village</title>
  <meta name="description"
    content="An open space to meet folks interested in offensive and defensive aspects of cloud security.">
  <meta property="og:image" content="https://cloud-village.org/images/seo.png" />
  <meta property="og:title" content="Cloud Village" />
  <meta property="og:description"
    content="An open space to meet folks interested in offensive and defensive aspects of cloud security.">
  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="icons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="icons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="icons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="icons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="icons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="icons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="icons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="icons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
  <link rel="manifest" href="icons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="icons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <meta name="google-site-verification" content="dThKGfVv6X9a2RFcqTKRe1MwNJvEr0iypjxSU4on9FY" />
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500|Source+Code+Pro:300,400,400i,600,700"
    rel="stylesheet">
  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="css/animate.min.css">
  <!-- slider and carousel -->
  <!--<link rel="stylesheet" href="css/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owlcarousel/owl.theme.default.min.css">-->
  <!--<link rel="stylesheet" href="css/slick.css">-->
  <!-- popup -->
  <!--<link rel="stylesheet" href="css/magnific-popup.css">-->
  <!-- icons set -->
  <link rel="stylesheet" href="css/fontello.css">
  <!-- custom main stylesheet -->
  <link rel="stylesheet" href="css/styles.css?<?php $t=time(); echo $t; ?>">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138455456-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-138455456-1');
  </script>

  <!-- Hotjar Tracking Code for cloud-village.org -->
  <script>
    (function (h, o, t, j, a, r) {
      h.hj = h.hj || function () {
        (h.hj.q = h.hj.q || []).push(arguments)
      };
      h._hjSettings = {
        hjid: 1283723,
        hjsv: 6
      };
      a = o.getElementsByTagName('head')[0];
      r = o.createElement('script');
      r.async = 1;
      r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
      a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
  </script>

</head>

<body>
  <div class="loading-wrap visible">
    <div class="loading">
      <span>L</span>
      <span>o</span>
      <span>a</span>
      <span>d</span>
      <span>i</span>
      <span>n</span>
      <span>g</span>
    </div>
  </div>


  <!--	Logo and menu
****************************-->
  <header class="header">
    <div class="inner-header container">
      <div class="header__logo">
        <a href="index.html" class="logo__item"></a>
      </div>

      <button class="btn_nav"><i class="icon-menu"></i></button>

      <nav class="navigation header__nav">
        <ul class="nav__list">

          <li class="nav__item current"><a href="#cfp" class="nav__link"><span
                class="nav__item_underline"></span>CFP</a></li>
          <li class="nav__item"><a href="#ctf" class="nav__link"><span class="nav__item_underline"></span>CTF</a></li>
          <li class="nav__item"><a href="#about" class="nav__link"><span class="nav__item_underline"></span>About</a>
          </li>
          <li class="nav__item"><a href="#talks" class="nav__link"><span class="nav__item_underline"></span>Talks</a>
          </li>
          <!--<li class="nav__item"><a href="#venues" class="nav__link"><span class="nav__item_underline"></span>Venues</a></li>-->
          <li class="nav__item"><a href="#timelines" class="nav__link"><span
                class="nav__item_underline"></span>Timelines</a></li>
          <li class="nav__item"><a href="#sponsers" class="nav__link"><span
                class="nav__item_underline"></span>Sponsors</a></li>
          <li class="nav__item"><a href="#contact" class="nav__link"><span
                class="nav__item_underline"></span>Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!--	Slider set
*****************************-->
  <!-- slider container -->
  <div class="slider section home-section">
    <!-- slider item -->
    <div class="slider__item slider__item_1">
      <div class="container">
        <div class="slider__wrapper">
          <span class="item__text">CLOUD VILLAGE</span>
          <h1 class="item__text item__text_big">Cloud village is an open space to meet folks interested in offensive and defensive aspects of cloud security.</h1>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSeGxSDgynvAv7Q1dTPeobZUPo5jdlbrcNSQAYVLgRqCF6T0bg/viewform"
            target="_blank" title="CFP for DEF CON 27" class="text__button inline-btn">CFP for DEF CON 27</a>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSfIlR_-GZ_WqAwu64AobwRPdaiqw8DZusjTPNm4bVoOtH2k3g/viewform"
            target="_blank" class="text__button float-right-btn">Contribute/Volunteer</a>


        </div>
      </div>
    </div>


  </div>




  <!--	Animated pointer
*****************************-->
  <div class="pointer pointer_bottom">
    <div class="pointer__arrow pointer__arrow_top"></div>
    <div class="pointer__line"></div>
    <div class="pointer__arrow pointer__arrow_bottom"></div>
  </div>







  <!--  Section CFP
*****************************-->
  <section id="cfp" class="cfp section">
    <div class="container">
      <hr class="services__line">
      <div class="row">

        <div class="about__text col-xs-12 col-md-12">
          <h2 class="text__header">Call for Papers (DEF CON 27)</h2>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSeGxSDgynvAv7Q1dTPeobZUPo5jdlbrcNSQAYVLgRqCF6T0bg/viewform"
            target="_blank" class="text__button cta" title="CFP for DEF CON 27">CFP Submission Form</a>
          <p class="copy-1 white"><span class="purple">CFP Open:</span> 28th April 2019</p>
          <p class="copy-1 white"><span class="purple">CFP Close:</span> 16th June 2019</p>
          <p class="copy-1 white"><span class="purple">Venue:</span> DEF CON, Las Vegas, Nevada</p>

          <p class="text__par">Our CFP is now <strong class="green">OPEN</strong> for <strong class="green">DEF CON
              27</strong>, and we are looking for presentations, workshops and tool demos to be part of our village.
          </p>

          <p class="text__par">CFP closes on <strong class="green">16th June 2019 23:59 GMT</strong>. Once CFP is
            closed, this form will no longer accept CFP submissions or modifications.
          </p>
          <p class="copy-1 purple">We accept four talk categories:</p>
          <ul class="custom-list">
            <li class="white">Talks (30 - 45 minutes - Detailed research talks)</li>
            <li class="white">Workshops (1 - 2 hours - Hands on or Instructor led training for free)</li>
            <li class="white">Tool Demo (20 - 30 minutes)</li>
            <li class="white">Lightning Talks (10 - 20 minutes talk to cover quick, shorthand techniques)</li>


          </ul>
          <p class="copy-1 purple">Speaker Benefits:</p>
          <ul class="custom-list">
            <li class="white">Exclusive Cloud Village Speaker Badge</li>
            <li class="white">Cloud Village Speaker T-shirt</li>
            <li class="white">Lot of love and respect from the team</li>

          </ul>
          <p class="copy-1 green">Notes:</p>
          <ul class="custom-list">
            <li class="white italics">Please do not submit to Cloud Village CFP if you are not already planning to
              attend DEF CON 27 as we are unable to provide any speaker assistance in terms of DEF CON Badges / travel /
              accommodation expenses. If you are already attending DEF CON and would like to speak, please send in your
              proposal through this <a
                href="https://docs.google.com/forms/d/e/1FAIpQLSeGxSDgynvAv7Q1dTPeobZUPo5jdlbrcNSQAYVLgRqCF6T0bg/viewform"
                target="_blank">CFP form</a>.</li>
            <li class="white italics">The only way to submit to our CFP is via this form.</li>
            <li class="white italics">As you will submit the CFP form, you should get a confirmation email confirming
              your submission. If you do not receive this email, it simply means there is something wrong and we have
              not received your submission. In that case, we suggest you to submit again.</li>

          </ul>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSeGxSDgynvAv7Q1dTPeobZUPo5jdlbrcNSQAYVLgRqCF6T0bg/viewform"
            target="_blank" class="text__button inline-btn" title="CFP for DEF CON 27">CFP Submission Form</a>

        </div>

      </div>
    </div>
  </section>


  <!--  Section CTF
*****************************-->
  <section id="ctf" class="ctf section">
    <div class="container">
      <div class="row">
        <div class="about__text col-xs-12 col-md-12">
          <h2 class="text__header">Cloud CTF</h2>



          <p class="text__par">Our CTF is <strong class="green">three days jeopardy style</strong> contest where we will
            create bunch of challenges in multiple categories, related to cloud services though.
          </p>
          <p class="text__par">Teams / Individuals gain some points, (or loose points on using hints) on solving each
            challenge. Teams or Individuals who gain maximum points gets the winning rewards.
          </p>


        </div>

      </div>
    </div>
  </section>

  <div class="container">
    <hr class="divider__line">
  </div>

  <!-- Section About
*****************************-->
  <section id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="about__text col-xs-12 col-md-12">
          <h2 class="text__header">About</h2>
          <p class="text__par">Cloud village is an open space to meet folks interested in offensive and defensive
            aspects of cloud security. The village is home to various activities like talks, workshops, CTFs and
            discussions targeted around cloud services.
          </p>
          <p class="text__par"> If you are a professional who is looking to gain knowledge on securely maintaining the
            cloud stack and loves to be around like-minded security folks who share the similar zeal towards the
            community, Cloud Village is the perfect place for you.
          </p>
          <p class="copy-1 purple">Crew Members:</p>
          <ul class="custom-list">
            <li>Jayesh Singh Chauhan (<a href="https://twitter.com/jayeshsch" target="_blank">@jayeshsch</a>)</li>
            <li>Shivankar Madaan (<a href="https://twitter.com/shivankarmadaan" target="_blank">@shivankarmadaan</a>)
            </li>
            <li>Ranjeet Sengar (<a href="https://twitter.com/sengar23" target="_blank">@sengar23</a>)</li>
            <li>Madhu Akula (<a href="https://twitter.com/madhuakula" target="_blank">@madhuakula</a>)</li>

          </ul>
          <p class="copy-1 purple">CFP Review Panel (DEFCON 27):</p>
          <ul class="custom-list">
            <li>Bryce Kunz (<a href="https://twitter.com/TweekFawkes" target="_blank">@TweekFawkes</a>)</li>
            <li>Anant Srivastava (<a href="https://twitter.com/anantshri" target="_blank">@anantshri</a>)</li>
            <li>Akash Mahajan (<a href="https://twitter.com/makash" target="_blank">@makash</a>)</li>
            <li>William Bengtson (<a href="https://twitter.com/__muscles?s=09" target="_blank">@__muscles</a>)</li>
            <li>Sarah Young (<a href="https://twitter.com/_sarahyo" target="_blank">@_sarahyo</a>)</li>
          </ul>

        </div>

      </div>
    </div>
  </section>


  <!--	Talks / Schedule
*****************************-->
  <section id="talks" class="talks section">
    <div class="container">
      <div class="services__header-block">
        <h2 class="services__header col-xs-12 col-sm-8">Talks (DEF CON 27)</h2>
      </div>
      <hr class="services__line">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#category-1" aria-controls="category-1" role="tab"
            data-toggle="tab">Talks(<span class="ca-count"></span>)</a></li>
        <li role="presentation"><a href="#category-2" aria-controls="category-2" role="tab"
            data-toggle="tab">Workshops(<span class="ca-count"></span>)</a></li>
        <li role="presentation"><a href="#category-3" aria-controls="category-3" role="tab" data-toggle="tab">Tool
            Demo(<span class="ca-count"></span>)</a>
        </li>
        <li role="presentation"><a href="#category-4" aria-controls="category-4" role="tab" data-toggle="tab">Lightning
            Talks(<span class="ca-count"></span>)</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content r-mb-12">
        <div role="tabpanel" class="tab-pane fade in active" id="category-1">
          <div class="panel-group talks-panel-group" id="accordion-1" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <a class="panel-btn" role="button" data-toggle="collapse" data-parent="#accordion-1" href="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">

                    Exploiting IAM in the Google Cloud Platform

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">

                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Colin Estep</strong></p>
                      <!--<p class="purple"><strong class="white">Date:&nbsp;</strong><strong>TBA</strong></p>
                      <p class="purple"><strong class="white">Time:&nbsp;</strong><strong>TBA</strong></p>-->
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/colinestep" target="_blank"><strong>@colinestep</strong></a></p>

                      <p class="white"><strong class="white">Abstract:&nbsp;</strong></p>

                      <p class="services__item__text">Identity and Access Management (IAM) in any public cloud provider
                        can be tricky to configure appropriately. We've all seen the headlines about storage buckets
                        being open to the public and exposing sensitive information, but what about the permissions we
                        are giving our users and apps that run in our cloud environment? It's becoming more difficult to
                        understand who has permissions over resources and what the implications of those permissions are
                        as more controls proliferate across the public cloud providers.
                      </p>
                      <p class="services__item__text">In this talk, we will take a closer look at the Google Cloud
                        Platform (GCP) IAM model. You'll be introduced to the relevant concepts to understand the
                        different types of identities, IAM permissions, and scopes. We'll examine the permissions and
                        scopes assigned to the compute engine service account created for you by default. Did you know
                        that the default IAM policy for the compute engine service account includes the ability to
                        impersonate other service accounts, among other things?</p>
                      <p class="services__item__text">
                        Most importantly, we'll learn how to leverage certain configurations of the service account to
                        escalate privileges from a virtual machine. I will show a demo where I use a shell on a virtual
                        machine to tear down another security control to allow data exfiltration out of the environment.
                        By the end of the talk, you'll understand how to impersonate service accounts, conduct recon,
                        and escalate your privileges from a virtual machine. You'll also get some ideas on how to
                        mitigate against these attacks.
                      </p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <a class="panel-btn" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-1"
                href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">

                    Hacking into automotive clouds

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">


                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Rotem Bar</strong></p>
                      <!--<p class="purple"><strong class="white">Date:&nbsp;</strong><strong>TBA</strong></p>
                      <p class="purple"><strong class="white">Time:&nbsp;</strong><strong>TBA</strong></p>-->
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/rotembar" target="_blank"><strong>@rotembar</strong></a></p>

                      <p class="white"><strong class="white">Abstract:&nbsp;</strong></p>

                      <p class="services__item__text">In this talk I will share my experience about how I hacked
                        different automotive clouds, techniques I used and goals I pursue after connecting.

                      </p>
                      <p class="services__item__text">In this talk I will give real life examples of:</p>
                      <ul class="custom-list">
                        <li class="white">From zero to hero – Full backend control with examples</li>
                        <li class="white">Common fails which allow me to jump between networks</li>
                        <li class="white">Dangers of connected cars - Taking over a car from the cloud</li>
                        <li class="white">How to break a production line</li>
                        <li class="white">Cloud credentials leakage</li>

                      </ul>
                      <p class="services__item__text">I will talk about the main connectivity areas I look for, supplier
                        integrations and differences between normal clouds and automotive clouds. Once I got a good
                        foothold, Possible targets and places which can harm the most. Where can I jump next inside and
                        how deep the rabbit hole goes.</p>
                      <p class="services__item__text">
                        This will be a technical talk going into places I've experienced personally in the last few
                        years and will try to give a glimpse of the fun life of hacking into the vehicle ecosystem
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <a class="panel-btn" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-1"
                href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">

                    Build to Hack, Hack to Build

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">

                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Chris Le Roy</strong></p>
                      <!--<p class="green"><strong class="white">Date:&nbsp;</strong><strong>TBA</strong></p>
                      <p class="green"><strong class="white">Time:&nbsp;</strong><strong>TBA</strong></p>-->
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/brompwnie" target="_blank"><strong>@brompwnie</strong></a></p>

                      <p class="services__item__text">Containers,Cloud,DevOps and SDLC are all terms that are
                        increasing in terms of usage in the InfoSec world. In this talk, we discuss how a container
                        exploitation tool (BOtB) was developed to identify and autopwn common vulnerabilities in
                        container technologies such as Docker and LXC and how this tool was used in a modern SDLC
                        environment using common CI/CD technologies to identify, exploit and remediate container
                        vulnerabilities before releases were made to production.
                      </p>
                      <p class="services__item__text">In this talk we elaborate on how and
                        why BOtB was built to be used by pentesters to exploit container vulnerabilities and how BOtB
                        can be used by engineers to secure their container environments. The talk will also explain the
                        technical details around the vulnerabilities that can be exploited by BOtB.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <a class="panel-btn" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-1"
                href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title">

                    Your Blacklist is Dead. Airgap Everything: The Future of CNC is the Cloud

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">

                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Erick Galinkin</strong></p>
                      <!--<p class="green"><strong class="white">Date:&nbsp;</strong><strong>TBA</strong></p>
                        <p class="green"><strong class="white">Time:&nbsp;</strong><strong>TBA</strong></p>-->
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/erickgalinkin" target="_blank"><strong>@erickgalinkin</strong></a>
                      </p>

                      <p class="services__item__text">What happens when attackers start taking advantage of
                        whitelisted APIs as a form of obfuscated command and control? Companies both large and small are
                        moving workloads to the cloud and are very concerned with how to secure their resources which
                        actually live in AWS, GCP, and Azure. However, they don't address how enabling this access
                        changes their internal attack surface and weakens their defenses.


                      </p>
                      <p class="services__item__text">In this talk, we demonstrate that attackers no longer have any
                        reason to rely on conventional CNC, being able to outsource their costs and infrastructure
                        management to the likes of Slack, Github, Pastebin, Dropbox, Google, and social media sites.
                        Using these sorts of techniques, URL blacklisting becomes obsolete, IDS becomes less effective,
                        and attackers no longer have to waste their time writing domain generation algorithms.</p>
                      <p class="services__item__text">Specifically, I will demo a proof-of-concept malware which uses
                        multiple SaaS services, social networks, and more conventional "cloud infrastructure" (S3) that
                        would be extremely difficult to mitigate generically with today's IPS solutions, and we discuss
                        how the same techniques can be used by red teams and attackers to quietly maintain persistence
                        and exfiltrate data.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <a class="panel-btn" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-1"
                href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <div class="panel-heading" role="tab" id="headingFive">
                  <h4 class="panel-title">

                    Applying Pareto's Principle for Securing AWS with SCPs

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">

                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Ayman Elsawah</strong></p>
                      <!--<p class="green"><strong class="white">Date:&nbsp;</strong><strong>TBA</strong></p>
                          <p class="green"><strong class="white">Time:&nbsp;</strong><strong>TBA</strong></p>-->
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/coffeewithayman"
                          target="_blank"><strong>@coffeewithayman</strong></a></p>

                      <p class="services__item__text">In this talk I am going to walk through how we can use pareto's
                        principle to secure all our AWS accounts. What this means is with just 20% of effort, we can
                        accomplish 80% security of our AWS accounts. We will be leveraging the power of AWS
                        Organizations and IAM to accomplish our goals. This will be a technical talk and guide on how to
                        secure your account.
                      </p>
                      <p class="services__item__text">This talk assumes you have secured your individual AWS accounts at
                        the basic level by locking down your root accounts with 2FA, and etc.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <a class="panel-btn" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-1"
                href="#collapseDani" aria-expanded="false" aria-controls="collapseDani">
                <div class="panel-heading" role="tab" id="headingDani">
                  <h4 class="panel-title">

                    Battle in the Clouds: Attacker vs Defender on AWS

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseDani" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingDani">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">

                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Dani Goland</strong></p>
                      <!--<p class="green"><strong class="white">Date:&nbsp;</strong><strong>TBA</strong></p>
                          <p class="green"><strong class="white">Time:&nbsp;</strong><strong>TBA</strong></p>-->
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/DaniGoland"
                          target="_blank"><strong>@DaniGoland</strong></a></p>

                      <p class="services__item__text">The interaction between attackers and defenders is like a ping pong game, and that is exactly how we did this research. On the offensive Mo will share his tools and tactics attacking AWS Infrastructures from Recon to Attacks to Post Exploitation on different services with a focus on Elastic Container Service(ECS). After each attack step, Dani will explain the defensive side and tools and tactics for hardening the AWS Infrastructure from Designing a secure Cloud Architecture to Detection to Hardening specific services like Docker containers on ECS. After the battle, we will both walk-through common misconfiguration problems, one-click solutions for monitoring and attack detection, and workflows for pentesters on AWS. One of the most important lessons from our research is the importance of the interaction between pentesters and developers/DevOps engineers, and how a few days of working side by side can help us secure our current systems and learn to develop future systems with security in mind.

                      </p>
                      <p class="services__item__text">Dani and Mohsan will demonstrate an entire kill chain on a hypothetical organization operating in an AWS environment and pivoting into their internal Active Directory network. The demonstration will cover reconnaissance methods for a cloud environment, an attack on a AWS hosted webserver that results in compromise of access keys.  The access keys will be utilized to access a separate AWS service, followed by escalation of privileges to administrator.  We will further demonstrate exfiltration methods, setting up persistence in AWS, and last but not least pivoting to the internal AD environment and obtaining Domain Admin privileges.</p>
                      <p class="services__item__text">Many open source tools will be used as well as some custom python scripts on the offensive side, for example: TruffleHog for scanning for leaked keys on github, S3Scanner for enumerating S3 buckets, amass for DNS Mapping and Subdomain Enumeration, Cloud Mapper for reconnaissance and auditing, Prowler for assessing security, Pacu and Metasploit for exploitation, and more.</p>
                      <p class="services__item__text">On the defensive side, we will introduce Open Source tools like HashiCorp Vault and AWS Parameter Store for secret management, NAXSI as an open source WAF, Vulnerability scanners for Docker, AWS KMS for creating and rotating keys for in-transit and at-rest data encryption, CloudTrail and CloudWatch for detection of suspicious activity and alarming, and more.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <a class="panel-btn" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-1"
                href="#collapseTanya" aria-expanded="false" aria-controls="collapseTanya">
                <div class="panel-heading" role="tab" id="headingTanya">
                  <h4 class="panel-title">

                    DYI Azure Security Assessment

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseTanya" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTanya">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">

                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Tanya Janca & Teri Radichel</strong></p>
                      <!--<p class="green"><strong class="white">Date:&nbsp;</strong><strong>TBA</strong></p>
                          <p class="green"><strong class="white">Time:&nbsp;</strong><strong>TBA</strong></p>-->
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/SheHacksPurple"
                          target="_blank"><strong>@SheHacksPurple</strong></a></p>
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/TeriRadichel"
                          target="_blank"><strong>@TeriRadichel</strong></a></p>

                      <p class="services__item__text">PenTesters, Blue & Red teamers, network admins and cloud enthusiasts, this talk will layout from start to finish how to verify the security of your Azure implementation. This talk will be 80%+ demos of where to look, what to do, and how to prioritize what you find. Topics include: Azure Security Center, setting scope, setting policy, threat protection, more.
                      </p>
                      <p class="services__item__text"><strong>Detailed Outline:</strong> There are two articles as well as a video we will share at the end to give the audience more information and a checklist of how they can assess their own Azure instances after the talk is over.</p>
                      <p class="services__item__text">Here is the outline of what we plan to cover in this session:<br>Do not test the Azure Infrastructure. That is violation of the user agreement for Azure and will get you into hot water with Microsoft. No one wants that.<br>Be extremely careful to only test things that are IN SCOPE for your client.<br>Is Azure Security Center turned on? If not, turn it on. I ❤ ASC.<br>Do all subscriptions/sub-subscriptions have it on? Do you have complete coverage? If not, definitely report it.<br>Is there a policy set (settings that the org has chosen as “secure”, such as all storage must be encrypted at rest)? If so, what are the settings? Do they look good? Also, what level of compliance do they have? Everything that is not compliant should be reported.<br>Is threat protection (storage and databases only), monitoring and auditing set up on every possible resource? If not, report it.<br>Look at the network, in the same way you would look at a traditional network, is anything out of place? Also, are they doing Zoning or Zero-trust or something else? Which network security model are they using? Make sure they are compliant with their own plan. Ask them what their plan is for their network to start. If they don't have an answer, that's another issue altogether.<br>Do they have “just in time” (JIT) set up on all ports on all servers/VMs? Or are they using a JumpBox to access VMs from outside Azure? Or is that not allowed at all? They should use JIT and Network Security Groups (NSGs)for *everything*.Do they have app whitelisting enabled on VMs? It's called Adaptive Application Controls, and it's right underneath JIT in the security center (ASC) menu, under “Advanced Cloud Defense”. They should have that turned on for *all* servers.Are they using a SIEM (Security incident and event management system)? Are they using it well? Are they monitoring it? What kind of coverage is it getting? Does ASC feed into it? It should.<br>Are they using a WAF (Web Application Firewall)? If so, test it. If they aren't, mark it as advice for improvement.Any other 3rd party security tools (IPS/IDS/HIPS/Other)? If so, are those getting complete coverage of all assets that are covered by this test? And are they configured well?<br>Look in “Recommendations” tab of Azure Security Center and it will tell you all the problems (network issues, config errors, missing patches, more) that you haven't spotted yet. 😊 Really, you could likely start here. This is a list of everything that is not compliant with your policy, in order of importance.<br>If you are assessing web apps within Azure, APIs and functions (serverless), that's a whole other topic, but all of the regular security testing rules would apply, Azure or not.<br>If your org is using Azure DevOps I suggest adding several security tests to your pipeline including Azure Secure DevOps Kit. It's strict; you likely won't pass the first few times around, so prepare your developers for a bit of disappointment. There are a TON of great security tools in the Azure Marketplace, add a few, one is not enough.Turn on VA for SQL DataBases as part of the Azure Threat Protection, and kick off a scan right away to see if anything is happening. It will likely had a lot of advice for you.<br>Look in the Threat Detection part of Security Centre, verify that there are no active attacks happening or recent ones, investigate accordingly.</p>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

          
          <div class="panel panel-default">
              <a class="panel-btn" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-1"
                href="#collapseRod" aria-expanded="false" aria-controls="collapseRod">
                <div class="panel-heading" role="tab" id="headingRod">
                  <h4 class="panel-title">
                    Using Splunk for Auditing AWS/GCP/Azure Security posture

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseRod" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingRod">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">

                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Rod Soto</strong></p>
                      <!--<p class="green"><strong class="white">Date:&nbsp;</strong><strong>TBA</strong></p>
                          <p class="green"><strong class="white">Time:&nbsp;</strong><strong>TBA</strong></p>-->
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/rodsoto"
                          target="_blank"><strong>@rodsoto</strong></a></p>

                      <p class="services__item__text">This presentation shows how to use Splunk to provide the analyst with a comprehensive vision of AWS/GCP/Azure security posture. Presenters will outline how to ingest the audit data provided by open source tool Cloud Security Suite into Splunk to analyze cloud vulnerability, harden multi-cloud deployments and visualize multi-cloud threat surface. Presenters will also demonstrate use cases based on Splunk knowledge objects (Tables, Dashboards, Alerts, Field extractions, Lookups, etc), in order to take advantage of the information provided by various supporting tools like Scout2 and G-Scout projects for cloud API auditing.

                      </p>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="panel panel-default">
              <a class="panel-btn" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-1"
                href="#collapseJames" aria-expanded="false" aria-controls="collapseJames">
                <div class="panel-heading" role="tab" id="headingJames">
                  <h4 class="panel-title">
                    Scaling Security in the Cloud With Open Source

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseJames" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingJames">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">

                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>James Strassburg</strong></p>
                      <!--<p class="green"><strong class="white">Date:&nbsp;</strong><strong>TBA</strong></p>
                          <p class="green"><strong class="white">Time:&nbsp;</strong><strong>TBA</strong></p>-->
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/jstrassburg"
                          target="_blank"><strong>@jstrassburg</strong></a></p>

                      <p class="services__item__text">The programmability of the cloud has revolutionized infrastructure deployments at scale and, at the same time, has enabled the automation of both the attack and defense of these deployments. In this talk, I will discuss the open-source tools and the techniques that my organization has used to scale security in the cloud to keep pace with our deployments. I'll also cover how we've used automation to adapt security processes to cloud strategies such as immutable servers. Some topics include: temporal leasing of API access keys and database credentials, automation of patching groups and scans, and automated enforcement of configuration policy.

                      </p>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="panel panel-default">
              <a class="panel-btn" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-1"
                href="#collapseCheryl" aria-expanded="false" aria-controls="collapseCheryl">
                <div class="panel-heading" role="tab" id="headingCheryl">
                  <h4 class="panel-title">
                    Mining Malevolence: Cryptominers in the Cloud

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseCheryl" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCheryl">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">

                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Cheryl Biswas</strong></p>
                      <!--<p class="green"><strong class="white">Date:&nbsp;</strong><strong>TBA</strong></p>
                          <p class="green"><strong class="white">Time:&nbsp;</strong><strong>TBA</strong></p>-->
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/3ncr1pt3d"
                          target="_blank"><strong>@3ncr1pt3d</strong></a></p>

                      <p class="services__item__text">
                      Cloud. It's the land of opportunity. Enterprises are doing mass migrations from older and legacy systems to harness greater power and efficiency from innovative new tech. Following that money trail are opportunistic attackers, seeking the computing strength and near-invisibility afforded by enterprise cloud environments to mine bitcoin. Cryptominers are everywhere. And yes, Virginia, they are in the Cloud.<br>These nebulous power-rich realms let attackers set up mining rigs to feast on enterprise resources, while flying below the detection of cloud or conventional security resources.  The concern here is that once attackers gain access to our networks, they can pivot and move laterally, to find even greater reward in the vast amounts of data available. Let's talk about what we do and don't know when it comes to securing our cloud environments against malicious miners. Because it isn't just a question of what they can take – it's about the payloads they can leave behind. <br>Introduction: (5 min)<br>
• Enterprise and Cloud: If you work for a major organization, you're probably undergoing or have just gone through a major migration to the Cloud. This is the big push according to a recent Gartner report, with 37% of enterprises reporting it as their top priority, and ranking at 39% for CIOs, ahead of cybersecurity (why are we not surprised).<br>
• An Evolution of Evil: the rise of miners. Easy to get into. Low bar for entry. Starter toolkits cost $30 online. Cryptojacking increased by 4000% in 2018. <br>
• Major miners like XMRig<br>
• Main attack vectors: brute force credentials for access; leverage multiple vulnerabilities for access and movement internally.<br>
• Motivation: almost 100% return on investment. No overhead <br>

Miners in the Sky: (5 min)<br>
• Why it's expected to continue<br>
o The return on investment is lucrative in terms of computing power <br>
o Lack of detection<br>
• Most organizations don't have mature cloud security programs. By design, yes, in reality – not so much. Cloud has huge amounts of processing power with built-in auto-scaling<br>
• attackers can operate with almost no detection <br>
• The bigger the account, the longer attackers can go<br>
• Enterprises are migrating to the Cloud.  We love our containers: Docker, AWS, Azure. <br>

Charting the rise of malicious miners in cloud environments by attacks: (10 min)<br>
Overview of what we're seeing:<br>
• attacks on containers and container management<br>
• control panel exploitation<br>
• theft of APIs<br>
• spreading malicious Docker images<br>
• leveraging current and older enterprise vulnerabilities<br>
• EternalBlue<br>

Let's Start Here: The attack on Tesla's AWS S3 public cloud in February 2018. Researchers at RedLock found mining malware from a wide-spread, well-concealed cryptomining campaign in Tesla's AWS cloud.  RedLock found it when they scanned public internet for misconfigured and unsecured cloud servers – there's been a few of those. They saw an open server. Further investigation revealed it was running Kubernetes, the open source admin console for cloud application mgmt., which was doing cryptomining. The Kubernetes console was not password protected. The attackers found login credentials for Tesla's AWS in one of the pods. They went from there to deploy malware scripts for Stratum bitcoin mining.<br>

Abusing exposed Docker APIs: Hundreds of vulnerable and exposed Docker hosts were abused in cryptojacking campaigns in March this year. Attackers exploited CVE-2019-5736, a runc vulnerability identified in February, that could trigger a container escape. Now, that kind of defeats the whole purpose of having a container when it means the attacker can access the host filesystem and overwrite the runc binary to run arbitrary commands on the host. Attackers scan for exposed Docker APIs on port 2375. They deployed malicious self-propagating Docker images infected with malware to load Monero miners and find other vulnerable targets via Shodan.  External access to API ports will enable attackers to gain ownership of the host. They can tamper with instances running inside, drop malware, access user's servers and resources.
Discussion point: Misconfiguration is prevalent – why? How can we help users do this better?<br>

Uninstalling Cloud Security: A new cryptomining malware family that targets Linux servers gained admin rights on systems by uninstalling cloud security products.  We'll talk about the Chinese-language threat actor behind this and other attacks, Rocke group. Consider how nation-state adversaries and advanced persistent threats (APTs) could seek to leverage this kind of attack in sophisticated campaigns.<br>
Discussion point: We've seen conventional malware evade and disable existing AV. If we can't detect it, how do we protect against it? How are we extending this to malware targeting Cloud?<br>

Targeting Elasticsearch servers: in the “Cryptosink” campaign, attackers exploit a five year old vulnerability that could lead to executing arbitrary Java code, CVE-2014-3120, that affects Elasticsearch running on both Windows and Linux platforms. They download malware that has not been detected by AV on Linux. The attackers backdoor the servers for future access, eliminate competitors on the infected system by redirecting their mining pool traffic to a sinkhole, and achieve persistence by replacing the Linux remove command.  <br>

What else could be at risk: Abusing instant metadata API.  This functionality is offered by all cloud providers. If it isn't secured or monitored well, and attacker can exploit it via vulnerable reverse proxies or malicious Docker images.<br>  

What could this lead to: Once attackers are in your network, they aren't limited to just mining Monero. They have access to all your data-rich environments. If the attacker is looking for satisfaction that money can't buy, yes they can deliver a very damaging payload with ransomware or worse. Think NotPetya.  <br>

Review of Vulnerabilities & Exploits: (5 min)<br>
• Misconfiguration: security researcher and attackers are actively seeking and finding many exposed and unsecured instances online. Human error is at the brunt of things, but Cloud isn't traditional infrastructure. It's a complex, dynamic network that requires specialized knowledge and training to do configuration right. <br>
• EternalBlue: believe it. There are still plenty of unpatched instances out there and attackers continue to leverage this exploit to gain access, spread and move laterally within networks<br>
• Oracle WebLogic vulnerability CVE-2019-2725: There have been a series of critical vulnerabilities in this popular enterprise software<br>
• Remote code execution: Miners have been using a group of vulnerabilities for RCE as initial access and more<br>
o CVE-2012-0874: JBoss Enterprise Application Platform Multiple Security Bypass Vulnerabilities.<br>
o CVE-2010-1871: JBoss Seam Framework <br>
o JBoss AS 3/4/5/6: CVE-2017-10271: Oracle WebLogic wls-wsat Component Deserialization RCE<br>
o CVE-2018-2894: Vulnerability in the Oracle WebLogic Server component of Oracle Fusion Middleware.<br>
o Hadoop YARN ResourceManager - Command Execution<br>
o CVE-2016-3088: Apache ActiveMQ Fileserver File Upload<br>
• PSMiner targets known vulnerabilities in Elasticsearch, Hadoop, PHP, Oracle WebLogic<br>
• Fake certificates: attackers increasingly use this to evade detection and infiltrate conventional systems. How can we apply what we're learning to protect in the Cloud?<br>

What we can do: (5 min)<br>
• Countermeasures: <br>
o rotate access keys<br>
o restrict outbound traffic<br>
o cryptojacking blockers for Web browsers<br>
• Monitoring user behavior<br>
• Follow the principle of least privilege when issuing credentials<br>
• EternalBlue is still actively leveraged against vulnerable systems. Think third party compromise<br>
• Visibility. Be able to see down to the process level. <br>
• Micro-segmentation to control lateral movement and spread <br>
• Apply, monitor and enforce best practices<br>
• Resources like Yara rules to detect miners (will make available)<br>
• Unusual deletions or spinning up containers<br>
• IoCs<br>

Conclusion and Q&A<br>
                      </p>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <a class="panel-btn" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-1"
                href="#collapseAshwini" aria-expanded="false" aria-controls="collapseAshwini">
                <div class="panel-heading" role="tab" id="headingAshwini">
                  <h4 class="panel-title">
                    Phishing in the cloud era

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseAshwini" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAshwini">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">

                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Ashwin Vamshi</strong></p>
                      <!--<p class="green"><strong class="white">Date:&nbsp;</strong><strong>TBA</strong></p>
                          <p class="green"><strong class="white">Time:&nbsp;</strong><strong>TBA</strong></p>-->
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/_ashwin_vamshi"
                          target="_blank"><strong>@_ashwin_vamshi</strong></a></p>

                      <p class="services__item__text">

                      Cloud services are built for increased collaboration and productivity, and provide capabilities like auto sync and API level communication. This has led enterprises to exclusively use SaaS, PaaS and IaaS services for storing and sharing critical and confidential data. End users as well as security products tend to place implicit trust in cloud vendors such as Microsoft, AWS, Google, and SaaS app vendors such as Box, Salesforce, DropBox. As a result, cybercriminals have started launching their attacks from these trusted cloud services. This talk will focus on how attackers are abusing these trusted cloud services to create Phishing attacks that are highly effective and hard to detect.<br>

We will begin the presentation by sharing some statistics that illustrate the wide-scale adoption of cloud services by cybercriminals. In particular, we focus in on the usage of cloud services as a launching point of an attack. In the next section, we will discuss some of the novel, offensive phishing techniques that the attackers have employed, including: abusing SaaS APIs, abusing trusted API redirects, and hosting attack pages in cloud services.<br>

We will deep dive into three specific techniques we discovered in the wild:<br>

Targeted BEC (Business email compromise) - phishing attacks abusing popular services like S3, GCS, Azure Storage, and GCP Google's App engine. The S3, GCS, and Azure Storage based attacks used static web hosting to serve up convincing baits, complete with Amazon, Google, or Microsoft issued SSL certs.  We will provide a few examples of some successful attacks of this type. The App Engine attack used an open redirect to make it appear that the bait was being delivered from Google.  We provide a detailed breakdown of how this was done and what made this attack successful. At the time of writing this draft, Google shows its standard redirection notice when users click on one of these AppEngine links, making it more obvious to the user that they are being redirected.<br>

“Default Allow” action in popular PDF readers and Annotations used in themed decoy templates. This action only warns the user that it is trying to connect to a trusted cloud service, which looks benign at face value. By taking advantage of the “default allow” action in popular PDF readers, the attacker can easily deploy multiple attacks without getting the security warning after the first alert.  In this section, we provide examples of multiple attacks leveraging this techniques, including the preceding BEC.<br>

PhaaS(Phishing-as-a-Service): Criminals hosting a full-fledged phishing infrastructure over cloud and selling it as a B-to-C model. These on-demand service based models provides an essence of a criminal version of software-as-a-service which allows purchasing site login accounts along with crafting and hosting phished links. In this section, we provide an overview of one of these services and describe how it is using public cloud services to drive its success.<br>

The idea is to educate our audience about the new wave of sophisticated attacks abusing highly trusted services like Google and its App engine APIs, object stores in AWS/Azure/GCP and other Tier-1 SaaS applications. The attackers not only craft a “near original” phishing bait but also make it hard for security products to detect such attacks.<br>

We will then discuss some inherent design constraints and weaknesses in these services which are benefiting the cybercriminals in creating attacks to bypass modern day security solutions. Most end users are savvy enough now to understand that links that include random IP addresses or suspicious sounding domain names should not be clicked on, but they don't have a similar awareness of risk associated with cloud services. Users tend to click on an email invite from a cloud application or a phishing document hosted in a cloud environment as it is convincing and difficult to recognize as phishing.<br>

We will then understand the motivation behind this new trend, its monetary impact in the cybercrime market and its simplicity, which is appealing more and more novice cybercriminals into building their attack surfaces by abusing such services.<br> 

We will conclude the talk by sharing details about our responsible disclosure to tier 1 vendors and proposing detection and remediation techniques for such type of attacks

                      </p>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="category-2">
          <div class="panel-group talks-panel-group" id="accordion-2" role="tablist" aria-multiselectable="true">
            <!--<div class="panel panel-default">
              <a class="panel-btn" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapseSix"
                aria-expanded="true" aria-controls="collapseSix">
                <div class="panel-heading" role="tab" id="headingSix">
                  <h4 class="panel-title">

                    Infrastructure-as-Code for Complete Beginners

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">

                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Nancy Gariché</strong></p>
                      
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/nanzgtweets" target="_blank"><strong>@nanzgtweets</strong></a></p>

                      <p class="white"><strong class="white">Abstract:&nbsp;</strong></p>

                      <p class="services__item__text">Ready to take your first steps with Infrastructure-as-Code? During
                        the workshop, we'll learn how to define and manage an infrastructure using a simple, declarative
                        programming language and how to deploy and manage that infrastructure using a few CLI commands.
                      </p>
                      <p class="services__item__text">We'll provision an infrastructure including two (2) APIs on two
                        (2) cloud service providers (CSP) using Hashicorp's Terraform and we'll make these two
                        applications communicate.</p>
                      <p class="services__item__text">
                        This workshop is perfect for beginners who have never used Terraform. Take this opportunity to
                        learn-by-doing while you play around in different CSP environments.
                      </p>

                    </div>
                  </div>
                </div>
              </div>
            </div>-->
            <!--<div class="panel panel-default">
              <a class="panel-btn" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2"
                href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                <div class="panel-heading" role="tab" id="headingSeven">
                  <h4 class="panel-title">

                    Learning AWS Pentesting with CloudGoat2

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">


                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Jeff Anderson</strong></p>
                      
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/TheJBAnderson" target="_blank"><strong>@TheJBAnderson</strong></a>
                      </p>

                      <p class="white"><strong class="white">Abstract:&nbsp;</strong></p>

                      <p class="services__item__text">AWS pentesting is still in its infancy. Newcomers to the field
                        often find it hard to figure out where to start.
                      </p>
                      <p class="services__item__text">This workshop will teach AWS pentesting beginners how to approach
                        an AWS environment using the intentionally vulnerable environments provided by CloudGoat2. There
                        will be live demos of setting up the CloudGoat2 environment as well as reconnaissance and
                        exploitation of AWS vulnerabilities that are found in the wild.</p>

                      <p class="services__item__text">This talk is rated 101 level with a target audience of penetration
                        testers who are interested in expanding their skillset to include AWS.</p>
                      <p class="services__item__text">
                        Participants are expected to have a basic understanding of penetration testing in general and
                        some experience working with AWS.
                      </p>
                      <p class="services__item__text">
                        Participants will provide their own laptops and will need to have a Free-tier AWS account set up
                        prior to the workshop.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->
            <div class="panel panel-default">
              <a class="panel-btn" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2"
                href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                <div class="panel-heading" role="tab" id="headingEight">
                  <h4 class="panel-title">

                    Pragmatic Cloud Security Automation

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">

                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Rich Mogull</strong></p>
                      <!--<p class="green"><strong class="white">Date:&nbsp;</strong><strong>TBA</strong></p>
                          <p class="green"><strong class="white">Time:&nbsp;</strong><strong>TBA</strong></p>-->
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/rmogull" target="_blank"><strong>@rmogull</strong></a></p>

                      <p class="services__item__text">Automating cloud security operations takes a little more than
                        slapping together a quick lambda to fix an open S3 bucket (but that isn't a bad start). In this
                        workshop we will cover the major categories of security automations and present practical
                        implementation techniques. Come prepared to build your own (or use our starter scripts) as we:
                      </p>
                      <ul class="custom-list">
                        <li class="white">Review the three major categories of automations- guardrails, workflows, and
                          orchestrations.</li>
                        <li class="white">Build demo versions of each (in AWS, bring your own account), incorporating
                          techniques including assessments, event-driven guardrails, and an incident response workflow.
                        </li>
                        <li class="white">See demonstrations of cross-product orchestrations that integrate commercial
                          tools.</li>
                        <li class="white">Learn the tricks of the trade, based on 10 years of hands-on research and
                          implementation (for realz, check the intertubes if you don't believe us).</li>
                        <li class="white">See what it takes to implement automations at global scale.</li>

                      </ul>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--<div class="panel panel-default">
              <a class="panel-btn" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2"
                href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                <div class="panel-heading" role="tab" id="headingNine">
                  <h4 class="panel-title">

                    Azure Cloud Security Workshop

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">

                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Tanya Janca</strong></p>
                     
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/shehackspurple" target="_blank"><strong>@shehackspurple</strong></a>
                      </p>

                      <p class="services__item__text">Have you ever wondered how security is different ‘in the cloud'?
                        How is Cloud Security and the "Cloud Native" approach different than a traditional data center?
                        How can you see what's going
                        on with your resources? How do you patch? Where can you see your server configs other important
                        information? How do you manage a security incident? How do you even know that you're having an
                        incident?

                      </p>
                      <p class="services__item__text">This workshop has 3 parts:</p>
                      <ul class="custom-list">
                        <li class="white">Group discussion of how cloud native security is different than traditional
                          data centre security</li>
                        <li class="white">Demo of Azure Security Centre
                        </li>
                        <li class="white">See demonstrations of cross-product orchestrations that integrate commercial
                          tools.</li>
                        <li class="white">Audience members investigate issues and mitigate security issues, in Azure, as
                          a group</li>
                      </ul>

                      <p class="services__item__text">Demo will include:</p>
                      <ul class="custom-list">
                        <li class="white">Complete Azure Security Centre walkthrough</li>
                        <li class="white">Policy and compliance, including subscription coverage
                        </li>
                        <li class="white">Resource Security Hygiene</li>
                        <li class="white">Azure Security Centre Recommendations (mitigation of one or more items,
                          dependent on time)</li>
                        <li class="white">Threat Protection, Alerts and Logging</li>
                        <li class="white">Applying System Updates
                        </li>

                      </ul>

                      <p class="services__item__text">Audience Participation (people who do not have a laptop can follow
                        along with the teacher)</p>
                      <ul class="custom-list">
                        <li class="white">Load Azure Labs into your trial subscription</li>
                        <li class="white">Upgrade Security Centre to "Standard" coverage</li>
                        <li class="white">Check your security configurations and settings to ensure your apps are safe
                        </li>
                        <li class="white">Implement some of the recommendations</li>
                        <li class="white">Force HTTPS</li>
                        <li class="white">Turn on Threat protection</li>
                        <li class="white">Perform an SQL Injection, then investigate</li>
                        <li class="white">More as time permits.</li>

                      </ul>

                      <p class="services__item__text">What you will need if you want to participate after the demo:</p>
                      <ul class="custom-list">
                        <li class="white">A laptop running any modern operating system (Mac OS, Windows, Linux)</li>
                        <li class="white">Modern web browser (Edge, Chrome, FireFox)
                        </li>
                        <li class="white">Wi-fi and internet</li>
                        <li class="white">An activated Azure Trial. Please activate your trial before the workshop. The
                          workshop will not wait if you have not activated your trail.</li>
                      </ul>

                      <p class="services__item__text">To activate your free Azure trail for this workshop please go
                        here: <a href="https://aka.ms/Azure-Cloud-Security-Workshop"
                          target="_blank">https://aka.ms/Azure-Cloud-Security-Workshop</a>
                      </p>
                      <p class="services__item__text">** If you have previously used your free Azure Trail you will not
                        be able to have another one or this workshop.</p>

                      <p class="services__item__text">**You will need to use a credit card to activate your trial, but
                        the trial itself is free for 30 days, up to $200. We will use up to $30 of your credit with this
                        workshop.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->


          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="category-3">
          <div class="panel-group talks-panel-group" id="accordion-3" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <a class="panel-btn" role="button" data-toggle="collapse" data-parent="#accordion-3" href="#collapseTen"
                aria-expanded="true" aria-controls="collapseTen">
                <div class="panel-heading" role="tab" id="headingTen">
                  <h4 class="panel-title">

                    ATT&CKing the Sentinel – deploying a threat hunting capability on Azure Sentinel using Sysmon and
                    MITRE ATT&CK

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">

                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Edoardo Gerosa</strong></p>
                      <!--<p class="purple"><strong class="white">Date:&nbsp;</strong><strong>TBA</strong></p>
                              <p class="purple"><strong class="white">Time:&nbsp;</strong><strong>TBA</strong></p>-->
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/netevert" target="_blank"><strong>@netevert</strong></a></p>

                      <p class="white"><strong class="white">Abstract:&nbsp;</strong></p>

                      <p class="services__item__text">Azure Sentinel, Microsoft's new cloud SIEM solution, was recently
                        released on the market. Notwithstanding its strengths Sentinel offers limited threat hunting
                        capabilities out of the box and setting up an effective hunting solution is not straightforward.
                        The Sentinel ATT&CK GitHub project is designed to provide guidance on setting up an
                        ATT&CK-driven process monitoring solution within Sentinel; giving DFIR professionals a tool to
                        effectively hunt in the Azure cloud.
                      </p>
                      <p class="services__item__text">The project, building on previous work from the open source DFIR
                        community, provides instructions on how to properly configure Sysmon to monitor and detect
                        specific processes in alignment with MITRE's ATT&CK framework. Secondly it provides clarity on
                        how to onboard Sysmon logs from Windows virtual machines, shedding light on some poorly
                        documented areas, while also offering an open source parser to correctly ingest Sysmon data in
                        conformity with the Open Source Security Event Metadata information model. Thirdly it offers
                        around 120 open source Kusto Query Language alerts ready for deployment; each mapped to a unique
                        MITRE ATT&CK technique. Fourthly it provides a dedicated threat hunting dashboard to help DFIR
                        professionals monitor their environment and execute precise hunts. Finally, Sentinel ATT&CK
                        provides ready-made hunting queries to be leveraged when responding to alert notifications
                        raised by the threat hunting dashboard.</p>
                      <p class="services__item__text">
                        This talk delivers an overview of how the Sentinel ATT&CK project can help organisations
                        establish an effective threat hunting capability in Azure as well as an opportunity to share
                        with the community the strengths and shortcomings of Sentinel when it comes to hunting
                        adversaries within the Microsoft cloud.
                      </p>

                      <p class="services__item__text">The talk will be structured as follows:</p>
                      <ul class="custom-list">
                        <li class="white">Introductions (2 minutes): A brief introduction to provide our short
                          biographies and a
                          description of our current roles - both speakers</li>
                        <li class="white">Project background (3 minutes): An overview of how the project came to be,
                          covering previous
                          Splunk work from the DFIR open source community that helped establish the foundations of
                          Sentinel ATT&CK - both speakers</li>
                        <li class="white">The problem (5 minutes): Although Azure Sentinel contains excellent features –
                          for e.g. threat
                          response automation with Logic Apps (1 minute), a powerful query language (1 minute) and
                          incident grouping (1 minute); the platform offers limited threat hunting capabilities out of
                          the
                          box. Moreover, two major downsides make it difficult to quickly set up a robust,
                          well-structured
                          threat hunting capability; these are a) poor documentation around log onboarding (1 minute)
                          and
                          b) very limited data normalisation features at ingestion time (1 minute) - Edoardo Gerosa</li>
                        <li class="white">The solution – Sentinel ATT&CK (10 minutes): An overview of the project and
                          how it can help
                          with quickly deploying an effective threat hunting solution for Sentinel – starting with a
                          lighting overview of MITRE ATT&CK (1 minute) , then covering how to configure Sysmon to
                          monitor
                          specific ATT&CK techniques (2 minutes), how to onboard Sysmon logs into Azure (2 minutes),
                          Sentinel parsing best practices (2 minutes), using Kusto to execute hunts (2 minutes) and
                          concluding with an overview of the project's threat hunting dashboard (1 minute) - Edoardo
                          Gerosa</li>
                        <li class="white">Demo and Q&A session (10 minutes): we'll showcase a live instance of Sentinel
                          ATT&CK deployed
                          on our Azure lab to walk through the functionalities of the platform, execute a demo hunt and,
                          if necessary, to provide practical deep-dives to participant questions - Olaf Hartong</li>

                      </ul>
                      <p class="services__item__text">In order to stimulate discussion during the demo and Q&A session
                        we will have three questions in our back-pocket to ask participants; these will be as follows:
                      </p>

                      <ul class="custom-list">
                        <li class="white">Who has used Sentinel and what is their opinion of the platform?</li>
                        <li class="white">Who uses Sysmon as a process monitoring solution in their network and what is
                          their opinion
                          of the tool?</li>
                        <li class="white">What are some of the response activities that could be performed with Sentinel
                          on compromised
                          virtual machines, especially considering the in-built SOAR capabilities of the platform?</li>


                      </ul>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <a class="panel-btn" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-3"
                href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                <div class="panel-heading" role="tab" id="headingEleven">
                  <h4 class="panel-title">

                    PacBot - Policy as Code from T-Mobile OSS

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">


                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Setu Parimi</strong></p>
                      <!--<p class="purple"><strong class="white">Date:&nbsp;</strong><strong>TBA</strong></p>
                              <p class="purple"><strong class="white">Time:&nbsp;</strong><strong>TBA</strong></p>-->
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a href="javascript:;"
                          target="_blank"><strong>NA</strong></a>
                      </p>

                      <p class="white"><strong class="white">Abstract:&nbsp;</strong></p>

                      <p class="services__item__text">Policy as Code Bot (PacBot) is a platform for continuous
                        compliance monitoring, compliance reporting and security automation for the cloud. In PacBot,
                        security and compliance policies are implemented as code. All resources discovered by PacBot are
                        evaluated against these policies to gauge policy conformance. The PacBot auto-fix framework
                        provides the ability to automatically respond to policy violations by taking predefined actions.
                      </p>
                      <p class="services__item__text">PacBot packs in powerful visualization features, giving a
                        simplified view of compliance and making it easy to analyze and remediate policy violations.
                        PacBot is more than a tool to manage cloud misconfiguration, it is a generic platform that can
                        be used to do continuous compliance monitoring and reporting for any domain.</p>


                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <a class="panel-btn" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-3"
                href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                <div class="panel-heading" role="tab" id="headingTwelve">
                  <h4 class="panel-title">

                    Rethinking Cloud Security with a Software-Defined Perimeter

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">

                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Jason Garbis</strong></p>
                      <!--<p class="green"><strong class="white">Date:&nbsp;</strong><strong>TBA</strong></p>
                              <p class="green"><strong class="white">Time:&nbsp;</strong><strong>TBA</strong></p>-->
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/JasonGarbis" target="_blank"><strong>@JasonGarbis</strong></a></p>

                      <p class="services__item__text">TCP/IP has failed us. Its "implicit trust" philosophy permits
                        anyone to connect to a system before authentication or authorization is applied. And, as we
                        witness daily, the results are not pretty: Not only successful attacks, but ongoing operational
                        headaches and complex toolsets required to manage cloud network access.
                      </p>
                      <p class="services__item__text">Even today's most advanced Cloud environments rely on TCP/IP, with
                        all its shortcomings, and the
                        widely available Cloud access controls fall short. It's imperative to change the way we approach
                        network security, and adopt a fundamentally more secure, "zero trust" model. We need to realize
                        that the ability to establish a network connection to a system is in fact a privilege, and
                        therefore we must authorize all users before they can do so. This approach hides our systems
                        from all unauthorized users, effectively eliminates DDoS attacks, and dramatically shrinks our
                        network attack surface.</p>
                      <p class="services__item__text">This session introduces an open model for Cloud network security:
                        the Software-Defined Perimeter
                        (SDP). This security architecture, published by the Cloud Security Alliance, provides a "zero
                        trust" model built with a distributed, scalable, architecture comprising SDP Controller and
                        network Gateways. All network resources remain hidden behind Gateways, unless users are
                        permitted access via real-time policies. The SDP Controller and Gateways themselves are hidden
                        on the network – users must authenticate via a highly efficient, cryptographically secured
                        mechanism – Single Packet Authorization – before a connection to the system is permitted.</p>
                      <p class="services__item__text">We introduce the SDP technical architecture, and show how it's
                        deployed in a IaaS environment,
                        to secure access to Cloud compute resources. We'll compare and contrast SDP with Cloud-native
                        network security solutions (e.g. Security Groups, Direct Connect) as well as traditional
                        security solutions (e.g. VPNs), and explain why SDP is superior. After a brief demonstration, we
                        will conclude with a reference architecture for SDP in cloud environments.</p>
                      <p class="services__item__text">Join us to learn why and how SDP literally makes network resources
                        invisible to unauthorized
                        users.</p>


                    </div>
                  </div>
                </div>
              </div>
            </div>



          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="category-4">
          <div class="panel-group talks-panel-group" id="accordion-4" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <a class="panel-btn" role="button" data-toggle="collapse" data-parent="#accordion-4"
                href="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">
                <div class="panel-heading" role="tab" id="headingThirteen">
                  <h4 class="panel-title">

                    Security Battle Wounds from a Cloud SRE

                  </h4>
                  <div class="plus-sym"></div>
                </div>
              </a>
              <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel"
                aria-labelledby="headingThirteen">
                <div class="panel-body">
                  <div class="item">
                    <div class="services__item">

                      <p class="purple"><strong class="white">Speaker:&nbsp;</strong><strong>Jane Miceli</strong></p>
                      <!--<p class="purple"><strong class="white">Date:&nbsp;</strong><strong>TBA</strong></p>
                                  <p class="purple"><strong class="white">Time:&nbsp;</strong><strong>TBA</strong></p>-->
                      <p class="purple"><strong class="white">Twitter:&nbsp;</strong><a
                          href="https://twitter.com/janemiceli" target="_blank"><strong>@janemiceli </strong></a></p>

                      <p class="white"><strong class="white">Abstract:&nbsp;</strong></p>

                      <p class="services__item__text">Learn about a breach, what happens in the aftermath and why I
                        can't tell my peers what happen. Learn the fallout and more importantly what application
                        developers aren't thinking about.
                      </p>

                    </div>
                  </div>
                </div>
              </div>
            </div>




          </div>
        </div>
      </div>

      <div class="services__header-block">
        <h2 class="services__header col-xs-12 col-sm-8">Schedule (DEF CON 27)</h2>
      </div>
      <hr class="services__line">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#day-1" aria-controls="day-1" role="tab" data-toggle="tab">Day
            1</a></li>
        <li role="presentation"><a href="#day-2" aria-controls="day-2" role="tab" data-toggle="tab">Day 2</a></li>
        <li role="presentation"><a href="#day-3" aria-controls="day-3" role="tab" data-toggle="tab">Day 3</a>
        </li>
      </ul>

      <div class="tab-content r-mt-6">
        <div role="tabpanel" class="tab-pane fade in active" id="day-1">
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>08:00 - 12:00</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Setting Up The Village
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>12:00 - 12:20</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Opening Note
                  15 + 5 minutes
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>12:20 - 13:00 </strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Keynote
                  35 + 5 Minutes
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="collapseOne">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>13:00 - 13:40</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Colin Estep - Exploiting IAM in the Google Cloud Platform
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="collapseDani">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>13:40 - 14:20</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Dani Goland, Mohsan - Battle in the Clouds: Attacker vs Defender on AWS
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="collapseTen">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>14:20 - 14:50</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Edoardo Gerosa - ATT&CKing the Sentinel – deploying a threat hunting capability on Azure Sentinel using Sysmon and MITRE ATT&CK
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>14:50 - 15:25</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Claranet
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="collapseThirteen">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>15:25 - 15:50</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Jane Miceli - Security Battle Wounds from a Cloud SRE
                </p>
              </div>
            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="collapseEight">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>16:50 - 18:00</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Rich Mogull - Pragmatic Cloud Security Automation
                </p>
              </div>
            </div>
          </div>

        </div>





        <div role="tabpanel" class="tab-pane fade in" id="day-2">

          <div class="schedule-item dashed-line r-mb-2 r-mt-2">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>09:00 - 09:55</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Registration
                  & Village Setup

                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="collapseThree">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>10:00 - 10:40</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">

                  Chris le roy - Build to Hack, Hack to Build
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="collapseFive">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>10:40 - 11:20</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Ayman Elsawah - Applying Pareto's Principle for Securing AWS with SCPs
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>11:20 - 11:45</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Lightening Talk
                  (20 minutes +5)
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="collapseEleven">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>11:45 - 12:15</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Setu Parimi - PacBot - Policy as Code from T-Mobile OSS
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="collapseTwo">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>12:15 - 13:00</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Rotem Bar - Hacking into automotive clouds
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="collapseTanya">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>13:00 - 13:45</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Tanya Janca - DYI Azure Security Assessment
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="collapseRod">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>13:45 - 14:25</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Rod Soto - Using Splunk for Auditing AWS/GCP/Azure Security posture
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="collapseJames">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>14:25 - 15:05</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  James Strassburg - Scaling Security in the Cloud With Open Source
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="collapseFour">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>15:05 - 15:50</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Erick Galinkin - Your Blacklist is Dead: Why the Future of Command and Control is the Cloud
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>16:00 - 18:00</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Andrew Krug - MozDef
                </p>
              </div>

            </div>
          </div>


        </div>
        <div role="tabpanel" class="tab-pane fade in" id="day-3">
          <div class="schedule-item dashed-line r-mb-2 r-mt-2">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>09:00 - 09:55</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">

                  Registration
                  & Village Setup

                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="collapseCheryl">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>10:00 - 11:50</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Cheryl Biswas - Mining Malevolence: Cryptominers in the Cloud
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>11:50 - 12:15</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Josh Mize - Securing Multi-cloud Kubernetes
                </p>
              </div>

            </div>
          </div>
          <div class="schedule-item dashed-line r-mb-2 r-mt-2" data-id="collapseAshwini">
            <div class="row">
              <div class="col-md-2 col-xs-3">
                <p class="white"><strong>12:15 - 13:00</strong></p>
              </div>
              <div class="col-md-10 col-xs-9 vertical-line">
                <p class="green">
                  Ashwin Vamshi, Abhinav Singh - Phishing in the cloud era
                </p>
              </div>

            </div>
          </div>



        </div>
      </div>


      <!---<div class="coming-soon green">To be announced. Stay tuned.</div>-->
    </div>
  </section>

  <!--	Timelines
*********************************-->
  <section id="timelines" class="works section">
    <div class="container">
      <div class="row">
        <!-- header and buttons of the gallery -->
        <div class="works__header">
          <h2 class="col-xs-12 col-sm-3">Timelines for 2019</h2>
          <nav class="works__header__nav col-xs-12 col-sm-9">
            <button data-filter="*" class="works__nav__item works__nav__item_active"><span
                class="works__button_underline"></span>All</button>
            <button data-filter=".1st-quarter" class="works__nav__item"><span class="works__button_underline"></span>1st
              quarter</button>
            <button data-filter=".2nd-quarter" class="works__nav__item"><span class="works__button_underline"></span>2nd
              quarter</button>
            <button data-filter=".3rd-quarter" class="works__nav__item"><span class="works__button_underline"></span>3rd
              quarter</button>
            <button data-filter=".4th-quarter" class="works__nav__item"><span class="works__button_underline"></span>4th
              quarter</button>
          </nav>
        </div>
      </div>

      <div class="gallery">
        <!-- gallery container -->
        <div class="gallery__items">
          <!--<div class="coming-soon purple">To be announced. Stay tuned.</div>-->
          <!-- gallery item -->
          <div class="gallery__item gallery__item_1 col-xs-12 col-sm-6 1st-quarter">
            <div class="gallery__item__hover">
              <span class="item__hover__line"></span><span class="item__hover__tag">09th - 11th August, 2019</span>

              <h3 class="item__hover__header"><a
                  href="https://docs.google.com/forms/d/e/1FAIpQLSeGxSDgynvAv7Q1dTPeobZUPo5jdlbrcNSQAYVLgRqCF6T0bg/viewform"
                  target="_blank" title="CFP for DEF CON 27">CFP for Talks/Workshops/Tool Demo Open</a></h3>
              <h4 class="item__hover__header-small">DEF CON 27, Las Vegas, Nevada</h4>

              <a href="https://docs.google.com/forms/d/e/1FAIpQLSeGxSDgynvAv7Q1dTPeobZUPo5jdlbrcNSQAYVLgRqCF6T0bg/viewform"
                target="_blank" class="item__hover__zoom" title="CFP for DEF CON 27">

                +&nbsp;More
              </a>
            </div>
          </div>




        </div>


      </div>
    </div>
  </section>

  <!-- clients and contacts section -->
  <section id="sponsers" class="clients section sponsor-section">
    <div class="container">
      <div class="clients__header row">
        <h2 class="col-xs-12 col-md-9 text__header white">Become a sponsor</h2>
        <div class="col-xs-12 col-md-12">
          <p class="text__par">If you are interested in sponsoring Cloud Village, drop us an email at <a
              href="mailto:hello@cloud-village.org">hello@cloud-village.org</a> or fill in this quick <a
              href="https://docs.google.com/forms/d/e/1FAIpQLSfIlR_-GZ_WqAwu64AobwRPdaiqw8DZusjTPNm4bVoOtH2k3g/viewform"
              target="_blank">Google Form</a>.
          </p>
          <p class="text__par">We are a Not For Profit, community-driven village that strives to promote and support
            research in Cloud security community. All the money we get from sponsors goes in expenses of the village,
            i.e., t-shirts, badges, stickers, networking party, logistics, etc.
          </p>
          <!--<p class="text__par">Below is the list of possible benefits we can provide to our Sponsors:
            </p>-->

          <a href="https://docs.google.com/forms/d/e/1FAIpQLSfIlR_-GZ_WqAwu64AobwRPdaiqw8DZusjTPNm4bVoOtH2k3g/viewform"
            target="_blank" class="text__button inline-btn" title="Become a sponsor">Become a sponsor</a>
        </div>

      </div>

      <div class="logo-container row clearfix">
          <h2 class="col-xs-12 col-md-9 text__header white">Our sponsors (Gold)</h2>
          <div class="col-md-12">
            <ul class="logo-list">
              <li><img src="images/claranet.png" alt="Claranet"></li>
            </ul>
          </div>
        </div>

    </div>

  </section>

  <!--	Contact us
	*********************************-->


  <footer class="contact container">
    <!--<div class="row">
        <div class="col-xs-12 col-md-12">
          <p class="copy-1">Below is the list of possible benefits we can provide to our Sponsors:</p>
          <ul class="custom-list">
            <li>Verbal Recognition (Opening, Closing of the village)</li>
            <li>Shoutout CTF / Hackathon Prizes</li>
            <li>Shout Out on Social media</li>
            <li>Hiring Opportunity (Participants who opts for 'Share my details with Recruiters')</li>
            <li>Brand Recognition in Schedule Pamphlets</li>
            <li>Drop Stickers at Reg. / Info Desk</li>
            <li>Distribute goodies at Reg. / Info Desk</li>
            
            
          </ul>
           <p class="text__par">If you are interested in sponsoring Recon Village at DEFCON 27, drop us an email at <a href="mailto:sponsors@cloudvillage.org">sponsors@cloudvillage.org</a>
            </p>
        </div>
      </div>-->
    <div class="row">
      <div class="contact__inf col-xs-12 col-sm-6">
        <h2 id="contact" class="section">Contact Us</h2>

        <p class="contact__text">
          Send us an email at<br>
          <a class="contact__email" href="mailto:hello@cloud-village.org">hello@cloud-village.org</a>
        </p>



        <!-- social networks -->
        <div class="social">
          <!--<div class="social__link-and-icon">
							<span class="icon icon-facebook"></span><a class="social__link" href="javascript:void">Facebook<span class="social__link_underline"></span></a>
							
						</div>-->
          <div class="social__link-and-icon">
            <span class="icon icon-twitter"></span><a class="social__link" href="https://twitter.com/cloudvillage_dc"
              target="_blank">Twitter<span class="social__link_underline"></span></a>

          </div>

        </div>

        <p class="copyright">© 2019 Cloud Village - Powered by <a href="https://www.defcon.org/" target="_blank">DEF
            CON</a></p>
      </div>
      <div class="col-sm-6 col-xs-12 contact__inf">
        <div class="contact-img"></div>
      </div>
    </div>
  </footer>

  <!--	clients logos
	*********************************-->
  <!--<section class="clients-logos container">
			<div class="clients-logos__wrapper">
				<img class="clients-logos__image" src="images/icons/newyork.png" alt="New York">
				<img class="clients-logos__image" src="images/icons/brooks.png" alt="Brooks">
				<img class="clients-logos__image" src="images/icons/smokers.png" alt="Smokers">
			
				<img class="clients-logos__image" src="images/icons/miller.png" alt="Miller">
				<img class="clients-logos__image" src="images/icons/veela.png" alt="Veela">
				<img class="clients-logos__image" src="images/icons/jumber.png" alt="Lumber">
			</div>
		</section>
	</section>-->


  <!-- jQuery -->
  <script src="js/libs/jquery.min.js"></script>
  <script src="js/libs/bootstrap.min.js"></script>
  <!-- carousel -->
  <!--<script src="js/libs/owl.carousel.min.js"></script>-->
  <!-- slider -->
  <!--<script src="js/libs/slick.min.js"></script>-->
  <!-- manipulation with text -->
  <script src="js/libs/jquery.lettering-0.6.1.min.js"></script>
  <script src="js/libs/jquery.textillate.js"></script>
  <!-- gallery filter -->
  <script src="js/libs/isotope.pkgd.min.js"></script>
  <!-- popup -->
  <!--<script src="js/libs/jquery.magnific-popup.min.js"></script>-->
  <!-- smooth scroll -->
  <script src="js/libs/jquery.smooth-scroll.min.js"></script>
  <!-- menu -->
  <script src="js/menu.js"></script>
  <!-- castom js script -->
  <script src="js/main.js?<?php $t=time(); echo $t; ?>"></script>

  <!-- load more function -->
  <script src="js/load_more.js"></script>
  <!-- load more settings -->
  <script>
    /*items_set = [{
        filter: 'design',
        backgroundImage: 'images/photos/laptop.jpg',
        tagName: 'Design',
        headingHref: 'javascript:void',
        heading: 'Laptop and keyboard',
        headingSmall: 'Awesome typing',
        img: 'images/magnificpopup/redstrip.jpg',
        title: 'Just simple block'
      },
      {
        filter: 'identy',
        backgroundImage: 'images/photos/cookie.jpg',
        tagName: 'Identy',
        headingHref: 'javascript:void',
        heading: 'Cookie and Coffee',
        headingSmall: 'Take a break',
        img: 'images/magnificpopup/cookie.jpg',
        title: 'Coffee Web Site'
      },
      {
        filter: 'web',
        backgroundImage: 'images/photos/essentials.jpg',
        tagName: 'Web Design',
        headingHref: 'javascript:void',
        heading: 'Magazines',
        headingSmall: 'Nice reading',
        img: 'images/magnificpopup/essentials.jpg',
        title: 'Coffee Web Site'
      },
      {
        filter: 'identy',
        backgroundImage: 'images/photos/softs.jpg',
        tagName: 'Identy',
        headingHref: 'javascript:void',
        heading: 'Sheets of paper',
        headingSmall: 'Getting correct information',
        img: 'images/magnificpopup/softs.jpg',
        title: 'Coffee Web Site'
      },
    ];

    $('.gallery__items').portfolio_addon({
      load_count: 2,
      items: items_set
    });*/
  </script>
</body>

</html>