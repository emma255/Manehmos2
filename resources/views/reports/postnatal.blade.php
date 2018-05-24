<!DOCTYPE html>
<html>

<body>
    <h3>TAARIFA YA MWEZI MTOTO NA MAMA BAADA YA KUJIFUNGUA</h3>
    <div>
        <label for="">Jina la kituo:</label>
        <label for=""><?=App\User::where('name',Auth::user()->name)->value('center'); ?>
        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="">Wilaya:</label> <label for="">kfjkfsfk</label>
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
                <td>
                    <?= $yearRecord=App\Register13::whereYear('tarehe_ya_hudhurio',request('year'))->get();
                    ?>
                </td>
                <td> 4</td>
                <td>X</td>
            </tr>
            <tr>
                <td>1 b</td>
                <td>Waliohudhuria kati ya siku 3-7</td>
                <td>Win 95+</td>
                <td>5</td>
                <td>C</td>
            </tr>
            <tr>
                <td></td>
                <td><b>Jumla waliohudhuria ndani ya siku 7</b></td>
                <td>Win 95+</td>
                <td>5.5</td>
                <td>A</td>
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
                <td>Win 95+</td>
                <td>5.5</td>
                <td>A</td>
            </tr>
            <tr>
                <td>4</td>
                <td>waliopata matatizo ya akili</td>
                <td>Win 95+</td>
                <td>5.5</td>
                <td>A</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Waliopata vitamin A</td>
                <td>Win 95+</td>
                <td>5.5</td>
                <td>A</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Wenye msamba ulioambukizwa / ulioachia</td>
                <td>Win 95+</td>
                <td>5.5</td>
                <td>A</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Wenye fistula</td>
                <td>-</td>
                <td>-</td>
                <td>U</td>
            </tr>
            <tr>
                <td>8</td>
                <td><b>Waliojifungulia nje ya kituo cha kutolea huduma za afya</b></td>
            </tr>
            <tr>
                <td>8 a</td>
                <td>Waliojifungua kabla ya kufika<br>kwenye kituo cha kutolea huduma za afya</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>8 b</td>
                <td>Waliojifungulia kwa wakunga wa jadi</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>8 c</td>
                <td>Waliojifungulia nyumbani</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td>9</td>
                <td><b>Uzazi wa mpango</b></td>
            </tr>
            <tr>
                <td>9 a</td>
                <td>Idadi ya wateja waliopata ushauri nasaha mara moja</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>9 b</td>
                <td>Amepata njia ya Uzazi wa mpango wakati wa hudhurio la postnatal</td>
                <td></td>
                <td></td>
                <td></td>
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
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>10</td>
                <td><b>PMTCT</b></td>
            </tr>
            <tr>
                <td>10 a</td>
                <td>Waliokuja postnatal wakiwa positive</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>10 b</td>
                <td>Waliopima VVU wakati wa postnatal <br>(Ndani ya siku 42 tangu siku ya kujifungua)</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>10 c</td>
                <td>Waliogundulika wana VVU wakati wa postnatal<br>(Ndani ya siku 42 tangu ya kujifungua)</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>10 d</td>
                <td>Wenye VVU waliochagua kunyonyesha maziwa ya mama pekee (EBF)</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>10 e</td>
                <td>Wenye VVU waliochagua kunywesha maziwa mbadala (RF)</td>
                <td></td>
                <td></td>
                <td></td>
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
                <td></td>
                <td></td>
                <td></td>
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