



	SELECT S.name  FROM Sailors S WHERE NOT EXISTS (SELECT B.bid  FROM Boats B  WHERE NOT EXISTS(SELECT R.bid FROM Reserves R WHERE R.bid = B.bid AND R.sid = S.sid));

SELECT food.food_id  FROM food  WHERE NOT EXISTS(SELECT eaters.food_no FROM eaters WHERE eaters.food_no = food.food_id);


SELECT E1.namba FROM eaters as E1 WHERE NOT EXISTS (SELECT food.food_id  FROM food  WHERE NOT EXISTS(SELECT E2.food_no FROM eaters as E2 WHERE E2.food_no = food.food_id AND E2.food_no = E1.food_no));









SELECT E.namba  FROM eater E WHERE NOT EXISTS (SELECT F.food_id  FROM food F  WHERE NOT EXISTS(SELECT E2.food_no FROM eaters E2 WHERE E2.food_no = F.food_id AND E2.namba = E.namba));

CREATE VIEW idadi_mahudhurio_mama as
        select 
                P.id, P.namba_ya_kadi_RCH4, DATEDIFF(P.tarehe_ya_kujifungua,P.tarehe_ya_kuzaliwa) as umri, 
                count(DISTINCT R.hudhurio) as idadiMahudhurio 
                        from postnatals P 
                                INNER JOIN register13s R 
                                        ON P.namba_ya_kadi_RCH4 = R.Namba_ya_kadi  
                                                group by  P.id;




select count(P.id), DATEDIFF(P.tarehe_ya_kujifungua,P.tarehe_ya_kuzaliwa) as umri from postnatals P 
                                INNER JOIN register13s R ON P.namba_ya_kadi_RCH4 = R.Namba_ya_kadi  
                                        WHERE EXTRACT(MONTH FROM tarehe_ya_hudhurio) = EXTRACT(MONTH FROM '2018-06-12')
                                                group by  P.id
                                                HAVING count(DISTINCT R.hudhurio) > 1 AND umri >= 7305;

$users = DB::table('users')
                     ->select(DB::raw('count(*) as user_count, status'))
                     ->where('status', '<>', 1)
                     ->groupBy('status')
                     ->get();




SELECT COUNT(*) as total
    FROM eaters
    WHERE eaters.id IN (
        SELECT eaters.id as hungry_people FROM eaters, food
            WHERE food.food_id = eaters.food_id GROUP BY eaters.id HAVING COUNT(*) >= 3
    );






Carbon\Carbon::parse('october')->month
date("F", mktime(0, 0, 0, request('month'), 10));

App\Mtoto_view::where([['hudhurio', 'Ndani ya siku 3-7']])->join ->count()
-- protected $table = 'mtoto_uambukizo';



-- {
--         DB::statement('CREATE VIEW mothers as select id, namba_ya_kadi_RCH4 as namba from postnatals;');
--     }




select count(P.id), DATEDIFF(P.tarehe_ya_kujifungua,P.tarehe_ya_kuzaliwa) as umri from postnatals P INNER JOIN register13s R ON P.namba_ya_kadi_RCH4 = R.Namba_ya_kadi WHERE EXTRACT(MONTH FROM tarehe_ya_hudhurio) = EXTRACT(MONTH FROM '2018-06-12') group by  P.id HAVING count(DISTINCT R.hudhurio) > 1 AND umri >= 7305;


DB::table('postnatals as P')->join('register13s as R', 'P.namba_ya_kadi_RCH4','=', 'R.Namba_ya_kadi')->whereRaw('EXTRACT(MONTH FROM tarehe_ya_hudhurio)', "
EXTRACT(MONTH FROM '2018-06-12')")->groupBy('P.id')->having(DB::raw('count(DISTINCT R.hudhurio)'),'>',1)->get()

SELECT namba
FROM eaters
GROUP BY namba
HAVING COUNT(DISTINCT food_no) > 5


