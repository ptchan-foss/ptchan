<?php

require 'info.php';

function info_build($action, $settings, $board) {
    info::build($action, $settings);
}

class info {
    public static function build($action, $settings) {
        global $config;

        if ($action == 'all') {
            info::install($settings);
        }
    }

    public static function install($settings) {
        global $config;

        $root_dir  = dirname(dirname(__FILE__)) . $config['dir']['home'];
        $pages_dir = dirname(__FILE__) . '/pages';

        $files = glob($pages_dir . '/*.{html,htm,txt}', GLOB_BRACE);

        $board_list = createBoardlist();

        foreach($files as $file) {
            $in_file = 'themes' . substr($file, strlen($root_dir));
            $out_file = $config['dir']['home'] . basename($file);

            $compiled = Element($in_file,
                array(
                    'settings'  => $settings,
                    'config'    => $config,
                    'boardlist' => $board_list
                ));

            file_write($config['dir']['home'] . $out_file, $compiled);

            _syslog(LOG_INFO, 'Compiled ' . $file . ' to ' . $out_file);
        }
    }
}

?>
