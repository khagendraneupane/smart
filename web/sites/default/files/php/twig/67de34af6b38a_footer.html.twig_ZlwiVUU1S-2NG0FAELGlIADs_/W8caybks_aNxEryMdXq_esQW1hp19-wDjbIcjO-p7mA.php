<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @ruhi/template-parts/footer.html.twig */
class __TwigTemplate_fc15885bb1d8b53f2be89c562e298e02 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 1)) {
            // line 2
            yield "  ";
            yield from $this->loadTemplate("@thex/template-parts/footer/footer-top.html.twig", "@ruhi/template-parts/footer.html.twig", 2)->unwrap()->yield($context);
        }
        // line 4
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_one", [], "any", false, false, true, 4) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_two", [], "any", false, false, true, 4)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_three", [], "any", false, false, true, 4)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 4))) {
            // line 5
            yield "  ";
            yield from $this->loadTemplate("@thex/template-parts/footer/footer-blocks.html.twig", "@ruhi/template-parts/footer.html.twig", 5)->unwrap()->yield($context);
        }
        // line 7
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_left", [], "any", false, false, true, 7) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_right", [], "any", false, false, true, 7))) {
            // line 8
            yield "  ";
            yield from $this->loadTemplate("@thex/template-parts/footer/footer-bottom-blocks.html.twig", "@ruhi/template-parts/footer.html.twig", 8)->unwrap()->yield($context);
        }
        // line 10
        if ((($context["copyright_text"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_last", [], "any", false, false, true, 10))) {
            // line 11
            yield "  <footer class=\"footer-bottom footer\">
    <div class=\"container\">
      <div class=\"footer-bottom-container\">
        ";
            // line 14
            if (($context["copyright_text"] ?? null)) {
                // line 15
                yield "          ";
                yield from $this->loadTemplate("@thex/template-parts/footer/footer-copyright.html.twig", "@ruhi/template-parts/footer.html.twig", 15)->unwrap()->yield($context);
                // line 16
                yield "        ";
            }
            // line 17
            yield "        ";
            yield from $this->loadTemplate("@thex/template-parts/footer/footer-bottom-last.html.twig", "@ruhi/template-parts/footer.html.twig", 17)->unwrap()->yield($context);
            // line 18
            yield "      ";
            if (($context["all_icons_show"] ?? null)) {
                // line 19
                yield "        <div class=\"footer-social\">
          ";
                // line 20
                yield from $this->loadTemplate("@ruhi/template-parts/social-icons.html.twig", "@ruhi/template-parts/footer.html.twig", 20)->unwrap()->yield($context);
                // line 21
                yield "        </div>
      ";
            }
            // line 23
            yield "      </div><!-- /footer-bottom-container -->
    </div><!-- /container -->
  </footer><!-- /footer-bottom -->
";
        }
        // line 27
        yield "
";
        // line 28
        if (($context["scrolltotop_on"] ?? null)) {
            // line 29
            yield "  <div class=\"scrolltop\"><i class=\"icon-arrow-up\"></i></div>
";
        }
        // line 31
        yield from $this->loadTemplate("@ruhi/template-parts/style.html.twig", "@ruhi/template-parts/footer.html.twig", 31)->unwrap()->yield($context);
        // line 32
        if (($context["fontawesome_four"] ?? null)) {
            // line 33
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/fontawesome4"), "html", null, true);
            yield "
";
        }
        // line 35
        if (($context["fontawesome_five"] ?? null)) {
            // line 36
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/fontawesome5"), "html", null, true);
            yield "
";
        }
        // line 38
        if (($context["bootstrapicons"] ?? null)) {
            // line 39
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/bootstrap-icons"), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "copyright_text", "all_icons_show", "scrolltotop_on", "fontawesome_four", "fontawesome_five", "bootstrapicons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ruhi/template-parts/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  127 => 39,  125 => 38,  119 => 36,  117 => 35,  111 => 33,  109 => 32,  107 => 31,  103 => 29,  101 => 28,  98 => 27,  92 => 23,  88 => 21,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  69 => 14,  64 => 11,  62 => 10,  58 => 8,  56 => 7,  52 => 5,  50 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@ruhi/template-parts/footer.html.twig", "/Users/khagendraneupane/Development/Drupal/smartinnovation/web/themes/contrib/ruhi/templates/template-parts/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1, "include" => 2];
        static $filters = ["escape" => 33];
        static $functions = ["attach_library" => 33];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape'],
                ['attach_library'],
                $this->source
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
