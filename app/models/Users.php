<?php 
	namespace App\Models;

	use Core\{ Model, Cookie, Session, Helpers};
	use App\Models\{ Users, UserSessions };

	class Users extends Model {
		private $_isLoggedIn, $_sessionName, $_cookieName, $_confirmedPassword;
		public static $currentLoggedInUser = null;

    // Table field as a method
		public $id, $username, $email, $password, $first_name, $last_name, $access_control_level, $deleted = 0, $about;

		public function __construct($user = "") {
			$table = "users";
			parent::__construct($table);
			$this->_sessionName = CURRENT_USER_SESSION_NAME;
			$this->_cookieName = REMEMBER_ME_COOKIE_NAME;
			$this->_softDelete = true;

			if (!$user == "") {
				if (is_int($user)) {
					$u = $this->_db->findFirst(
						'users', [
							"conditions" => 'id = ?',
							"bind" => [$user],
							"App\Models\Users"
						]
					);
				}
				else {
					$u = $this->_db->findFirst(
						'users', [
							"conditions" => 'email = ?',
							"bind" => [$user],
							"App\Models\Users"
						]
					);
				}
				if ($u) {
					foreach ($u as $key => $value) {
						$this->key = $value;
					}
				}
			}  
		}

		public function login($remember_me = false) {
			return Session::get($this->_sessionName, $this->id);
		}


    public function getUserInfo($id) {
      $sql = "
      SELECT
        users.*,
        recipes.*
      FROM
        users
      LEFT JOIN recipes ON recipes.user_id = users.id
      WHERE users.id = ". $id . "";

      return $this->query($sql)->results();
    }



 		public function setConfirmedPassword($value) {
			$this->_confirmedPassword = $value;
		}
 




	}

 ?>
