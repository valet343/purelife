function getURLVar(key) {
	var value = [];

	var query = String(document.location).split('?');

	if (query[1]) {
		var part = query[1].split('&');

		for (i = 0; i < part.length; i++) {
			var data = part[i].split('=');

			if (data[0] && data[1]) {
				value[data[0]] = data[1];
			}
		}

		if (value[key]) {
			return value[key];
		} else {
			return '';
		}
	}
}

$(document).ready(function() {
	// Highlight any found errors
	$('.text-danger').each(function() {
		var element = $(this).parent().parent();

		if (element.hasClass('form-group')) {
			element.addClass('has-error');
		}
	});

	// Currency
	$('#form-currency .currency-select').on('click', function(e) {
		e.preventDefault();

		$('#form-currency input[name=\'code\']').val($(this).attr('name'));

		$('#form-currency').submit();
	});

	// Language
	$('#form-language .language-select').on('click', function(e) {
		e.preventDefault();

		$('#form-language input[name=\'code\']').val($(this).attr('name'));

		$('#form-language').submit();
	});

	/* Search */
	$('#search input[name=\'search\']').parent().find('button').on('click', function() {
		var url = $('base').attr('href') + 'index.php?route=product/search';

		var value = $('header #search input[name=\'search\']').val();

		if (value) {
			url += '&search=' + encodeURIComponent(value);
		}

		location = url;
	});

	$('#search_input').on('keydown', function(e) {
		if (e.keyCode == 13) {
			$('header #search input[name=\'search\']').parent().find('button').trigger('click');
		}
	});

	// Product List
	$('#list-view').click(function() {
		$('.products_sort_content').removeClass('grid_items');
		$('.products_sort_content').addClass('list_items');
		localStorage.setItem('display', 'list');
	});

	// Product Grid
	$('#grid-view').click(function() {
		$('.products_sort_content').removeClass('list_items');
		$('.products_sort_content').addClass('grid_items');
		localStorage.setItem('display', 'grid');
	});

	if (localStorage.getItem('display') == 'list') {
		$('#list-view').trigger('click');
	} else {
		$('#grid-view').trigger('click');
	}

	// Checkout
	$(document).on('keydown', '#collapse-checkout-option input[name=\'email\'], #collapse-checkout-option input[name=\'password\']', function(e) {
		if (e.keyCode == 13) {
			$('#collapse-checkout-option #button-login').trigger('click');
		}
	});

	// tooltips on hover
	$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});

	// Makes tooltips work on ajax generated content
	$(document).ajaxStop(function() {
		$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});
	});
});

// Cart add remove functions
var cart = {
	'add': function(product_id, quantity) {
		$.ajax({
			url: 'index.php?route=checkout/cart/add',
			type: 'post',
			data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},
			complete: function() {
				$('#cart > button').button('reset');
			},
			success: function(json) {
				$('.alert-dismissible, .text-danger').remove();

				if (json['redirect']) {
					location = json['redirect'];
				}

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
		            var $alertItem = $('<li class="alert-item alert-success">' + '<img src=" ' + $(".product_" + product_id + " .image_main").attr("src") + ' "/><p>' + json['success'] + '</p><button class="btn-close btn-close-alert-modal"></button></li>').addClass("alert-item-animate");
		            $(".alert-item-modal-push").prepend($alertItem);
		            setTimeout(function() {
		                $alertItem.remove();
		            }, 2400);
		          }

		          $(".btn-close-alert-modal, .dropdown-bg").on("click", function() {
		            $(".alert-modal").remove();
		            $('.dropdown-bg').removeClass("active");
		          });

		          $('#cart > ul > span').load('index.php?route=common/cart/info ul li');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'update': function(key, quantity) {
		$.ajax({
			url: 'index.php?route=checkout/cart/edit',
			type: 'post',
			data: 'key=' + key + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},
			complete: function() {
				$('#cart > button').button('reset');
			},
			success: function(json) {
				// Need to set timeout otherwise it wont update the total
				setTimeout(function () {
					$('#cart-total > p').text(json['text_items_sum']);
				  	$('#cart-total > span').text(json['text_items_count']);
				  	$('.cart_count').text(json['text_items_count']);
				}, 100);

				if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
					location = 'index.php?route=checkout/cart';
				} else {
					$('#cart > ul > span').load('index.php?route=common/cart/info ul li');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'remove': function(key) {
		$.ajax({
			url: 'index.php?route=checkout/cart/remove',
			type: 'post',
			data: 'key=' + key,
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},
			complete: function() {
				$('#cart > button').button('reset');
			},
			success: function(json) {
				// Need to set timeout otherwise it wont update the total
				setTimeout(function () {
					$('#cart-total > p').text(json['text_items_sum']);
				  	$('#cart-total > span').text(json['text_items_count']);
				  	$('.cart_count').text(json['text_items_count']);
				}, 100);

				if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
					location = 'index.php?route=checkout/cart';
				} else {
					$('#cart > ul > span').load('index.php?route=common/cart/info ul li');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'clear': function() {
	    $.ajax({
	      url: 'index.php?route=checkout/cart/clear',
	      type: 'post',
	      dataType: 'json',
	      beforeSend: function() {
	      	$('#cart > button').button('loading');
	      },
	      complete: function() {
	        $('#cart > button').button('reset');
	      },
	      success: function(json) {
	        setTimeout(function () {
				$('#cart-total > p').text(json['text_items_sum']);
			  	$('#cart-total > span').text(json['text_items_count']);
			  	$('.cart_count').text(json['text_items_count']);
			}, 100);

			if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
				location = 'index.php?route=checkout/cart';
			} else {
				$('#cart > ul > span').load('index.php?route=common/cart/info ul li');
			}
	      },
	      error: function(xhr, ajaxOptions, thrownError) {
	        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
	      }
	    });
  	}
};

var voucher = {
	'add': function() {

	},
	'remove': function(key) {
		$.ajax({
			url: 'index.php?route=checkout/cart/remove',
			type: 'post',
			data: 'key=' + key,
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},
			complete: function() {
				$('#cart > button').button('reset');
			},
			success: function(json) {
				// Need to set timeout otherwise it wont update the total
				setTimeout(function () {
					$('#cart-total > p').text(json['text_items_sum']);
				  	$('#cart-total > span').text(json['text_items_count']);
				  	$('.cart_count').text(json['text_items_count']);
				}, 100);

				if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
					location = 'index.php?route=checkout/cart';
				} else {
					$('#cart > ul').load('index.php?route=common/cart/info ul li');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
};

var wishlist = {
	'add': function(product_id) {
		$.ajax({
			url: 'index.php?route=account/wishlist/add',
			type: 'post',
			data: 'product_id=' + product_id,
			dataType: 'json',
			success: function(json) {
				$('.alert-dismissible').remove();

				if (json['redirect']) {
					location = json['redirect'];
				}

				if (json['success']) {

				  if (json['alert_type'] == "modal") {
		            $('.dropdown-bg').addClass("active");
		            $('body').append('<div class="alert-modal alert-item-modal"><h3>' + json['title'] + '</h3><div class="caption"><p>' + json['success'] + '</p></div><ul class="buttons"><button class="btn btn-gray btn-close-alert-modal">' + json["text_continue"] + '</button><a class="btn" href="' + json["link_checkout"] + '">' + json["text_checkout"] + '</a></ul><button class="btn-close btn-close-alert-modal"></button></div>');
		          } else {
		            if($('.alert-item-modal-push').length < 1) {
		              $('body').append('<ul class="alert-modal alert-item-modal-push"></ul>');
		            }
		            if($('.alert-item').length = 6) {
		              $('.alert-item').eq(5).prevAll(".alert-item").remove();
		            }
		            var $alertItem = $('<li class="alert-item">' + '<img src=" ' + $(".product_" + product_id + " .image_main").attr("src") + ' "/><p>' + json['success'] + '</p><button class="btn-close btn-close-alert-modal"></button></li>').addClass("alert-item-animate");
		            $(".alert-item-modal-push").prepend($alertItem);
		            setTimeout(function() {
		                $alertItem.remove();
		            }, 2400);
		          }

		          $(".btn-close-alert-modal, .dropdown-bg").on("click", function() {
		            $(".alert-modal").remove();
		            $('.dropdown-bg').removeClass("active");
		          });
				}

				$('.wishlist a span').text(json['total_pro']);
				$('.wishlist_count').text(json['total_pro']);

			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'remove': function() {

	}
};

var compare = {
	'add': function(product_id) {
		$.ajax({
			url: 'index.php?route=product/compare/add',
			type: 'post',
			data: 'product_id=' + product_id,
			dataType: 'json',
			success: function(json) {
				$('.alert-dismissible').remove();

				if (json['success']) {

					if (json['alert_type'] == "modal") {
			            $('.dropdown-bg').addClass("active");
			            $('body').append('<div class="alert-modal alert-item-modal"><h3>' + json['title'] + '</h3><div class="caption"><p>' + json['success'] + '</p></div><ul class="buttons"><button class="btn btn-gray btn-close-alert-modal">' + json["text_continue"] + '</button><a class="btn" href="' + json["link_checkout"] + '">' + json["text_checkout"] + '</a></ul><button class="btn-close btn-close-alert-modal"></button></div>');
			          } else {
			            if($('.alert-item-modal-push').length < 1) {
			              $('body').append('<ul class="alert-modal alert-item-modal-push"></ul>');
			            }
			            if($('.alert-item').length = 6) {
			              $('.alert-item').eq(5).prevAll(".alert-item").remove();
			            }
			            var $alertItem = $('<li class="alert-item">' + '<img src=" ' + $(".product_" + product_id + " .image_main").attr("src") + ' "/><p>' + json['success'] + '</p><button class="btn-close btn-close-alert-modal"></button></li>').addClass("alert-item-animate");
			            $(".alert-item-modal-push").prepend($alertItem);
			            setTimeout(function() {
			                $alertItem.remove();
			            }, 2400);
			          }

			          $(".btn-close-alert-modal, .dropdown-bg").on("click", function() {
			            $(".alert-modal").remove();
			            $('.dropdown-bg').removeClass("active");
			          });
					
					$('.compare a span').html(json['total_pro']);
					$('.compare_count').html(json['total_pro']);

				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'remove': function() {

	}
};

/* Agree to Terms */
$(document).delegate('.agree', 'click', function(e) {
	e.preventDefault();

	$('#modal-agree').remove();

	var element = this;

	$.ajax({
		url: $(element).attr('href'),
		type: 'get',
		dataType: 'html',
		success: function(data) {
			html  = '<div id="modal-agree" class="modal">';
			html += '  <div class="modal-dialog">';
			html += '    <div class="modal-content">';
			html += '      <div class="modal-header">';
			html += '        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
			html += '        <h4 class="modal-title">' + $(element).text() + '</h4>';
			html += '      </div>';
			html += '      <div class="modal-body">' + data + '</div>';
			html += '    </div>';
			html += '  </div>';
			html += '</div>';

			$('body').append(html);

			$('#modal-agree').modal('show');
		}
	});
});

// Autocomplete */
(function($) {
	$.fn.autocomplete = function(option) {
		return this.each(function() {
			this.timer = null;
			this.items = new Array();

			$.extend(this, option);

			$(this).attr('autocomplete', 'off');

			// Focus
			$(this).on('focus', function() {
				this.request();
			});

			// Blur
			$(this).on('blur', function() {
				setTimeout(function(object) {
					object.hide();
				}, 200, this);
			});

			// Keydown
			$(this).on('keydown', function(event) {
				switch(event.keyCode) {
					case 27: // escape
						this.hide();
						break;
					default:
						this.request();
						break;
				}
			});

			// Click
			this.click = function(event) {
				event.preventDefault();

				value = $(event.target).parent().attr('data-value');

				if (value && this.items[value]) {
					this.select(this.items[value]);
				}
			};

			// Show
			this.show = function() {
				var pos = $(this).position();

				$(this).siblings('ul.dropdown-menu').css({
					top: pos.top + $(this).outerHeight(),
					left: pos.left
				});

				$(this).siblings('ul.dropdown-menu').show();
			};

			// Hide
			this.hide = function() {
				$(this).siblings('ul.dropdown-menu').hide();
			};

			// Request
			this.request = function() {
				clearTimeout(this.timer);

				this.timer = setTimeout(function(object) {
					object.source($(object).val(), $.proxy(object.response, object));
				}, 200, this);
			};

			// Response
			this.response = function(json) {
				html = '';

				if (json.length) {
					for (i = 0; i < json.length; i++) {
						this.items[json[i]['value']] = json[i];
					}

					for (i = 0; i < json.length; i++) {
						if (!json[i]['category']) {
							html += '<li data-value="' + json[i]['value'] + '"><a href="#">' + json[i]['label'] + '</a></li>';
						}
					}

					// Get all the ones with a categories
					var category = new Array();

					for (i = 0; i < json.length; i++) {
						if (json[i]['category']) {
							if (!category[json[i]['category']]) {
								category[json[i]['category']] = new Array();
								category[json[i]['category']]['name'] = json[i]['category'];
								category[json[i]['category']]['item'] = new Array();
							}

							category[json[i]['category']]['item'].push(json[i]);
						}
					}

					for (i in category) {
						html += '<li class="dropdown-header">' + category[i]['name'] + '</li>';

						for (j = 0; j < category[i]['item'].length; j++) {
							html += '<li data-value="' + category[i]['item'][j]['value'] + '"><a href="#">&nbsp;&nbsp;&nbsp;' + category[i]['item'][j]['label'] + '</a></li>';
						}
					}
				}

				if (html) {
					this.show();
				} else {
					this.hide();
				}

				$(this).siblings('ul.dropdown-menu').html(html);
			};

			$(this).after('<ul class="dropdown-menu"></ul>');
			$(this).siblings('ul.dropdown-menu').delegate('a', 'click', $.proxy(this.click, this));

		});
	};
});
