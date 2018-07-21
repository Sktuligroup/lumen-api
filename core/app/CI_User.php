<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CI_User extends Model{
  protected $table = 'ci_users';
 	protected $fillable = ['user_id', 'username', 'first_name'];

}
?>
