//如何创建cookie
function createCookie(key,value,expires,path,domain,secure){
	//将键与值编码后连接在一起
	var cookieStr = encodeURIComponent(key) + "=" + encodeURIComponent(value);
	//判断参数是否是Date的对象
	if(expires instanceof Date){
		//设置cookie的有效期
		cookieStr += ';expires=' + expires;
		//"user=zhangsan;expires=date"  
	}
	//设置路径
	if(path){
		cookieStr += ';path=' + path;
	}
	//设置域名
	if(domain){
		cookieStr += ';domain=' + domain;
	}
	//设置安全性
	if(secure){
		cookieStr += ';secure';
	}
	//创建cookie
	document.cookie = cookieStr;
}

//设置cookie的有效期
function setCookieDate(day){
	var date = null;
	//确保参数是一个大于0的数字
	if(typeof day == 'number' && day > 0){
		date = new Date(); //创建日期对象
		date.setDate(date.getDate() + day); //修改日期
	}else{
		//alert("您输入的不是一个大于0的正整数！");
	}
	return date; //返回日期对象
}
//alert(getCookie('email'));
//获取cookie
function getCookie(key){
	//将key编码后与=连接成字符串
	var cookieName = encodeURIComponent(key) + '=';
	//从cookie的字符串中找到cookieName的下标
	var cookieStart = document.cookie.indexOf(cookieName);
	//alert(cookieStart);
	//如果可以找到
	if(cookieStart > -1){
		//找到;在cookie的字符串中的位置
		var cookieEnd = document.cookie.indexOf(';',cookieStart);
		var cookieValue = "";
		//alert(cookieEnd);
		//如果没有找到，说明已经到了字符串的末尾
		if(cookieEnd == -1){
			//将整个字符串的长度赋值给cookieEnd
			cookieEnd = document.cookie.length;
			
		}
		//将所须要的截取出来并进行解码
		cookieValue = decodeURIComponent(document.cookie.substring(cookieStart + cookieName.length,cookieEnd));
		//alert(cookieValue);
	}
	return cookieValue;
}
//alert(new Date(0));
//removeCookie('url');
//删除cookie
function removeCookie(key){
	document.cookie = encodeURIComponent(key) + "=;expires=" + new Date(0);
}