<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use http\Params;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::truncate();
        User::truncate();
        Post::truncate();

        $user = \App\Models\User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'excerpt' => 'Excerpt for my post',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id dui erat. Maecenas eleifend
            ipsum dolor. Etiam sit amet tellus sed urna venenatis egestas nec eu neque. Aenean pharetra sem ut ligula hendrerit, 
            aliquam sollicitudin purus consequat. Quisque diam turpis, lobortis ut mi vel, vulputate malesuada orci. In et massa aliquam,
             tempus dui nec, venenatis ex. Vestibulum ut diam scelerisque nisl malesuada ultricies. Quisque imperdiet 
             urna a tellus sagittis accumsan. Pellentesque volutpat lacus ac dignissim suscipit.

            Suspendisse aliquam erat vel arcu eleifend tincidunt. Integer in auctor est. Fusce enim arcu, posuere et ligula id, 
            porta luctus urna. Mauris pretium maximus arcu vitae ultrices. Aliquam tincidunt est sit amet tortor viverra, ut rhoncus lectus finibus.
            Nullam scelerisque interdum mauris suscipit dapibus. Curabitur maximus, felis vitae lacinia iaculis, lacus massa luctus diam, non finibus 
            magna ex eget ex. Cras vestibulum magna vel lectus blandit gravida. Curabitur metus augue, condimentum quis sodales interdum, commodo sit 
            amet est. Mauris auctor ex ut sapien accumsan luctus quis at ligula. Quisque mi enim, maximus ac porta sit amet, sodales sit amet libero.
             Suspendisse condimentum cursus sapien ut euismod. Quisque dignissim, est sed cursus volutpat, diam velit ullamcorper velit, suscipit dictum
              ante sem vel massa. Duis sed feugiat orci, lacinia pellentesque ex. Phasellus finibus ligula ut turpis elementum vulputate.',
            'slug' => 'my-work-post'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'slug' => 'my-personal-post',
            'title' => 'My Personal Post',
            'excerpt' => 'Excerpt for my post',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id dui erat. Maecenas eleifend
            ipsum dolor. Etiam sit amet tellus sed urna venenatis egestas nec eu neque. Aenean pharetra sem ut ligula hendrerit, 
            aliquam sollicitudin purus consequat. Quisque diam turpis, lobortis ut mi vel, vulputate malesuada orci. In et massa aliquam,
             tempus dui nec, venenatis ex. Vestibulum ut diam scelerisque nisl malesuada ultricies. Quisque imperdiet 
             urna a tellus sagittis accumsan. Pellentesque volutpat lacus ac dignissim suscipit.

            Suspendisse aliquam erat vel arcu eleifend tincidunt. Integer in auctor est. Fusce enim arcu, posuere et ligula id, 
            porta luctus urna. Mauris pretium maximus arcu vitae ultrices. Aliquam tincidunt est sit amet tortor viverra, ut rhoncus lectus finibus.
            Nullam scelerisque interdum mauris suscipit dapibus. Curabitur maximus, felis vitae lacinia iaculis, lacus massa luctus diam, non finibus 
            magna ex eget ex. Cras vestibulum magna vel lectus blandit gravida. Curabitur metus augue, condimentum quis sodales interdum, commodo sit 
            amet est. Mauris auctor ex ut sapien accumsan luctus quis at ligula. Quisque mi enim, maximus ac porta sit amet, sodales sit amet libero.
             Suspendisse condimentum cursus sapien ut euismod. Quisque dignissim, est sed cursus volutpat, diam velit ullamcorper velit, suscipit dictum
              ante sem vel massa. Duis sed feugiat orci, lacinia pellentesque ex. Phasellus finibus ligula ut turpis elementum vulputate.',

        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Excerpt for my post',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id dui erat. Maecenas eleifend
            ipsum dolor. Etiam sit amet tellus sed urna venenatis egestas nec eu neque. Aenean pharetra sem ut ligula hendrerit, 
            aliquam sollicitudin purus consequat. Quisque diam turpis, lobortis ut mi vel, vulputate malesuada orci. In et massa aliquam,
             tempus dui nec, venenatis ex. Vestibulum ut diam scelerisque nisl malesuada ultricies. Quisque imperdiet 
             urna a tellus sagittis accumsan. Pellentesque volutpat lacus ac dignissim suscipit.

            Suspendisse aliquam erat vel arcu eleifend tincidunt. Integer in auctor est. Fusce enim arcu, posuere et ligula id, 
            porta luctus urna. Mauris pretium maximus arcu vitae ultrices. Aliquam tincidunt est sit amet tortor viverra, ut rhoncus lectus finibus.
            Nullam scelerisque interdum mauris suscipit dapibus. Curabitur maximus, felis vitae lacinia iaculis, lacus massa luctus diam, non finibus 
            magna ex eget ex. Cras vestibulum magna vel lectus blandit gravida. Curabitur metus augue, condimentum quis sodales interdum, commodo sit 
            amet est. Mauris auctor ex ut sapien accumsan luctus quis at ligula. Quisque mi enim, maximus ac porta sit amet, sodales sit amet libero.
             Suspendisse condimentum cursus sapien ut euismod. Quisque dignissim, est sed cursus volutpat, diam velit ullamcorper velit, suscipit dictum
              ante sem vel massa. Duis sed feugiat orci, lacinia pellentesque ex. Phasellus finibus ligula ut turpis elementum vulputate.',

        ]);
    }
}
