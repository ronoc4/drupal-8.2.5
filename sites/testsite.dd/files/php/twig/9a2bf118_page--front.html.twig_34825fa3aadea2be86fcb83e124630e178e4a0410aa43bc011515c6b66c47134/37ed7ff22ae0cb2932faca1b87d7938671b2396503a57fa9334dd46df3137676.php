<?php

/* themes/custom/centaur/page--front.html.twig */
class __TwigTemplate_603624a89eab2ba4f2e3de33451689dcd7179ae00b1eefe57feeafcfa48ab218 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("include" => 1, "if" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/header.html.twig"), "themes/custom/centaur/page--front.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"container\">

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 7
        echo "
    <div class=\"layout-content\">
      <div class=\"article-list\">
        ";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
      </div>
    </div>";
        // line 13
        echo "
    ";
        // line 14
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array())) {
            // line 15
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 16
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 19
        echo "
  </main>

  ";
        // line 22
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 23
            echo "    <footer role=\"contentinfo\">
      ";
            // line 24
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 27
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/centaur/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  85 => 24,  82 => 23,  80 => 22,  75 => 19,  69 => 16,  66 => 15,  64 => 14,  61 => 13,  56 => 10,  51 => 7,  45 => 2,  43 => 1,);
    }
}
/* {% include directory ~ '/partials/header.html.twig' %}*/
/* */
/* <div class="container">*/
/* */
/*   <main role="main">*/
/*     <a id="main-content" tabindex="-1"></a>{# link is in html.html.twig #}*/
/* */
/*     <div class="layout-content">*/
/*       <div class="article-list">*/
/*         {{ page.content }}*/
/*       </div>*/
/*     </div>{# /.layout-content #}*/
/* */
/*     {% if page.sidebar %}*/
/*       <aside class="layout-sidebar-first" role="complementary">*/
/*         {{ page.sidebar }}*/
/*       </aside>*/
/*     {% endif %}*/
/* */
/*   </main>*/
/* */
/*   {% if page.footer %}*/
/*     <footer role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endif %}*/
/* */
/* </div>{# /.layout-container #}*/
/* */
