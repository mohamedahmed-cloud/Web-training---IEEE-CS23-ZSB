with fms as ( select ROW_NUMBER() OVER(order by LAT_N asc) as yousef, LAT_N from STATION)

select round(LAT_N, 4) from fms WHERE yousef = (select round(count(*) / 2) from fms);