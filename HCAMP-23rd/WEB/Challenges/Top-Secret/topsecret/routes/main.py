from flask import Flask, render_template, redirect, url_for, session, request, current_app, Blueprint
from flask_wtf.csrf import CSRFError
from hashlib import sha512
from topsecret.models import db, Users
from datetime import datetime

main = Blueprint('main', __name__, url_prefix='/')

@main.errorhandler(CSRFError)
def handle_csrf_error(e):
   return render_template("error/csrf.html")

@main.errorhandler(404)
def page_not_found(e):
    return render_template("error/404.html"), 404

@main.route('', methods=["GET","POST"])
def index_page():
    if "user" in session:
        return redirect(url_for("page.main_page"))

    if request.method == "GET":
        return render_template("index.html")

    if request.method == "POST":
        username = request.form.get('username')
        password = request.form.get('password')
        hash_pw = sha512(password.encode()).hexdigest()

        result = Users.query.filter_by(username=username, password=hash_pw).first()

        if result:
            session['user'] = username
            return redirect(url_for("page.main_page"))
        else:
            return '<script>alert("아이디 또는 비밀번호가 올바르지 않습니다"); history.go(-1); </script>'

@main.route('register', methods=["GET","POST"])
def register_page():
    if "user" in session:
        return redirect(url_for("page.main_page"))
    
    if request.method == "GET":
        return render_template("register.html")

    if request.method == "POST":
        username = request.form.get('username')
        password = request.form.get('password')
        email = request.form.get('email')
        hash_pw = sha512(password.encode()).hexdigest()
        ip = request.remote_addr

        chk_username = Users.query.filter_by(username=username).first()
        chk_email = Users.query.filter_by(email=email).first()

        if chk_username:
            return '<script>alert("이미 존재하는 사용자입니다."); history.go(-1); </script>'

        if chk_email:
            return '<script>alert("이미 존재하는 이메일입니다."); history.go(-1); </script>'

        result = Users(username=username, password=hash_pw, email=email, is_admin=0, create_time=datetime.now(), save_ip=ip)

        if result:
            db.session.add(result)
            db.session.commit()
            db.session.close()
            return redirect(url_for("main.index_page"))
        else:
            return '<script>alert("Error"); history.go(-1); </script>'