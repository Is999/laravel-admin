<?php

namespace App\Enum;

/**
 *  Redis数据key
 */
enum RedisKeys: string
{
    const DELIMIT = ':'; // key 分割符

    // TABLE 数据缓存 keys start
    const ROLE_STATUS = 'role_status'; // 角色状态 Hash role_status
    const ROLE_PERMISSION = 'role_permission' . self::DELIMIT; // 角色权限 Set role_permission:{role.id}
    const PERMISSION_MODULE = 'permission_module'; // 权限 Hash permission_module
    const PERMISSION_UUID = 'permission_uuid'; // 权限 Hash permission_uuid
    const MENU_TREE = 'menu_tree'; // 菜单 String menu_tree
    const PERMISSION_TREE = 'permission_tree'; // 权限 String permission_tree
    const ROLE_TREE = 'role_tree'; // 角色 String  role_tree
    const CONFIG_UUID = 'config_uuid' . self::DELIMIT; // 参数配置 Hash config_uuid:{config.uuid}
    const SECRET_KEY_AES = 'secret_key_aes' . self::DELIMIT; // AES key Hash secret_key_aes:{secret_key.uuid}
    const SECRET_KEY_RSA = 'secret_key_rsa' . self::DELIMIT; // AES key Hash secret_key_rsa:{secret_key.uuid}

    // TABLE 数据缓存 keys end

    // APP_NAME 多应用使用同一个redis, 用于区分存储信息，避免冲突
    const TOKEN = 'token' . self::DELIMIT; // 用户token String {APP_NAME}token:{user.id}
    const USERINFO = 'userinfo' . self::DELIMIT; // 用户信息 Hash {APP_NAME}userinfo:{user.id}
    const USER_ROLES = 'user_roles' . self::DELIMIT; // 用户权限 Set {APP_NAME}user_roles:{user.id}
    const USER_TWO_STEP = 'user_two_step' . self::DELIMIT; // 两步校验 String {APP_NAME}user_two_step:{user.id}:{CheckMfaScenarios::xxx验证场景}
    const MFA_SECRET = 'mfa_secret' . self::DELIMIT; // MFA设备秘钥 String {APP_NAME}mfa_secret:{user.id}
    const LOGIN_CHECK_MFA_FLAG = 'login_check_mfa_flag' . self::DELIMIT; // MFA设备秘钥 String {APP_NAME}login_check_mfa_flag:{user.id}


}
