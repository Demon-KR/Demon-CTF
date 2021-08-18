import json
import MySQLdb

from flask_mysqldb import MySQL
from core import host,user,pw,db_name


cursor = None 

def get_db_connection():
    global cursor 
    if not cursor:
        db = MySQLdb.connect(host,user,pw)
        cursor = db.cursor()
    return cursor