<?php

/* sejour/index.html.twig */
class __TwigTemplate_12c15e6e983fa91b178a3b625c77cf5402fd8024647eb87441c9c31a1b3fd7bf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "sejour/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sejour/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sejour/index.html.twig"));

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
        echo "
    <div class=\"container\">
        <div class=\"row mt-5\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sejours"]) || array_key_exists("sejours", $context) ? $context["sejours"] : (function () { throw new Twig_Error_Runtime('Variable "sejours" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sejour"]) {
            // line 8
            echo "                <div class=\"col-6 col-md-4\">
                    <div class=\"card my-card\">
                        <img class=\"card-img-top\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("sejour-img/" . twig_get_attribute($this->env, $this->source, $context["sejour"], "villeImg", array()))), "html", null, true);
            echo "\" alt=\"destination\" />
                        <div class=\"card-body clearfix\">
                            <h5 class=\"card-title\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sejour"], "ville", array()), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sejour"], "description", array()), "html", null, true);
            echo "</p>
                            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sejour_details", array("id" => twig_get_attribute($this->env, $this->source, $context["sejour"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info float-right my-btn\">
                                + détails
                            </a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sejour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sejour/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 21,  79 => 14,  75 => 13,  71 => 12,  66 => 10,  62 => 8,  58 => 7,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block content %}

    <div class=\"container\">
        <div class=\"row mt-5\">
            {% for sejour in sejours %}
                <div class=\"col-6 col-md-4\">
                    <div class=\"card my-card\">
                        <img class=\"card-img-top\" src=\"{{ asset('sejour-img/' ~ sejour.villeImg) }}\" alt=\"destination\" />
                        <div class=\"card-body clearfix\">
                            <h5 class=\"card-title\">{{ sejour.ville }}</h5>
                            <p class=\"card-text\">{{ sejour.description }}</p>
                            <a href=\"{{ path('app_sejour_details', {id: sejour.id}) }}\" class=\"btn btn-info float-right my-btn\">
                                + détails
                            </a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>

{% endblock %}
", "sejour/index.html.twig", "D:\\WF3-WiP\\projethexago\\symfony-site\\templates\\sejour\\index.html.twig");
    }
}
