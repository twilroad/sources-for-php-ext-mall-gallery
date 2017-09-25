<?php
/**
 * The file is part of Notadd
 *
 * @author: Hollydan<2642956839@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime: 17-9-21 下午12:06
 */

namespace Notadd\MallGallery\Handlers;


use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\MallGallery\Models\Picture;

class DeletesPictureHandler extends Handler
{
    public function execute()
    {
        $this->validate($this->request, [
            'picture_id' => 'required',
        ],[
            'picture_id.required' => '请传入图片id',
        ]);

        $ids = explode(',', $this->request->get('picture_id'));
        foreach ($ids as $id) {
            $picture = Picture::find($id);
            if (!$picture instanceof Picture) {
                return $this->withCode(401)->withError('未找到id为' . $id . '的图片');
            }
            $subPath = strstr($picture->path, '/uploads');
            $completePath = base_path('/public' . $subPath);
            if ($this->container->make('files')->exists($completePath)) {
                $this->container->make('files')->delete($completePath);
            }
            $picture->delete();
        }
        return $this->withCode(200)->withMessage('删除图片信息成功');
    }
}