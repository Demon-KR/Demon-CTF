#!-*-encoding:utf-8-*-
from flask import session, render_template, redirect, url_for, abort
from functools import wraps
from core import db_session

def create(db_result):
    session['team_id'] = str(db_result['team_id'])
    session['name'] = str(db_result['name'])
    session['is_admin'] = int(db_result['is_admin'])

def check_admin(f):
    @wraps(f)
    def deco_func(*args, **kwargs):
        if session['is_admin'] == 1:
            return f(*args, **kwargs)    
        else:
            abort(404)
        
    return deco_func
