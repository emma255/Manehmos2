<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <title>Manehmos</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 67%;
            margin: 0 auto 0 auto;
        }

        th,
        tr,
        td {
            text-align: center;
            border-color: gray;
            border-style: solid;
            border-width: 1px;
        }
    </style>


</head>

<body>


    <table>
        <tr>
            <td class="HeaderForm">RIPOTI YA MWEZI YA UFUATILIAJI WA WATOTO.</td>
            <!--<td class="HeaderForm" >
        <table border="0">
            <tr><td colspan="2" align ="center">&nbsp; Tools issue form n° &lt;Number&gt;</td></tr>
            <tr><td align ="right">Store :</td><td align ="left">&lt;Property.Description&gt;</td></tr>
        </table>
        </td>/-->
        </tr>
    </table>

    <form>
        <table>
            <tr bgcolor="Gray">
                <td>Na.</td>
                <td><b>Maelezo</b></td>
                <td></td>
                <td colspan="3"><b>Idadi</b></td>
            </tr>
            <tr bgcolor="Gray">
                <td></td>
                <td></td>
                <td></td>
                <td><b>ME</b></td>
                <td><b>KE</b></td>
                <td><b>Jumla</b></td>
            </tr>

            <tr>
                <td id="code">1</td>
                <td id="item">Idadi ya watoto walioandikishwa na kupewa vyeti vya kuzaliwa</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit" onkeyup="add_it('unit', 'price', 'total');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price" onkeyup="add_it('unit', 'price', 'total');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total"></td>
            </tr>

            <tr bgcolor="Gray">
                <td id="code">2</td>
                <td id="item"><b>Aina ya Chanjo kwa Umri</b></td>
                <td id="qty"></td>
                <td style="overflow: hidden;"></td>
                <td class="ValueForm"></td>
                <td> </td>
            </tr>

            <tr>
                <td id="code">2a</td>
                <td id="item">BCG Umri mwaka &lt;1</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit1" onkeyup="add_it('unit1', 'price1', 'total1');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price1" onkeyup="add_it('unit1', 'price1', 'total1');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total1"></td>

            </tr>

            <tr>
                <td id="code">2b</td>
                <td id="item">BCG Umri mwaka 1+</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit2" onkeyup="add_it('unit2', 'price2', 'total2');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price2" onkeyup="add_it('unit2', 'price2', 'total2');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total2"></td>
            </tr>

            <tr>
                <td id="code">2c</td>
                <td id="item">Polio Umri mwaka &lt;1</td>
                <td id="qty">Dozi 0</td>

                <td style="overflow: hidden;"> <input id="unit3" onkeyup="add_it('unit3', 'price3', 'total3');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price3" onkeyup="add_it('unit3', 'price3', 'total3');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total3"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">Dozi 1</td>
                <td style="overflow: hidden;"> <input id="unit4" onkeyup="add_it('unit4', 'price4', 'total4');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price4" onkeyup="add_it('unit4', 'price4', 'total4');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total4"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">Dozi 2</td>
                <td style="overflow: hidden;"> <input id="unit5" onkeyup="add_it('unit5', 'price5', 'total5');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price5" onkeyup="add_it('unit5', 'price5', 'total5');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total5"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">Dozi 3</td>
                <td style="overflow: hidden;"> <input id="unit6" onkeyup="add_it('unit6', 'price6', 'total6');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price6" onkeyup="add_it('unit6', 'price6', 'total6');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total6"></td>
            </tr>

            <tr>
                <td id="code">2d</td>
                <td id="item">Polio Umri mwaka 1+</td>
                <td id="qty">Dozi 1</td>
                <td style="overflow: hidden;"> <input id="unit7" onkeyup="add_it('unit7', 'price7', 'total7');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price7" onkeyup="add_it('unit7', 'price7', 'total7');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total7"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">Dozi 2</td>
                <td style="overflow: hidden;"> <input id="unit8" onkeyup="add_it('unit8', 'price8', 'total8');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price8" onkeyup="add_it('unit8', 'price8', 'total8');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total8"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">Dozi 3</td>
                <td style="overflow: hidden;"> <input id="unit9" onkeyup="add_it('unit9', 'price9', 'total9');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price9" onkeyup="add_it('unit9', 'price9', 'total9');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total9"></td>
            </tr>


            <tr>
                <td id="code">2e</td>
                <td id="item">Polio ya sindano ya Miezi 18</td>
                <td id="qty">Dozi 1</td>
                <td style="overflow: hidden;"> <input id="unit10" onkeyup="add_it('unit10', 'price10', 'total10');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price10" onkeyup="add_it('unit10', 'price10', 'total10');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total10"></td>
            </tr>

            <tr>
                <td id="code">2f</td>
                <td id="item">Rota umri wiki 6 hadi 15 </td>
                <td id="qty">Dozi 1</td>
                <td style="overflow: hidden;"> <input id="unit11" onkeyup="add_it('unit11', 'price11', 'total11');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price11" onkeyup="add_it('unit11', 'price11', 'total11');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total11"></td>
            </tr>

            <tr>
                <td id="code">2g</td>
                <td id="item">Rota umri wiki 10 hadi 32</td>
                <td id="qty">Dozi 2</td>
                <td style="overflow: hidden;"> <input id="unit12" onkeyup="add_it('unit12', 'price12', 'total12');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price12" onkeyup="add_it('unit12', 'price12', 'total12');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total12"></td>
            </tr>

            <tr>
                <td id="code">2h</td>
                <td id="item">PENTA Umri mwaka
                    <1</td>
                        <td id="qty">Dozi 1</td>
                        <td style="overflow: hidden;"> <input id="unit13" onkeyup="add_it('unit13', 'price13', 'total13');" style="width: 70px; heigth: 70px; border-width: 0;"
                                type="text" name="" value=""> </td>
                        <td class="ValueForm"> <input id="price13" onkeyup="add_it('unit13', 'price13', 'total13');" style="width: 70px; heigth: 70px; border-width: 0;"
                                type="text" name="" value=""> </td>
                        <td class="ValueForm" id="total13"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">Dozi 2</td>
                <td style="overflow: hidden;"> <input id="unit14" onkeyup="add_it('unit14', 'price14', 'total14');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price14" onkeyup="add_it('unit14', 'price14', 'total14');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total14"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">Dozi 3</td>
                <td style="overflow: hidden;"> <input id="unit15" onkeyup="add_it('unit15', 'price15', 'total15');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price15" onkeyup="add_it('unit15', 'price15', 'total15');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total15"></td>
            </tr>

            <tr>
                <td id="code">2i</td>
                <td id="item">PENTA Umri mwaka 1+</td>
                <td id="qty">Dozi 1</td>
                <td style="overflow: hidden;"> <input id="unit16" onkeyup="add_it('unit16', 'price16', 'total16');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price16" onkeyup="add_it('unit16', 'price16', 'total16');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total16"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">Dozi 2</td>
                <td style="overflow: hidden;"> <input id="unit17" onkeyup="add_it('unit17', 'price17', 'total17');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price17" onkeyup="add_it('unit17', 'price17', 'total17');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total17"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">Dozi 3</td>
                <td style="overflow: hidden;"> <input id="unit18" onkeyup="add_it('unit18', 'price18', 'total18');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price18" onkeyup="add_it('unit18', 'price18', 'total18');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total18"></td>
            </tr>

            <tr>
                <td id="code">2j</td>
                <td id="item">Pneumococcal (PCV13)
                    <1</td>
                        <td id="qty">Dozi 1</td>
                        <td style="overflow: hidden;"> <input id="unit19" onkeyup="add_it('unit19', 'price19', 'total19');" style="width: 70px; heigth: 70px; border-width: 0;"
                                type="text" name="" value=""> </td>
                        <td class="ValueForm"> <input id="price19" onkeyup="add_it('unit19', 'price19', 'total19');" style="width: 70px; heigth: 70px; border-width: 0;"
                                type="text" name="" value=""> </td>
                        <td class="ValueForm" id="total19"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">Dozi 2</td>
                <td style="overflow: hidden;"> <input id="unit320" onkeyup="add_it('unit20', 'price20', 'total20');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price20" onkeyup="add_it('unit20', 'price20', 'total20');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total20"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">Dozi 3</td>
                <td style="overflow: hidden;"> <input id="unit21" onkeyup="add_it('unit21', 'price21', 'total21');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price21" onkeyup="add_it('unit21', 'price21', 'total21');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total21"></td>
            </tr>

            <tr>
                <td id="code">2k</td>
                <td id="item">Pneumococcal (PCV13) 1+</td>
                <td id="qty">Dozi 1</td>
                <td style="overflow: hidden;"> <input id="unit22" onkeyup="add_it('unit22', 'price22', 'total22');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price22" onkeyup="add_it('unit22', 'price22', 'total22');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total22"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">Dozi 2</td>
                <td style="overflow: hidden;"> <input id="unit23" onkeyup="add_it('unit23', 'price23', 'total23');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price23" onkeyup="add_it('unit23', 'price23', 'total23');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total23"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">Dozi 3</td>
                <td style="overflow: hidden;"> <input id="unit24" onkeyup="add_it('unit24', 'price24', 'total24');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price24" onkeyup="add_it('unit24', 'price24', 'total24');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total24"></td>
            </tr>

            <tr>
                <td id="code">2l</td>
                <td id="item">Surua/Rubella umri miezi 9</td>
                <td id="qty">Dozi 1</td>
                <td style="overflow: hidden;"> <input id="unit25" onkeyup="add_it('unit25', 'price25', 'total25');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price25" onkeyup="add_it('unit25', 'price25', 'total25');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total25"></td>
            </tr>

            <tr>
                <td id="code">2m</td>
                <td id="item">Surua/Rubella umri miezi 18</td>
                <td id="qty">Dozi 2</td>
                <td style="overflow: hidden;"> <input id="unit26" onkeyup="add_it('unit26', 'price26', 'total26');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price26" onkeyup="add_it('unit26', 'price26', 'total26');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total26"></td>
            </tr>

            <tr bgcolor="Gray">
                <td id="code">3</td>
                <td id="item"><b>Hali ya Chanjo ya Pepopunda kwa mama wakati wa kujifungua</b></td>
                <td id="qty"></td>
                <td style="overflow: hidden;"></td>
                <td class="ValueForm"></td>
                <td> </td>
            </tr>

            <tr>
                <td></td>
                <td><b>Idadi ya watoto walioandikishwa</b></td>
                <td></td>
                <td><b>ME</b></td>
                <td><b>KE</b></td>
                <td><b>Jumla</b></td>
            </tr>

            <tr>
                <td id="code">3a</td>
                <td id="item">waliokingwa</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit27" onkeyup="add_it('unit27', 'price27', 'total27');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price27" onkeyup="add_it('unit27', 'price27', 'total27');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total27"></td>
            </tr>

            <tr>
                <td id="code">3b</td>
                <td id="item">wasiokuwa na kinga</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit28" onkeyup="add_it('unit28', 'price28', 'total28');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price28" onkeyup="add_it('unit28', 'price28', 'total28');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total28"></td>
            </tr>

            <tr>
                <td id="code">3c</td>
                <td id="item">Haijulikani</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit29" onkeyup="add_it('unit29', 'price29', 'total29');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price29" onkeyup="add_it('unit29', 'price29', 'total29');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total29"></td>
            </tr>

            <tr bgcolor="Gray">
                <td id="code">4</td>
                <td id="item"><b>Mahudhurio ya uwiano wa uzito, umri na urefu;
                        Umri chini ya mwaka 1
                    </b></td>
                <td id="qty"></td>
                <td style="overflow: hidden;"></td>
                <td class="ValueForm"></td>
                <td> </td>
            </tr>

            <tr>
                <td></td>
                <td><b>Maelezo</b></td>
                <td></td>
                <td><b>ME</b></td>
                <td><b>KE</b></td>
                <td><b>Jumla</b></td>
            </tr>

            <tr>
                <td id="code">4a</td>
                <td id="item">Jumla ya Mahudhurio ya Watoto</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit30" onkeyup="add_it('unit30', 'price30', 'total28');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price30" onkeyup="add_it('unit30', 'price30', 'total30');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total30"></td>
            </tr>


            <tr>
                <td id="code">4b</td>
                <td id="item">Uwiano wa uzito kwa umri</td>
                <td id="qty">>80% au >-2SD</td>
                <td style="overflow: hidden;"> <input id="unit32" onkeyup="add_it('unit32', 'price32', 'total32');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price32" onkeyup="add_it('unit32', 'price32', 'total32');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total32"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">60%-80% au -2 hadi -3SD</td>
                <td style="overflow: hidden;"> <input id="unit33" onkeyup="add_it('unit33', 'price33', 'total33');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price33" onkeyup="add_it('unit33', 'price33', 'total33');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total33"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">
                    <60% au <-3SD</td>
                        <td style="overflow: hidden;"> <input id="unit34" onkeyup="add_it('unit34', 'price34', 'total34');" style="width: 70px; heigth: 70px; border-width: 0;"
                                type="text" name="" value=""> </td>
                        <td class="ValueForm"> <input id="price34" onkeyup="add_it('unit34', 'price34', 'total34');" style="width: 70px; heigth: 70px; border-width: 0;"
                                type="text" name="" value=""> </td>
                        <td class="ValueForm" id="total34"></td>
            </tr>


            <tr>
                <td id="code">4c</td>
                <td id="item">Uwiano wa uzito kwa urefu</td>
                <td id="qty">>-2SD</td>
                <td style="overflow: hidden;"> <input id="unit36" onkeyup="add_it('unit36', 'price36', 'total36');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price36" onkeyup="add_it('unit36', 'price36', 'total36');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total36"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">-2 hadi -3SD</td>
                <td style="overflow: hidden;"> <input id="unit37" onkeyup="add_it('unit37', 'price37', 'total37');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price37" onkeyup="add_it('unit37', 'price37', 'total37');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total37"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">
                    <-3SD</td>
                        <td style="overflow: hidden;"> <input id="unit38" onkeyup="add_it('unit38', 'price38', 'total38');" style="width: 70px; heigth: 70px; border-width: 0;"
                                type="text" name="" value=""> </td>
                        <td class="ValueForm"> <input id="price38" onkeyup="add_it('unit38', 'price38', 'total38');" style="width: 70px; heigth: 70px; border-width: 0;"
                                type="text" name="" value=""> </td>
                        <td class="ValueForm" id="total38"></td>
            </tr>


            <tr>
                <td id="code">4d</td>
                <td id="item">Uwiano wa urefu kwa umri</td>
                <td id="qty">>-2SD</td>
                <td style="overflow: hidden;"> <input id="unit40" onkeyup="add_it('unit40', 'price40', 'total40');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price40" onkeyup="add_it('unit40', 'price40', 'total40');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total40"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">-2 hadi -3SD</td>
                <td style="overflow: hidden;"> <input id="unit41" onkeyup="add_it('unit41', 'price41', 'total41');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price41" onkeyup="add_it('unit41', 'price41', 'total41');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total41"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">
                    <-3SD</td>
                        <td style="overflow: hidden;"> <input id="unit42" onkeyup="add_it('unit42', 'price42', 'total42');" style="width: 70px; heigth: 70px; border-width: 0;"
                                type="text" name="" value=""> </td>
                        <td class="ValueForm"> <input id="price42" onkeyup="add_it('unit42', 'price42', 'total42');" style="width: 70px; heigth: 70px; border-width: 0;"
                                type="text" name="" value=""> </td>
                        <td class="ValueForm" id="total42"></td>
            </tr>


            <tr bgcolor="Gray">
                <td id="code">5</td>
                <td id="item"><b>Mahudhurio ya uwiano wa uzito, umri na urefu;
                                                        Umri chini ya mwaka 1 mpaka 5
                                                    </b></td>
                <td id="qty"></td>
                <td style="overflow: hidden;"></td>
                <td class="ValueForm"></td>
                <td> </td>
            </tr>

            <tr>
                <td id="code">5a</td>
                <td id="item">Jumla ya Mahudhurio ya Watoto</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit43" onkeyup="add_it('unit43', 'price43', 'total43');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price43" onkeyup="add_it('unit43', 'price43', 'total43');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total43"></td>
            </tr>


            <tr>
                <td id="code">5b</td>
                <td id="item">Uwiano wa uzito kwa umri</td>
                <td id="qty">>80% au >-2SD</td>
                <td style="overflow: hidden;"> <input id="unit45" onkeyup="add_it('unit45', 'price45', 'total45');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price45" onkeyup="add_it('unit45', 'price45', 'total45');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total45"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">60%-80% au -2 hadi -3SD</td>
                <td style="overflow: hidden;"> <input id="unit46" onkeyup="add_it('unit46', 'price46', 'total46');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price46" onkeyup="add_it('unit46', 'price46', 'total46');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total46"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">
                    <60% au <-3SD</td>
                        <td style="overflow: hidden;"> <input id="unit47" onkeyup="add_it('unit47', 'price47', 'total47');" style="width: 70px; heigth: 70px; border-width: 0;"
                                type="text" name="" value=""> </td>
                        <td class="ValueForm"> <input id="price47" onkeyup="add_it('unit47', 'price47', 'total47');" style="width: 70px; heigth: 70px; border-width: 0;"
                                type="text" name="" value=""> </td>
                        <td class="ValueForm" id="total47"></td>
            </tr>

            <tr>
                <td id="code">5c</td>
                <td id="item">Uwiano wa uzito kwa urefu</td>
                <td id="qty">>-2SD</td>
                <td style="overflow: hidden;"> <input id="unit49" onkeyup="add_it('unit49', 'price49', 'total49');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price49" onkeyup="add_it('unit49', 'price49', 'total49');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total49"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">-2 hadi -3SD</td>
                <td style="overflow: hidden;"> <input id="unit50" onkeyup="add_it('unit50', 'price50', 'total50');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price50" onkeyup="add_it('unit50', 'price50', 'total50');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total50"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">
                    <-3SD</td>
                        <td style="overflow: hidden;"> <input id="unit51" onkeyup="add_it('unit51', 'price51', 'total51');" style="width: 70px; heigth: 70px; border-width: 0;"
                                type="text" name="" value=""> </td>
                        <td class="ValueForm"> <input id="price51" onkeyup="add_it('unit51', 'price51', 'total51');" style="width: 70px; heigth: 70px; border-width: 0;"
                                type="text" name="" value=""> </td>
                        <td class="ValueForm" id="total51"></td>
            </tr>



            <tr>
                <td id="code">5d</td>
                <td id="item">Uwiano wa urefu kwa umri</td>
                <td id="qty">>-2SD</td>
                <td style="overflow: hidden;"> <input id="unit53" onkeyup="add_it('unit53', 'price53', 'total53');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price53" onkeyup="add_it('unit53', 'price53', 'total53');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total53"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">-2 hadi -3SD</td>
                <td style="overflow: hidden;"> <input id="unit54" onkeyup="add_it('unit54', 'price54', 'total54');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price54" onkeyup="add_it('unit54', 'price54', 'total54');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total54"></td>
            </tr>

            <tr>
                <td id="code"></td>
                <td id="item"></td>
                <td id="qty">
                    <-3SD</td>
                        <td style="overflow: hidden;"> <input id="unit55" onkeyup="add_it('unit55', 'price55', 'total55');" style="width: 70px; heigth: 70px; border-width: 0;"
                                type="text" name="" value=""> </td>
                        <td class="ValueForm"> <input id="price55" onkeyup="add_it('unit55', 'price55', 'total55');" style="width: 70px; heigth: 70px; border-width: 0;"
                                type="text" name="" value=""> </td>
                        <td class="ValueForm" id="total55"></td>
            </tr>

            <tr>
                <td id="code">6</td>
                <td id="item"><b>Nyongeza ya vitamini A</b></td>
                <td id="qty"></td>
                <td style="overflow: hidden;"></td>
                <td class="ValueForm"></td>
                <td> </td>
            </tr>

            <tr bgcolor="Gray">
                <td></td>
                <td><b>Maelekezo</b></td>
                <td></td>
                <td><b>ME</b></td>
                <td><b>KE</b></td>
                <td><b>Jumla</b></td>
            </tr>

            <tr>
                <td id="code">6a</td>
                <td id="item">watoto umri wa miezi 6</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit27" onkeyup="add_it('unit27', 'price27', 'total27');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price27" onkeyup="add_it('unit27', 'price27', 'total27');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total27"></td>
            </tr>

            <tr>
                <td id="code">6b</td>
                <td id="item">Watoto chini ya umri wa mwaka 1</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit28" onkeyup="add_it('unit28', 'price28', 'total28');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price28" onkeyup="add_it('unit28', 'price28', 'total28');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total28"></td>
            </tr>

            <tr>
                <td id="code">6c</td>
                <td id="item">Watoto umri zaidi ya mwaka 1 - 5</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit29" onkeyup="add_it('unit29', 'price29', 'total29');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price29" onkeyup="add_it('unit29', 'price29', 'total29');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total29"></td>
            </tr>

            <tr>
                <td id="code">7</td>
                <td id="item"><b>Waliopewa Mabendazole/Albendazole</b></td>
                <td id="qty"></td>
                <td style="overflow: hidden;"></td>
                <td class="ValueForm"></td>
                <td> </td>
            </tr>

            <tr bgcolor="Gray">
                <td></td>
                <td><b>Maelekezo</b></td>
                <td></td>
                <td><b>ME</b></td>
                <td><b>KE</b></td>
                <td><b>Jumla</b></td>
            </tr>

            <tr>
                <td id="code">7a</td>
                <td id="item">Watoto umri wa mwaka 1 hadi 5</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit27" onkeyup="add_it('unit27', 'price27', 'total27');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price27" onkeyup="add_it('unit27', 'price27', 'total27');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total27"></td>
            </tr>

            <tr>
                <td id="code">8</td>
                <td id="item"><b>Ulishaji wa Watoto wachanga</b></td>
                <td id="qty"></td>
                <td style="overflow: hidden;"></td>
                <td class="ValueForm"></td>
                <td> </td>
            </tr>

            <tr bgcolor="Gray">
                <td></td>
                <td><b>Maelekezo</b></td>
                <td></td>
                <td><b>ME</b></td>
                <td><b>KE</b></td>
                <td><b>Jumla</b></td>
            </tr>

            <tr>
                <td id="code">8a</td>
                <td id="item">Watoto wachanga chini ya miezi sita wanaonyonya maziwa ya mama pekee (EBF)</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit27" onkeyup="add_it('unit27', 'price27', 'total27');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price27" onkeyup="add_it('unit27', 'price27', 'total27');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total27"></td>
            </tr>

            <tr>
                <td id="code">8b</td>
                <td id="item">Watoto wachanga wanaopewa maziwa mbadala (RF)</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit28" onkeyup="add_it('unit28', 'price28', 'total28');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price28" onkeyup="add_it('unit28', 'price28', 'total28');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total28"></td>
            </tr>

            <tr>
                <td id="code">9</td>
                <td id="item"><b>Taarifa za PMTCT/LLIN</b></td>
                <td id="qty"></td>
                <td style="overflow: hidden;"></td>
                <td class="ValueForm"></td>
                <td> </td>
            </tr>

            <tr bgcolor="Gray">
                <td></td>
                <td><b>Maelekezo</b></td>
                <td></td>
                <td><b>ME</b></td>
                <td><b>KE</b></td>
                <td><b>Jumla</b></td>
            </tr>

            <tr>
                <td id="code">9a</td>
                <td id="item">Watoto wa waliozaliwa na mama mwenye maambukizi ya VVU/ watoto wenye HEID no.</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit27" onkeyup="add_it('unit27', 'price27', 'total27');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price27" onkeyup="add_it('unit27', 'price27', 'total27');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total27"></td>
            </tr>

            <tr>
                <td id="code">9b</td>
                <td id="item">Watoto waliohamishiwa kliniki ya huduma na matibabu kwa wenye VVU (CTC)</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit28" onkeyup="add_it('unit28', 'price28', 'total28');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price28" onkeyup="add_it('unit28', 'price28', 'total28');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total28"></td>
            </tr>

            <tr>
                <td id="code">9c</td>
                <td id="item">Watoto waliopata LLIN</td>
                <td id="qty"></td>
                <td style="overflow: hidden;"> <input id="unit29" onkeyup="add_it('unit29', 'price29', 'total29');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm"> <input id="price29" onkeyup="add_it('unit29', 'price29', 'total29');" style="width: 70px; heigth: 70px; border-width: 0;"
                        type="text" name="" value=""> </td>
                <td class="ValueForm" id="total29"></td>
            </tr>










        </table>
        <p><b>Jina la Mtayarishaji wa Ripoti ...................................... kada ................... wadhifa ................. Sahihi ...............</b></p>
        <p><b>Tarehe ......../......../........ Imepitiwa na .........................., .............................., .............................</b></p>
        <p><b>Namba ya simu ya kituo/Wilaya/Mkoa ............................ Taarifa imepokelewa Wilayani tarehe ......./....../......</b></p>
    </form>
</body>

</html>