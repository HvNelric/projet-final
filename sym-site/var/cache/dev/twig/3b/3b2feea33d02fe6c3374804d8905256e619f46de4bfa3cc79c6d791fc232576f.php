<?php

/* layout.html.twig */
class __TwigTemplate_dac6dfdb5deb5c00cfe0dad2e1956296bda16cf21fd5df699b8ca99364ed2765 extends Twig_Template
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
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 6
            echo "        <nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
            <div class=\"container navbar-nav\">
                <a class=\"navbar-brand\" href=\"#\">Admin</a>
                <div class=\"navbar-collapse\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search_search");
            echo "\">
                                Gestion catégories
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logged_my-profil");
            echo "\">
                                Gestion articles
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    ";
        }
        // line 26
        echo "    <nav class=\"navbar navbar-expand-md navbar-dark bg-secondary\">
        <div class=\"container navbar-nav\">
            <a class=\"navbar-brand\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("index");
        echo "\">
                Hexago
            </a>
            <ul class=\"navbar-nav\">
                ";
        // line 33
        echo "                ";
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 33, $this->source); })()), "user", array()))) {
            // line 34
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("register");
            echo "\">
                            Inscription
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login");
            echo "\">
                            Connexion
                        </a>
                    </li>
                ";
        } else {
            // line 47
            echo "                    <p>connecté</p>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\">
                            ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 50, $this->source); })()), "user", array()), "html", null, true);
            echo "
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_logout");
            echo "\">
                            Déconnexion
                        </a>
                    </li>
                ";
        }
        // line 60
        echo "            </ul>
        </div>
    </nav>
    <div class=\"container\">
        ";
        // line 65
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 65, $this->source); })()), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 66
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 67
                echo "                ";
                // line 68
                echo "                ";
                if (($context["type"] == "error")) {
                    // line 69
                    echo "                    ";
                    $context["type"] = "danger";
                    // line 70
                    echo "                ";
                }
                // line 71
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 72
                echo $context["flash"];
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
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
        return array (  202 => 76,  191 => 77,  188 => 76,  182 => 75,  173 => 72,  168 => 71,  165 => 70,  162 => 69,  159 => 68,  157 => 67,  152 => 66,  147 => 65,  141 => 60,  133 => 55,  125 => 50,  120 => 47,  112 => 42,  103 => 36,  99 => 34,  96 => 33,  89 => 28,  85 => 26,  73 => 17,  65 => 12,  57 => 6,  54 => 5,  45 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# layout.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
    {% if is_granted('ROLE_ADMIN') %}
        <nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
            <div class=\"container navbar-nav\">
                <a class=\"navbar-brand\" href=\"#\">Admin</a>
                <div class=\"navbar-collapse\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_search_search') }}\">
                                Gestion catégories
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_logged_my-profil') }}\">
                                Gestion articles
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    {% endif %}
    <nav class=\"navbar navbar-expand-md navbar-dark bg-secondary\">
        <div class=\"container navbar-nav\">
            <a class=\"navbar-brand\" href=\"{{ url('index') }}\">
                Hexago
            </a>
            <ul class=\"navbar-nav\">
                {# app.user : l'utilisateur connecté ou null #}
                {% if app.user is null %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"{{ url('register') }}\">
                            Inscription
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"{{ url('login') }}\">
                            Connexion
                        </a>
                    </li>
                {% else %}
                    <p>connecté</p>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\">
                            {{ app.user }}
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
{% endblock %}", "layout.html.twig", "C:\\NGO_works\\projethexago\\sym-site\\templates\\layout.html.twig");
    }
}
