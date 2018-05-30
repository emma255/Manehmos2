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

CREATE VIEW mtoto_huduma
 as 
        select infants.tarehe, register_children.namba_ya_mtoto, infants.tarehe_BCG, infants.tarehe_OPVO, infants.uzito, postnatals.mahali_alipojifungulia as mahali_alipozaliwa,
        register_children.jinsia, infants.hb
        from register_children INNER JOIN infants ON register_children.namba_ya_mtoto=infants.namba_ya_usajili INNER JOIN
        postnatals ON postnatals.jina_la_mama = register_children.jina_la_mama;


CREATE VIEW mtoto_lishe 
as
        select infants.tarehe, register_children.namba_ya_mtoto, infants.lishe, register_children.jinsia
        from register_children INNER JOIN infants ON register_children.namba_ya_mtoto=infants.namba_ya_usajili;






Carbon\Carbon::parse('october')->month


App\Mtoto_view::where([['hudhurio', 'Ndani ya siku 3-7']])->join ->count()
-- protected $table = 'mtoto_lishe';





-- {
--         DB::statement
-- ('CREATE VIEW mtoto_lishe as
select register_children.namba_ya_mtoto, infants.lishe, register_children.jinsia
        from register_children INNER JOIN infants ON register_children.namba_ya_mtoto=infants.namba_ya_usajili;');
--     }