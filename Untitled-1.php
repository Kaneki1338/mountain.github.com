
<?
	if(!empty($_POST['submit']))//существует и не пустое значение
	{
		if(!empty($_POST['email']))
		{
			if(!empty($_POST['name'])){$name = $_POST['name'];}else{$name = "";}
			if(!empty($_POST['tel'])){$tel = $_POST['tel'];}else{$tel = "";}
			
			$to = $_POST['email']; 

			$subject = "Отправка письма из формы выбора тура"; 

			$message ="
			<p><b>Здравствуйте! Благодарим за Ваш выбор!</b></p>
			<p><b>Вот Ваши данные:</b></p>
			<p>Имя: ".$name."</p>
			<p>Телефон: ".$tel."</p>
			<p>E-mail: ".$to."</p>
			";		 
			$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
			$headers .= "From: <ssv@osoznannoe-pitanie.ru>\r\n"; 
			$headers .= "Reply-To: ssv@osoznannoe-pitanie.ru\r\n";
			
			mail($to, $subject, $message, $headers);
			
			echo"Письмо успешно отправлено!";
		}
		
	}

?>

<!DOCTYPE html>

	<head>
	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="ru" />
		<title>Выбор тура</title>
		<meta name="keywords" content="Здесь ключевые слова"/>
		<meta name="description" content="Здесь описание страницы" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		
		<link rel="icon" href="../favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
		<base target="_blank" />
		
		<style type="text/css">		
		
		</style>	
	
	</head>

  <body style="background-color: #edf1f5; padding-left: 0px; padding-right: 0px;">
	
		<section class="anceta"><!-- Анкета-->
           <div class="floatleft">
            <h1 class="ht1">Нужна помощь с<br> выбором тура?</h1>
            <p class="ht2">Заполните форму, наш менеджер свяжется с<br> вами в ближайшее время и подберет подходищий<br> тур.</p>
			 <form action="Untitled-1.php" method="POST">
                <input type="name" name="Name" placeholder="Имя" required placeholder="Обязательное поле" pattern="[A-Яa-яЁё]{4,}"><br>
                <p class="p-form">имя должно седержать не менее 4 букв русского алфавита</p>
                <input type="tel" name="tel" placeholder="Номер" required placeholder="Обязательное поле" pattern="+([7]{1})-([0,9]{10})"><br>
                <p class="p-form">формат записи: +7-ххх-ххххххх</p>
                <input type="email" name="email" placeholder="E-Mail" required placeholder="Обязательное поле"><br>
                <input class="submit" type="submit" name="submit" value="Отправить" >
                <p class="p-form1">Нажимая на кнопку, вы соглашаетесь с условиями обработки<br> персональных данных.</p>
             </form>                
           </div>
             <div class="print1"></div>                     
        </section>
		<?		
		
			
		?>

  </body>

<!-- #EndTemplate -->

</html>