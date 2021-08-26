#! /usr/bin/env python3
#-*- coding: utf-8 -*-

from flask import Flask, render_template
from flask import request, redirect, url_for
import os, json

from lib.account import Account
from lib.bot import Bot
from lib.device import DeviceManager
from lib.db_manager import DatabaseManager

server = Flask(__name__)
server.debug = True
server.secret_key = b"IMJ = JS + JDH + JH + JW;"

db_manager = DatabaseManager("/tmp/imj.db")
account = Account(db_manager.get_cursor())
bot = Bot(db_manager.get_cursor())
device_manager = DeviceManager(db_manager.get_connection(), db_manager.get_cursor())

@server.route('/', methods=['GET'])
@bot.check
@account.check
def main():
    '''
    dashboard
    '''
    return render_template('dashboard.html')



@server.route('/login', methods=['GET', 'POST'])
@bot.check
def login():
    '''
    login page
    '''
    if request.method == 'GET':
        return render_template('login.html')
    elif request.method == 'POST':
        # get ip
        if request.environ.get('HTTP_X_FORWARDED_FOR') is None:
            ip = request.environ['REMOTE_ADDR']
        else:
            ip = request.environ['HTTP_X_FORWARDED_FOR']
            
        password = request.form.get("password")

        # login
        login_status = account.login(password, ip)
        if login_status < 0:
            return render_template('back.html', message="접근 가능한 데이터베이스 목록에 없는 IP 입니다.")
        elif login_status > 0:
            return render_template('back.html', message="비밀번호가 틀렸습니다.")

        return redirect(url_for('main'))


@server.route('/api/bot_check', methods=['GET', 'POST'])
def bot_check():
    '''
    bot check
    '''
    result = bot.detected_bot(request.headers.get('User-Agent'))
    return json.dumps({'result': result})


if __name__ == '__main__':
    server.run(host='0.0.0.0', debug=True)

