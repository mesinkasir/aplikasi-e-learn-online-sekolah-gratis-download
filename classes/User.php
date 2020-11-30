<?php 
 $filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Session.php');
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');

class User{
	private $db;
	private $fm;
	function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}


	public function userRegistration($name,$username,$password,$email){
    
    $name = $this->fm->validation($name);
    $username = $this->fm->validation($username);
    $password = $this->fm->validation($password);
    $email = $this->fm->validation($email);

    $name = mysqli_real_escape_string($this->db->link,$name);
    $username = mysqli_real_escape_string($this->db->link,$username);
    $email = mysqli_real_escape_string($this->db->link,$email);

    if ($name == "" || $username == "" || $password == "" || $email == "") {
      echo "<span class='error'>Data tidak boleh kosong</span>";
      exit();
    }elseif (filter_var($email,FILTER_VALIDATE_EMAIL) === false) {
      echo "<span class='error'>Alamat email salah</span>";
      exit();
    }else{
      $chkquery = "SELECT * FROM tbl_user WHERE email = '$email'";
      $chkresult = $this->db->select($chkquery);
      if ($chkresult != false) {
        echo "<span class='error'>Email Sudah digunakan</span>";
        exit();
      }else{

         $password = mysqli_real_escape_string($this->db->link,md5($password));
        $query = "INSERT INTO tbl_user(name, username, password, email) VALUES('$name','$username','$password','$email')";
         $inserted_row = $this->db->insert($query);
         if ($inserted_row) {
            echo "<span class='success'>Registasi sukses </span>";
         exit();
         }else{
          echo "<span class='error'>Error.. </span>";
          exit();
         }
      }
    }

	}

  public function userLogin($email,$password){
    $email = $this->fm->validation($email);
    $password = $this->fm->validation($password);
    $email = mysqli_real_escape_string($this->db->link, $email);
   

    if ($email == "" || $password == "") {
      echo "empty";
      exit();
    }else{
      $password = mysqli_real_escape_string($this->db->link,md5($password));
      $query = "SELECT * FROM tbl_user WHERE email='$email' AND password='$password'";
      $result = $this->db->select($query);
      if ($result != false) {
       $value = $result->fetch_assoc();
       if ($value['status'] == '1') {
         echo "disable";
         exit();
       }else{

            Session::init();
            Session::set("login", true);
            Session::set("userid", $value['userid']);
            Session::set("username", $value['username']);
            Session::set("name", $value['name']);
            
       }
      }else{
        echo "error";
         exit();
      }
    }
    
  }

  public function getUserData($userid){
      $query = "SELECT * FROM tbl_user ORDER BY userid DESC";
       $result = $this->db->select($query);
       return $result;
  }

  public function updateUserData($userid, $data){

   $name = $this->fm->validation($data['name']);
    $username = $this->fm->validation($data['username']);
    $email = $this->fm->validation($data['email']);

    $name = mysqli_real_escape_string($this->db->link,$name);
    $username = mysqli_real_escape_string($this->db->link,$username);
    $email = mysqli_real_escape_string($this->db->link,$email);

    $query = "UPDATE tbl_user 
                SET
                name = '$name',
                username = '$username',
                email = '$email'
                WHERE userid = '$userid'";
                $updated_row = $this->db->update($query);
              if ($updated_row) {
                  $msg = "<br/><span class='success'>Data berhasil di update  </span>";
                  return $msg;
                }else{
                     $msg = "<br/><span class='error'>Data tidak dapat di update  </span>";
                  return $msg;
                } 
  }

     public function getAllUser(){
       $query = "SELECT * FROM tbl_user";
       $result = $this->db->select($query);
       return $result;
    }

    public function disableUser($userid){
      $query = "UPDATE tbl_user 
                SET
                status = '1'
                WHERE userid = '$userid'";
                $updated_row = $this->db->update($query);
              if ($updated_row) {
                  $msg = "<br/><span class='success'>Siswa non aktif </span>";
                  return $msg;
                }else{
                     $msg = "<br/><span class='error'>Siswa tidak Di non aktifkan  </span>";
                  return $msg;
                } 
    }

    public function enableUser($userid){

         $query = "UPDATE tbl_user 
                SET
                status = '0'
                WHERE userid = '$userid'";
                $updated_row = $this->db->update($query);
              if ($updated_row) {
                  $msg = "<br/><span class='success'>Siswa sudah aktif </span>";
                  return $msg;
                }else{
                     $msg = "<br/><span class='error'>Siswa tidak aktif  </span>";
                  return $msg;
                } 

    }

    public function deleteUser($userid){
             $query = "DELETE FROM tbl_user WHERE userid = '$userid'";
                $deldata = $this->db->delete($query);
              if ($deldata) {
                  $msg = "<br/><span class='success'>Siswa berhasil dihapus  </span>";
                  return $msg;
                }else{
                     $msg = "<br/><span class='error'>Error...   </span>";
                  return $msg;
                } 
    }
}


 ?>