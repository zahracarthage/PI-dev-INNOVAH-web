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

/* reclamation/index.html.twig */
class __TwigTemplate_aa92f989b3499b880d23d79cf8d522c004720a47dc5008364dd8c64d326746bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "reclamation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Reclamation index ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
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
        <form role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tri");
        echo "\">


        <div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Programmatic control\">
            <div class=\"btn-group btn-group-sm\" aria-label=\"Set Select2 option\">
                <button class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1\">
                    Sort by Id
                </button>
            </div>

    </form>


            <div class=\"row\">
                <div class=\"col-md-12 col-lg-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <div class=\"card-title\">Data Tables</div>
                        </div>

                        <input class=\"form-control\" id=\"myInput\" type=\"text\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">

                        <div class=\"card-body\">


                            <div class=\"table-responsive\">

                                <table id=\"example\" class=\"table table-striped table-bordered\" >


                                    <thead>
                                    <tr>
                                        <th class=\"wd-15p\">Id </th>
                                        <th class=\"wd-15p\">Nom</th>
                                        <th class=\"wd-20p\">prenom</th>
                                        <th class=\"wd-15p\">Email</th>
                                        <th class=\"wd-10p\">Sujet</th>
                                        <th class=\"wd-25p\">Message</th>
                                        <th class=\"wd-25p\">Etat</th>
                                        <th class=\"wd-25p\">Delete</th>
                                        <th class=\"wd-25p\">Update</th>


                                    </tr>

                                    </thead>
                            <tbody id=\"hi\">

                                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["reclamation"]);
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 68
            echo "                                        <tr>
                                            <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                                            <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "nom", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                                            <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "prenom", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                                            <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "email", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                                            <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "subject", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                                            <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>

                                           <td>
                                                   ";
            // line 77
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 77), "0"))) {
                // line 78
                echo "                                                       non regler

                                                   ";
            }
            // line 81
            echo "


                                            </td>


                                            <td>
                                                <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Delete</a>

                                            </td>
    
                                            <td>



<input type=\"checkbox\" class=\"toggle\" checked>    
</div>

<style>

body
{
  min-height: 100vh
  display: flex
  justify-content: center
  align-items: center
  background: #141419
  }
*{
  box-sizing: border-box
  }
  
input[type=\"checkbox\"]
{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  -webkit-tap-highlight-color: transparent;
  cursor: pointer;
} 
  &:focus{
    outline: 0;
    }

.toggle{
  height: 32px;
  width: 52px;
  border-radius: 16px;
  display: inline-block;
  position: relative;
  margin: 0;
  border: 2px solid #474755;
  background: linear-gradient(180deg, #2D2F39 0%, #1F2027 100%);
  transition: all .2s ease };
  &:after {
    content: '';
    position: absolute;
    top: 2px;
    left: 2px;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: white;
    box-shadow: 0 1px 2px rgba(44,44,44,.2);
    transition: all .2s cubic-bezier(.5,.1,.75,1.35) };
  &:checked { 
    border-color: #654FEC}; }
    &:after {
      transform: translatex(20px);
      }
    
</style>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                                    </tbody>

                                </table>
                                ";
        // line 160
        echo "                                 <div> 
";
        // line 161
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 161, $this->source); })()));
        echo "
</div>

                            </div>

                        </div>
                       

                        <!-- table-wrapper -->
                    </div>
                    <!-- section-wrapper -->
                </div>
                

            </div>
        </div>


    </div>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
<script>
    \$(document).ready(function(){
        \$(\"#myInput\").on(\"keyup\", function() {
            var value = \$(this).val().toLowerCase();
            \$(\"#hi tr\").filter(function() {
                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 161,  279 => 160,  274 => 156,  200 => 88,  191 => 81,  186 => 78,  184 => 77,  178 => 74,  174 => 73,  170 => 72,  166 => 71,  162 => 70,  158 => 69,  155 => 68,  151 => 67,  100 => 19,  88 => 9,  78 => 8,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}


{% block title %} Reclamation index {% endblock %} 



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
        <form role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"{{ path('tri') }}\">


        <div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Programmatic control\">
            <div class=\"btn-group btn-group-sm\" aria-label=\"Set Select2 option\">
                <button class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1\">
                    Sort by Id
                </button>
            </div>

    </form>


            <div class=\"row\">
                <div class=\"col-md-12 col-lg-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <div class=\"card-title\">Data Tables</div>
                        </div>

                        <input class=\"form-control\" id=\"myInput\" type=\"text\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">

                        <div class=\"card-body\">


                            <div class=\"table-responsive\">

                                <table id=\"example\" class=\"table table-striped table-bordered\" >


                                    <thead>
                                    <tr>
                                        <th class=\"wd-15p\">Id </th>
                                        <th class=\"wd-15p\">Nom</th>
                                        <th class=\"wd-20p\">prenom</th>
                                        <th class=\"wd-15p\">Email</th>
                                        <th class=\"wd-10p\">Sujet</th>
                                        <th class=\"wd-25p\">Message</th>
                                        <th class=\"wd-25p\">Etat</th>
                                        <th class=\"wd-25p\">Delete</th>
                                        <th class=\"wd-25p\">Update</th>


                                    </tr>

                                    </thead>
                            <tbody id=\"hi\">

                                    {% for reclamation in reclamation %}
                                        <tr>
                                            <td>{{ reclamation.id }}</td>
                                            <td>{{ reclamation.nom }}</td>
                                            <td>{{ reclamation.prenom }}</td>
                                            <td>{{ reclamation.email }}</td>
                                            <td>{{ reclamation.subject }}</td>
                                            <td>{{ reclamation.message }}</td>

                                           <td>
                                                   {% if reclamation.etat ==\"0\" %}
                                                       non regler

                                                   {% endif %}



                                            </td>


                                            <td>
                                                <a href=\"{{ path('reclamation_delete', {'id': reclamation.id}) }}\" class=\"btn btn-success\">Delete</a>

                                            </td>
    
                                            <td>



<input type=\"checkbox\" class=\"toggle\" checked>    
</div>

<style>

body
{
  min-height: 100vh
  display: flex
  justify-content: center
  align-items: center
  background: #141419
  }
*{
  box-sizing: border-box
  }
  
input[type=\"checkbox\"]
{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  -webkit-tap-highlight-color: transparent;
  cursor: pointer;
} 
  &:focus{
    outline: 0;
    }

.toggle{
  height: 32px;
  width: 52px;
  border-radius: 16px;
  display: inline-block;
  position: relative;
  margin: 0;
  border: 2px solid #474755;
  background: linear-gradient(180deg, #2D2F39 0%, #1F2027 100%);
  transition: all .2s ease };
  &:after {
    content: '';
    position: absolute;
    top: 2px;
    left: 2px;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: white;
    box-shadow: 0 1px 2px rgba(44,44,44,.2);
    transition: all .2s cubic-bezier(.5,.1,.75,1.35) };
  &:checked { 
    border-color: #654FEC}; }
    &:after {
      transform: translatex(20px);
      }
    
</style>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>

                                </table>
                                {# a changer m3a el base twig bsh yodhhrou mourab3at #}
                                 <div> 
{{ knp_pagination_render(reclamation) }}
</div>

                            </div>

                        </div>
                       

                        <!-- table-wrapper -->
                    </div>
                    <!-- section-wrapper -->
                </div>
                

            </div>
        </div>


    </div>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
<script>
    \$(document).ready(function(){
        \$(\"#myInput\").on(\"keyup\", function() {
            var value = \$(this).val().toLowerCase();
            \$(\"#hi tr\").filter(function() {
                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

{% endblock %}", "reclamation/index.html.twig", "/Users/zahracarthagechouchane/kiftrip/templates/reclamation/index.html.twig");
    }
}
