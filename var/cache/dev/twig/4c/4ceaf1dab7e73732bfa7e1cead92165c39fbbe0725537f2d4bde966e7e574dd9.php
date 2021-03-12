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

/* repas/edit.html.twig */
class __TwigTemplate_7db414cd1fa9f9fac9c0d46a54bfbae92eb65bc9498cd381a43a0e6b89509e3f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repas/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repas/edit.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "repas/edit.html.twig", 1);
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

        echo " Edit Repas ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"app-content\">
        <div class=\"side-app\">
            <div class=\"page-header\">
                <h4 class=\"page-title\">Forms</h4>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"fe   fe-edit mr-1\"></i> Forms</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Form Elements</li>
                </ol>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-6\">
                    <div class=\"card m-b-20\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">Basic Example</h3>
                        </div>
                        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "

                        <div class=\"card-body\">
                            <form>
                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputname\">User Name</label>
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        echo "
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'errors');
        echo "

                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputEmail2\">description</label>
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        echo "
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), 'errors');
        echo "

                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputPassword2\">price</label>
                                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "price", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        echo "
                                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "price", [], "any", false, false, false, 41), 'errors');
        echo "

                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-label\">category</label>
                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "category", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        echo "
                                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "category", [], "any", false, false, false, 47), 'errors');
        echo "

                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputnumber\">adresse</label>
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "adresse", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        echo "
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "adresse", [], "any", false, false, false, 53), 'errors');
        echo "

                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputnumber\">img</label>
                                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "img", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        echo "
                                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "img", [], "any", false, false, false, 59), 'errors');
        echo "

                                </div>

                                <div class=\"form-group mb-0\">
                                    <div class=\"checkbox checkbox-secondary\">
                                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'widget');
        echo "
                                        <button type=\"submit\" class=\"btn btn-primary \">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "

                    </div>
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "repas/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 72,  188 => 65,  179 => 59,  175 => 58,  167 => 53,  163 => 52,  155 => 47,  151 => 46,  143 => 41,  139 => 40,  131 => 35,  127 => 34,  119 => 29,  115 => 28,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %} Edit Repas {% endblock %}

{% block body %}

    <div class=\"app-content\">
        <div class=\"side-app\">
            <div class=\"page-header\">
                <h4 class=\"page-title\">Forms</h4>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"fe   fe-edit mr-1\"></i> Forms</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Form Elements</li>
                </ol>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-6\">
                    <div class=\"card m-b-20\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">Basic Example</h3>
                        </div>
                        {{ form_start(form) }}

                        <div class=\"card-body\">
                            <form>
                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputname\">User Name</label>
                                    {{ form_widget(form.nom,{'attr': {'class': 'form-control form-control-user'}} ) }}
                                    {{ form_errors(form.nom) }}

                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputEmail2\">description</label>
                                    {{ form_widget(form.description,{'attr': {'class': 'form-control form-control-user'}} ) }}
                                    {{ form_errors(form.description) }}

                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputPassword2\">price</label>
                                    {{ form_widget(form.price,{'attr': {'class': 'form-control form-control-user'}}) }}
                                    {{ form_errors(form.price) }}

                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-label\">category</label>
                                    {{ form_widget(form.category,{'attr': {'class': 'form-control form-control-user'}} ) }}
                                    {{ form_errors(form.category) }}

                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputnumber\">adresse</label>
                                    {{ form_widget(form.adresse,{'attr': {'class': 'form-control form-control-user'}} ) }}
                                    {{ form_errors(form.adresse) }}

                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputnumber\">img</label>
                                    {{ form_widget(form.img,{'attr': {'class': 'form-control form-control-user'}} ) }}
                                    {{ form_errors(form.img) }}

                                </div>

                                <div class=\"form-group mb-0\">
                                    <div class=\"checkbox checkbox-secondary\">
                                        {{ form_widget(form) }}
                                        <button type=\"submit\" class=\"btn btn-primary \">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        {{ form_end(form) }}

                    </div>
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
    </div>


{% endblock %}
", "repas/edit.html.twig", "/Users/zahracarthagechouchane/kiftrip/templates/repas/edit.html.twig");
    }
}
