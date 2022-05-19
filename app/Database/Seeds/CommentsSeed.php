<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CommentsSeed extends Seeder
{
    public function run()
    {
        $this->db->table('comments')->truncate();

        $comments = [
            [
                'user_id' => 2,
                'news_id' => 1,
                'comment' => 'Wow, nice post',
            ],
            [
                'user_id' => 3,
                'news_id' => 1,
                'comment' => 'Unfollow',
            ],
            [
                'user_id' => 2,
                'news_id' => 2,
                'comment' => 'I`m learning too, call me',
            ],
        ];

        $this->db->table('comments')->insertBatch($comments);
    }
}
