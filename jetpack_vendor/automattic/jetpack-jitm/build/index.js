!function(){"use strict";var t,a={567:function(t){t.exports=window.jQuery}},e={};function n(t){var i=e[t];if(void 0!==i)return i.exports;var c=e[t]={exports:{}};return a[t](c,c.exports,n),c.exports}n.n=function(t){var a=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(a,{a:a}),a},n.d=function(t,a){for(var e in a)n.o(a,e)&&!n.o(t,e)&&Object.defineProperty(t,e,{enumerable:!0,get:a[e]})},n.o=function(t,a){return Object.prototype.hasOwnProperty.call(t,a)},t=n(567),n.n(t)()(document).ready((function(t){var a={default:function(a){const e='\n\t\t\t\t<svg class="gridicon gridicons-external-link" height="17" width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\n\t\t\t\t\t<g>\n\t\t\t\t\t\t<path d="M19 13v6c0 1.105-.895 2-2 2H5c-1.105 0-2-.895-2-2V7c0-1.105.895-2 2-2h6v2H5v12h12v-6h2zM13 3v2h4.586l-7.793 7.793 1.414 1.414L19 6.414V11h2V3h-8z" />\n\t\t\t\t\t</g>\n\t\t\t\t</svg>\n\t\t\t\t';var n='<div class="jitm-card jitm-banner '+(a.CTA.message?"has-call-to-action":"")+" is-upgrade-premium "+a.content.classes+'" data-stats_url="'+a.jitm_stats_url+'">';if(n+='<div class="jitm-banner__content">',n+='<div class="jitm-banner__icon-plan">'+a.content.icon+"</div>",n+='<div class="jitm-banner__info">',n+='<div class="jitm-banner__title">'+a.content.message+"</div>",a.content.description&&""!==a.content.description){if(n+='<div class="jitm-banner__description">'+a.content.description,a.content.list.length>0){n+='<ul class="banner__list">';for(var i=0;i<a.content.list.length;i++){var c=a.content.list[i].item;a.content.list[i].url&&(c='<a href="'+a.content.list[i].url+'" target="_blank" rel="noopener noreferrer" data-module="'+a.feature_class+'" data-jptracks-name="nudge_item_click" data-jptracks-prop="jitm-'+a.id+'">'+c+e+"</a>"),n+='<li>\n\t\t\t\t<svg class="gridicon gridicons-checkmark" height="16" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\n\t\t\t\t\t<g>\n\t\t\t\t\t\t<path d="M9 19.414l-6.707-6.707 1.414-1.414L9 16.586 20.293 5.293l1.414 1.414" />\n\t\t\t\t\t</g>\n\t\t\t\t</svg>'+c+"</li>"}}n+="</div>"}if(n+="</div>",n+="</div>",n+='<div class="jitm-banner__buttons_container">',a.activate_module&&(n+='<div class="jitm-banner__action" id="jitm-banner__activate">',n+='<a href="#" data-module="'+a.activate_module+'" type="button" class="jitm-button is-compact is-primary" data-jptracks-name="nudge_click" data-jptracks-prop="jitm-'+a.id+'-activate_module" data-jitm-path="'+a.message_path+'">'+window.jitm_config.activate_module_text+"</a>",n+="</div>"),a.CTA.message){var o="jitm-button is-compact";a.CTA.primary&&null===a.activate_module?o+=" is-primary":o+=" is-secondary";var r=a.CTA.ajax_action,s=a.CTA.newWindow&&!r;n+='<div class="jitm-banner__action">',n+='<a href="'+(a.CTA.hasOwnProperty("link")&&a.CTA.link.length?a.CTA.link:a.url)+'" target="'+(s?"_blank":"_self")+'" rel="noopener noreferrer" title="'+a.CTA.message+'" data-module="'+a.feature_class+'" type="button" class="'+o+'" data-jptracks-name="nudge_click" data-jptracks-prop="jitm-'+a.id+'" data-jitm-path="'+a.message_path+'" '+(r?'data-ajax-action="'+r+'"':"")+">"+a.CTA.message+(s?e:""),n+="</div>"}return n+="</div>",a.is_dismissible&&(n+='<a href="#" data-module="'+a.feature_class+'" class="jitm-banner__dismiss"></a>'),t(n+="</div>")}},e=function(){t(".jetpack-jitm-message").each((function(){var e=t(this),n=e.data("message-path"),i=e.data("query"),c=e.data("redirect"),o=location.hash;o=o.replace(/#\//,"_"),n.includes("jetpack_page_my-jetpack")?n=n.replace("jetpack_page_my-jetpack","jetpack_page_my-jetpack"+o):"_dashboard"!==o&&(n=n.replace("toplevel_page_jetpack","toplevel_page_jetpack"+o));var r=!!t(".jetpack-logo__masthead").length;t.get(window.jitm_config.api_root+"jetpack/v4/jitm",{message_path:n,query:i,full_jp_logo_exists:r,_wpnonce:e.data("nonce")}).then((function(n){"object"==typeof n&&n[1]&&(n=[n[1]]),0!==n.length&&n[0].content&&function(e,n,i){var c;(c=n.template)&&a[c]||(c="default"),n.url=n.url+"&redirect="+i;var o,r=a[c](n);r.find(".jitm-banner__dismiss").on("click",(o=r,function(a){a.preventDefault(),o.hide(),t.ajax({url:window.jitm_config.api_root+"jetpack/v4/jitm",method:"POST",beforeSend:function(t){t.setRequestHeader("X-WP-Nonce",window.jitm_config.nonce)},data:{id:n.id,feature_class:n.feature_class}})})),t("#jp-admin-notices").length>0?(e.innerHTML=r,t("#jp-admin-notices").find(".jitm-card")&&t(".jitm-card").replaceWith(r),r.prependTo(t("#jp-admin-notices"))):e.replaceWith(r),r.find("#jitm-banner__activate a").on("click",(function(){var a=t(this);if(a.attr("disabled"))return!1;t.ajax({url:window.jitm_config.api_root+"jetpack/v4/module/"+a.data("module")+"/active",method:"POST",beforeSend:function(a){a.setRequestHeader("X-WP-Nonce",e.data("nonce")),t("#jitm-banner__activate a").text(window.jitm_config.activating_module_text),t("#jitm-banner__activate a").attr("disabled",!0)}}).done((function(){t("#jitm-banner__activate a").text(window.jitm_config.activated_module_text),t("#jitm-banner__activate a").attr("disabled",!0),setTimeout((function(){r.fadeOut("slow")}),2e3)}))})),r.find(".jitm-button[data-ajax-action]").on("click",(function(a){a.preventDefault();var n=t(this);return n.attr("disabled",!0),t.post(window.ajaxurl,{action:n.data("ajax-action"),_nonce:e.data("ajax-nonce")}).done((function(){r.fadeOut("slow")})).fail((function(){n.attr("disabled",!1)})),!1})),r.find(".jitm-button").on("click",(function(a){a.preventDefault();var e=t(this),n=e.attr("data-jptracks-name");if(void 0!==n){var i={clicked:e.attr("data-jptracks-prop")||!1,jitm_message_path:e.attr("data-jitm-path")||!1};window.jpTracksAJAX&&window.jpTracksAJAX.record_ajax_event(n,"click",i)}}))}(e,n[0],c)}))}))};e(),t(window).on("hashchange",(function(t){const a=t.originalEvent.newURL;if(["jetpack","my-jetpack","jetpack-backup","jetpack-boost","jetpack-protect","jetpack-search","jetpack-social","jetpack-videopress"].some((t=>a.includes(`admin.php?page=${t}`)))){var n=document.querySelector(".jitm-card");n&&n.remove(),e()}}))}))}();