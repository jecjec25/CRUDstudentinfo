<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\StudinfoModel;

class StudinfoController extends BaseController
{
    private $Studinfo;
    private $Section;
    public function __construct()
    {
        $this->Studinfo = new \App\Models\StudinfoModel();
        $this->Section = new \App\Models\SectionModel();
    }

    public function delete($ID)
    {
        $this->Studinfo->delete($ID);
        return redirect()->to('/Studinfo');
    }

    public function save()
    {
        $ID = $_POST['ID'];
        $data = [
            'StudName' => $this->request->getVar('StudName'),
            'StudGender' => $this->request->getVar('StudGender'),
            'StudCourse' => $this->request->getVar('StudCourse'),
            'StudSection' => $this->request->getVar('StudSection'),
            'StudYear' => $this->request->getVar('StudYear'),
        ];
        if($ID != null){
            $this->Studinfo->set($data)->where('ID', $ID)->update();
        }
        else {
            $this->Studinfo->save($data);
        }

        return redirect()->to('/Studinfo');   
        
    }

    public function edit($ID)
    {
        $data = [
            'Studinfo' => $this->Studinfo->findAll(), 
            'Section' => $this->Section->findAll(),
            'pro' => $this->Studinfo->where('ID', $ID)->first(),
        ];
        return view ('Studinfos', $data);
    }

    public function jecjec()
    {
        $data = ['Studinfo' => $this->Studinfo->findAll(),
        'Section' => $this->Section->findAll(), 
        ];
        return view ('Studinfos', $data);
    }
        
    public function index()
    {
        //
    }

