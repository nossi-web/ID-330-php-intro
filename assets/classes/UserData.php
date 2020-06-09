<?php
/**
* filename: UserData.php
*/

class UserData {

    public $_lastName = "Norris";

    public $_firstName = "Joel";

    public $_email = "jnorris@nossi.edu";

    public $_address = "123 AnyStreet, AnyTown, ST 04911";

    public $_userProfileImage = "assets/images/user-profile-image.jpg";

    function __construct() 
    {
        
    }

    function __construct1( $lastName, $firstName, $email, $address, $imageURL ) {

        $this->_lastName = $lastName;
        $this->_firstName = $firstName;
        $this->_email = $email;
        $this->_address = $address;
        $this->_userProfileImage = $imageURL;


    }

}

?>