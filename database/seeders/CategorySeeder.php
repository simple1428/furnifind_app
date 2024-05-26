<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =  [
            [
                'name' => 'Dining Set',
                'image' => 'https://creativenest.id/wp-content/uploads/2023/08/iGa-copy-scaled.jpg'
            ],
            [
                'name' => 'Dining Table',
                'image' => 'https://creativenest.id/wp-content/uploads/2022/06/a-scaled.jpg'
            ],
            [
                'name' => 'Chairs',
                'image' => 'https://creativenest.id/wp-content/uploads/2022/04/abu22.jpg'
            ],
            [
                'name' => 'Stools',
                'image' => 'https://creativenest.id/wp-content/uploads/2022/08/1111111.jpg'
            ],
            [
                'name' => 'Bench',
                'image' => 'https://creativenest.id/wp-content/uploads/2023/08/iGa-copy-scaled.jpg'
            ],
            [
                'name' => 'Armchairs',
                'image' => 'https://creativenest.id/wp-content/uploads/2022/05/2222-1.jpg'
            ],
            [
                'name' => 'Sofas',
                'image' => 'https://creativenest.id/wp-content/uploads/2022/04/product-SF001-1649943320.jpg'
            ],
            [
                'name' => 'Mirror',
                'image' => 'https://creativenest.id/wp-content/uploads/2022/04/90fixa-copy.jpg'
            ],
            [
                'name' => 'Bed Frames',
                'image' => 'https://creativenest.id/wp-content/uploads/2022/04/1a-2-scaled.jpg'
            ],
            [
                'name' => 'Bedsides',
                'image' => 'https://creativenest.id/wp-content/uploads/2022/04/product-BS008-1649942309.jpg'
            ],
            [
                'name' => 'Wardrobe',
                'image' => 'https://creativenest.id/wp-content/uploads/2023/08/wardrobe.png'
            ],
            [
                'name' => 'SideBoards',
                'image' => 'https://creativenest.id/wp-content/uploads/2022/11/aa-py.jpg'
            ],
            [
                'name' => 'Media Console',
                'image' => 'https://creativenest.id/wp-content/uploads/2022/04/9b-copy-scaled.jpg'
            ],
            [
                'name' => 'Shelves',
                'image' => 'https://creativenest.id/wp-content/uploads/2023/08/shelves.png'
            ],
            [
                'name' => 'Coffe Tables',
                'image' => 'https://creativenest.id/wp-content/uploads/2022/07/1-4.jpg'
            ],
            [
                'name' => 'Console Table',
                'image' => 'https://creativenest.id/wp-content/uploads/2023/08/console-table.jpeg'
            ],
            [
                'name' => 'Writing Tables',
                'image' => 'https://creativenest.id/wp-content/uploads/2022/04/1-6.jpg'
            ],


        ];
        function generateSlug($name) {
            return Str::slug($name);
        }
        foreach ($data as $item) {
            if (!isset($item['slug'])) {
                $item['slug'] = generateSlug($item['name']);

            }
            Category::create($item);
        }
    }
}