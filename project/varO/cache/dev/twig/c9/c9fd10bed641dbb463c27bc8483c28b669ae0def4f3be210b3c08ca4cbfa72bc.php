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
class __TwigTemplate_429e7fe34c002c2341c51c54b9035adce928cee69a786d3eb27f6d342d384336 extends Template
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
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"m-2 text-center\">
                            <h4>Neuen Raum anlegen</h4>
                        </div>
                        <form method=\"post\" action=\"createRoom\">
                            <div class=\"input-group mb-2 input-group-sm\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">Raumname:</span>
                                </div>
                                <input type=\"text\" class=\"form-control\" name=\"newRoomName\" placeholder=\"Neuer Raumname\">
                            </div>
                            <div class=\"input-group mb-3 input-group-sm\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">Privater Zugriff:</span>
                                    </div>
                                     <input type=\"checkbox\" data-toggle=\"toggle\" data-on=\"Öffentlich\" data-off=\"Privat\" data-onstyle=\"success\" data-offstyle=\"danger\" name=\"newRoomisPrivate\" data-width=\"160\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-info m-4\">
                                Neuen Raum anlegen
                            </button>
                        </form>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"m-2 text-center\">
                            <h4>Client-Raum zuordnen</h4>
                        </div>
                        <form method=\"post\" action=\"clientRoom\">
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 39
            echo "                                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["client"], "owningUserIk", [], "any", false, false, false, 39), (isset($context["userNo"]) || array_key_exists("userNo", $context) ? $context["userNo"] : (function () { throw new RuntimeError('Variable "userNo" does not exist.', 39, $this->source); })())))) {
                // line 40
                echo "                                <div class=\"form-inline\">
                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "macAdress", [], "any", false, false, false, 42), "html", null, true);
                echo "</span>
                                        </div>
                                        <select class=\"form-control\" name=\"ownRooms.";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "intKey", [], "any", false, false, false, 44), "html", null, true);
                echo "\">
                                            ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 45, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
                    // line 46
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "intKey", [], "any", false, false, false, 46), "html", null, true);
                    echo "\" ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["room"], "intKey", [], "any", false, false, false, 46), twig_get_attribute($this->env, $this->source, $context["client"], "roomIk", [], "any", false, false, false, 46)))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "roomName", [], "any", false, false, false, 46), "html", null, true);
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                                        </select>
                                </div>
                                 <input type=\"hidden\" name=\"client\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "macAdress", [], "any", false, false, false, 50), "html", null, true);
                echo "\">
                                ";
            }
            // line 52
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                            <button type=\"submit\" class=\"btn btn-info m-4\">
                                Zuordnungen speichern
                            </button>
                        </form>
                    </div>
                </div>
                <form method=\"post\" action=\"saveChanges\">
                    <div class=\"row\" >
                        <div class=\"col-md-6\">
                            <div class=\"m-2 text-center\">
                                <h4>Räume</h4>
                            </div>
                            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 66
            echo "                                <div class=\"input-group mb-3 input-group-sm\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">Name:</span>
                                    </div>
                                    <input type=\"text\" class=\"form-control\" name=\"room.";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "intKey", [], "any", false, false, false, 70), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "roomName", [], "any", false, false, false, 70), "html", null, true);
            echo "\">
                                </div>
                                <div class=\"input-group mb-3 input-group-sm\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">Öffentlicher Zugriff:</span>
                                    </div>
                                     <input type=\"checkbox\" ";
            // line 76
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["room"], "isPrivate", [], "any", false, false, false, 76), 0))) {
                echo " checked ";
            }
            echo " data-toggle=\"toggle\" data-on=\"Öffentlich\" data-off=\"Privat\" data-onstyle=\"success\" data-offstyle=\"danger\" name=\"room.";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "intKey", [], "any", false, false, false, 76), "html", null, true);
            echo ".isPrivate\" data-width=\"160\">
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                        </div>
                        <div class=\"col-md-6\">
                           <div class=\"m-2 text-center\">
                                <h4>Clients anzeigen</h4>
                            </div>
                            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 85
            echo "                                <div class=\"input-group mb-3 input-group-sm\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "macAdress", [], "any", false, false, false, 87), "html", null, true);
            echo "</span>
                                    </div>
                                     <input type=\"checkbox\" ";
            // line 89
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["client"], "intKey", [], "any", false, false, false, 89), (isset($context["userClientsValues"]) || array_key_exists("userClientsValues", $context) ? $context["userClientsValues"] : (function () { throw new RuntimeError('Variable "userClientsValues" does not exist.', 89, $this->source); })()))) {
                echo " checked ";
            }
            echo "  data-toggle=\"toggle\" data-on=\"Anzeigen\" data-off=\"Ausblenden\" data-onstyle=\"success\" data-offstyle=\"danger\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "intKey", [], "any", false, false, false, 89), "html", null, true);
            echo "\" data-width=\"180\">
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                        </div>
                        <button type=\"submit\" class=\"btn btn-info m-4\">
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
        return array (  239 => 92,  226 => 89,  221 => 87,  217 => 85,  213 => 84,  206 => 79,  193 => 76,  182 => 70,  176 => 66,  172 => 65,  158 => 53,  152 => 52,  147 => 50,  143 => 48,  128 => 46,  124 => 45,  120 => 44,  115 => 42,  111 => 40,  108 => 39,  104 => 38,  68 => 4,  58 => 3,  35 => 1,);
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
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"m-2 text-center\">
                            <h4>Neuen Raum anlegen</h4>
                        </div>
                        <form method=\"post\" action=\"createRoom\">
                            <div class=\"input-group mb-2 input-group-sm\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">Raumname:</span>
                                </div>
                                <input type=\"text\" class=\"form-control\" name=\"newRoomName\" placeholder=\"Neuer Raumname\">
                            </div>
                            <div class=\"input-group mb-3 input-group-sm\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">Privater Zugriff:</span>
                                    </div>
                                     <input type=\"checkbox\" data-toggle=\"toggle\" data-on=\"Öffentlich\" data-off=\"Privat\" data-onstyle=\"success\" data-offstyle=\"danger\" name=\"newRoomisPrivate\" data-width=\"160\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-info m-4\">
                                Neuen Raum anlegen
                            </button>
                        </form>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"m-2 text-center\">
                            <h4>Client-Raum zuordnen</h4>
                        </div>
                        <form method=\"post\" action=\"clientRoom\">
                            {% for client in clients %}
                                {% if client.owningUserIk == userNo %}
                                <div class=\"form-inline\">
                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">{{client.macAdress}}</span>
                                        </div>
                                        <select class=\"form-control\" name=\"ownRooms.{{client.intKey}}\">
                                            {% for room in rooms %}
                                                <option value=\"{{room.intKey}}\" {% if room.intKey == client.roomIk %} selected {% endif %}>{{room.roomName}}</option>
                                            {% endfor %}
                                        </select>
                                </div>
                                 <input type=\"hidden\" name=\"client\" value=\"{{client.macAdress}}\">
                                {% endif %}
                            {% endfor %}
                            <button type=\"submit\" class=\"btn btn-info m-4\">
                                Zuordnungen speichern
                            </button>
                        </form>
                    </div>
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
                        <button type=\"submit\" class=\"btn btn-info m-4\">
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
