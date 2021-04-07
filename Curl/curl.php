$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, "  Curl URL" );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt( $ch, CURLOPT_POST, 1 );
curl_setopt( $ch, CURLOPT_POSTFIELDS, array(  Curl Agumente  ) );
$result = curl_exec( $ch );
if ( curl_errno( $ch ) )
{
echo 'Error:' . curl_error( $ch );
}
curl_close( $ch );