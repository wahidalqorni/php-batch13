<?php

    include 'App/Controllers/DriverController.php';

    $driver = new DriverController();
    
    // jika d url ada parameter Id_driver
    if(isset($_GET['Id_driver'])) {
        $Id_driver = $_GET['Id_driver'];

        // panggil function delete yg ada di DriverController.php
        $driver->delete($Id_driver);
    }

?>