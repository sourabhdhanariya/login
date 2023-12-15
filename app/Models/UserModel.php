<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

/**
 * Class UserModel
 *
 * @package App\Models
 *
 * @property int    $id
 * @property string $email
 * @property string $password
 */
class UserModel extends Model
{
    use HasFactory;

    protected $table = "user_master";
    public $timestamps = false;

    /**
     * @param string $email
     * @param string $password
     * @return null
     */
    public static function loginUser($email, $password)
    {
        $user = self::where('email', $email)->where('password', $password)->first();

        if ($user) {
            Session::put('id', $user->id);
            Session::put('email', $user->email);
            return $user;
        }
        return null;
    }
    /**
     * Log out 
     *
     * @return void
     */
    public static function logoutUser()
    {
        Session::forget('id');
    }
}
