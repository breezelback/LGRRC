var TINY={};

function T$(i){return document.getElementById(i)}

TINY.box=function(){
	var p,m,b,fn,ic,iu,iw,ih,ia,f=0;
	return{
		show:function(c,u,w,h,a,t){
			if(!f){
				p=document.createElement('div'); p.id='tinybox';
				m=document.createElement('div'); m.id='tinymask';				
				b=document.createElement('div'); b.id='tinycontent';
				m.innerHTML = "<iframe src='' frameborder='0' marginheight='0' marginwidth='0' scrolling='no' style='position:absolute;top:0px;left:0px;width:100%;height:100%;z-index:-1;'></iframe>" + m.innerHTML;
				document.body.appendChild(m); document.body.appendChild(p); p.appendChild(b);
				//m.onclick=TINY.box.hide; 
				window.onresize=TINY.box.resize; f=1
			}
			if(!a&&!u){
				p.style.width=w?w+'px':'auto'; p.style.height=h?h+'px':'auto';
				p.style.backgroundImage='none'; b.innerHTML=c
			}else{
				b.style.display='none'; p.style.width=p.style.height='100px'
			}
			this.mask();
			ic=c; iu=u; iw=w; ih=h; ia=a; this.alpha(m,1,80,3);
			if(t){setTimeout(function(){TINY.box.hide()},1000*t)}
		},
		fill:function(c,u,w,h,a){
			if(u){
				p.style.backgroundImage='';
				var x=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject('Microsoft.XMLHTTP');
				x.onreadystatechange=function(){
					if(x.readyState==4&&x.status==200){TINY.box.psh(x.responseText,w,h,a)}
				};
				x.open('GET',c,1); x.send(null)
			}else{
				this.psh(c,w,h,a)
			}
		},
		psh:function(c,w,h,a){
			if(a){
				if(!w||!h){
					var x=p.style.width, y=p.style.height; b.innerHTML=c;
					p.style.width=w?w+'px':''; p.style.height=h?h+'px':'';
					b.style.display='';
					w=parseInt(b.offsetWidth); h=parseInt(b.offsetHeight);
					b.style.display='none'; p.style.width=x; p.style.height=y;
				}else{
					b.innerHTML=c
				}
				this.size(p,w,h)
			}else{
				p.style.backgroundImage='none'
			}
		},
		hide:function(){
			TINY.box.alpha(p,-1,0,3)
		},
		resize:function(){
			TINY.box.pos(); TINY.box.mask()
		},
		mask:function(){
			m.style.height=TINY.page.total(1)+'px';
			m.style.width=''; m.style.width=TINY.page.total(0)+'px'
		},
		pos:function(){
			var t=(TINY.page.height()/2)-(p.offsetHeight/2); t=t<10?10:t;
			p.style.top=(t+TINY.page.top())+'px';
			p.style.left=(TINY.page.width()/2)-(p.offsetWidth/2)+'px'
		},
		alpha:function(e,d,a){
			clearInterval(e.ai);
			if(d==1){
				e.style.opacity=0; e.style.filter='alpha(opacity=0)';
				e.style.display='block'; this.pos()
			}
			e.ai=setInterval(function(){TINY.box.ta(e,a,d)},20)
		},
		ta:function(e,a,d){
			var o=Math.round(e.style.opacity*100);
			if(o==a){
				clearInterval(e.ai);
				if(d==-1){
					e.style.display='none';
					e==p?TINY.box.alpha(m,-1,0,2):b.innerHTML=p.style.backgroundImage=''
				}else{
					e==m?this.alpha(p,1,100):TINY.box.fill(ic,iu,iw,ih,ia)
				}
			}else{
				var n=Math.ceil((o+((a-o)*.5))); n=n==1?0:n;
				e.style.opacity=n/100; e.style.filter='alpha(opacity='+n+')'
			}
		},
		size:function(e,w,h){
			e=typeof e=='object'?e:T$(e); clearInterval(e.si);
			var ow=e.offsetWidth, oh=e.offsetHeight,
			wo=ow-parseInt(e.style.width), ho=oh-parseInt(e.style.height);
			var wd=ow-wo>w?0:1, hd=(oh-ho>h)?0:1;
			e.si=setInterval(function(){TINY.box.ts(e,w,wo,wd,h,ho,hd)},20)
		},
		ts:function(e,w,wo,wd,h,ho,hd){
			var ow=e.offsetWidth-wo, oh=e.offsetHeight-ho;
			if(ow==w&&oh==h){
				clearInterval(e.si); p.style.backgroundImage='none'; b.style.display='block'
			}else{
				if(ow!=w){var n=ow+((w-ow)*.5); e.style.width=wd?Math.ceil(n)+'px':Math.floor(n)+'px'}
				if(oh!=h){var n=oh+((h-oh)*.5); e.style.height=hd?Math.ceil(n)+'px':Math.floor(n)+'px'}
				this.pos()
			}
		}
	}
}();

TINY.page=function(){
	return{
		top:function(){return document.documentElement.scrollTop||document.body.scrollTop},
		width:function(){return self.innerWidth||document.documentElement.clientWidth||document.body.clientWidth},
		height:function(){return self.innerHeight||document.documentElement.clientHeight||document.body.clientHeight},
		total:function(d){
			var b=document.body, e=document.documentElement;
			return d?Math.max(Math.max(b.scrollHeight,e.scrollHeight),Math.max(b.clientHeight,e.clientHeight)):
			Math.max(Math.max(b.scrollWidth,e.scrollWidth),Math.max(b.clientWidth,e.clientWidth))
		}
	}
}();

var autoContent = "<form action='"+strTPre+"/message/index.php' method='POST' onsubmit='return checkF(this);' id='formm' name='formm'><table><tr><td>邮件标题：</td><td><input type='text'name='title' id='title' size=30/>&nbsp;&nbsp;(35个字符以内)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:TINY.box.hide()'>关闭此窗口</a></td></tr><tr><td>邮件内容：</td><td><textarea name='intro' id='intro' cols='50'rows='5'></textarea></td></tr><tr><td></td><td><input type='submit' value='发送邮件'/></td></tr></table><input type='hidden' name='uid' value='"+intToUid+"' /><input type='hidden' name='oid' value='0' /></form>";

/**
 * 写信对话框
 * @author	嬴益虎 <whoneed@163.com>
 */
function writetome(){TINY.box.show(autoContent,0,0,0,0);}

/**
 * 检查写信对话框
 * @author	嬴益虎 <whoneed@163.com>
 */
function checkF(obj){
	if(obj.title.value == ''){alert('标题不能为空');return false;
	}else if(obj.title.value.length > 35){alert('标题长度不能超过35个字符');return false;
	}else if(obj.intro.value.length < 10){alert('您也有点诚意吧，邮件内容必须超过10个字符');return false;
	}else{return true;}
}

/**
 * 显示用户信息
 * @author	嬴益虎 <whoneed@163.com>
 * @param	strUserId	用户id
 * @param	strUrlPre   网站前缀
 * @return	void
 */
function getUserInfo(strUserId, strUrlPre){
	if(strUserId == '' || strUserId == null) return false;

	var data = 'uid='+strUserId;
	$.ajax({
		type: "POST",
		url: strUrlPre+"/user/block/ajaxGetUserInfo.php",
		data: data,
		success: function(msg){
			if(msg == 'data_error'){
				alert('数据异常!');
			}else{
				TINY.box.show(msg,0,0,0,0);
			}
		}
	});
}

/**
 *	会员后台发邮件
 *
 */
function writetome2(strTPre, intToUid){
	var autoContent = "<form action='"+strTPre+"/message/index.php' method='POST' onsubmit='return checkF(this);' id='formm' name='formm'><table><tr><td>邮件标题：</td><td><input type='text'name='title' id='title' size=30/>&nbsp;&nbsp;(35个字符以内)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:TINY.box.hide()'>关闭此窗口</a></td></tr><tr><td>邮件内容：</td><td><textarea name='intro' id='intro' cols='50'rows='5'></textarea></td></tr><tr><td></td><td><input type='submit' value='发送邮件'/></td></tr></table><input type='hidden' name='uid' value='"+intToUid+"' /><input type='hidden' name='oid' value='0' /></form>";
	TINY.box.show(autoContent,0,0,0,0);
}