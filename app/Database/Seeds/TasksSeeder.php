<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TasksSeeder extends Seeder
{
    public function run()
    {
        // create 10 tasks
        $tasks = [
            [
                'id_user' => 1,
                'task_name' => 'Task 1',
                'task_description' => 'Task 1 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 2,
                'task_name' => 'Task 2',
                'task_description' => 'Task 2 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 3,
                'task_name' => 'Task 3',
                'task_description' => 'Task 3 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 1,
                'task_name' => 'Task 3',
                'task_description' => 'Task 4 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 2,
                'task_name' => 'Task 3',
                'task_description' => 'Task 4 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 3,
                'task_name' => 'Task 3',
                'task_description' => 'Task 3 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 2,
                'task_name' => 'Task 3',
                'task_description' => 'Task 4 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 2,
                'task_name' => 'Task 3',
                'task_description' => 'Task 4 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 2,
                'task_name' => 'Task 5',
                'task_description' => 'Task 5 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_user' => 3,
                'task_name' => 'Task 7',
                'task_description' => 'Task 4 description',
                'task_status' => 'new',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];

        // insert all tasks
        $this->db->table('tasks')->insertBatch($tasks);

        echo "Dados inseridos com sucesso!!\n";


    }
}
