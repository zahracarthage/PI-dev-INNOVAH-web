<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* singleshow.html.twig */
class __TwigTemplate_918e03e3ad84e9fdb8bcc29c6f77dd71cd6b3552f6278cb6545770e583bf5b1f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'name' => [$this, 'block_name'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "singleshow.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "singleshow.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <!-- META DATA -->
    <meta charset=\"UTF-8\">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Gowell - Travel HTML Listing Template\">
    <meta name=\"author\" content=\"Spruko™ Technologies Private Limited\">
    <meta name=\"keywords\" content=\"Tours And Travels website,online Tours And Travels website,directory listing sites,bootstrap form template,bootstrap templates,responsive web design,bootstrap website templates,Tours And Travels,Tours And Travels template,Tours And Travels listing,buy web templates,directory,directory html template,directory listing html template,directory website template,html list template,html template,html5 responsive template,html5 template,local Tours And Travels directory,local Tours And Travels listing,online Tours And Travels directory,online directory,premium,premium bootstrap templates,small Tours And Travels directory,classified,Premium Tours And Travels directory Templates,Directory & Listing HTML Template,Tours And Travels listing websites\">
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"favicon.ico\" />

    <!-- Title -->
   ";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "
    <!-- Bootstrap Css -->
    <link href=\"../../assets/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" />

    <!-- Style Css -->
    <link href=\"../../assets/css/style.css\" rel=\"stylesheet\" />

    <!-- Icons Css -->
    <link href=\"../../assets/css/icons.css\" rel=\"stylesheet\"/>

    <!-- Jquery-bar-rating css-->
    <link rel=\"stylesheet\" href=\"../../assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css\">

    <!-- Auto Complete css -->
    <link href=\"../../assets/plugins/autocomplete/jquery.autocomplete.css\" rel=\"stylesheet\">

    <!--wickedpicker css-->
    <link href=\"../../assets/plugins/wildtime/wickedpicker.min.css\" rel=\"stylesheet\">

    <!-- jquery ui RangeSlider -->
    <link href=\"../../assets/plugins/jquery-uislider/jquery-ui.css\" rel=\"stylesheet\">

    <!-- Color-Skins -->
    <link id=\"theme\" href=\"../../assets/color-skins/color.css\"  rel=\"stylesheet\"/>

</head>
<body>

<!--Loader-->
<div id=\"global-loader\" class=\"bg-primary\">
    <div class=\"loader-svg-img\">
        <img src=\"../../assets/images/brand/2.png\" class=\"\" alt=\"\">
        <div class=\"flight-icon\"><i class=\"fa fa-plane\"></i></div>
    </div>
</div>
<!--/Loader-->

<!--Horizontal Section-->
<div class=\"header-main header-style03\">
    <div class=\"top-bar app-header-background app-header-background2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-8 col-lg-8 col-sm-4 col-7\">
                    <div class=\"top-bar-left d-flex\">
                        <div class=\"clearfix\">
                            <ul class=\"socials\">
                                <li>
                                    <a class=\"social-icon text-white\" href=\"#\"><i class=\"fa fa-facebook text-white\"></i></a>
                                </li>
                                <li>
                                    <a class=\"social-icon text-white\" href=\"#\"><i class=\"fa fa-twitter text-white\"></i></a>
                                </li>
                                <li>
                                    <a class=\"social-icon text-white\" href=\"#\"><i class=\"fa fa-linkedin text-white\"></i></a>
                                </li>
                                <li>
                                    <a class=\"social-icon text-white\" href=\"#\"><i class=\"fa fa-google-plus text-white\"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-sm-8 col-5\">
                    <div class=\"top-bar-right\">
                        <ul class=\"custom\">
                            <li>
                                <a href=\"register.html\" class=\"text-white\"><i class=\"fa fa-user mr-1 text-white\"></i> <span>Register</span></a>
                            </li>
                            <li>
                                <a href=\"login.html\" class=\"text-white\"><i class=\"fa fa-sign-in mr-1 text-white\"></i> <span>Login</span></a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"text-white\" data-toggle=\"dropdown\"><i class=\"fa fa-home mr-1 text-white\"></i><span> My Dashboard</span><i class=\"fa fa-angle-down ml-1 header-dropdown-icon\"></i></a>
                                <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-arrow\">
                                    <a href=\"mydash.html\" class=\"dropdown-item\">
                                        <i class=\"dropdown-icon icon icon-user\"></i> My Profile
                                    </a>
                                    <a class=\"dropdown-item\" href=\"#\">
                                        <i class=\"dropdown-icon icon icon-speech\"></i> Inbox
                                    </a>
                                    <a class=\"dropdown-item\" href=\"#\">
                                        <i class=\"dropdown-icon icon icon-bell\"></i> Notifications
                                    </a>
                                    <a href=\"mydash.html\" class=\"dropdown-item\">
                                        <i class=\"dropdown-icon  icon icon-settings\"></i> Account Settings
                                    </a>
                                    <a class=\"dropdown-item\" href=\"login.html\">
                                        <i class=\"dropdown-icon icon icon-power\"></i> Log out
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->

    <!-- /Mobile Header -->

    <div class=\"horizontal-main  bg-dark-transparent clearfix py-lg-3\">
        <div class=\"horizontal-mainwrapper container clearfix\">
            <div class=\"desktoplogo\">
                <a href=\"index.html\"><img src=\"../../assets/images/brand/logo.png\" alt=\"\"></a>
            </div>
            <div class=\"desktoplogo-1\">
                <a href=\"index.html\"><img src=\"../../assets/images/brand/logo.png\" alt=\"\"></a>
            </div>
            <!--Nav-->
            <nav class=\"horizontalMenu clearfix d-md-flex\">
                <ul class=\"horizontalMenu-list\">

                    <li><a href=\"index.html\">Home </a>

                    </li>





                    <li><a href=\"#\">Categories <span class=\"fa fa-caret-down m-0\"></span></a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"index-food.html\">Food Advisor <span class=\"fa fa-caret-down m-0\"></span></a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"food-list.html\">Food Advisor List</a></li>
                                    <li><a href=\"index-food.html\">Food Advisor main page</a></li>

                                </ul>

                            <li><a href=\"index-hotel.html\">Guest Houses
                                    <span class=\"fa fa-caret-down m-0\"></span></a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"hotel-list.html\">Guest houses List</a></li>
                                    <li><a href=\"index-hotel.html\">Guest houses main page</a></li>

                                </ul>
                            <li><a href=\"index-event.html\">Events <span class=\"fa fa-caret-down m-0\"></span></a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"event-list.html\">Events List</a></li>
                                    <li><a href=\"index-event.html\">Events main page</a></li>

                                </ul>
                            <li><a href=\"index-activities.html\">Activities <span class=\"fa fa-caret-down m-0\"></span></a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"activities-list.html\">Activities List</a></li>
                                    <li><a href=\"index-activities.html\">Activities main page</a></li>

                                </ul>

                            <li><a href=\"index-packagesa.html\">Packages <span class=\"fa fa-caret-down m-0\"></span></a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"packages-list.html\">Packages List</a></li>
                                    <li><a href=\"index-packages.html\">Packages main page</a></li>

                                </ul>

                        </ul>
                    </li>




                    <li><a href=\"about.html\">About Us </a></li>
                    <li> <a href=\"shop.html\">Shop</a></li>



                    <li><a href=\"#\">Blog </a>

                    </li>
                    <li><a href=\"contact.html\"> Contact Us</a></li>

                </ul>
            </nav>
            <!--Nav-->
        </div>

    </div>
</div>

<!--Section-->
<div class=\"relative pt-10 pb-10 pattern2 bg-background-color bg-background-color-dark1 cover-image pb-9\" data-image-src=\"../../assets/images/banners/banner16.jpg\">
    <div class=\"header-text1 mb-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-8 col-lg-12 col-md-12 d-block mx-auto\">
                    <div class=\"text-center text-white \">
                       <h1 class=\"mb-2\"><span class=\"font-weight-semibold\">";
        // line 206
        $this->displayBlock('name', $context, $blocks);
        echo "</span></h1>


                    </div>
                </div>
            </div>
        </div>
    </div><!-- /header-text -->

</div>
<!--/Sliders Section-->

<!--BreadCrumb-->
<div class=\"bg-white border-bottom\">
    <div class=\"container\">
        <div class=\"page-header\">
          <h4 class=\"page-title\">Activity Details</h4>

        </div>
    </div>
</div>
<!--/BreadCrumb-->

<!--Add listing-->
";
        // line 230
        $this->displayBlock('container', $context, $blocks);
        // line 385
        echo "
<!--Section-->
<section class=\"sptb cover-image patter-image patter-image bg-background-pattern\" data-image-src=\"../../assets/images/pattern/9.png\">
    <div class=\"content-text mb-0\">
        <div class=\"container\">
            <div class=\"text-center\">
                <span class=\"heading-style text-secondary\">Subscribe</span>
                <h2 class=\"mb-2 font-weight-bold\">Our Newsletter</h2>
                <p class=\"fs-16 mb-0\">It is a long established fact that a reader will be distracted by the readable.</p>
                <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto d-block\">
                        <div class=\"mt-5\">
                            <div class=\"input-group sub-input mt-1\">
                                <input type=\"text\" class=\"form-control input-lg \" placeholder=\"Enter your Email\">
                                <div class=\"input-group-append \">
                                    <button type=\"button\" class=\"btn btn-secondary btn-lg br-tr-5 br-br-5 pl-5 pr-5\">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section-->

<!--Footer Section-->
<section>
    <footer class=\"bg-dark-purple text-white\">
        <div class=\"footer-main border-bottom\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-3 col-lg-6 col-md-12\">
                        <h6>Get In Touch</h6>
                        <ul class=\"list-unstyled mb-0\">
                            <li>
                                <a href=\"#\"><i class=\"fa fa-home mr-3 text-secondary\"></i> New York, Weq Street, NY 10012, US</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-envelope mr-3 text-secondary fs-12\"></i> info12323@example.com</a></li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-phone mr-3 text-secondary\"></i> + 01 234 567 88</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-print mr-3 text-secondary\"></i> + 01 234 567 89</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-12\">
                        <h6>Popular Tour Places</h6>
                        <ul class=\"list-unstyled mb-0\">
                            <li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Canada Navy City </a></li>
                            <li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Watican Flower Park in Paris</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Great Paris Effil Tower</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Histrorical London Stone Bridegs</a></li>
                        </ul>
                    </div>
                    <div class=\"col-xl-2 col-lg-6 col-md-12\">
                        <h6 class=\"\">Latest Tours</h6>
                        <ul class=\"list-unstyled mb-0\">
                            <li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Best Tours In World</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Paris Great Tour</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Top Adventure Tour</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Top Histrorical Tour</a></li>
                        </ul>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 col-md-12\">
                        <div class=\"form-group d-flex mb-0\">
                            <div class=\"mr-4 w-180\">
                                <select class=\"form-control select2\" data-placeholder=\"Select Country\">
                                    <option value=\"en\">English</option>
                                    <option value=\"en\">Arabic</option>
                                    <option value=\"en\">German</option>
                                    <option value=\"en\">Greek</option>
                                </select>
                            </div>
                            <div class=\"mr-4 w-180\">
                                <select class=\"form-control select2\" data-placeholder=\"Select Country\">
                                    <option value=\"en\">USD</option>
                                    <option value=\"en\">EUR</option>
                                    <option value=\"en\">INR</option>
                                    <option value=\"en\">GBP</option>
                                </select>
                            </div>
                        </div>
                        <h6 class=\"mb-2 mt-5\">Payments</h6>
                        <ul class=\"payments mb-0\">
                            <li>
                                <a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-amex\" aria-hidden=\"true\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-visa\" aria-hidden=\"true\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-credit-card-alt\" aria-hidden=\"true\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-mastercard\" aria-hidden=\"true\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-paypal\" aria-hidden=\"true\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-discover\" aria-hidden=\"true\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-google-wallet\" aria-hidden=\"true\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bg-dark-purple text-white p-0 border-bottom\">
            <div class=\"container\">
                <div class=\"p-2 text-center footer-links\">
                    <a href=\"#\" class=\"btn btn-link\">How It Works</a>
                    <a href=\"#\" class=\"btn btn-link\">About Us</a>
                    <a href=\"#\" class=\"btn btn-link\">Pricing</a>
                    <a href=\"#\" class=\"btn btn-link\">Listing Categories</a>
                    <a href=\"#\" class=\"btn btn-link\">Privacy Policy</a>
                    <a href=\"#\" class=\"btn btn-link\">Terms Of Conditions</a>
                    <a href=\"#\" class=\"btn btn-link\">Blog</a>
                    <a href=\"#\" class=\"btn btn-link\">Contact Us</a>
                    <a href=\"#\" class=\"btn btn-link\">Premium Ad</a>
                </div>
            </div>
        </div>
        <div class=\"bg-dark-purple text-white-50 p-3\">
            <div class=\"container\">
                <div class=\"row d-flex\">
                    <div class=\"col-lg-12 col-sm-12  mt-2 mb-2 text-center \">
                        Copyright © 2020 <a href=\"#\" class=\"fs-14 text-secondary\">Gowell</a>. Designed by <a href=\"spruko.com\" class=\"fs-14 text-secondary\">Spruko</a> All rights reserved.
                    </div>
                    <div class=\"col-lg-12 col-sm-12 text-center mb-2 mt-2\">
                        <ul class=\"social-icons mb-0\">
                            <li>
                                <a class=\"social-icon\" href=\"\"><i class=\"fa fa-facebook\"></i></a>
                            </li>
                            <li>
                                <a class=\"social-icon\" href=\"\"><i class=\"fa fa-twitter\"></i></a>
                            </li>
                            <li>
                                <a class=\"social-icon\" href=\"\"><i class=\"fa fa-rss\"></i></a>
                            </li>
                            <li>
                                <a class=\"social-icon\" href=\"\"><i class=\"fa fa-youtube\"></i></a>
                            </li>
                            <li>
                                <a class=\"social-icon\" href=\"\"><i class=\"fa fa-linkedin\"></i></a>
                            </li>
                            <li>
                                <a class=\"social-icon\" href=\"\"><i class=\"fa fa-google-plus\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--Footer Section-->

<!--Comment Modal -->
<div class=\"modal fade\" id=\"Comment\" tabindex=\"-1\" role=\"dialog\"  aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Leave a Comment</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" id=\"Comment-name\" placeholder=\"Your Name\">
                </div>
                <div class=\"form-group\">
                    <input type=\"email\" class=\"form-control\" id=\"Comment-email\" placeholder=\"Email Address\">
                </div>
                <div class=\"form-group mb-0\">
                    <textarea class=\"form-control\" name=\"example-textarea-input\" rows=\"6\" placeholder=\"Message\"></textarea>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancel</button>
                <button type=\"button\" class=\"btn btn-success\">Send</button>
            </div>
        </div>
    </div>
</div>

<!--Map Modal -->
<div class=\"modal fade\" id=\"Map-modal\" tabindex=\"-1\" role=\"dialog\"  aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Direction</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"h-400\">
                    <!--Map-->
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319\" class=\"h-100 w-100 border-0\"></iframe>
                    <!--/Map-->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Report Modal -->
<div class=\"modal fade\" id=\"report\" tabindex=\"-1\" role=\"dialog\"  aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"examplereportLongTitle\">Report Abuse</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" id=\"report-name\" placeholder=\"Enter url\">
                </div>
                <div class=\"form-group\">
                    <select name=\"country\" id=\"select-countries2\" class=\"form-control custom-select select2-no-serach\">
                        <option value=\"1\" selected>Categories</option>
                        <option value=\"2\">Spam</option>
                        <option value=\"3\">Identity Theft</option>
                        <option value=\"4\">Online Shopping Fraud</option>
                        <option value=\"5\">Service Providers</option>
                        <option value=\"6\">Phishing</option>
                        <option value=\"7\">Spyware</option>
                    </select>
                </div>
                <div class=\"form-group\">
                    <input type=\"email\" class=\"form-control\" id=\"report-email\" placeholder=\"Email Address\">
                </div>
                <div class=\"form-group mb-0\">
                    <textarea class=\"form-control\" name=\"example-textarea-input\" rows=\"6\" placeholder=\"Message\"></textarea>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancel</button>
                <button type=\"button\" class=\"btn btn-success\">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Message Modal -->
<div class=\"modal fade\" id=\"contact\" tabindex=\"-1\" role=\"dialog\"  aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"examplecontactLongTitle\">Send Message</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" id=\"contact-name\" placeholder=\"Your Name\">
                </div>
                <div class=\"form-group\">
                    <input type=\"email\" class=\"form-control\" id=\"contact-email\" placeholder=\"Email Address\">
                </div>
                <div class=\"form-group mb-0\">
                    <textarea class=\"form-control\" name=\"example-textarea-input\" rows=\"6\" placeholder=\"Message\"></textarea>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancel</button>
                <button type=\"button\" class=\"btn btn-success\">Send</button>
            </div>
        </div>
    </div>
</div>

<!--  Modal Popup -->
<div class=\"modal fade\" id=\"homeVideo\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog  modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" onclick=\"pauseVid()\"><i class=\"fe fe-x\"></i></button>
            <!--<iframe width=\"560\" height=\"400\" src=\"https://www.youtube.com/embed/kFjETSa9N7A\"  allow=\"accelerometer; autoplay;\" allowfullscreen></iframe>-->
            <div class=\"embed-responsive embed-responsive-16by9\">
                <video id=\"gossVideo\" class=\"embed-responsive-item\" controls=\"controls\">
                    <source src=\"../../assets/video/1.mp4\" type=\"video/mp4\">
                </video>
            </div>
        </div>
    </div>
</div>

<!--  Modal Popup -->
<div class=\"modal fade\" id=\"gallery\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"product-slider modal-body p-2\">
                <div id=\"carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                    <a class=\"gallery-close-button\" href=\"#\" data-dismiss=\"modal\" aria-label=\"Close\"><i class=\"fe fe-x\"></i></a>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\"><img src=\"../../assets/images/places/1.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/2.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/3.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/4.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/5.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/1.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/2.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/3.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/4.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/5.jpg\" alt=\"img\"> </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carousel\" role=\"button\" data-slide=\"prev\">
                        <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carousel\" role=\"button\" data-slide=\"next\">
                        <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"clearfix\">
                    <div id=\"thumbcarousel\" class=\"carousel slide product-slide-thumb\" data-interval=\"false\">
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <div data-target=\"#carousel\" data-slide-to=\"0\" class=\"thumb\"><img src=\"../../assets/images/places/1.jpg\" alt=\"img\"></div>
                                <div data-target=\"#carousel\" data-slide-to=\"1\" class=\"thumb\"><img src=\"../../assets/images/places/2.jpg\" alt=\"img\"></div>
                                <div data-target=\"#carousel\" data-slide-to=\"2\" class=\"thumb\"><img src=\"../../assets/images/places/3.jpg\" alt=\"img\"></div>
                                <div data-target=\"#carousel\" data-slide-to=\"3\" class=\"thumb\"><img src=\"../../assets/images/places/4.jpg\" alt=\"img\"></div>
                                <div data-target=\"#carousel\" data-slide-to=\"4\" class=\"thumb\"><img src=\"../../assets/images/places/5.jpg\" alt=\"img\"></div>

                            </div>
                            <div class=\"carousel-item \">
                                <div data-target=\"#carousel\" data-slide-to=\"0\" class=\"thumb\"><img src=\"../../assets/images/places/1.jpg\" alt=\"img\"></div>
                                <div data-target=\"#carousel\" data-slide-to=\"1\" class=\"thumb\"><img src=\"../../assets/images/places/2.jpg\" alt=\"img\"></div>
                                <div data-target=\"#carousel\" data-slide-to=\"2\" class=\"thumb\"><img src=\"../../assets/images/places/3.jpg\" alt=\"img\"></div>
                                <div data-target=\"#carousel\" data-slide-to=\"3\" class=\"thumb\"><img src=\"../../assets/images/places/4.jpg\" alt=\"img\"></div>
                                <div data-target=\"#carousel\" data-slide-to=\"4\" class=\"thumb\"><img src=\"../../assets/images/places/5.jpg\" alt=\"img\"></div>
                            </div>
                        </div>
                        <a class=\"carousel-control-prev\" href=\"#thumbcarousel\" role=\"button\" data-slide=\"prev\">
                            <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#thumbcarousel\" role=\"button\" data-slide=\"next\">
                            <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Back to top -->
<a href=\"#top\" id=\"back-to-top\" ><i class=\"fe fe-arrow-up\"></i></a>

<!-- JQuery js-->
<script src=\"../../assets/js/jquery-3.5.1.min.js\"></script>

<!-- Bootstrap js -->
<script src=\"../../assets/plugins/bootstrap/js/popper.min.js\"></script>
<script src=\"../../assets/plugins/bootstrap/js/bootstrap.bundle.js\"></script>

<!--JQuery Sparkline Js-->
<script src=\"../../assets/js/jquery.sparkline.min.js\"></script>

<!-- Circle Progress Js-->
<script src=\"../../assets/js/circle-progress.min.js\"></script>

<!-- Selectize Js-->
<script src=\"../../assets/js/selectize.min.js\"></script>

<!-- Jquery-bar-rating Js-->
<script src=\"../../assets/plugins/jquery-bar-rating/jquery.barrating.js\"></script>
<script src=\"../../assets/plugins/jquery-bar-rating/js/rating.js\"></script>

<!--Owl Carousel js -->
<script src=\"../../assets/plugins/owl-carousel/owl.carousel.js\"></script>
<script src=\"../../assets/js/owl-carousel.js\"></script>

<!--Horizontal Menu-->
<script src=\"../../assets/plugins/horizontal/horizontal-menu/horizontal.js\"></script>

<!--JQuery TouchSwipe js-->
<script src=\"../../assets/js/jquery.touchSwipe.min.js\"></script>

<!--Select2 js -->
<script src=\"../../assets/plugins/select2/select2.full.min.js\"></script>
<script src=\"../../assets/js/select2.js\"></script>

<!-- sticky Js-->
<script src=\"../../assets/js/sticky.js\"></script>

<!-- Cookie js -->
<script src=\"../../assets/plugins/cookie/jquery.ihavecookies.js\"></script>
<script src=\"../../assets/plugins/cookie/cookie.js\"></script>

<!--Auto Complete js -->
<script src=\"../../assets/plugins/autocomplete/jquery.autocomplete.js\"></script>
<script src=\"../../assets/plugins/autocomplete/autocomplete.js\"></script>

<!-- Internal :::   Ion.RangeSlider -->
<script src=\"../../assets/plugins/jquery-uislider/jquery-ui.js\"></script>
<script src=\"../../assets/js/price-range.js\"></script>

<!-- Internal :::   Moment js-->
<script src=\"../../assets/plugins/moment/moment.js\"></script>

<!-- Internal :::   Daterange js-->
<script src=\"../../assets/plugins/bootstrap-daterangepicker/daterangepicker.js\"></script>
<script src=\"../../assets/js/daterange.js\"></script>

<!-- Internal :::   Datepicker js -->
<script src=\"../../assets/plugins/date-picker/jquery-ui.js\"></script>

<!-- Internal :::   Timepicker js -->
<script src=\"../../assets/plugins/jquery-timepicker/jquery.timepicker.js\"></script>

<!-- Internal :::    wickedpicker js-->
<script src=\"../../assets/plugins/wildtime/wickedpicker.min.js\"></script>
<script src=\"../../assets/js/timepicker.js\"></script>

<!-- Internal :::   Datepicker js -->
<script src=\"../../assets/js/date-picker.js\"></script>

<!--Internal :::   Showmore Js-->
<script src=\"../../assets/js/jquery.showmore.js\"></script>
<script src=\"../../assets/js/showmore.js\"></script>

<!-- Internal :::   Google Maps Plugin-->
<script src=\"https://maps.google.com/maps/api/js?key=AIzaSyCW16SmpzDNLsrP-npQii6_8vBu_EJvEjA\"></script>
<script src=\"../../assets/plugins/jQuery-Google-Map/jquery.googlemap.js\"></script>
<script src=\"../../assets/plugins/jQuery-Google-Map/map.js\"></script>

<!--Map List js -->
<script src=\"../../assets/plugins/jquery-axgmap/jquery.axgmap.js\"></script>

<!-- Scripts Js-->
<script src=\"../../assets/js/scripts.js\"></script>

<!-- Custom Js-->
<script src=\"../../assets/js/custom.js\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " <title>Gowell - Travel HTML Listing Template</title> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 206
    public function block_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        echo " Event name ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 230
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 231
        echo "<section class=\"sptb\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-8 col-lg-8 col-md-12\">

                <!--Tours And Travels Overview-->
                <div class=\"card overflow-hidden details-accordion\">
                    <div class=\"ribbon ribbon-top-right text-danger font-weight-bold\"><span class=\"bg-danger fs-16 font-weight-bold\">\$456 <small class=\"fs-12\"> / Day</small></span></div>
                    <div class=\"card-body\">
                        <div class=\"accordion\" id=\"accordionExample\">
                            <div class=\"card\">
                                <a href=\"#\" class=\"fs-16 font-weight-semibold2 card-header bg-transparent\" id=\"headingOne\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                    Overview
                                </a>
                                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                                    <div class=\"card-body leading-normal-2\">
                                        <div class=\"mb-0\">
                                            <p class=\"leading-loose\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                            <p class=\"leading-loose\">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                                        </div>
                                        <h4 class=\"card-title mt-6 mb-3 font-weight-semibold2\">Contact Info</h4>
                                        <div class=\"item-user mt-3\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <h6 class=\"font-weight-normal\"><span><i class=\"fe fe-mail mr-3 mb-2 d-inline-block\"></i></span><a href=\"contact.html\" class=\"text-body\"> contact us here</a></h6>
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <h6 class=\"font-weight-normal\"><span><i class=\"fe fe-phone mr-3 mb-2 d-inline-block\"></i></span>0-235-657-24587</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card\">
                                <a href=\"#\" class=\"fs-16 font-weight-semibold2 collapsed card-header bg-transparent\" id=\"headingTwo\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                                    Specifications
                                </a>
                                <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
                                    <div class=\"card-body leading-normal-2\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table row table-borderless w-100 m-0 text-nowrap\">
                                                <tbody class=\"col-lg-12 col-xl-6 p-0\">
                                                <tr>
                                                    <td class=\"px-0\"><span class=\"font-weight-semibold\">Category :</span> Deluxe</td>
                                                </tr>
                                                <tr>
                                                    <td class=\"px-0\"><span class=\"font-weight-semibold\">Date :</span> Canada</td>
                                                </tr>

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <div class=\"card mb-0\">
                                <a href=\"#\" class=\"fs-16 font-weight-semibold2 collapsed card-header\" data-toggle=\"collapse\" id=\"headingEight\" data-target=\"#collapseEight\" aria-expanded=\"true\" aria-controls=\"collapseEight\">
                                    Activity Gallery
                                </a>
                                <div id=\"collapseEight\" class=\"collapse\" aria-labelledby=\"headingEight\" data-parent=\"#accordionExample\">
                                    <div class=\"card-body leading-normal-2\">
                                        <div class=\"product-slider\">
                                            <div id=\"carousel2\" class=\"carousel slide\" data-ride=\"carousel\">
                                                <div class=\"carousel-inner\">
                                                    <div class=\"carousel-item active\"><img src=\"../../assets/images/products/products/h1.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h2.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h3.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h4.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h5.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h1.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h2.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h3.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h4.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h5.jpg\" alt=\"img\"> </div>
                                                </div>
                                                <a class=\"carousel-control-prev\" href=\"#carousel2\" role=\"button\" data-slide=\"prev\">
                                                    <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
                                                </a>
                                                <a class=\"carousel-control-next\" href=\"#carousel2\" role=\"button\" data-slide=\"next\">
                                                    <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
                                                </a>
                                            </div>
                                            <div class=\"clearfix\">
                                                <div id=\"thumbcarousel2\" class=\"carousel slide product-slide-thumb\" data-interval=\"false\">
                                                    <div class=\"carousel-inner\">
                                                        <div class=\"carousel-item active\">
                                                            <div data-target=\"#carousel2\" data-slide-to=\"0\" class=\"thumb\"><img src=\"../../assets/images/products/products/h1.jpg\" alt=\"img\"></div>
                                                            <div data-target=\"#carousel2\" data-slide-to=\"1\" class=\"thumb\"><img src=\"../../assets/images/products/products/h2.jpg\" alt=\"img\"></div>
                                                            <div data-target=\"#carousel2\" data-slide-to=\"2\" class=\"thumb\"><img src=\"../../assets/images/products/products/h3.jpg\" alt=\"img\"></div>
                                                            <div data-target=\"#carousel2\" data-slide-to=\"3\" class=\"thumb\"><img src=\"../../assets/images/products/products/h4.jpg\" alt=\"img\"></div>
                                                            <div data-target=\"#carousel2\" data-slide-to=\"4\" class=\"thumb\"><img src=\"../../assets/images/products/products/h5.jpg\" alt=\"img\"></div>
                                                        </div>
                                                        <div class=\"carousel-item \">
                                                            <div data-target=\"#carousel2\" data-slide-to=\"0\" class=\"thumb\"><img src=\"../../assets/images/products/products/h1.jpg\" alt=\"img\"></div>
                                                            <div data-target=\"#carousel2\" data-slide-to=\"1\" class=\"thumb\"><img src=\"../../assets/images/products/products/h2.jpg\" alt=\"img\"></div>
                                                            <div data-target=\"#carousel2\" data-slide-to=\"2\" class=\"thumb\"><img src=\"../../assets/images/products/products/h3.jpg\" alt=\"img\"></div>
                                                            <div data-target=\"#carousel2\" data-slide-to=\"3\" class=\"thumb\"><img src=\"../../assets/images/products/products/h4.jpg\" alt=\"img\"></div>
                                                            <div data-target=\"#carousel2\" data-slide-to=\"4\" class=\"thumb\"><img src=\"../../assets/images/products/products/h5.jpg\" alt=\"img\"></div>
                                                        </div>
                                                    </div>
                                                    <a class=\"carousel-control-prev\" href=\"#thumbcarousel2\" role=\"button\" data-slide=\"prev\">
                                                        <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
                                                    </a>
                                                    <a class=\"carousel-control-next\" href=\"#thumbcarousel2\" role=\"button\" data-slide=\"next\">
                                                        <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class=\"card-footer\">
                        <div class=\"icons\">
                            <a href=\"book-activity.html\" class=\"btn btn-primary px-5\">Book Now</a>
                            <a href=\"#\" class=\"btn btn-light icons\"><i class=\"fe fe-share-2 fs-16 leading-normal\"></i></a>
                            <a href=\"#\" class=\"btn btn-light icons\"><i class=\"fe fe-heart fs-16 leading-normal\"></i></a>
                            <a href=\"#\" class=\"btn btn-light icons\"><i class=\"fe fe-printer fs-16 leading-normal\"></i></a>
                            <a href=\"#\" class=\"btn btn-light icons mb-1 mt-1\" data-toggle=\"modal\" data-target=\"#report\"><i class=\"fe fe-info fs-16 leading-normal\"></i></a>
                        </div>
                    </div>
                </div>



                <!--Related Posts-->

                <!--/Related Posts-->

                <!--Faqs-->


                <!--Side Content-->

                <!--/ Side Content-->
            </div>
        </div>

</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "singleshow.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  791 => 231,  781 => 230,  762 => 206,  743 => 15,  285 => 385,  283 => 230,  256 => 206,  64 => 16,  62 => 15,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <!-- META DATA -->
    <meta charset=\"UTF-8\">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Gowell - Travel HTML Listing Template\">
    <meta name=\"author\" content=\"Spruko™ Technologies Private Limited\">
    <meta name=\"keywords\" content=\"Tours And Travels website,online Tours And Travels website,directory listing sites,bootstrap form template,bootstrap templates,responsive web design,bootstrap website templates,Tours And Travels,Tours And Travels template,Tours And Travels listing,buy web templates,directory,directory html template,directory listing html template,directory website template,html list template,html template,html5 responsive template,html5 template,local Tours And Travels directory,local Tours And Travels listing,online Tours And Travels directory,online directory,premium,premium bootstrap templates,small Tours And Travels directory,classified,Premium Tours And Travels directory Templates,Directory & Listing HTML Template,Tours And Travels listing websites\">
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"favicon.ico\" />

    <!-- Title -->
   {% block title%} <title>Gowell - Travel HTML Listing Template</title> {% endblock %}

    <!-- Bootstrap Css -->
    <link href=\"../../assets/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" />

    <!-- Style Css -->
    <link href=\"../../assets/css/style.css\" rel=\"stylesheet\" />

    <!-- Icons Css -->
    <link href=\"../../assets/css/icons.css\" rel=\"stylesheet\"/>

    <!-- Jquery-bar-rating css-->
    <link rel=\"stylesheet\" href=\"../../assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css\">

    <!-- Auto Complete css -->
    <link href=\"../../assets/plugins/autocomplete/jquery.autocomplete.css\" rel=\"stylesheet\">

    <!--wickedpicker css-->
    <link href=\"../../assets/plugins/wildtime/wickedpicker.min.css\" rel=\"stylesheet\">

    <!-- jquery ui RangeSlider -->
    <link href=\"../../assets/plugins/jquery-uislider/jquery-ui.css\" rel=\"stylesheet\">

    <!-- Color-Skins -->
    <link id=\"theme\" href=\"../../assets/color-skins/color.css\"  rel=\"stylesheet\"/>

</head>
<body>

<!--Loader-->
<div id=\"global-loader\" class=\"bg-primary\">
    <div class=\"loader-svg-img\">
        <img src=\"../../assets/images/brand/2.png\" class=\"\" alt=\"\">
        <div class=\"flight-icon\"><i class=\"fa fa-plane\"></i></div>
    </div>
</div>
<!--/Loader-->

<!--Horizontal Section-->
<div class=\"header-main header-style03\">
    <div class=\"top-bar app-header-background app-header-background2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-8 col-lg-8 col-sm-4 col-7\">
                    <div class=\"top-bar-left d-flex\">
                        <div class=\"clearfix\">
                            <ul class=\"socials\">
                                <li>
                                    <a class=\"social-icon text-white\" href=\"#\"><i class=\"fa fa-facebook text-white\"></i></a>
                                </li>
                                <li>
                                    <a class=\"social-icon text-white\" href=\"#\"><i class=\"fa fa-twitter text-white\"></i></a>
                                </li>
                                <li>
                                    <a class=\"social-icon text-white\" href=\"#\"><i class=\"fa fa-linkedin text-white\"></i></a>
                                </li>
                                <li>
                                    <a class=\"social-icon text-white\" href=\"#\"><i class=\"fa fa-google-plus text-white\"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-sm-8 col-5\">
                    <div class=\"top-bar-right\">
                        <ul class=\"custom\">
                            <li>
                                <a href=\"register.html\" class=\"text-white\"><i class=\"fa fa-user mr-1 text-white\"></i> <span>Register</span></a>
                            </li>
                            <li>
                                <a href=\"login.html\" class=\"text-white\"><i class=\"fa fa-sign-in mr-1 text-white\"></i> <span>Login</span></a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"text-white\" data-toggle=\"dropdown\"><i class=\"fa fa-home mr-1 text-white\"></i><span> My Dashboard</span><i class=\"fa fa-angle-down ml-1 header-dropdown-icon\"></i></a>
                                <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-arrow\">
                                    <a href=\"mydash.html\" class=\"dropdown-item\">
                                        <i class=\"dropdown-icon icon icon-user\"></i> My Profile
                                    </a>
                                    <a class=\"dropdown-item\" href=\"#\">
                                        <i class=\"dropdown-icon icon icon-speech\"></i> Inbox
                                    </a>
                                    <a class=\"dropdown-item\" href=\"#\">
                                        <i class=\"dropdown-icon icon icon-bell\"></i> Notifications
                                    </a>
                                    <a href=\"mydash.html\" class=\"dropdown-item\">
                                        <i class=\"dropdown-icon  icon icon-settings\"></i> Account Settings
                                    </a>
                                    <a class=\"dropdown-item\" href=\"login.html\">
                                        <i class=\"dropdown-icon icon icon-power\"></i> Log out
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->

    <!-- /Mobile Header -->

    <div class=\"horizontal-main  bg-dark-transparent clearfix py-lg-3\">
        <div class=\"horizontal-mainwrapper container clearfix\">
            <div class=\"desktoplogo\">
                <a href=\"index.html\"><img src=\"../../assets/images/brand/logo.png\" alt=\"\"></a>
            </div>
            <div class=\"desktoplogo-1\">
                <a href=\"index.html\"><img src=\"../../assets/images/brand/logo.png\" alt=\"\"></a>
            </div>
            <!--Nav-->
            <nav class=\"horizontalMenu clearfix d-md-flex\">
                <ul class=\"horizontalMenu-list\">

                    <li><a href=\"index.html\">Home </a>

                    </li>





                    <li><a href=\"#\">Categories <span class=\"fa fa-caret-down m-0\"></span></a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"index-food.html\">Food Advisor <span class=\"fa fa-caret-down m-0\"></span></a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"food-list.html\">Food Advisor List</a></li>
                                    <li><a href=\"index-food.html\">Food Advisor main page</a></li>

                                </ul>

                            <li><a href=\"index-hotel.html\">Guest Houses
                                    <span class=\"fa fa-caret-down m-0\"></span></a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"hotel-list.html\">Guest houses List</a></li>
                                    <li><a href=\"index-hotel.html\">Guest houses main page</a></li>

                                </ul>
                            <li><a href=\"index-event.html\">Events <span class=\"fa fa-caret-down m-0\"></span></a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"event-list.html\">Events List</a></li>
                                    <li><a href=\"index-event.html\">Events main page</a></li>

                                </ul>
                            <li><a href=\"index-activities.html\">Activities <span class=\"fa fa-caret-down m-0\"></span></a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"activities-list.html\">Activities List</a></li>
                                    <li><a href=\"index-activities.html\">Activities main page</a></li>

                                </ul>

                            <li><a href=\"index-packagesa.html\">Packages <span class=\"fa fa-caret-down m-0\"></span></a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"packages-list.html\">Packages List</a></li>
                                    <li><a href=\"index-packages.html\">Packages main page</a></li>

                                </ul>

                        </ul>
                    </li>




                    <li><a href=\"about.html\">About Us </a></li>
                    <li> <a href=\"shop.html\">Shop</a></li>



                    <li><a href=\"#\">Blog </a>

                    </li>
                    <li><a href=\"contact.html\"> Contact Us</a></li>

                </ul>
            </nav>
            <!--Nav-->
        </div>

    </div>
</div>

<!--Section-->
<div class=\"relative pt-10 pb-10 pattern2 bg-background-color bg-background-color-dark1 cover-image pb-9\" data-image-src=\"../../assets/images/banners/banner16.jpg\">
    <div class=\"header-text1 mb-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-8 col-lg-12 col-md-12 d-block mx-auto\">
                    <div class=\"text-center text-white \">
                       <h1 class=\"mb-2\"><span class=\"font-weight-semibold\">{% block name%} Event name {% endblock %}</span></h1>


                    </div>
                </div>
            </div>
        </div>
    </div><!-- /header-text -->

</div>
<!--/Sliders Section-->

<!--BreadCrumb-->
<div class=\"bg-white border-bottom\">
    <div class=\"container\">
        <div class=\"page-header\">
          <h4 class=\"page-title\">Activity Details</h4>

        </div>
    </div>
</div>
<!--/BreadCrumb-->

<!--Add listing-->
{% block container %}
<section class=\"sptb\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-8 col-lg-8 col-md-12\">

                <!--Tours And Travels Overview-->
                <div class=\"card overflow-hidden details-accordion\">
                    <div class=\"ribbon ribbon-top-right text-danger font-weight-bold\"><span class=\"bg-danger fs-16 font-weight-bold\">\$456 <small class=\"fs-12\"> / Day</small></span></div>
                    <div class=\"card-body\">
                        <div class=\"accordion\" id=\"accordionExample\">
                            <div class=\"card\">
                                <a href=\"#\" class=\"fs-16 font-weight-semibold2 card-header bg-transparent\" id=\"headingOne\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                    Overview
                                </a>
                                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                                    <div class=\"card-body leading-normal-2\">
                                        <div class=\"mb-0\">
                                            <p class=\"leading-loose\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                            <p class=\"leading-loose\">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                                        </div>
                                        <h4 class=\"card-title mt-6 mb-3 font-weight-semibold2\">Contact Info</h4>
                                        <div class=\"item-user mt-3\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <h6 class=\"font-weight-normal\"><span><i class=\"fe fe-mail mr-3 mb-2 d-inline-block\"></i></span><a href=\"contact.html\" class=\"text-body\"> contact us here</a></h6>
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <h6 class=\"font-weight-normal\"><span><i class=\"fe fe-phone mr-3 mb-2 d-inline-block\"></i></span>0-235-657-24587</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card\">
                                <a href=\"#\" class=\"fs-16 font-weight-semibold2 collapsed card-header bg-transparent\" id=\"headingTwo\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                                    Specifications
                                </a>
                                <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
                                    <div class=\"card-body leading-normal-2\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table row table-borderless w-100 m-0 text-nowrap\">
                                                <tbody class=\"col-lg-12 col-xl-6 p-0\">
                                                <tr>
                                                    <td class=\"px-0\"><span class=\"font-weight-semibold\">Category :</span> Deluxe</td>
                                                </tr>
                                                <tr>
                                                    <td class=\"px-0\"><span class=\"font-weight-semibold\">Date :</span> Canada</td>
                                                </tr>

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <div class=\"card mb-0\">
                                <a href=\"#\" class=\"fs-16 font-weight-semibold2 collapsed card-header\" data-toggle=\"collapse\" id=\"headingEight\" data-target=\"#collapseEight\" aria-expanded=\"true\" aria-controls=\"collapseEight\">
                                    Activity Gallery
                                </a>
                                <div id=\"collapseEight\" class=\"collapse\" aria-labelledby=\"headingEight\" data-parent=\"#accordionExample\">
                                    <div class=\"card-body leading-normal-2\">
                                        <div class=\"product-slider\">
                                            <div id=\"carousel2\" class=\"carousel slide\" data-ride=\"carousel\">
                                                <div class=\"carousel-inner\">
                                                    <div class=\"carousel-item active\"><img src=\"../../assets/images/products/products/h1.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h2.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h3.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h4.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h5.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h1.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h2.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h3.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h4.jpg\" alt=\"img\"> </div>
                                                    <div class=\"carousel-item\"><img src=\"../../assets/images/products/products/h5.jpg\" alt=\"img\"> </div>
                                                </div>
                                                <a class=\"carousel-control-prev\" href=\"#carousel2\" role=\"button\" data-slide=\"prev\">
                                                    <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
                                                </a>
                                                <a class=\"carousel-control-next\" href=\"#carousel2\" role=\"button\" data-slide=\"next\">
                                                    <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
                                                </a>
                                            </div>
                                            <div class=\"clearfix\">
                                                <div id=\"thumbcarousel2\" class=\"carousel slide product-slide-thumb\" data-interval=\"false\">
                                                    <div class=\"carousel-inner\">
                                                        <div class=\"carousel-item active\">
                                                            <div data-target=\"#carousel2\" data-slide-to=\"0\" class=\"thumb\"><img src=\"../../assets/images/products/products/h1.jpg\" alt=\"img\"></div>
                                                            <div data-target=\"#carousel2\" data-slide-to=\"1\" class=\"thumb\"><img src=\"../../assets/images/products/products/h2.jpg\" alt=\"img\"></div>
                                                            <div data-target=\"#carousel2\" data-slide-to=\"2\" class=\"thumb\"><img src=\"../../assets/images/products/products/h3.jpg\" alt=\"img\"></div>
                                                            <div data-target=\"#carousel2\" data-slide-to=\"3\" class=\"thumb\"><img src=\"../../assets/images/products/products/h4.jpg\" alt=\"img\"></div>
                                                            <div data-target=\"#carousel2\" data-slide-to=\"4\" class=\"thumb\"><img src=\"../../assets/images/products/products/h5.jpg\" alt=\"img\"></div>
                                                        </div>
                                                        <div class=\"carousel-item \">
                                                            <div data-target=\"#carousel2\" data-slide-to=\"0\" class=\"thumb\"><img src=\"../../assets/images/products/products/h1.jpg\" alt=\"img\"></div>
                                                            <div data-target=\"#carousel2\" data-slide-to=\"1\" class=\"thumb\"><img src=\"../../assets/images/products/products/h2.jpg\" alt=\"img\"></div>
                                                            <div data-target=\"#carousel2\" data-slide-to=\"2\" class=\"thumb\"><img src=\"../../assets/images/products/products/h3.jpg\" alt=\"img\"></div>
                                                            <div data-target=\"#carousel2\" data-slide-to=\"3\" class=\"thumb\"><img src=\"../../assets/images/products/products/h4.jpg\" alt=\"img\"></div>
                                                            <div data-target=\"#carousel2\" data-slide-to=\"4\" class=\"thumb\"><img src=\"../../assets/images/products/products/h5.jpg\" alt=\"img\"></div>
                                                        </div>
                                                    </div>
                                                    <a class=\"carousel-control-prev\" href=\"#thumbcarousel2\" role=\"button\" data-slide=\"prev\">
                                                        <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
                                                    </a>
                                                    <a class=\"carousel-control-next\" href=\"#thumbcarousel2\" role=\"button\" data-slide=\"next\">
                                                        <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class=\"card-footer\">
                        <div class=\"icons\">
                            <a href=\"book-activity.html\" class=\"btn btn-primary px-5\">Book Now</a>
                            <a href=\"#\" class=\"btn btn-light icons\"><i class=\"fe fe-share-2 fs-16 leading-normal\"></i></a>
                            <a href=\"#\" class=\"btn btn-light icons\"><i class=\"fe fe-heart fs-16 leading-normal\"></i></a>
                            <a href=\"#\" class=\"btn btn-light icons\"><i class=\"fe fe-printer fs-16 leading-normal\"></i></a>
                            <a href=\"#\" class=\"btn btn-light icons mb-1 mt-1\" data-toggle=\"modal\" data-target=\"#report\"><i class=\"fe fe-info fs-16 leading-normal\"></i></a>
                        </div>
                    </div>
                </div>



                <!--Related Posts-->

                <!--/Related Posts-->

                <!--Faqs-->


                <!--Side Content-->

                <!--/ Side Content-->
            </div>
        </div>

</section>

{% endblock %}

<!--Section-->
<section class=\"sptb cover-image patter-image patter-image bg-background-pattern\" data-image-src=\"../../assets/images/pattern/9.png\">
    <div class=\"content-text mb-0\">
        <div class=\"container\">
            <div class=\"text-center\">
                <span class=\"heading-style text-secondary\">Subscribe</span>
                <h2 class=\"mb-2 font-weight-bold\">Our Newsletter</h2>
                <p class=\"fs-16 mb-0\">It is a long established fact that a reader will be distracted by the readable.</p>
                <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto d-block\">
                        <div class=\"mt-5\">
                            <div class=\"input-group sub-input mt-1\">
                                <input type=\"text\" class=\"form-control input-lg \" placeholder=\"Enter your Email\">
                                <div class=\"input-group-append \">
                                    <button type=\"button\" class=\"btn btn-secondary btn-lg br-tr-5 br-br-5 pl-5 pr-5\">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section-->

<!--Footer Section-->
<section>
    <footer class=\"bg-dark-purple text-white\">
        <div class=\"footer-main border-bottom\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-3 col-lg-6 col-md-12\">
                        <h6>Get In Touch</h6>
                        <ul class=\"list-unstyled mb-0\">
                            <li>
                                <a href=\"#\"><i class=\"fa fa-home mr-3 text-secondary\"></i> New York, Weq Street, NY 10012, US</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-envelope mr-3 text-secondary fs-12\"></i> info12323@example.com</a></li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-phone mr-3 text-secondary\"></i> + 01 234 567 88</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-print mr-3 text-secondary\"></i> + 01 234 567 89</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-12\">
                        <h6>Popular Tour Places</h6>
                        <ul class=\"list-unstyled mb-0\">
                            <li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Canada Navy City </a></li>
                            <li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Watican Flower Park in Paris</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Great Paris Effil Tower</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Histrorical London Stone Bridegs</a></li>
                        </ul>
                    </div>
                    <div class=\"col-xl-2 col-lg-6 col-md-12\">
                        <h6 class=\"\">Latest Tours</h6>
                        <ul class=\"list-unstyled mb-0\">
                            <li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Best Tours In World</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Paris Great Tour</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Top Adventure Tour</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Top Histrorical Tour</a></li>
                        </ul>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 col-md-12\">
                        <div class=\"form-group d-flex mb-0\">
                            <div class=\"mr-4 w-180\">
                                <select class=\"form-control select2\" data-placeholder=\"Select Country\">
                                    <option value=\"en\">English</option>
                                    <option value=\"en\">Arabic</option>
                                    <option value=\"en\">German</option>
                                    <option value=\"en\">Greek</option>
                                </select>
                            </div>
                            <div class=\"mr-4 w-180\">
                                <select class=\"form-control select2\" data-placeholder=\"Select Country\">
                                    <option value=\"en\">USD</option>
                                    <option value=\"en\">EUR</option>
                                    <option value=\"en\">INR</option>
                                    <option value=\"en\">GBP</option>
                                </select>
                            </div>
                        </div>
                        <h6 class=\"mb-2 mt-5\">Payments</h6>
                        <ul class=\"payments mb-0\">
                            <li>
                                <a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-amex\" aria-hidden=\"true\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-visa\" aria-hidden=\"true\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-credit-card-alt\" aria-hidden=\"true\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-mastercard\" aria-hidden=\"true\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-paypal\" aria-hidden=\"true\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-discover\" aria-hidden=\"true\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-google-wallet\" aria-hidden=\"true\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bg-dark-purple text-white p-0 border-bottom\">
            <div class=\"container\">
                <div class=\"p-2 text-center footer-links\">
                    <a href=\"#\" class=\"btn btn-link\">How It Works</a>
                    <a href=\"#\" class=\"btn btn-link\">About Us</a>
                    <a href=\"#\" class=\"btn btn-link\">Pricing</a>
                    <a href=\"#\" class=\"btn btn-link\">Listing Categories</a>
                    <a href=\"#\" class=\"btn btn-link\">Privacy Policy</a>
                    <a href=\"#\" class=\"btn btn-link\">Terms Of Conditions</a>
                    <a href=\"#\" class=\"btn btn-link\">Blog</a>
                    <a href=\"#\" class=\"btn btn-link\">Contact Us</a>
                    <a href=\"#\" class=\"btn btn-link\">Premium Ad</a>
                </div>
            </div>
        </div>
        <div class=\"bg-dark-purple text-white-50 p-3\">
            <div class=\"container\">
                <div class=\"row d-flex\">
                    <div class=\"col-lg-12 col-sm-12  mt-2 mb-2 text-center \">
                        Copyright © 2020 <a href=\"#\" class=\"fs-14 text-secondary\">Gowell</a>. Designed by <a href=\"spruko.com\" class=\"fs-14 text-secondary\">Spruko</a> All rights reserved.
                    </div>
                    <div class=\"col-lg-12 col-sm-12 text-center mb-2 mt-2\">
                        <ul class=\"social-icons mb-0\">
                            <li>
                                <a class=\"social-icon\" href=\"\"><i class=\"fa fa-facebook\"></i></a>
                            </li>
                            <li>
                                <a class=\"social-icon\" href=\"\"><i class=\"fa fa-twitter\"></i></a>
                            </li>
                            <li>
                                <a class=\"social-icon\" href=\"\"><i class=\"fa fa-rss\"></i></a>
                            </li>
                            <li>
                                <a class=\"social-icon\" href=\"\"><i class=\"fa fa-youtube\"></i></a>
                            </li>
                            <li>
                                <a class=\"social-icon\" href=\"\"><i class=\"fa fa-linkedin\"></i></a>
                            </li>
                            <li>
                                <a class=\"social-icon\" href=\"\"><i class=\"fa fa-google-plus\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--Footer Section-->

<!--Comment Modal -->
<div class=\"modal fade\" id=\"Comment\" tabindex=\"-1\" role=\"dialog\"  aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Leave a Comment</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" id=\"Comment-name\" placeholder=\"Your Name\">
                </div>
                <div class=\"form-group\">
                    <input type=\"email\" class=\"form-control\" id=\"Comment-email\" placeholder=\"Email Address\">
                </div>
                <div class=\"form-group mb-0\">
                    <textarea class=\"form-control\" name=\"example-textarea-input\" rows=\"6\" placeholder=\"Message\"></textarea>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancel</button>
                <button type=\"button\" class=\"btn btn-success\">Send</button>
            </div>
        </div>
    </div>
</div>

<!--Map Modal -->
<div class=\"modal fade\" id=\"Map-modal\" tabindex=\"-1\" role=\"dialog\"  aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Direction</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"h-400\">
                    <!--Map-->
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319\" class=\"h-100 w-100 border-0\"></iframe>
                    <!--/Map-->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Report Modal -->
<div class=\"modal fade\" id=\"report\" tabindex=\"-1\" role=\"dialog\"  aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"examplereportLongTitle\">Report Abuse</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" id=\"report-name\" placeholder=\"Enter url\">
                </div>
                <div class=\"form-group\">
                    <select name=\"country\" id=\"select-countries2\" class=\"form-control custom-select select2-no-serach\">
                        <option value=\"1\" selected>Categories</option>
                        <option value=\"2\">Spam</option>
                        <option value=\"3\">Identity Theft</option>
                        <option value=\"4\">Online Shopping Fraud</option>
                        <option value=\"5\">Service Providers</option>
                        <option value=\"6\">Phishing</option>
                        <option value=\"7\">Spyware</option>
                    </select>
                </div>
                <div class=\"form-group\">
                    <input type=\"email\" class=\"form-control\" id=\"report-email\" placeholder=\"Email Address\">
                </div>
                <div class=\"form-group mb-0\">
                    <textarea class=\"form-control\" name=\"example-textarea-input\" rows=\"6\" placeholder=\"Message\"></textarea>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancel</button>
                <button type=\"button\" class=\"btn btn-success\">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Message Modal -->
<div class=\"modal fade\" id=\"contact\" tabindex=\"-1\" role=\"dialog\"  aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"examplecontactLongTitle\">Send Message</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" id=\"contact-name\" placeholder=\"Your Name\">
                </div>
                <div class=\"form-group\">
                    <input type=\"email\" class=\"form-control\" id=\"contact-email\" placeholder=\"Email Address\">
                </div>
                <div class=\"form-group mb-0\">
                    <textarea class=\"form-control\" name=\"example-textarea-input\" rows=\"6\" placeholder=\"Message\"></textarea>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancel</button>
                <button type=\"button\" class=\"btn btn-success\">Send</button>
            </div>
        </div>
    </div>
</div>

<!--  Modal Popup -->
<div class=\"modal fade\" id=\"homeVideo\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog  modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" onclick=\"pauseVid()\"><i class=\"fe fe-x\"></i></button>
            <!--<iframe width=\"560\" height=\"400\" src=\"https://www.youtube.com/embed/kFjETSa9N7A\"  allow=\"accelerometer; autoplay;\" allowfullscreen></iframe>-->
            <div class=\"embed-responsive embed-responsive-16by9\">
                <video id=\"gossVideo\" class=\"embed-responsive-item\" controls=\"controls\">
                    <source src=\"../../assets/video/1.mp4\" type=\"video/mp4\">
                </video>
            </div>
        </div>
    </div>
</div>

<!--  Modal Popup -->
<div class=\"modal fade\" id=\"gallery\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"product-slider modal-body p-2\">
                <div id=\"carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                    <a class=\"gallery-close-button\" href=\"#\" data-dismiss=\"modal\" aria-label=\"Close\"><i class=\"fe fe-x\"></i></a>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\"><img src=\"../../assets/images/places/1.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/2.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/3.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/4.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/5.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/1.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/2.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/3.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/4.jpg\" alt=\"img\"> </div>
                        <div class=\"carousel-item\"><img src=\"../../assets/images/places/5.jpg\" alt=\"img\"> </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carousel\" role=\"button\" data-slide=\"prev\">
                        <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carousel\" role=\"button\" data-slide=\"next\">
                        <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"clearfix\">
                    <div id=\"thumbcarousel\" class=\"carousel slide product-slide-thumb\" data-interval=\"false\">
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <div data-target=\"#carousel\" data-slide-to=\"0\" class=\"thumb\"><img src=\"../../assets/images/places/1.jpg\" alt=\"img\"></div>
                                <div data-target=\"#carousel\" data-slide-to=\"1\" class=\"thumb\"><img src=\"../../assets/images/places/2.jpg\" alt=\"img\"></div>
                                <div data-target=\"#carousel\" data-slide-to=\"2\" class=\"thumb\"><img src=\"../../assets/images/places/3.jpg\" alt=\"img\"></div>
                                <div data-target=\"#carousel\" data-slide-to=\"3\" class=\"thumb\"><img src=\"../../assets/images/places/4.jpg\" alt=\"img\"></div>
                                <div data-target=\"#carousel\" data-slide-to=\"4\" class=\"thumb\"><img src=\"../../assets/images/places/5.jpg\" alt=\"img\"></div>

                            </div>
                            <div class=\"carousel-item \">
                                <div data-target=\"#carousel\" data-slide-to=\"0\" class=\"thumb\"><img src=\"../../assets/images/places/1.jpg\" alt=\"img\"></div>
                                <div data-target=\"#carousel\" data-slide-to=\"1\" class=\"thumb\"><img src=\"../../assets/images/places/2.jpg\" alt=\"img\"></div>
                                <div data-target=\"#carousel\" data-slide-to=\"2\" class=\"thumb\"><img src=\"../../assets/images/places/3.jpg\" alt=\"img\"></div>
                                <div data-target=\"#carousel\" data-slide-to=\"3\" class=\"thumb\"><img src=\"../../assets/images/places/4.jpg\" alt=\"img\"></div>
                                <div data-target=\"#carousel\" data-slide-to=\"4\" class=\"thumb\"><img src=\"../../assets/images/places/5.jpg\" alt=\"img\"></div>
                            </div>
                        </div>
                        <a class=\"carousel-control-prev\" href=\"#thumbcarousel\" role=\"button\" data-slide=\"prev\">
                            <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#thumbcarousel\" role=\"button\" data-slide=\"next\">
                            <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Back to top -->
<a href=\"#top\" id=\"back-to-top\" ><i class=\"fe fe-arrow-up\"></i></a>

<!-- JQuery js-->
<script src=\"../../assets/js/jquery-3.5.1.min.js\"></script>

<!-- Bootstrap js -->
<script src=\"../../assets/plugins/bootstrap/js/popper.min.js\"></script>
<script src=\"../../assets/plugins/bootstrap/js/bootstrap.bundle.js\"></script>

<!--JQuery Sparkline Js-->
<script src=\"../../assets/js/jquery.sparkline.min.js\"></script>

<!-- Circle Progress Js-->
<script src=\"../../assets/js/circle-progress.min.js\"></script>

<!-- Selectize Js-->
<script src=\"../../assets/js/selectize.min.js\"></script>

<!-- Jquery-bar-rating Js-->
<script src=\"../../assets/plugins/jquery-bar-rating/jquery.barrating.js\"></script>
<script src=\"../../assets/plugins/jquery-bar-rating/js/rating.js\"></script>

<!--Owl Carousel js -->
<script src=\"../../assets/plugins/owl-carousel/owl.carousel.js\"></script>
<script src=\"../../assets/js/owl-carousel.js\"></script>

<!--Horizontal Menu-->
<script src=\"../../assets/plugins/horizontal/horizontal-menu/horizontal.js\"></script>

<!--JQuery TouchSwipe js-->
<script src=\"../../assets/js/jquery.touchSwipe.min.js\"></script>

<!--Select2 js -->
<script src=\"../../assets/plugins/select2/select2.full.min.js\"></script>
<script src=\"../../assets/js/select2.js\"></script>

<!-- sticky Js-->
<script src=\"../../assets/js/sticky.js\"></script>

<!-- Cookie js -->
<script src=\"../../assets/plugins/cookie/jquery.ihavecookies.js\"></script>
<script src=\"../../assets/plugins/cookie/cookie.js\"></script>

<!--Auto Complete js -->
<script src=\"../../assets/plugins/autocomplete/jquery.autocomplete.js\"></script>
<script src=\"../../assets/plugins/autocomplete/autocomplete.js\"></script>

<!-- Internal :::   Ion.RangeSlider -->
<script src=\"../../assets/plugins/jquery-uislider/jquery-ui.js\"></script>
<script src=\"../../assets/js/price-range.js\"></script>

<!-- Internal :::   Moment js-->
<script src=\"../../assets/plugins/moment/moment.js\"></script>

<!-- Internal :::   Daterange js-->
<script src=\"../../assets/plugins/bootstrap-daterangepicker/daterangepicker.js\"></script>
<script src=\"../../assets/js/daterange.js\"></script>

<!-- Internal :::   Datepicker js -->
<script src=\"../../assets/plugins/date-picker/jquery-ui.js\"></script>

<!-- Internal :::   Timepicker js -->
<script src=\"../../assets/plugins/jquery-timepicker/jquery.timepicker.js\"></script>

<!-- Internal :::    wickedpicker js-->
<script src=\"../../assets/plugins/wildtime/wickedpicker.min.js\"></script>
<script src=\"../../assets/js/timepicker.js\"></script>

<!-- Internal :::   Datepicker js -->
<script src=\"../../assets/js/date-picker.js\"></script>

<!--Internal :::   Showmore Js-->
<script src=\"../../assets/js/jquery.showmore.js\"></script>
<script src=\"../../assets/js/showmore.js\"></script>

<!-- Internal :::   Google Maps Plugin-->
<script src=\"https://maps.google.com/maps/api/js?key=AIzaSyCW16SmpzDNLsrP-npQii6_8vBu_EJvEjA\"></script>
<script src=\"../../assets/plugins/jQuery-Google-Map/jquery.googlemap.js\"></script>
<script src=\"../../assets/plugins/jQuery-Google-Map/map.js\"></script>

<!--Map List js -->
<script src=\"../../assets/plugins/jquery-axgmap/jquery.axgmap.js\"></script>

<!-- Scripts Js-->
<script src=\"../../assets/js/scripts.js\"></script>

<!-- Custom Js-->
<script src=\"../../assets/js/custom.js\"></script>
</body>
</html>", "singleshow.html.twig", "/Users/zahracarthagechouchane/kiftrip/templates/singleshow.html.twig");
    }
}
