# insert into a database
INSERT INTO `rsvps` (name,attending,guest) VALUES ('Guest Name', 1, ''); 

# read information from a database
SELECT * FROM `rsvps` WHERE 1;
SELECT * FROM `rsvps` WHERE `id`=1; # selects any record with an id of 1

# delete from a database
DELETE FROM `rsvps` WHERE 1; # replace 1 with a query.
DELETE FROM `rsvps` WHERE `id`=1; # deletes any record with an id of 1

# update a database
UPDATE `rsvps` SET `name`='New Guest Name' WHERE 1; # updates all the guest names to "New Guest Name"
UPDATE `rsvps` SET `name`='New Guest Name' WHERE `id`=1; # updates the guest names to any record with an id of 1