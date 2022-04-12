var _=Object.defineProperty,g=Object.defineProperties;var m=Object.getOwnPropertyDescriptors;var a=Object.getOwnPropertySymbols;var v=Object.prototype.hasOwnProperty,y=Object.prototype.propertyIsEnumerable;var p=(t,s,e)=>s in t?_(t,s,{enumerable:!0,configurable:!0,writable:!0,value:e}):t[s]=e,l=(t,s)=>{for(var e in s||(s={}))v.call(s,e)&&p(t,e,s[e]);if(a)for(var e of a(s))y.call(s,e)&&p(t,e,s[e]);return t},c=(t,s)=>g(t,m(s));import"./ToolsSettings.19389363.js";import"./index.ee423bf3.js";import{J as d}from"./JsonValues.08065e69.js";import{n as f}from"./vueComponentNormalizer.4c221f82.js";import{o as h}from"./vendor.7b0b1a93.js";import{S as x}from"./AddPlus.3d6a4a91.js";import{S as b}from"./index.ff60205e.js";import{S as O}from"./External.c6f0b2ea.js";var k=function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"aioseo-exclude-posts"},[e("base-select",{attrs:{options:t.excludeOptions,"ajax-search":t.processGetObjects,customLabel:t.searchableLabel,size:"medium",multiple:"",value:t.getJsonValues(t.optionName),placeholder:t.strings.typeToSearch},on:{input:function(o){return t.optionName=t.setJsonValues(o)}},scopedSlots:t._u([{key:"noOptions",fn:function(){return[t._v(" "+t._s(t.noOptions)+" ")]},proxy:!0},{key:"noResult",fn:function(){return[t._v(" "+t._s(t.strings.noResult)+" ")]},proxy:!0},{key:"caret",fn:function(o){var n=o.toggle;return[e("base-button",{staticClass:"multiselect-toggle",staticStyle:{padding:"10px 13px",width:"40px",position:"absolute",height:"36px",right:"2px",top:"2px","text-align":"center",transition:"transform .2s ease"},attrs:{type:"gray"},on:{click:n}},[e("svg-add-plus",{staticStyle:{width:"14px",height:"14px",color:"black"}})],1)]}},{key:"option",fn:function(o){var n=o.option,i=o.search;return[e("div",{staticClass:"option"},[e("div",{staticClass:"option-title",domProps:{innerHTML:t._s(t.getOptionTitle(n.label,i))}}),e("div",{staticClass:"option-details"},[e("span",[t._v(t._s(t.strings.id)+": #"+t._s(n.value))]),e("span",[t._v(t._s(t.strings.type)+": "+t._s(n.type))])])]),e("a",{staticClass:"option-permalink",attrs:{href:n.link,target:"_blank"},on:{click:function(r){return r.stopPropagation(),function(){}.apply(null,arguments)}}},[e("svg-external")],1)]}},{key:"tag",fn:function(o){var n=o.option,i=o.remove;return[e("div",{staticClass:"multiselect__tag"},[e("div",{staticClass:"multiselect__tag-value"},[t._v(" "+t._s(n.label)+" - #"+t._s(n.value)+" ")]),e("div",{staticClass:"multiselect__tag-remove",on:{click:function(r){return r.stopPropagation(),i(n)}}},[e("svg-close",{nativeOn:{click:function(r){return r.stopPropagation(),i(n)}}})],1)])]}}])}),e("base-button",{attrs:{type:"gray",size:"medium"},on:{click:function(o){t.optionName=[]}}},[t._v(" "+t._s(t.strings.clear)+" ")])],1)},C=[];const S={components:{SvgAddPlus:x,SvgClose:b,SvgExternal:O},mixins:[d],props:{options:{type:Object,required:!0},type:{type:String,required:!0}},data(){return{excludeOptions:[],strings:{typeToSearch:"Type to search...",noOptionsPosts:"Begin typing a post ID, title or slug to search...",noOptionsTerms:"Begin typing a term ID or name to search...",noResult:"No results found for your search. Try again!",clear:"Clear",id:"ID",type:"Type"}}},computed:{optionName:{get(){return this.type==="posts"?this.options.excludePosts:this.options.excludeTerms},set(t){if(this.type==="posts"){this.options.excludePosts=t;return}this.options.excludeTerms=t}},noOptions(){return this.type==="posts"?this.strings.noOptionsPosts:this.strings.noOptionsTerms}},methods:c(l({},h(["getObjects"])),{processGetObjects(t){return this.getObjects({query:t,type:this.type}).then(s=>{this.excludeOptions=s.body.objects})},getOptionTitle(t,s){const e=new RegExp(`(${s})`,"gi");return t.replace(e,'<span class="search-term">$1</span>')},searchableLabel({value:t,label:s,slug:e}){return`${t} ${s} ${e}`}})},u={};var P=f(S,k,C,!1,T,null,null,null);function T(t){for(let s in u)this[s]=u[s]}var w=function(){return P.exports}();export{w as C};
