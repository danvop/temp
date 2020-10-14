<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Files Index</title>
  <style>
  * { margin: 0; padding: 0}
  html, body {
    height: 100%;
    font-family: sans-serif;
  }
  table {
    border: solid black 2px;
  }
  </style>
</head>
<body>

<?php

$path = '.';

$search_names = [
  'index.php',
  'index.html',
  'readme.md'
];

$files = getDirContents($path);

// sort($files);

$projects = [];

//project structure
// path
// link
// readme content

foreach ($files as $item) {
    $project = [];
    $project['path'] = ltrim($item, './');
  
    $di = new DirectoryIterator($item);
    foreach ($di as $file) {
        $filename = $file->getFilename();
        // var_dump($filename);
        if(in_array($filename, ['index.php', 'index.html'])) {
            $project['link'] = $item.'/'.$filename;
        }
        
        if($filename === 'readme.md') {
            $project['description'] = htmlspecialchars(file_get_contents($item.'/'.'readme.md'));
            
        }
    }
    $projects[] = $project; 
}
?>
<table>
<tr>
  <th>Project name</th>
  <th>Description</th>
</tr>
<?php foreach($projects as $item): ?>
<tr>
  <td><a href="<?= $item['link'] ?? '' ?>"><?= $item['path'] ?></a></td>
  <td><?= $item['description'] ?? '' ?></td>
</tr>
<?php endforeach ?>
</table>


</body>
</html>

<?php


//get projects directories

function getDirContents($path) {
  $dir = new DirectoryIterator($path);
    $dirs = array();
    foreach ($dir as $fileinfo) {
        if ($fileinfo->isDir() && !$fileinfo->isDot() &&$fileinfo->getFilename()!=='.git') {
            $dirs[] = $fileinfo->getPathname();
      }
    }
  return $dirs;      
}

?>