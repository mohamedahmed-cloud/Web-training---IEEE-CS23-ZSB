/*
    Author : Mohamed Yousef 
    Date   : 2023-02-24
*/
select name from city where countrycode in (
select code from country where continent='Africa'
)