<?php

	echo "<body style = \" font-family: fangsong;\">";
	echo "<style>table, th, td {border: 1px solid black; margin-top: 0px;}</style>";
	echo "<h4>";

	//add
	echo "<table style = \"width: 100%;\">";
	echo "<tr>";
	echo "<th> ID </th>";
	echo "<th> Species </th>"; 
	echo "<th> Type1  </th>";
	echo "<th> Type2 </th>";
	echo "<th> Ability </th>"; 
	echo "<th> Hp  </th>";
	echo "<th> Attack </th>";
	echo "<th> Defense </th>";
	echo "</tr>";

	echo "</h4>";


	$RECHIELLS = array(
		array(1, 'Bulbasaur', 'Grass', 'Poison', 'Overgrow', 45, 49, 49),
		array(2, 'Ivysaur', 'Grass', 'Poison', 'Overgrow', 60, 62, 63),
		array(3, 'Venusaur', 'Grass', 'Poison', 'Overgrow', 80, 82, 83),
		array(4, 'Charmander', 'Fire', 'N/A', 'Blaze', 39, 52, 43),
		array(5, 'Charmeleon', 'Fire', 'N/A', 'Blaze', 58, 64, 58),
		array(6, 'Charizard', 'Fire', 'Flying', 'Blaze', 78, 84, 78),
		array(7, 'Squirtle', 'Water', 'N/A', 'Torrent', 44, 48, 65),
		array(8, 'Wartortle', 'Water', 'N/A', 'Torrent', 59, 63, 80),
		array(9, 'Blastoise', 'Water', 'N/A', 'Torrent', 79, 83, 100),
		array(10, 'Caterpie', 'Bug', 'N/A', 'Shield Dust', 50, 20, 55)
	); 

	foreach ($RECHIELL as $key) {
		echo "<tr> </tr>";
		foreach ($key as $value) {
			echo "<td> $value </td>";
		}
		echo "<br>";
	}

	echo "</table>";


	echo "<br>";
	echo "<b>Number of lines: </b>"; echo count($RECHIELL); echo "<br>";

	$favorite = $RECHIELL[0][1]; 

	echo "<b>Favorite pokemon: </b>" . $favorite;

	echo "<br><br>";
	echo "****************************************";
	echo "<br> <br>";

	echo "<h4>SPECIES: (Pokemons) <br></h4>";
	foreach($RECHIELL as $key => $item) {
    echo $item[1];
    echo "<br>";
    }

    //add
    echo "</h5>";
?>