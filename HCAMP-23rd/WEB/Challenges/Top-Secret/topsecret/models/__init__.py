from flask_sqlalchemy import SQLAlchemy

db = SQLAlchemy()

class Users(db.Model):
    __tablename__ = "users"
    idx = db.Column(db.Integer, primary_key=True, nullable=False, autoincrement=True)
    username = db.Column(db.String(20), nullable=False)
    password = db.Column(db.String(512), nullable=False)
    email = db.Column(db.String(32), nullable=False)
    is_admin = db.Column(db.Boolean, nullable=False, default=False)
    create_time = db.Column(db.DateTime, nullable=False)
    save_ip = db.Column(db.String(15), nullable=False)

    def __init__(self, **kwargs):
        super(Users, self).__init__(**kwargs)