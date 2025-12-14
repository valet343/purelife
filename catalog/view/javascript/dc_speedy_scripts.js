// dc_dropdown

$("body").prepend('<div class="dropdown-bg"></div>');
$(".dropdown-toggle").on("click", function() {
	event.preventDefault();
	// $(".dropdown-toggle, .dropdown-menu").removeClass("active");
	$(this).toggleClass("active");
	$(this).parent().find(".dropdown-menu").eq(0).toggleClass("active");
	if(!$(".dropdown-bg").hasClass("active")) {
		$(".dropdown-bg").addClass("active");
	}
});
$(".dropdown-bg, .btn-close").on("click", function() {
	$(".dropdown-toggle, .dropdown-menu, .dropdown-bg, .alert-modal, .modal, .widgets_messenger_link, .widgets_messenger_content, .ocfilter").removeClass("active");
	$(".wl-popup-language, .smartsearch").remove();
	$("#search_input").val("");
	$(".search").css({"z-index":"initial"});
	$("#top").removeClass("active");
	// $("#top .container").removeClass("hidden");
	$('#dwquickview-modal').addClass("quick_view_loading");
	$(".m_menu_nav").removeClass("active");
});

// dc_cart
$(".cart_empty .btn, .btn-close-cart, .btn-close-dc-filter, .ocf-close-mobile").on("click", function() {
	$(".dropdown-toggle, .dropdown-menu, .dropdown-bg").removeClass("active");
	// $("#top .container").removeClass("hidden");
});

// adaptive
if($(window).width() <= 1100) {
// MOB
	// Перемещение
	$("#m_menu").after($("#search")); // Поиск по сайту
	$("nav#menu .dropdown-menu").removeClass("dropdown-menu").addClass("m_menu_nav").appendTo("#m_menu > .dropdown-menu"); // Главное меню
	$("#cart").appendTo("#top .container"); // Корзина
	// $(".top_right").appendTo(".m_menu_header"); // Переключители языка и валюты, аккаунт
	$(".m_menu_header .logo").after($(".top_right #form-language")); // Перемещение языка в top мобильного меню
	$(".m_menu_header .logo").after($(".top_right #form-currency")); // Перемещение валюты в top мобильного меню
	$("#top .menu li:gt(0)").appendTo(".m_menu_content_links .dropdown_customer .dropdown-menu"); // Перенос верхнего меню
	$("header .compare").appendTo(".m_menu_header_nav"); // Сравнение
	$("header .wishlist").appendTo(".m_menu_header_nav"); // Избранное
	$("#top .account ul li:last-child").appendTo(".m_menu_header_nav").addClass("account"); // Аккаунт
	$(".m_menu_header_nav .account a").addClass("icon_account"); // Добавление класса к ссылки на аккаунт
	$("header .contacts .dropdown-menu .phones").clone().appendTo(".m_menu_footer"); // Перенос телефонов
	$("header .contacts .dropdown-menu .messenger_links").clone().appendTo(".m_menu_footer"); // Перенос ссылок на мессенжеры
	$("header .contacts .open").clone().appendTo(".m_menu_footer"); // Перенос графика работы


	// Добавить кнопку в меню для открытия уровней
	$("#m_menu .dropdown > a").append('<span class="open_menu"></span>');
	$("#m_menu .dropdown-2 > a").append('<span class="open_menu_2"></span>');

	// Открытие подменюшек (1 уровень)
	$(".open_menu").on("click", function() {
		event.preventDefault();
		$(".m_menu_nav .dropdown").removeClass("active");
		$(this).parent().parent().addClass("active");
	});

	// Открытие подменюшек (1 уровень)
	$(".open_menu_2").on("click", function() {
		event.preventDefault();
		$(".m_menu_nav .dropdown-2").removeClass("active");
		$(this).parent().parent().addClass("active");
	});

	// Кнопка открытия меню "покупатели"
	$(".dropdown_customer > a").on("click", function(e) {
		 e.preventDefault();
		$(this).find(".open_menu").toggleClass("active");
		$(this).parent().find(".dropdown-menu").toggleClass("active");
	});

	// Кнопка открытия основого меню после открытия меню
	$(".dropdown_catalog > a").on("click", function(e) {
		e.preventDefault()
		$(".m_menu_nav").addClass("active");
	});

	// Кнопка назад на основное меню
	$(".m_menu_back").on("click", function() {
		$(".m_menu_nav").removeClass("active");
	});

	// Корректировка клика dropdown-toogle в мобильном меню
	$("#m_menu .dropdown-toggle").on("click", function() {
		$("#top").addClass("active");
		$("#top .container").addClass("hidden");
		$("#cart .dropdown-toggle, #cart .dropdown-menu").removeClass("active");
		$(".wl-popup-language, .smartsearch").remove();
		$("#search_input").val("");
		$("#ocfilter").removeClass("active");
		$(".m_menu_back").fadeIn(0);
	});

	$("#cart .dropdown-toggle").on("click", function() {
		$("#top").addClass("active");
		$("#top .container").addClass("hidden");
		$("#m_menu .dropdown-toggle, #m_menu .dropdown-menu").removeClass("active");
		$(".wl-popup-language, .smartsearch").remove();
		$("#search_input").val("");
		$("#ocfilter").removeClass("active");
	});

	$(".m_menu_header .top_right .dropdown-toggle").on("click", function() {
		event.preventDefault();
		$(".m_menu_header .top_right .dropdown-toggle, .m_menu_header .top_right .dropdown-menu").removeClass("active");
		$(this).toggleClass("active");
		$(this).parent().find(".dropdown-menu").eq(0).toggleClass("active");
	});

	// Footer tabs
	$(".footer_item h3").on('click', function() {
		if($(this).parent().find(".footer_item_inner").hasClass("active")) {
			$(this).removeClass("active");
			$(this).parent().find(".footer_item_inner").removeClass("active");
		} else {
			$(this).addClass("active");
			$(this).parent().find(".footer_item_inner").addClass("active");
		}
	})
} else if($(window).width() > 1100) {
// PC
// Перемещение
	$("header .contacts").before($("#search")); // Поиск по сайту
	$(".m_menu_content .m_menu_nav").removeClass("m_menu_nav").addClass("dropdown-menu").appendTo("nav#menu"); // Главное меню
	$(".top_right").appendTo("#top .container"); // Переключители языка и валюты, аккаунт
	$(".m_menu_footer .compare").appendTo("header .container"); // Сравнение
	$(".m_menu_footer .wishlist").appendTo("header .container"); // Избранное
	$("#cart").appendTo("header .container"); // Корзина

	$("#menu .dropdown-menu .dropdown").on("mouseenter", function() {
		$("#menu .dropdown-menu .dropdown").removeClass("active");
		$(this).addClass("active");
	});
	$("#menu .dropdown-2").on("mouseenter", function() {
		$("#menu .dropdown-2").removeClass("active");
		$(this).addClass("active");
	});
	$("#menu .dropdown-menu .no-dropdown").on("mouseenter", function() {
		$("#menu .dropdown-menu .dropdown").removeClass("active");
	});
	$("#menu .dropdown-menu .no-dropdown-2").on("mouseenter", function() {
		$("#menu .dropdown-menu .dropdown-2").removeClass("active");
	});
}

// button_prev
sessionStorage.setItem("old_url", document.referrer);