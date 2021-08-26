from flask import session, redirect, url_for, abort
from functools import wraps
import sqlite3, hashlib

class Account:
    def __init__(self, cursor):
        '''
        write code loading sqlite table "account"
        '''
        # load sqlite
        self.cursor = cursor

    def login(self, pw, ip):
        '''
        is admin?
        pw will convert by hash function
        '''
        # pw convert to SHA256
        convert = hashlib.sha256(pw.encode()).hexdigest()
        # query from table to get whitelist ip
        query = "select ip from white_list"
        self.cursor.execute(query)
        rows = self.cursor.fetchall()
        ip_list = [data[0] for data in rows]
        ip_pw_check = -1
        # is correct ip?
        for row in ip_list:
            if ip == row:
                ip_pw_check = 0
                break
        if ip_pw_check == -1:
            return -1
        # query from table to get user pw?
        query = "select pw from user"
        self.cursor.execute(query)
        rows = self.cursor.fetchall()
        pw_list = [data[0] for data in rows]
        # is correct pw?
        for row in pw_list:
            if convert == row:
                ip_pw_check = 1
                break
        if ip_pw_check == 0:
            return 1
        # if true
        session['is_login'] = True
        return 0
        # all correct = 0, only ip correct = 1, all not corret = -1

    def check(self, f):
        '''
        deco function for check session
        '''
        @wraps(f)
        def deco_func(*args, **kwargs):
            try:
                if 'is_login' not in session or session['is_login'] == False:
                    return redirect(url_for('login'))
                return f(*args, **kwargs)
            except Exception as e:
                print('[*]', e)
                abort(500)

        return deco_func


if __name__ == '__main__':
    '''
    test
    '''
    
    pw = 'hihi'
    ip = '127.0.0.1'
    account = Account()
    account.login(pw, ip)
