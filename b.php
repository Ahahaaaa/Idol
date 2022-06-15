<?php
$mode = filter_input( INPUT_POST, 'mode', FILTER_SANITIZE_STRING );
$post_data['aidle'] = INSERT INTO aidle(aidle_no,aidle_name,aidle_birth,aidle_age,aidle_from)
VALUES(1,'秋元真夏','1993-08-20',28,'埼玉');
$post_data['aidle'] = INSERT INTO aidle(aidle_no,aidle_name,aidle_birth,aidle_age,aidle_from)
VALUES(2,'佐藤楓','1998-03-23',23,'愛知県');
$post_data['aidle'] = INSERT INTO aidle(aidle_no,aidle_name,aidle_birth,aidle_age,aidle_from)
VALUES(3,'齋藤飛鳥','1998-08-10',23,'東京都');
$post_data['aidle'] = INSERT INTO aidle(aidle_no,aidle_name,aidle_birth,aidle_age,aidle_from)
VALUES(4,'与田祐希','2000-05-05',22,'福岡県');
$post_data['aidle'] = INSERT INTO aidle(aidle_no,aidle_name,aidle_birth,aidle_age,aidle_from)
VALUES(5,'菅原咲月','2005-10-31',16,'千葉県');
$post_data['aidle'] = INSERT INTO aidle(aidle_no,aidle_name,aidle_birth,aidle_age,aidle_from)
VALUES(6,'金川紗耶','2001-10-31',20,'北海道');
$post_data['aidle'] = INSERT INTO aidle(aidle_no,aidle_name,aidle_birth,aidle_age,aidle_from)
VALUES(7,'井上和','2005-02-17',16,'神奈川');
$post_data['aidle'] = INSERT INTO aidle(aidle_no,aidle_name,aidle_birth,aidle_age,aidle_from)
VALUES(8,'黒見明香','2004-01-19',18,'東京都');
$post_data['aidle'] = INSERT INTO aidle(aidle_no,aidle_name,aidle_birth,aidle_age,aidle_from)
VALUES(9,'阪口珠美','2001-11-10',20,'東京都');
$post_data['aidle'] = INSERT INTO aidle(aidle_no,aidle_name,aidle_birth,aidle_age,aidle_from)
VALUES(10,'佐藤璃果','2001-08-09',20,'岩手県');
if( $mode === 'add' ){
    
} else if( $mode === 'update' ){
    
}
?>