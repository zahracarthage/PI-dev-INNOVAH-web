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

/* baseback.html.twig */
class __TwigTemplate_e98b0454d0845ec25cd740f308b76d9aad7fb9308b88f3ba8cc2a1c311162cc3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <!-- META DATA -->
    <meta charset=\"UTF-8\">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Gowell - Travel HTML Listing Template\">
    <meta name=\"author\" content=\"Spruko Technologies Private Limited\">
    <meta name=\"keywords\" content=\"travel html template,html code for travel and tourism website,travel agency website templates,template hotel booking,travel web template,trip travel,themeforest html templates,travel website templates,travel template,travel itinerary template,travel booking template,travel agency website templates html5,travel website templates bootstrap,tourism website templates html,travel agency html template,travel theme html,html travel website templates,travel html theme,travel website templates html,template html travel,tour operator website templates\">
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"favicon.ico\" />

    <!-- Title -->
    <title>Gowell - Travel HTML Listing Template</title>

    <!-- Bootstrap Css -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Sidemenu Css -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/dashboard/sidemenu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Style Css -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Admin-Custom Css -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/dashboard/admin-custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- c3.js Charts Plugin -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/charts-c3/c3-chart.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Data table css -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/datatable/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/datatable/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Perfect scroll bar css-->
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!---Font icons-->
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!-- Color Skins -->
    <link id=\"theme\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/color-skins/color.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\"/>

</head>
<body class=\"app sidebar-mini\">

<!--Loader-->
<div id=\"global-loader\" class=\"bg-primary\">
    <div class=\"loader-svg-img\">
        <img src=\"../../assets/images/brand/2.png\" class=\"\" alt=\"\">
        <div class=\"flight-icon\"><i class=\"fa fa-plane\"></i></div>
    </div>
</div>
<!--/Loader-->

<!-- Section -->
<div class=\"page\">
    <div class=\"page-main h-100\">
        <!--Header Section-->
        <div class=\"app-header1 header-search-icon\">
            <div class=\"header-style1\">
                <!-- Logo -->
                <a class=\"header-brand\" href=\"index.html\">
                    <img src=\"../../assets/images/brand/logo.png\" class=\"header-brand-img desktop-logo\" alt=\"logo\">
                    <img src=\"../../assets/images/brand/favicon.png\" class=\"header-brand-img mobile-logo\" alt=\"logo\">
                </a>
                <!-- Logo -->
            </div>

            <!-- app-sidebar-toggle -->
            <div class=\"app-sidebar__toggle\" data-toggle=\"sidebar\">
                <a class=\"open-toggle\" href=\"#\"><i class=\"fe fe-menu\"></i></a>
                <a class=\"close-toggle\" href=\"#\"><i class=\"fe fe-x\"></i></a>
            </div>
            <!-- app-sidebar-toggle -->

            <!-- Country Dropdown -->
            <div class=\"dropdown d-none d-md-flex country-selector\">
                <a href=\"#\" class=\"d-flex nav-link leading-none\" data-toggle=\"dropdown\">
                    <img src=\"../../assets/images/us_flag.jpg\" alt=\"img\" class=\"avatar avatar-xs mr-1 align-self-center\">
                    <div class=\"ml-1\">English</div>
                </a>
                <div class=\"language-width dropdown-menu dropdown-menu-left dropdown-menu-arrow\">
                    <a href=\"#\" class=\"dropdown-item d-flex pb-3\">
                        <img src=\"../../assets/images/french_flag.jpg\"  alt=\"flag-img\" class=\"avatar  mr-3 align-self-center\" >
                        <div class=\"font-weight-semibold\">French</div>
                    </a>
                    <a href=\"#\" class=\"dropdown-item d-flex pb-3\">
                        <img src=\"../../assets/images/germany_flag.jpg\"  alt=\"flag-img\" class=\"avatar  mr-3 align-self-center\" >
                        <div class=\"font-weight-semibold\">Germany</div>
                    </a>
                    <a href=\"#\" class=\"dropdown-item d-flex pb-3\">
                        <img src=\"../../assets/images/italy_flag.jpg\"  alt=\"flag-img\" class=\"avatar  mr-3 align-self-center\" >
                        <div class=\"font-weight-semibold\">Italy</div>
                    </a>
                    <a href=\"#\" class=\"dropdown-item d-flex pb-3\">
                        <img src=\"../../assets/images/russia_flag.jpg\"  alt=\"flag-img\" class=\"avatar  mr-3 align-self-center\" >
                        <div class=\"font-weight-semibold\">Russia</div>
                    </a>
                    <a href=\"#\" class=\"dropdown-item d-flex pb-3\">
                        <img src=\"../../assets/images/spain_flag.jpg\"  alt=\"flag-img\" class=\"avatar  mr-3 align-self-center\" >
                        <div class=\"font-weight-semibold\">Spain</div>
                    </a>
                </div>
            </div>
            <!-- Country Dropdown -->

            <!-- Header Right -->
            <div class=\"d-flex ml-auto header-right-icons\">
                <!-- Header Search -->
                <div class=\"header-navsearch\">
                    <a href=\"#\" class=\" \"></a>
                    <form class=\"form-inline mr-auto\">
                        <div class=\"nav-search\">
                            <input type=\"search\" class=\"form-control header-search\" placeholder=\"Search…\" aria-label=\"Search\" >
                            <a class=\"absolute-header-button\" href=\"#\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </form>
                </div>
                <!-- /Header Search -->

                <!-- Full Screen -->
                <div class=\"dropdown d-none d-md-flex\" >
                    <a class=\"nav-link icon full-screen-link\">
                        <i class=\"fe fe-maximize-2\"  id=\"fullscreen-button\"></i>
                    </a>
                </div>
                <!-- /Full Screen -->

                <!-- Notifications -->
                <div class=\"dropdown d-none d-md-flex\">
                    <a class=\"nav-link icon\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-bell-o\"></i>
                        <span class=\"nav-unread badge badge-danger  badge-pill\">4</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-arrow\">
                        <a href=\"#\" class=\"dropdown-item text-center\">You have <strong>

                   
                        
                        4 notifications</strong></a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-height\">
                            <a href=\"#\" class=\"dropdown-item d-flex\">
                                <div class=\"notifyimg bg-primary-transparent text-primary\">
                                    <i class=\"fe fe-mail\"></i>
                                </div>
                                <div>
                                    <strong>2 New messages from lilly</strong>
                                    <div class=\"small text-muted\">17:50 PM</div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"dropdown-item d-flex\">
                                <div class=\"notifyimg bg-secondary-transparent text-secondary\">
                                    <i class=\"fe fe-calendar\"></i>
                                </div>
                                <div>
                                    <strong>Gowell event coming soon</strong>
                                    <div class=\"small text-muted\">19-01-2021</div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"dropdown-item d-flex\">
                                <div class=\"notifyimg bg-success-transparent text-success\">
                                    <i class=\"fe fe-message-circle\"></i>
                                </div>
                                <div>
                                    <strong> 3 New comments from blog post</strong>
                                    <div class=\"small text-muted\">05:34 AM</div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"dropdown-item d-flex\">
                                <div class=\"notifyimg bg-info-transparent text-info\">
                                    <i class=\"fe fe-alert-triangle\"></i>
                                </div>
                                <div>
                                    <strong>New application error</strong>
                                    <div class=\"small text-muted\">13:45 PM</div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"dropdown-item d-flex\">
                                <div class=\"notifyimg bg-warning-transparent text-warning\">
                                    <i class=\"fe fe-settings\"></i>
                                </div>
                                <div>
                                    <strong>Pending recent updates</strong>
                                    <div class=\"small text-muted\">17:50 PM</div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"dropdown-item d-flex\">
                                <div class=\"notifyimg bg-secondary-transparent text-secondary\">
                                    <i class=\"fe fe-user-plus\"></i>
                                </div>
                                <div>
                                    <strong>John wants to follow you</strong>
                                    <div class=\"small text-muted\">19-01-2021</div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"dropdown-item d-flex\">
                                <div class=\"notifyimg bg-success-transparent text-success\">
                                    <i class=\"fe fe-map-pin\"></i>
                                </div>
                                <div>
                                    <strong> View your current location</strong>
                                    <div class=\"small text-muted\">05:34 AM</div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"dropdown-item d-flex\">
                                <div class=\"notifyimg bg-info-transparent text-info\">
                                    <i class=\"fe fe-alert-triangle\"></i>
                                </div>
                                <div>
                                    <strong>New database error</strong>
                                    <div class=\"small text-muted\">13:45 PM</div>
                                </div>
                            </a>
                        </div>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item text-center\">See all Notification</a>
                    </div>
                </div>
                <!-- Notifications -->

                <!-- Multi Notifications -->
                <div class=\"dropdown d-none d-md-flex\">
                    <a class=\"nav-link icon\" data-toggle=\"dropdown\">
                        <i class=\"fe fe-grid\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-arrow app-selector p-2\">
                        <ul class=\"drop-icon-wrap\">
                            <li>
                                <a href=\"#\" class=\"drop-icon-item\">
                                    <span class=\" nav-unread badge badge-danger badge-pill\">2</span>
                                    <i class=\"fe fe-mail text-primary\"></i>
                                    <span class=\"block text-muted\"> E-mail</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"drop-icon-item\">
                                    <i class=\"fe fe-map-pin text-secondary\"></i>
                                    <span class=\"block text-muted\">Map</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"drop-icon-item\">
                                    <span class=\" nav-unread badge badge-danger badge-pill\">4</span>
                                    <i class=\"fe fe-message-circle text-success\"></i>
                                    <span class=\"block text-muted\">Messages</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"drop-icon-item\">
                                    <i class=\"fe fe-user-plus text-warning\"></i>
                                    <span class=\"block text-muted\">Followers</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"drop-icon-item\">
                                    <i class=\"fe fe-image text-info\"></i>
                                    <span class=\"block text-muted\">Photos</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"drop-icon-item\">
                                    <span class=\" nav-unread badge badge-danger badge-pill\">4</span>
                                    <i class=\"fe fe-settings text-blue\"></i>
                                    <span class=\"block text-muted\">Settings</span>
                                </a>
                            </li>
                        </ul>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item text-center\">View all</a>
                    </div>
                </div>
                <!-- Multi Notifications -->

                <!-- Profile Dropdown -->
                <div class=\"dropdown\">
                    <a href=\"#\" class=\"nav-link pr-0 leading-none user-img\" data-toggle=\"dropdown\">
                        <img src=\"../../assets/images/faces/male/24.jpg\" alt=\"profile-img\" class=\"avatar avatar-md brround\">
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-arrow \">
                        <a class=\"dropdown-item\" href=\"profile.html\">
                            <i class=\"dropdown-icon fe fe-user text-primary\"></i> My Profile
                        </a>
                        <a class=\"dropdown-item\" href=\"emailservices.html\">
                            <i class=\"dropdown-icon fe fe-mail text-primary\"></i> Inbox
                        </a>
                        <a class=\"dropdown-item\" href=\"editprofile.html\">
                            <i class=\"dropdown-icon fe fe-settings text-primary\"></i> Account Settings
                        </a>
                        <a class=\"dropdown-item\" href=\"login.html\">
                            <i class=\"dropdown-icon fe fe-power text-primary\"></i> Log out
                        </a>
                    </div>
                </div>
                <!-- Profile Dropdown -->
            </div>
            <!-- Header Right -->
        </div>
        <!-- Header Section -->

        <!-- Sidebar menu-->
        <div class=\"app-sidebar__overlay\" data-toggle=\"sidebar\"></div>
        <aside class=\"app-sidebar doc-sidebar\">
            <a class=\"header-brand sidemenu-header-brand\" href=\"index.html\">
                <img src=\"../../assets/images/brand/logo1.png\" class=\"header-brand-img brand-logo-main\" alt=\"Gowell logo\">
                <img src=\"../../assets/images/brand/favicon-white.png\" class=\"header-brand-img brand-logo-toggled\" alt=\"Gowell logo\">
            </a>

            <!--User Section-->
            <div class=\"app-sidebar__user\">
                <div class=\"dropdown user-pro-body text-center\">
                    <div class=\"user-pic\">
                        <img src=\"../../assets/images/faces/male/24.jpg\" alt=\"user-img\" class=\"rounded-circle mb-1\">
                    </div>
                    <div class=\"user-info\">
                        <h5 class=\"mb-0 font-weight-bold fs-16\">Lilly Sparter</h5>
                        <span class=\"app-sidebar__user-name text-sm text-white-80\">App Developer</span>
                    </div>
                </div>
            </div>
            <!--/User Section-->

            <!-- Sidemenu Navigation Section-->
            <ul class=\"side-menu\">
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-home\"></i><span class=\"side-menu__label\">Dashboard</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li><a class=\"slide-item\" href=\"index.html\">Dashboard 1</a></li>
                        <li><a class=\"slide-item\" href=\"index2.html\">Dashboard 2</a></li>
                        <li><a class=\"slide-item\" href=\"index3.html\">Dashboard 3</a></li>
                        <li><a class=\"slide-item\" href=\"index4.html\">Dashboard 4</a></li>
                        <li><a class=\"slide-item\" href=\"index5.html\">Dashboard 5</a></li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-settings\"></i><span class=\"side-menu__label\">Admin settings</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li><a class=\"slide-item\" href=\"admin-pricing.html\">Admin Pricing</a></li>
                        <li><a class=\"slide-item\" href=\"ads.html\">Ads List</a></li>
                        <li><a class=\"slide-item\" href=\"comments.html\">Comments</a></li>
                        <li><a class=\"slide-item\" href=\"email-users.html\">Email-Users</a></li>
                        <li><a class=\"slide-item\" href=\"media-gallery.html\">Media Gallery</a></li>
                        <li><a class=\"slide-item\" href=\"newad.html\">New Ad</a></li>
                        <li><a class=\"slide-item\" href=\"newuser.html\">New User</a></li>
                        <li><a class=\"slide-item\" href=\"favourite-ads.html\">Favourite-Ads</a></li>
                        <li><a class=\"slide-item\" href=\"payment-bookings.html\">Payment Bookings</a></li>
                        <li><a class=\"slide-item\" href=\"payments-adpacks.html\">Payment Adpacks</a></li>
                        <li><a class=\"slide-item\" href=\"payment-settings.html\">Payment Settings</a></li>
                        <li><a class=\"slide-item\" href=\"payments-membership.html\">Payment Membership</a></li>
                        <li><a class=\"slide-item\" href=\"profile-admin.html\">Profile Admin</a></li>
                        <li><a class=\"slide-item\" href=\"settings.html\">Settings</a></li>
                        <li><a class=\"slide-item\" href=\"users-all.html\">All Users</a></li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-layers\"></i><span class=\"side-menu__label\">Apps</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"cards.html\" class=\"slide-item\">Cards design</a>
                        </li>
                        <li>
                            <a href=\"chat.html\" class=\"slide-item\">Default Chat</a>
                        </li>
                        <li>
                            <a href=\"notify.html\" class=\"slide-item\">Notifications</a>
                        </li>
                        <li>
                            <a href=\"email.html\" class=\"slide-item\">Email</a>
                        </li>
                        <li>
                            <a href=\"emailservices.html\" class=\"slide-item\">Email Inbox</a>
                        </li>
                        <li>
                            <a href=\"sweetalert.html\" class=\"slide-item\">Sweet alerts</a>
                        </li>
                        <li>
                            <a href=\"rangeslider.html\" class=\"slide-item\">Range slider</a>
                        </li>
                        <li>
                            <a href=\"loaders.html\" class=\"slide-item\">Loaders</a>
                        </li>
                        <li>
                            <a href=\"time-line.html\" class=\"slide-item\">Time Line</a>
                        </li>
                        <li>
                            <a href=\"rating.html\" class=\"slide-item\">Rating </a>
                        </li>
                        <li>
                            <a href=\"users-list.html\" class=\"slide-item\">User List</a>
                        </li>
                        <li>
                            <a href=\"crypto-currencies.html\" class=\"slide-item\">Crypto-currencies</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class=\"side-menu__item\" href=\"widgets.html\"><i class=\"side-menu__icon fe fe-grid\"></i><span class=\"side-menu__label\">Widget</span></a>
                </li>
                <li>
                    <a class=\"side-menu__item\" href=\"full-calendar.html\"><i class=\"side-menu__icon fe fe-calendar\"></i><span class=\"side-menu__label\">Full calendar</span></a>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-bar-chart\"></i><span class=\"side-menu__label\">Charts</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"chart-chartjs.html\" class=\"slide-item\">Chartjs Charts </a>
                        </li>
                        <li>
                            <a href=\"chart-echart.html\" class=\"slide-item\">Echart Charts</a>
                        </li>
                        <li>
                            <a href=\"chart-flot.html\" class=\"slide-item\">Flot Charts</a>
                        </li>
                        <li>
                            <a href=\"sparklinechart.html\" class=\"slide-item\">Sparkline Chart</a>
                        </li>
                        <li>
                            <a href=\"chart-morris.html\" class=\"slide-item\">Morris Charts</a>
                        </li>
                        <li class=\"sub-slide\">
                            <a class=\"side-menu__item border-top-0 slide-item sub-slide-show\" href=\"#\"><span class=\"side-menu__label ml-0\">C3 Charts</span> <i class=\"sub-angle fa fa-angle-right\"></i></a>
                            <ul class=\"child-sub-menu\">
                                <li>
                                    <a href=\"charts.html\" class=\"slide-item\">C3 Bar Charts</a>
                                </li>
                                <li>
                                    <a href=\"chart-line.html\" class=\"slide-item\">C3 Line Charts</a>
                                </li>
                                <li>
                                    <a href=\"chart-donut.html\" class=\"slide-item\">C3 Donut Charts</a>
                                </li>
                                <li>
                                    <a href=\"chart-pie.html\" class=\"slide-item\">C3 Pie charts</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-database\"></i><span class=\"side-menu__label\"> Elements</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"alerts.html\" class=\"slide-item\">Alerts</a>
                        </li>
                        <li>
                            <a href=\"buttons.html\" class=\"slide-item\">Buttons</a>
                        </li>
                        <li>
                            <a href=\"colors.html\" class=\"slide-item\">Colors</a>
                        </li>
                        <li>
                            <a href=\"avatars.html\" class=\"slide-item\">Avatar-Square</a>
                        </li>
                        <li>
                            <a href=\"dropdown.html\" class=\"slide-item\">Drop downs</a>
                        </li>
                        <li>
                            <a href=\"thumbnails.html\" class=\"slide-item\">Thumbnails</a>
                        </li>
                        <li>
                            <a href=\"mediaobject.html\" class=\"slide-item\">Media Object</a>
                        </li>
                        <li>
                            <a href=\"list.html\" class=\"slide-item\">List</a>
                        </li>
                        <li>
                            <a href=\"tags.html\" class=\"slide-item\">Tags</a>
                        </li>
                        <li>
                            <a href=\"pagination.html\" class=\"slide-item\">Pagination</a>
                        </li>
                        <li>
                            <a href=\"navigation.html\" class=\"slide-item\">Navigation</a>
                        </li>
                        <li>
                            <a href=\"typography.html\" class=\"slide-item\">Typography</a>
                        </li>
                        <li>
                            <a href=\"breadcrumbs.html\" class=\"slide-item\">Breadcrumbs</a>
                        </li>
                        <li>
                            <a href=\"badge.html\" class=\"slide-item\">Badges</a>
                        </li>
                        <li>
                            <a href=\"jumbotron.html\" class=\"slide-item\">Jumbotron</a>
                        </li>
                        <li>
                            <a href=\"panels.html\" class=\"slide-item\">Panels</a>
                        </li>
                        <li>
                            <a href=\"modal.html\" class=\"slide-item\">Modal</a>
                        </li>
                        <li>
                            <a href=\"tooltipandpopover.html\" class=\"slide-item\">Tooltip and popover</a>
                        </li>
                        <li>
                            <a href=\"progress.html\" class=\"slide-item\">Progress</a>
                        </li>
                        <li>
                            <a href=\"carousel.html\" class=\"slide-item\">Carousels</a>
                        </li>
                        <li>
                            <a href=\"accordion.html\" class=\"slide-item\">Accordions</a>
                        </li>
                        <li>
                            <a href=\"tabs.html\" class=\"slide-item\">Tabs</a>
                        </li>
                        <li>
                            <a href=\"headers.html\" class=\"slide-item\">Headers</a>
                        </li>
                        <li>
                            <a href=\"footers.html\" class=\"slide-item\">Footers</a>
                        </li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-edit\"></i><span class=\"side-menu__label\">Forms</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"form-elements.html\" class=\"slide-item\">Form Elements</a>
                        </li>
                        <li>
                            <a href=\"form-wizard.html\" class=\"slide-item\">Form-wizard Elements</a>
                        </li>
                        <li>
                            <a href=\"wysiwyag.html\" class=\"slide-item\">Text Editor</a>
                        </li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-box\"></i><span class=\"side-menu__label\">Tables</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"tables.html\" class=\"slide-item\">Default table</a>
                        </li>
                        <li>
                            <a href=\"datatable.html\" class=\"slide-item\">Data Table</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class=\"side-menu__item\" href=\"maps.html\"><i class=\"side-menu__icon fe fe-map-pin\"></i><span class=\"side-menu__label\"> Maps</span></a>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-flag\"></i><span class=\"side-menu__label\">Icons</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"icons.html\" class=\"slide-item\">Font Awesome</a>
                        </li>
                        <li>
                            <a href=\"icons2.html\" class=\"slide-item\">Material Design Icons</a>
                        </li>
                        <li>
                            <a href=\"icons3.html\" class=\"slide-item\">Simple Line Iocns</a>
                        </li>
                        <li>
                            <a href=\"icons4.html\" class=\"slide-item\">Feather Icons</a>
                        </li>
                        <li>
                            <a href=\"icons5.html\" class=\"slide-item\">Ionic Icons</a>
                        </li>
                        <li>
                            <a href=\"icons6.html\" class=\"slide-item\">Flag Icons</a>
                        </li>
                        <li>
                            <a href=\"icons7.html\" class=\"slide-item\">pe7 Icons</a>
                        </li>
                        <li>
                            <a href=\"icons8.html\" class=\"slide-item\">Themify Icons</a>
                        </li>
                        <li>
                            <a href=\"icons9.html\" class=\"slide-item\">Typicons Icons</a>
                        </li>
                        <li>
                            <a href=\"icons10.html\" class=\"slide-item\">Weather Icons</a>
                        </li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-layout\"></i><span class=\"side-menu__label\">Pages</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"profile.html\" class=\"slide-item\">Profile</a>
                        </li>
                        <li>
                            <a href=\"editprofile.html\" class=\"slide-item\">Edit Profile</a>
                        </li>
                        <li>
                            <a href=\"gallery.html\" class=\"slide-item\">Gallery</a>
                        </li>
                        <li>
                            <a href=\"about.html\" class=\"slide-item\">About Company</a>
                        </li>
                        <li>
                            <a href=\"company-history.html\" class=\"slide-item\">Company History</a>
                        </li>
                        <li>
                            <a href=\"services.html\" class=\"slide-item\">Services</a>
                        </li>
                        <li>
                            <a href=\"faq.html\" class=\"slide-item\">FAQS</a>
                        </li>
                        <li>
                            <a href=\"terms.html\" class=\"slide-item\">Terms and Conditions</a>
                        </li>
                        <li>
                            <a href=\"empty.html\" class=\"slide-item\">Empty Page</a>
                        </li>
                        <li>
                            <a href=\"construction.html\" class=\"slide-item\">Under Construction</a>
                        </li>
                        <li>
                            <a href=\"blog.html\" class=\"slide-item\">Blog</a>
                        </li>
                        <li>
                            <a href=\"invoice.html\" class=\"slide-item\">Invoice</a>
                        </li>
                        <li>
                            <a href=\"pricing.html\" class=\"slide-item\">Pricing Tables</a>
                        </li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-shopping-cart\"></i><span class=\"side-menu__label\">E-commerce</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"shop.html\" class=\"slide-item\">Products</a>
                        </li>
                        <li>
                            <a href=\"shop-description.html\" class=\"slide-item\">Product Details</a>
                        </li>
                        <li>
                            <a href=\"cart.html\" class=\"slide-item\">Shopping Cart</a>
                        </li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon typcn typcn-attachment-outline\"></i><span class=\"side-menu__label\">Custom  Pages</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"login.html\" class=\"slide-item\">Login</a>
                        </li>
                        <li>
                            <a href=\"register.html\" class=\"slide-item\">Register</a>
                        </li>
                        <li>
                            <a href=\"forgot-password.html\" class=\"slide-item\">Forgot password</a>
                        </li>
                        <li>
                            <a href=\"lockscreen.html\" class=\"slide-item\">Lock screen</a>
                        </li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-alert-triangle\"></i><span class=\"side-menu__label\">Error pages</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"400.html\" class=\"slide-item\">400 Error</a>
                        </li>
                        <li>
                            <a href=\"401.html\" class=\"slide-item\">401 Error</a>
                        </li>
                        <li>
                            <a href=\"403.html\" class=\"slide-item\">403 Error</a>
                        </li>
                        <li>
                            <a href=\"404.html\" class=\"slide-item\">404 Error</a>
                        </li>
                        <li>
                            <a href=\"500.html\" class=\"slide-item\">500 Error</a>
                        </li>
                        <li>
                            <a href=\"503.html\" class=\"slide-item\">503 Error</a>
                        </li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-list\"></i><span class=\"side-menu__label\">Submenu 01</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"#\" class=\"slide-item\">Sub menu 01</a>
                        </li>
                        <li class=\"sub-slide\">
                            <a class=\"side-menu__item border-top-0 slide-item sub-slide-show\" href=\"#\"><span class=\"side-menu__label ml-0\">Submenu 02</span> <i class=\"sub-angle fa fa-angle-right\"></i></a>
                            <ul class=\"child-sub-menu\">
                                <li>
                                    <a href=\"#\" class=\"slide-item\">Submenu 01</a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"slide-item\">Submenu 02</a>
                                </li>
                                <li class=\"sub-slide2\">
                                    <a class=\"side-menu__item border-top-0 slide-item sub-slide2-show\" href=\"#\"><span class=\"side-menu__label ml-0\">Submenu 03</span> <i class=\"sub-angle2 fa fa-angle-right\"></i></a>
                                    <ul class=\"child-sub-menu2\">
                                        <li>
                                            <a href=\"#\" class=\"slide-item\">Submenu 01</a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"slide-item\">Submenu 02</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidemenu Navigation Section-->
        </aside>
        <!-- Sidebar menu-->

        <!--app content-->

        ";
        // line 716
        $this->displayBlock('body', $context, $blocks);
        // line 781
        echo "    </div>



    <!--footer-->
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row align-items-center flex-row-reverse\">
                <div class=\"col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center\">
                    Copyright © 2020 <a href=\"#\">Gowell</a>. Designed by <a href=\"#\">Spruko</a> All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer-->
</div>

<!-- Back to top -->
<a href=\"#top\" id=\"back-to-top\"><i class=\"fe fe-arrow-up\"></i></a>

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

<!--Side-menu Js-->
<script src=\"../../assets/plugins/toggle-sidebar/sidemenu.js\"></script>

<!-- Data tables -->
<script src=\"../../assets/plugins/datatable/jquery.dataTables.min.js\"></script>
<script src=\"../../assets/plugins/datatable/dataTables.bootstrap4.min.js\"></script>
<script src=\"../../assets/js/datatable.js\"></script>

<!-- Select2 js -->
<script src=\"../../assets/plugins/select2/select2.full.min.js\"></script>

<!-- Perfect scroll bar Js-->
<script src=\"../../assets/plugins/perfect-scrollbar/perfect-scrollbar.js\"></script>
<script src=\"../../assets/plugins/perfect-scrollbar/p-scroll.js\"></script>

<!--Internal Counters -->
<script src=\"../../assets/plugins/counters/counterup.min.js\"></script>
<script src=\"../../assets/plugins/counters/waypoints.min.js\"></script>

<!-- Custom Js-->
<script src=\"../../assets/js/admin-custom.js\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 716
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 717
        echo "        <div class=\"app-content\">
            <div class=\"side-app\">
                <div class=\"page-header\">
                    <h4 class=\"page-title\">Data Tables</h4>
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"fe   fe-box mr-1\"></i> Tables</a></li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Data Tables</li>
                    </ol>
                </div>



                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <div class=\"card-title\">Data Tables</div>
                            </div>

                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table id=\"example\" class=\"table table-striped table-bordered\" >
                                        <thead>
                                        <tr>
                                            <th class=\"wd-15p\">Id </th>
                                            <th class=\"wd-15p\">Name</th>
                                            <th class=\"wd-20p\">Description</th>
                                            <th class=\"wd-15p\">Category</th>
                                            <th class=\"wd-10p\">Adresse</th>
                                            <th class=\"wd-25p\">Images</th>

                                        </tr>
                                        </thead>
                                        <tbody>



                                        <tr>
                                            <td>Lucas</td>
                                            <td>Dyer</td>
                                            <td>Javascript Developer</td>
                                            <td>2014/08/23</td>
                                            <td>\$456,123</td>
                                            <td>l.dyer@datatables.net</td>
                                        </tr>






                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- table-wrapper -->
                        </div>
                        <!-- section-wrapper -->
                    </div>

                </div>
            </div>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  876 => 717,  866 => 716,  793 => 781,  791 => 716,  115 => 43,  109 => 40,  103 => 37,  97 => 34,  93 => 33,  87 => 30,  81 => 27,  75 => 24,  69 => 21,  63 => 18,  44 => 1,);
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
    <meta name=\"author\" content=\"Spruko Technologies Private Limited\">
    <meta name=\"keywords\" content=\"travel html template,html code for travel and tourism website,travel agency website templates,template hotel booking,travel web template,trip travel,themeforest html templates,travel website templates,travel template,travel itinerary template,travel booking template,travel agency website templates html5,travel website templates bootstrap,tourism website templates html,travel agency html template,travel theme html,html travel website templates,travel html theme,travel website templates html,template html travel,tour operator website templates\">
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"favicon.ico\" />

    <!-- Title -->
    <title>Gowell - Travel HTML Listing Template</title>

    <!-- Bootstrap Css -->
    <link href=\"{{  asset( '../assets/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />

    <!-- Sidemenu Css -->
    <link href=\"{{ asset('../assets/css/dashboard/sidemenu.css') }}\" rel=\"stylesheet\" />

    <!-- Style Css -->
    <link href=\"{{ asset('../assets/css/style.css') }}\" rel=\"stylesheet\" />

    <!-- Admin-Custom Css -->
    <link href=\"{{ asset('../assets/css/dashboard/admin-custom.css') }}\" rel=\"stylesheet\" />

    <!-- c3.js Charts Plugin -->
    <link href=\"{{ asset('../assets/plugins/charts-c3/c3-chart.css') }}\" rel=\"stylesheet\" />

    <!-- Data table css -->
    <link href=\"{{ asset('../assets/plugins/datatable/dataTables.bootstrap4.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('../assets/plugins/datatable/jquery.dataTables.min.css') }}\" rel=\"stylesheet\" />

    <!-- Perfect scroll bar css-->
    <link href=\"{{ asset('../assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}\" rel=\"stylesheet\" />

    <!---Font icons-->
    <link href=\"{{ asset('../assets/css/icons.css') }}\" rel=\"stylesheet\"/>

    <!-- Color Skins -->
    <link id=\"theme\" href=\"{{ asset('../assets/color-skins/color.css') }}\"  rel=\"stylesheet\"/>

</head>
<body class=\"app sidebar-mini\">

<!--Loader-->
<div id=\"global-loader\" class=\"bg-primary\">
    <div class=\"loader-svg-img\">
        <img src=\"../../assets/images/brand/2.png\" class=\"\" alt=\"\">
        <div class=\"flight-icon\"><i class=\"fa fa-plane\"></i></div>
    </div>
</div>
<!--/Loader-->

<!-- Section -->
<div class=\"page\">
    <div class=\"page-main h-100\">
        <!--Header Section-->
        <div class=\"app-header1 header-search-icon\">
            <div class=\"header-style1\">
                <!-- Logo -->
                <a class=\"header-brand\" href=\"index.html\">
                    <img src=\"../../assets/images/brand/logo.png\" class=\"header-brand-img desktop-logo\" alt=\"logo\">
                    <img src=\"../../assets/images/brand/favicon.png\" class=\"header-brand-img mobile-logo\" alt=\"logo\">
                </a>
                <!-- Logo -->
            </div>

            <!-- app-sidebar-toggle -->
            <div class=\"app-sidebar__toggle\" data-toggle=\"sidebar\">
                <a class=\"open-toggle\" href=\"#\"><i class=\"fe fe-menu\"></i></a>
                <a class=\"close-toggle\" href=\"#\"><i class=\"fe fe-x\"></i></a>
            </div>
            <!-- app-sidebar-toggle -->

            <!-- Country Dropdown -->
            <div class=\"dropdown d-none d-md-flex country-selector\">
                <a href=\"#\" class=\"d-flex nav-link leading-none\" data-toggle=\"dropdown\">
                    <img src=\"../../assets/images/us_flag.jpg\" alt=\"img\" class=\"avatar avatar-xs mr-1 align-self-center\">
                    <div class=\"ml-1\">English</div>
                </a>
                <div class=\"language-width dropdown-menu dropdown-menu-left dropdown-menu-arrow\">
                    <a href=\"#\" class=\"dropdown-item d-flex pb-3\">
                        <img src=\"../../assets/images/french_flag.jpg\"  alt=\"flag-img\" class=\"avatar  mr-3 align-self-center\" >
                        <div class=\"font-weight-semibold\">French</div>
                    </a>
                    <a href=\"#\" class=\"dropdown-item d-flex pb-3\">
                        <img src=\"../../assets/images/germany_flag.jpg\"  alt=\"flag-img\" class=\"avatar  mr-3 align-self-center\" >
                        <div class=\"font-weight-semibold\">Germany</div>
                    </a>
                    <a href=\"#\" class=\"dropdown-item d-flex pb-3\">
                        <img src=\"../../assets/images/italy_flag.jpg\"  alt=\"flag-img\" class=\"avatar  mr-3 align-self-center\" >
                        <div class=\"font-weight-semibold\">Italy</div>
                    </a>
                    <a href=\"#\" class=\"dropdown-item d-flex pb-3\">
                        <img src=\"../../assets/images/russia_flag.jpg\"  alt=\"flag-img\" class=\"avatar  mr-3 align-self-center\" >
                        <div class=\"font-weight-semibold\">Russia</div>
                    </a>
                    <a href=\"#\" class=\"dropdown-item d-flex pb-3\">
                        <img src=\"../../assets/images/spain_flag.jpg\"  alt=\"flag-img\" class=\"avatar  mr-3 align-self-center\" >
                        <div class=\"font-weight-semibold\">Spain</div>
                    </a>
                </div>
            </div>
            <!-- Country Dropdown -->

            <!-- Header Right -->
            <div class=\"d-flex ml-auto header-right-icons\">
                <!-- Header Search -->
                <div class=\"header-navsearch\">
                    <a href=\"#\" class=\" \"></a>
                    <form class=\"form-inline mr-auto\">
                        <div class=\"nav-search\">
                            <input type=\"search\" class=\"form-control header-search\" placeholder=\"Search…\" aria-label=\"Search\" >
                            <a class=\"absolute-header-button\" href=\"#\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </form>
                </div>
                <!-- /Header Search -->

                <!-- Full Screen -->
                <div class=\"dropdown d-none d-md-flex\" >
                    <a class=\"nav-link icon full-screen-link\">
                        <i class=\"fe fe-maximize-2\"  id=\"fullscreen-button\"></i>
                    </a>
                </div>
                <!-- /Full Screen -->

                <!-- Notifications -->
                <div class=\"dropdown d-none d-md-flex\">
                    <a class=\"nav-link icon\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-bell-o\"></i>
                        <span class=\"nav-unread badge badge-danger  badge-pill\">4</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-arrow\">
                        <a href=\"#\" class=\"dropdown-item text-center\">You have <strong>

                   
                        
                        4 notifications</strong></a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-height\">
                            <a href=\"#\" class=\"dropdown-item d-flex\">
                                <div class=\"notifyimg bg-primary-transparent text-primary\">
                                    <i class=\"fe fe-mail\"></i>
                                </div>
                                <div>
                                    <strong>2 New messages from lilly</strong>
                                    <div class=\"small text-muted\">17:50 PM</div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"dropdown-item d-flex\">
                                <div class=\"notifyimg bg-secondary-transparent text-secondary\">
                                    <i class=\"fe fe-calendar\"></i>
                                </div>
                                <div>
                                    <strong>Gowell event coming soon</strong>
                                    <div class=\"small text-muted\">19-01-2021</div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"dropdown-item d-flex\">
                                <div class=\"notifyimg bg-success-transparent text-success\">
                                    <i class=\"fe fe-message-circle\"></i>
                                </div>
                                <div>
                                    <strong> 3 New comments from blog post</strong>
                                    <div class=\"small text-muted\">05:34 AM</div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"dropdown-item d-flex\">
                                <div class=\"notifyimg bg-info-transparent text-info\">
                                    <i class=\"fe fe-alert-triangle\"></i>
                                </div>
                                <div>
                                    <strong>New application error</strong>
                                    <div class=\"small text-muted\">13:45 PM</div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"dropdown-item d-flex\">
                                <div class=\"notifyimg bg-warning-transparent text-warning\">
                                    <i class=\"fe fe-settings\"></i>
                                </div>
                                <div>
                                    <strong>Pending recent updates</strong>
                                    <div class=\"small text-muted\">17:50 PM</div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"dropdown-item d-flex\">
                                <div class=\"notifyimg bg-secondary-transparent text-secondary\">
                                    <i class=\"fe fe-user-plus\"></i>
                                </div>
                                <div>
                                    <strong>John wants to follow you</strong>
                                    <div class=\"small text-muted\">19-01-2021</div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"dropdown-item d-flex\">
                                <div class=\"notifyimg bg-success-transparent text-success\">
                                    <i class=\"fe fe-map-pin\"></i>
                                </div>
                                <div>
                                    <strong> View your current location</strong>
                                    <div class=\"small text-muted\">05:34 AM</div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"dropdown-item d-flex\">
                                <div class=\"notifyimg bg-info-transparent text-info\">
                                    <i class=\"fe fe-alert-triangle\"></i>
                                </div>
                                <div>
                                    <strong>New database error</strong>
                                    <div class=\"small text-muted\">13:45 PM</div>
                                </div>
                            </a>
                        </div>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item text-center\">See all Notification</a>
                    </div>
                </div>
                <!-- Notifications -->

                <!-- Multi Notifications -->
                <div class=\"dropdown d-none d-md-flex\">
                    <a class=\"nav-link icon\" data-toggle=\"dropdown\">
                        <i class=\"fe fe-grid\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-arrow app-selector p-2\">
                        <ul class=\"drop-icon-wrap\">
                            <li>
                                <a href=\"#\" class=\"drop-icon-item\">
                                    <span class=\" nav-unread badge badge-danger badge-pill\">2</span>
                                    <i class=\"fe fe-mail text-primary\"></i>
                                    <span class=\"block text-muted\"> E-mail</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"drop-icon-item\">
                                    <i class=\"fe fe-map-pin text-secondary\"></i>
                                    <span class=\"block text-muted\">Map</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"drop-icon-item\">
                                    <span class=\" nav-unread badge badge-danger badge-pill\">4</span>
                                    <i class=\"fe fe-message-circle text-success\"></i>
                                    <span class=\"block text-muted\">Messages</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"drop-icon-item\">
                                    <i class=\"fe fe-user-plus text-warning\"></i>
                                    <span class=\"block text-muted\">Followers</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"drop-icon-item\">
                                    <i class=\"fe fe-image text-info\"></i>
                                    <span class=\"block text-muted\">Photos</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"drop-icon-item\">
                                    <span class=\" nav-unread badge badge-danger badge-pill\">4</span>
                                    <i class=\"fe fe-settings text-blue\"></i>
                                    <span class=\"block text-muted\">Settings</span>
                                </a>
                            </li>
                        </ul>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#\" class=\"dropdown-item text-center\">View all</a>
                    </div>
                </div>
                <!-- Multi Notifications -->

                <!-- Profile Dropdown -->
                <div class=\"dropdown\">
                    <a href=\"#\" class=\"nav-link pr-0 leading-none user-img\" data-toggle=\"dropdown\">
                        <img src=\"../../assets/images/faces/male/24.jpg\" alt=\"profile-img\" class=\"avatar avatar-md brround\">
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-arrow \">
                        <a class=\"dropdown-item\" href=\"profile.html\">
                            <i class=\"dropdown-icon fe fe-user text-primary\"></i> My Profile
                        </a>
                        <a class=\"dropdown-item\" href=\"emailservices.html\">
                            <i class=\"dropdown-icon fe fe-mail text-primary\"></i> Inbox
                        </a>
                        <a class=\"dropdown-item\" href=\"editprofile.html\">
                            <i class=\"dropdown-icon fe fe-settings text-primary\"></i> Account Settings
                        </a>
                        <a class=\"dropdown-item\" href=\"login.html\">
                            <i class=\"dropdown-icon fe fe-power text-primary\"></i> Log out
                        </a>
                    </div>
                </div>
                <!-- Profile Dropdown -->
            </div>
            <!-- Header Right -->
        </div>
        <!-- Header Section -->

        <!-- Sidebar menu-->
        <div class=\"app-sidebar__overlay\" data-toggle=\"sidebar\"></div>
        <aside class=\"app-sidebar doc-sidebar\">
            <a class=\"header-brand sidemenu-header-brand\" href=\"index.html\">
                <img src=\"../../assets/images/brand/logo1.png\" class=\"header-brand-img brand-logo-main\" alt=\"Gowell logo\">
                <img src=\"../../assets/images/brand/favicon-white.png\" class=\"header-brand-img brand-logo-toggled\" alt=\"Gowell logo\">
            </a>

            <!--User Section-->
            <div class=\"app-sidebar__user\">
                <div class=\"dropdown user-pro-body text-center\">
                    <div class=\"user-pic\">
                        <img src=\"../../assets/images/faces/male/24.jpg\" alt=\"user-img\" class=\"rounded-circle mb-1\">
                    </div>
                    <div class=\"user-info\">
                        <h5 class=\"mb-0 font-weight-bold fs-16\">Lilly Sparter</h5>
                        <span class=\"app-sidebar__user-name text-sm text-white-80\">App Developer</span>
                    </div>
                </div>
            </div>
            <!--/User Section-->

            <!-- Sidemenu Navigation Section-->
            <ul class=\"side-menu\">
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-home\"></i><span class=\"side-menu__label\">Dashboard</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li><a class=\"slide-item\" href=\"index.html\">Dashboard 1</a></li>
                        <li><a class=\"slide-item\" href=\"index2.html\">Dashboard 2</a></li>
                        <li><a class=\"slide-item\" href=\"index3.html\">Dashboard 3</a></li>
                        <li><a class=\"slide-item\" href=\"index4.html\">Dashboard 4</a></li>
                        <li><a class=\"slide-item\" href=\"index5.html\">Dashboard 5</a></li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-settings\"></i><span class=\"side-menu__label\">Admin settings</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li><a class=\"slide-item\" href=\"admin-pricing.html\">Admin Pricing</a></li>
                        <li><a class=\"slide-item\" href=\"ads.html\">Ads List</a></li>
                        <li><a class=\"slide-item\" href=\"comments.html\">Comments</a></li>
                        <li><a class=\"slide-item\" href=\"email-users.html\">Email-Users</a></li>
                        <li><a class=\"slide-item\" href=\"media-gallery.html\">Media Gallery</a></li>
                        <li><a class=\"slide-item\" href=\"newad.html\">New Ad</a></li>
                        <li><a class=\"slide-item\" href=\"newuser.html\">New User</a></li>
                        <li><a class=\"slide-item\" href=\"favourite-ads.html\">Favourite-Ads</a></li>
                        <li><a class=\"slide-item\" href=\"payment-bookings.html\">Payment Bookings</a></li>
                        <li><a class=\"slide-item\" href=\"payments-adpacks.html\">Payment Adpacks</a></li>
                        <li><a class=\"slide-item\" href=\"payment-settings.html\">Payment Settings</a></li>
                        <li><a class=\"slide-item\" href=\"payments-membership.html\">Payment Membership</a></li>
                        <li><a class=\"slide-item\" href=\"profile-admin.html\">Profile Admin</a></li>
                        <li><a class=\"slide-item\" href=\"settings.html\">Settings</a></li>
                        <li><a class=\"slide-item\" href=\"users-all.html\">All Users</a></li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-layers\"></i><span class=\"side-menu__label\">Apps</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"cards.html\" class=\"slide-item\">Cards design</a>
                        </li>
                        <li>
                            <a href=\"chat.html\" class=\"slide-item\">Default Chat</a>
                        </li>
                        <li>
                            <a href=\"notify.html\" class=\"slide-item\">Notifications</a>
                        </li>
                        <li>
                            <a href=\"email.html\" class=\"slide-item\">Email</a>
                        </li>
                        <li>
                            <a href=\"emailservices.html\" class=\"slide-item\">Email Inbox</a>
                        </li>
                        <li>
                            <a href=\"sweetalert.html\" class=\"slide-item\">Sweet alerts</a>
                        </li>
                        <li>
                            <a href=\"rangeslider.html\" class=\"slide-item\">Range slider</a>
                        </li>
                        <li>
                            <a href=\"loaders.html\" class=\"slide-item\">Loaders</a>
                        </li>
                        <li>
                            <a href=\"time-line.html\" class=\"slide-item\">Time Line</a>
                        </li>
                        <li>
                            <a href=\"rating.html\" class=\"slide-item\">Rating </a>
                        </li>
                        <li>
                            <a href=\"users-list.html\" class=\"slide-item\">User List</a>
                        </li>
                        <li>
                            <a href=\"crypto-currencies.html\" class=\"slide-item\">Crypto-currencies</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class=\"side-menu__item\" href=\"widgets.html\"><i class=\"side-menu__icon fe fe-grid\"></i><span class=\"side-menu__label\">Widget</span></a>
                </li>
                <li>
                    <a class=\"side-menu__item\" href=\"full-calendar.html\"><i class=\"side-menu__icon fe fe-calendar\"></i><span class=\"side-menu__label\">Full calendar</span></a>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-bar-chart\"></i><span class=\"side-menu__label\">Charts</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"chart-chartjs.html\" class=\"slide-item\">Chartjs Charts </a>
                        </li>
                        <li>
                            <a href=\"chart-echart.html\" class=\"slide-item\">Echart Charts</a>
                        </li>
                        <li>
                            <a href=\"chart-flot.html\" class=\"slide-item\">Flot Charts</a>
                        </li>
                        <li>
                            <a href=\"sparklinechart.html\" class=\"slide-item\">Sparkline Chart</a>
                        </li>
                        <li>
                            <a href=\"chart-morris.html\" class=\"slide-item\">Morris Charts</a>
                        </li>
                        <li class=\"sub-slide\">
                            <a class=\"side-menu__item border-top-0 slide-item sub-slide-show\" href=\"#\"><span class=\"side-menu__label ml-0\">C3 Charts</span> <i class=\"sub-angle fa fa-angle-right\"></i></a>
                            <ul class=\"child-sub-menu\">
                                <li>
                                    <a href=\"charts.html\" class=\"slide-item\">C3 Bar Charts</a>
                                </li>
                                <li>
                                    <a href=\"chart-line.html\" class=\"slide-item\">C3 Line Charts</a>
                                </li>
                                <li>
                                    <a href=\"chart-donut.html\" class=\"slide-item\">C3 Donut Charts</a>
                                </li>
                                <li>
                                    <a href=\"chart-pie.html\" class=\"slide-item\">C3 Pie charts</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-database\"></i><span class=\"side-menu__label\"> Elements</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"alerts.html\" class=\"slide-item\">Alerts</a>
                        </li>
                        <li>
                            <a href=\"buttons.html\" class=\"slide-item\">Buttons</a>
                        </li>
                        <li>
                            <a href=\"colors.html\" class=\"slide-item\">Colors</a>
                        </li>
                        <li>
                            <a href=\"avatars.html\" class=\"slide-item\">Avatar-Square</a>
                        </li>
                        <li>
                            <a href=\"dropdown.html\" class=\"slide-item\">Drop downs</a>
                        </li>
                        <li>
                            <a href=\"thumbnails.html\" class=\"slide-item\">Thumbnails</a>
                        </li>
                        <li>
                            <a href=\"mediaobject.html\" class=\"slide-item\">Media Object</a>
                        </li>
                        <li>
                            <a href=\"list.html\" class=\"slide-item\">List</a>
                        </li>
                        <li>
                            <a href=\"tags.html\" class=\"slide-item\">Tags</a>
                        </li>
                        <li>
                            <a href=\"pagination.html\" class=\"slide-item\">Pagination</a>
                        </li>
                        <li>
                            <a href=\"navigation.html\" class=\"slide-item\">Navigation</a>
                        </li>
                        <li>
                            <a href=\"typography.html\" class=\"slide-item\">Typography</a>
                        </li>
                        <li>
                            <a href=\"breadcrumbs.html\" class=\"slide-item\">Breadcrumbs</a>
                        </li>
                        <li>
                            <a href=\"badge.html\" class=\"slide-item\">Badges</a>
                        </li>
                        <li>
                            <a href=\"jumbotron.html\" class=\"slide-item\">Jumbotron</a>
                        </li>
                        <li>
                            <a href=\"panels.html\" class=\"slide-item\">Panels</a>
                        </li>
                        <li>
                            <a href=\"modal.html\" class=\"slide-item\">Modal</a>
                        </li>
                        <li>
                            <a href=\"tooltipandpopover.html\" class=\"slide-item\">Tooltip and popover</a>
                        </li>
                        <li>
                            <a href=\"progress.html\" class=\"slide-item\">Progress</a>
                        </li>
                        <li>
                            <a href=\"carousel.html\" class=\"slide-item\">Carousels</a>
                        </li>
                        <li>
                            <a href=\"accordion.html\" class=\"slide-item\">Accordions</a>
                        </li>
                        <li>
                            <a href=\"tabs.html\" class=\"slide-item\">Tabs</a>
                        </li>
                        <li>
                            <a href=\"headers.html\" class=\"slide-item\">Headers</a>
                        </li>
                        <li>
                            <a href=\"footers.html\" class=\"slide-item\">Footers</a>
                        </li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-edit\"></i><span class=\"side-menu__label\">Forms</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"form-elements.html\" class=\"slide-item\">Form Elements</a>
                        </li>
                        <li>
                            <a href=\"form-wizard.html\" class=\"slide-item\">Form-wizard Elements</a>
                        </li>
                        <li>
                            <a href=\"wysiwyag.html\" class=\"slide-item\">Text Editor</a>
                        </li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-box\"></i><span class=\"side-menu__label\">Tables</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"tables.html\" class=\"slide-item\">Default table</a>
                        </li>
                        <li>
                            <a href=\"datatable.html\" class=\"slide-item\">Data Table</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class=\"side-menu__item\" href=\"maps.html\"><i class=\"side-menu__icon fe fe-map-pin\"></i><span class=\"side-menu__label\"> Maps</span></a>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-flag\"></i><span class=\"side-menu__label\">Icons</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"icons.html\" class=\"slide-item\">Font Awesome</a>
                        </li>
                        <li>
                            <a href=\"icons2.html\" class=\"slide-item\">Material Design Icons</a>
                        </li>
                        <li>
                            <a href=\"icons3.html\" class=\"slide-item\">Simple Line Iocns</a>
                        </li>
                        <li>
                            <a href=\"icons4.html\" class=\"slide-item\">Feather Icons</a>
                        </li>
                        <li>
                            <a href=\"icons5.html\" class=\"slide-item\">Ionic Icons</a>
                        </li>
                        <li>
                            <a href=\"icons6.html\" class=\"slide-item\">Flag Icons</a>
                        </li>
                        <li>
                            <a href=\"icons7.html\" class=\"slide-item\">pe7 Icons</a>
                        </li>
                        <li>
                            <a href=\"icons8.html\" class=\"slide-item\">Themify Icons</a>
                        </li>
                        <li>
                            <a href=\"icons9.html\" class=\"slide-item\">Typicons Icons</a>
                        </li>
                        <li>
                            <a href=\"icons10.html\" class=\"slide-item\">Weather Icons</a>
                        </li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-layout\"></i><span class=\"side-menu__label\">Pages</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"profile.html\" class=\"slide-item\">Profile</a>
                        </li>
                        <li>
                            <a href=\"editprofile.html\" class=\"slide-item\">Edit Profile</a>
                        </li>
                        <li>
                            <a href=\"gallery.html\" class=\"slide-item\">Gallery</a>
                        </li>
                        <li>
                            <a href=\"about.html\" class=\"slide-item\">About Company</a>
                        </li>
                        <li>
                            <a href=\"company-history.html\" class=\"slide-item\">Company History</a>
                        </li>
                        <li>
                            <a href=\"services.html\" class=\"slide-item\">Services</a>
                        </li>
                        <li>
                            <a href=\"faq.html\" class=\"slide-item\">FAQS</a>
                        </li>
                        <li>
                            <a href=\"terms.html\" class=\"slide-item\">Terms and Conditions</a>
                        </li>
                        <li>
                            <a href=\"empty.html\" class=\"slide-item\">Empty Page</a>
                        </li>
                        <li>
                            <a href=\"construction.html\" class=\"slide-item\">Under Construction</a>
                        </li>
                        <li>
                            <a href=\"blog.html\" class=\"slide-item\">Blog</a>
                        </li>
                        <li>
                            <a href=\"invoice.html\" class=\"slide-item\">Invoice</a>
                        </li>
                        <li>
                            <a href=\"pricing.html\" class=\"slide-item\">Pricing Tables</a>
                        </li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-shopping-cart\"></i><span class=\"side-menu__label\">E-commerce</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"shop.html\" class=\"slide-item\">Products</a>
                        </li>
                        <li>
                            <a href=\"shop-description.html\" class=\"slide-item\">Product Details</a>
                        </li>
                        <li>
                            <a href=\"cart.html\" class=\"slide-item\">Shopping Cart</a>
                        </li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon typcn typcn-attachment-outline\"></i><span class=\"side-menu__label\">Custom  Pages</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"login.html\" class=\"slide-item\">Login</a>
                        </li>
                        <li>
                            <a href=\"register.html\" class=\"slide-item\">Register</a>
                        </li>
                        <li>
                            <a href=\"forgot-password.html\" class=\"slide-item\">Forgot password</a>
                        </li>
                        <li>
                            <a href=\"lockscreen.html\" class=\"slide-item\">Lock screen</a>
                        </li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-alert-triangle\"></i><span class=\"side-menu__label\">Error pages</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"400.html\" class=\"slide-item\">400 Error</a>
                        </li>
                        <li>
                            <a href=\"401.html\" class=\"slide-item\">401 Error</a>
                        </li>
                        <li>
                            <a href=\"403.html\" class=\"slide-item\">403 Error</a>
                        </li>
                        <li>
                            <a href=\"404.html\" class=\"slide-item\">404 Error</a>
                        </li>
                        <li>
                            <a href=\"500.html\" class=\"slide-item\">500 Error</a>
                        </li>
                        <li>
                            <a href=\"503.html\" class=\"slide-item\">503 Error</a>
                        </li>
                    </ul>
                </li>
                <li class=\"slide\">
                    <a class=\"side-menu__item slide-show\" href=\"#\"><i class=\"side-menu__icon fe fe-list\"></i><span class=\"side-menu__label\">Submenu 01</span><i class=\"angle fa fa-angle-right\"></i></a>
                    <ul class=\"slide-menu\">
                        <li>
                            <a href=\"#\" class=\"slide-item\">Sub menu 01</a>
                        </li>
                        <li class=\"sub-slide\">
                            <a class=\"side-menu__item border-top-0 slide-item sub-slide-show\" href=\"#\"><span class=\"side-menu__label ml-0\">Submenu 02</span> <i class=\"sub-angle fa fa-angle-right\"></i></a>
                            <ul class=\"child-sub-menu\">
                                <li>
                                    <a href=\"#\" class=\"slide-item\">Submenu 01</a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"slide-item\">Submenu 02</a>
                                </li>
                                <li class=\"sub-slide2\">
                                    <a class=\"side-menu__item border-top-0 slide-item sub-slide2-show\" href=\"#\"><span class=\"side-menu__label ml-0\">Submenu 03</span> <i class=\"sub-angle2 fa fa-angle-right\"></i></a>
                                    <ul class=\"child-sub-menu2\">
                                        <li>
                                            <a href=\"#\" class=\"slide-item\">Submenu 01</a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"slide-item\">Submenu 02</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidemenu Navigation Section-->
        </aside>
        <!-- Sidebar menu-->

        <!--app content-->

        {% block body %}
        <div class=\"app-content\">
            <div class=\"side-app\">
                <div class=\"page-header\">
                    <h4 class=\"page-title\">Data Tables</h4>
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"fe   fe-box mr-1\"></i> Tables</a></li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Data Tables</li>
                    </ol>
                </div>



                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <div class=\"card-title\">Data Tables</div>
                            </div>

                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table id=\"example\" class=\"table table-striped table-bordered\" >
                                        <thead>
                                        <tr>
                                            <th class=\"wd-15p\">Id </th>
                                            <th class=\"wd-15p\">Name</th>
                                            <th class=\"wd-20p\">Description</th>
                                            <th class=\"wd-15p\">Category</th>
                                            <th class=\"wd-10p\">Adresse</th>
                                            <th class=\"wd-25p\">Images</th>

                                        </tr>
                                        </thead>
                                        <tbody>



                                        <tr>
                                            <td>Lucas</td>
                                            <td>Dyer</td>
                                            <td>Javascript Developer</td>
                                            <td>2014/08/23</td>
                                            <td>\$456,123</td>
                                            <td>l.dyer@datatables.net</td>
                                        </tr>






                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- table-wrapper -->
                        </div>
                        <!-- section-wrapper -->
                    </div>

                </div>
            </div>
        </div>
        {% endblock %}
    </div>



    <!--footer-->
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row align-items-center flex-row-reverse\">
                <div class=\"col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center\">
                    Copyright © 2020 <a href=\"#\">Gowell</a>. Designed by <a href=\"#\">Spruko</a> All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer-->
</div>

<!-- Back to top -->
<a href=\"#top\" id=\"back-to-top\"><i class=\"fe fe-arrow-up\"></i></a>

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

<!--Side-menu Js-->
<script src=\"../../assets/plugins/toggle-sidebar/sidemenu.js\"></script>

<!-- Data tables -->
<script src=\"../../assets/plugins/datatable/jquery.dataTables.min.js\"></script>
<script src=\"../../assets/plugins/datatable/dataTables.bootstrap4.min.js\"></script>
<script src=\"../../assets/js/datatable.js\"></script>

<!-- Select2 js -->
<script src=\"../../assets/plugins/select2/select2.full.min.js\"></script>

<!-- Perfect scroll bar Js-->
<script src=\"../../assets/plugins/perfect-scrollbar/perfect-scrollbar.js\"></script>
<script src=\"../../assets/plugins/perfect-scrollbar/p-scroll.js\"></script>

<!--Internal Counters -->
<script src=\"../../assets/plugins/counters/counterup.min.js\"></script>
<script src=\"../../assets/plugins/counters/waypoints.min.js\"></script>

<!-- Custom Js-->
<script src=\"../../assets/js/admin-custom.js\"></script>

</body>
</html>", "baseback.html.twig", "/Users/zahracarthagechouchane/kiftrip/templates/baseback.html.twig");
    }
}
