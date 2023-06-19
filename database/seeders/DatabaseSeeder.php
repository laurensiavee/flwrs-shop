<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('password'),
            'address'=>'testtesttesttesttest',
            'phone' => 12345678,
            'is_admin' => 1,
            'is_member' => 0
        ]);

        User::create([
            'name' => 'Member',
            'email' => 'member@email.com',
            'password' => bcrypt('password'),
            'address'=>'testtesttesttesttest',
            'phone' => 12345678,
            'is_admin' => 0,
            'is_member' => 1
        ]);

        Category::create([
            'categoryName' => 'Succulent',
            'slug' => 'succulent'
        ]);
        Category::create([
            'categoryName' => 'Pepperomia',
            'slug' => 'Pepperomia'
        ]);

        Product::create([
            'id' => '1',
            'name' => 'product 1',
            'slug' => 'product-1',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quidem placeat ipsum illo impedit nam ipsam reprehenderit, ad voluptatem totam exercitationem quo dolores reiciendis magni explicabo! Corrupti nihil assumenda, maiores quaerat asperiores, exercitationem, aut architecto quisquam accusamus eaque commodi beatae. Debitis ipsam, sequi molestiae numquam voluptatem autem praesentium voluptate excepturi cum laborum adipisci dolor quae labore neque, ab deleniti blanditiis eaque non totam ea inventore, exercitationem reprehenderit doloribus. Tenetur mollitia in sint a explicabo inventore expedita vel numquam. Aliquam maxime eveniet fugit rem! Nesciunt, ullam doloribus repellendus dolores in, consectetur enim magnam distinctio hic, soluta reprehenderit quibusdam quis modi pariatur?",
            'price' => 100000,
            'stock' => 100,
            'image_path' => 'img/2_plant.png',
            'category_id' =>1
        ]);

        Product::create([
            'id' => '2',
            'name' => 'product 2',
            'slug' => 'product-2',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quidem placeat ipsum illo impedit nam ipsam reprehenderit, ad voluptatem totam exercitationem quo dolores reiciendis magni explicabo! Corrupti nihil assumenda, maiores quaerat asperiores, exercitationem, aut architecto quisquam accusamus eaque commodi beatae. Debitis ipsam, sequi molestiae numquam voluptatem autem praesentium voluptate excepturi cum laborum adipisci dolor quae labore neque, ab deleniti blanditiis eaque non totam ea inventore, exercitationem reprehenderit doloribus. Tenetur mollitia in sint a explicabo inventore expedita vel numquam. Aliquam maxime eveniet fugit rem! Nesciunt, ullam doloribus repellendus dolores in, consectetur enim magnam distinctio hic, soluta reprehenderit quibusdam quis modi pariatur?",
            'price' => 200000,
            'stock' => 200,
            'image_path' => 'img/2_plant.png',
            'category_id' =>2
        ]);

        Product::create([
            'id' => '3',
            'name' => 'product 3',
            'slug' => 'product-3',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quidem placeat ipsum illo impedit nam ipsam reprehenderit, ad voluptatem totam exercitationem quo dolores reiciendis magni explicabo! Corrupti nihil assumenda, maiores quaerat asperiores, exercitationem, aut architecto quisquam accusamus eaque commodi beatae. Debitis ipsam, sequi molestiae numquam voluptatem autem praesentium voluptate excepturi cum laborum adipisci dolor quae labore neque, ab deleniti blanditiis eaque non totam ea inventore, exercitationem reprehenderit doloribus. Tenetur mollitia in sint a explicabo inventore expedita vel numquam. Aliquam maxime eveniet fugit rem! Nesciunt, ullam doloribus repellendus dolores in, consectetur enim magnam distinctio hic, soluta reprehenderit quibusdam quis modi pariatur?",
            'price' => 300000,
            'stock' => 300,
            'image_path' => 'img/3_plant.jpeg',
            'category_id' =>1
        ]);

        Product::create([
            'id' => '4',
            'name' => 'product 4',
            'slug' => 'product-4',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quidem placeat ipsum illo impedit nam ipsam reprehenderit, ad voluptatem totam exercitationem quo dolores reiciendis magni explicabo! Corrupti nihil assumenda, maiores quaerat asperiores, exercitationem, aut architecto quisquam accusamus eaque commodi beatae. Debitis ipsam, sequi molestiae numquam voluptatem autem praesentium voluptate excepturi cum laborum adipisci dolor quae labore neque, ab deleniti blanditiis eaque non totam ea inventore, exercitationem reprehenderit doloribus. Tenetur mollitia in sint a explicabo inventore expedita vel numquam. Aliquam maxime eveniet fugit rem! Nesciunt, ullam doloribus repellendus dolores in, consectetur enim magnam distinctio hic, soluta reprehenderit quibusdam quis modi pariatur?",
            'price' => 400000,
            'stock' => 400,
            'image_path' => 'img/2_plant.png',
            'category_id' =>2
        ]);

        Product::create([
            'id' => '5',
            'name' => 'product 5',
            'slug' => 'product-5',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quidem placeat ipsum illo impedit nam ipsam reprehenderit, ad voluptatem totam exercitationem quo dolores reiciendis magni explicabo! Corrupti nihil assumenda, maiores quaerat asperiores, exercitationem, aut architecto quisquam accusamus eaque commodi beatae. Debitis ipsam, sequi molestiae numquam voluptatem autem praesentium voluptate excepturi cum laborum adipisci dolor quae labore neque, ab deleniti blanditiis eaque non totam ea inventore, exercitationem reprehenderit doloribus. Tenetur mollitia in sint a explicabo inventore expedita vel numquam. Aliquam maxime eveniet fugit rem! Nesciunt, ullam doloribus repellendus dolores in, consectetur enim magnam distinctio hic, soluta reprehenderit quibusdam quis modi pariatur?",
            'price' => 200000,
            'stock' => 200,
            'image_path' => 'img/2_plant.png',
            'category_id' =>2
        ]);

        Product::create([
            'id' => '6',
            'name' => 'product 6',
            'slug' => 'product-6',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quidem placeat ipsum illo impedit nam ipsam reprehenderit, ad voluptatem totam exercitationem quo dolores reiciendis magni explicabo! Corrupti nihil assumenda, maiores quaerat asperiores, exercitationem, aut architecto quisquam accusamus eaque commodi beatae. Debitis ipsam, sequi molestiae numquam voluptatem autem praesentium voluptate excepturi cum laborum adipisci dolor quae labore neque, ab deleniti blanditiis eaque non totam ea inventore, exercitationem reprehenderit doloribus. Tenetur mollitia in sint a explicabo inventore expedita vel numquam. Aliquam maxime eveniet fugit rem! Nesciunt, ullam doloribus repellendus dolores in, consectetur enim magnam distinctio hic, soluta reprehenderit quibusdam quis modi pariatur?",
            'price' => 300000,
            'stock' => 300,
            'image_path' => 'img/3_plant.jpeg',
            'category_id' =>1
        ]);

        Product::create([
            'id' => '7',
            'name' => 'product 7',
            'slug' => 'product-7',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quidem placeat ipsum illo impedit nam ipsam reprehenderit, ad voluptatem totam exercitationem quo dolores reiciendis magni explicabo! Corrupti nihil assumenda, maiores quaerat asperiores, exercitationem, aut architecto quisquam accusamus eaque commodi beatae. Debitis ipsam, sequi molestiae numquam voluptatem autem praesentium voluptate excepturi cum laborum adipisci dolor quae labore neque, ab deleniti blanditiis eaque non totam ea inventore, exercitationem reprehenderit doloribus. Tenetur mollitia in sint a explicabo inventore expedita vel numquam. Aliquam maxime eveniet fugit rem! Nesciunt, ullam doloribus repellendus dolores in, consectetur enim magnam distinctio hic, soluta reprehenderit quibusdam quis modi pariatur?",
            'price' => 400000,
            'stock' => 400,
            'image_path' => 'img/2_plant.png',
            'category_id' =>2
        ]);

        Product::create([
            'id' => '8',
            'name' => 'product 8',
            'slug' => 'product-8',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quidem placeat ipsum illo impedit nam ipsam reprehenderit, ad voluptatem totam exercitationem quo dolores reiciendis magni explicabo! Corrupti nihil assumenda, maiores quaerat asperiores, exercitationem, aut architecto quisquam accusamus eaque commodi beatae. Debitis ipsam, sequi molestiae numquam voluptatem autem praesentium voluptate excepturi cum laborum adipisci dolor quae labore neque, ab deleniti blanditiis eaque non totam ea inventore, exercitationem reprehenderit doloribus. Tenetur mollitia in sint a explicabo inventore expedita vel numquam. Aliquam maxime eveniet fugit rem! Nesciunt, ullam doloribus repellendus dolores in, consectetur enim magnam distinctio hic, soluta reprehenderit quibusdam quis modi pariatur?",
            'price' => 400000,
            'stock' => 400,
            'image_path' => 'img/2_plant.png',
            'category_id' =>2
        ]);

        Product::create([
            'id' => '9',
            'name' => 'product 9',
            'slug' => 'product-9',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quidem placeat ipsum illo impedit nam ipsam reprehenderit, ad voluptatem totam exercitationem quo dolores reiciendis magni explicabo! Corrupti nihil assumenda, maiores quaerat asperiores, exercitationem, aut architecto quisquam accusamus eaque commodi beatae. Debitis ipsam, sequi molestiae numquam voluptatem autem praesentium voluptate excepturi cum laborum adipisci dolor quae labore neque, ab deleniti blanditiis eaque non totam ea inventore, exercitationem reprehenderit doloribus. Tenetur mollitia in sint a explicabo inventore expedita vel numquam. Aliquam maxime eveniet fugit rem! Nesciunt, ullam doloribus repellendus dolores in, consectetur enim magnam distinctio hic, soluta reprehenderit quibusdam quis modi pariatur?",
            'price' => 200000,
            'stock' => 200,
            'image_path' => 'img/2_plant.png',
            'category_id' =>2
        ]);

        Product::create([
            'id' => '10',
            'name' => 'product 10',
            'slug' => 'product-10',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quidem placeat ipsum illo impedit nam ipsam reprehenderit, ad voluptatem totam exercitationem quo dolores reiciendis magni explicabo! Corrupti nihil assumenda, maiores quaerat asperiores, exercitationem, aut architecto quisquam accusamus eaque commodi beatae. Debitis ipsam, sequi molestiae numquam voluptatem autem praesentium voluptate excepturi cum laborum adipisci dolor quae labore neque, ab deleniti blanditiis eaque non totam ea inventore, exercitationem reprehenderit doloribus. Tenetur mollitia in sint a explicabo inventore expedita vel numquam. Aliquam maxime eveniet fugit rem! Nesciunt, ullam doloribus repellendus dolores in, consectetur enim magnam distinctio hic, soluta reprehenderit quibusdam quis modi pariatur?",
            'price' => 300000,
            'stock' => 300,
            'image_path' => 'img/3_plant.jpeg',
            'category_id' =>1
        ]);

        Product::create([
            'id' => '11',
            'name' => 'product 11',
            'slug' => 'product-11',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quidem placeat ipsum illo impedit nam ipsam reprehenderit, ad voluptatem totam exercitationem quo dolores reiciendis magni explicabo! Corrupti nihil assumenda, maiores quaerat asperiores, exercitationem, aut architecto quisquam accusamus eaque commodi beatae. Debitis ipsam, sequi molestiae numquam voluptatem autem praesentium voluptate excepturi cum laborum adipisci dolor quae labore neque, ab deleniti blanditiis eaque non totam ea inventore, exercitationem reprehenderit doloribus. Tenetur mollitia in sint a explicabo inventore expedita vel numquam. Aliquam maxime eveniet fugit rem! Nesciunt, ullam doloribus repellendus dolores in, consectetur enim magnam distinctio hic, soluta reprehenderit quibusdam quis modi pariatur?",
            'price' => 300000,
            'stock' => 300,
            'image_path' => 'img/3_plant.jpeg',
            'category_id' =>1
        ]);

        Product::create([
            'id' => '12',
            'name' => 'product 12',
            'slug' => 'product-12',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quidem placeat ipsum illo impedit nam ipsam reprehenderit, ad voluptatem totam exercitationem quo dolores reiciendis magni explicabo! Corrupti nihil assumenda, maiores quaerat asperiores, exercitationem, aut architecto quisquam accusamus eaque commodi beatae. Debitis ipsam, sequi molestiae numquam voluptatem autem praesentium voluptate excepturi cum laborum adipisci dolor quae labore neque, ab deleniti blanditiis eaque non totam ea inventore, exercitationem reprehenderit doloribus. Tenetur mollitia in sint a explicabo inventore expedita vel numquam. Aliquam maxime eveniet fugit rem! Nesciunt, ullam doloribus repellendus dolores in, consectetur enim magnam distinctio hic, soluta reprehenderit quibusdam quis modi pariatur?",
            'price' => 400000,
            'stock' => 400,
            'image_path' => 'img/2_plant.png',
            'category_id' =>2
        ]);

        Product::create([
            'id' => '13',
            'name' => 'product 13',
            'slug' => 'product-13',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quidem placeat ipsum illo impedit nam ipsam reprehenderit, ad voluptatem totam exercitationem quo dolores reiciendis magni explicabo! Corrupti nihil assumenda, maiores quaerat asperiores, exercitationem, aut architecto quisquam accusamus eaque commodi beatae. Debitis ipsam, sequi molestiae numquam voluptatem autem praesentium voluptate excepturi cum laborum adipisci dolor quae labore neque, ab deleniti blanditiis eaque non totam ea inventore, exercitationem reprehenderit doloribus. Tenetur mollitia in sint a explicabo inventore expedita vel numquam. Aliquam maxime eveniet fugit rem! Nesciunt, ullam doloribus repellendus dolores in, consectetur enim magnam distinctio hic, soluta reprehenderit quibusdam quis modi pariatur?",
            'price' => 300000,
            'stock' => 300,
            'image_path' => 'img/3_plant.jpeg',
            'category_id' =>1
        ]);

        Product::create([
            'id' => '14',
            'name' => 'product 14',
            'slug' => 'product-14',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quidem placeat ipsum illo impedit nam ipsam reprehenderit, ad voluptatem totam exercitationem quo dolores reiciendis magni explicabo! Corrupti nihil assumenda, maiores quaerat asperiores, exercitationem, aut architecto quisquam accusamus eaque commodi beatae. Debitis ipsam, sequi molestiae numquam voluptatem autem praesentium voluptate excepturi cum laborum adipisci dolor quae labore neque, ab deleniti blanditiis eaque non totam ea inventore, exercitationem reprehenderit doloribus. Tenetur mollitia in sint a explicabo inventore expedita vel numquam. Aliquam maxime eveniet fugit rem! Nesciunt, ullam doloribus repellendus dolores in, consectetur enim magnam distinctio hic, soluta reprehenderit quibusdam quis modi pariatur?",
            'price' => 400000,
            'stock' => 400,
            'image_path' => 'img/2_plant.png',
            'category_id' =>2
        ]);
    }
}
