<?php

  if (!function_exists('github_fetch')){
    /** 
    * Fetch the URI for the asset in this repo
    * 
    * @param string $uri URI starts with main (/...)
    * @return string The raw.githubusercontent.com URI
    */
    function github_fetch(String $uri){
      return env('GITHUB_FETCH') . $uri;
    }
  }

  if (!function_exists('github_fetch_content')){
    /** 
    * Fetch the content of the given URI
    * 
    * @param string $uri URI starts with main (/...)
    * @return string The raw.githubusercontent.com file_get_contents()
    */
    function github_fetch_content(String $uri){
      return file_get_contents(env('GITHUB_FETCH') . $uri);
    }
  }