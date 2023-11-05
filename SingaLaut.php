<?php
include_once 'HewanLaut.php';

class SingaLaut implements HewanLaut {
    public function bernapas(): void {
        echo "Singa Laut Bernapas Dengan Paru Paru <br>";
    }
    public function berenang(): void {
        echo "Singa Laut Berenang Dengan Memutar sirip belakangnya <br>";
    }
    public function berkembangbiak(): void {
        echo "Singa Laut Berkembang Biak Dengan Melahirkan <br>";
    }

}