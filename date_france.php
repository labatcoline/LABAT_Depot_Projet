<!-- Fonction qui affiche la date -->
<?php
	function date_france($date){
		/* La date est séparée par '-' */
		$membre =explode('-', $date);
		
		/* Le numéro de mois est remplacé par le mois en lettre */
		if ($membre[1]=='01'){
			$membre[1]='Janvier';
		} else if ($membre[1]=='02') {
			$membre[1]='Février';
		} else if ($membre[1]=='03') {
			$membre[1]='Mars';
		} else if ($membre[1]=='04') {
			$membre[1]='Avril';
		} else if ($membre[1]=='05') {
			$membre[1]='Mai';
		} else if ($membre[1]=='06') {
			$membre[1]='Juin';
		} else if ($membre[1]=='07') {
			$membre[1]='Juillet';
		} else if ($membre[1]=='08') {
			$membre[1]='Août';
		} else if ($membre[1]=='09') {
			$membre[1]='Septembre';
		} else if ($membre[1]=='10') {
			$membre[1]='Octobre';
		} else if ($membre[1]=='11') {
			$membre[1]='Novembre';
		} else {
			$membre[1]="Décembre";
		}
		
		/* La date était affichée sous forme AAAA-MM-JJ */
		/* On l'affiche sous forme JJ-MM-AAAA */
		$date = $membre[2].' '.$membre[1].' '.$membre[0];
		return $date;
	}
?>