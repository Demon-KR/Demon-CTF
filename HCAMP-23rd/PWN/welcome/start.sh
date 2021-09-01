#!/bin/sh
/etc/init.d/xinetd restart

/bin/bash 
socat TCP-LISTEN:8080,reuseaddr,fork EXEC:'su pwn -c /home/pwn/welcome'
sleep infinity

