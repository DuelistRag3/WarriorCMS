<?php
namespace App\Libraries;

class ConfigWriter
{

    public function write($file, $var, $newValue, $config = null)
    {
        if ($config != null)
        {
            $this->writeArrayValue($file, $var, $newValue, $config);
        }
        else
        {
            $this->writeSingleValue($file, $var, $newValue);
        }
    }

	public function writeArrayValue($file = null, $var = null, $newValue = null, $config = null)
	{
        if (!is_null($file) && !is_null($var) && !is_null($newValue) && !is_null($config))
        {
            $file = APPPATH . 'Config/'.$file.'.php';
            if (file_exists($file))
            {
                $PrimaryKey  = trim($var);
                $newValue  = "'$PrimaryKey' => '$newValue'";
                $config = '$'.$config;
                $stats = 'N';

                $buffer = "";
                $filePath = file($file);
                foreach ($filePath as $line) {
                    $data = explode(' ', trim($line));
                    if (count($data) > 1) {
                        $searchVar = trim($data[0]).' '.$config;
                        $foundVar = trim($data[0]).' '.trim($data[1]);
                        if ($searchVar === $foundVar) {
                            $stats = 'Y';
                        }
                        if (trim($data[0]) === "'$PrimaryKey'" && $stats === 'Y' ) {
                            $buffer .= str_replace(substr(trim($line), 0, -1), $newValue, $line);
                            $stats = 'N';
                        } else {
                            $buffer .= $line;
                        }
                    } else {
                        $buffer .= $line;
                    }
                }
                file_put_contents($file, $buffer, LOCK_EX);
            }
            else
            {
            }
        }
        else
        {
        }
	}

	public function writeSingleValue($file = null, $var = null, $newValue = null)
	{
        if (!is_null($file) && !is_null($var) && !is_null($newValue))
        {
            $file = APPPATH . 'Config/'.$file.'.php';
            if (file_exists($file))
            {
                $PrimaryKey  = trim('$'.$var);
                $newValue  = $PrimaryKey." = '$newValue'";

                $buffer = "";
                $filePath = file($file);
                foreach ($filePath as $line) {
                    if( preg_match_all('/('.preg_quote($PrimaryKey,'/').')/i', $line, $matches)){
                        $condition = preg_replace('/(s*)([^s]*)(.*)/', '$2', substr(trim($line), 0, -1));
                        $buffer .= str_replace(substr(trim($line), 0, -1), $condition.' '.trim($newValue), $line);
                    } else {
                        $buffer .= $line;
                    }
                }
                file_put_contents($file, $buffer, LOCK_EX);
            }
            else
            {
            }
        }
        else
        {
        }
    }

}
