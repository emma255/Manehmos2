

SELECT E.namba  FROM eater E WHERE NOT EXISTS (SELECT F.food_id  FROM food F  WHERE NOT EXISTS(SELECT E2.food_no FROM eaters E2 WHERE E2.food_no = F.food_id AND E2.namba = E.namba));

select S.sid, count(DISTINCT R.bid) as NumberOfBoats from Sailors S INNER JOIN Reserves R ON S.sid = R.sid  group by  S.sid;

--VIEWS--
mahudhurio_ya_awali
postnatals





create view maelezo
as
        select register13s.tarehe_ya_hudhurio, postnatals.Jina_la_mama, register13s.Namba_ya_kadi, register13s.hudhurio, postnatals.tarehe_ya_kuzaliwa,
        DATEDIFF(postnatals.tarehe_ya_kujifungua,postnatals.tarehe_ya_kuzaliwa) as umri, register13s.mama_HB,
        register13s.hali_ya_msamba, register13s.fistula, register13s.akili_timamu, register13s.idadi_ya_dawa_vitaminA
        from postnatals INNER JOIN rregister13s ON register13s.Namba_ya_kadi=postnatals.namba_ya_kadi_RCH4;



create view alipojifungua
as
        select register13s.tarehe_ya_hudhurio, register13s.Namba_ya_kadi, DATEDIFF(postnatals.tarehe_ya_kujifungua,postnatals.tarehe_ya_kuzaliwa) as umri,
         postnatals.mahali_alipojifungulia, postnatals.kada_ya_aliyemzalisha
        from postnatals INNER JOIN register13s ON register13s.Namba_ya_kadi=postnatals.namba_ya_kadi_RCH4;

create view family_plan
as
        select register13s.tarehe_ya_hudhurio, register13s.Namba_ya_kadi, DATEDIFF(postnatals.tarehe_ya_kujifungua,postnatals.tarehe_ya_kuzaliwa) as umri,
        register13s.family_plan_usahuri_umetolewa, register13s.family_plan_amepatiwa_kielelezo,
        register13s.amepatiwa_family_plan_wakati_wa_ppc, register13s.rufaa_kupata_family_plan
        from postnatals INNER JOIN register13s ON register13s.Namba_ya_kadi=postnatals.namba_ya_kadi_RCH4;

create view pmtct
as
        select register13s.tarehe_ya_hudhurio, register13s.Namba_ya_kadi, DATEDIFF(postnatals.tarehe_ya_kujifungua,postnatals.tarehe_ya_kuzaliwa) as umri,
        postnatals.Hali_ya_VVU_kwenye_kadi, postnatals.kipimo_vvu_wakati_wa_postnatal, postnatals.amepima_postnatal, postnatals.lishe_ya_mtoto
        from postnatals INNER JOIN register13s ON register13s.Namba_ya_kadi=postnatals.namba_ya_kadi_RCH4;


create view mtoto
as
        select infants.tarehe, register_children.jina_la_mtoto, register_children.namba_ya_mtoto, register_children.jinsia, infants.hudhurio
        from register_children INNER JOIN infants ON register_children.namba_ya_mtoto=infants.namba_ya_usajili;
*
CREATE VIEW mtoto_huduma
 as
        select infants.tarehe, register_children.namba_ya_mtoto, infants.tarehe_BCG, infants.tarehe_OPVO, infants.uzito,
        postnatals.mahali_alipojifungulia as mahali_alipozaliwa, register_children.jinsia, infants.hb, infants.kmc
        from register_children INNER JOIN infants ON register_children.namba_ya_mtoto=infants.namba_ya_usajili INNER JOIN
        postnatals ON postnatals.namba_ya_kadi_RCH4 = register_children.jina_la_mama;


CREATE VIEW mtoto_lishe
as
        select infants.tarehe, register_children.namba_ya_mtoto, infants.lishe, register_children.jinsia
        from register_children INNER JOIN infants ON register_children.namba_ya_mtoto=infants.namba_ya_usajili;

CREATE VIEW mtoto_uambukizo AS
        select infants.tarehe, register_children.namba_ya_mtoto, infants.maambukizi_kitovu, infants.uambukizo_mkali, infants.maambukizi_ngozini,
        register_children.jinsia, postnatals.mahali_alipojifungulia as mahali_alipozaliwa, postnatals.hali_ya_mtoto from register_children INNER JOIN infants ON register_children.namba_ya_mtoto=infants.namba_ya_usajili INNER JOIN
        postnatals ON postnatals.namba_ya_kadi_RCH4 = register_children.jina_la_mama;


CREATE VIEW mothers as
     select id, namba_ya_kadi_RCH4 as namba from postnatals;


CREATE VIEW watoto as
     select id, namba_ya_mtoto as namba from register_children;


CREATE TABLE mahudhurioAwali(id int(1) NOT NULL AUTO_INCREMENT, hudhurio varchar(10) not NULL, primary key(id));
insert into mahudhurioAwali(hudhurio) value('Masaa 48');
insert into mahudhurioAwali(hudhurio) value('Siku 3-7');
insert into mahudhurioAwali(hudhurio) value('Siku 8-28');
insert into mahudhurioAwali(hudhurio) value('Siku 29-42');

$users = DB::table('eaters')->select(DB::raw('namba'))->groupBy('namba')->havingRaw('COUNT(DISTINCT food_no) > 1')->get();


{{count(DB::table('register13s')->select(DB::raw('Namba_ya_kadi'))->groupBy('Namba_ya_kadi')->havingRaw('COUNT(DISTINCT hudhurio)= 3')->get())}}

CREATE VIEW vidokezo_hatari AS
SELECT register6s.tarehe_ya_hudhurio, register_maternals.namba_ya_usajili, DATEDIFF(register_maternals.lnmp,register_maternals.tarehe_ya_kuzaliwa) as umri,
DATEDIFF(register_maternals.tarehe_ya_kuandikishwa,register_maternals.lnmp) as umri_mimba, register6s.hudhurio, register_maternals.mimba_ngapi, register6s.damu_HB, register6s.TT, register6s.BP, register6s.sukari_kwenye_mkojo, register6s.Protenuria FROM register_maternals
INNER JOIN register6s WHERE register_maternals.namba_ya_usajili = register6s.namba_ya_usajili;

CREATE VIEW kaswende AS
SELECT register6s.tarehe_ya_hudhurio, register_maternals.namba_ya_usajili, DATEDIFF(register_maternals.lnmp,register_maternals.tarehe_ya_kuzaliwa) as umri,
register6s.matokeo_stds_mume, register6s.mume_ametibiwa, register6s.matokeo_stds_mke, register6s.mke_ametibiwa, register6s.kaswende_mume, register6s.mume_ametibiwa_kaswende,
 register6s.kaswende_mke, register6s.mke_ametibiwa_kaswende FROM register_maternals
INNER JOIN register6s WHERE register_maternals.namba_ya_usajili = register6s.namba_ya_usajili;

CREATE VIEW antenatal_pmtct AS
SELECT register6s.tarehe_ya_hudhurio, register_maternals.namba_ya_usajili, DATEDIFF(register_maternals.lnmp,register_maternals.tarehe_ya_kuzaliwa) as umri, register6s.hudhurio,
register6s.mume_tayari_ana_VVU, register6s.mume_tarehe_ya_unasihi, register6s.mume_amepima_VVU, register6s.mume_kipimo_aina, register6s.mume_tarehe_ya_kipimo, register6s.mume_kipimo1_VVU,
 register6s.mume_unasihi_baada_ya_kipimo_1, register6s.mke_tayari_ana_VVU, register6s.mke_tarehe_ya_unasihi, register6s.mke_amepima_VVU, register6s.mke_kipimo_aina, register6s.mke_tarehe_ya_kipimo, register6s.mke_kipimo1_VVU,
 register6s.mke_unasihi_baada_ya_kipimo_1 FROM register_maternals
INNER JOIN register6s WHERE register_maternals.namba_ya_usajili = register6s.namba_ya_usajili;

CREATE VIEW antenatal_malaria AS
SELECT register6s.tarehe_ya_hudhurio, register_maternals.namba_ya_usajili, DATEDIFF(register_maternals.lnmp,register_maternals.tarehe_ya_kuzaliwa) as umri,
register6s.llin, register6s.mrdt_o_bs, register6s.ipt, register6s.albendazole_mebendazole, register6s.vidonge_vya_I_FA, register6s.rufaa_alikopelekwa, register6s.sababu_ya_rufaa FROM register_maternals
INNER JOIN register6s WHERE register_maternals.namba_ya_usajili = register6s.namba_ya_usajili;

App\Models\Infant::where('aina','awali')->groupby('namba_ya_usajili')->havingRaw('COUNT(DISTINCT hudhurio) =4')->pluck('Namba_ya_usajili')
