<?php

namespace App\Controllers;

use App\Models\MyPlantsModel;
use CodeIgniter\Controller;

class AlarmController extends Controller
{
    public function trigger()
    {
        $myPlantsModel = new MyPlantsModel();

        $plantsWithAlarms = $myPlantsModel->where('alarm IS NOT NULL')->findAll();

        foreach ($plantsWithAlarms as $plant) {
            if (strtotime($plant['alarm']) <= time()) {
                $userModel = new \App\Models\UserModel();
                $user = $userModel->find($plant['id_user']);
                
                if ($user && !empty($user['email'])) {
                    $email = \Config\Services::email();
                    $email->setFrom('your_email@example.com', 'Your Website');
                    $email->setTo($user['email']);
                    $email->setSubject('Segarnyooo: ' . $plant['nama_tanaman']);
                    $email->setMessage('Waktunya menyiram tanamanmu: ' . $plant['nama_tanaman']);

                    if ($email->send()) {
                        echo "Email sent to " . $user['email'] . "\n";
                    } else {
                        echo "Failed to send email to " . $user['email'] . "\n";
                    }
                }
            }
        }
    }
}
