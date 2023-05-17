<?php
namespace PHPMVC\LIB;


trait Helper
{
    public function redirect($path)
    {
        session_write_close();
        header('Location: ' . $path);
        exit;
    }
    

    public function writeToFile($sFileName, $text)
    {
        $myfile = fopen(APP_PATH . DS . $sFileName, "a") or die("Unable to open file!");
        // $txt = "<?php echo 'hello from new file';\n";
        // fwrite($myfile, app_path);
        fwrite($myfile, $text . PHP_EOL);
        fclose($myfile);
    }
}