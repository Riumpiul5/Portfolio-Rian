<?php
namespace App\Controllers;
use App\models\modelLatihan;

class latihan extends BaseController
{
    protected $mhs;

    public function __construct()
    {
        $this->mhs = new modelLatihan();
    }
    public function index()
    {

            $data = [
                'tittle' => 'Latihan CI4',
                'pesan' =>  'Teknik Informatika'

                
            ];

        return view('latihan_1', $data);
    }
}
