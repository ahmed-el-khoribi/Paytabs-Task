<?php 
namespace App\Database\Seeds;

class CategorySeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
            $data = [
                [
                    'title' => 'Category A',
                    'parent_id'    => null
                ],
                [
                    'title' => 'Category B',
                    'parent_id'    => null
                ],
                [
                    'title' => 'SUB A1',
                    'parent_id'    => 1
                ],
                [
                    'title' => 'SUB A2',
                    'parent_id'    => 1
                ],
                [
                    'title' => 'SUB B1',
                    'parent_id'    => 2
                ],
                [
                    'title' => 'SUB B2',
                    'parent_id'    => 2
                ],
                [
                    'title' => 'SUB SUB A1-1',
                    'parent_id'    => 3
                ],
                [
                    'title' => 'SUB SUB A1-2',
                    'parent_id'    => 3
                ],
                [
                    'title' => 'SUB SUB A2-1',
                    'parent_id'    => 4
                ],
                [
                    'title' => 'SUB SUB A2-2',
                    'parent_id'    => 4
                ],
                [
                    'title' => 'SUB SUB B1-1',
                    'parent_id'    => 5
                ],
                [
                    'title' => 'SUB SUB B1-2',
                    'parent_id'    => 5
                ],
                [
                    'title' => 'SUB SUB B2-1',
                    'parent_id'    => 6
                ],
                [
                    'title' => 'SUB SUB B2-2',
                    'parent_id'    => 6
                ]
            ];

            // Using Query Builder
            foreach($data as $d){
                $this->db->table('categories')->insert($d);
            }
        }
}