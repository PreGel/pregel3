!function($,e){"use strict";function t(n,i){this.$element=n,this.options=$.extend({},t.defaults,this.$element.data(),i),e.Nest.Feather(this.$element,"dropdown"),this._init(),e.registerPlugin(this),e.Keyboard.register("DropdownMenu",{ENTER:"open",SPACE:"open",ARROW_RIGHT:"next",ARROW_UP:"up",ARROW_DOWN:"down",ARROW_LEFT:"previous",ESCAPE:"close"})}t.defaults={disableHover:!1,autoclose:!0,hoverDelay:50,clickOpen:!1,closingTime:500,alignment:"left",verticalClass:"vertical",rightClass:"align-right"},t.prototype._init=function(){var e=this.$element.find("li.is-dropdown-submenu-parent");this.$element.children(".is-dropdown-submenu-parent").children(".is-dropdown-submenu").addClass("first-sub"),this.$menuItems=this.$element.find('[role="menuitem"]'),this.$tabs=this.$element.children('[role="menuitem"]'),this.isVert=this.$element.hasClass(this.options.verticalClass),this.$tabs.find("ul.is-dropdown-submenu").addClass(this.options.verticalClass),this.$element.hasClass(this.options.rightClass)||"right"===this.options.alignment?(this.options.alignment="right",e.addClass("is-left-arrow opens-left")):e.addClass("is-right-arrow opens-right"),this.isVert||this.$tabs.filter(".is-dropdown-submenu-parent").removeClass("is-right-arrow is-left-arrow opens-right opens-left").addClass("is-down-arrow"),this.changed=!1,this._events()},t.prototype._events=function(){var t=this,n="ontouchstart"in window||void 0!==window.ontouchstart,i="is-dropdown-submenu-parent",s;(this.options.clickOpen||n)&&this.$menuItems.on("click.zf.dropdownmenu",function(e){var s=$(e.target).parentsUntil("ul","."+i),o=s.hasClass(i),r="true"===s.attr("data-is-click"),a=s.children(".is-dropdown-submenu");if(o)if(r){if(n)return;e.stopImmediatePropagation(),e.preventDefault(),t._hide(s)}else e.stopImmediatePropagation(),e.preventDefault(),t._show(s.children(".is-dropdown-submenu")),s.add(s.parentsUntil(t.$element,"."+i)).attr("data-is-click",!0)}),this.options.disableHover||this.$menuItems.on("mouseenter.zf.dropdownmenu",function(e){e.stopImmediatePropagation();var n=$(this),o=n.hasClass(i);o&&(clearTimeout(s),s=setTimeout(function(){t._show(n.children(".is-dropdown-submenu"))},t.options.hoverDelay))}).on("mouseleave.zf.dropdownmenu",function(e){var n=$(this),o=n.hasClass(i);if(o&&t.options.autoclose){if("true"===n.attr("data-is-click")&&t.options.clickOpen)return!1;s=setTimeout(function(){t._hide(n)},t.options.closingTime)}}),this.$menuItems.on("keydown.zf.dropdownmenu",function(n){var i=$(n.target).parentsUntil("ul",'[role="menuitem"]'),s=t.$tabs.index(i)>-1,o=s?t.$tabs:i.siblings("li").add(i),r,a;o.each(function(e){return $(this).is(i)?(r=o.eq(e-1),void(a=o.eq(e+1))):void 0});var d=function(){i.is(":last-child")||a.children("a:first").focus()},l=function(){r.children("a:first").focus()},u=function(){var e=i.children("ul.is-dropdown-submenu");e.length&&(t._show(e),i.find("li > a:first").focus())},p=function(){var e=i.parent("ul").parent("li");e.children("a:first").focus(),t._hide(e)},h={open:u,close:function(){t._hide(t.$element),t.$menuItems.find("a:first").focus()},handled:function(){n.preventDefault(),n.stopImmediatePropagation()}};s?t.vertical?"left"===t.options.alignment?$.extend(h,{down:d,up:l,next:u,previous:p}):$.extend(h,{down:d,up:l,next:p,previous:u}):$.extend(h,{next:d,previous:l,down:u,up:p}):"left"===t.options.alignment?$.extend(h,{next:u,previous:p,down:d,up:l}):$.extend(h,{next:p,previous:u,down:d,up:l}),e.Keyboard.handleKey(n,t,h)})},t.prototype._show=function(t){var n=this.$tabs.index(this.$tabs.filter(function(e,n){return $(n).find(t).length>0})),i=t.parent("li.is-dropdown-submenu-parent").siblings("li.is-dropdown-submenu-parent");this._hide(i,n),t.css("visibility","hidden").addClass("js-dropdown-active").attr({"aria-hidden":!1}).parent("li.is-dropdown-submenu-parent").addClass("is-active").attr({"aria-selected":!0,"aria-expanded":!0});var s=e.Box.ImNotTouchingYou(t,null,!0);if(!s){var o="left"===this.options.alignment?"-right":"-left",r=t.parent(".is-dropdown-submenu-parent");r.removeClass("opens"+o).addClass("opens-"+this.options.alignment),s=e.Box.ImNotTouchingYou(t,null,!0),s||r.removeClass("opens-"+this.options.alignment).addClass("opens-inner"),this.changed=!0}t.css("visibility",""),this.$element.trigger("show.zf.dropdownmenu",[t])},t.prototype._hide=function(e,t){var n;n=e&&e.length?e:void 0!==t?this.$tabs.not(function(e,n){return e===t}):this.$element;var i=n.hasClass("is-active")||n.find(".is-active").length>0;if(i){if(n.find("li.is-active").add(n).attr({"aria-selected":!1,"aria-expanded":!1,"data-is-click":!1}).removeClass("is-active"),n.find("ul.js-dropdown-active").attr({"aria-hidden":!0}).removeClass("js-dropdown-active"),this.changed||n.find("opens-inner").length){var s="left"===this.options.alignment?"right":"left";n.find("li.is-dropdown-submenu-parent").add(n).removeClass("opens-inner opens-"+this.options.alignment).addClass("opens-"+s),this.changed=!1}this.$element.trigger("hide.zf.dropdownmenu",[n])}},t.prototype.destroy=function(){this.$menuItems.off(".zf.dropdownmenu").removeAttr("data-is-click").removeClass("is-right-arrow is-left-arrow is-down-arrow opens-right opens-left opens-inner"),e.Nest.Burn(this.$element,"dropdown"),e.unregisterPlugin(this)},e.plugin(t,"DropdownMenu")}(jQuery,window.Foundation);