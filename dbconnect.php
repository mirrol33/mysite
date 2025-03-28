<?php
$servername = "localhost";  // 또는 Dothome에서 제공한 DB 주소
$username = "아이디";        // Dothome 계정과 동일
$password = "비밀번호";      // DB 생성 시 설정한 비밀번호
$database = "DB이름";        // Dothome에서 제공한 DB 이름

// MySQLi 연결
$conn = new mysqli($servername, $username, $password, $database);

// 연결 확인
if ($conn->connect_error) {
    die("DB 연결 실패: " . $conn->connect_error);
}
echo "DB 연결 성공!";
?>
