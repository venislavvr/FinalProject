
<?php
include_once('includes/header.php')
?>

<form action="rez1.php" method="post">
	<h4>1. В кой ред двойките изрази НЕ са антоними?</h4>
	<p><input type="radio" name="ans1" value="neg"> Перфектен - Несъвършен</p>
	<p><input type="radio" name="ans1" value="neg"> Плюс - Минус</p>
	<p><input type="radio" name="ans1" value="pos"> Регулярен - Равномерен</p>
	<p><input type="radio" name="ans1" value="neg"> Регрес - Прогрес</p>



	<h4>2. В кои ред думите НЕ са синоними? </h4>
	<p><input type="radio" name="ans2" value="neg"> Интересен, Занимателен, Чудноват</p>
	<p><input type="radio" name="ans2" value="neg"> Колос, Великан, Исполин</p>
	<p><input type="radio" name="ans2" value="neg"> Нагъл, Нахален, Дързък</p>
	<p><input type="radio" name="ans2" value="pos"> Отчаян, Мрачен, Скептичен</p>


	<h4>3. В кой ред отношението между двойките изрази е различно от отношението в другите редове? </h4>
	<p><input type="radio" name="ans3" value="neg"> Дървена порта - Дървена глава</p>
	<p><input type="radio" name="ans3" value="neg"> Маслен портрет - Маслена боя</p>
	<p><input type="radio" name="ans3" value="pos"> Пълна програма - Пълен човек</p>
	<p><input type="radio" name="ans3" value="neg"> Полска теменуга - Полска писателка</p>
	<input type="submit" name="submit" value="Край на теста">
</form>
</div>

<?php
include_once('includes/footer.php')
?>