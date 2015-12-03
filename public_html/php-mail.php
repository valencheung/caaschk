
<?php
  $to =" valen01@gmail.com "; //收件者
  $subject = "test"; //信件標題
  $msg = "smtp mailing";//信件內容
  $headers = "From: casschk@gmail.com"; //寄件者
  
  if(mail("$to", "$subject", "$msg", "$headers")):
   echo "信件已經發送成功。";//寄信成功就會顯示的提示訊息
  else:
   echo "信件發送失敗！";//寄信失敗顯示的錯誤訊息
  endif;
?>
