#!/bin/bash
# Case of Linux
# If you have a windows os, please set manually.
expect <<EOL
spawn sudo mysql
expect -timeout 3 "mysql> "
send "flush privileges;\n"
expect -timeout 3 "mysql> "
send "ALTER USER 'root'@'localhost' IDENTIFIED BY 'HackingCamp2021_admin';\n"
expect -timeout 3 "mysql> "
send "create user Lolliesadmin@localhost identified by 'HackingCamp2021_admin';\n"
expect -timeout 3 "mysql> "
send "create database db_Journey;\n"
expect -timeout 3 "mysql> "
send "grant all privileges on db_Journey.* to Lolliesadmin@localhost;\n"
expect -timeout 3 "mysql> "
send "flush privileges;\n"
send "exit\n"
expect eof
EOL