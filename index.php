<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Обучение PHP</title>
	</head>
	<body align="center">
		<?php
			$obj = new class("Иван Иванов", 25, "Москва")
			{
				function __construct(public $name = "Не указано", public $age = 0, public $city = "Не определён")
				{
					$this->name = $name;
					$this->age = $age;
					$this->city = $city;
				}

				function __destruct()
				{
					echo "Вызов деструктора...";
				}

				function DisplayInfo()
				{
					echo "Имя пользователя: $this->name<br>";
					echo "Возраст пользователя: $this->age лет<br>";
					echo "Город пользователя: $this->city<br>";
				}
			};

			$obj -> DisplayInfo();

			echo "<br>";

			print_r($obj);

			echo "<br><br>";
		?>
	</body>
</html>