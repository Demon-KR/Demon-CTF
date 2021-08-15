import csv
import hashlib
import pandas as pd

# Related by User codes
from core import db_session
from models import Journey_register, Journey_flag


def ld_account():
    csvfile = open('./account_patch.csv', 'r', encoding='utf-8-sig')
    data_dictionary = csv.DictReader(csvfile)
    print(data_dictionary)
    
    last_idx = 0
    for row in data_dictionary:
        print(row)
        last_idx += 1
     
        new_data = Journey_register(
            team_id = last_idx,   
            name = row['name'],  
            password = str(row['password']).encode('utf-8'), 
            is_admin = True if row['is_admin'].lower() == 'y' else False
        )
        db_session.add(new_data)
    return

def ld_flag():
    csvfile = open('./flag.csv', 'r', encoding='utf-8-sig')
    data_dictionary = csv.DictReader(csvfile)
    print(data_dictionary)
    
    last_idx = 0
    for row in data_dictionary:
        print(row)
        last_idx += 1
     
        new_data = Journey_flag(   
            flag = row['flag']
        )
        db_session.add(new_data)
    return
    
ld_account()
ld_flag()
