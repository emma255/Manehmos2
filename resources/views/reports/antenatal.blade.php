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
            <tr>
                <td>1</td>
                <td> <b>Idadi ya wajawazito waliotegemewa</b> </td>
                <td></td>
                <td></td>
                <td></td>
        </tbody>
        </tr>

        <tr>
            <td>2</td>
            <td><b>Hudhurio la kwanza</b></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>2 a</td>
            <td>Umri wa mimba chini ya wiki 12</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>2 b</td>
            <td>Umri wa mimba wiki 12 au zaidi</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td> <i>Jumla ya hudhurio la kwanza (2a + 2b)</i> </td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>2 c</td>
            <td>Wateja wa marudio</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>2 d</td>
            <td>Hudhurio la nne wajawazito wote</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td><i>Jumla ya mahudhurio yote (2c + 2d)</i></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>2 e</td>
            <td>Idadi ya wajawazito waliopima damu hudhurio la kwanza</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Wajawazito waliopata chanjo ya TT2+</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td><b>Vidokezo vya hatari</b></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 a</td>
            <td>Mimba zaidi ya 4</td>
            <td style="background: black"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 b</td>
            <td>Umri chini ya miaka 20</td>
            <td></td>
            <td style="background: black"></td>
            <td></td>
        </tr>
        <tr>
            <td>4 c</td>
            <td>Umri zaidi ya miaka 35 kwa mimba ya kwanza</td>
            <td style="background: black"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 d</td>
            <td>upungufu mkubwa wa damu
                < 8.5 g/dl- Anaemia hudhurio la kwanza </td>
                    <td></td>
                    <td></td>
                    <td></td>
        </tr>
        <tr>
            <td>4 e</td>
            <td>Shinikizo la damu (BP=140/90mmHg) au zaidi </td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 f</td>
            <td>Kifua kikuu</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 g</td>
            <td>Sukari kwenye mkojo</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 h</td>
            <td>Protein kwenye mkojo</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 i</td>
            <td>Waliopima kaswende</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 j</td>
            <td>Waliogundulika na maambukizi ya kaswende</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 k</td>
            <td>Waliopata matibabu ya kaswende</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 l</td>
            <td>Wenza au waume waliopima kaswende</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 m</td>
            <td>Wenza au waume waliogundulika na maambukizi ya kaswende</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 n</td>
            <td>Wenza au waume Waliopata matibabu ya kaswende</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 o</td>
            <td>Waliopatikana na magonjwa ya maambukizo ya ngono yasiyo kaswende</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 p</td>
            <td>Waliopata tiba sahihi ya magonjwa ya maambukizo ya ngono yasiyo kaswende</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 q</td>
            <td>Wenza au waume waliopatikana na magonjwa ya maambukizo ya ngono yasiyo kaswende</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4 r</td>
            <td>Wenza au waume waliopata tiba sahihi ya magonjwa ya maambukizo ya ngono yasiyo kaswende</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td><b>PMTCT</b></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 a</td>
            <td>Tayari wana maambukizi ya VVU kabla ya kuanza kliniki</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 b</td>
            <td>Wajawazito wote waliopata ushauri nasaha kabla ya kupima VVU kliniki</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 c</td>
            <td>Wajawazito waliopima VVU kipimo cha kwanza kliniki</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 d</td>
            <td>Wajawazito waliokutwa na VVU (Positive) kipimo cha kwanza</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 e</td>
            <td>Wajawazito waliokutwa na VVU (Positive) kipimo cha kwanza walio chini ya umri wa miaka 25</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 f</td>
            <td>Wajawazito waliopata ushauri baada ya kupima</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 g</td>
            <td>Wajawazito waliopima VVU na wenza wao ka pamoja (couple) katika kliniki ya wajawazito</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 h</td>
            <td>Wajawazito waliopima VVU kipimo cha pili</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 i</td>
            <td>Wajawazito waliokutwa na maambukizi ya VVU kipimo cha pili</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 j</td>
            <td>Wenza waliopima VVU kipimo cha kwanza kliniki ya wajawazito</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 k</td>
            <td>Wenza waliogundulika kuwa na maambukizi ya VVU kipimo cha kwanza katika kliniki ya wajawazito</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 l</td>
            <td>Wenza waliopima VVU kipimo cha pili kliniki ya wajawazito</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 m</td>
            <td>Wenza waliogundulika kuwa na maambukizi ya VVU kipimo cha pili katika kliniki ya wajawazito</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 n</td>
            <td>Wajawazito na wenza waliopata majibu tofauti (discordant) baada ya kupima VVU kliniki ya wajawazito</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 o</td>
            <td>Waliopata ushauri juu ya ulishaji wa mtoto</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5 p</td>
            <td>Wajawazito waliopima VVU kipimo cha kwanza walio chini ya umri wa miaka 25</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6</td>
            <td><b>Malaria</b></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6 a</td>
            <td>Waliopewa LLIN</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6 b</td>
            <td>Waliopima malaria kutumia mRDT/BS</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6 c</td>
            <td>Waliopima malaria Positive</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6 d</td>
            <td>Waliopewa IPT2</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6 e</td>
            <td>Waliopewa IPT3</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td><b>Huduma nyingine</b></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>7</td>
            <td>Waliopewa Iron/Folic (I,F,FA) vidonge vya kutosha mpaka hudhurio linalofuata</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>8</td>
            <td>Waliopewa dawa za minyoo (Albendazole/Mebendazole)</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>9</td>
            <td>Waliopewa rufaa wakati wa ujauzito</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>10</td>
            <td>Waliopewa rufaa kwenda CTC</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
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