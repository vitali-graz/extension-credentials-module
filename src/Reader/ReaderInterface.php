<?php

namespace CredentialsReader\Reader;

interface ReaderInterface
{

    /**
     * @return array
     */
    public function loadCredentials();

    /**
     * @return array
     */
    public function getCredentials();

    /**
     * @return bool
     */
    public function validate();
}
