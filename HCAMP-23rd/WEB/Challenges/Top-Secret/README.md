### Environment

```
python3 -m venv ./env
pip3 install -r requirements.txt
```

> Create File (topsecret/.env) and Enter Code

```
[APP]
SECRET_KEY=yoursecretkey

[DB]
DB_URL=mysql+pymysql://user:pass@localhost:3306/dbname
#DB_URL=mysql+pymysql://topsecret:pass@localhost:3820/hcamp23_topsecret
```