from topsecret.models import db, Users
from hashlib import sha512
import csv
from datetime import datetime

def create_account():
    f = open('account.csv', 'r', encoding='utf-8')
    data = csv.DictReader(f)

    for item in data:
        result = Users(username=item['username'],
        password=sha512(item['password'].encode()).hexdigest(),
        email=item['email'],
        create_time=datetime.now(),
        save_ip=str(item['ip']))

        db.session.add(result)
        db.session.commit()
        db.session.close()
    
    return