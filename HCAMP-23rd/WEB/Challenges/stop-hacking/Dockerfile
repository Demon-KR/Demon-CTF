FROM x86shell/apache-flask:v1


ENV DEBIAN_FRONTEND=noninteractive

COPY ./prob /var/prob/
COPY ./config /var/prob-config/

WORKDIR /var/prob

# python module install
RUN pip install -r /var/prob-config/requirements.txt

# apache2 setup
RUN cp /var/prob-config/prob.conf /etc/apache2/sites-available/prob.conf
RUN a2enmod headers
RUN a2dissite 000-default.conf
RUN a2ensite prob.conf

EXPOSE 80

CMD  /usr/sbin/apache2ctl -D FOREGROUND
