/**
 * 2007-2021 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2021 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

 "use strict";
  /*********************** Start fancyBox js *******************************/
  $(document).ready(function(){
    $(".fancybox").fancybox({
      type: "iframe",
      helpers: {
        overlay: {
          locked: false
        }
      }
    }); 

     $(".various").fancybox({
      maxWidth    : 800,
      maxHeight   : 600,
      fitToView   : false,
      width       : '70%',
      height      : '70%',
      autoSize    : false,
      closeClick  : false,
      openEffect  : 'none',
      closeEffect : 'none'
    }); 
  })

  /*********************** Start fancyBox js *******************************/