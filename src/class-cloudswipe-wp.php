<?php

class CloudSwipe_Wp {
    public static function set_secret_key( $secret_key ) {
        Json_Api_Wp_Resource::auth( $secret_key );
    }
}
