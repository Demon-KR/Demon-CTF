from core import Base
from sqlalchemy import Column, Integer, String, Boolean

class Journey_register(Base):
    __tablename__ = 'Journey_register2'

    team_id = Column(Integer, nullable=False, primary_key=True)
    name = Column(String(500), nullable=False, unique=True)
    password = Column(String(500), nullable=False, unique=True)
    is_admin = Column(Boolean, default=False)

class Journey_flag(Base):
    __tablename__ = 'Journey_flag'

    flag = Column(String(500),nullable=False, unique=True, primary_key=True)
