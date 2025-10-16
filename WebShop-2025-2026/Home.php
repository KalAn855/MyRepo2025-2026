<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="ShopStyles.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once ("CommonCode.php");
    NavigationBar("Home");
    ?>
    <div class="welcome" style="background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%); border-radius: 18px; box-shadow: 0 6px 24px rgba(60,72,100,0.12); padding: 48px 32px; margin: 48px auto 0 auto; max-width: 540px; text-align: center;">
        <h1 style="font-family: 'Segoe UI', Arial, sans-serif; font-size: 2.8rem; color: #3b3b5c; margin-bottom: 18px; letter-spacing: 1px;">
            Welcome to Our Web Shop!
        </h1>
        <p style="font-family: 'Segoe UI', Arial, sans-serif; font-size: 1.25rem; color: #5a5a7a; margin-bottom: 0;">
            Browse our <span style="color: #6366f1; font-weight: 600;">products</span> and enjoy your shopping experience.
        </p>
    </div>
</body>
</html>