(()=>{var t={17:t=>{t.exports=function(t,e,i){return e in t?Object.defineProperty(t,e,{value:i,enumerable:!0,configurable:!0,writable:!0}):t[e]=i,t},t.exports.__esModule=!0,t.exports.default=t.exports}},e={};function i(a){var n=e[a];if(void 0!==n)return n.exports;var o=e[a]={exports:{}};return t[a](o,o.exports,i),o.exports}i.n=t=>{var e=t&&t.__esModule?()=>t.default:()=>t;return i.d(e,{a:e}),e},i.d=(t,e)=>{for(var a in e)i.o(e,a)&&!i.o(t,a)&&Object.defineProperty(t,a,{enumerable:!0,get:e[a]})},i.o=(t,e)=>Object.prototype.hasOwnProperty.call(t,e),(()=>{"use strict";var t=i(17),e=i.n(t);class a{constructor(t){this.pluginSlug=t,e()(this,"deactivateButton",void 0),e()(this,"dialog",void 0),this.deactivateButton=document.getElementById(`deactivate-${this.pluginSlug}`),this.deactivateButton||(this.deactivateButton=document.getElementById(`deactivate-${this.pluginSlug}-dev`)),this.deactivateButton&&(this.dialog=document.getElementById(`jp-plugin-deactivation-${this.pluginSlug}`),this.observeDialogActions(),this.attachEventListeners())}showDialog(){this.dialog.classList.add(a.ACTIVE_CLASS_NAME)}hideDialog(){this.dialog.classList.remove(a.ACTIVE_CLASS_NAME)}observeDialogActions(){this.dialog.querySelectorAll('[data-jp-plugin-deactivation-action="close"]').forEach((t=>{t.addEventListener("click",(()=>{this.hideDialog()}))}));this.dialog.querySelectorAll('[data-jp-plugin-deactivation-action="deactivate"]').forEach((t=>{t.addEventListener("click",(()=>{this.deactivate()}))}))}attachEventListeners(){this.deactivateButton.addEventListener("click",(t=>{t.preventDefault(),this.showDialog()}))}deactivate(){this.deactivateButton&&(window.location.href=this.deactivateButton.href,this.hideDialog())}}if(e()(a,"ACTIVE_CLASS_NAME","jp-plugin-deactivation--active"),"JetpackPluginDeactivationData"in window){const t=window.JetpackPluginDeactivationData;document.addEventListener("DOMContentLoaded",(function(){t.instances||(t.instances={});for(const e of t.slugs)t.instances[e]=new a(e)}))}})()})();