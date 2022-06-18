<?php

namespace App\Controllers;

use App\Models\DataDiri;

class About extends BaseController
{
    public function __construct(){
        $this->data = new DataDiri();
    }
    function index(){
        echo view('cv',['data'=>$this->data->first()]);
    }
    function add(){
        echo view('add',['data'=> $this->data->findAll()]);
    }
    function save(){
        $this->data->insert([
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jeniskelamin' => $this->request->getVar('jeniskelamin'),
            'agama' => $this->request->getPost('agama'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'nohp' => $this->request->getVar('nohp'),
            'sd' => $this->request->getVar('sd'),
            'smp' => $this->request->getVar('smp'),
            'sma' => $this->request->getVar('sma'),
            'kuliah' => $this->request->getVar('kuliah'),
            'skill1' => $this->request->getVar('skill1'),
            'skill2' => $this->request->getVar('skill2'),
            'skill3' => $this->request->getVar('skill3'),
            'skill4' => $this->request->getVar('skill4'),
        ]);
        return redirect()->to('about');
    }
    function delete($npm) {
        $this->data->delete($npm);
        return redirect()->to('about');
    }
    function get_edit($npm) {
        $result =  $this->data->where(['npm' => $npm])->get();
        if ($result->getNumRows() > 0) {
            $i = $result->getRowArray();
            $data = [
                'npm' => $i['npm'],
                'nama' => $i['nama'],
                'tempat_lahir' => $i['tempat_lahir'],
                'tanggal_lahir' => $i['tanggal_lahir'],
                'jeniskelamin' => $i['jeniskelamin'],
                'agama' => $i['agama'],
                'alamat' => $i['alamat'],
                'email' => $i['email'],
                'nohp' => $i['nohp'],
                'sd' => $i['sd'],
                'smp' => $i['smp'],
                'sma' => $i['sma'],
                'kuliah' => $i['kuliah'],
                'skill1' => $i['skill1'],
                'skill2' => $i['skill2'],
                'skill3' => $i['skill3'],
                'skill4' => $i['skill4'],
            ];
            return view('edit', $data);
        } else {
            echo "Data Was Not Found";
        }
    }
    function update() {
        $this->data->insert([
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jeniskelamin' => $this->request->getVar('jeniskelamin'),
            'agama' => $this->request->getPost('agama'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'nohp' => $this->request->getVar('nohp'),
            'sd' => $this->request->getVar('sd'),
            'smp' => $this->request->getVar('smp'),
            'sma' => $this->request->getVar('sma'),
            'kuliah' => $this->request->getVar('kuliah'),
            'skill1' => $this->request->getVar('skill1'),
            'skill2' => $this->request->getVar('skill2'),
            'skill3' => $this->request->getVar('skill3'),
            'skill4' => $this->request->getVar('skill4'),
        ]);
        return redirect()->to('about');
    }
}
?>