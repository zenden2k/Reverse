# Reverse

Usage: 
`php -f reverse.php "String to be reversed"`

## SQL queries

1.
```sql
select human.name, group_concat(vacation_dist.name) as destination from human
inner join human_vacation_dist on human.id=human_vacation_dist.human_id 
inner join vacation_dist on human_vacation_dist.distination_id = vacation_dist.id
group by human.id
```

Result:
```sql
name	      destination
Vasya	      Cuba,Sochi
Maria       Aruba
George	    Sochi,Cuba
Clark Kent	Cuba,Krypton
Traveler	  Cuba,Sochi,Aruba,Krypton
```

2.
```sql
select human.name from human
inner join human_vacation_dist on human.id=human_vacation_dist.human_id and human_vacation_dist.distination_id = (select id from vacation_dist where name = 'Cuba')
inner join human_vacation_dist d on human.id=d.human_id and d.distination_id = (select id from vacation_dist where name = 'Sochi')
group by human.id
```

Result:
```
name
Vasya
George
Traveler
```



3.
```sql
select human.name from human
  inner join human_vacation_dist on human.id=human_vacation_dist.human_id 
  inner join vacation_dist on human_vacation_dist.distination_id = vacation_dist.id
group by human.id
having 
  sum(vacation_dist.name='Sochi')>0 and 
  sum(vacation_dist.name='Cuba')>0  and 
  sum(vacation_dist.name not in ('Sochi', 'Cuba'))=0  
```
  
Result:
```
name
Vasya
George
```


