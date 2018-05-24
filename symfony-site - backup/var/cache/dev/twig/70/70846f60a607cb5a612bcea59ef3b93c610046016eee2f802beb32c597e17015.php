<?php

/* layout.html.twig */
class __TwigTemplate_1ac1f01b84a0aeeec0ad751bf2629c0d40d5109af35d72f06d5004c561118869 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <nav class=\"navbar navbar-expand-md navbar-dark bg-secondary\">
        <div class=\"container navbar-nav\">
            <a class=\"navbar-brand\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index_index");
        echo "\">
                Hexago
            </a>
            <ul class=\"navbar-nav\">
                ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_index");
            echo "\">Admin</a>
                    </li>

                ";
        }
        // line 17
        echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\"
                       href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sejour_index");
        echo "\">
                        Sejours
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"
                       href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">
                        Utilisateurs
                    </a>
                </li>
                ";
        // line 30
        echo "                ";
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "user", array()))) {
            // line 31
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sejour_index");
            echo "\">
                            Sejours
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_register");
            echo "\">
                            Inscription
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_login");
            echo "\">
                            Connexion
                        </a>
                    </li>
                ";
        } else {
            // line 50
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_index");
            echo "\">
                            ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 52, $this->source); })()), "user", array()), "prenom", array()), "html", null, true);
            echo "
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_logout");
            echo "\">
                            Déconnexion
                        </a>
                    </li>
                ";
        }
        // line 62
        echo "            </ul>
        </div>
    </nav>
    <div class=\"container\">
        ";
        // line 67
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 67, $this->source); })()), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 68
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 69
                echo "                ";
                // line 70
                echo "                ";
                if (($context["type"] == "error")) {
                    // line 71
                    echo "                    ";
                    $context["type"] = "danger";
                    // line 72
                    echo "                ";
                }
                // line 73
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 74
                echo $context["flash"];
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 79
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 78,  203 => 79,  200 => 78,  194 => 77,  185 => 74,  180 => 73,  177 => 72,  174 => 71,  171 => 70,  169 => 69,  164 => 68,  159 => 67,  153 => 62,  145 => 57,  137 => 52,  133 => 51,  130 => 50,  122 => 45,  113 => 39,  104 => 33,  100 => 31,  97 => 30,  90 => 25,  81 => 19,  77 => 17,  70 => 13,  67 => 12,  65 => 11,  58 => 7,  54 => 5,  45 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# layout.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
    <nav class=\"navbar navbar-expand-md navbar-dark bg-secondary\">
        <div class=\"container navbar-nav\">
            <a class=\"navbar-brand\" href=\"{{ path('app_index_index') }}\">
                Hexago
            </a>
            <ul class=\"navbar-nav\">
                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_admin_index') }}\">Admin</a>
                    </li>

                {% endif %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\"
                       href=\"{{ path('app_sejour_index') }}\">
                        Sejours
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"
                       href=\"{{ path('app_user_index') }}\">
                        Utilisateurs
                    </a>
                </li>
                {# app.user : l'utilisateur connecté ou null #}
                {% if app.user is null %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"{{ path('app_sejour_index') }}\">
                            Sejours
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"{{ path('app_security_register') }}\">
                            Inscription
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"{{ path('app_security_login') }}\">
                            Connexion
                        </a>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_profil_index') }}\">
                            {{ app.user.prenom }}
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"{{ path('app_security_logout') }}\">
                            Déconnexion
                        </a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </nav>
    <div class=\"container\">
        {# affichage des messages flash #}
        {% for type, flashes in app.session.flashBag.all %}
            {% for flash in flashes %}
                {# pour la classe alert-danger du twitter bootstrap #}
                {% if type == 'error' %}
                    {% set type = 'danger' %}
                {% endif %}
                <div class=\"alert alert-{{ type }}\">
                    {{ flash|raw }}
                </div>
            {% endfor %}
        {% endfor %}
        {% block content %}{% endblock %}
    </div>
{% endblock %}", "layout.html.twig", "D:\\WF3-WiP\\projethexago\\symfony-site\\templates\\layout.html.twig");
    }
}
