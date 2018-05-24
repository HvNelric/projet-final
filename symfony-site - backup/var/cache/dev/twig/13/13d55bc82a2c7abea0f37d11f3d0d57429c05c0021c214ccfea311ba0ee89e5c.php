<?php

/* user/index.html.twig */
class __TwigTemplate_94cbfcb100222ac48f027a46243b24905c69144c816a327ad88654775b29f6bc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new Twig_Error_Runtime('Variable "controller_name" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <style>
        .users-index{
            background: black;
            padding: 5rem 0;
        }

        .user-img{
            width: 8rem;
            height: 8rem;
            border-radius: 0.8rem 0 0 0.8rem;
            background: var(--bg1);
            overflow: hidden;
            border: 2px solid #fff;
        }

        .user-img img{
            width: 100%;
        }

        .user-content{
            position: relative;
        }

        .user-lastname, .user-destination, .user-comment{
            padding: 0.2rem 1rem;
            margin: 0 0 0.9rem 0;
            background: white;
            display: inline-block;
            border-radius: 0 1rem 1rem 0;
        }

        p.user-destination, p.user-comment{
            display: block;
        }

        .user-comment{
            margin: 0;
            position: absolute;
            bottom: 0;
        }
    </style>

    <div class=\"container\">
        <div class=\"row users-index\">
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 52
            echo "            <div class=\"col-6 col-md-4 mt-4\">
                <div class=\"user-container d-flex justify-content-start\">
                    <div class=\"user-img\">
                        <img class=\"img-fluid\" src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("profil-img/" . twig_get_attribute($this->env, $this->source, $context["user"], "profilImg", array()))), "html", null, true);
            echo "\" alt=\"image du profil\" />
                    </div>
                    <div class=\"user-content\">
                        <h5 class=\"user-lastname\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", array()), "html", null, true);
            echo "</h5>
                        <p class=\"user-destination\"><span>Date : </span>";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "dateDispo", array()), "d/m/Y"), "html", null, true);
            echo "</p>
                        <p class=\"user-comment\">bla bla</p>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 65,  140 => 59,  136 => 58,  130 => 55,  125 => 52,  121 => 51,  74 => 6,  65 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block title %}Hello {{ controller_name }}!{% endblock %}

{% block content %}

    <style>
        .users-index{
            background: black;
            padding: 5rem 0;
        }

        .user-img{
            width: 8rem;
            height: 8rem;
            border-radius: 0.8rem 0 0 0.8rem;
            background: var(--bg1);
            overflow: hidden;
            border: 2px solid #fff;
        }

        .user-img img{
            width: 100%;
        }

        .user-content{
            position: relative;
        }

        .user-lastname, .user-destination, .user-comment{
            padding: 0.2rem 1rem;
            margin: 0 0 0.9rem 0;
            background: white;
            display: inline-block;
            border-radius: 0 1rem 1rem 0;
        }

        p.user-destination, p.user-comment{
            display: block;
        }

        .user-comment{
            margin: 0;
            position: absolute;
            bottom: 0;
        }
    </style>

    <div class=\"container\">
        <div class=\"row users-index\">
            {% for user in users %}
            <div class=\"col-6 col-md-4 mt-4\">
                <div class=\"user-container d-flex justify-content-start\">
                    <div class=\"user-img\">
                        <img class=\"img-fluid\" src=\"{{ asset('profil-img/' ~ user.profilImg) }}\" alt=\"image du profil\" />
                    </div>
                    <div class=\"user-content\">
                        <h5 class=\"user-lastname\">{{ user.prenom }}</h5>
                        <p class=\"user-destination\"><span>Date : </span>{{ user.dateDispo|date('d/m/Y') }}</p>
                        <p class=\"user-comment\">bla bla</p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "user/index.html.twig", "D:\\WF3-WiP\\projethexago\\symfony-site\\templates\\user\\index.html.twig");
    }
}
