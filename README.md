# Create_WEB

HTML, PHP, MySQL, JS, Python 학습하여 웹사이트 구현<br/>
학습방법은 자율적으로 진행(오픈튜토리얼스. 점프투파이썬 추천)<br/>
※ 요구사항<br/>
  계정 : 회원가입 기능,   로그인 기능,  이메일 인증 <br/>
  게시판 : 글쓰기, 댓글, 추천, 파일 업로드<br/>
  검색 : 제목, 게시판 별, 전체, 내용 기준 검색<br/>
  조회수 : F5방지용 1시간 마다 갱신 가능하게<br/><br/>

※환경<br/>
Apache2.4<br/>
PHP7<br/>
MySQL 8.0.22<br/>
<br/>
문서<br/>
index.html -> 완(2023_02_05)<br/>
sing_in    -> 완(2023_02_04)<br/>
sign_up    -> 완(2023_02_04)<br/>
sign_out   -> 미완(2023_02_12)<br/><br/>

/board<br/>
main_board    -> 완(2023_02_04)<br/>
secret_board  -> 완(2023_02_04)<br/>
test_board    -> 완(2023_02_04)<br/>
write         -> 완(2023_02_04)<br/>
update        -> 미완(2023_02_15)<br/>
delete        -> 미완(2023_02_16)<br/><br/>

/user<br/>
profile       -> 미완(2023_02_10)<br/>
settings      -> 미완(2023_02_11)<br/>
<br/>
기타<br/>
jwt<br/>
jwt_check<br/>
이메일 인증<br/>
파일 업로드<br/>
댓글, 추천<br/>
조회수<br/>

DB<br/>
<img src=image/1.png width=50px, height=50px>

user table<br/>
ID(PK) PW NickName FirstName LastName Address

article table<br/>
index(index - PK) board Title(str) Content File(longblob)  NickName(FK) PW
<!--대용량 데이터 업로드 https://anotherspringfield.tistory.com/100-->


JWT 공부<br/>
