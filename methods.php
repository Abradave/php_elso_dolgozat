<?php
class Methods
{

    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "php_elso_dolgozat");
    }

    function getAll()
    {
        $sql = "SELECT * FROM tomegkozlekedesi_eszkozok";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function newData($data)
    {
        $sql = "INSERT INTO tomegkozlekedesi_eszkozok (jarmu,gyartasi_ev,kotottpalyas,utas_kapacitas,gyartott_db)
                    VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $jarmu = $data['jarmu'];
        $gyartasiEv = $data['gyartasi_ev'];
        $kotottpalyas = $data['kotottpalyas'];
        $utasKapacitas = $data['utas_kapacitas'];
        $GyartottDb = $data['gyartott_db'];
        if ($kotottpalyas == false) {
            $kotottpalyas = 0;
        }
        if ($kotottpalyas != false) {
            $kotottpalyas = 1;
        }
        $stmt->bind_param("sssss", $jarmu, $gyartasiEv, $kotottpalyas, $utasKapacitas, $GyartottDb);
        $stmt->execute();
    }
}
