<?php

/**
 * Check it like this:
 * URLParameterType::isValidName('URL_CONTENT'); // true
 * URLParameterType::isValidValue(content);  //true
 */
abstract class URLParameterType extends BasicEnum {

    const URL_CONTENT = "content";
    const URL_BLOG = "blog";
    const URL_LIST = "list";

}

?>
