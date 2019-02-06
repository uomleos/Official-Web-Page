<?php

/* forms.html */
class __TwigTemplate_9d49d76aaa82fe8d385b57d7b132dae586f9f9256d271b72851a133f1d7ae354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "forms.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'translations' => array($this, 'block_translations'),
            'after_javascript' => array($this, 'block_after_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div id=\"forms_container\"></div>

  <div>
    <p class=\"mailpoet_sending_methods_help help\">
      ";
        // line 8
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("<strong>Tip:</strong> we have a [link]list of plugins[/link] that work with MailPoet if you need fancier forms."), "http://beta.docs.mailpoet.com/article/198-list-of-forms-plugins-that-work-with-mailpoet?utm_source=plugin&utm_medium=settings&utm_campaign=helpdocs", array("target" => "_blank", "id" => "mailpoet_helper_link"));
        // line 11
        echo "
    </p>
  </div>

  <script type=\"text/javascript\">
    var mailpoet_listing_per_page = ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["items_per_page"]) ? $context["items_per_page"] : null), "html", null, true);
        echo ";
    var mailpoet_segments = ";
        // line 17
        echo json_encode((isset($context["segments"]) ? $context["segments"] : null));
        echo ";
    var mailpoet_form_edit_url =
      \"";
        // line 19
        echo admin_url("admin.php?page=mailpoet-form-editor&id=");
        echo "\";
  </script>
";
    }

    // line 23
    public function block_translations($context, array $blocks = array())
    {
        // line 24
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(array("pageTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Forms"), "searchLabel" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Search"), "loadingItems" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Loading forms..."), "noItemsFound" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("No forms were found. Why not create a new one?"), "selectAllLabel" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("All forms on this page are selected."), "selectedAllLabel" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("All %d forms are selected."), "selectAllLink" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select all forms on all pages"), "clearSelection" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Clear selection"), "permanentlyDeleted" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%d forms permanently deleted."), "selectBulkAction" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select bulk action"), "bulkActions" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Bulk Actions"), "apply" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Apply"), "filter" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Filter"), "emptyTrash" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Empty Trash"), "selectAll" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select All"), "restore" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Restore"), "deletePermanently" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Delete Permanently"), "previousPage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Previous page"), "firstPage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("First page"), "nextPage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Next page"), "lastPage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Last page"), "currentPage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Current Page"), "pageOutOf" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("of"), "numberOfItemsSingular" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("1 item"), "numberOfItemsMultiple" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d items"), "formName" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Name"), "segments" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Lists"), "userChoice" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("User choice:"), "signups" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sign-ups"), "createdOn" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Created On"), "oneFormTrashed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("1 form was moved to the trash."), "multipleFormsTrashed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d forms were moved to the trash."), "oneFormDeleted" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("1 form was permanently deleted."), "multipleFormsDeleted" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d forms were permanently deleted."), "oneFormRestored" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("1 form has been restored from the trash."), "multipleFormsRestored" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d forms have been restored from the trash."), "edit" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Edit"), "duplicate" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Duplicate"), "formDuplicated" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Form \"%\$1s\" has been duplicated."), "trash" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Trash"), "moveToTrash" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Move to trash"), "new" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add New")));
        // line 69
        echo "
";
    }

    // line 72
    public function block_after_javascript($context, array $blocks = array())
    {
        // line 73
        echo "<script type=\"text/javascript\">
  jQuery('#mailpoet_helper_link').on('click', function() {
    MailPoet.trackEvent('Forms page > link to doc page', {
      'MailPoet Free version': window.mailpoet_version
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "forms.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 73,  75 => 72,  70 => 69,  67 => 24,  64 => 23,  57 => 19,  52 => 17,  48 => 16,  41 => 11,  39 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms.html", "/home/uomleoso/public_html/wp-content/plugins/mailpoet/views/forms.html");
    }
}
