;window.CloudflareApps=window.CloudflareApps||{};CloudflareApps.siteId="b3d658d6bd6a17254757b43886495428";CloudflareApps.installs=CloudflareApps.installs||{};;(function(){'use strict'
CloudflareApps.internal=CloudflareApps.internal||{}
var errors=[]
CloudflareApps.internal.placementErrors=errors
var errorHashes={}
function noteError(options){var hash=options.selector+'::'+options.type+'::'+(options.installId||'')
if(errorHashes[hash]){return}
errorHashes[hash]=true
errors.push(options)}
var initializedSelectors={}
var currentInit=false
CloudflareApps.internal.markSelectors=function markSelectors(){if(!currentInit){check()
currentInit=true
setTimeout(function(){currentInit=false})}}
function check(){var installs=window.CloudflareApps.installs
for(var installId in installs){if(!installs.hasOwnProperty(installId)){continue}
var selectors=installs[installId].selectors
if(!selectors){continue}
for(var key in selectors){if(!selectors.hasOwnProperty(key)){continue}
var hash=installId+'::'+key
if(initializedSelectors[hash]){continue}
var els=document.querySelectorAll(selectors[key])
if(els&&els.length>1){noteError({type:'init:too-many',option:key,selector:selectors[key],installId:installId})
initializedSelectors[hash]=true
continue}else if(!els||!els.length){continue}
initializedSelectors[hash]=true
els[0].setAttribute('cfapps-selector',selectors[key])}}}
CloudflareApps.querySelector=function querySelector(selector){if(selector==='body'||selector==='head'){return document[selector]}
CloudflareApps.internal.markSelectors()
var els=document.querySelectorAll('[cfapps-selector="'+selector+'"]')
if(!els||!els.length){noteError({type:'select:not-found:by-attribute',selector:selector})
els=document.querySelectorAll(selector)
if(!els||!els.length){noteError({type:'select:not-found:by-query',selector:selector})
return null}else if(els.length>1){noteError({type:'select:too-many:by-query',selector:selector})}
return els[0]}
if(els.length>1){noteError({type:'select:too-many:by-attribute',selector:selector})}
return els[0]}}());(function(){'use strict'
var prevEls={}
CloudflareApps.createElement=function createElement(options,prevEl){options=options||{}
CloudflareApps.internal.markSelectors()
try{if(prevEl&&prevEl.parentNode){var replacedEl
if(prevEl.cfAppsElementId){replacedEl=prevEls[prevEl.cfAppsElementId]}
if(replacedEl){prevEl.parentNode.replaceChild(replacedEl,prevEl)
delete prevEls[prevEl.cfAppsElementId]}else{prevEl.parentNode.removeChild(prevEl)}}
var element=document.createElement('cloudflare-app')
var container
if(options.pages&&options.pages.URLPatterns&&!CloudflareApps.matchPage(options.pages.URLPatterns)){return element}
try{container=CloudflareApps.querySelector(options.selector)}catch(e){}
if(!container){return element}
if(!container.parentNode&&(options.method==='after'||options.method==='before'||options.method==='replace')){return element}
if(container===document.body){if(options.method==='after'){options.method='append'}else if(options.method==='before'){options.method='prepend'}}
switch(options.method){case'prepend':if(container.firstChild){container.insertBefore(element,container.firstChild)
break}
case'append':container.appendChild(element)
break
case'after':if(container.nextSibling){container.parentNode.insertBefore(element,container.nextSibling)}else{container.parentNode.appendChild(element)}
break
case'before':container.parentNode.insertBefore(element,container)
break
case'replace':try{var id=element.cfAppsElementId=Math.random().toString(36)
prevEls[id]=container}catch(e){}
container.parentNode.replaceChild(element,container)}
return element}catch(e){if(typeof console!=='undefined'&&typeof console.error!=='undefined'){console.error('Error creating Cloudflare Apps element',e)}}}}());(function(){'use strict'
CloudflareApps.matchPage=function matchPage(patterns){if(!patterns||!patterns.length){return true}
var loc=document.location.host+document.location.pathname
if(window.CloudflareApps&&CloudflareApps.proxy&&CloudflareApps.proxy.originalURL){var url=CloudflareApps.proxy.originalURL.parsed
loc=url.host+url.path}
for(var i=0;i<patterns.length;i++){var re=new RegExp(patterns[i],'i')
if(re.test(loc)){return true}}
return false}}());CloudflareApps.installs["KUKcRVs0JXrM"]={appId:"p7q8mOaCUL6N",scope:{}};;CloudflareApps.installs["KUKcRVs0JXrM"].options={"backgroundColor":"#ff0000","color":"#ffffff","fontSize":"small","href":"https://odinshop.io/offers","position":"bottom-left","targetBlank":false,"text":"V.I.P Bulk Offers","width":160};;CloudflareApps.installs["KUKcRVs0JXrM"].URLPatterns=["^odinshop.io/main/?.*$","^www.odinshop.io/?.*$"];;if(CloudflareApps.matchPage(CloudflareApps.installs['KUKcRVs0JXrM'].URLPatterns)){(function(){'use strict'
var options=CloudflareApps.installs['KUKcRVs0JXrM'].options
var element
function getMaxZIndex(){var max=0
var elements=document.getElementsByTagName('*')
Array.prototype.slice.call(elements).forEach(function(element){var zIndex=parseInt(document.defaultView.getComputedStyle(element).zIndex,10)
max=zIndex?Math.max(max,zIndex):max})
return max}
function updateElement(){var width=options.width=Math.max(Math.min(options.width,500),100)
element=CloudflareApps.createElement({selector:'body',method:'append'},element)
element.setAttribute('app','corner-ribbon')
element.setAttribute('data-size',options.fontSize)
element.setAttribute('data-position',options.position)
element.style.zIndex=getMaxZIndex()+1
element.style.width=element.style.height=width+'px'
var ribbonContent=document.createElement('a')
if(options.href){ribbonContent.setAttribute('href',options.href)
if(options.targetBlank){ribbonContent.setAttribute('target','_blank')}}
ribbonContent.innerHTML=options.text
ribbonContent.className='ribbon-content'
ribbonContent.style.color=options.color||'#fff'
ribbonContent.style.backgroundColor=options.backgroundColor||'#000'
element.appendChild(ribbonContent)}
if(document.readyState==='loading'){document.addEventListener('DOMContentLoaded',updateElement)}else{updateElement()}
window.CloudflareApps.installs['KUKcRVs0JXrM'].scope={setOptions:function setOptions(nextOptions){options=nextOptions
updateElement()}}}())};(function(){try{var link=document.createElement('link');link.rel='stylesheet';link.href='data:text/css;charset=utf-8;base64,Y2xvdWRmbGFyZS1hcHBbYXBwPSJjb3JuZXItcmliYm9uIl0gewogIHBvaW50ZXItZXZlbnRzOiBub25lOwogIHBvc2l0aW9uOiBmaXhlZDsKfQoKY2xvdWRmbGFyZS1hcHBbYXBwPSJjb3JuZXItcmliYm9uIl0gLnJpYmJvbi1jb250ZW50IHsKICBib3JkZXI6IDA7CiAgYm94LXNoYWRvdzogMCAwIDNweCByZ2JhKDAsIDAsIDAsIC4zKTsKICBib3gtc2l6aW5nOiBib3JkZXItYm94OwogIGN1cnNvcjogZGVmYXVsdDsKICBoZWlnaHQ6IDNlbTsKICBsZXR0ZXItc3BhY2luZzogLjAzZW07CiAgbGluZS1oZWlnaHQ6IDEuMTsKICBvdmVyZmxvdzogaGlkZGVuOwogIHBhZGRpbmc6IDFlbSAwOwogIHBvc2l0aW9uOiBhYnNvbHV0ZTsKICB0ZXh0LWFsaWduOiBjZW50ZXI7CiAgdGV4dC1kZWNvcmF0aW9uOiBub25lOwogIHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzOwogIHRyYW5zZm9ybS1vcmlnaW46IDAgMDsKICB3aGl0ZS1zcGFjZTogbm93cmFwOwogIHdpZHRoOiAxNDEuNDIxMzU2JTsgLyogc3FydCgyKSAqLwp9CgpjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXSAucmliYm9uLWNvbnRlbnRbaHJlZl0gewogIGN1cnNvcjogcG9pbnRlcjsKICBwb2ludGVyLWV2ZW50czogYWxsOwp9CgpjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXSAucmliYm9uLWNvbnRlbnRbaHJlZl0sCmNsb3VkZmxhcmUtYXBwW2FwcD0iY29ybmVyLXJpYmJvbiJdIC5yaWJib24tY29udGVudFtocmVmXTpsaW5rLApjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXSAucmliYm9uLWNvbnRlbnRbaHJlZl06aG92ZXIsCmNsb3VkZmxhcmUtYXBwW2FwcD0iY29ybmVyLXJpYmJvbiJdIC5yaWJib24tY29udGVudFtocmVmXTphY3RpdmUgewogIGNvbG9yOiBpbmhlcml0OwogIG91dGxpbmU6IG5vbmU7Cn0KCmNsb3VkZmxhcmUtYXBwW2FwcD0iY29ybmVyLXJpYmJvbiJdIC5yaWJib24tY29udGVudFtocmVmXTpob3ZlciB7CiAgb3BhY2l0eTogLjg7Cn0KCmNsb3VkZmxhcmUtYXBwW2FwcD0iY29ybmVyLXJpYmJvbiJdW2RhdGEtc2l6ZT0ic21hbGwiXSAgewogIGZvbnQtc2l6ZTogMC44NWVtOwp9CgpjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXVtkYXRhLXNpemU9Im5vcm1hbCJdIHsKICBmb250LXNpemU6IDEuMDBlbTsKfQoKY2xvdWRmbGFyZS1hcHBbYXBwPSJjb3JuZXItcmliYm9uIl1bZGF0YS1zaXplPSJsYXJnZSJdIHsKICBmb250LXNpemU6IDEuMjVlbTsKfQoKY2xvdWRmbGFyZS1hcHBbYXBwPSJjb3JuZXItcmliYm9uIl1bZGF0YS1zaXplPSJodWdlIl0gewogIGZvbnQtc2l6ZTogMS41MGVtOwp9CgoKY2xvdWRmbGFyZS1hcHBbYXBwPSJjb3JuZXItcmliYm9uIl1bZGF0YS1wb3NpdGlvbj0idG9wLWxlZnQiXSB7CiAgdG9wOiAwOwogIGxlZnQ6IDA7Cn0KCmNsb3VkZmxhcmUtYXBwW2FwcD0iY29ybmVyLXJpYmJvbiJdW2RhdGEtcG9zaXRpb249InRvcC1yaWdodCJdIHsKICB0b3A6IDA7CiAgcmlnaHQ6IDA7Cn0KCmNsb3VkZmxhcmUtYXBwW2FwcD0iY29ybmVyLXJpYmJvbiJdW2RhdGEtcG9zaXRpb249ImJvdHRvbS1sZWZ0Il0gewogIGJvdHRvbTogMDsKICBsZWZ0OiAwOwp9CgpjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXVtkYXRhLXBvc2l0aW9uPSJib3R0b20tcmlnaHQiXSB7CiAgYm90dG9tOiAwOwogIHJpZ2h0OiAwOwp9CgpjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXVtkYXRhLXBvc2l0aW9uPSJ0b3AtbGVmdCJdIC5yaWJib24tY29udGVudCB7CiAgdHJhbnNmb3JtOiByb3RhdGUoLTQ1ZGVnKTsKICB0b3A6IDEwMCU7CiAgbGVmdDogLTIuMTIxMzJlbTsKICBtYXJnaW4tdG9wOiAtMi4xMjEzMmVtOwp9CgpjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXVtkYXRhLXBvc2l0aW9uPSJ0b3AtcmlnaHQiXSAucmliYm9uLWNvbnRlbnQgewogIHRyYW5zZm9ybTogcm90YXRlKDQ1ZGVnKTsKICBsZWZ0OiAyLjEyMTMyZW07CiAgdG9wOiAtMi4xMjEzMmVtOwp9CgpjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXVtkYXRhLXBvc2l0aW9uPSJib3R0b20tbGVmdCJdIC5yaWJib24tY29udGVudCB7CiAgdHJhbnNmb3JtOiByb3RhdGUoNDVkZWcpOwp9CgpjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXVtkYXRhLXBvc2l0aW9uPSJib3R0b20tcmlnaHQiXSAucmliYm9uLWNvbnRlbnQgewogIHRyYW5zZm9ybTogcm90YXRlKC00NWRlZyk7CiAgdG9wOiAxMDAlOwp9Cg==';document.getElementsByTagName('head')[0].appendChild(link);}catch(e){}})();