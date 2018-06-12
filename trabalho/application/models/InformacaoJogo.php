<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class InformacaoJogo extends CI_Model{

   public function excalibur(){
       $excalibur = $this->db->query("SELECT * FROM TB_Item WHERE nm_Item = 'Excalibur'")->result_array()[0];
       return $excalibur;
   }
   
   public function morningStar(){
       $morningStar = $this->db->query("SELECT * FROM TB_Item WHERE nm_Item = 'Morning Star'")->result_array()[0];
       return $morningStar;
   }
   
   public function cajado(){
       $cajado = $this->db->query("SELECT * FROM TB_Item WHERE nm_Item = 'Cajado'")->result_array()[0];
       return $cajado;
   }
      
   public function armaduraGelo(){
       $armaduraGelo = $this->db->query("SELECT * FROM TB_Item Where nm_Item = 'Armadura de Gelo'")->result_array()[0];
       return $armaduraGelo;
   }
   public function armaduraFogo(){
       $armaduraFogo = $this->db->query("SELECT * FROM TB_Item Where nm_Item = 'Armadura de Fogo'")->result_array()[0];
       return $armaduraFogo;
   }
   public function escudo(){
       $escudo = $this->db->query("SELECT * FROM TB_Item Where nm_Item = 'Escudo'")->result_array()[0];    
   }
}
?>