<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
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
//        User::truncate();
//        Post::truncate();
//        Category::truncate();

        $user = User::factory()->create([
            'name' => 'Adrian Korzan'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);
        Post::factory(3)->create();

//         $user = User::factory()->create();
//
//         $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//         ]);
//
//         $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//         ]);
//
//         $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//         ]);
//
//         Post::create([
//            'user_id' => $user->id,
//            'category_id'   => $personal->id,
//            'title' => 'My Personal Post',
//            'slug' => 'my-personal-post',
//            'excerpt'  => 'Lorem ipsum dolar sit amet',
//            'body'  => '<p>Vestibulum sit amet turpis finibus, varius nisl eu, laoreet enim. Fusce ex dolor, interdum et cursus vel, luctus sed ex. Maecenas viverra, elit nec ornare pharetra, tellus urna volutpat risus, non pretium ligula sem quis ante. Suspendisse tempus est urna, eget consequat urna iaculis porttitor. Aliquam iaculis est scelerisque, consequat ex at, mattis lectus. Etiam euismod luctus lacus, et eleifend mauris lobortis laoreet. Praesent at pharetra tellus. Morbi urna purus, euismod in condimentum vel, sollicitudin in urna. Aenean non metus sed justo gravida tincidunt. Etiam id orci elementum, lobortis massa sit amet, facilisis odio.
//
//Duis laoreet dolor eget tortor varius, convallis tristique sapien volutpat. Nunc semper, nisl id scelerisque iaculis, sem lectus ultrices lorem, vitae blandit magna lectus vel enim. Cras vitae felis aliquet, posuere erat id, maximus dolor. Suspendisse tempus ut erat sed euismod. Vestibulum ex magna, scelerisque in eleifend molestie, lacinia at sapien. Morbi volutpat risus vel volutpat consequat. Integer in nulla turpis. Proin lacus enim, posuere in suscipit sed, fermentum a sapien. Maecenas ut ex consequat, consequat velit at, blandit dui.</p>'
//         ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id'   => $family->id,
//            'title' => 'My Family Post',
//            'slug' => 'my-family-post',
//            'excerpt'  => 'Lorem ipsum dolar sit amet',
//            'body'  => '<p>Vestibulum sit amet turpis finibus, varius nisl eu, laoreet enim. Fusce ex dolor, interdum et cursus vel, luctus sed ex. Maecenas viverra, elit nec ornare pharetra, tellus urna volutpat risus, non pretium ligula sem quis ante. Suspendisse tempus est urna, eget consequat urna iaculis porttitor. Aliquam iaculis est scelerisque, consequat ex at, mattis lectus. Etiam euismod luctus lacus, et eleifend mauris lobortis laoreet. Praesent at pharetra tellus. Morbi urna purus, euismod in condimentum vel, sollicitudin in urna. Aenean non metus sed justo gravida tincidunt. Etiam id orci elementum, lobortis massa sit amet, facilisis odio.
//
//Duis laoreet dolor eget tortor varius, convallis tristique sapien volutpat. Nunc semper, nisl id scelerisque iaculis, sem lectus ultrices lorem, vitae blandit magna lectus vel enim. Cras vitae felis aliquet, posuere erat id, maximus dolor. Suspendisse tempus ut erat sed euismod. Vestibulum ex magna, scelerisque in eleifend molestie, lacinia at sapien. Morbi volutpat risus vel volutpat consequat. Integer in nulla turpis. Proin lacus enim, posuere in suscipit sed, fermentum a sapien. Maecenas ut ex consequat, consequat velit at, blandit dui.</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id'   => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-work-post',
//            'excerpt'  => 'Lorem ipsum dolar sit amet',
//            'body'  => '<p>Vestibulum sit amet turpis finibus, varius nisl eu, laoreet enim. Fusce ex dolor, interdum et cursus vel, luctus sed ex. Maecenas viverra, elit nec ornare pharetra, tellus urna volutpat risus, non pretium ligula sem quis ante. Suspendisse tempus est urna, eget consequat urna iaculis porttitor. Aliquam iaculis est scelerisque, consequat ex at, mattis lectus. Etiam euismod luctus lacus, et eleifend mauris lobortis laoreet. Praesent at pharetra tellus. Morbi urna purus, euismod in condimentum vel, sollicitudin in urna. Aenean non metus sed justo gravida tincidunt. Etiam id orci elementum, lobortis massa sit amet, facilisis odio.
//
//Duis laoreet dolor eget tortor varius, convallis tristique sapien volutpat. Nunc semper, nisl id scelerisque iaculis, sem lectus ultrices lorem, vitae blandit magna lectus vel enim. Cras vitae felis aliquet, posuere erat id, maximus dolor. Suspendisse tempus ut erat sed euismod. Vestibulum ex magna, scelerisque in eleifend molestie, lacinia at sapien. Morbi volutpat risus vel volutpat consequat. Integer in nulla turpis. Proin lacus enim, posuere in suscipit sed, fermentum a sapien. Maecenas ut ex consequat, consequat velit at, blandit dui.</p>'
//        ]);
    }
}
