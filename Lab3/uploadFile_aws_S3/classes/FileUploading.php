<?php
use Aws\S3\S3Client;
class FileUploading
{
    private $_bucket_name;
    private $_key;
    private $_secret_key;
    private $_region;
    private $_s3;
    public function __construct()
    {
        $this->_bucket_name=AWS_BUCKET_NAME;
        $this->_key=AWS_KEY;
        $this->_secret_key=AWS_KEY_SECRET;
        $this->_region=AWS_REGION;
    }
    private function configure_s3_client()
    {
        $this->_s3= S3Client::factory(array(
            'credentials' => array(
                'key' =>  $this->_key,
                'secret' => $this->_secret_key,
            ), 'region' => $this->_region,
            'version' => 'latest'));
    }
    public function upload_file($new_file_name,$temp_file_location)
    {
        $this->configure_s3_client();
        $this->_s3->upload($this->_bucket_name,$new_file_name,$temp_file_location); 
    }
}