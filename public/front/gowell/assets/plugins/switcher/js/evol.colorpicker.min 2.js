/*
   evol.colorpicker 2.2
   (c) 2014 Olivier Giulieri
*/
!function(a){var b=0,c=!a.support.cssFloat,d=c?"-ie":"",e=c?!1:/mozilla/.test(navigator.userAgent.toLowerCase())&&!/webkit/.test(navigator.userAgent.toLowerCase()),f=[],g=["ffffff","000000","eeece1","1f497d","4f81bd","c0504d","9bbb59","8064a2","4bacc6","f79646"],h=["f2f2f2","7f7f7f","ddd9c3","c6d9f0","dbe5f1","f2dcdb","ebf1dd","e5e0ec","dbeef3","fdeada","d8d8d8","595959","c4bd97","8db3e2","b8cce4","e5b9b7","d7e3bc","ccc1d9","b7dde8","fbd5b5","bfbfbf","3f3f3f","938953","548dd4","95b3d7","d99694","c3d69b","b2a2c7","92cddc","fac08f","a5a5a5","262626","494429","17365d","366092","953734","76923c","5f497a","31859b","e36c09","7f7f7f","0c0c0c","1d1b10","0f243e","244061","632423","4f6128","3f3151","205867","974806"],i=["c00000","ff0000","ffc000","ffff00","92d050","00b050","00b0f0","0070c0","002060","7030a0"],j=[["003366","336699","3366cc","003399","000099","0000cc","000066"],["006666","006699","0099cc","0066cc","0033cc","0000ff","3333ff","333399"],["669999","009999","33cccc","00ccff","0099ff","0066ff","3366ff","3333cc","666699"],["339966","00cc99","00ffcc","00ffff","33ccff","3399ff","6699ff","6666ff","6600ff","6600cc"],["339933","00cc66","00ff99","66ffcc","66ffff","66ccff","99ccff","9999ff","9966ff","9933ff","9900ff"],["006600","00cc00","00ff00","66ff99","99ffcc","ccffff","ccccff","cc99ff","cc66ff","cc33ff","cc00ff","9900cc"],["003300","009933","33cc33","66ff66","99ff99","ccffcc","ffffff","ffccff","ff99ff","ff66ff","ff00ff","cc00cc","660066"],["333300","009900","66ff33","99ff66","ccff99","ffffcc","ffcccc","ff99cc","ff66cc","ff33cc","cc0099","993399"],["336600","669900","99ff33","ccff66","ffff99","ffcc99","ff9999","ff6699","ff3399","cc3399","990099"],["666633","99cc00","ccff33","ffff66","ffcc66","ff9966","ff6666","ff0066","d60094","993366"],["a58800","cccc00","ffff00","ffcc00","ff9933","ff6600","ff0033","cc0066","660033"],["996633","cc9900","ff9900","cc6600","ff3300","ff0000","cc0000","990033"],["663300","996600","cc3300","993300","990000","800000","993333"]],k=function(a){var b=a.toString(16);return 1==b.length&&(b="0"+b),b},l=function(a){return k(Number(a))},m=function(a){var b=k(a);return b+b+b},n=function(a){if(a.length>10){var b=1+a.indexOf("("),c=a.indexOf(")"),d=a.substring(b,c).split(",");return["#",l(d[0]),l(d[1]),l(d[2])].join("")}return a};a.widget("evol.colorpicker",{version:"2.2",options:{color:null,showOn:"both",displayIndicator:!0,history:!0,strings:"Theme Colors,Standard Colors,More Colors,Less Colors,Back to Palette,History,No history yet."},_create:function(){this._paletteIdx=1,this._id="evo-cp"+b++,this._enabled=!0;var f=this;switch(this.element.get(0).tagName){case"INPUT":var g=this.options.color,h=this.element;if(this._isPopup=!0,this._palette=null,null!==g)h.val(g);else{var i=h.val();""!==i&&(g=this.options.color=i)}h.addClass("colorPicker "+this._id).wrap('<div style="width:'+(this.element.width()+32)+"px;"+(c?"margin-bottom:-21px;":"")+(e?"padding:1px 0;":"")+'"></div>').after('<div class="'+("focus"===this.options.showOn?"":"evo-pointer ")+"evo-colorind"+(e?"-ff":d)+'" '+(null!==g?'style="background-color:'+g+'"':"")+"></div>").on("keyup onpaste",function(){var b=a(this).val();b!=f.options.color&&f._setValue(b,!0)});var j=this.options.showOn;("both"===j||"focus"===j)&&h.on("focus",function(){f.showPalette()}),("both"===j||"button"===j)&&h.next().on("click",function(a){a.stopPropagation(),f.showPalette()});break;default:this._isPopup=!1,this._palette=this.element.html(this._paletteHTML()).attr("aria-haspopup","true"),this._bindColors()}null!==g&&this.options.history&&this._add2History(g)},_paletteHTML:function(){var a=[],b=this._paletteIdx=Math.abs(this._paletteIdx),c=this.options,e=c.strings.split(",");return a.push('<div class="evo-pop',d,' ui-widget ui-widget-content ui-corner-all"',this._isPopup?' style="position:absolute"':"",">"),a.push("<span>",this["_paletteHTML"+b](),"</span>"),a.push('<div class="evo-more"><a href="javascript:void(0)">',e[1+b],"</a>"),c.history&&a.push('<a href="javascript:void(0)" class="evo-hist">',e[5],"</a>"),a.push("</div>"),c.displayIndicator&&a.push(this._colorIndHTML(this.options.color,"left"),this._colorIndHTML("","right")),a.push("</div>"),a.join("")},_colorIndHTML:function(a){var b=[];return b.push('<div class="evo-color" style="float:left"><div style="'),b.push(a?"background-color:"+a:"display:none"),c?b.push('" class="evo-colorbox-ie"></div><span class=".evo-colortxt-ie" '):b.push('"></div><span '),b.push(a?">"+a+"</span>":"/>"),b.push("</div>"),b.join("")},_paletteHTML1:function(){var a=[],b=this.options.strings.split(","),e='<td style="background-color:#',f=c?'"><div style="width:2px;"></div></td>':'"><span/></td>',j='<tr><th colspan="10" class="ui-widget-content">';a.push('<table class="evo-palette',d,'">',j,b[0],"</th></tr><tr>");for(var k=0;10>k;k++)a.push(e,g[k],f);for(a.push("</tr>"),c||a.push('<tr><th colspan="10"></th></tr>'),a.push('<tr class="top">'),k=0;10>k;k++)a.push(e,h[k],f);for(var l=1;4>l;l++)for(a.push('</tr><tr class="in">'),k=0;10>k;k++)a.push(e,h[10*l+k],f);for(a.push('</tr><tr class="bottom">'),k=40;50>k;k++)a.push(e,h[k],f);for(a.push("</tr>",j,b[1],"</th></tr><tr>"),k=0;10>k;k++)a.push(e,i[k],f);return a.push("</tr></table>"),a.join("")},_paletteHTML2:function(){var a,b=[],e='<td style="background-color:#',f=c?'"><div style="width:5px;"></div></td>':'"><span/></td>',g='<table class="evo-palette2'+d+'"><tr>',h="</tr></table>";b.push('<div class="evo-palcenter">');for(var i=0,k=j.length;k>i;i++){b.push(g);var l=j[i];for(a=0,iMax=l.length;iMax>a;a++)b.push(e,l[a],f);b.push(h)}b.push('<div class="evo-sep"/>');var n=[];for(b.push(g),a=255;a>10;a-=10)b.push(e,m(a),f),a-=10,n.push(e,m(a),f);return b.push(h,g,n.join(""),h),b.push("</div>"),b.join("")},_switchPalette:function(b){if(this._enabled){var c,d,e,g=this.options.strings.split(",");if(a(b).hasClass("evo-hist")){var h=['<table class="evo-palette"><tr><th class="ui-widget-content">',g[5],"</th></tr></tr></table>",'<div class="evo-cHist">'];if(0===f.length)h.push("<p>&nbsp;",g[6],"</p>");else for(var i=f.length-1;i>-1;i--)h.push('<div style="background-color:',f[i],'"></div>');h.push("</div>"),c=-this._paletteIdx,d=h.join(""),e=g[4]}else this._paletteIdx<0?(c=-this._paletteIdx,this._palette.find(".evo-hist").show()):c=2==this._paletteIdx?1:2,d=this["_paletteHTML"+c](),e=g[c+1],this._paletteIdx=c;this._paletteIdx=c;var j=this._palette.find(".evo-more").prev().html(d).end().children().eq(0).html(e);0>c&&j.next().hide()}},showPalette:function(){if(this._enabled&&(a(".colorPicker").not("."+this._id).colorpicker("hidePalette"),null===this._palette)){this._palette=this.element.next().after(this._paletteHTML()).next().on("click",function(a){a.stopPropagation()}),this._bindColors();var b=this;a(document.body).on("click."+this._id,function(a){a.target!=b.element.get(0)&&b.hidePalette()})}return this},hidePalette:function(){if(this._isPopup&&this._palette){a(document.body).off("click."+this._id);var b=this;this._palette.off("mouseover click","td").fadeOut(function(){b._palette.remove(),b._palette=b._cTxt=null}).find(".evo-more a").off("click")}return this},_bindColors:function(){var b=this._palette.find("div.evo-color"),c=this.options.history?"td,.evo-cHist div":"td";this._cTxt1=b.eq(0).children().eq(0),this._cTxt2=b.eq(1).children().eq(0);var d=this;this._palette.on("click",c,function(){if(d._enabled){var b=n(a(this).attr("style").substring(17));d._setValue(b)}}).on("mouseover",c,function(){if(d._enabled){var b=n(a(this).attr("style").substring(17));d.options.displayIndicator&&d._setColorInd(b,2),d.element.trigger("mouseover.color",b)}}).find(".evo-more a").on("click",function(){d._switchPalette(this)})},val:function(a){return"undefined"==typeof a?this.options.color:(this._setValue(a),this)},_setValue:function(a,b){a=a.replace(/ /g,""),this.options.color=a,this._isPopup?(b||this.hidePalette(),this.element.val(a).next().attr("style","background-color:"+a)):this._setColorInd(a,1),this.options.history&&this._paletteIdx>0&&this._add2History(a),this.element.trigger("change.color",a)},_setColorInd:function(a,b){this["_cTxt"+b].attr("style","background-color:"+a).next().html(a)},_setOption:function(a,b){"color"==a?this._setValue(b,!0):this.options[a]=b},_add2History:function(a){for(var b=f.length,c=0;b>c;c++)if(a==f[c])return;b>27&&f.shift(),f.push(a)},enable:function(){var a=this.element;return this._isPopup?a.removeAttr("disabled"):a.css({opacity:"1","pointer-events":"auto"}),"focus"!==this.options.showOn&&this.element.next().addClass("evo-pointer"),a.removeAttr("aria-disabled"),this._enabled=!0,this},disable:function(){var a=this.element;return this._isPopup?a.attr("disabled","disabled"):(this.hidePalette(),a.css({opacity:"0.3","pointer-events":"none"})),"focus"!==this.options.showOn&&this.element.next().removeClass("evo-pointer"),a.attr("aria-disabled","true"),this._enabled=!1,this},isDisabled:function(){return!this._enabled},destroy:function(){a(document.body).off("click."+this._id),this._palette&&(this._palette.off("mouseover click","td").find(".evo-more a").off("click"),this._isPopup&&this._palette.remove(),this._palette=this._cTxt=null),this._isPopup&&this.element.next().off("click").remove().end().off("focus").unwrap(),this.element.removeClass("colorPicker "+this.id).empty(),a.Widget.prototype.destroy.call(this)}})}(jQuery);