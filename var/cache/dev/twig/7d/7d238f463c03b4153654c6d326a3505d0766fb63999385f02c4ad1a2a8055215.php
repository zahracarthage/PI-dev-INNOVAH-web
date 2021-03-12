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

/* listefront.html.twig */
class __TwigTemplate_bd19ebb6706e94e09baa46fefccc2eccf5d4384fa08f8feac97aaebced5e7463 extends Template
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
            'namelist' => [$this, 'block_namelist'],
            'search' => [$this, 'block_search'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listefront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listefront.html.twig"));

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
    <meta name=\"keywords\" content=\"travel html template,html code for travel and tourism website,travel agency website templates,template hotel booking,travel web template,trip travel,themeforest html templates,travel website templates,travel template,travel itinerary template,travel booking template,travel agency website templates html5,travel website templates bootstrap,tourism website templates html,travel agency html template,travel theme html,html travel website templates,travel html theme,travel website templates html,template html travel,tour operator website templates\">
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"favicon.ico\" />

    <!-- Title -->
   ";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "
    <!-- Bootstrap Css -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Style Css -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Icons Css -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!-- Jquery-bar-rating css-->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css"), "html", null, true);
        echo "\">

    <!-- Auto Complete css -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/autocomplete/jquery.autocomplete.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Color-Skins -->
    <link id=\"theme\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/color-skins/color.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\"/>

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
                                    <li><a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repas_index");
        echo "\">Food Advisor List</a></li>
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
                    <li><a href=\"";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo "\"> Contact Us</a></li>

                </ul>
            </nav>
            <!--Nav-->
        </div>

    </div>
</div>
</div>




<!--Section-->

<!--/Sliders Section-->

<!--Breadcrumb-->
<div class=\"bg-white border-bottom\">
    <div class=\"container\">

        <div class=\"page-header\">

            <h4 class=\"page-title\"> ";
        // line 207
        $this->displayBlock('namelist', $context, $blocks);
        echo "</h4>


        </div>
    </div>
</div>
{
<!--/Breadcrumb-->

<!--<div class=\"ht-300 map-view\" id=\"leaflet2\" style=\"height:400px\"></div>-->

<iframe class=\" map-view\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15222.735906494796!2d78.5702658!3d17.4748335!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x326d1c90786b2ab6!2zU1BSVUtP4oSi!5e0!3m2!1sen!2sin!4v1600833029853!5m2!1sen!2sin\" width=\"600\" height=\"450\"  style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>


<!--Add listing-->
<section class=\"sptb\">
    <div class=\"container\">
        <div class=\"row\">

            <!--Side Content-->
            <div class=\"col-xl-3 col-lg-3 col-md-12\">

            ";
        // line 229
        $this->displayBlock('search', $context, $blocks);
        // line 244
        echo "
                # bloc categorie

                <div class=\"card mb-0\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Categories</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"\" id=\"container\">
                            <div class=\"filter-product-checkboxs\">
                                <label class=\"custom-control custom-checkbox mb-3\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" name=\"checkbox1\" value=\"option1\">
                                    <span class=\"custom-control-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark\">Australia<span class=\"label label-light float-right\">14</span></a>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                </label>



                            </div>
                        </div>
                    </div>


                    <div class=\"card-footer\">
                        <a href=\"#\" class=\"btn btn-primary btn-block\">Apply Filter</a>
                    </div>
                </div>
            </div>
            <!--/ Side Content-->

            <div class=\"col-xl-9 col-lg-9 col-md-12\">
                <!--Add lists-->

               <div class=\"mb-lg-0\">
                <div class=\"\">
                    <div class=\"item2-gl business-list-01\">
                        <div class=\"\">
                            <div class=\"bg-white p-5 item2-gl-nav d-flex\">
                                <div class=\"selectgroup\">
                                    <label class=\"selectgroup-item mb-md-0\">
                                        <input type=\"radio\" name=\"value\" value=\"All\" class=\"selectgroup-input\" checked=\"\">
                                        <span class=\"selectgroup-button d-md-flex\">All <i class=\"fa fa-sort ml-2 mt-1\"></i></span>
                                    </label>
                                    <label class=\"selectgroup-item mb-md-0\">
                                        <input type=\"radio\" name=\"value\" value=\"Distance\" class=\"selectgroup-input\">
                                        <span class=\"selectgroup-button\">Famous</span>
                                    </label>
                                    <label class=\"selectgroup-item mb-md-0\">
                                        <input type=\"radio\" name=\"value\" value=\"Latest\" class=\"selectgroup-input\">
                                        <span class=\"selectgroup-button\">Latest</span>
                                    </label>
                                    <label class=\"selectgroup-item mb-0\">
                                        <input type=\"radio\" name=\"value\" value=\"Rating\" class=\"selectgroup-input\">
                                        <span class=\"selectgroup-button\">Rating</span>
                                    </label>
                                </div>
                                <ul class=\"nav item2-gl-menu ml-auto mt-1\">
                                    <li class=\"\"><a href=\"#tab-11\" data-toggle=\"tab\" title=\"List style\"><i class=\"fe fe-list\"></i></a></li>
                                    <li><a href=\"#tab-12\" data-toggle=\"tab\"  class=\"active show\" title=\"Grid\"><i class=\"fe fe-grid\"></i></a></li>
                                </ul>
                                <a class=\"btn btn-light map-view-btn mt-5 mt-sm-0\" href=\"#\"><i class=\"fe fe-map-pin mr-1\"></i><span class=\"active\"> View On Map</span><span class=\"disactive\"> Hide Map</span> </a>
                            </div>
                        </div>

                        <div class=\"tab-content\">
                            <div class=\"tab-pane\" id=\"tab-11\">
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-lg-6 col-md-6\">
                                        <div class=\"card overflow-hidden\">
                                            <div class=\"d-xl-flex ieh-100\">
                                                <div class=\"item-card9-img\">
                                                    <div class=\"item-card9-imgs\">
                                                        <a href=\"tours.html\" class=\"absolute-link2\"></a>
                                                        <img src=\"../../assets/images/locations/austerlia.jpg\" alt=\"img\" class=\"cover-image\">
                                                        <div class=\"item-card2-img1\" data-toggle=\"modal\" data-target=\"#gallery\">
                                                            <span class=\"badge bg-dark-transparent6 text-white fs-14 font-weight-semibold2\"><i class=\"fe fe-image \"></i> 5</span>
                                                        </div>
                                                    </div>
                                                    <div class=\"item-card9-icons\">
                                                        <a href=\"#\" class=\"item-card9-icons1 wishlist\"> <i class=\"fa fa fa-heart-o\"></i></a>
                                                    </div>
                                                    <div class=\"item-cardreview-absolute bg-secondary\">City</div>
                                                    <div class=\"font-weight-semibold2 text-muted mb-0 price-badge item-cardreview-absolute-price\"><span class=\"text-white\">\$100</span><small class=\"text-white-80\">/person</small></div>
                                                </div>
                                                <div class=\"card border-0 mb-0 br-0\">
                                                    <div class=\"card-body h-100\">
                                                        <div class=\"item-card9\">
                                                            <a href=\"tours.html\" class=\"text-dark\"><h4 class=\"font-weight-semibold2 mt-1 mb-1\">Australia New Locations</h4></a>
                                                            <div class=\"mt-0 mb-0 d-sm-flex d-md-block d-xl-flex\">
                                                                <a href=\"#\" class=\"mt-1 mb-0 mr-3 text-dark\"><i class=\"fe fe-map-pin mr-1\"></i> Australia</a>
                                                                <a href=\"#\" class=\"mt-1 mb-0 mr-3 text-muted\"><i class=\"fe fe-eye mr-1\"></i> 12 Tour Places</a>
                                                                <div class=\"star-ratings start-ratings-main clearfix d-flex mt-1\">
                                                                    <div class=\"stars stars-example-fontawesome stars-example-fontawesome-sm mr-2\">
                                                                        <select class=\"example-fontawesome\" name=\"rating\" autocomplete=\"off\">
                                                                            <option value=\"1\">1</option>
                                                                            <option value=\"2\">2</option>
                                                                            <option value=\"3\">3</option>
                                                                            <option value=\"4\" selected>4</option>
                                                                            <option value=\"5\">5</option>
                                                                        </select>
                                                                    </div> <a class=\"fs-13 leading-tight mt-1\" href=\"#\">13 Reviews</a>
                                                                </div>
                                                            </div>
                                                            <div class=\"\">
                                                                <p class=\"mt-2 mb-0 leading-loose\"><b>15 Days, 14 Nights</b> Australia Travel Trip.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed  </p>
                                                            </div>
                                                            <a class=\"btn btn-light btn-pill btn-sm mt-2\" href=\"tours.html\">Read More</a>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-footer\">
                                                        <div class=\"item-card9-footer d-flex\">
                                                            <div class=\"item-card9-cost d-flex\">
                                                                <img src=\"../../assets/images/faces/female/1.jpg\" class=\"avatar brround\" alt=\"\">
                                                                <div class=\"ml-3\">
                                                                    <h6 class=\"mb-0 mt-2 font-weight-semibold2\">Lilly Wisely</h6>
                                                                </div>
                                                            </div>
                                                            <div class=\"ml-auto\">
                                                                <div class=\"text-dark font-weight-normal mb-0 mt-2 item-card2-desc\">
                                                                    <a class=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#contact\"><i class=\"fe fe-mail d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"458-965-856\"><i class=\"fe fe-phone d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"https://spruko.com\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"https://spruko.com\"><i class=\"fe fe-globe d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"#\"><i class=\"fe fe-share-2 d-inline-block\"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class=\"col-xl-12 col-lg-6 col-md-6\">
                                        <div class=\"card overflow-hidden\">
                                            <div class=\"d-xl-flex ieh-100\">
                                                <div class=\"item-card9-img\">
                                                    <div class=\"item-card9-imgs\">
                                                        <a class=\"d-block video-btn1 mx-auto\" href=\"#\" data-toggle=\"modal\" data-target=\"#homeVideo\"><span class=\"fa fa-play text-white\"></span></a>
                                                        <img src=\"../../assets/images/locations/losangels.jpg\" alt=\"img\" class=\"cover-image\">
                                                    </div>
                                                    <div class=\"item-card9-icons\">
                                                        <a href=\"#\" class=\"item-card9-icons1 wishlist active\"> <i class=\"fa fa fa-heart-o\"></i></a>
                                                    </div>
                                                    <div class=\"item-cardreview-absolute bg-info\">Weekend</div>
                                                    <div class=\"font-weight-semibold2 text-muted mb-0 price-badge item-cardreview-absolute-price bg-info\"><span class=\"text-white\">\$130</span><small class=\"text-white-80\">/person</small></div>
                                                </div>
                                                <div class=\"card border-0 mb-0 br-0\">
                                                    <div class=\"card-body h-100\">
                                                        <div class=\"item-card9\">
                                                            <a href=\"tours.html\" class=\"text-dark\"><h4 class=\"font-weight-semibold2 mt-1 mb-1\">Losangles New Locations</h4></a>
                                                            <div class=\"mt-0 mb-0 d-sm-flex d-md-block d-xl-flex\">
                                                                <a href=\"#\" class=\"mt-1 mb-0 mr-3 text-dark\"><i class=\"fe fe-map-pin mr-1\"></i> losangels</a>
                                                                <a href=\"#\" class=\"mt-1 mb-0 mr-3 text-muted\"><i class=\"fe fe-eye mr-1\"></i> 18 Tour Places</a>
                                                                <div class=\"star-ratings start-ratings-main clearfix d-flex mt-1\">
                                                                    <div class=\"stars stars-example-fontawesome stars-example-fontawesome-sm mr-2\">
                                                                        <select class=\"example-fontawesome\" name=\"rating\" autocomplete=\"off\">
                                                                            <option value=\"1\">1</option>
                                                                            <option value=\"2\">2</option>
                                                                            <option value=\"3\">3</option>
                                                                            <option value=\"4\" selected>4</option>
                                                                            <option value=\"5\">5</option>
                                                                        </select>
                                                                    </div> <a class=\"fs-13 leading-tight mt-1\" href=\"#\">53 Reviews</a>
                                                                </div>
                                                            </div>
                                                            <div class=\"\">
                                                                <p class=\"mt-2 mb-0 leading-loose\"><b>10 Days, 9 Nights</b> Losangles Travel Trip.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed  </p>
                                                            </div>
                                                            <a class=\"btn btn-light btn-pill btn-sm mt-2\" href=\"tours.html\">Read More</a>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-footer\">
                                                        <div class=\"item-card9-footer d-flex\">
                                                            <div class=\"item-card9-cost d-flex\">
                                                                <img src=\"../../assets/images/faces/male/1.jpg\" class=\"avatar brround\" alt=\"\">
                                                                <div class=\"ml-3\">
                                                                    <h6 class=\"mb-0 mt-2 font-weight-semibold2\">John Smith</h6>
                                                                </div>
                                                            </div>
                                                            <div class=\"ml-auto\">
                                                                <div class=\"text-dark font-weight-normal mb-0 mt-2 item-card2-desc\">
                                                                    <a class=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#contact\"><i class=\"fe fe-mail d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"458-965-856\"><i class=\"fe fe-phone d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"https://spruko.com\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"https://spruko.com\"><i class=\"fe fe-globe d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"#\"><i class=\"fe fe-share-2 d-inline-block\"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 444
        $this->displayBlock('body', $context, $blocks);
        // line 538
        echo "        </div>
    </div>
</section>
<!--/Add Listings-->

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

    // line 207
    public function block_namelist($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "namelist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "namelist"));

        echo "Event list ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 229
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 230
        echo "                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control br-tl-5 br-bl-5\" placeholder=\"Search Tour\">
                            <div class=\"input-group-append \">
                                <button type=\"button\" class=\"btn btn-secondary br-tr-5 br-br-5\">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 444
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 445
        echo "                            <div class=\"tab-pane active\" id=\"tab-12\">
                                <div class=\"row\">


                                    <div class=\"col-lg-6 col-md-6 col-xl-6\">
                                        <div class=\"card overflow-hidden\">
                                            <div class=\"h-100\">
                                                <div class=\"item-card9-img h-250\">
                                                    <div class=\"item-card9-imgs\">
                                                        <a href=\"tours.html\" class=\"absolute-link2\"></a>
                                                        <img src=\"../../assets/images/locations/india.jpg\" alt=\"img\" class=\"cover-image\">
                                                    </div>
                                                    <div class=\"item-card9-icons\">
                                                        <a href=\"#\" class=\"item-card9-icons1 wishlist\"> <i class=\"fa fa fa-heart-o\"></i></a>
                                                    </div>
                                                    <div class=\"item-cardreview-absolute bg-success\">Holiday</div>
                                                    <div class=\"font-weight-semibold2 text-muted mb-0 price-badge item-cardreview-absolute-price  bg-success\"><span class=\"text-white\">\$119</span><small class=\"text-white-80\">/person</small></div>
                                                </div>
                                                <div class=\"card border-0 mb-0 br-0\">
                                                    <div class=\"card-body h-100\">
                                                        <div class=\"item-card9\">
                                                            <a href=\"tours.html\" class=\"text-dark\"><h4 class=\"font-weight-semibold2 mt-1 mb-1\">India New Locations</h4></a>
                                                            <div class=\"mt-0 mb-0 d-sm-flex d-md-block d-xl-flex\">
                                                                <a href=\"#\" class=\"mt-1 mb-0 mr-3 text-dark\"><i class=\"fe fe-map-pin mr-1\"></i> India</a>
                                                                <a href=\"#\" class=\"mt-1 mb-0 mr-3 text-muted\"><i class=\"fe fe-eye mr-1\"></i> 12 Tour Places</a>
                                                                <div class=\"star-ratings start-ratings-main clearfix d-flex mt-1\">
                                                                    <div class=\"stars stars-example-fontawesome stars-example-fontawesome-sm mr-2\">
                                                                        <select class=\"example-fontawesome\" name=\"rating\" autocomplete=\"off\">
                                                                            <option value=\"1\">1</option>
                                                                            <option value=\"2\">2</option>
                                                                            <option value=\"3\">3</option>
                                                                            <option value=\"4\" selected>4</option>
                                                                            <option value=\"5\">5</option>
                                                                        </select>
                                                                    </div> <a class=\"fs-13 leading-tight mt-1\" href=\"#\">56 Reviews</a>
                                                                </div>
                                                            </div>
                                                            <div class=\"\">
                                                                <p class=\"mt-2 mb-0 leading-loose\"><b>16 Days, 15 Nights</b> India Travel Trip.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed  </p>
                                                            </div>
                                                            <a class=\"btn btn-light btn-pill btn-sm mt-2\" href=\"tours.html\">Read More</a>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-footer\">
                                                        <div class=\"item-card9-footer d-flex\">
                                                            <div class=\"item-card9-cost d-flex\">
                                                                <img src=\"../../assets/images/faces/female/11.jpg\" class=\"avatar brround\" alt=\"\">
                                                                <div class=\"ml-3\">
                                                                    <h6 class=\"mb-0 mt-2 font-weight-semibold2\">Mary metal</h6>
                                                                </div>
                                                            </div>
                                                            <div class=\"ml-auto\">
                                                                <div class=\"text-dark font-weight-normal mb-0 mt-2 item-card2-desc\">
                                                                    <a class=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#contact\"><i class=\"fe fe-mail d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"458-965-856\"><i class=\"fe fe-phone d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"https://spruko.com\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"https://spruko.com\"><i class=\"fe fe-globe d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"#\"><i class=\"fe fe-share-2 d-inline-block\"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-sm-flex\">
                        <h6 class=\"mb-4 mb-sm-0 mt-3\">Showing <b>1 to 10</b> of 30 entries</h6>
                        <ul class=\"pagination mb-5 ml-auto\">
                            <li class=\"page-item page-prev disabled\">
                                <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Prev</a>
                            </li>
                            <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item page-next\">
                                <a class=\"page-link\" href=\"#\">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


                <!--/Add lists-->

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "listefront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  966 => 445,  956 => 444,  933 => 230,  923 => 229,  904 => 207,  885 => 15,  513 => 538,  511 => 444,  309 => 244,  307 => 229,  282 => 207,  255 => 183,  206 => 137,  99 => 33,  93 => 30,  87 => 27,  81 => 24,  75 => 21,  69 => 18,  65 => 16,  63 => 15,  47 => 1,);
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
    <meta name=\"keywords\" content=\"travel html template,html code for travel and tourism website,travel agency website templates,template hotel booking,travel web template,trip travel,themeforest html templates,travel website templates,travel template,travel itinerary template,travel booking template,travel agency website templates html5,travel website templates bootstrap,tourism website templates html,travel agency html template,travel theme html,html travel website templates,travel html theme,travel website templates html,template html travel,tour operator website templates\">
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"favicon.ico\" />

    <!-- Title -->
   {% block title %} <title>Gowell - Travel HTML Listing Template</title> {% endblock %}

    <!-- Bootstrap Css -->
    <link href=\"{{ asset('../assets/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />

    <!-- Style Css -->
    <link href=\"{{ asset('../assets/css/style.css') }}\" rel=\"stylesheet\" />

    <!-- Icons Css -->
    <link href=\"{{ asset('../assets/css/icons.css') }}\" rel=\"stylesheet\"/>

    <!-- Jquery-bar-rating css-->
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css') }}\">

    <!-- Auto Complete css -->
    <link href=\"{{ asset('../assets/plugins/autocomplete/jquery.autocomplete.css') }}\" rel=\"stylesheet\">

    <!-- Color-Skins -->
    <link id=\"theme\" href=\"{{ asset('../assets/color-skins/color.css') }}\"  rel=\"stylesheet\"/>

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
                                    <li><a href=\"{{ path('repas_index') }}\">Food Advisor List</a></li>
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
                    <li><a href=\"{{ path('reclamation_new') }}\"> Contact Us</a></li>

                </ul>
            </nav>
            <!--Nav-->
        </div>

    </div>
</div>
</div>




<!--Section-->

<!--/Sliders Section-->

<!--Breadcrumb-->
<div class=\"bg-white border-bottom\">
    <div class=\"container\">

        <div class=\"page-header\">

            <h4 class=\"page-title\"> {% block namelist %}Event list {% endblock %}</h4>


        </div>
    </div>
</div>
{
<!--/Breadcrumb-->

<!--<div class=\"ht-300 map-view\" id=\"leaflet2\" style=\"height:400px\"></div>-->

<iframe class=\" map-view\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15222.735906494796!2d78.5702658!3d17.4748335!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x326d1c90786b2ab6!2zU1BSVUtP4oSi!5e0!3m2!1sen!2sin!4v1600833029853!5m2!1sen!2sin\" width=\"600\" height=\"450\"  style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>


<!--Add listing-->
<section class=\"sptb\">
    <div class=\"container\">
        <div class=\"row\">

            <!--Side Content-->
            <div class=\"col-xl-3 col-lg-3 col-md-12\">

            {% block search %}
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control br-tl-5 br-bl-5\" placeholder=\"Search Tour\">
                            <div class=\"input-group-append \">
                                <button type=\"button\" class=\"btn btn-secondary br-tr-5 br-br-5\">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {% endblock %}

                # bloc categorie

                <div class=\"card mb-0\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Categories</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"\" id=\"container\">
                            <div class=\"filter-product-checkboxs\">
                                <label class=\"custom-control custom-checkbox mb-3\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" name=\"checkbox1\" value=\"option1\">
                                    <span class=\"custom-control-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark\">Australia<span class=\"label label-light float-right\">14</span></a>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                </label>



                            </div>
                        </div>
                    </div>


                    <div class=\"card-footer\">
                        <a href=\"#\" class=\"btn btn-primary btn-block\">Apply Filter</a>
                    </div>
                </div>
            </div>
            <!--/ Side Content-->

            <div class=\"col-xl-9 col-lg-9 col-md-12\">
                <!--Add lists-->

               <div class=\"mb-lg-0\">
                <div class=\"\">
                    <div class=\"item2-gl business-list-01\">
                        <div class=\"\">
                            <div class=\"bg-white p-5 item2-gl-nav d-flex\">
                                <div class=\"selectgroup\">
                                    <label class=\"selectgroup-item mb-md-0\">
                                        <input type=\"radio\" name=\"value\" value=\"All\" class=\"selectgroup-input\" checked=\"\">
                                        <span class=\"selectgroup-button d-md-flex\">All <i class=\"fa fa-sort ml-2 mt-1\"></i></span>
                                    </label>
                                    <label class=\"selectgroup-item mb-md-0\">
                                        <input type=\"radio\" name=\"value\" value=\"Distance\" class=\"selectgroup-input\">
                                        <span class=\"selectgroup-button\">Famous</span>
                                    </label>
                                    <label class=\"selectgroup-item mb-md-0\">
                                        <input type=\"radio\" name=\"value\" value=\"Latest\" class=\"selectgroup-input\">
                                        <span class=\"selectgroup-button\">Latest</span>
                                    </label>
                                    <label class=\"selectgroup-item mb-0\">
                                        <input type=\"radio\" name=\"value\" value=\"Rating\" class=\"selectgroup-input\">
                                        <span class=\"selectgroup-button\">Rating</span>
                                    </label>
                                </div>
                                <ul class=\"nav item2-gl-menu ml-auto mt-1\">
                                    <li class=\"\"><a href=\"#tab-11\" data-toggle=\"tab\" title=\"List style\"><i class=\"fe fe-list\"></i></a></li>
                                    <li><a href=\"#tab-12\" data-toggle=\"tab\"  class=\"active show\" title=\"Grid\"><i class=\"fe fe-grid\"></i></a></li>
                                </ul>
                                <a class=\"btn btn-light map-view-btn mt-5 mt-sm-0\" href=\"#\"><i class=\"fe fe-map-pin mr-1\"></i><span class=\"active\"> View On Map</span><span class=\"disactive\"> Hide Map</span> </a>
                            </div>
                        </div>

                        <div class=\"tab-content\">
                            <div class=\"tab-pane\" id=\"tab-11\">
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-lg-6 col-md-6\">
                                        <div class=\"card overflow-hidden\">
                                            <div class=\"d-xl-flex ieh-100\">
                                                <div class=\"item-card9-img\">
                                                    <div class=\"item-card9-imgs\">
                                                        <a href=\"tours.html\" class=\"absolute-link2\"></a>
                                                        <img src=\"../../assets/images/locations/austerlia.jpg\" alt=\"img\" class=\"cover-image\">
                                                        <div class=\"item-card2-img1\" data-toggle=\"modal\" data-target=\"#gallery\">
                                                            <span class=\"badge bg-dark-transparent6 text-white fs-14 font-weight-semibold2\"><i class=\"fe fe-image \"></i> 5</span>
                                                        </div>
                                                    </div>
                                                    <div class=\"item-card9-icons\">
                                                        <a href=\"#\" class=\"item-card9-icons1 wishlist\"> <i class=\"fa fa fa-heart-o\"></i></a>
                                                    </div>
                                                    <div class=\"item-cardreview-absolute bg-secondary\">City</div>
                                                    <div class=\"font-weight-semibold2 text-muted mb-0 price-badge item-cardreview-absolute-price\"><span class=\"text-white\">\$100</span><small class=\"text-white-80\">/person</small></div>
                                                </div>
                                                <div class=\"card border-0 mb-0 br-0\">
                                                    <div class=\"card-body h-100\">
                                                        <div class=\"item-card9\">
                                                            <a href=\"tours.html\" class=\"text-dark\"><h4 class=\"font-weight-semibold2 mt-1 mb-1\">Australia New Locations</h4></a>
                                                            <div class=\"mt-0 mb-0 d-sm-flex d-md-block d-xl-flex\">
                                                                <a href=\"#\" class=\"mt-1 mb-0 mr-3 text-dark\"><i class=\"fe fe-map-pin mr-1\"></i> Australia</a>
                                                                <a href=\"#\" class=\"mt-1 mb-0 mr-3 text-muted\"><i class=\"fe fe-eye mr-1\"></i> 12 Tour Places</a>
                                                                <div class=\"star-ratings start-ratings-main clearfix d-flex mt-1\">
                                                                    <div class=\"stars stars-example-fontawesome stars-example-fontawesome-sm mr-2\">
                                                                        <select class=\"example-fontawesome\" name=\"rating\" autocomplete=\"off\">
                                                                            <option value=\"1\">1</option>
                                                                            <option value=\"2\">2</option>
                                                                            <option value=\"3\">3</option>
                                                                            <option value=\"4\" selected>4</option>
                                                                            <option value=\"5\">5</option>
                                                                        </select>
                                                                    </div> <a class=\"fs-13 leading-tight mt-1\" href=\"#\">13 Reviews</a>
                                                                </div>
                                                            </div>
                                                            <div class=\"\">
                                                                <p class=\"mt-2 mb-0 leading-loose\"><b>15 Days, 14 Nights</b> Australia Travel Trip.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed  </p>
                                                            </div>
                                                            <a class=\"btn btn-light btn-pill btn-sm mt-2\" href=\"tours.html\">Read More</a>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-footer\">
                                                        <div class=\"item-card9-footer d-flex\">
                                                            <div class=\"item-card9-cost d-flex\">
                                                                <img src=\"../../assets/images/faces/female/1.jpg\" class=\"avatar brround\" alt=\"\">
                                                                <div class=\"ml-3\">
                                                                    <h6 class=\"mb-0 mt-2 font-weight-semibold2\">Lilly Wisely</h6>
                                                                </div>
                                                            </div>
                                                            <div class=\"ml-auto\">
                                                                <div class=\"text-dark font-weight-normal mb-0 mt-2 item-card2-desc\">
                                                                    <a class=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#contact\"><i class=\"fe fe-mail d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"458-965-856\"><i class=\"fe fe-phone d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"https://spruko.com\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"https://spruko.com\"><i class=\"fe fe-globe d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"#\"><i class=\"fe fe-share-2 d-inline-block\"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class=\"col-xl-12 col-lg-6 col-md-6\">
                                        <div class=\"card overflow-hidden\">
                                            <div class=\"d-xl-flex ieh-100\">
                                                <div class=\"item-card9-img\">
                                                    <div class=\"item-card9-imgs\">
                                                        <a class=\"d-block video-btn1 mx-auto\" href=\"#\" data-toggle=\"modal\" data-target=\"#homeVideo\"><span class=\"fa fa-play text-white\"></span></a>
                                                        <img src=\"../../assets/images/locations/losangels.jpg\" alt=\"img\" class=\"cover-image\">
                                                    </div>
                                                    <div class=\"item-card9-icons\">
                                                        <a href=\"#\" class=\"item-card9-icons1 wishlist active\"> <i class=\"fa fa fa-heart-o\"></i></a>
                                                    </div>
                                                    <div class=\"item-cardreview-absolute bg-info\">Weekend</div>
                                                    <div class=\"font-weight-semibold2 text-muted mb-0 price-badge item-cardreview-absolute-price bg-info\"><span class=\"text-white\">\$130</span><small class=\"text-white-80\">/person</small></div>
                                                </div>
                                                <div class=\"card border-0 mb-0 br-0\">
                                                    <div class=\"card-body h-100\">
                                                        <div class=\"item-card9\">
                                                            <a href=\"tours.html\" class=\"text-dark\"><h4 class=\"font-weight-semibold2 mt-1 mb-1\">Losangles New Locations</h4></a>
                                                            <div class=\"mt-0 mb-0 d-sm-flex d-md-block d-xl-flex\">
                                                                <a href=\"#\" class=\"mt-1 mb-0 mr-3 text-dark\"><i class=\"fe fe-map-pin mr-1\"></i> losangels</a>
                                                                <a href=\"#\" class=\"mt-1 mb-0 mr-3 text-muted\"><i class=\"fe fe-eye mr-1\"></i> 18 Tour Places</a>
                                                                <div class=\"star-ratings start-ratings-main clearfix d-flex mt-1\">
                                                                    <div class=\"stars stars-example-fontawesome stars-example-fontawesome-sm mr-2\">
                                                                        <select class=\"example-fontawesome\" name=\"rating\" autocomplete=\"off\">
                                                                            <option value=\"1\">1</option>
                                                                            <option value=\"2\">2</option>
                                                                            <option value=\"3\">3</option>
                                                                            <option value=\"4\" selected>4</option>
                                                                            <option value=\"5\">5</option>
                                                                        </select>
                                                                    </div> <a class=\"fs-13 leading-tight mt-1\" href=\"#\">53 Reviews</a>
                                                                </div>
                                                            </div>
                                                            <div class=\"\">
                                                                <p class=\"mt-2 mb-0 leading-loose\"><b>10 Days, 9 Nights</b> Losangles Travel Trip.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed  </p>
                                                            </div>
                                                            <a class=\"btn btn-light btn-pill btn-sm mt-2\" href=\"tours.html\">Read More</a>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-footer\">
                                                        <div class=\"item-card9-footer d-flex\">
                                                            <div class=\"item-card9-cost d-flex\">
                                                                <img src=\"../../assets/images/faces/male/1.jpg\" class=\"avatar brround\" alt=\"\">
                                                                <div class=\"ml-3\">
                                                                    <h6 class=\"mb-0 mt-2 font-weight-semibold2\">John Smith</h6>
                                                                </div>
                                                            </div>
                                                            <div class=\"ml-auto\">
                                                                <div class=\"text-dark font-weight-normal mb-0 mt-2 item-card2-desc\">
                                                                    <a class=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#contact\"><i class=\"fe fe-mail d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"458-965-856\"><i class=\"fe fe-phone d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"https://spruko.com\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"https://spruko.com\"><i class=\"fe fe-globe d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"#\"><i class=\"fe fe-share-2 d-inline-block\"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {% block body %}
                            <div class=\"tab-pane active\" id=\"tab-12\">
                                <div class=\"row\">


                                    <div class=\"col-lg-6 col-md-6 col-xl-6\">
                                        <div class=\"card overflow-hidden\">
                                            <div class=\"h-100\">
                                                <div class=\"item-card9-img h-250\">
                                                    <div class=\"item-card9-imgs\">
                                                        <a href=\"tours.html\" class=\"absolute-link2\"></a>
                                                        <img src=\"../../assets/images/locations/india.jpg\" alt=\"img\" class=\"cover-image\">
                                                    </div>
                                                    <div class=\"item-card9-icons\">
                                                        <a href=\"#\" class=\"item-card9-icons1 wishlist\"> <i class=\"fa fa fa-heart-o\"></i></a>
                                                    </div>
                                                    <div class=\"item-cardreview-absolute bg-success\">Holiday</div>
                                                    <div class=\"font-weight-semibold2 text-muted mb-0 price-badge item-cardreview-absolute-price  bg-success\"><span class=\"text-white\">\$119</span><small class=\"text-white-80\">/person</small></div>
                                                </div>
                                                <div class=\"card border-0 mb-0 br-0\">
                                                    <div class=\"card-body h-100\">
                                                        <div class=\"item-card9\">
                                                            <a href=\"tours.html\" class=\"text-dark\"><h4 class=\"font-weight-semibold2 mt-1 mb-1\">India New Locations</h4></a>
                                                            <div class=\"mt-0 mb-0 d-sm-flex d-md-block d-xl-flex\">
                                                                <a href=\"#\" class=\"mt-1 mb-0 mr-3 text-dark\"><i class=\"fe fe-map-pin mr-1\"></i> India</a>
                                                                <a href=\"#\" class=\"mt-1 mb-0 mr-3 text-muted\"><i class=\"fe fe-eye mr-1\"></i> 12 Tour Places</a>
                                                                <div class=\"star-ratings start-ratings-main clearfix d-flex mt-1\">
                                                                    <div class=\"stars stars-example-fontawesome stars-example-fontawesome-sm mr-2\">
                                                                        <select class=\"example-fontawesome\" name=\"rating\" autocomplete=\"off\">
                                                                            <option value=\"1\">1</option>
                                                                            <option value=\"2\">2</option>
                                                                            <option value=\"3\">3</option>
                                                                            <option value=\"4\" selected>4</option>
                                                                            <option value=\"5\">5</option>
                                                                        </select>
                                                                    </div> <a class=\"fs-13 leading-tight mt-1\" href=\"#\">56 Reviews</a>
                                                                </div>
                                                            </div>
                                                            <div class=\"\">
                                                                <p class=\"mt-2 mb-0 leading-loose\"><b>16 Days, 15 Nights</b> India Travel Trip.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed  </p>
                                                            </div>
                                                            <a class=\"btn btn-light btn-pill btn-sm mt-2\" href=\"tours.html\">Read More</a>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-footer\">
                                                        <div class=\"item-card9-footer d-flex\">
                                                            <div class=\"item-card9-cost d-flex\">
                                                                <img src=\"../../assets/images/faces/female/11.jpg\" class=\"avatar brround\" alt=\"\">
                                                                <div class=\"ml-3\">
                                                                    <h6 class=\"mb-0 mt-2 font-weight-semibold2\">Mary metal</h6>
                                                                </div>
                                                            </div>
                                                            <div class=\"ml-auto\">
                                                                <div class=\"text-dark font-weight-normal mb-0 mt-2 item-card2-desc\">
                                                                    <a class=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#contact\"><i class=\"fe fe-mail d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"458-965-856\"><i class=\"fe fe-phone d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"https://spruko.com\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"https://spruko.com\"><i class=\"fe fe-globe d-inline-block\"></i></a>
                                                                    <a class=\"\" href=\"#\"><i class=\"fe fe-share-2 d-inline-block\"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-sm-flex\">
                        <h6 class=\"mb-4 mb-sm-0 mt-3\">Showing <b>1 to 10</b> of 30 entries</h6>
                        <ul class=\"pagination mb-5 ml-auto\">
                            <li class=\"page-item page-prev disabled\">
                                <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Prev</a>
                            </li>
                            <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item page-next\">
                                <a class=\"page-link\" href=\"#\">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


                <!--/Add lists-->

    {% endblock %}
        </div>
    </div>
</section>
<!--/Add Listings-->

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
</html>", "listefront.html.twig", "/Users/zahracarthagechouchane/kiftrip/templates/listefront.html.twig");
    }
}
