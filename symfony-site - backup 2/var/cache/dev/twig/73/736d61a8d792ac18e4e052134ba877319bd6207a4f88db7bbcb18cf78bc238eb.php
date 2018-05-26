<?php

/* admin/index.html.twig */
class __TwigTemplate_78f9d5211f2b73759e48e2a17203ed58a0796c719379a219b7f535fc53c78bf1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

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

        echo "Administration";
        
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
    <div class=\"container\">
        <div class=\"row py-5\">
            <table class=\"table\">
                <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">Séjour</th>
                    <th scpe=\"col\" class=\"text-right\">
                        <a class=\"btn btn-outline-info\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_addsejour");
        echo "\">
                            Ajouter un séjour
                        </a>
                    </th>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td>Prix</td>
                    <td>Date</td>
                </tr>
                </thead>
                <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sejours"]) || array_key_exists("sejours", $context) ? $context["sejours"] : (function () { throw new Twig_Error_Runtime('Variable "sejours" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sejour"]) {
            // line 27
            echo "                <tr>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sejour"], "ville", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sejour"], "prix", array()), "html", null, true);
            echo " €</th>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sejour"], "dateDepart", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>
                        <a class=\"btn btn-outline-danger\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_deletesejour", array("id" => twig_get_attribute($this->env, $this->source, $context["sejour"], "id", array()))), "html", null, true);
            echo "\">
                            Supprimer
                        </a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sejour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </tbody>
            </table>
        </div>

        <div class=\"row py-5\">
            <table class=\"table\">
                <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">Activités</th>
                    <th scpe=\"col\" class=\"text-right\">
                        <a class=\"btn btn-outline-info\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_addactivites");
        echo "\">
                            Ajouter une activitée
                        </a>
                    </th>
                </tr>
                <tr>
                    <td>Activitées</td>
                </tr>
                </thead>
                <tbody>
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new Twig_Error_Runtime('Variable "activities" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 59
            echo "                    <tr>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "name", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn btn-outline-info\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_deleteactivites", array("id" => twig_get_attribute($this->env, $this->source, $context["activity"], "id", array()))), "html", null, true);
            echo "\">
                                Supprimer
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </tbody>
            </table>
        </div>

        <div class=\"row py-5\">
            <table class=\"table\">
                <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">Régions</th>
                    <th scpe=\"col\" class=\"text-right\">
                        <a class=\"btn btn-outline-info\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_addregion");
        echo "\">
                            Ajouter une région
                        </a>
                    </th>
                </tr>
                <tr>
                    <th>Nom</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) || array_key_exists("regions", $context) ? $context["regions"] : (function () { throw new Twig_Error_Runtime('Variable "regions" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 89
            echo "                    <tr>
                        <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "region", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn btn-outline-info\" href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_deleteregion", array("id" => twig_get_attribute($this->env, $this->source, $context["region"], "id", array()))), "html", null, true);
            echo "\">
                                Supprimer
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                </tbody>
            </table>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 98,  215 => 92,  210 => 90,  207 => 89,  203 => 88,  190 => 78,  178 => 68,  166 => 62,  161 => 60,  158 => 59,  154 => 58,  141 => 48,  129 => 38,  117 => 32,  112 => 30,  108 => 29,  104 => 28,  101 => 27,  97 => 26,  82 => 14,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block title %}Administration{% endblock %}

{% block content %}

    <div class=\"container\">
        <div class=\"row py-5\">
            <table class=\"table\">
                <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">Séjour</th>
                    <th scpe=\"col\" class=\"text-right\">
                        <a class=\"btn btn-outline-info\" href=\"{{ path('app_admin_addsejour') }}\">
                            Ajouter un séjour
                        </a>
                    </th>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td>Prix</td>
                    <td>Date</td>
                </tr>
                </thead>
                <tbody>
                {% for sejour in sejours %}
                <tr>
                    <td>{{ sejour.ville }}</td>
                    <td>{{ sejour.prix }} €</th>
                    <td>{{ sejour.dateDepart|date('d/m/Y') }}</td>
                    <td>
                        <a class=\"btn btn-outline-danger\" href=\"{{ path('app_admin_deletesejour', {id: sejour.id}) }}\">
                            Supprimer
                        </a>
                    </td>
                </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>

        <div class=\"row py-5\">
            <table class=\"table\">
                <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">Activités</th>
                    <th scpe=\"col\" class=\"text-right\">
                        <a class=\"btn btn-outline-info\" href=\"{{ path('app_admin_addactivites') }}\">
                            Ajouter une activitée
                        </a>
                    </th>
                </tr>
                <tr>
                    <td>Activitées</td>
                </tr>
                </thead>
                <tbody>
                {% for activity in activities %}
                    <tr>
                        <td>{{ activity.name }}</td>
                        <td>
                            <a class=\"btn btn-outline-info\" href=\"{{ path('app_admin_deleteactivites', {id: activity.id}) }}\">
                                Supprimer
                            </a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>

        <div class=\"row py-5\">
            <table class=\"table\">
                <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">Régions</th>
                    <th scpe=\"col\" class=\"text-right\">
                        <a class=\"btn btn-outline-info\" href=\"{{ path('app_admin_addregion') }}\">
                            Ajouter une région
                        </a>
                    </th>
                </tr>
                <tr>
                    <th>Nom</th>
                </tr>
                </thead>
                <tbody>
                {% for region in regions %}
                    <tr>
                        <td>{{ region.region }}</td>
                        <td>
                            <a class=\"btn btn-outline-info\" href=\"{{ path('app_admin_deleteregion', {id: region.id}) }}\">
                                Supprimer
                            </a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

{% endblock %}
", "admin/index.html.twig", "D:\\WF3-WiP\\projethexago\\symfony-site\\templates\\admin\\index.html.twig");
    }
}
