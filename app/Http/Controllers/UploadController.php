<?php

namespace App\Http\Controllers;

use App\Enum\Code;
use App\Enum\LogChannel;
use App\Enum\UserAction;
use App\Exceptions\CustomizeException;
use App\Logging\Logger;
use App\Models\Files;
use App\Services\ResponseService as Response;
use App\Services\UploadService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

class UploadController extends Controller
{
    /**
     * 上传文件
     * @param Request $request
     * @return JsonResponse
     */
    public function file(Request $request): JsonResponse
    {
        try {
            // 验证参数
//            $validator = Validator::make($request->input()
//                , [
//                    'file' => 'required|mimes:jpg,jpeg,png,gif|max:2048',
//                ]);
//
//            if ($validator->fails()) {
//                throw new CustomizeException(Code::FAIL, $validator->errors()->first());
//            }

            if ($request->hasFile('file')) {
                $file = $request->file('file');

                // 验证文件类型
                $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'application/pdf']; // 允许的文件类型
                $type = $file->getMimeType();
                if (!in_array($type, $allowedTypes)) {
                    return response()->json(['error' => '不支持的文件类型'], 400);
                }
                $uploadService = new UploadService;
                $path = $uploadService->upload($file);

                // 记录操作日志
                $this->addUserLog(__FUNCTION__, UserAction::UPLOAD_FILES, '上传文件', [
                    'original' => $file->getClientOriginalName(),
                    'new' => $path,
                ]);

                return Response::success(['url'=>$path], Code::S1001);
            }else{
                throw new CustomizeException(Code::E100062, ['param' => 'file']);
            }
        } catch (CustomizeException $e) {
            return Response::fail($e->getCode(), $e->getMessage());
        } catch (Throwable $e) {
            Logger::error(LogChannel::DEFAULT, __METHOD__, [], $e);
            $this->systemException(__METHOD__, $e);
            return Response::fail(Code::SYSTEM_ERR);
        }
    }

    /**
     * 批量上传文件
     * @param Request $request
     * @return JsonResponse
     */
    public function files(Request $request): JsonResponse
    {
        try {
            if ($request->hasFile('files')) {
                $files = $request->file('files');
                $uploadService = new UploadService;
                $originals = [];
                $paths = [];
                foreach ($files as $file) {
                    $originals[] =$file->getClientOriginalName();
                    $paths[] = $uploadService->file($file);
                }

                // 记录操作日志
                $this->addUserLog(__FUNCTION__, UserAction::UPLOAD_FILES, '上传文件', [
                    'original' => $originals,
                    'new' => $paths,
                ]);

                return Response::success(['url'=>$paths], Code::S1001);
            }else{
                throw new CustomizeException(Code::E100062, ['param' => 'file']);
            }
        } catch (CustomizeException $e) {
            return Response::fail($e->getCode(), $e->getMessage());
        } catch (Throwable $e) {
            Logger::error(LogChannel::DEFAULT, __METHOD__, [], $e);
            $this->systemException(__METHOD__, $e);
            return Response::fail(Code::SYSTEM_ERR);
        }
    }

}