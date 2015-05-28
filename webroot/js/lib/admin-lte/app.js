/*! AdminLTE app.js
 * ================
 * Main JS application file for AdminLTE v2. This file
 * should be included in all pages. It controls some layout
 * options and implements exclusive AdminLTE plugins.
 *
 * @Author  Almsaeed Studio
 * @Support <http://www.almsaeedstudio.com>
 * @Email   <support@almsaeedstudio.com>
 * @version 2.1.0
 * @license MIT <http://opensource.org/licenses/MIT>
 */

function _init(){$.AdminLTE.layout={activate:function(){var e=this;e.fix(),e.fixSidebar(),$(window,".wrapper").resize(function(){e.fix(),e.fixSidebar()})},fix:function(){var e=$(".main-header").outerHeight()+$(".main-footer").outerHeight(),t=$(window).height(),n=$(".sidebar").height();if($("body").hasClass("fixed"))$(".content-wrapper, .right-side").css("min-height",t-$(".main-footer").outerHeight());else{var r;t>=n?($(".content-wrapper, .right-side").css("min-height",t-e),r=t-e):($(".content-wrapper, .right-side").css("min-height",n),r=n);var i=$($.AdminLTE.options.controlSidebarOptions.selector);typeof i!="undefined"&&i.height()>r&&$(".content-wrapper, .right-side").css("min-height",i.height())}},fixSidebar:function(){if(!$("body").hasClass("fixed")){typeof $.fn.slimScroll!="undefined"&&$(".sidebar").slimScroll({destroy:!0}).height("auto");return}typeof $.fn.slimScroll=="undefined"&&console&&console.error("Error: the fixed layout requires the slimscroll plugin!"),$.AdminLTE.options.sidebarSlimScroll&&typeof $.fn.slimScroll!="undefined"&&($(".sidebar").slimScroll({destroy:!0}).height("auto"),$(".sidebar").slimscroll({height:$(window).height()-$(".main-header").height()+"px",color:"rgba(0,0,0,0.2)",size:"3px"}))}},$.AdminLTE.pushMenu={activate:function(e){var t=$.AdminLTE.options.screenSizes;$(e).on("click",function(e){e.preventDefault(),$(window).width()>t.sm-1?$("body").toggleClass("sidebar-collapse"):$("body").hasClass("sidebar-open")?($("body").removeClass("sidebar-open"),$("body").removeClass("sidebar-collapse")):$("body").addClass("sidebar-open")}),$(".content-wrapper").click(function(){$(window).width()<=t.sm-1&&$("body").hasClass("sidebar-open")&&$("body").removeClass("sidebar-open")}),($.AdminLTE.options.sidebarExpandOnHover||$("body").hasClass("fixed")&&$("body").hasClass("sidebar-mini"))&&this.expandOnHover()},expandOnHover:function(){var e=this,t=$.AdminLTE.options.screenSizes.sm-1;$(".main-sidebar").hover(function(){$("body").hasClass("sidebar-mini")&&$("body").hasClass("sidebar-collapse")&&$(window).width()>t&&e.expand()},function(){$("body").hasClass("sidebar-mini")&&$("body").hasClass("sidebar-expanded-on-hover")&&$(window).width()>t&&e.collapse()})},expand:function(){$("body").removeClass("sidebar-collapse").addClass("sidebar-expanded-on-hover")},collapse:function(){$("body").hasClass("sidebar-expanded-on-hover")&&$("body").removeClass("sidebar-expanded-on-hover").addClass("sidebar-collapse")}},$.AdminLTE.tree=function(e){var t=this;$("li a",$(e)).on("click",function(e){var n=$(this),r=n.next();if(r.is(".treeview-menu")&&r.is(":visible"))r.slideUp("normal",function(){r.removeClass("menu-open")}),r.parent("li").removeClass("active");else if(r.is(".treeview-menu")&&!r.is(":visible")){var i=n.parents("ul").first(),s=i.find("ul:visible").slideUp("normal");s.removeClass("menu-open");var o=n.parent("li");r.slideDown("normal",function(){r.addClass("menu-open"),i.find("li.active").removeClass("active"),o.addClass("active"),t.layout.fix()})}r.is(".treeview-menu")&&e.preventDefault()})},$.AdminLTE.controlSidebar={activate:function(){var e=this,t=$.AdminLTE.options.controlSidebarOptions,n=$(t.selector),r=$(t.toggleBtnSelector);r.on("click",function(r){r.preventDefault(),!n.hasClass("control-sidebar-open")&&!$("body").hasClass("control-sidebar-open")?e.open(n,t.slide):e.close(n,t.slide)});var i=$(".control-sidebar-bg");e._fix(i),$("body").hasClass("fixed")?e._fixForFixed(n):$(".content-wrapper, .right-side").height()<n.height()&&e._fixForContent(n)},open:function(e,t){var n=this;t?e.addClass("control-sidebar-open"):$("body").addClass("control-sidebar-open")},close:function(e,t){t?e.removeClass("control-sidebar-open"):$("body").removeClass("control-sidebar-open")},_fix:function(e){var t=this;$("body").hasClass("layout-boxed")?(e.css("position","absolute"),e.height($(".wrapper").height()),$(window).resize(function(){t._fix(e)})):e.css({position:"fixed",height:"auto"})},_fixForFixed:function(e){e.css({position:"fixed","max-height":"100%",overflow:"auto","padding-bottom":"50px"})},_fixForContent:function(e){$(".content-wrapper, .right-side").css("min-height",e.height())}},$.AdminLTE.boxWidget={selectors:$.AdminLTE.options.boxWidgetOptions.boxWidgetSelectors,icons:$.AdminLTE.options.boxWidgetOptions.boxWidgetIcons,activate:function(){var e=this;$(e.selectors.collapse).on("click",function(t){t.preventDefault(),e.collapse($(this))}),$(e.selectors.remove).on("click",function(t){t.preventDefault(),e.remove($(this))})},collapse:function(e){var t=this,n=e.parents(".box").first(),r=n.find("> .box-body, > .box-footer");n.hasClass("collapsed-box")?(e.children(":first").removeClass(t.icons.open).addClass(t.icons.collapse),r.slideDown(300,function(){n.removeClass("collapsed-box")})):(e.children(":first").removeClass(t.icons.collapse).addClass(t.icons.open),r.slideUp(300,function(){n.addClass("collapsed-box")}))},remove:function(e){var t=e.parents(".box").first();t.slideUp()}}}if(typeof jQuery=="undefined")throw new Error("AdminLTE requires jQuery");$.AdminLTE={},$.AdminLTE.options={navbarMenuSlimscroll:!0,navbarMenuSlimscrollWidth:"3px",navbarMenuHeight:"200px",sidebarToggleSelector:"[data-toggle='offcanvas']",sidebarPushMenu:!0,sidebarSlimScroll:!0,sidebarExpandOnHover:!1,enableBoxRefresh:!0,enableBSToppltip:!0,BSTooltipSelector:"[data-toggle='tooltip']",enableFastclick:!0,enableControlSidebar:!0,controlSidebarOptions:{toggleBtnSelector:"[data-toggle='control-sidebar']",selector:".control-sidebar",slide:!0},enableBoxWidget:!0,boxWidgetOptions:{boxWidgetIcons:{collapse:"fa-minus",open:"fa-plus",remove:"fa-times"},boxWidgetSelectors:{remove:'[data-widget="remove"]',collapse:'[data-widget="collapse"]'}},directChat:{enable:!0,contactToggleSelector:'[data-widget="chat-pane-toggle"]'},colors:{lightBlue:"#3c8dbc",red:"#f56954",green:"#00a65a",aqua:"#00c0ef",yellow:"#f39c12",blue:"#0073b7",navy:"#001F3F",teal:"#39CCCC",olive:"#3D9970",lime:"#01FF70",orange:"#FF851B",fuchsia:"#F012BE",purple:"#8E24AA",maroon:"#D81B60",black:"#222222",gray:"#d2d6de"},screenSizes:{xs:480,sm:768,md:992,lg:1200}},$(function(){typeof AdminLTEOptions!="undefined"&&$.extend(!0,$.AdminLTE.options,AdminLTEOptions);var e=$.AdminLTE.options;_init(),$.AdminLTE.layout.activate(),$.AdminLTE.tree(".sidebar"),e.enableControlSidebar&&$.AdminLTE.controlSidebar.activate(),e.navbarMenuSlimscroll&&typeof $.fn.slimscroll!="undefined"&&$(".navbar .menu").slimscroll({height:e.navbarMenuHeight,alwaysVisible:!1,size:e.navbarMenuSlimscrollWidth}).css("width","100%"),e.sidebarPushMenu&&$.AdminLTE.pushMenu.activate(e.sidebarToggleSelector),e.enableBSToppltip&&$("body").tooltip({selector:e.BSTooltipSelector}),e.enableBoxWidget&&$.AdminLTE.boxWidget.activate(),e.enableFastclick&&typeof FastClick!="undefined"&&FastClick.attach(document.body),e.directChat.enable&&$(e.directChat.contactToggleSelector).on("click",function(){var e=$(this).parents(".direct-chat").first();e.toggleClass("direct-chat-contacts-open")}),$('.btn-group[data-toggle="btn-toggle"]').each(function(){var e=$(this);$(this).find(".btn").on("click",function(t){e.find(".btn.active").removeClass("active"),$(this).addClass("active"),t.preventDefault()})})}),function(e){e.fn.boxRefresh=function(t){function i(e){e.append(r),n.onLoadStart.call(e)}function s(e){e.find(r).remove(),n.onLoadDone.call(e)}var n=e.extend({trigger:".refresh-btn",source:"",onLoadStart:function(e){},onLoadDone:function(e){}},t),r=e('<div class="overlay"><div class="fa fa-refresh fa-spin"></div></div>');return this.each(function(){if(n.source===""){console&&console.log("Please specify a source first - boxRefresh()");return}var t=e(this),r=t.find(n.trigger).first();r.on("click",function(e){e.preventDefault(),i(t),t.find(".box-body").load(n.source,function(){s(t)})})})}}(jQuery),function(e){e.fn.todolist=function(t){var n=e.extend({onCheck:function(e){},onUncheck:function(e){}},t);return this.each(function(){typeof e.fn.iCheck!="undefined"?(e("input",this).on("ifChecked",function(t){var r=e(this).parents("li").first();r.toggleClass("done"),n.onCheck.call(r)}),e("input",this).on("ifUnchecked",function(t){var r=e(this).parents("li").first();r.toggleClass("done"),n.onUncheck.call(r)})):e("input",this).on("change",function(t){var r=e(this).parents("li").first();r.toggleClass("done"),n.onCheck.call(r)})})}}(jQuery);