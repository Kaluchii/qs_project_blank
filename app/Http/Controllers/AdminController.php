<?php

namespace App\Http\Controllers;

use Interpro\Entrance\Contracts\Extract\ExtractAgent;

class AdminController extends Controller
{
    private $extract;

    public function __construct(ExtractAgent $ext)
    {
        $this->extract = $ext;
    }


    public function getIndex()
    {
        return view('back.layout');
    }


//    public function getAll()
//    {
//        $block = $this->extract->getBlock('all_site');
//
//        return view('back.blocks.all_site', [
//            'block' => $block
//        ]);
//    }
//
//
//    public function getServices(){
//        $block = $this->extract->getBlock('services');
//        $this->extract->tuneSelection('services')->sortBy('sorter','DESC');
//
//        return view('back.blocks.services', [
//            'block' => $block
//        ]);
//    }
//
//
//    public function getServicesItem( $id ){
//        $item = $this->extract->getGroupItem('services_list', $id);
//
//        return view('back.groups.services_list.services_list', [
//            'item' => $item
//        ]);
//    }

}
