<?php

use google\appengine\api\cloud_storage\CloudStorageTools;

class Log
{
	private $path = 'gs://as_logging/logs/';
	public function __construct()
	{
		// $this->path = dirname(__FILE__) . $this->path;
		$this->path = $this->path;		
	}
	
	public function write($message, $fileSalt)
	{
		die($message);

		/**

TODO: stack driver 나 다른곳에 로그를 보내야 함.
GCS는 +a 로 파일 open 안됨

		*/

		$date = new DateTime();
		$log  = $this->path . $date->format('Y-m-d') . "-" . md5($date->format('Y-m-d') . $fileSalt) . ".txt";
		if (is_dir($this->path)) {
			if (!file_exists($log)) {
				$fh = fopen($log, 'a+') or die("Fatal Error !");
				$logcontent = "Time : " . $date->format('H:i:s') . "\r\n" . $message . "\r\n";
				fwrite($fh, $logcontent);
				fclose($fh);
			} else {
				$this->edit($log, $date, $message);
			}
		} else {
			if (mkdir($this->path, 0777) === true) {
				$this->write($message, $fileSalt);
			}
		}
	}
	private function edit($log, $date, $message)
	{
		$logcontent = "Time : " . $date->format('H:i:s') . "\r\n" . $message . "\r\n\r\n";
		$logcontent = $logcontent . file_get_contents($log);
		file_put_contents($log, $logcontent);
	}
}