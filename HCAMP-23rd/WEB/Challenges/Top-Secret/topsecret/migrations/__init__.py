from flask_migrate import Migrate
from sqlalchemy.engine.url import make_url
from sqlalchemy_utils import create_database, database_exists
from decouple import config

migrate = Migrate()

def create_db():
    db_url = make_url(config("DB_URL"))

    if not database_exists(db_url):
        if db_url.drivername.startswith("mysql"):
            create_database(db_url, encoding="utf8mb4")

    return db_url