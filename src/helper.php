<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------

use think\captcha\facade\Captcha;

/**
 * @param string $captcha_id 验证码ID
 * @param string $code 用户输入的验证码
 * @return bool
 */
function captcha_check(string $captcha_id, string $code)
{
    return Captcha::check($captcha_id, $code);
}
