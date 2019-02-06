<?php

/* settings/advanced.html */
class __TwigTemplate_3f76013ee2e8f6ea9261d601c5e0f73f8b3c6ece9bc7727fc0c952dd1ddabfc3 extends Twig_Template
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
        echo "<table class=\"form-table\">
  <tbody>
    <!-- bounce email -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[bounce_email]\">
          ";
        // line 7
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Bounce email address");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 10
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your bounced emails will be sent to this address.");
        echo "
          <a href=\"http://beta.docs.mailpoet.com/article/180-how-bounce-management-works-in-mailpoet-3\"
             target=\"_blank\"
          >";
        // line 13
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more.", "support article link label");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <input type=\"text\"
            id=\"settings[bounce_email]\"
            name=\"bounce[address]\"
            value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "bounce", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"bounce@mydomain.com\"
          />
        </p>
      </td>
    </tr>
    <!-- task scheduler -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 31
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newsletter task scheduler (cron)");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 34
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select what will activate your newsletter queue.");
        echo "
          <a href=\"http://docs.mailpoet.com/article/129-what-is-the-newsletter-task-scheduler\"
             target=\"_blank\"
          >";
        // line 37
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more.", "support article link label");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"cron_trigger[method]\"
              value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cron_trigger"]) ? $context["cron_trigger"] : null), "wordpress", array()), "html", null, true);
        echo "\"
              ";
        // line 47
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cron_trigger", array()), "method", array()) == $this->getAttribute((isset($context["cron_trigger"]) ? $context["cron_trigger"] : null), "wordpress", array()))) {
            // line 48
            echo "              checked=\"checked\"
              ";
        }
        // line 50
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Visitors to your website (recommended)");
        echo "
          </label>
        </p>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"cron_trigger[method]\"
              value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cron_trigger"]) ? $context["cron_trigger"] : null), "mailpoet", array()), "html", null, true);
        echo "\"
              ";
        // line 59
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cron_trigger", array()), "method", array()) == $this->getAttribute((isset($context["cron_trigger"]) ? $context["cron_trigger"] : null), "mailpoet", array()))) {
            // line 60
            echo "                checked=\"checked\"
                ";
        }
        // line 62
        echo "              />";
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("MailPoet's own script. Doesn't work with [link]these hosts[/link]."), "http://docs.mailpoet.com/article/131-hosts-which-mailpoet-task-scheduler-wont-work", array("target" => "_blank"));
        // line 65
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- roles and capabilities -->
    <tr>
      <th scope=\"row\">
        ";
        // line 73
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Roles and capabilities");
        echo "
        <p class=\"description\">
          ";
        // line 75
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage which WordPress roles access which features of MailPoet.");
        echo "
        </p>
      </th>
      <td>
        ";
        // line 79
        if ((isset($context["members_plugin_active"]) ? $context["members_plugin_active"] : null)) {
            // line 80
            echo "        <p>
          <a href=\"";
            // line 81
            echo admin_url("users.php?page=roles");
            echo "\">";
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage using the Members plugin");
            echo "</a>
        </p>
        ";
        } else {
            // line 84
            echo "          ";
            echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Install the plugin [link]Members[/link] (free) to manage permissions."), "https://wordpress.org/plugins/members/", array("target" => "_blank"));
            // line 87
            echo "
        ";
        }
        // line 89
        echo "      </td>
    </tr>
    <!-- link tracking -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 95
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Open and click tracking");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 98
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enable or disable open and click tracking.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"tracking[enabled]\"
              value=\"1\"
              ";
        // line 108
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "tracking", array()), "enabled", array())) {
            // line 109
            echo "              checked=\"checked\"
              ";
        }
        // line 111
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              name=\"tracking[enabled]\"
              value=\"\"
              ";
        // line 119
        if ( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "tracking", array()), "enabled", array())) {
            // line 120
            echo "              checked=\"checked\"
              ";
        }
        // line 122
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- share anonymous data? -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 131
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Share anonymous data");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 134
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Share anonymous data and help us improve the plugin. We appreciate your help!");
        echo "
          <a
            href=\"http://docs.mailpoet.com/article/130-sharing-your-data-with-us\"
            target=\"_blank\"
          >";
        // line 138
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more.", "support article link label");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"analytics[enabled]\"
              value=\"1\"
              ";
        // line 148
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "analytics", array()), "enabled", array())) {
            // line 149
            echo "                checked=\"checked\"
              ";
        }
        // line 151
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              name=\"analytics[enabled]\"
              value=\"\"
              ";
        // line 159
        if ( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "analytics", array()), "enabled", array())) {
            // line 160
            echo "                checked=\"checked\"
              ";
        }
        // line 162
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- reCaptcha settings -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 171
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enable reCAPTCHA");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 174
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Use reCAPTCHA to protect MailPoet subscription forms.");
        echo "
          <a
            href=\"https://www.google.com/recaptcha/admin\"
            target=\"_blank\"
          >";
        // line 178
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sign up for an API key pair here.");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"re_captcha[enabled]\"
              value=\"1\"
              ";
        // line 188
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "re_captcha", array()), "enabled", array())) {
            // line 189
            echo "                checked=\"checked\"
              ";
        }
        // line 191
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              name=\"re_captcha[enabled]\"
              value=\"\"
              ";
        // line 199
        if ( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "re_captcha", array()), "enabled", array())) {
            // line 200
            echo "                checked=\"checked\"
              ";
        }
        // line 202
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </p>
        <div id=\"settings_re_captcha_tokens\">
          <p>
            <input type=\"text\"
              name=\"re_captcha[site_token]\"
              value=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "re_captcha", array()), "site_token", array()), "html", null, true);
        echo "\"
              placeholder=\"";
        // line 210
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your reCAPTCHA Site Key");
        echo "\"
              class=\"regular-text\"
            />
          </p>
          <p>
            <input type=\"text\"
              name=\"re_captcha[secret_token]\"
              value=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "re_captcha", array()), "secret_token", array()), "html", null, true);
        echo "\"
              placeholder=\"";
        // line 218
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your reCAPTCHA Secret Key");
        echo "\"
              class=\"regular-text\"
            />
          </p>
          <div id=\"settings_re_captcha_tokens_error\" class=\"mailpoet_error_item mailpoet_error\">
            ";
        // line 223
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please fill the reCAPTCHA keys.");
        echo " 
          </div>
        </div>
      </td>
    </tr>
    <!-- reinstall -->
    <tr>
      <th scope=\"row\">
        <label>";
        // line 231
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reinstall from scratch");
        echo "</label>
        <p class=\"description\">
          ";
        // line 233
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Want to start from the beginning? This will completely delete MailPoet and reinstall it from scratch. Remember: you will lose all of your data!");
        echo "
        </p>
      </th>
      <td>
        <p>
          <a
            id=\"mailpoet_reinstall\"
            class=\"button\"
            href=\"javascript:;\">";
        // line 241
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reinstall now...");
        echo "</a>
        </p>
      </td>
    </tr>
  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "settings/advanced.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 241,  394 => 233,  389 => 231,  378 => 223,  370 => 218,  366 => 217,  356 => 210,  352 => 209,  341 => 202,  337 => 200,  335 => 199,  323 => 191,  319 => 189,  317 => 188,  304 => 178,  297 => 174,  291 => 171,  278 => 162,  274 => 160,  272 => 159,  260 => 151,  256 => 149,  254 => 148,  241 => 138,  234 => 134,  228 => 131,  215 => 122,  211 => 120,  209 => 119,  197 => 111,  193 => 109,  191 => 108,  178 => 98,  172 => 95,  164 => 89,  160 => 87,  157 => 84,  149 => 81,  146 => 80,  144 => 79,  137 => 75,  132 => 73,  122 => 65,  119 => 62,  115 => 60,  113 => 59,  109 => 58,  97 => 50,  93 => 48,  91 => 47,  87 => 46,  75 => 37,  69 => 34,  63 => 31,  50 => 21,  39 => 13,  33 => 10,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/advanced.html", "/home/uomleoso/public_html/wp-content/plugins/mailpoet/views/settings/advanced.html");
    }
}
