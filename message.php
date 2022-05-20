<?php
  $to = "ketilandthelasthope@gmail.com"; // туда отправляется сообщение
  $subject = "Тема сообщения"; // тема сообщения
  $message = "Сообщение"; // непосредственно само сообщение
  $headers = "Content-type: text/plain; charset=utf-8 \r\n";// шапка сообщения: тип письма, от кого оно, и кому отправить ответ на письмо

if ($_POST){
		// проверка на то, переданы параметры формы и пусты ли они
		if(isset($_POST["username"])){
			// если параметр есть, присваеваем ему переданное значение
			$name=trim(strip_tags($_POST["username"]));
		}
		if(isset($_POST["usernumber"]))
		{
			$number=trim(strip_tags($_POST["usernumber"]));
		}
		if (isset( $_POST["question"])) {
			$question=trim(strip_tags($question));
		}
			// создаем письмо
			$message="<html>";
				$message.= "<body>";
				$message.= "Телефон: ".$number;
				$message.= "<br />";
				$message.= "Имя: ".$name;
				$message.= "<br />";
				$message.= "Вопрос: ".$question;
				$message.= "</body>";
			$message  .= "</html>";
			// письмо сформировано
			// посылаем письмо
			mail ($to, $subject, $message, $headers);
}
else
{
	exit;
} 
?>