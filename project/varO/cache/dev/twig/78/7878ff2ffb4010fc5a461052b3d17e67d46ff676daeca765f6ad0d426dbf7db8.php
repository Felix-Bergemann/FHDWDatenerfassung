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
class __TwigTemplate_b47fee73cd628ef36a45f64ad5c34355aaf8b2421968085a86b0a555b311d1a9 extends Template
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
        echo "    <section class=\"p-4\">
        <form method=\"post\" action=\"details\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            echo "            
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
                // line 7
                echo "                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["client"], "roomIk", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, $context["room"], "intKey", [], "any", false, false, false, 7)))) {
                    // line 8
                    echo "                        ";
                    if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["client"], "owningUserIk", [], "any", false, false, false, 8), (isset($context["userIk"]) || array_key_exists("userIk", $context) ? $context["userIk"] : (function () { throw new RuntimeError('Variable "userIk" does not exist.', 8, $this->source); })()))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["room"], "isPrivate", [], "any", false, false, false, 8), 0)))) {
                        // line 9
                        echo "                        <div class=\"container\">
                            <div class=\"jumbotron\">
                                <div class=\"d-flex justify-content-around mb-2\">
                                    <div class=\"alert-light border rounded m-2 p-2\">
                                        <h3>Client ";
                        // line 13
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "macAdress", [], "any", false, false, false, 13), "html", null, true);
                        echo "</h3>
                                        <h4>aktueller Raum: ";
                        // line 14
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "roomName", [], "any", false, false, false, 14), "html", null, true);
                        echo "</h4>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\"></div>
                                    ";
                        // line 28
                        echo "                                    <div class=\"col-3\"></div>
                                </div>
                                <div class=\"d-flex justify-content-around mb-3 p-1\">
                                    ";
                        // line 31
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["measuredValues"]) || array_key_exists("measuredValues", $context) ? $context["measuredValues"] : (function () { throw new RuntimeError('Variable "measuredValues" does not exist.', 31, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["measuredValue"]) {
                            // line 32
                            echo "                                        <div class=\"text-center mb-2 p-1\">
                                            <h4>";
                            // line 33
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["measuredValue"], "name", [], "any", false, false, false, 33), "html", null, true);
                            echo ":</h4>
                                            <div class=\"col-10 alert alert-light p-1\">
                                                ";
                            // line 35
                            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["measuredValue"], "name", [], "any", false, false, false, 35), "Temperatur"))) {
                                // line 36
                                echo "
                                                ";
                            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                             // line 37
$context["measuredValue"], "name", [], "any", false, false, false, 37), "Luftdruck"))) {
                                // line 38
                                echo "
                                                ";
                            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                             // line 39
$context["measuredValue"], "name", [], "any", false, false, false, 39), "Luftfeuchtigkeit"))) {
                                // line 40
                                echo "
                                                ";
                            }
                            // line 42
                            echo "                                                ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["measuredValue"], "unit", [], "any", false, false, false, 42), "html", null, true);
                            echo "
                                            </div>
                                            <a>
                                                <input type=\"submit\" name=\"client\"  value=\"";
                            // line 45
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "intKey", [], "any", false, false, false, 45), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "intKey", [], "any", false, false, false, 45), "html", null, true);
                            echo "</input>
                                                <h1>
                                                    <i class=\"";
                            // line 47
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["measuredValue"], "icon", [], "any", false, false, false, 47), "html", null, true);
                            echo "\"></i>
                                                </h1>
                                            </a>
                                        </div>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['measuredValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 52
                        echo "                                </div>
                            </div>
                        </div>
                        <hr>
                        ";
                    }
                    // line 57
                    echo "                    ";
                }
                // line 58
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </form>
    </section>
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
        return array (  186 => 60,  180 => 59,  174 => 58,  171 => 57,  164 => 52,  153 => 47,  146 => 45,  139 => 42,  135 => 40,  133 => 39,  130 => 38,  128 => 37,  125 => 36,  123 => 35,  118 => 33,  115 => 32,  111 => 31,  106 => 28,  98 => 14,  94 => 13,  88 => 9,  85 => 8,  82 => 7,  78 => 6,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <section class=\"p-4\">
        <form method=\"post\" action=\"details\">
            {% for client in clients %}            
                {% for room in rooms %}
                    {% if client.roomIk == room.intKey %}
                        {% if ( client.owningUserIk == userIk or room.isPrivate == 0) %}
                        <div class=\"container\">
                            <div class=\"jumbotron\">
                                <div class=\"d-flex justify-content-around mb-2\">
                                    <div class=\"alert-light border rounded m-2 p-2\">
                                        <h3>Client {{client.macAdress}}</h3>
                                        <h4>aktueller Raum: {{room.roomName}}</h4>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\"></div>
                                    {#{% if client.lastupdate == true %}
                                        <div class=\"col-6 m-2 text-center alert alert-success\">
                                            <strong>Daten aktuell</strong>
                                        </div>
                                    {% else %}
                                        <div class=\"col-6 m-2 text-center alert alert-danger\">
                                            <strong> Achtung! </strong> Die ausgelesenen Daten sind nicht aktuell!
                                        </div>
                                    {% endif %}#}
                                    <div class=\"col-3\"></div>
                                </div>
                                <div class=\"d-flex justify-content-around mb-3 p-1\">
                                    {% for measuredValue in measuredValues %}
                                        <div class=\"text-center mb-2 p-1\">
                                            <h4>{{measuredValue.name}}:</h4>
                                            <div class=\"col-10 alert alert-light p-1\">
                                                {% if measuredValue.name == \"Temperatur\" %}

                                                {% elseif measuredValue.name == \"Luftdruck\"%}

                                                {% elseif measuredValue.name == \"Luftfeuchtigkeit\"%}

                                                {% endif %}
                                                {{measuredValue.unit}}
                                            </div>
                                            <a>
                                                <input type=\"submit\" name=\"client\"  value=\"{{client.intKey}}\">{{client.intKey}}</input>
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
                        {% endif %}
                    {% endif %}
                {% endfor %}
            {% endfor %}
        </form>
    </section>
{% endblock %}", "start.html.twig", "C:\\xampp\\htdocs\\FHDWDatenerfassung\\project\\templates\\start.html.twig");
    }
}
