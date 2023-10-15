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
class __TwigTemplate_fe0ed15335d81fea5c2baee52f11553e extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-32x32.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-16x16.png"), "html", null, true);
        echo "\">

    ";
        // line 12
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "</head>
<body>
<div class=\"mb-5\">
    <!-- Main Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark\" style=\"background-color: #27333A;\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">
";
        // line 27
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/unesp.png"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 50px; height: 50px;\">
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse d-flex justify-content-end\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" style=\"margin-top: 20px;\" href=\"\">Anunciar comida</a>
                    </li>
                    <!-- Not Authenticated -->
                    <!-- <li class=\"nav-item\"><button href=\"#\" class=\"btn btn-primary btn-sm\">Login</button></li> -->
                    <!-- End Not Authenticated -->

                    <!-- If Authenticated -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-user p-2\" style=\"border: solid 1px #fff; border-radius: 50px; font-size: 40px;\"></i>
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <li><a class=\"dropdown-item\" href=\"#\">My Mixes</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Signout</a></li>
                        </ul>
                    </li>
                    <!-- End If Authenticated -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Main Navigation -->

    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "flashes", ["success"], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 59
            echo "        <div class=\"alert alert-success\">
            ";
            // line 60
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "</div>

";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "
<!-- Footer -->
<div class=\"container mt-5\">
    <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
        <div class=\"col-md-4 d-flex align-items-center\">
            <span class=\"me-1\" style=\"color: red;\"><i class=\"fas fa-heart\"></i></span>
            <span class=\" me-1\">Contribuir com o projeto no</span>
            <a target=\"_blank\" href=\"https://github.com/JulioVarella/unesp-marketplace/\" style=\"color: #25a1dd\" class=\"mb-3 me-2 mb-md-0 text-decoration-none lh-1\">
                GitHub
            </a>
        </div>

        <ul class=\"nav col-md-4 justify-content-end list-unstyled d-flex\">
            <li class=\"ms-3\"><a class=\"text-muted\" target=\"_blank\" href=\"https://github.com/SymfonyCasts/symfony6\"><i class=\"fab fa-github\"></i></a></li>
        </ul>
    </footer>
</div>
<!-- End Footer -->

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mixed Vinyl";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 65
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  244 => 65,  231 => 17,  221 => 16,  208 => 13,  198 => 12,  179 => 5,  148 => 66,  146 => 65,  142 => 63,  133 => 60,  130 => 59,  126 => 58,  91 => 27,  87 => 25,  79 => 19,  77 => 16,  74 => 15,  71 => 12,  66 => 9,  62 => 8,  58 => 7,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Mixed Vinyl{% endblock %}</title>

    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('apple-touch-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('favicon-32x32.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('favicon-16x16.png') }}\">

    {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}

    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}
</head>
<body>
<div class=\"mb-5\">
    <!-- Main Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark\" style=\"background-color: #27333A;\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"{{ path('app_homepage') }}\">
{#                <i class=\"fas fa-record-vinyl\"></i>#}
                <img src=\"{{ asset('images/unesp.png') }}\" alt=\"Logo\" style=\"width: 50px; height: 50px;\">
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse d-flex justify-content-end\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" style=\"margin-top: 20px;\" href=\"\">Anunciar comida</a>
                    </li>
                    <!-- Not Authenticated -->
                    <!-- <li class=\"nav-item\"><button href=\"#\" class=\"btn btn-primary btn-sm\">Login</button></li> -->
                    <!-- End Not Authenticated -->

                    <!-- If Authenticated -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-user p-2\" style=\"border: solid 1px #fff; border-radius: 50px; font-size: 40px;\"></i>
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <li><a class=\"dropdown-item\" href=\"#\">My Mixes</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Signout</a></li>
                        </ul>
                    </li>
                    <!-- End If Authenticated -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Main Navigation -->

    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}
</div>

{% block body %}{% endblock %}

<!-- Footer -->
<div class=\"container mt-5\">
    <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
        <div class=\"col-md-4 d-flex align-items-center\">
            <span class=\"me-1\" style=\"color: red;\"><i class=\"fas fa-heart\"></i></span>
            <span class=\" me-1\">Contribuir com o projeto no</span>
            <a target=\"_blank\" href=\"https://github.com/JulioVarella/unesp-marketplace/\" style=\"color: #25a1dd\" class=\"mb-3 me-2 mb-md-0 text-decoration-none lh-1\">
                GitHub
            </a>
        </div>

        <ul class=\"nav col-md-4 justify-content-end list-unstyled d-flex\">
            <li class=\"ms-3\"><a class=\"text-muted\" target=\"_blank\" href=\"https://github.com/SymfonyCasts/symfony6\"><i class=\"fab fa-github\"></i></a></li>
        </ul>
    </footer>
</div>
<!-- End Footer -->

</body>
</html>
", "base.html.twig", "E:\\website-skeleton\\templates\\base.html.twig");
    }
}
