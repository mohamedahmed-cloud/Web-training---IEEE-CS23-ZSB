/*
    Author : Mohamed Yousef 
    Date   : 2023-02-16
*/
select distinct city from station where right(city,1) not in ('a','e','i','o','u');