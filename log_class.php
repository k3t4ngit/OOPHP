<?php

	class Log
			{
				private $_filename;
				private $_strData;
				
				public function write($filename, $strData )
				{
					$this->_filename=$filename;
					$this->_strData=$strData;
					$this->_checkPermission();
					$this->_checkData();
					$handle=fopen($this->_filename, 'a+');
					fwrite($handle, $this->_strData);
					fclose($handle);
				}
			
				public function read($filename)
				{
					$this->_filename=$filename;
					$this->_checkExists();
					$handle=fopen($this->_filename, 'r');
					return file_get_contents($this->_filename);
					fclose($handle);

				}
			

				private function _checkExists()
				{
					if (!file_exists($this->_filename))
					{
						die('File does not exists');
						# code...
					}
				}

				private function _checkPermission()
				{
					if(!is_writable($this->_filename))
					{
						die("Change permissions for ". $this->_filename);
					}
				}
				private function _checkData()
				{
					if(strlen($this->_strData)==0)
					{
						die('you must write something');
					}
				}
			}