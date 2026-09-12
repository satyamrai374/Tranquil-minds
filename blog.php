<?php
// 301 Permanent Redirect to dedicated /blog/ directory
if (!headers_sent() && php_sapi_name() !== 'cli') {
    header("Location: blog/", true, 301);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0;url=blog/">
    <title>Redirecting to Blog...</title>
    <link rel="canonical" href="https://tranquilmindsmentalhealth.com/blog/">
</head>
<body style="font-family: sans-serif; text-align: center; padding: 50px;">
    <p>Redirecting to the <a href="blog/">Tranquil Minds Blog</a>...</p>
    <script>window.location.href = "blog/";</script>
</body>
</html>
