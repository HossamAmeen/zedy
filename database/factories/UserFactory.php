<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;






$factory->define(App\Models\User::class, function (Faker $faker) {

    return [
        'user_name' => $faker->name,
        'full_name' => $faker->name,
        'password' => '$2y$10$mXwEFI/nQub9PmCejn59zuozRujElm4bu5D01y.wXpciRnKjHRWNm', // admin
        'email' => Str::random(10). $faker->email,
        'role' => $faker->randomElement($array = range (0,1))
    ];
});
$factory->define(App\Models\Configration::class, function (Faker $faker) {
    return [
        "ar_title"=> "الزيدي", 
        "title"=> "zedy",
        "slide_description" => "Welcome to Zedy for marketing and programming services",
        "ar_slide_description" => "مرحبا بك في الزيدي",
        "description"=>"شيسشسيشسيشسيشس" ,
        "en_description"=>"Zedy Marketing and Programming Services Company provides a complete service in the field of marketing, software and business management. Through a distinguished team and more than 6 years of experience serving more than 300 clients",
        "projects_counter"=>60,  
        "experience_year_counter"=>8,
        "address" =>"Al-Assal Street from Al-Gomhoria Street, Assiut",
        "ar_address" => "الجمهوريه - اسيوط",
        'email' => $faker->safeEmail,
        'youtube' =>"https://www.youtube.com" ,
        "behance" =>"https://www.behance.net/", 
        "company_profile"=> "https://www.behance.net/" ,
        "Visual_identity_samples"=>"https://www.behance.net/", 
        'facebook' => "https://www.facebook.com/",
        "linkedin"=> "linkedin.com",
        "whatsapp" => "01010079798",
        'twitter' => "https://twitter.com/",
        'instagram' => "https://www.instagram.com/",
        "location"=> "", 
        'phone' => "01010079795",
        'phone2' => "01010079795",
        'user_id' =>1 ,
    ];
});
$factory->define(App\Models\Service::class, function (Faker $faker) {

    return [
        'name'=> $faker->name ,
        'ar_name' => $faker->name . "عربي",
        'description' => $faker->text,
        'ar_description' => $faker->text."عربي",
        "user_id" => 1
    ];
});
$factory->define(App\Models\Client::class, function (Faker $faker) {

    return [
        'name'=> $faker->name ,
        'ar_name' => $faker->name . "عربي",
        'description' => $faker->text,
        'ar_description' => $faker->text."عربي",
        "user_id" => 1
    ];
});
$factory->define(App\Models\ClientReview::class, function (Faker $faker) {

    return [
        'name'=> $faker->name ,
        'ar_name' => $faker->name . "عربي",
        'description' => $faker->text,
        'ar_description' => $faker->text."عربي",
        "user_id" => 1
    ];
});
$factory->define(App\Models\Employee::class, function (Faker $faker) {

    return [
        'name'=> $faker->name ,
        'ar_name' => $faker->name . "عربي",
        "user_id" => 1
    ];
});
$factory->define(App\Models\Field::class, function (Faker $faker) {

    return [
        'name'=> $faker->name ,
        'ar_name' => $faker->name . "عربي",
        "user_id" => 1
    ];
});
$factory->define(App\Models\Gallery::class, function (Faker $faker) {
    return [
        'user_id' =>1 ,
        'path'=>" "
    ];
});
