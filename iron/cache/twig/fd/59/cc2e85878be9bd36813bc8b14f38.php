<?php

/* permission_roles_mask.html */
class __TwigTemplate_fd59cc2e85878be9bd36813bc8b14f38 extends Twig_Template
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
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "role_mask"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["role_mask"]) {
            // line 3
            echo "
\t<table class=\"table1\">
\t\t<caption>";
            // line 5
            if ($this->getAttribute((isset($context["role_mask"]) ? $context["role_mask"] : null), "FORUM_ID")) {
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
            }
            echo $this->getAttribute((isset($context["role_mask"]) ? $context["role_mask"] : null), "NAME");
            echo "</caption>
\t<tbody>
\t<tr>
\t\t<th>";
            // line 8
            echo $this->env->getExtension('phpbb')->lang("USERS");
            echo "</th>
\t</tr>
\t<tr>
\t\t<td class=\"row1\">
\t\t\t";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["role_mask"]) ? $context["role_mask"] : null), "users"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
                // line 13
                echo "\t\t\t\t<a href=\"";
                echo $this->getAttribute((isset($context["users"]) ? $context["users"] : null), "U_PROFILE");
                echo "\">";
                echo $this->getAttribute((isset($context["users"]) ? $context["users"] : null), "USERNAME");
                echo "</a>";
                if ((!$this->getAttribute((isset($context["users"]) ? $context["users"] : null), "S_LAST_ROW"))) {
                    echo " :: ";
                }
                // line 14
                echo "\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 15
                echo "\t\t\t\t";
                echo $this->env->getExtension('phpbb')->lang("USERS_NOT_ASSIGNED");
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t</td>
\t</tr>
\t<tr>
\t\t<th>";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("GROUPS");
            echo "</th>
\t</tr>
\t<tr>
\t\t<td class=\"row2\">
\t\t\t";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["role_mask"]) ? $context["role_mask"] : null), "groups"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
                // line 25
                echo "\t\t\t\t<a href=\"";
                echo $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "U_PROFILE");
                echo "\">";
                echo $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "GROUP_NAME");
                echo "</a>";
                if ((!$this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "S_LAST_ROW"))) {
                    echo " :: ";
                }
                // line 26
                echo "\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 27
                echo "\t\t\t\t";
                echo $this->env->getExtension('phpbb')->lang("GROUPS_NOT_ASSIGNED");
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t</td>
\t</tr>
\t</tbody>
\t</table>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "\t
\t<p>";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("ROLE_NOT_ASSIGNED");
            echo "</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role_mask'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "permission_roles_mask.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 36,  127 => 35,  117 => 29,  108 => 27,  103 => 26,  94 => 25,  89 => 24,  82 => 20,  77 => 17,  68 => 15,  63 => 14,  54 => 13,  49 => 12,  42 => 8,  31 => 5,  27 => 3,  22 => 2,  19 => 1,);
    }
}
