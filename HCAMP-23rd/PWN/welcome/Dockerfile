FROM ubuntu:16.04

RUN apt-get update
RUN apt-get install -y xinetd netcat socat

RUN mkdir /home/pwn
RUN useradd -d /home/pwn pwn -s /bin/bash 
RUN chown -R pwn:pwn /home/pwn/

CMD chown -R root:pwn /home/pwn
RUN chmod 750 /home/pwn 

ADD ./welcome /home/pwn/welcome
RUN chmod +x /home/pwn/welcome

ADD ./flag /
RUN chown root:pwn /flag 
RUN chmod 440 /flag 

ADD pwn.xinetd /etc/xinetd/pwn 
ADD ./start.sh /
RUN chmod +x /start.sh

CMD ["/usr/sbin/xinetd","-dontfork"]


