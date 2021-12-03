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

/* themes/contrib/sshop/templates/block/nav_collapsible/commerce-cart-block.html.twig */
class __TwigTemplate_01ba2ebe59626f8b3438c6a48d699681dd5ec44760285369d384831a1dc1f7be extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/sshop/templates/block/nav_collapsible/commerce-cart-block.html.twig"));

        // line 2
        $context["classes"] = [0 => "block", 1 => "cart-block", 2 => "has-dropdown"];
        // line 8
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 8), 8, $this->source), "html", null, true);
        echo ">
  <a href=\"#\">
    ";
        // line 10
        if ((($context["count"] ?? null) > 0)) {
            // line 11
            echo "      <span class=\"shop-number cart-number-items\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null), 11, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 13
        echo "    <span class=\"shop-icon fa fa-shopping-cart\"></span>
  </a>
  <div class=\"block-content header-dropdown cart-block-contents\">
    <div class=\"cart-contents\">
      ";
        // line 17
        if (($context["content"] ?? null)) {
            // line 18
            echo "        <div class=\"cart-block-content\">
          ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 19, $this->source), "html", null, true);
            echo "
        </div>
        <div class=\"cart-block-links\">
          ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["links"] ?? null), 22, $this->source), "html", null, true);
            echo "
        </div>
      ";
        } else {
            // line 25
            echo "        <div class=\"cart-block-empty\">
          ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Cart is empty."));
            echo "
        </div>
      ";
        }
        // line 29
        echo "    </div>
  </div>
</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/sshop/templates/block/nav_collapsible/commerce-cart-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  84 => 26,  81 => 25,  75 => 22,  69 => 19,  66 => 18,  64 => 17,  58 => 13,  52 => 11,  50 => 10,  44 => 8,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/sshop/templates/block/nav_collapsible/commerce-cart-block.html.twig", "/app/web/themes/contrib/sshop/templates/block/nav_collapsible/commerce-cart-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 10);
        static $filters = array("escape" => 8, "t" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
