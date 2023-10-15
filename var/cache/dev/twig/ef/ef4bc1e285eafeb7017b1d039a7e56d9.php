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

/* food/show.html.twig */
class __TwigTemplate_b71a10ab2a836d719a7437a3638c60f0 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "food/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "food/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "food/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mix"]) || array_key_exists("mix", $context) ? $context["mix"] : (function () { throw new RuntimeError('Variable "mix" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " Mix";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h1 class=\"d-inline me-3\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mix"]) || array_key_exists("mix", $context) ? $context["mix"] : (function () { throw new RuntimeError('Variable "mix" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
        <div class=\"row mt-5\">
            <div class=\"col-12 col-md-4\">
                ";
        // line 10
        echo twig_include($this->env, $context, "mix/_recordSvg.html.twig");
        echo "
            </div>
            <div class=\"col-12 col-md-8 ps-5\">
                <h2 class=\"mb-4\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mix"]) || array_key_exists("mix", $context) ? $context["mix"] : (function () { throw new RuntimeError('Variable "mix" does not exist.', 13, $this->source); })()), "trackCount", [], "any", false, false, false, 13), "html", null, true);
        echo " songs <small>(genre: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mix"]) || array_key_exists("mix", $context) ? $context["mix"] : (function () { throw new RuntimeError('Variable "mix" does not exist.', 13, $this->source); })()), "genre", [], "any", false, false, false, 13), "html", null, true);
        echo ")</small></h2>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mix"]) || array_key_exists("mix", $context) ? $context["mix"] : (function () { throw new RuntimeError('Variable "mix" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>

                ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mix"]) || array_key_exists("mix", $context) ? $context["mix"] : (function () { throw new RuntimeError('Variable "mix" does not exist.', 16, $this->source); })()), "votesString", [], "any", false, false, false, 16), "html", null, true);
        echo " votes
                <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mix_vote", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["mix"]) || array_key_exists("mix", $context) ? $context["mix"] : (function () { throw new RuntimeError('Variable "mix" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\" method=\"POST\">
                    <button
                        type=\"submit\"
                        class=\"btn btn-outline-primary\"
                        name=\"direction\"
                        value=\"up\"
                    ><span class=\"fa fa-thumbs-up\"></span></button>
                    <button
                        type=\"submit\"
                        class=\"btn btn-outline-primary\"
                        name=\"direction\"
                        value=\"down\"
                    ><span class=\"fa fa-thumbs-down\"></span></button>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "food/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 17,  115 => 16,  110 => 14,  104 => 13,  98 => 10,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ mix.title }} Mix{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"d-inline me-3\">{{ mix.title }}</h1>
        <div class=\"row mt-5\">
            <div class=\"col-12 col-md-4\">
                {{ include('mix/_recordSvg.html.twig') }}
            </div>
            <div class=\"col-12 col-md-8 ps-5\">
                <h2 class=\"mb-4\">{{ mix.trackCount }} songs <small>(genre: {{ mix.genre }})</small></h2>
                <p>{{ mix.description }}</p>

                {{ mix.votesString }} votes
                <form action=\"{{ path('app_mix_vote', {id: mix.id }) }}\" method=\"POST\">
                    <button
                        type=\"submit\"
                        class=\"btn btn-outline-primary\"
                        name=\"direction\"
                        value=\"up\"
                    ><span class=\"fa fa-thumbs-up\"></span></button>
                    <button
                        type=\"submit\"
                        class=\"btn btn-outline-primary\"
                        name=\"direction\"
                        value=\"down\"
                    ><span class=\"fa fa-thumbs-down\"></span></button>
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "food/show.html.twig", "E:\\website-skeleton\\templates\\food\\show.html.twig");
    }
}
