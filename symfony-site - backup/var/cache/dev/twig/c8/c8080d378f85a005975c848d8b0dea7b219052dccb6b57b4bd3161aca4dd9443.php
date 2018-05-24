<?php

/* logged/index.html.twig */
class __TwigTemplate_178627d484ed22c0a89d9fc4a20cc7ef5f4c54278b90bd3a71312985b244999c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "logged/index.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "logged/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "logged/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"container\">
        <h1 class=\"text-center text-info mt-5\">Profil de ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userLogged"]) || array_key_exists("userLogged", $context) ? $context["userLogged"] : (function () { throw new Twig_Error_Runtime('Variable "userLogged" does not exist.', 6, $this->source); })()), "prenom", array()), "html", null, true);
        echo "</h1>
        <div class=\"row p-5\">
            <div class=\"col-12\">
                <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_editimg");
        echo "\">
                    <img class=\"img-fluid\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("profil-img/" . twig_get_attribute($this->env, $this->source, (isset($context["userLogged"]) || array_key_exists("userLogged", $context) ? $context["userLogged"] : (function () { throw new Twig_Error_Runtime('Variable "userLogged" does not exist.', 10, $this->source); })()), "getProfilImg", array()))), "html", null, true);
        echo "\" alt=\"\" />
                </a>
                <a class=\"btn btn-info text-right mt-2\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_editimg");
        echo "\">
                    Changer de photo
                </a>
            </div>
            </div>
            <div class=\"col-12\">
                <h4 class=\"mt-3\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userLogged"]) || array_key_exists("userLogged", $context) ? $context["userLogged"] : (function () { throw new Twig_Error_Runtime('Variable "userLogged" does not exist.', 18, $this->source); })()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userLogged"]) || array_key_exists("userLogged", $context) ? $context["userLogged"] : (function () { throw new Twig_Error_Runtime('Variable "userLogged" does not exist.', 18, $this->source); })()), "nom", array()), "html", null, true);
        echo "</h4>
                <a class=\"btn btn-info\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_editname");
        echo "\">Modifier</a>
                <p class=\"mt-3\">email : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userLogged"]) || array_key_exists("userLogged", $context) ? $context["userLogged"] : (function () { throw new Twig_Error_Runtime('Variable "userLogged" does not exist.', 20, $this->source); })()), "email", array()), "html", null, true);
        echo "</p>
                <a class=\"btn btn-info\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_editemail");
        echo "\">modifier l'email</a>
                <p class=\"mt-3\">age : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userLogged"]) || array_key_exists("userLogged", $context) ? $context["userLogged"] : (function () { throw new Twig_Error_Runtime('Variable "userLogged" does not exist.', 22, $this->source); })()), "age", array()), "html", null, true);
        echo " <a class=\"btn btn-info\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_editage");
        echo "\">modifier l'age</a></p>
                <p class=\"mt-3\">Disponibilité : du <span class=\"text-info\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userLogged"]) || array_key_exists("userLogged", $context) ? $context["userLogged"] : (function () { throw new Twig_Error_Runtime('Variable "userLogged" does not exist.', 23, $this->source); })()), "getDateDispo", array()), "d/m/Y"), "html", null, true);
        echo "</span> au <span class=\"text-info\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userLogged"]) || array_key_exists("userLogged", $context) ? $context["userLogged"] : (function () { throw new Twig_Error_Runtime('Variable "userLogged" does not exist.', 23, $this->source); })()), "DateFin", array()), "d/m/Y"), "html", null, true);
        echo "</span>
                    <a class=\"btn btn-info\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_editdate");
        echo "\">modifier les dates</a>
                </p>
            </div>
            <div class=\"col-12 p-5\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th scope=\"row\">Activités : </th>
                            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userLogged"]) || array_key_exists("userLogged", $context) ? $context["userLogged"] : (function () { throw new Twig_Error_Runtime('Variable "userLogged" does not exist.', 32, $this->source); })()), "activites", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 33
            echo "                                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "name", array()), "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                                <td>
                                    <a class=\"btn btn-info\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_editactivities");
        echo "\">modifier vos activités</a>
                                </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Régions : </th>
                            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userLogged"]) || array_key_exists("userLogged", $context) ? $context["userLogged"] : (function () { throw new Twig_Error_Runtime('Variable "userLogged" does not exist.', 41, $this->source); })()), "region", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 42
            echo "                                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "region", array()), "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <div class=\"form-btn-group text-right\">
        <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_delete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["userLogged"]) || array_key_exists("userLogged", $context) ? $context["userLogged"] : (function () { throw new Twig_Error_Runtime('Variable "userLogged" does not exist.', 50, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger mt-4\">
            Supprimer le compte
        </a>

    </div>
    ";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["userLogged"]) || array_key_exists("userLogged", $context) ? $context["userLogged"] : (function () { throw new Twig_Error_Runtime('Variable "userLogged" does not exist.', 55, $this->source); })()));
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "logged/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 55,  166 => 50,  158 => 44,  149 => 42,  145 => 41,  137 => 36,  134 => 35,  125 => 33,  121 => 32,  110 => 24,  104 => 23,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  80 => 18,  71 => 12,  66 => 10,  62 => 9,  56 => 6,  53 => 5,  44 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# logged/index.html.twig #}
{% extends 'layout.html.twig' %}

{% block content %}
    <div class=\"container\">
        <h1 class=\"text-center text-info mt-5\">Profil de {{userLogged.prenom  }}</h1>
        <div class=\"row p-5\">
            <div class=\"col-12\">
                <a href=\"{{ path('app_profil_editimg') }}\">
                    <img class=\"img-fluid\" src=\"{{ asset('profil-img/' ~ userLogged.getProfilImg) }}\" alt=\"\" />
                </a>
                <a class=\"btn btn-info text-right mt-2\" href=\"{{ path('app_profil_editimg') }}\">
                    Changer de photo
                </a>
            </div>
            </div>
            <div class=\"col-12\">
                <h4 class=\"mt-3\">{{ userLogged.prenom }} {{ userLogged.nom }}</h4>
                <a class=\"btn btn-info\" href=\"{{ path('app_profil_editname') }}\">Modifier</a>
                <p class=\"mt-3\">email : {{ userLogged.email }}</p>
                <a class=\"btn btn-info\" href=\"{{ path('app_profil_editemail') }}\">modifier l'email</a>
                <p class=\"mt-3\">age : {{ userLogged.age }} <a class=\"btn btn-info\" href=\"{{ path('app_profil_editage') }}\">modifier l'age</a></p>
                <p class=\"mt-3\">Disponibilité : du <span class=\"text-info\">{{ userLogged.getDateDispo|date('d/m/Y') }}</span> au <span class=\"text-info\">{{ userLogged.DateFin|date('d/m/Y') }}</span>
                    <a class=\"btn btn-info\" href=\"{{ path('app_profil_editdate') }}\">modifier les dates</a>
                </p>
            </div>
            <div class=\"col-12 p-5\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th scope=\"row\">Activités : </th>
                            {% for activity in userLogged.activites %}
                                <td>{{ activity.name }}</td>
                            {% endfor %}
                                <td>
                                    <a class=\"btn btn-info\" href=\"{{ path('app_profil_editactivities') }}\">modifier vos activités</a>
                                </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Régions : </th>
                            {% for region in userLogged.region %}
                                <td>{{ region.region }}</td>
                            {% endfor %}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <div class=\"form-btn-group text-right\">
        <a href=\"{{ path('app_profil_delete', {id: userLogged.id}) }}\" class=\"btn btn-danger mt-4\">
            Supprimer le compte
        </a>

    </div>
    {{ dump(userLogged) }}
    </div>
{% endblock %}", "logged/index.html.twig", "D:\\WF3-WiP\\projethexago\\symfony-site\\templates\\logged\\index.html.twig");
    }
}
