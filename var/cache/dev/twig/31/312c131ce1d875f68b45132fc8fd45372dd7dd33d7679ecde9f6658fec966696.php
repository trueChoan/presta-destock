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

/* __string_template__f18ed3a9a365f1ee62e64d9a8f408e5a3afc364be6cd72399237d4e2dc417da1 */
class __TwigTemplate_26e446801ed6dd2fd7c2b6138fa94e664ac714d90b16fd357458960f04075e8d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__f18ed3a9a365f1ee62e64d9a8f408e5a3afc364be6cd72399237d4e2dc417da1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__f18ed3a9a365f1ee62e64d9a8f408e5a3afc364be6cd72399237d4e2dc417da1"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/cbdestock/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/cbdestock/img/app_icon.png\" />

<title>Performances ??? CBDestock</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.8.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a ??t?? pass??e sur votre boutique.';
    var order_number_msg = 'Num??ro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a ??t?? post?? sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'b0120b6c27b1af2f365b3166c1f24f9e';
    var token_admin_orders = tokenAdminOrders = '601f8aff50c278513e9352ca0fc5f51f';
    var token_admin_customers = '0d88dcb880f83d5fc3a8379afa888e53';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '8c575b6926131586d301d7edcf85f71f';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = '8fde82eb776982ab54f736e98cee064f';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/cbdestock/admin269btjd43/index.php/improve/modules/catalog/recommended?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc';
    var admin_notification_get_link = '/cbdestock/admin269btjd43/index";
        // line 42
        echo ".php/common/notifications?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc';
    var admin_notification_push_link = adminNotificationPushLink = '/cbdestock/admin269btjd43/index.php/common/notifications/ack?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc';
    var tab_modules_list = '';
    var update_success_msg = 'Mise ?? jour r??ussie';
    var errorLogin = 'PrestaShop n\\'a pas pu se connecter ?? Addons. Veuillez v??rifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/cbdestock/admin269btjd43/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/admin269btjd43/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/modules/vivawalletofficial/views/css/vivawallet-admin-refunds.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/js/jquery/ui/themes/base/jquery.ui.core.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/js/jquery/ui/themes/base/jquery.ui.theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/modules/tvcmsslider/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/cbdestock\\/admin269btjd43\\/\";
var baseDir = \"\\/cbdest";
        // line 65
        echo "ock\\/\";
var changeFormLanguageUrl = \"\\/cbdestock\\/admin269btjd43\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/cbdestock/admin269btjd43/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/admin.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/admin269btjd43/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/tools.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" sr";
        // line 84
        echo "c=\"/cbdestock/admin269btjd43/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/admin269btjd43/themes/default/js/bundle/module/module_card.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/modules/vivawalletofficial/views/js/vivawallet-admin-refunds.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/jquery/ui/jquery.ui.core.min.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/jquery/ui/jquery.ui.widget.min.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/jquery/ui/jquery.ui.mouse.min.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/jquery/ui/jquery.ui.sortable.min.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost:8888\\/cbdestock\\/admin269btjd43\\/index.php?controller=AdminGamification&token=4be6055962f5cc3aaf653f8338d7510d\";
            var current_id_tab = 105;
        </script>

";
        // line 100
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminperformance\"
  data-base-url=\"/cbdestock/admin269btjd43/index.php\"  data-token=\"I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminDashboard&amp;token=79a58f10d83a363d74a98f25c30f88c0\"></a>
      <span id=\"shop_version\">1.7.8.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acc??s rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminOrders&amp;token=601f8aff50c278513e9352ca0fc5f51f\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=baec5e2e7d639c6020f0cc20a7251c84\"
                 data-item=\"??valuation du catalogue\"
      >??valuation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php/improve/modules/manage?token=1ad85a221fcf7d6ad03cc4ee585667b4\"
                 data-item=\"Modules install??s\"
      >Modules install??s</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=630020b3ff9aab0afbacc75c5a8cdac9\"
                 data-";
        // line 135
        echo "item=\"Nouveau bon de r??duction\"
      >Nouveau bon de r??duction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php/sell/catalog/products/new?token=1ad85a221fcf7d6ad03cc4ee585667b4\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php/sell/catalog/categories/new?token=1ad85a221fcf7d6ad03cc4ee585667b4\"
                 data-item=\"Nouvelle cat??gorie\"
      >Nouvelle cat??gorie</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminModules&amp;&amp;configure=tvcmsblog&amp;token=f8927f77131746bc6e3a4eab050ac2d2\"
                 data-item=\"ThemeVolty Settings\"
      >ThemeVolty Settings</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"26\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminQuickAccesses&token=17174e3f81ed774249c1c2f10ded9233\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Performances - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle ?? l'acc??s rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminQuickAccesses&token=17174e3f81ed774249c1c2f10ded9233\">
      <i class=\"material-icons\">settings</i>
      G??rez vos acc??s rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-";
        // line 173
        echo "form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/cbdestock/admin269btjd43/index.php?controller=AdminSearch&amp;token=9203b41ee26957af0255e75842f99cad\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : r??f??rence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, r??f??rence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Num??ro de facture\" data-icon=\"icon-book";
        // line 191
        echo "\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Votre boutique est en mode de d??bogage.</strong></p><p class='text-left'>Tous les messages et erreurs PHP sont affich??s. Lorsque vous n'en avez plus besoin, <strong>d??sactivez</strong> ce mode.</p>\"
             href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/performance/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Mode debug</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8888/cbdestock/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-not";
        // line 232
        echo "ifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consult?? vos <strong><a href=\"http://localhost:8888/cbdestock/admin269b";
        // line 284
        echo "tjd43/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=889b817af37b171b54246da5b0f42b75\">paniers abandonn??s</a></strong> ?<br> Votre prochaine commande s'y trouve peut-??tre !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              ??tes-vous actifs sur les r??seaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistr?? le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-em";
        // line 331
        echo "ployee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8888/cbdestock/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir High</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/employees/1/edit?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Place de march?? de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;u";
        // line 352
        echo "tm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminLogin&amp;logout=1&amp;token=c35d598bb7baba81bb0992d726108d40\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>D??connexion</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/cbdestock/admin269btjd43/index.php/configure/advanced/employees/toggle-navigation?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminDashboard&amp;token=79a58f10d83a363d74a98f25c30f88c0\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/sell/orders/?_token=I2Ft_JJwbpYWk2EQ6";
        // line 396
        echo "FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/orders/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/orders/invoices/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/orders/credit-slips/?_tok";
        // line 426
        echo "en=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/orders/delivery-slips/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminCarts&amp;token=889b817af37b171b54246da5b0f42b75\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/sell/catalog/products?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
         ";
        // line 459
        echo "                                                           keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/catalog/products?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/catalog/categories?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Cat??gories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/catalog/monitoring/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                            ";
        // line 489
        echo "                
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminAttributesGroups&amp;token=2f9b42d4e7094a829860d92720612be5\" class=\"link\"> Attributs &amp; caract??ristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/catalog/brands/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/attachments/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminCartRules&amp;token=630020b3ff9aab0afbacc75c5a8cdac9\" class=\"link\"> R??ductions
                      ";
        // line 516
        echo "          </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/stocks/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/sell/customers/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/custo";
        // line 548
        echo "mers/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/addresses/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminCustomerThreads&amp;token=8c575b6926131586d301d7edcf85f71f\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                     ";
        // line 580
        echo "         <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminCustomerThreads&amp;token=8c575b6926131586d301d7edcf85f71f\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/customer-service/order-messages/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Messages pr??d??finis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminReturn&amp;token=8175582f7cd9283f2b81f792ae4bfdbb\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/modules/metrics/legacy/stats?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                  ";
        // line 609
        echo "    <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/modules/metrics/legacy/stats?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/modules/metrics?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Perso";
        // line 643
        echo "nnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/improve/modules/manage?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/modules/manage?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/modules/addons/modules/catalog?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Catalogue de modules
                       ";
        // line 674
        echo "         </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/improve/design/themes/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/design/themes/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Th??me et logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
          ";
        // line 705
        echo "                    <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/modules/addons/themes/catalog?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Catalogue de th??mes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/design/mail_theme/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Th??me d&#039;email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/design/cms-pages/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/design/modules/positions/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Positions
                                </a>
                              </li>

                   ";
        // line 734
        echo "                                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminImages&amp;token=181c4b8686e6c3e7e87eb84b623487d8\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/modules/link-widget/list?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminCarriers&amp;token=c1e49c48bf9c6d0e3273b064e25fa2a3\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                             ";
        // line 764
        echo "               </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminCarriers&amp;token=c1e49c48bf9c6d0e3273b064e25fa2a3\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/shipping/preferences/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Pr??f??rences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/improve/payment/payment_methods?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons s";
        // line 795
        echo "ub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/payment/payment_methods?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Modes de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/payment/preferences?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Pr??f??rences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/improve/international/localization/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
        ";
        // line 825
        echo "              <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/international/localization/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/international/zones/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Zones g??ographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/international/taxes/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"";
        // line 853
        echo "link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/international/translations/settings?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminPsfacebookModule&amp;token=abf201957508c3662af61f0fca47d9e0\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\"";
        // line 885
        echo ">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminPsfacebookModule&amp;token=abf201957508c3662af61f0fca47d9e0\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=1ccb429757d297863c9600bed673077b\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/configure/shop/preferences/preferences?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Param??tres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                      ";
        // line 921
        echo "              keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/shop/preferences/preferences?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Param??tres g??n??raux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/shop/order-preferences/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/shop/product-preferences/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
          ";
        // line 951
        echo "                                                  
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/shop/customer-preferences/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/shop/contacts/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/shop/seo-urls/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminSearchConf&amp;token=8c34a3b856d7c306846707e1e3a80ed2\" class=\"link\"> Rechercher
                          ";
        // line 978
        echo "      </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminGamification&amp;token=4be6055962f5cc3aaf653f8338d7510d\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/system-information/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Param??tres avanc??s
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li ";
        // line 1009
        echo "class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/system-information/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/performance/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/administration/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/emails/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Email
                                </a>
                              </li>

                             ";
        // line 1038
        echo "                                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/import/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/employees/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> ??quipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/sql-requests/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Base de donn??es
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/logs/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYm";
        // line 1066
        echo "ZL3L_nKCXN8SdNc\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/webservice-keys/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/feature-flags/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Fonctionnalit??s Exp??rimentales
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Param??tres avanc??s</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/performance/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" aria-current=\"pag";
        // line 1106
        echo "e\">Performances</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performances          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/performance/clear-cache?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\"                  title=\"Vider le cache\"                >
                  <i class=\"material-icons\">delete</i>                  Vider le cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/cbdestock/admin269btjd43/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.7%2526country%253Dfr/Aide?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
           ";
        // line 1156
        echo "   href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/performance/clear-cache?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\"              title=\"Vider le cache\"            >
              Vider le cache
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/cbdestock/admin269btjd43/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.7%2526country%253Dfr/Aide?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  <!-- begin /Applications/MAMP/htdocs/cbdestock/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Modules et services recommand??s',
        'Close': 'Fermer',
      },
      recommendedModulesUrl: '/cbdestock/admin269btjd43/index.php/modules/addons/modules/recommended?tabClassName=AdminPerformance&_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end /Applications/MAMP/htdocs/cbdestock/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1201
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adapt??e au mobile, vous ??tes invit?? ?? la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminDashboard&amp;token=79a58f10d83a363d74a98f25c30f88c0\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Pr??c??dent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=cbdestock%40proton.me&amp;firstname=High&amp;lastname=Society&amp;website=http%3A%2F%2Flocalhost%3A8888%2Fcbdestock%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/cbdestock/admin269btjd43/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous ?? la place de march?? de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<";
        // line 1248
        echo "hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les cl??s pour r??ussir votre boutique sont sur PrestaShop Addons ! D??couvrez sur la place de march?? officielle de PrestaShop plus de 3 500 modules et th??mes pour augmenter votre trafic, optimiser vos conversions, fid??liser vos clients et vous faciliter l???e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous ?? PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oubli??</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=cbdestock%40proton.me&amp;firstname=High&amp;lastname=Society&amp;website=http%3A%2F%2Flocalhost%3A8888%2Fcbdestock%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCr??er un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t";
        // line 1289
        echo "\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1309
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 100
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1201
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1309
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__f18ed3a9a365f1ee62e64d9a8f408e5a3afc364be6cd72399237d4e2dc417da1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1553 => 1309,  1488 => 1201,  1455 => 100,  1440 => 1309,  1418 => 1289,  1375 => 1248,  1322 => 1201,  1275 => 1156,  1223 => 1106,  1181 => 1066,  1151 => 1038,  1120 => 1009,  1087 => 978,  1058 => 951,  1026 => 921,  988 => 885,  954 => 853,  924 => 825,  892 => 795,  859 => 764,  827 => 734,  796 => 705,  763 => 674,  730 => 643,  694 => 609,  663 => 580,  629 => 548,  595 => 516,  566 => 489,  534 => 459,  499 => 426,  467 => 396,  421 => 352,  398 => 331,  349 => 284,  295 => 232,  252 => 191,  232 => 173,  192 => 135,  152 => 100,  134 => 84,  113 => 65,  88 => 42,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/cbdestock/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/cbdestock/img/app_icon.png\" />

<title>Performances ??? CBDestock</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminPerformance\\';
    var iso_user = \\'fr\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'fr\\';
    var full_cldr_language_code = \\'fr-FR\\';
    var country_iso_code = \\'FR\\';
    var _PS_VERSION_ = \\'1.7.8.7\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'Une nouvelle commande a ??t?? pass??e sur votre boutique.\\';
    var order_number_msg = \\'Num??ro de commande : \\';
    var total_msg = \\'Total : \\';
    var from_msg = \\'Du \\';
    var see_order_msg = \\'Afficher cette commande\\';
    var new_customer_msg = \\'Un nouveau client s\\\\\\'est inscrit sur votre boutique\\';
    var customer_name_msg = \\'Nom du client : \\';
    var new_msg = \\'Un nouveau message a ??t?? post?? sur votre boutique.\\';
    var see_msg = \\'Lire le message\\';
    var token = \\'b0120b6c27b1af2f365b3166c1f24f9e\\';
    var token_admin_orders = tokenAdminOrders = \\'601f8aff50c278513e9352ca0fc5f51f\\';
    var token_admin_customers = \\'0d88dcb880f83d5fc3a8379afa888e53\\';
    var token_admin_customer_threads = tokenAdminCustomerThreads = \\'8c575b6926131586d301d7edcf85f71f\\';
    var currentIndex = \\'index.php?controller=AdminPerformance\\';
    var employee_token = \\'8fde82eb776982ab54f736e98cee064f\\';
    var choose_language_translate = \\'Choisissez la langue :\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/cbdestock/admin269btjd43/index.php/improve/modules/catalog/recommended?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\\';
    var admin_notification_get_link = \\'/cbdestock/admin269btjd43/index' | raw }}{{ '.php/common/notifications?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/cbdestock/admin269btjd43/index.php/common/notifications/ack?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Mise ?? jour r??ussie\\';
    var errorLogin = \\'PrestaShop n\\\\\\'a pas pu se connecter ?? Addons. Veuillez v??rifier vos identifiants et votre connexion Internet.\\';
    var search_product_msg = \\'Rechercher un produit\\';
  </script>

      <link href=\"/cbdestock/admin269btjd43/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/admin269btjd43/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/modules/vivawalletofficial/views/css/vivawallet-admin-refunds.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/js/jquery/ui/themes/base/jquery.ui.core.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/js/jquery/ui/themes/base/jquery.ui.theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cbdestock/modules/tvcmsslider/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/cbdestock\\\\/admin269btjd43\\\\/\";
var baseDir = \"\\\\/cbdest' | raw }}{{ 'ock\\\\/\";
var changeFormLanguageUrl = \"\\\\/cbdestock\\\\/admin269btjd43\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\\\u20ac\",\"numberSymbols\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\\\u00a0\\\\u00a4\",\"negativePattern\":\"-#,##0.00\\\\u00a0\\\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/cbdestock/admin269btjd43/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/admin.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/admin269btjd43/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/tools.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" sr' | raw }}{{ 'c=\"/cbdestock/admin269btjd43/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/admin269btjd43/themes/default/js/bundle/module/module_card.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/modules/vivawalletofficial/views/js/vivawallet-admin-refunds.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/jquery/ui/jquery.ui.core.min.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/jquery/ui/jquery.ui.widget.min.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/jquery/ui/jquery.ui.mouse.min.js\"></script>
<script type=\"text/javascript\" src=\"/cbdestock/js/jquery/ui/jquery.ui.sortable.min.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\\\/\\\\/localhost:8888\\\\/cbdestock\\\\/admin269btjd43\\\\/index.php?controller=AdminGamification&token=4be6055962f5cc3aaf653f8338d7510d\";
            var current_id_tab = 105;
        </script>

' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-fr adminperformance\"
  data-base-url=\"/cbdestock/admin269btjd43/index.php\"  data-token=\"I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminDashboard&amp;token=79a58f10d83a363d74a98f25c30f88c0\"></a>
      <span id=\"shop_version\">1.7.8.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acc??s rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminOrders&amp;token=601f8aff50c278513e9352ca0fc5f51f\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=baec5e2e7d639c6020f0cc20a7251c84\"
                 data-item=\"??valuation du catalogue\"
      >??valuation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php/improve/modules/manage?token=1ad85a221fcf7d6ad03cc4ee585667b4\"
                 data-item=\"Modules install??s\"
      >Modules install??s</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=630020b3ff9aab0afbacc75c5a8cdac9\"
                 data-' | raw }}{{ 'item=\"Nouveau bon de r??duction\"
      >Nouveau bon de r??duction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php/sell/catalog/products/new?token=1ad85a221fcf7d6ad03cc4ee585667b4\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php/sell/catalog/categories/new?token=1ad85a221fcf7d6ad03cc4ee585667b4\"
                 data-item=\"Nouvelle cat??gorie\"
      >Nouvelle cat??gorie</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminModules&amp;&amp;configure=tvcmsblog&amp;token=f8927f77131746bc6e3a4eab050ac2d2\"
                 data-item=\"ThemeVolty Settings\"
      >ThemeVolty Settings</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"26\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminQuickAccesses&token=17174e3f81ed774249c1c2f10ded9233\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Performances - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle ?? l\\'acc??s rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminQuickAccesses&token=17174e3f81ed774249c1c2f10ded9233\">
      <i class=\"material-icons\">settings</i>
      G??rez vos acc??s rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-' | raw }}{{ 'form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/cbdestock/admin269btjd43/index.php?controller=AdminSearch&amp;token=9203b41ee26957af0255e75842f99cad\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : r??f??rence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, r??f??rence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Num??ro de facture\" data-icon=\"icon-book' | raw }}{{ '\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=\\'text-left\\'><strong>Votre boutique est en mode de d??bogage.</strong></p><p class=\\'text-left\\'>Tous les messages et erreurs PHP sont affich??s. Lorsque vous n\\'en avez plus besoin, <strong>d??sactivez</strong> ce mode.</p>\"
             href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/performance/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Mode debug</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8888/cbdestock/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-not' | raw }}{{ 'ifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consult?? vos <strong><a href=\"http://localhost:8888/cbdestock/admin269b' | raw }}{{ 'tjd43/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=889b817af37b171b54246da5b0f42b75\">paniers abandonn??s</a></strong> ?<br> Votre prochaine commande s\\'y trouve peut-??tre !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l\\'instant :(<br>
              ??tes-vous actifs sur les r??seaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l\\'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistr?? le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-em' | raw }}{{ 'ployee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8888/cbdestock/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir High</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/employees/1/edit?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Place de march?? de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;u' | raw }}{{ 'tm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centre d\\'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminLogin&amp;logout=1&amp;token=c35d598bb7baba81bb0992d726108d40\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>D??connexion</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/cbdestock/admin269btjd43/index.php/configure/advanced/employees/toggle-navigation?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminDashboard&amp;token=79a58f10d83a363d74a98f25c30f88c0\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/sell/orders/?_token=I2Ft_JJwbpYWk2EQ6' | raw }}{{ 'FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/orders/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/orders/invoices/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/orders/credit-slips/?_tok' | raw }}{{ 'en=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/orders/delivery-slips/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminCarts&amp;token=889b817af37b171b54246da5b0f42b75\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/sell/catalog/products?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
         ' | raw }}{{ '                                                           keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/catalog/products?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/catalog/categories?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Cat??gories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/catalog/monitoring/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                            ' | raw }}{{ '                
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminAttributesGroups&amp;token=2f9b42d4e7094a829860d92720612be5\" class=\"link\"> Attributs &amp; caract??ristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/catalog/brands/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/attachments/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminCartRules&amp;token=630020b3ff9aab0afbacc75c5a8cdac9\" class=\"link\"> R??ductions
                      ' | raw }}{{ '          </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/stocks/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/sell/customers/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/custo' | raw }}{{ 'mers/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/addresses/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminCustomerThreads&amp;token=8c575b6926131586d301d7edcf85f71f\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                     ' | raw }}{{ '         <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminCustomerThreads&amp;token=8c575b6926131586d301d7edcf85f71f\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/sell/customer-service/order-messages/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Messages pr??d??finis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminReturn&amp;token=8175582f7cd9283f2b81f792ae4bfdbb\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/modules/metrics/legacy/stats?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                  ' | raw }}{{ '    <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/modules/metrics/legacy/stats?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/modules/metrics?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Perso' | raw }}{{ 'nnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/improve/modules/manage?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/modules/manage?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/modules/addons/modules/catalog?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Catalogue de modules
                       ' | raw }}{{ '         </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/improve/design/themes/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/design/themes/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Th??me et logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
          ' | raw }}{{ '                    <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/modules/addons/themes/catalog?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Catalogue de th??mes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/design/mail_theme/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Th??me d&#039;email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/design/cms-pages/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/design/modules/positions/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Positions
                                </a>
                              </li>

                   ' | raw }}{{ '                                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminImages&amp;token=181c4b8686e6c3e7e87eb84b623487d8\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/modules/link-widget/list?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminCarriers&amp;token=c1e49c48bf9c6d0e3273b064e25fa2a3\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                             ' | raw }}{{ '               </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminCarriers&amp;token=c1e49c48bf9c6d0e3273b064e25fa2a3\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/shipping/preferences/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Pr??f??rences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/improve/payment/payment_methods?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons s' | raw }}{{ 'ub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/payment/payment_methods?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Modes de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/payment/preferences?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Pr??f??rences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/improve/international/localization/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
        ' | raw }}{{ '              <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/international/localization/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/international/zones/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Zones g??ographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/international/taxes/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"' | raw }}{{ 'link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/improve/international/translations/settings?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminPsfacebookModule&amp;token=abf201957508c3662af61f0fca47d9e0\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\"' | raw }}{{ '>
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminPsfacebookModule&amp;token=abf201957508c3662af61f0fca47d9e0\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=1ccb429757d297863c9600bed673077b\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/configure/shop/preferences/preferences?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Param??tres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                      ' | raw }}{{ '              keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/shop/preferences/preferences?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Param??tres g??n??raux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/shop/order-preferences/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/shop/product-preferences/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
          ' | raw }}{{ '                                                  
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/shop/customer-preferences/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/shop/contacts/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/shop/seo-urls/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminSearchConf&amp;token=8c34a3b856d7c306846707e1e3a80ed2\" class=\"link\"> Rechercher
                          ' | raw }}{{ '      </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminGamification&amp;token=4be6055962f5cc3aaf653f8338d7510d\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/system-information/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Param??tres avanc??s
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li ' | raw }}{{ 'class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/system-information/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/performance/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/administration/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/emails/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Email
                                </a>
                              </li>

                             ' | raw }}{{ '                                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/import/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/employees/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> ??quipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/sql-requests/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Base de donn??es
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/logs/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYm' | raw }}{{ 'ZL3L_nKCXN8SdNc\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/webservice-keys/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/feature-flags/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" class=\"link\"> Fonctionnalit??s Exp??rimentales
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Param??tres avanc??s</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/performance/?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\" aria-current=\"pag' | raw }}{{ 'e\">Performances</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performances          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/performance/clear-cache?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\"                  title=\"Vider le cache\"                >
                  <i class=\"material-icons\">delete</i>                  Vider le cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/cbdestock/admin269btjd43/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.7%2526country%253Dfr/Aide?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
           ' | raw }}{{ '   href=\"/cbdestock/admin269btjd43/index.php/configure/advanced/performance/clear-cache?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\"              title=\"Vider le cache\"            >
              Vider le cache
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/cbdestock/admin269btjd43/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.7%2526country%253Dfr/Aide?_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  <!-- begin /Applications/MAMP/htdocs/cbdestock/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        \\'Recommended Modules and Services\\': \\'Modules et services recommand??s\\',
        \\'Close\\': \\'Fermer\\',
      },
      recommendedModulesUrl: \\'/cbdestock/admin269btjd43/index.php/modules/addons/modules/recommended?tabClassName=AdminPerformance&_token=I2Ft_JJwbpYWk2EQ6FG2kpA3tNYmZL3L_nKCXN8SdNc\\',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end /Applications/MAMP/htdocs/cbdestock/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n\\'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adapt??e au mobile, vous ??tes invit?? ?? la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost:8888/cbdestock/admin269btjd43/index.php?controller=AdminDashboard&amp;token=79a58f10d83a363d74a98f25c30f88c0\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Pr??c??dent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=cbdestock%40proton.me&amp;firstname=High&amp;lastname=Society&amp;website=http%3A%2F%2Flocalhost%3A8888%2Fcbdestock%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/cbdestock/admin269btjd43/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous ?? la place de march?? de PrestaShop afin d\\'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<' | raw }}{{ 'hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n\\'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class=\\'text-justify\\'>Les cl??s pour r??ussir votre boutique sont sur PrestaShop Addons ! D??couvrez sur la place de march?? officielle de PrestaShop plus de 3 500 modules et th??mes pour augmenter votre trafic, optimiser vos conversions, fid??liser vos clients et vous faciliter l???e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous ?? PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oubli??</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=cbdestock%40proton.me&amp;firstname=High&amp;lastname=Society&amp;website=http%3A%2F%2Flocalhost%3A8888%2Fcbdestock%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCr??er un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t' | raw }}{{ '\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__f18ed3a9a365f1ee62e64d9a8f408e5a3afc364be6cd72399237d4e2dc417da1", "");
    }
}
