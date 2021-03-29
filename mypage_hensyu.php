<?php
mb_internal_encoding("utf8");

session_start();

?>

<!doctype html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" href="mypage_hensyu.css">
    </head>

    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="logout"><a href="login.php">ログアウト</a></div>
        </header>
        
        <main>
            <form action="mypage_update.php" method="post" >
                <div class="mypage">
                    <h2>会員情報</h2>
                    <div class="hello">
                        <?php echo "こんにちは！ ".$_SESSION['name']."さん"; ?>
                    </div>
                    <div class="profile_pic">
                        <img src="<?php echo $_SESSION['picture']; ?>">
                    </div>
                    <div class="hensyu1">
                        <p>氏名 : <input type="text" size="40" value="<?php echo $_SESSION['name']; ?>" name="name"></p>
                        <p>メール : <input type="text" size="40" value="<?php echo $_SESSION['mail']; ?>" name="mail"></p>
                        <p>パスワード : <input type="text" size="40" value="<?php echo $_SESSION['password']; ?>" name="password"></p>
                    </div>
                    <div class="comments">
                        <textarea rows="4" cols="130" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
                    </div>
                    <div class="button4">
                        <input type="submit" size="35" value="この内容に変更する" class="submit_button2"></div>
                </div>
            </form>
        </main>
        <footer>
                (c) 2018 InterNous.All rights reseved
        </footer>
        
    </body>
</html>