<?php
use PHPUnit\Framework\TestCase;
include __DIR__."./../10/filter-array.php";

class Q10_FilterFiles extends TestCase {
    static $files = [
        '/usr/share/nginx/wordpress/wp-content/themes/index.php',
        '/usr/share/nginx/wordpress/wp-content/themes/mytheme.php',
        '/usr/share/nginx/wordpress/wp-content/plugins/myplugin.php',
        '/usr/share/nginx/wordpress/wp-content/plugins/akismet.php',
        '/usr/share/nginx/wordpress/wp-content/uploads/november.jpg',
    ];
    
    public function testFilterBoth(){
        $this->assertSame([
            '/usr/share/nginx/wordpress/wp-content/themes/index.php',
            '/usr/share/nginx/wordpress/wp-content/themes/mytheme.php',
            '/usr/share/nginx/wordpress/wp-content/plugins/akismet.php'
            ], 
            filterFiles(self::$files, [
            '/usr/share/nginx/wordpress/wp-content/uploads',
            '/usr/share/nginx/wordpress/wp-content/plugins/myplugin.php',
        ])); 
        
    }


    public function testFilterFiles(){
        $this->assertSame([
                '/usr/share/nginx/wordpress/wp-content/themes/mytheme.php',
                '/usr/share/nginx/wordpress/wp-content/plugins/myplugin.php',
            ], 
            filterFiles(self::$files, [
                '/usr/share/nginx/wordpress/wp-content/themes/index.php',
                '/usr/share/nginx/wordpress/wp-content/plugins/akismet.php',
                '/usr/share/nginx/wordpress/wp-content/uploads/november.jpg',
            ])
        ); 
        
    }
    
    public function testFilterPath(){
        $this->assertSame([
                '/usr/share/nginx/wordpress/wp-content/uploads/november.jpg',
            ], 
            filterFiles(self::$files, [
                '/usr/share/nginx/wordpress/wp-content/themes',
                '/usr/share/nginx/wordpress/wp-content/plugins',
            ])
        );
    }
}