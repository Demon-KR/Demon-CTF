import sqlite3
import os

'''
- botname
+--------------------+--------------+------+-----+---------+----------------+
| Field              | Type         | Null | Key | Default | Extra          |
+--------------------+--------------+------+-----+---------+----------------+
| name               | text         | NO   |     | NULL    | unique         |
+--------------------+--------------+------+-----+---------+----------------+
- user
+--------------------+--------------+------+-----+---------+----------------+
| Field              | Type         | Null | Key | Default | Extra          |
+--------------------+--------------+------+-----+---------+----------------+
| no                 | int(11)      | NO   | PRI | NULL    | auto_increment |
| pw                 | text         | NO   |     | NULL    |                |
+--------------------+--------------+------+-----+---------+----------------+
- whitelist
+--------------------+--------------+------+-----+---------+----------------+
| Field              | Type         | Null | Key | Default | Extra          |
+--------------------+--------------+------+-----+---------+----------------+
| no                 | int(11)      | NO   | PRI | NULL    | auto_increment |
| ip                 | int(11)      | NO   |     | NULL    | unique         |
+--------------------+--------------+------+-----+---------+----------------+ 
'''

class DatabaseManager:
    def __init__(self, db_path:str):
        newlyCreated = not os.path.isfile(db_path)
        self.conn = sqlite3.connect(db_path, check_same_thread=False)
        self.cursor = self.conn.cursor()
        if newlyCreated:
            self.cursor.executescript("""
                CREATE TABLE bot (
                    name TEXT NOT NULL UNIQUE,
                    user_agent TEXT NOT NULL UNIQUE
                );
                CREATE TABLE user (
                    no INTEGER NOT NULL,
                    pw TEXT NOT NULL,
                    PRIMARY KEY (no)
                );
                CREATE TABLE white_list (
                    no INTEGER NOT NULL,
                    ip TEXT NOT NULL UNIQUE,
                    PRIMARY KEY (no)
                );

                INSERT INTO user (pw) VALUES ('ef3232c6b47a7a1ded1481a123b309b1a5c731d578418edf5211aff3cd1876fe');
                INSERT INTO white_list (ip) VALUES ('19.98.12.18');
                INSERT INTO bot (name, user_agent) VALUES ('Super Hacking Camp Bot', 'super hacking camp bot v0.0.0;');
            """)
            self.conn.commit()
    
    def __del__(self):
        self.conn.close()
    
    def get_connection(self):
        return self.conn

    def get_cursor(self) -> sqlite3.Cursor:
        return self.cursor

if __name__ == '__main__':
    db_manager = DatabaseManager("./test")
    db_manager.get_cursor()