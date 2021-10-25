<?php

include_once ('connect.php');

if (isset($_POST['submit1'])) {
    
    if ($_FILES['uploadFile']['name'] != NULL) {
        
        // Kiểm tra file up lên có phải là ảnh không
        if ($_FILES['uploadFile']['type'] == "video/mp4" || $_FILES['uploadFile']['type'] == "video/mkv" ) {
            
            // Nếu là ảnh tiến hành code upload
            $title=$_POST['title'];
            $other=$_POST['other'];
            $bg=$_POST['image'];
            $path2="../img/";
            $path3 = "./img/";
            $tmp_name1 = $_FILES['image']['tmp_name'];
            $name1 = $_FILES['image']['name'];
            $content=$_POST['summary'];
            $id_cat=$_POST['category'];
            $path = "../videos/"; // Ảnh sẽ lưu vào thư mục images
            $path1="./videos/";
            $tmp_name = $_FILES['uploadFile']['tmp_name'];
            $name = $_FILES['uploadFile']['name'];
            
            if(empty($title)){
                echo 'Title is required';
            }
            move_uploaded_file($tmp_name1,$path2 . $name1);
            $image_url1 = $path3 . $name1;
            // Upload ảnh vào thư mục images
            move_uploaded_file($tmp_name, $path . $name);
            $image_url = $path1 . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
                                      // Insert ảnh vào cơ sở dữ liệu
            $sql = "INSERT INTO `anime` (`name`, `summary`,`location`,`other_name`, `image`,`id_cat`) VALUES ('$title','$content','$image_url','$other','$image_url1','$id_cat')";
            $smt = mysqli_prepare($connect, $sql);
            if (mysqli_stmt_execute($smt) ) {
                echo 'Thêm thành công ảnh';
                header("Location:./index.php");
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo 'Can not add photos';
            }
        }
        else {
            // Không phải file ảnh
            echo "The file type is not an image";
        }
    } else {
        echo "
        <script>
            alert(' Chưa chọn file ảnh');
        </script>
        ";
    }
}

?>