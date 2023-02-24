
/*
    Author : Mohamed Yousef 
    Date   : 2023-02-23
*/
select concat( max(months*salary)," ",count(name)  ) from employee group by salary order by max(salary*months) desc limit 1 ;