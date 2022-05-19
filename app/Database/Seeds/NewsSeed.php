<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NewsSeed extends Seeder
{
    public function run()
    {
        $this->db->table('news')->truncate();

        $news = [
            [
                'user_id' => 1,
                'title' => 'First Post',
                'text' => 'This is my first post',
                'img_url' => '',
            ],
            [
                'user_id' => 1,
                'title' => 'Second Post',
                'text' => 'I`m learning PHP framework Codeigniter4',
                'img_url' => 'https://www.joykal.com/wp-content/uploads/2019/09/codeigniter-icon-512.png',
            ],
        ];

        $this->db->table('news')->insertBatch($news);
    }
}
