-- 1. Write a query in SQL to find the name and year of the movies.
select mov_title and mov_year
from movie;
-- 2. Write a query in SQL to find the year when the movie American Beauty released.
select movie_title, movie_year
from movie
where move = 'America Beauty';

-- 3. Write a query in SQL to find the movie which was released in the year 1999.
select movie_title
from movie
where mov_year = 1999;
-- 4. Write a query in SQL to find the movies which was released before 1998
select movie_title
from movie
where mov_year < 1998;

--7. Write a query in SQL to find the titles of all movies that have no ratings.
select m.movie_title, r.num_o_ratings
from movie as m
left join rating as r
on m.mov_id = r.mov_id;
