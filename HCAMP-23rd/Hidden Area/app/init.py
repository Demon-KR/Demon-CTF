#!-*-encoding:utf-8-*-
#load.py로 데이터 생성한 후에 사용해야 함

from core import db_session, Base, engine 
from load import ld_account

def init():
    # Table ALL Delete
    Base.metadata.drop_all(engine)

    # Table ALL Create
    Base.metadata.create_all(engine)
    try:
        db_session.commit()
    except Exception as e:
        print('ERROR!!')
        print(e)
        db_session.rollback()
        exit(0)

if __name__ == '__main__':
    init()
    pass
