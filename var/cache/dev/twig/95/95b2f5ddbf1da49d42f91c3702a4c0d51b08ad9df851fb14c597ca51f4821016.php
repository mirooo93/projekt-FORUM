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

/* reddit/show.html.twig */
class __TwigTemplate_a9c492feb478143eccc0ebd6df83102124db98d5168c48201aa60bc6da85cf7c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reddit/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reddit/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reddit/show.html.twig", 1);
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

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", []), "html", null, true);
        echo " ";
        
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
\t<h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", []), "html", null, true);
        echo "</h3>
\t<p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "text", []), "html", null, true);
        echo "</p>
\t";
        // line 9
        if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "image", [])) {
            // line 10
            echo "\t\t<p> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "image", []))), "html", null, true);
            echo "\" width=\"200\" height=\"200\"></p>
\t";
        }
        // line 12
        echo "\t<p align=\"right\"> <font color=\"#a6a6a6\"> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "postDate", []), "yy/d/M H:m"), "html", null, true);
        echo " </font></p>
\t<hr>
\t<tbody>
\t<strong> <h4> Comments: </h4> </strong>
\t<table class=\"table table-striped\">&nbsp;
\t<tr>
\t\t<td> 
\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 20
            echo "\t\t\t\t<p> <font color=\"red\"> ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["com"], "userId", [], "any", false, true), "username", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["com"], "userId", [], "any", false, true), "username", []), "Anonymouse")) : ("Anonymouse")), "html", null, true);
            echo ":</font> &nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "comment", []), "html", null, true);
            echo "</p>
\t\t\t\t
\t\t\t\t<p> <font color=\"#a6a6a6\"> ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["com"], "comDate", []), "yy/d/M H:m"), "html", null, true);
            echo " </font></p>
\t\t\t\t<hr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
\t\t\t";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t \t<a href=\"/\"> Go back </a>
\t\t</td>
\t</tr>
\t</table>\t
\t</tbody>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reddit/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 28,  138 => 27,  134 => 26,  131 => 25,  122 => 22,  114 => 20,  110 => 19,  99 => 12,  93 => 10,  91 => 9,  87 => 8,  83 => 7,  72 => 6,  52 => 4,  30 => 1,);
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


{% block title %} {{ post.title }} {% endblock %}

{% block body %} 
\t<h3>{{ post.title }}</h3>
\t<p>{{ post.text }}</p>
\t{% if post.image %}
\t\t<p> <img src=\"{{ asset('uploads/images/' ~ post.image) }}\" width=\"200\" height=\"200\"></p>
\t{% endif %}
\t<p align=\"right\"> <font color=\"#a6a6a6\"> {{ post.postDate|date('yy/d/M H:m') }} </font></p>
\t<hr>
\t<tbody>
\t<strong> <h4> Comments: </h4> </strong>
\t<table class=\"table table-striped\">&nbsp;
\t<tr>
\t\t<td> 
\t\t\t{% for com in comments %}
\t\t\t\t<p> <font color=\"red\"> {{ com.userId.username|default('Anonymouse') }}:</font> &nbsp;{{ com.comment }}</p>
\t\t\t\t
\t\t\t\t<p> <font color=\"#a6a6a6\"> {{ com.comDate|date('yy/d/M H:m') }} </font></p>
\t\t\t\t<hr>
\t\t\t{% endfor %}

\t\t\t{{ form_start(form) }}
\t\t\t{{ form_widget(form) }}
\t\t\t{{ form_end(form) }}
\t\t \t<a href=\"/\"> Go back </a>
\t\t</td>
\t</tr>
\t</table>\t
\t</tbody>
{% endblock %}
", "reddit/show.html.twig", "C:\\xampp\\htdocs\\my_project\\app\\Resources\\views\\reddit\\show.html.twig");
    }
}
