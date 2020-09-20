<?php
$course = "Basis Data 2";
$title = "Prinsip Kerja Pemrosesan Query dalam Basis Data";
$writer = "Alfian Aldy Hamdani - D121181001";


?>

<html>
    <head>
        <title><?php echo($title);?></title>
        <link rel="stylesheet" type="text/css" href="../assets/styles/style.css">
    </head>

    <body>
        <header>
            <div class="jumbotron">
                <h1><?php echo($title);?></h1>
            </div>
            <nav>
				<ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="#contents">Contents</a></li>
                    <li><a href="#profile card">About</a></li>
				</ul>
			</nav>
        </header>
        
        <main>
            <div id="content">
                <article id="opening" class="card">
                    <p>Opening</p>

                    <h2 id="contents">Table of Contents</h2>
                    <ul>
                        <li><a href="#">Content 1</a></li>
                        <li><a href="#">Content 2</a></li>
                        <li><a href="#">Content 3</a></li>
                    </ul>
                </article>

                <article id="" class="card">
                    <h2>Title</h2>
                    <p>Body</p>
                </article>
            </div>

            <aside>
                <article id="profile card" class="profile card">
                    <h2>Info penulis</h2>
                    <p><?php echo($writer); ?></p>
                </article>
            </aside>
        </main>

        <footer>
            <p><?php echo($course); ?></p>
        </footer>

    </body>
</html>