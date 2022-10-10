<?php
/**
* 2007-2021 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2021 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once _PS_MODULE_DIR_.'tvcmstabproducts/tvcmstabproducts.php';
include_once _PS_MODULE_DIR_.'tvcmstabproducts/classes/tvcmstabproducts_status.class.php';

class TvcmsSpecialProducts extends Module
{
    // This Product is Only Use for left and right column product
    public $num_of_prod = 4;
    public function __construct()
    {
        $this->name = 'tvcmsspecialproducts';
        $this->tab = 'front_office_features';
        $this->version = '4.0.0';
        $this->author = 'ThemeVolty';
        $this->need_instance = 0;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('ThemeVolty - Special Product');
        $this->description = $this->l('Its Show Special Product in Front Side.');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->module_key = '';

        $this->confirmUninstall = $this->l('Warning: all the data saved in your database will be deleted.'.
            ' Are you sure you want uninstall this module?');
    }

    public function install()
    {
        $this->_clearCache('*');
        return parent::install()
            && $this->registerHook('displayHeader')
            && $this->registerHook('displayLeftColumn')
            && $this->registerHook('displayWrapperTop')
            && $this->registerHook('displayContentWrapperTop')
            && $this->registerHook('displayRightColumn')
            && $this->registerHook('displayHome');
    }

    public function uninstall()
    {
        $this->_clearCache('*');
        return parent::uninstall();
    }

    public function hookActionProductAdd($params)
    {
        $this->_clearCache('*');
    }

    public function hookActionProductUpdate($params)
    {
        $this->_clearCache('*');
    }

    public function hookActionProductDelete($params)
    {
        $this->_clearCache('*');
    }

    public function hookActionOrderStatusPostUpdate($params)
    {
        $this->_clearCache('*');
    }

    public function _clearCache($template, $cache_id = null, $compile_id = null)
    {
        parent::_clearCache('tvcmsspecialproducts_display_home.tpl');
        parent::_clearCache('tvcmsspecialproducts_display_home_ajax.tpl');
        parent::_clearCache('tvcmsspecialproducts_display_left.tpl');
        parent::_clearCache('tvcmsspecialproducts_display_right.tpl');
    }

    public function getArrMainTitle($main_heading, $main_heading_data)
    {
        if (!$main_heading['main_title'] || empty($main_heading_data['title'])) {
            $main_heading['main_title'] = false;
        }
        if (!$main_heading['main_sub_title'] || empty($main_heading_data['short_desc'])) {
            $main_heading['main_sub_title'] = false;
        }
        if (!$main_heading['main_description'] || empty($main_heading_data['desc'])) {
            $main_heading['main_description'] = false;
        }
        
        if (!$main_heading['main_image'] || empty($main_heading_data['image'])) {
            $main_heading['main_image'] = false;
        }

        $main_heading['main_image_side'] = $main_heading_data['image_side'];
        $main_heading['main_image_status'] = $main_heading_data['image_status'];

        if (!$main_heading['main_left_title'] || empty($main_heading_data['left_title'])) {
            $main_heading['main_left_title'] = false;
        }

        if (!$main_heading['main_right_title'] || empty($main_heading_data['right_title'])) {
            $main_heading['main_right_title'] = false;
        }

        if (!$main_heading['main_title'] &&
            !$main_heading['main_sub_title'] &&
            !$main_heading['main_description'] &&
            !$main_heading['main_image']) {
            $main_heading['main_status'] = false;
        }
        return $main_heading;
    }

    // if Front side show number of product then pass params otherwise keep it empty
    public function showFrontSideResult($num_of_prod = '', $hookName = 'home_status')
    {
        $cookie = Context::getContext()->cookie;
        $id_lang = $cookie->id_lang;

        $disArrResult = array();
        $tv_obj_prod = new TvcmsTabProducts();
        $disArrResult['home_status'] = Configuration::get('TVCMSTABPRODUCTS_SPECIAL_PROD_HOME');
        $disArrResult['left_status'] = Configuration::get('TVCMSTABPRODUCTS_SPECIAL_PROD_LEFT');
        $disArrResult['right_status'] = Configuration::get('TVCMSTABPRODUCTS_SPECIAL_PROD_RIGHT');
        $disArrResult['status'] = false;
        if ($disArrResult[$hookName]) {
            $disArrResult['data'] = $tv_obj_prod->displaySpecialProducts($num_of_prod);
            $disArrResult['status'] = empty($disArrResult['data'])?false:true;
            $disArrResult['path'] = _MODULE_DIR_."tvcmstabproducts/views/img/";
            $disArrResult['id_lang'] = $id_lang;
            $link = Context::getContext()->link->getPageLink('prices-drop');
            $disArrResult['link'] = $link;

            $tvcms_obj = new TvcmsTabProductsStatus();
            $all_prod_status = $tvcms_obj->fieldStatusInformation();
            $main_heading  = array();
            $main_heading['main_status'] = $all_prod_status['special_prod']['main_status'];
            $main_heading['main_title'] = $all_prod_status['special_prod']['home_title'];
            $main_heading['main_sub_title'] = $all_prod_status['special_prod']['home_sub_title'];
            $main_heading['main_description'] = $all_prod_status['special_prod']['home_description'];
            $main_heading['main_image'] = $all_prod_status['special_prod']['home_image'];
            $main_heading['main_image_side'] = $all_prod_status['special_prod']['home_image_side'];
            $main_heading['main_image_status'] = $all_prod_status['special_prod']['home_image_status'];
            $main_heading['main_left_title'] = $all_prod_status['special_prod']['left_title'];
            $main_heading['main_right_title'] = $all_prod_status['special_prod']['right_title'];

            if ($main_heading['main_status']) {
                $main_heading_data = array();

                $tmp = Configuration::get('TVCMSTABPRODUCTS_SPECIAL_PROD_HOME_TITLE', $id_lang);
                $main_heading_data['title'] = $tmp;
                $tmp = Configuration::get('TVCMSTABPRODUCTS_SPECIAL_PROD_HOME_SUB_TITLE', $id_lang);
                $main_heading_data['short_desc'] = $tmp;
                $tmp = Configuration::get('TVCMSTABPRODUCTS_SPECIAL_PROD_HOME_DESC', $id_lang);
                $main_heading_data['desc'] = $tmp;
                $tmp = Configuration::get('TVCMSTABPRODUCTS_SPECIAL_PROD_IMAGE', $id_lang);
                $main_heading_data['image'] = $tmp;
                $tmp = Configuration::get('TVCMSTABPRODUCTS_SPECIAL_PROD_IMAGE_WIDTH', $id_lang);
                $main_heading_data['width'] = $tmp;
                $tmp = Configuration::get('TVCMSTABPRODUCTS_SPECIAL_PROD_IMAGE_HEIGHT', $id_lang);
                $main_heading_data['height'] = $tmp;
                $tmp = Configuration::get('TVCMSTABPRODUCTS_SPECIAL_PROD_IMAGE_SIDE');
                $main_heading_data['image_side'] = $tmp;
                $tmp = Configuration::get('TVCMSTABPRODUCTS_SPECIAL_PROD_IMAGE_STATUS');
                $main_heading_data['image_status'] = $tmp;
                $tmp = Configuration::get('TVCMSTABPRODUCTS_SPECIAL_PROD_LEFT_TITLE', $id_lang);
                $main_heading_data['left_title'] = $tmp;
                $tmp = Configuration::get('TVCMSTABPRODUCTS_SPECIAL_PROD_RIGHT_TITLE', $id_lang);
                $main_heading_data['right_title'] = $tmp;

                $main_heading = $this->getArrMainTitle($main_heading, $main_heading_data);
                $main_heading['data'] = $main_heading_data;
            }

            $this->context->smarty->assign('main_heading', $main_heading);
            $this->context->smarty->assign('dis_arr_result', $disArrResult);
        }
        return $disArrResult['status'];
    }
    public function hookdisplayHeader()
    {
        $tmp = $this->context->link->getModuleLink('tvcmsspecialproducts', 'default');
        Media::addJsDef(array('gettvcmsspecialproductslink' => $tmp));
        
        $this->context->controller->addJS($this->_path.'views/js/front.js');
    }

    public function hookdisplayHome()
    {
        $StatusTabSetting = (int)Configuration::get('TVCMSTABPRODUCTS_SPECIAL_PROD_HOME');
        if ($StatusTabSetting) {
            if (!Cache::isStored('tvcmsspecialproducts_display_home.tpl')) {
                // $result = $this->showFrontSideResult();
                    $output = $this->display(__FILE__, 'views/templates/front/display_home.tpl');
                Cache::store('tvcmsspecialproducts_display_home.tpl', $output);
            }
            return Cache::retrieve('tvcmsspecialproducts_display_home.tpl');
        } else {
            return "";
        }
    }

    public function hookdisplayWrapperTop()
    {
        return $this->hookdisplayHome();
    }

    public function hookdisplayContentWrapperTop()
    {
        return $this->hookdisplayHome();
    }

    public function hookdisplayHomeAjax()
    {
        if (!Cache::isStored('tvcmsspecialproducts_display_home_ajax.tpl')) {
            $result = $this->showFrontSideResult('', 'home_status');
            if ($result) {
                $static_token = Tools::getToken(false);
                $url = array('pages'=>array('cart'=>$this->context->link->getPageLink('cart')));
                $this->context->smarty->assign('urls', $url);
                $this->context->smarty->assign('static_token', $static_token);
                $output = $this->display(__FILE__, 'views/templates/front/display_home-data.tpl');
            } else {
                $output = '';
            }
            Cache::store('tvcmsspecialproducts_display_home_ajax.tpl', $output);
        }
        return Cache::retrieve('tvcmsspecialproducts_display_home_ajax.tpl');
    }

    public function hookdisplayLeftColumn()
    {
        if (!Cache::isStored('tvcmsspecialproducts_display_left.tpl')) {
            $result = $this->showFrontSideResult($this->num_of_prod, 'left_status');
            if ($result) {
                $output = $this->display(__FILE__, 'views/templates/front/display_left.tpl');
            } else {
                $output = '';
            }
            Cache::store('tvcmsspecialproducts_display_left.tpl', $output);
        }

        return Cache::retrieve('tvcmsspecialproducts_display_left.tpl');
    }

    public function hookdisplayRightColumn()
    {
        if (!Cache::isStored('tvcmsspecialproducts_display_right.tpl')) {
            $result = $this->showFrontSideResult($this->num_of_prod, 'right_status');
            if ($result) {
                $output = $this->display(__FILE__, 'views/templates/front/display_right.tpl');
            } else {
                $output = '';
            }
            Cache::store('tvcmsspecialproducts_display_right.tpl', $output);
        }

        return Cache::retrieve('tvcmsspecialproducts_display_right.tpl');
    }
}
