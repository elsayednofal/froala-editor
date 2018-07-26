<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Elsayednofal\FroalaEditor;

class Froala {

    static function initCss() {
        return view('Froala::css');
    }

    static function initJs() {
        return view('Froala::js');
    }
    
    static function initEditor($name,$id,$content='',$is_required=false){
        $required="";
        if($is_required){
            $required="required";
        }
        $data['name']=$name;
        $data['id']=$id;
        $data['content']=$content;
        $data['required']=$required;
        return view('Froala::editor',$data);
    }
    
}
