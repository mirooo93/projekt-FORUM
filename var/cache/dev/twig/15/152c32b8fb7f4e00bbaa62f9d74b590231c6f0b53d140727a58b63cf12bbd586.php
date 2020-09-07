<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* reddit/forum.html.twig */
class __TwigTemplate_9636812970fd940465ec136dcbeae3073479e56038c070bb885f0b19ae37ec81 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reddit/forum.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reddit/forum.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reddit/forum.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " MyForum ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
\t";
        // line 7
        $context["break"] = false;
        // line 8
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if ( !($context["break"] ?? $this->getContext($context, "break"))) {
                // line 9
                echo "\t\t";
                if ((($context["users"] ?? $this->getContext($context, "users")) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
                    // line 10
                    echo "\t\t\t<p align=\"right\"> Logged as: <font color=\"red\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
                    echo " </font></p>
\t\t\t";
                    // line 11
                    $context["break"] = true;
                    // line 12
                    echo "\t\t";
                } else {
                    // line 13
                    echo "\t\t\t<p align=\"right\"> Logged as: <font color=\"red\"> Anonymouse </font></p>
\t\t\t";
                    // line 14
                    $context["break"] = true;
                    // line 15
                    echo "\t\t";
                }
                // line 16
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
\t";
        // line 18
        if (($context["posts"] ?? $this->getContext($context, "posts"))) {
            // line 19
            echo "\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th> Forum Title </th>\t
\t\t\t\t\t<th> Author </th>
\t\t\t\t\t<th> Date </th>
\t\t\t\t\t<th> Posts </th>\t
\t\t\t\t</tr>
\t\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 30
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td> ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
                echo " </td> 
\t\t\t\t\t<td> ";
                // line 32
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["post"], "userId", [], "any", false, true), "username", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["post"], "userId", [], "any", false, true), "username", []), "Anonymouse")) : ("Anonymouse")), "html", null, true);
                echo " </td>
\t\t\t\t\t<td> ";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "postDate", []), "yy/d/M H:m"), "html", null, true);
                echo " </td>
\t\t\t\t\t<td>  
\t\t\t\t\t\t<a href=\"/reddit/";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", []), "html", null, true);
                echo "\" class=\"btn btn-primary\"> Show </a>
\t\t\t\t\t\t<a href=\"/reddit/edit/";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", []), "html", null, true);
                echo "\" class=\"btn btn-warning\"> Edit </a>
\t\t\t\t\t\t<a href=\"/reddit/";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", []), "html", null, true);
                echo "\" class=\"btn btn-danger\"> Delete </a>\t

\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t</tbody>
\t  </table>\t
\t";
        } else {
            // line 45
            echo "\t\t<p> No articles to display </p>
\t";
        }
        // line 47
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reddit/forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 47,  178 => 45,  173 => 42,  162 => 37,  158 => 36,  154 => 35,  149 => 33,  145 => 32,  141 => 31,  138 => 30,  134 => 29,  122 => 19,  120 => 18,  117 => 17,  110 => 16,  107 => 15,  105 => 14,  102 => 13,  99 => 12,  97 => 11,  92 => 10,  89 => 9,  83 => 8,  81 => 7,  70 => 6,  52 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %} MyForum {% endblock %}

{% block body %} 
\t{% set break = false %}
\t{% for user in users if not break %}
\t\t{% if users and is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t<p align=\"right\"> Logged as: <font color=\"red\"> {{ app.user.username }} </font></p>
\t\t\t{% set break = true %}
\t\t{% else %}
\t\t\t<p align=\"right\"> Logged as: <font color=\"red\"> Anonymouse </font></p>
\t\t\t{% set break = true %}
\t\t{% endif %}
\t{% endfor %}

\t{% if posts %}
\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th> Forum Title </th>\t
\t\t\t\t\t<th> Author </th>
\t\t\t\t\t<th> Date </th>
\t\t\t\t\t<th> Posts </th>\t
\t\t\t\t</tr>
\t\t\t</thead>
\t\t<tbody>
\t\t\t{% for post in posts %}
\t\t\t\t<tr>
\t\t\t\t\t<td> {{ post.title }} </td> 
\t\t\t\t\t<td> {{ post.userId.username|default('Anonymouse') }} </td>
\t\t\t\t\t<td> {{ post.postDate|date('yy/d/M H:m') }} </td>
\t\t\t\t\t<td>  
\t\t\t\t\t\t<a href=\"/reddit/{{ post.id }}\" class=\"btn btn-primary\"> Show </a>
\t\t\t\t\t\t<a href=\"/reddit/edit/{{ post.id }}\" class=\"btn btn-warning\"> Edit </a>
\t\t\t\t\t\t<a href=\"/reddit/{{ post.id }}\" class=\"btn btn-danger\"> Delete </a>\t

\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t  </table>\t
\t{% else %}
\t\t<p> No articles to display </p>
\t{% endif %}

{% endblock %}
", "reddit/forum.html.twig", "C:\\xampp\\htdocs\\my_project\\app\\Resources\\views\\reddit\\forum.html.twig");
    }
}
