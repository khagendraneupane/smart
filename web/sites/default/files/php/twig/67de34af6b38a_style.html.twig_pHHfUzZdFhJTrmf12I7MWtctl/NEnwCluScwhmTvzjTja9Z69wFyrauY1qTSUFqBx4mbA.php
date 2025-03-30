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

/* @ruhi/template-parts/style.html.twig */
class __TwigTemplate_ee201ad661bfb35cdfac31eda1664eaf extends Template
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
        yield "<style>
";
        // line 3
        yield "body {
  font-size: ";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["body_font_size"] ?? null), "html", null, true);
        yield "rem;
  line-height: ";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["body_line_height"] ?? null), "html", null, true);
        yield ";
}
p {
  margin-bottom: ";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["paragraph_bottom"] ?? null), "html", null, true);
        yield "rem;
}
";
        // line 11
        if ( !($context["logo_default"] ?? null)) {
            // line 12
            yield ".site-name {
  font-size: ";
            // line 13
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name_size"] ?? null), "html", null, true);
            yield "rem;
  font-weight: ";
            // line 14
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name_weight"] ?? null), "html", null, true);
            yield ";
  text-transform: ";
            // line 15
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name_transform"] ?? null), "html", null, true);
            yield ";
  line-height: ";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name_height"] ?? null), "html", null, true);
            yield ";
}
.site-slogan {
  font-size: ";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slogan_size"] ?? null), "html", null, true);
            yield "rem;
  text-transform: ";
            // line 20
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slogan_transform"] ?? null), "html", null, true);
            yield ";
  line-height: ";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slogan_height"] ?? null), "html", null, true);
            yield ";
  font-style: ";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slogan_style"] ?? null), "html", null, true);
            yield ";

}
";
        }
        // line 27
        if ( !($context["main_menu_default"] ?? null)) {
            // line 28
            yield ".menu-wrap ul.menu {
  font-size: ";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_menu_top_size"] ?? null), "html", null, true);
            yield "rem;
}
.menu-wrap {
  font-weight: ";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_menu_top_weight"] ?? null), "html", null, true);
            yield ";
}
.menu-wrap ul.menu > li > a {
  text-transform: ";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_menu_top_transform"] ?? null), "html", null, true);
            yield ";
}
.menu-wrap ul.menu ul.submenu {
  fontweight: ";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_menu_sub_weight"] ?? null), "html", null, true);
            yield ";
}
.menu-wrap ul.menu ul.submenu li {
  font-size: ";
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_menu_sub_size"] ?? null), "html", null, true);
            yield "rem;  
  text-transform: ";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_menu_sub_transform"] ?? null), "html", null, true);
            yield ";
}
";
        }
        // line 45
        yield "@media (min-width: 1170px) {
  .container {
    max-width: ";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container_width"] ?? null), "html", null, true);
        yield "px;
  }
}
";
        // line 51
        if ((($context["header_width"] ?? null) == "header_width_full")) {
            // line 52
            yield ".header-top .container,
.header .container,
.page-header .container {
  width: 100%;
  max-width: 100%;
}
";
        }
        // line 59
        if ((($context["main_width"] ?? null) == "main_width_full")) {
            // line 60
            yield ".main-wrapper .container {
  width: 100%;
  max-width: 100%;
}
";
        }
        // line 65
        yield "
";
        // line 66
        if ((($context["footer_width"] ?? null) == "footer_width_full")) {
            // line 67
            yield ".footer-top footer .container,
.footer-blocks .container,
.footer-bottom-blocks .container,
.footer-bottom .container {
  width: 100%;
  max-width: 100%;
}
";
        }
        // line 76
        if ( !($context["header_main_default"] ?? null)) {
            // line 77
            yield ".header-container {
  padding-top: ";
            // line 78
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_main_padding_top"] ?? null), "html", null, true);
            yield "rem;
  padding-bottom: ";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_main_padding_bottom"] ?? null), "html", null, true);
            yield "rem;
}
";
        }
        // line 82
        if ( !($context["header_page_default"] ?? null)) {
            // line 83
            yield ".page-header {
  padding-top: ";
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_page_padding_top"] ?? null), "html", null, true);
            yield "rem;
  padding-bottom: ";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_page_padding_bottom"] ?? null), "html", null, true);
            yield "rem; 
}
.region-page-header {
  align-items: ";
            // line 88
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_page_content_position"] ?? null), "html", null, true);
            yield ";
}
";
        }
        // line 91
        yield "
@media (min-width: 768px) {
  ";
        // line 93
        if ( !($context["headings_default"] ?? null)) {
            // line 94
            yield "  h1 {
    font-size: ";
            // line 95
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h1_size"] ?? null), "html", null, true);
            yield "rem;
    font-weight: ";
            // line 96
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h1_weight"] ?? null), "html", null, true);
            yield ";
    text-transform: ";
            // line 97
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h1_transform"] ?? null), "html", null, true);
            yield ";
    line-height: ";
            // line 98
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h1_height"] ?? null), "html", null, true);
            yield ";
  }
  h2 {
    font-size: ";
            // line 101
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h2_size"] ?? null), "html", null, true);
            yield "rem;
    font-weight: ";
            // line 102
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h2_weight"] ?? null), "html", null, true);
            yield ";
    text-transform: ";
            // line 103
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h2_transform"] ?? null), "html", null, true);
            yield ";
    line-height: ";
            // line 104
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h2_height"] ?? null), "html", null, true);
            yield ";
  }
  h3 {
    font-size: ";
            // line 107
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h3_size"] ?? null), "html", null, true);
            yield "rem;
    font-weight: ";
            // line 108
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h3_weight"] ?? null), "html", null, true);
            yield ";
    text-transform: ";
            // line 109
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h3_transform"] ?? null), "html", null, true);
            yield ";
    line-height: ";
            // line 110
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h3_height"] ?? null), "html", null, true);
            yield ";
  }
  h4 {
    font-size: ";
            // line 113
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h4_size"] ?? null), "html", null, true);
            yield "rem;
    font-weight: ";
            // line 114
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h4_weight"] ?? null), "html", null, true);
            yield ";
    text-transform: ";
            // line 115
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h4_transform"] ?? null), "html", null, true);
            yield ";
    line-height: ";
            // line 116
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h4_height"] ?? null), "html", null, true);
            yield ";
  }
  h5 {
    font-size: ";
            // line 119
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h5_size"] ?? null), "html", null, true);
            yield "rem;
    font-weight: ";
            // line 120
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h5_weight"] ?? null), "html", null, true);
            yield ";
    text-transform: ";
            // line 121
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h5_transform"] ?? null), "html", null, true);
            yield ";
    line-height: ";
            // line 122
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h5_height"] ?? null), "html", null, true);
            yield ";
  }
  h6 {
    font-size: ";
            // line 125
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h6_size"] ?? null), "html", null, true);
            yield "rem;
    font-weight: ";
            // line 126
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h6_weight"] ?? null), "html", null, true);
            yield ";
    text-transform: ";
            // line 127
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h6_transform"] ?? null), "html", null, true);
            yield ";
    line-height: ";
            // line 128
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h6_height"] ?? null), "html", null, true);
            yield ";
  }
  ";
        }
        // line 131
        yield "  ";
        if ( !($context["sidebar_width_default"] ?? null)) {
            // line 132
            yield "  .sidebar-left #main {
    flex: 1 1 calc(100% - ";
            // line 133
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_width_left"] ?? null), "html", null, true);
            yield "%);
  }
  .sidebar-right #main {
    flex: 1 1 calc(100% - ";
            // line 136
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_width_right"] ?? null), "html", null, true);
            yield "%);
  }
  .two-sidebar #main {
    flex: 1 1 calc(100% - ";
            // line 139
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_width_left"] ?? null), "html", null, true);
            yield "% - ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_width_right"] ?? null), "html", null, true);
            yield "%);
  }
  #sidebar-left {
    flex: 0 1 ";
            // line 142
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_width_left"] ?? null), "html", null, true);
            yield "%;
  }
  #sidebar-right {
    flex: 0 1 ";
            // line 145
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_width_right"] ?? null), "html", null, true);
            yield "%;
  }
  ";
        }
        // line 148
        yield "}
";
        // line 149
        if ( !($context["sidebar_block_default"] ?? null)) {
            // line 150
            yield ".sidebar .block {
  padding: ";
            // line 151
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_padding"] ?? null), "html", null, true);
            yield "px;
  border-radius: ";
            // line 152
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_radius"] ?? null), "html", null, true);
            yield "px;
  margin-bottom: ";
            // line 153
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_margin"] ?? null), "html", null, true);
            yield "rem;
}
.sidebar .block-title {
  font-size: ";
            // line 156
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_title_font_size"] ?? null), "html", null, true);
            yield "rem;
  text-transform: ";
            // line 157
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_title_transform"] ?? null), "html", null, true);
            yield ";
}
";
        }
        // line 161
        if ( !($context["page_title_default"] ?? null)) {
            // line 162
            yield ".page-title {
  font-size: ";
            // line 163
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_title_size_mobile"] ?? null), "html", null, true);
            yield "rem;
  text-transform: ";
            // line 164
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_title_transform"] ?? null), "html", null, true);
            yield ";
}
@media (min-width: 768px) {
  .page-title {
    font-size: ";
            // line 168
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_title_size_desktop"] ?? null), "html", null, true);
            yield "rem;
  }
}
";
        }
        // line 172
        if (($context["highlight_author_comment"] ?? null)) {
            // line 173
            yield ".comment-by-author {
  box-shadow: 0 0 6px 1px var(--secondary);
}
";
        }
        // line 177
        if ( !($context["button_default"] ?? null)) {
            // line 178
            yield "a.button, .button, button, [type=\"button\"], [type=\"reset\"], [type=\"submit\"] {
  padding: ";
            // line 179
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_padding"] ?? null), "html", null, true);
            yield ";
  border-radius: ";
            // line 180
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_radius"] ?? null), "html", null, true);
            yield "px;
}
";
        }
        // line 183
        yield "</style>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["body_font_size", "body_line_height", "paragraph_bottom", "logo_default", "site_name_size", "site_name_weight", "site_name_transform", "site_name_height", "slogan_size", "slogan_transform", "slogan_height", "slogan_style", "main_menu_default", "main_menu_top_size", "main_menu_top_weight", "main_menu_top_transform", "main_menu_sub_weight", "main_menu_sub_size", "main_menu_sub_transform", "container_width", "header_width", "main_width", "footer_width", "header_main_default", "header_main_padding_top", "header_main_padding_bottom", "header_page_default", "header_page_padding_top", "header_page_padding_bottom", "header_page_content_position", "headings_default", "h1_size", "h1_weight", "h1_transform", "h1_height", "h2_size", "h2_weight", "h2_transform", "h2_height", "h3_size", "h3_weight", "h3_transform", "h3_height", "h4_size", "h4_weight", "h4_transform", "h4_height", "h5_size", "h5_weight", "h5_transform", "h5_height", "h6_size", "h6_weight", "h6_transform", "h6_height", "sidebar_width_default", "sidebar_width_left", "sidebar_width_right", "sidebar_block_default", "sidebar_padding", "sidebar_radius", "sidebar_margin", "sidebar_title_font_size", "sidebar_title_transform", "page_title_default", "page_title_size_mobile", "page_title_transform", "page_title_size_desktop", "highlight_author_comment", "button_default", "button_padding", "button_radius"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ruhi/template-parts/style.html.twig";
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
        return array (  460 => 183,  454 => 180,  450 => 179,  447 => 178,  445 => 177,  439 => 173,  437 => 172,  430 => 168,  423 => 164,  419 => 163,  416 => 162,  414 => 161,  408 => 157,  404 => 156,  398 => 153,  394 => 152,  390 => 151,  387 => 150,  385 => 149,  382 => 148,  376 => 145,  370 => 142,  362 => 139,  356 => 136,  350 => 133,  347 => 132,  344 => 131,  338 => 128,  334 => 127,  330 => 126,  326 => 125,  320 => 122,  316 => 121,  312 => 120,  308 => 119,  302 => 116,  298 => 115,  294 => 114,  290 => 113,  284 => 110,  280 => 109,  276 => 108,  272 => 107,  266 => 104,  262 => 103,  258 => 102,  254 => 101,  248 => 98,  244 => 97,  240 => 96,  236 => 95,  233 => 94,  231 => 93,  227 => 91,  221 => 88,  215 => 85,  211 => 84,  208 => 83,  206 => 82,  200 => 79,  196 => 78,  193 => 77,  191 => 76,  181 => 67,  179 => 66,  176 => 65,  169 => 60,  167 => 59,  158 => 52,  156 => 51,  150 => 47,  146 => 45,  140 => 42,  136 => 41,  130 => 38,  124 => 35,  118 => 32,  112 => 29,  109 => 28,  107 => 27,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  67 => 12,  65 => 11,  60 => 8,  54 => 5,  50 => 4,  47 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@ruhi/template-parts/style.html.twig", "/Users/khagendraneupane/Development/Drupal/smartinnovation/web/themes/contrib/ruhi/templates/template-parts/style.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 11];
        static $filters = ["escape" => 4];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
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
