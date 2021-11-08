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

/* themes/contrib/sshop/templates/commerce/commerce-product.html.twig */
class __TwigTemplate_27080488eb003c1b16f8ac5f27fc696f1d92153bad7e403360c9f764cf1d42b0 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/sshop/templates/commerce/commerce-product.html.twig"));

        // line 22
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "commerce-product-full"], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        echo ">
  <div class=\"row\">
    <div class=\"product-left col-sm-6\">
      ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_images", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "
    </div>
    <div class=\"product-right col-sm-6\">
      ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["product"] ?? null), 28, $this->source), "variation_attributes", "field_images", "field_reviews", "field_related_products"), "html", null, true);
        echo "
    </div>

    <div class=\"product-bottom col-sm-12\">
      <ul class=\"nav nav-tabs\">
        <li class=\"active\">
          <a data-toggle=\"tab\" href=\"#description\">";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Description"));
        echo "</a>
        </li>
        <li>
          ";
        // line 37
        if (($context["reviews_count"] ?? null)) {
            // line 38
            echo "            <li>
              <a data-toggle=\"tab\" href=\"#reviews\">
                ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Reviews"));
            echo "
                ";
            // line 41
            if ((($context["reviews_count"] ?? null) > 0)) {
                // line 42
                echo "                  <span class=\"reviews-count\">(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["reviews_count"] ?? null), 42, $this->source), "html", null, true);
                echo ")</span>
                ";
            }
            // line 44
            echo "              </a>
            </li>
          ";
        }
        // line 47
        echo "        </li>
      </ul>

      <div class=\"tab-content\">
        <div id=\"description\" name=\"description\" class=\"tab-pane fade in active\">
          <h3 class=\"tab-title\">";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Description"));
        echo "</h3>
          <div class=\"description-content\">
            ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "body", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "
          </div>
        </div>
        ";
        // line 57
        if (($context["reviews_count"] ?? null)) {
            // line 58
            echo "          <div id=\"reviews\" name=\"reviews\" class=\"tab-pane fade\">
            <h3 class=\"tab-title\">
              ";
            // line 60
            if ((($context["reviews_count"] ?? null) > 0)) {
                // line 61
                echo "                ";
                if ((($context["reviews_count"] ?? null) == 1)) {
                    // line 62
                    echo "                  ";
                    echo t("@reviews_count review for @title", array("@reviews_count" =>                     // line 63
($context["reviews_count"] ?? null), "@title" => ($context["title"] ?? null), ), ["context" => "product reviews title"]);
                    // line 65
                    echo "                ";
                } else {
                    // line 66
                    echo "                  ";
                    echo t("@reviews_count reviews for @title", array("@reviews_count" =>                     // line 67
($context["reviews_count"] ?? null), "@title" => ($context["title"] ?? null), ), ["context" => "product reviews title"]);
                    // line 69
                    echo "                ";
                }
                // line 70
                echo "              ";
            }
            // line 71
            echo "            </h3>

            <div class=\"reviews-content\">
              ";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_reviews", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 78
        echo "      </div>
    </div>

    ";
        // line 81
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_related_products", [], "any", false, false, true, 81)) != "")) {
            // line 82
            echo "      <div class=\"related-products col-sm-12\">
        <h3 class=\"tab-title\">";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Related products"));
            echo "</h3>
        <div class=\"related-products-items row\">
          ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_related_products", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 89
        echo "
  </div>
</article>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/sshop/templates/commerce/commerce-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 89,  166 => 85,  161 => 83,  158 => 82,  156 => 81,  151 => 78,  144 => 74,  139 => 71,  136 => 70,  133 => 69,  131 => 67,  129 => 66,  126 => 65,  124 => 63,  122 => 62,  119 => 61,  117 => 60,  113 => 58,  111 => 57,  105 => 54,  100 => 52,  93 => 47,  88 => 44,  82 => 42,  80 => 41,  76 => 40,  72 => 38,  70 => 37,  64 => 34,  55 => 28,  49 => 25,  42 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/sshop/templates/commerce/commerce-product.html.twig", "/app/web/themes/contrib/sshop/templates/commerce/commerce-product.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 37, "trans" => 62);
        static $filters = array("escape" => 22, "without" => 28, "t" => 34, "render" => 81);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'without', 't', 'render'],
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
