#!-*-encoding:utf-8-*-

# ver "python3"
import base64 
import hashlib
import MySQLdb.cursors

# Related by User codes
import session as local_session
from core import db_session, Base, engine, host, user, pw, db_name
from filter import blackbox

# Related by Flask
from flask_mysqldb import MySQL
from models import Journey_register
from flask import session as flask_session
from flask import Flask, render_template, request, jsonify

from Crypto.Cipher import AES
from Crypto import Random

from datetime import datetime,date
from pytz import timezone as pytz_timezone
import time


app = Flask(__name__)
app.secret_key = "HCAMP{FAKE_FLAG}"

app.config['MYSQL_HOST'] = host
app.config['MYSQL_USER'] = user
app.config['MYSQL_PASSWORD'] = pw
app.config['MYSQL_DB'] = db_name

mysql = MySQL(app)

BLOCK_SIZE = 16
pad = lambda s: s + (BLOCK_SIZE - len(s) % BLOCK_SIZE) * chr(BLOCK_SIZE - len(s) % BLOCK_SIZE)
unpad = lambda s: s[:-ord(s[len(s) - 1:])]

GST = pytz_timezone('Asia/Singapore')
realtime = datetime.now(GST)

y = realtime.year
m = realtime.month
d = realtime.day
d = date(y,m,d)

# ---- encrypt section ---- #
def get_key(password,password2):
    comp = "6384e2b2184bcbf58eccf10ca7a6563c"
    comp2 = "34b7da764b21d298ef307d04d8152dc5"

    result = hashlib.md5(password.encode()).hexdigest()[0:16]
    result2 = hashlib.md5(password2.encode()).hexdigest()[16:32]
    
    patch = (result + result2)
    test = (comp[0:16]+comp2[16:32])
    
    if(patch==test):
        print("Correct")
        return patch.encode()
 
def encrypt(raw, password, password2):
    private_key = get_key(password, password2)
    raw = pad(raw)
    iv = Random.new().read(AES.block_size)
    cipher = AES.new(private_key, AES.MODE_CBC, iv)
    return base64.b64encode(iv + cipher.encrypt(raw))

# --- Route Section ---- # 
@app.errorhandler(404)
def InvalidPage(error):
    return render_template('404.html')

@app.route("/admin_test")
@local_session.check_admin
def test():    
    return f"{flask_session['name']} is admin"


@app.route(f"/{d}/admin")
@local_session.check_admin
def Search():
    cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
        
    cursor.execute('SELECT * FROM Journey_flag') 
    isFlag = cursor.fetchone()
    
    return render_template(
        'flag.html',
        title = 'Flag',
        intro = 'Hello Admin! Can you decrypt?',
        column = [1,isFlag['flag'],3,4,5]
    )


@app.route(f'/login',methods=['GET','POST']) 
def api_login():
    try:
        if request.method =='GET':
            return render_template("login.html")
        else:
            id = (str(request.form['username']))
            pw = str(request.form['password'])

        cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)

        id = str(id.lower())
        pw = str(pw.lower())
        
        for check in blackbox:
            if( (id.find(check) > -1) or  (pw.find(check) > -1) ):
                return jsonify({'hack':'NO TRY SQL INJECTION'})
        
        query =  'SELECT * FROM Journey_register2 WHERE name = "%s" and password = "%s"'%(id,pw)
        cursor.execute(query)
        isExist = cursor.fetchone()

        if(isExist):
            flask_session['is_admin'] = isExist['is_admin']
            local_session.create(isExist)

            if flask_session['is_admin'] == 0:
                return jsonify({'ok':f'guest login Information => {isExist}'})
            else:
                return jsonify({'ok':f'admin login Information => {isExist} / {d}'})
        
        else:
            return jsonify({'fail':f'query : {query}'})

    except AssertionError as e:
        print(e)

if __name__ == '__main__':
    app.run(host='0.0.0.0',debug=True,port=3921)
