<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run()
    {

     //   factory('App\Models\User',10)->create();
     $this->call([
        UserSeed::class,
    ]);
    factory('App\Models\Configration',1)->create();
    factory('App\Models\Service',15)->create();
    factory('App\Models\Field',15)->create();
    factory('App\Models\Client',15)->create();
    factory('App\Models\Employee',15)->create();
    factory('App\Models\ClientReview',15)->create();
    factory('App\Models\Job',15)->create();
    App\Models\Media::create(
        [
            "type"=>"video",
            "path"=>"https://www.youtube.com/watch?v=JtsemNHLGeI&list=PLDoPjvoNmBAzqag2d8Rnz2gBdrDlOxv4B&index=2",
            'name' => "video name",
            'ar_name' => "اسم الفديو",
            "user_id"=>1
        ]
        );
    App\Models\Media::create(
            [
                "type"=>"image",
                "path"=>'uploads/services/Online marketing.webp',
                'name' => "Welcome to Zedy for marketing and programming services",
                'ar_name' => "أهلاً بك فى زيدي لخدمات التسويق و البرمجة",
                "user_id"=>1
            ]
            );
    }
}
