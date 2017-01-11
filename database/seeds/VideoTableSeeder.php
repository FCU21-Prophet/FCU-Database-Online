<?php

use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('video')->insert
            ([
                'name' => '神偷奶爸3預告',
                'running_time' => 154,
                'country' => '美國',
                'url' => 'https://www.youtube.com/watch?v=_UcRUrRIyDM',
                'introduction' => '好笑',
            ]);

            DB::table('video')->insert
            ([
                'name' => '統神碎碎念',
                'running_time' => 124,
                'country' => '台灣',
                'url' => 'https://www.youtube.com/watch?v=dKVejspyJ1o',
                'introduction' => '吵鬧!',
            ]);

            DB::table('video')->insert
            ([
                'name' => '狂新聞 12/25',
                'running_time' => 318,
                'country' => '台灣',
                'url' => 'https://www.youtube.com/watch?v=lcLLjg0OgA0',
                'introduction' => '948794',
            ]);

            DB::table('video')->insert
            ([
                'name' => '惡靈古堡預告',
                'running_time' => 92,
                'country' => '美國',
                'url' => 'https://www.youtube.com/watch?v=M0EwAXKuX6k',
                'introduction' => '今年一定要看',
            ]);

            DB::table('video')->insert
            ([
                'name' => '菜喳',
                'running_time' => 236,
                'country' => '台灣',
                'url' => 'https://www.youtube.com/watch?v=gIuU75aPTus',
                'introduction' => '',
            ]);

            DB::table('video')->insert
            ([
                'name' => '魔獸世界 : 君臨天下',
                'running_time' => 245,
                'country' => '美國',
                'url' => 'https://www.youtube.com/watch?v=LOp2jxDjZvM',
                'introduction' => '',
            ]);

            DB::table('video')->insert
            ([
                'name' => '鬥陣特工',
                'running_time' => 379,
                'country' => '美國',
                'url' => 'https://www.youtube.com/watch?v=Ghrk0tVwx14',
                'introduction' => '老習慣了!戒不掉!',
            ]);

            DB::table('video')->insert
            ([
                'name' => '千本櫻 和樂器版',
                'running_time' => 275,
                'country' => '日本',
                'url' => 'https://www.youtube.com/watch?v=oaWLcXmjhic',
                'introduction' => '好聽',
            ]);

            DB::table('video')->insert
            ([
                'name' => 'Bad Apple',
                'running_time' => 219,
                'country' => '日本',
                'url' => 'https://www.youtube.com/watch?v=PKdzdXNy4Y4',
                'introduction' => 'I HAVE A PEN',
            ]);

            DB::table('video')->insert
            ([
                'name' => '音樂 Tobu & Marcus Mouya',
                'running_time' => 187,
                'country' => '美國',
                'url' => 'https://www.youtube.com/watch?v=nQT_2XS45Uk',
                'introduction' => '啦啦啦!',
            ]);
    }
}
