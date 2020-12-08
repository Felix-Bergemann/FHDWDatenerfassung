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
class __TwigTemplate_9734d1b1e2ed29e932dea0d36ab65fa963a0a7c6ced7ee364d27da61c4af134d extends Template
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
            // line 6
            echo "                ";
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
                        // line 19
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["currentClientValues"]) || array_key_exists("currentClientValues", $context) ? $context["currentClientValues"] : (function () { throw new RuntimeError('Variable "currentClientValues" does not exist.', 19, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["clientValue"]) {
                            // line 20
                            echo "                                            ";
                            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["clientValue"], "clientIk", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, $context["client"], "intKey", [], "any", false, false, false, 20)))) {
                                // line 21
                                echo "                                                ";
                                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["clientValue"], "recordDate", [], "any", false, false, false, 21), (isset($context["minDate"]) || array_key_exists("minDate", $context) ? $context["minDate"] : (function () { throw new RuntimeError('Variable "minDate" does not exist.', 21, $this->source); })())))) {
                                    // line 22
                                    echo "                                                    <div class=\"col-6 m-2 text-center alert alert-success\">
                                                        <strong>Daten aktuell</strong>
                                                    </div>
                                                ";
                                } else {
                                    // line 26
                                    echo "                                                    <div class=\"col-6 m-2 text-center alert alert-danger\">
                                                        <strong> Achtung! </strong> Die ausgelesenen Daten sind nicht aktuell!
                                                    </div>
                                                ";
                                }
                                // line 30
                                echo "                                            ";
                            }
                            // line 31
                            echo "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clientValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        echo "                                    <div class=\"col-3\"></div>
                                </div>
                                <div class=\"d-flex justify-content-around mb-3 p-1\">
                                    ";
                        // line 35
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["measuredValues"]) || array_key_exists("measuredValues", $context) ? $context["measuredValues"] : (function () { throw new RuntimeError('Variable "measuredValues" does not exist.', 35, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["measuredValue"]) {
                            // line 36
                            echo "                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["currentClientValues"]) || array_key_exists("currentClientValues", $context) ? $context["currentClientValues"] : (function () { throw new RuntimeError('Variable "currentClientValues" does not exist.', 36, $this->source); })()));
                            foreach ($context['_seq'] as $context["_key"] => $context["clientValue"]) {
                                // line 37
                                echo "                                            ";
                                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["clientValue"], "clientIk", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, $context["client"], "intKey", [], "any", false, false, false, 37)))) {
                                    // line 38
                                    echo "                                            <div class=\"text-center mb-2 p-1\">
                                                <h4>";
                                    // line 39
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["measuredValue"], "name", [], "any", false, false, false, 39), "html", null, true);
                                    echo ":</h4>
                                                <div class=\"alert alert-light p-1\">
                                                    ";
                                    // line 41
                                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["measuredValue"], "name", [], "any", false, false, false, 41), "Temperatur"))) {
                                        // line 42
                                        echo "                                                            ";
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clientValue"], "temperature", [], "any", false, false, false, 42), "html", null, true);
                                        echo "
                                                    ";
                                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                                     // line 43
$context["measuredValue"], "name", [], "any", false, false, false, 43), "Luftdruck"))) {
                                        // line 44
                                        echo "                                                            ";
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clientValue"], "airPressure", [], "any", false, false, false, 44), "html", null, true);
                                        echo "
                                                    ";
                                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                                     // line 45
$context["measuredValue"], "name", [], "any", false, false, false, 45), "Luftfeuchtigkeit"))) {
                                        // line 46
                                        echo "                                                            ";
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clientValue"], "humidity", [], "any", false, false, false, 46), "html", null, true);
                                        echo "
                                                    ";
                                    }
                                    // line 48
                                    echo "                                                    ";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["measuredValue"], "unit", [], "any", false, false, false, 48), "html", null, true);
                                    echo "
                                                </div>
                                                <h1>
                                                    <i class=\"";
                                    // line 51
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["measuredValue"], "icon", [], "any", false, false, false, 51), "html", null, true);
                                    echo "\"></i>                                                </h1>
                                                </h1>
                                            </div>
                                             ";
                                }
                                // line 55
                                echo "                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clientValue'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 56
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['measuredValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 57
                        echo "                                </div>
                                <form action=\"details\" method=\"POST\">
                                    <div class=\"icon-input-btn text-center\">
                                        <input type=\"hidden\" name=\"client\" value=\"";
                        // line 60
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "intKey", [], "any", false, false, false, 60), "html", null, true);
                        echo "\">
                                        <input type=\"hidden\" name=\"room\" value=\"";
                        // line 61
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "intKey", [], "any", false, false, false, 61), "html", null, true);
                        echo "\">
                                        <button type=\"submit\" class=\"btn btn-info btn-lg\">Messverlauf anzeigen</i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <hr>
                        ";
                    }
                    // line 69
                    echo "                    ";
                }
                // line 70
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
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
        return array (  244 => 72,  238 => 71,  232 => 70,  229 => 69,  218 => 61,  214 => 60,  209 => 57,  203 => 56,  197 => 55,  190 => 51,  183 => 48,  177 => 46,  175 => 45,  170 => 44,  168 => 43,  163 => 42,  161 => 41,  156 => 39,  153 => 38,  150 => 37,  145 => 36,  141 => 35,  136 => 32,  130 => 31,  127 => 30,  121 => 26,  115 => 22,  112 => 21,  109 => 20,  105 => 19,  97 => 14,  93 => 13,  87 => 9,  84 => 8,  81 => 7,  76 => 6,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
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
                                        {% for clientValue in currentClientValues %}
                                            {% if clientValue.clientIk == client.intKey %}
                                                {% if clientValue.recordDate > minDate %}
                                                    <div class=\"col-6 m-2 text-center alert alert-success\">
                                                        <strong>Daten aktuell</strong>
                                                    </div>
                                                {% else %}
                                                    <div class=\"col-6 m-2 text-center alert alert-danger\">
                                                        <strong> Achtung! </strong> Die ausgelesenen Daten sind nicht aktuell!
                                                    </div>
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                    <div class=\"col-3\"></div>
                                </div>
                                <div class=\"d-flex justify-content-around mb-3 p-1\">
                                    {% for measuredValue in measuredValues %}
                                        {% for clientValue in currentClientValues %}
                                            {% if clientValue.clientIk == client.intKey %}
                                            <div class=\"text-center mb-2 p-1\">
                                                <h4>{{measuredValue.name}}:</h4>
                                                <div class=\"alert alert-light p-1\">
                                                    {% if measuredValue.name == \"Temperatur\" %}
                                                            {{clientValue.temperature}}
                                                    {% elseif measuredValue.name == \"Luftdruck\"%}
                                                            {{clientValue.airPressure}}
                                                    {% elseif measuredValue.name == \"Luftfeuchtigkeit\"%}
                                                            {{clientValue.humidity}}
                                                    {% endif %}
                                                    {{measuredValue.unit}}
                                                </div>
                                                <h1>
                                                    <i class=\"{{measuredValue.icon}}\"></i>                                                </h1>
                                                </h1>
                                            </div>
                                             {% endif %}
                                        {% endfor %}
                                    {% endfor %}
                                </div>
                                <form action=\"details\" method=\"POST\">
                                    <div class=\"icon-input-btn text-center\">
                                        <input type=\"hidden\" name=\"client\" value=\"{{client.intKey}}\">
                                        <input type=\"hidden\" name=\"room\" value=\"{{room.intKey}}\">
                                        <button type=\"submit\" class=\"btn btn-info btn-lg\">Messverlauf anzeigen</i></button>
                                    </div>
                                </form>
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
