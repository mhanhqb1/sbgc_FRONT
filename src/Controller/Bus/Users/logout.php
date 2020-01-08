<?php

if ($this->Auth->logout()) {
    return $this->redirect("{$this->BASE_URL}/login");
}
