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

/* repas/new.html.twig */
class __TwigTemplate_8fc0b75d9b7d5572486f5ba5fa99593ad458d0ebc35f4f7de8e7ddecafd68831 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'banner' => [$this, 'block_banner'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repas/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repas/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "repas/new.html.twig", 1);
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

        // line 4
        echo "    <title>Create new</title>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 9
        echo "    <section class=\"bannerimg cover-image bg-background3\" data-image-src=\"../../assets/images/banners/slide-banner.jpg\">
        <div class=\"header-text mb-0\">
            <div class=\"container\">
                <div class=\"row text-white\">
                    <div class=\"col\"><h1 class=\"\">Add New </h1></div>

                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "<section class=\"sptb\">
    <div class=\"container\">
        <div class=\"row \">
            <div class=\"col-lg-8 col-md-12\">
                <div class=\"card\">

                        <div class=\"card-body custom-card\">
                            <div class=\"post-content active\" i>
                                <h3 class=\"card-title font-weight-bold mb-4\">Add Food Details</h3>

                                ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_start');
        echo "

                                <div class=\"card-body\">

                                    <div class=\"form-group\">
                                        <label class=\"form-label text-dark\"> Nom</label>

                                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "nom", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom"]]);
        echo "
                                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "nom", [], "any", false, false, false, 45), 'errors');
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"form-label text-dark\"> Description</label>
                                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "description"]]);
        echo "
                                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), 'errors');
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"form-label text-dark\">Price</label>
                                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "price", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "price"]]);
        echo "
                                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "price", [], "any", false, false, false, 55), 'errors');
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"form-label text-dark\">Category</label>
                                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "category", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "category"]]);
        echo "
                                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "category", [], "any", false, false, false, 60), 'errors');
        echo "
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"form-label text-dark\">Adresse</label>
                                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "adresse", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "adresse"]]);
        echo "
                                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "adresse", [], "any", false, false, false, 66), 'errors');
        echo "
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"form-label text-dark\">Image Upload</label>
                                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "img", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        echo "
                                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "img", [], "any", false, false, false, 72), 'errors');
        echo "
                                    </div>






                                </div>
                                <div class=\"card-footer text-right\">
                                <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\" onClick=\"validateSubmit()\"/>

                                </div>
                                <hr>

                                ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
        echo "

                                <hr>
                            </div>

 
                        </div>
                    </div>


                </div>


            </div>
        </div>
</section>

  <script>


                        function validateSubmit() {
                         result = confirm(\"Are you sure you want to submit this form ?\");
                        if (result) {
                           \$('#form').submit();
                           
                        
                                  }
                        }
                        </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "repas/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 87,  204 => 72,  200 => 71,  192 => 66,  188 => 65,  180 => 60,  176 => 59,  169 => 55,  165 => 54,  158 => 50,  154 => 49,  147 => 45,  143 => 44,  133 => 37,  121 => 27,  111 => 26,  91 => 9,  81 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    <title>Create new</title>
{% endblock %}


{% block banner %}
    <section class=\"bannerimg cover-image bg-background3\" data-image-src=\"../../assets/images/banners/slide-banner.jpg\">
        <div class=\"header-text mb-0\">
            <div class=\"container\">
                <div class=\"row text-white\">
                    <div class=\"col\"><h1 class=\"\">Add New </h1></div>

                </div>
            </div>
        </div>
    </section>
{% endblock %}






{% block body %}
<section class=\"sptb\">
    <div class=\"container\">
        <div class=\"row \">
            <div class=\"col-lg-8 col-md-12\">
                <div class=\"card\">

                        <div class=\"card-body custom-card\">
                            <div class=\"post-content active\" i>
                                <h3 class=\"card-title font-weight-bold mb-4\">Add Food Details</h3>

                                {{ form_start(form)}}

                                <div class=\"card-body\">

                                    <div class=\"form-group\">
                                        <label class=\"form-label text-dark\"> Nom</label>

                                        {{ form_widget(form.nom , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Nom'}} ) }}
                                        {{ form_errors(form.nom) }}
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"form-label text-dark\"> Description</label>
                                        {{ form_widget(form.description , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'description'}} ) }}
                                        {{ form_errors(form.description) }}
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"form-label text-dark\">Price</label>
                                        {{ form_widget(form.price , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'price'}} ) }}
                                        {{ form_errors(form.price) }}
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"form-label text-dark\">Category</label>
                                        {{ form_widget(form.category , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'category'}} ) }}
                                        {{ form_errors(form.category) }}
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"form-label text-dark\">Adresse</label>
                                        {{ form_widget(form.adresse , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'adresse'}} ) }}
                                        {{ form_errors(form.adresse) }}
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"form-label text-dark\">Image Upload</label>
                                        {{ form_widget(form.img , {'attr': {'class': 'form-control form-control-user'}} ) }}
                                        {{ form_errors(form.img) }}
                                    </div>






                                </div>
                                <div class=\"card-footer text-right\">
                                <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\" onClick=\"validateSubmit()\"/>

                                </div>
                                <hr>

                                {{ form_end(form) }}

                                <hr>
                            </div>

 
                        </div>
                    </div>


                </div>


            </div>
        </div>
</section>

  <script>


                        function validateSubmit() {
                         result = confirm(\"Are you sure you want to submit this form ?\");
                        if (result) {
                           \$('#form').submit();
                           
                        
                                  }
                        }
                        </script>


{% endblock %}
", "repas/new.html.twig", "/Users/zahracarthagechouchane/kiftrip/templates/repas/new.html.twig");
    }
}
