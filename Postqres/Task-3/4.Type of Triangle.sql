/*
    Author : Mohamed Yousef 
    Date   : 2023-02-16
*/

select 
  case
    when A = B AND B = C THEN 'Equilateral'
     when A + B <= C OR A + C <= B OR B + C <= A THEN 'Not A Triangle'
    when A = B OR B = C OR A = C THEN 'Isosceles'
    else 'Scalene'
  end as Mohamed_Yousef
from triangles;
