<?php

class SimpleImage {

    var $image;
    var $image_type;

    function load($filename) {
        $image_info = getimagesize($filename);
        $this->image_type = $image_info[2];
        if( $this->image_type == IMAGETYPE_JPEG ) {
            $this->image = imagecreatefromjpeg($filename);
        } elseif( $this->image_type == IMAGETYPE_GIF ) {
            $this->image = imagecreatefromgif($filename);
        } elseif( $this->image_type == IMAGETYPE_PNG ) {
            $this->image = imagecreatefrompng($filename);
        }
    }
    function save($filename, $image_type=IMAGETYPE_JPEG, $compression=75, $permissions=null) {
        if( $image_type == IMAGETYPE_JPEG ) {
            imagejpeg($this->image,$filename,$compression);
        } elseif( $image_type == IMAGETYPE_GIF ) {
            imagegif($this->image,$filename);
        } elseif( $image_type == IMAGETYPE_PNG ) {
            imagepng($this->image,$filename);
        }
        if( $permissions != null) {
            chmod($filename,$permissions);
        }
    }
    function output($image_type=IMAGETYPE_JPEG) {
        if( $image_type == IMAGETYPE_JPEG ) {
            imagejpeg($this->image);
        } elseif( $image_type == IMAGETYPE_GIF ) {
            imagegif($this->image);
        } elseif( $image_type == IMAGETYPE_PNG ) {
            imagepng($this->image);
        }
    }
    function getWidth() {
        return imagesx($this->image);
    }
    function getHeight() {
        return imagesy($this->image);
    }
    function resizeToHeight($height) {
        $ratio = $height / $this->getHeight();
        $width = $this->getWidth() * $ratio;
        $this->resize($width,$height);
    }
    function resizeToWidth($width) {
        $ratio = $width / $this->getWidth();
        $height = $this->getheight() * $ratio;
        $this->resize($width,$height);
    }
    function scale($scale) {
        $width = $this->getWidth() * $scale/100;
        $height = $this->getheight() * $scale/100;
        $this->resize($width,$height);
    }
    function resize($width,$height) {
        $new_image = imagecreatetruecolor($width, $height);
        imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
        $this->image = $new_image;
    }
}

define("IMG_BIG", PUBLIC_DIR . "/images/gallery_img/big/");
define("IMG_SMALL", PUBLIC_DIR . "/images/gallery_img/small/");

$say = '';


function check(&$say)  {
    if($_FILES["myfile"]['type'] != 'image/gif' && $_FILES["myfile"]['type'] != 'image/jpeg' &&
        $_FILES["myfile"]['type'] != 'image/jpg' && $_FILES["myfile"]['type'] != 'image/png') {
        $say = "Sorry, we only accept GIF and JPEG images";
        return false;
    }
    $blacklist = array(".php", ".phtml", ".php3", ".php4");
    foreach ($blacklist as $item) {
        if(preg_match("/$item\$/i", $_FILES["myfile"]['name'])) {
            $say = "We do not allow uploading PHP files";
            return false;
        }
    }
    // Проверка на размер файла
    if($_FILES["myfile"]['size'] > 1024 * 5 * 1024) {
        $say = "Размер не должеб превышать 5 mb";
        return false;
    }
    return true;
}
if (isset($_POST['load'])) {
    $path = IMG_BIG . $_FILES["myfile"]["name"];


    if (check($say) && move_uploaded_file($_FILES["myfile"]["tmp_name"], $path)) {
        $image = new SimpleImage();
        $image->load(IMG_BIG . $_FILES["myfile"]["name"]);
        $image->resize(150, 100);
        $image->save(IMG_SMALL . $_FILES["myfile"]["name"]);
       // header("Location: /gall");
    }

   addImg($_FILES["myfile"]["name"]);

}

// Получение всех изображений из базы данных
function getImg() {
    return getAssocResult("SELECT * FROM image ORDER BY views DESC");
}

// Получение одного изображения из БД по его id
function getOneImg($id) {

    $sql = "SELECT img FROM image WHERE id = {$id}";
    $img = getAssocResult($sql);
    return $img[0]['img'];
}
function getViewsImg($id) {
    executeQuery("UPDATE image SET views=views+1 WHERE id={$id}");
    return getAssocResult("SELECT views FROM image WHERE id = {$id}")[0]['views'];
}
function addImg($name) {
    executeQuery("INSERT INTO image (img) VALUES ('{$name}')");
}