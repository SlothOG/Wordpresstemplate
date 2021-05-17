create Database wordpress;
create user 'test123'@'%' identified by 'password';
use wordpress;
grant all privileges on *.* to 'test123'@'%' identified by 'test123';