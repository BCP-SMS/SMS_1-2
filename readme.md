<!-- RESET SQL ID TO 1 -->


SET @num := 0;

UPDATE your_table SET id = @num := (@num+1);

ALTER TABLE your_table AUTO_INCREMENT =1;

<!-- REPORTS TABLE -->
SET @num := 0;

UPDATE reports SET id = @num := (@num+1);

ALTER TABLE reports AUTO_INCREMENT =1;


<!-- ___________________________________________ -->
SELECT DATE(date) as Month, COUNT(id) as Total FROM reports GROUP BY MONTH;


INSERT INTO `podms_appointment` SELECT * FROM `podms_profiling` WHERE `id` = $id;

DELETE FROM `podms_profiling` WHERE `id` = $id;


<!-- ___________________________________________ -->