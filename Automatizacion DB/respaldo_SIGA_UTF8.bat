set timestr=%d:~6,4%%d:~3,2%%d:~0,2%%t:~0,2%%t:~3,2%
set "Ymd=%date:~,4%%date:~5,2%%date:~8,2%"
C:\laragon\bin\mysql\mysql-8.0.30-winx64\bin\mysqldump -h localhost -u root -proot siga -R > C:/siga_utf8_%Ymd%2022.sql

