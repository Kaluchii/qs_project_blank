<?php

namespace App\Http\Controllers;

use Interpro\Entrance\Contracts\Extract\ExtractAgent;

class FrontController extends Controller
{
    private $extract;

//    public function __construct(ExtractAgent $ext)
//    {
//        $this->extract = $ext;
//
//        $scripts = $this->extract->getBlock('scripts');
//        $all_site = $this->extract->getBlock('all_site');
//
//        view()->share([
//            'scripts' => $scripts,
//            'all_site' => $all_site
//        ]);
//    }
//
//
//    public function getIndex()
//    {
//        $services = $this->extract->getBlock('services');
//        $this->extract->tuneSelection('services_list')->sortBy('sorter','ASC');
//
//        return response()->view('front.index.index', [
//            'services' => $services,
//        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $services->last_modified?:time()));
//    }
}