/*
    Author : Mohamed Yousef 
    Date   : 2023-02-21
*/

-- note we use as result to make it a var to order by it after end operation
select concat(Name,'(',left(Occupation,1),')') as result  from OCCUPATIONS
union all
select concat('There are a total of ',count(Occupation),' ',lower(occupation),'s.') 
as result from Occupations group by Occupation order by result


