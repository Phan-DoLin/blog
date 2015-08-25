<?php 

class Admin extends Model
{
	public $table = 'blog';
    public $primary_key = 'ID';


   	public function add_blog($postData)
   	{
   		return db_insert($this->table, $postData);
   	}

   	public function delete_blog($maso)
   	{
   		$dkien = "ID=".$maso;
   		return db_delete($this->table,$dkien);
   	}
      public function update_blog($maso)
      {
         $dkien = "ID=".$maso;
         $bien=postData();

         return db_update($this->table,$bien,$dkien);
      }
}