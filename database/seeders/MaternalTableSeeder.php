<?php

namespace Database\Seeders;

use App\Models\RegisterMaternal;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class MaternalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i < 30; $i++) {
            RegisterMaternal::create([
                'tarehe_ya_kuandikishwa' => $faker->date($format = "Y-m-d"),
                'namba_ya_usajili' => ucwords(Str::random(5)),
                'jina_la_mama' => $faker->name('female'),
                'tarehe_ya_kuzaliwa' => $faker->date(),
                'BP' => $faker->randomNumber($nbDigits = 3) . "/" . $faker->randomNumber($nbDigits = 2),
                'lnmp' => $faker->date(),
                // 'kujifungua_kwa_cs' => $faker->randomElement(['ndio', 'hapana']),
                'urefu' => $faker->randomNumber($nbDigits = 3),
                'jina_la_mume' => $faker->name('male'),
                'mtaa' => $faker->streetName,
                'jina_la_mwenyekiti' => $faker->name,
                'mimba_ngapi' => $faker->randomDigit,
                'amezaa_mara_ngapi' => $faker->randomDigit,
                'watoto_walio_hai' => $faker->randomDigit,
                'mimba_zilizoharibika' => $faker->randomDigit,
                'kifo_cha_mtoto_wiki_1' => $faker->randomElement(['ndio', 'hapana']),
                'umri_mtoto_wa_mwisho' => $faker->randomNumber($nbDigits = 2),
            ]);
        }
    }
}
