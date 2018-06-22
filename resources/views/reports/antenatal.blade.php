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

    <h3>TAARIFA YA MWEZI TOKA KLINIKI (ANC)</h3>
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
                <th>Jumla</th>
            </tr>
        </thead>
        <tbody>
            {{-- <tr>
                <td>1</td>
                <td>Idadi ya wajawazito waliotegemewa</td>
                <td></td>
                <td></td>
                <td></td>
        </tr> --}}

        <tr>
            <td>1</td>
            <td><b>Hudhurio la kwanza</b></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>1 a</td>
            <td>Umri wa mimba chini ya wiki 12</td>
            <td>{{$wikia = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['umri_mimba','<','84'],['hudhurio','Hudhurio la kwanza'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$wikib = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['umri_mimba','<','84'],['hudhurio','Hudhurio la kwanza'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$total1 = $wikia + $wikib}} </td>
        </tr>
        <tr>
            <td>1 b</td>
            <td>Umri wa mimba wiki 12 au zaidi</td>
            <td>{{$wikic = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['umri_mimba','>=','84'],['hudhurio','Hudhurio la kwanza'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$wikid = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['umri_mimba','>=','84'],['hudhurio','Hudhurio la kwanza'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$total2 = $wikic + $wikid}} </td>
        </tr>
        <tr>
            <td></td>
            <td> <i>Jumla ya hudhurio la kwanza (2a + 2b)</i> </td>
            <td>{{$wikia + $wikic}} </td>
            <td>{{$wikib + $wikid}} </td>
            <td>{{$total1 + $total2}} </td>
        </tr>
        <tr>
            <td>1 c</td>
            <td>Wateja wa marudio</td>
            <td>{{$rudioc = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['hudhurio','Hudhurio la pili'],['hudhurio','Hudhurio la tatu'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$rudiod = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['hudhurio','Hudhurio la pili'],['hudhurio','Hudhurio la tatu'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$totalrudio = $rudioc + $rudiod}} </td>
        </tr>

        <tr>
            <td>1 d</td>
            <td>Hudhurio la nne wajawazito wote</td>
            <td>{{$nnec = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['hudhurio','Hudhurio la nne'],['umri', '<','7305 ']])->count() }}</td>
            <td>{{$nned = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['hudhurio','Hudhurio la nne'],['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$totalnne = $nnec + $nned}} </td>
        </tr>
        <tr>
            <td></td>
            <td><i>Jumla ya mahudhurio yote (2c + 2d)</i></td>
            <td>{{$rudioc + $nnec}} </td>
            <td>{{$nned + $rudiod}} </td>
            <td>{{$totalnne + $totalrudio}} </td>
        </tr>
        {{-- <tr>
            <td>1 e</td>
            <td>Idadi ya wajawazito waliopima damu hudhurio la kwanza</td>
            <td></td>
            <td></td>
            <td></td>
        </tr> --}}
        <tr>
            <td>2</td>
            <td>Wajawazito waliopata chanjo ya TT2+</td>
            <td>{{$nnec = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['TT','!=','TT1'],['umri', '<','7305 ']])->count() }}</td>
            <td>{{$nned = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['TT','!=','TT1'],['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$totalnne = $nnec + $nned}} </td>
        </tr>
        </tr>
        <tr>
            <td>3</td>
            <td><b>Vidokezo vya hatari</b></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>3 a</td>
            <td>Mimba zaidi ya 4</td>
            <td style="background: gray"></td>
            <td>{{$mimba = App\RegisterMaternal::whereyear('tarehe_ya_kuandikishwa', request('year'))->wheremonth('tarehe_ya_kuandikishwa', request('month'))->where('mimba_ngapi', '>', '3')->count()}}</td>
            <td>{{$mimba}}</td>
        </tr>
        <tr>
            <td>3 b</td>
            <td>Umri chini ya miaka 20</td>
            <td>{{$chini = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where('umri', '<','7305 ')->count()}}</td>
            <td style="background: gray"></td>
            <td>{{$chini}}</td>
        </tr>
        <tr>
            <td>3 c</td>
            <td>Umri zaidi ya miaka 35 kwa mimba ya kwanza</td>
            <td style="background: gray"></td>
            <td>{{$zaidi = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mimba_ngapi', '1'], ['umri', '>','12779 ']])->count() }}</td>
            <td>{{$zaidi}} </td>
        </tr>
        <tr>
            <td>3 d</td>
            <td>upungufu mkubwa wa damu < 8.5 g/dl- Anaemia hudhurio la kwanza </td>
            <td>{{$zaidia = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['damu_HB','<','8.5'], ['umri', '<','7305 '],['hudhurio','Hudhurio la kwanza']])->count() }}</td>
            <td>{{$zaidie = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['damu_HB','<','8.5'], ['umri', '>=','7305 '],['hudhurio','Hudhurio la kwanza']])->count() }}</td>
            <td>{{$zaidia + $zaidie}} </td>
        </tr>
        <tr>
            <td>3 e</td>
            <td>Shinikizo la damu (BP=140/90mmHg) au zaidi </td>
            <td>{{$bpa = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['BP','<','140/90'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$bpb = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['BP','<','140/90'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$bpa + $bpb}} </td>
        </tr>
        {{-- <tr>
            <td>3 f</td>
            <td>Kifua kikuu</td>
            <td></td>
            <td></td>
            <td></td>
        </tr> --}}
        <tr>
            <td>3 f</td>
            <td>Sukari kwenye mkojo</td>
            <td>{{$sugara = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['sukari_kwenye_mkojo','ndio'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$sugarb = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['sukari_kwenye_mkojo','ndio'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$sugara + $sugarb}} </td>
        </tr>
        <tr>
            <td>3 g</td>
            <td>Protein kwenye mkojo</td>
            <td>{{$prota = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['Protenuria','ndio'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$protb = App\Vidokezo_hatari::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['Protenuria','ndio'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$prota + $protb}} </td>
        </tr>
        <tr>
            <td>3 h</td>
            <td>Waliopima kaswende</td>
            <td>{{$pimaka = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kaswende_mke','!=','null'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$pimakb = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kaswende_mke','!=','null'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$pimaka + $pimakb}} </td>
        </tr>
        <tr>
            <td>3 i</td>
            <td>Waliogundulika na maambukizi ya kaswende</td>
            <td>{{$maka = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kaswende_mke','Positive'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$makb = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kaswende_mke','Positive'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$maka + $makb}} </td>
        </tr>
        <tr>
            <td>3 j</td>
            <td>Waliopata matibabu ya kaswende</td>
            <td>{{$tibaka = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kaswende_mke','Positive'],['mke_ametibiwa_kaswende','ndio'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$tibakb = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kaswende_mke','Positive'],['mke_ametibiwa_kaswende','ndio'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$tibaka + $tibakb}} </td>
        </tr>
        <tr>
            <td>3 k</td>
            <td>Wenza au waume waliopima kaswende</td>
            <td>{{$mena = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kaswende_mume','!=','null'], ['umri', '<','7305']])->count() }}</td>
            <td>{{$menb = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kaswende_mume','!=','null'], ['umri', '>=','7305']])->count() }}</td>
            <td>{{$mena + $menb }}</td>
        </tr>
        <tr>
            <td>3 l</td>
            <td>Wenza au waume waliogundulika na maambukizi ya kaswende</td>
            <td>{{$menpa = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kaswende_mume','Positive'], ['umri', '<','7305']])->count() }}</td>
            <td>{{$menpb = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kaswende_mume','Positive'], ['umri', '>=','7305']])->count() }}</td>
            <td>{{$menpa + $menpb }}</td>
        </tr>
        <tr>
            <td>3 m</td>
            <td>Wenza au waume Waliopata matibabu ya kaswende</td>
            <td>{{$menta = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kaswende_mume','Positive'],['mume_ametibiwa_kaswende','ndio'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$mentb = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['kaswende_mume','Positive'],['mume_ametibiwa_kaswende','ndio'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$menta + $mentb}} </td>
        </tr>
        <tr>
            <td>3 n</td>
            <td>Waliopatikana na magonjwa ya maambukizo ya ngono yasiyo kaswende</td>
            <td>{{$stda = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['matokeo_stds_mke','Positive'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$stdb = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['matokeo_stds_mke','Positive'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$stda + $stdb}} </td>
        </tr>
        <tr>
            <td>3 o</td>
            <td>Waliopata tiba sahihi ya magonjwa ya maambukizo ya ngono yasiyo kaswende</td>
            <td>{{$tibastda = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['matokeo_stds_mke','Positive'],['mke_ametibiwa','ndio'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$tibastdb = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['matokeo_stds_mke','Positive'],['mke_ametibiwa','ndio'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$tibastda + $tibastdb}} </td>
        </tr>
        <tr>
            <td>3 p</td>
            <td>Wenza au waume waliopatikana na magonjwa ya maambukizo ya ngono yasiyo kaswende</td>
            <td>{{$mentokaa = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['matokeo_stds_mume','Positive'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$mentokab = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['matokeo_stds_mume','Positive'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$mentokaa + $mentokab}} </td>
        </tr>
        <tr>
            <td>3 q</td>
            <td>Wenza au waume waliopata tiba sahihi ya magonjwa ya maambukizo ya ngono yasiyo kaswende</td>
            <td>{{$menotkatibaa = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['matokeo_stds_mume','Positive'],['mume_ametibiwa','ndio'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$menotkatibab = App\Kaswende::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['matokeo_stds_mume','Positive'],['mume_ametibiwa','ndio'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$menotkatibaa + $menotkatibab}} </td>
        </tr>
        <tr>
            <td>4</td>
            <td><b>PMTCT</b></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 a</td>
            <td>Tayari wana maambukizi ya VVU kabla ya kuanza kliniki</td>
            <td>{{$VVUka = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_tayari_ana_VVU','Ndio'],['hudhurio','Hudhurio la kwanza'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$VVUkb = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_tayari_ana_VVU','Ndio'],['hudhurio','Hudhurio la kwanza'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$VVUka + $VVUkb}} </td>
        </tr>
        <tr>
            <td>4 b</td>
            <td>Wajawazito wote waliopata ushauri nasaha kabla ya kupima VVU kliniki</td>
            <td>{{$nasahaa = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_tarehe_ya_unasihi','!=','null'],['hudhurio','Hudhurio la kwanza'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$nasahab = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_tarehe_ya_unasihi','!=','null'],['hudhurio','Hudhurio la kwanza'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$nasahaa + $nasahab}} </td>
        </tr>
        <tr>
            <td>4 c</td>
            <td>Wajawazito waliopima VVU kipimo cha kwanza kliniki</td>
            <td>{{$kwanzaa = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_kipimo_aina','Kipimo 1'],['mke_amepima_VVU','Ndio'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$kwanzab = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_kipimo_aina','Kipimo 1'],['mke_amepima_VVU','Ndio'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$kwanzaa + $kwanzab}} </td>
        </tr>
        <tr>
            <td>4 d</td>
            <td>Wajawazito waliokutwa na VVU (Positive) kipimo cha kwanza</td>
            <td>{{$tokeo1a = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_kipimo_aina','Kipimo 1'],['mke_amepima_VVU','Ndio'],['mke_kipimo1_VVU','Positive'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$tokeo1b = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_kipimo_aina','Kipimo 1'],['mke_amepima_VVU','Ndio'],['mke_kipimo1_VVU','Positive'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$tokeo1a + $tokeo1b}} </td>
        </tr>
        <tr>
            <td>4 e</td>
            <td>Wajawazito waliokutwa na VVU (Positive) kipimo cha kwanza walio chini ya umri wa miaka 25</td>
            <td>{{$under25a = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_kipimo_aina','Kipimo 1'],['mke_amepima_VVU','Ndio'],['mke_kipimo1_VVU','Positive'], ['umri', '<','7305 '], ['umri', '<','9126']])->count() }}</td>
            <td>{{$under25b = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_kipimo_aina','Kipimo 1'],['mke_amepima_VVU','Ndio'],['mke_kipimo1_VVU','Positive'], ['umri', '>=','7305 '], ['umri', '<','9126']])->count() }}</td>
            <td>{{$under25a + $under25b}} </td>
        </tr>
        <tr>
            <td>4 f</td>
            <td>Wajawazito waliopata ushauri baada ya kupima</td>
            <td>{{$nasahabaadaa = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_kipimo_aina','Kipimo 1'],['mke_amepima_VVU','Ndio'],['mke_unasihi_baada_ya_kipimo_1','Ndio'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$nasahabaadab = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_kipimo_aina','Kipimo 1'],['mke_amepima_VVU','Ndio'],['mke_unasihi_baada_ya_kipimo_1','Ndio'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$nasahabaadaa + $nasahabaadab}} </td>
        </tr>
        <tr>
            <td>4 g</td>
            <td>Wajawazito waliopima VVU na wenza wao kwa pamoja (couple) katika kliniki ya wajawazito</td>
            <td>{{$couplea = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_kipimo_aina','Kipimo 1'],['mke_amepima_VVU','Ndio'],['mume_amepima_VVU','Ndio'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$coupleb = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_kipimo_aina','Kipimo 1'],['mke_amepima_VVU','Ndio'],['mume_amepima_VVU','Ndio'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$couplea + $coupleb}} </td>
        </tr>
        <tr>
            <td>4 h</td>
            <td>Wajawazito waliopima VVU kipimo cha pili</td>
            <td>{{$pilia = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_kipimo_aina','Kipimo 2'],['mke_amepima_VVU','Ndio'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$pilib = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_kipimo_aina','Kipimo 2'],['mke_amepima_VVU','Ndio'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$pilia + $pilib}} </td>
        </tr>
        <tr>
            <td>4 i</td>
            <td>Wajawazito waliokutwa na maambukizi ya VVU kipimo cha pili</td>
            <td>{{$under25a = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_kipimo_aina','Kipimo 2'],['mke_amepima_VVU','Ndio'],['mke_kipimo1_VVU','Positive'], ['umri', '<','7305 '], ['umri', '<','9126']])->count() }}</td>
            <td>{{$under25b = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_kipimo_aina','Kipimo 2'],['mke_amepima_VVU','Ndio'],['mke_kipimo1_VVU','Positive'], ['umri', '>=','7305 '], ['umri', '<','9126']])->count() }}</td>
            <td>{{$under25a + $under25b}} </td>
        </tr>
        <tr>
            <td>4 j</td>
            <td>Wenza waliopima VVU kipimo cha kwanza kliniki ya wajawazito</td>
            <td>{{$kwanzaa = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mume_kipimo_aina','Kipimo 1'],['mume_amepima_VVU','Ndio'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$kwanzab = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mume_kipimo_aina','Kipimo 1'],['mume_amepima_VVU','Ndio'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$kwanzaa + $kwanzab}} </td>
        </tr>
        <tr>
            <td>4 k</td>
            <td>Wenza waliogundulika kuwa na maambukizi ya VVU kipimo cha kwanza katika kliniki ya wajawazito</td>
            <td>{{$tokeo1a = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mume_kipimo_aina','Kipimo 1'],['mume_amepima_VVU','Ndio'],['mume_kipimo1_VVU','Positive'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$tokeo1b = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mume_kipimo_aina','Kipimo 1'],['mume_amepima_VVU','Ndio'],['mume_kipimo1_VVU','Positive'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$tokeo1a + $tokeo1b}} </td>
        </tr>
        <tr>
            <td>4 l</td>
            <td>Wenza waliopima VVU kipimo cha pili kliniki ya wajawazito</td>
            <td>{{$pilia = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mume_kipimo_aina','Kipimo 2'],['mume_amepima_VVU','Ndio'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$pilib = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mume_kipimo_aina','Kipimo 2'],['mume_amepima_VVU','Ndio'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$pilia + $pilib}} </td>
        </tr>
        <tr>
            <td>4 m</td>
            <td>Wenza waliogundulika kuwa na maambukizi ya VVU kipimo cha pili katika kliniki ya wajawazito</td>
            <td>{{$under25a = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mume_kipimo_aina','Kipimo 2'],['mume_amepima_VVU','Ndio'],['mume_kipimo1_VVU','Positive'], ['umri', '<','7305 '], ['umri', '<','9126']])->count() }}</td>
            <td>{{$under25b = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mume_kipimo_aina','Kipimo 2'],['mume_amepima_VVU','Ndio'],['mume_kipimo1_VVU','Positive'], ['umri', '>=','7305 '], ['umri', '<','9126']])->count() }}</td>
            <td>{{$under25a + $under25b}} </td>
        </tr>
        <tr>
            <td>4 n</td>
            <td>Wajawazito na wenza waliopata majibu tofauti (discordant) baada ya kupima VVU kliniki ya wajawazito</td>
            <td>{{$couplea = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mume_kipimo1_VVU','!=','mke_kipimo1_VVU'],['mume_amepima_VVU','Ndio'],['mke_amepima_VVU','Ndio'], ['umri', '<','7305 ']])->count() }}</td>
            <td>{{$coupleb = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mume_kipimo1_VVU','!=','mke_kipimo1_VVU'],['mume_amepima_VVU','Ndio'],['mke_amepima_VVU','Ndio'], ['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$couplea + $coupleb}} </td>
        </tr>
        {{-- <tr>
            <td>4 o</td>
            <td>Waliopata ushauri juu ya ulishaji wa mtoto</td>
            <td></td>
            <td></td>
            <td></td>
        </tr> --}}
        <tr>
            <td>4 o</td>
            <td>Wajawazito waliopima VVU kipimo cha kwanza walio chini ya umri wa miaka 25</td>
            <td>{{$under25a = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_kipimo_aina','Kipimo 1'],['mke_amepima_VVU','Ndio'],['umri', '<','7305 '], ['umri', '<','9126']])->count() }}</td>
            <td>{{$under25b = App\Antenatal_pmtct::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mke_kipimo_aina','Kipimo 1'],['mke_amepima_VVU','Ndio'],['umri', '>=','7305 '], ['umri', '<','9126']])->count() }}</td>
            <td>{{$under25a + $under25b}} </td>
        </tr>
        <tr>
            <td>5</td>
            <td><b>Malaria</b></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 a</td>
            <td>Waliopewa LLIN</td>
            <td>{{$llina = App\Antenatal_malaria::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['llin','Ndio'],['umri', '<','7305 ']])->count() }}</td>
            <td>{{$llinb = App\Antenatal_malaria::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['llin','Ndio'],['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$llina + $llinb}} </td>
        </tr>
        <tr>
            <td>5 b</td>
            <td>Waliopima malaria kutumia mRDT/BS</td>
            <td>{{$mrdta = App\Antenatal_malaria::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mrdt_o_bs','!=','null'],['umri', '<','7305 ']])->count() }}</td>
            <td>{{$mrdtb = App\Antenatal_malaria::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mrdt_o_bs','!=','null'],['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$mrdta + $mrdtb}} </td>
        </tr>
        <tr>
            <td>5 c</td>
            <td>Waliopima malaria Positive</td>
            <td>{{$mrdtposa = App\Antenatal_malaria::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mrdt_o_bs','Positive'],['umri', '<','7305 ']])->count() }}</td>
            <td>{{$mrdtposb = App\Antenatal_malaria::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['mrdt_o_bs','Positive'],['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$mrdtposa + $mrdtposb}} </td>
        </tr>
        <tr>
            <td>5 d</td>
            <td>Waliopewa IPT2</td>
            <td>{{$ipt2a = App\Antenatal_malaria::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['ipt','IPT-2'],['umri', '<','7305 ']])->count() }}</td>
            <td>{{$ipt2b = App\Antenatal_malaria::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['ipt','IPT-2'],['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$ipt2a + $ipt2b}} </td>
        </tr>
        <tr>
            <td>5 e</td>
            <td>Waliopewa IPT3</td>
            <td>{{$ipt3a = App\Antenatal_malaria::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['ipt','IPT-3'],['umri', '<','7305 ']])->count() }}</td>
            <td>{{$ipt3b = App\Antenatal_malaria::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['ipt','IPT-3'],['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$ipt3a + $ipt3b}} </td>
        </tr>
        <tr>
            <td></td>
            <td><b>Huduma nyingine</b></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6</td>
            <td>Waliopewa Iron/Folic (I,F,FA) vidonge vya kutosha mpaka hudhurio linalofuata</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>7</td>
            <td>Waliopewa dawa za minyoo (Albendazole/Mebendazole)</td>
            <td>{{$mebea = App\Antenatal_malaria::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['albendazole_mebendazole','Ndio'],['umri', '<','7305 ']])->count() }}</td>
            <td>{{$mebeb = App\Antenatal_malaria::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['albendazole_mebendazole','Ndio'],['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$mebea + $mebeb}} </td>
        </tr>
        <tr>
            <td>8</td>
            <td>Waliopewa rufaa wakati wa ujauzito</td>
            <td>{{$ipt3a = App\Antenatal_malaria::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['rufaa_alikopelekwa','!=','-'],['umri', '<','7305 ']])->count() }}</td>
            <td>{{$ipt3b = App\Antenatal_malaria::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['rufaa_alikopelekwa','!=','-'],['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$ipt3a + $ipt3b}} </td>
        </tr>
        <tr>
            <td>9</td>
            <td>Waliopewa rufaa kwenda CTC</td>
            <td>{{$ctca = App\Antenatal_malaria::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['rufaa_alikopelekwa','!=','-'],['sababu_ya_rufaa','ctc'],['umri', '<','7305 ']])->count() }}</td>
            <td>{{$ctcb = App\Antenatal_malaria::whereyear('tarehe_ya_hudhurio', request('year'))->wheremonth('tarehe_ya_hudhurio', request('month'))->where([['rufaa_alikopelekwa','!=','-'],['sababu_ya_rufaa','ctc'],['umri', '>=','7305 ']])->count() }}</td>
            <td>{{$ctca + $ctcb}} </td>
        </tr>
        </tbody>
    </table>
    <br>
    <div>
        <label for="jina_la_mtayarishaji">Mtayarishaji wa Ripoti</label>
        <u>{{Auth::user()->name}}</u>
        <label for="cheo">Cheo</label>......................................Wadhifa.......................
    </div>
    <br>
    <div>
        <label for="sahihi">Sahihi</label>...............................................
        <label for="tarehe">Tarehe ya kuandaa:</label>
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
</body>

</html>