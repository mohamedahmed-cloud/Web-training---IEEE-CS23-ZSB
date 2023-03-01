/*
    Author : Mohamed Yousef 
    Date   : 2023-02-21
*/

SELECT ceiling(avg(salary)- avg(replace(salary,'0',''))) FROM EMPLOYEES ;
