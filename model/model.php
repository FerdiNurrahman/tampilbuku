<?php

class Model
{
    private $arr_data;
    private $arr_header;

    public function __construct()
    {
        $this->arr_data = array();
        $this->arr_header = array();
    }

    public function get_header()
    {
        $this->arr_header = array("JUDUL", "TAHUN", "PENGARANG", "PENERBIT");
        return $this->arr_header;
    }

    public function get_data()
    {
        $this->arr_data = array(
            array("Beranak Dalam Kubur", 2017, "Kurdianto", "Politala Press"),
            array("Membuat Donat Sendiri", 2018, "Ferdi Nurrahman", "Politala Press"),
            array("Bertahan Dari Badai", 2023, "M. Rofagi Yusuf", "Politala Press"),
            array("Tanpa Aku", 2022, "David Hadi Nugroho", "Politala Press"),
        );
        return $this->arr_data;
    }
}
?>
