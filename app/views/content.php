<?php include "header.php"; ?>
<!-- Main -->
<div id="page">
    <!-- Main -->
    <div id="main" class="container">
        <div class="row">
            <div class="12u">
                <section>
                    <header>
                        <h2><?php echo $getContent[0]["title"]; ?></h2>
                    </header>
                    <?php echo $getContent[0]["content"]; ?>
                </section>
            </div>

        </div>
    </div>
    <!-- Main -->
</div>
<!-- /Main -->
<?php include "footer.php"; ?>