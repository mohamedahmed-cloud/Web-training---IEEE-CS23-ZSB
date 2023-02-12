/*
    Author : Mohamed Yousef 
    Date   : 2023-02-12
*/
-- First solution
select distinct city from station where city not like '%a' and city not like '%e' and city not like '%i' and city not like '%o' and city not like '%u' and city not like 'a%' and city not like 'e%' and city not like 'i%' and city not like 'o%' and city not like 'u%' 

-- another one
SELECT DISTINCT city FROM station WHERE left(city,1) not in ('a','e','i','o','u') and right(city,1) not in ('a','e','i','o','u');