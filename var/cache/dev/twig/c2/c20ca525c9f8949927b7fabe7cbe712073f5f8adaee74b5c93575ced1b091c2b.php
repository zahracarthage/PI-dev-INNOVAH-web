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

/* repas/showrepas.html.twig */
class __TwigTemplate_155a25a68e43a3d0c8aa294ab707ef290f69dcfc1bb5f6b68766d6baa30dab30 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'namelist' => [$this, 'block_namelist'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "listefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repas/showrepas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repas/showrepas.html.twig"));

        $this->parent = $this->loadTemplate("listefront.html.twig", "repas/showrepas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Repas index ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_namelist($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "namelist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "namelist"));

        echo " aa list ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    

</div>

        <div class=\"tab-pane active\" id=\"tab-12\">
        <div class=\"row\">
       

 



                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["repa"]) {
            // line 24
            echo "
                           <div class=\"col-lg-6 col-md-6 col-xl-6\">
                                <div class=\"card overflow-hidden\">
                                    <div class=\"h-100\">

                                        <div class=\"item-card9-img h-250\">
                                            <div class=\"item-card9-imgs\">
                                                <a href=\"tours.html\" class=\"absolute-link2\"></a>;
                                                <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["repa"], "img", [], "any", false, false, false, 32))), "html", null, true);
            echo "\" alt=\"img\" class=\"cover-image\">
                                            </div>

                                            <div class=\"item-card9-icons\">
                                                <a href=\"#\" class=\"item-card9-icons1 wishlist\"> <i class=\"fa fa fa-heart-o\"></i></a>
                                            </div>

                                        </div>

                                        <div class=\"card border-0 mb-0 br-0\">
                                    <div class=\"card-body h-100\">
                                         <div class=\"item-card9\">




                                           <a href=\"tours.html\" class=\"text-dark\"><h4 class=\"font-weight-semibold2 mt-1 mb-1\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repa"], "nom", [], "any", false, false, false, 48), "html", null, true);
            echo "</h4></a>
                                                    <div class=\"mt-0 mb-0 d-sm-flex d-md-block d-xl-flex\">
                                                        <a href=\"#\" class=\"mt-1 mb-0 mr-3 text-dark\"><i class=\"fe fe-map-pin mr-1\"></i> ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repa"], "adresse", [], "any", false, false, false, 50), "html", null, true);
            echo "</a>
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
                                                        <p class=\"mt-2 mb-0 leading-loose\"> ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repa"], "description", [], "any", false, false, false, 65), "html", null, true);
            echo "  </p>
                                                    </div>
                                                        <div class=\"card-footer\">
                                                            <div class=\"item-card9-footer d-flex\">
                                                                <div class=\"item-card9-cost d-flex\">
                                                                    <div class=\"ml-3\">
                                                                        <h6 class=\"mb-0 mt-2 font-weight-semibold2\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repa"], "category", [], "any", false, false, false, 71), "html", null, true);
            echo "</h6>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                   </div>
                                             </div>
                                           </div>
                                            </tbody>
                                        </div>
                                    </div>
                                </div>


            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "
        </div>
        </div>







";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "repas/showrepas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 87,  187 => 71,  178 => 65,  160 => 50,  155 => 48,  136 => 32,  126 => 24,  122 => 23,  108 => 11,  98 => 10,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'listefront.html.twig' %}

{% block title %} Repas index {% endblock %}
{% block namelist %} aa list {% endblock %}



 

    {% block body %}
    

</div>

        <div class=\"tab-pane active\" id=\"tab-12\">
        <div class=\"row\">
       

 



                {% for repa in repas %}

                           <div class=\"col-lg-6 col-md-6 col-xl-6\">
                                <div class=\"card overflow-hidden\">
                                    <div class=\"h-100\">

                                        <div class=\"item-card9-img h-250\">
                                            <div class=\"item-card9-imgs\">
                                                <a href=\"tours.html\" class=\"absolute-link2\"></a>;
                                                <img src=\"{{ asset('uploads/' ~ repa.img ) }}\" alt=\"img\" class=\"cover-image\">
                                            </div>

                                            <div class=\"item-card9-icons\">
                                                <a href=\"#\" class=\"item-card9-icons1 wishlist\"> <i class=\"fa fa fa-heart-o\"></i></a>
                                            </div>

                                        </div>

                                        <div class=\"card border-0 mb-0 br-0\">
                                    <div class=\"card-body h-100\">
                                         <div class=\"item-card9\">




                                           <a href=\"tours.html\" class=\"text-dark\"><h4 class=\"font-weight-semibold2 mt-1 mb-1\">{{ repa.nom }}</h4></a>
                                                    <div class=\"mt-0 mb-0 d-sm-flex d-md-block d-xl-flex\">
                                                        <a href=\"#\" class=\"mt-1 mb-0 mr-3 text-dark\"><i class=\"fe fe-map-pin mr-1\"></i> {{ repa.adresse }}</a>
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
                                                        <p class=\"mt-2 mb-0 leading-loose\"> {{ repa.description }}  </p>
                                                    </div>
                                                        <div class=\"card-footer\">
                                                            <div class=\"item-card9-footer d-flex\">
                                                                <div class=\"item-card9-cost d-flex\">
                                                                    <div class=\"ml-3\">
                                                                        <h6 class=\"mb-0 mt-2 font-weight-semibold2\">{{ repa.category }}</h6>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                   </div>
                                             </div>
                                           </div>
                                            </tbody>
                                        </div>
                                    </div>
                                </div>


            {%  endfor %}

        </div>
        </div>







{% endblock %}
", "repas/showrepas.html.twig", "/Users/zahracarthagechouchane/kiftrip/templates/repas/showrepas.html.twig");
    }
}
