<?php
    function open_session(){
        if (session_status()==PHP_SESSION_NONE) {
            session_start();
        }
    }
    function destroy_session() {
        session_destroy();
    }
    
    function deconnect():bool{
        return deconnect()&& destroy_session();
    }

?>