# CSCI4300Project5
Project 5 Due: March 22 (Sunday) by Midnight
Right now, I have the server set up locally, which contains the myswl imdb_small databse
AS a root username, my password is flaker, as a guest it might work to have an empty
username and password, though I am not sure. I thought the directions were unclear about 
the mysql server. On my end, the Search all .php is almost completed. It just needs to put the found data into a table and add a column that add numbers(it also needs to decide unique ID's). 

Note: in Sequel Pro, this query adds a row with numbers, 
SET @row_number:=0;
SELECT @row_number:=@row_number+1 AS row_number, name, year 
FROM movies
JOIN roles ON movies.id=roles.movie_id
JOIN actors ON roles.actor_id = actors.id
WHERE actors.first_name = 'Brad' AND actors.last_name = 'Pitt'
ORDER BY movies.year desc;

But I haven't been able to get it to work in php. 
