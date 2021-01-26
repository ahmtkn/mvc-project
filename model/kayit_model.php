<?php
	
	class kayit_model extends Model{
		function __construct()
		{
			parent::__construct();
		}
		function kontrolet($tabload,$sutunlarim,$veriler)
		{
			return $this->db->Ekle($tabload,$sutunlarim,$veriler);
		}
		
		function listeleme($tabload,$kosul)
		{
			return $this->db->listele($tabload,$kosul);
		}
		
		function silme($tabload,$kosul)
		{
			return $this->db->sil($tabload,$kosul);
		}
		
		function kayitguncel($tabload,$sutunlar,$veri,$kosul)
		{
			return $this->db->guncelle($tabload,$sutunlar,$veri,$kosul);
		}
		
		function kayitara($tabload,$kosul)
		{
			return $this->db->ara($tabload,$kosul);
		}
	}


?>