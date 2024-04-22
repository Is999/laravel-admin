<?php

namespace App\Services;

use App\Enum\RedisKeys;

class SecretKeyService extends Service
{
    public function aesKey(string $uuid, bool $renew = true): array
    {
        // 获取缓存
        $key = RedisKeys::SECRET_KEY_AES . $uuid;
//        if (!$renew) {
//            if (self::redis()->exists($key)) {
//                return self::redis()->hMGet($key, ['aes_key', 'aes_iv']);
//            }
//        }else{
//            self::redis()->del($key);
//        }
//
//        // 查询数据
//        $data = (new SecretKey())::where('uuid', $uuid)
//            ->get([
//                'aes_key', 'aes_iv'
//            ])->toArray();
//
//        // 写入缓存
//        self::redis()->hMset($key, $data);

        return RedisService::hGetAllTable($key, $renew);
    }

    public function rsaKey(string $uuid, bool $renew = true): array
    {
        // 获取缓存
        $key = RedisKeys::SECRET_KEY_RSA . $uuid;

        return RedisService::hGetAllTable($key, $renew);
    }
}