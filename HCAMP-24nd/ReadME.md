# Hacking Camp 24th Description

해당 문서는 해킹캠프 24회 CTF 문제 설명과 문제가 수록되어 있습니다. 일부 문제는 도커 환경도 포함되어 있습니다.

1. WEB
- Apache
- Apache2
- Delicious cookie
- Memo
- Basic Auth
- 합격자 발표
- Simple PHP
2. PWN
- Simple PWN
- beginner
- invitation
- shell
- ssmash
3. REV
- Count
- Baby Crack
- CompReverse
- Encryptor
- Basecamp
4. FORENSIC
- DEMON MALL
- find clue!
- Art Gallery
5. CRYPTO
- ROXtar
- Really Safe A,,,
- Rolling Number Game
6. MISC
- pyepyepye
- I can't see
- Prototype

## [WEB] Apache

### 문제 설명
유지 보수가 진행중인 데몬팀의 웹 사이트가 있어요! 취약점을 찾아서 플래그를 획득하세요 플래그는 `/this_is_flag` 에 있답니다.
> https://drive.google.com/file/d/1RrmcFX9CS6CYwFIWXZ2jZgh0cqKUXJyD/view?usp=sharing


## [WEB] Apache2

### 문제 설명
소 잃고 외양간 고치기, 취약점을 패치했다지만 어딘가 부족한 점이 있어요. 찾아낼 수 있을까요? 플래그는 `/flag` 경로에 있습니다.
> https://drive.google.com/file/d/1Ikd7vHINuZ9rfwYkCqy4IinQOwID2ZtG/view?usp=sharing

## [WEB] Delicious cookie

### 문제 설명
쿠키보다 더 맛있는 게 있나?
숨어 있는 디저트를 찾아보자!
> https://drive.google.com/file/d/1jU3_tRCINIhUoovUdORtVAYpoiieL1rc/view?usp=sharing

## [WEB] Memo

### 문제 설명
메모를 남길 수 있는 서비스입니다. 
해당 서비스의 취약점을 찾아 flag를 획득하세요!

> https://drive.google.com/file/d/1ELaqSdnEA06gEqZ0xNxKaYDGDjOSqYcR/view?usp=sharing

## [WEB] Basic Auth

### 문제 설명
어디로든 문~~~ 은 잠겨있습니다. 열쇠가 필요하신가요?

> https://drive.google.com/file/d/1DITZ2cvlAyfc0wPoyyMbCqkTkIUnCvk7/view?usp=sharing

## [WEB] 합격자 발표

### 문제 설명
아기다리고기다리던 데몬대학교 합격자가 발표되었습니다~

> https://drive.google.com/file/d/1a8akzqjc5PrEsWxRzQLoCYvbDmP8DB2z/view?usp=sharing

## [WEB] Simple PHP

### 문제 설명
flag is at `/flag`

> https://drive.google.com/file/d/1zm0G2BC0tFpifNK2hyu9B5LadBf8xDiZ/view?usp=sharing

## [PWN] Simple Pwn

> https://drive.google.com/drive/folders/1MPbaoS6BadBuVgSiuG7wapx8aw9-0RB1

## [PWN] beginner

### 문제 설명
buf가 실행될 때마다 주소가 변경되는 이유는 무엇입니까?

> https://drive.google.com/drive/folders/14LPw9a1hS7N_1cZiooZiiaimZtyFRdWN?usp=sharing

## [PWN] Invitation

### 문제 설명
제 24회 해킹캠프에 초대받은 당신!
참가하기 위해 초대코드와 비밀번호를 입력해보자 :)

---
    Ubuntu: 18.04
    Compile: gcc -o invitation invitation.c -fno-stack-protector -z execstack -mpreferred-stack-boundary=2 -no-pie -m32
    Arch:     i386-32-little
    RELRO:    Partial RELRO
    Stack:    No canary found
    NX:       NX disabled
    PIE:      No PIE (0x8048000)
    RWX:      Has RWX segments
---

> https://drive.google.com/file/d/1A-GzXgmkC0xAA-OEPRblfiadrVL1CpsF/view?usp=sharing

## [PWN] Shell

### 문제 설명
기본 중에 기본!! 플래그는 '(플래그 위치 예정)'에 위치하고 있다. 기본에 충실하게 셸을 만들어 보자.

---
    Arch:     amd64-64-little
    RELRO:    Full RELRO
    Stack:    No canary found
    NX:       NX enabled
    PIE:      PIE enabled
---

> https://drive.google.com/file/d/1tbhJZSFtVE1yIhi1uZoWAJT0f04vC908/view?usp=sharing

## [PWN] ssmash

### 문제 설명
ㅅ,,스택이 넘친다,, 면,,,? 어떤 일이 일어나려나

---
    Arch:     i386-32-little
    RELRO:    Partial RELRO
    Stack:    Canary found
    NX:       NX enabled
    PIE:      No PIE (0x8048000)
---

---
	Ubuntu : 18.04
	Complie : gcc -o ssmash ssmash.c -m32 -no-pie -fstack-protector -z relro -mpreferred-stack-boundary=2 -fno-pic
---

> https://drive.google.com/file/d/1sVC-FdOEtEBNwcC1h2Z6za42Pj1gS715/view?usp=sharing


## [REV] Count

### 문제 설명
카운트 번호에 맞춰 문자열이 생성되는 모바일 애플리케이션이다. 해당 앱을 통해 HackingC@mP 라는 문자열을 생성하였다. 이 문자열을 생성하기 위한 카운트 번호는 어떤 번호로 구성되어 있을까? 찾아낸 번호를 flag 양식에 포함하세요! 카운팅 스타~ 밤하늘에 퍼어어얼~

---
	e.g. d e m o n = 3 4 5 6 7 인 경우 HCAMP{34567}
---

> https://drive.google.com/file/d/1GgEPXFCjGyQb5PqcxKopk7vrA-Ur3pqy/view?usp=sharing

## [REV] Baby Crack

### 문제 설명
Content: key 값이 khngEe일 때 name 값은 무엇일까? name 값을 flag 값 양식에 포함하세요!

---
	e.g. HCAMP{babycrack}
---

> https://drive.google.com/file/d/1KMgqSkxza9gCsA5nzFJAtNshVCFG2dDE/view?usp=sharing

## [REV] CompReverse

### 문제 설명
주어진 샘플을 분석하여, 아래의 문자열을 비밀을 풀어주세요.

---
	\x4b\x56\x42\x5d\x53\x6b\x31\x20\x31\x22\x5c\x41\x6a\x77\x66\x62\x5c\x49\x66\x71\x71\x68
---

> https://drive.google.com/file/d/1yTFLdw97iJFwe9IXwlCpXxoJw_QFoC45/view?usp=sharing

## [REV] Encryptor

### 문제 설명
It is just enctyptor
(out.txt와 동일한 파일을 만드는 입력값을 찾아주세요!)

> https://drive.google.com/file/d/1g_KOqJWDcMo776it42bf25TtzHYt3eNW/view?usp=sharing

## [REV] BaseCamp

### 문제 설명
Welcome to hacking base camp!
(out.txt와 동일한 파일을 만드는 입력값을 찾아주세요!)

> https://drive.google.com/file/d/1ha-imUO4aew7SmhszgZFiZm7Rzmv_LQM/view?usp=sharing

## [FORENSIC] DEMON MALL

### 문제 설명
데몬이네 쇼핑몰이 의문의 해커로부터 공격을 받아 해킹을 당했어요 ㅠㅠ 해킹 당한 서버를 분석하여 공격자의 실체를 파악해주세요@@

[플래그 포맷]

`HCAMP{공격이 최초 발생한 시각_공격기법_해커가 얻은 정보_공격자가 은닉한 메시지}`
- 플래그에 포함되는 문자는 모두 소문자입니다.

[문제 풀이 시 참고사항]

1. 공격이 최초 발생한 시각은 제공 해드린 패킷 캡처 파일의 패킷 정보 내 “Epoch Time”을 활용합니다. (예시 161645123569.360000 → 1645123569)
2. 해커가 얻은 정보는 쇼핑몰과 관련되어 있으며 유출 시 위험 수준이 높은 고 위험군 정보이며 파일명을 의미합니다. (예시. /etc/test.txt → test.txt)
3. 공격자가 은닉한 메시지의 포맷을 입력하실 때 _(underline)을 제거하고 모두 붙여서 입력해주세요!


[VM 설정 방법 및 문제 다운로드]

> https://bit.ly/3uT6ffc
> https://drive.google.com/drive/folders/1WgrWVhaC9tp9IJ-WJBxurREx-ttZt4Ns?usp=sharing

## [FORENSIC] find clue!

###Content: 취약한 앱을 통해 블랙 해커가 민감한 정보를 탈취했다. 아래 3가지 단서를 찾아라!
1. 외부 저장소에 민감한 정보가 기록되었다. 해당 파일 이름은?
e.g. password.txt -> password

2. 외부 저장소로 민감한 정보를 저장하는 앱의 이름은?
e.g. com.asdf.hackingcamp -> hackingcamp

3. 해커가 이동한 위치 흔적을 남겼다. 해당 위치의 나라 이름은? (소문자)
e.g. Gyeongju -> korea

`HCAMP{filename_appname_countryname}`
> https://drive.google.com/file/d/1JDEkZjlgUiHZuk1gX9ny1B1yisO2ycmP/view?usp=sharing

## [FORENSIC] Art Gallery

### 문제 설명
데몬이는 미술관을 방문했다. 사진을 통해 여러 정보를 알아내어라. 
작품명에 띄어쓰기가 있다면, 띄어쓰기를 허용한다.
구글에 있는 미술관 좌표를 사용해서는 안된다.
작품명은 한글이다.

```HCAMP{Latitude_Longitude_Figure Name_2022:02:19_00:00:00}```
> https://drive.google.com/file/d/1RutjZIKykL5ycIXddauDfQd0nWuKud4-/view?usp=sharing

## [CRYPTO] ROXtar

### 문제 설명
락스타가 되고 싶어요!

> https://drive.google.com/file/d/1kRDgv9bD8MMvYrYK6EfL1E9wVDP9e3Ms/view?usp=sharing

## [CRYPTO] Really Safe A,,,

### 문제 설명
이거이거 정말 안전한데 표현할 방법이 없네,,,


> https://drive.google.com/file/d/16KgzdFrp8Tp8Sx5CvdXm9OnRS2QJ8Bxy/view?usp=sharing

## [CRYPTO] Rolling Number Game

### 문제 설명
RPG가 아니라 RNG에요 ㅎㅎ;;


> https://drive.google.com/file/d/1NMSt67QVsgj8pLSTdxX8KJOExbLTk_zS/view?usp=sharing

## [MISC] pyepyepye

### 문제 설명
3문제 풀면 플래그가 나옵니다.

> https://drive.google.com/file/d/1RsdTU5tslBkAWWW2bkchy7rd34T2V7Hl/view?usp=sharing

## [MISC] I can't see

### 문제 설명
나는 아무것도 볼 수 없어,,,

> https://drive.google.com/file/d/1eQQBOfpjyxpRWuCRwhXmMByCmavw52Xa/view?usp=sharing

## [MISC] Prototype

### 문제 설명
flag : cmRvY3V3YxZFE3dSeBMYVXkSc1d5EUlLeHYQVkdwHBw=
hint : xor key : 0x21

플래그 따는 맛을 보고싶으신 분들을 위한 문제입니다.
간단한 xor과 base64

---