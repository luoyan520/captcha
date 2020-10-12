# think-captcha洛颜修改版

thinkphp6 验证码类库，由yunwuxin的think-captcha改版而成。
由于我的项目采用了前后端分离，因此使用缓存代替了原版的session

## 安装
> composer require luoyan/captcha



## 使用

### 使用默认路由输出验证码

直接访问/captcha.html来输出验证码

### 在控制器中输出验证码

在控制器的操作方法中使用

~~~
public function captcha($id = '')
{
	return captcha($id);
}
~~~
然后注册对应的路由来输出验证码


### 控制器里验证

手动验证
~~~
if(!captcha_check($captcha)){
 //验证失败
};
~~~