<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\StudinfoModel;

class StudinfoController extends BaseController
{
    private $Studinfo;
    public function __construct()
    {
        $this->Studinfo = new \App\Models\StudinfoModel();
    }

    public function edit($ID)
    {
        $data = [
            'Studinfo'=>$this->Studinfo->findAll(),
            'Stu'=>$this->Studinfo->where('ID', $ID)->first(),
        ];
        return view ('Studinfos', $data);

    }

    public function delete($ID)
    {
        $this->Studinfo->delete($ID);
        return redirect()->to('/Studinfo');
    }

    public function save()
    {
        $ID =$_POST['ID'];
        $data = [
            'StudentId' => $this->request->getVar('StudentId'),
            'FullName' => $this->request->getVar('FullName'),
            'YearLevel' => $this->request->getVar('YearLevel'),
            'Program' => $this->request->getVar('Program'),
        ];
        if ($ID!=null){
            $this->Studinfo->set($data)->where('ID', $ID)->update();
        }else{
            $this->Studinfo->save($data);
        }
        return redirect()->to('/Studinfo');
    }

    public function Studinfo($Studinfo)
    {
        echo $Studinfo;
    }
    public function jecjec()
    {
        $data['Studinfo'] = $this->Studinfo->findAll();
        return view ('Studinfos', $data);
    }
    public function index()
    {
        //
    }
}
