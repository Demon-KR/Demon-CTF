FROM python:3.8

MAINTAINER jhyeon <stjhyeon@kakao.com>

WORKDIR /app

COPY ./serve.py /app
COPY ./account.csv /app
COPY ./requirements.txt /app

COPY ./topsecret /app/topsecret/

RUN pip install -r requirements.txt

EXPOSE 80

CMD ["python3", "serve.py"]