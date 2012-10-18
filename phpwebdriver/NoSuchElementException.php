<?php
/**
 * Description of NoSuchElementException
 *
 * @author kolec
 */
class NoSuchElementException extends WebDriverException {
    private $json_response;
    public function __construct($json_response) {
        parent::__construct("No such element exception", WebDriverResponseStatus::NoSuchElement, null);
        $this->json_response = $json_response;
    }
}
?>
