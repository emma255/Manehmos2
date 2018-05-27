<!DOCTYPE html>
<html>

<body>
    <h3>TAARIFA YA MWEZI MTOTO NA MAMA BAADA YA KUJIFUNGUA</h3>
    <div>
        <label for="">Jina la kituo:</label>
        <label for=""><?=App\User::where('name',Auth::user()->name)->value('center'); ?>
        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="">Wilaya:</label> <label for="">Mufindi</label>
    </div>
    <br>
    <div>
        <label for="">Mwezi:</label>
        <label for=""><?= request('month'); ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="">Mwaka:</label>
        <label for=""><?= request('year'); ?></label>
    </div>
    <br>
    <table border="1">

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
                <td> <?= $under20 = App\Maelezo_view::where([['hudhurio','Masaa 48'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $over20 = App\Maelezo_view::where([['hudhurio','Masaa 48'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $total = $under20 + $over20 ?></td>
            </tr>
            <tr>
                <td>1 b</td>
                <td>Waliohudhuria kati ya siku 3-7</td>
                <td> <?= $under20s = App\Maelezo_view::where([['hudhurio','Siku 3-7'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $over20s = App\Maelezo_view::where([['hudhurio','Siku 3-7'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $total2 = $under20s + $over20s ?></td>
            </tr>
            <tr>
                <td></td>
                <td><b>Jumla waliohudhuria ndani ya siku 7</b></td>
                <td><?= $under20 + $under20s ?></td>
                <td><?= $over20 + $over20s ?></td>
                <td><?= $total + $total2?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Waliomaliza mahudhurio yote</td>
                <td>Win 95+</td>
                <td>5.5</td>
                <td>A</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Wenye upungufu mkubwa wa damu (Hb &lt; 8.5/gdl)</td>
                <td><?= $hb20 = App\Maelezo_view::where([['mama_HB', '<', '8.5'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $hb0ver = App\Maelezo_view::where([['mama_HB', '<', '8.5'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $hb20 + $hb0ver ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td>waliopata matatizo ya akili</td>
                <td><?= $akili20 = App\Maelezo_view::where([['akili_timamu', 'Hapana'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $akiliover = App\Maelezo_view::where([['akili_timamu', 'Hapana'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $akili20 + $akiliover ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Waliopata vitamin A</td>
                <td><?= $vita20 = App\Maelezo_view::where([['idadi_ya_dawa_vitaminA', '>', '0'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $vitaover = App\Maelezo_view::where([['idadi_ya_dawa_vitaminA', '>', '0'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $vita20 + $vitaover ?></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Wenye msamba ulioambukizwa / ulioachia</td>
                <td><?= $msamba20 = App\Maelezo_view::where([['hali_ya_msamba', '!=', 'Mshono umeunga'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $msambaover = App\Maelezo_view::where([['hali_ya_msamba', '!=', 'Mshono umeunga'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $msamba20 + $msambaover ?></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Wenye fistula</td>
                <td><?= $fistula20 = App\Maelezo_view::where([['fistula', 'Ndio'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $fistulaover = App\Maelezo_view::where([['fistula', 'Ndio'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $fistula20 + $fistulaover ?></td>
            </tr>
            <tr>
                <td>8</td>
                <td><b>Waliojifungulia nje ya kituo cha kutolea huduma za afya</b></td>
            </tr>
            <tr>
                <td>8 a</td>
                <td>Waliojifungua kabla ya kufika<br>kwenye kituo cha kutolea huduma za afya</td>
                <td><?= $njiani20 = App\Alipojifungua_view::where([['mahali_alipojifungulia', 'Njiani'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $njianiover = App\Alipojifungua_view::where([['mahali_alipojifungulia', 'Njiani'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $njiani20 + $njianiover ?></td>
            </tr>
            <tr>
                <td>8 b</td>
                <td>Waliojifungulia kwa wakunga wa jadi</td>
                <td><?= $jadi20 = App\Alipojifungua_view::where([['kada_ya_aliyemzalisha', 'Mkunga wa jadi (TBA)'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $jadiover = App\Alipojifungua_view::where([['kada_ya_aliyemzalisha', 'Mkunga wa jadi (TBA)'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $jadi20 + $jadiover ?></td>
            </tr>
            <tr>
                <td>8 c</td>
                <td>Waliojifungulia nyumbani</td>
                <td><?= $nyumbani20 = App\Alipojifungua_view::where([['mahali_alipojifungulia', 'Nyumbani'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $nyumbaniover = App\Alipojifungua_view::where([['mahali_alipojifungulia', 'Nyumbani'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $nyumbani20 + $nyumbaniover ?></td>
            </tr>

            <tr>
                <td>9</td>
                <td><b>Uzazi wa mpango</b></td>
            </tr>
            <tr>
                <td>9 a</td>
                <td>Idadi ya wateja waliopata ushauri nasaha mara moja</td>
                <td><?= $nyumbani20 = App\Alipojifungua_view::where([['mahali_alipojifungulia', 'Nyumbani'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $nyumbaniover = App\Alipojifungua_view::where([['mahali_alipojifungulia', 'Nyumbani'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $nyumbani20 + $nyumbaniover ?></td>
            </tr>
            <tr>
                <td>9 b</td>
                <td>Amepata njia ya Uzazi wa mpango wakati wa hudhurio la postnatal</td>
                <td><?= $ppc20 = App\FamilyPlan::where([['amepatiwa_family_plan_wakati_wa_ppc', 'ndio'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $ppcover = App\FamilyPlan::where([['amepatiwa_family_plan_wakati_wa_ppc', 'ndio'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $ppc20 + $ppcover ?></td>
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
                <td><?= $ppcRufaa20 = App\FamilyPlan::where([['rufaa_kupata_family_plan', 'ndio'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $ppcRufaaover = App\FamilyPlan::where([['rufaa_kupata_family_plan', 'ndio'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $ppcRufaa20 + $ppcRufaaover ?></td>
            </tr>
            <tr>
                <td>10</td>
                <td><b>PMTCT</b></td>
            </tr>
            <tr>
                <td>10 a</td>
                <td>Waliokuja postnatal wakiwa positive</td>
                <td><?= $pv20 = App\Pmtct_view::where([['Hali_ya_VVU_kwenye_kadi', 'Positive'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $pvover = App\Pmtct_view::where([['Hali_ya_VVU_kwenye_kadi', 'Positive'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $pv20 + $pvover ?></td>
            </tr>
            <tr>
                <td>10 b</td>
                <td>Waliopima VVU wakati wa postnatal <br>(Ndani ya siku 42 tangu siku ya kujifungua)</td>
                <td><?= $amepima20 = App\Pmtct_view::where([['amepima_postnatal', 'Ndio'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $amepimaover = App\Pmtct_view::where([['amepima_postnatal', 'Ndio'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $amepima20 + $amepimaover ?></td>
            </tr>
            <tr>
                <td>10 c</td>
                <td>Waliogundulika wana VVU wakati wa postnatal<br>(Ndani ya siku 42 tangu ya kujifungua)</td>
                <td><?= $gundulika20 = App\Pmtct_view::where([['kipimo_vvu_wakati_wa_postnatal', 'Positive'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $gundulikaover = App\Pmtct_view::where([['kipimo_vvu_wakati_wa_postnatal', 'Positive'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $gundulika20 + $gundulikaover ?></td>
            </tr>
            <tr>
                <td>10 d</td>
                <td>Wenye VVU waliochagua kunyonyesha maziwa ya mama pekee (EBF)</td>
                <td><?= $ebf20 = App\Pmtct_view::where([['kipimo_vvu_wakati_wa_postnatal', 'Positive'], ['lishe_ya_mtoto', 'EBF'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $ebfover = App\Pmtct_view::where([['kipimo_vvu_wakati_wa_postnatal', 'Positive'], ['lishe_ya_mtoto', 'EBF'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $ebf20 + $ebfover ?></td>
            </tr>
            <tr>
                <td>10 e</td>
                <td>Wenye VVU waliochagua kunywesha maziwa mbadala (RF)</td>
                <td><?= $RF20 = App\Pmtct_view::where([['kipimo_vvu_wakati_wa_postnatal', 'Positive'], ['lishe_ya_mtoto', 'RF'], ['umri', '<', '7305']])->count();?></td>
                <td><?= $RFover = App\Pmtct_view::where([['kipimo_vvu_wakati_wa_postnatal', 'Positive'], ['lishe_ya_mtoto', 'RF'], ['umri', '>=', '7305']])->count();?></td>
                <td><?= $RF20 + $RFover ?></td>
            </tr>
            <tr>
                <td>11</td>
                <td><b>MTOTO</b></td>
                <td><b>ME</b></td>
                <td><b>KE</b></td>
                <td><b>Jumla</b></td>
            </tr>
            <tr>
                <td>11 a</td>
                <td>Idadi ya watoto waliohudhuria ndani ya saa 48</td>
                <td><?= $RF20 = App\Mtoto_view::where([['hudhurio', 'Hudhurio la kwanza'], ['jinsia', 'Mvulana']])->count();?></td>
                <td><?= $RFover = App\Mtoto_view::where([['hudhurio', 'Hudhurio la kwanza'], ['jinsia', 'Msichana']])->count();?></td>
                <td><?= $RF20 + $RFover ?></td>
            </tr>
            <tr>
                <td>11 b</td>
                <td>Idadi ya watoto waliohudhuria kati ya siku ya 3-7</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><b>Jumla waliohudhuria ndani ya siku 7</b></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>11 c</td>
                <td>Waliomaliza mahudhurio yote<br>(saa 48, siku 3-7, siku 8-28, siku 29)</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <a href='/postnatal/print'>Print</a>
</body>

</html>