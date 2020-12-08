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

/* start.html.twig */
class __TwigTemplate_0d1c5409452f3e3fc7fd6e1078ab2ffe1fe7cdd82fda116add45763848ba9bc0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "start.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "start.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "start.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section class=\"p-4\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 5
            echo "        <div class=\"container\">
            <div class=\"jumbotron\">
                <div class=\"d-flex justify-content-around mb-2\">
                    <span class=\"alert-light border rounded m-2 p-2\">
                        <h3>Client ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</h3>
                    </span>
                </div>
                <div class=\"row\">
                    <div class=\"col-3\"></div>
                    ";
            // line 14
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["client"], "lastupdate", [], "any", false, false, false, 14), true))) {
                // line 15
                echo "                        <div class=\"col-6 m-2 text-center alert alert-success\">
                            <strong>Daten aktuell</strong>
                        </div>
                    ";
            } else {
                // line 19
                echo "                        <div class=\"col-6 m-2 text-center alert alert-danger\">
                            <strong> Achtung! </strong> Die ausgelesenen Daten sind nicht aktuell!
                        </div>
                    ";
            }
            // line 23
            echo "                    <div class=\"col-3\"></div>
                </div>
                <div class=\"d-flex justify-content-around mb-3 p-1\">
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["measuredValues"]) || array_key_exists("measuredValues", $context) ? $context["measuredValues"] : (function () { throw new RuntimeError('Variable "measuredValues" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["measuredValue"]) {
                // line 27
                echo "                        <div class=\"text-center mb-2 p-1\">
                            <h4>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["measuredValue"], "name", [], "any", false, false, false, 28), "html", null, true);
                echo ":</h4>
                            <div class=\"col-10 alert alert-light p-1\">
                                ";
                // line 30
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["measuredValue"], "name", [], "any", false, false, false, 30), "Temperatur"))) {
                    // line 31
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "temperature", [], "any", false, false, false, 31), "html", null, true);
                    echo "
                                ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 32
$context["measuredValue"], "name", [], "any", false, false, false, 32), "Luftdruck"))) {
                    // line 33
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "airpresure", [], "any", false, false, false, 33), "html", null, true);
                    echo "
                                ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 34
$context["measuredValue"], "name", [], "any", false, false, false, 34), "Luftfeuchtigkeit"))) {
                    // line 35
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "humidity", [], "any", false, false, false, 35), "html", null, true);
                    echo "
                                ";
                }
                // line 37
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["measuredValue"], "unit", [], "any", false, false, false, 37), "html", null, true);
                echo "
                            </div>
                            <a href=\"details\">
                                <h1>
                                    <i class=\"";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["measuredValue"], "icon", [], "any", false, false, false, 41), "html", null, true);
                echo "\"></i>
                                </h1>
                            </a>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['measuredValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                </div>
            </div>
        </div>
        <hr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 51,  161 => 46,  150 => 41,  142 => 37,  136 => 35,  134 => 34,  129 => 33,  127 => 32,  122 => 31,  120 => 30,  115 => 28,  112 => 27,  108 => 26,  103 => 23,  97 => 19,  91 => 15,  89 => 14,  81 => 9,  75 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<section class=\"p-4\">
        {% for client in clients %}
        <div class=\"container\">
            <div class=\"jumbotron\">
                <div class=\"d-flex justify-content-around mb-2\">
                    <span class=\"alert-light border rounded m-2 p-2\">
                        <h3>Client {{client.name}}</h3>
                    </span>
                </div>
                <div class=\"row\">
                    <div class=\"col-3\"></div>
                    {% if client.lastupdate == true %}
                        <div class=\"col-6 m-2 text-center alert alert-success\">
                            <strong>Daten aktuell</strong>
                        </div>
                    {% else %}
                        <div class=\"col-6 m-2 text-center alert alert-danger\">
                            <strong> Achtung! </strong> Die ausgelesenen Daten sind nicht aktuell!
                        </div>
                    {% endif %}
                    <div class=\"col-3\"></div>
                </div>
                <div class=\"d-flex justify-content-around mb-3 p-1\">
                    {% for measuredValue in measuredValues %}
                        <div class=\"text-center mb-2 p-1\">
                            <h4>{{measuredValue.name}}:</h4>
                            <div class=\"col-10 alert alert-light p-1\">
                                {% if measuredValue.name == \"Temperatur\" %}
                                    {{client.temperature}}
                                {% elseif measuredValue.name == \"Luftdruck\"%}
                                    {{client.airpresure}}
                                {% elseif measuredValue.name == \"Luftfeuchtigkeit\"%}
                                    {{client.humidity}}
                                {% endif %}
                                {{measuredValue.unit}}
                            </div>
                            <a href=\"details\">
                                <h1>
                                    <i class=\"{{measuredValue.icon}}\"></i>
                                </h1>
                            </a>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
        <hr>
        {% endfor %}
    </section>
{% endblock %}", "start.html.twig", "C:\\xampp\\htdocs\\FHDWDatenerfassung\\project\\templates\\start.html.twig");
    }
}
