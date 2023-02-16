/*
    Author : Mohamed Yousef 
    Date   : 2023-02-16
*/

-- This problem I solved from 6 month give me correct answer know give me a wrong answer 
-- I try most of solution by no way 😅
select city ,length(city) from station group by city order by length(city),city limit 1;
select city, length(city) from station group by city order by length(city),city desc limit 1;