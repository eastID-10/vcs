<?php
include_once 'HewanLaut.php';

class Ikan implements HewanLaut{
    public function bernapas(): void{
        echo "Ikan Bernapas Dengan Insang <br>";
    }
    public function berenang(): void{
        echo "Ikan Berenang Dengan Sirip <br>";
    }
    public function berkembangbiak(): void{
        echo "Ikan Berkembang Biak Dengan Bertelur <br>";
    }

}