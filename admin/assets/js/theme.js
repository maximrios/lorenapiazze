/*!
 * Validator v0.2.1 for Bootstrap 3, by @1000hz
 * Copyright 2014 Spiceworks, Inc.
 * Licensed under http://opensource.org/licenses/MIT
 *
 * https://github.com/1000hz/bootstrap-validator
 */

+function(a){"use strict";var b=function(b,c){this.$element=a(b),this.options=c,this.toggleSubmit(),this.$element.on("input.bs.validator blur.bs.validator",":input",a.proxy(this.validateInput,this)),this.$element.find("[data-match]").each(function(){var b=a(this),c=b.data("match");a(c).on("input.bs.validator",function(){b.val()&&b.trigger("input")})})};b.DEFAULTS={delay:500,errors:{match:"Does not match",minlength:"Not long enough"}},b.VALIDATORS={"native":function(a){var b=a[0];return b.checkValidity?b.checkValidity():!0},match:function(b){var c=b.data("match");return!b.val()||b.val()===a(c).val()},minlength:function(a){var b=a.data("minlength");return!a.val()||a.val().length>=b}},b.prototype.validateInput=function(b){var c,d=a(b.target),e=d.data("bs.errors");this.$element.trigger(b=a.Event("validate.bs.validator",{relatedTarget:d[0]})),b.isDefaultPrevented()||(d.data("bs.errors",c=this.runValidators(d)),c.length?this.showErrors(d):this.clearErrors(d),e&&c.toString()===e.toString()||(b=c.length?a.Event("invalid.bs.validator",{relatedTarget:d[0],detail:c}):a.Event("valid.bs.validator",{relatedTarget:d[0],detail:e}),this.$element.trigger(b)),this.toggleSubmit(),this.$element.trigger(a.Event("validated.bs.validator",{relatedTarget:d[0]})))},b.prototype.runValidators=function(c){{var d=[];[b.VALIDATORS.native]}return a.each(b.VALIDATORS,a.proxy(function(a,b){if((c.data(a)||"native"==a)&&!b.call(this,c)){var e=c.data(a+"-error")||c.data("error")||"native"==a&&c[0].validationMessage||this.options.errors[a];!~d.indexOf(e)&&d.push(e)}},this)),d},b.prototype.validate=function(){var a=this.options.delay;return this.options.delay=0,this.$element.find(":input").trigger("input"),this.options.delay=a,this},b.prototype.showErrors=function(b){function c(){var c=b.closest(".form-group"),d=c.find(".help-block.with-errors"),e=b.data("bs.errors");e.length&&(e=a("<ul/>").addClass("list-unstyled").append(a.map(e,function(b){return a("<li/>").text(b)})),void 0===d.data("bs.originalContent")&&d.data("bs.originalContent",d.html()),d.empty().append(e),c.addClass("has-error"))}this.options.delay?(window.clearTimeout(b.data("bs.timeout")),b.data("bs.timeout",window.setTimeout(c,this.options.delay))):c()},b.prototype.clearErrors=function(a){var b=a.closest(".form-group"),c=b.find(".help-block.with-errors");c.html(c.data("bs.originalContent")),b.removeClass("has-error")},b.prototype.hasErrors=function(){function b(){return!!(a(this).data("bs.errors")||[]).length}return!!this.$element.find(":input").filter(b).length},b.prototype.isIncomplete=function(){function b(){return""===a.trim(this.value)}return!!this.$element.find("[required]").filter(b).length},b.prototype.toggleSubmit=function(){var a=this.$element.find(":submit");a.attr("disabled",this.isIncomplete()||this.hasErrors())};var c=a.fn.validator;a.fn.validator=function(c){return this.each(function(){var d=a(this),e=a.extend({},b.DEFAULTS,d.data(),"object"==typeof c&&c),f=d.data("bs.validator");f||d.data("bs.validator",f=new b(this,e)),"string"==typeof c&&f[c]()})},a.fn.validator.Constructor=b,a.fn.validator.noConflict=function(){return a.fn.validator=c,this},a(window).on("load",function(){a('form[data-toggle="validator"]').each(function(){var b=a(this);b.validator(b.data())})})}(jQuery);

$(document).ready(function(){
	
	$(window).load(function() { $("#loading").fadeOut("slow"); })
	


	//TOOLTIP
	$('.tooltips').tooltip({
	  selector: "[data-toggle=tooltip]",
	  container: "body"
	})

	//RESPONSIVE SIDEBAR
	$("button.show-sidebar").click(function(){
	$("div.left").toggleClass("mobile-sidebar");
	$("div.right").toggleClass("mobile-content");
	$("div.logo-brand").toggleClass("logo-brand-toggle");
	});


	//SIDEBAR MENU
	$('#sidebar-menu > ul > li > a').click(function() {
		$('#sidebar-menu li').removeClass('selected');
		$(this).closest('li').addClass('selected');	
		var checkElement = $(this).next();
			if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
				$(this).closest('li').removeClass('selected');
				checkElement.slideUp('fast');
			}
			if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
				$('#sidebar-menu ul ul:visible').slideUp('fast');
				checkElement.slideDown('fast');
			}
			if($(this).closest('li').find('ul').children().length == 0) {
				return true;
				} else {
				return false;	
			}		
	});


	$('input[type=file]').bootstrapFileInput();
	//DATE PICKER
	$('.datepicker-input').datepicker();
	//SELECT
	$('.selectpicker').selectpicker();
	//FILE INPUT

});