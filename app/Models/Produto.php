<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    // prote/cted $table = 'produ'

	/**
	 * @return mixed
	 */
	public function getTable() {
		return $this->table;
	}
	
	/**
	 * @param mixed $table 
	 * @return self
	 */
	public function setTable($table): self {
		$this->table = $table;
		return $this;
	}
}
