<?php

/* resume/show.html.twig */
class __TwigTemplate_751f526b4b97c67f74d4e65e26d98b71a686e36263ec94a4a1104f343cd2a0e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "resume/show.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "resume/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "resume/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GitHub Resume for ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1>GitHub Resume Generator</h1>
                ";
        // line 10
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar_url", []))) {
            // line 11
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar_url", []), "html", null, true);
            echo "\" alt=\"avatar of ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login", []), "html", null, true);
            echo "\">
                ";
        }
        // line 13
        echo "            </div>

            <div style=\"clear: both;\"></div>

            <div id=\"content\">
                <table>
                    <tr>
                        <td><strong>Username:</strong>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login", []), "html", null, true);
        echo "</td>
                        
                    </tr>
                    ";
        // line 23
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "blog", []))) {
            // line 24
            echo "                    <tr>
                        <td><strong>Website:</strong><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "blog", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "blog", []), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        // line 28
        echo "                    <tr>
                        <td>Total numbers of Repositories are ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td><strong>Repositores:</strong></td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repos"]) ? $context["repos"] : $this->getContext($context, "repos")));
        foreach ($context['_seq'] as $context["_key"] => $context["repo"]) {
            // line 38
            echo "                                    <li>
                                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["repo"], "html_url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["repo"], "name", []), "html", null, true);
            echo "</a>-
                                        <h6>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["repo"], "description", []), "html", null, true);
            echo "</h6>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Languages:</strong></td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langs"]) ? $context["langs"] : $this->getContext($context, "langs")));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 53
            echo "                                    <li>
                                        ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["lang"], "name", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lang"], "percentage", []), "html", null, true);
            echo "%
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                            </ul>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "resume/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 57,  167 => 54,  164 => 53,  160 => 52,  149 => 43,  140 => 40,  134 => 39,  131 => 38,  127 => 37,  116 => 29,  113 => 28,  105 => 25,  102 => 24,  100 => 23,  94 => 20,  85 => 13,  77 => 11,  75 => 10,  69 => 6,  60 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}GitHub Resume for {{ user.login }}{% endblock %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1>GitHub Resume Generator</h1>
                {% if user.avatar_url is not empty %}
                <img src=\"{{ user.avatar_url }}\" alt=\"avatar of {{ user.login }}\">
                {% endif %}
            </div>

            <div style=\"clear: both;\"></div>

            <div id=\"content\">
                <table>
                    <tr>
                        <td><strong>Username:</strong>{{ user.login }}</td>
                        
                    </tr>
                    {% if user.blog is not empty %}
                    <tr>
                        <td><strong>Website:</strong><a href=\"{{ user.blog }}\">{{ user.blog }}</td>
                    </tr>
                    {% endif %}
                    <tr>
                        <td>Total numbers of Repositories are {{ total }}</td>
                    </tr>
                    <tr>
                        <td><strong>Repositores:</strong></td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                {% for repo in repos %}
                                    <li>
                                        <a href=\"{{ repo.html_url }}\">{{ repo.name }}</a>-
                                        <h6>{{ repo.description }}</h6>
                                    </li>
                                {% endfor %}
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Languages:</strong></td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                {% for lang in langs %}
                                    <li>
                                        {{ lang.name }} - {{ lang.percentage }}%
                                    </li>
                                {% endfor %}
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
{% endblock %}", "resume/show.html.twig", "D:\\xampp\\htdocs\\github-resume\\app\\Resources\\views\\resume\\show.html.twig");
    }
}
