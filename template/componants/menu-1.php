<!-- <ul class="nav-menu">
    <li class="menu-active"><a href="#hero">Home</a></li>
    <li><a href="#about-us">About</a></li>
    <li><a href="#features">Features</a></li>
    <li><a href="#screenshots">Screenshots</a></li>
    <li><a href="#team">Team</a></li>
    <li><a href="#pricing">Pricing</a></li>
    <li class="menu-has-children"><a href="">Drop Down</a>
    <ul>
        <li><a href="#">Drop Down 1</a></li>
        <li><a href="#">Drop Down 3</a></li>
        <li><a href="#">Drop Down 4</a></li>
        <li><a href="#">Drop Down 5</a></li>
    </ul>
    </li>
    <li><a href="#blog">Blog</a></li>
    <li><a href="#contact">Contact</a></li>
</ul> -->

<ul class="nav-menu">
<?php
    $strSQL = "SELECT * FROM wwt_menus WHERE domain_id = 'null' AND status = '1' AND level = '0' AND menu_position = 'menu_position_1' AND mn_lang_id = '$language'";
    $query = mysqli_query($conn, $strSQL);
    // echo $strSQL;
    if($query){
        while($row = mysqli_fetch_array($query)){
        $rid = $row['ID'];
        $strSQL = "SELECT * FROM wwt_menus WHERE domain_id = 'null' AND status = '1' AND level = '1' AND parent_id = '$rid' AND menu_position = 'menu_position_1' AND mn_lang_id = '$language' ORDER BY seq";
        $query2 = mysqli_query($conn, $strSQL);
        if(($query2) && (mysqli_num_rows($query2) > 0)){
            ?>
            <li class="menu-has-children">
                <a href="#" class="th">
                    <?php echo $row['menu_name'];?>
                </a>
                <ul>
                <?php
                while($row2 = mysqli_fetch_array($query2)){
                ?><li><a class="th" href="<?php echo $row2['url'];?>" target="<?php echo $row2['url_target'];?>"><?php echo $row2['menu_name'];?></a></li><?php
                }
                ?>
                </ul>
            </li>
            <?php
        }else{
            ?>
            <li class="<?php add_class_active('main-menu', $row['url']); ?>">
                <a class="th" href="<?php echo $row['url'];?>" ><?php echo $row['menu_name'];?> <span class="sr-only">(current)</span></a>
            </li>
            <?php
        }
        }
    }
?>
</ul>