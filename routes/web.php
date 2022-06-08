<?php

Route::GET("/", function(){
    return $this->response->writeBody("<h3>Hello World</h3>");
});
