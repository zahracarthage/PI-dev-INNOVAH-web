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

/* repas/showsolo.html.twig */
class __TwigTemplate_db100cce30f54108e163c2f4ef68215eeb228ed2ebea1f50254305ec5a409746 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'name' => [$this, 'block_name'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "singleshow.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repas/showsolo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repas/showsolo.html.twig"));

        $this->parent = $this->loadTemplate("singleshow.html.twig", "repas/showsolo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        // line 5
        echo "               ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 6
            echo "              ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "nom", [], "any", false, false, false, 6), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "           ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 11
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 13
            echo "
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

                                </div>
                            </div>
                        </div>



                        <div class=\"card-footer\">
                            <div class=\"icons\">
                                <a href=\"path\" class=\"btn btn-primary px-5\">Book Now</a>

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
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "repas/showsolo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 113,  110 => 13,  106 => 12,  103 => 11,  93 => 10,  83 => 8,  74 => 6,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'singleshow.html.twig' %}


           {% block name%}
               {%  for r in repas %}
              {{ r.nom }}
{% endfor %}
           {% endblock %}

{% block container %}

    {%  for r in repas %}

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

                                </div>
                            </div>
                        </div>



                        <div class=\"card-footer\">
                            <div class=\"icons\">
                                <a href=\"path\" class=\"btn btn-primary px-5\">Book Now</a>

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
    {% endfor %}

{%  endblock %}
", "repas/showsolo.html.twig", "/Users/zahracarthagechouchane/kiftrip/templates/repas/showsolo.html.twig");
    }
}
