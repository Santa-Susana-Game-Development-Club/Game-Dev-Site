<?php 
echo '
<footer>
        <div id="ftr-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12" id="ftr-links">
                        <ul>';
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/inc/nav.php";
include($path);
echo '
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>';
?>