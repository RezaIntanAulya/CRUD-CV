<?php

namespace App\Controllers;

class auth extends BaseController
{

	public function index()
	{
		$UserModel = new \App\Models\UserModel();
		$auth = $this->request->getPOst('auth');
		if($auth){
		   $username = $this->request->getPost('username');
		   $password = $this->request->getPost('password');

		   if($username == '' or $password == ''){
		   	$err = "Silahkan Masukkan Username dan Password";
		   }
		   if(empty($err)){
		   		$datauser = $UserModel->where("username", $username)->first();
		   		if($datauser['password']!=md5($password)){
		   			$err = "Password Tidak Sesuai";

		   		}

		   }
		   if(empty($err)){
		   		$usersesi = [
		   			'id_user'=>$datauser['id_user'],
		   			'username'=>$datauser['username'],
		   			'password'=>$datauser['password'],
		   		];
		   		session()->set($usersesi);
		   		return redirect()->to('about');

		   }
		   if($err){
		   		session()->setFlashdata('username', $username);
		   		session()->setFlashdata('error', $err);
		   		return redirect()->to("auth");

		   }

		}
		echo view('login/index');
	}
}