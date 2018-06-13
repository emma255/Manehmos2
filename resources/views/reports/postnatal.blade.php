<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: dimgrey;
            color: white;
        }
    </style>
</head>

<body>

    <h3>TAARIFA YA MWEZI MTOTO NA MAMA BAADA YA KUJIFUNGUA</h3>
    <div>
        <label for="">Jina la kituo:</label>
        <label for="">
                <?= $center = App\User::where('name',Auth::user()->name)->value('center'); ?>
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="">Wilaya:</label>
        <label for="">Mufindi</label>
    </div>
    <br>
    <div>
        <label for="">Mwezi:</label> {{date(" F ", mktime(0, 0, 0, request('month'), 10))}}
        </label>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
        <label for="">Mwaka:</label>{{request('year')}}
    </div>
    <br>
    <table id="customers">

        <thead>
            <tr>
                <th>Namba</th>
                <th>Maelezo</th>
                <th>Umri &lt; 20</th>
                <th>Umri &gt;= 20</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1 a</td>
                <td>Waliohudhuria ndani ya saa 48</td>
                <td>
                    <?= $under20 = App\Maelezo_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['hudhurio','Masaa 48'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $over20 = App\Maelezo_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['hudhurio','Masaa 48'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $total = $under20 + $over20 ?>
                </td>
            </tr>
            <tr>
                <td>1 b</td>
                <td>Waliohudhuria kati ya siku 3-7</td>
                <td>
                    <?= $under20s = App\Maelezo_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['hudhurio','Siku 3-7'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $over20s = App\Maelezo_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['hudhurio','Siku 3-7'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $total2 = $under20s + $over20s ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <b>Jumla waliohudhuria ndani ya siku 7</b>
                </td>
                <td>
                    <?= $under20 + $under20s ?>
                </td>
                <td>
                    <?= $over20 + $over20s ?>
                </td>
                <td>
                    <?= $total + $total2?>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Waliomaliza mahudhurio yote</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Wenye upungufu mkubwa wa damu (Hb &lt; 8.5/gdl)</td>
                <td>
                    <?= $hb20 = App\Maelezo_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mama_HB', '<', '8.5'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $hb0ver = App\Maelezo_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mama_HB', '<', '8.5'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $hb20 + $hb0ver ?>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>waliopata matatizo ya akili</td>
                <td>
                    <?= $akili20 = App\Maelezo_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['akili_timamu', 'Hapana'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $akiliover = App\Maelezo_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['akili_timamu', 'Hapana'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $akili20 + $akiliover ?>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Waliopata vitamin A</td>
                <td>
                    <?= $vita20 = App\Maelezo_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['idadi_ya_dawa_vitaminA', '>', '0'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $vitaover = App\Maelezo_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['idadi_ya_dawa_vitaminA', '>', '0'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $vita20 + $vitaover ?>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Wenye msamba ulioambukizwa / ulioachia</td>
                <td>
                    <?= $msamba20 = App\Maelezo_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['hali_ya_msamba', '!=', 'Mshono umeunga'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $msambaover = App\Maelezo_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['hali_ya_msamba', '!=', 'Mshono umeunga'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $msamba20 + $msambaover ?>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Wenye fistula</td>
                <td>
                    <?= $fistula20 = App\Maelezo_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['fistula', 'Ndio'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $fistulaover = App\Maelezo_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['fistula', 'Ndio'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $fistula20 + $fistulaover ?>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>
                    <b>Waliojifungulia nje ya kituo cha kutolea huduma za afya</b>
                </td>
            </tr>
            <tr>
                <td>8 a</td>
                <td>Waliojifungua kabla ya kufika kwenye kituo cha kutolea huduma za afya</td>
                <td>
                    <?= $njiani20 = App\Alipojifungua_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mahali_alipojifungulia', 'Njiani'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $njianiover = App\Alipojifungua_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mahali_alipojifungulia', 'Njiani'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $njiani20 + $njianiover ?>
                </td>
            </tr>
            <tr>
                <td>8 b</td>
                <td>Waliojifungulia kwa wakunga wa jadi</td>
                <td>
                    <?= $jadi20 = App\Alipojifungua_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kada_ya_aliyemzalisha', 'Mkunga wa jadi (TBA)'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $jadiover = App\Alipojifungua_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kada_ya_aliyemzalisha', 'Mkunga wa jadi (TBA)'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $jadi20 + $jadiover ?>
                </td>
            </tr>
            <tr>
                <td>8 c</td>
                <td>Waliojifungulia nyumbani</td>
                <td>
                    <?= $nyumbani20 = App\Alipojifungua_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mahali_alipojifungulia', 'Nyumbani'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $nyumbaniover = App\Alipojifungua_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mahali_alipojifungulia', 'Nyumbani'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $nyumbani20 + $nyumbaniover ?>
                </td>
            </tr>

            <tr>
                <td>9</td>
                <td>
                    <b>Uzazi wa mpango</b>
                </td>
            </tr>
            <tr>
                <td>9 a</td>
                <td>Idadi ya wateja waliopata ushauri nasaha mara moja</td>
                <td>
                    <?= $nyumbani20 = App\Alipojifungua_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mahali_alipojifungulia', 'Nyumbani'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $nyumbaniover = App\Alipojifungua_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mahali_alipojifungulia', 'Nyumbani'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $nyumbani20 + $nyumbaniover ?>
                </td>
            </tr>
            <tr>
                <td>9 b</td>
                <td>Amepata njia ya Uzazi wa mpango wakati wa hudhurio la postnatal</td>
                <td>
                    <?= $ppc20 = App\FamilyPlan::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['amepatiwa_family_plan_wakati_wa_ppc', 'ndio'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $ppcover = App\FamilyPlan::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['amepatiwa_family_plan_wakati_wa_ppc', 'ndio'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $ppc20 + $ppcover ?>
                </td>
            </tr>
            <tr>
                <td>9 c</td>
                <td>Waliopata njia za uzazi wa mpango baada ya mimba kuharibika</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>9 d</td>
                <td>Waliopata rufaa kupata njia ya uzazi wa mpango</td>
                <td>
                    <?= $ppcRufaa20 = App\FamilyPlan::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['rufaa_kupata_family_plan', 'ndio'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $ppcRufaaover = App\FamilyPlan::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['rufaa_kupata_family_plan', 'ndio'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $ppcRufaa20 + $ppcRufaaover ?>
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>
                    <b>PMTCT</b>
                </td>
            </tr>
            <tr>
                <td>10 a</td>
                <td>Waliokuja postnatal wakiwa positive</td>
                <td>
                    <?= $pv20 = App\Pmtct_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['Hali_ya_VVU_kwenye_kadi', 'Positive'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $pvover = App\Pmtct_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['Hali_ya_VVU_kwenye_kadi', 'Positive'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $pv20 + $pvover ?>
                </td>
            </tr>
            <tr>
                <td>10 b</td>
                <td>Waliopima VVU wakati wa postnatal (Ndani ya siku 42 tangu siku ya kujifungua)</td>
                <td>
                    <?= $amepima20 = App\Pmtct_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['amepima_postnatal', 'Ndio'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $amepimaover = App\Pmtct_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['amepima_postnatal', 'Ndio'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $amepima20 + $amepimaover ?>
                </td>
            </tr>
            <tr>
                <td>10 c</td>
                <td>Waliogundulika wana VVU wakati wa postnatal (Ndani ya siku 42 tangu ya kujifungua)</td>
                <td>
                    <?= $gundulika20 = App\Pmtct_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kipimo_vvu_wakati_wa_postnatal', 'Positive'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $gundulikaover = App\Pmtct_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kipimo_vvu_wakati_wa_postnatal', 'Positive'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $gundulika20 + $gundulikaover ?>
                </td>
            </tr>
            <tr>
                <td>10 d</td>
                <td>Wenye VVU waliochagua kunyonyesha maziwa ya mama pekee (EBF)</td>
                <td>
                    <?= $ebf20 = App\Pmtct_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kipimo_vvu_wakati_wa_postnatal', 'Positive'], ['lishe_ya_mtoto', 'EBF'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $ebfover = App\Pmtct_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kipimo_vvu_wakati_wa_postnatal', 'Positive'], ['lishe_ya_mtoto', 'EBF'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $ebf20 + $ebfover ?>
                </td>
            </tr>
            <tr>
                <td>10 e</td>
                <td>Wenye VVU waliochagua kunywesha maziwa mbadala (RF)</td>
                <td>
                    <?= $RF20 = App\Pmtct_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kipimo_vvu_wakati_wa_postnatal', 'Positive'], ['lishe_ya_mtoto', 'RF'], ['umri', '<', '7305']])->count();?>
                </td>
                <td>
                    <?= $RFover = App\Pmtct_view::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kipimo_vvu_wakati_wa_postnatal', 'Positive'], ['lishe_ya_mtoto', 'RF'], ['umri', '>=', '7305']])->count();?>
                </td>
                <td>
                    <?= $RF20 + $RFover ?>
                </td>
            </tr>
            <tr>
                <td>11</td>
                <td>
                    <b>MTOTO</b>
                </td>
                <td>
                    <b>Wavulana</b>
                </td>
                <td>
                    <b>Wasichana</b>
                </td>
                <td>
                    <b>Jumla</b>
                </td>
            </tr>
            <tr>
                <td>11 a</td>
                <td>Idadi ya watoto waliohudhuria ndani ya saa 48</td>
                <td>
                    <?= $t4820 = App\Mtoto_view::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['hudhurio', 'Ndani ya masaa 24'], ['jinsia', 'Mvulana']])->count();?>
                </td>
                <td>
                    <?= $t48over = App\Mtoto_view::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['hudhurio', 'Ndani ya masaa 24'], ['jinsia', 'Msichana']])->count();?>
                </td>
                <td>
                    <?= $t4820 + $t48over ?>
                </td>
            </tr>
            <tr>
                <td>11 b</td>
                <td>Idadi ya watoto waliohudhuria kati ya siku ya 3-7</td>
                <td>
                    <?= $t3_720 = App\Mtoto_view::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['hudhurio', 'Ndani ya siku 3-7'], ['jinsia', 'Mvulana']])->count();?>
                </td>
                <td>
                    <?= $t3_7over = App\Mtoto_view::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['hudhurio', 'Ndani ya siku 3-7'], ['jinsia', 'Msichana']])->count();?>
                </td>
                <td>
                    <?= $t3_720 + $t3_7over ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <b>Jumla waliohudhuria ndani ya siku 7</b>
                </td>
                <td>
                    <?= $t1 = $t3_720 + $t4820 ?>
                </td>
                <td>
                    <?= $t2 = $t48over + $t3_7over ?>
                </td>
                <td>
                    <?= $t1 + $t2?>
                </td>
            </tr>
            <tr>
                <td>11 c</td>
                <td>Waliomaliza mahudhurio yote (saa 48, siku 3-7, siku 8-28, siku 29)</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        </tbody>
    </table>
    <br>
    <table id="customers">
        <tbody>
            <tr>
                <th>Namba</th>
                <th>Maelezo</th>
                <th>Wavulana</th>
                <th>Wasichana</th>
                <th>Jumla</th>
            </tr>
            <tr>
                <td>12</td>
                <td>
                    <b>HUDUMA KWA MTOTO</b>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>12 a</td>
                <td>Idadi ya watoto waliopewa BCG</td>
                <td>
                    <?= $bcg20 = App\Mtoto_huduma::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['tarehe_BCG', '!=', 'null'], ['jinsia', 'Mvulana']])->count();?>
                </td>
                <td>
                    <?= $bcgover = App\Mtoto_huduma::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['tarehe_BCG', '!=','null'], ['jinsia', 'Msichana']])->count();?>
                </td>
                <td>
                    <?= $bcg20 + $bcgover ?>
                </td>
            </tr>
            <tr>
                <td>12 b</td>
                <td>Idadi ya watoto waliopewa opv 0</td>
                <td>
                    <?= $opv20 = App\Mtoto_huduma::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['tarehe_OPVO', '!=', 'null'], ['jinsia', 'Mvulana']])->count();?>
                </td>
                <td>
                    <?= $opvover = App\Mtoto_huduma::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['tarehe_OPVO', '!=','null'], ['jinsia', 'Msichana']])->count();?>
                </td>
                <td>
                    <?= $opv20 + $opvover ?>
                </td>
            </tr>
            <tr>
                <td>12 c</td>
                <td>Idadi ya watoto waliozaliwa na uzito wa
                    <2.5 kg wakapatiwa KMC</td>
                        <td>
                            <?= $ukmc20 = App\Mtoto_huduma::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['uzito', '<', '2500'], ['kmc', 'Ndio'], ['jinsia', 'Mvulana']])->count();?>
                        </td>
                        <td>
                            <?= $ukmcover = App\Mtoto_huduma::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['uzito', '<','2500'], ['kmc', 'Ndio'], ['jinsia', 'Msichana']])->count();?>
                        </td>
                        <td>
                            <?= $ukmc20 + $ukmcover ?>
                        </td>
            </tr>
            <tr>
                <td>12 d</td>
                <td>Idadi ya watoto waliozaliwa nyumbani chini ya
                    <2.5 kg</td>
                        <td>
                            <?= $kgv20 = App\Mtoto_huduma::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['uzito', '<', '2500'],['mahali_alipozaliwa', 'Nyumbani'], ['jinsia', 'Mvulana']])->count();?>
                        </td>
                        <td>
                            <?= $kgvover = App\Mtoto_huduma::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['uzito', '<','2500'],['mahali_alipozaliwa', 'Nyumbani'], ['jinsia', 'Msichana']])->count();?>
                        </td>
                        <td>
                            <?= $kgv20 + $kgvover ?>
                        </td>
            </tr>
            <tr>
                <td>12 e</td>
                <td>Idadi ya watoto waliozaliwa nyumbani walioanzishiwa huduma ya
                    <br> kangaroo (KMC)</td>
                <td>
                    <?= $ukmc20 = App\Mtoto_huduma::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['mahali_alipozaliwa', 'Nyumbani'], ['kmc', 'Ndio'], ['jinsia', 'Mvulana']])->count();?>
                </td>
                <td>
                    <?= $ukmcover = App\Mtoto_huduma::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['mahali_alipozaliwa', 'Nyumbani'], ['kmc', 'Ndio'], ['jinsia', 'Msichana']])->count();?>
                </td>
                <td>
                    <?= $ukmc20 + $ukmcover ?>
                </td>
            </tr>
            <tr>
                <td>12 f</td>
                <td>Idadi ya wenye upungufu mkubwa wa damu (Hb
                    <10 g/dl)</td>
                        <td>
                            <?= $hb20 = App\Mtoto_huduma::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['hb', '<', '10'], ['jinsia', 'Mvulana']])->count();?>
                        </td>
                        <td>
                            <?= $hbover = App\Mtoto_huduma::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['hb', '<','10'], ['jinsia', 'Msichana']])->count();?>
                        </td>
                        <td>
                            <?= $hb20 + $hbover ?>
                        </td>
            </tr>

            <tr>
                <td>13</td>
                <td>
                    <b>UAMBUKIZO WA MTOTO</b>
                </td>
            </tr>
            <tr>
                <td>13 a</td>
                <td>Idadi ya watoto wenye uambukizo mkali (septicaemia)</td>
                <td>
                    <?= $uambukizo20 = App\Mtoto_uambukizo::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['uambukizo_mkali', 'Ndio'], ['jinsia', 'Mvulana']])->count();?>
                </td>
                <td>
                    <?= $uambukizoover = App\Mtoto_uambukizo::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['uambukizo_mkali','Ndio'], ['jinsia', 'Msichana']])->count();?>
                </td>
                <td>
                    <?= $uambukizo20 + $uambukizoover ?>
                </td>
            </tr>
            <tr>
                <td>13 b</td>
                <td>Idadi ya watoto wenye uambukizo kwenye kitovu</td>
                <td>
                    <?= $kitovu20 = App\Mtoto_uambukizo::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['maambukizi_kitovu', 'Ndio'], ['jinsia', 'Mvulana']])->count();?>
                </td>
                <td>
                    <?= $kitovuover = App\Mtoto_uambukizo::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['maambukizi_kitovu','Ndio'], ['jinsia', 'Msichana']])->count();?>
                </td>
                <td>
                    <?= $kitovu20 + $kitovuover ?>
                </td>
            </tr>
            <tr>
                <td>13 c</td>
                <td>Idadi ya watoto wenye uambukizo kwenye ngozi</td>
                <td>
                    <?= $ngoz20 = App\Mtoto_uambukizo::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['maambukizi_ngozini', 'Ndio'], ['jinsia', 'Mvulana']])->count();?>
                </td>
                <td>
                    <?= $ngozover = App\Mtoto_uambukizo::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['maambukizi_ngozini','Ndio'], ['jinsia', 'Msichana']])->count();?>
                </td>
                <td>
                    <?= $ngoz20 + $ngozover ?>
                </td>
            </tr>
            <tr>
                <td>13 d</td>
                <td>Idadi ya watoto wenye jaundice (ngozi njano)</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>14</td>
                <td>Vifo vya watoto waliozaliwa nyumbani (perinatal); neonatal</td>
                <td>
                    <?= $ngoz20 = App\Mtoto_uambukizo::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['mahali_alipozaliwa', 'Nyumbani'], ['hali_ya_mtoto', 'Hai'], ['jinsia', 'Mvulana']])->count();?>
                </td>
                <td>
                    <?= $ngozover = App\Mtoto_uambukizo::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['mahali_alipozaliwa','Nyumbani'], ['hali_ya_mtoto', 'Hai'], ['jinsia', 'Msichana']])->count();?>
                </td>
                <td>
                    <?= $ngoz20 + $ngozover ?>
                </td>
            </tr>
            <tr>
                <td>15</td>
                <td>Waliopewa dawa ya ARV</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td>16</td>
                <td>
                    <b>ULISHAJI WA MTOTO</b>
                </td>
            </tr>
            <tr>
                <td>16 a</td>
                <td>Watoto wachanga wanaonyonya maziwa ya mama pekee (EBF)</td>
                <td>
                    <?= $cebf20 = App\Mtoto_lishe::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['lishe', 'EBF'], ['jinsia', 'Mvulana']])->count();?>
                </td>
                <td>
                    <?= $cebfover = App\Mtoto_lishe::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['lishe','EBF'], ['jinsia', 'Msichana']])->count();?>
                </td>
                <td>
                    <?= $cebf20 + $cebfover ?>
                </td>
            </tr>
            <tr>
                <td>16 b</td>
                <td>Watoto wachanga wanaonyonyeshwa maziwa mbadala (RF)</td>
                <td>
                    <?= $crf20 = App\Mtoto_lishe::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['lishe', 'RF'], ['jinsia', 'Mvulana']])->count();?>
                </td>
                <td>
                    <?= $crfover = App\Mtoto_lishe::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['lishe','RF'], ['jinsia', 'Msichana']])->count();?>
                </td>
                <td>
                    <?= $crf20 + $crfover ?>
                </td>
            </tr>
            <tr>
                <td>16 c</td>
                <td>Watoto wachanga wanaonyonyeshwa maziwa ya mama na
                    <br> kupatiwa chakula kingine (MF)</td>
                <td>
                    <?= $cmf20 = App\Mtoto_lishe::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['lishe', 'MF'], ['jinsia', 'Mvulana']])->count();?>
                </td>
                <td>
                    <?= $cmfover = App\Mtoto_lishe::whereyear('tarehe', request('year'))->wheremonth('tarehe', request('month'))->where([['lishe','MF'], ['jinsia', 'Msichana']])->count();?>
                </td>
                <td>
                    <?= $cmf20 + $cmfover ?>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <div>
        <label for="jina_la_mtayarishaji">Mtayarishaji wa Ripoti</label>
        <u>{{Auth::user()->name}}</u>
        <label for="cheo">Cheo</label>..........................................
    </div>
    <br>
    <div>
        <label for="sahihi">Sahihi</label>...............................................
        <label for="tarehe">Tarehe:</label>
        <label for="date">{{Carbon\Carbon::now()->toFormattedDateString()}}</label>
    </div>
    <br>
    <div>
        <label for="immepita">Imepitiwa na</label>...................,.........................,............................
    </div>
    <br>
    <div>
        <label for="phone_no">Namba ya simu ya kituo</label>.......................................................
    </div>
    <br>
    <div>
        <label for="imepokelewa">Imepokelewa wilayani tarehe</label> ...../..../...........
    </div>
    </form>
</body>

</html>