<nav>
    <h3>Inhaltsverzeichnis</h3>
    
    <ul>
        <?PHP
        foreach ($pages as $key => $value) {
            if ($currentPage == $key) {
            echo "<li><a href='?page=$key'><b>$value</b></a>";
        }else{
                echo "<li><a href='?page=$key'>$value</a>";
            }
        }
        
        ?>
    </ul>
    
</nav>