<?php

namespace App\Models;

use CodeIgniter\Model;

class GeneralModel extends Model
{
  public function __construct() {
  }

  public function hashing($login, $password, $type = null, $salt = null) {
    switch ($type)
    {
      case 'account':
        return strtoupper(sha1(strtoupper($login). ':' . strtoupper($password)));
        break;
      case 'bnet':
        return strtoupper(bin2hex(strrev(hex2bin(strtoupper(hash('sha256', strtoupper(hash('sha256', strtoupper($login)) . ':' . strtoupper($password))))))));
        break;
      case 'hex':
        $client = new UserClient($login, $salt);
        return strtoupper($client->generateVerifier($password));
      case 'srp6':
        // Constants
				$g = gmp_init(7);
				$N = gmp_init('894B645E89E1535BBDAD5B8B290650530801B18EBFBF5E8FAB3C82872A3E9BB7', 16);
				// Calculate first hash
				$h1 = sha1(strtoupper($username.':'.$password), TRUE);
				// Calculate second hash
				$h2 = sha1($salt.$h1, TRUE);
				// Convert to integer (little-endian)
				$h2 = gmp_import($h2, 1, GMP_LSW_FIRST);
				// g^h2 mod N
				$verifier = gmp_powm($g, $h2, $N);
				// Convert back to a byte array (little-endian)
				$verifier = gmp_export($verifier, 1, GMP_LSW_FIRST);
				// Pad to 32 bytes, remember that zeros go on the end in little-endian!
				$verifier = str_pad($verifier, 32, chr(0), STR_PAD_RIGHT);
				return $verifier;
        break;
      case 'db':
        return strtoupper(bin2hex(strrev(hex2bin(strtoupper(hash('sha256', strtoupper(hash('sha256', strtoupper($login)) . ':' . strtoupper($password))))))));
    }
  }
}
