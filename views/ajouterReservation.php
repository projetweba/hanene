<?PHP
include "../entities/reservation.php";
include "../core/reservationC.php";

if (isset($_POST['product_name']) and isset($_POST['categorie_name']) and isset($_POST['quantite']) )
{
		$reservation1=new reservation($_POST['product_name'],$_POST['categorie_name'],$_POST['quantite']);


	//	var_dump($reservation1);
//}

$reservation1C=new reservationC();
$reservation1C->ajouterReservation($reservation1);
header('Location: Reserv.html');	
}
else
{
	echo "Champs";
}

?>