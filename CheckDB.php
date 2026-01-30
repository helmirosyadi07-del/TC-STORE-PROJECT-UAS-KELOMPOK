<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class CheckDB extends Controller
{
    public function index()
    {
        try {
            $db = \Config\Database::connect();
            $db->connect(); // force connection test

            $data['status'] = "Connected to the database successfully.";
        } catch (\Exception $e) {
            $data['status'] = "Database connection failed: " . $e->getMessage();
        }

        return view('check_db', $data);
    }
}

