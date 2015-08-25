
<?php 

class ct_hd extends Model{

	public $table = 'chi_tiet_dh';
	public $primary_key = 'ma_dh';

	public function themcthd($postdata)
	{
		return db_insert($this->table,$postdata);
	}
	public function layctdh($ma){
		$sql="SELECT * FROM {$this->table} a join san_pham b on a.ma_sp=b.ma_sp where ma_dh='$ma'";

		return db_get_all($sql);
	}
}
?>