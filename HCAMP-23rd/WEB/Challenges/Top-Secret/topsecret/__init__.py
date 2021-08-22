from flask import Flask
from flask_wtf.csrf import CSRFProtect
from topsecret.migrations import create_db, migrate
from decouple import config
from wtforms.csrf.core import CSRF
from topsecret.utils.account import create_account

def create_app():
    app = Flask(__name__, static_folder="static", template_folder="templates")
    app.secret_key = config("SECRET_KEY")

    csrf = CSRFProtect(app)
    csrf.init_app(app)

    from topsecret.models import db, Users

    url = create_db()

    app.config['SQLALCHEMY_DATABASE_URI'] = str(url)
    app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False

    db.init_app(app)

    migrate.init_app(app, db)

    from topsecret.routes.main import main, page_not_found
    from topsecret.routes.page import page

    with app.app_context():
        db.drop_all() # clear db
        db.create_all() # create db
        create_account()

    app.register_error_handler(404, page_not_found)
    app.register_blueprint(main)
    app.register_blueprint(page)

    return app