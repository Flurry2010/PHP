<nav>
    Inhaltsverzeichnis
    
    <ul>
        <?PHP
        foreach ($pages as $key => $value){
            echo "<li><a href='?page=$key'>$value</a>";
        }
        
        ?>
    </ul>
    
</nav>