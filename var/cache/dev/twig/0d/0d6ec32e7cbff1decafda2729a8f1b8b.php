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

/* food/browse.html.twig */
class __TwigTemplate_793a4e728c47197c56fe7363717c1c57 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "food/browse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "food/browse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "food/browse.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
";
        // line 6
        echo "    <h1>Pesquisar </h1>
    <div class=\"input-group mb-3\">
        <input type=\"text\" id=\"search\" name=\"search\" class=\"input-group-search\">
        <button class=\"btn btn-outline-primary\" type=\"button\" id=\"button-addon2\">Buscar</button>
    </div>
    <h2 class=\"mt-5 mb-4\">Filtrar por categoria</h2>
    <ul class=\"genre-list ps-0 mt-2 mb-3\">
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "doces"]);
        // line 16
        echo "\">Doces</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "salgados"]);
        // line 21
        echo "\">Salgados</a>
        </li>
    </ul>

    <div>
        <h2 class=\"mt-5\">Comidas</h2>
        <turbo-frame id=\"mix-browse-list\" target=\"_top\">
            <div class=\"row\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["foods"]) || array_key_exists("foods", $context) ? $context["foods"] : (function () { throw new RuntimeError('Variable "foods" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 30
            echo "                <div class=\"col col-md-4\">
                    <div href=\"\" class=\"mixed-vinyl-container p-3 text-center\">
                        <div class=\"square-image\">
                        <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["food"], "imagePath", [], "any", false, false, false, 33)), "html", null, true);
            echo "\" alt=\"\">
                        </div>
                            <p class=\"mt-2\"><strong>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</strong></p>
                            <span>R\$";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "price", [], "any", false, false, false, 36), "html", null, true);
            echo ".00</span>
                            <span>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "description", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>
                        <div class=\"seller-info\">
                            <span class=\"seller-name\">Vendedor: nome</span>
                            <a href=\"\" class=\"btn btn-primary seller-link\" type=\"button\" id=\"button-addon2\">Ver Perfil</a>

                        </div>

                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['food'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
            </div>
        </turbo-frame>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "food/browse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 47,  122 => 37,  118 => 36,  114 => 35,  109 => 33,  104 => 30,  100 => 29,  90 => 21,  88 => 19,  83 => 16,  81 => 14,  71 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
{#    <h1>Browse {{ genre ? genre : 'All Genres' }}</h1>#}
    <h1>Pesquisar </h1>
    <div class=\"input-group mb-3\">
        <input type=\"text\" id=\"search\" name=\"search\" class=\"input-group-search\">
        <button class=\"btn btn-outline-primary\" type=\"button\" id=\"button-addon2\">Buscar</button>
    </div>
    <h2 class=\"mt-5 mb-4\">Filtrar por categoria</h2>
    <ul class=\"genre-list ps-0 mt-2 mb-3\">
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_browse', {
                slug: 'doces'
            }) }}\">Doces</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_browse', {
                slug: 'salgados'
            }) }}\">Salgados</a>
        </li>
    </ul>

    <div>
        <h2 class=\"mt-5\">Comidas</h2>
        <turbo-frame id=\"mix-browse-list\" target=\"_top\">
            <div class=\"row\">
                {% for food in foods %}
                <div class=\"col col-md-4\">
                    <div href=\"\" class=\"mixed-vinyl-container p-3 text-center\">
                        <div class=\"square-image\">
                        <img src=\"{{ asset(food.imagePath) }}\" alt=\"\">
                        </div>
                            <p class=\"mt-2\"><strong>{{ food.name }}</strong></p>
                            <span>R\${{ food.price }}.00</span>
                            <span>{{ food.description }}</span>
                        <div class=\"seller-info\">
                            <span class=\"seller-name\">Vendedor: nome</span>
                            <a href=\"\" class=\"btn btn-primary seller-link\" type=\"button\" id=\"button-addon2\">Ver Perfil</a>

                        </div>

                    </div>
                </div>
                {% endfor %}

            </div>
        </turbo-frame>
    </div>
</div>
{% endblock %}
", "food/browse.html.twig", "E:\\website-skeleton\\templates\\food\\browse.html.twig");
    }
}
