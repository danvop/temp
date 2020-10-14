<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>jQuery Shield UI Demos</title>
    <link id="themecss" rel="stylesheet" type="text/css" href="//www.shieldui.com/shared/components/latest/css/light/all.min.css" />
    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
</head>
<body class="theme-light">
<div class="container">
    <form method="post" action="/upload/submit" enctype="multipart/form-data">
        <input type="file" id="files" name="files" multiple="multiple" />
        <p style="text-align: right; margin-top: 20px;">
            <input type="submit" value="Upload Files" class="sui-button" />
        </p>
    </form>
</div>
<script type="text/javascript">
    jQuery(function ($) {
        $("#files").shieldUpload();
    });
</script>
<style>
    .container
    {
        max-width: 500px;
        margin: auto;
    }
</style>
</body>
</html>