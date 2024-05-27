<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\GuestBookModel;
class Home extends Controller
{
    // public function index()
    // {
    //     echo view('layout/default');
    // }
    protected $mbooks;
    protected $table = 'guest_book';
    public function __construct()
    {
        $this->mbooks = new GuestBookModel();

    }

    public function index()
    {
        $getdata = $this->mbooks->getdata();

        $data = array(
            'dataBooks' => $getdata,
        );

        return view('layout/default', $data);
    }

    function simpan()
    {
        $name = $this->request->getPost("name");
        $email = $this->request->getPost("email");
        $subject = $this->request->getPost("subject");
        $message = $this->request->getPost("message");

        $data = [
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
        ];
        
        try
        {
            $simpan = $this->mbooks->simpanData($this->table, $data);
            if($simpan){
                echo "<script>alert('Data Telah Disimpan'); window.location='".base_url
                ('home')."');</script>";
            }else{
                echo "<script>alert('Data Gagal Disimpan'); window.location='".base_url
                ('home')."';</script>";
            }
        }
        
        catch (\Exception $e)
        {
            echo "<script>alert('Data sudah ada'); window.location='".base_url
            ('home')."';</script>";
        }


    }





}
