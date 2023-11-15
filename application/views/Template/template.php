
<!-- application/views/template.php -->
<!DOCTYPE html>
<html lang="en">
<head>


</head>
<body>
    <div class="container-fluid">
        <header>
            <!-- header -->
            <?php echo @$_header; ?>
        </header>

        <main>
            <!-- content -->
            <?php echo @$_content; ?>
        </main>

        <footer>
            <!-- footer -->
            <?php echo @$_footer; ?>
        </footer>
    </div>

</body>
</html>