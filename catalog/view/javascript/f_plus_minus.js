$(function () {
    (function (j) {
        var productIdClass = '.product-id',
            minClass = '.minimum',
            maxClass = '.maximum',
            quantityClass = '.inp-quantity',
            priceNoFormatClass = '.price-no-format',
            specialNoFormatClass = '.special-no-format',
            wrapPriceClass = '.price',
            wrapOption = '.wrap-option',
            priceClass = '.el-price',
            priceNewClass = '.price-new',
            priceOldClass = '.price-old',
            step = 10,
            spid = 100,
            productId,
            priceNoFormat,
            specialNoFormat;

        var addQ = 'min';

        // объект клика
        var el;

        // контейнер для плюс-минус
        var wrapQ;

        // родительский контейнер
        var wrapQParent;

        // данные товара
        var min, max, quantity, add;
        
 
        j('.plus, .minus').click(function (e) {
            let count;
            
            el = e.target;

            wrapQ = j(el).parent();
            wrapQParent = j(wrapQ).parent();
            
            init();
 
            add = addQ == '1' ? 1 : min;

            if (j(el).hasClass('plus')) {
                count = plus();
            } else {
                count = minus();
            }

            updatePrice(count);
            //updateClick(count);
        });

        j('.inp-quantity').change(function (e) {
            let res = j(this).val(), mess = false;
            
            el = e.target;

            wrapQ = j(el).parent();
            wrapQParent = j(wrapQ).parent();
            
            init();

            if (quantity < min) {
                j(this).val(min);

                res = min;
                mess = textMinimum + min;
            }

            if (quantity > max) {
                j(this).val(max);

                res = max;
                mess = textMaximum + max;
            }

            if (addQ === 'min' && res % min != 0) {
                let residue = res % min;
                res = +(res - residue) + min;
                j(this).val(res)
                mess = textAddMultiple + min
            }

            updatePrice(res);
            //updateClick(res);

            if (mess) {
                popoverShow(mess);
                popoverHide();
            }
        });
        
        j(wrapOption + ' input').click(function(){
            prevUpdatePrice(this);
        });
        
        j(wrapOption + ' select').change(function(){
            prevUpdatePrice(this);
        });
        
        var prevUpdatePrice = function(e){
            let productId = j(e).data('productid');
            let quantity = parseInt(j('#quantity' + productId).val());
            
            if(quantity == 'undefined'){
                quantity = 1;
            }
            
            wrapQ = j('#wrap-option' + productId).next();
            wrapQParent = j('#wrap-option' + productId).parent();
            
            init();
           
            updatePrice(quantity);
        };
        
        var updateClick = function (q) {
            document.getElementById('add-cart-' + productId).onclick = function () {
                cart.add(productId, q)
            };
        };

        var updatePrice = function (count) {
            let price, special, objPrice, objSpecial;

            let check = checkPriceNewClass();

            if (check) {
                special = countingOption(count, specialNoFormat);
            } else {
                special = false;
            }

            price = countingOption(count, priceNoFormat);

            if (special) {
                objPrice = j(wrapQParent).find(wrapPriceClass).find(priceOldClass).eq(0);
                objSpecial = j(wrapQParent).find(wrapPriceClass).find(priceNewClass).eq(0);

                addNewPrice(special, objSpecial);
            } else {
                objPrice = j(wrapQParent).find(wrapPriceClass).find(priceClass).eq(0);
            }

            addNewPrice(price, objPrice);

        };

        var checkPriceNewClass = function () {
            let res = j(wrapQParent).find(wrapPriceClass).eq(0);
            let elPriceNew = j(res).find(priceNewClass).eq(0);

            if (elPriceNew) {
                return true;
            }

            return false;
        }

        var init = function () {
            productId = parseInt(j(wrapQ).find(productIdClass).eq(0).val());
            min = parseInt(j(wrapQ).find(minClass).eq(0).val());
            max = parseInt(j(wrapQ).find(maxClass).eq(0).val());
            quantity = parseInt(j(wrapQ).find(quantityClass).eq(0).val());
            priceNoFormat = parseFloat(j(wrapQ).find(priceNoFormatClass).eq(0).val());
            specialNoFormat = parseInt(j(wrapQ).find(specialNoFormatClass).eq(0).val());

        };

        var plus = function () {
            let resQ = +quantity + parseInt(add);

            if (resQ <= max) {
                j(wrapQ).find(quantityClass).eq(0).val(resQ);
            } else {
                j(wrapQ).find(quantityClass).eq(0).val(max);
                resQ = max;

                let mess = textMaximum + max;

                popoverShow(mess);
                popoverHide();
            }

            return resQ;
        };

        var minus = function (q) {
            let resQ = +quantity - parseInt(add);

            if (resQ >= min) {
                j(wrapQ).find(quantityClass).eq(0).val(resQ);
            } else {
                j(wrapQ).find(quantityClass).eq(0).val(min);
                resQ = min

                let mess = textMinimum + min;

                popoverShow(mess);
                popoverHide();
            }

            return resQ;
        };



        var addNewPrice = function (v, objPrice) {
            let o = +v % step, a = +(v - o) / step, r = 0, z;

            for (let i = 0; i <= step; i++) {
                if (step == i) {
                    z = r + o;
                } else {
                    z = r + a;
                }

                (function (res, p) {
                    setTimeout(function () {
                        j(objPrice).text(priceFormated(res));
                    }, spid * p);
                })(z, i);

                r += a;
            }
        };
        
        var checkOption = function () {
            let option = $(wrapQParent).find(wrapOption);
            
            if(option.length){
                return true;
            }
            
            return false;
        }
        
        var countingOption = function (quantity, price) {
            let result = price;
            
            if(checkOption()){
                let options = $(wrapQParent).find('input:checked, option:selected');

                $.each(options, function(i,e){
                    let optionPrice = $(e).data('price');
                    let optionPrefix = $(e).data('prefix');

                    if(optionPrice !== 'undefined'){
                        if(optionPrefix == '+'){
                            result += parseInt(optionPrice);
                        }

                        if(optionPrefix == '-'){
                            result -= parseInt(optionPrice);
                        }
                    }
                });
            }
            
            return result * parseInt(quantity);
        }

        var popoverShow = function (textPopover) {
            let parent = j(wrapQ);
            let div = j("<div/>", {
                "class": "p-l-price-tooltip",
                text: textPopover,
            }).appendTo(parent);

            let coords = j(wrapQ).find(quantityClass).eq(0).prev().position();

            let left = coords.left;
            let top = coords.top - (j(wrapQ).height() + j(div).height());

            j(div).css({'left': left});
            j(div).css({'top': top});
        };

        var popoverHide = function () {
            setTimeout(function () {
                j('.p-l-price-tooltip').remove();
            }, 2000);
        };
        
        j('.f-button-add-cart').click(function(){
            let productId = j(this).attr('data-productid');            
            j.ajax({
                url: 'index.php?route=checkout/cart/add',
                type: 'post',
                data: j('#wrap-option' + productId + ' input[type=\'text\'], #wrap-plus-minus' + productId + ' input[type=\'text\'], #wrap-plus-minus' + productId + '  input[type=\'hidden\'], #wrap-option' + productId + '  input[type=\'hidden\'], #wrap-option' + productId + ' input[type=\'radio\']:checked, #wrap-option' + productId + ' input[type=\'checkbox\']:checked, #wrap-option' + productId + ' select, #wrap-option' + productId + '  textarea'),
                dataType: 'json',
                beforeSend: function () {
                    //$('#button-cart').button('loading');
                },
                complete: function () {
                    //$('#button-cart').button('reset');
                },
                success: function (json) {
                    if( ! j("div").is('#wrap-option' + productId)){
                        if (json['redirect'] && !checkOption()) {
                            location = json['redirect'];
                        }
                    }

                    j('.alert, .text-danger').remove();
                    j('.form-group').removeClass('has-error');

                    if (json['error']) {
                        if (json['error']['option']) {
                            for (i in json['error']['option']) {
                                var element = j('#input-option' + i.replace('_', '-'));

                                if (element.parent().hasClass('input-group')) {
                                    element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                                } else {
                                    element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                                }
                            }
                          }

                        if (json['error']['recurring']) {
                            j('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
                      }

                        // Highlight any found errors
                        j('.text-danger').parent().addClass('has-error');
              }

                    // if (json['success']) {
                    //     j('.breadcrumb').after('<div class="alert alert-success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

                    //     j('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');

                    //     j('html, body').animate({scrollTop: 0}, 'slow');

                    //    j('#cart > ul').load('index.php?route=common/cart/info ul li');
                    // }

                    if (json['success']) {
                      setTimeout(function () {
                        $('#cart-total > p').text(json['text_items_sum']);
                        $('#cart-total > span').text(json['text_items_count']);
                        $('.cart_count').text(json['text_items_count']);
                      }, 100);

                      if (json['cart_alert_type'] == "modal") {
                        $('.dropdown-bg').addClass("active");
                        $('body').append('<div class="alert-modal alert-item-modal"><h3>' + json['title'] + '</h3><div class="caption"><p>' + json['success'] + '</p></div><ul class="buttons"><button class="btn btn-gray btn-close-alert-modal">' + json["text_continue"] + '</button><a class="btn" href="' + json["link_checkout"] + '">' + json["text_checkout"] + '</a></ul><button class="btn-close btn-close-alert-modal"></button></div>');
                      } else {
                        if($('.alert-item-modal-push').length < 1) {
                          $('body').append('<ul class="alert-modal alert-item-modal-push"></ul>');
                        }
                        if($('.alert-item').length = 6) {
                          $('.alert-item').eq(5).prevAll(".alert-item").remove();
                        }
                        var $alertItem = $('<li class="alert-item alert-success">' + '<img src=" ' + $(".product_" + productId + " .image_main").attr("src") + ' "/><p>' + json['success'] + '</p><button class="btn-close btn-close-alert-modal"></button></li>').addClass("alert-item-animate");
                        $(".alert-item-modal-push").prepend($alertItem);
                        setTimeout(function() {
                            $alertItem.remove();
                        }, 2400);
                      }

                      $(".btn-close-alert-modal, .dropdown-bg").on("click", function() {
                        $(".alert-modal").remove();
                        $('.dropdown-bg').removeClass("active");
                      })

                      $('#cart > ul > span').load('index.php?route=common/cart/info ul li');
                    }
                
                },
                    error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }
            });
        });
    }($));
});