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

/* repas/showbackrepas.html.twig */
class __TwigTemplate_7f609b47b863feced8dbdf94fb40314093a77f4805770726f2e152bf8fcdfbc8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repas/showbackrepas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repas/showbackrepas.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "repas/showbackrepas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

 

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

    <form role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trinom");
        echo "\">


        <div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Programmatic control\">
            <div class=\"btn-group btn-group-sm\" aria-label=\"Set Select2 option\">
                <button class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1\">
                    Sort by Name
                </button>
            </div>

    </form>

    <form role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("triid");
        echo "\">


        <div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Programmatic control\">
            <div class=\"btn-group btn-group-sm\" aria-label=\"Set Select2 option\">
                <button class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1\">
                    Sort by Id
                </button>
            </div>

    </form>

                                <div class=\"table-responsive\">

                                <table id=\"example\" class=\"table table-striped table-bordered\" >

                                    <thead>
                                    <tr>
                                        <th class=\"wd-15p\">Id </th>
                                        <th class=\"wd-15p\">Name</th>
                                        <th class=\"wd-20p\">Description</th>
                                        <th class=\"wd-15p\">price</th>
                                        <th class=\"wd-10p\">category</th>
                                        <th class=\"wd-25p\">adresse</th>
                                        <th class=\"wd-25p\">Update</th>
                                        <th class=\"wd-25p\">Delete</th>


                                    </tr>

                                    </thead>
                                    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["repa"]) {
            // line 72
            echo "
                                        <tbody>


                                    <tr>
                                        <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repa"], "id", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                                        <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repa"], "nom", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                                        <td> ";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repa"], "description", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                                        <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repa"], "price", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                                        <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repa"], "category", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                                        <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["repa"], "adresse", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>

                                        <td><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repas_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["repa"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\" class=\"btn btn-success\">update</td>
                                        <td><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repas_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["repa"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</td>

                                    </tr>
                                    </tbody>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
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
        return "repas/showbackrepas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 90,  183 => 85,  179 => 84,  174 => 82,  170 => 81,  166 => 80,  162 => 79,  158 => 78,  154 => 77,  147 => 72,  143 => 71,  109 => 40,  94 => 28,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}

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

    <form role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"{{ path('trinom') }}\">


        <div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Programmatic control\">
            <div class=\"btn-group btn-group-sm\" aria-label=\"Set Select2 option\">
                <button class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1\">
                    Sort by Name
                </button>
            </div>

    </form>

    <form role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"{{ path('triid') }}\">


        <div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Programmatic control\">
            <div class=\"btn-group btn-group-sm\" aria-label=\"Set Select2 option\">
                <button class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1\">
                    Sort by Id
                </button>
            </div>

    </form>

                                <div class=\"table-responsive\">

                                <table id=\"example\" class=\"table table-striped table-bordered\" >

                                    <thead>
                                    <tr>
                                        <th class=\"wd-15p\">Id </th>
                                        <th class=\"wd-15p\">Name</th>
                                        <th class=\"wd-20p\">Description</th>
                                        <th class=\"wd-15p\">price</th>
                                        <th class=\"wd-10p\">category</th>
                                        <th class=\"wd-25p\">adresse</th>
                                        <th class=\"wd-25p\">Update</th>
                                        <th class=\"wd-25p\">Delete</th>


                                    </tr>

                                    </thead>
                                    {% for repa in repas %}

                                        <tbody>


                                    <tr>
                                        <td>{{ repa.id }}</td>
                                        <td>{{ repa.nom }}</td>
                                        <td> {{ repa.description }}</td>
                                        <td>{{ repa.price }}</td>
                                        <td>{{ repa.category }}</td>
                                        <td>{{repa.adresse}}</td>

                                        <td><a href=\"{{ path('repas_edit', {'id': repa.id}) }}\" class=\"btn btn-success\">update</td>
                                        <td><a href=\"{{ path('repas_delete', {'id': repa.id}) }}\" class=\"btn btn-danger\">Delete</td>

                                    </tr>
                                    </tbody>
                                    {% endfor %}

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
{% endblock %}", "repas/showbackrepas.html.twig", "/Users/zahracarthagechouchane/kiftrip/templates/repas/showbackrepas.html.twig");
    }
}
