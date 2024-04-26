<?php

use App\Enum\Code;

return [
    // 系统消息
    Code::SUCCESS => 'Success',
    Code::FAIL => 'Fail',
    Code::SYSTEM_ERR => 'System Exception',
    Code::DB_ERR => 'System Exception',
    Code::UNAUTHORIZED => 'Unauthorized',
    Code::INVALID_AUTHORIZATION => 'Invalid Authorization',

    // 常用成功消息
    Code::S1000 => 'Added Successfully',
    Code::S1001 => 'Update Completed',
    Code::S1002 => 'Successfully Deleted',
    Code::S1003 => 'Saved Successfully',
    Code::S1004 => '启用成功',
    Code::S1005 => '禁用成功',
    Code::S1006 => '显示成功',
    Code::S1007 => '隐藏成功',

    // 常用失败消息
    Code::F2000 => '添加失败',
    Code::F2001 => '更新失败',
    Code::F2002 => '删除失败',
    Code::F2003 => '保存失败',
    Code::F2004 => '启用失败',
    Code::F2005 => '禁用失败',
    Code::F2006 => '显示失败',
    Code::F2007 => '隐藏失败',

    // 系统错误
    Code::F5000 => 'System Exception {flag}',
    Code::F5001 => 'System Exception {flag}',
    Code::F5002 => 'System Exception {flag}',
    Code::F5003 => 'System Exception {flag}',
    Code::F5004 => 'System Exception {flag}',
    Code::F5005 => 'System Exception',

    // 登录|注册消息
    Code::E100000 => '密码不能为空',
    Code::E100001 => '密码必须大于8个字符',
    Code::E100002 => '密码不能全是数字，请包含数字，大小写字母或特殊字符',
    Code::E100003 => '密码不能全是字母，请包含数字，大小写字母或特殊字符',
    Code::E100004 => '请包含数字，大小写字母或特殊字符',
    Code::E100005 => '旧密码错误，请检查',
    Code::E100006 => '密码更新成功,即将刷新页面...',
    Code::E100007 => '用户名必须',
    Code::E100008 => '用户名由字母和数组组成',
    Code::E100009 => '用户名长度为:5-20位',
    Code::E100010 => '信息错误(ATE100010), 请刷新页面',
    Code::E100011 => '密码必须',
    Code::E100012 => '密码长度为:8-20位',
    Code::E100013 => '验证码必须',
    Code::E100014 => '验证码错误',
    Code::E100015 => '账号或密码错误,请重试',
    Code::E100016 => '认证信息已过期,请重新登录',
    Code::E100017 => '认证信息无法解析',
    Code::E100018 => '认证信息错误!',
    Code::E100019 => 'wrong password',
    Code::E100020 => '账号未启用, 请联系管理员',
    Code::E100021 => '无法获取账号信息',
    Code::E100022 => '上级角色不存在',
    Code::E100023 => '同级别存在相同角色',
    Code::E100024 => '角色不存在',
    Code::E100025 => '超级管理员角色不能编辑',
    Code::E100026 => '该角色存在下级角色不能删除',
    Code::E100027 => '该角色与用户关系解除失败',
    Code::E100028 => '上级角色未启用,该角色状态和权限不能编辑',
    Code::E100029 => '该角色没有权限拥有此[{permission}]权限',
    Code::E100030 => '只能添加您所拥有角色的下级角色',
    Code::E100031 => '您没有权限编辑该角色',
    Code::E100032 => '该角色下级角色状态禁用失败',
    Code::E100033 => '管理者角色不能删除及修改状态',
    Code::E100034 => 'uuid[{uuid}]已经存在',
    Code::E100035 => 'module[{module}]已经存在',
    Code::E100036 => '父级权限不存在',
    Code::E100037 => '权限不存在',
    Code::E100038 => '此权限已经分配给角色[{title}],请先取消该权限再做删除',
    Code::E100039 => '此权限已经分配给菜单[{title}],不能删除',
    Code::E100040 => '此权限已经分配给菜单[{title}],无法重复分配',
    Code::E100041 => '父级菜单不存在',
    Code::E100042 => '菜单不存在',
    Code::E100043 => '尚未绑定Google验证码秘钥，请先绑定',
    Code::E100044 => '角色不存在或已禁用',
    Code::E100045 => '您没有权限分配角色[{title}]给该用户',
    Code::E100046 => '您没有权限解除此角色与该用户于的关系',
    Code::E100047 => '账号[{name}]已存在',
    Code::E100048 => 'Google验证码验证失败',
    Code::E100049 => '角色id不是有效的参数',
    Code::E100050 => '您没有权限解除此角色[{title}]与该用户于的关系',
    Code::E100051 => '角色与账号关系解除失败',
    Code::E100052 => '角色与账号关系绑定失败',
    Code::E100053 => '账号不存在',
    Code::E100054 => 'uuid[{uuid}]已存在',
    Code::E100055 => '配置不存在',
    Code::E100056 => '登录失败！',
    Code::E100057 => '您的IP地址已变更，请重新登录！',
    Code::E100058 => 'IP未经授权！',
    Code::E100059 => '不能修改自己的数据{param}！',
    Code::E100060 => '请先取消该用户关联角色[{role}]，否则无权限修改数据！',
    Code::E100061 => '您的账号状态当前已被禁用，请联系管理员！',
    Code::E100062 => '缺少参数:{param}！',
    Code::E100063 => '非有效参数:{param}！',
    Code::E100064 => '不存在的ApiKey！',
    Code::E100065 => 'ApiKey未被启用！',
    Code::E100066 => '签名错误！',
    Code::E100067 => '{param}数据无法解密！',
];
