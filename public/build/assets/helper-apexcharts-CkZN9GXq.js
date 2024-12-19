var dt=(F,c)=>()=>(c||F((c={exports:{}}).exports,c),c.exports);var pt=dt((at,ct)=>{(function(F,c){if(typeof at=="object"&&typeof ct=="object")ct.exports=c();else if(typeof define=="function"&&define.amd)define([],c);else{var a=c();for(var t in a)(typeof at=="object"?at:F)[t]=a[t]}})(self,()=>(()=>{var F={};return(()=>{var c=F;/*
 * @version: 2.6.0
 * @author: Preline Labs Ltd.
 * @license: Licensed under MIT and Preline UI Fair Use License (https://preline.co/docs/license.html)
 * Copyright 2024 Preline Labs Ltd.
 */Object.defineProperty(c,"__esModule",{value:!0}),c.buildTooltip=function(a,t){var o=t.title,d=t.mode,l=t.valuePrefix,e=l===void 0?"$":l,g=t.isValueDivided,b=g===void 0||g,p=t.valuePostfix,s=p===void 0?"":p,f=t.hasTextLabel,A=f!==void 0&&f,h=t.invertGroup,G=h!==void 0&&h,m=t.labelDivider,O=m===void 0?"":m,k=t.wrapperClasses,H=k===void 0?"ms-0.5 mb-2 bg-white border border-gray-200 text-gray-800 rounded-lg shadow-md dark:bg-neutral-800 dark:border-neutral-700":k,y=t.wrapperExtClasses,M=y===void 0?"":y,w=t.seriesClasses,J=w===void 0?"text-[12px]":w,C=t.seriesExtClasses,K=C===void 0?"":C,E=t.titleClasses,N=E===void 0?"font-semibold !text-sm !bg-white !border-gray-200 text-gray-800 rounded-t-lg dark:!bg-neutral-800 dark:!border-neutral-700 dark:text-neutral-200":E,j=t.titleExtClasses,Q=j===void 0?"":j,P=t.markerClasses,R=P===void 0?"!w-2.5 !h-2.5 !me-1.5":P,T=t.markerExtClasses,U=T===void 0?"!rounded-sm":T,D=t.valueClasses,W=D===void 0?"!font-medium text-gray-500 !ms-auto dark:text-neutral-400":D,L=t.valueExtClasses,X=L===void 0?"":L,z=t.labelClasses,Y=z===void 0?"text-gray-500 dark:text-neutral-400":z,I=t.labelExtClasses,Z=I===void 0?"":I,x=a.dataPointIndex,tt=a.ctx.opts.colors,u=a.ctx.opts.series,S="";return u.forEach(function($,r){var i=a.series[r][x]||(typeof u[r].data[x]!="object"?u[r].data[x]:a.series[r][x]),v=u[r].name,q=G?{left:"".concat(A?v:"").concat(O),right:"".concat(e).concat(i>=1e3&&b?"".concat(i/1e3,"k"):i).concat(s)}:{left:"".concat(e).concat(i>=1e3&&b?"".concat(i/1e3,"k"):i).concat(s),right:"".concat(A?v:"").concat(O)},B='<span class="apexcharts-tooltip-text-y-label '.concat(Y," ").concat(Z,'">').concat(q.left,"</span>");S+='<div class="apexcharts-tooltip-series-group !flex '.concat(A?"!justify-between":""," order-").concat(r+1," ").concat(J," ").concat(K,`">
      <span class="flex items-center">
        <span class="apexcharts-tooltip-marker `).concat(R," ").concat(U,'" style="background: ').concat(tt[r],`"></span>
        <div class="apexcharts-tooltip-text">
          <div class="apexcharts-tooltip-y-group !py-0.5">
            <span class="apexcharts-tooltip-text-y-value `).concat(W," ").concat(X,'">').concat(q.right,`</span>
          </div>
        </div>
      </span>
      `).concat(B,`
    </div>`)}),'<div class="'.concat(d==="dark"?"dark ":"").concat(H," ").concat(M,`">
    <div class="apexcharts-tooltip-title `).concat(N," ").concat(Q,'">').concat(o,`</div>
    `).concat(S,`
  </div>`)},c.buildTooltipCompareTwo=function(a,t){var o=a.dataPointIndex,d=a.ctx.opts.xaxis.categories,l=a.ctx.opts.colors,e=a.ctx.opts.series,g=t.title,b=t.mode,p=t.valuePrefix,s=p===void 0?"$":p,f=t.isValueDivided,A=f===void 0||f,h=t.valuePostfix,G=h===void 0?"":h,m=t.hasCategory,O=m===void 0||m,k=t.hasTextLabel,H=k!==void 0&&k,y=t.labelDivider,M=y===void 0?"":y,w=t.wrapperClasses,J=w===void 0?"ms-0.5 mb-2 bg-white border border-gray-200 text-gray-800 rounded-lg shadow-md dark:bg-neutral-800 dark:border-neutral-700":w,C=t.wrapperExtClasses,K=C===void 0?"":C,E=t.seriesClasses,N=E===void 0?"!justify-between w-full text-[12px]":E,j=t.seriesExtClasses,Q=j===void 0?"":j,P=t.titleClasses,R=P===void 0?"flex justify-between font-semibold !text-sm !bg-white !border-gray-200 text-gray-800 rounded-t-lg dark:!bg-neutral-800 dark:!border-neutral-700 dark:text-neutral-200":P,T=t.titleExtClasses,U=T===void 0?"":T,D=t.markerClasses,W=D===void 0?"!w-2.5 !h-2.5 !me-1.5":D,L=t.markerExtClasses,X=L===void 0?"!rounded-sm":L,z=t.valueClasses,Y=z===void 0?"!font-medium text-gray-500 !ms-auto dark:text-neutral-400":z,I=t.valueExtClasses,Z=I===void 0?"":I,x=t.labelClasses,tt=x===void 0?"text-gray-500 dark:text-neutral-400 ms-2":x,u=t.labelExtClasses,S=u===void 0?"":u,$="",r=e[0].data[o],i=e[1].data[o],v=d[o].split(" "),q=O?"".concat(v[0]).concat(v[1]?" ":"").concat(v[1]?v[1].slice(0,3):""):"",B=r>i,V=r/i==1,et=V?0:r/i*100,ot=B?'<svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>':'<svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 17 13.5 8.5 8.5 13.5 2 7" /><polyline points="16 17 22 17 22 11" /></svg>';return e.forEach(function(rt,n){var _=a.series[n][o]||(typeof e[n].data[o]!="object"?e[n].data[o]:a.series[n][o]),st=e[n].name,nt=e[n].altValue||null,lt='<span class="apexcharts-tooltip-text-y-label '.concat(tt," ").concat(S,'">').concat(q," ").concat(st||"","</span>"),it=nt||'<span class="apexcharts-tooltip-text-y-value '.concat(Y," ").concat(Z,'">').concat(s).concat(_>=1e3&&A?"".concat(_/1e3,"k"):_).concat(G).concat(M,"</span>");$+='<div class="apexcharts-tooltip-series-group '.concat(N," !flex order-").concat(n+1," ").concat(Q,`">
      <span class="flex items-center">
        <span class="apexcharts-tooltip-marker `).concat(W," ").concat(X,'" style="background: ').concat(l[n],`"></span>
        <div class="apexcharts-tooltip-text">
          <div class="apexcharts-tooltip-y-group !py-0.5">
            `).concat(it,`
          </div>
        </div>
      </span>
      `).concat(H?lt:"",`
    </div>`)}),'<div class="'.concat(b==="dark"?"dark ":"").concat(J," ").concat(K,`">
    <div class="apexcharts-tooltip-title `).concat(R," ").concat(U,`">
      <span>`).concat(g,`</span>
      <span class="flex items-center gap-x-1 `).concat(V?"":B?"text-green-600":"text-red-600",` ms-2">
        `).concat(V?"":ot,`
        <span class="inline-block text-sm">
          `).concat(et.toFixed(1),`%
        </span>
      </span>
    </div>
    `).concat($,`
  </div>`)},c.buildTooltipCompareTwoAlt=function(a,t){var o=a.dataPointIndex,d=a.ctx.opts.xaxis.categories,l=a.ctx.opts.colors,e=a.ctx.opts.series,g=t.title,b=t.mode,p=t.valuePrefix,s=p===void 0?"$":p,f=t.isValueDivided,A=f===void 0||f,h=t.valuePostfix,G=h===void 0?"":h,m=t.hasCategory,O=m===void 0||m,k=t.hasTextLabel,H=k!==void 0&&k,y=t.labelDivider,M=y===void 0?"":y,w=t.wrapperClasses,J=w===void 0?"ms-0.5 mb-2 bg-white border border-gray-200 text-gray-800 rounded-lg shadow-md dark:bg-neutral-800 dark:border-neutral-700":w,C=t.wrapperExtClasses,K=C===void 0?"":C,E=t.seriesClasses,N=E===void 0?"!justify-between w-full text-[12px]":E,j=t.seriesExtClasses,Q=j===void 0?"":j,P=t.titleClasses,R=P===void 0?"flex justify-between font-semibold !text-sm !bg-white !border-gray-200 text-gray-800 rounded-t-lg dark:!bg-neutral-800 dark:!border-neutral-700 dark:text-neutral-200":P,T=t.titleExtClasses,U=T===void 0?"":T,D=t.markerClasses,W=D===void 0?"!w-2.5 !h-2.5 !me-1.5":D,L=t.markerExtClasses,X=L===void 0?"!rounded-sm":L,z=t.valueClasses,Y=z===void 0?"!font-medium text-gray-500 !ms-auto dark:text-neutral-400":z,I=t.valueExtClasses,Z=I===void 0?"":I,x=t.labelClasses,tt=x===void 0?"text-gray-500 dark:text-neutral-400 ms-2":x,u=t.labelExtClasses,S=u===void 0?"":u,$="",r=e[0].data[o],i=e[1].data[o],v=d[o].split(" "),q=O?"".concat(v[0]).concat(v[1]?" ":"").concat(v[1]?v[1].slice(0,3):""):"",B=r>i,V=r/i==1,et=V?0:r/i*100,ot=B?'<svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>':'<svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 17 13.5 8.5 8.5 13.5 2 7" /><polyline points="16 17 22 17 22 11" /></svg>';return e.forEach(function(rt,n){var _=a.series[n][o]||(typeof e[n].data[o]!="object"?e[n].data[o]:a.series[n][o]),st=e[n].name,nt='<span class="apexcharts-tooltip-text-y-label '.concat(tt," ").concat(S,'">').concat(s).concat(_>=1e3&&A?"".concat(_/1e3,"k"):_).concat(G,"</span>");$+='<div class="apexcharts-tooltip-series-group !flex '.concat(N," order-").concat(n+1," ").concat(Q,`">
      <span class="flex items-center">
        <span class="apexcharts-tooltip-marker `).concat(W," ").concat(X,'" style="background: ').concat(l[n],`"></span>
        <div class="apexcharts-tooltip-text text-[12px]">
          <div class="apexcharts-tooltip-y-group !py-0.5">
            <span class="apexcharts-tooltip-text-y-value `).concat(Y," ").concat(Z,'">').concat(q," ").concat(st||"").concat(M,`</span>
          </div>
        </div>
      </span>
      `).concat(H?nt:"",`
    </div>`)}),'<div class="'.concat(b==="dark"?"dark ":"").concat(J," ").concat(K,`">
    <div class="apexcharts-tooltip-title `).concat(R," ").concat(U,`">
      <span>`).concat(g,`</span>
      <span class="flex items-center gap-x-1 `).concat(V?"":B?"text-green-600":"text-red-600",` ms-2">
        `).concat(V?"":ot,`
        <span class="inline-block text-sm">
          `).concat(et.toFixed(1),`%
        </span>
      </span>
    </div>
    `).concat($,`
  </div>`)},c.buildTooltipForDonut=function(a,t){var o=a.series,d=a.seriesIndex,l=a.w.globals,e=l.colors;return'<div class="apexcharts-tooltip-series-group" style="background-color: '.concat(e[d],`; display: block;">
    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
      <div class="apexcharts-tooltip-y-group" style="color: `).concat(t[d],`">
        <span class="apexcharts-tooltip-text-y-label">`).concat(l.labels[d],`: </span>
        <span class="apexcharts-tooltip-text-y-value">`).concat(o[d],`</span>
      </div>
    </div>
  </div>`)},c.buildChart=function(a,t,o,d){var l=document.querySelector(a),e=null;if(!l)return!1;var g=l.closest('[role="tabpanel"]'),b=null;Array.from(document.querySelector("html").classList).forEach(function(s){["dark","light","default"].includes(s)&&(b=s)});var p=function(s){return s===void 0&&(s=b||localStorage.getItem("hs_theme")),window._.merge(t(s),s==="dark"?d:o)};return l&&((e=new ApexCharts(l,p())).render(),window.addEventListener("on-hs-appearance-change",function(s){return e.updateOptions(p(s.detail))}),g&&g.addEventListener("on-hs-appearance-change",function(s){return e.updateOptions(p(s.detail))})),e}})(),F})())});export default pt();
