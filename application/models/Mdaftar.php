<?php
    class Mdaftar extends CI_Model{
        function buatpwd()
        {
            $kata="ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
            $password=substr(str_shuffle($kata),0,6);
            return $password;
        }
        function simpandaftar()
        {
            $NamaLengkap=$this->input->post('NamaLengkap');
            $Password=$this->buatpwd();
            $Alamat=$this->input->post('Alamat');
            $Telp=$this->input->post('Telp');
            $Email=$this->input->post('Email');

            $data=array(
                'NamaLengkap'=>$NamaLengkap,
                'Password'=>$Password,
                'Alamat'=>$Alamat,
                'Telp'=>$Telp,
                'Email'=>$Email,
            );
            $this->db->insert('tbdaftar',$data);
            echo "<script>alert('Data sudah disimpan');</script>";
            redirect('ctampil/daftar','refresh');
        }

    }
?>