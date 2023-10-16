<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = $_POST['imageData'];
  $data = str_replace('data:image/png;base64,', '', $data);
  $data = str_replace(' ', '+', $data);
  $filedata = base64_decode($data);

  $filename = 'image-' . time() . '.png';
  file_put_contents(  $filename, $filedata);
}
?>
