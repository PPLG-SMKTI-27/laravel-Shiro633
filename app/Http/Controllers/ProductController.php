<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $nama = "Aditya Nurkhalid Indrawan";
       
        $projects = [
            [
                'title' => 'Laravel Vue App',
                'icon' => '💼',
                'description' => 'Aplikasi web modern yang dibangun dengan Laravel dan Vue.js, menampilkan pembaruan real-time dan desain responsif.',
                'tags' => ['Laravel', 'Vue.js', 'MySQL']
            ],
            [
                'title' => 'Data Management System',
                'icon' => '📊',
                'description' => 'Sistem manajemen data dengan analitik canggih, dashboard komprehensif, dan autentikasi pengguna.',
                'tags' => ['Laravel', 'JavaScript', 'Charts']
            ],
            [
                'title' => 'E-Commerce Platform',
                'icon' => '🎨',
                'description' => 'Platform e-commerce dengan integrasi pembayaran, manajemen inventaris, dan sistem pelacakan pesanan.',
                'tags' => ['Laravel', 'Payment API', 'Responsive']
            ]
        ];

        return view('welcome', compact('nama', 'projects'));
    }
}
