<?php 

	public class ListaDeSistemasOperativos{

		//creamos el string necesario para conectarnos posteriormente a la base de datos ya creada
		$datos_db=("host='192.168.160.40' dbname='prueba1' user='postgres' password='postgres'");

		
		//Agrega nombre de sistema operativo a una base de datos tipo lista
		public function agregarSistema($nombre){

			//conectamos a la base de datos
			$link=pg_connect($datos_db);


			pg_close($link);

		}

		public function getSistemas(){



		}
