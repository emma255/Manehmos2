<?php

namespace Database\Seeders;

use App\Models\Register6;
use App\Models\RegisterMaternal;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class Register6TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (RegisterMaternal::all() as $maternal) {
            for ($i = 1; $i < $faker->randomDigit(); $i++) {
                $maternal->attendings()->create([
                    'mume_kipimo_aina' => $faker->randomElement(['Kipimo 1', 'Kipimo 2']),
                    'mke_kipimo_aina' => $faker->randomElement(['Kipimo 1', 'Kipimo 2']),
                    'hudhurio' => $faker->randomElement(['Hudhurio la kwanza', 'Hudhurio la pili', 'Hudhurio la tatu', 'Hudhurio la nne', 'Mengineyo']),
                    'uzito' => $faker->randomNumber($nbDigits = 4),
                    'tarehe_ya_marudio' => $faker->date(),
                    'tarehe_ya_hudhurio' => $faker->date(),
                    'matokeo_stds_mume' => $faker->randomElement(['Positive', 'Negative']),
                    'mume_ametibiwa' => $faker->randomElement(['ndio', 'hapana']),
                    'matokeo_stds_mke' =>  $faker->randomElement(['Positive', 'Negative']),
                    'mke_ametibiwa' => $faker->randomElement(['ndio', 'hapana']),
                    'damu_HB' => $faker->randomNumber($nbDigits = 2),
                    'BP' => $faker->randomNumber($nbDigits = 3) . "/" . $faker->randomNumber($nbDigits = 2),
                    'sukari_kwenye_mkojo' => $faker->randomElement(['ndio', 'hapana']),
                    'kaswende_mume' => $faker->randomElement(['Positive', 'Negative']),
                    'mume_ametibiwa_kaswende' => $faker->randomElement(['ndio', 'hapana']),
                    'kaswende_mke' => $faker->randomElement(['Positive', 'Negative']),
                    'mke_ametibiwa_kaswende' => $faker->randomElement(['ndio', 'hapana']),
                    'mume_tayari_ana_VVU' => $faker->randomElement(['ndio', 'hapana']),
                    'mume_tarehe_ya_unasihi' => $faker->date(),
                    'mume_amepima_VVU' => $faker->randomElement(['ndio', 'hapana']),
                    'mume_tarehe_ya_kipimo' => $faker->date(),
                    'mume_kipimo1_VVU' => $faker->randomElement(['Positive', 'Negative']),
                    'mume_unasihi_baada_ya_kipimo_1' => $faker->randomElement(['ndio', 'hapana']),
                    'mke_tayari_ana_VVU' => $faker->randomElement(['ndio', 'hapana']),
                    'mke_tarehe_ya_unasihi' => $faker->date(),
                    'mke_amepima_VVU' => $faker->randomElement(['ndio', 'hapana']),
                    'mke_tarehe_ya_kipimo' => $faker->date(),
                    'mke_kipimo1_VVU' => $faker->randomElement(['Positive', 'Negative']),
                    'mke_unasihi_baada_ya_kipimo_1' => $faker->randomElement(['ndio', 'hapana']),
                    'hana_matatizo' => $faker->randomElement(['ndio', 'hapana']),
                    'Anaemia' => $faker->randomElement(['ndio', 'hapana']),
                    'Protenuria' => $faker->randomElement(['ndio', 'hapana']),
                    'high_BP' => $faker->randomElement(['ndio', 'hapana']),
                    'kutoongezeka_uzito' => $faker->randomElement(['ndio', 'hapana']),
                    'damu_ukeni' => $faker->randomElement(['ndio', 'hapana']),
                    'mlalo_mbaya_wa_mtoto' => $faker->randomElement(['ndio', 'hapana']),
                    'albendazole_mebendazole' => $faker->randomElement(['ndio', 'hapana']),
                    'vidonge_vya_I_FA' => $faker->randomDigit(),
                    'mrdt_o_bs' => $faker->randomElement(['Positive', 'Negative']),
                    'llin' => $faker->randomElement(['ndio', 'hapana']),
                    'ipt' => $faker->randomElement(['IPT-1', 'IPT-2', 'IPT-3', 'IPT-4']),
                    'tarehe_ya_ipt' => $faker->date(),
                    'maoni' => $faker->realText($maxNbChars = 210),
                    'tarehe_rufaa' => $faker->date(),
                    'rufaa_alikopelekwa' => $faker->city(),
                    'sababu_ya_rufaa' =>  $faker->realText($maxNbChars = 220),
                    // 'ana_kadi' => $faker->name,
                    'TT' => $faker->randomElement(['TT1', 'TT2', 'TT3', 'TT4', 'TT5']),
                    'tarehe_ya_TT' => $faker->date(),
                ]);
            }
        }
    }
}
