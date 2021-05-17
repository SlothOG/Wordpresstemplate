create Database wordpress;
create user 'test123'@'%' identified by 'test123';
use wordpress;
grant all privileges on *.* to 'test123'@'%' identified by 'test123';
