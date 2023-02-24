          select '* * * * * * * * * * * * * * * * * * * *' 
union all select '* * * * * * * * * * * * * * * * * * *'
union all select '* * * * * * * * * * * * * * * * * *'
union all select '* * * * * * * * * * * * * * * * *'
union all select '* * * * * * * * * * * * * * * *'
union all select '* * * * * * * * * * * * * * *'
union all select '* * * * * * * * * * * * * *'
union all select '* * * * * * * * * * * * *'
union all select '* * * * * * * * * * * *'
union all select '* * * * * * * * * * *'
union all select '* * * * * * * * * *'
union all select '* * * * * * * * *'
union all select '* * * * * * * *'
union all select '* * * * * * *'
union all select '* * * * * *'
union all select '* * * * *'
union all select '* * * *'
union all select '* * *'
union all select '* *'
union all select '*'

-- or
with recursive num(n) as(
    select 1 as n
    union all
    select n+1 from num where n<20
)
select repeat('* ',n) from num
order by n desc;