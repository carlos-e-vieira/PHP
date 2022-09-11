<?php

try {

	echo '<h3>*** Try ***</h3>';

	if (!file_exists('nome_do_arquivo.php')) {
		
		throw new Exception('O arquivo Não existe');
		//throw new Error('O arquivo Não existe');

	}

} catch(Error $e) {

	echo '<h3>*** Catch Error ***</h3>';
	echo '<p style="color: red">' .$e. '</p>';

} catch(Exception $e) {

	echo '<h3>*** Catch Exception ***</h3>';
	echo '<p style="color: green">' .$e. '</p>';

} finally {

	echo '<h3>*** Finally ***</h3>';

}