<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Sensori::class, function (Faker\Generator $faker) {

    
    	 //'id'=>$faker->randomDigitNotNull,
    
        
            $rand = random_int(1,5);

            switch ($rand) {
            case '1':
            $marca ='samsung';        
                break;
            case '2':
            $marca ='Opensens';        
                break;
            case '3':
            $marca ='sensHot';      
                break;
             case '4':
            $marca ='rainss';       
                break;
            case '5':
            $marca ='justo';        
                break;           
            
            default:
            $marca ='nicotina';
                break;
        }

        $rand = random_int(1,7);

        switch ($rand) {
            case '1':
                $tipo='barometro';
                break;
            case '2':
                $tipo='termometro';
                break;
            case '3':
                $tipo='igrometro';
                break;
            case '4':
                $tipo='altimetro';
                break;
            case '5':
                $tipo='pluviometro';
                break;
            case '6':
                $tipo='solarimetro';
                break;
            case '7':
                $tipo='accelerometro';
                break;
            
            default:
            $tipo='nanometro';
            break;
        }

        return [
        'marca'=>$marca,
        'tipo' =>$tipo,
        'ambiente'=>App\ambienti::all()->shuffle()->slice(0,1)->first()->id,
            ];
});


$factory->define(App\ambienti::class, function (Faker\Generator $faker) {

    return [
         
        'descrizione' => $faker->word,
        'user'=>App\User::all()->shuffle()->slice(0,1)->first()->id,

        ];
});

/*
$factory->define(App\rilevazioni::class, function (Faker\Generator $faker) {

    return [
         
        'valore' => $faker->word,
        'messaggio' => $faker->word,
        'id_sensore'=>App\Sensori::all()->shuffle()->slice(0,1)->first()->id,
        'data_ril'=>$faker->dateTime,
        ];
});
*/

