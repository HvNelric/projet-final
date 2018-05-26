<?php

/* sejour/detail.html.twig */
class __TwigTemplate_a8ae97844b35a1b6d1d29e4c05be28fea22f3d20aab94e5f7a06f3b07518c110 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "sejour/detail.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sejour/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sejour/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container py-5\">
        <div class=\"row mt-5\">
            <div class=\"col-12\">
                <img class=\"img-fluid\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("sejour-img/" . twig_get_attribute($this->env, $this->source, (isset($context["sejour"]) || array_key_exists("sejour", $context) ? $context["sejour"] : (function () { throw new Twig_Error_Runtime('Variable "sejour" does not exist.', 7, $this->source); })()), "villeImg", array()))), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"col-12\">
                <h5 class=\"text-info mt-2\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sejour"]) || array_key_exists("sejour", $context) ? $context["sejour"] : (function () { throw new Twig_Error_Runtime('Variable "sejour" does not exist.', 10, $this->source); })()), "ville", array()), "html", null, true);
        echo "</h5>
                <p>prix : ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sejour"]) || array_key_exists("sejour", $context) ? $context["sejour"] : (function () { throw new Twig_Error_Runtime('Variable "sejour" does not exist.', 11, $this->source); })()), "prix", array()), "html", null, true);
        echo "</p>
                <p>Date : ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sejour"]) || array_key_exists("sejour", $context) ? $context["sejour"] : (function () { throw new Twig_Error_Runtime('Variable "sejour" does not exist.', 12, $this->source); })()), "dateDepart", array()), "d/m/Y à H:m"), "html", null, true);
        echo "</p>
                <p>Hebergement : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sejour"]) || array_key_exists("sejour", $context) ? $context["sejour"] : (function () { throw new Twig_Error_Runtime('Variable "sejour" does not exist.', 13, $this->source); })()), "hebergement", array()), "html", null, true);
        echo "</p>
                <p>Transport : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sejour"]) || array_key_exists("sejour", $context) ? $context["sejour"] : (function () { throw new Twig_Error_Runtime('Variable "sejour" does not exist.', 14, $this->source); })()), "transport", array()), "html", null, true);
        echo "</p>
                <p>Durée : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sejour"]) || array_key_exists("sejour", $context) ? $context["sejour"] : (function () { throw new Twig_Error_Runtime('Variable "sejour" does not exist.', 15, $this->source); })()), "duree", array()), "html", null, true);
        echo "</p>
                <p>Description : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sejour"]) || array_key_exists("sejour", $context) ? $context["sejour"] : (function () { throw new Twig_Error_Runtime('Variable "sejour" does not exist.', 16, $this->source); })()), "description", array()), "html", null, true);
        echo "</p>
                <p>Activité : ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sejour"]) || array_key_exists("sejour", $context) ? $context["sejour"] : (function () { throw new Twig_Error_Runtime('Variable "sejour" does not exist.', 17, $this->source); })()), "activitesSejour", array()), "html", null, true);
        echo "</p>
                <p>Region : ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sejour"]) || array_key_exists("sejour", $context) ? $context["sejour"] : (function () { throw new Twig_Error_Runtime('Variable "sejour" does not exist.', 18, $this->source); })()), "regionSejour", array()), "html", null, true);
        echo "</p>
                <div>
                    <button class=\"btn btn-info\">Choisir</button>
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
        return "sejour/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 18,  92 => 17,  88 => 16,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  58 => 7,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block content %}
    <div class=\"container py-5\">
        <div class=\"row mt-5\">
            <div class=\"col-12\">
                <img class=\"img-fluid\" src=\"{{ asset('sejour-img/' ~ sejour.villeImg) }}\" alt=\"\">
            </div>
            <div class=\"col-12\">
                <h5 class=\"text-info mt-2\">{{ sejour.ville }}</h5>
                <p>prix : {{ sejour.prix }}</p>
                <p>Date : {{ sejour.dateDepart|date('d/m/Y à H:m') }}</p>
                <p>Hebergement : {{ sejour.hebergement }}</p>
                <p>Transport : {{ sejour.transport }}</p>
                <p>Durée : {{ sejour.duree }}</p>
                <p>Description : {{ sejour.description }}</p>
                <p>Activité : {{ sejour.activitesSejour }}</p>
                <p>Region : {{ sejour.regionSejour }}</p>
                <div>
                    <button class=\"btn btn-info\">Choisir</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "sejour/detail.html.twig", "D:\\WF3-WiP\\projethexago\\symfony-site\\templates\\sejour\\detail.html.twig");
    }
}
