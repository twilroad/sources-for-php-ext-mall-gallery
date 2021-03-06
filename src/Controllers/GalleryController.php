<?php
/**
 * The file is part of Notadd
 *
 * @author: Hollydan<2642956839@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime: 17-9-20 下午22:24
 */

namespace Notadd\MallGallery\Controllers;

use Notadd\Foundation\Routing\Abstracts\Controller;
use Notadd\MallGallery\Handlers\AllGalleryHandler;
use Notadd\MallGallery\Handlers\DeleteGalleryHandler;
use Notadd\MallGallery\Handlers\SetGalleryHandler;
use Notadd\MallGallery\Handlers\ShowGalleryHandler;
use Notadd\MallGallery\Handlers\UpdateGalleryHandler;

class GalleryController extends Controller
{
    /**
     * @param AllGalleryHandler $handler
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     */
    public function all(AllGalleryHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param SetGalleryHandler $handler
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     */
    public function set(SetGalleryHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param DeleteGalleryHandler $handler
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     */
    public function delete(DeleteGalleryHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }


    /**
     * @param UpdateGalleryHandler $handler
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     */
    public function update(UpdateGalleryHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param ShowGalleryHandler $handler
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     */
    public function show(ShowGalleryHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}