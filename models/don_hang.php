
<?php 

class don_hang extends Model{

	public $table = 'don_hang';
    public $primary_key = 'ma_dh';


    public function themkh($postdata)
    {

    	return db_insert($this->table,$postdata);
    }

    public function layttdh($where)
    {
    	$sql="SELECT * FROM {$this->table} {$where}";
    	return db_get_all($sql);
    }

    
    

}



?>