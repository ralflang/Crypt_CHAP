<?php

/**
* Classes for generating packets for various CHAP Protocols:
* CHAP-MD5: RFC1994
* MS-CHAPv1: RFC2433
* MS-CHAPv2: RFC2759
*
* @package Crypt_CHAP
* @author  Michael Bretterklieber <michael@bretterklieber.com>
* @access  public
* @version $Revision$
*/
/**
 * class Crypt_CHAP
 *
 * Abstract base class for CHAP
 *
 * @package Crypt_CHAP
 */
class Crypt_CHAP extends \PEAR
{
    /**
     * Random binary challenge
     * @var  string
     */
    public $challenge = \null;
    /**
     * Binary response
     * @var  string
     */
    public $response = \null;
    /**
     * User password
     * @var  string
     */
    public $password = \null;
    /**
     * Id of the authentication request. Should incremented after every request.
     * @var  integer
     */
    public $chapid = 1;
    /**
     * Constructor
     *
     * Generates a random challenge
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->generateChallenge();
    }
    /**
     * Generates a random binary challenge
     *
     * @param  string  $varname  Name of the property
     * @param  integer $size     Size of the challenge in Bytes
     * @return void
     */
    public function generateChallenge($varname = 'challenge', $size = 8)
    {
        $this->{$varname} = '';
        for ($i = 0; $i < $size; $i++) {
            $this->{$varname} .= \pack('C', 1 + \mt_rand() % 255);
        }
        return $this->{$varname};
    }
    /**
     * Generates the response. Overwrite this.
     *
     * @return void
     */
    public function challengeResponse()
    {
    }
}
