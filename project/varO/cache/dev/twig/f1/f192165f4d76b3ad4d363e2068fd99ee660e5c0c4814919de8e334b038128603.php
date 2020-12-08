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

/* clients.html.twig */
class __TwigTemplate_07539be87669f49afba519fc620d8ee2fd0093576bd1d24bf85f1b756f49afac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "clients.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"p-4\">
        <div class=\"container\">
            <div class=\"jumbotron\">
                <div class=\"m-4\">
                    <h3> Einstellungen bearbeiten</h3>
                </div>
                <form method=\"post\" action=\"saveChanges\">
                    <div class=\"row\" >
                        <div class=\"col-md-6\">
                            <div class=\"m-2 text-center\">
                                <h4>Räume</h4>
                            </div>
                            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 17
            echo "                                <div class=\"input-group mb-3 input-group-sm\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">Name:</span>
                                    </div>
                                    <input type=\"text\" class=\"form-control\" name=\"room.";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "intKey", [], "any", false, false, false, 21), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "roomName", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
                                </div>
                                <div class=\"input-group mb-3 input-group-sm\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">Öffentlicher Zugriff:</span>
                                    </div>
                                     <input type=\"checkbox\" ";
            // line 27
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["room"], "isPrivate", [], "any", false, false, false, 27), 0))) {
                echo " checked ";
            }
            echo " data-toggle=\"toggle\" data-on=\"Öffentlich\" data-off=\"Privat\" data-onstyle=\"success\" data-offstyle=\"danger\" name=\"room.";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "intKey", [], "any", false, false, false, 27), "html", null, true);
            echo ".isPrivate\" data-width=\"160\">
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                        </div>
                        <div class=\"col-md-6\">
                           <div class=\"m-2 text-center\">
                                <h4>Clients anzeigen</h4>
                            </div>
                            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 36
            echo "                                <div class=\"input-group mb-3 input-group-sm\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "macAdress", [], "any", false, false, false, 38), "html", null, true);
            echo "</span>
                                    </div>
                                     <input type=\"checkbox\" ";
            // line 40
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["client"], "intKey", [], "any", false, false, false, 40), (isset($context["userClientsValues"]) || array_key_exists("userClientsValues", $context) ? $context["userClientsValues"] : (function () { throw new RuntimeError('Variable "userClientsValues" does not exist.', 40, $this->source); })()))) {
                echo " checked ";
            }
            echo "  data-toggle=\"toggle\" data-on=\"Anzeigen\" data-off=\"Ausblenden\" data-onstyle=\"success\" data-offstyle=\"danger\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "intKey", [], "any", false, false, false, 40), "html", null, true);
            echo "\" data-width=\"180\">
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                        </div>
                        <button type=\"submit\" class=\"btn btn-primary m-4\">
                            Einstellungen speichern
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  136 => 40,  131 => 38,  127 => 36,  123 => 35,  116 => 30,  103 => 27,  92 => 21,  86 => 17,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <section class=\"p-4\">
        <div class=\"container\">
            <div class=\"jumbotron\">
                <div class=\"m-4\">
                    <h3> Einstellungen bearbeiten</h3>
                </div>
                <form method=\"post\" action=\"saveChanges\">
                    <div class=\"row\" >
                        <div class=\"col-md-6\">
                            <div class=\"m-2 text-center\">
                                <h4>Räume</h4>
                            </div>
                            {% for room in rooms %}
                                <div class=\"input-group mb-3 input-group-sm\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">Name:</span>
                                    </div>
                                    <input type=\"text\" class=\"form-control\" name=\"room.{{room.intKey}}\" placeholder=\"{{room.roomName}}\">
                                </div>
                                <div class=\"input-group mb-3 input-group-sm\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">Öffentlicher Zugriff:</span>
                                    </div>
                                     <input type=\"checkbox\" {% if room.isPrivate == 0 %} checked {% endif %} data-toggle=\"toggle\" data-on=\"Öffentlich\" data-off=\"Privat\" data-onstyle=\"success\" data-offstyle=\"danger\" name=\"room.{{room.intKey}}.isPrivate\" data-width=\"160\">
                                </div>
                            {% endfor %}
                        </div>
                        <div class=\"col-md-6\">
                           <div class=\"m-2 text-center\">
                                <h4>Clients anzeigen</h4>
                            </div>
                            {% for client in clients %}
                                <div class=\"input-group mb-3 input-group-sm\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">{{client.macAdress}}</span>
                                    </div>
                                     <input type=\"checkbox\" {% if client.intKey in userClientsValues %} checked {% endif %}  data-toggle=\"toggle\" data-on=\"Anzeigen\" data-off=\"Ausblenden\" data-onstyle=\"success\" data-offstyle=\"danger\" name=\"{{client.intKey}}\" data-width=\"180\">
                                </div>
                            {% endfor %}
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary m-4\">
                            Einstellungen speichern
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
{% endblock %}", "clients.html.twig", "C:\\xampp\\htdocs\\FHDWDatenerfassung\\project\\templates\\clients.html.twig");
    }
}
