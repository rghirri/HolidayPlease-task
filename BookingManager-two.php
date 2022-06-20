<?php

declare(strict_types=1);

ini_set('display_errors', 'on');
error_reporting(E_ALL);

class BookingManager
{
   public $db;

   private $status;

  	public function __construct()
	{
    $servername = "localhost";
    $username   = "root";
    $password   = "";
  
     $this->db = new PDO("mysql:host=$servername;dbname=hp1066", $username, $password);
     return $this->db;
 }
}
    class status extends BookingManager
{
    
    public function getStatus($bookingId, $organisationId): ?string
        {
            $sth = $this->db->query('SELECT * FROM bookings WHERE organisation_id = ' . $organisationId, PDO::FETCH_BOTH);

            $data = $sth->fetchAll(PDO::FETCH_ASSOC);

            foreach ($data as $row) {
                    if ($row['id'] == $bookingId){
                        $this->status = $row['status'];
                        return $this->status;
                    } 
            }
            
             return false;
        }
}
 
$manager = new status();
$booking = $manager->getStatus($_REQUEST['bookingId'], $_REQUEST['organisationId']);

echo 'Status: ' . $booking;