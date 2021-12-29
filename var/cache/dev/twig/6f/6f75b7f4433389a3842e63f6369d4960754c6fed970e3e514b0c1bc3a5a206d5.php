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

/* home/index.html.twig */
class __TwigTemplate_ed954358cf2f2928cec9695403f7f3569c88e3e4ccfaf81fdff0b51c3e0a4d82 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Hello HomeController!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<style>
\t\t.circle {
\t\t\tborder-radius: 50%
\t\t}
\t\t.row {
\t\t\twidth: 100%;
\t\t}
\t\t.quarter {
\t\t\tfloat: left;
\t\t\twidth: 33.333333%;
\t\t}
\t\t.padding-64 {
\t\t\tpadding-top: 64px !important;
\t\t\tpadding-bottom: 64px !important
\t\t}
\t\t.center {
\t\t\ttext-align: center !important
\t\t}
\t</style>
\t<!-- Image Header -->
\t<div class=\"display-container animate-opacity\">
\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/samsung.jpg"), "html", null, true);
        echo "\" alt=\"Image header\" style=\"width:100%\">
\t</div>
\t<!-- Team Container -->
\t<div class=\"container padding-64 center\">
\t\t<h2>OUR TEAM</h2>
\t\t<p>Meet the team - our office rats:</p>

\t\t<div class=\"row\">
\t\t\t<div class=\"quarter\">
\t\t\t\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("team/profile.png"), "html", null, true);
        echo "\" alt=\"Boss\" style=\"width:25%\" class=\"circle\">
\t\t\t\t<h3>Thanh Phong</h3>
\t\t\t\t<p>Web Designer</p>
\t\t\t</div>

\t\t\t<div class=\"quarter\">
\t\t\t\t<img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("team/profile.png"), "html", null, true);
        echo "\" alt=\"Boss\" style=\"width:25%\" class=\"circle\">
\t\t\t\t<h3>Gia Khanh</h3>
\t\t\t\t<p>Web Designer</p>
\t\t\t</div>

\t\t\t<div class=\"quarter\">
\t\t\t\t<img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("team/profile.png"), "html", null, true);
        echo "\" alt=\"Boss\" style=\"width:25%\" class=\"circle\">
\t\t\t\t<h3>Minh Quan</h3>
\t\t\t\t<p>Web Designer</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Footer -->
\t<footer class=\"container padding-32 theme-d1 center\">
\t\t<h4>Follow Us</h4>
\t\t<a class=\"text-decoration-none\" href=\"\" title=\"Facebook\">
\t\t\t<img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/facebook.png"), "html", null, true);
        echo "\" width=\"50px\" height=\"50px\">
\t\t</a>
\t\t<a class=\"text-decoration-none\" href=\"\" title=\"Twitter\">
\t\t\t<img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/instagram.png"), "html", null, true);
        echo "\" width=\"50px\" height=\"50px\">
\t\t</a>
\t\t<a class=\"text-decoration-none\" href=\"\" title=\"Instagram\">
\t\t\t<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/twitter.png"), "html", null, true);
        echo "\" width=\"50px\" height=\"50px\">
\t\t</a>
\t\t<p>Copyright</p>
\t</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 65,  161 => 62,  155 => 59,  142 => 49,  133 => 43,  124 => 37,  112 => 28,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!
{% endblock %}

{% block body %}
\t<style>
\t\t.circle {
\t\t\tborder-radius: 50%
\t\t}
\t\t.row {
\t\t\twidth: 100%;
\t\t}
\t\t.quarter {
\t\t\tfloat: left;
\t\t\twidth: 33.333333%;
\t\t}
\t\t.padding-64 {
\t\t\tpadding-top: 64px !important;
\t\t\tpadding-bottom: 64px !important
\t\t}
\t\t.center {
\t\t\ttext-align: center !important
\t\t}
\t</style>
\t<!-- Image Header -->
\t<div class=\"display-container animate-opacity\">
\t\t<img src=\"{{ asset('images/samsung.jpg') }}\" alt=\"Image header\" style=\"width:100%\">
\t</div>
\t<!-- Team Container -->
\t<div class=\"container padding-64 center\">
\t\t<h2>OUR TEAM</h2>
\t\t<p>Meet the team - our office rats:</p>

\t\t<div class=\"row\">
\t\t\t<div class=\"quarter\">
\t\t\t\t<img src=\"{{ asset('team/profile.png') }}\" alt=\"Boss\" style=\"width:25%\" class=\"circle\">
\t\t\t\t<h3>Thanh Phong</h3>
\t\t\t\t<p>Web Designer</p>
\t\t\t</div>

\t\t\t<div class=\"quarter\">
\t\t\t\t<img src=\"{{ asset('team/profile.png') }}\" alt=\"Boss\" style=\"width:25%\" class=\"circle\">
\t\t\t\t<h3>Gia Khanh</h3>
\t\t\t\t<p>Web Designer</p>
\t\t\t</div>

\t\t\t<div class=\"quarter\">
\t\t\t\t<img src=\"{{ asset('team/profile.png') }}\" alt=\"Boss\" style=\"width:25%\" class=\"circle\">
\t\t\t\t<h3>Minh Quan</h3>
\t\t\t\t<p>Web Designer</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Footer -->
\t<footer class=\"container padding-32 theme-d1 center\">
\t\t<h4>Follow Us</h4>
\t\t<a class=\"text-decoration-none\" href=\"\" title=\"Facebook\">
\t\t\t<img src=\"{{ asset('button/facebook.png')}}\" width=\"50px\" height=\"50px\">
\t\t</a>
\t\t<a class=\"text-decoration-none\" href=\"\" title=\"Twitter\">
\t\t\t<img src=\"{{ asset('button/instagram.png')}}\" width=\"50px\" height=\"50px\">
\t\t</a>
\t\t<a class=\"text-decoration-none\" href=\"\" title=\"Instagram\">
\t\t\t<img src=\"{{ asset('button/twitter.png')}}\" width=\"50px\" height=\"50px\">
\t\t</a>
\t\t<p>Copyright</p>
\t</footer>
{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\assignment\\webproject\\templates\\home\\index.html.twig");
    }
}
