function getParameterByName(e,t){t||(t=window.location.href),e=e.replace(/[\[\]]/g,"\\$&");var i=new RegExp("[?&]"+e+"(=([^&#]*)|&|#|$)"),r=i.exec(t);return r?r[2]?decodeURIComponent(r[2].replace(/\+/g," ")):"":null}window.imc={user:{serverData:{}},core:{},api:{},ui:{}},$(function(){$("body").prepend('<div class="alert">InstantMCPE is now NetherBox Instant, enjoy free instant Minecraft PE and PC server hosting from NetherBox!</div>').hide().slideDown(250,function(){setTimeout(function(){$("div.alert").slideUp(250,function(){$(this).remove()})},8e3)})}),imc.ui={clearCommand:function(){$("div.cmds input").val("")},disableButton:function(){$("#topText h2, #topText .button").hide(),$(".loader").show()},showAlert:function(e){$("body").prepend('<div class="alert">'+e+"</div>").hide().slideDown(250,function(){setTimeout(function(){$("div.alert").slideUp(250,function(){$(this).remove()})},5e3)})},showServerInfo:function(){"pc"!==imc.user.serverData.type?($("div#the-box div.port").show(),$("div#the-box div.ip").text(imc.user.serverData.ip),$("div#the-box div.port").text("Port "+imc.user.serverData.port)):($("div#the-box div.port").hide(),$("div#the-box div.ip").text(imc.user.serverData.ip+":"+imc.user.serverData.port).addClass("smaller"));var e="Just created my own Minecraft PE server for free on @NBInstant https://netherbox.com/instant",t="https://twitter.com/intent/tweet?text="+encodeURIComponent(e);$("a.twitter.button").attr("href",t),null==imc.user.timerId&&(location.hash=imc.user.hash,imc.ui.startTimer()),$(".extend-promo").show(),$("div#the-box").show(),$(".loader").hide()},showError:function(e){$("#topText h2, #topText .button").hide(),$("div#the-box").hide(),$("div#the-error").text(e).css("display","inline-block"),$(".loader").hide()},startTimer:function(){imc.user.timerId=setInterval(imc.ui.updateTimer,250),imc.ui.updateTimer()},toggleCommandEntry:function(){imc.user.showingCommandEntry?($("div#the-box div.cmds").hide(),imc.user.showingCommandEntry=!1):($("div#the-box div.cmds").show(),imc.user.showingCommandEntry=!0)},updateStats:function(){imc.api.call("getstats",function(e,t){e&&$("div.stats").text(t)})},updateTimer:function(){var e=imc.user.serverData.expireson,t=e.split(" "),i=t[0].split("-"),r=t[1].split(":"),n=new Date(i[0],i[1]-1,i[2],r[0],r[1],r[2]);n.setHours(n.getHours()+7);var o=new Date;o.setHours(o.getHours()+o.getTimezoneOffset()/60);var a=Math.floor((n-o)/1e3);a=0>a?0:a,imc.user.timeLeft=a;var s=Math.floor(a/86400),c=Math.floor(a/3600)-24*s,u=Math.floor(a/60)-60*c-1440*s,m=Math.round(a%60),h="";h+=s>0?s+" Day"+(s>1?"s":"")+" ":"",h+=c>0?c+" Hour"+(c>1?"s":"")+" ":"",h+=u>0?u+" Min"+(u>1?"s":"")+" ":"",h+=m>0?m+" Sec ":"",0==h.length&&(h="Deleting server..."),$("div#the-box div.timer span.timer-inner").text(h)}},imc.api={call:function(e,t,i){if(jQuery.support.cors=!0,e=$.trim(e),0==e.length)throw new Error("Invalid call; action cannot be empty.");var r="https://instantapi.netherbox.com/"+e+"/";i&&i.forEach(function(e){r+=e+"/"}),$.ajax({url:r,success:function(e){var i;try{i=JSON.parse(e)}catch(r){console.log("Malformed response: "+e)}null!=t&&t(i.status,i.data)},error:function(e,i,r){null!=t&&(console.log("AJAX Error: "+r),t(!1,r))}})},setHash:function(e){imc.user.hash=e;var t=new Date;t.setDate(t.getDate()+1),t=t.toUTCString(),document.cookie="hash="+e+"; expires="+t},clearCookie:function(){document.cookie="hash=; expires=Thu, 01 Jan 1970 00:00:01 GMT;"},requestServerPE:function(){imc.api.call("createPE",function(e,t){e?(imc.api.setHash(t),window.location.hash=t,imc.user.timeFetchID=setInterval(imc.api.fetchTime,1e4)):(imc.ui.showError(t),clearInterval(imc.user.wfsid))})},requestServerPC:function(){imc.api.call("createPC",function(e,t){e?(imc.api.setHash(t),window.location.hash=t,imc.user.timeFetchID=setInterval(imc.api.fetchTime,1e4)):(imc.ui.showError(t),clearInterval(imc.user.wfsid))})},checkServerStatus:function(){if(0!=imc.user.hash.length){var e=[imc.user.hash];imc.api.call("check",function(e,t){if(e){if(t&&(imc.user.serverData=t),!imc.user.serverData.hash&&t.hash&&(imc.api.setHash(t.hash),window.location.hash=t.hash),t.created===!0){var i=imc.user.serverData.ip;i=i.substring(0,i.indexOf(":"));var r=imc.user.serverData.ip.replace(i+":","");imc.user.serverData.port=r,imc.user.serverData.ip=i,imc.ui.buttonClicked?location.reload():imc.ui.showServerInfo()}}else t&&(imc.ui.showError(t),clearInterval(imc.user.wfsid),t.indexOf("expired")>=0&&(imc.user.hash=location.hash="",imc.api.clearCookie()))},e)}},deleteServer:function(){var e=[imc.user.hash];imc.api.call("delete",null,e)},sendCommand:function(e){var t=[imc.user.hash,e];imc.api.call("sendcommand",function(e,t){e?(imc.ui.showAlert("Command sent successfully!"),imc.ui.clearCommand()):imc.ui.showAlert("Unable to send command: "+t)},t)},createSocial:function(e,t){var i=[imc.user.hash,e,t];imc.api.call("createsocial",function(e,t){e?imc.ui.showAlert("Your post was successful - enjoy!"):imc.ui.showAlert(t)},i)},uploadWorld:function(){}},$(function(){imc.core.init()}),imc.core={init:function(){imc.core.checkForCookie(),$(".button a#pe").click(function(e){imc.ui.buttonClicked=!0,imc.ui.disableButton(),imc.api.requestServerPE(),imc.core.waitForServer(),e.preventDefault()}),$(".button a#pc").click(function(e){imc.ui.buttonClicked=!0,imc.ui.disableButton(),imc.api.requestServerPC(),imc.core.waitForServer(),e.preventDefault()}),$("div.items span.item, div.items span.menu-item").click(function(){$(this).hasClass("menu-item")?($(this).hasClass("cmd")&&imc.ui.toggleCommandEntry(),$("div.items div.menu-inner").hide()):$(this).hasClass("delete")?confirm("Are you sure you want to delete your server?")&&imc.api.deleteServer():$(this).hasClass("cmd")&&imc.ui.toggleCommandEntry()}),$("div.items span.menu span.title").click(function(){var e=$(this).parent();$(e).find("div.menu-inner").show()}),$("div.items span.menu div.menu-inner").hover(function(){},function(){$(this).hide()}),$("div#the-overlay div.prices button").click(function(){$(this).parent().hasClass("social")&&$(this).hasClass("fb")&&imc.core.fbPost()}),$("div#the-box div.cmds form").submit(function(){var e=$(this).find("input").val().trim();return"/"==e.charAt(0)&&(e=e.substring(1)),e.length>0&&imc.api.sendCommand(e),!1}),$(".item.extend").click(function(e){$("html, body").animate({scrollTop:$(".box.extend-promo").offset().top},1e3),e.preventDefault()}),location.hash&&(imc.user.hash=location.hash.substring(1),imc.ui.disableButton(),imc.core.waitForServer()),imc.user.statsid=setInterval(imc.ui.updateStats,3e4),imc.ui.updateStats()},waitForServer:function(){$("#topText h2, #topText .button").hide(),$(".loader").show();var e,t=setInterval(function(){var i=imc.user.serverData.position;if(i){if(e!=i){var r="You're next!";i>0&&(r="There ",r+=1!==i?"are":"is",r+=" "+i+" server",r+=1!==i?"s":"",r+=" ahead of you.");var n=imc.wait||30;r+="<br>Average wait: "+n,60>n&&(r+=" second"+(1===n?"":"s")),n>=60&&(n=Math.ceil(n/60),r+=n+" minute"+(1===n?"":"s")),$(".wait").html(r).show()}e=i,imc.user.serverData.created&&(clearInterval(t),$(".wait").hide())}},250);imc.user.wfsid=setInterval(imc.api.checkServerStatus,2500)},updateStatus:function(e){console.log(e)},updateHash:function(){},fbPost:function(){FB.ui({method:"feed",name:"InstantMCPE",description:"Free and instant Minecraft PE servers!",link:"http://instantmcpe.com"},function(e){if(null!=e){var t=e.post_id;null!=t&&imc.api.createSocial("fb",t)}})},checkForCookie:function(e){void 0==e&&(e="hash");var t=document.cookie;if(-1!=t.indexOf(e+"=")){var i=t.substring(t.indexOf(e+"=")+(e.length+1));if(-1!=i.indexOf(";")&&(i=i.substring(0,i.indexOf(";"))),"hash"!=e)return i;12==i.length&&0==location.hash.length&&(location.hash=i,imc.api.setHash(location.hash))}return null}};