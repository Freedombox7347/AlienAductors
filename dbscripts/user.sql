
--Aline Aductors App User
CREATE USER 'alienapp'@'localhost' IDENTIFIED BY '9DG74*FMc5kQBK8LwVUM';
# Privileges for `alienapp`@`%`
GRANT USAGE ON *.* TO 'alienapp'@'localhost';
GRANT SELECT, INSERT, UPDATE, DELETE ON `alien_abductors`.* TO 'alienapp'@'localhost';