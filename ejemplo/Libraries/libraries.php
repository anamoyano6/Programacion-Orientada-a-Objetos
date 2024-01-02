<?php 
class Libraries{
	public static function crearTabla($datos){
		echo '
		<table cellspacing=0 border=1>
			<thead>
			<tr>';
		foreach ($datos as $dato) {
			foreach($dato as $key => $value){
				echo '<th>'.$key.'</th>';
			}
			break;
		}
	
		echo '
			</tr>
			</thead>
			<tbody>
			';
		//Es lo mismo que en python
		// for dato in datos:
		foreach ($datos as $dato) {
			echo '<tr>';
			foreach($dato as $key => $value){
				echo '
					<td>'.$value.'</td>
				';
			}
			echo '</tr>';
		}
		echo '
			
			</tbody>
		</table>
		';
	}
}
?>