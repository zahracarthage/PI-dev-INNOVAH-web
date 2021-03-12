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

/* base.html.twig */
class __TwigTemplate_81017c5745a9b14316efcddd25492cb33b204263d109294979b303427a222553 extends Template
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
            'banner' => [$this, 'block_banner'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\" dir=\"ltr\">
<head>
\t<!-- META DATA -->
\t<meta charset=\"UTF-8\">
\t<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"description\" content=\"Gowell - Travel HTML Listing Template\">
\t<meta name=\"author\" content=\"Spruko™ Technologies Private Limited\">
\t<meta name=\"keywords\" content=\"travel html template,html code for travel and tourism website,travel agency website templates,template hotel booking,travel web template,trip travel,themeforest html templates,travel website templates,travel template,travel itinerary template,travel booking template,travel agency website templates html5,travel website templates bootstrap,tourism website templates html,travel agency html template,travel theme html,html travel website templates,travel html theme,travel website templates html,template html travel,tour operator website templates\">
\t<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\"/>
\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"favicon.ico\" />

\t<!-- Title -->
\t";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "
\t<!-- Bootstrap Css -->
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

\t<!-- Style Css -->
\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

\t<!-- Icons Css -->
\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

\t<!-- Jquery-bar-rating css-->
\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css"), "html", null, true);
        echo "\">

\t<!-- Auto Complete css -->
\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/autocomplete/jquery.autocomplete.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t<!-- Color-Skins -->
\t<link id=\"theme\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/color-skins/color.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\"/>

</head>
<body>

<!--Loader-->
<div id=\"global-loader\" class=\"bg-primary\">
\t<div class=\"loader-svg-img\">
\t\t<img src=\"../../assets/images/brand/2.png\" class=\"\" alt=\"\">
\t\t<div class=\"flight-icon\"><i class=\"fa fa-plane\"></i></div>
\t</div>
</div>
<!--/Loader-->

<!--Horizontal Section-->

<div class=\"header-main header-style03\">
\t<div class=\"top-bar app-header-background app-header-background2\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-8 col-lg-8 col-sm-4 col-7\">
\t\t\t\t\t<div class=\"top-bar-left d-flex\">
\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t<ul class=\"socials\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"social-icon text-white\" href=\"#\"><i class=\"fa fa-facebook text-white\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"social-icon text-white\" href=\"#\"><i class=\"fa fa-twitter text-white\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"social-icon text-white\" href=\"#\"><i class=\"fa fa-linkedin text-white\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"social-icon text-white\" href=\"#\"><i class=\"fa fa-google-plus text-white\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-sm-8 col-5\">
\t\t\t\t\t<div class=\"top-bar-right\">
\t\t\t\t\t\t<ul class=\"custom\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"register.html\" class=\"text-white\"><i class=\"fa fa-user mr-1 text-white\"></i> <span>Register</span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"login.html\" class=\"text-white\"><i class=\"fa fa-sign-in mr-1 text-white\"></i> <span>Login</span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-white\" data-toggle=\"dropdown\"><i class=\"fa fa-home mr-1 text-white\"></i><span> My Dashboard</span><i class=\"fa fa-angle-down ml-1 header-dropdown-icon\"></i></a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t<a href=\"mydash.html\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dropdown-icon icon icon-user\"></i> My Profile
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dropdown-icon icon icon-speech\"></i> Inbox
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dropdown-icon icon icon-bell\"></i> Notifications
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"mydash.html\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dropdown-icon  icon icon-settings\"></i> Account Settings
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"login.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dropdown-icon icon icon-power\"></i> Log out
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Mobile Header -->

\t<!-- /Mobile Header -->

\t<div class=\"horizontal-main  bg-dark-transparent clearfix py-lg-3\">
\t\t<div class=\"horizontal-mainwrapper container clearfix\">
\t\t\t<div class=\"desktoplogo\">
\t\t\t\t<a href=\"index.html\"><img src=\"../../assets/images/brand/logo.png\" alt=\"\"></a>
\t\t\t</div>
\t\t\t<div class=\"desktoplogo-1\">
\t\t\t\t<a href=\"index.html\"><img src=\"../../assets/images/brand/logo.png\" alt=\"\"></a>
\t\t\t</div>
\t\t\t<!--Nav-->
\t\t\t<nav class=\"horizontalMenu clearfix d-md-flex\">
\t\t\t\t<ul class=\"horizontalMenu-list\">

\t\t\t\t\t<li><a href=\"index.html\">Home </a>

\t\t\t\t\t</li>





\t\t\t\t\t<li><a href=\"#\">Categories <span class=\"fa fa-caret-down m-0\"></span></a>
\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t<li><a href=\"index-food.html\">Food Advisor <span class=\"fa fa-caret-down m-0\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repas_index");
        echo "\">Food Advisor List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index-food.html\">Food Advisor main page</a></li>

\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<li><a href=\"index-hotel.html\">Guest Houses
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-caret-down m-0\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-list.html\">Guest houses List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index-hotel.html\">Guest houses main page</a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<li><a href=\"index-event.html\">Events <span class=\"fa fa-caret-down m-0\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"event-list.html\">Events List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index-event.html\">Events main page</a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<li><a href=\"index-activities.html\">Activities <span class=\"fa fa-caret-down m-0\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"activities-list.html\">Activities List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index-activities.html\">Activities main page</a></li>

\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<li><a href=\"index-packagesa.html\">Packages <span class=\"fa fa-caret-down m-0\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"packages-list.html\">Packages List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index-packages.html\">Packages main page</a></li>

\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>




\t\t\t\t\t<li><a href=\"#\">About Us </a></li>
\t\t\t\t\t<li> <a href=\"shop.html\">Shop</a></li>



\t\t\t\t\t<li><a href=\"#\">Blog </a>

\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"";
        // line 184
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo "\"> Contact Us</a></li>

\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!--Nav-->
\t\t</div>

\t</div>
</div>

<!--Section-->
";
        // line 195
        $this->displayBlock('banner', $context, $blocks);
        // line 212
        echo "<!--Section-->

<!--Section-->
";
        // line 215
        $this->displayBlock('body', $context, $blocks);
        // line 695
        echo "
<!--Section-->
<section class=\"cover-image sptb bg-background-color\" data-image-src=\"../../assets/images/banners/banner10.jpg\">
\t<div class=\"content-text mb-0\">
\t\t<div class=\"content-text mb-0\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"text-center text-white \">
\t\t\t\t\t<span class=\"heading-style text-white-80\">Subscribe</span>
\t\t\t\t\t<h2 class=\"mb-2 font-weight-bold fs-40\">Our Newsletter</h2>
\t\t\t\t\t<p class=\"fs-16 mb-0\">Subscribe to Newsletter to get a notification. We promise not to spam!</p>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-7 mx-auto d-block\">
\t\t\t\t\t\t\t<div class=\"mt-5\">
\t\t\t\t\t\t\t\t<div class=\"input-group sub-input mt-1\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-lg \" placeholder=\"Enter your Email\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append \">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary btn-lg br-tr-3 br-br-3 pl-5 pr-5 font-weight-semibold2\">
\t\t\t\t\t\t\t\t\t\t\tSubscribe
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--Section-->

<!--Section-->
<section class=\"sptb\">
\t<div class=\"container\">
\t\t<div class=\"section-title center-block text-center\">
\t\t\t<span class=\"heading-style text-secondary\">New</span>
\t\t\t<h2>Blog News</h2>
\t\t\t<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"card cover-image blog-style overflow-hidden\">
\t\t\t\t\t<a class=\"absolute-link2\" href=\"blog-details.html\"></a>
\t\t\t\t\t<div class=\"card-body content-text p-5\">
\t\t\t\t\t\t<div class=\"relative\">
\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h1.jpg\" alt=\"\" class=\"br-7 mb-3 w-100\">
\t\t\t\t\t\t\t<div class=\"item-card7-overlaytext\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-0 br-tl-5 br-br-5 br-bl-0 fs-14\">03 Dec 2020</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3 mt-3\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"mr-0 ml-0 btn-link\"><span class=\"text-default\">By</span> Lilly Wisely</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"pl-4 ml-4 border-left\"> 4 comments</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-1 fs-18 leading-normal font-weight-semibold2\">Recomended Hotel</h4>
\t\t\t\t\t\t<p class=\"\">Quod eos id officiis hic tenetur quae quaerat ad velit and Lorem ipsum dolor sit amet,</p>
\t\t\t\t\t\t<a class=\"btn-link\" href=\"blog-list.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"card cover-image blog-style overflow-hidden\">
\t\t\t\t\t<a class=\"absolute-link2\" href=\"blog-details.html\"></a>
\t\t\t\t\t<div class=\"card-body content-text p-5\">
\t\t\t\t\t\t<div class=\"relative\">
\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h2.jpg\" alt=\"\" class=\"br-7 mb-3 w-100\">
\t\t\t\t\t\t\t<div class=\"item-card7-overlaytext\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-0 br-tl-5 br-br-5 br-bl-0 fs-14\">2 Jun 2020</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3 mt-3\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"mr-0 ml-0 btn-link\"><span class=\"text-default\">By</span> Lilly Wiliams</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"pl-4 ml-4 border-left\"> 5 comments</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-1 fs-18 leading-normal font-weight-semibold2\">Best Rooms</h4>
\t\t\t\t\t\t<p class=\"\">Quod eos id officiis hic tenetur quae quaerat ad velit and Lorem ipsum dolor sit amet,</p>
\t\t\t\t\t\t<a class=\"btn-link\" href=\"blog-list.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"card cover-image blog-style overflow-hidden\">
\t\t\t\t\t<a class=\"absolute-link2\" href=\"blog-details.html\"></a>
\t\t\t\t\t<div class=\"card-body content-text p-5\">
\t\t\t\t\t\t<div class=\"relative\">
\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h3.jpg\" alt=\"\" class=\"br-7 mb-3 w-100\">
\t\t\t\t\t\t\t<div class=\"item-card7-overlaytext\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-0 br-tl-5 br-br-5 br-bl-0 fs-14\">14 Jul 2020</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3 mt-3\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"mr-0 ml-0 btn-link\"><span class=\"text-default\">By</span> John Smith</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"pl-4 ml-4 border-left\"> 5 comments</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-1 fs-18 leading-normal font-weight-semibold2\">Best Service at Hotel</h4>
\t\t\t\t\t\t<p class=\"\">Quod eos id officiis hic tenetur quae quaerat ad velit and Lorem ipsum dolor sit amet,</p>
\t\t\t\t\t\t<a class=\"btn-link\" href=\"blog-list.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--Section-->

<!--Section-->

<!--/Section-->

<!--Footer Section-->
<section>
\t<footer class=\"bg-dark-purple text-white\">
\t\t<div class=\"footer-main border-bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-3 col-lg-6 col-md-12\">
\t\t\t\t\t\t<h6>Get In Touch</h6>
\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-home mr-3 text-secondary\"></i> New York, Weq Street, NY 10012, US</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-envelope mr-3 text-secondary fs-12\"></i> info12323@example.com</a></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-phone mr-3 text-secondary\"></i> + 01 234 567 88</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-print mr-3 text-secondary\"></i> + 01 234 567 89</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3 col-lg-6 col-md-12\">
\t\t\t\t\t\t<h6>Popular Tour Places</h6>
\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Canada Navy City </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Watican Flower Park in Paris</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Great Paris Effil Tower</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Histrorical London Stone Bridegs</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-2 col-lg-6 col-md-12\">
\t\t\t\t\t\t<h6 class=\"\">Latest Tours</h6>
\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Best Tours In World</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Paris Great Tour</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Top Adventure Tour</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Top Histrorical Tour</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-4 col-lg-6 col-md-12\">
\t\t\t\t\t\t<div class=\"form-group d-flex mb-0\">
\t\t\t\t\t\t\t<div class=\"mr-4 w-180\">
\t\t\t\t\t\t\t\t<select class=\"form-control select2\" data-placeholder=\"Select Country\">
\t\t\t\t\t\t\t\t\t<option value=\"en\">English</option>
\t\t\t\t\t\t\t\t\t<option value=\"en\">Arabic</option>
\t\t\t\t\t\t\t\t\t<option value=\"en\">German</option>
\t\t\t\t\t\t\t\t\t<option value=\"en\">Greek</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mr-4 w-180\">
\t\t\t\t\t\t\t\t<select class=\"form-control select2\" data-placeholder=\"Select Country\">
\t\t\t\t\t\t\t\t\t<option value=\"en\">USD</option>
\t\t\t\t\t\t\t\t\t<option value=\"en\">EUR</option>
\t\t\t\t\t\t\t\t\t<option value=\"en\">INR</option>
\t\t\t\t\t\t\t\t\t<option value=\"en\">GBP</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h6 class=\"mb-2 mt-5\">Payments</h6>
\t\t\t\t\t\t<ul class=\"payments mb-0\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-amex\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-visa\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-credit-card-alt\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-mastercard\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-paypal\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-discover\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-google-wallet\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"bg-dark-purple text-white p-0 border-bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"p-2 text-center footer-links\">
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">How It Works</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">About Us</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">Pricing</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">Listing Categories</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">Privacy Policy</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">Terms Of Conditions</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">Blog</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">Contact Us</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">Premium Ad</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"bg-dark-purple text-white-50 p-3\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex\">
\t\t\t\t\t<div class=\"col-lg-12 col-sm-12  mt-2 mb-2 text-center \">
\t\t\t\t\t\tCopyright © 2020 <a href=\"#\" class=\"fs-14 text-secondary\">Gowell</a>. Designed by <a href=\"spruko.com\" class=\"fs-14 text-secondary\">Spruko</a> All rights reserved.
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-12 col-sm-12 text-center mb-2 mt-2\">
\t\t\t\t\t\t<ul class=\"social-icons mb-0\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"social-icon\" href=\"\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"social-icon\" href=\"\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"social-icon\" href=\"\"><i class=\"fa fa-rss\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"social-icon\" href=\"\"><i class=\"fa fa-youtube\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"social-icon\" href=\"\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"social-icon\" href=\"\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
</section>
<!--Footer Section-->

<!--  Modal Popup -->
<div class=\"modal fade\" id=\"gallery\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"product-slider modal-body p-2\">
\t\t\t\t<div id=\"carousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<a class=\"gallery-close-button\" href=\"#\" data-dismiss=\"modal\" aria-label=\"Close\"><i class=\"fe fe-x\"></i></a>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\"><img src=\"../../assets/images/places/1.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/2.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/3.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/4.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/5.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/1.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/2.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/3.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/4.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/5.jpg\" alt=\"img\"> </div>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<div id=\"thumbcarousel\" class=\"carousel slide product-slide-thumb\" data-interval=\"false\">
\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"0\" class=\"thumb\"><img src=\"../../assets/images/places/1.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"1\" class=\"thumb\"><img src=\"../../assets/images/places/2.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"2\" class=\"thumb\"><img src=\"../../assets/images/places/3.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"3\" class=\"thumb\"><img src=\"../../assets/images/places/4.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"4\" class=\"thumb\"><img src=\"../../assets/images/places/5.jpg\" alt=\"img\"></div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-item \">
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"0\" class=\"thumb\"><img src=\"../../assets/images/places/1.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"1\" class=\"thumb\"><img src=\"../../assets/images/places/2.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"2\" class=\"thumb\"><img src=\"../../assets/images/places/3.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"3\" class=\"thumb\"><img src=\"../../assets/images/places/4.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"4\" class=\"thumb\"><img src=\"../../assets/images/places/5.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#thumbcarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#thumbcarousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!--  Modal Popup -->
<div class=\"modal fade\" id=\"homeVideo\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog  modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" onclick=\"pauseVid()\"><i class=\"fe fe-x\"></i></button>
\t\t\t<!--<iframe width=\"560\" height=\"400\" src=\"https://www.youtube.com/embed/kFjETSa9N7A\"  allow=\"accelerometer; autoplay;\" allowfullscreen></iframe>-->
\t\t\t<div class=\"embed-responsive embed-responsive-16by9\">
\t\t\t\t<video id=\"gossVideo\" class=\"embed-responsive-item\" controls=\"controls\">
\t\t\t\t\t<source src=\"../../assets/video/1.mp4\" type=\"video/mp4\">
\t\t\t\t</video>
\t\t\t</div>
\t\t</div>
\t</div>
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

<!--Internal :::  Counters -->
<script src=\"../../assets/plugins/counters/counterup.min.js\"></script>
<script src=\"../../assets/plugins/counters/waypoints.min.js\"></script>
<script src=\"../../assets/plugins/counters/numeric-counter.js\"></script>

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

<!-- Internal :::   Ion.RangeSlider -->
<script src=\"../../assets/plugins/jquery-uislider/jquery-ui.js\"></script>
<script src=\"../../assets/js/price-range.js\"></script>

<!-- Cookie js -->
<script src=\"../../assets/plugins/cookie/jquery.ihavecookies.js\"></script>
<script src=\"../../assets/plugins/cookie/cookie.js\"></script>

<!--Auto Complete js -->
<script src=\"../../assets/plugins/autocomplete/jquery.autocomplete.js\"></script>
<script src=\"../../assets/plugins/autocomplete/autocomplete.js\"></script>

<!-- Internal :::   Moment js-->
<script src=\"../../assets/plugins/moment/moment.js\"></script>

<!--Internal :::   Showmore Js-->
<script src=\"../../assets/js/jquery.showmore.js\"></script>
<script src=\"../../assets/js/showmore.js\"></script>

<!-- Internal :::   Datepicker js -->
<script src=\"../../assets/plugins/date-picker/jquery-ui.js\"></script>

<!-- Internal :::   Datepicker Custom js -->
<script src=\"../../assets/js/date-picker.js\"></script>

<!-- Internal :::   Daterange js-->
<script src=\"../../assets/plugins/bootstrap-daterangepicker/daterangepicker.js\"></script>
<script src=\"../../assets/js/daterange.js\"></script>

<!-- Internal :::   Typewritter Js-->
<script src=\"../../assets/js/typewritter.js\"></script>

<!-- Internal :::    Swipe Js-->
<script src=\"../../assets/js/swipe.js\"></script>

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

        echo "<title>activities</title> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 195
    public function block_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 196
        echo "<div class=\"cover-image sptb py-9 bg-background\" data-image-src=\"../../assets/images/banners/banner16.jpg\">
\t<div class=\"header-text1 mb-0\">
\t\t<div class=\"container\">
\t\t\t<div class=\"text-center text-white mb-4\">
\t\t\t\t<a href=\"\" class=\"typewrite font-weight-bold\" data-period=\"2000\" data-type='[\"Find Activities now\"]'>
\t\t\t\t\t<span class=\"wrap\"></span>
\t\t\t\t</a>
\t\t\t\t<p> Your Activities Look-out </p>

\t\t\t</div>

\t\t</div>
\t</div>
\t<!-- /header-text -->
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 215
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 216
        echo "<section class=\"sptb\">
\t<div class=\"container\">
\t\t<div class=\"section-title center-block text-center\">
\t\t\t<span class=\"heading-style text-secondary\">Currently happening</span>
\t\t\t<h1>Activities</h1>
\t\t\t<p>Find and book activities for the coming days </p>
\t\t</div>
\t\t<div class=\"row\">



\t\t\t<div class=\"col-md-6 col-sm-12 col-lg-4\">
\t\t\t\t<div class=\"item-card item-card2 overflow-hidden card\">
\t\t\t\t\t<div class=\"special-offer2 bg-secondary\">
\t\t\t\t\t\t<div class=\"percentage\">45%</div>
\t\t\t\t\t\t<div class=\"percentage-off\"><span>SPECIAL</span> OFF</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item-card-desc ieh-100\">
\t\t\t\t\t\t<a href=\"single-activity.html\"></a>
\t\t\t\t\t\t<div class=\"text-center overflow-hidden mb-lg-0\">
\t\t\t\t\t\t\t<div class=\"card-img br-bl-0 br-br-0\">
\t\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h2.jpg\" alt=\"img\" class=\"cover-image br-bl-0 br-br-0\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item-card-text text-left\">

\t\t\t\t\t\t\t\t<h4 class=\"mb-0 font-weight-bold\">activity 1</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>



\t\t</div>
\t</div>
</section>
<!--Section-->

<!--Section-->
<section class=\"sptb bg-white\">
\t<div class=\"container\">
\t\t<div class=\"section-title center-block text-center\">
\t\t\t<span class=\"heading-style text-secondary\">Popular</span>
\t\t\t<h2>Recomended Activities</h2>
\t\t\t<p>A select few of our most attractive activities</p>
\t\t</div>
\t\t<div class=\"owl-carousel owl-carousel-icons\">
\t\t\t<div class=\"item\">
\t\t\t\t<div class=\"card overflow-hidden\">
\t\t\t\t\t<div class=\"ieh-100\">
\t\t\t\t\t\t<div class=\"item-card9-img w-100\">
\t\t\t\t\t\t\t<div class=\"item-card9-imgs\">
\t\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h1.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t\t\t\t<div class=\"item-card2-img1\" data-toggle=\"modal\" data-target=\"#gallery\">
\t\t\t\t\t\t\t\t\t<span class=\"badge bg-dark-transparent6 text-white fs-14 font-weight-semibold2\"><i class=\"fe fe-image \"></i> 5</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item-card7-overlaytext\">
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0 py-2 fs-20\">\$145</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item-card9-icons\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card9-icons1 wishlist\"> <i class=\"fa fa fa-heart-o\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card border-0 mb-0 br-0\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"item-card9\">
\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"text-dark\"><h4 class=\"font-weight-semibold2 mt-1 mb-2 leading-normal\">New Residential Somik Hotel </h4></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-desc mt-1 mb-0 text-dark\"><i class=\"fe fe-map-pin mr-1 d-inline-block\"></i> Mp-214, New York, NY 10012</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"fs-14 mt-1 mb-2 leading-normal\">We denounce with righteous indignation and dislike men who are so beguiled and demoralized</p>

\t\t\t\t\t\t\t\t<div class=\"text-dark font-weight-normal mb-0 mt-4 hotel-features \">
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Get Directions\"><i class=\"fa fa-map-signs d-inline-block text-warning\"></i></a>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"5 Star Hotel\"><i class=\"fa fa-h-square d-inline-block text-secondary\"></i></a>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Free Wifi\"><i class=\"fa fa-wifi d-inline-block text-success\"></i></a>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Get Directions\"><i class=\"fa fa-map-signs d-inline-block text-warning\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>





\t\t</div>
\t</div>
</section>
<!--Section-->

<!--Section-->
<section class=\"cover-image bg-background-color\" data-image-src=\"../../assets/images/banners/banner.png\">
\t<div class=\"container\">
\t\t<div class=\"row content-text\">
\t\t\t<div class=\"col-xl-4 m-0\">
\t\t\t\t<div class=\"pl-6 pt-9 pr-0\">
\t\t\t\t\t<div class=\"section-title center-block text-left\">
\t\t\t\t\t\t<span class=\"heading-style text-white-80\">Nearby</span>
\t\t\t\t\t\t<h1 class=\"position-relative text-white leading-normal\"> Activities in your location</h1>
\t\t\t\t\t\t<p class=\"text-left text-white\">Mauris ut cursus nunc. Morbi att eleifend, ligula at consectetur vehicu, Mauris ut cursus nunc. Morbi eleifend, ligula vehicula</p>
\t\t\t\t\t\t<a class=\"btn btn-secondary mt-6\" href=\"#\">Search activities</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-8\">
\t\t\t\t<div class=\"py-6 px-4\">
\t\t\t\t\t<div id=\"myCarousel12\" class=\"owl-carousel owl-carousel-icons7\">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"card mb-0 overflow-hidden border-0\">
\t\t\t\t\t\t\t\t<div class=\"power-ribbon power-ribbon-top-left text-warning\"><span class=\"bg-warning\"><i class=\"fa fa-bolt\"></i></span></div>
\t\t\t\t\t\t\t\t<div class=\"item-card2-img\">
\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"absolute-link\"></a>
\t\t\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/f2.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-icons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-l\"><i class=\"fa fa-cutlery\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-r\"><i class=\"fa fa fa-heart-o\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-desc\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"text-dark\"><h4 class=\"mb-0 fs-20 font-weight-bold\">Somik Restaurant</h4></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-map-pin mr-2 d-inline-block\"></i>Florida, USA</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-phone mr-2 d-inline-block\"></i>+63 658-865-965</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-clock d-inline-block mr-2\"></i>10am - 9pm<a> <span class=\"badge badge-success ml-2 fs-13\">Open Now</span></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer-u\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-ratings start-ratings-main clearfix d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stars stars-example-fontawesome stars-example-fontawesome-sm mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"example-fontawesome\" name=\"rating\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" selected>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> (25 Reviews)
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 45</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"card mb-0 overflow-hidden border-0\">
\t\t\t\t\t\t\t\t<div class=\"power-ribbon power-ribbon-top-left text-warning\"><span class=\"bg-warning\"><i class=\"fa fa-bolt\"></i></span></div>
\t\t\t\t\t\t\t\t<div class=\"item-card2-img\">
\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"absolute-link\"></a>
\t\t\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h4.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-icons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-l\"><i class=\"fa fa-home\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-r\"><i class=\"fa fa fa-heart-o\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-desc\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"text-dark\"><h4 class=\"mb-0 fs-20 font-weight-bold\">GilkonStar Hotel</h4></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-map-pin mr-2 d-inline-block\"></i>Hollowstead, USA</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-phone mr-2 d-inline-block\"></i>+63 658-965-865</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-clock d-inline-block mr-2\"></i>9am - 9pm<a> <span class=\"badge badge-success ml-2 fs-13\">Open Now</span></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer \">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer-u\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-ratings start-ratings-main clearfix d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stars stars-example-fontawesome stars-example-fontawesome-sm mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"example-fontawesome\" name=\"rating\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" selected>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> (27 Reviews)
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 86</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"card mb-0 overflow-hidden border-0\">
\t\t\t\t\t\t\t\t<div class=\"item-card2-img\">
\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"absolute-link\"></a>
\t\t\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h5.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-icons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-l\"><i class=\"fa fa-home\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-r\"><i class=\"fa fa fa-heart-o\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-desc\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"text-dark\"><h4 class=\"mb-0 fs-20 font-weight-bold\">Hotel Xina</h4></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-map-pin mr-2 d-inline-block\"></i>Mannorstead, China</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-phone mr-2 d-inline-block\"></i>+63 965-865-956</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-clock d-inline-block mr-2\"></i>8am - 6pm<a> <span class=\"badge badge-danger ml-2 fs-13\">Closed</span></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer-u\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-ratings start-ratings-main clearfix d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stars stars-example-fontawesome stars-example-fontawesome-sm mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"example-fontawesome\" name=\"rating\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" selected>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> (75 Reviews)
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 76</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"card mb-0 overflow-hidden border-0\">
\t\t\t\t\t\t\t\t<div class=\"item-card2-img\">
\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"absolute-link\"></a>
\t\t\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h1.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-icons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-l\"><i class=\"fa fa-home\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-r\"><i class=\"fa fa fa-heart-o\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-desc\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"text-dark\"><h4 class=\"mb-0 fs-20 font-weight-bold\">Hotel Rome </h4></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-map-pin mr-2 d-inline-block\"></i>East Cafe, UK</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-phone mr-2 d-inline-block\"></i>+63 968-569-854</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-clock d-inline-block mr-2\"></i>9am - 7pm<a> <span class=\"badge badge-success ml-2 fs-13\">Open Now</span></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer-u\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-ratings start-ratings-main clearfix d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stars stars-example-fontawesome stars-example-fontawesome-sm mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"example-fontawesome\" name=\"rating\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" selected>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> (14 Reviews)
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 45</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"card mb-0 overflow-hidden border-0\">
\t\t\t\t\t\t\t\t<div class=\"power-ribbon power-ribbon-top-left text-warning\"><span class=\"bg-warning\"><i class=\"fa fa-bolt\"></i></span></div>
\t\t\t\t\t\t\t\t<div class=\"item-card2-img\">
\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"absolute-link\"></a>
\t\t\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/f1.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-icons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-l\"><i class=\"fa fa-cutlery\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-r\"><i class=\"fa fa fa-heart-o\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-desc\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"text-dark\"><h4 class=\"mb-0 fs-20 font-weight-bold\">Somik Restaurant</h4></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-map-pin mr-2 d-inline-block\"></i>Factdale, Canada</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-phone mr-2 d-inline-block\"></i>+63 854-968-854</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-clock d-inline-block mr-2\"></i>10am - 7pm<a> <span class=\"badge badge-danger ml-2 fs-13\">Closed</span></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer-u\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-ratings start-ratings-main clearfix d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stars stars-example-fontawesome stars-example-fontawesome-sm mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"example-fontawesome\" name=\"rating\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" selected>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> (42 Reviews)
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 65</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--Section-->



<!--Section-->
<section class=\"sptb bg-white\">
\t<div class=\"container\">
\t\t<div class=\"section-title center-block text-center\">
\t\t\t<span class=\"heading-style text-secondary\">Why</span>
\t\t\t<h2>Choose Us</h2>
\t\t\t<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
\t\t</div>
\t\t<div class=\"item-all-cat center-block text-center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-md-12\">
\t\t\t\t\t<div class=\"status-border mb-4 mb-lg-0 p-5 pt-5 card\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"status-info text-center\">
\t\t\t\t\t\t\t\t<div class=\"cat-img category-svg d-block bg-primary-transparent\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-thumbs-o-up fs-30 text-primary icon-lineheight\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h4 class=\"mt-5 mb-2 fs-20 font-weight-semibold2\">Best Quality Services</h4>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-12\">
\t\t\t\t\t<div class=\"status-border mb-4 mb-lg-0 p-5 pt-5 card\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"status-info text-center\">
\t\t\t\t\t\t\t\t<div class=\"cat-img category-svg d-block bg-success-transparent\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shield fs-30 text-success icon-lineheight\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h4 class=\"mt-5 mb-2 fs-20 font-weight-semibold2\">Travellers Security</h4>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-12\">
\t\t\t\t\t<div class=\"status-border p-5 pt-5 card mb-0\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"status-info text-center\">
\t\t\t\t\t\t\t\t<div class=\"cat-img category-svg d-block  bg-warning-transparent\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-headphones fs-30 text-warning icon-lineheight\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h4 class=\"mt-5 mb-2 fs-20 font-weight-semibold2\">24/7 Support</h4>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--Section-->

<!--Section-->
<section class=\"sptb\">
\t<div class=\"container\">
\t\t<div class=\"section-title center-block text-center\">
\t\t\t<span class=\"heading-style text-secondary\">Our</span>
\t\t\t<h2>Video Testimonials</h2>
\t\t\t<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12\">
\t\t\t\t<div class=\"card overflow-hidden\">
\t\t\t\t\t<div class=\"item7-card-img\">
\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h1.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t\t<a class=\"d-block video-btn1 mx-auto\" href=\"#\" data-toggle=\"modal\" data-target=\"#homeVideo\"><span class=\"fa fa-play text-white\"></span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<small class=\"text-muted\">Posted By: Royal Hamblin</small>
\t\t\t\t\t\t<a href=\"blog-details.html\" class=\"text-dark leading-normal\"><h4 class=\"font-weight-semibold2 mt-2 leading-normal\">Found Beautiful Places</h4></a>
\t\t\t\t\t\t<p>On the other hand, we denounce with righteous indignation and dislike </p>
\t\t\t\t\t\t<a class=\"btn-link\" href=\"blog-list.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12\">
\t\t\t\t<div class=\"card mb-md-0 overflow-hidden\">
\t\t\t\t\t<div class=\"item7-card-img\">
\t\t\t\t\t\t<a class=\"d-block video-btn1 mx-auto\" href=\"#\" data-toggle=\"modal\" data-target=\"#homeVideo\"><span class=\"fa fa-play text-white\"></span></a>
\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h2.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<small class=\"text-muted\">Posted By: Rosita Chatmon</small>
\t\t\t\t\t\t<a href=\"blog-details.html\" class=\"text-dark leading-normal\"><h4 class=\"font-weight-semibold2 mt-2 leading-normal\">Great Adventure Trip</h4></a>
\t\t\t\t\t\t<p>On the other hand, we denounce with righteous indignation and dislike </p>
\t\t\t\t\t\t<a class=\"btn-link\" href=\"blog-list.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12\">
\t\t\t\t<div class=\"card mb-0 overflow-hidden\">
\t\t\t\t\t<div class=\"item7-card-img\">
\t\t\t\t\t\t<a class=\"d-block video-btn1 mx-auto\" href=\"#\" data-toggle=\"modal\" data-target=\"#homeVideo\"><span class=\"fa fa-play text-white\"></span></a>
\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h4.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<small class=\"text-muted\">Posted By: Loyd Nolf</small>
\t\t\t\t\t\t<a href=\"blog-details.html\" class=\"text-dark leading-normal\"><h4 class=\"font-weight-semibold2 mt-2 leading-normal\">Special Places</h4></a>
\t\t\t\t\t\t<p>On the other hand, we denounce with righteous indignation and dislike </p>
\t\t\t\t\t\t<a class=\"btn-link\" href=\"blog-list.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--Section-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  757 => 216,  747 => 215,  722 => 196,  712 => 195,  693 => 15,  278 => 695,  276 => 215,  271 => 212,  269 => 195,  255 => 184,  206 => 138,  98 => 33,  92 => 30,  86 => 27,  80 => 24,  74 => 21,  68 => 18,  64 => 16,  62 => 15,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\" dir=\"ltr\">
<head>
\t<!-- META DATA -->
\t<meta charset=\"UTF-8\">
\t<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"description\" content=\"Gowell - Travel HTML Listing Template\">
\t<meta name=\"author\" content=\"Spruko™ Technologies Private Limited\">
\t<meta name=\"keywords\" content=\"travel html template,html code for travel and tourism website,travel agency website templates,template hotel booking,travel web template,trip travel,themeforest html templates,travel website templates,travel template,travel itinerary template,travel booking template,travel agency website templates html5,travel website templates bootstrap,tourism website templates html,travel agency html template,travel theme html,html travel website templates,travel html theme,travel website templates html,template html travel,tour operator website templates\">
\t<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\"/>
\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"favicon.ico\" />

\t<!-- Title -->
\t{% block title%}<title>activities</title> {% endblock %}

\t<!-- Bootstrap Css -->
\t<link href=\"{{ asset('../assets/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />

\t<!-- Style Css -->
\t<link href=\"{{ asset('../assets/css/style.css') }}\" rel=\"stylesheet\" />

\t<!-- Icons Css -->
\t<link href=\"{{ asset('../assets/css/icons.css') }}\" rel=\"stylesheet\"/>

\t<!-- Jquery-bar-rating css-->
\t<link rel=\"stylesheet\" href=\"{{ asset('../assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css') }}\">

\t<!-- Auto Complete css -->
\t<link href=\"{{ asset('../assets/plugins/autocomplete/jquery.autocomplete.css') }}\" rel=\"stylesheet\">

\t<!-- Color-Skins -->
\t<link id=\"theme\" href=\"{{ asset('../assets/color-skins/color.css') }}\"  rel=\"stylesheet\"/>

</head>
<body>

<!--Loader-->
<div id=\"global-loader\" class=\"bg-primary\">
\t<div class=\"loader-svg-img\">
\t\t<img src=\"../../assets/images/brand/2.png\" class=\"\" alt=\"\">
\t\t<div class=\"flight-icon\"><i class=\"fa fa-plane\"></i></div>
\t</div>
</div>
<!--/Loader-->

<!--Horizontal Section-->

<div class=\"header-main header-style03\">
\t<div class=\"top-bar app-header-background app-header-background2\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-8 col-lg-8 col-sm-4 col-7\">
\t\t\t\t\t<div class=\"top-bar-left d-flex\">
\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t<ul class=\"socials\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"social-icon text-white\" href=\"#\"><i class=\"fa fa-facebook text-white\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"social-icon text-white\" href=\"#\"><i class=\"fa fa-twitter text-white\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"social-icon text-white\" href=\"#\"><i class=\"fa fa-linkedin text-white\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"social-icon text-white\" href=\"#\"><i class=\"fa fa-google-plus text-white\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-sm-8 col-5\">
\t\t\t\t\t<div class=\"top-bar-right\">
\t\t\t\t\t\t<ul class=\"custom\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"register.html\" class=\"text-white\"><i class=\"fa fa-user mr-1 text-white\"></i> <span>Register</span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"login.html\" class=\"text-white\"><i class=\"fa fa-sign-in mr-1 text-white\"></i> <span>Login</span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-white\" data-toggle=\"dropdown\"><i class=\"fa fa-home mr-1 text-white\"></i><span> My Dashboard</span><i class=\"fa fa-angle-down ml-1 header-dropdown-icon\"></i></a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t<a href=\"mydash.html\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dropdown-icon icon icon-user\"></i> My Profile
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dropdown-icon icon icon-speech\"></i> Inbox
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dropdown-icon icon icon-bell\"></i> Notifications
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"mydash.html\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dropdown-icon  icon icon-settings\"></i> Account Settings
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"login.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"dropdown-icon icon icon-power\"></i> Log out
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Mobile Header -->

\t<!-- /Mobile Header -->

\t<div class=\"horizontal-main  bg-dark-transparent clearfix py-lg-3\">
\t\t<div class=\"horizontal-mainwrapper container clearfix\">
\t\t\t<div class=\"desktoplogo\">
\t\t\t\t<a href=\"index.html\"><img src=\"../../assets/images/brand/logo.png\" alt=\"\"></a>
\t\t\t</div>
\t\t\t<div class=\"desktoplogo-1\">
\t\t\t\t<a href=\"index.html\"><img src=\"../../assets/images/brand/logo.png\" alt=\"\"></a>
\t\t\t</div>
\t\t\t<!--Nav-->
\t\t\t<nav class=\"horizontalMenu clearfix d-md-flex\">
\t\t\t\t<ul class=\"horizontalMenu-list\">

\t\t\t\t\t<li><a href=\"index.html\">Home </a>

\t\t\t\t\t</li>





\t\t\t\t\t<li><a href=\"#\">Categories <span class=\"fa fa-caret-down m-0\"></span></a>
\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t<li><a href=\"index-food.html\">Food Advisor <span class=\"fa fa-caret-down m-0\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('repas_index') }}\">Food Advisor List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index-food.html\">Food Advisor main page</a></li>

\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<li><a href=\"index-hotel.html\">Guest Houses
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-caret-down m-0\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-list.html\">Guest houses List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index-hotel.html\">Guest houses main page</a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<li><a href=\"index-event.html\">Events <span class=\"fa fa-caret-down m-0\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"event-list.html\">Events List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index-event.html\">Events main page</a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<li><a href=\"index-activities.html\">Activities <span class=\"fa fa-caret-down m-0\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"activities-list.html\">Activities List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index-activities.html\">Activities main page</a></li>

\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<li><a href=\"index-packagesa.html\">Packages <span class=\"fa fa-caret-down m-0\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"packages-list.html\">Packages List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index-packages.html\">Packages main page</a></li>

\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>




\t\t\t\t\t<li><a href=\"#\">About Us </a></li>
\t\t\t\t\t<li> <a href=\"shop.html\">Shop</a></li>



\t\t\t\t\t<li><a href=\"#\">Blog </a>

\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"{{ path('reclamation_new') }}\"> Contact Us</a></li>

\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!--Nav-->
\t\t</div>

\t</div>
</div>

<!--Section-->
{% block banner %}
<div class=\"cover-image sptb py-9 bg-background\" data-image-src=\"../../assets/images/banners/banner16.jpg\">
\t<div class=\"header-text1 mb-0\">
\t\t<div class=\"container\">
\t\t\t<div class=\"text-center text-white mb-4\">
\t\t\t\t<a href=\"\" class=\"typewrite font-weight-bold\" data-period=\"2000\" data-type='[\"Find Activities now\"]'>
\t\t\t\t\t<span class=\"wrap\"></span>
\t\t\t\t</a>
\t\t\t\t<p> Your Activities Look-out </p>

\t\t\t</div>

\t\t</div>
\t</div>
\t<!-- /header-text -->
</div>
{% endblock %}
<!--Section-->

<!--Section-->
{% block body %}
<section class=\"sptb\">
\t<div class=\"container\">
\t\t<div class=\"section-title center-block text-center\">
\t\t\t<span class=\"heading-style text-secondary\">Currently happening</span>
\t\t\t<h1>Activities</h1>
\t\t\t<p>Find and book activities for the coming days </p>
\t\t</div>
\t\t<div class=\"row\">



\t\t\t<div class=\"col-md-6 col-sm-12 col-lg-4\">
\t\t\t\t<div class=\"item-card item-card2 overflow-hidden card\">
\t\t\t\t\t<div class=\"special-offer2 bg-secondary\">
\t\t\t\t\t\t<div class=\"percentage\">45%</div>
\t\t\t\t\t\t<div class=\"percentage-off\"><span>SPECIAL</span> OFF</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item-card-desc ieh-100\">
\t\t\t\t\t\t<a href=\"single-activity.html\"></a>
\t\t\t\t\t\t<div class=\"text-center overflow-hidden mb-lg-0\">
\t\t\t\t\t\t\t<div class=\"card-img br-bl-0 br-br-0\">
\t\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h2.jpg\" alt=\"img\" class=\"cover-image br-bl-0 br-br-0\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item-card-text text-left\">

\t\t\t\t\t\t\t\t<h4 class=\"mb-0 font-weight-bold\">activity 1</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>



\t\t</div>
\t</div>
</section>
<!--Section-->

<!--Section-->
<section class=\"sptb bg-white\">
\t<div class=\"container\">
\t\t<div class=\"section-title center-block text-center\">
\t\t\t<span class=\"heading-style text-secondary\">Popular</span>
\t\t\t<h2>Recomended Activities</h2>
\t\t\t<p>A select few of our most attractive activities</p>
\t\t</div>
\t\t<div class=\"owl-carousel owl-carousel-icons\">
\t\t\t<div class=\"item\">
\t\t\t\t<div class=\"card overflow-hidden\">
\t\t\t\t\t<div class=\"ieh-100\">
\t\t\t\t\t\t<div class=\"item-card9-img w-100\">
\t\t\t\t\t\t\t<div class=\"item-card9-imgs\">
\t\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h1.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t\t\t\t<div class=\"item-card2-img1\" data-toggle=\"modal\" data-target=\"#gallery\">
\t\t\t\t\t\t\t\t\t<span class=\"badge bg-dark-transparent6 text-white fs-14 font-weight-semibold2\"><i class=\"fe fe-image \"></i> 5</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item-card7-overlaytext\">
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0 py-2 fs-20\">\$145</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item-card9-icons\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card9-icons1 wishlist\"> <i class=\"fa fa fa-heart-o\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card border-0 mb-0 br-0\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"item-card9\">
\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"text-dark\"><h4 class=\"font-weight-semibold2 mt-1 mb-2 leading-normal\">New Residential Somik Hotel </h4></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-desc mt-1 mb-0 text-dark\"><i class=\"fe fe-map-pin mr-1 d-inline-block\"></i> Mp-214, New York, NY 10012</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"fs-14 mt-1 mb-2 leading-normal\">We denounce with righteous indignation and dislike men who are so beguiled and demoralized</p>

\t\t\t\t\t\t\t\t<div class=\"text-dark font-weight-normal mb-0 mt-4 hotel-features \">
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Get Directions\"><i class=\"fa fa-map-signs d-inline-block text-warning\"></i></a>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"5 Star Hotel\"><i class=\"fa fa-h-square d-inline-block text-secondary\"></i></a>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Free Wifi\"><i class=\"fa fa-wifi d-inline-block text-success\"></i></a>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Get Directions\"><i class=\"fa fa-map-signs d-inline-block text-warning\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>





\t\t</div>
\t</div>
</section>
<!--Section-->

<!--Section-->
<section class=\"cover-image bg-background-color\" data-image-src=\"../../assets/images/banners/banner.png\">
\t<div class=\"container\">
\t\t<div class=\"row content-text\">
\t\t\t<div class=\"col-xl-4 m-0\">
\t\t\t\t<div class=\"pl-6 pt-9 pr-0\">
\t\t\t\t\t<div class=\"section-title center-block text-left\">
\t\t\t\t\t\t<span class=\"heading-style text-white-80\">Nearby</span>
\t\t\t\t\t\t<h1 class=\"position-relative text-white leading-normal\"> Activities in your location</h1>
\t\t\t\t\t\t<p class=\"text-left text-white\">Mauris ut cursus nunc. Morbi att eleifend, ligula at consectetur vehicu, Mauris ut cursus nunc. Morbi eleifend, ligula vehicula</p>
\t\t\t\t\t\t<a class=\"btn btn-secondary mt-6\" href=\"#\">Search activities</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-8\">
\t\t\t\t<div class=\"py-6 px-4\">
\t\t\t\t\t<div id=\"myCarousel12\" class=\"owl-carousel owl-carousel-icons7\">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"card mb-0 overflow-hidden border-0\">
\t\t\t\t\t\t\t\t<div class=\"power-ribbon power-ribbon-top-left text-warning\"><span class=\"bg-warning\"><i class=\"fa fa-bolt\"></i></span></div>
\t\t\t\t\t\t\t\t<div class=\"item-card2-img\">
\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"absolute-link\"></a>
\t\t\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/f2.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-icons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-l\"><i class=\"fa fa-cutlery\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-r\"><i class=\"fa fa fa-heart-o\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-desc\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"text-dark\"><h4 class=\"mb-0 fs-20 font-weight-bold\">Somik Restaurant</h4></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-map-pin mr-2 d-inline-block\"></i>Florida, USA</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-phone mr-2 d-inline-block\"></i>+63 658-865-965</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-clock d-inline-block mr-2\"></i>10am - 9pm<a> <span class=\"badge badge-success ml-2 fs-13\">Open Now</span></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer-u\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-ratings start-ratings-main clearfix d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stars stars-example-fontawesome stars-example-fontawesome-sm mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"example-fontawesome\" name=\"rating\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" selected>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> (25 Reviews)
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 45</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"card mb-0 overflow-hidden border-0\">
\t\t\t\t\t\t\t\t<div class=\"power-ribbon power-ribbon-top-left text-warning\"><span class=\"bg-warning\"><i class=\"fa fa-bolt\"></i></span></div>
\t\t\t\t\t\t\t\t<div class=\"item-card2-img\">
\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"absolute-link\"></a>
\t\t\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h4.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-icons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-l\"><i class=\"fa fa-home\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-r\"><i class=\"fa fa fa-heart-o\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-desc\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"text-dark\"><h4 class=\"mb-0 fs-20 font-weight-bold\">GilkonStar Hotel</h4></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-map-pin mr-2 d-inline-block\"></i>Hollowstead, USA</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-phone mr-2 d-inline-block\"></i>+63 658-965-865</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-clock d-inline-block mr-2\"></i>9am - 9pm<a> <span class=\"badge badge-success ml-2 fs-13\">Open Now</span></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer \">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer-u\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-ratings start-ratings-main clearfix d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stars stars-example-fontawesome stars-example-fontawesome-sm mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"example-fontawesome\" name=\"rating\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" selected>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> (27 Reviews)
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 86</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"card mb-0 overflow-hidden border-0\">
\t\t\t\t\t\t\t\t<div class=\"item-card2-img\">
\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"absolute-link\"></a>
\t\t\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h5.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-icons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-l\"><i class=\"fa fa-home\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-r\"><i class=\"fa fa fa-heart-o\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-desc\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"text-dark\"><h4 class=\"mb-0 fs-20 font-weight-bold\">Hotel Xina</h4></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-map-pin mr-2 d-inline-block\"></i>Mannorstead, China</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-phone mr-2 d-inline-block\"></i>+63 965-865-956</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-clock d-inline-block mr-2\"></i>8am - 6pm<a> <span class=\"badge badge-danger ml-2 fs-13\">Closed</span></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer-u\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-ratings start-ratings-main clearfix d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stars stars-example-fontawesome stars-example-fontawesome-sm mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"example-fontawesome\" name=\"rating\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" selected>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> (75 Reviews)
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 76</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"card mb-0 overflow-hidden border-0\">
\t\t\t\t\t\t\t\t<div class=\"item-card2-img\">
\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"absolute-link\"></a>
\t\t\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h1.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-icons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-l\"><i class=\"fa fa-home\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-r\"><i class=\"fa fa fa-heart-o\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-desc\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"text-dark\"><h4 class=\"mb-0 fs-20 font-weight-bold\">Hotel Rome </h4></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-map-pin mr-2 d-inline-block\"></i>East Cafe, UK</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-phone mr-2 d-inline-block\"></i>+63 968-569-854</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-clock d-inline-block mr-2\"></i>9am - 7pm<a> <span class=\"badge badge-success ml-2 fs-13\">Open Now</span></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer-u\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-ratings start-ratings-main clearfix d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stars stars-example-fontawesome stars-example-fontawesome-sm mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"example-fontawesome\" name=\"rating\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" selected>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> (14 Reviews)
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 45</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"card mb-0 overflow-hidden border-0\">
\t\t\t\t\t\t\t\t<div class=\"power-ribbon power-ribbon-top-left text-warning\"><span class=\"bg-warning\"><i class=\"fa fa-bolt\"></i></span></div>
\t\t\t\t\t\t\t\t<div class=\"item-card2-img\">
\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"absolute-link\"></a>
\t\t\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/f1.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-icons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-l\"><i class=\"fa fa-cutlery\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-card2-icons-r\"><i class=\"fa fa fa-heart-o\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-desc\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"single-activity.html\" class=\"text-dark\"><h4 class=\"mb-0 fs-20 font-weight-bold\">Somik Restaurant</h4></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-map-pin mr-2 d-inline-block\"></i>Factdale, Canada</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"mb-1\" href=\"#\"><div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-phone mr-2 d-inline-block\"></i>+63 854-968-854</div></a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pb-0 pt-0 mb-2 mt-2\"><i class=\"fe fe-clock d-inline-block mr-2\"></i>10am - 7pm<a> <span class=\"badge badge-danger ml-2 fs-13\">Closed</span></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-card2-footer-u\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-ratings start-ratings-main clearfix d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stars stars-example-fontawesome stars-example-fontawesome-sm mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"example-fontawesome\" name=\"rating\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" selected>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> (42 Reviews)
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 65</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--Section-->



<!--Section-->
<section class=\"sptb bg-white\">
\t<div class=\"container\">
\t\t<div class=\"section-title center-block text-center\">
\t\t\t<span class=\"heading-style text-secondary\">Why</span>
\t\t\t<h2>Choose Us</h2>
\t\t\t<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
\t\t</div>
\t\t<div class=\"item-all-cat center-block text-center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-md-12\">
\t\t\t\t\t<div class=\"status-border mb-4 mb-lg-0 p-5 pt-5 card\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"status-info text-center\">
\t\t\t\t\t\t\t\t<div class=\"cat-img category-svg d-block bg-primary-transparent\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-thumbs-o-up fs-30 text-primary icon-lineheight\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h4 class=\"mt-5 mb-2 fs-20 font-weight-semibold2\">Best Quality Services</h4>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-12\">
\t\t\t\t\t<div class=\"status-border mb-4 mb-lg-0 p-5 pt-5 card\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"status-info text-center\">
\t\t\t\t\t\t\t\t<div class=\"cat-img category-svg d-block bg-success-transparent\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shield fs-30 text-success icon-lineheight\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h4 class=\"mt-5 mb-2 fs-20 font-weight-semibold2\">Travellers Security</h4>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-12\">
\t\t\t\t\t<div class=\"status-border p-5 pt-5 card mb-0\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"status-info text-center\">
\t\t\t\t\t\t\t\t<div class=\"cat-img category-svg d-block  bg-warning-transparent\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-headphones fs-30 text-warning icon-lineheight\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h4 class=\"mt-5 mb-2 fs-20 font-weight-semibold2\">24/7 Support</h4>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--Section-->

<!--Section-->
<section class=\"sptb\">
\t<div class=\"container\">
\t\t<div class=\"section-title center-block text-center\">
\t\t\t<span class=\"heading-style text-secondary\">Our</span>
\t\t\t<h2>Video Testimonials</h2>
\t\t\t<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12\">
\t\t\t\t<div class=\"card overflow-hidden\">
\t\t\t\t\t<div class=\"item7-card-img\">
\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h1.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t\t<a class=\"d-block video-btn1 mx-auto\" href=\"#\" data-toggle=\"modal\" data-target=\"#homeVideo\"><span class=\"fa fa-play text-white\"></span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<small class=\"text-muted\">Posted By: Royal Hamblin</small>
\t\t\t\t\t\t<a href=\"blog-details.html\" class=\"text-dark leading-normal\"><h4 class=\"font-weight-semibold2 mt-2 leading-normal\">Found Beautiful Places</h4></a>
\t\t\t\t\t\t<p>On the other hand, we denounce with righteous indignation and dislike </p>
\t\t\t\t\t\t<a class=\"btn-link\" href=\"blog-list.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12\">
\t\t\t\t<div class=\"card mb-md-0 overflow-hidden\">
\t\t\t\t\t<div class=\"item7-card-img\">
\t\t\t\t\t\t<a class=\"d-block video-btn1 mx-auto\" href=\"#\" data-toggle=\"modal\" data-target=\"#homeVideo\"><span class=\"fa fa-play text-white\"></span></a>
\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h2.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<small class=\"text-muted\">Posted By: Rosita Chatmon</small>
\t\t\t\t\t\t<a href=\"blog-details.html\" class=\"text-dark leading-normal\"><h4 class=\"font-weight-semibold2 mt-2 leading-normal\">Great Adventure Trip</h4></a>
\t\t\t\t\t\t<p>On the other hand, we denounce with righteous indignation and dislike </p>
\t\t\t\t\t\t<a class=\"btn-link\" href=\"blog-list.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12\">
\t\t\t\t<div class=\"card mb-0 overflow-hidden\">
\t\t\t\t\t<div class=\"item7-card-img\">
\t\t\t\t\t\t<a class=\"d-block video-btn1 mx-auto\" href=\"#\" data-toggle=\"modal\" data-target=\"#homeVideo\"><span class=\"fa fa-play text-white\"></span></a>
\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h4.jpg\" alt=\"img\" class=\"cover-image\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<small class=\"text-muted\">Posted By: Loyd Nolf</small>
\t\t\t\t\t\t<a href=\"blog-details.html\" class=\"text-dark leading-normal\"><h4 class=\"font-weight-semibold2 mt-2 leading-normal\">Special Places</h4></a>
\t\t\t\t\t\t<p>On the other hand, we denounce with righteous indignation and dislike </p>
\t\t\t\t\t\t<a class=\"btn-link\" href=\"blog-list.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--Section-->
{% endblock %}

<!--Section-->
<section class=\"cover-image sptb bg-background-color\" data-image-src=\"../../assets/images/banners/banner10.jpg\">
\t<div class=\"content-text mb-0\">
\t\t<div class=\"content-text mb-0\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"text-center text-white \">
\t\t\t\t\t<span class=\"heading-style text-white-80\">Subscribe</span>
\t\t\t\t\t<h2 class=\"mb-2 font-weight-bold fs-40\">Our Newsletter</h2>
\t\t\t\t\t<p class=\"fs-16 mb-0\">Subscribe to Newsletter to get a notification. We promise not to spam!</p>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-7 mx-auto d-block\">
\t\t\t\t\t\t\t<div class=\"mt-5\">
\t\t\t\t\t\t\t\t<div class=\"input-group sub-input mt-1\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-lg \" placeholder=\"Enter your Email\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append \">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary btn-lg br-tr-3 br-br-3 pl-5 pr-5 font-weight-semibold2\">
\t\t\t\t\t\t\t\t\t\t\tSubscribe
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--Section-->

<!--Section-->
<section class=\"sptb\">
\t<div class=\"container\">
\t\t<div class=\"section-title center-block text-center\">
\t\t\t<span class=\"heading-style text-secondary\">New</span>
\t\t\t<h2>Blog News</h2>
\t\t\t<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"card cover-image blog-style overflow-hidden\">
\t\t\t\t\t<a class=\"absolute-link2\" href=\"blog-details.html\"></a>
\t\t\t\t\t<div class=\"card-body content-text p-5\">
\t\t\t\t\t\t<div class=\"relative\">
\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h1.jpg\" alt=\"\" class=\"br-7 mb-3 w-100\">
\t\t\t\t\t\t\t<div class=\"item-card7-overlaytext\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-0 br-tl-5 br-br-5 br-bl-0 fs-14\">03 Dec 2020</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3 mt-3\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"mr-0 ml-0 btn-link\"><span class=\"text-default\">By</span> Lilly Wisely</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"pl-4 ml-4 border-left\"> 4 comments</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-1 fs-18 leading-normal font-weight-semibold2\">Recomended Hotel</h4>
\t\t\t\t\t\t<p class=\"\">Quod eos id officiis hic tenetur quae quaerat ad velit and Lorem ipsum dolor sit amet,</p>
\t\t\t\t\t\t<a class=\"btn-link\" href=\"blog-list.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"card cover-image blog-style overflow-hidden\">
\t\t\t\t\t<a class=\"absolute-link2\" href=\"blog-details.html\"></a>
\t\t\t\t\t<div class=\"card-body content-text p-5\">
\t\t\t\t\t\t<div class=\"relative\">
\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h2.jpg\" alt=\"\" class=\"br-7 mb-3 w-100\">
\t\t\t\t\t\t\t<div class=\"item-card7-overlaytext\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-0 br-tl-5 br-br-5 br-bl-0 fs-14\">2 Jun 2020</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3 mt-3\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"mr-0 ml-0 btn-link\"><span class=\"text-default\">By</span> Lilly Wiliams</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"pl-4 ml-4 border-left\"> 5 comments</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-1 fs-18 leading-normal font-weight-semibold2\">Best Rooms</h4>
\t\t\t\t\t\t<p class=\"\">Quod eos id officiis hic tenetur quae quaerat ad velit and Lorem ipsum dolor sit amet,</p>
\t\t\t\t\t\t<a class=\"btn-link\" href=\"blog-list.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"card cover-image blog-style overflow-hidden\">
\t\t\t\t\t<a class=\"absolute-link2\" href=\"blog-details.html\"></a>
\t\t\t\t\t<div class=\"card-body content-text p-5\">
\t\t\t\t\t\t<div class=\"relative\">
\t\t\t\t\t\t\t<img src=\"../../assets/images/products/products/h3.jpg\" alt=\"\" class=\"br-7 mb-3 w-100\">
\t\t\t\t\t\t\t<div class=\"item-card7-overlaytext\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-0 br-tl-5 br-br-5 br-bl-0 fs-14\">14 Jul 2020</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3 mt-3\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"mr-0 ml-0 btn-link\"><span class=\"text-default\">By</span> John Smith</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"pl-4 ml-4 border-left\"> 5 comments</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-1 fs-18 leading-normal font-weight-semibold2\">Best Service at Hotel</h4>
\t\t\t\t\t\t<p class=\"\">Quod eos id officiis hic tenetur quae quaerat ad velit and Lorem ipsum dolor sit amet,</p>
\t\t\t\t\t\t<a class=\"btn-link\" href=\"blog-list.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--Section-->

<!--Section-->

<!--/Section-->

<!--Footer Section-->
<section>
\t<footer class=\"bg-dark-purple text-white\">
\t\t<div class=\"footer-main border-bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-3 col-lg-6 col-md-12\">
\t\t\t\t\t\t<h6>Get In Touch</h6>
\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-home mr-3 text-secondary\"></i> New York, Weq Street, NY 10012, US</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-envelope mr-3 text-secondary fs-12\"></i> info12323@example.com</a></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-phone mr-3 text-secondary\"></i> + 01 234 567 88</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-print mr-3 text-secondary\"></i> + 01 234 567 89</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3 col-lg-6 col-md-12\">
\t\t\t\t\t\t<h6>Popular Tour Places</h6>
\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Canada Navy City </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Watican Flower Park in Paris</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Great Paris Effil Tower</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Histrorical London Stone Bridegs</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-2 col-lg-6 col-md-12\">
\t\t\t\t\t\t<h6 class=\"\">Latest Tours</h6>
\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Best Tours In World</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Paris Great Tour</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Top Adventure Tour</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-angle-double-right mr-2 text-secondary\"></i> Top Histrorical Tour</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-4 col-lg-6 col-md-12\">
\t\t\t\t\t\t<div class=\"form-group d-flex mb-0\">
\t\t\t\t\t\t\t<div class=\"mr-4 w-180\">
\t\t\t\t\t\t\t\t<select class=\"form-control select2\" data-placeholder=\"Select Country\">
\t\t\t\t\t\t\t\t\t<option value=\"en\">English</option>
\t\t\t\t\t\t\t\t\t<option value=\"en\">Arabic</option>
\t\t\t\t\t\t\t\t\t<option value=\"en\">German</option>
\t\t\t\t\t\t\t\t\t<option value=\"en\">Greek</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mr-4 w-180\">
\t\t\t\t\t\t\t\t<select class=\"form-control select2\" data-placeholder=\"Select Country\">
\t\t\t\t\t\t\t\t\t<option value=\"en\">USD</option>
\t\t\t\t\t\t\t\t\t<option value=\"en\">EUR</option>
\t\t\t\t\t\t\t\t\t<option value=\"en\">INR</option>
\t\t\t\t\t\t\t\t\t<option value=\"en\">GBP</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h6 class=\"mb-2 mt-5\">Payments</h6>
\t\t\t\t\t\t<ul class=\"payments mb-0\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-amex\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-visa\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-credit-card-alt\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-mastercard\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-paypal\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-cc-discover\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"payments-icon\"><i class=\"fa fa-google-wallet\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"bg-dark-purple text-white p-0 border-bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"p-2 text-center footer-links\">
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">How It Works</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">About Us</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">Pricing</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">Listing Categories</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">Privacy Policy</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">Terms Of Conditions</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">Blog</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">Contact Us</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">Premium Ad</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"bg-dark-purple text-white-50 p-3\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex\">
\t\t\t\t\t<div class=\"col-lg-12 col-sm-12  mt-2 mb-2 text-center \">
\t\t\t\t\t\tCopyright © 2020 <a href=\"#\" class=\"fs-14 text-secondary\">Gowell</a>. Designed by <a href=\"spruko.com\" class=\"fs-14 text-secondary\">Spruko</a> All rights reserved.
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-12 col-sm-12 text-center mb-2 mt-2\">
\t\t\t\t\t\t<ul class=\"social-icons mb-0\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"social-icon\" href=\"\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"social-icon\" href=\"\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"social-icon\" href=\"\"><i class=\"fa fa-rss\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"social-icon\" href=\"\"><i class=\"fa fa-youtube\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"social-icon\" href=\"\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"social-icon\" href=\"\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
</section>
<!--Footer Section-->

<!--  Modal Popup -->
<div class=\"modal fade\" id=\"gallery\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"product-slider modal-body p-2\">
\t\t\t\t<div id=\"carousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<a class=\"gallery-close-button\" href=\"#\" data-dismiss=\"modal\" aria-label=\"Close\"><i class=\"fe fe-x\"></i></a>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\"><img src=\"../../assets/images/places/1.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/2.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/3.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/4.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/5.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/1.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/2.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/3.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/4.jpg\" alt=\"img\"> </div>
\t\t\t\t\t\t<div class=\"carousel-item\"><img src=\"../../assets/images/places/5.jpg\" alt=\"img\"> </div>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<div id=\"thumbcarousel\" class=\"carousel slide product-slide-thumb\" data-interval=\"false\">
\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"0\" class=\"thumb\"><img src=\"../../assets/images/places/1.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"1\" class=\"thumb\"><img src=\"../../assets/images/places/2.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"2\" class=\"thumb\"><img src=\"../../assets/images/places/3.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"3\" class=\"thumb\"><img src=\"../../assets/images/places/4.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"4\" class=\"thumb\"><img src=\"../../assets/images/places/5.jpg\" alt=\"img\"></div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-item \">
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"0\" class=\"thumb\"><img src=\"../../assets/images/places/1.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"1\" class=\"thumb\"><img src=\"../../assets/images/places/2.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"2\" class=\"thumb\"><img src=\"../../assets/images/places/3.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"3\" class=\"thumb\"><img src=\"../../assets/images/places/4.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t\t<div data-target=\"#carousel\" data-slide-to=\"4\" class=\"thumb\"><img src=\"../../assets/images/places/5.jpg\" alt=\"img\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#thumbcarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#thumbcarousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!--  Modal Popup -->
<div class=\"modal fade\" id=\"homeVideo\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog  modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" onclick=\"pauseVid()\"><i class=\"fe fe-x\"></i></button>
\t\t\t<!--<iframe width=\"560\" height=\"400\" src=\"https://www.youtube.com/embed/kFjETSa9N7A\"  allow=\"accelerometer; autoplay;\" allowfullscreen></iframe>-->
\t\t\t<div class=\"embed-responsive embed-responsive-16by9\">
\t\t\t\t<video id=\"gossVideo\" class=\"embed-responsive-item\" controls=\"controls\">
\t\t\t\t\t<source src=\"../../assets/video/1.mp4\" type=\"video/mp4\">
\t\t\t\t</video>
\t\t\t</div>
\t\t</div>
\t</div>
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

<!--Internal :::  Counters -->
<script src=\"../../assets/plugins/counters/counterup.min.js\"></script>
<script src=\"../../assets/plugins/counters/waypoints.min.js\"></script>
<script src=\"../../assets/plugins/counters/numeric-counter.js\"></script>

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

<!-- Internal :::   Ion.RangeSlider -->
<script src=\"../../assets/plugins/jquery-uislider/jquery-ui.js\"></script>
<script src=\"../../assets/js/price-range.js\"></script>

<!-- Cookie js -->
<script src=\"../../assets/plugins/cookie/jquery.ihavecookies.js\"></script>
<script src=\"../../assets/plugins/cookie/cookie.js\"></script>

<!--Auto Complete js -->
<script src=\"../../assets/plugins/autocomplete/jquery.autocomplete.js\"></script>
<script src=\"../../assets/plugins/autocomplete/autocomplete.js\"></script>

<!-- Internal :::   Moment js-->
<script src=\"../../assets/plugins/moment/moment.js\"></script>

<!--Internal :::   Showmore Js-->
<script src=\"../../assets/js/jquery.showmore.js\"></script>
<script src=\"../../assets/js/showmore.js\"></script>

<!-- Internal :::   Datepicker js -->
<script src=\"../../assets/plugins/date-picker/jquery-ui.js\"></script>

<!-- Internal :::   Datepicker Custom js -->
<script src=\"../../assets/js/date-picker.js\"></script>

<!-- Internal :::   Daterange js-->
<script src=\"../../assets/plugins/bootstrap-daterangepicker/daterangepicker.js\"></script>
<script src=\"../../assets/js/daterange.js\"></script>

<!-- Internal :::   Typewritter Js-->
<script src=\"../../assets/js/typewritter.js\"></script>

<!-- Internal :::    Swipe Js-->
<script src=\"../../assets/js/swipe.js\"></script>

<!-- Scripts Js-->
<script src=\"../../assets/js/scripts.js\"></script>

<!-- Custom Js-->
<script src=\"../../assets/js/custom.js\"></script>
</body>
</html>", "base.html.twig", "/Users/zahracarthagechouchane/kiftrip/templates/base.html.twig");
    }
}
