<?php

class About{
    public function index($nama='Arzetia', $pekerjaan='Wirausaha')
    {
        echo"Haloo,nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo'About/page';
    }
}