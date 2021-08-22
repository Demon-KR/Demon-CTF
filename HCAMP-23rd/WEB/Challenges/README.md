### WEB

> Challenge

1. 해킹 멈춰!!

    [Go Repository](https://www.naver.com)

2. BABYJS

    [Go Repository](https://www.naver.com)

3. File Manager

    [Go Repository](https://www.naver.com)

4. Top Secret

    [Go Repository](https://www.naver.com)

5. World Wide Web

    [Go Repository](https://www.naver.com)

---

> Build

1. 해킹 멈춰!!

    ```bash
    로컬 문제 서버 빌드 방법
    ```
2. BABYJS
    ```bash
    $ cd BABYJS
    $ docker-compose up -d --build
    ```

3. File Manager
    ```bash
    $ cd File-Manager/src
    $ mkdir uploads && chmod 757 uploads
    $ docker-compose up -d --build
    ```

4. Top Secret
    ```bash
    $ cd Top-Secret/topsecret
    $ touch .env
    $ vi .env
    
    [APP]
    SECRET_KEY=yoursecretkey

    [DB]
    #local
    DB_URL=mysql+pymysql://user:pass@localhost:3306/dbname
    
    #remote(docker)
    DB_URL=mysql+pymysql://user:pass@localhost:3820/hcamp23_topsecret
    
    $ docker-compose up -d --build
    ```

5. World Wide Web
    ```bash
    $ cd World-Wide-Web
    $ docker-compose up -d --build
    ```

---

### Contributor

__g0pher98__

__jhyeon__