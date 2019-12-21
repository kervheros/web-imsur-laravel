<?php namespace IMSUR;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Carbon\Carbon;
use DB;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['ci','name','direccion','telefono','email', 'password','path','confirmed','$confirmation_code','cod_prov'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

/**
 public function liquido(){
	 return $this->hasMany(liquidacion::class, 'cod_proveedor');
 } */


	public function setPasswordAttribute($valor){
		if(!empty($valor)){
			//$this->attributes['password'] =($valor);
			$this->attributes['password'] =\Hash::make($valor);
		}
	}
	//buscador



	public function scopeNombre ($query, $nombre){
		if($nombre)
		return $query -> where('name','LIKE',"%$nombre%");
	}
	//subir imagenes
	public function setPathAttribute ($path){
		$this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
		$name = Carbon::now()->second.$path->getClientOriginalName();
		\Storage::disk('local')->put($name, \File::get($path));
	}

	/*public static function Usuarios(){
		return DB::table('users')
			->select('users.*')
			->get();
	}*/

}
