import socket
import struct
import sqlite3
import os

'''
+--------------------+--------------+------+-----+---------+----------------+
| Field              | Type         | Null | Key | Default | Extra          |
+--------------------+--------------+------+-----+---------+----------------+
| no                 | int(11)      | NO   | PRI | NULL    | auto_increment |
| name               | varchar(50)  | NO   |     | NULL    | unique         |
| forward_path       | int(11)      | NO   |     | NULL    |                |
+--------------------+--------------+------+-----+---------+----------------+ 
'''
DEFAULT_IP = "10.2.0.5"

class DeviceManager:
    def __init__(self, conn, cursor):
        self.conn = conn
        self.cursor = cursor
    
    def check_name_using(self, name:str) -> bool:
        self.cursor.execute("SELECT no FROM device WHERE name = ?", (name,))
        if self.cursor.fetchone():
            return True
        else:
            return False
        
    def add_device(self, name:str, ip:str=DEFAULT_IP):
        serialized_ip = ip2int(ip)
        try:
            self.cursor.execute("INSERT INTO device (name, forward_path) VALUES (?,?)", (name, serialized_ip))
            self.conn.commit()
        except:
            self.conn.rollback()

    def get_forward_path(self, name:str) -> str:
        self.cursor.execute("SELECT forward_path FROM device WHERE name = ?", (name,))
        serialized_ip = self.cursor.fetchone()[0]
        return int2ip(serialized_ip)

    def set_forward_path(self, name:str, ip:str):
        serialized_ip = ip2int(ip)
        try:
            self.cursor.execute("UPDATE device SET forward_path = ? WHERE name = ?", (serialized_ip, name))
            self.conn.commit()
        except:
            self.conn.rollback()
    
    def get_register_info(self) -> list:
        self.cursor.execute("SELECT name, forward_path FROM device")
        register_list = []
        for row in self.cursor.fetchall():
            register_list.append((row[0], int2ip(row[1])))
        return register_list

def ip2int(addr) -> int:
    return struct.unpack("!I", socket.inet_aton(addr))[0]

def int2ip(addr) -> str:
    return socket.inet_ntoa(struct.pack("!I", addr))

if __name__ == '__main__':
    dm = DeviceManager("device.sqlite3")
    dm.add_device("ETH")
    dm.add_device("BTC", "192.168.0.1")
    dm.add_device("BCH", "192.168.0.7")
    print(dm.get_forward_path("BTC"))
    print(dm.get_forward_path("ETH"))
    dm.set_forward_path("ETH", "192.168.0.2")
    print(dm.get_forward_path("ETH"))
    print(dm.check_name_using("ETH"))
    print(dm.check_name_using("ETC"))
    print(dm.get_register_info())