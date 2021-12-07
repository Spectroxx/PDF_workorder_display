<?php
/**
 * @author Julien Westman
 * @copyright 2021 Julien Westman 
 * @since  Version 2.01
 * @version Version 0.01
 * @uses To retrieve and apply updates from github repository.
 */

shell_exec('cd tmp/ && git clone https://github.com/Spectroxx/pdf-display.git && mv pdf-display/* ~/pdf.glavin.net/')
?>