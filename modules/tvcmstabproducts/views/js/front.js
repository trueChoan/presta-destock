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
 *
 * Don't forget to prefix your containers with your own identifier
 * to avoid any conflicts with others containers.
 */

var mobileViewSize = 991;
var gettvcmstabproductsajaxStatus = true;
var tvcmstabproductsajaxStatus = true;
var tabIndexObj = null;
var storage;
var langId = document.getElementsByTagName("html")[0].getAttribute("lang");
var currentTabModule = tvthemename + "_tab_" + langId + "_";
jQuery(document).ready(function($) {
    storage = $.localStorage;

    function storageGet(key) {
        return "" + storage.get(currentTabModule + key);
    }

    function storageSet(key, value) {
        storage.set(currentTabModule + key, value);
    }
    var gettvcmstabproductsajax = function($param) {

        var status_config = $param.status_config;
        if ($('.tvcmstab-title-product').length && gettvcmstabproductsajaxStatus) {
            /*****Load Cache*****/
            var data = storageGet(status_config);
            if (data != 'null') {
                if (status_config === "") {
                    $('.tvcmstab-title-product').html(data);
                    tabIndexObj = $('li.tab-index.active');
                } else {
                    $('.tvtab-product-list-wrapper').append(data);
                }
                tvcmstabproductsajax();
                productTime(); //custom.js
            }
            /*****Load Cache*****/
            gettvcmstabproductsajaxStatus = false;
            var checkUrl = gettvcmstabproductslink.indexOf("?");
            var gettvcmstabproductslinkURL = gettvcmstabproductslink;
            if (checkUrl > 0) {
                gettvcmstabproductslinkURL += "&status_config=" + status_config;
            } else {
                gettvcmstabproductslinkURL += "?status_config=" + status_config;
            }
            $.ajax({
                type: 'POST',
                url: gettvcmstabproductslinkURL,
                success: function(data) {
                    var dataCache = storageGet(status_config);
                    storageSet(status_config, data);
                    if (dataCache === 'null') {
                        if (status_config === "") {
                            $('.tvcmstab-title-product').html(data);
                            tabIndexObj = $('li.tab-index.active');
                        } else {
                            $('.tvtab-product-list-wrapper').append(data);
                        }
                        tvcmstabproductsajax();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        }
    }

    $(document).on('click', 'li.tab-index', function() {
        tabIndexObj = $(this);
        var data_status_config = "" + $(this).attr('data-status-config');
        var data_tab_data = "" + $(this).attr('data-tab-data');
        tvcmstabproductsajaxStatus = true;
        if (!$('#' + data_tab_data).length) {
            gettvcmstabproductsajaxStatus = true;
            var param = { "status_config": data_status_config };
            gettvcmstabproductsajax(param);
        } else {
            tvcmstabproductsajax();
        }
    });
    //setTimeout(function(){gettvcmstabproductsajax()},100);
    //gettvcmstabproductsajax();  
    var param = { "status_config": "" };
    themevoltyCallEventsPush(gettvcmstabproductsajax, param);

    function tvcmstabproductsajax() {
        if (tvcmstabproductsajaxStatus) {
            tvcmstabproductsajaxStatus = false;
            /********************** Start Tab js *****************************/
            $id = tabIndexObj.attr('data-tab-data');

            $paging = tabIndexObj.attr('data-tab-paging');
            $('.tab-index').removeClass('active');
            $('.tvcmstab-product').removeClass('active');
            $('.tvtab-pagination').removeClass('active');
            $('.tvcmstab-product').hide();
            $('.tvtab-pagination').hide();

            tabIndexObj.addClass('active');
            $('body').find('#' + $id).addClass('active').show();
            $('.' + $paging + '-pagination').addClass('active').show();

            $('.tvcmstab-product.active').show();
            $('.tvtab-pagination.active').show();

            $('.tvcmstab-title-product .tvtab-pagination-wrapper').insertAfter('.tvcmstab-title-product  .tvcms-main-title');
        }
        /********************** End Tab js *****************************/

        /****************** Start Tab Product Slider Js *******************************************/
        var owlClass = [
            //['slider className','navigation nextClass','navigation prevClass']
            ['.tvtab-featured-product .tvproduct-wrapper-content-box', '.tvtab-featured-product-next', '.tvtab-featured-product-prev'],
            ['.tvtab-new-product .tvproduct-wrapper-content-box', '.tvtab-new-product-next', '.tvtab-new-product-prev'],
            ['.tvtab-special-product .tvproduct-wrapper-content-box', '.tvtab-special-product-next', '.tvtab-special-product-prev'],
            ['.tvtab-best-seller-product .tvproduct-wrapper-content-box', '.tvtab-best-seller-product-next', '.tvtab-best-seller-product-prev'],
        ];

        for (var i = 0; i < owlClass.length; i++) {
            if ($(owlClass[i][0]).length) {
                if ($(owlClass[i][0]).attr('data-has-image') == 'true') {
                    var owl = $(owlClass[i][0]).owlCarousel({
                        loop: false,
                        dots: false,
                        nav: false,
                        responsive: {
                            0: { items: 1 },
                            320: { items: 1, slideBy: 1 },
                            330: { items: 2, slideBy: 1 },
                            400: { items: 2, slideBy: 1 },
                            480: { items: 2, slideBy: 1 },
                            650: { items: 2, slideBy: 1 },
                            767: { items: 2, slideBy: 1 },
                            768: { items: 2, slideBy: 1 },
                            992: { items: 3, slideBy: 1 },
                            1023: { items: 3, slideBy: 1 },
                            1024: { items: 3, slideBy: 1 },
                            1200: { items: 3, slideBy: 1 },
                            1350: { items: 3, slideBy: 1 },
                            1660: { items: 4, slideBy: 1 },
                            1800: { items: 4, slideBy: 1 }
                        }
                    });
                } else {
                    var owl = $(owlClass[i][0]).owlCarousel({
                        loop: false,
                        dots: false,
                        nav: false,
                        responsive: {
                            0: { items: 1 },
                            320: { items: 1, slideBy: 1 },
                            330: { items: 2, slideBy: 1 },
                            400: { items: 2, slideBy: 1 },
                            480: { items: 2, slideBy: 1 },
                            650: { items: 3, slideBy: 1 },
                            767: { items: 3, slideBy: 1 },
                            768: { items: 3, slideBy: 1 },
                            992: { items: 4, slideBy: 1 },
                            1023: { items: 4, slideBy: 1 },
                            1024: { items: 4, slideBy: 1 },
                            1200: { items: 4, slideBy: 1 },
                            1350: { items: 4, slideBy: 1 },
                            1660: { items: 5, slideBy: 1 },
                            1800: { items: 5, slideBy: 1 }
                        }
                    });
                }

                $(owlClass[i][1]).on('click', function(e) {
                    e.preventDefault();
                    $('#' + $(this).attr('data-parent') + ' .owl-nav .owl-next').trigger('click');
                });
                $(owlClass[i][2]).on('click', function(e) {
                    e.preventDefault();
                    $('#' + $(this).attr('data-parent') + ' .owl-nav .owl-prev').trigger('click');
                });
            }
        }
        /****************** End Tab Product Slider Js *******************************************/
        changeTabTitles();
    }

    function changeTabTitles() {
        if (document.body.clientWidth <= 767 && document.body.clientWidth > 575) {
            $('#content-wrapper .tvtab-product .tvtab-title-wrapper').insertAfter('#content-wrapper .tvtab-product .tvcmsmain-title-wrapper');
            $('#wrappertop .tvtab-product .tvtab-title-wrapper').insertAfter('#wrappertop .tvtab-product .tvcmsmain-title-wrapper');
        } else {
            $('#content-wrapper .tvtab-product .tvtab-title-wrapper').insertAfter('#content-wrapper .tvtab-product .tvcmsmain-title-wrapper .tvcms-main-title');
            $('#wrappertop .tvtab-product .tvtab-title-wrapper').insertAfter('#wrappertop .tvtab-product .tvcmsmain-title-wrapper .tvcms-main-title');
        }
    }
    $(window).on('resize', function() {
        changeTabTitles();
    });
});