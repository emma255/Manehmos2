<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Register6 extends Model
{
    use HasFactory;

    protected $fillable = [
        'mume_kipimo_aina', 'mke_kipimo_aina', 'hudhurio', 'uzito', 'tarehe_ya_marudio', 'tarehe_ya_hudhurio', 'matokeo_stds_mume', 'mume_ametibiwa', 'matokeo_stds_mke', 'mke_ametibiwa', 'damu_HB', 'BP', 'sukari_kwenye_mkojo', 'kaswende_mume', 'mume_ametibiwa_kaswende', 'kaswende_mke', 'mke_ametibiwa_kaswende', 'mume_tayari_ana_VVU', 'mume_tarehe_ya_unasihi', 'mume_amepima_VVU', 'mume_tarehe_ya_kipimo', 'mume_kipimo1_VVU', 'mume_unasihi_baada_ya_kipimo_1', 'mke_tayari_ana_VVU', 'mke_tarehe_ya_unasihi', 'mke_amepima_VVU', 'mke_tarehe_ya_kipimo', 'mke_kipimo1_VVU', 'mke_unasihi_baada_ya_kipimo_1', 'hana_matatizo', 'Anaemia', 'Protenuria', 'high_BP', 'kutoongezeka_uzito', 'damu_ukeni', 'mlalo_mbaya_wa_mtoto', 'albendazole_mebendazole', 'vidonge_vya_I_FA', 'mrdt_o_bs', 'llin', 'ipt', 'tarehe_ya_ipt', 'maoni', 'tarehe_rufaa', 'rufaa_alikopelekwa', 'sababu_ya_rufaa', 'ana_kadi', 'TT', 'tarehe_ya_TT',
    ];

    protected $guarded = [];
}
