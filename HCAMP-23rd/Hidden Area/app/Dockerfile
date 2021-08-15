FROM ubuntu:20.04

EXPOSE 3921
EXPOSE 3306

#RUN rm -rf /var/lib/api/lists/*
RUN apt update && apt install unzip -y
RUN apt-get update
RUN sed -i "s/^exit 101$/exit 0/" /usr/sbin/policy-rc.d
RUN apt install mysql-server -y
RUN DEBIAN_FRONTEND='noninteractive' apt-get install -y --no-install-recommends expect 

RUN apt install -y python
RUN apt install -y python3-pip
RUN apt-get install -y libmysqlclient-dev
RUN mkdir -p /app
RUN ls /app

COPY mysql_init.sh /app
COPY static /app/static
COPY templates /app/templates
COPY app.py /app
COPY core.py /app
COPY init.py /app
COPY load.py /app
COPY models.py /app
COPY security.py /app
COPY session.py /app
COPY user_mysql.py /app
COPY requirements.txt /app
COPY account_patch.csv /app
COPY filter.py /app
COPY flag.csv /app
COPY config.py /app

WORKDIR /app 

CMD ["chmod +x", "./mysql_init.sh"]
CMD ["/bin/sh","./mysql_init.sh"]
#RUN 
RUN pip install -r requirements.txt
#ENTRYPOINT ["/bin/bash", "pip3", "install", "-r", "requirements"]
#RUN pip3 install -r requirements
CMD python3 init.py
CMD ["/bin/sh", "echo 'init done'"]
CMD python3 load.py
CMD ["/bin/sh", "echo 'load done'"]
# execute 
# mysql error
# Still not solve it
# MySQLdb._exceptions.OperationalError: (2002, "Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2)")

CMD python3 app.py

