<?php
// อ่านค่าจาก raw data (POST)
$raw = file_get_contents( 'php://input' );

// แปลง raw data เป็น array
$array = json_decode( $raw, 1 );

// แสดง array
print_r( $array );
