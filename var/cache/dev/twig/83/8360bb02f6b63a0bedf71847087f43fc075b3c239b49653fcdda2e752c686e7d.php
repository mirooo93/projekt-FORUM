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

/* reddit/navbar.html.twig */
class __TwigTemplate_1fe98a649b3bcb6874d262f01f0f7a7a0182f757161960dbd2a20e8d228cf937 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reddit/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reddit/navbar.html.twig"));

        // line 1
        echo "<nav class= \"navbar navbar-expand-sm navbar-dark bg-primary mb-3\" >
<div class=\"container\">
\t<a href=\"/\" class=\"navbar-brand\"> MyForum </a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\" id=\"mobile-nav\">
\t\t<span class=\"navbar-toggle-icon\"> </span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"/\" class=\"nav-link\"> Home </a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"/reddit/new\" class=\"nav-link\"> New post </a>\t
\t\t\t</li>\t
\t\t</ul>
\t </div> 
\t</div>
\t</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reddit/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<nav class= \"navbar navbar-expand-sm navbar-dark bg-primary mb-3\" >
<div class=\"container\">
\t<a href=\"/\" class=\"navbar-brand\"> MyForum </a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\" id=\"mobile-nav\">
\t\t<span class=\"navbar-toggle-icon\"> </span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"/\" class=\"nav-link\"> Home </a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"/reddit/new\" class=\"nav-link\"> New post </a>\t
\t\t\t</li>\t
\t\t</ul>
\t </div> 
\t</div>
\t</nav>", "reddit/navbar.html.twig", "C:\\xampp\\htdocs\\my_project\\app\\Resources\\views\\reddit\\navbar.html.twig");
    }
}
