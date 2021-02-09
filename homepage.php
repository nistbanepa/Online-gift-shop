<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online-Store</title>
    <link rel="stylesheet" href="/Online-Store/css/styles.css">
</head>
<body>
    <div class="fix">
    <table>
        <tr>
            <th><a href="homepage.php">Home</a></th>
            <th><a href="item.php">Items</a></th>
            <th><a href="about.php"> About Us</a></th>
            <th><a href="contacts.php"> Contacts </a></th>
            <th><a href="signin.php"> SignIn</a></th>
            <th><a href="logout.php"> LogOut</a></th>
            <th>
                <form action="item.php">
                    <input class="btn" type="text" placeholder="Search..." name="search">
                    <button type="submit">GO </button>
                </form>
            </th>
        </tr>
    </table>
</div>
    <img class="image" src="/Online-store/images/gift.jpg">
    <br><br>
    <h1>SOME GIFTS</h1>
    <br>
    
    <p class="right">
        <b>CUPS</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
        a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
        of Lorem Ipsum.
    </p><br>
    <img class="r-img" src="/Online-store/images/cup.jpg">
    <p class="left">
        <b>PILLOWS</b> to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
        literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
        College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
        going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes
        from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
        written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first
        line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
    </p><br>
    <img class="l-img" src="/Online-store/images/pillows.jpg">
    <p class="right">
        <b>DREAM CATCHER</b> is a long established fact that a reader will be distracted by the readable content of a page when looking at
        its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
        opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing
        packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum'
        will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
        accident, sometimes on purpose (injected humour and the like).
    </p><br>
    <img class="r-img" src="/Online-store/images/drm catcher.jpg">
    <p class="left">
        <b>PILLOW</b> are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some
        form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a
        passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the
        Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true
        generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
        structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from
        repetition, injected humour, or non-characteristic words etc.
    </p>
    <img class="l-img" src="/Online-store/images/pillow.jpg"><hr>
</body>
</html>