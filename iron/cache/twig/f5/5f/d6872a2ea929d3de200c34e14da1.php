<?php

/* posting_topic_review.html */
class __TwigTemplate_f55fd6872a2ea929d3de200c34e14da1 extends Twig_Template
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
        // line 1
        echo "
<h3 id=\"review\">
\t<span class=\"right-box\"><a href=\"#review\" onclick=\"viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '";
        // line 3
        echo addslashes($this->env->getExtension('phpbb')->lang("EXPAND_VIEW"));
        echo "'){rev_text.data = '";
        echo addslashes($this->env->getExtension('phpbb')->lang("COLLAPSE_VIEW"));
        echo "'; } else if (rev_text.data == '";
        echo addslashes($this->env->getExtension('phpbb')->lang("COLLAPSE_VIEW"));
        echo "'){rev_text.data = '";
        echo addslashes($this->env->getExtension('phpbb')->lang("EXPAND_VIEW"));
        echo "'};\">";
        echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
        echo "</a></span>
\t";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "
</h3>

<div id=\"topicreview\">
<script type=\"text/javascript\">
// <![CDATA[
\tbbcodeEnabled = ";
        // line 10
        echo (isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null);
        echo ";
// ]]>
</script>
\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_review_row"));
        foreach ($context['_seq'] as $context["_key"] => $context["topic_review_row"]) {
            // line 14
            echo "
\t";
            // line 15
            if ($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "S_IGNORE_POST")) {
                // line 16
                echo "\t<div class=\"post bg3 post-ignore\">
\t\t<div class=\"inner\">
\t\t\t";
                // line 18
                echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "L_IGNORE_POST");
                echo "
\t";
            } else {
                // line 20
                echo "\t<div class=\"post ";
                if (($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "S_ROW_COUNT") % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if (($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_ID") == (isset($context["REPORTED_POST_ID"]) ? $context["REPORTED_POST_ID"] : null))) {
                    echo " reported";
                }
                echo "\">
\t\t<div class=\"inner\">
\t";
            }
            // line 23
            echo "
\t\t<div class=\"postbody\" id=\"pr";
            // line 24
            echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_ID");
            echo "\">
\t\t\t<h3><a href=\"#pr";
            // line 25
            echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_ID");
            echo "\">";
            echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_SUBJECT");
            echo "</a></h3>

\t\t\t";
            // line 27
            if ((($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POSTER_QUOTE") && $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "DECODED_MESSAGE")) || $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "U_MCP_DETAILS"))) {
                // line 28
                echo "\t\t\t<ul class=\"post-buttons\">
\t\t\t";
                // line 29
                if ($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "U_MCP_DETAILS")) {
                    // line 30
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                    // line 31
                    echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "U_MCP_DETAILS");
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
                    echo "\" class=\"button icon-button info-icon\">
\t\t\t\t\t\t<span>";
                    // line 32
                    echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t<li>
\t\t\t";
                }
                // line 36
                echo "\t\t\t";
                if (($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POSTER_QUOTE") && $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "DECODED_MESSAGE"))) {
                    // line 37
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#postingbox\" onclick=\"addquote(";
                    // line 38
                    echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_ID");
                    echo ", '";
                    echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POSTER_QUOTE");
                    echo "', '";
                    echo addslashes($this->env->getExtension('phpbb')->lang("WROTE"));
                    echo "');\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("QUOTE");
                    echo " ";
                    echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_AUTHOR");
                    echo "\" class=\"button icon-button quote-icon\">
\t\t\t\t\t\t<span>";
                    // line 39
                    echo $this->env->getExtension('phpbb')->lang("QUOTE");
                    echo " ";
                    echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_AUTHOR");
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
                }
                // line 43
                echo "\t\t\t</ul>
\t\t\t";
            }
            // line 45
            echo "
\t\t\t<p class=\"author\">";
            // line 46
            if ((isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "MINI_POST_IMG");
            } else {
                echo "<a href=\"";
                echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "U_MINI_POST");
                echo "\">";
                echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "MINI_POST_IMG");
                echo "</a>";
            }
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_AUTHOR_FULL");
            echo "</strong> &raquo; ";
            echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_DATE");
            echo "  </p>
\t\t\t<div class=\"content\">";
            // line 47
            echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "MESSAGE");
            echo "</div>

\t\t\t";
            // line 49
            if ($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "S_HAS_ATTACHMENTS")) {
                // line 50
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "</dt>
\t\t\t\t\t";
                // line 52
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "attachment"));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 53
                    echo "\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute((isset($context["attachment"]) ? $context["attachment"] : null), "DISPLAY_ATTACHMENT");
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 57
            echo "
\t\t\t";
            // line 58
            if (($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POSTER_QUOTE") && $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "DECODED_MESSAGE"))) {
                // line 59
                echo "\t\t\t\t<div id=\"message_";
                echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_ID");
                echo "\" style=\"display: none;\">";
                echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "DECODED_MESSAGE");
                echo "</div>
\t\t\t";
            }
            // line 61
            echo "\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_review_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</div>

<hr />

";
        // line 69
        if ((isset($context["S_MCP_REPORT"]) ? $context["S_MCP_REPORT"] : null)) {
            // line 70
            echo "\t<p><a href=\"#report\" class=\"top2\">";
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "</a></p>
";
        } else {
            // line 72
            echo "\t<p><a href=\"#postingbox\" class=\"top2\">";
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "</a></p>
";
        }
    }

    public function getTemplateName()
    {
        return "posting_topic_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 70,  233 => 69,  210 => 59,  205 => 57,  192 => 53,  188 => 52,  184 => 51,  181 => 50,  153 => 45,  140 => 39,  122 => 36,  115 => 32,  99 => 27,  88 => 24,  85 => 23,  71 => 20,  60 => 15,  53 => 13,  47 => 10,  35 => 4,  23 => 3,  166 => 70,  130 => 59,  87 => 31,  79 => 29,  69 => 24,  63 => 21,  43 => 11,  39 => 10,  325 => 102,  322 => 101,  305 => 99,  298 => 97,  297 => 96,  290 => 94,  278 => 90,  276 => 89,  271 => 88,  269 => 87,  265 => 86,  261 => 85,  257 => 84,  252 => 83,  237 => 78,  228 => 75,  226 => 74,  218 => 61,  209 => 70,  203 => 68,  201 => 55,  197 => 66,  193 => 65,  186 => 63,  176 => 57,  172 => 73,  170 => 54,  167 => 53,  143 => 63,  136 => 61,  125 => 37,  110 => 30,  98 => 27,  94 => 26,  90 => 25,  82 => 23,  74 => 21,  70 => 20,  62 => 16,  58 => 17,  54 => 16,  25 => 5,  650 => 189,  646 => 187,  640 => 184,  635 => 183,  632 => 182,  630 => 181,  627 => 180,  623 => 178,  617 => 176,  615 => 175,  609 => 174,  604 => 173,  600 => 171,  598 => 170,  595 => 169,  589 => 166,  583 => 165,  578 => 164,  575 => 163,  573 => 162,  570 => 161,  547 => 158,  538 => 157,  535 => 156,  533 => 155,  530 => 154,  526 => 152,  524 => 151,  521 => 150,  511 => 148,  508 => 147,  500 => 145,  497 => 144,  489 => 142,  486 => 141,  478 => 139,  475 => 138,  467 => 136,  464 => 135,  456 => 133,  453 => 132,  445 => 130,  442 => 129,  441 => 128,  435 => 124,  433 => 123,  430 => 122,  425 => 119,  419 => 116,  416 => 115,  413 => 114,  406 => 110,  402 => 108,  400 => 107,  396 => 106,  386 => 104,  384 => 103,  381 => 102,  371 => 95,  362 => 94,  355 => 93,  349 => 92,  345 => 91,  341 => 90,  336 => 87,  334 => 86,  331 => 85,  326 => 82,  324 => 81,  321 => 80,  319 => 79,  315 => 77,  314 => 76,  300 => 73,  296 => 71,  295 => 70,  291 => 68,  288 => 67,  281 => 66,  272 => 65,  264 => 63,  262 => 62,  255 => 59,  250 => 57,  241 => 72,  239 => 54,  234 => 77,  224 => 50,  214 => 71,  211 => 46,  208 => 58,  189 => 64,  185 => 80,  180 => 41,  178 => 40,  175 => 39,  171 => 37,  159 => 36,  156 => 46,  152 => 52,  149 => 43,  146 => 31,  132 => 30,  128 => 38,  126 => 58,  114 => 31,  106 => 30,  101 => 28,  100 => 21,  97 => 20,  91 => 32,  83 => 30,  78 => 22,  73 => 10,  50 => 15,  42 => 8,  33 => 8,  28 => 3,  306 => 84,  301 => 98,  287 => 93,  284 => 92,  270 => 78,  267 => 64,  253 => 76,  246 => 81,  243 => 80,  230 => 52,  227 => 65,  222 => 73,  216 => 63,  202 => 62,  199 => 61,  187 => 54,  179 => 49,  174 => 47,  169 => 46,  165 => 45,  160 => 69,  158 => 41,  155 => 34,  141 => 39,  138 => 38,  124 => 37,  121 => 36,  113 => 31,  109 => 31,  104 => 29,  102 => 40,  95 => 24,  92 => 25,  86 => 24,  81 => 14,  76 => 16,  68 => 14,  66 => 18,  57 => 14,  55 => 16,  52 => 8,  44 => 6,  36 => 6,  34 => 3,  31 => 4,  38 => 11,  24 => 4,  22 => 2,  19 => 1,);
    }
}
