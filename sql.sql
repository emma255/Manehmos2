
select postnatals.Jina_la_mama, register13s.Namba_ya_kadi, register13s.hudhurio, postnatals.tarehe_ya_kuzaliwa, DATEDIFF(postnatals.tarehe_ya_kujifugua,postnatals.tarehe_ya_kuzaliwa) as umri, register13s.mama_HB, register13s.hali_ya_msamba, register13s.fistula, register13s.akili_timamu, register13s.idadi_ya_dawa_vitaminA
from postnatals INNER JOIN register13s ON register13s.Namba_ya_kadi=postnatals.namba_ya_kadi_RCH4;
-- SELECT pa.ProjectID, p.Project_Title, a.Account_ID, a.Username, a.Access_Type, c.First_Name, c.Last_Name
-- FROM Project_Assigned pa INNER JOIN Account a ON pa.AccountID = a.Account_ID INNER JOIN Project p ON pa.ProjectID = p.Project_ID INNER JOIN Clients c ON a.Account_ID = c.Account_ID
-- WHERE a.Access_Type = 'Client';
-- CREATE VIEW numbers AS SELECT postnatals.Jina_la_mama, postnatals.tarehe_ya_kuzaliwa, postnatals.namba_ya_kadi_RCH4 FROM postnatals;
create view maelezo
as
        select postnatals.Jina_la_mama, register13s.Namba_ya_kadi, register13s.hudhurio, postnatals.tarehe_ya_kuzaliwa, DATEDIFF(postnatals.tarehe_ya_kujifugua,postnatals.tarehe_ya_kuzaliwa) as umri, register13s.mama_HB, register13s.hali_ya_msamba, register13s.fistula, register13s.akili_timamu, register13s.idadi_ya_dawa_vitaminA
        from postnatals INNER JOIN register13s ON register13s.Namba_ya_kadi=postnatals.namba_ya_kadi_RCH4;



create view mahali
as
        select register13s.Namba_ya_kadi, DATEDIFF(postnatals.tarehe_ya_kujifugua,postnatals.tarehe_ya_kuzaliwa) as umri,
         postnatals.mahali_alipojifungulia, postnatals.kada_ya_aliyemzalisha
        from postnatals INNER JOIN register13s ON register13s.Namba_ya_kadi=postnatals.namba_ya_kadi_RCH4;

create view family_plan
as
        select register13s.Namba_ya_kadi, DATEDIFF(postnatals.tarehe_ya_kujifugua,postnatals.tarehe_ya_kuzaliwa) as umri,
        register13s.family_plan_usahuri_umetolewa, register13s.family_plan_amepatiwa_kielelezo, 
        register13s.amepatiwa_family_plan_wakati_wa_ppc, register13s.rufaa_kupata_family_plan
        from postnatals INNER JOIN register13s ON register13s.Namba_ya_kadi=postnatals.namba_ya_kadi_RCH4;
        
create view pmtct
as
        select register13s.Namba_ya_kadi, DATEDIFF(postnatals.tarehe_ya_kujifugua,postnatals.tarehe_ya_kuzaliwa) as umri,
        postnatals.Hali_ya_VVU_kwenye_kadi, postnatals.kipimo_vvu_wakati_wa_postnatal, 
        register13s.amepatiwa_family_plan_wakati_wa_ppc, register13s.rufaa_kupata_family_plan
        from postnatals INNER JOIN register13s ON register13s.Namba_ya_kadi=postnatals.namba_ya_kadi_RCH4;





        
-- protected
-- $table = 'maelezo_view';





-- {
--         DB::statement
-- ('CREATE VIEW numbers AS SELECT
--         postnatals.Jina_la_mama, postnatals.tarehe_ya_kuzaliwa, postnatals.namba_ya_kadi_RCH4 FROM postnatals;');
--     }