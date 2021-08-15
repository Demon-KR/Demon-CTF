from flask_sqlalchemy import SQLAlchemy

from sqlalchemy.ext.declarative import declarative_base
from sqlalchemy.orm import sessionmaker
from sqlalchemy import create_engine
from sqlalchemy import MetaData, Table, Column, Integer, String

host = "localhost"
user = "Lolliesadmin"
pw = "HackingCamp2021_admin"
db_name = "db_Journey"

SQL_ALCHEMY_DATABASE = 'mysql://{}:{}@{}/{}?charset=utf8'.format(user, pw, host, db_name)
engine = create_engine(SQL_ALCHEMY_DATABASE, echo=True)


Session = sessionmaker(bind=engine)
db_session = Session()

Base = declarative_base()